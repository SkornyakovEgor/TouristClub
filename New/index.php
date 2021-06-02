<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Active Life</title>
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
                    <li id="activePage"><a href="index.php">Home</a></li>
                    <li><a href="Forum.php">Forum</a></li>
                    <li><a href="Contacts.php">Contacts</a></li>
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
            <h1>Tourist Club <span id="h1Green">Active Life</span></h1>
        </div>
 
        <p>The hobby that has united thousands of people</p>

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
                <input type="text" name="email" id="login-email" placeholder="Email" value="dog1199@mail.ru">
                <input type="password" name="pass" id="login-pass" placeholder="Password" value="1234">
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
                   <!--  <p>
                        <label class="radio">
                            <input class="sex" name="sex" type="radio" value="other" />
                            <span class="radio__text">Military helicopter</span>
                        </label>
                    </p> -->
                </div>
                <button type="submit" value="signup" id="signup-submit" class="logInButton">Sign Up</button>
            </form>
        </div>
    </div>

    <div id="about-club">
        <div id="about1">
            <img src="../img/about.png" alt="just a picture">
            <h2>One of the <span>best tourist clubs</span></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Facilis impedit quas nisi hic amet sed ex dicta, nostrum quo dolores laborum, 
                itaque nulla nobis repellat cumque asperiores quaerat dolore fugiat. Qui modi earum itaque sequi est,
                totam assumenda ducimus delectus, labore beatae sint hic blanditiis distinctio nam quis amet facilis
                placeat. </p>
        </div>
        <div id="about2">
            <img src="../img/about3.png" alt="just a picture">
            <h2>Being a <span>member of the club</span> is:</h2>
            <ul>
                <li><span>✓</span> Learn a lot of interesting things about the world</li>
                <li><span>✓</span> Make new acquaintances around the world</li>
                <li><span>✓</span> Share emotions and experiences with other club members</li>
                <li><span>✓</span> Be sure that the members of the club will always come to your aid</li>
            </ul>
        </div>     
    </div>


     <div id="video-content">
        <iframe width="1000" height="600" src="https://www.youtube.com/embed/aPBdErUaihw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>


    <div id="activity">
        <h2>Share your <span>impressions</span></h2>
        <div class="fade activity-content" id="activity1" data="1">
            <div>
                <h3>Skydiving</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet, consectetur nobis animi
                    illo vero aperiam minima odit necessitatibus quis, expedita doloremque reiciendis adipisci 
                    eligendi, architecto ipsa soluta unde tempora! Dicta neque laudantium labore accusamus doloremque, 
                    autem libero itaque, officiis rerum temporibus nobis ipsa quos nesciunt omnis, possimus magnam 
                    molestias repellendus.</p>
            </div>
        </div>
        <div class="fade activity-content" id="activity2" data="2">
            <div>
                <h3>Mountaineering</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet, consectetur nobis animi
                illo vero aperiam minima odit necessitatibus quis, expedita doloremque reiciendis adipisci 
                eligendi, architecto ipsa soluta unde tempora! Dicta neque laudantium labore accusamus doloremque, 
                autem libero itaque, officiis rerum temporibus nobis ipsa quos nesciunt omnis, possimus magnam 
                molestias repellendus.</p>
            </div>
        </div>
        <div class="fade activity-content" id="activity3" data="3">
            <div>
                <h3>Diving</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet, consectetur nobis animi
                    illo vero aperiam minima odit necessitatibus quis, expedita doloremque reiciendis adipisci 
                    eligendi, architecto ipsa soluta unde tempora! Dicta neque laudantium labore accusamus doloremque, 
                    autem libero itaque, officiis rerum temporibus nobis ipsa quos nesciunt omnis, possimus magnam 
                    molestias repellendus.</p>
            </div>
        </div>
        <div class="fade activity-content" id="activity4" data="4">
            <div>
                <h3>Classic hiking</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet, consectetur nobis animi
                    illo vero aperiam minima odit necessitatibus quis, expedita doloremque reiciendis adipisci 
                    eligendi, architecto ipsa soluta unde tempora! Dicta neque laudantium labore accusamus doloremque, 
                    autem libero itaque, officiis rerum temporibus nobis ipsa quos nesciunt omnis, possimus magnam 
                    molestias repellendus.</p>
            </div>
        </div>
        <div class="fade activity-content" id="activity5" data="5">
            <div>
                <h3>Rafting</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet, consectetur nobis animi
                    illo vero aperiam minima odit necessitatibus quis, expedita doloremque reiciendis adipisci 
                    eligendi, architecto ipsa soluta unde tempora! Dicta neque laudantium labore accusamus doloremque, 
                    autem libero itaque, officiis rerum temporibus nobis ipsa quos nesciunt omnis, possimus magnam 
                    molestias repellendus.</p>
            </div>
        </div>
        <div class="fade activity-content" id="activity6" data="6">
            <div>
                <h3>Road trip</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet, consectetur nobis animi
                    illo vero aperiam minima odit necessitatibus quis, expedita doloremque reiciendis adipisci 
                    eligendi, architecto ipsa soluta unde tempora! Dicta neque laudantium labore accusamus doloremque, 
                    autem libero itaque, officiis rerum temporibus nobis ipsa quos nesciunt omnis, possimus magnam 
                    molestias repellendus.</p>
            </div>
        </div>
        

        <div style="text-align:center">
            <span class="active dot" data="1"></span> 
            <span class="dot" data="2"></span> 
            <span class="dot" data="3"></span> 
            <span class="dot" data="4"></span> 
            <span class="dot" data="5"></span> 
            <span class="dot" data="6"></span> 
        </div> 
    </div>


    <div id="gallery">
        <h2>Our Photos</h2>
        <div>
            <img src="../img/gallery/1.jpg" id="img"> </img> <br />
            <div id="arrow">
                <div onClick="javascript: left_arrow()"><img id="left-arrow" src="../img/arrow.png" /> </div>
                <div onClick="javascript: right_arrow()"><img id="right-arrow" src="../img/arrow.png"/></div>
            </div>
        </div>
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

    <script src="script/script.js"></script>
    <script src="script/ajax.js"></script>
    <script src="script/LoginScript.js"></script>
    <script src="/script/logout.js"></script>
</body>
</html>