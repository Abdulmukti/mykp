<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_m extends CI_Model {

    public function login($post)
    {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('username', $post['username']);
        $this->db->where('password', md5($post['password']));
        $query = $this->db->get();
        return $query;
    }

    public function get($id = null)
    {
        $this->db->from('admin');
        if($id != null){
            $this->db->where('admin_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params['nama']=$post['nama'];
        $params['username']=$post['username'];
        $params['password']=md5($post['password']);
        $params['alamat']=$post['alamat'];
        $this->db->insert('admin',$params);
    }

    public function edit($post)
    {
        $params['nama']=$post['nama'];
        $params['username']=$post['username'];
        if(!empty($post['password'])){
            $params['password']=md5($post['password']);
        }
        
        $params['alamat']=$post['alamat'] != "" ? $post['alamat'] : null;
        $this->db->where('admin_id', $post['admin_id']);
        $this->db->update('admin',$params);
    }

    public function del($id)
    {
        $this->db->where('admin_id', $id);
        $this->db->delete('admin');
    }
}
