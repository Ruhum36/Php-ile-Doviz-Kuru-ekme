<!DOCTYPE html>
<html>
<head>
	<title>Php ile Döviz Kuru Çekme</title>
</head>
<body>

<?php

	$Baglanti = 'https://www.doviz.com/api/v1/currencies/all/latest';
	$Kaynak = file_get_contents($Baglanti);
	$Kaynaklar = json_decode($Kaynak, true);

	$Kurlar = array('USD','EUR');

	foreach ($Kaynaklar as $Kaynak) {

		if(in_array($Kaynak['code'], $Kurlar)){
		
			$Alis = $Kaynak['selling'];
			$Satis = $Kaynak['buying'];
			$TamAdi = $Kaynak['full_name'];
			$GuncellemeTarihi = date('d.m.Y H:i:s', $Kaynak['update_date']);

			echo '<b>Alış: </b>'.$Alis.'<br />';
			echo '<b>Satış: </b>'.$Satis.'<br />';
			echo '<b>TamAdi: </b>'.$TamAdi.'<br />';
			echo '<b>GuncellemeTarihi: </b>'.$GuncellemeTarihi.'<hr />';

		}


	}

?>


<div>
	


</div>

</body>
</html>