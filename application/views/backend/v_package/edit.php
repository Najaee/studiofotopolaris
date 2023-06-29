<form class="" action="<?php echo site_url('Package/update/'.$edit['Id_package']) 
?>" method="post">
 <label>Id Package</label><br>
 <input type="text" name="Id_package" disabled value="<?php echo 
$edit['Id_package'] ?>"><p></p>
 <input type="text" name="Id_package" hidden value="<?php echo
$edit['Id_package'] ?>"><p></p>
 <label>Id Reservasi</label><br>
 <input type="text" name="Id_reservasi" value="<?php echo 
$edit['Id_reservasi'] ?>"><p></p>
<label>Studio</label><br>
 <input type="text" name="Studio" value="<?php echo 
$edit['Studio'] ?>"><p></p>
<label>Durasi</label><br>
 <input type="text" name="Durasi" value="<?php echo 
$edit['Durasi'] ?>"><p></p>
<label>Harga</label><br>
 <input type="text" name="Harga" value="<?php echo 
$edit['Harga'] ?>"><p></p>
 <button type="submit" name="button">Perbaharui</button>
 <a href="<?php echo site_url('Package') ?>"><button type="button" 
name="button">Batal</button></a>
</form>
