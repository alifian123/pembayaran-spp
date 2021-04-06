<?php
class M_Petugas extends CI_Model {
    function data_petugas(){
        $query = $this->db->query("select * from petugas");
        return $query;
    }

    function simpan(){
        $data = array('username' => $this->input->post('username'),
                'password' => md5($this->input->post('password')),
                'nama_petugas' => $this->input->post('nama_petugas'));
        $insert = $this->db->insert('petugas',$data);
    }
    function data_petugas_by_id($id){
$query = $this->db->query("select * from petugas where id_petugas = '$id'");
return $query;
}
function update(){
$where = array('id_petugas'=> $this->input->post('id_petugas'));

$data1 = array('password' => md5($this->input->post('password')),
'nama_petugas' => $this->input->post('namalengkap'),
'username' => $this->input->post('username'),
'level' => $this->input->post('level'));

 $data2 = array('nama_petugas' => $this->input->post('namalengkap'),
'level' => $this->input->post('level'));

if (empty($this->input->post('password'))) {
$this->db->where($where);
$query = $this->db->update('petugas',$data2);
}else{
  $this->db->where($where);
$query = $this->db->update('petugas',$data1);
}
if ($query > 0) {
$this->session->set_flashdata('suksessimpan','Data Petugas Berhasil
Diperbaharui');
}
}

    function hapus_data_petugas($id){
        $query = $this->db->query("delete from petugas where id_petugas = '$id'");
        if($query > 0){
            $this->session->set_flashdata('suksessimpan','Data petugas Berhasil Dihapus');
        }else{
        $this->sesssion->set_flashdata('gagalsimpan','Data petugas Gagal dihapus');    
        }
    }
}