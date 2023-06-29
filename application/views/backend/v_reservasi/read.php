<!--untuk memanggil halaman tambah atau file create.php-->
<a href="<?php echo site_url('Reservasi/create') ?>"><button type="button" 
name="button" title="untuk menambah data">Tambah</button></a>
<table border="1" width="70%">
 <tr>
 <td>No</td>
 <td>Id_Reservasi</td>
 <td>Id_Pelanggan</td>
 <td>Nama_Pelanggan</td> 
 <td>Tgl_Sewa</td>
 <td>Aksi</td>
 </tr>
 <?php
 $no=1;
 //$read yang diambil dari control function index
 foreach ($read->result_array() as $row) {
 ?>
 <tr>
 <td><?php echo $no ?></td>
 <td><?php echo $row['Id_reservasi'] ?></td>
 <td><?php echo $row['Id_pelanggan'] ?></td>
 <td><?php echo $row['Nama_pelanggan'] ?></td>
 <td><?php echo $row['Tgl_sewa'] ?></td>
 <td>
 <!--memanggil halaman edit atau edit.php-->
 <a href="<?php echo site_url('Reservasi/edit/'.$row['Id_reservasi'])?>" 
title="tombol utk merubah data">Ubah</a> |
 <!--memanggil aksi delete-->
 <a href="<?php echo site_url('Reservasi/delete/'.$row['Id_reservasi'])?>" 
onclick="javascript: return confirm('Yakin Mau dihapus <?php echo 
$row['Id_pelanggan'];?>')">Hapus</a>
 </td>
 </tr>
 <?php
 $no++;
 }
 ?>
</table>