<?php
    class M_siswa extends CI_Model{
        function tampil_data_siswa(){
            return $this->db->get('tbl_siswa');
        }
    }
?>