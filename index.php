<?php
$products = array(
				"Electronics" => array(
									"Television" => array(
														array(
															"id" => "PR001", 
															"name" => "MAX-001",
															"brand" => "Samsung"
														),
														array(
															"id" => "PR002", 
															"name" => "BIG-301",
															"brand" => "Bravia"
														),
														array(
															"id" => "PR003", 
															"name" => "APL-02",
															"brand" => "Apple"
														)
													),
									"Mobile" => array(
														array(
															"id" => "PR004", 
															"name" => "GT-1980",
															"brand" => "Samsung"
														),
														array(
															"id" => "PR005", 
															"name" => "IG-5467",
															"brand" => "Motorola"
														),
														array(
															"id" => "PR006", 
															"name" => "IP-8930",
															"brand" => "Apple"
														)
													)
								),
				"Jewelry" => array(
									"Earrings" => array(
														array(
															"id" => "PR007", 
															"name" => "ER-001",
															"brand" => "Chopard"
														),
														array(
															"id" => "PR008", 
															"name" => "ER-002",
															"brand" => "Mikimoto"
														),
														array(
															"id" => "PR009", 
															"name" => "ER-003",
															"brand" => "Bvlgari"
														)
													),
									"Necklaces" => array(
														array(
															"id" => "PR010", 
															"name" => "NK-001",
															"brand" => "Piaget"
														),
														array(
															"id" => "PR011", 
															"name" => "NK-002",
															"brand" => "Graff"
														),
														array(
															"id" => "PR012", 
															"name" => "NK-003",
															"brand" => "Tiffany"
														)
													)				
							)
			);

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title></title>
	<style type="text/css">
			table, th, td {
				border: 1px solid black;
				padding: 8px;
				text-align: center;
			}
	</style>
</head>
<body>
	<section>
	<table class="table table-bordered" >
		<caption>S E C T I O N: 1</caption>
		<tr>
			<th>Categories</th>
			<th>Sub-categories</th>
			<th>Id</th>
			<th>Name</th>
			<th>Brand</th>
		</tr>
		<?php
			foreach ($products as $key => $value) {
				foreach ($value as $key1 => $value1) {
					foreach ($value1 as $key2 => $value2) {
						echo "<tr>";
						echo "<td>".$key."</td>";
						echo "<td>".$key1."</td>";
						foreach ($value2 as $key3 => $value3) {
							echo "<td>".$value3."</td>";
						}
						echo "</tr>";
					}
				}
			}
		?>
	</table>
	</section>
	<section>
	<table class="table table-bordered" >
		<caption>S E C T I O N: 2</caption>
		<tr>
			<th>Categories</th>
			<th>Sub-categories</th>
			<th>Id</th>
			<th>Name</th>
			<th>Brand</th>
		</tr>
		<?php
			foreach ($products as $key => $value) {
				foreach ($value as $key1 => $value1) {
					foreach ($value1 as $key2 => $value2) {
						if($key1=="Mobile"){
							echo "<tr><td>".$key."</td><td>".$key1."</td>";
						foreach ($value2 as $key3 => $value3) {
							echo "<td>".$value3."</td>";
						}
						echo "</tr>";
					}
						}	
				}
			}
		?>
	</table>
	</section>
	<section>
	<table class="table table-bordered" >
		<caption>S E C T I O N: 3</caption>
		<tr>
			<th>Categories</th>
			<th>Sub-categories</th>
			<th>Id</th>
			<th>Name</th>
			<th>Brand</th>
		</tr>
		<?php
			foreach ($products as $key => $value) {
				foreach ($value as $key1 => $value1) {
					foreach ($value1 as $key2 => $value2) {

						foreach ($value2 as $key3 => $value3) {
							if($value3=="Samsung"){
						echo "<tr>";
						echo "<td>".$key."</td>";
						echo "<td>".$key1."</td>";
							foreach ($value2 as $key3 => $value3){
							echo "<td>".$value3."</td>";}
						}
						echo "</tr>";
					}
					}
				}
			}
		?>
	</table>
	</section>
	<section>
<table class="table table-bordered">

<tr><th>Category</th><th>Subcategory</th><th>Id</th><th>Name</th><th>Brand</th></tr>
<?php  

unset($products["Electronics"]["Television"][2]);
 foreach($products as $cat=>$value)
 {
   
     foreach($value as $sub_cat=>$value1)
     {   
        
        foreach($value1 as $key=>$value2)
        {
           
        echo "<tr><td>".$cat."</td>"."<td>".$sub_cat."</td>";
        foreach($value2 as $key=>$value3)
        {
            
            echo "<td>".$value3."</td>";    
        }  
    }
     }
 }


?>
</table>
</section>
<section>
<table class="table table-bordered">

<tr><th>Category</th><th>Subcategory</th><th>Id</th><th>Name</th><th>Brand</th></tr>
<?php  
$products["Electronics"]["Television"][1]['name']='BIG-555';
unset($products["Electronics"]["Television"][2]);
 foreach($products as $cat=>$value)
 {
   
     foreach($value as $sub_cat=>$value1)
     {   
        
        foreach($value1 as $key=>$value2)
        {
           
        echo "<tr><td>".$cat."</td>"."<td>".$sub_cat."</td>";
        foreach($value2 as $key=>$value3)
        {
            
            echo "<td>".$value3."</td>";    
        }  
    }
     }
 }


?>
</table>
	
</section>
</body>
</html>
