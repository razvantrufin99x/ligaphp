<?php
   include("toppage.php");
?>

<?php
  $sql = " select * from partidinsezon ";
  $resursa = mysql_query($sql);
  while($row = mysql_fetch_array($resursa))
  {
    
    
    print ' <b><a href = "ParteaDinCampionat.php?codunicparteadinsezon='.$row['codunicparteadinsezon'].'">'    .$row['denumirea'].'</a></b></br>';
  }
  
  ?>




<?php
include("bottompage.php");
?>



