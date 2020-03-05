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
class Books extends REST_Controller {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model(array('books_m'=>'bkm'));

        // Configure limits on our controller methods
        // Ensure you have created the 'limits' table and enabled 'limits' within application/config/rest.php
        $this->methods['users_get']['limit'] = 500; // 500 requests per hour per user/key
        $this->methods['borrowbook_post']['limit'] = 500; // 500 requests per hour per user/key
        $this->methods['save_post']['limit'] = 100; // 100 requests per hour per user/key
        $this->methods['users_delete']['limit'] = 50; // 50 requests per hour per user/key
    }

     public function list_get()
    {
          $books = $this->bkm->listbooks();
         if ($books) {
       //     $message = array('status' => 'success', );
            $this->set_response($books, REST_Controller::HTTP_OK);
            
          }
         
    }
    public function listborrowed_get()
    {
          $books = $this->bkm->borrowedbooks();
         if ($books) {
       //     $message = array('status' => 'success', );
            $this->set_response($books, REST_Controller::HTTP_OK);
          }
         
    }
     public function view_get()
    {     $book_id = $this->input->get('book_id');
          $books = $this->bkm->viewbook($book_id);
         if ($books) {
       //     $message = array('status' => 'success', );
            $this->set_response($books, REST_Controller::HTTP_OK);
          }
         
    }
    public function borrowbook_post()
    {    
         $books = $this->bkm->borrow();
         if ($books) {
            $message = array('status' => 'success', );
            $this->set_response($message, REST_Controller::HTTP_OK);
            
          }
         
    }
    public function returnbook_post()
    {    
         $books = $this->bkm->returnbk();
         if ($books) {
            $message = array('status' => 'success', );
            $this->set_response($message, REST_Controller::HTTP_OK);
            
          }
         
    }

   

}
