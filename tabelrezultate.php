<?php
   include("toppage.php");
?>

<?php
print '<table>';

print ' <tr> ';

print '<td>echipa</td>';
print '<td>1</td>';
print '<td>2</td>';
print '<td>3</td>';
print '<td>4</td>';
print '<td>5</td>';
print '<td>6</td>';
print '<td>7</td>';
print '<td>8</td>';
print '<td>9</td>';
print '<td>10</td>';
print '<td>11</td>';
print '<td>12</td>';
print '<td>13</td>';
print '<td>14</td>';
print '<td>15</td>';
print '<td>16</td>';

print ' </tr> ';

  
    
  for($i=1;$i<17;$i++)
  {
	  print ' <tr>';
	  print '<td>'.$i.'</td> ';
  for($j=1;$j<17;$j++)
  {
  $sql = " select * from meciuri where codunicechipaG = ".$i." and codunicechipaO = ".$j;
   $resursa = mysql_query($sql);
  $row = mysql_fetch_array($resursa);
  
  if($i==$j){print '<td>X</td>';}
  else{
  print '<td>'.$row['gg'].'-'.$row['go'].'</td> ';
  }
  }
      print '</tr> ';
  }
  
 print ' </table>'; 
?>

<?php
include("bottompage.php");
?>