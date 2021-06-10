<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/style.css">
    <title>Tourist Club</title>
    <link rel="icon" href="img/faviconka.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="img/faviconka.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
</head>
<body>
    <header>
      <div id="navBlock">
            <button id="closeMenuButton">×</button>
            <div id="menu" class="adaptive-menu">
                <ul>
                    <li><a href="index.php">Home</a></li> 
                    <li><a href="Forum.php">Forum</a></li>  
                    <li id="activePage"><a href="Contacts.php">Contacts</a></li>
                    <?php if ( !isset($_COOKIE['email']) OR trim($_COOKIE['email']) == ''): ?>
                        <li><a href="#" class="modal-show" data-modal="#sign-in">Account</a></li>
                    <?php else: ?>
                        <li><a href="cabinet.php" >Account</a></li>
                    <?php endif; ?>
                </ul>
            </div>
            
            <?php if ( !isset($_COOKIE['email']) OR trim($_COOKIE['email']) == ''): ?>
            <div class="entrance" class="">
                <button class="modal-show" data-modal="#sign-in">Log In</button>
                <button class="modal-show" data-modal="#sign-up">Sign Up</button>
            </div>
            <?php else: ?>
                <div class="entrance" class="">
                    <button class="logout" data-modal="#sign-up">Log Out</button>
                </div>
            <?php endif; ?>
            <!--<div id="burger"><a href="javascript:void(0);">&#9776</a></div> -->
        </div>

        <div id="icon">
            <button >&#9776</button>
        </div>

        <div id="main-title">
            <h1><span id="h1Green">Active Life</span> Contacts</h1>  
        </div>

        <p>Here you can find our contact information</p>

       <center>
            <div id="down">
                <img src="../img/down.png" alt="">
            </div>
       </center>

    </header>

    <div class="modal-wrap hide">
        <div class="modal hide" id="sign-in">
            <form method="POST"></form>
                <button class="closeButton" data-modal="#sign-in">×</button>
                <input type="text" name="email" id="login-email" placeholder="Email" value="">
                <input type="password" name="pass" id="login-pass" placeholder="Password" value="">
                <button value="login" id="login-submit" class="logInButton">Log In</button>
            </form> 
        </div> 
        <div class="modal hide" id="sign-up">
            <form method="POST"></form>     
                <button class="closeButton" data-modal="#sign-up">×</button>
                <input type="text" name="name" id="signup-name" placeholder="Name">
                <input type="password" name="pass" id="signup-pass" placeholder="Password">
                <input type="text" name="email" id="signup-email" placeholder="Email">
                <input type="text" name="birthday" id="signup-birthday" placeholder="Birthday">
                <div id="choose_your_sex">Sex:
                    <p>
                        <label class="radio">
                            <input class="sex"  name="sex" type="radio" value="male"/>
                            <span class="radio__text">Male</span>
                        </label>
                    </p>
                    <p>
                        <label class="radio">
                            <input class="sex" name="sex" type="radio" value="female"/>
                            <span class="radio__text">Female</span>
                    </p>
                   <p>
                        <label class="radio">
                            <input class="sex" name="sex" type="radio" value="other" />
                            <span class="radio__text">Other</span>
                        </label>
                    </p>
                </div>
                <div class="rules">
                    <input id="check" type="checkbox" >
                    <p>Consent to the <span id="read-rules">processing of personal data</span></p>
                </div>

                <button class="do-not-agree">Sign Up</button>
                <button type="submit" value="signup" id="signup-submit" class="logInButton hide">Sign Up</button>
            </form>
        </div>
    </div>


    <div id="contacts-content">
        <h2>We Are on <span>the Map</span></h2>
        <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2055.1092131832643!2d1.0565721944453754!3d51.35779480913643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d9335dff71f771%3A0x468a549867becdba!2sActive%20Life%20Ltd!5e0!3m2!1sen!2sru!4v1621426414747!5m2!1sen!2sru" width="1000" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>

   <div id="contact-information">
        <h2>Write to Us</h2>
    	<form id="message" action="core/send.php" method="POST">
    		<input class="input-field" type="text" name="user_name" placeholder="Name" size="20" maxlength="20" required/><br>
    		<input class="input-field" type="text" name="user_email" placeholder="Email" size="20" maxlength="30" required/><br>
    		<textarea class="input-field" name="user_text" placeholder="Enter a message..." required></textarea>
    		<button type="submit">Send</button>	
    	</form>
   </div>

    <footer>
        <div class="any-bar-revers"></div>
        <div class="end">
            <div class="find-us">
                <ul>
					<li class="social_item">
						<a href="https://www.instagram.com/activelivegp/"><i class="zmdi zmdi-instagram"></i></a>
					</li>	
					<li class="social_item">
						<a href="https://www.facebook.com/activelifekent"><i class="zmdi zmdi-facebook-box"></i></a>
					</li>
					<li class="social_item">
					    <a href="https://www.youtube.com/user/touropia/videos"><i class="zmdi zmdi-youtube-play"></i></a>
					</li>
					<li class="social_item">
						<a href="https://twitter.com/activelifeltd"><i class="zmdi zmdi-twitter"></i></a>
					</li>
				</ul> 
            </div>
            <div class="any-bar"></div>
        </div>
    </footer>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDaF-wvZc72s0ULKN64w-C11XHoJm7hYW4"></script>
    <script src="script/script.js"></script>
    <script src="script/ajax.js"></script>
    <script src="script/LoginScript.js"></script>
    <script src="/script/logout.js"></script>
</body>
</html>