<?php

//var_dump($invoice);
/*if (isset($invoice->respuesta_data)) {
    // La variable $respuesta_data está definida, muestra su contenido
    var_dump($invoice->respuesta_data);
} else {
    // La variable $respuesta_data no está definida
    echo "La variable \$respuesta_data no está definida.";
}*/

defined('BASEPATH') or exit('No direct script access allowed');



$dimensions = $pdf->getPageDimensions();
//$pdf->SetPageOrientation('L');
//$pdf->SetMargins(0, 0, 0, 0);

/*
// Cargar el modelo
$CI = &get_instance(); // Obtener la instancia de CodeIgniter
$CI->load->model('invoices_model');

// Realizar la consulta
//$id = 107; // Tu ID de factura
$respuesta_data = $CI->invoices_model->obtenerRespuestasApiPorIdFactura($invoice->id);*/
/*
// Verificar si se obtuvieron datos
if ($respuesta_data) {
    // Asignar los datos a la propiedad del objeto $invoice
    $invoice->respuesta_data = $respuesta_data;
} else {
    // No se encontraron datos
    $invoice->respuesta_data = null;
}




$info_right_column = '';

$info_left_column  = '';

if (property_exists($invoice, 'respuesta_data') && is_array($invoice->respuesta_data) && !empty($invoice->respuesta_data)) {
    $respuesta_data = $invoice->respuesta_data[0]; // Accede al primer elemento del array

    $urlqrcode = !is_null($respuesta_data->urlqrcode) ? substr($respuesta_data->urlqrcode, 0, 100) : null;
    $cufe = !is_null($respuesta_data->cufe) ? substr($respuesta_data->cufe, 0, 10) : null;
    $number = !is_null($respuesta_data->number) ? substr($respuesta_data->number, 0, 10) : null;
    $proto_auth = !is_null($respuesta_data->proto_auth) ? substr($respuesta_data->proto_auth, 0, 10) : null;
    $date_issue = !is_null($respuesta_data->date_issue) ? substr($respuesta_data->date_issue, 0, 10) : null;
} else {
    // La propiedad respuesta_data no está definida o es un array vacío
    $respuesta_data = null;
    $urlqrcode = null;
    $cufe = null;
    $number = null;
    $proto_auth = null;
    $date_issue = null;
}
*/


$CI = &get_instance(); // Obtener la instancia de CodeIgniter
$CI->load->model('invoices_model');

// Realizar la consulta
//$id = 107; // Tu ID de factura
$respuesta_data = $CI->invoices_model->obtenerRespuestasApiPorIdFactura($invoice->id);

// Verificar si se obtuvieron datos
if ($respuesta_data) {
    // Asignar los datos a la propiedad del objeto $invoice
    $invoice->respuesta_data = $respuesta_data;
} else {
    // No se encontraron datos
    $invoice->respuesta_data = null;
}




$info_right_column = '';

$info_left_column  = '';

if (property_exists($invoice, 'respuesta_data') && is_array($invoice->respuesta_data) && !empty($invoice->respuesta_data)) {
    $respuesta_data = $invoice->respuesta_data[0]; // Accede al primer elemento del array
    $urlqrcode = isset($respuesta_data->urlqrcode) ? $respuesta_data->urlqrcode : null;
    $cufe = isset($respuesta_data->cufe) ? $respuesta_data->cufe : null;
    $number = isset($respuesta_data->number) ? $respuesta_data->number : null;
    $proto_auth = isset($respuesta_data->proto_auth) ? $respuesta_data->proto_auth : null;
    $date_issue = isset($respuesta_data->date_issue) ? $respuesta_data->date_issue : null; 
} else {
    // La propiedad respuesta_data no está definida o es un array vacío
    $respuesta_data = null;
    $urlqrcode = null;
    $cufe = null;
    $number = null;
    $proto_auth = null;
    $date_issue = null;
}

// ...




//$date_issue = $respuesta_data->date_issue;

if ($date_issue == null) {
    $date_issue = date('Y-m-d H:i:s');
}

$date = new DateTime($date_issue);
$fecha_formateada = $date->format('d/m/y h:i A');

$texto_largo = $proto_auth;

if ($texto_largo !== null) {
    $proto_auth_modi = substr($texto_largo, 0, 40);
} else {
    $proto_auth_modi = null; // o proporciona un valor predeterminado en caso de que $texto_largo sea null
}










$info_right_column .= '<span style="font-weight:bold;font-size:27px;">' . _l('invoice_pdf_heading') . ' </span><br />';

$info_right_column .= '<b style="color:#4e4e4e;"># ' . $invoice_number . ' </b>';









if (get_option('show_status_on_pdf_ei') == 1) {

    $info_right_column .= '<br /><span style="color:rgb(' . invoice_status_color_pdf($status) . ');text-transform:uppercase;">' . format_invoice_status($status, '', false) . '</span>';

}



if ($status != Invoices_model::STATUS_PAID && $status != Invoices_model::STATUS_CANCELLED && get_option('show_pay_link_to_invoice_pdf') == 1

    && found_invoice_mode($payment_modes, $invoice->id, false)) {

    $info_right_column .= ' - <a style="color:#84c529;text-decoration:none;text-transform:uppercase;" href="' . site_url('invoice/' . $invoice->id . '/' . $invoice->hash) . '"><1b>' . _l('view_invoice_pdf_link_pay') . '</1b></a>';

}

// Add logo

$info_left_column .= pdf_logo_url();



$info_left_column .= '<br /><br /><br />';
$info_left_column .= '<br />';



  
//$info_left_column .= '<span style="font-weight:bold;font-size:20px; text-align:left; margin-left:0;"><b>Comprobante Auxiliarde Factura</b></span>';











// Write top left logo and right column info/text

$lineasTextoAlturax =pdf_multi_row($info_left_column, $info_right_column, $pdf, ($dimensions['wk'] / 2) - $dimensions['lm']);





$pdf->ln(0);


// Generar y agregar el código QR
// Ruta a tu imagen QR generada
//$qrImagePath = 'https://upload.wikimedia.org/wikipedia/commons/d/d7/Commons_QR_code.png';
$qrImagePath = $urlqrcode;


// Establece la ruta o URL del código QR

$qrImagePath ='https://dev.corpdev.dev/assets/files/qr'.$invoice->id.'.png';

// Coordenadas X y Y donde deseas colocar la imagen (ajusta según tu diseño)
$qrX = 130; // Ajusta la posición X

// Ajusta la posición Y del código QR para ignorar el margen inferior
$qrY = 10;
/*
$qrX2 = 85; // Ajusta la posición X
$qrY2 = 50;  // Ajusta la posición Y*/

// Ancho y alto de la imagen QR (ajusta según tus necesidades)
$qrWidth = 30;  // Ancho
$qrHeight = 30; // Alto




// Añade la imagen QR al PDF
$pdf->Image($qrImagePath, $qrX, $qrY, $qrWidth, $qrHeight, 'PNG');
//$pdf->write2DBarcode($qrImagePath, 'QRCODE,Q', $qrX, $qrY, $qrWidth, $qrHeight, $style, 'N',$distort=false);
/*
// Agregar la imagen del código QR a tu PDF
//$pdf->Image('ruta_de_la_imagen_qr.png', $x, $y, $ancho, $alto);

// Agregar el título "QR code" encima de la imagen
$pdf->SetFont($font_name, 'B', $font_size); // Establecer la fuente y el tamaño
$pdf->SetTextColor(255, 255, 255); // Establecer el color del texto (en este caso, negro) 0,0,0
$pdf->SetXY($qrX2, $qrY - 5); // Establecer la posición del título encima de la imagen
$pdf->Cell(0, 0, 'QR code', 0, 1, 'C'); // Agregar el título
$pdf->SetFont($font_name, '', $font_size); // Restaurar la fuente y el tamaño

$pdf->SetTextColor(0, 0, 0);*/

// $x y $y son las coordenadas donde se encuentra la imagen del código QR
// $ancho y $alto son el ancho y alto de la imagen del código QR







$organization_info = '< >';

$organization_info .= format_organization_info();
$organization_info .= '<br><br>';

$organization_info .= '<span style="font-weight:bold;font-size:17px; text-align:left; margin-left:0;"><b>Comprobante Auxiliar de Factura</b></span>';




$organization_info .= '<p style="font-size:11px;">Número: '.$number.'</p>';
$organization_info .= '<p style="font-size:10px;">CUFE: '. $cufe . '</p>';
$organization_info .= '<p style="font-size:11px;">Protocolo de autorizacíon:'.$proto_auth_modi.' </p>';
$organization_info .= '<p style="font-size:11px;">Fecha de emisión: '.$fecha_formateada.'</p>';
$organization_info .= '<p style="font-size:11px;">Consulte por CUFE en: https://dgi-fep.mef.gob.pa/Consultas/FacturasPorCUFE</p>';





$organization_info .= '</div>';



// Bill to

$invoice_info = '<b>' . _l('invoice_bill_to') . ':</b>';

$invoice_info .= '<div  style="margin: 0; padding: 0;!important">';


$invoice_info .= '<span>'.$invoice->client->company.'<br>VAT Number: '.$invoice->client->vat.'</span>';


    //$invoice_info .=format_customer_info($invoice, 'invoice', 'billing');
    

//$invoice_info .= '</p>';
$invoice_info .= '</div>';




// ship to to

if ($invoice->include_shipping == 1 && $invoice->show_shipping_on_invoice == 1) {

    $invoice_info .= '<br /><b>' . _l('ship_to') . ':</b>';

    $invoice_info .= '<div style="color:#424242;">';

    $invoice_info .= format_customer_info($invoice, 'invoice', 'shipping');

    $invoice_info .= '</div>';

}



$invoice_info .= '<br />' . _l('invoice_data_date') . ' ' . _d($invoice->date) . '<br />';



$invoice_info = hooks()->apply_filters('invoice_pdf_header_after_date', $invoice_info, $invoice);



if (!empty($invoice->duedate)) {

    $invoice_info .= _l('invoice_data_duedate') . ' ' . _d($invoice->duedate) . '<br />';

    $invoice_info = hooks()->apply_filters('invoice_pdf_header_after_due_date', $invoice_info, $invoice);

}



if ($invoice->sale_agent && get_option('show_sale_agent_on_invoices') == 1) {

    $invoice_info .= _l('sale_agent_string') . ': ' . get_staff_full_name($invoice->sale_agent) . '<br />';

    $invoice_info = hooks()->apply_filters('invoice_pdf_header_after_sale_agent', $invoice_info, $invoice);

}



if ($invoice->project_id && get_option('show_project_on_invoice') == 1) {

    $invoice_info .= _l('project') . ': ' . get_project_name_by_id($invoice->project_id) . '<br />';

    $invoice_info = hooks()->apply_filters('invoice_pdf_header_after_project_name', $invoice_info, $invoice);

}



$invoice_info = hooks()->apply_filters('invoice_pdf_header_before_custom_fields', $invoice_info, $invoice);



foreach ($pdf_custom_fields as $field) {

    $value = get_custom_field_value($invoice->id, $field['id'], 'invoice');

    if ($value == '') {

        continue;

    }

    $invoice_info .= $field['name'] . ': ' . $value . '<br />';

}



$invoice_info      = hooks()->apply_filters('invoice_pdf_header_after_custom_fields', $invoice_info, $invoice);

$organization_info = hooks()->apply_filters('invoicepdf_organization_info', $organization_info, $invoice);

$invoice_info      = hooks()->apply_filters('invoice_pdf_info', $invoice_info, $invoice);



$left_info  = $swap == '1' ? $invoice_info : $organization_info;

$right_info = $swap == '1' ? $organization_info : $invoice_info;



pdf_multi_row($left_info, $right_info, $pdf, ($dimensions['wk'] / 2) - $dimensions['lm']);



// The Table

$pdf->Ln(hooks()->apply_filters('pdf_info_and_table_separator', 6));



// The items table

$items = get_items_table_data($invoice, 'invoice', 'pdf');



$tblhtml = $items->table();



$pdf->writeHTML($tblhtml, true, false, false, false, '');



$pdf->Ln(8);



$tbltotal = '';

$tbltotal .= '<table cellpadding="6" style="font-size:' . ($font_size + 4) . 'px">';

$tbltotal .= '

<tr>

    <td align="right" width="85%"><strong>' . _l('invoice_subtotal') . '</strong></td>

    <td align="right" width="15%">' . app_format_money($invoice->subtotal, $invoice->currency_name) . '</td>

</tr>';



if (is_sale_discount_applied($invoice)) {

    $tbltotal .= '

    <tr>

        <td align="right" width="85%"><strong>' . _l('invoice_discount');

    if (is_sale_discount($invoice, 'percent')) {

        $tbltotal .= ' (' . app_format_number($invoice->discount_percent, true) . '%)';

    }

    $tbltotal .= '</strong>';

    $tbltotal .= '</td>';

    $tbltotal .= '<td align="right" width="15%">-' . app_format_money($invoice->discount_total, $invoice->currency_name) . '</td>

    </tr>';

}



foreach ($items->taxes() as $tax) {

    $tbltotal .= '<tr>

    <td align="right" width="85%"><strong>' . $tax['taxname'] . ' (' . app_format_number($tax['taxrate']) . '%)' . '</strong></td>

    <td align="right" width="15%">' . app_format_money($tax['total_tax'], $invoice->currency_name) . '</td>

</tr>';

}



if ((int) $invoice->adjustment != 0) {

    $tbltotal .= '<tr>

    <td align="right" width="85%"><strong>' . _l('invoice_adjustment') . '</strong></td>

    <td align="right" width="15%">' . app_format_money($invoice->adjustment, $invoice->currency_name) . '</td>

</tr>';

}



$tbltotal .= '

<tr style="background-color:#f0f0f0;">

    <td align="right" width="85%"><strong>' . _l('invoice_total') . '</strong></td>

    <td align="right" width="15%">' . app_format_money($invoice->total, $invoice->currency_name) . '</td>

</tr>';



if (count($invoice->payments) > 0 && get_option('show_total_paid_on_invoice') == 1) {

    $tbltotal .= '

    <tr>

        <td align="right" width="85%"><strong>' . _l('invoice_total_paid') . '</strong></td>

        <td align="right" width="15%">-' . app_format_money(sum_from_table(db_prefix() . 'invoicepaymentrecords', [

        'field' => 'amount',

        'where' => [

            'invoiceid' => $invoice->id,

        ],

    ]), $invoice->currency_name) . '</td>

    </tr>';

}



if (get_option('show_credits_applied_on_invoice') == 1 && $credits_applied = total_credits_applied_to_invoice($invoice->id)) {

    $tbltotal .= '

    <tr>

        <td align="right" width="85%"><strong>' . _l('applied_credits') . '</strong></td>

        <td align="right" width="15%">-' . app_format_money($credits_applied, $invoice->currency_name) . '</td>

    </tr>';

}



if (get_option('show_amount_due_on_invoice') == 1 && $invoice->status != Invoices_model::STATUS_CANCELLED) {

    $tbltotal .= '<tr style="background-color:#f0f0f0;">

       <td align="right" width="85%"><strong>' . _l('invoice_amount_due') . '</strong></td>

       <td align="right" width="15%">' . app_format_money($invoice->total_left_to_pay, $invoice->currency_name) . '</td>

   </tr>';

}



$tbltotal .= '</table>';

$pdf->writeHTML($tbltotal, true, false, false, false, '');



if (get_option('total_to_words_enabled') == 1) {

    // Set the font bold

    $pdf->SetFont($font_name, 'B', $font_size);

    $pdf->writeHTMLCell('', '', '', '', _l('num_word') . ': ' . $CI->numberword->convert($invoice->total, $invoice->currency_name), 0, 1, false, true, 'C', true);

    // Set the font again to normal like the rest of the pdf

    $pdf->SetFont($font_name, '', $font_size);

    $pdf->Ln(4);

}



if (count($invoice->payments) > 0 && get_option('show_transactions_on_invoice_pdf') == 1) {

    $pdf->Ln(4);

    $border = 'border-bottom-color:#000000;border-bottom-width:1px;border-bottom-style:solid; 1px solid black;';

    $pdf->SetFont($font_name, 'B', $font_size);

    $pdf->Cell(0, 0, _l('invoice_received_payments') . ':', 0, 1, 'L', 0, '', 0);

    $pdf->SetFont($font_name, '', $font_size);

    $pdf->Ln(4);

    $tblhtml = '<table width="100%" bgcolor="#fff" cellspacing="0" cellpadding="5" border="0">

        <tr height="20"  style="color:#000;border:1px solid #000;">

        <th width="25%;" style="' . $border . '">' . _l('invoice_payments_table_number_heading') . '</th>

        <th width="25%;" style="' . $border . '">' . _l('invoice_payments_table_mode_heading') . '</th>

        <th width="25%;" style="' . $border . '">' . _l('invoice_payments_table_date_heading') . '</th>

        <th width="25%;" style="' . $border . '">' . _l('invoice_payments_table_amount_heading') . '</th>

    </tr>';

    $tblhtml .= '<tbody>';

    foreach ($invoice->payments as $payment) {

        $payment_name = $payment['name'];

        if (!empty($payment['paymentmethod'])) {

            $payment_name .= ' - ' . $payment['paymentmethod'];

        }

        $tblhtml .= '

            <tr>

            <td>' . $payment['paymentid'] . '</td>

            <td>' . $payment_name . '</td>

            <td>' . _d($payment['date']) . '</td>

            <td>' . app_format_money($payment['amount'], $invoice->currency_name) . '</td>

            </tr>

        ';

    }

    $tblhtml .= '</tbody>';

    $tblhtml .= '</table>';

    $pdf->writeHTML($tblhtml, true, false, false, false, '');

}



if (found_invoice_mode($payment_modes, $invoice->id, true, true)) {

    $pdf->Ln(4);

    $pdf->SetFont($font_name, 'B', $font_size);

    $pdf->Cell(0, 0, _l('invoice_html_offline_payment') . ':', 0, 1, 'L', 0, '', 0);

    $pdf->SetFont($font_name, '', $font_size);



    foreach ($payment_modes as $mode) {

        if (is_numeric($mode['id'])) {

            if (!is_payment_mode_allowed_for_invoice($mode['id'], $invoice->id)) {

                continue;

            }

        }

        if (isset($mode['show_on_pdf']) && $mode['show_on_pdf'] == 1) {

            $pdf->Ln(1);

            $pdf->Cell(0, 0, $mode['name'], 0, 1, 'L', 0, '', 0);

            $pdf->Ln(2);

            $pdf->writeHTMLCell('', '', '', '', $mode['description'], 0, 1, false, true, 'L', true);

        }

    }

}



if (!empty($invoice->clientnote)) {

    $pdf->Ln(4);

    $pdf->SetFont($font_name, 'B', $font_size);

    $pdf->Cell(0, 0, _l('invoice_note'), 0, 1, 'L', 0, '', 0);

    $pdf->SetFont($font_name, '', $font_size);

    $pdf->Ln(2);

    $pdf->writeHTMLCell('', '', '', '', $invoice->clientnote, 0, 1, false, true, 'L', true);

}



if (!empty($invoice->terms)) {

    $pdf->Ln(4);

    $pdf->SetFont($font_name, 'B', $font_size);

    $pdf->Cell(0, 0, _l('terms_and_conditions') . ':', 0, 1, 'L', 0, '', 0);

    $pdf->SetFont($font_name, '', $font_size);

    $pdf->Ln(2);

    $pdf->writeHTMLCell('', '', '', '', $invoice->terms, 0, 1, false, true, 'L', true);

}







