   <div class="loader_bg">
        <div class="loader"><img src="/images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.html"><img src="/images/logo.png" alt="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li class="active"> <a href="index.html">Home</a> </li>
                                        <li> <a href="#">About</a> </li>
                                        <li><a href="#">Brand</a></li>
                                        <li><a href="#">Specials</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                        <li><?php if(logged_in()):?>
                                            <a class="nav-link" href="<?= base_url('/logout')?>">Logout</a>
                                            <?php else:?>
                                            <a class="nav-link" href="<?= base_url('/login')?>">Login</a>
                                            <?php endif;?>
                                        </li>
                                        <li class="last">
                                            <a href="#"><img src="/images/search_icon.png" alt="icon" /></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 offset-md-6">
                        <div class="location_icon_bottum">
                            <ul>
                                <li><img src="/icon/call.png" />(+62)89655457729</li>
                                <li><img src="/icon/email.png" />TRT@gmail.com</li>
                                <li><img src="/icon/loc.png" />Location</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header inner -->
    </header>
    <!-- end header -->