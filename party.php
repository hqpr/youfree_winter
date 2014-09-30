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
                <div id="game">
                    <a href="/game.php"><img src="/images/game.png" alt=""/></a>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="tabs">
                <div class="not">
                    <a href="/surfing.php"><img src="/images/tab1.png" alt=""/></a>
                </div>
                <div id="active">
                    <img src="/images/tab2_a.png" alt=""/>
                </div>
                <div class="not">
                    <a href="/cliff.php"><img src="/images/tab3.png" alt=""/></a>
                </div>
            </div>
        <div class="description">
            <p>Зажигательная музыка, манящий шум волн и невероятные огненные шоу по всему побережью – все это можно найти на празднике полнолуния – Full Moon Party. Знаменитая на весь мир пляжная вечеринка, которая проходит в полнолуние каждого месяца на тайском острове Ко Пханган (Koh Phangan).</p><p>
Никто не помнит точно, в каком году (1985 или 1987) состоялась первая вечеринка, но говорят, что группа туристов забрела ночью на пляж острова Ко Пханган и была поражена невероятной красотой местной луны. И под впечатлением они безудержно протанцевали до утра. Удачная вечеринка так понравилась участникам, что они решили собраться на следующее полнолуние вновь.</p><p>
Постепенно слава о захватывающих танцах под луной разнеслась по всему миру, и пляжная дискотека превратилась в грандиозный фестиваль, собирающий тысячи туристов каждый месяц. На Full Moon Party приезжают лучшие диджеи со всего мира. Мощные акустические системы, современная светомузыка и энергетика хорошего настроения заставят навсегда запомнить вечеринку. Атмосферу праздника дополняет и необычайная «раскраска» участников, тела которых пестрят от изобилия фонариков, светящихся наклеек и рисунков неоновой гуашью.</p><p>
На протяжении трех суток (за день до, в полнолуние и после) на всех танцполах до самого утра расслабляются отдыхающие со всего мира – от 10 000 человек в непопулярный сезон и до 30 000 в пиковые даты, а также до 50 000 человек в новогоднюю ночь. Праздник полнолуния – одна из самых ярких и масштабных вечеринок Азии, это безумие в самом лучшем его проявлении!</p><p>
А рекорд по количеству тусовщиков пока принадлежит бразильской новогодней вечеринке на знаменитом пляже Копакабана в Рио-де-Жанейро – целых 3,5 миллиона человек наслаждались там концертом под открытым небом в 1994 году!
</p>
        </div>

        </div>
        <div class="back">
            <a href="/"><img src="/images/back.png" alt=""/></a>
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

<!---->


</body>
</html>