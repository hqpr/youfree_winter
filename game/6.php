<!DOCTYPE html>
<html>
<head>
    <title>YouFree.kz</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" rel="stylesheet" href="/css/style.css"/>
    <script type="text/javascript" src="/scripts/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="/scripts/jquery.cookie.js"></script>
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
            </div>
        </div>

    <div class="quiz six">
        <div class="number">6</div>
        <div class="question">
            Где устраивают вечеринки апре-ски?
        </div>
            <div class="answers">
                <div id="answer1">1000 человек</div>
                <div id="answer2">5000 человек</div>
                <div id="answer3">10 000 человек</div>
            </div>

        <div class="confirm">
            <a href="#"><img src="/images/confirm.png" alt=""/></a>
        </div>
        <div class="next">
            <a href="/game/7.php"><img src="/images/next.png" alt=""/></a>
        </div>

    </div>

    </div>

    <script>
        $(document).ready(function(){
            $('#answer1, #answer2, #answer3, #answer4').click(function(){
                $(this).parents('.answers').find('.selected').removeClass('selected');
                $(this).attr("class","selected");
                $('.confirm').css("visibility", "visible").click(function(){
                    function results(){
                        if ($('#answer4').hasClass('selected')) {
                            $('#answer4').removeClass('selected').addClass('correct');
                            $('.confirm').css("visibility", "hidden");
                            $('.next').css("visibility", "visible");
                            $('#answer1, #answer2, #answer3, #answer4').off("click");
                            $('.question').text('ВЕРНО!').addClass('res');

                            if($.cookie('vote')){
                                var vote = $.cookie('vote');
                                $.cookie('vote', parseInt(vote) + 1);
                            } else {
                                $.cookie('vote', 1);
                            }


                        } else {
                            $('.selected').removeClass('selected').addClass('wrong');
                            $('.confirm').css("visibility", "hidden");
                            $('.next').css("visibility", "visible");
                            $('#answer1, #answer2, #answer3, #answer4').off("click");
                            $('.question').text('НЕВЕРНО!').addClass('res')
                            $('#answer4').removeClass('selected').addClass('correct_was');
                        }
                    }
                    results();

                })
            })
        })
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