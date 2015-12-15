
<?php
include 'lib/nourut.php';

	$conn = mysql_connect('localhost', 'root', '');
	 if (!$conn)
    {
	 die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("apotek", $conn);
	
?>
<?php
if(!empty($success)):?>
<div class="alert alert-info">
	<p><?php echo $success?></p>
</div>	
<?php endif
?>
<div class="row">
	<div class="col-md-6">
           <form role="form" action="" method="post">
               <table class='table table-striped'>
				   
					<tr>
						<td>Id Supplier</td>
						<td><input type="text" name="id_supp" value="<?php echo sprintf("111"."%04s", $nourut);?>" readonly ="readonly" style="width:200px;"/></td>
					</tr>
					<tr>
						<td>Nama Supplier</td>
						<td><input type="text" name="nama_supp" style="width:200px;"/></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="pwd" style="width:200px;" /></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="text" name="input_email" style="width:200px;" /></td>
                    </tr>
					<tr>
						<td>No Handphone   </td>
						<td><input type="text" name="inputno_hp" style="width:200px;" /></td>
					</tr>
					<tr>
						<td>Kota</td>
						<td><input type="text" name="input_kota" style="width:200px;"/></td>
					</tr>
					<tr>
						<td>Provinsi</td>
						<td><input type="text" name="input_prov" style="width:200px;" /></td>
					</tr>
					<?php 
						date_default_timezone_set("Asia/Jakarta");
						$tgl = date("Y-m-d H:i:s");
					?>
					<tr>
						<td>Tanggal Daftar   </td>
						<td><input type="text" name="tgl_daftar" value="<?php echo"$tgl";?>" readonly="readonly" style="width:200px;"/></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td><textarea name="input_alamat" style="width:200px; height:100px;"></textarea></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><input type="submit" name="submit" value="Add" class="btn btn-success"/></td>
					</tr>
                </table>
            </form>
		</div>
	</div>