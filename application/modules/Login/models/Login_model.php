<?php

class Login_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function loginData($username, $password) {
        $this->db->select("*")
                ->from("user")
                ->where("is_deleted = 'N' and username = '" . $username . "' and password = '" . $password . "'");
        $q = $this->db->get();
        $data = $q->result();
        if (!empty($data)) {
            $data["message"] = "";
            if (@$data[0]->is_block == "Y") {
                $data["message"] = "is_block";
            } else {
                if (@$data[0]->is_login == "N") {
                        $data_update = array(
                            'is_login' => "Y"
                        );
                        $this->db->trans_start();
                        $this->db->where('username', $username);
                        $this->db->update('user', $data_update);
                        $this->db->trans_complete();
                        $session_arr = array("userid" => $data[0]->user_id,
                            "username" => $data[0]->username,
                            "fullname" => $data[0]->fullname,
                            "roleid" => $data[0]->role_id, 
                            "departementid" => $data[0]->departement_id,
                            "email" => $data[0]->email,
                            "password" => $data[0]->password);
                        $this->session->set_userdata($session_arr);
                } else {
                    $data["message"] = "is_login";                
                }
            }
        }
        return $data;
    }

    // function chkPassword($username, $password) {
    //     $salt = get_name("USER", "SALT", "USERNAME", addslashes($username)," AND IS_DELETED = 'N'");
    //     if (!empty($salt)) {
    //         $password = md5(md5($password) . $salt);
    //     } else {
    //         $password = md5($password);
    //     }

    //     $this->db->select("*")
    //             ->from("USER")
    //             ->where("USERNAME = '" . addslashes($username) . "' and PASSWORD = '" . addslashes($password) . "'");
    //     $q = $this->db->get();
    //     $data = $q->result();

    //     if (empty($data)) {

    //         return "wrong";
    //     } else {
    //         return "right";
    //     }
    // }

    // function oginAta($username, $password) {
    //     $salt = get_name("USER", "SALT", "USERNAME", addslashes($username)," AND IS_DELETED = 'N'");
    //     $password_limit_age = getPref("_CHANGE_PASSWORD_SCHEDULE");
    //     $password_in = $password;
    //     $password = md5(md5($password) . $salt);

    //     $this->db->select("USER.*, UI_GROUPS.GROUP_NAME as GROUP_NAME")
    //             ->from("USER")
    //             ->join("UI_GROUPS", "USER.GROUP_ID = UI_GROUPS.GROUP_ID")
    //             ->where("LIMIT 2 ");
    //     $q = $this->db->get();


    //     $data = $q->result();
    // }

}

?>
