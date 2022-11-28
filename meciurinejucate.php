<?php
   include("toppage.php");
?>

<?php
  $sql = " select * from meciurinejucate ";
  $resursa = mysql_query($sql);
  while($row = mysql_fetch_array($resursa))
  {
    
    print ' <b>'.$row['codunicmeci'].'</b> | ';
	print ' <b>'.$row['codunicliga'].'</b> | ';
	print ' <b>'.$row['codunicparteadinsezon'].'</b> | ';
	print ' <b>'.$row['codunicetapa'].'</b> | ';
	
	print ' <b>'.$row['data'].'</a></b> | ';
    print ' <b><a href = "mecinejucat.php?codunicmeci='.$row['codunicmeci'].'">'.$row['codunicechipaG'].'VS'.$row['codunicechipaO'].'</a></b></br>';
  }
  
  ?>




<?php
include("bottompage.php");
?>



