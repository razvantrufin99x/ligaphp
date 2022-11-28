<?php
   include("toppage.php");
?>

<?php
  $sql = " select * from meciuri ";
  $resursa = mysql_query($sql);
  while($row = mysql_fetch_array($resursa))
  {
    
    print ' <b>'.$row['codunicmeci'].'</b> | ';
	print ' <b>'.$row['codunicliga'].'</b> | ';
	print ' <b>'.$row['codunicparteadinsezon'].'</b> | ';
	print ' <b>'.$row['data'].'</b> | ';
	print ' <b>'.$row['codunicetapa'].'</b> | ';
	print ' ';
    print ' <b><a href = "meci.php?codunicmeci='.$row['codunicmeci'].'">'.$row['codunicechipaG'].'VS'.$row['codunicechipaO'].'</a></b></br>';
  }
  
  ?>




<?php
include("bottompage.php");
?>



