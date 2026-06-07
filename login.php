<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Page </title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    body{
    background:#f5f7ff;
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    padding:20px;
    }

    .login-card{
        width:100%;
        max-width:1000px;
        border:none;
        border-radius:25px;
        overflow:hidden;
        box-shadow:0 20px 50px rgba(0,0,0,.1);
    }

    .form-section{
        padding:60px;
    }

    .form-control{
    height:55px;
    border-radius:14px;
    border:1px solid #2e2b2b;
    }

    .form-control:focus{
        box-shadow:none;
        border-color:#4f46e5;
    }

    .btn-login{
        height:55px;
        border-radius:14px;
        background:#495057;
        border:none;
        font-weight:600;
        transition:.3s;
    }

    .btn-login:hover{
        background:#4338ca;
    }

    .image-right{
        height:100%;
        min-height:600px;
        align-items:center;
        background:linear-gradient(135deg,#495057,#7c3aed);
        padding:40px;
    }

    .image-right img{
        position:relative;
        margin-left:50px;
        width:100%;
        max-width:300px;
        border-radius:50%;
        box-shadow:0 10px 30px rgba(0,0,0,.2);
    }
</style>
</head>
<body>
<div class="card login-card">
<div class="row g-0 align-items-center">

        <div class="col-md-6">
            <div class="form-section">

                <h2 class="fw-bold mb-2">WELCOME BACK</h2>
                <p class="text-muted mb-4">Welcome Back! Please enter your details</p>

                <form action="index.php" method="POST">

                    <div class="mb-4 mt-4">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Enter your username" required>
                    </div>

                    <div class="mb-2">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="*********" required>
                    </div>

                    <div class="d-flex justify-content-between mb-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="remember" required>
                            <label class="form-check-label" for="remember" style="font-size: 14px;">Remember me</label>
                        </div>

                        <a href="#" class="text-decoration-none" style="font-size: 14px;"> Forgot Password?</a>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 btn-login mt-4">Login</button>

                </form>

                <div class="text-center mt-4" style="font-size: 14px;">
                    <p>Dont have an account? 
                        <a href="signup.php" class="text-decoration-none fw-semibold">Sign Up</a>
                    </p>
                </div>

            </div>
        </div>

        <div class="col-md-6">
        <div class="image-right">
            <img src="https://i.pinimg.com/1200x/56/2c/86/562c8604f88173fe627de0995fb284f2.jpg" alt="Login Image">
            <div class="d-block text-light mt-4 text-center">
                <h2>Have a great journey ahead</h2>
                <p>lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a class="btn btn-outline-light mt-3" href="signup.php">Get Started</a>
            </div>
        </div>
        </div>

    </div>

</div>
<?php
if(isset($_POST['btn-login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username === 'admin' && $password === '12345678'){
            echo "<script>
            window.location.href = 'index.php';
            </script>";
        } else if($username === '' && $password === ''){
            echo "<script>alert('Username dan Password tidak boleh kosong!');
            </script>";
        }else {
            echo "<script>alert('Password atau Username salah!');
            </script>";
        } 
    }
?>
</body>
</html>