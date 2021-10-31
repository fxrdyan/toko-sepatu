<?php 
class Sepatu extends CI_Controller

{
        public function index()
    {
        $this->load->view('pesan-sepatu');
    }
        public function cetak()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'merk' => $this->input->post('merk'),
            'ukuran' => $this->input->post('ukuran'),
            'jumlah' => $this->input->post('jumlah'),
            'harga' => $this ->input->post('harga'),
            'total' => $this ->input->post('total')
        ];
        
        $this->load->view('tampil-pesanan', $data);
    }

}