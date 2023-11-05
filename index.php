<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Слайдер JS</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <div id="viewport">
        <div class="top">
            <img src="./img/home.png" class="home-btn" alt="" onclick="firstSlide()">
            <p>Project</p>
        </div>
        <div class="bottom">
            <img src="./img/logo.png" alt="">
        </div>
        <div class="slider">
            <div class="slide">
                <div class="slide-content"> 
                    <img src="./img/slide_1/pink_sperm_1.png" class="slide-image slide1-pink-prerm">
                    <img src="./img/slide_1/bakti_1.png" class="slide-image slide1-bakti1">
                    <img src="./img/slide_1/bakti_2.png" class="slide-image slide1-bakti2">
                    <img src="./img/slide_1/bakti_3.png" class="slide-image slide1-bakti3">
                    <img src="./img/slide_1/bakti_4.png" class="slide-image slide1-bakti4">
                    <p class="small-caption">Привет,</p>
                    <p class="main-text">Это <b>не</b> коммерческое задание</p>
                    <a href="#">
                        <img src="./img/slide_1/btn.png" class="button" onclick="nextSlide()" alt="">
                    </a>
                </div>
                <img src="./img/slide_1/bg_1.png" alt="">
            </div>
            <div class="slide">
                <img src="./img/slide_2/layer_1.png" class="fullslide-img layer1" alt="">
                <img src="./img/slide_2/layer_2.png" class="fullslide-img layer2" alt="">
                <img src="./img/slide_2/layer_3.png" class="fullslide-img layer3" alt="">
                <img src="./img/slide_2/layer_4.png" class="fullslide-img layer4" alt="">
                <img src="./img/slide_2/layer_5.png" class="fullslide-img layer5" alt="">
                <div class="slide-content">
                    <p class="small-caption">
                        Текст<br>сообщения</p>
                    <div class="scrollbar">
                        <img src="./img/slide_2/btn.png">
                    </div>
                    <div class="scroll-text">
                        <div>
                            <p><b>Lorem ipsum dolor sit amet</b>, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio eeleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. </p>
                            <p>Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.</p>
                        </div>
                    </div>
                </div> <img src="./img/slide_2/bg_2.png" alt=""> </div>
            <div class="slide">
                <div id="popup-background"></div>
                <div class="slide-content">
                    <img src="./img/slide_3/1.png" class="slide-image slide3-circle1">
                    <img src="./img/slide_3/2.png" class="slide-image slide3-circle2">
                    <img src="./img/slide_3/3.png" class="slide-image slide3-circle3">
                    <img src="./img/slide_3/4.png" class="slide-image slide3-circle4">
                    <img src="./img/slide_3/5.png" class="slide-image slide3-circle5">
                    <img src="./img/slide_3/6.png" class="slide-image slide3-circle6">
                    <img src="./img/slide_3/7.png" class="slide-image slide3-circle7">
                    <img src="./img/slide_3/8.png" class="slide-image slide3-circle8">
                    <img src="./img/slide_3/bottle_1.png" class="slide-image slide3-bottle">
                    <div class="first-inner-block">
                        <p class="small-caption">Ключевое сообщение</p>
                        <p class="main-text">Brend<b>XY</b></p>
                    </div>
                    <div class="second-inner-block">
                        <div class="first-column">
                            <div> <img src="./img/slide_3/icon_2.png" clas="icon" alt="">
                                <p>Ehicula ipsum a arcu cursus vitae. Eu non diam phasellus vestibulum lorem sed risus ultricies</p>
                            </div>
                        </div>
                        <div class="second-column">
                            <div> <img src="./img/slide_3/icon_1.png" clas="icon" alt="">
                                <p>A arcu cursus<br>vitae</p>
                            </div>
                            <a href="#">
                                <img src="./img/slide_3/btn.png" class="button" onclick="showPopup()" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div id="popup">
                    <p class="popup-subheader">Преимущества</p>
                    <p class="popup-header">Brend<b>XY</b></p>
                    <div class="popup-content">
                        <a href="#" class="popup-close" onclick="hidePopup()"></a>
                        <div class="popup-slider">
                            <div class="popup-slide first active">
                                <ol>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                                    <li>Faucibus pulvinar elementum integer enim</li>
                                    <li>Faucibus pulvinar elementum integer enim</li>
                                </ol>
                            </div>
                            <div class="popup-slide second hide">
                                <ol style="--start:4" start="4">
                                    <li>Mi bibendum neque egestas congue quisque egestas diam</li>
                                    <li>Venenatis lectus magna fringilla urna</li>
                                    <li>Venenatis lectus magna fringilla urna</li>
                                </ol>
                            </div>
                        </div>
                        <div class="popup-controllers">
                            <i class="arrow left" onclick="showSlide('first','second')"></i>
                            <span class="dot first active" onclick="showSlide('first','second')"></span>
                            <span class="dot second" onclick="showSlide('second','first')"></span>
                            <i class="arrow right" onclick="showSlide('second','first')"></i>
                        </div>
                    </div>
                </div>
                <img src="./img/slide_3/bg_3.png" alt="">
            </div>
        </div>
    </div>
    <script src="./script.js"></script>
</body>
</html>
