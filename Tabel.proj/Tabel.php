	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Assignment Tabel</title>

		<style type="text/css">
			#table{
				
				height: 300px;
				width: 1000px;
			}

		</style>
	</head>

	<body bgcolor="#EEFDEF">
		
	<?php 
 
  // Create a multidimensional array to hold the table data .
        $users = array( 
                  array("Id","First Name", "Last Name", "email"), 
                    array("1","Peter", "Andersen", "peter@gmail.com"), 
                      array("2","John", "Miller", "john@gmail.com"), 
                        array("3","Thomas", "Swift", "thomas@gmail.com") 
                      ); 
  

  // Create one regular tabel.

  echo "<h1>Tabel information</h1>";
      echo '<table border="10" Id="table">';
        
        for ($row=0; $row <4 ; $row++) { 
        	
        	echo"<tr>";
        	for($col=0;$col <4;$col++){
        		echo"<td>".$users [$row][$col]."</td>";
        	}       	
        	       	      	       	
        }               
      echo "</table>";

     ?> 




	</body>
</html>