<?php session_start(); 
include_once('includes/config.php');
// Code for login 
if(isset($_POST['login']))
{
$password=$_POST['password'];
$dec_password=$password;
$useremail=$_POST['uemail'];
$ret= mysqli_query($con,"SELECT id,fname FROM users WHERE email='$useremail' and password='$dec_password'");
$num=mysqli_fetch_array($ret);
if($num>0)
{

$_SESSION['id']=$num['id'];
$_SESSION['name']=$num['fname'];
header("location:welcome.php");

}
else
{
echo "<script>alert('Invalid username or password');</script>";
}
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <style>
            html {
                color: #3E82CF;
                font-size: 1em;
                |line-height: 1.4;
            }

            ::-moz-selection {
                background: #b3d4fc;
                text-shadow: none;
            }

            ::selection {
                background: #b3d4fc;
                text-shadow: none;
            }

            hr {
                display: block;
                height: 1px;
                border: 0;
                border-top: 1px solid #ccc;
                margin: 1em 0;
                padding: 0;
            }

            audio,
            canvas,
            iframe,
            img,
            svg,
            video {
                vertical-align: middle;
            }

            fieldset {
                border: 0;
                margin: 0;
                padding: 0;
            }

            textarea {
                resize: vertical;
            }

            .browserupgrade {
                margin: 0.2em 0;
                background: #ccc;
                color: #000;
    padding: 0.2em 0;
}



/* ===== Initializr Styles ==================================================
   Author: Jonathan Verrecchia - verekia.com/initializr/responsive-template
   ========================================================================== */

body {
    font: 16px/26px Helvetica, Helvetica Neue, Arial;
    
}

.wrapper {
    width: 90%;
    margin: 0 5%;
}

/* ===================
    ALL: Orange Theme
   =================== */

.header-container {
    border-bottom: 20px solid #ff8000;
}

.footer-container,
.main aside {
    border-top: 20px solid #ff8000;
}

.header-container,
.footer-container,
.main aside {
    background: #0da5a3;
}

.title {
    color: white;
}
.v49_110 {
  width: 271px;
  height: 270px;
  background: url("../img/r1.jpg");
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
  opacity: 1;
  position: absolute;
  top: 20,2%;
  left: 41%;
  overflow: hidden;
}


/* ==============
    MOBILE: Menu
   ============== */

nav ul {
    margin: 0;
    padding: 0;
    list-style-type: none;
}

nav a {
    display: block;
    margin-bottom: 10px;
    padding: 15px 0;

    text-align: center;
    text-decoration: none;
    font-weight: bold;

    color: white;
    background: #c81d11;
}

nav a:hover,
nav a:visited {
    color: white;
}

nav a:hover {
    text-decoration: underline;
}

/* ==============
    MOBILE: Main
   ============== */

.main {
    padding: 30px 0;
}

.main article h1 {
    font-size: 2em;
}

.main aside {
    color: white;
    padding: 0px 5% 10px;
}

.footer-container footer {
    color: white;
    padding: 20px 0;
}

/* ===============
    ALL: IE Fixes
   =============== */

.ie7 .title {
    padding-top: 20px;
}

/* ==========================================================================
   Author's custom styles
   ========================================================================== */















/* ==========================================================================
   Media Queries
   ========================================================================== */

@media only screen and (min-width: 480px) {

/* ====================
    INTERMEDIATE: Menu
   ==================== */

    nav a {
        float: left;
        width: 27%;
        margin: 0 1.7%;
        padding: 25px 2%;
        margin-bottom: 0;
    }

    nav li:first-child a {
        margin-left: 0;
    }

    nav li:last-child a {
        margin-right: 0;
    }

/* ========================
    INTERMEDIATE: IE Fixes
   ======================== */

    nav ul li {
        display: inline;
    }

    .oldie nav a {
        margin: 0 0.7%;
    }
}

@media only screen and (min-width: 768px) {

/* ====================
    WIDE: CSS3 Effects
   ==================== */

    .header-container,
    .main aside {
        -webkit-box-shadow: 0 5px 10px #aaa;
           -moz-box-shadow: 0 5px 10px #aaa;
                box-shadow: 0 5px 10px #aaa;
    }

/* ============
    WIDE: Menu
   ============ */

    .title {
        float: left;
    }

    nav {
        float: right;
        width: 38%;
    }

/* ============
    WIDE: Main
   ============ */

    .main article {
        float: left;
        width: 57%;
    }

    .main aside {
        float: right;
        width: 28%;
    }
}

@media only screen and (min-width: 1140px) {

/* ===============
    Maximal Width
   =============== */

    .wrapper {
        width: 1026px; /* 1140px - 10% for margins */
        margin: 0 auto;
    }
}

/* ==========================================================================
   Helper classes
   ========================================================================== */

.hidden {
    display: none !important;
    visibility: hidden;
}

.visuallyhidden {
    border: 0;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
}

.visuallyhidden.focusable:active,
.visuallyhidden.focusable:focus {
    clip: auto;
    height: auto;
    margin: 0;
    overflow: visible;
    position: static;
    width: auto;
}

.invisible {
    visibility: hidden;
}

.clearfix:before,
.clearfix:after {
    content: " ";
    display: table;
}

.clearfix:after {
    clear: both;
}

.clearfix {
    *zoom: 1;
}

/* ==========================================================================
   Print styles
   ========================================================================== */

@media print {
    *,
    *:before,
    *:after {
        background: transparent !important;
        color: #000 !important;
        box-shadow: none !important;
        text-shadow: none !important;
    }

    a,
    a:visited {
        text-decoration: underline;
    }

    a[href]:after {
        content: " (" attr(href) ")";
    }

    abbr[title]:after {
        content: " (" attr(title) ")";
    }

    a[href^="#"]:after,
    a[href^="javascript:"]:after {
        content: "";
    }

    pre,
    blockquote {
        border: 1px solid #999;
        page-break-inside: avoid;
    }

    thead {
        display: table-header-group;
    }

    tr,
    img {
        page-break-inside: avoid;
    }

    img {
        max-width: 100% !important;
    }

    p,
    h2,
    h3 {
        orphans: 3;
        widows: 3;
    }

    h2 {
    font-size:14px;
    color:#538b01;
    font-weight:bold;
    font-style:italic;
}
        
    }
        ,
    h3 {
        page-break-after: avoid;
    }
}
</style>
</head>
</html>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>User Inicio de sesión | Sistema de registro e inicio de sesión</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">

<div class="card-header">
<h2 align="center">Bienvenido</h2>
<hr />
    <h3 class="text-center font-weight-light my-4">Inicio de sesión</h3></div>
                                    <div class="card-body">
                                        
                                        <form method="post">
                                            
<div class="form-floating mb-3">
<input class="form-control" name="uemail" type="email" placeholder="name@example.com" required/>
<label for="inputEmail">Dirección de correo electrónico</label>
</div>
                                            

<div class="form-floating mb-3">
<input class="form-control" name="password" type="password" placeholder="Password" required />
<label for="inputPassword">Clave de acceso</label>
</div>


<div class="d-flex align-items-center justify-content-between mt-4 mb-0">

<button class="btn btn-primary" name="login" type="submit">Iniciar</button>
</div>
</form>
</div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="signup.php">Necesita una cuenta? Registrarse!</a></div>
                                          
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
