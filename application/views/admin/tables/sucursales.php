<?php

// invoice_items.php

defined('BASEPATH') or exit('No direct script access allowed');

$aColumns = [];

if (has_permission('items', '', 'delete')) {
    $aColumns[] = '1';
}

$aColumns = array_merge($aColumns, [
    
    'sucursal',
    'id',
    
]);

$sIndexColumn = 'id';

$sTable       = db_prefix() . 'sucursal';


$join = [];
$additionalSelect = [
    db_prefix() . 'sucursal.id, status',
];

$custom_fields = get_custom_fields('items');

foreach ($custom_fields as $key => $field) {
    $selectAs = (is_cf_date($field) ? 'date_picker_cvalue_' . $key : 'cvalue_' . $key);

    array_push($customFieldsColumns, $selectAs);
    array_push($aColumns, 'ctable_' . $key . '.value as ' . $selectAs);
    array_push($join, 'LEFT JOIN ' . db_prefix() . 'customfieldsvalues as ctable_' . $key . ' ON ' . db_prefix() . 'items.id = ctable_' . $key . '.relid AND ctable_' . $key . '.fieldto="items_pr" AND ctable_' . $key . '.fieldid=' . $field['id']);
}

// Fix for big queries. Some hosting have max_join_limit
if (count($custom_fields) > 4) {
    @$this->ci->db->query('SET SQL_BIG_SELECTS=1');
}

// ...

$result  = data_tables_init($aColumns, $sIndexColumn, $sTable, $join, [], $additionalSelect);

$output  = $result['output'];
$rResult = $result['rResult'];



foreach ($rResult as $aRow) {
    $row = [];

    if ($aRow['status'] =='activo') {
        $tituloBoton=_l('deletes');
    }else{
        $tituloBoton=_l('deletesDos');
    }

    $row[] = '<div class="checkbox"><input type="checkbox" value="' . $aRow['id'] . '"><label></label></div>';

    $descriptionOutput = '<a href="#" data-toggle="modal" data-target="#sales_item_modal" data-id="' . $aRow['id'] . '">' . $aRow['sucursal'] . '</a>';
    $descriptionOutput .= '<div class="row-options">';

    if (has_permission('items', '', 'edit')) {
        $descriptionOutput .= '<a href="#" data-toggle="modal" data-target="#sales_item_modal" data-id="' . $aRow['id'] . '">' . _l('edit') . '</a>';
    }

    if ($aRow['status'] =='activo') {
        $tituloBoton=_l('deletes');
        if (has_permission('items', '', 'delete')) {
            $descriptionOutput .= ' | <a href="' . admin_url('template_module/delete/' . $aRow['id']) . '" class="text-danger _delete">' . $tituloBoton . '</a>';
        }
    }else{
        $tituloBoton=_l('deletesDos');

        if (has_permission('items', '', 'delete')) {
            $descriptionOutput .= ' | <a href="' . admin_url('template_module/habilitar/' . $aRow['id']) . '" class="text-danger _delete">' . $tituloBoton . '</a>';
        }
    }

    

    /*if (has_permission('items', '', 'create')) {
        $descriptionOutput .= ' | <a href="' . admin_url('template_module/copy/' . $aRow['id']) . '" class=" _edit_item">' . _l('copy') . '</a>';
    }*/

    $descriptionOutput .= '</div>';

    $row[] = $descriptionOutput;
    
    if ($aRow['id'] > 9 && $aRow['id'] < 100) {
        $row[] = '00'.$aRow['id'];
    }elseif ($aRow['id'] > 100 && $aRow['id'] < 1000) {
        $row[] = '0'.$aRow['id'];
    }elseif ($aRow['id'] > 1000) {
        $row[] = $aRow['id'];
    }
    
    else {
        $row[] = '000'.$aRow['id'];
    }
   

    // Custom fields add values
    foreach ($customFieldsColumns as $customFieldColumn) {
        $row[] = (strpos($customFieldColumn, 'date_picker_') !== false ? _d($aRow[$customFieldColumn]) : $aRow[$customFieldColumn]);
    }

    $row['DT_RowClass'] = 'has-row-options';

    $output['aaData'][] = $row;
}

// ...

echo json_encode($output);
die;
