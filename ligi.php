<?php
   include("toppage.php");
?>

<?php
  $sql = " select * from liga ";
  $resursa = mysql_query($sql);
  while($row = mysql_fetch_array($resursa))
  {
    
    
    print ' <b><a href = "liga.php?codunicliga='.$row['codunicliga'].'">'    .$row['denumireliga'].'</a></b></br>';
  }
  
  ?>




<?php
include("bottompage.php");
?>



