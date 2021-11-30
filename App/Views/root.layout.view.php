<!DOCTYPE html>
<html lang="en">

<title>WarriorGym</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="public/css.css">

<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
    <div class="w3-bar w3-white w3-card" id="myNavbar">
        <a href="" class="w3-bar-item w3-button w3-wide left">LOGO will be here</a>
        <!-- Right-sided navbar links -->
        <div class="right w3-hide-small">
            <a href="?c=home" class="w3-bar-item mynav"><i class="fa fa-home"></i>HOME</a>
            <a href="?c=home&a=team" class="w3-bar-item mynav"><i class="fa fa-user"></i>TEAM</a>
            <a href="?c=home&a=pricing" class="w3-bar-item mynav"><i class="fa fa-usd"></i>PRICING</a>
            <a href="?c=home&a=contact" class="w3-bar-item mynav"><i class="fa fa-envelope"></i>CONTACT</a>
            <a href="?c=home&a=login" class="w3-bar-item mynav"><i class="fa fa-key"></i>LOGIN</a>
        </div>
        <!-- Hide right-floated links on small screens and replace them with a menu icon -->
        <a href="javascript:void(0)" class="w3-bar-item w3-button right w3-hide-large w3-hide-medium" onclick="w3_open()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
    <a href="?c=home" onclick="w3_close()" class="w3-bar-item w3-button">HOME</a>
    <a href="?c=home&a=team" onclick="w3_close()" class="w3-bar-item w3-button">TEAM</a>
    <a href="?c=home&a=pricing" onclick="w3_close()" class="w3-bar-item w3-button">PRICING</a>
    <a href="?c=home&a=contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
    <a href="" onclick="w3_close()" class="w3-bar-item w3-button">LOGIN</a>
</nav>

<!--<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-end">-->
<!--    <div class="container">-->
<!--        <a class="navbar-brand" href="#">FRI-MVC FW </a>-->
<!--        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">-->
<!--            <span class="navbar-toggler-icon"></span>-->
<!--        </button>-->
<!--        <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">-->
<!--            <ul class="navbar-nav">-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="?c=home">Domov</a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="?c=home&a=contact">Kontakt</a>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </div>-->
<!--</nav>-->
<div class="container">
    <div class="row mt-2">
        <div class="col">
                <?= $contentHTML ?>
        </div>
    </div>
</div>


<!-- Footer -->
<footer class="centertext w3-black w3-padding-64">
    <a href="index.html" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
    <div class="w3-xlarge w3-section">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
        <h4 class="centertext credits">Created by Tomas Sobek</h4>
    </div>
</footer>

<script>

    // Toggle between showing and hiding the sidebar when clicking the menu icon
    var mySidebar = document.getElementById("mySidebar");

    function w3_open() {
        if (mySidebar.style.display === 'block') {
            mySidebar.style.display = 'none';
        } else {
            mySidebar.style.display = 'block';
        }
    }

    // Close the sidebar with the close button
    function w3_close() {
        mySidebar.style.display = "none";
    }
</script>

</body>
</html>

