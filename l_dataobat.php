<html>
<head>
<title>Laporan Data Obat</title>

<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
</head>
<body>

<img src="assets/img/uin.png" alt="Logo Uin" style="width: 5%;">
<h1>Laporan Data Obat</h1>


	<table class="table table-striped table-bordered data">
	    <thead>
			<tr> 
	        	<th>No. </th>           
	            <th>Kode Obat</th>
	            <th>Nama</th>
			</tr>                                         
	    </thead>
	    <tbody>

	    	<?php
	                           
				include('db/koneksi_d.php');
	            
	            $query = mysqli_query($conn, "SELECT * FROM obat ORDER BY id_obat ASC");
	                                        
	            if(mysqli_num_rows($query) == 0){
	            	echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
	            }else{ 
	                                        
	           	$no = 1;
	            while($data = mysqli_fetch_assoc($query)){
	                                              
				echo '<tr>';
	            	echo '<td>'.$no.'</td>';  
	                echo '<td>'.$data['id_obat'].'</td>';
					echo '<td>'.$data['nama_obat'].'</td>';
				echo '</tr>';
	                                                
	            $no++;
	                                                
	            }
	                                            
	            }
	        ?>

		</tbody>
	</table> 
</body>
</html>

<?php
	echo"<script>window.print();</script>";
?>