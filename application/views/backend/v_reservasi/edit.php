<form class="" action="<?php echo site_url('Reservasi/update/'.$edit['Id_reservasi']) 
?>" method="post">
 <label>Id reservasi</label><br>
 <input type="text" name="Id_reservasi" disabled value="<?php echo 
$edit['Id_reservasi'] ?>"><p></p>
 <input type="text" name="Id_reservasi" hidden value="<?php echo
$edit['Id_reservasi'] ?>"><p></p>
 <label>Id pelanggan</label><br>
  <select name="Id_pelanggan" class="" required>
 <option value="<?php echo $edit['Nama_pelanggan'] ?>" selected><?php echo $edit['Nama_pelanggan'] ?></option>
 <?php
 foreach ($pelanggan->result_array() as $r) {
 ?>
 <option value="<?php echo $r['Id_pelanggan'] ?>"><?php echo 
$r['Nama_pelanggan']; ?></option>
 <?php } ?>
 </select><p></p>
 <!-- <input type="text" name="Id_pelanggan" value="<?php echo 
$edit['Id_pelanggan'] ?>"><p></p> -->
 <!-- <label>Nama pelanggan</label><br>
 <input type="text" name="nama_pelanggan" value="<?php echo 
$edit['Nama_pelanggan'] ?>"><p></p> -->
 <!-- <label>Nama pelanggan</label><br>
 <input type="text" name="Nama_pelanggan" value="<?php echo 
$edit['Nama_pelanggan'] ?>"><p></p> -->
<label>Tgl_sewa</label><br>
 <input type="date" name="Tgl_sewa" value="<?php echo 
 $edit['Tgl_sewa'] ?>"><p></p>
 <button type="submit" name="button">Perbaharui</button>
 <a href="<?php echo site_url('Reservasi') ?>"><button type="button" 
name="button">Batal</button></a>
</form>
