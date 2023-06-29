<form class="" action="<?php echo site_url ('Reservasi/save') ?>" method="post">
 <label>Id Reservasi</label><br>
 <input type="text" name="Id_reservasi" value=""><p></p>
 <label>Id Pelanggan</label><br>
 <!-- <input type="text" name="Id_pelanggan" value=""><p></p> -->
 <select name="Id_pelanggan" class="" required>
 <option value=0 selected>- Pelanggan -</option>
 <?php
 foreach ($pelanggan->result_array() as $r) {
 ?>
 <option value="<?php echo $r['Id_pelanggan'] ?>"><?php echo 
$r['Nama_pelanggan']; ?></option>
 <?php } ?>
 </select><p></p>
 <!-- <label>Nama Pelanggan</label><br>
 <input type="text" name="nama_pelanggan" value=""><p></p> -->
 <label>Tanggal</label><br>
 <input type="date" name="Tgl_sewa" value=""><p></p>
 <button type="submit" name="button">Simpan</button>
 <a href="<?php echo site_url('Reservasi') ?>"><button type="button" 
name="button">Batal</button></a>
</form>
