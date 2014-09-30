<!DOCTYPE html>
<html>
<head>
    <title>YouFree.kz</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" rel="stylesheet" href="/css/style.css"/>
    <link rel="stylesheet" href="/css/jquery.jscrollpane.css" />

    <script type="text/javascript" src="/scripts/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="/scripts/jScrollPane/script/jquery.jscrollpane.min.js"></script>
    <script type="text/javascript" src="/scripts/jScrollPane/script/jquery.mousewheel.js"></script>
    <script type="text/javascript" src="/scripts/actions.js"></script>
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

    <div class="game_content">
        <div class="game_col">
            <h1>Проверь свои знания о зимнем отдыхе</h1>
            <p>Ответь на вопросы нашей викторины и узнай, как можно получить приз.</p>

            <div id="play">
                <a href="/game/1.php"><img src="/images/play.png" alt=""/></a>
            </div>

        </div>
    </div>

    </div>


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

    <script type="application/javascript">
        $(document).ready(function(){
            $('#form').submit(function( event ){
                if($('#mob').val() == ''||$('#last_name').val() == ''||$('#first_name').val() == ''||$('#email').val() == '') {
                    event.preventDefault();
                    $(this).append("<div class='warning'>Заполните обязательные поля</div>");
                }
                if($('#sex').val() == 'Выбери пол') {
                    event.preventDefault();
                    $(this).append("<div class='warning'>Заполните обязательные поля</div>");
                }

                var myLength = $("#mob").val().length;
                if(myLength!=10) {
                    event.preventDefault();
                    $(this).append("<div class='warning'>Заполните обязательные поля</div>");
                }

            });


                $('#email').keydown(function(){
                    this.value = this.value.replace(/[^a-zA-Z0-9-@-\\.]/g, '');
                });

            $('#email').focusout(function(){
                $('#email').filter(function(){
                    var emil=$('#email').val();
                    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                    if( !emailReg.test( emil ) ) {

                        $('#form').submit(function(e){
                            e.preventDefault();
                        });
                        $('#form').append("<div class='warning'>Заполните обязательные поля</div>");
                    }
                    else($('#form').unbind("submit"));
                })
            });

            $("#first_name").keydown(function() {
                this.value = this.value.replace(/[^а-яё]/i, "");

            });$("#last_name").keydown(function() {
                this.value = this.value.replace(/[^а-яё]/i, "");
            });

    $("#mob").keydown(function (e) {
        if (e.shiftKey) e.preventDefault();
        else {
            var nKeyCode = e.keyCode;
            if (nKeyCode == 8 || nKeyCode == 9) return;
            if (nKeyCode < 95) {
                if (nKeyCode < 48 || nKeyCode > 57) e.preventDefault();
            } else {
                if (nKeyCode < 96 || nKeyCode > 105) e.preventDefault();
            }
        }
    });

        });

    </script>
<!---->



</body>
</html>