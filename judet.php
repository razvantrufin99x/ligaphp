<?php
   include("toppage.php");
?>

<?php
  $sql = " select * from judete where codunicjudet=".$_GET['codunicjudet'];
  $resursa = mysql_query($sql);
  while($row = mysql_fetch_array($resursa))
  {
    print $_GET['codunicjudet'];
	print ' ';
	
    
    print ' <b><a href = "judet.php?codunicjudet='.$row['codunicjudet'].'">'    .$row['judet'].'</a></b>';
	print ' ';
	
	print $row['indexjudet'];
	print ' ';
	
	print $row['codunictara'];
	print ' ';
	
		
	print '</br>';
	
  }
  
  ?>




<?php
include("bottompage.php");
?>
