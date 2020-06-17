<?php
    require "Header.php"
?>

<main>
    <div class="wrapper-main">
    <section class="section-default">
        <h1>Reset your password</h1>
        <p>An e-mail will be send to you with instructions on how to reset your password.</p>
        <form action="includes/reset-request.inc.php" method="post">
        <input type="text" name="email" placeholder="Enter your e-mail address...">
        <button type="submit" name="reset-request-submit">Recieve mew password by e-mail.</button>
        </form>
        <?php
        if (isset($_GET["reset"])) {
            if ($_GET["reset"] == "success") {
                echo '<p class="signupsuccess">Check your e-mail!</p>';
            }
        }
        ?>
    </section>    
        </div>
    </main>
    <?php
    require "Footer.php";
    ?>