<!DOCTYPE html>
<html lang="tr">
<head>
    <link rel="shortcut icon" type="image/png" href="images/favicon.png" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="FatihAura Github Site Sosyal Medya Butonları">
    <meta name="keywords" content="fatih,aura,github,sosyal,medya,buton">
    <title>aurA</title>
    <script src="https://kit.fontawesome.com/5da762d324.js" crossorigin="anonymous"></script>
    <link href="ayarlar.css" type="text/css" rel="stylesheet"/>
</head>
<body>
    <?php

$sehir_kodu = "2344116"; // İstanbul

$url = "http://weather.yahooapis.com/forecastrss?w=".$sehir_kodu."&u=c"; 
$feed = file_get_contents($url);

preg_match('@<yweather:condition  text="(.*?)"  code="(.*?)"  temp="(.*?)"  date="(.*?)" />@', $feed, $suan_hava);
preg_match_all('/<img src="(.*)"\/>/Usi', $feed, $img);



$Suan_Hava_Sicakligi = $suan_hava[3];
$Suan_Hava_Ikon_Kodu = $suan_hava[2];

    ?>
    
    <div class="sosyal-medya">
        <a href="#"><h2>AURA</h2></a>
        <div class="instagram">
            <a href="https://www.instagram.com/fatihaura_" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="github">
            <a href="https://github.com/fatihaura" target="_blank"><i class="fab fa-github"></i></a>
        </div>
        <div class="reddit">
            <a href="https://www.reddit.com/user/fatihaura" target="_blank"><i class="fab fa-reddit"></i></a>
        </div>
        <div class="steam">
            <a href="https://steamcommunity.com/id/aurathe/" target="_blank"><i class="fab fa-steam"></i></a>
        </div>
    </div>

    <div class="alt-kisim">
        <p>2022 ©️</p>


    </div>

</body>
</html>