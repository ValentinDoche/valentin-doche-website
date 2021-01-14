<?php
function admin_login(){ ?>
    <body>
        <video autoplay muted loop id="loginVideo">
            <source src="/admins/assets/video/login_video.mp4">
        </video>

        <div class="row center-screen center">
            <div class="col s12 m6 l4">
                <div class="card hoverable" style="padding: 20px">
                    <img src="/admins/assets/images/logo.png" width="75">
                    <form>
                        <div class="step1">
                            <div class="row">
                                <div class="input-field col s8 offset-s2">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="username" type="text" class="validate" required name="username">
                                    <label for="username">Username</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s8 offset-s2">
                                    <i class="material-icons prefix">vpn_key</i>
                                    <input id="password" type="password" class="validate" required name="password">
                                    <label for="password">Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="step2 hidden">
                            <div class="row">
                                <div class="input-field col s8 offset-s2">
                                    <i class="material-icons prefix">phonelink_lock</i>
                                    <input id="twofa" type="text" class="validate" required name="twofa">
                                    <label for="twofa">2FA</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <p id="status_login" style="color: red"> </p>
                            <button class="btn waves-effect waves-light" type="submit" name="action" id="submit">Login
                                <i class="material-icons right">login</i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?=admin_scripts()?>
        <script>
            $(document).ready(function () {
                $('#submit').click(function (e) {
                    e.preventDefault();

                    $.post(
                        '/api/login',
                        {
                            username : $("#username").val(),
                            password : $("#password").val(),
                            twofa: $("#twofa").val()
                        },

                        function (data) {
                            console.log(data)
                            if (data === 'OKStep1'){
                                $('.step1').addClass('hidden')
                                $('.step2').removeClass('hidden')
                                $('#status_login').text(" ")
                            }else if(data === 'success'){
                                document.location.pathname = '/admin'
                            }else {
                                $("#username").addClass('invalid')
                                $("#password").addClass('invalid')
                                M.toast({html: "Username or Password was incorrect ! <br> Please Retry", classes: 'red darken-1 rounded'})
                            }
                        }
                    )
                })
            })
        </script>
    </body>
    </html>
<?php
}