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

    <div id="about-club">
        <div id="about1">
            <img src="../img/about.png" alt="just a picture">
            <h2>One of the <span>best tourist clubs</span></h2>
            <p>"Active Life "is one of the best tourist associations around the world. Become a part of our big and friendly family. Share your impressions with the whole world!</p>
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
                <p>Skydiving is a free fall that lasts from the moment of jumping from the plane to the moment of opening the parachute. Initially, what is now called skydiving was an integral part of the parachute jump, because, opening the parachute too early, the skydiver risked being far from the planned landing site. It was only after some time that people noticed how pleasant the feeling of lightness in the whole body during a free fall is. They began to delay the moment of opening the parachute on purpose and so skydiving was born.</p>
            </div>
        </div>
        <div class="fade activity-content" id="activity2" data="2">
            <div>
                <h3>Mountaineering</h3>
                <p>Mountaineering is considered the most difficult and dangerous sport. To engage in it, you must have a sufficient level of physical and psychological training, as well as possess certain skills. The conquest of the mountains has always attracted a person. The sensations experienced at the top are incomparable to anything else. Therefore, mountaineering is practiced in all corners of the globe, where there are mountains.</p>
            </div>
        </div>
        <div class="fade activity-content" id="activity3" data="3">
            <div>
                <h3>Diving</h3>
                <p>Diving is diving and swimming under water in a special suit with special equipment that provides a person with the necessary air supply. During diving, you can thoroughly explore the sea floor, admire the underwater flora and fauna, and look into the caves. It is especially interesting to dive in places where there are ancient sunken ships, the remains of ancient cities and artifacts of past civilizations. Diving opens up amazing opportunities for a person not only to explore the underwater world, but also to learn how to interact with it.</p>
            </div>
        </div>
        <div class="fade activity-content" id="activity4" data="4">
            <div>
                <h3>Classic hiking</h3>
                <p>The hike is a journey with dynamic movement in remote areas from the places where people live. Such journeys are made for various purposes, such as educational or research purposes and tasks.Hiking trips can be performed on flat, mountainous terrain and water surface.Among the most popular and interesting wanderings, the following types of hiking trips can be distinguished: ski, mountain, water, etc.</p>
            </div>
        </div>
        <div class="fade activity-content" id="activity5" data="5">
            <div>
                <h3>Rafting</h3>
                <p>Rafting is called rafting on mountain rivers on inflatable raft boats. Rafts are practically unsinkable vessels, they easily pass through steep river rapids, shallow water or rapids due to the fact that there is simply nothing to break on the boat.The number of rowers on board can vary from two to eighteen people.
                Rafting is a fairly democratic type of extreme tourism. It is suitable for both trained athletes and beginners who have never held a paddle before.</p>
            </div>
        </div>
        <div class="fade activity-content" id="activity6" data="6">
            <div>
                <h3>Road trip</h3>
                <p>Autonomous travel is an expedition, an organized group car tour along a developed route with stops at key points and overnight stays in specially equipped cars. The expedition usually includes: five cars of participants and a sixth escort car. This is a great opportunity to visit new places and not get tired of the constant walking.</p>
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
                        <!-- <a href="https://www.youtube.com/user/touropia/videos"><i class="zmdi zmdi-youtube-play"></i></a> -->
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