<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo asset('css/footer.css')?>">
    <link rel="stylesheet" href="<?php echo asset('css/admin_header.css') ?>">
    <link rel="stylesheet" href="<?php echo asset('css/admin_index.css') ?>">
    <link rel="stylesheet" href="<?php echo asset('css/show_users.css') ?>">
    <link rel="stylesheet" href="<?php echo asset('css/create_new_admin.css')?>">
    <link rel="stylesheet" href="<?php echo asset('css/statistics.css')?>">
    <link rel="stylesheet" href="<?php echo asset('css/work_owner_style.css')?>">
    <link rel="stylesheet" href="<?php echo asset('css/font-awesome.min.css')?>">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light nav-element">
    <a class="navbar-brand" href="workOwner_index">Online Jobs</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="add_job">Add New Job</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="show_my_jobs">Manage Your Uploaded Jobs</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/">Logout</a>
            </li>

        </ul>
        <form class="form-inline my-2 my-lg-0">
                <?php
                $read = file('dataAuth.txt');
                foreach ($read as $read){
                }
                ?>

            <h3>Welcome : <span class="badge badge-secondary name">{{$read}}</span></h3>
        </form>

    </div>
</nav>
