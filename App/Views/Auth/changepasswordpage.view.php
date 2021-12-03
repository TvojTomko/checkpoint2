<?php /** @var Array $data */ ?>

<?php if ($data['error'] != "") { ?>
    <div class="errortext">
        <?= $data['error'] ?>
    </div>
<?php } ?>

<!-- LOGIN section -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
    <h2 class="centertext">Change password</h2>
    <div style="margin-top:48px">
        <form method="post" action="?c=auth&a=changepassword">
            <p><input class="w3-input w3-border" type="password" placeholder="New password" name="newpassword" required></p>
            <p><input class="w3-input w3-border" type="password" placeholder="Repeat new password" name="repeatpassword" required></p>
            <p>
                <button class="w3-button w3-black" type="submit">
                    <a class="fa fa-paper-plane"></a>
                    <a class="text">Change password</a>
                </button>
            </p>
        </form>
    </div>
</div>