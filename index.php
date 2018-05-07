<?php

$results = mysql_query($query);

mysql_connect("localhost","condon","fierce69");
mysql_select_db("dpstele");

$sql = mysql_query("SELECT * FROM users ORDER BY id ASC");


$id = 'id';
$user_id = 'user_id';
$first_name = 'first_name';
$last_name = 'last_name';
$dept = 'dept';

$sqli = mysql_query("SELECT * FROM qualifications ORDER BY id ASC");

$qual_id = 'id';
$user_id = 'user_id';
$qualifications = 'qualifications';
$qual_category = 'qual_category';
$comments = 'comments';
?>
<?php
$firstname = $firstname = $lastname = $lastname ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $lastname = test_input($_POST["lastname"]);
  $firstname = test_input($_POST["firstname"]);
}
if (substr($firstname, -3) == 'son') {
    $firstname = str_replace('son', '<b>son</b>', $firstname);
}
if (substr($lastname, -3) == 'son') {
    $lastname = str_replace('son', '<b>son</b>', $lastname);
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$lastname = str_replace("s","5",$lastname);
$firstname = str_replace("s","5",$firstname);
$lastname = str_replace("S","5",$lastname);
$firstname = str_replace("S","5",$firstname);

function str_replace_first($from, $to, $subject)
{
    $from = '/'.preg_quote($from, '/').'/';

    return preg_replace($from, $to, $subject, 1);
}

$firstname = str_replace_first('e', '<u>e</u>', $firstname);
$lastname = str_replace_first('e', '<u>e</u>', $lastname);
$firstname = str_replace_first('E', '<u>E</u>', $firstname);
$lastname = str_replace_first('E', '<u>E</u>', $lastname);



?>
<!DOCTYPE html>
<html>
<head>
    <title>Brads portfolio</title>
</head>
<body style="background-color:&lt;?php echo $bg; ?&gt; !important;">
    <!-- Your HTML code here -->
    <link href="img/favicon.ico" rel="icon" type="image/x-icon">
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author"><?php
          header('content-type: text/css');

          date_default_timezone_set("America/Los_Angeles");
          $now = date('G');

          if ($now > 7 && $now < 19) {
              $bg = 'white';
          } else {
              $bg = '#18BC9C';
          }
          ?>
    <style>
    body {
    background: <?php echo $bg .'!important'; ?>;
    }
    </style><!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet"><!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet"><!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css"><!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
    .skills {
        font-size: 20px !important;

    }
    #portfolio .portfolio-item .portfolio-link {
        display: block;
        position: relative;
        margin: none !important;
        max-width: none !important;
    }
    </style>
   <?php include ('nav.php'); ?>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img alt="" class="img-responsive" src="img/me.png">
                    <div class="intro-text">
                        <span class="name">My Work</span>
                        <hr class="star-light">
                        <span class="skills">Web Developer - User Experience Designer</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Portfolio</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div><img alt="" class="img-responsive" src="img/portfolio/chartperfect.png"></a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div><img alt="" class="img-responsive" src="img/portfolio/styleandmen.png"></a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div><img alt="" class="img-responsive" src="img/portfolio/andresoriano.png"></a>
                </div>
                <div class="col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div><img alt="" class="img-responsive" src="img/portfolio/axiomjuice.png"></a>
                </div>
                <div class="col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div><img alt="" class="img-responsive" src="img/portfolio/revoltivedigital.png"></a>
                </div><!-- <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/submarine.png" class="img-responsive" alt="">
                    </a>
                </div> -->
            </div>
        </div>
    </section><!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About me</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ever since I was a child I have had a great passion for technology and design. I have always been fascinated with the inner-workings of computers and modifying them to fit my needs.</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2">
                    <ul>
                        <li class="skills">Bootstrap</li>
                        <li class="skills">Jquery</li>
                        <li class="skills">Angular.js</li>
                        <li class="skills">Linux</li>
                        <li class="skills">Apache</li>
                        <li class="skills">CSS</li>
                        <li class="skills">HTML</li>
                        <li class="skills">MySQL</li>
                        <li class="skills">Node.js</li>
                    </ul>
                </div>
                <div class="col-lg-4 col-lg-offset-2">
                    <ol>
                        <li class="skills">PC Repair</li>
                        <li class="skills">Windows XP/Vista/7/8</li>
                        <li class="skills">Cisco Equipment</li>
                        <li class="skills">Network Design</li>
                        <li class="skills">OSPF</li>
                        <li class="skills">EIGRP</li>
                        <li class="skills">VPN</li>
                        <li class="skills">RIPv2</li>
                        <li class="skills">WordPress</li>
                    </ol>
                </div>
                <div class="col-lg-8 col-lg-offset-2">
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;My professional background consists of freelance and in-house web development projects. I have assisted several clients in configuring personal and small business wordpress installations and bootstrap based webpages.</p>
                </div>
            </div><!-- div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="#" class="btn btn-lg btn-outline">
                        <i class="fa fa-download"></i>
                    </a>
                </div> -->
        </div>
    </section><!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Contact Me</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form id="contactForm" name="sentMessage" novalidate="">
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Name</label> <input class="form-control" data-validation-required-message="Please enter your name." id="name" placeholder="Name" required="" type="text">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email Address</label> <input class="form-control" data-validation-required-message="Please enter your email address." id="email" placeholder="Email Address" required="" type="email">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Phone Number</label> <input class="form-control" data-validation-required-message="Please enter your phone number." id="phone" placeholder="Phone Number" required="" type="tel">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Message</label>
                                <textarea class="form-control" data-validation-required-message="Please enter a message." id="message" placeholder="Message" required="" rows="5"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div><br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button class="btn btn-success btn-lg" type="submit">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <h1 class="text-center">DPS Telecom Challenge</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>User id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Department</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php while($rows = mysql_fetch_assoc($sql)): ?>
                    </tr>
                    <tr>
                        <th scope="row"><?php echo $rows[$user_id];?></th>
                        <td><?php echo $rows[$first_name];?></td>
                        <td><?php echo $rows[$last_name];?></td>
                        <td><?php echo $rows[$dept];?></td>
                    </tr><?php endwhile; ?>
                </tbody>
            </table>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>qual_id</th>
                        <th>user_id</th>
                        <th>qualifications</th>
                        <th>qual_category</th>
                        <th>comments</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php while($rows = mysql_fetch_assoc($sqli)): ?>
                    </tr>
                    <tr>
                        <th scope="row"><?php echo $rows[$qual_id];?></th>
                        <td><?php echo $rows[$user_id];?></td>
                        <td><?php echo $rows[$qualifications];?></td>
                        <td><?php echo $rows[$qual_category];?></td>
                        <td><?php echo $rows[$comments];?></td>
                    </tr><?php endwhile; ?>
                </tbody>
            </table>
            <table>
                <tbody>
                    <tr>
                        <?php while($rows = mysql_fetch_assoc($sqli)): ?>
                    </tr>
                    <tr>
                        <th scope="row"><?php echo $rows[$qual_id];?></th>
                        <td><?php echo $rows[$user_id];?></td>
                        <td><?php echo $rows[$qualifications];?></td>
                        <td><?php echo $rows[$qual_category];?></td>
                        <td><?php echo $rows[$comments];?></td>
                    </tr><?php endwhile; ?>
                </tbody>
            </table>
            <?php
            while ($row = mysql_fetch_array($results)) {
                echo '<tr>';
                foreach($row as $field) {
                    echo '<td>' . htmlspecialchars($field) . '</td>';
                }
                echo '</tr>';
            } ?>
            <form action="index.php" method="post" role="form">
                <div class="form-group">
                    <label for="firstname"></label> <input class="form-control" id="firstname" name="firstname" placeholder="Enter First Name" type="text">
                </div>
                <div class="form-group">
                    <label for="lastname"></label> <input class="form-control" id="lastname" name="lastname" placeholder="Enter Last Name" type="text">
                </div><input type="submit">
            </form>
            <p><?php echo $firstname; ?></p>
            <p><?php echo $lastname; ?></p>
            <h1 class="text-center">Query for matching most qualified users</h1>
            <article><p>SELECT u.user_id, concat(u.first_name, ' ', u.last_name) as FullName, count(q.qualifications) as TotalQualifications
FROM users u, qualifications q
WHERE q.user_id = u.user_id and q.qual_category='web design'
GROUP BY u.user_id
ORDER BY TotalQualifications DESC</p><span style="margin: 0 auto;display: table;"><?php include 'namechange.php'; ?></span></article>
        </div>
    </section><!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-6">
                        <h3>Location</h3>
                        <p><br>
                        San Diego, CA 92104</p>
                    </div>
                    <div class="footer-col col-md-6">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a class="btn-social btn-outline" href="#"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a class="btn-social btn-outline" href="#"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a class="btn-social btn-outline" href="#"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a class="btn-social btn-outline" href="https://www.linkedin.com/in/bradley-condon-00739441" target="_blank"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a class="btn-social btn-outline" href="#"><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Brad Condon Websites 2016
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visible-sm">
        <a class="btn btn-primary" href="#page-top"><i class="fa fa-chevron-up"></i></a>
    </div><!-- Portfolio Modals -->
    <div aria-hidden="true" class="portfolio-modal modal fade" id="portfolioModal1" role="dialog" tabindex="-1">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>ChartPerfect</h2>
                            <hr class="star-primary">
                            <a href="http://sitetesting.chartperfect.com/Allergy.php" target="_blank"><img alt="" class="img-responsive img-centered" src="img/portfolio/chartperfect.png"></a>
                            <p></p>
                            <ul class="list-inline item-details">
                                <li>Client: <strong><a href="#">Chartperfect</a></strong></li>
                                <li>Date: <strong><a href="#">December 2015</a></strong></li>
                                <li>Service: <strong><a href="#">Web Development</a></strong></li>
                            </ul><button class="btn btn-default" data-dismiss="modal" type="button"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div aria-hidden="true" class="portfolio-modal modal fade" id="portfolioModal2" role="dialog" tabindex="-1">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Style And Men</h2>
                            <hr class="star-primary">
                            <a href="http://www.styleandmen.com/" target="_blank"><img alt="" class="img-responsive img-centered" src="img/portfolio/styleandmen.png"></a>
                            <p></p>
                            <ul class="list-inline item-details">
                                <li>Client: <strong><a href="http://.com">Dean Hall</a></strong></li>
                                <li>Date: <strong><a href="#">February 2015</a></strong></li>
                                <li>Service: <strong><a href="#">Web Development</a></strong></li>
                            </ul><button class="btn btn-default" data-dismiss="modal" type="button"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div aria-hidden="true" class="portfolio-modal modal fade" id="portfolioModal3" role="dialog" tabindex="-1">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <a href="http://www.andresoriano.com/" target="_blank"><img alt="" class="img-responsive img-centered" src="img/portfolio/andresoriano.png"></a>
                            <p></p>
                            <ul class="list-inline item-details">
                                <li>Client: <strong><a href="#">Andre Soriano</a></strong></li>
                                <li>Date: <strong><a href="#">January 2015</a></strong></li>
                                <li>Service: <strong><a href="#">Web Development</a></strong></li>
                            </ul><button class="btn btn-default" data-dismiss="modal" type="button"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div aria-hidden="true" class="portfolio-modal modal fade" id="portfolioModal4" role="dialog" tabindex="-1">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Axiom Juice</h2>
                            <hr class="star-primary">
                            <a href="http://www.axiomjuice.com/" target="_blank"><img alt="" class="img-responsive img-centered" src="img/portfolio/axiomjuice.png"></a>
                            <p></p>
                            <ul class="list-inline item-details">
                                <li>Client: <strong><a href="#">Axiom Juice</a></strong></li>
                                <li>Date: <strong><a href="#">March 2015</a></strong></li>
                                <li>Service: <strong><a href="#">Web Development</a></strong></li>
                            </ul><button class="btn btn-default" data-dismiss="modal" type="button"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div aria-hidden="true" class="portfolio-modal modal fade" id="portfolioModal5" role="dialog" tabindex="-1">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Revoltive Digital</h2>
                            <hr class="star-primary">
                            <a href="http://www.revoltivedigital.com/" target="_blank"><img alt="" class="img-responsive img-centered" src="img/portfolio/revoltivedigital.png"></a>
                            <p></p>
                            <ul class="list-inline item-details">
                                <li>Client: <strong><a href="#">Revoltive Digital</a></strong></li>
                                <li>Date: <strong><a href="#">February 2015</a></strong></li>
                                <li>Service: <strong><a href="#">Web Development</a></strong></li>
                            </ul><button class="btn btn-default" data-dismiss="modal" type="button"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div aria-hidden="true" class="portfolio-modal modal fade" id="portfolioModal6" role="dialog" tabindex="-1">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img alt="" class="img-responsive img-centered" src="img/portfolio/submarine.png">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client: <strong><a href="#">Start Bootstrap</a></strong></li>
                                <li>Date: <strong><a href="#">April 2014</a></strong></li>
                                <li>Service: <strong><a href="#">Web Development</a></strong></li>
                            </ul><button class="btn btn-default" data-dismiss="modal" type="button"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- jQuery -->
    <script src="js/jquery.js">
    </script> <!-- Bootstrap Core JavaScript -->

    <script src="js/bootstrap.min.js">
    </script> <!-- Plugin JavaScript -->

    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js">
    </script>
    <script src="js/classie.js">
    </script>
    <script src="js/cbpAnimatedHeader.js">
    </script> <!-- Contact Form JavaScript -->

    <script src="js/jqBootstrapValidation.js">
    </script>
    <script src="js/contact_me.js">
    </script> <!-- Custom Theme JavaScript -->

    <script src="js/freelancer.js">
    </script>
</body>
</html>