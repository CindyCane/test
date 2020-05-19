<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="icon" href="assets/favicon.ico">
    <link rel="stylesheet" href="./css/slick.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Charisma</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center no-gutters logoWrapper">
            <img class="col-5 col-sm-4 col-md-2" alt="Charisma Logo" src="./assets/logo.png">
        </div>
    </div>

    <div class="container-fluid noPadding">
        <div class="row justify-content-center align-items-center no-gutters heroWrapper">
            <div class="no-gutters heroSubtitles">
                <h3>Charisma</h3>
            </div>
            <div class="heroTitleWrapper">
                <div class="heroSlider">
                    <img alt="Hero Image" src="assets/slider1.jpg">
                    <img alt="Hero Image" src="assets/slider2.jpg">
                    <img alt="Hero Image" src="assets/slider3.jpg">
                    <img alt="Hero Image" src="assets/slider4.jpg">
                    <img alt="Hero Image" src="assets/slider5.jpg">
                </div>
                <div class="heroTitleInfoWrapper">
                    <h1 class="heroTitle">Life on the park.</h1>
                    <button class="heroButton">Register Now</button>
                </div>
            </div>
            <div class="no-gutters heroSubtitles">
                <h3 class="lightGreen">On the park</h3>
            </div>
        </div>
    </div>
    <div class="mainWrapper">
        <div class="container-fluid noPadding">
            <div class="row justify-content-center align-items-center no-gutters mainTextWrapper">
                <div class="col-9 col-md-4 offset-md-1 mainTextLeftWrapper">
                    <h2 class="col-md-12 offset-md-1 mainTextLeftTitle">the way<br>to live.</h2>
                    <h3 class="col-md-12 offset-md-1 mainTextLeftSubtitle">PHASE 2 - CONDOS AT VAUGHAN MILLS</h3>
                    <p class="col-md-12 offset-md-1 mainTextLeftParagraph">Alluring, refined and perfectly positioned – Charisma On the Park presents condo living that redefines what a true new home experience is all about. Located at Jane and Rutherford, at the centre of all Vaughan has to offer, Charisma literally puts you on the doorstep of shops, restaurants and entertainment. The comforts of home have never been so complete – outdoor pool, bocce courts, party rooms, a theatre and so much more. Experience life on the park at Charisma. Register today to receive the latest updates.</p>
                </div>
                <div class="col-9 col-md-6 offset-md-1 no-gutters mainTextRightWrapper ">
                    <div class="col-md-8 no-gutters">
                        <img class="mainTextRightImage" alt="Condo" src="./assets/rendering.jpg">
                        <div class="row justify-content-center align-items-center no-gutters">
                            <h3 class="mainTextRightTitle">Coming<br>Spring 2019</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="formWrapper">
            <h3 class="formTitle">Register</h3>
            <form class="form container-fluid noPadding" name="form" method="post">
                <div class="row justify-content-center align-items-center no-gutters formTop">
                    <input type="text" class="col-9 col-md-4 formInput formInputFirstName" placeholder="First Name" name="first_name">
                    <input type="text" class="col-9 col-md-4 formInput formInputLastName" placeholder="Last Name" name="last_name">
                    <input type="text" class="col-9 col-md-4 formInput formInputEmail" placeholder="Email Address" name="email">
                    <input type="text" class="col-9 col-md-4 formInput formInputPhone" placeholder="Phone Number" name="phone">
                    <input type="text" class="col-9 col-md-4 formInput formInputCity" placeholder="City" name="city">
                    <input type="text" class="col-9 col-md-4 formInput formInputPostal" placeholder="Postal Code" name="postal">
                </div>
                <div class="formBottom">
                    <h3 class="formSubtitle">I am intrested in...</h3>
                    <div class="row align-items-center no-gutters formGroup">
                        <label class="formLabel">Unit Size</label>
                        <input type="text" class="formBottomInput formInputUnitSize" placeholder="" name="unit_size">
                    </div>
                    <div class="row align-items-center no-gutters formGroup">
                        <label class="formLabel">How did you hear about us?</label>
                        <input type="text" class="formBottomInput formInputHearAbout" placeholder="" name="hear_about">
                    </div>
                    <div class="row align-items-center no-gutters formGroup">
                        <label class="formLabel">Price Range</label>
                        <input type="text" class="formBottomInput formInputPrice" placeholder="" name="price">
                    </div>
                    <div class="row align-items-center no-gutters formGroupRadio">
                        <label class="formLabel">Are you a broker?</label>
                        <label class="formRadioLabel">
                            <input type="radio" class="formRadio formRadioIsBroker" name="is_broker" value="Yes">
                            <span class="formRadioReal"></span>
                        </label>
                        <label class="formRadioLabelText">Yes</label>
                        <label class="formRadioLabel">
                            <input type="radio" class="formRadio formRadioIsBroker" name="is_broker" value="No">
                            <span class="formRadioReal"></span>
                        </label>
                        <label class="formRadioLabelText">No</label>
                    </div>
                </div>
                <div class="formGroupCheckbox">
                    <label class="formCheckboxLabel">
                        <input type="checkbox" class="formCheckbox formRadioCASL" name="casl" value="Yes">
                        <span class="formCheckboxReal"></span>
                    </label>
                    <label class="FormCheckboxText">In accordance with Canadian Anti-Spam Legislation, I give my consent to receive electronic communications from Greenpark Group regarding: upcoming communities, current communities, leasing opportunities, announcements, invitations, events, promotions and all other related electronic communications.</label>
                </div>
                <h3 class="formResult"></h3>
                <input type="button" name="submit" class="formSumbit" value="Submit">
            </form>
        </div>
    </div>
    <footer>
        <div class="row justify-content-center align-items-center no-gutters">
            <img class="col-4 col-sm-3 col-md-2 footerLogo" alt="50 Greenpark Group Logo" src="./assets/Greenpark-Group.png">
            <div class="col-4 col-sm-3 col-md-2 footerSocial">
                <a class="footerSocialLink" href="https://www.instagram.com/" target="_blank">
                    <img class="footerSocialIcon" alt="Instagram" src="./assets/instagram.png">
                </a>
                <a class="footerSocialLink" href="https://www.facebook.com/" target="_blank">
                    <img class="footerSocialIcon" alt="Facebook" src="./assets/facebook.png">
                </a>
                <a class="footerSocialLink" href="https://twitter.com/" target="_blank">
                    <img class="footerSocialIcon" alt="Twitter" src="./assets/twitter.png">
                </a>
                <a class="footerSocialLink" href="https://www.google.com/" target="_blank">
                    <img class="footerSocialIcon" alt="Google Plus" src="./assets/gplus.png">
                </a>
            </div>
        </div>
        <p class="footerParagraph">© 2017 Greenpark Holdings Ltd. Greenpark is a registered trademark of Greenpark Holdings Ltd. All Rights Reserved.<br>Prices and specifications subject to change without notice. E. &amp; O.E. Brokers protected. Privacy Policy / Accessibility</p>
    </footer>
    <div class="container-fluid hide">
        <div class="row shadowBoxWrapper">
            <div class="col-10 col-sm-10 col-md-6 no-gutter shadowBox">
                <img class="shadowBoxClose" alt="Close" src="./assets/close.svg">
                <div class="shadowBoxCenter">
                    <img class="shadowBoxCheckMark" alt="Close" src="./assets/checkMark.svg">
                    <h3 class="shadowBoxTitle">Sucess!</h3>
                    <h3 class="shadowBoxMessage">You have sucessfully registered for Charisma on the Park.</h3>
                    <h3 class="shadowBoxButton">Close</h3>
                </div>
            </div>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="js/slick.min.js"></script>
    <script>
        $(window).on('load', function() {
            $("body").fadeIn(400);

            $('.heroSlider').slick({
                autoplay: true,
                autoplaySpeed: 4000,
                speed: 300,
                dots: true,
                arrows: false,
                infinite: true,
                slidesToShow: 1,
                fade: true,
                cssEase: 'linear',
                pauseOnFocus: false,
                pauseOnHover: false,
            });
        });

        $(document).ready(function() {
            $(".heroButton").on('click', function() {
                $('html, body').animate({
                    scrollTop: $(".formWrapper").offset().top
                }, 400);
            })

            $('.shadowBoxClose').on('click', function() {
                $("html").css("overflow-y", "visible");
                $(".hide").fadeOut(400)
            })

            $('.shadowBoxButton').on('click', function() {
                $("html").css("overflow-y", "visible");
                $(".hide").fadeOut(400)
            })

            $('.formSumbit').on('click', function() {
                $('.formInput, .formBottomInput').css({
                    "border": "1px solid #9e9e99"
                });

                var first_name = $('.formInputFirstName').val();
                var last_name = $('.formInputLastName').val();
                var email = $('.formInputEmail').val();
                var phone = $('.formInputPhone').val();
                var city = $('.formInputCity').val();
                var postal = $('.formInputPostal').val();
                var unit_size = $('.formInputUnitSize').val();
                var hear_about = $('.formInputHearAbout').val();
                var price = $('.formInputPrice').val();
                var is_broker = $('.formRadioIsBroker:checked').val();
                var casl = $('.formRadioCASL:checked').val();

                function messageShow(message) {
                    $(".formResult").hide();
                    $(".formResult").text(message);
                    $(".formResult").fadeIn(400);
                }

                if (first_name === "" || last_name === "" || email === "" || phone === "" || city === "" || postal === "" || unit_size === "" || hear_about === "" || price === "" || is_broker == undefined) {
                    messageShow("Please fill out all fields")
                } else if (casl == undefined) {
                    messageShow("You must agree with the Canadian Anti-Spam Legislation")
                } else if (/^[a-zA-Z- ]*$/.test(first_name) == false) {
                    $('.formInputFirstName').css({
                        "border": "1px solid #ff0000"
                    });
                    messageShow("First Name can only contain letters")
                } else if (/^[a-zA-Z- ]*$/.test(last_name) == false) {
                    $('.formInputLastName').css({
                        "border": "1px solid #ff0000"
                    });
                    messageShow("Last Name can only contain letters")
                } else if (/(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))/.test(email) == false) {
                    $('.formInputEmail').css({
                        "border": "1px solid #ff0000"
                    });
                    messageShow(email + " is not a valid email")
                } else if (/^[a-zA-Z0-9-() ]*$/.test(phone) == false || phone.replace(/[^0-9]/g, "").length <= 7) {
                    $('.formInputPhone').css({
                        "border": "1px solid #ff0000"
                    });
                    messageShow(phone + " is not a vaild phone number")
                } else if (/^[a-zA-Z- ]*$/.test(city) == false) {
                    $('.formInputCity').css({
                        "border": "1px solid #ff0000"
                    });
                    messageShow("City can only contain letters")
                } else if (/^[A-Za-z]\d[A-Za-z][ -]?\d[A-Za-z]\d$/.test(postal) == false) {
                    $('.formInputPostal').css({
                        "border": "1px solid #ff0000"
                    });
                    messageShow(postal + " is not a vaild postal code")
                } else if (/^[a-zA-Z0-9-(). ]*$/.test(unit_size) == false) {
                    $('.formInputUnitSize').css({
                        "border": "1px solid #ff0000"
                    });
                    messageShow("Unit size can only contain letters and numbers")
                } else if (/^[a-zA-Z0-9-(). ]*$/.test(hear_about) == false) {
                    $('.formInputHearAbout').css({
                        "border": "1px solid #ff0000"
                    });
                    messageShow("Hear about can only contain letters and numbers")
                } else if (/^[a-zA-Z0-9-().$ ]*$/.test(price) == false) {
                    $('.formInputPrice').css({
                        "border": "1px solid #ff0000"
                    });
                    messageShow("Price range can only contain letters and numbers")
                } else {
                    $.ajax({
                        url: "insert.php",
                        type: "post",
                        data: $(".form").serialize(),
                        success: function(e) {
                            if (e == "success") {
                                $("html").css("overflow-y", "hidden");
                                $(".formResult").hide();
                                $('.formInput, .formBottomInput').css({
                                    "border": "1px solid #9e9e99"
                                });
                                $(".form")[0].reset();
                                $(".hide").fadeIn(400)
                            } else {
                                $('.formInput, .formBottomInput').css({
                                    "border": "1px solid #9e9e99"
                                });
                                messageShow(e)
                            }

                        }
                    })
                }

            });
        });

    </script>
</body>

</html>
