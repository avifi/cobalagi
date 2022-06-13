</html>
<span style="color: #ff0000;"><html></span>
<head>
	<meta charset="UTF-8">
	<title>Belajar HMVC di Codeigniter</title>
</head>
<body>
	<h1>Ini adalah halaman module Produk</h1>
	<table border="1">
		<thead>
			<tr>
				<th>No</th>
				<th>NIM</th>
				<th>Nama</th>
				<th>Jenis Kelamin</th>
				<th>Tempat, Tanggal Lahir</th>
				<th>Agama</th>
				<th>Program Studi</th>
				<th>Email</th>
				<th>HP</th>
				<th>Asal Sekolah</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($mhs->result_array() as $mhs): ?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $mhs['nim'] ?></td>
				<td><?php echo $mhs['nama'] ?></td>
				<td><?php echo $mhs['jenis_kelamin'] ?></td>
				<td><?php echo $mhs['ttl'] ?></td>
				<td><?php echo $mhs['agama'] ?></td>
				<td><?php echo $mhs['prodi'] ?></td>
				<td><?php echo $mhs['email'] ?></td>
				<td><?php echo $mhs['hp'] ?></td>
				<td><?php echo $mhs['asal_sekolah'] ?></td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</body>
</html>