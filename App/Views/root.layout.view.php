<!DOCTYPE html>
<html lang="en">

<title>WarriorGym</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="public/css.css">

<script src="https://kit.fontawesome.com/2f99e28f87.js" crossorigin="anonymous"></script>

<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
    <nav class="w3-bar w3-white w3-card" id="myNavbar">
        <!-- Right-sided navbar links -->
        <div class="left">
            <a href="?c=home" class="w3-bar-item mynav home"><i class="fa fa-home mvr"></i>HOME</a>
            <a href="?c=home&a=team" class="w3-bar-item mynav"><i class="fa fa-user mvr"></i>TEAM</a>
            <a href="?c=home&a=pricing" class="w3-bar-item mynav"><i class="fa fa-usd mvr"></i>PRICING</a>
            <a href="?c=home&a=contact" class="w3-bar-item mynav"><i class="fa fa-envelope mvr"></i>CONTACT</a>
            <?php if(!\App\Auth::isLogged()) { ?>
                <a href="?c=auth&a=loginpage" class="w3-bar-item mynav"><i class="fa fa-key mvr"></i>LOGIN</a>
            <?php } else { ?>
                <div class="right w3-hide-small dropdown mynav">
                    <a onclick="myFunction()" class="dropbtn mynav acc"><i class="fas fa-user-cog mvr"></i>ACCOUNT</a>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="?c=auth&a=changepasswordpage" class="w3-bar-item mynav"><i class="fas fa-edit mvr"></i>CHANGE PASSWORD</a>
                        <a href="?c=auth&a=deleteuserpage" class="w3-bar-item mynav"><i class="fas fa-user-minus mvr"></i>DELETE USER</a>
                        <a href="?c=auth&a=logout" class="w3-bar-item mynav"><i class="fas fa-user-lock mvr"></i>LOGOUT</a>
                    </div>
                </div>
                <?php } ?>
        </div>
        <div class="right">
        <a href="?c=home" class="w3-bar-item w3-button w3-wide right logo">LOGO will be here</a>
        </div>
        <!-- Hide right-floated links on small screens and replace them with a menu icon -->
        <a href="javascript:void(0)" class="w3-bar-item w3-button right w3-hide-large w3-hide-medium" onclick="w3_open()">
            <i class="fa fa-bars"></i>
        </a>
    </nav>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
    <a href="?c=home" onclick="w3_close()" class="w3-bar-item w3-button">HOME</a>
    <a href="?c=home&a=team" onclick="w3_close()" class="w3-bar-item w3-button">TEAM</a>
    <a href="?c=home&a=pricing" onclick="w3_close()" class="w3-bar-item w3-button">PRICING</a>
    <a href="?c=home&a=contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
    <a href="?c=auth&a=loginpage" onclick="w3_close()" class="w3-bar-item w3-button">LOGIN</a>
</nav>

<div class="container">
    <div class="row mt-2">
        <div class="col">
                <?= $contentHTML ?>
        </div>
    </div>
</div>


<!-- Footer -->
<footer class="centertext w3-black w3-padding-64">
    <a href="?c=home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the home page</a>
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
    /* When the user clicks on the button,
    toggle between hiding and showing the dropdown content */
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
</script>

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

