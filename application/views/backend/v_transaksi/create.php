<form class="" action="<?php echo site_url ('Transaksi/save') ?>" method="post">
 <label>Id Transaksi</label><br>
 <input type="text" name="Id_transaksi" value=""><p></p>
 <label>Id pelanggan</label><br>
 <select name="Id_pelanggan" class="" required>
 <option value=0 selected>- Pelanggan -</option>
 <?php
 foreach ($pelanggan->result_array() as $r) {
 ?>
 <option value="<?php echo $r['Id_pelanggan'] ?>"><?php echo 
$r['Id_pelanggan']; ?></option>
 <?php } ?>
 </select><p></p>
 <label>Id reservasi</label><br>
 <!-- <input type="text" name="Id_reservasi" value=""><p></p> -->
 <select name="Id_reservasi" class="" required>
 <option value=0 selected>- Reservasi -</option>
 <?php
 foreach ($reservasi->result_array() as $r) {
 ?>
 <option value="<?php echo $r['Id_reservasi'] ?>"><?php echo 
$r['Id_reservasi']; ?></option>
 <?php } ?>
 </select><p></p>
 <label>Total tagihan</label><br>
 <input type="text" name="Total_tagihan" value=""><p></p>
 <label>Tanggal</label><br>
 <input type="date" name="Tanggal" value=""><p></p>
 <button type="submit" name="button">Simpan</button>
 <a href="<?php echo site_url('Transaksi') ?>"><button type="button" 
name="button">Batal</button></a>
</form>
