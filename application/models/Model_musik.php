<?php
  class Model_musik extends CI_Model{

    // Ambil semua data musik di tbl_musik
    public function getDataMusik()
    {
      return $this->db->from('tbl_musik')->join('tbl_genre','tbl_genre.id_genre = tbl_musik.id_genre')->get()->result();
    }

    // Ambil semua data genre musik
    public function AllGenre()
    {
      return $this->db->get('tbl_genre')->result_array();
    }

    public function tambahMusik()
    {
      $data = [
        "nama_band" => $this->input->post('nama_band',true),
        "judul_musik" => $this->input->post('judul_musik',true),
        "id_genre" => $this->input->post('id_genre',true),
      ];

      $this->db->insert('tbl_musik',$data);
    }
    
    public function hapusMusik($id)
    {
      $this->db->delete('tbl_musik', ['id_musik' => $id]);
    }

    public function getMusikById($id)
    {
      return $this->db->get_where('tbl_musik',['id_musik' => $id])->row_array();
    }

    public function ubahMusik()
    {
      $data = [
        "nama_band" => $this->input->post('nama_band',true),
        "judul_musik" => $this->input->post('judul_musik',true),
        "id_genre" => $this->input->post('id_genre',true)
      ];
      $this->db->where('id_musik', $this->input->post('id_musik'));
      $this->db->update('tbl_musik',$data);
    }

  }//akhir class
?>