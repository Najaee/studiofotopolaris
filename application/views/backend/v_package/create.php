<form class="" action="<?php echo site_url ('Package/save') ?>" method="post">
 <label>Id Package</label><br>
 <input type="text" name="Id_package" value=""><p></p>
 <label>Id Reservasi</label><br>
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
 <label>Studio</label><br>
 <!-- <input type="text" name="studio" value=""><p></p> -->
 <select name="Studio">
    <option value="Platinum">Platinum [background custom / polos include 4 cetak foto 4r + all soft file]</option>
    <option value="Gold">Gold [background custom include 3 cetak foto 4r + all soft file 70k]</option>
    <option value="Silver">Silver [backround polos include cetak foto 2  4r + all softfile 50k]</option>
    <option value="Bronze">Bronze [background polos 40k 1 cetak foto 4r + all softfile]</option>
    </select> <p></p>
 <label>Durasi</label><br>
 <input type="text" name="Durasi" value=""><p></p>
 <label>Harga</label><br>
 <input type="text" name="Harga" value=""><p></p>

 <button type="submit" name="button">Simpan</button>
 <a href="<?php echo site_url('Package') ?>"><button type="button" 
name="button">Batal</button></a>
</form>
