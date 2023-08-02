<!DOCTYPE html>
<html lang="en">

<head>
    <title>Datta Able Free Bootstrap 4 Admin Template</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Datta Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template" />
    <meta name="author" content="CodedThemes" />

    <!-- Favicon icon -->
    <link rel="icon" href="<?= base_url() ?>assets/images/favicon.ico" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap4.min.css" />

</head>

<body>
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->

    <!-- [ navigation menu ] start -->
    <?= $this->include('templates/sidebar'); ?>
    <!-- [ navigation menu ] end -->

    <!-- [ Header ] start -->
    <?= $this->include('templates/topbar'); ?>
    <!-- [ Header ] end -->

    <!-- [ Main Content ] start -->
    <?= $this->renderSection('content'); ?>
    <!-- [ Main Content ] end -->

    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
               <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="assets/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="assets/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="assets/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="assets/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="assets/images/browser/ie.png" alt="">
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
    <!-- Warning Section Ends -->

    <!-- Required Js -->
    <script src="<?= base_url() ?>assets/js/vendor-all.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/js/pcoded.min.js"></script>
    <script>
        function previewGambar1() {
            const gambar_1 = document.querySelector('#gambar_1');
            const gambarLabel = document.querySelector('.custom-file-label');
            const gambarPreview = document.querySelector('.img-preview');

            gambarLabel.textContent = gambar_1.files[0].name;
            const fileGambar_1 = new FileReader();
            fileGambar_1.readAsDataURL(gambar_1.files[0]);

            fileGambar_1.onload = function(e) {
                gambarPreview.src = e.target.result;
            }
        }
    </script>

    <script>
        function tampil2() {
            const gambar_2 = document.querySelector('#gambar_2');
            const gambarLabel2 = document.querySelector('.custom-file-label2');
            const gambarPreview2 = document.querySelector('.img-preview2');

            gambarLabel2.textContent = gambar_2.files[0].name;
            const fileGambar_2 = new FileReader();
            fileGambar_2.readAsDataURL(gambar_2.files[0]);

            fileGambar_2.onload = function(e) {
                gambarPreview2.src = e.target.result;
            }
        }
    </script>


    <script>
        function show3() {
            const gambar_3 = document.querySelector('#gambar_3');
            const gambarLabel3 = document.querySelector('.custom-file-label3');
            const gambarPreview3 = document.querySelector('.img-preview3');

            gambarLabel3.textContent = gambar_3.files[0].name;
            const fileGambar_3 = new FileReader();
            fileGambar_3.readAsDataURL(gambar_3.files[0]);

            fileGambar_3.onload = function(e) {
                gambarPreview3.src = e.target.result;
            }
        }
    </script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>

</body>

</html>