<?php include_once 'header.php'; ?>
    <section class="main-container">
        <div class="main-wrapper">
            <h2>Sign up</h2>
            <form action="includes/signup.inc.php" class="signup-form" method="POST">
                <input type="text" name="first" id="first" placeholder="Firstname">
                <input type="text" name="last" id="last" placeholder="Lastname">
                <input type="text" name="email" id="email" placeholder="Email">
                <input type="text" name="uid" id="uid" placeholder="Username">
                <input type="password" name="pwd" id="pwd" placeholder="Password">
                <button type="submit" name="submit">Sign up</button>
            </form>
        </div>
    </section>
<?php include_once 'footer.php'; ?>
