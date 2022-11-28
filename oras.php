<?php
   include("toppage.php");
?>

<?php
  $sql = " select * from orase where codunicoras=".$_GET['codunicoras'];
  $resursa = mysql_query($sql);
  while($row = mysql_fetch_array($resursa))
  {
    print $_GET['codunicoras'];
	print ' ';
	
    
    print ' <b><a href = "oras.php?codunicoras='.$row['codunicoras'].'">'    .$row['denumire'].'</a></b>';
	print ' ';
	
	print $row['indexoras'];
	print ' ';
	
	print $row['codunicjudet'];
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
