<?php /** @var Array $data */ ?>

<!-- LOGIN section -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
    <h2 class="centertext">LOGIN</h2>
    <h5 class="centertext">Send us a message</h5>
    <div style="margin-top:48px">
        <form method="post" action="c?=auth&a=login">
            <p><input class="w3-input w3-border" type="text" placeholder="Login" required name="Login"></p>
            <p><input class="w3-input w3-border" type="password" placeholder="Password" required name="Password"></p>
            <p>
                <button class="w3-button w3-black" type="submit">
                    <i class="fa fa-paper-plane"></i> Sign in
                </button>
            </p>
        </form>
    </div>
</div>

