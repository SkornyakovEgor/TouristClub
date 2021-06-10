<?php

require_once 'core/config.php';

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name_comments = $_POST['name_comments'];
$theme_comments = $_POST['theme_comments'];
$comments = $_POST['comment_comments'];
$date_comments = date('Y.m.d H:i:s');

if ($name_comments !='' && $comments!=''){
    $sql = "INSERT INTO comments (name_comments, theme_comments, comment_comments, date_comments) VALUES ('$name_comments', '$theme_comments', '$comments', '$date_comments')";
    if ($conn->query($sql)){
        echo 1;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/forum.css">
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
                    <li id="activePage"><a href="Forum.php">Forum</a></li>
                    <li><a href="Contacts.php">Contacts</a></li>
                    <?php if ( !isset($_COOKIE['email']) OR trim($_COOKIE['email']) == ''): ?>
                        <li><a href="#" class="modal-show" data-modal="#sign-in">Account</a></li>
                    <?php else: ?>
                        <li><a href="cabinet.php" >Account</a></li>
                    <?php endif; ?>
                </ul>
            </div>

           <?php if ( !isset($_COOKIE['email']) OR trim($_COOKIE['email']) == ''): ?>
                <div class="entrance">
                    <button class="modal-show" data-modal="#sign-in">Log In</button>
                    <button class="modal-show" data-modal="#sign-up">Sign Up</button>
                </div>
            <?php else: ?>
                <div class="entrance">
                    <button class="logout" data-modal="#sign-up">Log Out</button>
                </div>
            <?php endif; ?>
            <!--<div id="burger"><a href="javascript:void(0);">&#9776</a></div> -->
        </div>
        <div id="icon">
            <button >&#9776</button>
        </div>


        <div id="main-title">
            <h1><span id="h1Green">Active Life</span> Forum</h1>
        </div>

        <p>Welcome to the friendliest forum ever</p>

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
                <input type="text" name="name" id="signup-name" placeholder="Name" value="">
                <input type="password" name="pass" id="signup-pass" placeholder="Password" value="">
                <input type="text" name="email" id="signup-email" placeholder="Email" value="">
                <input type="text" name="birthday" id="signup-birthday" placeholder="Birthday" value="">
                <div id="choose_your_sex">Sex:
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

    <div class="comments-content">
        <div id="message-block">
            <?php 
                if ( !isset($_COOKIE['email']) OR trim($_COOKIE['email']) == ''): ?>
                <center>
                    <h3>To leave a comment, you need to log in</h3>
                    <button class="modal-show" data-modal="#sign-in">Log In</button>
                </center>
            <?php else: ?>
                <form action="" method="POST">
                    <p>Send from:</p>
                    <input name="name_comments" value="name" id="forum-name" type="text">
                    <p>Theme:</p>
                    <select name="theme_comments" id="choose_theme" type="text">
                        <option disabled selected>Select a topic for discussion</option>
                        <option value="Tips-for beginners">Tips for beginners</option>
                        <option value="Where to go?">Where to go?</option>
                        <option value="Looking for a partner">Looking for a partner</option>
                    </select>
                    <textarea name="comment_comments" placeholder="Enter your comment" type="text"></textarea>
                    <div>
                        <button class="submit-button" type="submit">Send</button>
                    </div>
                </form>
            <?php endif; ?>
        </div>

        <div class="accordionWrapper">
            <div class="accordionItem open">
                <h2 class="accordionItemHeading">Tips for beginners</h2>
                <div class="accordionItemContent">
                    <?php
                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    $conn->set_charset("utf8");
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    $comments = "SELECT name_comments, theme_comments, comment_comments, date_comments FROM comments WHERE theme_comments = 'Tips for beginners' ORDER BY date_comments DESC";
                    $result = $conn->query($comments);
                    $allComments = [];
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc())
                        {
                            echo 
                            '<div id="comments-content">
                                <div class="message-from-forum">
                                    <div><h4>'.$row['name_comments'].'</h4> <h4 id="date-color"> '.$row['date_comments'].'</h4> </div>
                                    <p>'.$row['comment_comments'].'</p>
                                </div> 
                            </div>';
                        }
                    } else {
                        echo "0";
                    }
                    $conn->close();
                    ?>
                </div>
            </div>

            <div class="accordionItem close">
                <h2 class="accordionItemHeading">Where to go?</h2>
                <div class="accordionItemContent">
                    <?php
                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    $conn->set_charset("utf8");
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    $comments = "SELECT name_comments, theme_comments, comment_comments, date_comments FROM comments WHERE theme_comments = 'Where to go?' ORDER BY date_comments DESC";
                    $result = $conn->query($comments);
                    $allComments = [];
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc())
                        {
                            echo 
                            '<div id="comments-content">
                                <div class="message-from-forum">
                                    <div><h4>'.$row['name_comments'].'</h4> <h4 id="date-color"> '.$row['date_comments'].'</h4> </div>
                                    <p>'.$row['comment_comments'].'</p>
                                </div> 
                            </div>';
                        }
                    } else {
                        echo "0";
                    }
                    $conn->close();
                    ?>
                </div>
            </div>

            <div class="accordionItem close">
                <h2 class="accordionItemHeading">Looking for a partner</h2>
                <div class="accordionItemContent">
                    <?php
                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    $conn->set_charset("utf8");
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    $comments = "SELECT name_comments, theme_comments, comment_comments, date_comments FROM comments WHERE theme_comments = 'Looking for a partner' ORDER BY date_comments DESC";
                    $result = $conn->query($comments);
                    $allComments = [];
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc())
                        {
                            echo 
                            '<div id="comments-content">
                                <div class="message-from-forum">
                                    <div><h4>'.$row['name_comments'].'</h4> <h4 id="date-color"> '.$row['date_comments'].'</h4> </div>
                                    <p>'.$row['comment_comments'].'</p>
                                </div> 
                            </div>';
                        }
                    } else {
                        echo "0";
                    }
                    $conn->close();
                    ?>
                </div>
            </div>
        </div>
    </div>
    <hr>

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
            <div class="any-bar">
            </div>
        </div>
    </footer>


    <script src="script/ajax.js"></script>
    <script src='/script/forum-data.js'></script>
    <script src="script/script.js"></script>
    <script src="script/LoginScript.js"></script>
    <script src="/script/logout.js"></script>
</body>
</html>

