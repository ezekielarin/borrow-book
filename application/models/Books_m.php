<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Books_m extends CI_Model
{
	

	public function __construct()
	{
	
		$this->load->helper('date');
		$this->load->helper('string');
	}
	
	public function listbooks()
	{
		$this->db->select('*');
		$this->db->from('books');			
		$query = $this->db->get()->result();
		
		if ($query) {
			return $query;
		}
	}

	public function borrowedbooks()
	{
		$this->db->select('*');
		$this->db->from('borrowed');			
		$this->db->join('users','users.uid=borrowed.user_id');			
		$this->db->join('books','books.bid=borrowed.book_id');			
		$query = $this->db->get()->result();
		
		if ($query) {
			return $query;
		}
	}

	public function viewbook($book_id)
	{
		$this->db->select('*');
		$this->db->from('books');			
		$this->db->where('bid',$book_id);			
		$query = $this->db->get()->row();
		
		if ($query) {
			return $query;
		}
	}

	public function borrow()
	{  
	    $book_id = $this->input->post('book_id');
		$check = $this->db->query("SELECT * FROM books WHERE bid='$book_id'")->row();
		if ($check->copies != "0") {
			
		$data = array(
	      'book_id' => $this->input->post('book_id'), 
	      'user_id' => $this->input->post('user_id'), 
	      'date_borrowed' => date('d-m-Y H:i:s'), 
	      'return_date' => $this->input->post('return_date'), 
	      'date_returned' => "000000", 
	      'status' => "pending", 
	    );
	    $borrow = $this->db->insert("borrowed", $data);
	    if ($borrow) {
	    	$this->updateqty($book_id);
	    }
        }else{
	       return "book borrowed";
		}
	}

    public function updateqty($book_id)
	{
		$this->db->select('*');
		$this->db->from('books');			
		$this->db->where('bid',$book_id);			
		$query = $this->db->get()->row();
		
		$copies = ($query->copies)-1;
		$where = array(
			'bid' => $book_id, 
		);
		$data = array(
			'copies' => $copies, 
		);
		$this->db->update('books',$data, $where);
	}

	public function returnbk()
	{
		$book_id = $this->input->post('book_id');
	    $where = array(
	    	'user_id' => $this->input->post('user_id'),
	    	'book_id' => $this->input->post('book_id'), 
	    );
		$data = array(
	      'date_returned' => date('d-m-Y H:i:s'),
	      'status' => "returned",
	    );
        $query = $this->db->update("borrowed",$data, $where);
		if ($query) {
			$this->returnupdate($book_id);
		}
	}

	public function returnupdate($book_id)
	{
		$this->db->select('*');
		$this->db->from('books');			
		$this->db->where('bid',$book_id);			
		$query = $this->db->get()->row();
		
		$copies = ($query->copies)+1;
		$where = array(
			'bid' => $book_id, 
		);
		$data = array(
			'copies' => $copies, 
		);
		$this->db->update('books',$data, $where);
	
	}

}