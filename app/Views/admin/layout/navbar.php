<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="/"><span>Home</span></a>
        <a class="sidebar-brand brand-logo-mini" href="/"><img src="/dashboard/assets/images/logo-mini.svg" alt="logo" /></a>
    </div>
    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <img class="img-xs rounded-circle " src="/dashboard/assets/images/faces/face15.jpg" alt="">
                        <span class="count bg-success"></span>
                    </div>
                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal"><?= user()->username; ?></h5>
                        <span>Super Admin</span>
                    </div>
                </div>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="#">
                <span class="menu-icon">
                    <i class="mdi mdi-speedometer"></i>
                </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
    </ul>
</nav>