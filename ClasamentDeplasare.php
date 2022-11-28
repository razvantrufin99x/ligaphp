<?php
   include("toppage.php");
   include("menuclasamentetop.php");
?>



<H1>  CLASAMENT DEPLASARE </H1>

<?php

for($i = 1;$i<=16;$i++)
{
//meciuri
  $m = "select count(codunicechipaO) from meciuri where codunicechipaO = $i";
  $msc = mysql_query($m);
  $mscf = mysql_result($msc, 0);
  
  print $mscf;
  print ' | ';
  
  
//victorii  
  $v = "select count(codunicechipaO) from meciuri where codunicechipaO = $i and gg > go ";
  $mv = mysql_query($v);
  $mvf = mysql_result($mv, 0);
  
  print $mvf;
  print ' | ';

//egaluri  
  $e = "select count(codunicechipaO) from meciuri where codunicechipaO = $i and gg = go ";
  $me = mysql_query($e);
  $mef= mysql_result($me, 0);
  
  print $mef;
  print ' | ';
  
//infrangeri  
  $a = "select count(codunicechipaO) from meciuri where codunicechipaO = $i and gg < go ";
  $ma = mysql_query($a);
  $maf= mysql_result($ma, 0);
  
  print $maf;
  print ' | '; 
  
  
  //ATENTIE LA GOLURILE OASPETILOR SI GAZDELOR CAND LE ADUNATI IN CLASAMENT TOTAL
 
  
  
  
//gp  
  $gp = "select sum(go) from meciuri where codunicechipaO = $i ";
  $mpm = mysql_query($gp);
  $mpmf= mysql_result($mpm, 0);
  
  print $mpmf;
  print ' | '; 
  
  
  //gm  
  $gm = "select sum(gg) from meciuri where codunicechipaO = $i ";
  $mgm = mysql_query($gm);
  $mgmf= mysql_result($mgm, 0);
  
  print $mgmf;
  print ' | '; 
  
 //gpp  
  $gp = "select sum(gop) from meciuri where codunicechipaO = $i ";
  $mpm = mysql_query($gp);
  $mpmfp= mysql_result($mpm, 0);
  
  print $mpmfp;
  print ' | '; 
   
   //gmp  
  $gmp = "select sum(ggp) from meciuri where codunicechipaO = $i ";
  $mgmp = mysql_query($gmp);
  $mgmfp= mysql_result($mgmp, 0);
  
  print $mgmfp;
  print ' | ';  
  
  
  
//gppr  
  $gppr = "select sum(gopr) from meciuri where codunicechipaO = $i ";
  $mpmpr = mysql_query($gppr);
  $mpmprf= mysql_result($mpmpr, 0);
  
  print $mpmprf;
  print ' | '; 
  
  
  //gmpr  
  $gmpr = "select sum(ggpr) from meciuri where codunicechipaO = $i ";
  $mgmpr = mysql_query($gmpr);
  $mgmprf= mysql_result($mgmpr, 0);
  
  print $mgmprf;
  print ' | ';  
  
  
  
//gppen  
  $gppen = "select sum(gopen) from meciuri where codunicechipaO = $i ";
  $mpmpen = mysql_query($gppen);
  $mpmpenf= mysql_result($mpmpen, 0);
  
  print $mpmpenf;
  print ' | ';
  
  
  //gmpen  
  $gmpen = "select sum(ggpen) from meciuri where codunicechipaO = $i ";
  $mgmpen = mysql_query($gmpen);
  $mgmpenf= mysql_result($mgmpen, 0);
  
  print $mgmpenf;
  print ' | <br>';  
  
  
  


  
//insert datas first if not you can`t update 
//INSERT INTO `clasamentdeplasare`(`codunicclasament`, `codunicparteadinsezon`, `etapa`, `m`, `v`, `e`, `i`, `gm`, `gp`, `gol`, `adv`, `pct`, `gmp`, `gpp`, `penalizare`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13],[value-14],[value-15])

//
$advd = ($mef + ($maf * 3));
$golaveraj = $mpmf - $mgmf;
$puncted = $maf * 3 + $mef;

//atentie nu se introduc date privind prelungirile si penaltuirile in clasament 
//calculatii din bazele de date pentru prelungiri si penaltiuri sunt simple exemple 

//savedatas into clasamentdeplasare  table after each foor loop
$update = "UPDATE clasamentdeplasare SET etapa=".$mscf.",m=".$mscf.",v=".$maf.",e=".$mef.",i=".$mvf.",gm=".$mpmf.",gp=".$mgmf.",gol=".$golaveraj.",adv=".$advd.",pct=".$puncted.",gmp=".$mpmfp.",gpp=".$mgmfp." WHERE codunicclasament=".$i;
mysql_query($update);


//penalizare nu se introduce acum

/*
ATENTIE CA DATELE SE SCHIMBA IN DEPLASARE DATELE SUNT PE COLOANA 2
m 	mscf		mscf
v	mvf			maf 
e	mef			mef
a	maf			mvf 
gg	mgmf		mpmf
go	mpmf		mgmf
ggp	mgmfp		mpmfp
gop	mpmfp		mgmfp

*/
}  
//end of large for loop
  ?>


<!-- after each for() loop save the datas into clasament....  table  is not included --> 
  
  
  <?php
  include("bottompage.php");
  ?>
  
 
