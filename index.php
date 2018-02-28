<?php
echo "<center>";
function keret(){
	for($i=0;$i<79;$i++)echo "#";echo "</br>";
}
function keret(){
	for($i=0;$i<79;$i++)echo "~";echo "</br>";
}
function greeting($name){
	$mf="Happy easter my friend";
	$nm="Nagyon nagyon boldog szuletesnapot kivanok sok sok szeretettel, kedves"+$name+"";
	$l=79
	if(strlen($mf)>80){
		$com=strlen($mf)-80;
		$l=$l+$com;
	}
	$com=0;
	if(strlen($mn)>80){
		$com=strlen($mf)-80;
		$l=$l+$com;
	}
	keret();
	keret1();
	for($i=0;$i<$l;$i++)if($i==0||$i==79)echo "##";echo "</br>";

	if($name==NULL){
		echo "#~   "+$mf+"   ~#";
	}else{
		echo "#~   "+$mn+"   ~#";
	}
	for($i=0;$i<$l;$i++)if($i==0||$i==79)echo "##";echo "</br>";
	keret1();
	keret();
	
}
echo "</center>";
?>