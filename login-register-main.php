<div class="login-register-main">

    <div class="lrm-wrapper">

        <div class="sn-logo sn-logo-lrm">
            <img src="assets/logoWhite.png" alt="" width="200px" height="auto">
            <p class="fw-bold lrm-logo-text">VTUBER</p>
        </div>

        <div class="lrm-tabs">
            <button class="lrmt-btn" onclick="loadTabContent(this,'register-part.php')">Sign up</button>
            <button class="lrmt-btn lrmt-btn-active" onclick="loadTabContent(this,'login-part.php')">Login</button>
            <button class="lrmt-btn" onclick="loadTabContent(this,'contact-us.php')">Contact us</button>
        </div>

        <div class="tabs-content">
            <?php 
            include 'login-part.php';
            ?>
        </div>
    
    </div>

</div>