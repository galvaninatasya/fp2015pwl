
<?php
if(!empty($success)):?>
<div class="alert alert-info">
	<p><?php echo $success?></p>
</div>	
<?php endif
?>
<?php
 
$hostname = 'localhost'; // server mysql
$username = 'root'; // user mysql
$password = ''; // pasword mysql
$database = 'apotek'; // nama database
try
{
	$dbh = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
 
}
catch(PDOException $e)
{
	echo $e->getMessage();
}
$query = $dbh->query('SELECT MAX(no_faktur) as kodex  FROM  transactions'); // mengambil nilai kode_barang terbesar
$data = $query->fetch();
$kode = $data['kodex']; // kode_barang dengan angka terbesar
$nourut = substr($kode, 6, 6); // contoh JRD0004, angka 3 adalah awal pengambilan angka, dan 4 jumlah angka yang diambil
$nourut++; 

									
								?>		
<div class="row">
	<div class="col-md-6">
           <form role="form" action="" method="post">
               <table class='table table-striped'>
				   
					<tr>
						<td>No Faktur</td>
						<td><input type="text" name="no_faktur" value="<?php echo sprintf("234235"."%06s", $nourut);?>" readonly ="readonly" style="width:200px;"/></td>
					</tr>
					<tr>
						<td>Nama Pelanggan</td>
						<td><select name="input_pel">
						<option>--Select Pelanggan--</option>
						<?php foreach ($data['username'] as $pel):?>
		  				<option value="<?php echo $pel['username']?>">
		  				<?php echo ' - '.$pel['nama_pelanggan']?>
		  				</option>
						<?php endforeach?>
						</select></td>
					</tr>
					<?php 
						date_default_timezone_set("Asia/Jakarta");
						$tgl = date("Y-m-d H:i:s");
					?>
					<tr>
						<td>Order Date</td>
						<td><input type="text" name="tgl" value="<?php echo"$tgl";?>" readonly="readonly" style="width:200px;"/></td>
					</tr>
					<tr>
						<td>Product</td>
						<td><select name="input_prod">
						<option>--Select Product--</option>
						<?php foreach ($tampilkan['prod'] as $pro):?>
		  				<option value="<?php echo $pro['id_produk']?>">
		  				<?php echo $pro['nama_produk']?>
		  				</option>
						<?php endforeach?>
						</select></td>
					</tr>
					<tr>
						<td>Jumlah Beli</td>
						<td><input type="text" name="input_jlh" style="width:200px;" /></td>
                    </tr>
					
					<tr>
						<td>&nbsp;</td>
						<td><input type="submit" name="submit" value="Add" class="btn btn-success"/></td>
									</tr>
                </table>
            </form>
		</div>
	</div>