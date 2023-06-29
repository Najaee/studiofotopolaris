<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Package extends CI_Controller{
 /*
 $view berfungsi untuk membaca file view seperti read.php, create.php
 dan edit.php dengan lokasi folder views/backend/v_admin/
 */
 private $view = "backend/v_package/";
 //memanggil control Admin/index dalam keadaan refresh
 private $redirect = "Package";
 public function __construct()
 {
 parent::__construct();
 //control Admin menghubungkan model M_admin
 $this->load->model('M_package');
 $this->load->model('M_pelanggan');
 $this->load->model('M_reservasi');
 }
 function index(){
 //memanggil model M_admin dengan function GetAll
 $read = $this->M_package->GetAll();
 $data = array(
   'judul' => "PACKAGE",
   'sub' => "Halaman Package",
 //'read' variabel yang akan dipanggil pada view read.php
 'read'=> $read
 );
 /*
 dengan $this->view artinya memanggil private $view="backend/v_admin/"
 dilanjutkan dengan 'read' untuk memanggil read.php
 */
 //$this->load->view($this->view.'read', $data);
 $this->template->load('backend/template',$this->view.'read', $data);
 }
 public function create(){
 //untuk create tidak memangil model, langsung ke view dengan data baru
 $data = array(
  'pelanggan' => $this->M_pelanggan->GetAll(),
  'reservasi' => $this->M_reservasi->GetData(),
 'create' => ''
 );
 $this->load->view($this->view.'create', $data);
}
 public function save(){
 $data = array(
 'Id_package'=> $this->input->post('Id_package'),
 'Id_reservasi'=> $this->input->post('Id_reservasi'),
 'Studio'=> $this->input->post('Studio'),
 'Durasi'=> $this->input->post('Durasi'),
 'Harga'=> $this->input->post('Harga')
 );
 $this->M_package->save($data);
 //dengan $this->redirect artinya memanggil private $redirect = "Admin"
 redirect($this->redirect,'refresh');
 }
 public function edit(){
 /*
 segment 1 adalah control, segment 2 adalah function, segment 2 adalah PK,
 data yang akan ditambilkan hanya yang dipilih saja sesuai PK yang dipilih
 */
 $kd = $this->uri->segment(3);
 $data = array(
 //'edit' variabel yang akan dipanggil pada view edit.php
 'edit' => $this->M_package->edit($kd)
 );
 $this->load->view($this->view.'edit', $data);
 }
 public function update(){
    $kd = $this->uri->segment(3);
    $data = array(
    /*
    'nama_admin' =nama yang diambil dari fild pada tabel
    $this->input->post('nama_admin') =nama yang diambil dari form
    */
    'Id_package'=> $this->input->post('Id_package'),
    'Id_reservasi'=> $this->input->post('Id_reservasi'),
    'Studio'=> $this->input->post('Studio'),
    'Durasi'=> $this->input->post('Durasi'),
    'Harga'=> $this->input->post('Harga')
    );
    $this->M_package->update($kd,$data);
    redirect($this->redirect,'refresh');
    }
    public function delete(){
    $kd = $this->uri->segment(3);
    $data = array(
    //data akan dihapus sesuai uri->segment(3) yang dipilih
    'Id_package' => $kd
    );
    $this->M_package->delete($data);
    redirect($this->redirect,'refresh');
    }
   }