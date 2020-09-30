
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="normalize.css">
<link rel="stylesheet" href="contactstyle.css">
<script src="backend.js"></script>

<head>
    <meta charest="utf-8">
    <meta name=discription content="Wlcome to my first web site wich is about a books store">
    <title> THE EDUTAINER Book Store </title>

</head>

<body>
<?php
session_start();
if(isset($_SESSION['id']&& isset($_SESSION['user_name']))){}
if( isset($_POST['n']) && isset($_POST['e']) && isset($_POST['m']) )?>

<?php
	$n = $_POST['n']; // HINT: use preg_replace() to filter the data
	$e = $_POST['e'];
	$m = nl2br($_POST['m']);
	$to = "you@domain.com";	
	$from = $e;
	$subject = 'Contact Form Message';
	$message = '<b>Name:</b> '.$n.' <br><b>Email:</b> '.$e.' <p>'.$m.'</p>';
	$headers = "From: $from\n";
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\n";
	if( mail($to, $subject, $message, $headers) ){
		echo "success";
	} else {
		echo "The server failed to send the message. Please try again later.";
	}

?>
    <!-- start header -->
    <div class="header">
        <div class=navbar>
            <div class=container>

                <a href="index.html">
                    <img src="logo.jpg" width="125px">
                </a>
                <abbr title="Un Menue">
                    <div class="bannerleft"><img src="ban-left.png" alt="img"></div>
                    <ul id="MenuItems">
                        <li><a href="index.html">Home&nbsp;&nbsp;</a></li>
                        <li><a href="about.html">About&nbsp;&nbsp;</a></li>
                        <li><a href="http://localhost/server/contact.php">Contact&nbsp;&nbsp;</a></li>
                    </ul> 
                    <div class="bannerright"><img src="ban-right.png" alt="img"></div>
                </abbr>
                <div class=search>
                    <input onfocus="if(this.value=='What are you looking for')this.value=''" type="text" value="Search" onclick="this.value=''" name="s" id="s">
                </div>
                <h1><ins><strong><b>  THE </b></ins>&nbsp; &nbsp;
                    <ins><strong><b></b><ins><strong><b> EDUTAINER</b></strong></ins>&nbsp;</b>
                    </strong>
                    </ins>
                    </em>
                </h1>

            </div>
            <!-- end header -->

            <!-- start title -->
    
        <div class="slider">
            <div class=container>
           

            <abbr title="Un espace centrale avec l 'information principale du site"> 
                    <h3>&nbsp;Electronic Book Store&nbsp;</h3> </abbr>
        </div>
    </div>
    <!-- end title-->

    <fieldset>
        <legend>
            <h1>Personal information to Contact Us</h1>
        </legend>
        <form class="contact-form" action="login.php" method="post">
        <?php if (isset($_GET['error'])){?>
<p class="error"><?php echo $_GET['error']; ?></p>
<?php  } ?>
            <label>Username</label>
            <input type=" Username " name="Uname " class="contact-form-text" placeholder="type your name " maxlengh="10 " autofocus="on ">
            <label> Password</label>
            <input type="password " name="pass " class="contact-form-text" placeholder="type your password ">
            <label>password-power: <meter min="0 " max="1 " value="7 " low=".5 " high=".8 "></meter><br> 
                    <label>Email</label>
            <input type="email " name="mail " class="contact-form-text" autocomplete="off " placeholder="type your e-mail ">
            <label> Phone number</label>
            <input type="text" class="contact-form-text" placeholder="Your Phone">
            <textarea class="contact-form-text" placeholder="Your Message"></textarea>



            <label>
                    remember me
           </label>

           <button> <input type="Submit" class="contact-form-btn" value="remember me"></button>
           <button><input type="Submit" class="contact-form-btn" value="log in"></button>
        </form>
    </fieldset>
  

    <!-- start footer -->

    <div class=" footer ">
        <div class="container ">
            <span class="connect ">
                <p> LETS CONNECT! You can share this page</p></span>
            <div class="social ">

                <a class="soc-icons " href="https://www.facebook.com/muza.mimi" title="facebook site">
                    <img src="fb.jpg" with="46px" height="35" alt="facebook Sites"></a>


                <a class="soc-icons " href="https://www.pinterest.fr/" title="pinterest site">
                    <img src="paintrest.jpg" with="46px" height="35" alt="pinterest Sites"></a>


                <a class="soc-icons " href="https://twitter.com/muza75844932" title="twitter Site">
                    <img src="twitter.jpg" with="46px" height="35" alt="twitter Sites "></a>


                <a class="soc-icons " href="https://www.instagram.com/" title="instagram Sites ">
                    <img src="insta.jpg " with="46px" height="35" alt="instagram Sites "></a>

            </div>


            <div class="menu-item ">
                <p> QUICK LINKS <br>
                    <li id="menu-item " class=" menu-item "><a href=" ">HOME</a></li>
                    <li id="menu-item " class=" menu-item "><a href=" ">Blog</a></li>
                    <li id="menu-item " class=" menu-item "><a href=" ">OUR BOOKS </a></li>
                    <li id="menu-item " class=" menu-item "><a href=" ">EVENTS</a></li>
                    <li id="menu-item " class=" menu-item "><a href=" ">CONTACT</a></li>
                    <li id="menu-item " class=" menu-item "><a href=" ">DONATE</a></li>
            </div>
            <div class="donate ">
                <a href=" ">Donate Now</a>
            </div>
            <div class="downoald ">

                <p>Download App for Android and Ios Mobile Phone.</p>
                <div class="applogo ">
                    <img src="playstore.png ">
                    <img src="appstore.png ">
                </div>
            </div>
            <div class="logo ">
                <img src="logo.jpg " width="150px ">

            </div>
            <p>2020 The edutainer MINISTRIES. ALL RIGHTS RESERVED. (COPYRIGHT TERMS)</p>
        </div>
        <!-- end footer -->