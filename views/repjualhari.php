<style>
#list_produk{
	border-collapse: separate;
	width:600px;
	margin:0 auto;
	
	
	
}
#list_produk td{
	border-bottom: 1px solid #c9c9c9;	
	border-top: 1px solid #ffffff;
	padding:3px;
	
}
#list_produk th{
		background-image: -moz-linear-gradient(top, #0080FF , #0080FF);
		background: -webkit-gradient(linear, left top, left bottom, from( #467aa7), to(#467aa7));
			
						/* For Internet Explorer 5.5 - 7 */
		filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#467aa7, endColorstr=#467aa7);
						/* For Internet Explorer 8 */
		-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#467aa7, endColorstr=#467aa7)";
		
		color: #ffffff;
		text-shadow: 1px 1px #2a5a7a;
		font-weight: bold;
		border-bottom:1px solid #000000;
		border-top:1px solid #000000;
		padding:10px 5px 10px 5px;
		margin-top:5px;
		
}
</style>

            
                	<form  method="post" >Tanggal</td> <select name="tgl" id="tgl">
      
      <option value="01">01</option>
      <option value="02">02</option>
      <option value="03">03</option>
      <option value="04">04</option>
      <option value="05">05</option>
      <option value="06">06</option>
      <option value="07">07</option>
      <option value="08">08</option>
      <option value="09">09</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="14">14</option>
      <option value="15">15</option>
      <option value="16">16</option>
      <option value="17">17</option>
      <option value="18">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
      <option value="21">21</option>
      <option value="22">22</option>
      <option value="23">23</option>
      <option value="24">24</option>
      <option value="25">25</option>
      <option value="26">26</option>
      <option value="27">27</option>
      <option value="28">28</option>
      <option value="29">29</option>
      <option value="30">30</option>
      <option value="31">31</option>
    </select>
                      <select name="bl" id="bl">
                        
                        <option value="01">January</option>
                        <option value="02">February</option>
                        <option value="03">March</option>
                        <option value="04">April</option>
                        <option value="05">May</option>
                        <option value="06">June</option>
                        <option value="07">July</option>
                        <option value="08">August</option>
                        <option value="09">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                      </select>
    <select name="th" id="th">
                        
                        <?php $q=2015; $qq=date("Y");
		while ($q!=$qq) { echo"<option value=";echo $q;echo" >";echo $q;echo"</option>"; $q=$q+1; } echo"<option value=";echo $q;echo" >";echo $q;echo"</option>"; ?>
    </select> <input type="submit" name="button" id="button" value="Search"></td>
</form>

<?php
 
$user_name = "root";
$password = "";
$database = "apotek";
$host_name = "localhost";
 
$connect_db=mysql_connect($host_name, $user_name, $password);
 
$find_db=mysql_select_db($database);
 
if ($find_db) {
$s1=(isset($_REQUEST['s']) && $_REQUEST['s'] !=NULL)?$_REQUEST['s']:'';
if($s1){	 $tgls=$_POST['th']."-".$_POST['bl']."-".$_POST['tgl'];
		echo '<table class="table table-striped">
         
           	<tr>	
				
               	<th>No Faktur</th>
				<th>Tanggal</th>
                <th>Nama Pelanggan</th>
                <th>Nama Produk</th>
				<th>Jumlah Beli</th>
				<th>Harga Satuan</th>
				<th>Total</th>
            </tr>';
		  
				$sql="SELECT * from transactions t join products p on t.id_produk=p.id_produk join customers c on t.username=c.username where t.tgl='".$tgls."'";
				$result = mysql_query($sql) or die ('Error: '.mysql_error ());
				while($tampilkan = mysql_fetch_array($result)){
								        echo"<tr>
												
												<td>$tampilkan[no_faktur]</td>
												<td>$tampilkan[tgl]</td>
												<td>$tampilkan[nama_pelanggan]</td>
												<td>$tampilkan[nama_produk]</td>
												<td>$tampilkan[jlh]</td>
												<td>$tampilkan[harga]</td>
												<td>$tampilkan[total]</td>
												</td>
                	                        </tr>";
							}
}
mysql_close($connect_db);
 
}else {
 
  echo "Database Tidak Ada";
 
  mysql_close($connect_db);
 
}
 
?>
								
                            </table>
                        
                        
             