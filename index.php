<!DOCTYPE html>
<html>
<head>
    <title>YouFree.kz</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" rel="stylesheet" href="/css/style.css"/>

    <script type="text/javascript" src="/scripts/script.js"></script>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-8168527-26', 'youfree.kz');
        ga('send', 'pageview');

    </script>
</head>
<body>
    <div class="wrapper">
        <div class="top">
            <div class="logo">
                <a href="/"><img src="/images/logo.png" alt=""/></a>
            </div>
            <div class="buttons">
                <div id="register">
                    <a href="#" class="topopup"><img src="/images/register.png" alt=""/></a>
                </div>
                <div id="game">
                    <a href="/game.php"><img src="/images/game.png" alt=""/></a>
                </div>
            </div>
        </div>
        <div class="slider">

             <div id="slider" class="nivoSlider">
                 <a href="/surfing.php"><img src="images/b4.jpg" data-thumb="images/b4.jpg" alt="" data-transition="boxRainGrowReverse" /></a>
                 <a href="/party.php"><img src="images/b3.jpg" data-thumb="images/b3.jpg" alt="" data-transition="boxRainGrowReverse" /></a>
                 <a href="/cliff.php"><img src="images/b2.jpg" data-thumb="images/b2.jpg" alt="" data-transition="boxRainGrowReverse"  /></a>
                 <img src="images/b1.jpg" data-thumb="images/b1.jpg" alt="" data-transition="boxRainGrowReverse"  />
            </div>

        </div>
        <div class="toisland">
            <a href="/game.php"><img src="/images/toisland.png" alt=""/></a>
        </div>
    </div>
    <script type="text/javascript" src="/scripts/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="/scripts/jquery.nivo.slider.js"></script>
    <script type="text/javascript" src="/scripts/script.js"></script>
    <script type="text/javascript">
        $(window).load(function() {
            $('#slider').nivoSlider();
        });
    </script>


<!---->
        <div class="toPopup">
            <div class="close"></div>
            <span class="ecs_tooltip">Press Esc to close <span class="arrow"></span></span>
            <div id="popup_content">
                <!--<form onSubmit="ga('send', 'event', 'reg_form', 'submited', 'registration');" autocomplete="off" id="form" action="http://youwin.kz/accounts/register/" method="post" enctype="application/x-www-form-urlencoded;charset=UTF-8">-->
                <!--<form onSubmit="ga('send', 'event', 'reg_form', 'submited', 'registration');" autocomplete="off" id="form" action="http://127.0.0.1:8000/accounts/register/" method="post" enctype="application/x-www-form-urlencoded;charset=UTF-8">-->
                <?php include 'form.php' ?>
            </div>
            <div class="policy">
                Нажимая кнопку «Далее», Вы соглашаетесь с получением информации от youwin.kz любыми средствами связи.
            </div>
        </div>
        <div class="loader"></div>
        <div id="backgroundPopup"></div>
    </div>

<!---->


</body>
</html>