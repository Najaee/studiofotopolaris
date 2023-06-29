<form class="" action="<?php echo site_url ('Pelanggan/save') ?>" method="post">
 <label>Id pelanggan</label><br>
 <input type="text" name="Id_pelanggan" value=""><p></p>
 <label>Nama pelanggan</label><br>
 <input type="text" name="Nama_pelanggan" value=""><p></p>
 <label>No HP Pelanggan</label><br>
 <input type="text" name="No_hp_pelanggan" value=""><p></p>
 <label>Email Pelanggan</label><br>
 <input type="text" name="Email_pelanggan" value=""><p></p>
 <label>Password</label><br>
 <input type="text" name="Password" value=""><p></p>
 <button type="submit" name="button">Simpan</button>
 <a href="<?php echo site_url('Pelanggan') ?>"><button type="button" 
name="button">Batal</button></a>
</form>
