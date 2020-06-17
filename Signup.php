<?php
require "Header.php";
?>


    <main>
    <div class="wrapper-main">
    <section class="section-default">
        <h1>Signup</h1>
        <?php
            if (isset($_GET['error'])) {
                if ($_GET['error'] == "emptyfields") {
                    echo '<p class="signuperror">Fill in all fields!</p>';
                }
                else if ($_GET['error'] == "invaliduidmail") {
                    echo '<p class="signuperror">Invalid username and e-mail!</p>';
                }
                else if ($_GET['error'] == "Invaliduid") {
                    echo '<p class="signuperror">Invalid username!</p>';
                }
                else if ($_GET['error'] == "Invalidmail") {
                    echo '<p class="signuperror">Invalid E-mail!</p>';
                }
                else if ($_GET['error'] == "passwordcheck") {
                    echo '<p class="signuperror">Your passwords do not match!</p>';
                }
                else if ($_GET['error'] == "usertaken") {
                    echo '<p class="signuperror">Username is already taken!</p>';
                }
                
            }
            else if ($_GET['signup'] == "success") {
                echo '<p class="signupsuccess">Signup successful!</p>'
            }
        ?>
        <form class="form-signup" action="includes/Signup.inc.php" method="post">   
        <input type="password" name="pwd" placeholder="Password">    
        <input type="password" name="pwd-repeat" placeholder="Repeat password">
        <button type="submit" name="signup-submit">Signup</button>    
        </form>

        <!-- The form which starts the password recovery process! -->
        <a href="reset-password.php">Forgot your password?</a>


    </section>    
        </div>
    </main>

    <?php
    require "Footer.php";
    ?>