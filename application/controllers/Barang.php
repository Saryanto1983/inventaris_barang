<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Barang extends CI_Controller {
        function __construct()
        {
            parent::__construct();
            $this->load->model('BarangModel');
            $this->load->helper('url');
        }

        function index() {
            $data['barang'] = $this->BarangModel->tampil_data()->result();

            $this->load->view('header');		
            $this->load->view('BarangView', $data);	 
		    $this->load->view('footer');
        }

        function form_input() {
            $this->load->view('header');		
            $this->load->view('FormInputBarang');	 
		    $this->load->view('footer');
        }

        function insert() {
            $data = array(
                'kode_barang' => $this->input->post('kode_barang'),
                'nama_barang' => $this->input->post('nama_barang'),
                'merk' => $this->input->post('merk'),
                'sumber' => $this->input->post('sumber'),
                'tahun' => $this->input->post('tahun'),
                'harga' => $this->input->post('harga')
            );

            $this->BarangModel->insert($data);
            redirect(base_url() . "Barang", 'refresh');
        }

        function form_update($id) {
            $where = array('kode_barang' => $id);
            $data['barang'] = $this->BarangModel->edit_data($where, 'barang')->result();

            //tampilkan form update
            $this->load->view('header');		
            $this->load->view('FormEditBarang', $data);	 
		    $this->load->view('footer');
        }

        function update() {
            $data = array(
                'kode_barang' => $this->input->post('kode_barang'),
                'nama_barang' => $this->input->post('nama_barang'),
                'merk' => $this->input->post('merk'),
                'sumber' => $this->input->post('sumber'),
                'tahun' => $this->input->post('tahun'),
                'harga' => $this->input->post('harga')
            );

            $where = array('kode_barang' => $this->input->post('kode_barang'));

            //proses/lakukan update
            $this->BarangModel->update_data($where, $data, 'barang');
            redirect(base_url() . "Barang", 'refresh');
        }

        function hapus($id) {
            $where = array('kode_barang' => $id);

            //lakukan hapus data
            $this->BarangModel->hapus_data($where, 'Barang');
            redirect(base_url() . "Barang", 'refresh');
        }
    }