<?php
   include("toppage.php");
?>

<?php
  $sql = " select * from meciurinejucate where codunicmeci=".$_GET['codunicmeci'];
  $resursa = mysql_query($sql);
  while($row = mysql_fetch_array($resursa))
  {
    print $_GET['codunicmeci'];
	print ' ';
	
	print $row['codunicliga'];
	print ' ';
	
	print $row['codunicparteadinsezon'];
	print ' ';
	
	
	print $row['data'];
	print ' ';
    
     print ' <b><a href = "mecinejucat.php?codunicmeci='.$row['codunicmeci'].'">'.$row['codunicechipaG'].'VS'.$row['codunicechipaO'].'</a></b>';
	print ' ';
	
	print $row['gg'];
	print ' ';
	
	print $row['go'];
	print ' ';
	
	print $row['ggp'];
	print ' ';
	
	print $row['gop'];
	print ' ';
	
	
	print $row['ggpr'];
	print ' ';
	
	print $row['gopr'];
	print ' ';
	
	print $row['ggpen'];
	print ' ';
	
	print $row['gopen'];
	print ' ';
	
	print $row['codunicetapa'];
	print ' ';
	
		
	print '</br>';
	
  }
  
  ?>




<?php
include("bottompage.php");
?>


