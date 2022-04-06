<?php 
    class Siswa extends CI_controller{
        function tampil_data_siswa()
        {
            $this->load->model('M_siswa');
            $data['siswa'] = $this->M_siswa->tampil_data_siswa()->result();
            $this->load->view('v_tampil_siswa',$data);
        }
    }
?>