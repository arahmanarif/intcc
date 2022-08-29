<?php
require_once('connection.php');

    if(isset($_POST['reg'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        if(strlen($pass) < 5){
          $error= 'Password must be more then 5 Digits';
        }else{

          $sql = "INSERT INTO users(
            name,
            email,
            password
          )
          VALUES(
            '$name',
            '$email',
            '$pass'
          )";

          $insert = $connection->query($sql);
          if($insert){
            $success = 'Registration Successfully!';
          }else{
            $error = 'registration faild';
          }
        }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="style.css">
    <title>Registration Now </title>
  </head>
  <body>
    <section class="log-section">
        <div class="log">
        <div class="container">
        <div class="row">
            <div class="log-frm col-md-4">
                <form action="" method="POST" >
                    <div class="log-content">
                        <h4>Registration Now</h4>
                    </div><br>
                    <input  type="text" name="name" placeholder="Enter your Full Name " required> <br> <br>                  
                    <input  type="email" name="email" placeholder="Enter your Email " required> <br> <br>                  
                    <input type="password" name="pass" placeholder="Enter your Password " required><br><br>
                    <input type="submit" name="reg" value="Registration">
                    <div class="another-link">
                        <span><a href="log.php">Alreday you have a Account</a></span>
                    </div>
                </form>
                <?php if(isset($success)) :?>
                  <div class="alert alert-danger" role="alert">
                     <?php echo $success; ?>
                  </div>
                <?php endif;?>

                <?php if(isset($error)) :?>
                  <div class="alert alert-danger" role="alert">
                     <?php echo $error;?>
                  </div>
                <?php endif;?>
            </div>
            </div>
        </div>
      </div>
      </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>