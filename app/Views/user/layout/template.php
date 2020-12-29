<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>User Panel</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/dashboard/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/dashboard/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="/dashboard/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="/dashboard/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="/dashboard/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="/dashboard/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="/dashboard/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="/dashboard/assets/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        <?= $this->include('user/layout/navbar'); ?>
        <?= $this->RenderSection('content'); ?>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer" style="position:fixed;bottom:0;width:83%;">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
            </div>
        </footer>
        <!-- partial -->
    </div>
    <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- plugins:js -->
    <script src="/dashboard/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="/dashboard/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="/dashboard/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="/dashboard/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="/dashboard/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="/dashboard/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/dashboard/assets/js/off-canvas.js"></script>
    <script src="/dashboard/assets/js/hoverable-collapse.js"></script>
    <script src="/dashboard/assets/js/misc.js"></script>
    <script src="/dashboard/assets/js/settings.js"></script>
    <script src="/dashboard/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="/dashboard/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
</body>

</html>