
<div class="side-nav">

    <div class="side-nav-wrapper">

        <div class="sn-logo">
            <img src="assets/logoWhite.png" alt="" width="100px" height="auto">
            <p class="fw-bold">VTUBER</p>
        </div>

        <div class="sn-nav">

            <button class="sn-nav-items dash nav-active" onclick="loadPage('.dash','dashboard.php')">
                <span class="material-symbols-rounded">
                grid_view
                </span>
                Dashboard
            </button>

            <button class="sn-nav-items prof" onclick="loadPage('.prof','profile.php')">
                <span class="material-symbols-rounded">
                account_circle
                </span>
                Profile
            </button>

            <button class="sn-nav-items admin" onclick="loadPage('.admin','admin.php')" id="admin">
                <span class="material-symbols-rounded">
                admin_panel_settings
                </span>
                Admin
            </button>

            <button class="sn-nav-items more" onclick="loadPage('.more','more.php')" id="more">
                <span class="material-symbols-rounded">
                more_horiz
                </span>
                More
            </button>

        </div>

        <button class="post-btn" onclick="showPost()">
            Post
        </button>

        <div class="sn-profile">

            <div class="snp-pic">

            </div>

            <div class="snp-text">
                <p class="snpt-name">
                    User Name
                </p>
                <p class="snpt-username">
                    @username
                </p>
            </div>

            <button class="snp-more" id="expandBtn" onclick="expand()">
                <span class="material-symbols-rounded">
                expand_circle_up
                </span>
            </button>

            <div class="profile-expandable" >
                <button class="pe-btn">
                    Log out
                </button>
            </div>

        </div>

    </div>

</div>