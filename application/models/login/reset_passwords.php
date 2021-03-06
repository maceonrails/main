<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reset_passwords extends CI_Model {
  public function __construct()
  {
      parent::__construct();
  }

  public function find_all() {
    $query = $this->db->get('resets');

    if($query->num_rows() > 0){
        return $query->result_array();
    } else {
        return 0;
    }
  }

  function find($token){
    $this->db->where(array('token' => $token));
    $query = $this->db->get('resets');

    if($query->num_rows() > 0){
      $user = $query->result_array();
      return $user[0];
    } else {
      return 0;
    }
  }

  function create($data) {
    $query = $this->db->insert('resets', $data);

    return $query;
  }

  function update($id, $data) {
    $this->db->where('id', $id);
    $query = $this->db->update('resets', $data);

    return $query;
  }

  function remove($id) {
    $query = $this->db->delete('resets', array('user_id' => $id));

    return $query; 
  }

  function delete_all() {
    $query = $this->db->empty_table('resets');

    return $query;
  }
}
