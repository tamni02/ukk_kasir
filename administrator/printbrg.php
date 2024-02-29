<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Mart</title>
    <style>
        .table {
            width: 100%;
            border-collapse: collapse;
        }
        .table th, .table td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        .table tr:nth-child(even){background-color: #fff}
        .table th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            color: black;
        }
    </style>
</head>
<body>
<div class="container">
<div class="card mt-2">
	<div class="card-body">
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th><center>Nama Produk</center></th>
					<th><center>Harga</center></th>
					<th><center>Stok</center></th>
				</tr>
			</thead>
			<tbody>
				<?php 
				include '../koneksi.php';
				$no = 1;
				$data = mysqli_query($koneksi,"select * from produk");
				while($d = mysqli_fetch_array($data)){
					?>
					<tr>
						<td style="width: 20px;"><center>
						<?php echo $no++; ?>
						</center></td>
						<td><?php echo $d['NamaProduk']; ?></td>
						<td><?php echo "Rp. " . number_format($d['Harga'], 0, ',', '.'); ?></td>
						<td><?php echo $d['Stok']; ?></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>
</div>
<script>
 window.print();
 </script>
</body>
</html>
