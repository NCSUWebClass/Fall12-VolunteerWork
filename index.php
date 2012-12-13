
<!DOCTYPE html>
<html lang="en">
<head>
<title>Activate Good</title>
<meta name="google-site-verification" content="2AWfTSvdWJbRlVLpNRmJ3TJ1WREQev_H35UsO2MiKl8" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="css/act.css" />
<style>
.link,
.link a,
.signupframe
{
    color: #006482;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 13px;
    }
    .link,
    .link a {
        text-decoration: none;
        }
    .signupframe {
        border: 1px solid #ffffff;
        background: #ffffff;
        }
.signupframe .required {
    font-size: 10px;
    }
</style>
</head>

<body>

    <div class="container">

    
                                

    <form action="#" method="post" style="margin: 0px; padding: 0px">
        <fieldset>
        
            <div class="modal hide fade in" id="login-modal" style="display: none;">
        
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3>Welcome back!</h3>
                </div>
                
                <div class="modal-body">
                    
                    <div class="alert alert-info" id="alert-signup" style="display:none">
                        Hi there! You are trying to sign up to volunteer, but we don't know who you are. 
                        Please log in or create your account (this just takes a minute), and we'll bring 
                        you right back here to confirm your volunteer signup!
                    </div>
                    
                    <div class="well">
                    
                        <h6>Log in with your username and password</h6>
                        <div class="control-group offset1" style="margin: 10px">
                            <div class="controls">
                                <input id="name" placeholder="username" class="span2" name="username" type="text" style="margin:3px" />
                                <input id="password" placeholder="password" class="span2" name="password" type="password" style="margin:3px" />
                                <input class="btn btn-small btn-primary" type="submit" name="submit" value="Login" style="margin:3px" />
                            </div>
                        </div>
                        
    
                        
                        <h6>Or use your social media account</h6>
                        <div class="control-group offset1" style="margin: 10px">
                            <div class="controls">
                                <a href="https://www.facebook.com/dialog/oauth?client_id=385252661536115&redirect_uri=http%3A%2F%2Factivategood.org%2F&state=caa64e4c05fe8f7618234f3dc5e3b6b5&scope=email%2C+user_birthday"><img src="img/fbconnect.png" /></a>                         </div>
                        </div>
                        
                        <h6>Other options</h6>
                        <div class="control-group offset1" style="margin: 10px">
                            <div class="controls">
                                <a href="register.php">Create An Account</a> | <a href="reset-password.php">Reset My Password</a>
                            </div>
                        </div>
                    
                    </div>

                </div>
                
            </div>
            
        </fieldset>
    </form>
    
    
    
    <div id="header">
        <div id="logo">
            <a href="index.php"><img src="img/aglogo.png" style="position:relative; bottom: -5px;" /></a>
            <div id="info-nav" style="float: right; text-align: right; width: 400px; padding: 90px 20px 0px 0px;">
                <ul>
                    <li><a href="about.php">About</a> | <a href="contact.php">Contact Us</a> | <a href="blog">Blog</a> | <a href="donate.php">Donate!</a></li>
                    <li><a href="activate-schools.php">Activate Schools</a> | <a href="coutureforacause">Couture for a Cause</a></li>
                </ul>
            </div>
        </div>
    </div>
    
    <div id="main-nav" class="navbar">
    <div class="navbar-inner">
        <div class="container">
            <a class="brand" href="index.php">
Activate Good</a>
            <ul class="nav">
<li class=" active"><a href="opportunity.php">For Volunteers</a></li>
<li class=""><a href="nonprofit-faq.php">For Nonprofits</a></li>
<li class=""><a href="corporate.php">For Companies</a></li>
            </ul>
            <ul class="nav pull-right">
                <button name="login" class="btn" data-toggle="modal" data-target="#login-modal">Login</button>
                <a href="register.php" class="btn btn-primary">Sign Up</a>          </ul>
        </div>
    </div>
</div>
<ul id="secondary-nav" class="nav nav-pills">
<li>
<a href="opportunity.php">Find an Opportunity</a></li>
<li>
<a href="nonprofit.php">Browse Nonprofits</a></li>
<li>
<a href="event.php">Special Events</a></li>
<li>
<a href="volunteer.php">Become a Volunteer</a></li>
</ul>
    <div class="span12 main-content">
        <div style="padding: 25px 25px 50px 25px">
            
                        <div class="row" style="margin-bottom: 20px">
        
                        
                <div class="span6 offset1" style="margin-left: 60px">
                    <div id="myCarousel" class="carousel slide">
                        <!-- Carousel items -->
                        <div class="carousel-inner">
                                                        <div class="active  item">
                                <img src="http://activategood.org/blog/wp-content/uploads/2012/11/ActivateSchools_WYWLAfair_blog_13Nov2012.jpg" alt="">
                                <div class="carousel-caption">
                                    <p><a style="color: #ffffff;" href="http://activategood.org/blog/?p=485">WYWLA Students pitch projects at Service Project Fair</a></p>
                                </div>
                            </div>
                                                        <div class=" item">
                                <img src="http://activategood.org/blog/wp-content/uploads/2012/10/kaitlin_460x345.jpg" alt="">
                                <div class="carousel-caption">
                                    <p><a style="color: #ffffff;" href="http://activategood.org/blog/?p=439">From volunteering to a job</a></p>
                                </div>
                            </div>
                                                        <div class=" item">
                                <img src="http://activategood.org/blog/wp-content/uploads/2012/09/femcityrtp.jpg" alt="">
                                <div class="carousel-caption">
                                    <p><a style="color: #ffffff;" href="http://activategood.org/blog/?p=422">FemCity Farmers!</a></p>
                                </div>
                            </div>
                                                    </div>
                        <!-- Carousel nav -->
                        <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                        <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
                    </div>
                </div>
        
            <div class="span4 pull-right" style="position: relative; right: 20px; top: -10px">
                
                <div class="row" style="text-align: center">
                    <a href="opportunity.php"><img src="img/community.png" /></a>
                </div>
                
                <div class="row" style="text-align: center; margin-top: 10px">
                    <img width="250" height="39" src="http://generationbecause.org/blog/wp-content/uploads/2012/08/Button-JoinMailingList-300x47.png" />
                    <form method="post" action="https://app.icontact.com/icp/signup.php" name="icpsignup" id="icpsignup6677" accept-charset="UTF-8" onsubmit="return verifyRequired6677();" >
                    <input type="hidden" name="redirect" value="http://www.icontact.com/www/signup/thanks.html">
                    <input type="hidden" name="errorredirect" value="http://www.icontact.com/www/signup/error.html">

                    <div id="SignUp" style="text-align: center">
                        <table width="250" align="center" class="signupframe" border="0" cellspacing="0" cellpadding="0" style="margin-top: 7px">
                            <tr>
                            <td align="left">
                              <input type="text" name="fields_email" style="width: 160px" placeholder="Email Address">
                            </td>

                            <td align="right" style="padding: 0px; margin:0px">
                                    <input class="btn" type="submit" name="Submit" value="Submit" style="position: relative; top:-4px" />
                                <input type="hidden" name="listid" value="7749">
                                <input type="hidden" name="specialid:7749" value="5RA5">
                                <input type="hidden" name="clientid" value="841808">
                                <input type="hidden" name="formid" value="6677">
                                <input type="hidden" name="reallistid" value="1">
                                <input type="hidden" name="doubleopt" value="0">
                            </td>
                          </tr>
                        </table>
                    </div>
                    </form>
                    
                </div>
                
            </div>
        </div>
    
            <div class="row">

        <div class="span4">
            <div class="row">
                <div class="span1"><img src="img/act-icon.jpg" width="48" height="48" /></div>
                <div class="span3">
                <h4>Be a part of the local impact!</h4>
                <p>Volunteers and Nonprofits: <a href="register.php">Sign up</a> to become a part of our community of do-gooders making an impact in the Triangle!</p>
                </div>
            </div>
        </div>
        
                
        <div class="span2 rounded impactbox">
            <div class="number">113</div>
            <div>Nonprofit Partners!</div>
        </div>

        
        <div class="span2 rounded impactbox">
            <div class="number">2229</div> 
            <div>Volunteers!</div>
        </div>
        
                
        <div class="span2 rounded impactbox">
            <div class="number">81</div>
            <div>Opportunities!</div>
        </div>      
    </div>
        </div>
    </div>
    
    
</div> <!-- End of Main Container -->

<div class="container container-wide">
    <div id="lower">
        <div id="footer">
            <div class="span2">
                <ul class="unstyled">
                    <li>Activate Good</li>
                    <li>P.O. Box 10683</li>
                    <li>Raleigh, NC 27605</li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>
            <div class="span3">
                    <a href="http://facebook.com/activategood" target="_blank"><img src="img/fb.png" /></a>
                    <a href="http://twitter.com/activategood" target="_blank"><img src="img/tw.png" /></a>
                    <a href="http://youtube.com/activategood" target="_blank"><img src="img/yt.png" /></a>
                    <a href="http://linkd.in/activategood" target="_blank"><img src="img/in.png" /></a>
            </div>
            <div class="span3">
                    <ul class="unstyled">
                        <li><a href="about.php">About Activate Good</a></li>
                        <li><a href="blog">Activate Good Blog</a></li>
                        <li><a href="opportunity.php">Volunteer in the Community</a></li>
                        <li><a href="donate.php">Donate to Activate Good</a></li>
                    </ul>
                </div>
            <div class="span3">
                <ul class="unstyled">
                    <li><a href="privacy-policy.php">Privacy Policy</a></li>
                    <li><a href="tos.php">Terms of Service</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-34126256-1']);
  _gaq.push(['_setDomainName', 'activategood.org']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
        
    <script>
        $(function(){
            $('.carousel').carousel();
        });
    </script>
    <script type="text/javascript">

    var icpForm6677 = document.getElementById('icpsignup6677');

    if (document.location.protocol === "https:")

        icpForm6677.action = "https://app.icontact.com/icp/signup.php";
    function verifyRequired6677() {
      if (icpForm6677["fields_email"].value == "") {
        icpForm6677["fields_email"].focus();
        alert("The Email field is required.");
        return false;
      }


    return true;
    }
    </script>
</body>
</html>
