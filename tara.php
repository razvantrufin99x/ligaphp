<?php
   include("toppage.php");
?>

<?php
  $sql = " select * from tari where codunictara=".$_GET['codunictara'];
  $resursa = mysql_query($sql);
  while($row = mysql_fetch_array($resursa))
  {
    print $_GET['codunictara'];
	print ' ';
	
    
    print ' <b><a href = "tara.php?codunictara='.$row['codunictara'].'">'    .$row['denumire'].'</a></b>';
	print ' ';
	
	print $row['indextara'];
	print ' ';
	
	print $row['flag'];
	print ' ';
	
	print $row['anthem'];
	print ' ';
	
	print $row['populatie'];
	print ' ';
	
	print $row['teritoriu'];
	print ' ';
	
	print $row['densitate'];
	print ' ';
	
		
	print '</br>';
	
  }
  
  ?>




<?php
include("bottompage.php");
?>
