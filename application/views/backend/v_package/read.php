<!--untuk memanggil halaman tambah atau file create.php-->
<a href="<?php echo site_url('Package/create') ?>"><button type="button" 
name="button" title="untuk menambah data">Tambah</button></a>
<table border="1" width="70%">
 <tr>
 <td>No</td>
 <td>Id Package</td>
 <td>Id Reservasi</td>
 <td>Studio</td>
 <td>Durasi</td>
 <td>Harga</td>
 <td>Aksi</td>
 </tr>
 <?php
 $no=1;
 //$read yang diambil dari control function index
 foreach ($read->result_array() as $row) {
 ?>
 <tr>
 <td><?php echo $no ?></td>
 <td><?php echo $row['Id_package'] ?></td>
 <td><?php echo $row['Id_reservasi'] ?></td>
 <td><?php echo $row['Studio'] ?></td>
 <td><?php echo $row['Durasi'] ?></td>
 <td><?php echo $row['Harga'] ?></td>
 <td>
 <!--memanggil halaman edit atau edit.php-->
 <a href="<?php echo site_url('Package/edit/'.$row['Id_package'])?>" 
title="tombol utk merubah data">Ubah</a> |
 <!--memanggil aksi delete-->
 <a href="<?php echo site_url('Package/delete/'.$row['Id_package'])?>" 
onclick="javascript: return confirm('Yakin Mau dihapus <?php echo 
$row['Id_reservasi'];?>')">Hapus</a>
 </td>
 </tr>
 <?php
 $no++;
 }
 ?>
</table>