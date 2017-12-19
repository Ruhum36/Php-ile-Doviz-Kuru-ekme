<?php
	### Doviz Kuru
	### 19.12.2017
	### Ruhum
?>
<!DOCTYPE html>
<html>
<head>
	<title>Doviz Kuru</title>
	<style type="text/css">
		*{
			font-family: arial;	font-size: 14px;
		}
		.Duzen{
			width: 340px; background-color: #eee; float: left; padding: 5px; border-bottom: 2px solid #ddd
		}
		.Adi{
			float: left; width: 150px;
		}
		.AlisSatis{
			float: left; width: 75px; margin-left: 15px; text-align: center;
		}
	</style>
</head>
<body>

	<div>
		<div class="Duzen">
			<div class="Adi">Para Birimi</div>
			<div class="AlisSatis">Alış</div>
			<div class="AlisSatis">Satış</div>
		</div>
		<div style="clear: both;"></div>
		<?php

		$AlinacakKurlar = array('USD', 'EUR');

		$Baglanti = 'https://www.doviz.com/api/v1/currencies/all/latest';
		$Kaynak = file_get_contents($Baglanti);
		$Kaynaklar = json_decode($Kaynak, true);

		foreach ($Kaynaklar as $Kaynak) {

			if(in_array($Kaynak['code'], $AlinacakKurlar)){

				$Kod = $Kaynak['code'];
				$Satis = $Kaynak['selling'];
				$Alis = $Kaynak['buying'];
				$TamAdi = $Kaynak['full_name'];

		?>
		<div class="Duzen">
			<div class="Adi"><?=$TamAdi?></div>
			<div class="AlisSatis"><?=$Alis?></div>
			<div class="AlisSatis"><?=$Satis?></div>
		</div>
		<div style="clear: both;"></div>
		<?php
			}
		}
		?>
	</div>

</body>
</html>
