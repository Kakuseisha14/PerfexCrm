<?php



use app\services\AbstractKanban;



defined('BASEPATH') or exit('No direct script access allowed');




class Main_model extends App_Model {



    function getSucursales(){

        $response = array();
        
        // Select record
        $this->db->select('*');
        $this->db->order_by('sucursal', 'asc');
        $q = $this->db->get('tblsucursal');
        $response = $q->result_array();

        return $response;
    }

    function getCajasRegistradas(){
        $response = array();

        $this->db->select('*');
        $this->db->order_by('caja', 'asc');
        $q = $this->db->get('tblcajasSucursales');
        $response = $q->result_array();

        return $response;
    }

    // Get cities
    function getCity(){

        $response = array();
        
        // Select record
        $this->db->select('*');
        $this->db->order_by('provincias','asc');
        $q = $this->db->get('provincias');
        $response = $q->result_array();

        return $response;
    }

  

     // Get Caja Sucursales
     function getCajaSucursales($postData){
        $response = array();
        
        // Select record
        $this->db->select('id,caja');
        $this->db->order_by('caja', 'asc');
        $this->db->where('idSucursal', $postData['sucursal']);
        $q = $this->db->get('tblcajasSucursales');
        $response = $q->result_array();

        return $response;
    }

    // Get City departments
    function getCityDepartment($postData){
        $response = array();
        
        // Select record
        $this->db->select('id_distrito,distrito');
        $this->db->order_by('distrito', 'asc');
        $this->db->where('id_provincias', $postData['city']);
        $q = $this->db->get('distritos');
        $response = $q->result_array();

        return $response;
    }

    // Get Department user
    function getDepartmentUsers($postData){
        $response = array();
        
        // Select record
        $this->db->select('id_corregimiento,corregimiento');
        $this->db->order_by('corregimiento', 'asc');
        $this->db->where('id_provincia', $postData['sel_city']);
        $this->db->where('id_distritos', $postData['department']);
        $q = $this->db->get('corregimientos');
        $response = $q->result_array();

        return $response;
    }

}

