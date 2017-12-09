<html>
<head>
<title>Laporan Data Dosen</title>

<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
</head>
<body>

<img src="assets/img/uin.png" alt="Logo Uin" style="width: 5%;">
<h1>Laporan Data Dosen</h1>


	<table class="table table-striped table-bordered data">
	    <thead>
			<tr> 
	        	<th>No. </th>           
	            <th>Nomer Berobat</th>
	            <th>Nama</th>
	            <th>Nip/nik</th>
			</tr>                                         
	    </thead>
	    <tbody>
	    	<?php
	                           
				include('db/koneksi_d.php');
	            
	            $query = mysqli_query($conn, "SELECT * FROM dosen ORDER BY kode ASC");
	                                        
	            if(mysqli_num_rows($query) == 0){
	            	echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
	            }else{ 
	                                        
	           	$no = 1;
	            while($data = mysqli_fetch_assoc($query)){
	                                              
				echo '<tr>';
	            	echo '<td>'.$no.'</td>';  
	                echo '<td>'.$data['kode'].'</td>';
					echo '<td>'.$data['nama'].'</td>';
	                echo '<td>'.$data['nipk'].'</td>';
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