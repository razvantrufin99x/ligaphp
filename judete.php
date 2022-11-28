<?php
   include("toppage.php");
?>

<?php
  $sql = " select * from judete ";
  $resursa = mysql_query($sql);
  while($row = mysql_fetch_array($resursa))
  {
    
    
    print ' <b><a href = "judet.php?codunicjudet='.$row['codunicjudet'].'">'    .$row['judet'].'</a></b></br>';
  }
  
  ?>




<?php
include("bottompage.php");
?>



