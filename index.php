<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
        <title>Welcome to The Travel Experts | Home</title>
        <meta name="description" content="SAIT Fall 2014 Object-Oriented Software Development Project #1 (HTML, CSS, JavaScript, PHP & MySQL)">
        <meta name="author" content="John Nguyen, Megha Patel, Brian Pang, Mahmood Qureshi">
        
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        
        <!-- JavaScript -->
        <script language="javascript" type="text/javascript" src="js/default.js"></script>
        
        <!-- Stylesheets -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome-4.2.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
        <link rel="stylesheet" type="text/css" href="css/responsive.css">
        <link rel="stylesheet" type="text/css" href="css/transitions.css">
        
        <!-- Google Font Code -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:700,400|Ek+Mukta:400,600,700' rel='stylesheet' type='text/css'>
        
    </head>
    <body>
        <div class="header_wrap">
            <div class="header">
            <div class="logo"><a href="index.html"><img src="img/logo.png" class="img-responsive"></a></div>
            <div class="nav" id="dropmenu">
                <ul>
                    <a href="registration.php"><li>Account <i class="fa fa-chevron-circle-right"></i></li></a>
                    <a href="packages.php"><li>Packages <i class="fa fa-chevron-circle-right"></i></li></a>
                    <a href="#"><li>Support <i class="fa fa-chevron-circle-right"></i></li></a>
                    <a href="contact.php"><li>Contact <i class="fa fa-chevron-circle-right"></i></li></a>
                </ul>
                <!-- <span><i class="fa fa-phone"></i> 1-888-123-4567</span> -->
            </div>
            <div class="nav_mobile" onclick="dropMenu('dropmenu');">
               <i class="fa fa-bars fa-2x"></i>
            </div>
        </div>
        </div>
        <div class="slider" style="background-image:url(img/slider01.jpg);"> <!-- Slider Image -->
             <div class="welcome">
                 <h1>Welcome to Travel Experts</h1>
            </div>      
        </div>
        <div>
            <a href="#" class="help"><i class="fa fa-question-circle fa-lg"></i></a>
        </div>
                <div>
            <a href="#" class="lang" onclick="dropMenu('flags');"><img src="img/flags/Canada.png" style="margin-right: 10px;"><i class="fa fa-caret-down"></i></a>
        </div>
        <div class="lang_menu" id="flags" onClick="document.getElementById('flags').style.display='none';">
            <ul>
                <li><img src="img/flags/Canada.png"> <strong>EN</strong></li>
                <li><img src="img/flags/France.png"> <strong>FR</strong></li>
                <li><img src="img/flags/Germany.png"> <strong>GE</strong></li>
                <li><img src="img/flags/Japan.png"> <strong>JA</strong></li>
                <li><img src="img/flags/China.png"> <strong>CN</strong></li>
                <li><img src="img/flags/Brazil.png"> <strong>BP</strong></li>
                <li><img src="img/flags/Italy.png"> <strong>IT</strong></li>
                <li><img src="img/flags/Russia.png"> <strong>RU</strong></li>
            </ul>
        </div>
        <div class="container-fluid"> <!-- Start of Container -->
            <!-- Main body begins here -->
            <div id="body">
                <div class="row">
                    <div class="style col-md-4">
                        <h1>Main Title</h1>
                        <h2>Secondary Title</h2>
                        <h3>Subtitle Title</h3>
                        <h4>Section Title</h4>
                    </div>
                    <div class="col-md-4">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer porta massa mauris, id volutpat enim scelerisque nec. Proin auctor, ante nec pretium lacinia, leo justo hendrerit sem, a faucibus odio metus non risus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vestibulum tellus eu nisl dapibus, eget mollis felis dictum. Integer dictum nunc tincidunt odio mollis pretium. Aenean feugiat felis eu gravida aliquet. Suspendisse potenti. Quisque aliquam sem a sem facilisis suscipit. Nullam vitae aliquam diam. Duis tincidunt augue non erat consectetur, sit amet ornare velit hendrerit. Suspendisse vehicula bibendum dapibus. Vestibulum augue leo, commodo eu iaculis at, congue a massa. Vestibulum at enim hendrerit mauris facilisis hendrerit.
                        
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer porta massa mauris, id volutpat enim scelerisque nec. Proin auctor, ante nec pretium lacinia, leo justo hendrerit sem, a faucibus odio metus non risus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vestibulum tellus eu nisl dapibus, eget mollis felis dictum. Integer dictum nunc tincidunt odio mollis pretium. Aenean feugiat felis eu gravida aliquet. Suspendisse potenti. Quisque aliquam sem a sem facilisis suscipit. Nullam vitae aliquam diam. Duis tincidunt augue non erat consectetur, sit amet ornare velit hendrerit. Suspendisse vehicula bibendum dapibus. Vestibulum augue leo, commodo eu iaculis at, congue a massa. Vestibulum at enim hendrerit mauris facilisis hendrerit.</p>
                    </div>
                    <div class="col-md-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer porta massa mauris, id volutpat enim scelerisque nec. Proin auctor, ante nec pretium lacinia, leo justo hendrerit sem, a faucibus odio metus non risus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vestibulum tellus eu nisl dapibus, eget mollis felis dictum. Integer dictum nunc tincidunt odio mollis pretium. Aenean feugiat felis eu gravida aliquet. Suspendisse potenti. Quisque aliquam sem a sem facilisis suscipit. Nullam vitae aliquam diam. Duis tincidunt augue non erat consectetur, sit amet ornare velit hendrerit. Suspendisse vehicula bibendum dapibus. Vestibulum augue leo, commodo eu iaculis at, congue a massa. Vestibulum at enim hendrerit mauris facilisis hendrerit.
                
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer porta massa mauris, id volutpat enim scelerisque nec. Proin auctor, ante nec pretium lacinia, leo justo hendrerit sem, a faucibus odio metus non risus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vestibulum tellus eu nisl dapibus, eget mollis felis dictum. Integer dictum nunc tincidunt odio mollis pretium. Aenean feugiat felis eu gravida aliquet. Suspendisse potenti. Quisque aliquam sem a sem facilisis suscipit. Nullam vitae aliquam diam. Duis tincidunt augue non erat consectetur, sit amet ornare velit hendrerit. Suspendisse vehicula bibendum dapibus. Vestibulum augue leo, commodo eu iaculis at, congue a massa. Vestibulum at enim hendrerit mauris facilisis hendrerit.</p>
                    </div>
                </div>
            </div> <!-- End of body -->
        </div> <!-- End of Container -->
        <div class="email">
            <div class="col-xs-6 col-md-6 text-right">
            <h2 style="color: #fff;">Sign up for Exclusive Package Deals</h2><h5 style="color: #fff;">Exclusive access to coupons, special offers and promotions.</h5>
            </div>
            <div class="col-xs-6 col-md-6">
                <form class="form-inline" role="form">
                    <input type="text" size="39" name="subscribe" class="form-control" style="margin-top: 10px;">
                    <input type="button" value="Sign Up" class="form-control" style="width: 86px; margin-top: 10px;">
                </form>
            </div>
        </div>
        <div id="footer">
            <br><p>Copyright &copy; 2014 Travel Experts Inc. All rights reserved.</p>
        </div>
        <a href="#top" class="top"><i class="fa fa-arrow-up fa-lg"></i></a>
    </body>
</html>