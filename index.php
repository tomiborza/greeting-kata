<?php
echo "<center>";
function greeting(var name){
	for(i=0;i<79;i++)echo "*";echo "</br>";
	for(i=0;i<79;i++)if(i==0||i==79)echo "*";echo "</br>";
	if(name==NULL){
		echo "* Happy easter my friend *";
	}else{
		echo "* Happy easter "+name+" *";
	}
	for(i=0;i<79;i++)if(i==0||i==79)echo "*";echo "</br>";
	for(i=0;i<79;i++)echo "*";echo "</br>";

}
echo "</center>";
?>