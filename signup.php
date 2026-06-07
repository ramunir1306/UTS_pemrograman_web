<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Page Sign Up</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:linear-gradient(135deg,#f5f7ff,#eef2ff);
    padding:20px;
}

.signup-card{
    height:710px;
    width:100%;
    max-width:1000px;
    border:none;
    border-radius:30px;
    overflow:hidden;
    background:white;
    box-shadow:0 20px 50px rgba(0,0,0,.3);
}

.left-side{
    background:linear-gradient(135deg,#495057,#7c3aed);
    min-height:710px;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
    color:white;
    padding:40px;
}

.left-side img{
    width:80%;
    max-width:350px;
    margin-bottom:30px;
    border-radius:50%;
}

.left-side h2{
    font-weight:700;
    text-align:center;
}

.left-side p{
    text-align:center;
    opacity:.9;
}

.right-side{
    padding:60px;
}

.form-title{
    font-weight:700;
    margin-bottom:10px;
}

.form-subtitle{
    color:#6c757d;
    margin-bottom:35px;
}

.form-control{
    height:45px;
    border-radius:14px;
    border:1px solid #afafaf;
}

.form-control:focus{
    box-shadow:none;
    border-color:#4f46e5;
}

.btn-signup{
    height:55px;
    border-radius:14px;
    background:#495057;
    border:none;
    font-weight:600;
    transition:.3s;
}

.btn-signup:hover{
    background:#4338ca;
}

@media(max-width:768px){

    .left-side{
        min-height:300px;
    }

    .right-side{
        padding:30px;
    }
}
</style>
</head>
<body>

<div class="card signup-card">
    <div class="row g-0">

        <!-- Gambar kiri -->
        <div class="col-md-5">
            <div class="left-side">
                <img src="https://i.pinimg.com/736x/ac/c0/d3/acc0d35d2211c641cd2f3fa6deb15e2e.jpg" alt="Sign Up Image">
                <h2>Join With Us</h2>
                <p>Create your account and start your journey with our platform today.</p>
                <a class="btn btn-outline-light mt-3" href="login.php">I'm Already a Member</a>
            </div>
        </div>

        <!-- Form SignUp-->
        <div class="col-md-7">
            <div class="right-side">
                <h2 class="form-title">Create New Account</h2>
                <p class="form-subtitle">Fill your information below</p>

            <form action="login.php" method="POST">
                <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input type="text" class="form-control" name="nama" placeholder="Enter your full name" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Choose a username" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email Address</label>
                    <input type="email" class="form-control" name="email" placeholder="example@email.com" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="••••••••" required>
                </div>

                <div class="form-check mb-4">
                    <input class="form-check-input" type="checkbox" required>
                    <label class="form-check-label">I agree to Terms & Conditions</label>
                </div>

                <button type="submit" class="btn btn-primary btn-signup w-100">Create Account</button>

            </form>

            <p class="text-center mt-4">
                Already have an account?<a href="login.php"class="text-decoration-none fw-semibold">Sign In</a>
                </p>

        </div>
        </div>
    </div>
</div>
<?php
if(isset($_POST['btn-signup'])){
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