<?php

defined('BASEPATH') or exit('No direct script access allowed');

$dimensions = $pdf->getPageDimensions();

// Get Y position for the separation
$y = $pdf->getY();



$logo_image_url = 'data:image/jpeg;base64,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'; // Reemplaza 'URL_DEL_LOGO' con la URL real de la imagen del logo en el servidor.

$receit_heading = '<br>
<p style="text-align:center" ><b>Comprobante Auxiliar de Factura Electrónica</b></p>
<div style="text-align:center">
    <img src="' . $logo_image_url . '" alt="Logo"><br>
    <p style="text-align:center" >Farmacia Arrocha, S. A. </p>
    <p style="text-align:center" >RUC: 346-266-76470  DV: 13</p>
    <p style="text-align:center" > PANAMA, PANAMA, BELLA VISTA</p>
    <p style="text-align:center" >calle Via España A, Aquilino De la Guardia Nº6.</p>
    ' . mb_strtoupper(_l('payment_receipt'), 'UTF-8') . '
</div>';






$pdf->Ln(20);
$pdf->writeHTMLCell(0, '', '', '', $receit_heading, 0, 1, false, true, 'L', true);
$pdf->SetFontSize($font_size);
$pdf->Ln(20);

$company_info = '<div style="color:#424242;">';
$company_info .= format_organization_info();
$company_info .= '</div>';

// Bill to
$client_details = format_customer_info($payment->invoice_data, 'payment', 'billing');

$left_info  = $swap == '1' ? $client_details : $company_info;
$right_info = $swap == '1' ? $company_info : $client_details;

pdf_multi_row($left_info, $right_info, $pdf, ($dimensions['wk'] / 1) - $dimensions['lm']);

//$pdf->SetFontSize(15);









if (!empty($payment->paymentmethod)) {
    $payment_name .= ' - ' . $payment->paymentmethod;
}

$pdf->Cell(0, 0, _l('payment_view_mode') . ' ' . $payment_name, 0, 1, 'L', 0, '', 0);

if (!empty($payment->transactionid)) {
    $pdf->Ln(3);
    $pdf->Line($pdf->getX(), $pdf->getY(), 90, $pdf->getY());
    $pdf->Ln(3);
    $pdf->Cell(0, 0, _l('payment_transaction_id') . ': ' . $payment->transactionid, 0, 1, 'L', 0, '', 0);
}

$pdf->Ln(3);
$pdf->Line($pdf->getX(), $pdf->getY(), 90, $pdf->getY());
$pdf->Ln(3);
$pdf->SetFillColor(132, 197, 41);
$pdf->SetTextColor(255);
$pdf->SetFontSize(12);
$pdf->Ln(3);
$pdf->Cell(80, 10, _l('payment_total_amount'), 0, 1, 'C', '1');
$pdf->SetFontSize(11);
$pdf->Cell(80, 10, app_format_money($payment->amount, $payment->invoice_data->currency_name), 0, 1, 'C', '1');

$pdf->Ln(10);
$pdf->SetTextColor(0);
$pdf->SetFont($font_name, 'B', 14);
$pdf->Cell(0, 0, _l('payment_for_string'), 0, 1, 'L', 0, '', 0);
$pdf->SetFont($font_name, '', $font_size);
$pdf->Ln(5);

// Header
$tblhtml = '<table width="100%" bgcolor="#fff" cellspacing="0" cellpadding="5" border="0">
<tr height="30" style="color:#fff;" bgcolor="#3A4656">
    <th width="' . ($amountDue ? 20 : 25) . '%;">' . _l('payment_table_invoice_number') . '</th>
    <th width="' . ($amountDue ? 20 : 25) . '%;">' . _l('payment_table_invoice_date') . '</th>
    <th width="' . ($amountDue ? 20 : 25) . '%;">' . _l('payment_table_invoice_amount_total') . '</th>
    <th width="' . ($amountDue ? 20 : 25) . '%;">' . _l('payment_table_payment_amount_total') . '</th>';
    if ($amountDue) {
        $tblhtml .= '<th width="20%">' . _l('invoice_amount_due') . '</th>';
    }

$tblhtml .= '</tr>';

$tblhtml .= '<tbody>';
$tblhtml .= '<tr>';
$tblhtml .= '<td>' . format_invoice_number($payment->invoice_data->id) . '</td>';
$tblhtml .= '<td>' . _d($payment->invoice_data->date) . '</td>';
$tblhtml .= '<td>' . app_format_money($payment->invoice_data->total, $payment->invoice_data->currency_name) . '</td>';
$tblhtml .= '<td>' . app_format_money($payment->amount, $payment->invoice_data->currency_name) . '</td>';
if ($amountDue) {
    $tblhtml .= '<td style="color:#fc2d42">' . app_format_money($payment->invoice_data->total_left_to_pay, $payment->invoice_data->currency_name) . '</td>';
}
$tblhtml .= '</tr>';
$tblhtml .= '</tbody>';
$tblhtml .= '</table>';
$pdf->writeHTML($tblhtml, true, false, false, false, '');
