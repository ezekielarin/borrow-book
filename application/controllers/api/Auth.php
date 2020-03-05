<?php
header("Access-Control-Allow-Origin: *");
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
//To Solve File REST_Controller not found
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

/**
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array
 *
 * @package         CodeIgniter
 * @subpackage      Rest Server
 * @category        Controller
 * @author          Phil Sturgeon, Chris Kacerguis
 * @license         MIT
 * @link            https://github.com/chriskacerguis/codeigniter-restserver
 */
class Auth extends REST_Controller {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('riders_m');
        $this->load->model('drivers_m');
        $this->load->model('api_auth');

        // Configure limits on our controller methods
        // Ensure you have created the 'limits' table and enabled 'limits' within application/config/rest.php
        $this->methods['register_post']['limit'] = 500; // 500 requests per hour per user/key
        $this->methods['login_get']['limit'] = 500; // 500 requests per hour per user/key
        $this->methods['checkmail_get']['limit'] = 500; // 500 requests per hour per user/key
        $this->methods['users_post']['limit'] = 100; // 100 requests per hour per user/key
        $this->methods['users_delete']['limit'] = 50; // 50 requests per hour per user/key
       // $this->methods['write_post']['limit'] = 1000; // 50 requests per hour per user/key
    }


    public function login_get()
    {
          // $key = 'DJe343f';
          $key = $this->get('api_key');
          //$usertype = $this->get('usertype');
          $username = $this->get('username');
          $password = $this->get('password');
          $riders = $this->db->query("SELECT * FROM rider WHERE email='$username'")->row();
        //$riders = $this->aauth->loguser($key,$usertype,$username,$password);
        
        if($riders)
        {
            // Set the response and exit
            $this->set_response($riders, REST_Controller::HTTP_OK); 
        }else{
            $this->set_response($riders, REST_Controller::HTTP_OK); 
        }

    }
    public function checkmail_get()
    {
        $email = $this->get('email');
        $mail = $this->db->query("SELECT * FROM rider WHERE email='$email'")->row();
        if ($mail)
        {
            // Set the response and exit
            $this->set_response('exists', REST_Controller::HTTP_OK); 
        }else{
            $this->set_response('available', REST_Controller::HTTP_OK);
        }

    }

    public function checkphone_get()
    {
        $phone = $this->get('phone');
        $check = $this->db->query("SELECT * FROM rider WHERE mobile_number='$phone'")->row();
        if ($check)
        {
            // Set the response and exit
            $this->set_response('exists', REST_Controller::HTTP_OK); 
        }else{
            $this->set_response('available', REST_Controller::HTTP_OK);
        }

    }
    public function profile_get($rider_id)
    {
        $rider =$this->riders_m->profile($rider_id);
        if ($rider)
        {
            // Set the response and exit
            $this->set_response($rider, REST_Controller::HTTP_OK); 
        }

    }

     public function register_post()
    {
        $data = array(
        'first_name' => $this->post('first_name'), 
        'last_name' => $this->post('last_name'), 
        'email' => $this->post('email'), 
        'gender' => $this->post('gender'), 
        'address' => $this->post('address'), 
        'password' => $this->post('password'), 
        'mobile_number' => $this->post('mobile_number'), 
       );
        $query = $this->db->insert('rider',$data);
        if ($query) {
           
            $this->set_response($query, REST_Controller::HTTP_OK); 
        }

    }
    public function all_get()
    {
        $riders = $this->riders_m->listriders();
        if ($riders)
        {
            // Set the response and exit
            $this->set_response($riders, REST_Controller::HTTP_OK); 
        }

    }
    public function forgot_password_get($rider_id)
    {
        $rider =$this->riders_m->address($rider_id);
        if ($rider)
        {
            // Set the response and exit
            $this->set_response($rider, REST_Controller::HTTP_OK); 
        }

    }

    public function reset_password_post()
    {
        $rider_id = $this->input->post('rider_id');
         $tx = $this->riders_m->transactions($rider_id);
        if ($stats)
        {
            // Set the response and exit
            $this->set_response($stats, REST_Controller::HTTP_OK); 
        }
       

    }
    
}

