<?php

class M_Registration extends CI_Model{
    
    function add_data(){

      $Username = $this->input->post('Username');
      $Email = $this->input->post('Email');
      $Password = password_hash($this->input->post('Password'),PASSWORD_DEFAULT);
        
      $data = array(
          'Username' => $Username,
          'Email' => $Email,
          'Password' => $Password,
          'role_id' => 0,
          'is_active' => 1,
          'date_created' => time()
        );
        $this->db->insert('account',$data);
      }

    function get_account()
      {
        $data = $this->db->get('account');
                return $data->result();
      }

    function get_spesifik_account($Username)
    {
      $this->db->where('Username', $Username);
      $data = $this->db->get('account');
      return $data->result();
    } 
    
    public function update_account($data_account)
    {
      $Username = $this->input->post('Username');
      $Email = $this->input->post('Email');
      $Password =  $this->input->post('Password');     
      
      $data = array(
        'Username'  => $Username,
        'Email'       => $Email,
        'Password'   => $Password
        );

        $where = array(
          'Username' => $Username
        );
        $this->db->where($where);
        $this->db->update('account',$data);
    }
    public function delete_account($Username)
    {
        $this->db->delete('account', array('Username' => $Username));
    }
}


?>