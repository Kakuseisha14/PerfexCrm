<?php

//CountryModel.php

defined('BASEPATH') or exit('No direct script access allowed');





class CountryModel extends App_Model{

	protected $table = 'country';

	protected $primaryKey = 'country_id';

	protected $allowedFields = ['country_name'];

}	

?>