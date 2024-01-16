<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php init_head(); ?>

<div id="wrapper">

    <div class="content">

        <div class="row">

            <?php
           /* $uri_string = $this->uri->uri_string();
            $segments = explode('/', $uri_string);
            
            // El primer segmento es el controlador, el segundo es el método
            $controller = isset($segments[1]) ? $segments[1] : 'default_controller';
            $method = isset($segments[2]) ? $segments[2] : 'index';
            
            echo "El formulario apunta al controlador: $controller y al método: $method";*/
            

            echo form_open($this->uri->uri_string(), ['id' => 'invoice-form', 'class' => '_transaction_form invoice-form']);

            if (isset($invoice)) {

                echo form_hidden('isedit');

            }

            ?>

            <div class="col-md-12">

                <h4

                    class="tw-mt-0 tw-font-semibold tw-text-lg tw-text-neutral-700 tw-flex tw-items-center tw-space-x-2">

                    <span>

                        <?php echo isset($invoice) ? format_invoice_number($invoice) : _l('create_new_invoice'); ?>

                    </span>

                    <?php echo isset($invoice) ? format_invoice_status($invoice->status) : ''; ?>

                </h4>

                <?php $this->load->view('admin/invoices/invoice_template'); ?>

            </div>

            <?php echo form_close(); ?>

            <?php $this->load->view('admin/invoice_items/item'); ?>

        </div>

    </div>

</div>

<?php init_tail(); ?>

<script>

$(function() {

    validate_invoice_form();

    // Init accountacy currency symbol

    init_currency();

    // Project ajax search

    init_ajax_project_search_by_customer_id();

    // Maybe items ajax search

    init_ajax_search('items', '#item_select.ajax-search', undefined, admin_url + 'items/search');

});

</script>
<!-- Script -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>




<script type='text/javascript'>
    // baseURL variable
    var baseURL= "<?php echo base_url();?>";
    
    $(document).ready(function(){
        
        // City change
        $('#sel_city').change(function(){
            var city = $(this).val();

            // AJAX request
            $.ajax({
                url:'<?=base_url()?>admin/invoices/getCityDepartment',
                method: 'post',
                data: {city: city},
                dataType: 'json',
                success: function(response) {
    // Remove options
    $('#sel_user').find('option').not(':first').remove();
    $('#sel_depart').find('option').not(':first').remove();

    // Construct options
    var options = '';

    $.each(response, function(index, data) {
        options += '<option value="' + data['id_distrito'] + '">' + data['distrito'] + '</option>';
    });

    // Add options to the select element
    $('#sel_depart').append(options);
     // Refresh the selectpicker
     $('#sel_depart').selectpicker('refresh');
}

            });
        });
        
        // Department change
        $('#sel_depart').change(function(){
            var department = $(this).val();

            var sel_city = $('#sel_city').val();
            console.log(sel_city);

            // AJAX request
            $.ajax({
                url:'<?=base_url()?>admin/invoices/getDepartmentUsers',
                method: 'post',
                data: {department: department,
                    sel_city:sel_city
                },
                dataType: 'json',
                success: function(response){
                  
                    // Remove options
                    $('#sel_user').find('option').not(':first').remove();

                    // Construct options
                     var options = '';

                    // Add options
                    $.each(response, function(index, data) {
                    options += '<option value="' + data['id_corregimiento'] + '">' + data['corregimiento'] + '</option>';
                    });

                     // Add options to the select element
                    $('#sel_user').append(options);
                    $('#sel_user').selectpicker('refresh');
                    
                }
            });
        });






          // Sucursales
          $('#sel_sucursal').change(function(){
            var sucursal = $(this).val();
            //alert(sucursal)

            // AJAX request
            $.ajax({
                url:'<?=base_url()?>admin/invoices/getCajaSucursales',
                method: 'post',
                data: {sucursal: sucursal},
                dataType: 'json',
                success: function(response) {
    // Remove options
    $('#sel_caja').find('option').not(':first').remove();


    // Construct options
    var options = '';

    $.each(response, function(index, data) {
        options += '<option value="' + data['id'] + '">' + data['caja'] + '</option>';
    });

    // Add options to the select element
    $('#sel_caja').append(options);
     // Refresh the selectpicker
     $('#sel_caja').selectpicker('refresh');
}

            });
        });


        
         





        
    });
</script>

</body>



</html>