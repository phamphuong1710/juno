<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class Login extends CI_Controller{
    
    function __construct(){
        parent::__construct();
    }
    
    public function index($msg = NULL){
        // Load our view to be displayed
        // to the user
        $data['msg'] = $msg;
        $this->load->view('admin/login/form_login.php', $data);
    }
    
    public function process(){
        $this->load->model('login_model');
        $result = $this->login_model->validate();
        if(! $result){

            $msg = '<font color=red>Invalid username and/or password.</font><br />';
            $this->index($msg);
        }else{
            redirect('Admin/index');
        }        
    }
}
?>