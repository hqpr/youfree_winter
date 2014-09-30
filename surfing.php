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
                <div id="active">
                    <img src="/images/tab1_a.png" alt=""/>
                </div>
                <div class="not">
                    <a href="/party.php"><img src="/images/tab2.png" alt=""/></a>
                </div>
                <div class="not">
                    <a href="/cliff.php"><img src="/images/tab3.png" alt=""/></a>
                </div>
            </div>
        <div class="description">
            <p>Для «нормального» серфинга, который дает максимальный прилив адреналина, обязательно нужна «правильная» волна. Величина такой волны исчисляется в метрах двузначной цифрой, и чем выше волна, тем круче счастливчик, оседлавший ее, тем громче его слава.</p><p>
Интересно узнать, что среднестатистический серфингист, тратит на езду по волнам всего 8% времени, проведенного в океане. А в остальное время наш покоритель волн гребет и ждет подходящий момент. Поэтому умение читать сводки прогнозов погоды и определять лучшее время и место для катания – неотъемлемая часть культуры серфинга. Кроме того, для серфинга очень важны волны определенной формы, высоты, периода и скорости.</p><p>
Профессиональные серфингисты обращают внимание на 3 основных фактора, которые влияют на образование «правильных» огромных волн-свелов (от англ. слова swell), созданных штормами далеко в океане:
            <br><br>
•	сила ветра;<br/>
•	длительность воздействия ветра на океан;<br/>
•	расстояние, на котором воздействует ветер.<br/>
            <br>
Чем выше показатель каждого фактора, тем больше волна. Именно поэтому самые лучшие свелы рождаются в открытом пространстве океана.</p><p>
А еще эти отважные ребята придумали специальное название для тех,кто ходит по пляжу, притворяясь серфингистом, но при этом не катается – «hodad». Но это же не о вас, не так ли?
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