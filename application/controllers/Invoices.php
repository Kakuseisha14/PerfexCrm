<?php



defined('BASEPATH') or exit('No direct script access allowed');



class Invoices extends AdminController

{

    public function __construct()

    {

        parent::__construct();

        $this->load->model('invoices_model');

        $this->load->model('credit_notes_model');

    }



    /* Get all invoices in case user go on index page */

    public function index($id = '')

    {
        
        $this->list_invoices($id);

    }



    /* List all invoices datatables */

    public function list_invoices($id = '')

    {
        
        

        if (!has_permission('invoices', '', 'view')

            && !has_permission('invoices', '', 'view_own')

            && get_option('allow_staff_view_invoices_assigned') == '0') {

            access_denied('invoices');

        }



        close_setup_menu();



        $this->load->model('payment_modes_model');

        $data['payment_modes']        = $this->payment_modes_model->get('', [], true);

        $data['invoiceid']            = $id;

        $data['title']                = _l('invoices');

        $data['invoices_years']       = $this->invoices_model->get_invoices_years();

        $data['invoices_sale_agents'] = $this->invoices_model->get_sale_agents();

        $data['invoices_statuses']    = $this->invoices_model->get_statuses();

        $data['bodyclass']            = 'invoices-total-manual';

        $this->load->view('admin/invoices/manage', $data);

    }



    /* List all recurring invoices */

    public function recurring($id = '')

    {

        if (!has_permission('invoices', '', 'view')

            && !has_permission('invoices', '', 'view_own')

            && get_option('allow_staff_view_invoices_assigned') == '0') {

            access_denied('invoices');

        }



        close_setup_menu();



        $data['invoiceid']            = $id;

        $data['title']                = _l('invoices_list_recurring');

        $data['invoices_years']       = $this->invoices_model->get_invoices_years();

        $data['invoices_sale_agents'] = $this->invoices_model->get_sale_agents();

        $this->load->view('admin/invoices/recurring/list', $data);

    }



    public function table($clientid = '')

    {

        if (!has_permission('invoices', '', 'view')

            && !has_permission('invoices', '', 'view_own')

            && get_option('allow_staff_view_invoices_assigned') == '0') {

            ajax_access_denied();

        }



        $this->load->model('payment_modes_model');

        $data['payment_modes'] = $this->payment_modes_model->get('', [], true);



        $this->app->get_table_data(($this->input->get('recurring') ? 'recurring_invoices' : 'invoices'), [

            'clientid' => $clientid,

            'data'     => $data,

        ]);

    }



    public function client_change_data($customer_id, $current_invoice = '')

    {

        if ($this->input->is_ajax_request()) {

            $this->load->model('projects_model');

            $data                     = [];

            $data['billing_shipping'] = $this->clients_model->get_customer_billing_and_shipping_details($customer_id);

            $data['client_currency']  = $this->clients_model->get_customer_default_currency($customer_id);



            $data['customer_has_projects'] = customer_has_projects($customer_id);

            $data['billable_tasks']        = $this->tasks_model->get_billable_tasks($customer_id);



            if ($current_invoice != '') {

                $this->db->select('status');

                $this->db->where('id', $current_invoice);

                $current_invoice_status = $this->db->get(db_prefix() . 'invoices')->row()->status;

            }



            $_data['invoices_to_merge'] = !isset($current_invoice_status) || (isset($current_invoice_status) && $current_invoice_status != Invoices_model::STATUS_CANCELLED) ? $this->invoices_model->check_for_merge_invoice($customer_id, $current_invoice) : [];



            $data['merge_info'] = $this->load->view('admin/invoices/merge_invoice', $_data, true);



            $this->load->model('currencies_model');



            $__data['expenses_to_bill'] = !isset($current_invoice_status) || (isset($current_invoice_status) && $current_invoice_status != Invoices_model::STATUS_CANCELLED) ? $this->invoices_model->get_expenses_to_bill($customer_id) : [];



            $data['expenses_bill_info'] = $this->load->view('admin/invoices/bill_expenses', $__data, true);

            echo json_encode($data);

        }

    }



    public function update_number_settings($id)

    {

        $response = [

            'success' => false,

            'message' => '',

        ];

        if (has_permission('invoices', '', 'edit')) {

            $affected_rows = 0;



            $this->db->where('id', $id);

            $this->db->update(db_prefix() . 'invoices', [

                'prefix' => $this->input->post('prefix'),

            ]);

            if ($this->db->affected_rows() > 0) {

                $affected_rows++;

            }



            if ($affected_rows > 0) {

                $response['success'] = true;

                $response['message'] = _l('updated_successfully', _l('invoice'));

            }

        }

        echo json_encode($response);

        die;

    }



    public function validate_invoice_number()

    {

        $isedit          = $this->input->post('isedit');

        $number          = $this->input->post('number');

        $date            = $this->input->post('date');

        $original_number = $this->input->post('original_number');

        $number          = trim($number);

        $number          = ltrim($number, '0');



        if ($isedit == 'true') {

            if ($number == $original_number) {

                echo json_encode(true);

                die;

            }

        }



        if (total_rows('invoices', [

            'YEAR(date)' => date('Y', strtotime(to_sql_date($date))),

            'number' => $number,

            'status !=' => Invoices_model::STATUS_DRAFT,

        ]) > 0) {

            echo 'false';

        } else {

            echo 'true';

        }

    }



    public function add_note($rel_id)

    {

        if ($this->input->post() && user_can_view_invoice($rel_id)) {

            $this->misc_model->add_note($this->input->post(), 'invoice', $rel_id);

            echo $rel_id;

        }

    }



    public function get_notes($id)

    {

        if (user_can_view_invoice($id)) {

            $data['notes'] = $this->misc_model->get_notes($id, 'invoice');

            $this->load->view('admin/includes/sales_notes_template', $data);

        }

    }



    public function pause_overdue_reminders($id)

    {

        if (has_permission('invoices', '', 'edit')) {

            $this->db->where('id', $id);

            $this->db->update(db_prefix() . 'invoices', ['cancel_overdue_reminders' => 1]);

        }

        redirect(admin_url('invoices/list_invoices/' . $id));

    }



    public function resume_overdue_reminders($id)

    {

        if (has_permission('invoices', '', 'edit')) {

            $this->db->where('id', $id);

            $this->db->update(db_prefix() . 'invoices', ['cancel_overdue_reminders' => 0]);

        }

        redirect(admin_url('invoices/list_invoices/' . $id));

    }



    public function mark_as_cancelled($id)

    {

        if (!has_permission('invoices', '', 'edit') && !has_permission('invoices', '', 'create')) {

            access_denied('invoices');

        }



        $success = $this->invoices_model->mark_as_cancelled($id);



        if ($success) {

            set_alert('success', _l('invoice_marked_as_cancelled_successfully'));

        }



        redirect(admin_url('invoices/list_invoices/' . $id));

    }



    public function unmark_as_cancelled($id)

    {

        if (!has_permission('invoices', '', 'edit') && !has_permission('invoices', '', 'create')) {

            access_denied('invoices');

        }

        $success = $this->invoices_model->unmark_as_cancelled($id);

        if ($success) {

            set_alert('success', _l('invoice_unmarked_as_cancelled'));

        }

        redirect(admin_url('invoices/list_invoices/' . $id));

    }



    public function copy($id)

    {

        if (!$id) {

            redirect(admin_url('invoices'));

        }

        if (!has_permission('invoices', '', 'create')) {

            access_denied('invoices');

        }

        $new_id = $this->invoices_model->copy($id);

        if ($new_id) {

            set_alert('success', _l('invoice_copy_success'));

            redirect(admin_url('invoices/invoice/' . $new_id));

        } else {

            set_alert('success', _l('invoice_copy_fail'));

        }

        redirect(admin_url('invoices/invoice/' . $id));

    }



    public function get_merge_data($id)

    {

        $invoice = $this->invoices_model->get($id);

        $cf      = get_custom_fields('items');



        $i = 0;



        foreach ($invoice->items as $item) {

            $invoice->items[$i]['taxname']          = get_invoice_item_taxes($item['id']);

            $invoice->items[$i]['long_description'] = clear_textarea_breaks($item['long_description']);

            $this->db->where('item_id', $item['id']);

            $rel              = $this->db->get(db_prefix() . 'related_items')->result_array();

            $item_related_val = '';

            $rel_type         = '';

            foreach ($rel as $item_related) {

                $rel_type = $item_related['rel_type'];

                $item_related_val .= $item_related['rel_id'] . ',';

            }

            if ($item_related_val != '') {

                $item_related_val = substr($item_related_val, 0, -1);

            }

            $invoice->items[$i]['item_related_formatted_for_input'] = $item_related_val;

            $invoice->items[$i]['rel_type']                         = $rel_type;



            $invoice->items[$i]['custom_fields'] = [];



            foreach ($cf as $custom_field) {

                $custom_field['value']                 = get_custom_field_value($item['id'], $custom_field['id'], 'items');

                $invoice->items[$i]['custom_fields'][] = $custom_field;

            }

            $i++;

        }

        echo json_encode($invoice);

    }



    public function get_bill_expense_data($id)

    {

        $this->load->model('expenses_model');

        $expense = $this->expenses_model->get($id);



        $expense->qty              = 1;

        $expense->long_description = clear_textarea_breaks($expense->description);

        $expense->description      = $expense->name;

        $expense->rate             = $expense->amount;

        if ($expense->tax != 0) {

            $expense->taxname = [];

            array_push($expense->taxname, $expense->tax_name . '|' . $expense->taxrate);

        }

        if ($expense->tax2 != 0) {

            array_push($expense->taxname, $expense->tax_name2 . '|' . $expense->taxrate2);

        }

        echo json_encode($expense);

    }



    /* Add new invoice or update existing */

    public function invoice($id = '')

    {

        if ($this->input->post()) {

            $invoice_data = $this->input->post();

            if ($id == '') {

                if (!has_permission('invoices', '', 'create')) {

                    access_denied('invoices');

                }



                if (hooks()->apply_filters('validate_invoice_number', true)) {

                    $number = ltrim($invoice_data['number'], '0');

                    if (total_rows('invoices', [

                        'YEAR(date)' => (int) date('Y', strtotime(to_sql_date($invoice_data['date']))),

                        'number'     => $number,

                        'status !='  => Invoices_model::STATUS_DRAFT,

                    ])) {

                        set_alert('warning', _l('invoice_number_exists'));



                        redirect(admin_url('invoices/invoice'));

                    }

                }



                $id = $this->invoices_model->add($invoice_data);

                if ($id) {

                    set_alert('success', _l('added_successfully', _l('invoice')));

                    $redUrl = admin_url('invoices/list_invoices/' . $id);



                    if (isset($invoice_data['save_and_record_payment'])) {

                        $this->session->set_userdata('record_payment', true);

                    } elseif (isset($invoice_data['save_and_send_later'])) {

                        $this->session->set_userdata('send_later', true);

                    }



                    redirect($redUrl);

                }

            } else {

                if (!has_permission('invoices', '', 'edit')) {

                    access_denied('invoices');

                }



                // If number not set, is draft

                if (hooks()->apply_filters('validate_invoice_number', true) && isset($invoice_data['number'])) {

                    $number = trim(ltrim($invoice_data['number'], '0'));

                    if (total_rows('invoices', [

                        'YEAR(date)' => (int) date('Y', strtotime(to_sql_date($invoice_data['date']))),

                        'number'     => $number,

                        'status !='  => Invoices_model::STATUS_DRAFT,

                        'id !='      => $id,

                    ])) {

                        set_alert('warning', _l('invoice_number_exists'));



                        redirect(admin_url('invoices/invoice/' . $id));

                    }

                }

                $success = $this->invoices_model->update($invoice_data, $id);

                if ($success) {

                    set_alert('success', _l('updated_successfully', _l('invoice')));

                }



                redirect(admin_url('invoices/list_invoices/' . $id));

            }

        }

        if ($id == '') {

            $title                  = _l('create_new_invoice');

            $data['billable_tasks'] = [];

        } else {

            $invoice = $this->invoices_model->get($id);



            if (!$invoice || !user_can_view_invoice($id)) {

                blank_page(_l('invoice_not_found'));

            }



            $data['invoices_to_merge'] = $this->invoices_model->check_for_merge_invoice($invoice->clientid, $invoice->id);

            $data['expenses_to_bill']  = $this->invoices_model->get_expenses_to_bill($invoice->clientid);



            $data['invoice']        = $invoice;

            $data['edit']           = true;

            $data['billable_tasks'] = $this->tasks_model->get_billable_tasks($invoice->clientid, !empty($invoice->project_id) ? $invoice->project_id : '');



            $title = _l('edit', _l('invoice_lowercase')) . ' - ' . format_invoice_number($invoice->id);

        }



        if ($this->input->get('customer_id')) {

            $data['customer_id'] = $this->input->get('customer_id');

        }



        $this->load->model('payment_modes_model');

        $data['payment_modes'] = $this->payment_modes_model->get('', [

            'expenses_only !=' => 1,

        ]);



        $this->load->model('taxes_model');

        $data['taxes'] = $this->taxes_model->get();

        $this->load->model('invoice_items_model');



        $data['ajaxItems'] = false;

        if (total_rows(db_prefix() . 'items') <= ajax_on_total_items()) {

            $data['items'] = $this->invoice_items_model->get_grouped();

        } else {

            $data['items']     = [];

            $data['ajaxItems'] = true;

        }

        $data['items_groups'] = $this->invoice_items_model->get_groups();



        $this->load->model('currencies_model');

        $data['currencies'] = $this->currencies_model->get();



        $data['base_currency'] = $this->currencies_model->get_base_currency();



        $data['staff']     = $this->staff_model->get('', ['active' => 1]);

        $data['title']     = $title;

        $data['bodyclass'] = 'invoice';

        $this->load->view('admin/invoices/invoice', $data);

    }



    /* Get all invoice data used when user click on invoiec number in a datatable left side*/

    public function get_invoice_data_ajax($id)

    {
        

        if (!has_permission('invoices', '', 'view')

            && !has_permission('invoices', '', 'view_own')

            && get_option('allow_staff_view_invoices_assigned') == '0') {

            echo _l('access_denied');

            die;

        }



        if (!$id) {

            die(_l('invoice_not_found'));

        }



        $invoice = $this->invoices_model->get($id);



        if (!$invoice || !user_can_view_invoice($id)) {

            echo _l('invoice_not_found');

            die;

        }



        $template_name = 'invoice_send_to_customer';



        if ($invoice->sent == 1) {

            $template_name = 'invoice_send_to_customer_already_sent';

        }



        $data = prepare_mail_preview_data($template_name, $invoice->clientid);



        // Check for recorded payments

        $this->load->model('payments_model');

        $data['invoices_to_merge']          = $this->invoices_model->check_for_merge_invoice($invoice->clientid, $id);

        $data['members']                    = $this->staff_model->get('', ['active' => 1]);

        $data['payments']                   = $this->payments_model->get_invoice_payments($id);

        $data['activity']                   = $this->invoices_model->get_invoice_activity($id);

        $data['totalNotes']                 = total_rows(db_prefix() . 'notes', ['rel_id' => $id, 'rel_type' => 'invoice']);

        $data['invoice_recurring_invoices'] = $this->invoices_model->get_invoice_recurring_invoices($id);



        $data['applied_credits'] = $this->credit_notes_model->get_applied_invoice_credits($id);

        // This data is used only when credit can be applied to invoice

        if (credits_can_be_applied_to_invoice($invoice->status)) {

            $data['credits_available'] = $this->credit_notes_model->total_remaining_credits_by_customer($invoice->clientid);



            if ($data['credits_available'] > 0) {

                $data['open_credits'] = $this->credit_notes_model->get_open_credits($invoice->clientid);

            }



            $customer_currency = $this->clients_model->get_customer_default_currency($invoice->clientid);

            $this->load->model('currencies_model');



            if ($customer_currency != 0) {

                $data['customer_currency'] = $this->currencies_model->get($customer_currency);

            } else {

                $data['customer_currency'] = $this->currencies_model->get_base_currency();

            }

        }



        $data['invoice'] = $invoice;



        $data['record_payment'] = false;

        $data['send_later']     = false;

       



        if ($this->session->has_userdata('record_payment')) {

            $data['record_payment'] = true;

            $this->session->unset_userdata('record_payment');

        } elseif ($this->session->has_userdata('send_later')) {

            $data['send_later'] = true;

            $this->session->unset_userdata('send_later');

        }

       

        $e='si';
if ($e=='si') {
    $this->load->model('invoices_model');
   
    $idFactura=$id;
    $datos_dgi = $this->invoices_model->obtenerRespuestasApiPorIdFactura($idFactura);
    $data['datos_dgi'] = $datos_dgi;
    
}

        
        

        $this->load->view('admin/invoices/invoice_preview_template', $data);

    }



    public function apply_credits($invoice_id)

    {

        $total_credits_applied = 0;

        foreach ($this->input->post('amount') as $credit_id => $amount) {

            $success = $this->credit_notes_model->apply_credits($credit_id, [

            'invoice_id' => $invoice_id,

            'amount'     => $amount,

        ]);

            if ($success) {

                $total_credits_applied++;

            }

        }



        if ($total_credits_applied > 0) {

            update_invoice_status($invoice_id, true);

            set_alert('success', _l('invoice_credits_applied'));

        }

        redirect(admin_url('invoices/list_invoices/' . $invoice_id));

    }



    public function get_invoices_total()

    {

        if ($this->input->post()) {

            load_invoices_total_template();

        }

    }



    /* Record new inoice payment view */

    public function record_invoice_payment_ajax($id)

    {

        $this->load->model('payment_modes_model');

        $this->load->model('payments_model');

        $data['payment_modes'] = $this->payment_modes_model->get('', [

            'expenses_only !=' => 1,

        ]);

        $data['invoice']  = $this->invoices_model->get($id);

        $data['payments'] = $this->payments_model->get_invoice_payments($id);

        $this->load->view('admin/invoices/record_payment_template', $data);

    }



    /* This is where invoice payment record $_POST data is send */

    public function record_payment()

    {

      

        ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


        if (!has_permission('payments', '', 'create')) {

            access_denied('Record Payment');

        }

        if ($this->input->post()) {

            
            //print_r($this->input->post());
           
            $this->load->model('payments_model');
            $this->load->model('invoices_model');
            $this->load->model('Clients_model');
            

            $id = $this->payments_model->process_payment($this->input->post(), '');//Con esto obtenemos los datos del pago
            
            $datos_del_invoice = $this->invoices_model->get($this->input->post("invoiceid"));//Con esto obtenemos los datos de la factura

            $datosDelPagos = $this->payments_model->get_invoice_payments($datos_del_invoice->id);//Con esto obtenemos los datos del pago

            $datosDeLosItems = $this->invoices_model->get_invoice_items($datos_del_invoice->id);//Con esto obtenemos los datos del pago

            foreach ($datosDeLosItems as $key => $items) {
                
            }

            foreach ($datosDelPagos as $key => $datosDelPago) {
                
            }
            //$MetodosDePago = $this->payments_model->getMethodsPayment($datosDelPago['paymentmode']);//Con esto obtenemos los datos del pago


            $datos_del_cliente = $this->Clients_model->get($datos_del_invoice->clientid);//obtenemos datos del cliente vinculados a la factura

            $datos_del_cliente_contactos = $this->Clients_model->getDateContact($datos_del_cliente->userid);//obtenemos datos del cliente vinculados a la factura

            $datosTablaContenidosVentas = $this->invoices_model->getCustomFieldsValues($datos_del_invoice->id);


            if (!empty($datosTablaContenidosVentas)) {
                foreach ($datosTablaContenidosVentas as $customField) {
                    if (isset($customField->value)) {
                        $value = $customField->value;
            
                        if ($value == 'Contado') {
                            $tablaCondicionVenta = 1;
                        } elseif ($value == 'Crédito/Plazo') {
                            $tablaCondicionVenta = 2;
                        } elseif ($value == 'Mixto') {
                            $tablaCondicionVenta = 3;
                        }
                    }
                }
            }

            

               //var_dump($datos_del_invoice);
            /*print_r($datos_del_invoice);
            echo '<br><br><br> Eduar <br><br><br>';
            echo $datos_del_invoice->client->vat;
            echo '<br><br><br> Eduar <br><br><br>';
            echo $datos_del_invoice->id;
            echo '<br><br><br> Eduar <br><br><br>';
            echo $datos_del_invoice->clientid;
            *//*
            echo '<br><br><br> Eduar <br><br><br>';
            echo $datos_del_cliente->vat;//155680264-2-2019

            echo '<br><br><br> Eduar <br><br><br>';
            if (isset($value)) {
                echo $value;
            } else {
                echo 'Valor no encontrado';
            }
            echo '<br><br><br> Eduar <br><br><br>';
            echo $tablaCondicionVenta;
            echo '<br><br><br> Eduar <br><br><br>';
            var_dump($datosDelPago);
            echo '<br><br><br> Eduar <br><br><br>';
            echo $datosDelPago['id'];
            foreach ($datosDeLosItems as $key => $items) {
                
        
      
       
                $datosTaxItem=$this->invoices_model->getTaxItem($items->id);
                
                
                //echo $datosTaxItem->taxname;
        
                $ItemCodigoImpuesto=03;
                $CodigoPorcentajeItem=03;
                if ($datosTaxItem->taxname=='I.T.B.M.S.') {
                    $ItemCodigoImpuesto=01;
                    $CodigoPorcentajeItem=01;
                }
                if ($datosTaxItem->taxname=='I.S.C') {
                    $ItemCodigoImpuesto=02;
                    $CodigoPorcentajeItem=0.1325;
                }
                $valor=($datosTaxItem->taxrate/100)*$items->rate;
                
            
                  echo '<Detalle id="'.$items->id.'"> 
                      <Cantidad>'.$items->qty.'</Cantidad>
                      <Descuento>0</Descuento>
                      <SubTotal>'.$items->rate.'</SubTotal>
                      <Producto>
                          <Codigo>'.$items->id.'</Codigo>
                          <Descripcion>'.$items->description.'</Descripcion>
                         <UnidadMedida>lb</UnidadMedida>
                         <ValorUnitario>'.$items->rate.'</ValorUnitario>
                      </Producto>
                      <Impuestos>
                          <Impuesto>
                              <CodigoImpuesto>'.$ItemCodigoImpuesto.'</CodigoImpuesto>
                              <CodigoPorcentaje>'.$CodigoPorcentajeItem.'</CodigoPorcentaje>
                              <Porcentaje>'.$datosTaxItem->taxrate.'</Porcentaje>
                              <BaseImponible>'.$items->rate.'</BaseImponible>
                              <Valor>'.$valor.'</Valor>
                         </Impuesto>
                      </Impuestos>
                  </Detalle>';
                }
            //echo $id->amount;
            //echo $this->input->post("invoiceid");
            return;*/

            if ($id) {

                // Obtén la fecha del input




$date = DateTime::createFromFormat('Y-m-d', $this->input->post('date'));
$formatted_date = $date->format('Y-m-d\TH:i:s');
//echo $formatted_date;
//return;

$NumeroDocumento=$datos_del_invoice->id;
$NumeroDocumento=0000000000;
$subtotal=$datos_del_invoice->subtotal;
$subtotal=0.90;
$total=$datos_del_invoice->total;
$total=0.96;
$totalITBMS=$datos_del_invoice->total_tax;
$totalISC=$datos_del_invoice->total_tax;

//Aca debo evaluar si el impuesto seleccionado es de 12 que corresponde a ISC o es de ITBMS que es 7% y conforme eso entonces cargare una u otra variable Tabla: tblitem_tax  y tabla de items: tblitems
$totalITBMS=0.06;
$totalISC=0.00;
/*Aca de una vez tambien se determinara cual es el codigo de impuesto

TABLA TIPO_IMPUESTO
| CÓDIGO | DESCRIPCIÓN |
| ------ | ----------- |
| 01     | ITBMS       |
| 02     | ISC         |
| 03     | OTI         |
*/
$CodigoImpuesto=01;
/*
TABLA CODIGOS_ITBMS
| CÓDIGO | DESCRIPCIÓN  |
| ------ | ------------ |
| 00     | 0% (excento) |
| 01     | 7%           |
| 02     | 10%          |
| 03     | 15%          |
*/
$CodigoPorcentaje=01;
//Aqui lo colocamos de forma estatica sera? si es 7 u 12% en realidad dependera de lo que comprobemos en el if de arriba
$Porcentaje=7.00;
if ($totalITBMS > 0) {
    $ValorProcentajeDefinitivo=$totalITBMS;
}else{
    $ValorProcentajeDefinitivo=$totalISC;
}
//valor pasado statico por parte de la prueba que se nos dio, esto luego debo colocarlo dinamico como el if de arriba
$ValorProcentajeDefinitivo=0.6;


$TotalRecibido=$datosDelPago['amount'];
$TotalRecibido=0.96;
$TotalDescuentos=$datos_del_invoice->discount_percent;
$TotalDescuentos=0;

//CodigoFormaPago  //Hablar de esto con el Sr. Efrain lo mejor es usar Id o valores que no cambien pero...
$CodigoFormaPago="";
if ($datosDelPago['name']=='Tarjeta Crédito') {
    $CodigoFormaPago="03";
}
if ($datosDelPago['name']=='Efectivo') {
    $CodigoFormaPago="02";
}
if ($datosDelPago['name']=='Crédito') {
    $CodigoFormaPago="01";
}
if ($datosDelPago['name']=='Tarjeta Débito') {
    $CodigoFormaPago="04";
}
if ($datosDelPago['name']=='Tarjeta Fidelización') {
    $CodigoFormaPago="05";
}
if ($datosDelPago['name']=='Vale') {
    $CodigoFormaPago="06";
}
if ($datosDelPago['name']=='Tarjeta de Regalo') {
    $CodigoFormaPago="07";
}
if ($datosDelPago['name']=='Transf/Depósito a Cta. Bancaria') {
    $CodigoFormaPago="08";
}
if ($datosDelPago['name']=='Cheque') {
    $CodigoFormaPago="09";
}
if ($datosDelPago['name']=='Punto de Pago') {
    $CodigoFormaPago="10";
}

if ($datosDelPago['name']=='otro') {
    $CodigoFormaPago="99";
}

//Statico por ahora por la prueba de dgi
$CodigoFormaPago="02";

$plazo=30;

$RazonSocial=$datos_del_cliente->company;
$RazonSocial="F-26 pruebs";
$RazonSocial="INVERSIONES CAPRI (FENIX)";
$Direccion=$datos_del_cliente->address;
$Direccion="RIO ABAJO ANTIGUO FENIX CALLE 103 OESTE";
//$TipoIdentificacion="";
$TipoIdentificacion=02;
$TipoIdentificacion="01";//Por prueba degi
$NumeroIdentificacion=$datos_del_cliente->vat;
$NumeroIdentificacion="2585431-1-831626";//Por prueba degi
/*
- Si TipoCliente = 1               Razón Social
- Si TipoCliente = 2           Nombre y Apellido del receptor del comprobante 
Esto es importante se debe determinar si es razon social es decir empresa o cliente*/
$TipoCliente=2;//Por prueba degi



$CodigoUbicacion=$datos_del_cliente->zip;
$Provincia=$datos_del_cliente->state;
$Canton=$datos_del_cliente->city;
$Distrito=$datos_del_cliente->address;
$email=$datos_del_cliente_contactos->email;
$Telefono=$datos_del_cliente_contactos->phonenumber;

$CodigoUbicacion="3-1-1";
$Provincia="COLÓN";
$Canton="COLÓN";
$Distrito="BARRIO NORTE";
$email="efrain@corporatetic.com";
$Telefono="394-8250";
   


                //Consumo de la api para procesar archivos

               /* $data = '
<Requerimiento>
    <Codigo>01</Codigo>
    <NaturalezaOperacion>01</NaturalezaOperacion>
    <TipoOperacion>1</TipoOperacion>
    <DestinoOperacion>1</DestinoOperacion>
    <TipoEmision>01</TipoEmision>
    <FechaEmision>'.$formatted_date.'</FechaEmision>
    <RucEmisor>'.$datos_del_cliente->vat.'</RucEmisor>
    <Establecimiento>0000</Establecimiento>
    <Punto>001</Punto>
    <NumeroDocumento>'.$NumeroDocumento.'</NumeroDocumento>
    <CondicionVenta>1</CondicionVenta>
    <TotalSinImpuestos>'.$subtotal.'</TotalSinImpuestos>
    <TotalConImpuestos>'.$total.'</TotalConImpuestos>
    <ResumenComprobante>
        <CodigoMoneda>USD</CodigoMoneda>
        <TipoCambio>0</TipoCambio>
        <TotalGravado>0.00</TotalGravado>
        <TotalITBMS>'.$totalITBMS.'</TotalITBMS>
        <TotalISC>'.$totalISC.'</TotalISC>
        <TotalAcarreo>0</TotalAcarreo>
        <TotalSeguro>0</TotalSeguro>
        <TotalRecibido>'.$TotalRecibido.'</TotalRecibido>
        <TotalDescuentos>'.$TotalDescuentos.'</TotalDescuentos>
        <TotalComprobante>'.$TotalRecibido.'</TotalComprobante>
    </ResumenComprobante>
    <Impuestos>
        <Impuesto>
            <CodigoImpuesto>'.$CodigoImpuesto.'</CodigoImpuesto>
            <CodigoPorcentaje>'.$CodigoPorcentaje.'</CodigoPorcentaje>
            <Porcentaje>'.$Porcentaje.'</Porcentaje>
            <BaseImponible>'.$subtotal.'</BaseImponible>
            <Valor>'.$ValorProcentajeDefinitivo.'</Valor>
        </Impuesto>
    </Impuestos>
    <Pagos>
        <Pago>
            <CodigoFormaPago>'.$CodigoFormaPago.'</CodigoFormaPago>
            <Total>'.$total.'</Total>
            <Plazo>'.$plazo.'</Plazo>
        </Pago>
    </Pagos>
    <Cliente>
        <RazonSocial>'.$RazonSocial.'</RazonSocial>
        <Direccion>'.$Direccion.'</Direccion>
        <TipoIdentificacion>'.$TipoIdentificacion.'</TipoIdentificacion>
        <NumeroIdentificacion>'.$NumeroIdentificacion.'</NumeroIdentificacion>
        <TipoCliente>'.$TipoCliente.'</TipoCliente>
        <DigitoVerificador>0</DigitoVerificador>
        <email></email>
        <Telefono></Telefono>
    </Cliente>
    <Detalles>';
foreach ($datosDeLosItems as $key => $items) {
    $datosTaxItem = $this->invoices_model->getTaxItem($items->id);
    $ItemCodigoImpuesto = '03';
    $CodigoPorcentajeItem = '03';

    if ($datosTaxItem->taxname == 'I.T.B.M.S.') {
        $ItemCodigoImpuesto = '01';
        $CodigoPorcentajeItem = '01';
    }

    if ($datosTaxItem->taxname == 'I.S.C') {
        $ItemCodigoImpuesto = '02';
        $CodigoPorcentajeItem = '0.1325';
    }

    $valor = ($datosTaxItem->taxrate / 100) * $items->rate;

    $data .= '
    <Detalle id="'.$items->id.'">
        <Cantidad>'.$items->qty.'</Cantidad>
        <Descuento>0</Descuento>
        <SubTotal>'.$items->rate.'</SubTotal>
        <Producto>
            <Codigo>'.$items->id.'</Codigo>
            <Descripcion>'.$items->description.'</Descripcion>
            <UnidadMedida>lb</UnidadMedida>
            <ValorUnitario>'.$items->rate.'</ValorUnitario>
        </Producto>
        <Impuestos>
            <Impuesto>
                <CodigoImpuesto>'.$ItemCodigoImpuesto.'</CodigoImpuesto>
                <CodigoPorcentaje>'.$CodigoPorcentajeItem.'</CodigoPorcentaje>
                <Porcentaje>'.$datosTaxItem->taxrate.'</Porcentaje>
                <BaseImponible>'.$items->rate.'</BaseImponible>
                <Valor>'.$valor.'</Valor>
            </Impuesto>
        </Impuestos>
    </Detalle>';
}

$data .= '</Detalles>
<InformacionAdicional>
    <Campo id="1">
        <Descripcion>#AlexSoft:FACTURA-26</Descripcion>
        <Valor></Valor>
    </Campo>
</InformacionAdicional>
</Requerimiento>';*/

    //'.$datos_del_cliente->vat.' aca el rut debe ser el de la empresa
        $data='
        <Requerimiento>
            <Codigo>01</Codigo>
            <NaturalezaOperacion>01</NaturalezaOperacion>
            <TipoOperacion>2</TipoOperacion>
            <DestinoOperacion>1</DestinoOperacion>
            <TipoEmision>01</TipoEmision>
            <FechaEmision>'.$formatted_date.'</FechaEmision>
            <RucEmisor>155680264-2-2019</RucEmisor>
            <Establecimiento>0000</Establecimiento>
            <Punto>001</Punto>
            <NumeroDocumento>'.$NumeroDocumento.'</NumeroDocumento>
            <CondicionVenta>1</CondicionVenta>
            <TotalSinImpuestos>'.$subtotal.'</TotalSinImpuestos>
            <TotalConImpuestos>'.$total.'</TotalConImpuestos>
            <ResumenComprobante>
                <CodigoMoneda>USD</CodigoMoneda>
                <TipoCambio>1</TipoCambio>
                <TotalGravado>0.06</TotalGravado>
                <TotalITBMS>'.$totalITBMS.'</TotalITBMS>
                <TotalISC>'.$totalISC.'</TotalISC>
                <TotalAcarreo>0.00</TotalAcarreo>
                <TotalSeguro>0.00</TotalSeguro>
                <TotalRecibido>'.$TotalRecibido.'</TotalRecibido>
                <Vuelto>0.00</Vuelto>
                <TotalDescuentos>'.$TotalDescuentos.'</TotalDescuentos>
                <TotalComprobante>'.$TotalRecibido.'</TotalComprobante>
            </ResumenComprobante>
            <Impuestos>
                <Impuesto>
                    <CodigoImpuesto>'.$CodigoImpuesto.'</CodigoImpuesto>
                    <CodigoPorcentaje>'.$CodigoPorcentaje.'</CodigoPorcentaje>
                    <Porcentaje>'.$Porcentaje.'</Porcentaje>
                    <BaseImponible>'.$subtotal.'</BaseImponible>
                    <Valor>'.$ValorProcentajeDefinitivo.'</Valor>
                </Impuesto>
            </Impuestos>
            <Pagos>
                <Pago>
                    <CodigoFormaPago>02</CodigoFormaPago>
                    <Total>'.$total.'</Total>
                    <Plazo>0</Plazo>
                </Pago>
            </Pagos>
            <Cliente>
                <RazonSocial>'.$RazonSocial.'</RazonSocial>
                <Direccion>'.$Direccion.'</Direccion>
                <TipoIdentificacion>'.$TipoIdentificacion.'</TipoIdentificacion>
                <NumeroIdentificacion>'.$datos_del_cliente->vat.'</NumeroIdentificacion>
                <TipoCliente>'.$TipoCliente.'</TipoCliente>
                <DigitoVerificador>22</DigitoVerificador>
                <Ubicacion>
                    <DireccionSAT>
                        <CodigoUbicacion>'.$CodigoUbicacion.'</CodigoUbicacion>
                        <Provincia>'.$Provincia.'</Provincia>
                        <Canton>'.$Canton.'</Canton>
                        <Distrito>'.$Distrito.'</Distrito>
                    </DireccionSAT>
                </Ubicacion>
                <email>'.$email.'</email>
                <Telefono>'.$Telefono.'</Telefono>
            </Cliente>
            <Detalles>';
            foreach ($datosDeLosItems as $key => $items) {
                $datosTaxItem = $this->invoices_model->getTaxItem($items->id);
                $ItemCodigoImpuesto = '03';
                $CodigoPorcentajeItem = '03';
            
                if ($datosTaxItem->taxname == 'I.T.B.M.S.') {
                    $ItemCodigoImpuesto = '01';
                    $CodigoPorcentajeItem = '01';
                }
            
                if ($datosTaxItem->taxname == 'I.S.C') {
                    $ItemCodigoImpuesto = '02';
                    $CodigoPorcentajeItem = '0.1325';
                }
            
                $valor = ($datosTaxItem->taxrate / 100) * $items->rate;
            
                $itemId=$items->id;
                $qty=$items->qty;
                $rate=$items->rate;
                $description=$items->description;
                $PorcentajeImpuestoItem=$datosTaxItem->taxrate;
//Esto asi por que estan estaticos por el ejemplo por ahora
                $itemId="1";
                $qty=1.00;
                $rate=0.90;
                $description="Bolsas chicas";
                $PorcentajeImpuestoItem=7;
                $valor=0.06;

                $data .= '                
                <Detalle id="'.$itemId.'">
                    <Cantidad>'.$qty.'</Cantidad>
                    <Descuento>0.00</Descuento>
                    <SubTotal>'.$rate.'</SubTotal>
                    <Producto>
                        <Codigo>Bolsas chicas</Codigo>
                        <Descripcion>'.$description.'</Descripcion>
                        <UnidadMedida>und</UnidadMedida>
                        <ValorUnitario>'.$rate.'</ValorUnitario>
                    </Producto>
                    <Impuestos>
                        <Impuesto>
                            <CodigoImpuesto>'.$ItemCodigoImpuesto.'</CodigoImpuesto>
                            <CodigoPorcentaje>'.$CodigoPorcentajeItem.'</CodigoPorcentaje>
                            <Porcentaje>'.$PorcentajeImpuestoItem.'</Porcentaje>
                            <BaseImponible>'.$rate.'</BaseImponible>
                            <Valor>'.$valor.'</Valor>
                        </Impuesto>
                    </Impuestos>
                   </Detalle>';
            }
            
            $data .= '
            </Detalles>
        </Requerimiento>';


        //var_dump($this->input->post("invoiceid"));
        //$idfactura=$this->input->post("invoiceid");
        //$factura_nombre_archivo='factura'.$idfactura.$id.'.txt';
        //$factura_nombre_archivo=$idfactura;



// Abre el archivo, o lo crea si no existe
$file = fopen('./assets/files/'.$id.'.txt', 'w');


// Escribe los datos en el archivo
fwrite($file, $data);

// Cierra el archivo
fclose($file);



               
                $filepath = './assets/files/'.$id.'.txt';

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://apiv5.mysatcomla.com/client/api/integraciones/Comprobante/ProcesarArchivo',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array(''=> new CURLFILE($filepath)),
  CURLOPT_HTTPHEADER => array(
    'Authorization: Basic Y3pCbE1YSXdkakZwTUdNeGFUQnZNWE13Y3pGc01HRXhjREFtTVZNd1RERkJNRkF4OmN6QnNNV0V3Y0RFdU1ITXhaVEJ5TVhZdw=='
  ),
));

$response = curl_exec($curl);

if ($response === false) {
    // curl_exec devolvió false, lo que significa que ocurrió un error
    echo 'Error: ' . curl_error($curl);
    return;
} else {
    // curl_exec devolvió una respuesta, así que la imprimimos
    var_dump($response);
    echo '<br><br>';
    $json = json_decode($response);
    $UrlQRCode = $json->InformacionAdicional->UrlQRCode;
    $IdComprobanteSAT = $json->IdComprobanteSAT;
    $date_issueResponseApi=date('Y-m-d h:i A');
    //echo $date_issueResponseApi;
    // Obtener el valor de 'ClaveAcceso' (CUFE)
$CUFE = $json->ClaveAcceso;

$ProtocoloAutorizacion = $json->XmlAutorizado;

// Decodifica la cadena base64
$decodedQRCode = base64_decode($UrlQRCode);
echo '<br><br>';
echo $decodedQRCode;
    echo '<br><br>';

// Ahora, $decodedQRCode contiene la URL del código QR en formato legible


// Imprimir el CUFE para verificar
//echo $ProtocoloAutorizacion;
    //return;
    $responseApi['urlqrcode'] = $decodedQRCode;
    $responseApi['number'] = $IdComprobanteSAT;
    $responseApi['cufe'] = $CUFE;
    $responseApi['date_issue'] = $date_issueResponseApi;
    $responseApi['proto_auth'] = $ProtocoloAutorizacion;
    $responseApi['idfactura'] = $this->input->post("invoiceid");

    $this->invoices_model->responseApi($responseApi);

    


     // Generar la URL del PDF de DGI
    //$pdfUrl = admin_url('invoices/pdfDgiInvoiceSamll/' . $datos_del_invoice->id . '?output_type=I');
    $pdfUrl = admin_url('invoices/pdfDgi/' . $datos_del_invoice->id . '?output_type=I');

    // Agrega una respuesta JavaScript para abrir la URL en una nueva ventana
    echo '<script type="text/javascript">';
    echo 'window.open("' . $pdfUrl . '", "_blank");';  // Esta línea abre la URL en una nueva ventana o pestaña
    echo 'window.location.href = "' . admin_url('payments/payment/' . $id) . '";'; // Redirige después de abrir la ventana Importante hablar sobre el tema de la ventana emergente con el jefe
    echo '</script>';

    $this->send_to_email($datos_del_invoice->id);
    // Terminamos la ejecución
    return;

}

curl_close($curl);
                
                
                /*curl_close($curl);
                echo $response;

                $response = curl_exec($curl);*/


                
                

            //Fin del consumo de la api



            // El código para la llamada a la API y procesamiento del JSON

    /*// Generar la URL del PDF de DGI
    $pdfUrl = admin_url('invoices/pdfDgi/' . $datos_del_invoice->id . '?output_type=I');

    // Agregar una respuesta JavaScript para abrir la URL en una nueva ventana
    echo '<script type="text/javascript">';
    echo 'window.open("' . $pdfUrl . '", "_blank");';  // Esta línea abre la URL en una nueva ventana o pestaña
    echo '</script>';*/

    //return;


                set_alert('success', _l('invoice_payment_recorded'));

                redirect(admin_url('payments/payment/' . $id));

            } else {

                set_alert('danger', _l('invoice_payment_record_failed'));

            }
                                                                    
            redirect(admin_url('invoices/list_invoices/' . $this->input->post('invoiceid')));

        }

    }



    /* Send invoice to email */

    public function send_to_email($id)

    {

        $canView = user_can_view_invoice($id);

        if (!$canView) {

            access_denied('Invoices');

        } else {

            if (!has_permission('invoices', '', 'view') && !has_permission('invoices', '', 'view_own') && $canView == false) {

                access_denied('Invoices');

            }

        }



        try {

            $statementData = [];

            if ($this->input->post('attach_statement')) {

                $statementData['attach'] = true;

                $statementData['from']   = to_sql_date($this->input->post('statement_from'));

                $statementData['to']     = to_sql_date($this->input->post('statement_to'));

            }



            $success = $this->invoices_model->send_invoice_to_client(

                $id,

                '',

                $this->input->post('attach_pdf'),

                $this->input->post('cc'),

                false,

                $statementData

            );

        } catch (Exception $e) {

            $message = $e->getMessage();

            echo $message;

            if (strpos($message, 'Unable to get the size of the image') !== false) {

                show_pdf_unable_to_get_image_size_error();

            }

            die;

        }



        // In case client use another language

        load_admin_language();

        if ($success) {

            set_alert('success', _l('invoice_sent_to_client_success'));

        } else {

            set_alert('danger', _l('invoice_sent_to_client_fail'));

        }

        redirect(admin_url('invoices/list_invoices/' . $id));

    }



    /* Delete invoice payment*/

    public function delete_payment($id, $invoiceid)

    {

        if (!has_permission('payments', '', 'delete')) {

            access_denied('payments');

        }

        $this->load->model('payments_model');

        if (!$id) {

            redirect(admin_url('payments'));

        }

        $response = $this->payments_model->delete($id);

        if ($response == true) {

            set_alert('success', _l('deleted', _l('payment')));

        } else {

            set_alert('warning', _l('problem_deleting', _l('payment_lowercase')));

        }

        redirect(admin_url('invoices/list_invoices/' . $invoiceid));

    }



    /* Delete invoice */

    public function delete($id)

    {

        if (!has_permission('invoices', '', 'delete')) {

            access_denied('invoices');

        }

        if (!$id) {

            redirect(admin_url('invoices/list_invoices'));

        }

        $success = $this->invoices_model->delete($id);



        if ($success) {

            set_alert('success', _l('deleted', _l('invoice')));

        } else {

            set_alert('warning', _l('problem_deleting', _l('invoice_lowercase')));

        }

        if (strpos($_SERVER['HTTP_REFERER'], 'list_invoices') !== false) {

            redirect(admin_url('invoices/list_invoices'));

        } else {

            redirect($_SERVER['HTTP_REFERER']);

        }

    }



    public function delete_attachment($id)

    {

        $file = $this->misc_model->get_file($id);

        if ($file->staffid == get_staff_user_id() || is_admin()) {

            echo $this->invoices_model->delete_attachment($id);

        } else {

            header('HTTP/1.0 400 Bad error');

            echo _l('access_denied');

            die;

        }

    }



    /* Will send overdue notice to client */

    public function send_overdue_notice($id)

    {

        $canView = user_can_view_invoice($id);

        if (!$canView) {

            access_denied('Invoices');

        } else {

            if (!has_permission('invoices', '', 'view') && !has_permission('invoices', '', 'view_own') && $canView == false) {

                access_denied('Invoices');

            }

        }



        $send = $this->invoices_model->send_invoice_overdue_notice($id);

        if ($send) {

            set_alert('success', _l('invoice_overdue_reminder_sent'));

        } else {

            set_alert('warning', _l('invoice_reminder_send_problem'));

        }

        redirect(admin_url('invoices/list_invoices/' . $id));

    }



    /* Generates invoice PDF and senting to email of $send_to_email = true is passed */

    public function pdf($id)

    {

        if (!$id) {

            redirect(admin_url('invoices/list_invoices'));

        }



        $canView = user_can_view_invoice($id);

        if (!$canView) {

            access_denied('Invoices');

        } else {

            if (!has_permission('invoices', '', 'view') && !has_permission('invoices', '', 'view_own') && $canView == false) {

                access_denied('Invoices');

            }

        }



        $invoice        = $this->invoices_model->get($id);

        $invoice        = hooks()->apply_filters('before_admin_view_invoice_pdf', $invoice);

        $invoice_number = format_invoice_number($invoice->id);

        $respuesta_data = $this->invoices_model->obtenerRespuestasApiPorIdFactura($id);
        $invoice->respuesta_data = $respuesta_data;
        try {

            $pdf = invoice_pdf($invoice, 'dgi');

        } catch (Exception $e) {

            $message = $e->getMessage();

            echo $message;

            if (strpos($message, 'Unable to get the size of the image') !== false) {

                show_pdf_unable_to_get_image_size_error();

            }

            die;

        }



        $type = 'D';



        if ($this->input->get('output_type')) {

            $type = $this->input->get('output_type');

        }



        if ($this->input->get('print')) {

            $type = 'I';

        }



        $pdf->Output(mb_strtoupper(slug_it($invoice_number)) . '.pdf', $type);

    }


      /* Generates invoice PDF DGI*/

      public function pdfDgi($id)

      {
  
          if (!$id) {
  
              redirect(admin_url('invoices/list_invoices'));
  
          }
  
  
  
          $canView = user_can_view_invoice($id);
  
          if (!$canView) {
  
              access_denied('Invoices');
  
          } else {
  
              if (!has_permission('invoices', '', 'view') && !has_permission('invoices', '', 'view_own') && $canView == false) {
  
                  access_denied('Invoices');
  
              }
  
          }
  
  
  
          $invoice        = $this->invoices_model->get($id);
  
          $invoice        = hooks()->apply_filters('before_admin_view_invoice_pdf', $invoice);
  
          $invoice_number = format_invoice_number($invoice->id);

          $respuesta_data = $this->invoices_model->obtenerRespuestasApiPorIdFactura($id);


          // Obtener los datos de tblrespuesta_api basados en el invoice_id
    //$respuesta_data = $this->invoices_model->obtenerRespuestasApiPorIdFactura($id);
    //$invoice = $this->invoices_model->obtenerRespuestasApiPorIdFactura($id);
 // Agregar la información adicional a la variable $invoice
$invoice->respuesta_data = $respuesta_data;
 //var_dump($invoice);
          try {
  
              $pdf = invoice_pdf($invoice, 'dgi');
  
          } catch (Exception $e) {
  
              $message = $e->getMessage();
  
              echo $message;
  
              if (strpos($message, 'Unable to get the size of the image') !== false) {
  
                  show_pdf_unable_to_get_image_size_error();
  
              }
  
              die;
  
          }
  
  
  
          $type = 'D';
  
  
  
          if ($this->input->get('output_type')) {
  
              $type = $this->input->get('output_type');
  
          }
  
  
  
          if ($this->input->get('print')) {
  
              $type = 'I';
  
          }
  
  
  
          $pdf->Output(mb_strtoupper(slug_it($invoice_number)) . '.pdf', $type);
  
      }



    public function mark_as_sent($id)

    {

        if (!$id) {

            redirect(admin_url('invoices/list_invoices'));

        }

        if (!user_can_view_invoice($id)) {

            access_denied('Invoice Mark As Sent');

        }



        $success = $this->invoices_model->set_invoice_sent($id, true);



        if ($success) {

            set_alert('success', _l('invoice_marked_as_sent'));

        } else {

            set_alert('warning', _l('invoice_marked_as_sent_failed'));

        }



        redirect(admin_url('invoices/list_invoices/' . $id));

    }


    
      /* Generates invoice PDF DGI*/

      public function pdfDgiInvoiceSamll($id)

      {
  
          if (!$id) {
  
              redirect(admin_url('invoices/list_invoices'));
  
          }
  
  
  
          $canView = user_can_view_invoice($id);
  
          if (!$canView) {
  
              access_denied('Invoices');
  
          } else {
  
              if (!has_permission('invoices', '', 'view') && !has_permission('invoices', '', 'view_own') && $canView == false) {
  
                  access_denied('Invoices');
  
              }
  
          }
  
  
  
          $invoice        = $this->invoices_model->get($id);
  
          $invoice        = hooks()->apply_filters('before_admin_view_invoice_pdf', $invoice);
  
          $invoice_number = format_invoice_number($invoice->id);

          $respuesta_data = $this->invoices_model->obtenerRespuestasApiPorIdFactura($id);


          $invoice->respuesta_data = $respuesta_data;

          try {
  
              $pdf = invoice_pdf($invoice, 'dgiSmall');
  
          } catch (Exception $e) {
  
              $message = $e->getMessage();
  
              echo $message;
  
              if (strpos($message, 'Unable to get the size of the image') !== false) {
  
                  show_pdf_unable_to_get_image_size_error();
  
              }
  
              die;
  
          }
  
  
  
          $type = 'D';
  
  
  
          if ($this->input->get('output_type')) {
  
              $type = $this->input->get('output_type');
  
          }
  
  
  
          if ($this->input->get('print')) {
  
              $type = 'I';
  
          }
  
  
  
          $pdf->Output(mb_strtoupper(slug_it($invoice_number)) . '.pdf', $type);
  
      }



    public function get_due_date()

    {

        if ($this->input->post()) {

            $date    = $this->input->post('date');

            $duedate = '';

            if (get_option('invoice_due_after') != 0) {

                $date    = to_sql_date($date);

                $d       = date('Y-m-d', strtotime('+' . get_option('invoice_due_after') . ' DAY', strtotime($date)));

                $duedate = _d($d);

                echo $duedate;

            }

        }

    }

}