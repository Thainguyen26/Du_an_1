<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon"
        href="file:///C:/Users/hieun/OneDrive/M%C3%A1y%20t%C3%ADnh/1206775d-2d50-4fa0-aa7f-a823cf3d1795.png">
    <title>Admin</title>
    <link rel="stylesheet" type="text/css"
        href="../beagle-dashboard/assets/lib/perfect-scrollbar/css/perfect-scrollbar.css">
    <link rel="stylesheet" type="text/css"
        href="../beagle-dashboard/assets/lib/material-design-icons/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css"
        href="../beagle-dashboard/assets/lib/jquery.vectormap/jquery-jvectormap-1.2.2.css">
    <link rel="stylesheet" type="text/css" href="../beagle-dashboard/assets/lib/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" type="text/css"
        href="../beagle-dashboard/assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="assets\css\app.css" type="text/css">
    <link rel="stylesheet" href="../beagle-dashboard/assets/css/app.css" type="text/css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</head>

<body>
    <div class="be-wrapper be-fixed-sidebar">
        <nav class="navbar navbar-expand fixed-top be-top-header">
            <div class="container-fluid">
                <div class="be-navbar-header"><a class="navbar-brand" href="index.php"></a>
                </div>
                <div class="page-title"><span> <b>Admin</b> </span></div>
                <div class="be-right-navbar">
                    <ul class="nav navbar-nav float-right be-user-nav">
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#"
                                data-toggle="dropdown" role="button" aria-expanded="false"><img
                                    src="data:image/jpeg;base64,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"
                                    alt="Avatar"><span class="user-name">Admin</span></a>
                            <div class="dropdown-menu" role="menu">
                                <div class="user-info">
                                    <div class="user-name">Admin</div>
                                </div><a class="dropdown-item" href="profile.html"><span
                                        class="icon mdi mdi-face"></span>Tài
                                    khoản</a><a class="dropdown-item" href="#"><span
                                        class="icon mdi mdi-settings"></span>Cài đặt</a><a class="dropdown-item"
                                    href="pages-login.html"><span class="icon mdi mdi-power"></span>Đăng xuất</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>