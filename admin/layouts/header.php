<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Admin Dashboard</title>
    <style>
    .container-main {
        width: 95%;
    }

    .left {
        width: 20%;
        height: 700px;
        position: fixed;
        top: 55px;
        left: 0;
        background-color:#00BFFF;
    }

    .list-group-item-2 {
        position: relative;
        display: block;
        padding: 0.75rem 1.25rem;
        color: white;
        font-weight: 700;
        border: 1px solid rgba(0, 0, 0, .125);
    }

    .header {
        width: 100%;
        z-index: 15;
        position: fixed;
    }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-info header">
        <a class="navbar-brand" href="#">Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
            
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Thoát</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-main ">
        <div class="row">
            <div class="col-md-3">
                <div class="left">

                    <a href="index.php?adm=ds_khoahoc" class="list-group-item-2 list-group-item-action">Khóa học</a>
                    <a href="index.php?adm=ds_user" class="list-group-item-2 list-group-item-action">Users</a>
                    <a href="index.php?adm=ds_product" class="list-group-item-2 list-group-item-action">Products</a>
                    <a href="index.php?adm=ds_dk" class="list-group-item-2 list-group-item-action">Thông tin ĐK khóa
                        học</a>
                    <a href="index.php?adm=thongke" class="list-group-item-2 list-group-item-action">Thống kê</a>
                    <a href="../index.php" class="list-group-item-2 list-group-item-action">Thoát</a>

                    <!-- Add more menu items as needed -->
                </div>

            </div>