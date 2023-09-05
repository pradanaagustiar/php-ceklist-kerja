<?php
	error_reporting(E_ALL ^ E_WARNING || E_NOTICE);
	//koneksi database
	$server = "localhost";
	$user = "root";
	$password = "";
	$database = "ceklis_kerja";

    //nama database = ceklis_kerja 
	//nama tabel = pekerjaan_upsrs

	$koneksi = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($koneksi));

	//jika tombol 'Simpan' diklik
	//print_r($_POST);
	if(isset($_POST['submit']))
	{	
		//pengujian apakah data kan diedit atau simpan baru
		if($_GET['hal'] == "edit")
		{
			//Data akan diedit
			$edit = mysqli_query($koneksi," UPDATE pekerjaan_upsrs SET 
												tgl_lapor = '$_POST[tgllapor]',
												unit_pelapor = '$_POST[unitpelapor]',
												penerima_laporan = '$_POST[penerimalaporan]',
												laporan = '$_POST[laporan]',
                                                kriteria = '$_POST[kriteria]'
											WHERE ID = '$_GET[id]' " );

			if($edit) //Jika edit sukses
			{
				echo	"<script>
						alert ('Edit data sukses!');
						document.location='index.php';
						</script>";
			}
			else
			{
				echo	"<script>
						alert ('Edit data gagal!');
						document.location='index.php';
						</script>";
			}

		} 
		else
		{
			//data akan ditambah baru
			$tambah = mysqli_query($koneksi, "INSERT INTO pekerjaan_upsrs (tgl_lapor, unit_pelapor, penerima_laporan, laporan, kriteria)
											VALUES ('$_POST[tgllapor]',
													'$_POST[unitpelapor]',
													'$_POST[penerimalaporan]',
													'$_POST[laporan]',
													'$_POST[kriteria]')
													" );
		 
			if($tambah) //jika tambah sukses
			{
				echo "<script>
						alert('Tambah Sukses!');
						document.location='index.php';
					</script>";
			}
			else //jika tambah gagal
			{
				echo "<script>
						alert('Tambah GAGAL!!!');
						document.location='index.php';
					</script>";
			}
		}
	
	}

	//Pengujian jika tombol edit atau hapus diklik
	if(isset($_GET['hal']))
	{
		//pengujian jika edit data
		if($_GET['hal'] == "edit")
		{
		//Tampilkan data yang ingin diedit
		$tampil = mysqli_query($koneksi, "SELECT * FROM pekerjaan_upsrs WHERE ID = '$_GET[id]' ");
		$data = mysqli_fetch_array($tampil);
			if ($data)
				{
					//Jika data ditemukan, maka data ditampung ke dalam variabel
					$vtgllapor = $data['tgl_lapor'];
					$vunitpelapor = $data['unit_pelapor'];
					$vpenerimalaporan = $data['penerima_laporan'];
					$vlaporan = $data['laporan'];
					$vkriteria = $data['kriteria'];
			
				}
		}
		else if ($_GET['hal'] == "hapus")
		{

			//Persiapan hapus data
			$hapus = mysqli_query($koneksi, "DELETE FROM pekerjaan_upsrs WHERE ID = '$_GET[id]' ");
			if($hapus)
			{
				echo "<script>
						alert('Hapus Data Suksess!!');
						document.location='index.php';
					</script>";
			}
		}
	}

?>