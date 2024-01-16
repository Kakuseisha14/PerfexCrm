<?php

//StateModel.php

defined('BASEPATH') or exit('No direct script access allowed');


class StateModel extends App_Model{

	protected $table = 'state';

	protected $primaryKey = 'state_id';

	protected $allowedFields = ['country_id', 'state_name'];

}	

?>
