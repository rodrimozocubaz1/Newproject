<!DOCTYPE html>
<html>
    <head>
        <title>ISC Control | Login</title>
        <script src="script/variables.js" type="text/javascript"></script>
        <meta name="viewport" content= "width=device-width, user-scalable=no">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->

        <script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script>
        <script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script>
        <script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'>

        </script><meta charset='UTF-8'><meta name="robots" content="noindex">
        <link rel="shortcut icon" type="image/x-icon" href="img/logo.png" />
        <link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" />
        <link rel="canonical" href="https://codepen.io/dpinnick/pen/LjdLmo?limit=all&page=21&q=service" />

        <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <style>
            .container_alert{
                width: 100%; 
                position: fixed; 
                z-index: 99999999;
                top: 10px;
                left: 10px;
            }

            .container_alert .error_alert{
                width: 297px;
                background-color: #af284c;
                border: 1px solid #8a1636;
                color: white;
                border-radius: 8px;
                text-align: left;
                padding-top: 5px;
                padding-bottom: 5px;
                padding-left: 8px;
                padding-right: 8px;
                font-size: 13px;
            }

            .container_alert .ok_alert{
                width: 297px;
                background-color: #08a808;
                border: 1px solid green;
                color: white;
                border-radius: 8px;
                text-align: left;
                padding-top: 5px;
                padding-bottom: 5px;
                padding-left: 8px;
                padding-right: 8px;
                font-size: 13px;
            }
        </style>
    </head>
    <body>

        <div class="container_alert" id="container_alert">

        </div>
        <!-- LOGIN MODULE -->
        <div class="login">
            <div class="wrap">
                <!-- TOGGLE -->
                <div id="toggle-wrap">
                    <div id="toggle-terms">
                        <div id="cross">
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>

                <!-- RECOVERY -->
                <!--                <div class="recovery">
                                    <h2>Password Recovery</h2>
                                    <p>Enter either the <strong>email address</strong> or <strong>username</strong> on the account and <strong>click Submit</strong></p>
                                    <p>We'll email instructions on how to reset your password.</p>
                                    <form class="recovery-form" action="" method="POST" >
                                        <input type="text" class="input" id="user_recover" placeholder="Enter Email or Username Here">
                                        <input type="submit" class="button" value="Submit">
                                    </form>
                                    <p class="mssg">An email has been sent to you with further instructions.</p>
                                </div>-->

                <!-- SLIDER -->
                <div class="content">
                    <!-- LOGO -->
                    <div class="logo">
                        <a href="#"><img src="img/logo-white.png" alt=""></a>
                    </div>
                    <!-- SLIDESHOW -->
                    <div id="slideshow">
                        <div class="one">
                            <h2><span>EVENTS</span></h2>
                            <p>Sign up to attend any of hundreds of events nationwide</p>
                        </div>
                        <div class="two">
                            <h2><span>LEARNING</span></h2>
                            <p>Thousands of instant online classes/tutorials included</p>
                        </div>
                        <div class="three">
                            <h2><span>GROUPS</span></h2>
                            <p>Create your own groups and connect with others that share your interests</p>
                        </div>
                        <div class="four">
                            <h2><span>SHARING</span></h2>
                            <p>Share your works and knowledge with the community on the public showcase section</p>
                        </div>
                    </div>
                </div>
                <!-- LOGIN FORM -->
                <div class="user">
                    <!-- ACTIONS
                    <div class="actions">
                        <a class="help" href="#signup-tab-content">Sign Up</a><a class="faq" href="#login-tab-content">Login</a>
                    </div>
                    -->
                    <div class="form-wrap">
                        <div style="text-decoration: none;">
                            <img src="img/cm2.png" width="200">
                        </div>

                        <!-- TABS -->
                        <div class="tabs">

                            <!--<h3 class="login-tab"><a class="log-in active" href="#login-tab-content"><span>Login<span></a></h3>-->

                        </div>
                        <!-- TABS CONTENT -->
                        <div class="tabs-content">
                            <!-- TABS CONTENT LOGIN -->
                            <div id="login-tab-content" class="active">
                                <form enctype="multipart/form-data" class="login-form" action="" method="POST" id="form-login">
                                    <input type="text" class="input" id="user" name="user" autocomplete="off" placeholder="Email or Username">
                                    <input type="password" class="input" id="pass" name="pass" autocomplete="off" placeholder="Password">
                                    <input type="checkbox" class="checkbox" checked id="remember_me">
                                    <label for="remember_me">Remember me</label>
                                    <input type="submit" class="button" value="Iniciar Sesion" id="btnlogin">
                                </form>
                            </div>
                            <!-- TABS CONTENT SIGNUP -->
                            <!--                                                <div id="signup-tab-content">
                                                                                <form class="signup-form" action="" method="post">
                                                                                    <input type="email" class="input" id="user_email" autocomplete="off" placeholder="Email">
                                                                                    <input type="text" class="input" id="user_name" autocomplete="off" placeholder="Username">
                                                                                    <input type="password" class="input" id="user_pass" autocomplete="off" placeholder="Password">
                                                                                    <input type="submit" class="button" value="Sign Up">
                                                                                </form>
                                                                                <div class="help-action">
                                                                                    <p>By signing up, you agree to our</p>
                                                                                    <p><i class="fa fa-arrow-left" aria-hidden="true"></i><a class="agree" href="#">Terms of service</a></p>
                                                                                </div>
                                                                            </div>-->
                        </div>
                    </div>
                </div>
            </div>

            <button style="border: 1px solid #2D515C; position: fixed;top: 485px;padding: 8px;background-color: #445c84; height: 100px;;border-radius: 50px;right: 80px;">
                <img src="img/logo-isotipo.png" style="width: 100px;">
            </button>


            <script src="script/login.js" type="text/javascript"></script>
            <script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
            <script src="script/script.js" type="text/javascript"></script>


    </body>
</html>