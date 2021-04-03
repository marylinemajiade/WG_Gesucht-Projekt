<?php
    include_once "header.php"
?>

    <section class="signup-form">
        <h2>Sign up</h2>
        <form action="includes/signup.inc.php" method="post">
            <input type="text" name="name" placeholder="Full name..."><br>
            <input type="text" name="email" placeholder="Email..."><br>
            <input type="text" name="uid" placeholder="Username..."><br>
            <input type="password" name="pwd" placeholder="Password..."><br>
            <input type="password" name="pwdrepeat" placeholder="Repeat password..."><br>
            <button type="submit" name="submit">Sign up</button>
            <?php
                if(isset($_GET["error"])){
                    if($_GET["error"] == "emptyinput"){
                        echo "<p>Fill in all fields!</p>";
                    }
                    else if($_GET["error"] == "invaliduid"){
                        echo "<p>Choose a proper username!</p>";
                    }
                    else if($_GET["error"] == "invalidemail"){
                        echo "<p>Choose a proper email!</p>";
                    }
                    else if($_GET["error"] == "passwordsdontmatch"){
                        echo "<p>Passwords don't match!</p>";
                    }
                    else if($_GET["error"] == "stmtfailed"){
                        echo "<p>Something went wrong!</p>";
                    }
                    else if($_GET["error"] == "usernametaken"){
                        echo "<p>Username already taken</p>";
                    }
                    else if($_GET["error"] == "none"){
                        echo "<p>You have signed up!</p>";
                    }
                }
            ?>
    </section>


<?php
    include_once "footer.php"
?>