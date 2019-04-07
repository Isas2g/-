<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Ленские столбы</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/for_pages.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/colors/color.css" />
    <style>
        ::selection {
            background: #000;
            color: #fff;
        }
        ::-moz-selection {
            background: #000;
            color: #fff;
        }
        ::-webkit-selection {
            background: #000;
            color: #fff;
        }
    </style>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>
<body>
<div class="container-fluid">
   

    <div id="pip" class="section hero-full-height over-hide">
        <div id="poster_background"></div>
        <div id="video-wrap" class="parallax-top">
            <img src="img/hero-stolb.jpg" alt="" class="img img-responsive">
        </div>
        <div class="dark-over-video"></div>

        <div class="hero-center-section ver-2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 parallax-fade-top">
                        <div id="title-text" class="hero-text-ver-2">Ленские столбы<br>Якутия</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="black-place section background-dark z-too-big"></div>

<div class="section row content">
   
    <div class="side-menu">
        <ul class="items">
            <li id="info">Информация</li>
            <li id="hotels">Отели</li>
            <li id="costs">Цены</li>
        </ul>
    </div>


    <div id="infoText" class="active">
        <p>
            Ленские столбы — природный парк в России, расположенный на берегу реки Лены в Хангаласском улусе Якутии в 104 км от города Покровска.
            Тянущийся на многие километры комплекс вертикально вытянутых скал, причудливо громоздящихся вдоль берега Лены,
            глубокой долиной прорезающей Приленское плато, не перестает привлекать фотографов и путешественников.
            Наибольшей плотности столбы достигают между селениями Петровское и Тит-Ары.
        </p>
        <p>
            Высота скальных образований доходит до 100 метров. Ученые считают,
            что формирование горных пород началось 560–540 млн лет назад,
            а само образование Ленских столбов как формы рельефа — около 400 тыс. лет назад.
        </p>
        <p>
            Природный парк «Ленские столбы» был организован на основании указа президента Республики Саха (Якутия)
            от 16 августа 1994 года № 837 и постановления правительства от 10 февраля 1995 года
            и подчиняется региональному министерству охраны природы. Площадь парка — 485 тыс. га,
            парк состоит из двух филиалов — «Столбы» и «Синский».
        </p>
    </div>


    <div id="hotelsText" class="non-active">
            <p>
            Ленские столбы — природный парк в России, расположенный на берегу реки Лены в Хангаласском улусе Якутии в 104 км от города Покровска.
            Тянущийся на многие километры комплекс вертикально вытянутых скал, причудливо громоздящихся вдоль берега Лены,
            глубокой долиной прорезающей Приленское плато, не перестает привлекать фотографов и путешественников.
            Наибольшей плотности столбы достигают между селениями Петровское и Тит-Ары.
        </p>
        
    </div>

    </div>

</div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/reveal-home.js"></script>
    <script src="js/custom.js"></script>
    <script>
    const info = document.getElementById('info');
    const hotels = document.getElementById('hotels');
    const costs = document.getElementById('costs');
    const infoText = document.getElementById('infoText');
    const hotelsText = document.getElementById('hotelsText');
            
        info.addEventListener('click', () => {
            infoText.classList.add('active');
            hotelsText.classList.remove('active');
            hotelsText.classList.add('non-active');
//            infoText.classList.add('active');
        });
        
        hotels.addEventListener('click', () => {
            infoText.classList.remove('active');
            hotelsText.classList.add('active');
            infoText.classList.add('non-active');
//            infoText.classList.add('active');
        });
    </script>
</body>
</html>