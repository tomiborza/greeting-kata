<?php
echo "<center>";
function keret(){
	for($i=0;$i<79;$i++)echo "#";echo "</br>";
}
function greeting($name){
	$mf="Happy easter my friend";
	$nm="Happy easter "+name+"";
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
	keret();
	for($i=0;$i<$l;$i++)if($i==0||$i==79)echo "##";echo "</br>";

	if($name==NULL){
		echo "##   "+$mf+"   ##";
	}else{
		echo "##   "+$mn+"   ##";
	}
	for($i=0;$i<$l;$i++)if($i==0||$i==79)echo "##";echo "</br>";
	keret();
	keret();
	
}
echo "</center>";
?>