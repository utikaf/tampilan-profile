<?php
    class Percobaan extends CI_controller{

        function index(){
            echo"selamat datang";
        }

        function biodata($nama,$alamat,$no_hp,$email,$sekolah)
        {
            $bd = [
                'nm' => $nama,      //array 1
                'alt' => $alamat,   //array 2
                'nhp' => $no_hp, //array 3
                'em' => $email, //array 4
                'skl' => $sekolah, //array 5
            ];
            $this->load->view("v_biodata", $bd);
        }

        function tambah_biodata(){
            $this->load->view("form_tambah_biodata");
        }

        function action_tambah_biodata(){
            $bd['nm']       = $this->input->post('nama');
            $bd['alt']      = $this->input->post('alamat');
            $bd['nhp']      = $this->input->post('no_hp');
            $bd['em']       = $this->input->post('email');
            $bd['skl']      = $this->input->post('sekolah');
            $bd['tempat']   = $this->input->post('tempatlahir');
            $bd['tanggal']  = $this->input->post('tanggallahir');
            $bd['jk']       = $this->input->post('jeniskelamin');
            $bd['hobi']     = $this->input->post('hobi');
            $bd['st']       = $this->input->post('status');

            $this->load->view("v_biodata", $bd);
        }

        public function tampil_data(){
            $this->load->model('M_profile');
            $data['profile'] = $this->M_profile->tampil_data()->result();
            $this->load->view('v_tampil_data_profile',$data);
        }

        function tambah_profile(){
            $this->load->view('form_tambah_profile');
        }

        public function action_tambah_data(){
            $add = [
                'nama_depan'         => $this->input->post('nama_depan'),
                'nama_belakang'      => $this->input->post('nama_belakang'),
                'tempat_lahir'       => $this->input->post('tempat_lahir'),
                'tanggal_lahir'      => $this->input->post('tanggal_lahir'),
                'jenis_kelamin'      => $this->input->post('jenis_kelamin'),
                'alamat'             => $this->input->post('alamat'),
                'jenjang_pendidikan' => $this->input->post('jenjang_pendidikan'),
            ];
            $this->db->insert('tbl_profile', $add);
            redirect('../Percobaan/tampil_data');
        }

        function update_data($id)
        {
            $this->load->model('M_profile');
            $data['profile'] = $this->M_profile->get_data_by_id($id)->row_array();
            $this->load->view('update_data_profile_v',$data);
        }

        function action_update_data(){
            $id = $this->input->post('id');

            $update = [
                'nama_depan'         => $this->input->post('nama_depan'),
                'nama_belakang'      => $this->input->post('nama_belakang'),
                'tempat_lahir'       => $this->input->post('tempat_lahir'),
                'tanggal_lahir'      => $this->input->post('tanggal_lahir'),
                'jenis_kelamin'      => $this->input->post('jenis_kelamin'),
                'alamat'             => $this->input->post('alamat'),
                'jenjang_pendidikan' => $this->input->post('jenjang_pendidikan'),
            ];

            $update = $this->db->update('tbl_profile', $update, ['id' => $id]);
            redirect('../Percobaan/tampil_data');
        }

        function hapus_data($id)
        {
            $id = $id;
            $this->db->delete('tbl_profile',['id' => $id]);
            redirect('../Percobaan/tampil_data');
        }
    }

?>