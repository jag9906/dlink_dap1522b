<?
$l = "abcdefghijklmnopqrstuvwxyz";
$u = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$n = "0123456789";
$s = "~!@#$%^&*()_+|`-=\\{}[]:\";'<>?,./ ";
if (isprint($l.$u.$n.$s)=="1")			echo "PASS!\n"; else echo "FAIL!\n";
if (isprint($l.$u.$n.$s."\t")=="0")		echo "PASS!\n"; else echo "FAIL!\n";
if (isprint($l.$u.$n.$s."\r")=="0")		echo "PASS!\n"; else echo "FAIL!\n";
if (isprint($l.$u.$n.$s."\n")=="0")		echo "PASS!\n"; else echo "FAIL!\n";
?>
