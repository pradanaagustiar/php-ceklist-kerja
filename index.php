<?php 
include 'function.php';
include 'kriteria.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checklist Kerja</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<style>
			label {
				font-size: 14px;
			}

		</style>
</head>
<body>
	<div class="container">
    <h1 class="text-center mt-3">CHECKLIST KERJA</h1>
		<h2 class="text-center mb-4">PT. MAJU LANCAR</h2>

		<!-- awalan form -->
		<div class="card">
			<div class="card-header bg-info text-white">
				<b>Form Input Checklist Pekerjaan</b>
			</div>
			<div class="card-body">
				<form method="post" action="">
					<div class="form-group">
						<label>Tanggal Lapor</label>
						<input style="width: 200px" class="form-control form-control-sm" type="date" name="tgllapor" value="<?=@$vtgllapor?>" placeholder="Tanggal Lapor" required>
					</div>
					<div class="form-group mt-2">
						<label>Unit Pelapor</label>
						<input style="width: 541px" class="form-control form-control-sm" type="text" name="unitpelapor" value="<?=@$vunitpelapor?>" placeholder="Unit Pelapor" required>
					</div>
					<div class="form-group mt-2">
						<label>Penerima Laporan</label>
						<input style="width: 541px" class="form-control form-control-sm" type="text" name="penerimalaporan" value="<?=@$vpenerimalaporan?>" placeholder="Penerima Laporan" required>
					</div>
					<div class="form-group mt-2">
						<label>Isikan laporan yang diterima</label>
						<input class="form-control form-control-sm" type="text" name="laporan" value="<?=@$vlaporan?>" placeholder="Laporan" required></input>
					</div>
					<div class="form-group mt-2">
                        <div class="input-group input-group-sm mb-3">
                            <label class="input-group-text bg-warning text-success" for="inputGroupSelect01">Status</label>
                            <select class="form-select form-select-md" id="inputUser" name="kriteria" value="<?=@$vkriteria?>" required>
                                <option selected>Pilih Kriteria ...</option>
                                <option value="Prioritas" class="text-danger">Prioritas</option>
                                <option value="Pending" class="text-warning ">Pending</option>
                                <option value="Gampang" class="text-success">Gampang</option>
                                <option value="Rampung" class="text-info">Rampung</option>
                            </select>
                        </div>
					</div>
					<button type="submit" class="btn btn-success mt-3 btn-sm" name="submit">Simpan</button>
					<button type="reset" class="btn btn-danger mt-3 btn-sm" name="reset">Reset</button>
				</form>
			</div>
		</div>
		<!-- akhiran form -->

		<!-- awalan tabel -->
		<div class="card mt-3">
			<div class="card-header bg-info text-white">
				<b>Daftar Pekerjaan</b>
			</div>
			<form action="" method='post'>
				<input type="text" name='keyword' size="50" class="my-2" placeholder="masukan kriteria pencarian">
				<button type="submit" name='cari'>cari</button>
			</form>
			<div class="card-body">
				<table class="table table-bordered">
					<tr>
						<th style="width: 60px">No.</th>
						<th style="width: 110px">Tgl Lapor</th>
						<th style="width: 150px">Unit Pelapor</th>
						<th style="width: 160px">Penerima Laporan</th>
						<th style="width: 320px">Laporan</th>
						<th style="width: 120px">Status</th>
						<th style="width: 120px">Aksi</th>
					</tr>
					<!-- untuk memunculkan tabel database dari phpmyadmin -->
					<?php
						$no = 1;
						$tampil = mysqli_query($koneksi, "SELECT * FROM pekerjaan_upsrs order by ID desc");
						while($data = mysqli_fetch_array($tampil)) :
					?>
					<tr>
						<td><?php echo $no++;?></td> <!-- php echo bisa diganti dengan <(kurangdari)?= -->
						<td><?=$data['tgl_lapor']?></td>
						<td><?=$data['unit_pelapor']?></td>
						<td><?=$data['penerima_laporan']?></td>
						<td><?=$data['laporan']?></td>
						<td style="color: <?=$color;?>"><?=$data['kriteria']?></td>
						<td>
							<a href="index.php?hal=edit&id=<?=$data['ID']?>" class="btn btn-warning btn-sm"> Edit </a>
							<a href="index.php?hal=hapus&id=<?=$data['ID']?>"
               				onclick= "return confirm ('Apakah yakin ingin menghapus data ini?')" class="btn btn-danger btn-sm" > Hapus </a>
						</td>
					</tr>
					<?php endwhile; //penutup perulangan while ?> 
				</table>
			</div>
		</div>
		<!-- akhiran tabel -->
        <a target=_blank href="export.php" class="btn btn-success mt-3 mb-3"> Download Excel </a>
	</div>
</body>
</html>

