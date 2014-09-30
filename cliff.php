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
            <div class="not">
                <a href="/party.php"><img src="/images/tab2.png" alt=""/></a>
            </div>
            <div id="active">
                <img src="/images/tab3_a.png" alt=""/>
            </div>
        </div>
        <div class="description">
            <p>Клифф-дайвинг (от англ. слов cliff – скала и dive – нырять) – это прыжки в водоем со скал в естественных условиях. Если раньше такое занятие привлекало только любителей, а большинство людей считало его безумием, то теперь клифф-дайвингом занимаются профессионально.</p><p>
            Со стороны это действительно выглядит абсолютным безрассудством: за несколько секунд прыгун разгоняется и летит вниз на скорости до 100 км/ч, при этом малейший порыв ветра может отбросить его на скалы! </p><p>
            Как правило, мужчины прыгают с высоты 23–28 м, женщины – с 20–23 м. Особенно ценится умение «войти» в воду без брызг или с наименьшим их количеством. Глубина, на которую прыгают эти экстремалы, должна быть не менее пяти метров. В 1985 году всех любителей этого спорта удивила американка Лаки Вардл, прыгнув с высоты 36,8 м. А несколькими годами позже высоту в 53,9 м преодолел Оливер Фавр из Швейцарии. </p><p>
            Опытные прыгуны в полете делают различные трюки: пируэты, сальто, винты и другие акробатические фигуры, что превращает клифф-дайвинг в потрясающе красивое зрелище и наглядную демонстрацию красоты, силы и пластики человеческого тела.</p><p>
            Те, кто прыгал с высоты не раз и попробовал прыжок «на вкус», говорят, что уже не представляют своей жизни без этих ощущений. А вы бы смогли остаться наедине с высотой и водой?
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