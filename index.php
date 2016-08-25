<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<style>
    
        img{
            width:350px;
        }
    
    
    </style>
</head>
<body>
<div class="container">
	<div class="row">
		<nav class="navbar navbar-default">
	  		<div class="container-fluid">
			    <div class="navbar-header">
			      <a class="navbar-brand" href="#">
			        <img alt="Brand" src="12.png" style="width:200px;height:40px;">
			      </a>
			    </div>
		  	</div>
		  	<a href="Admin_panel/login.php" style="border:1px solid grey; border-radius:10px;padding:5px; background:#00e600;" class="pull-right">LOGIN</a>
		</nav>
	</div>
		
		<?php 
            include "Admin_panel/db.php";
            
            $sql = "SELECT * FROM news";
            $query = mysqli_query($db_con,$sql);
            
            while($row = mysqli_fetch_assoc($query)){ ?>
               <div class="col-md-4">
                    <div class="thumbnail">
                          <img   alt="Card image cap" src="Admin_panel/uploads/<?= $row['img'] ?>">
                          <div class="caption">
                              <h3><a href="fullNews.php?id=<?= $row['id'] ;?>"><?= $row['title'] ?></a></h3>
                          </div>
                    </div>
               </div>
             
          <?php    } ?>
            
		
</div>


</body>
</html>