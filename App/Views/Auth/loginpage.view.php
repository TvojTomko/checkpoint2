<?php /** @var Array $data */ ?>

<!-- LOGIN section -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="login">
    <h2 class="centertext">LOG IN</h2>
    <div style="margin-top:48px">
        <!-- -->
        <form method="post" action="?c=auth&a=login">
            <p><input class="w3-input w3-border" type="text" placeholder="Login" name="Login" required></p>
            <p><input class="w3-input w3-border" type="password" placeholder="Password" name="Password" required></p>
            <p>
                <button class="w3-button w3-black " type="submit">
                    <a class="fa fa-paper-plane"></a>
                    <a class="text">Sign in</a>
                </button>
            </p>
        </form>
    </div>
</div>
<!-- TO DO: predizajnovat register div ? -->
<div  class="w3-container w3-light-grey regdiv" id="register">
        <a href="?c=auth&a=register" class="w3-button w3-black right text bottom regbut" type="button">
            <p class="fa fa-paper-plane"></p>
            Register
        </a>
    <a class="right specialtext bottom">You dont have account yet?</a>
</div>