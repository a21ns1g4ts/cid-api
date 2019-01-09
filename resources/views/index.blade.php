<!DOCTYPE html>
<html lang="en">
<head>
    <title>CID-API</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Atila Silva">
    <link rel="shortcut icon" href="favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- FontAwesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.1.1/js/all.js" integrity="sha384-BtvRZcyfv4r0x/phJt9Y9HhnN5ur1Z+kZbKVgzVBAlQZX4jvAuImlIz+bG7TS00a" crossorigin="anonymous"></script>
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/plugins/elegant_font/css/style.css">
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">

</head>

<body class="landing-page">

<!-- GITHUB BUTTON JS -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<!--FACEBOOK LIKE BUTTON JAVASCRIPT SDK-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<div class="page-wrapper">

    <!-- ******Header****** -->
    <header class="header text-center">
        <div class="container">
            <div class="branding">
                <h1 class="logo">
                    <span aria-hidden="true" class="icon_documents_alt icon"></span>
                    <span class="text-highlight">CID</span><span class="text-bold">API</span>
                </h1>
            </div><!--//branding-->
            <div class="tagline">
                <p>API - Lista de doenças elaborada pela OMS</p>
            </div><!--//tagline-->
        </div><!--//container-->
    </header><!--//header-->

    <section class="cards-section text-center">
        <div class="container">
            <h2 class="title">API CID</h2>
            <div class="intro">
                <p>Você pode utililzar nossos endpints para obter a listagen de todas as doenças ou obter por código</p>
            </div><!--//intro-->
            <div class="callout-block callout-success">
                <div class="icon-holder">
                    <i class="fas fa-ambulance"></i>
                    CID - 10
                </div><!--//icon-holder-->
                <div class="content">
                    <h4 class="callout-title">Todas</h4>
                    <p><span class="badge-info p-1"><i class="fa fa-globe"></i> GET</span><code>http://cid-api.local/cid10</code>
                    <h4 class="callout-title">Por código</h4>
                    <p><span class="badge-info p-1"><i class="fa fa-globe"></i> GET</span><code>http://cid-api.local/cid10/{codigo}</code>
                </div><!--//content-->
            </div>

        </div><!--//container-->
    </section><!--//cards-section-->
</div><!--//page-wrapper-->

<footer class="footer text-center">
    <div class="container">
        <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can buy the commercial license via our website: themes.3rdwavemedia.com */-->
        <small class="copyright">CID-API @2019</small>

    </div><!--//container-->
</footer><!--//footer-->


<!-- Main Javascript -->
<script type="text/javascript" src="assets/plugins/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/plugins/stickyfill/dist/stickyfill.min.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>

</body>
</html>
