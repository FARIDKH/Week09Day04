<!DOCTYPE html>
<html>
    <head>
        <title>PHP - ADMIN PANEL</title>
    </head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <body>
       <div class="container">
            <h1>PHP CRUD GRID</h1>
            <form action="create.php" method="post">
                <a href="create.php">
                    <input type="button" class="btn btn-success"  value="CREATE"><br>  
                </a>
            </form>    
               
                <?php
                
                session_start();
           
           
               if(!$_SESSION['login'] == true){
                   header('Location:login.php');                   
               } 
                
                $host = "localhost";
                $user_name = "root";
                $password = "";
                $db_name=  "oxu.az";

                $db_con = mysqli_connect($host, $user_name , $password , $db_name);
           
                if($db_con){
                $sql = "SELECT * FROM news";
                $query = mysqli_query($db_con,$sql); ?>

                <tbody>
                    <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>   
                            <th>Text</th> 
                            <th>Image</th>
                            <th colspan="2">Action</th>                        
                        </tr>
                        <?php 
                        
                        while($row = mysqli_fetch_assoc($query)){ ?>
                            <tr>
                                
                                <td><?= $row['id'] ?></td> 
                                <td><?= $row['title'] ?></td> 
                                <td><?= $row['text'] ?></td> 
                                <td> <img style="width:50%" src="uploads/<?= $row['img'] ?>" </td> 
                                <td>
                                    <a class="alert alert-danger" href="delete.php?id=<?= $row['id'] ?> ">DELETE</a>
                                </td>
                                <td>
                                    <a class="alert alert-success" href="update.php?id=<?= $row['id'] ?>">UPDATE</a>
                                </td>
                            </tr>
                            
                            
                            
                            
                    <?php }
                        
                        
                        ?>
                    </table>
                </tbody>    

                <?php  } else {
                        echo "database e qosulmadiniz!";
                    }

                    ?>

                
            </tbody>
            
            
            <BUTTON class="alert alert-success"><a href='logout.php'>LOGOUT</a></BUTTON>
            
            
        </div>
    </body>
</html>