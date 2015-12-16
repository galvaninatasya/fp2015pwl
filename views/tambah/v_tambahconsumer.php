
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
						<td>Username</td>
						<td><input type="text" name="uname_pel" style="width:200px;"/></td>
					</tr>
					<tr>
						<td>Nama Pelanggan</td>
						<td><input type="text" name="nama_pel" style="width:200px;"/></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="pwd_pel" style="width:200px;" /></td>
					</tr>
					<tr>
						<td>No. Handphone</td>
						<td><input type="text" name="inputno_hp" style="width:200px;" /></td>
                    </tr>
					<tr>
						<td>No. Telp </td>
						<td><input type="text" name="input_notelp" style="width:200px;" /></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td><textarea name="input_alamatpel" style="width:200px; height:100px;"></textarea></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><input type="submit" name="submit" value="Add" class="btn btn-success"/></td>
					</tr>
                </table>
            </form>
		</div>
	</div>