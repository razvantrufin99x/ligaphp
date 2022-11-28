<?php
   include("toppage.php");
?>

<?php
  $sql = " select * from echipe where codunicechipa=".$_GET['codunicechipa'];
  $resursa = mysql_query($sql);
  while($row = mysql_fetch_array($resursa))
  {
    print $_GET['codunicechipa'];
	print ' ';
	
    $adresaImagine = "logo/".$row['logo'];
  
    if(file_exists($adresaImagine))
    {
    print '<img style="border-style: solid; border-width: 2px;" src = "'.$adresaImagine.'" width="35" height="35">';
    }
    else
    {
    print '<b > X </b>';
  
    }
  
    print ' <b><a href = "echipa.php?codunicechipa='.$row['codunicechipa'].'">'    .$row['denumire'].'</a></b>';
	
	print $row['codunicjudet'];
	print ' ';
	
		print $row['codunicclasament'];
	print ' ';
	
		print $row['indexul'];
	print ' ';
	print '</br>';
	
  }
  
  ?>




<?php
include("bottompage.php");
?>
