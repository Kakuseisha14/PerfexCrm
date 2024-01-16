<?php

defined('BASEPATH') or exit('No direct script access allowed');



// Establecer el tamaño de página personalizado a 3x3 pulgadas
$pageWidthInInches = 215.9;
//$pageHeightInInches = 279.4;
$pageWidthInMM = $pageWidthInInches * 25.4;
//$pageHeightInMM = $pageHeightInInches* 25.4;
//$pdf->setPageFormat(array($pageWidthInMM, $pageHeightInMM));
$pdf->setPageFormat(array($pageWidthInMM));

// Establecer los márgenes izquierdo, derecho, superior e inferior en 0
$pdf->SetMargins(0, 0, 0, 0);

$dimensions = $pdf->getPageDimensions();

$info_right_column = '';
$info_left_column  = '';

$respuesta_data = $invoice->respuesta_data[0]; // Accede al primer elemento del array
$urlqrcode = $respuesta_data->urlqrcode;
$cufe = $respuesta_data->cufe;
$urlqrcode = $respuesta_data->urlqrcode;
$number = $respuesta_data->number;
$proto_auth = $respuesta_data->proto_auth;
$date_issue = $respuesta_data->date_issue;

$date = new DateTime($date_issue);
$fecha_formateada = $date->format('d/m/y h:i A');

$texto_largo = $proto_auth;

$proto_auth_modi = substr($texto_largo, 0, 40);

$info_right_column .= '<span style="font-weight:bold;font-size:27px;">' . _l('invoice_pdf_heading') . ' </span><br />';
$info_right_column .= '<b style="color:#4e4e4e;"># ' . $invoice_number . ' </b>';

if (get_option('show_status_on_pdf_ei') == 1) {
    $info_right_column .= '<br /><span style="color:rgb(' . invoice_status_color_pdf($status) . ');text-transform:uppercase;">' . format_invoice_status($status, '', false) . '</span>';
}

if ($status != Invoices_model::STATUS_PAID && $status != Invoices_model::STATUS_CANCELLED && get_option('show_pay_link_to_invoice_pdf') == 1
    && found_invoice_mode($payment_modes, $invoice->id, false)) {
    $info_right_column .= ' - <a style="color:#84c529;text-decoration:none;text-transform:uppercase;" href="' . site_url('invoice/' . $invoice->id . '/' . $invoice->hash) . '"><1b>' . _l('view_invoice_pdf_link_pay') . '</1b></a>';
}

// Write top left logo and right column info/text
pdf_multi_row($info_left_column, $info_right_column, $pdf, ($dimensions['wk'] / 1) - $dimensions['lm']);

$pdf->ln(0);

$logo_image_url = pdf_logo_url();
$receit_heading = '<br>
<span style="font-weight:bold;font-size:25px; text-align:center;"><b>Comprobante Auxiliar de Factura</b></span><br />
<div style="text-align:center">
    <img src="' . $logo_image_url . '" alt="Logo" width="900%"><br>
    <span style="line-height: 2;">Farmacia Arrocha, S. A.</span><br>
    <span style="line-height: 2;">RUC: 346-266-76470  DV: 13</span><br>
    <span style="line-height: 2;">PANAMA, PANAMA, BELLA VISTA</span><br>
    <span style="line-height: 2;">Calle Via España A, Aquilino De la Guardia</span>
</div><br><br><br><br>';

//$pdf->AddPage('L', '3x3'); // Define el tamaño de página 3x3 (horizontal)

// Ajusta la posición del encabezado
$pdf->SetY(5); // Personaliza la posición vertical según tus necesidades

$pdf->writeHTMLCell(0, '', '', '', $receit_heading, 0, 1, false, true, 'C', true);
$pdf->SetFontSize($font_size - 2); // Reduce el tamaño de fuente en 2 unidades

$pdf->Ln(17); // Ajusta la separación entre el encabezado y el contenido




$div1 = '<br><br>
<div style="text-align:left">
    <span style="line-height: 1;">Tienda: 501 Caja registradora: 001 </span><br>
    <span style="line-height:2;">Fecha: 05/10/23 Hora: 20:38</span><br>
    <span style="line-height: 2;">Ticket: 37548 Factura: 30247</span><br>
    <span style="line-height: 2;">Cajero: 12146 Litzy Sahyreth Macias Santos</span><br>
</div>';


$pdf->Ln(-40);
$pdf->writeHTMLCell(0, '', '', '', $div1, 0, 1, false, true, 'L', true);
$pdf->SetFontSize($font_size - 2); // Reduce el tamaño de fuente en 2 unidades

$pdf->Ln(18);

$div2 = '<br><br><br><br><br>
<div style="text-align:left">
    <span style="line-height: 2;"><b>Usuario: </b></span><br>
    <span style="line-height: 2;">Nombre: Efrain Vargas</span><br>
    <span style="line-height: 2;"><b>Cliente:</b></span><br>
    <span style="line-height: 2;">Nombre: Efrain Vargas</span><br>
    <span style="line-height: 2;">Cedula/RUC: 8-707-406</span>
</div>';



$pdf->Ln(-40);
$pdf->writeHTMLCell(0, '', '', '', $div2, 0, 1, false, true, 'L', true);
$pdf->SetFontSize($font_size - 2); // Reduce el tamaño de fuente en 2 unidades

$pdf->Ln(10);




// The Table

$pdf->Ln(hooks()->apply_filters('pdf_info_and_table_separator', 6));



// The items table

$items = get_items_table_data($invoice, 'invoice', 'pdf');






if (count($invoice->payments) > 0 && get_option('show_transactions_on_invoice_pdf') == 1) {

    $pdf->Ln(2); // Reducir espacio vertical a 2 unidades


    $border = 'border-bottom-color:#000000;border-bottom-width:1px;border-bottom-style:solid; 1px solid black;';

    $pdf->SetFont($font_name, 'B', $font_size);

    $pdf->Cell(0, 0, _l('Description') . ':', 0, 1, 'L', 0, '', 0);

   $pdf->SetFont($font_name, 'B', $font_size - 2);  // Reduce el tamaño de fuente en 2 unidades


    $pdf->Ln(2); // Reducir espacio vertical a 2 unidades


    $tblhtml = '<table width="100%" bgcolor="#fff" cellspacing="0" cellpadding="5" border="0">

        <tr height="20"  style="color:#000;border:1px solid #000;">

        <th width="16.6%;" style="' . $border . '">#</th>

        <th width="16.6%;" style="' . $border . '">'. _l('Item').'</th>

        <th width="16.6%;" style="' . $border . '">'. _l('Qty').'</th>

        <th width="16.6%;" style="' . $border . '">'. _l('Rate').' </th>

        <th width="16.6%;" style="' . $border . '">'. _l('Tax').'</th>

        <th width="16.6%;" style="' . $border . '">'. _l('Amount').'</th>


    </tr>';

    $tblhtml .= '<tbody>';

    foreach ($invoice->items as $item) {
        
    
        $id = $item['id'];
        $description = $item['description'];
        $rate = $item['rate'];
        $qty = $item['qty'];
        
        //$tax2= $item['tax2'];
        $unit = $item['unit'];
        $amount = $item['rate']*$item['qty'];
        $Impuesto= ($item['rate']*$item['qty'])*0.07;

        $c=0;
        foreach ($items->taxes() as $tax) {
if ($c==0) {
   

            $tbltotal .= '<tr>
        
            <td align="right" width="85%"><strong>' . $tax['taxname'] . ' (' . app_format_number($tax['taxrate']) . '%)' . '</strong></td>
        
            <td align="right" width="15%">' . app_format_money($tax['total_tax'], $invoice->currency_name) . '</td>
        
        </tr>';
    }
    $c++;
        }

        if (!empty($item['paymentmethod'])) {

            $payment_name .= ' - ' . $item['paymentmethod'];

        }

        $tblhtml .= '

            <tr>

            <td>'.$id.'</td>

            <td>'.$description.'</td>

            <td>'.$qty.'</td>

            <td>'.$rate.'</td>

            <td>'. $Impuesto.'</td>

            <td>'. $amount.'</td>

            </tr>

        ';

    }

    $tblhtml .= '</tbody>';

    $tblhtml .= '</table>';

    $pdf->writeHTML($tblhtml, true, false, false, false, '');

}



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

   $pdf->SetFont($font_name, 'B', $font_size - 2);  // Reduce el tamaño de fuente en 2 unidades


    $pdf->Ln(2); // Reducir espacio vertical a 2 unidades


}



if (count($invoice->payments) > 0 && get_option('show_transactions_on_invoice_pdf') == 1) {

    $pdf->Ln(2); // Reducir espacio vertical a 2 unidades


    $border = 'border-bottom-color:#000000;border-bottom-width:1px;border-bottom-style:solid; 1px solid black;';

    $pdf->SetFont($font_name, 'B', $font_size);

    $pdf->Cell(0, 0, _l('invoice_received_payments') . ':', 0, 1, 'L', 0, '', 0);

   $pdf->SetFont($font_name, 'B', $font_size - 2);  // Reduce el tamaño de fuente en 2 unidades


    $pdf->Ln(2); // Reducir espacio vertical a 2 unidades


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

    $pdf->Ln(2); // Reducir espacio vertical a 2 unidades


    $pdf->SetFont($font_name, 'B', $font_size);

    $pdf->Cell(0, 0, _l('invoice_html_offline_payment') . ':', 0, 1, 'L', 0, '', 0);

   $pdf->SetFont($font_name, 'B', $font_size - 2);  // Reduce el tamaño de fuente en 2 unidades




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



$div2 = '<br><br><br><br><br><br><br><br><br><br>
<div style="text-align:left;">
<span style="text-align:left">Para cambios o devoluciones presentar CAFE antes de 30 días de la fecha de compra. Los medicamentos,  certificados de regalo y gift card no pueden ser devueltos. </span><br>
<span style="line-height: 2;">Visítanos en www.arrocha.com</span><br>
<span style="line-height: 2;">CAFE de emisión previa, transmisión para la DIRECCIÓN GENERAL DE INGRESOS hasta 06/10/2023 23:59:59</span><br>
<span style="line-height: 2;text-align:center">Consulte en https://fe.dgi.mef.gob.pa/consulta usando el CUFE:</span><br>
<span style="line-height: 2;text-align:center">FE0120000000346-266-76470-13S5012023100500000302470010318437821959</span><br>
<span style="line-height: 2;text-align:center">o escaneando el código QR</span><br>

</div>';


/*<p style="text-align:left" >Nombre: Efrain Vargas </p>
    <p style="text-align:left" ><b>Cliente Fiscal</b></p>
    <p style="text-align:left" >Nombre: Efrain Vargas </p>
    <p style="text-align:left" >RUC: 8-707-406 </p>*/
$pdf->Ln(-40);
$pdf->writeHTMLCell(0, '', '', '', $div2, 0, 1, false, true, 'L', true);
$pdf->SetFontSize($font_size - 2); // Reduce el tamaño de fuente en 2 unidades

$pdf->Ln(0);







// Generar y agregar el código QR
// Ruta a tu imagen QR generada
$qrImagePath = 'https://upload.wikimedia.org/wikipedia/commons/d/d7/Commons_QR_code.png';

// Coordenadas X y Y donde deseas colocar la imagen (ajusta según tu diseño)
$qrX = 80; // Ajusta la posición X
$qrY = 250;  // Ajusta la posición Y

$qrX2 = 0; // Ajusta la posición X
$qrY2 = 50;  // Ajusta la posición Y

// Ancho y alto de la imagen QR (ajusta según tus necesidades)
$qrWidth = 50;  // Ancho
$qrHeight = 50; // Alto

// Añade la imagen QR al PDF
$pdf->Image($qrImagePath, $qrX, $qrY, $qrWidth, $qrHeight, 'PNG');


/*
// Agregar el título "QR code" encima de la imagen
$pdf->SetFont($font_name, 'B', $font_size); // Establecer la fuente y el tamaño
$pdf->SetTextColor(0, 0, 0); // Establecer el color del texto (en este caso, negro)
$pdf->SetXY($qrX2, $qrY - 4); // Establecer la posición del título encima de la imagen
$pdf->Cell(0, 0, 'QR code', 0, 1, 'C'); // Agregar el título
$pdf->SetFont($font_name, '', $font_size); // Restaurar la fuente y el tamaño*/

// $x y $y son las coordenadas donde se encuentra la imagen del código QR
// $ancho y $alto son el ancho y alto de la imagen del código QR



if (!empty($invoice->clientnote)) {

    $pdf->Ln(2); // Reducir espacio vertical a 2 unidades


    $pdf->SetFont($font_name, 'B', $font_size);

    $pdf->Cell(0, 0, _l('invoice_note'), 0, 1, 'L', 0, '', 0);

   $pdf->SetFont($font_name, 'B', $font_size - 2);  // Reduce el tamaño de fuente en 2 unidades


    $pdf->Ln(2);

    $pdf->writeHTMLCell('', '', '', '', $invoice->clientnote, 0, 1, false, true, 'L', true);

}



if (!empty($invoice->terms)) {

    $pdf->Ln(2); // Reducir espacio vertical a 2 unidades


    $pdf->SetFont($font_name, 'B', $font_size);

    $pdf->Cell(0, 0, _l('terms_and_conditions') . ':', 0, 1, 'L', 0, '', 0);

   $pdf->SetFont($font_name, 'B', $font_size - 2);  // Reduce el tamaño de fuente en 2 unidades


    $pdf->Ln(2);

    $pdf->writeHTMLCell('', '', '', '', $invoice->terms, 0, 1, false, true, 'L', true);

}

