<?php
   include("toppage.php");
   include("menuclasamentetop.php");
?>



<H1>  CLASAMENT ACASA </H1>

<?php



for($i = 1;$i<=16;$i++)
{
//meciuri
  $m = "select count(codunicechipaG) from meciuri where codunicechipaG = $i";
  $msc = mysql_query($m);
  $mscf = mysql_result($msc, 0);
  
  print $mscf;
  print ' | ';
  
  
//victorii  
  $v = "select count(codunicechipaG) from meciuri where codunicechipaG = $i and gg > go ";
  $mv = mysql_query($v);
  $mvf = mysql_result($mv, 0);
  
  print $mvf;
  print ' | ';

//egaluri  
  $e = "select count(codunicechipaG) from meciuri where codunicechipaG = $i and gg = go ";
  $me = mysql_query($e);
  $mef= mysql_result($me, 0);
  
  print $mef;
  print ' | ';
  
//infrangeri  
  $a = "select count(codunicechipaG) from meciuri where codunicechipaG = $i and gg < go ";
  $ma = mysql_query($a);
  $maf= mysql_result($ma, 0);
  
  print $maf;
  print ' | '; 
  
  
  //ATENTIE LA GOLURILE OASPETILOR SI GAZDELOR CAND LE ADUNATI IN CLASAMENT TOTAL
//gm  
  $gm = "select sum(gg) from meciuri where codunicechipaG = $i ";
  $mgm = mysql_query($gm);
  $mgmf= mysql_result($mgm, 0);
  
  print $mgmf;
  print ' | ';  
  
  
  
//gp  
  $gp = "select sum(go) from meciuri where codunicechipaG = $i ";
  $mpm = mysql_query($gp);
  $mpmf= mysql_result($mpm, 0);
  
  print $mpmf;
  print ' | '; 
  
  
 
   
   //gmp  
  $gmp = "select sum(ggp) from meciuri where codunicechipaG = $i ";
  $mgmp = mysql_query($gmp);
  $mgmfp= mysql_result($mgmp, 0);
  
  print $mgmfp;
  print ' | ';  
  
  
  
//gpp  
  $gp = "select sum(gop) from meciuri where codunicechipaG = $i ";
  $mpm = mysql_query($gp);
  $mpmfp= mysql_result($mpm, 0);
  
  print $mpmfp;
  print ' | '; 
  
  
  //gmpr  
  $gmpr = "select sum(ggpr) from meciuri where codunicechipaG = $i ";
  $mgmpr = mysql_query($gmpr);
  $mgmprf= mysql_result($mgmpr, 0);
  
  print $mgmprf;
  print ' | ';  
  
  
  
//gppr  
  $gppr = "select sum(gopr) from meciuri where codunicechipaG = $i ";
  $mpmpr = mysql_query($gppr);
  $mpmprf= mysql_result($mpmpr, 0);
  
  print $mpmprf;
  print ' | '; 
  
  
  //gmpen  
  $gmpen = "select sum(ggpen) from meciuri where codunicechipaG = $i ";
  $mgmpen = mysql_query($gmpen);
  $mgmpenf= mysql_result($mgmpen, 0);
  
  print $mgmpenf;
  print ' | ';  
  
  
  
//gppen  
  $gppen = "select sum(gopen) from meciuri where codunicechipaG = $i ";
  $mpmpen = mysql_query($gppen);
  $mpmpenf= mysql_result($mpmpen, 0);
  
  print $mpmpenf;
  print ' | <br>';

  

//insert datas first if not you can`t update 
//INSERT INTO `clasamentacasa`(`codunicclasament`, `codunicparteadinsezon`, `etapa`, `m`, `v`, `e`, `i`, `gm`, `gp`, `gol`, `adv`, `pct`, `gmp`, `gpp`, `penalizare`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13],[value-14],[value-15])

//
$adva = -1*((2 * $mef) + ($maf * 3));
$golaveraj = $mgmf - $mpmf;
$punctea = $mvf * 3 + $mef;

//atentie nu se introduc date privind prelungirile si penaltuirile in clasament 
//calculatii din bazele de date pentru prelungiri si penaltiuri sunt simple exemple 

//savedatas into clasamentacasa table after each foor loop
$update = "UPDATE clasamentacasa SET etapa=".$mscf.",m=".$mscf.",v=".$mvf.",e=".$mef.",i=".$maf.",gm=".$mgmf.",gp=".$mpmf.",gol=".$golaveraj.",adv=".$adva.",pct=".$punctea.",gmp=".$mgmfp.",gpp=".$mpmfp." WHERE codunicclasament=".$i;
mysql_query($update);




//penalizare nu se introduce acum

/*
m 	mscf
v	mvf
e	mef
a	maf
gg	mgmf
go	mpmf
ggp	mgmprf
gop	mpmprf

*/
}  
//end of large for loop
  ?>


<!-- after each for() loop save the datas into clasament....  table  is not included --> 
  
  
  <?php
  include("bottompage.php");
  ?>
  
  
