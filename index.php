<?php
$success = false;
$error = false;

if(isset($_POST['submitButton'])){

    $name = trim($_POST['username']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phoneNumber']);
    $message = trim($_POST['message']);

    if(empty($name) || empty($email) || empty($phone) || empty($message)){
        $error = true;
    } else {
        $success = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Bitcount+Grid+Single:wght@100..900&display=swap');
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-fluid bg-light p-2">
    <!--NAVBAR -->
        <div class="container-fluid rounded-pill bg-light mb-3 col border-bottom border-secondary"> 
            <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-1 mb-2 "> 
                    <ul class="nav col-6 col-md-auto mb-2 justify-content-center mb-md-0 "> 
                        <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li> 
                        <li><a href="#portofolio" class="nav-link px-2">Portofolio</a></li> 
                        <li><a href="#" class="nav-link px-2">Contact</a></li> 
                        <li><a href="#about" class="nav-link px-2">About</a></li> 
                    </ul> 
                    <div class="col-md-3 text-end"> 
                        <a href="login.php" class="btn btn-outline-primary me-2">Login</a> 
                        <a href="signup.php" class="btn btn-primary">Sign-up</a> 
                    </div> 
                </header> 
                    </div>

        
       <!-- MAIN CONTENT -->
<div class="container">
    <!-- CAROUSEL -->
    <div class="mt-5 mb-5 rounded-4 overflow-hidden">
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <img src="https://i.pinimg.com/736x/e8/2f/d3/e82fd38efc57b5bdd69fa84a0cde8454.jpg"
                        class="d-block w-100"
                        alt="gambar1"
                        style="height:600px; object-fit:cover;">
                    <div class="carousel-caption d-none d-md-block text-light">
                        <h5>wanglin</h5>
                        <p>Hidup adalah perjalanan mengenal siapa dirimu. Mati adalah perjalanan mengetahui siapa yang selama ini menciptakanmu.</p>
                    </div>
                </div>

                <div class="carousel-item" data-bs-interval="3000">
                    <img src="https://i.pinimg.com/736x/cc/85/bb/cc85bbb741545fe21d71a7547b6f2eec.jpg"
                        class="d-block w-100"
                        alt="gambar2"
                        style="height:600px; object-fit:cover;">
                    <div class="carousel-caption d-none d-md-block text-light">
                        <h5>Wanglin</h5>
                        <p>Orang yang memahami kematian tidak akan sombong saat berada di puncak, dan tidak akan putus asa saat berada di dasar.</p>
                    </div>
                </div>

                <div class="carousel-item" data-bs-interval="3000">
                    <img src="https://i.pinimg.com/736x/09/2d/e8/092de84100aa7bb9ff35c661e6a3d6dc.jpg"
                        class="d-block w-100"
                        alt="gambar3"
                        style="height:600px; object-fit:cover;">
                    <div class="carousel-caption d-none d-md-block text-light">
                        <h5>Wanglin</h5>
                        <p>Kematian bukan lawan dari kehidupan. Kematian adalah bagian dari kehidupan yang memberi makna pada setiap detik yang kita miliki.
                        Jika hidup adalah sebuah titipan, maka kematian adalah saat seluruh titipan itu dikembalikan kepada Pemiliknya.</p>
                    </div>
                </div>
            </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <!-- About Us -->
        <div class="container mt-4 bg-secondary bg-light pb-4 pt-1rem rounded-4" id="about" style="box-shadow: 0 4px 8px #495057">
            <h1 class="text-center text-light fw-bold p-2 bg-primary w-100 rounded-3" style="font-size: 32px; height: 60px; font-family: 'Inter'; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);">About Us</h1>
            <div class="container1 mt-5 mb-32">
        <div class="paragraf mb-8">  
            <p class="text mt-4 fs-2 fw-bold">Welcome to My Website</p>
            <p class="text fw-normal fs-6">Saya Abdul Munir mahasiswa semester IV di Institut Teknologi Mojosari, ini adalah website dashboard saya. Saya sedang belajar bahasa pemrogaman PHP.</p>
            <a type="button" href="#" class="btn btn-outline-primary mt-4 align-items-center">Contact us</a>
            <div class="social-icons mt-4 d-flex gap-3 ">
            <a href="https://www.instagram.com/_abdlmunr?igsh=NGFkaWdtNXh2MGd4" class="btn  mt-2"><i class="fa-brands fa-instagram icons icons-ig"></i></a>
            <a href="https://www.facebook.com/share/1BP6VmNkdB/" class="btn  mt-2"><i class="fa-brands fa-facebook icons icons-fb"></i></a>
            <a href="https://github.com/ramunir1306" class="btn  mt-2"><i class="fa-brands fa-github icons icons-tT"></i></a>
            <a href="https://wa.me/6283845889914" class="btn  mt-2"><i class="fa-brands fa-whatsapp icons icons-wa"></i></a>
            </div>
        </div>

        <div class="img-profile">
            <img src="../UTS pemWeb/assets/img-profile.png" alt="Profile Image" class="profile-image ml-12 rounded-circle" style="object-fit:cover; margin-bottom:20px; margin-right:20px; width:420px; height:450px;">  
        </div> 
        </div>
        </div>

        <!-- What We Do -->
        <div class="porto container pb-5 rounded-3 bg-white " style="margin-top: 120px; box-shadow: 0px 4px 8px #495057">
        <h2 class="title bg-primary text-center mb-5 text-light fw-bold p-2 w-100 rounded-3 mt-4" style="font-size: 32px; font-family: 'Inter'; ">What We Do</h2>
        <div class="row align-items-center m-3 gap-3">
            <div class="col">
                <div class="card ml-5 p-1 pb-1" style="border: 1px solid #646464;">
                <div class="d-flex justify-content-center gap-3 icon">
                <i class="fa-brands fa-html5 icon-html"></i>
                <i class="fa-brands fa-css3-alt icon-css"></i>
                <i class="fa-brands fa-js icon-js"></i>
                </div>
                <p class="text-center mt-2 fw-semibold">Web Development</p>
                </div>
            </div>
            <div class="col">
                <div class="card" style="border: 1px solid #646464;">
                    <div class="d-flex justify-content-center gap-3 icon">
                        <i class="fa-solid fa-database icon"></i>
                    </div>
                    <p class="text-center mt-2 fw-semibold">Database Management</p>
                </div>
            </div>
            <div class="col ml-5">
                <div class="card" style="border: 1px solid #646464;">
                    <div class="d-flex justify-content-center gap-3 icon">
                        <i class="fa-solid fa-paint-brush icon"></i>
                    </div>
                    <p class="text-center mt-2 fw-semibold">UI/UX Design</p>
                </div>
            </div>
        </div>
        </div>

        <!-- card my tech -->
        <div class="container text-center bg-white rounded-5" id="portofolio" style=" margin-top: 120px; box-shadow: 0 4px 8px #495057">
            
            <h2 class="bg-primary text-light rounded-3 w-95 m-4 p-2 fw-bold" style="font-size: 32px;">My Tech</h2>
            <p class="mb-4">Here are some of the technologies I'm proficient in.</p>
        <div class="row " style="margin-left: 10px; margin-right: 30px;">
            <!-- Columns 1-->
            <div class="col">
            <!-- Card 1-->
            <div class="card border border-secondary rounded-3" style="width: 18rem; margin-left: 30px ">
            <img src="https://i.pinimg.com/1200x/1a/0a/6e/1a0a6e55d977ccb17cdb79aba6856be2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">MySQL</h5>
                <p class="card-text">Some quick example text to build on the card title.</p>
                <a href="https://www.mysql.com/" class="btn btn-primary">Learn More</a>
            </div>
            </div>
            </div>

            <!-- Columns 2-->
            <div class="col">
            <!-- Card 2-->
            <div class="card border border-secondary rounded-3"" style="width: 18rem; margin-left: 30px ">
            <img src="https://i.pinimg.com/1200x/14/da/cf/14dacf8c467f1f09046e98b85aaf341a.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">PHP</h5>
                <p class="card-text">Some quick example text to build on the card title.</p>
                <a href="https://www.php.net/" class="btn btn-primary">Learn More</a>
            </div>
            </div>
            </div>

            <!-- Columns 3-->
            <div class="col">
            <!-- Card 3-->
            <div class="card border border-secondary rounded-3" style="width: 18rem; margin-left: 30px; margin-bottom: 50px;">
            <img src="https://i.pinimg.com/736x/7d/f0/25/7df025c00fa46209ffa547590173a6b1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title mt-4">Java</h5>
                <p class="card-text mb-4">Some quick example text to build on the card title</p>
                <a href="https://www.java.com/en/" class="btn btn-primary">Learn More</a>
            </div>
            
            </div>
            </div>
    </div>
    </div>
    <!-- My Project -->
    <div class="project bg-white rounded-4 text-center" style="margin-top: 120px; padding: 0px 20px 10px 20px; box-shadow: 0 4px 8px #495057">
        <h2 class="text-center bg-primary text-light rounded-3 m-4 p-2 fw-bold" style="font-size: 32px;">My Project</h2>
        <p>This is my project description of my latest work .</p>
    <!-- row 1 -->
    <div class="container text-center ">
    <div class="row align-items-start p-4 gap-5 ">

        <div class="col card-pj rounded-4" style="border: 1px solid #e5e7eb; box-shadow: 0 4px 15px rgba(0,0,0,.05);">
        <a href="../prakt1-input-text/formText.php"><img src="../UTS pemWeb/assets/P2.png" alt="..."
        style="width: 100%; height: 150px; object-fit: cover;"></a>
        <h5>Praktikum 1</h5>
        </div>

        <div class="col card-pj rounded-4" style="border: 1px solid #e5e7eb; box-shadow: 0 4px 15px rgba(0,0,0,.05);">
        <a href="../prakt2 input radio/kalkulator.html"><img src="../UTS pemWeb/assets/P2.png" class="card-img-top" alt="..."
        style="width: 100%; height: 150px; object-fit: cover;"></a>
        <h5>Praktikum 2</h5>
        </div>
        <div class="col card-pj rounded-4" style="border: 1px solid #e5e7eb; box-shadow: 0 4px 15px rgba(0,0,0,.05);">
        <a href="../prakt3 input checkbox/formCheckbox.html"><img src="../UTS pemWeb/assets/P3.png" class="card-img-top" alt="..."
        style="width: 100%; height: 150px; object-fit: cover;"></a>
        <h5>Praktikum 3</h5>
        </div>
    </div>
    </div>
    <!-- row 2 -->
     <div class="container text-center">
    <div class="row align-items-center p-4 gap-5">
        <div class="col card-pj rounded-4" style="border: 1px solid #e5e7eb; box-shadow: 0 4px 15px rgba(0,0,0,.05);">
        <a href="../prakt4 input combobox/formCombobox.php"><img src="../UTS pemWeb/assets/P4.png" class="card-img-top" alt="..."
        style="width: 100%; height: 150px; object-fit: cover;"></a>
        <h5>Praktikum 4</h5>
        </div>
        <div class="col card-pj rounded-4" style="border: 1px solid #e5e7eb; box-shadow: 0 4px 15px rgba(0,0,0,.05);">
        <a href="../prakt5 textarea /formTextArea.php"><img src="../UTS pemWeb/assets/P5.png" class="card-img-top" alt="..."
        style="width: 100%; height: 150px; object-fit: cover;"></a>
        <h5>Praktikum 5</h5>
        </div>
        <div class="col card-pj rounded-4" style="border: 1px solid #e5e7eb; box-shadow: 0 4px 15px rgba(0,0,0,.05);">
        <a href="../prakt1 input text/formText.php"><img src="../UTS pemWeb/assets/P6.png" class="card-img-top" alt="..."
        style="width: 100%; height: 150px; object-fit: cover;"></a>
        <h5>Praktikum 6</h5>
        </div>
    </div>
    </div>
    
        
    <div class="flex-shrink-0 border">
        <!-- Contact Me Page-->
        <section class="py-5">
        <div class="container px-5">
            <!-- Contact form-->
        <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
            <div class="text-center mb-5">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                    <h1 class="fw-bolder">We're  appreciate it</h1>
                    <h3 class="fw-bolder">We're sorry this page is Uncompletely</h3>
                    <p class="lead fw-normal text-muted mb-0">We'd love to hear from you</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    
                    <form id="contactForm" method="POST">
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" name="username" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                            <label for="name">Full name</label>
                        </div>

                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                            <label for="email">Email address</label>
                        </div>

                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" name="phoneNumber" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                            <label for="phone">Phone number</label>
                        </div>

                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" name="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                            <label for="message">Message</label>
                        </div>

                        <!-- Submit Button-->
                        <div class="d-grid"><button class="btn btn-primary" id="submitButton" name="submitButton" type="submit">Submit</button></div>

                        <!-- Submit success message-->
                        <?php if($success): ?>
                        <div class="alert alert-success">
                            Form submitted successfully!
                        </div>
                        <?php endif; ?>

                        <!-- Submit error message-->
                        <?php if($error): ?>
                        <div class="alert alert-danger">
                            Please fill in all fields.
                        </div>
                        <?php endif; ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
</div>
</div>
        <!-- Footer-->
        <footer class="bg-dark py-4 mt-auto">
            <div class="container-fluid px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; Rizqi Abdul Munir 2026</div></div>
                    <div class="col-auto">
                        <a class="link-light small" href="#!">Privacy</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Terms</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Contact</a>
                    </div>
                </div>
        </div>
    </footer>

    <script src="https://kit.fontawesome.com/YOUR_KIT_CODE.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    
</body>
</html>