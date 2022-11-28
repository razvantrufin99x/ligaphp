<?php
   include("toppage.php");
?>

<?php
  $sql = " select * from orase ";
  $resursa = mysql_query($sql);
  while($row = mysql_fetch_array($resursa))
  {
    
    
    print ' <b><a href = "oras.php?codunicoras='.$row['codunicoras'].'">'    .$row['denumire'].'</a></b></br>';
  }
  
  ?>




<?php
include("bottompage.php");
?>



