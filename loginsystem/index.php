<?php include_once 'header.php'; ?>
    <section class="main-container">
        <div class="main-wrapper">
            <h2>Home</h2>
            <?php
                if(isset($_SESSION['u_key'])){
                    echo "You login success!";
                }
            ?>
        </div>
    </section>
<?php include_once 'footer.php'; ?>
