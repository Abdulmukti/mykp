<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai_m extends CI_Model {

    public function get($id = null)
    {
        $this->db->from('pegawai');
        if($id != null){
            $this->db->where('NIP', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params['NIP']=$post['nip'];
        $params['NIK']=$post['nik'];
        $params['NPWP']=$post['npwp'];
        $params['nama']=$post['nama'];
        $params['tempat_lahir']=$post['tempatlahir'];
        $params['tanggal_lahir']=$post['tanggallahir'];
        $params['jenis_kelamin']=$post['jeniskelamin'];
        $params['alamat']=$post['alamat'];
        $params['no_telepone']=$post['notelepone'];
        $this->db->insert('pegawai',$params);
    }
}