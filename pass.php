<?php
while(true){
$pass=readline($pth."[$red?$pth] Masukan Password$ijo : ");
  if($pass=="Cocentz gaskeun"){
echo$pth."[$ijo>$pth] Cocentz [$ijo Access OK$pth ]".$t.$t;
break;
} 
  elseif($pass==""){
echo$pth."[".$ijo."•".$pth."]$kn please fill in the password!".$t;
continue;
}
  elseif($pass!=="Cocentz gaskeu"){
echo$kn."[$red!$kn]$pth Cocentz$pth [$red Access denied$pth ]".$t;
exit;
 }
}
?>
