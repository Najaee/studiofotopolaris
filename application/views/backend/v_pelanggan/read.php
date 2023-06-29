<!--untuk memanggil halaman tambah atau file create.php-->
<a href="<?php echo site_url('Pelanggan/create') ?>"><button type="button" 
name="button" title="untuk menambah data">Tambah</button></a>
<table border="1" width="70%">
 <tr>
 <td>No</td>
 <td>Id Pelanggan</td>
 <td>Nama Pelanggan</td>
 <td>No HP Pelanggan</td>
 <td>Email Pelanggan</td>
 <td>Password</td>
 <td>Aksi</td>
 </tr>
 <?php
 $no=1;
 //$read yang diambil dari control function index
 foreach ($read->result_array() as $row) {
 ?>
 <tr>
 <td><?php echo $no ?></td>
 <td><?php echo $row['Id_pelanggan'] ?></td>
 <td><?php echo $row['Nama_pelanggan'] ?></td>
 <td><?php echo $row['No_hp_pelanggan'] ?></td>
 <td><?php echo $row['Email_pelanggan'] ?></td>
 <td><?php echo $row['Password'] ?></td>
 <td>
 <!--memanggil halaman edit atau edit.php-->
 <a href="<?php echo site_url('Pelanggan/edit/'.$row['Id_pelanggan'])?>" 
title="tombol utk merubah data">Ubah</a> |
 <!--memanggil aksi delete-->
 <a href="<?php echo site_url('Pelanggan/delete/'.$row['Id_pelanggan'])?>" 
onclick="javascript: return confirm('Yakin Mau dihapus <?php echo 
$row['Nama_pelanggan'];?>')">Hapus</a>
 </td>
 </tr>
 <?php
 $no++;
 }
 ?>
</table>