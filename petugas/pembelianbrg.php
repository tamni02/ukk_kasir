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
				<th><center>No</center></th>
					<th><center>ID Pelanggan</center></th>
					<th><center>Nama Pelanggan</center></th>
					<th><center>No. Telepon</center></th>
					<th><center>Alamat</center></th>
					<th><center>Total Pembayaran</center></th>		
				</tr>
			</thead>  
            <tbody>
				<?php 
				include '../koneksi.php';
				$no = 1;
				$data = mysqli_query($koneksi,"SELECT * FROM pelanggan INNER JOIN penjualan ON pelanggan.PelangganID=penjualan.PelangganID");
				while($d = mysqli_fetch_array($data)){
					?>
					<tr>
					<td style="width: 20px;"><center><?php echo $no++; ?></center></td>
						<td><?php echo $d['PelangganID']; ?></td>
						<td><?php echo $d['NamaPelanggan']; ?></td>
						<td><?php echo $d['NomorTelepon']; ?></td>
						<td><?php echo $d['Alamat']; ?></td>
						<td>Rp. <?php echo number_format($d['TotalHarga'], 0, ',', '.') ?></td>
					</tr>
					</div>
				<?php } ?>
			</tbody>
		</table>
                </div> 
                </div>
<script>
 window.print();
 </script>

</body>
</html>