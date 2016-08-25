<!DOCTYPE html>
<html>
   <head>
       <title>PHP - ADMIN PANEL</title>
   </head>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<body>
    
    
    <?php 
    
    include "db.php";
    if(isset($_POST['yes'])){
        
        $id = $_GET['id'];
        
        
        $sql = "DELETE FROM news WHERE id = $id";
        $query = mysqli_query($db_con,$sql);
        
        header ('Location:admin.php');
    }
    if(isset($_POST['no'])){
        header ('Location:admin.php');
    }
    
    
    
    
    ?>
    
    

    <div class="container">
        <h1>Delete a Customer</h1>
        <div class="alert alert-danger">Are you sure to delete?</div>
        
        
        <div style="background-color:gray; padding:50px;" class="col-md-12">
           <form action="" method="post">
                <input type="submit" class="col-md-offset-2 btn btn-danger" name="yes" value="YES">
                <input type="submit" class="btn btn-default" name="no" value="NO">
            </form>
        </div>
    </div>

</body>
</html>