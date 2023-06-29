<form class="" action="<?php echo site_url('Transaksi/update/'.$edit['Id_transaksi']) 
?>" method="post">
 <label>Id transaksi</label><br>
 <input type="text" name="Id_transaksi" disabled value="<?php echo 
$edit['Id_transaksi'] ?>"><p></p>
 <input type="text" name="Id_transaksi" hidden value="<?php echo
$edit['Id_transaksi'] ?>"><p></p>
 <label>Id pelanggan</label><br>
 <!-- <input type="text" name="Id_pelanggan" value="<?php echo 
$edit['Id_pelanggan'] ?>"><p></p> -->
<select name="Id_pelanggan" class="" required>
 <option value="<?php echo $edit['Id_pelanggan'] ?>"><?php echo 
$edit['Id_pelanggan'] ?></option>
 <?php
 foreach ($pelanggan->result_array() as $r) {
 ?>
 <option value="<?php echo $r['Id_pelanggan'] ?>"><?php echo 
$r['Id_pelanggan']; ?></option>
 <?php } ?>
 </select><p></p>
 <label>Id reservasi</label><br>
 <input type="text" name="Id_reservasi" value="<?php echo 
$edit['Id_reservasi'] ?>"><p></p>
 <label>Tanggal</label><br>
 <input type="date" name="Tanggal" value="<?php echo 
 $edit['Tanggal'] ?>"><p></p>
  <label>Total_tagihan</label><br>
 <input type="text" name="Total_tagihan" value="<?php echo 
 $edit['Total_tagihan'] ?>"><p></p>
 <button type="submit" name="button">Perbaharui</button>
 <a href="<?php echo site_url('Transaksi') ?>"><button type="button" 
name="button">Batal</button></a>
</form>
