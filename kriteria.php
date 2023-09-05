<!-- styling pilihan kriteria -->
<?php 
	$pilihan_nilai = $_POST['kriteria'];

	if($pilihan_nilai === 'Prioritas'){
		$color = '#FF0055';
	} elseif($pilihan_nilai === 'Pending'){
		$color = 'yellow';
	} elseif($pilihan_nilai === 'Gampang'){
		$color = 'green';
	} else {
		$color = 'blue';
	}
?>