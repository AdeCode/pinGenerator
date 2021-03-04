<?php 
    session_start();
    if(isset($_POST['btnSubmit']))
    {
        $_SESSION['name'] = $_POST["name"];
        $_SESSION['matricNo'] = $_POST["matricNo"];
        $_SESSION['email'] = $_POST["email"];
        $_SESSION['password'] = $_POST["password"];
    }
    if (isset($_POST['btnLogin']))
    {
        $email = $_POST["email"];
        $password = $_POST["password"];
        if ($email == $_SESSION['email'] && $password == $_SESSION['password'])
        {
            echo "Login successful, welcome ".$_SESSION['name'];
        }
        else{
            echo "Incorrect login details";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
<div class="container-fluid">
        <div class="row justify-content-md-center">
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <div class="card mt-2">
                    <div class="card-header text-center text-bold fw-bold">LOGIN FORM</div>
                    <div class="card-body">
                        <form action="auth.php" method="post">
                            <div class="form-group">
                                <label for="email">email</label>
                                <input name="email" type="email" class="form-control" id="email"  placeholder="Enter your email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input name="password" type="password" class="form-control" id="password"  placeholder="*********" required>
                            </div>
                                            
                           <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary mt-2" name="btnLogin" id="submit">Submit form</button>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
            <div class="col"></div>
        </div>
        
    </div>
</body>
</html>