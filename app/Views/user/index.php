<?= $this->extend('user/layout/template'); ?>
<?= $this->section('content'); ?>


<!-- partial -->
<div class="container-fluid page-body-wrapper">
  <!-- partial:partials/_navbar.html -->
  <nav class="navbar p-0 fixed-top d-flex flex-row">
    <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
      <a class="navbar-brand brand-logo-mini" href="index.html"><img src="/dashboard/assets/images/logo-mini.svg" alt="logo" /></a>
    </div>
    <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
      <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="mdi mdi-menu"></span>
      </button>
      <ul class="navbar-nav w-100">
        <li class="nav-item w-100">
          <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
            <input type="text" class="form-control" placeholder="Welcome <?= user()->username; ?>">
          </form>
        </li>
      </ul>
      <ul class="navbar-nav navbar-nav-right">
        <li class="nav-item d-none d-lg-block">
          <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" aria-expanded="false" href="/">+ Make New Order </a>
        </li>
        <li class="nav-item nav-settings d-none d-lg-block">
          <a class="nav-link" href="#">
            <i class="mdi mdi-view-grid"></i>
          </a>
        </li>

        <li class="nav-item dropdown border-left">
          <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
            <i class="mdi mdi-bell"></i>
            <span class="count bg-danger"></span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
            <div class="navbar-profile">
              <img class="img-xs rounded-circle" src="/dashboard/assets/images/faces/face15.jpg" alt="">
              <p class="mb-0 d-none d-sm-block navbar-profile-name"><?= user()->username; ?></p>
              <i class="mdi mdi-menu-down d-none d-sm-block"></i>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
            <h6 class="p-3 mb-0">Profile</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-settings text-success"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject mb-1">Settings</p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item" href="/logout">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-logout text-danger"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject mb-1">Log out</p>
              </div>
            </a>

          </div>
        </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="mdi mdi-format-line-spacing"></span>
      </button>
    </div>
  </nav>
  <!-- partial -->
  <div class="main-panel">

    <?= $this->include('user/part_pages/order'); ?>
    <!-- container-scroller -->
    <?= $this->endSection(); ?>