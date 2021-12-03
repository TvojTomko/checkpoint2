<?php /** @var Array $data */ ?>

<!--
    TO DO:
        opravit css chybu s account menum, pripadne vymysliet nieco krajsie
        nakodit kontrolu zmeny hesla, aby sa nedalo zadat znovu to iste heslo
        ? confirm password input ?
        nadizajnovat chybove hlasky
        otestovat chyby
 -->

<?php if($data['error'] != "") { ?>
    <div class="errortext">
        <?= $data['error'] ?>
    </div>
<?php } elseif ($data['success'] != "") {?>
    <div class="successtext">
        <?= $data['success'] ?>
    </div>
<?php } ?>

<!-- Header with full-height image -->
<header class="w3-display-container w3-grayscale-min" id="home">
    <div class="w3-container">
        <img src="public/images/gym.jpg" alt="" class="headerpicture">
        <button class="centerbtn">Begin your journey!</button>
    </div>
    <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>
</header>

<!-- About Section -->
<div class="w3-container" style="padding:50px 16px" id="about">
    <h2 class="centertext">ABOUT OUR GYM</h2>
    <h5 class="centertext">Advantages of our gym</h5>
    <div class="w3-row-padding centertext" style="margin-top:60px">
        <div class="w3-quarter">
            <i class="fa fa-gears w3-margin-bottom w3-jumbo centertext"></i>
            <p class="aboutsubtitle">Equipment</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
        </div>
        <div class="w3-quarter">
            <i class="fa fa-life-ring w3-margin-bottom w3-jumbo"></i>
            <p class="aboutsubtitle">Coaches</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
        </div>
        <div class="w3-quarter">
            <i class="fa fa-envira w3-margin-bottom w3-jumbo"></i>
            <p class="aboutsubtitle">Outdoor</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
        </div>
        <div class="w3-quarter">
            <i class="fa fa-heartbeat w3-margin-bottom w3-jumbo"></i>
            <p class="aboutsubtitle">Recovery</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
        </div>
    </div>
</div>
