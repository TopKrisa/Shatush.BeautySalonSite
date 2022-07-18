<?

use App\Services\Router;

session_start();
if (isset($_SESSION["User"])) {
    Router::Redirect("/profile");
}

?>
<!DOCTYPE html>
<!-- === Coding by CodingLab | www.codinglabweb.com === -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


    <!--<title>Login & Registration Form</title>-->
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Montserrat', sans-serif;
    }

    .rabbit {
        position: absolute;
        top: 99%;
        left: 99%;
        transform: translate(-100%, -100%);
        margin-bottom: 30px;
        margin-right: 30px;
        width: 50px;
        height: 50px;
        fill: #fff
    }

    body {
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #262626;
    }

    .container {
        position: relative;
        max-width: 430px;
        width: 100%;
        background: #fff;
        border-radius: 2px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        margin: 0 20px;
    }

    .container .forms {
        display: flex;
        align-items: center;
        height: 440px;
        width: 200%;
        transition: height 0.2s ease;
    }

    .container .form {
        width: 50%;
        padding: 30px;
        background-color: #fff;
        transition: margin-left 0.18s ease;
    }

    .container.active .login {
        margin-left: -50%;
        opacity: 0;
        transition: margin-left 0.18s ease, opacity 0.15s ease;
    }

    .container .signup {
        opacity: 0;
        transition: opacity 0.09s ease;
    }

    .container.active .signup {
        opacity: 1;
        transition: opacity 0.2s ease;
    }

    .container.active .forms {
        height: 870px;
    }

    .container .form .title {
        position: relative;
        font-size: 27px;
        font-weight: 600;
    }

    .form .title::before {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        height: 3px;
        width: 30px;
        background-color: #ff006c;
        border-radius: 25px;
    }

    .form .input-field {
        position: relative;
        height: 50px;
        width: 100%;
        margin-top: 30px;
    }

    .input-field input {
        position: absolute;
        height: 100%;
        width: 100%;
        padding: 0 35px;
        border: none;
        outline: none;
        font-size: 16px;
        border-bottom: 2px solid #ccc;
        border-top: 2px solid transparent;
        transition: all 0.2s ease;
    }

    .input-field input:is(:focus, :valid) {
        border-bottom-color: #ff006c;
    }

    .input-field i {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        color: #999;
        font-size: 23px;
        transition: all 0.2s ease;
    }

    .input-field input:is(:focus, :valid)~i {
        color: #ff006c;
    }

    .input-field i.icon {
        left: 0;
    }

    .input-field i.showHidePw {
        right: 0;
        cursor: pointer;
        padding: 10px;
    }

    .form .checkbox-text {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 20px;
        color: #ff006c;
    }

    .form .checkbox-text .texts {
        color: #ff006c;
        font-weight: 700;
    }

    .checkbox-text .checkbox-content {
        display: flex;
        align-items: center;
        color: #ff006c;
    }

    .checkbox-content input {
        margin: 0 8px -2px 4px;
        accent-color: #ff006c;
    }

    .form .text {
        color: #333;
        font-size: 14px;
    }

    .form a.text {
        color: #ff006c;
        text-decoration: none;
    }

    .form a:hover {
        text-decoration: underline;
    }

    .form .button {
        margin-top: 35px;
    }

    .form .button input {
        border: none;
        color: #fff;
        font-size: 16px;
        font-weight: 500;
        letter-spacing: 1px;
        border-radius: 6px;
        background-color: #ff006c;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .button input:hover {
        background-color: #B1004C;
    }

    .form .login-signup {
        margin-top: 30px;
        text-align: center;
    }

    .example-2 .btn-tertiary {
        color: #555;
        padding: 0;
        line-height: 40px;
        margin: 0;
        display: block;
        border: 2px solid #ccc
    }

    .example-2 .btn-tertiary:hover,
    .example-2 .btn-tertiary:focus {
        color: #ff006c;
        ;
        border-color: #ff006c;
    }

    .example-2 .input-file {
        width: .1px;
        height: .1px;
        opacity: 0;
        overflow: hidden;
        position: absolute;
        z-index: -1
    }

    .example-2 .input-file+.js-labelFile {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        padding: 0 10px;
        cursor: pointer
    }

    .example-2 .input-file+.js-labelFile .icon:before {
        content: "\f093"
    }

    .example-2 .input-file+.js-labelFile.has-file .icon:before {
        content: "\f00c";
        color: #5AAC7B
    }

    .none {
        display: none;
    }

    @media screen and (max-width: 768px) {
        .rabbit {
            display: none;
        }

        .container.active {
            margin-top: 200px;

        }
    }
</style>

<body>

    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Авторизация</span>

                <form>
                    <div class="input-field">
                        <input type="text" name="email" id="email" placeholder="Введите E-mail" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" id="password" name="password" placeholder="Введите пароль" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">


                        <span class="texts none">Forgot password?</span>
                    </div>

                    <div class="input-field button">
                        <input type="submit" class="login-btn" value="Войти">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Не зарегестрировались?
                        <a href="#" class="text signup-link">Зарегестрируйтесь!</a>
                    </span>
                </div>
            </div>

            <!-- Registration Form -->
            <div class="form signup">
                <span class="title">Регистрация</span>
                <!-- action="/auth/register" enctype="multipart/form-data" method="POST" -->
                <form>
                    <div class="input-field">
                        <input type="text" placeholder="Введите имя" name="name" id="name" required>
                        <i class="uil uil-user"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Введите фамилию" name="lastname" id="name" required>
                        <i class="uil uil-user"></i>
                    </div>
                    <div class="input-field">
                        <input type="email" placeholder="Введите E-mail" id="email" name="emails" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="tel" placeholder="Введите телефон" class="art-stranger" id="phone" name="phone" required>
                        <i class="uil uil-phone"></i>
                    </div>
                    <div class="input-field">
                        <input type="date" placeholder="Введите дату рождения" id="birth" name="birth" required>
                        <i class="uil uil-calender"></i>

                    </div>
                    <div class="input-field" style="justify-content:center">
                        <div class="example-2">
                            <div class="form-group">
                                <input type="file" name="file" id="file" class="input-file" accept=".jpg,.jpeg,.png">
                                <label for="file" class="btn btn-tertiary js-labelFile" style="justify-content:center">

                                    <span class="js-fileName" style="margin-left: 100px;">Загрузить фото</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Введите пароль" id="password" name="passwords" required>
                        <i class="uil uil-lock icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" placeholder="Подтвердите пароль" id="confirms" name="confirms" required>
                        <i class="uil uil-lock icon"></i>

                    </div>


                    <div class="checkbox-text">
                        <span class="texts none">Forgot password?</span>
                    </div>

                    <div class="input-field button">
                        <input type="submit" class="register-btn" value="Зарегестрироваться">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Уже зарегестрированны?
                        <a href="#" class="text login-link">Войдите!</a>
                    </span>
                </div>
            </div>
        </div>

    </div>
    <a class="link" href="https://vk.com/pryanik228" target="_blank"><svg class="rabbit" version="1.2" viewBox="0 0 600 600">
            <path d="m 335.94313,30.576451 c -9.79312,-0.146115 -17.39091,4.439466 -17.39091,13.789758 0,11.508038 -2.91019,60.415461 1.40532,76.238951 4.31553,15.82355 21.58583,38.97215 34.51834,54.67597 10.06946,12.22726 4.34772,41.69626 4.34772,56.0813 0,14.38499 -2.89751,25.9107 -8.65153,25.9107 -5.75402,0 -14.35971,5.75217 -20.11373,11.50612 -5.75395,5.75402 -11.51588,12.95631 -18.70841,7.20229 -7.19251,-5.75402 -20.15388,-11.49441 -43.16987,-15.80992 -23.01609,-4.31551 -61.84129,-0.0234 -86.29583,8.60763 -24.45458,8.63104 -76.25857,56.11061 -90.643535,77.6882 -14.385056,21.5775 -15.799189,87.73247 -14.36068,97.80193 1.438509,10.06953 -2.908267,17.28255 -10.100778,8.65153 -7.192459,-8.63104 -12.911438,-4.30381 -12.911438,-4.30381 0,0 -7.202292,14.37045 -7.202292,21.56298 0,7.19244 2.854564,14.36068 2.854564,14.36068 0,0 -11.506099,8.65056 -11.506099,14.40458 0,5.75397 11.515881,15.83044 18.708391,24.46146 7.192546,8.63097 31.651182,25.89997 41.720624,24.46148 10.069543,-1.43851 28.775063,-0.0121 35.967573,4.3038 7.19253,4.31551 24.44687,10.06761 46.02443,11.5061 21.57752,1.43851 81.97845,5.75307 97.80193,5.75307 15.82357,0 20.1675,-2.86435 27.35996,-10.05688 7.19253,-7.19245 -5.78527,-15.84115 -10.10079,-25.9107 -4.31551,-10.06946 14.40363,-7.16912 20.15765,-8.60763 5.75402,-1.43849 21.59424,-11.5061 31.66376,-11.5061 10.06953,0 8.6165,10.05589 21.56298,15.80993 12.94654,5.75393 31.63939,24.43902 46.02443,27.31602 14.38497,2.87695 47.47173,0.0121 58.97979,-4.30381 11.50797,-4.31551 10.06946,-14.37044 0,-21.56297 -10.06955,-7.19244 -34.50663,-20.16742 -38.82214,-27.35994 -4.31551,-7.19246 -5.74329,-15.81969 1.44924,-23.01224 7.19251,-7.19252 14.35876,-4.30292 25.86678,-10.05685 11.50806,-5.75402 15.80992,-23.04354 15.80992,-33.11301 0,-10.06953 1.36928,-21.01352 5.75307,-27.31602 3.67345,-5.28128 5.10015,-22.13212 5.30499,-33.64009 0.21874,-12.28864 -5.29329,-15.24871 -9.60881,-22.44122 -4.31543,-7.19246 4.30285,-17.25917 10.05687,-17.25917 5.75402,0 31.65108,-4.33602 41.72062,-8.65153 10.06946,-4.31546 20.16744,-23.03273 27.35995,-31.66377 7.19246,-8.63095 1.41799,-27.31512 -8.65154,-33.06907 -10.06954,-5.75402 -10.07746,-21.59431 -18.70841,-31.66377 -8.63103,-10.06953 -18.68507,-31.62961 -27.31604,-38.82213 -8.63101,-7.19253 -28.77502,-12.95535 -35.96755,-12.95535 -7.19253,0 -11.50612,9e-4 -11.50612,-5.75306 0,-5.75402 -1.44924,-12.9203 -1.44924,-25.86678 0,-12.94655 -16.24344,-68.464566 -37.3729,-102.149659 -4.40799,-7.027282 -11.5581,-5.405316 -20.15765,-2.898485 -5.69412,1.659863 -8.60761,4.35564 -8.60761,23.056136 0,18.700566 -11.50515,-0.03133 -17.25917,-10.100794 -5.75403,-10.069512 -15.86265,-21.58444 -28.80918,-24.461458 -2.42749,-0.539415 -4.76669,-0.800692 -7.02665,-0.834399 z" id="rabbit"></path>

            <defs>
                <filter id="goo">
                    <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                    <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
                    <feBlend in="SourceGraphic" in2="goo" />
                </filter>
            </defs>

        </svg></a>


    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="assets/js/InputMask.js"></script>
    <script>
        $('.art-stranger').mask('+7(999)999-99-99');

        $.fn.setCursorPosition = function(pos) {
            if ($(this).get(0).setSelectionRange) {
                $(this).get(0).setSelectionRange(pos, pos);
            } else if ($(this).get(0).createTextRange) {
                var range = $(this).get(0).createTextRange();
                range.collapse(true);
                range.moveEnd('character', pos);
                range.moveStart('character', pos);
                range.select();
            }
        };


        $('input[type="tel"]').click(function() {
            $(this).setCursorPosition(4); // set position number
        });
    </script>

    <script src="assets/js/Validation.js"></script>
    <script lang="js">
        const container = document.querySelector(".container"),
            pwShowHide = document.querySelectorAll(".showHidePw"),
            pwFields = document.querySelectorAll(".password"),
            signUp = document.querySelector(".signup-link"),
            login = document.querySelector(".login-link");

        //   js code to show/hide password and change icon
        pwShowHide.forEach(eyeIcon => {
            eyeIcon.addEventListener("click", () => {
                pwFields.forEach(pwField => {
                    if (pwField.type === "password") {
                        pwField.type = "text";

                        pwShowHide.forEach(icon => {
                            icon.classList.replace("uil-eye-slash", "uil-eye");
                        })
                    } else {
                        pwField.type = "password";

                        pwShowHide.forEach(icon => {
                            icon.classList.replace("uil-eye", "uil-eye-slash");
                        })
                    }
                })
            })
        })

        // js code to appear signup and login form
        signUp.addEventListener("click", () => {
            container.classList.add("active");
        });
        login.addEventListener("click", () => {
            container.classList.remove("active");
        });
        (function() {

            'use strict';

            $('.input-file').each(function() {
                var $input = $(this),
                    $label = $input.next('.js-labelFile'),
                    labelVal = $label.html();

                $input.on('change', function(element) {
                    var fileName = '';
                    if (element.target.value) fileName = element.target.value.split('\\').pop();
                    fileName ? $label.addClass('has-file').find('.js-fileName').html(fileName) : $label.removeClass('has-file').html(labelVal);
                });
            });

        })();
    </script>

</body>

</html>