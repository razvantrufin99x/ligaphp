<?php
   include("toppage.php");
?>

<?php
  $sql = " select * from tari ";
  $resursa = mysql_query($sql);
  while($row = mysql_fetch_array($resursa))
  {
    
    
    print ' <b><a href = "tara.php?codunictara='.$row['codunictara'].'">'    .$row['denumire'].'</a></b></br>';
  }
  
  ?>




<?php
include("bottompage.php");
?>



