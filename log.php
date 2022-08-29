<?php
session_start();
require_once('connection.php');

  if(isset($_POST['login'])){
    //Get data From Login Form
    $usermail = $_POST['email'];
    $pass = $_POST['pass'];

    // Checking Database Email
    $sql = "SELECT * FROM users WHERE email = '$usermail' ";
    $data = $connection->query($sql);

    if(mysqli_num_rows($data) == 1){
      // Password convert MD5
      // $userpassword = MD5($pass);

      // Data convert to Array
      $get_data = mysqli_fetch_assoc($data);

      // Checking Database Password
      if($pass == $get_data['password']){

        $_SESSION['username'] = $get_data;
        $_SESSION['name'] = $get_data['name'];

        header('location:index.php');

      }else{
        $error = "PassWord dosen't match!";
      }

    }else{
      $error =  "Invalid User Email, Please try again...";
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
    <title>Login Now </title>
  </head>
  <body>
    <section class="log-section">
        <div class="log">
        <div class="container">
        <div class="row">
            <div class="log-frm col-md-4">
                <form action="" method="POST" >
                    <div class="log-content">
                        <h4>Login Now</h4>
                    </div><br>
                    <input  type="email" name="email" placeholder="Enter your Email " required> <br> <br>                  
                    <input type="password" name="pass" placeholder="Enter your Password " required><br><br>
                    <input type="submit" name="login" value="Login">
                    <div class="another-link">
                        <span> New User ? <a href="reg.php">Apply for an Account</a></span>
                    </div>
                </form>
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