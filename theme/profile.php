<?php
session_start();
include 'dbconfig.php';

$sid = isset($_GET['sid']) ? $_GET['sid'] : null;
$sid = $_SESSION['userid'];

$sql = "SELECT sg.`sid`,sg.`name`, sg.`email`, sg.`usertype`,sg.`tenureenddate`, sg.`contact`, sg.`cl`, sg.`rh`,sg.`el`, sg.remainingcl, sg.remainingrh,sg.remainingel, sg.declarationform,lt.leaveid, lt.`clstartdate`, lt.`clenddate`,lt.`rhstartdate`, lt.`rhenddate`, lt.`elstartdate`, lt.`elenddate`,  lt.`reason`, lt.`leave_status`,de.declarationform,de.emp_roll,de.`univesity`,de.name,de.iitbemail,de.aadhar,de.gender,de.localaddress,de.localpostal,de.permanentadd,de.permpostal, de.homecontact,de.emename1,de.emerelation,de.emeadd,de.emecontact,de.empostalcode,de.emesecondname,de.emesecrelation,de.medicalcondition,de.profilepic
FROM `sigin` as sg LEFT JOIN leavetable as lt on lt.sid = sg.sid LEFT JOIN declarationform as de on de.sid = sg.sid where sg.sid=:sid ";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':sid', $sid);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
// print_r($results);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>MIP</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link href="./css/style.css" rel="stylesheet">

</head>

<body>

    <div id="main-wrapper">

        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="./images/logo.png" alt="">
                <img class="logo-compact" src="./images/logo-text.png" alt="">
                <img class="brand-title" src="./images/logo-text.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>

        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-bell"></i>
                                    <div class="pulse-css"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="list-unstyled">
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-user"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-shopping-cart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="danger"><i class="ti-bookmark"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-heart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-image"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                    </ul>
                                    <a class="all-notification" href="#">See all notifications <i class="ti-arrow-right"></i></a>
                                </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="./app-profile.html" class="dropdown-item">
                                        <i class="icon-user"></i>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="./email-inbox.html" class="dropdown-item">
                                        <i class="icon-envelope-open"></i>
                                        <span class="ml-2">Inbox </span>
                                    </a>
                                    <a href="./page-login.html" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>


        <!-- cod efor sidebar start here  -->
        <?php include 'sidebar.php'; ?>
        <!-- code for ends here -->


        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back! <?php echo $results[0]['name'] ?></h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">App</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="profile">
                            <div class="profile-head">
                                <div class="photo-content">
                                    <!-- code for displaying the profile from the dataabse -->
                                    <div class="cover-photo"></div>
                                    <div class="profile-photo">
                                        <img src="images/profile/profile.png" class="img-fluid rounded-circle" alt="">
                                    </div>
                                </div>
                                <div class="profile-info">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-8">
                                            <div class="row">
                                                <div class="col-xl-4 col-sm-4 border-right-1 prf-col">
                                                    <div class="profile-name">
                                                        <h4 class="text-primary"><?php echo $results[0]['name'] ?></h4>
                                                        <p><?php echo $results[0]['usertype'] ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-sm-4 border-right-1 prf-col">
                                                    <div class="profile-email">
                                                        <h4 class="text-muted"><?php echo $results[0]['email'] ?></h4>
                                                        <p>Email</p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-sm-4 prf-col">
                                                    <div class="profile-call">
                                                        <h4 class="text-muted"><?php echo $results[0]['contact'] ?></h4>
                                                        <p>Phone No.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2">
                        <!-- <div class="card">
                            <div class="card-body">
                                <div class="profile-statistics">
                                    <div class="text-center mt-4 border-bottom-1 pb-3">
                                        <div class="row">
                                            <div class="col">
                                                <h3 class="m-b-0">150</h3><span>Follower</span>
                                            </div>
                                            <div class="col">
                                                <h3 class="m-b-0">140</h3><span>Place Stay</span>
                                            </div>
                                            <div class="col">
                                                <h3 class="m-b-0">45</h3><span>Reviews</span>
                                            </div>
                                        </div>
                                        <div class="mt-4"><a href="javascript:void()" class="btn btn-primary pl-5 pr-5 mr-3 mb-4">Follow</a> <a href="javascript:void()" class="btn btn-dark pl-5 pr-5 mb-4">Send
                                                Message</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-blog pt-3 border-bottom-1 pb-1">
                                    <h5 class="text-primary d-inline">Today Highlights</h5><a href="javascript:void()" class="pull-right f-s-16">More</a>
                                    <img src="images/profile/1.jpg" alt="" class="img-fluid mt-4 mb-4 w-100">
                                    <h4>Darwin Creative Agency Theme</h4>
                                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                                </div>
                                <div class="profile-interest mt-4 pb-2 border-bottom-1">
                                    <h5 class="text-primary d-inline">Interest</h5>
                                    <div class="row mt-4">
                                        <div class="col-lg-4 col-xl-4 col-sm-4 col-6 int-col">
                                            <a href="javascript:void()" class="interest-cat">
                                                <img src="images/profile/2.jpg" alt="" class="img-fluid">
                                                <p>Shopping Mall</p>
                                            </a>
                                        </div>
                                        <div class="col-lg-4 col-xl-4 col-sm-4 col-6 int-col">
                                            <a href="javascript:void()" class="interest-cat">
                                                <img src="images/profile/3.jpg" alt="" class="img-fluid">
                                                <p>Photography</p>
                                            </a>
                                        </div>
                                        <div class="col-lg-4 col-xl-4 col-sm-4 col-6 int-col">
                                            <a href="javascript:void()" class="interest-cat">
                                                <img src="images/profile/4.jpg" alt="" class="img-fluid">
                                                <p>Art &amp; Gallery</p>
                                            </a>
                                        </div>
                                        <div class="col-lg-4 col-xl-4 col-sm-4 col-6 int-col">
                                            <a href="javascript:void()" class="interest-cat">
                                                <img src="images/profile/2.jpg" alt="" class="img-fluid">
                                                <p>Visiting Place</p>
                                            </a>
                                        </div>
                                        <div class="col-lg-4 col-xl-4 col-sm-4 col-6 int-col">
                                            <a href="javascript:void()" class="interest-cat">
                                                <img src="images/profile/3.jpg" alt="" class="img-fluid">
                                                <p>Shopping</p>
                                            </a>
                                        </div>
                                        <div class="col-lg-4 col-xl-4 col-sm-4 col-6 int-col">
                                            <a href="javascript:void()" class="interest-cat">
                                                <img src="images/profile/4.jpg" alt="" class="img-fluid">
                                                <p>Biking</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-news mt-4 pb-3">
                                    <h5 class="text-primary d-inline">Our Latest News</h5>
                                    <div class="media pt-3 pb-3">
                                        <img src="images/profile/5.jpg" alt="image" class="mr-3">
                                        <div class="media-body">
                                            <h5 class="m-b-5">John Tomas</h5>
                                            <p>I shared this on my fb wall a few months back, and I thought I'd share it here again because it's such a great read</p>
                                        </div>
                                    </div>
                                    <div class="media pt-3 pb-3">
                                        <img src="images/profile/6.jpg" alt="image" class="mr-3">
                                        <div class="media-body">
                                            <h5 class="m-b-5">John Tomas</h5>
                                            <p>I shared this on my fb wall a few months back, and I thought I'd share it here again because it's such a great read</p>
                                        </div>
                                    </div>
                                    <div class="media pt-3 pb-3">
                                        <img src="images/profile/7.jpg" alt="image" class="mr-3">
                                        <div class="media-body">
                                            <h5 class="m-b-5">John Tomas</h5>
                                            <p>I shared this on my fb wall a few months back, and I thought I'd share it here again because it's such a great read</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-tab">
                                    <div class="custom-tab-1">
                                        <ul class="nav nav-tabs">
                                            <!-- <li class="nav-item"><a href="#my-posts" data-toggle="tab" class="nav-link active show">Posts</a>
                                            </li> -->
                                            <li class="nav-item"><a href="#about-me" data-toggle="tab" class="nav-link">About Me</a>
                                            </li>
                                            <!-- <li class="nav-item"><a href="#profile-settings" data-toggle="tab" class="nav-link">Setting</a>
                                            </li> -->
                                        </ul>
                                        <div class="tab-content">
                                            <!-- <div id="my-posts" class="tab-pane fade active show">
                                                <div class="my-post-content pt-3">
                                                    <div class="post-input">
                                                        <textarea name="textarea" id="textarea" cols="30" rows="5" class="form-control bg-transparent" placeholder="Please type what you want...."></textarea> <a href="javascript:void()"><i class="ti-clip"></i> </a>
                                                        <a href="javascript:void()"><i class="ti-camera"></i> </a><a href="javascript:void()" class="btn btn-primary">Post</a>
                                                    </div>
                                                    <div class="profile-uoloaded-post border-bottom-1 pb-5">
                                                        <img src="images/profile/8.jpg" alt="" class="img-fluid">
                                                        <a class="post-title" href="javascript:void()">
                                                            <h4>Collection of textile samples lay spread</h4>
                                                        </a>
                                                        <p>A wonderful serenity has take possession of my entire soul like these sweet morning of spare which enjoy whole heart.A wonderful serenity has take possession of my entire soul like these sweet morning
                                                            of spare which enjoy whole heart.</p>
                                                        <button class="btn btn-primary mr-3"><span class="mr-3"><i class="fa fa-heart"></i></span>Like</button>
                                                        <button class="btn btn-secondary"><span class="mr-3"><i class="fa fa-reply"></i></span>Reply</button>
                                                    </div>
                                                    <div class="profile-uoloaded-post border-bottom-1 pb-5">
                                                        <img src="images/profile/9.jpg" alt="" class="img-fluid">
                                                        <a class="post-title" href="javascript:void()">
                                                            <h4>Collection of textile samples lay spread</h4>
                                                        </a>
                                                        <p>A wonderful serenity has take possession of my entire soul like these sweet morning of spare which enjoy whole heart.A wonderful serenity has take possession of my entire soul like these sweet morning
                                                            of spare which enjoy whole heart.</p>
                                                        <button class="btn btn-primary mr-3"><span class="mr-3"><i class="fa fa-heart"></i></span>Like</button>
                                                        <button class="btn btn-secondary"><span class="mr-3"><i class="fa fa-reply"></i></span>Reply</button>
                                                    </div>
                                                    <div class="profile-uoloaded-post pb-5">
                                                        <img src="images/profile/8.jpg" alt="" class="img-fluid">
                                                        <a class="post-title" href="javascript:void()">
                                                            <h4>Collection of textile samples lay spread</h4>
                                                        </a>
                                                        <p>A wonderful serenity has take possession of my entire soul like these sweet morning of spare which enjoy whole heart.A wonderful serenity has take possession of my entire soul like these sweet morning
                                                            of spare which enjoy whole heart.</p>
                                                        <button class="btn btn-primary mr-3"><span class="mr-3"><i class="fa fa-heart"></i></span>Like</button>
                                                        <button class="btn btn-secondary"><span class="mr-3"><i class="fa fa-reply"></i></span>Reply</button>
                                                    </div>
                                                    <div class="text-center mb-2"><a href="javascript:void()" class="btn btn-primary">Load More</a>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <div id="about-me" class="tab-pane fade active show">
                                                <div class="profile-about-me">
                                                    <div class="pt-4 border-bottom-1 pb-4">
                                                        <h4 class="text-primary">About Me</h4>
                                                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence was created for the
                                                            bliss of souls like mine.I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
                                                        <p>A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed
                                                            in a nice, gilded frame.</p>
                                                    </div>
                                                </div>
                                                <div class="profile-skills pt-2 border-bottom-1 pb-2">
                                                    <h4 class="text-primary mb-4">Skills</h4>
                                                    <a href="javascript:void()" class="btn btn-outline-dark btn-rounded pl-4 my-3 my-sm-0 pr-4 mr-3 m-b-10">Admin</a>
                                                    <a href="javascript:void()" class="btn btn-outline-dark btn-rounded pl-4 my-3 my-sm-0 pr-4 mr-3 m-b-10">Dashboard</a>
                                                    <a href="javascript:void()" class="btn btn-outline-dark btn-rounded pl-4 my-3 my-sm-0 pr-4 mr-3 m-b-10">Photoshop</a>
                                                    <a href="javascript:void()" class="btn btn-outline-dark btn-rounded pl-4 my-3 my-sm-0 pr-4 mr-3 m-b-10">Bootstrap</a>
                                                    <a href="javascript:void()" class="btn btn-outline-dark btn-rounded pl-4 my-3 my-sm-0 pr-4 mr-3 m-b-10">Responsive</a>
                                                    <a href="javascript:void()" class="btn btn-outline-dark btn-rounded pl-4 my-3 my-sm-0 pr-4 mr-3 m-b-10">Crypto</a>
                                                </div>
                                                <div class="profile-lang pt-5 border-bottom-1 pb-5">
                                                    <h4 class="text-primary mb-4">Language</h4><a href="javascript:void()" class="text-muted pr-3 f-s-16"><i class="flag-icon flag-icon-us"></i> English</a> <a href="javascript:void()" class="text-muted pr-3 f-s-16"><i class="flag-icon flag-icon-fr"></i> French</a>
                                                    <a href="javascript:void()" class="text-muted pr-3 f-s-16"><i class="flag-icon flag-icon-bd"></i> Bangla</a>
                                                </div>
                                                <div class="profile-personal-info">
                                                    <h4 class="text-primary mb-4">Personal Information</h4>
                                                    <div class="row mb-4">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Name <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span><?php echo $results[0]['name'] ?> </span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Email <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span><?php echo $results[0]['email'] ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Gender <span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-9"><span><?php echo $results[0]['gender'] ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Aadhar <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span><?php echo $results[0]['aadhar'] ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Medical Condition<span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-9"><span><?php echo $results[0]['medicalcondition']; ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Local Address<span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-9"><span><?php echo $results[0]['localaddress']; ?></span>
                                                        </div>
                                                    </div>
                                                    <h2 class="emergency_details">Emergency Contact Details (First Person)</h2>
                                                    <div class="row mb-4">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Person Name<span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-9"><span><?php echo $results[0]['emename1']; ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Relation<span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-9"><span><?php echo $results[0]['emerelation']; ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Contact Number<span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-9"><span><?php echo $results[0]['emecontact']; ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Address<span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-9"><span><?php echo $results[0]['emeadd']; ?></span>
                                                        </div>
                                                    </div>
                                                    <h2 class="emergency_details">Emergency Contact Details (Second Person)</h2>
                                                    <div class="row mb-4">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Person Name<span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-9"><span><?php echo $results[0]['emesecondname']; ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Relation<span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-9"><span><?php echo $results[0]['emesecrelation']; ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div id="profile-settings" class="tab-pane fade">
                                                <div class="pt-3">
                                                    <div class="settings-form">
                                                        <h4 class="text-primary">Account Setting</h4>
                                                        <form>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <label>Email</label>
                                                                    <input type="email" placeholder="Email" class="form-control">
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label>Password</label>
                                                                    <input type="password" placeholder="Password" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Address</label>
                                                                <input type="text" placeholder="1234 Main St" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Address 2</label>
                                                                <input type="text" placeholder="Apartment, studio, or floor" class="form-control">
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <label>City</label>
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <label>State</label>
                                                                    <select class="form-control" id="inputState">
                                                                        <option selected="">Choose...</option>
                                                                        <option>Option 1</option>
                                                                        <option>Option 2</option>
                                                                        <option>Option 3</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-md-2">
                                                                    <label>Zip</label>
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input" id="gridCheck">
                                                                    <label for="gridCheck" class="form-check-label">Check me out</label>
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-primary" type="submit">Sign
                                                                in</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!-- code for footer start here  -->
        <div class="footer">
            <div class="copyright">
                <p>Copyright MIP <a href="#" target="_blank"></a>2024</p>
            </div>
        </div>
        <!-- code for footer ends here  -->

    </div>

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <script src="./js/custom.min.js"></script>


</body>

</html>