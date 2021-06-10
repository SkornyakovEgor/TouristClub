<?php
    //var_dump($_COOKIE);
    if( !isset($_COOKIE['email']) OR trim($_COOKIE['email']) == ''){
        header("location: index.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Active Life Account</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/account.css">
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
                    <li><a href="Contacts.php">Contacts</a></li>
                    <li id="activePage"><a href="cabinet.php" >Account</a></li>
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
    </header>

    <div id="accountcontent">
        <div id="information">
            <h1>Club Member Page</h1>
            <form>
                <div id="user-data">
                    <div id="data1">
                            <label class="active1" for="signup-name">Name:</label>
                            <input value="name" id="signup-name" type="text">
                    </div>
                    <div id="data5">
                            <label class="active1" for="signup-nickname">Nickname:</label>
                            <input placeholder="Enter your nickname" value="nickname" id="signup-nickname" type="text">
                    </div>
                    <div id="data2">
                        <label class="active1" for="signup-email">Email:</label>
                        <input value="email" id="signup-email" type="text">
                    </div>
                    <div id="data3">
                        <label class="active1" for="signup-birthday">Birthday:</label>
                        <input value="birthday" id="signup-birthday" type="text"> 
                    </div>
                    <div id="data4">
                        <label class="active1" for="signup-pass" >New password:</label>
                        <input type="password" value="" id="signup-pass" type="text">
                    </div>
                </div>

               <div id="user-data2">
                    <div id="choose-sex">
                        <p>
                            <label class="radio">
                                <input class="sex" name="sex" type="radio" value="male"/>
                                <span class="radio__text">Male</span>
                            </label>
                        </p>
                        <p>
                            <label class="radio">
                                <input class="sex" name="sex" type="radio" value="female"/>
                                <span class="radio__text">Female</span>
                            </label>
                        </p>
                        <p>
                            <label class="radio">
                                <input class="sex" name="sex" type="radio" value="other"/>
                                <span class="radio__text">Other</span>
                            </label>
                        </p>
                    </div>
    
                    <div id="update-button">
                        <button id="signup-submit">Update</button>
                    </div>
               </div>
            </form>
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


    <script src="script/ajax.js"></script>

    <script src="script/script.js"></script>
    <script src="script/get_user_data.js"></script>
    <script src="script/logout.js"></script>
</body>
</html>
