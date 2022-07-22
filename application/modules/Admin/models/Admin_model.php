<?php

class Admin_model extends CI_Model {
    function __construct() {
              parent::__construct();
    }

    function getModelProduct() {
        $this->db->select("*")->from("product");
        $q = $this->db->get();
        return $q->result_array();
    }

    function insert($data){
        $insertedValue['id_produk'] = $data['id_produk'];
        $insertedValue['nama_produk'] = $data['nama_produk'];
        $insertedValue['harga'] = $data['harga'];
        $insertedValue['kategori'] = $data['kategori'];
        $insertedValue['status'] = $data['status'];

        $this->db->trans_start();
        $this->db->insert('product', $insertedValue);
        $this->db->trans_complete();

        $returnData = new \stdClass();
        $returnData->status_code = "200";
        $returnData->message = 'Success';

        return $returnData;
    }

    function delete($data){
        $this->db->where('id_produk', $data['id']);
        $this->db->delete('product');
        
        $returnData = new \stdClass();
        $returnData->status_code = "200";
        $returnData->message = 'Success';

        return $returnData;
    }

    function getDetailProduk($data){
        $this->db->select("*");
        $this->db->from("product");
        $this->db->where("id_produk", $data['id']);

        $q = $this->db->get();
        $data = $q->result();
        return $data;
    }

    function UpdateProduk($data){
        $updatedValue['id_produk'] = $data['id_produk'];
        $updatedValue['nama_produk'] = $data['nama_produk'];
        $updatedValue['harga'] = $data['harga'];
        $updatedValue['kategori'] = $data['kategori'];
        $updatedValue['status'] = $data['status'];

        $this->db->trans_start();
        $this->db->where('id_produk', $data['id_produk']);
        $this->db->update('product', $updatedValue);
        $this->db->trans_complete();

        $returnData = new \stdClass();
        $returnData->status_code = "200";
        $returnData->message = 'Success';

        return $returnData;
    }
 
}

?>
