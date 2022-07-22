<?php

class Admin extends MX_Controller {

    public function __construct(){
        parent::__construct();
        
        $this->load->model('Admin_model');
    }

    function index() {


        $this->template->write_view('content', 'admin_view', TRUE);
        $this->template->render(); 

    }

    function getDataProduct(){
        $data = $this->Admin_model->getModelProduct();
        $output = array(
            "data" => array()
        );
        foreach ($data as $row) {
            if ($row['status'] == 'bisa dijual') {
                $output['data'][] = $row;
                
            }
        }

        echo json_encode($output);
    }

    function getDataProductDetail() {
        $data = $this->input->post();
        $response = $this->Admin_model->getDetailProduk($data);
        
        echo json_encode($response);
    }

    function insertProduct(){
        $dataInsert = $this->input->post();    
        $response = $this->Admin_model->insert($dataInsert);
        echo json_encode($response);
    }

    function DeleteProduct(){
        $data = $this->input->post();
        $response = $this->Admin_model->delete($data);
        
        echo json_encode($response);
    }

    function ProductEdit(){
        $data = $this->input->post();
        $response = $this->Admin_model->UpdateProduk($data);
        
        echo json_encode($response);
    }

}

?>