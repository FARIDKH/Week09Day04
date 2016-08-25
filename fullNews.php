<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
    
        h1{
            color:darkblue;
        }
        
        img{
            width:600px;
        }
    
    </style>
</head>
<body>
    <?php 
    
    include "Admin_Panel/db.php";
    
    $id = $_GET['id'];
    
    
    $sql = "SELECT * FROM news WHERE id = $id";
    $query = mysqli_query($db_con,$sql);
    
    $row = mysqli_fetch_assoc($query);
    
    
    
    ?>
    
    
    
    
    
    <img src="Admin_panel/uploads/<?= $row['img'] ?>">
    
    <h1> <?= $row['title'] ?> </h1>
    <p> <?= $row['text'] ?> </p>
    
    
    
    
    
    
</body>
</html>