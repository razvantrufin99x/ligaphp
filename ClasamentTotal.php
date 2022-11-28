<?php
   include("toppage.php");
   include("menuclasamentetop.php");
?>







<H1>  CLASAMENT TOTAL </H1>

<?php


for($i = 1;$i<=16;$i++)
{

  $sqlA = "select * from clasamentacasa where codunicclasament = $i";
  $resursaA = mysql_query($sqlA);
	$rowA = mysql_fetch_array($resursaA);
	
	$eta = $rowA['etapa'];
	$ma = $rowA['m'];
	$va = $rowA['v'];
	$ea = $rowA['e'];
	$ia = $rowA['i'];
	$gma = $rowA['gm'];
	$gpa = $rowA['gp'];
	$gola = $rowA['gol'];
	$adva = $rowA['adv'];
	$pcta = $rowA['pct'];
	$gmpa = $rowA['gmp'];
	$gppa = $rowA['gpp'];

	
	$sqlD = "select * from clasamentdeplasare where codunicclasament = $i";
  $resursaD = mysql_query($sqlD);
	$rowD = mysql_fetch_array($resursaD);
  
	$etd = $rowD['etapa'];
	$md = $rowD['m'];
	$vd = $rowD['v'];
	$ed = $rowD['e'];
	$id = $rowD['i'];
	$gmd = $rowD['gm'];
	$gpd = $rowD['gp'];
	$gold = $rowD['gol'];
	$advd = $rowD['adv'];
	$pctd = $rowD['pct'];
	$gmpd = $rowD['gmp'];
	$gppd = $rowD['gpp'];
  
  $etape = $eta + $etd;
  $meciuri = $ma + $md;
  $victorii =$va + $vd;
  $egaluri =$ea + $ed;
  $infrangeri =$ia + $id;
  $golmarcat =$gma + $gmd;
  $golprimit =$gpa + $gpd;
  $golaveraj =$gola + $gold;
  $adevar =$adva + $advd;
  $puncte =$pcta + $pctd;
  $golmarcatpauza =$gmpa + $gmpd;
  $golprimitpauza =$gppa + $gppd;
  
  
   $update = "UPDATE clasamenttotal SET etapa=".$etape.",m=".$meciuri.",v=".$victorii.",e=".$egaluri.",i=".$infrangeri.",gm=".$golmarcat.",gp=".$golprimit.",gol=".$golaveraj.",adv=".$adevar.",pct=".$puncte.",gmp=".$golmarcatpauza.",gpp=".$golprimitpauza." WHERE codunicclasament=".$i;
mysql_query($update);
	
}



?>




<?php



//INSERT INTO `clasamenttotal`(`codunicclasament`, `codunicparteadinsezon`, `etapa`, `m`, `v`, `e`, `i`, `gm`, `gp`, `gol`, `adv`, `pct`, `gmp`, `gpp`, `penalizare`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13],[value-14],[value-15])




  $sqlct = " select * from clasamenttotal ";
  $resursact = mysql_query($sqlct);
  while($rowct = mysql_fetch_array($resursact))
  {
	  print '<BR>';
    print $rowct['codunicclasament']; print ' | ' ;
	 print $rowct['codunicparteadinsezon'];print ' | ' ;
	  print $rowct['etapa'];print ' | ' ;
	   print $rowct['m'];print ' | ' ;
	    print $rowct['v'];print ' | ' ;
		 print $rowct['e'];print ' | ' ;
		  print $rowct['i'];print ' | ' ;
		   print $rowct['gm'];print ' | ' ;
		    print $rowct['gp'];print ' | ' ;
			 print $rowct['gol'];print ' | ' ;
			  print $rowct['adv'];print ' | ' ;
			   print $rowct['pct'];print ' | ' ;
			    print $rowct['gmp'];print ' | ' ;
				 print $rowct['gpp'];print ' | ' ;
				  print $rowct['penalizare'];print ' <BR> ' ;
	
   
    
  }
  
  ?>




  <?php
  include("bottompage.php");
  ?>