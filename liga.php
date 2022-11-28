<?php
   include("toppage.php");
?>

<?php
  $sql = " select * from liga where codunicliga=".$_GET['codunicliga'];
  $resursa = mysql_query($sql);
  while($row = mysql_fetch_array($resursa))
  {
    print $_GET['codunicliga'];
	print ' ';
	
    
    print ' <b><a href = "liga.php?codunicliga='.$row['codunicliga'].'">'    .$row['denumireliga'].'</a></b>';
	print ' ';
	
	print $row['codunictara'];
	print ' ';
	
	print $row['datastart'];
	print ' ';
	
	print $row['datafinal'];
	print ' ';
	

	
		
	print '</br>';
	
  }
  
  ?>




<?php
include("bottompage.php");
?>
