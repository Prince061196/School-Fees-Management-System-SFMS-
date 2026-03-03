<?php
    include("php/dbconnect.php");

    $error = '';
    if(isset($_POST['login']))
    {

    $username =  mysqli_real_escape_string($conn,trim($_POST['username']));
    $password =  mysqli_real_escape_string($conn, $_POST['password']);

    if($username=='' || $password=='')
    {
    $error='All fields are required';
    }

    $sql = "select * from user where username='".$username."' && password = '".$password."'";

    $q = $conn->query($sql);
    if($q->num_rows==1)
    {
    $res = $q->fetch_assoc();
    $_SESSION['rainbow_username']=$res['username'];
    $_SESSION['rainbow_uid']=$res['id'];
    $_SESSION['rainbow_name']=$res['name'];
        $_SESSION['rainbow_password']=$res['password'];

    echo '<script type="text/javascript">window.location="index.php"; </script>';

    }else
    {
    $error = 'Invalid Username or Password';
    }

    }



$errors = array('email'=>'', 'password'=>'');
if(isset($_POST['email']) && isset($_POST['password']))
    {
// Retrieve user data based on input credentials
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT password FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1)
         {// Verify password
            $row = mysqli_fetch_assoc($result); 
            if ($row['password']==$password)
             {
                 header("location:home.php");
            exit();// Email & Password is correct, go to homepage  
            } 
            else 
            {
                // Email and Password is incorrect
                $errors['email']= "Invalid email!!!";
                $errors['password']= "Invalid password!!!";
            }
        } 
       
     }
// Close the connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fees Management System</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    


</head>

    <body class="bodylog">
    <div id ="box_login">
    <h3 class="myhead">Fees Management System</h3>

      <form method="post">
      <hr />
		<?php
			if($error!=''){ 
                echo '<h5 class="text-danger text-center">'.$error.'</h5>';
				}
		?>
      
        <div class="form-group input-group">
         <span class="input-group-addon"><i class="fa fa-user"></i> </span>
         <input type="text" class="form-control" placeholder="Username " name="username" required />
        </div>
                                        
         <div class="form-group input-group">
            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
            <input type="password" class="form-control"  placeholder="Password" name="password" required />
        </div>
										
          <div class="form-group">
                                           
            <span class="pull-right">
             <a href="forgotpassword.php" >Forget password ? </a> 
            </span>
          </div>
                                     
        <button class="btn btn-success" style="border-radius:10%;", type= "submit" name="login">Login</button>
                                   

      </form>
    </div>
        </div>
    </body>
</html>

</body>
</html>
