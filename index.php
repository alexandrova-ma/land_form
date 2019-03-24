<!DOCTYPE html>
<html>
<head>
    <title>Company Name</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Ubuntu:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="js/slick/slick.css">
    <link rel="stylesheet" href="js/slick/slick-theme.css">
    <link rel="stylesheet" href="js/jquery.fancybox.min.css">
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/slick/slick.min.js"></script>
    <script  src="js/jquery.fancybox.min.js"></script>
    <script  src="js/jquery.maskedinput.min.js"></script>
</head>
<body>
<header>
    <div class="header__container container">
        <div class="header__logo">
            <a href="index.html">Company Name</a>
        </div>
        <nav>
            <ul class="nav__menu">
                <li><a href="index.php?page=home">Home</a></li>
                <li><a href="index.php?page=about">About us</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#form-ajax" rel="nofollow" class="modalbox" data-fancybox-type="ajax"> Jobs</a></li>
                <li><a href="index.php?page=contacts">Contact Us</a></li>
            </ul>
        </nav>
    </div>
</header>
<?
    if ($_GET['page'] == 'about') {
        include_once 'pages/about-us.php';
        
    } else if ($_GET['page'] == 'contacts') {
        include_once 'pages/contact-us.php';
    }
    else {
        include_once 'pages/home.php';
    }
?>
<div style="display:none;">
    <div id="hidden">Ваше сообщение отправлено!</div>
</div>
<a href="#hidden" id="click" rel="nofollow" class="modalbox" data-fancybox-type="ajax"></a>
<div> </div>
<script type="text/javascript" src="js/script2.js"></script>
</body>
</body>
</html>
