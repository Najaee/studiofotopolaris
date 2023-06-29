<form class="" action="<?php echo site_url('Pelanggan/update/'.$edit['Id_pelanggan']) 
?>" method="post">
 <label>Id pelanggan</label><br>
 <input type="text" name="Id_pelanggan" disabled value="<?php echo 
$edit['Id_pelanggan'] ?>"><p></p>
 <input type="text" name="Id_pelanggan" hidden value="<?php echo
$edit['Id_pelanggan'] ?>"><p></p>
 <label>Nama pelanggan</label><br>
 <input type="text" name="Nama_pelanggan" value="<?php echo 
$edit['Nama_pelanggan'] ?>"><p></p>
 <label>No HP Pelanggan</label><br>
 <input type="text" name="No_hp_pelanggan" value="<?php echo 
$edit['No_hp_pelanggan'] ?>"><p></p>
 <label>Email pelanggan</label><br>
 <input type="text" name="Email_pelanggan" value="<?php echo 
$edit['Email_pelanggan'] ?>"><p></p>
<label>Password</label><br>
 <input type="text" name="Password" value="<?php echo 
$edit['Password'] ?>"><p></p>
 <button type="submit" name="button">Perbaharui</button>
 <a href="<?php echo site_url('Pelanggan') ?>"><button type="button" 
name="button">Batal</button></a>
</form>
