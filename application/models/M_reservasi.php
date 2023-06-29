<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_reservasi extends CI_Model{
 //$table sebagai tabel yang digunakan, dengan pemanggilannya $this->table
 private $table = 'reservasi';
 //$pk atau Primary Key yang digunakan, dengan pemanggilannya $this->pk
 private $pk = 'Id_reservasi';
 public function GetAll(){
 $this->db->order_by($this->pk, 'desc');
 $this->db->join('pelanggan','reservasi.Id_pelanggan=pelanggan.Id_pelanggan');
//  $this->db->join('pelanggan','reservasi.Nama_pelanggan=pelanggan.Nama_pelanggan');
 return $this->db->get($this->table);
 }
 public function GetData(){
 $this->db->order_by($this->pk, 'desc');
 return $this->db->get($this->table);
 }
 public function save($data){
 return $this->db->insert($this->table, $data);
 }
 public function edit($kd){
 $this->db->where($this->pk, $kd);
 $this->db->join('pelanggan','reservasi.Id_pelanggan=pelanggan.Id_pelanggan');
//  $this->db->join('pelanggan','reservasi.Nama_pelanggan=pelanggan.Nama_pelanggan');
 return $this->db->get($this->table)->row_array();
 }
 public function update($kd,$data){
 $this->db->where($this->pk, $kd);
 return $this->db->update($this->table, $data);
 }
 public function delete($data){
 $this->db->where($data);
 return $this->db->delete($this->table);
 }
}