<?php	require_once("baglan.php");	$kadi=$_SESSION["kadi"];	$kisi=$_SESSION["kisi"];				//KAÇ MESAJ OLDUĞUNU BULMAK			$ac = @fopen ( "mesajlarimiz.txt", 'r' );			$i=0;			$j=0;			$dosya=file("mesajlarimiz.txt");			foreach($dosya as $yeni){				$bol=explode("\t",$yeni);				$gelentar=$bol[0];				$gonderen=$bol[1];				$alan=$bol[2];				$mesaji=$bol[3];						 										if( (eregi ( $kisi, $gonderen ) && eregi ( $kadi, $alan ))) {					$j++;					$gelen_sayi=$j;									}														}							$aa=$gelen_sayi>0 ? $gelen_sayi:0;			mysql_query("update mesaj_sayisi set mesaj_sayi='$aa' where mesaj_kisi='$kisi' ");												?>