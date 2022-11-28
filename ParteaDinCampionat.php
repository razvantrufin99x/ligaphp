<?php
   include("toppage.php");
?>

<?php
  $sql = " select * from partidinsezon where codunicparteadinsezon=".$_GET['codunicparteadinsezon'];
  $resursa = mysql_query($sql);
  while($row = mysql_fetch_array($resursa))
  {
    print $_GET['codunicparteadinsezon'];
	print ' ';
	
    
    print ' <b><a href = "PartileCampionatului.php?codunicparteadinsezon='.$row['codunicparteadinsezon'].'">'    .$row['denumirea'].'</a></b>';
	print ' ';
	
			
	print '</br>';
	
  }
  
  ?>




<?php
include("bottompage.php");
?>
