<?php /** @var Array $data */ ?>

<!-- LOGIN section -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
    <h2 class="centertext">REGISTER</h2>
    <h5 class="centertext">Create your account</h5>
    <div style="margin-top:48px">
        <form method="post" action="?c=auth&a=changepassword">
            <p><input class="w3-input w3-border" type="password" placeholder="Password" name="newpassword" required></p>
            <p>
                <button class="w3-button w3-black" type="submit">
                    <a class="fa fa-paper-plane"></a>
                    <a class="text">Change password</a>
                </button>
            </p>
        </form>
    </div>
</div>