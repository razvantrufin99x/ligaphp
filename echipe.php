<?php
   include("toppage.php");
?>

<?php
  $sql = " select * from echipe ";
  $resursa = mysql_query($sql);
  while($row = mysql_fetch_array($resursa))
  {
    
    $adresaImagine = "logo/".$row['logo'];
  
    if(file_exists($adresaImagine))
    {
    print '<img style="border-style: solid; border-width: 2px;" src = "'.$adresaImagine.'" width="35" height="35">';
    }
    else
    {
    print '<b > X </b>';
  
    }
  
    print ' <b><a href = "echipa.php?codunicechipa='.$row['codunicechipa'].'">'    .$row['denumire'].'</a></b></br>';
  }
  
  ?>




<?php
include("bottompage.php");
?>



