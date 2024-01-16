<?php

//CityModel.php

defined('BASEPATH') or exit('No direct script access allowed');

class CityModel extends App_Model{

	protected $table = 'city';

	protected $primaryKey = 'city_id';

	protected $allowedFields = ['state_id', 'city_name'];

}

?>