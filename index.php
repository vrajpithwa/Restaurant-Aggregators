
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Ekatham Orders</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.php">Dashboard</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="table.php">
                                <i class="fas fa-table"></i>Data</a>
                        </li>
                    
                        <li>
                            <a href="login.php">
                            <i class="bi bi-box-arrow-right"></i>Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="table.php">
                                <i class="fas fa-table"></i>Data</a>  
                        </li>
                        <li>
                            <a href="login.php">
                            <i class="bi bi-box-arrow-right"></i>Logout</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="GET">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for names &amp; orders..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                                
                            </form>
                            
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <!-- <span class="quantity">1</span> -->
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <!-- <span class="quantity">1</span> -->
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <!-- <span class="quantity">3</span> -->
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/admin.png" alt="ADMIN" />
                                            <img src="images/icon/swiggy.png" alt="ADMIN" />
                                            <img src="images/icon/zomato.png" alt="ADMIN" />
                                            <img src="images/icon/uber.png" alt="uber eats" />
                                            <!-- <img src="images/icon/admin.jpeg" alt="ADMIN" /> -->
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">ADMIN</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/admin.png" alt="ADMIN" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">ADMIN</a>
                                                    </h5>
                                                    <span class="email">ekatham@admin.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                                    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap"> 
                                    <h2 class="title-1">Aggregator</h2>
                                    <button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>add item</button>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">

                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <!-- <i class="zmdi zmdi-account-o"></i> -->
                                                <img src="images/icon/swiggy.png" alt="swiggy" />
                                            </div>
                                            <div class="text">                                                           
                                                <span><b>Swiggy</b></span>
                                                <h2>
                                                <?php
                                                        include ('./dbconnect.php'); 
                                                        $sql = "SELECT * FROM orderlist";
                                                        $result = mysqli_query($conn, $sql);
                                                        $totalOrder=0;
                                                        $swiggy=0;
                                                        if (mysqli_num_rows($result) > 0) {
                                                            while($row = mysqli_fetch_assoc($result)) {
                                                                if(strtolower($row['platefromName'])=="swiggy"){
                                                                    // $totalOrder+=1;
                                                                    $swiggy=$swiggy+1;
                                                                }
                                                            }
                                                            echo $swiggy;
                                                        }
                                                ?> </h2>  
                                            </div>
                                            
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <img src="images/icon/zomato.png" alt="zomato" />
                                            <!-- "C:\xampp\htdocs\cooladmin\images\icon\zomato.jpeg" -->
                                                <!-- <i class="zmdi zmdi-shopping-cart"></i> -->
                                            </div>
                                            <div class="text">                                                           
                                                <span>Zomato</span>
                                                <h2>
                                                <?php 
                                                include("./dbconnect.php");
                                                $sql = "SELECT * FROM orderlist";
                                                $result=$conn-> query($sql);
                                                $zomato=0;
                                                if ($result-> num_rows > 0)
                                                {
                                                    while ($row=$result-> fetch_assoc()) {
                                                        if(strtolower($row['platefromName'])=="zomato"){
                                                            // $totalOrder+=1;
                                                            $zomato=$zomato+1;
                                                        }
                                                    }
                                                    echo $zomato;
                                                }
                                            
                                            ?> </h2>  
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <!-- <i class="zmdi zmdi-calendar-note"></i> -->
                                                <img src="images/icon/uber.png" alt="uber eats" />
                                            </div> 
                                            <div class="text">
                                                <span>Uber Eats</span>
                                                <h2>
                                                <?php
                                                include("./dbconnect.php");
                                                $sql = "SELECT * FROM orderlist";
                                                $result = mysqli_query($conn, $sql);
                                                $totalOrder=0;
                                                $uber=0;
                                                if (mysqli_num_rows($result) > 0) 
                                                {
                                                    while($row = mysqli_fetch_assoc($result)) {
                                                        if(strtolower($row['platefromName'])=="uber eats"){
                                                            // $totalOrder+=1;
                                                            $uber = $uber+1;
                                                        }
                                                    }
                                                    echo $uber;
                                                }
                                            ?> </h2>                                                 
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c0">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <!-- <i class="zmdi zmdi-calendar-note"></i> -->
                                                <img src="images/icon/ek.png" alt="ekatham" style="height: 60px; width:60px"/>
                                            </div> 
                                            <div class="text">
                                                <span>Ekatham</span>
                                                <h2>
                                                <?php
                                                include("./dbconnect.php");
                                                $sql = "SELECT * FROM orderlist";
                                                $result = mysqli_query($conn, $sql);
                                                $totalOrder=0;
                                                $eka=0;
                                                if (mysqli_num_rows($result) > 0) 
                                                {
                                                    while($row = mysqli_fetch_assoc($result)) {
                                                        if(strtolower($row['platefromName'])=="ektham order"){
                                                            // $totalOrder+=1;
                                                            $eka = $eka+1;
                                                        }
                                                    }
                                                    echo $eka;
                                                }
                                            ?> </h2>                                                 
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>                            

                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <!-- <i class="zmdi zmdi-money"></i> -->
                                                <img src="images/icon/total.png" alt="total" />
                                            </div>
                                            <div class="text">
                                                <span>Total Orders</span>
                                                <h2>
                                                <?php
                                                include("./dbconnect.php");
                                                $sql="SELECT * from orderlist";
                                                $result=$conn-> query($sql);
                                                $count=0;
                                                if ($result-> num_rows > 0)
                                                {
                                                    while ($row=$result-> fetch_assoc()) {
                                            
                                                        $count=$count+1;
                                                    }
                                                }
                                                echo $count;
                                            ?> </h2>                                             
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            
                            <div class="row">
                        <div class="col-md-12">
                                <h2 class="title-1 m-b-25">Recent Orders</h2>
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                                               
                            <!-- <div class="col-lg-9">
                                <h2 class="title-1 m-b-25">Orders</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning"> -->
                                    <thead>
                                    <tr>
                                        
                                        
                                        <th>Order No.</th>
                                        <th>Customer Name</th>
                                        <th>Order Details</th>
                                        <th>Final Amount</th>
                                        <th>Payment Status</th>
                                        <th>Platform Name</th>
                                    </tr>
                                    </thead>
                                    <?php
                                    include_once "./dbconnect.php";
                                    $sql = "SELECT * FROM orderlist";
                                    $result = mysqli_query($conn, $sql);
                                    $orderList=[];
                                    if (mysqli_num_rows($result) > 0) {
                                        while($row = mysqli_fetch_assoc($result)) {
            
                                            while($row = mysqli_fetch_assoc($result)) {
                                                if($row['date']==date("m/d/20y")){
                                    ?>
                                    <tr>
                                        
                                        
                                        <td><?=$row["order_no"]?></td>
                                        <td><?=$row["customer_name"]?></td>
                                        <td><?=$row["order_details"]?></td>
                                        <td><?=$row["final_amount"]?></td>
                                        <td><?=$row["payment_status"]?></td>
                                        <td><?=$row["platefromName"]?></td>
                                        
                                            
                                        <!-- <td><a class="btn btn-primary openPopup" data-href="./adminView/viewEachOrder.php?orderID=<?=$row['order_id']?>" href="javascript:void(0);">View</a></td> -->
                                        </tr>
                                    <?php
                                            
                                                }
                                            }
                                        }
                                    }
                                    ?>

                                    
                                
                                    </table>
                                </div>
                            </div>
                        
                            <!-- Bar Chart Recent Orders -->
                            <div class="col-lg-6">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 class="title-2">Today's Orders</h3>
                                        <div class="recent-report__chart">
                                                <?php

                                               include("./dbconnect.php");
                                                // Write a query to fetch the data
                                                $sql = "SELECT platefromName, final_amount FROM orderlist";
                                                $result = mysqli_query($conn, $sql);

                                                // Fetch the data
                                                $data = array();
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    $data[] = $row;
                                                }

                                                // Close the connection
                                                mysqli_close($conn);

                                                ?>

                                                <!DOCTYPE html>
                                                <html>
                                                <head>
                                                <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
                                                <style>
                                                    canvas {
                                                    width: 500px;
                                                    height: 500px;
                                                    }
                                                </style>
                                                </head>
                                                <body>
                                                <canvas id="bar-chart"></canvas>
                                                <script>
                                                    var ctx = document.getElementById('bar-chart').getContext('2d');
                                                    var chart = new Chart(ctx, {
                                                    type: 'bar',
                                                    data: {
                                                        labels: ["Zomato","Swiggy","Zomato","Zomato","Swiggy","Swiggy","Swiggy","Zomato","Swiggy","Uber Eats","Uber Eats","Uber Eats","Swiggy","Zomato","Uber Eats","Swiggy","Uber Eats","Uber Eats","Zomato","Zomato","zomato","Swiggy","Uber eats","Uber eats","zomato","zomato","Swiggy","Swiggy","Swiggy","zomato","Uber eats","zomato","Uber eats","zomato","zomato","Swiggy","Ektham Order","Ektham Order","","Uber eats","Swiggy",],
                                                        datasets: [{
                                                        label: '',
                                                        data: [250,500,350,195,354,410,200,400,300,700,1100,250,1100,120,1750,300,650,583,360,230,230,230,230,230,230,230,230,230,230,230,230,230,230,230,230,230,880,968,226,382,780,],
                                                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                                        borderColor: 'rgba(255, 99, 132, 1)',
                                                        borderWidth: 1
                                                        }]
                                                    },
                                                    options: {}
                                                    });
                                                </script>
                                                </body>

                                        </div>
                                    </div>
                                </div>
                            </div>            

                            <!-- Doughnut Chart -->
                            <div class="col-lg-6">
                                <div class="au-card chart-percent-card">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 tm-b-5">Platform Statistics</h3>
                                        <div class="row no-gutters">
                                            <div class="col-xl-6">
                                                <div class="chart-note-wrap">
                                                <div class="chart-note mr-0 d-block">
                                                        <span class="dot dot--blue"></span>
                                                        <span>Uber</span>
                                                    </div>
                                                    <div class="chart-note mr-0 d-block">
                                                        <span class="dot dot--red"></span>
                                                        <span>Swiggy</span>
                                                    </div>
                                                    <div class="chart-note mr-0 d-block">
                                                        <span class="dot dot--green"></span>
                                                        <span>Zomato</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <!-- <div class="percent-chart">
                                                    <canvas id="percent-chart"></canvas>
                                                </div> -->
                                                <?php 
                                                include ('./dbconnect.php'); 
                                                $sql = "SELECT * FROM orderlist";
                                                $result = mysqli_query($conn, $sql);
                                                $totalOrder=0;
                                                $uber=0;
                                                $swiggy=0;
                                                $zomato=0;
                                                if (mysqli_num_rows($result) > 0) 
                                                {
                                                    while($row = mysqli_fetch_assoc($result)) {
                                                        if(strtolower($row['platefromName'])=="uber eats"){
                                                            $uber = $uber+1;
                                                        }
                                                        if(strtolower($row['platefromName'])=="zomato"){
                                                            $zomato=$zomato+1;
                                                        }
                                                        if(strtolower($row['platefromName'])=="swiggy"){
                                                            $swiggy=$swiggy+1;
                                                        }
                                                        $totalOrder=$totalOrder+1;
                                                    }                            
                                                }

                                                $count=0;
                                                if ($result-> num_rows > 0)
                                                {
                                                    while ($row=$result-> fetch_assoc()) {

                                                        $count=$count+1;
                                                    }
                                                }
                                            $dataPoints = array( 
                                                array("y" => $uber,"label" => "UBER" ),
                                                array("y" => $swiggy,"label" => "SWIGGY" ),
                                                array("y" => $zomato,"label" => "ZOMATO" ),
                                                );
                                            ?>

                                                <script>
                                                window.onload = function() {
                                                                            
                                                var chart = new CanvasJS.Chart("chartContainer", {
                                                    animationEnabled: true,
                                                    title:{
                                                        text: ""
                                                    },
                                                    axisY: {
                                                        title: "",
                                                        includeZero: true,
                                                                                
                                                    },
                                                    data: [{
                                                        type: "doughnut",
                                                        yValueFormatString: "#,##",
                                                        indexLabel: "{y}",
                                                        indexLabelPlacement: "inside",
                                                        indexLabelFontWeight: "bolder",
                                                        indexLabelFontColor: "white",
                                                        backgroundColor: ["#0074D9", "#FF4136", "#2ECC40"],
                                                        dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                                                    }]
                                                });
                                                chart.render();
                                                }
                                                </script>
                                                <body>
                                                <div id="chartContainer" style="height: 260px; width: 100%;"></div>
                                                <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
                                                </body>
                                                <!-- </html> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 class="title-2">Prices Summary</h3>
                                        <div class="recent-report__chart">
                                            <!-- <canvas id="recent-rep-chart"></canvas> -->
                                            <?php

                                            include("./dbconnect.php");
                                            // Write a query to fetch the data
                                            $sql = "SELECT platefromName, final_amount FROM orderlist";
                                            $result = mysqli_query($conn, $sql);

                                            // Fetch the data
                                            $data = array();
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $data[] = $row;
                                            }

                                            // Close the connection
                                            mysqli_close($conn);

                                            ?>

                                            <!DOCTYPE html>
                                            <html>
                                            <head>
                                            <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
                                            <style>
                                                canvas {
                                                width: 500px;
                                                height: 300px;
                                                }
                                            </style>
                                            </head>
                                            <body>
                                            <canvas id="prices-chart"></canvas>
                                            <script>
                                                var ctx = document.getElementById('prices-chart').getContext('2d');
                                                var chart = new Chart(ctx, {
                                                type: 'line',
                                                data: {
                                                    labels: ["Zomato","Swiggy","Zomato","Zomato","Swiggy","Swiggy","Swiggy","Zomato","Swiggy","Uber Eats","Uber Eats","Uber Eats","Swiggy","Zomato","Uber Eats","Swiggy","Uber Eats","Uber Eats","Zomato","Zomato","zomato","Swiggy","Uber eats","Uber eats","zomato","zomato","Swiggy","Swiggy","Swiggy","zomato","Uber eats","zomato","Uber eats","zomato","zomato","Swiggy","Ektham Order","Ektham Order","","Uber eats","Swiggy",],
                                                    datasets: [{
                                                    label: 'Final Amount',
                                                    data: [250,500,350,195,354,410,200,400,300,700,1100,250,1100,120,1750,300,650,583,360,230,230,230,230,230,230,230,230,230,230,230,230,230,230,230,230,230,880,968,226,382,780,],
                                                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                                    borderColor: 'rgba(255, 99, 132, 1)',
                                                    borderWidth: 1
                                                    }]
                                                },
                                                options: {}
                                                });
                                            </script>
                                            </body>
                                            <!-- </html> -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <!-- <h3 class="title-2">Ratings</h3> -->
                                        <div class="recent-report__chart" id = "piechart" style="margin-left: 80px;border:5px;border-radius:20%">
                                            <!-- <canvas id="recent-rep-chart"></canvas> -->
                                    
                                            <!DOCTYPE html>
                                            <html>
                                            <head>
                                            <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
                                            <style>
                                                canvas {
                                                width: 500px;
                                                height: 300px;
                                                }
                                            </style>
                                            </head>
                                            <body>
                                            <canvas id="review-chart"></canvas>
                                            
                                            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
    ['Zomato',     11],
    ['Swiggy',      2],
    ['Ubereats',  2],
    ['EkathamOrders', 12],
    
        ]); 

        var options = {
          title: 'Date and the Platform'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  
                                            <!-- <script>
                                                var ctx = document.getElementById('review-chart').getContext('2d');
                                                var chart = new Chart(ctx, {
                                                type: 'pie',
                                                data: {
                                                    labels: ["Zomato","Swiggy","UberEats","Ekatham Orders"],
                                                    datasets: [{
                                                    label: 'Final Amount',
                                                    data: [50,20,50,50],
                                                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                                    borderColor: 'rgba(255, 99, 132, 1)',
                                                    borderWidth: 1
                                                    }]
                                                },
                                                options: {}
                                                });
                                            </script> -->
                                            </body>
                                            <!-- </html> -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--  -->
                        </div>
                        <div style="width: 500px;">
                        <canvas id="myChart"></canvas>
                        </div>
                    <div>
                <div>
            <div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
