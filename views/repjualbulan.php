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

                	<form method="post" >
Bulan
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
                        
                        <?php $q=2012; $qq=date("Y");
		while ($q!=$qq) { echo"<option value=";echo $q;echo" >";echo $q;echo"</option>"; $q=$q+1; } echo"<option value=";echo $q;echo" >";echo $q;echo"</option>"; ?>
    </select> <input type="submit" name="button" id="button" value="Lihat"></td><td width="89%">&nbsp;</td>
</form>

<?php
$s1=(isset($_REQUEST['s']) && $_REQUEST['s'] !=NULL)?$_REQUEST['s']:'';
if($s1)
{
$tgls=$_POST['th']."-".$_POST['bl'];
echo '<table id="list_produk" width="400px">
           	<tr>
                    	  <th colspan="5" align="left"></th>
       	  </tr>
           	<tr>
               	
               	<th>No Faktur</th>
                <th>Nama Pelanggan</th>
               
                <th>Nama Produk</th>
				<th>Jumlah Beli</th>
				<th>Harga</th>
     
            </tr>';
		  
				$sql="SELECT pembelian.no_faktur as m_1, pembelian.tgl as m_2, pelanggan.nm_pel as m_3, pembelian.id_produk as m_4, produk.nama_produk as m_5, pembelian.jml as m_6, produk.harga as m_7
FROM (pembelian LEFT JOIN produk ON pembelian.id_produk = produk.id_produk) LEFT JOIN pelanggan ON pembelian.username = pelanggan.username
 where month(pembelian.tgl)='".$_POST['bl']."' and year(pembelian.tgl)='".$_POST['th']."'";
				$result2 = mysql_query($sql) or die ('Error: '.mysql_error ());
	 while ($row2 = mysql_fetch_array($result2)) { 
								echo"<tr class='$baris'>
										<td>".$row2['m_1']."</td>
										<td>".$row2['m_3']."</td>
										
										<td>".$row2['m_5']."</td>
										<td>".$row2['m_6']."</td>
										<td>".$row2['m_7']."</td>
										";
										
									echo '
									</tr>';
								
								
							}
				
    echo '</table>';


}
?>

  </table>
  
                </div><!-- end box_content -->
            </div><!-- end sidebar-kanan -->