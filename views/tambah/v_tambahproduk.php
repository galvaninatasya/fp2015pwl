
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
$query = $dbh->query('SELECT MAX(id_produk) as kodex  FROM  products'); // mengambil nilai kode_barang terbesar
$data = $query->fetch();
$kode = $data['kodex']; // kode_barang dengan angka terbesar
$nourut = substr($kode, 3, 4); // contoh JRD0004, angka 3 adalah awal pengambilan angka, dan 4 jumlah angka yang diambil
$nourut++; 
?>
<div class="row">
	<div class="col-md-6">
           <form role="form" action="" method="post">
               <table class='table table-striped'>
				   
           	      <tr>
					<td>Product Id</td>
					<td><input type="text" name="id_prod" value="<?php echo sprintf("10"."%03s", $nourut);?>" readonly ="readonly" style="width:200px;"/></td>
				  </tr>                 	
                  <tr>
                 	<td>Product Name</td>
                  	<td><input type="text" name="nama" style="width:200px;"/></td>
                  </tr>
				  
                  <tr>
                   	<td>Price (IDR)</td>
                   	<td><input type="text" name="harga" style="width:200px;" /></td>
                  </tr>
				  <tr>
                   	<td>Image</td>
                   	<td><input type="file" name="image_upload" style="width:200px;"/></td>
                  </tr>
                  <tr>
                   	<td>Stock</td>
                   	<td><input type="text" name="jlh" style="width:200px;" /></td>
                    </tr>
                  <tr>
                   	<td>Composition</td>
					<td><textarea name="comp" style="width:200px;"> </textarea></td>
                  </tr>
                  <tr>
                   	<td>Indication</td>
                   	<td><textarea name="indi" style="width:200px;"> </textarea></td>
				</tr>
				
                  <tr>
						<td>&nbsp;</td>
						<td><input type="submit" name="submit" value="Add" class="btn btn-success"/></td>
					</tr>
                </table>
            </form>
                            
