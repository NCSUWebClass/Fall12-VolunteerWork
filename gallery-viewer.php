
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Photo Gallery - Activate Good</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/act.css" />
    <link rel="stylesheet" type="text/css" href="css/gallery.css" >
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="ui/jquery.ui.core.js"></script>
    <script type="text/javascript" src="ui/jquery.ui.widget.js"></script>
    <script type="text/javascript" src="ui/jquery.ui.mouse.js"></script>
    <script type="text/javascript" src="ui/jquery.ui.sortable.js"></script>
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
                                    <a href="https://www.facebook.com/dialog/oauth?client_id=385252661536115&redirect_uri=http%3A%2F%2Fwww.activategood.org%2Fgallery.php&state=17e1b4c1a91f894051eec41d557d0c1a&scope=email%2C+user_birthday"><img src="img/fbconnect.png" /></a>                          </div>
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
                                <li class=""><a href="opportunity.php">For Volunteers</a></li>
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
                            <a href="about.php">About Us</a></li>
                            <li>
                                <a href="our-story.php">Our Story</a></li>
                                <li>
                                    <a href="team.php">Meet Our Team</a></li>
                                    <li>
                                        <a href="supporters.php">Supporters</a></li>
                                        <li>
                                            <a href="news.php">In the News</a></li>
                                            <li class="active"
                                            >
                                            <a href="gallery.php">Photo Gallery</a></li>
                                            <li>
                                                <a href="blog">Blog</a></li>
                                            </ul>
                                            <div class="container">
                                                <div class="span12 main-content">



                                                    <?php
                                                    require_once("php/phpFlickr.php");

                                                    // Create new phpFlickr object
                                                    $f = new phpFlickr("5dbbc1e8638b30612fd6191d577a447a");
                                                    //$f->enableCache(
                                                    //    "db",
                                                    //    "mysql://[username]:[password]@[server]/[database]"
                                                    //);

                                                    $i = 0;
                                                        // Find the NSID of the username inputted via the form
                                                    $person = $f->people_findByUsername('activategood');

                                                        // Get the friendly URL of the user's photos
                                                    $photos_url = $f->urls_getUserPhotos($person['id']);

                                                    $sets = $f->photosets_getList($person['id']);





                                                    // If set exists
                                                    if(!empty($sets)) {
                                                        $setIDs = array();
                                                        foreach($sets["photoset"] as $set) {
                                                            $setIDs[] = $set["id"];
                                                            $setTitles[] = $set["title"];
                                                        }

                                                        $photos = $f->photosets_getPhotos($setIDs[$_GET["gallery"]], Null, NULL, 200);
                                                    }


                                                    $first_photo = $photos['photoset']['photo'][0];
                                                    $first_info = $f->photos_getInfo($first_photo['id']);

                                                    echo '<div class="page-header"><a href="gallery.php">Gallery</a></div>';
                                                    echo '<div class="viewer">';
                                                    echo '<img id="main_image" src="' . $f->buildPhotoURL($first_photo) . '">';
                                                    echo '<p id="main_text">' . $first_info['photo']['title'] . '</p>';
                                                    echo '</div>';


                                                    echo '<div class="sidebar">';
                                                // Loop through the photos and output the html
                                                    echo "<div class='imageswitch'>";

                                                    foreach ((array)$photos['photoset']['photo'] as $photo) {
                                                        echo '<a class="thumbnail"><img class="thumbnail" width="85px" height="85px" border="0" alt="' . $photo['title'] . '" src='
                                                        . $f->buildPhotoURL($photo, 'Square') . '> </a>';
                                                        $i++;
                                                            // If it reaches the sixth photo, insert a line break
                                                    }
                                                    echo '</div>';
                                                    echo '</div>'
                                                    ?>                                              


                                                    <!-- Events bar at bottom of page -->

                                                    <div class="row" style="margin-bottom: 5px; clear: left; width: 100%; margin-right: 0px; margin-left: 0px;">
                                                        <div class="alert alert-info">
                                                            Sort photos by selecting an album below: 
                                                        </div>
                                                    </div>

                                                    <div class="events">
                                                        <?php
                                                        $sets = $f->photosets_getList($person['id']);
                                                        if(!empty($sets)) {
                                                            $gallery = 0;
                                                            foreach($sets["photoset"] as $set) {
                                                                $photo = $set;
                                                                $photo["id"] = $set["primary"];
                                                                $photo_url = $f->buildPhotoURL($photo, "square");
                                                                echo '<div id="eventwrapper">';
                                                                echo '<a href="gallery-viewer.php?gallery=' . $gallery . '" class ="eventthumb">';
                                                                echo '<img id="eventthumb" width="85px" height="85px" border="0" alt="" src="'. $photo_url . '"">';
                                                                echo '<p>'. $set['title'] . '</p>';
                                                                echo '</a>';
                                                                echo '</div>';
                                                                $gallery++;
                                                            }
                                                        }
                                                        ?>
                                                    </div>
                                                </div>

                                            </div> <!-- End of Main Container -->

                                            <script type="text/javascript">
                                            $('img.thumbnail').click(function(){
                                                var temp_src = $(this).attr('src');
                                                var str = temp_src.split("_s");
                                                var src = str[0] + str[1];

                                                var image_title = $(this).attr('alt');

                                                if (src != $('img#main_image').attr('src')) {
                                                    $('img#main_image').attr('src', src);
                                                    $('p#main_text').text(image_title);
                                                }
                                                return false;
                                            });
                                            </script>




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

                                        </body>
                                        </html>