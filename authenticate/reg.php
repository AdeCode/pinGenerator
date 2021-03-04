<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Register</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-md-center">
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <div class="card mt-2">
                    <div class="card-header text-center text-bold fw-bold">REGISTRATION FORM</div>
                    <div class="card-body">
                        <form action="auth.php" method="post">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input name="name" type="text" class="form-control" id="name"  placeholder="Enter your name" required>
                            </div>
                            <div class="form-group">
                                <label for="matricNo">Matric No</label>
                                <input name="matricNo" type="text" class="form-control" id="matricNo"  placeholder="Enter your matric number" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input name="email" type="email" class="form-control" id="email"  placeholder="Enter your email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input name="password" type="password" class="form-control" id="password"  placeholder="*********" required>
                            </div>                        
                           <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary mt-2" name="btnSubmit" id="submit">Submit form</button>
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