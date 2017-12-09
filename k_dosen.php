<html>
<head>
<title>Kartu Berobat</title>

<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
</head>
<body>

<img src="assets/img/uin.png" alt="Logo Uin" style="width: 5%;">
<h4>Kartu Berobat</h4>
	<table class="table table-striped table-bordered data">
	<?php 
				include "db/koneksi.php";
                $kode = $_GET['kode'];
                $no = 1;
                $q = $pdo->prepare("select * from dosen where kode = '$kode'");
                $q->execute();
                $q->setFetchMode(PDO::FETCH_OBJ);
                foreach ($q as $k => $v) {
            ?>                          
	    <tbody>
	    	<tr>
	    		<td><strong>Kode</strong></td>
	    		<td><?php echo $v->kode ?></td>
	    	</tr>
	    	<tr>
	    		<td><strong>Nama</strong></td>
	    		<td><?php echo $v->nama ?></td>
	    	</tr>
	    	<tr>
	    		<td><strong>Nip/Nik</strong></td>
	    		<td><?php echo $v->nipk ?></td>
	    	</tr>
	    	<tr>
	    		<td><strong>Tempat Lahir</strong></td>
	    		<td><?php echo $v->tmp_lahir ?></td>
	    	</tr>
	    	<tr>
	    		<td><strong>Tanggal Lahir</strong></td>
	    		<td><?php echo $v->tgl_lahir ?></td>
	    	</tr>
	    	<tr>
	    		<td><strong>Alamat</strong></td>
	    		<td><?php echo $v->alamat ?></td>
	    	</tr>
		</tbody>
	</table>
	<?php } ?>                             
</body>
</html>

<?php
	echo"<script>window.print();</script>";
?>