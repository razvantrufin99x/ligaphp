
<!--
salveaza punctele din fiecare etapa obinute in puncteobtinute.puncteperetapa 
 pentru asta trebuie sa cauti in tabela meciuri toate meciurile fiecarei echipe si apoi salvezi punctele obtinute intrun $sirpuncteobtinute 
  si apoi sa salvezi $sirpuncteobtinute in tabelul puncteobtinute.puncteperetapa
   deci o noua fila puncteperetapaperechipa.php   
formatul acestui camp este string de 100
si se salveaza ca si string despartit prin virgule 0,0,0,0,0,0,0,0,0,0,0,0,0,0...


si apoi creaza un clasament pentru fiecare etapa si save in puncteobtinute.loculperetapa
 pentru asta trebuei sa aduni datele din puncteobtinute.puncteperetapa
 pentru fiecare echipa pentru fiecare etapa in parte si sa odonezi datele 
 apoi sa salvezi ordinea lor in  puncteobtinute.loculperetapa
 respectand formatul de mai jos
formatul acestui camp este string de 200
si se salveaza ca si string despartit prin virgule 0,0,0,0,0,0,0,0,0,0,0,0,0,0...
salvaza datele obtinute in puncteleobtinute tabele
creaza un grafic al punctelor obtinute in fiecare etapa si pt locul ocupat 

pentru asta este nevoie de un raand nou in care sa adaugam suma punctelor per etapa si apoi sa ordonam in fiecare etapa echipele dupa suma obtinand lcul fiecarei echipe in fiecare etapa 


UPDATE `puncteleobtinutesr` SET `codunicechipa`=[value-1],`puncteperetapa`=[value-2],`loculperetapa`=[value-3],`codunicparteadinsezon`=[value-4],`puncteinsumateperetapa`=[value-5] WHERE 1


-->

<?php
   include("toppage.php");
?>


<?php



//cautare toate meciurile unei echipe din meciuri
$p = " ";
$sumap = 0;
for($i = 1; $i<=16; $i++)
{ 
$sql = " select * from meciuri where codunicechipaG= ".$i." or codunicechipaO= ".$i;
//$sql = " select * from meciuri where codunicechipaG= ".$i;
//$sql = " select * from meciuri where codunicechipaO= ".$i;
 $resursa = mysql_query($sql);
 
  while($row = mysql_fetch_array($resursa))
  {
	 $sqle = " select * from puncteobtinutesr where codunicechipa=".$i;
	 $resursae = mysql_query($sqle);
	 $rowe = mysql_fetch_array($resursa);
	 print " Puncte per etapa insumate = ";
	 print 	$rowe['puncteinsumateperetapa'];
	 print "<br>";
	 
	if($row['codunicechipaG']==$i){
		if($row['gg']>$row['go']){$p+="3";$sumap+=3;}
		else if($row['gg']==$row['go']){$p+="1";$sumap+=1;}
		else if($row['gg']<$row['go']){$p+="0";$sumap+=0;}
		
	}
	else if($row['codunicechipaO']==$i){
		if($row['gg']<$row['go']){$p+="3";$sumap+=3;}
		else if($row['gg']==$row['go']){$p+="1";$sumap+=1;}
		else if($row['gg']>$row['go']){$p+="0";$sumap+=0;}
	}	
	$p+=",";
	
  $stringpunctepe = $rowe['puncteperetapa'].$p;
 //update puncteobtinutesr.puncteperetapa = $p
 //pentru a insuma suma trebuie sa colectam fiecare meci deci puncteperetapa = puncteperetapa + $p
 $sqlu1 = "UPDATE puncteleobtinutesr SET puncteperetapa=".$stringpunctepe." where codunicechipa=".$i;
 mysql_query($sqlu1);
 
 
 $stringsumap = $rowe['puncteinsumateperetapa'].",".$sumap;
 //update puncteobtinutesr.puncteinsumateperetapa = $sumap
 $sqlu2 = "UPDATE puncteleobtinutesr SET puncteinsumateperetapa=".$stringsumap." where codunicechipa=".$i;
 mysql_query($sqlu2);
  $p=" ";
  }

 $sumap = 0;

}


//calculul clasamentului per etapa dupa salvarea puctelor fiecarei echipe in puncteleobtinutesr.puncteinsumateperetapa
//pas 1 se creaza o lista de indecsi codunicechipa pentru fiecare echipa 
//pas 2 pentru fiecare echipa se iau pe rand datele din puncteleobtinutesr.puncteinsumateperetapa
//    astfel ca trebuie sa spargem lista dupa fiecare terminator gasit adica semnul virgula ,
//pas 3 se ordoneaza aceasta lista de codunicechipa , puncteleobtinutesr.puncteinsumateperetapa 
//pas 4 dupa ordonarea datelor din pas 3 se obtine un clasament . se trece in loculperetapa tot cu virgula despartite datele 
//     obtinute dupa ordonare astfel se trece in dreptul echipei cate un loc pe care s-a aflat echipa in etapa i 
//se printeza listele toate si se ofera graficele
//va urez succes in reaizarea acestui algoritm :>>>>>>>>>>>>>>>>>


//citeste toate puncteleinsumateperetapa si apoi sparge lista dupa fiecare virgula gasita , si afiseaza fiecare informatie pe o linie 
$k = 1;

while($k<17)
  {
	 $sqlp = " select * from puncteobtinutesr where codunicechipa=".$k;
	 $resursap = mysql_query($sqlp);
	 
	 $reader  = $resursap['puncteinsumateperetapa'];
	$pieces = explode(",", $reader);
	for($j=0;$j<count($pieces, COUNT_RECURSIVE);$j++){
	print $pieces[$j]; 

	print $k;
	print ' ';
	print '<br>';
	}
	 $k++;
	 
	 
  }


//realizeaza ordonarea datelor 
//pentru fiecare etapa cauta in puncteobtinutesr.puncteinsumateperetapa punctele fiecarei echipe
//insumate dupa n etape scruse
//apoi adaugale in tabelul ordonare 
//apoi creaza un sql de selectare cu ordonoare asc 
//apoi scrie ordinea echipelor in puncteobtinutesr.lcfirst
//apoi scrie un grafic sau ordinea pe ecran
//UPDATE `ordonaretmp` SET `codunicechipa`=[value-1],`puncte`=[value-2],`locul`=[value-3] WHERE 1
$k = 1;
$etapa = 1;

while($etapa<17)
{
while($k<17)
  {
	 $sqlpo = " select * from puncteobtinutesr where codunicechipa=".$k;
	 $resursapo = mysql_query($sqlpo);
	 
	 $readero  = $resursapo['puncteinsumateperetapa'];
	$pieceso = explode(",", $readero);
	$s = $pieceso[$etapa]; 
	
	$sqlupdateloc = "UPDATE ordonaretmp SET puncte=.$s. WHERE codunicechipa=".$k;
	$updatepcttmp = mysql_query($sqlpo);
	
	$sqlordonare = "select * from ordonaretmp order by puncte descendent";
	$resord = mysql_query($sqlordonare);
	$l = "";
	$loc=0;
	 while($rowd  = mysql_fetch_array($resord))
	 {
		 $sqlfindlocul = "select * from puncteobtinutesr where codunicechipa=".$k;
		 $resordsqlfindlocul = mysql_query($sqlfindlocul);
		 $rowsqlfindlocul  = mysql_fetch_array($resordsqlfindlocul)
		 $l = $rowsqlfindlocul['loculperetapa'];
		 $l.$rowd['$loc++'];
		  		//scrie locul in puncteobtinutesr.loculperetapa;
				//UPDATE `puncteleobtinutesr` SET `codunicechipa`=[value-1],`puncteperetapa`=[value-2],`loculperetapa`=[value-3],`codunicparteadinsezon`=[value-4],`puncteinsumateperetapa`=[value-5] WHERE 1
		$sqlwritelocul = "UPDATE puncteleobtinutesr SET loculperetapa=.$l. WHERE codunicechipa=".$k;
		$updatesqlwritelocul = mysql_query($sqlwritelocul); 
	 }	
	
	 $etapa++;
	 
  }
   $k++;
} 
  


?>

AM terminat de calculat si de adaugat datele in tabela

<?php
include("bottompage.php");
?>