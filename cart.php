<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> 
	
</head>
<body>
<div class="container">
    <h1 class="page-header text-center">Activity 1 Edit and Delete of CRUD</h1>
    <div class="row">
        <div class="col-sm col-sm">
            <a href="#addnew" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> Add Shirt</a>
			<a href="#edit" data-toggle="modal" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span> Edit Order</a>
             <a href="#delete" data-toggle="modal" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Remove</a>
            <?php 
                session_start();
                if(isset($_SESSION['message'])){
                    ?>
                    <div class="alert alert-info text-center" style="margin-top:20px;">
                        <?php echo $_SESSION['message']; ?>
                    </div>
                    <?php
 
                    unset($_SESSION['message']);
                }
            ?>
						   <table class=" table table-striped table-bordered">
				  <thead class="thead-dark">
					<tr>
					  <th scope="col"><center>ID</center></th>
					  <th scope="col"><center>Name</center></th>
					  <th scope="col"><center>Image</center></th>
					  <th scope="col"><center>Price</center></th>
					  <th scope="col"><center>Quantity</center></th>
					 
					</tr>
				  </thead>
				  <tbody>
				
                    <?php
                    //load xml file
                    $xml = new DomDocument;
					$background = "finalbg.jpg";
					$xml->Load('shirtproducts.xml');
					$x = $xml->getElementsByTagName('shirts')->item(0);
					$all_shirts = $x->getElementsByTagName('shirt');
					$tf = 0;
					echo "<h2><center> Cart </center></h2>";
					
 
                    foreach($all_shirts as $each_shirt)
					{
						echo "<tr>";
						echo "<td scope='row'> <font color='black'><center>" . $each_shirt->getElementsByTagName('id')->item(0)->nodeValue . "</center></td>";
						echo "<td scope='row'> <font color='black'><center>" . $each_shirt->getElementsByTagName('image')->item(0)->nodeValue . "</center></td>";
						echo "<td scope='row'><font color='black'><center>" . $each_shirt->getElementsByTagName('shirtName')->item(0)->nodeValue . "</center></td>";
						echo "<td scope='row'><font color='black'><center>" . $each_shirt->getElementsByTagName('price')->item(0)->nodeValue . "</center></td>";
						echo "<td scope='row'><font color='black'><center>" . $each_shirt->getElementsByTagName('quantity')->item(0)->nodeValue . "</center></td>";
						$tf = $tf + $each_shirt->getElementsByTagName('price')->item(0)->nodeValue;
						
						
					}
					
					echo "</table>";

					$ctr = $x->getElementsByTagName('shirt')->length;
					
					echo "<h3><font color='black'> No of orders: $ctr</font></h3></p>";
					echo "<h3 style = 'color:black;'>Total Bill: $tf</h3>";
?>
 
                   
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include('addtocart.php'); ?>
<?php include('editform.php'); ?>
<?php include('deleteform.php'); ?>

<style type="text/css">

body {
background-image: url('<?php echo $background;?>');
background-size: cover; 
background-repeat: no-repeat; 
background-position:fixed 
background-attachment: fixed;
}
</style>
<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
