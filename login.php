<!DOCTYPE html>
<html>
    <head>
        <title>ISC Control | Login</title>
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
    </head>
    <body>
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
                <div class="recovery">
                    <h2>Password Recovery</h2>
                    <p>Enter either the <strong>email address</strong> or <strong>username</strong> on the account and <strong>click Submit</strong></p>
                    <p>We'll email instructions on how to reset your password.</p>
                    <form class="recovery-form" action="" method="post">
                        <input type="text" class="input" id="user_recover" placeholder="Enter Email or Username Here">
                        <input type="submit" class="button" value="Submit">
                    </form>
                    <p class="mssg">An email has been sent to you with further instructions.</p>
                </div>

                <!-- SLIDER -->
                <div class="content">
                    <!-- LOGO -->
                    <div class="logo">
                        <a href="https://www.facebook.com/InsiteSolucionesPeru/"><img src="img/logo-isotipo.png" alt=""></a>
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
                        <!-- TABS -->
                        <div class="tabs">
                            <h3 class="login-tab"><a class="log-in active" href="#login-tab-content"><span>Login<span></a></h3>
                                            <!--<h3 class="signup-tab"><a class="sign-up" href="#signup-tab-content"><span>Sign Up</span></a></h3>-->
                                            </div>
                                            <!-- TABS CONTENT -->
                                            <div class="tabs-content">
                                                <!-- TABS CONTENT LOGIN -->
                                                <div id="login-tab-content" class="active">
                                                    <form class="login-form" action="" method="post">
                                                        <input type="text" class="input" id="user_login" autocomplete="off" placeholder="Email or Username">
                                                        <input type="password" class="input" id="user_pass" autocomplete="off" placeholder="Password">
                                                        <input type="checkbox" class="checkbox" checked id="remember_me">
                                                        <label for="remember_me">Remember me</label>
                                                        <input type="submit" class="button" value="Iniciar Sesion">
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
                                            </div>

                                            <button style="border: 1px solid #2D515C; position: fixed;top: 485px;padding: 8px;background-color: #445c84; height: 100px;;border-radius: 50px;right: 80px;">
                                                <img src="img/cm2.png" style="width: 100px;">
                                            </button>

                                            <script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                            <script src="script/script.js" type="text/javascript"></script>

                                            <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
                                            <script>

            $(function () {
                $("#form-login").on("submit", function (e) {

                    var user = document.getElementById("user").value;
                    var pass = document.getElementById("pass").value;
                    e.preventDefault();
                    var f = $(this);
                    var formData = new FormData(document.getElementById("form-login"));
                    formData.append("user", user);
                    formData.append("pass", pass);
                    //formData.append(f.attr("name"), $(this)[0].files[0]);
                    $.ajax({
                        url: "./ws/ws-login.php",
                        type: "POST",
                        dataType: "json",
                        data: formData,
                        cache: false,
                        contentType: false,
                        processData: false,
                        dataType: 'json',
                        success: function (res) {
                            //alert(res);
                            var newmsg = "";
                            if (res['status'] == 'Error') {
                                newmsg = '<div id="mensaje" style="background-color: #db3d3d;color: #fff;padding: 10px;width: 280px;font-size: 13px;"><span onclick="cerrar_alert();" aria-hidden="true" style="margin-right: 10px;cursor: pointer;font-size: 20px;">&times;</span> ' + res['msg'] + '</div>';
                                $("#container-alert").html(newmsg);
                            } else {
                                window.location.href = "./index.php";
                            }
                        }
                    });
                });
            });
                                            </script>
                                            </body>
                                            </html>