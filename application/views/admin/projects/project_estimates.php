<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php include_once(APPPATH . 'views/admin/estimates/estimates_top_stats.php'); ?>
<div class="panel_s panel-table-full ">
    <div class="panel-body">
        <div class="project_estimates">
            <?php $this->load->view('admin/estimates/list_template'); ?>
        </div>
    </div>
</div>