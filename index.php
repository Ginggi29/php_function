<html>
<title>
	Mantri Ginggi
</title>
<body>
		Halo ini WEB Ginggi
		<h1 align="center"> Ini angka 1 </h1>
		<h2> Ini angka 2 </h2>
		<h3> Ini angka 3 </h3>
		<h4> Ini angka 4 </h4>
		<h5> Ini angka 5 </h5>
		<table>

<?php
$koneksi = mysqli_connect("localhost", "root", "", "karyawan");
$data = mysqli_query($koneksi,"SELECT * FROM biodata");



	?>

<thead>
			<tr>
			<th>No</th>
			<th>Nama</th>
			<th>No-Hp</th>
		</tr>
		</thead>
		<tbody>
		<?php while($hasil=mysqli_fetch_array($data)) {?>
			<tr>
		<td><?php echo $hasil['NIK']; ?></td>
		<td><?php echo $hasil['NAMA']; ?></td>
		<td><?php echo $hasil['ALAMAT']; ?></td>
		<td><?php echo $hasil['NO-TLP']; ?></td>
</tr>
	<?php }?>
	</tbody>
		</table>

	</body>
	</html>
	
