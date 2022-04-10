<?php
session_start();
require 'vendor/connect.php';
($_SESSION['user']['login']);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>SK-О НАС</title>
</head>

<body>
<?php require_once('header.php');?>
    <div class="onas">
    <div class="about1">
        <div class="tem">
        Когда прекрасная долина изобилует паром вокруг меня, меридиональное солнце освещает верхнюю поверхность непроницаемой листвы моих деревьев, и лишь несколько случайных отблесков проникают во внутреннее святилище, я бросаюсь в высокую траву у журчащий поток; и, когда я лежу близко к земле, я замечаю тысячи неизвестных растений: когда я слышу жужжание маленького мира среди стеблей и знакомлюсь с бесчисленными неописуемыми формами насекомых и мух, тогда я чувствую присутствие Всевышнего, сотворившего нас по своему образу.
        </div>
        <div class="tem">
            <div class="tem1">
<p>Когда, в то время как прекрасная долина вокруг меня изобилует паром, и меридиональное солнце освещает верхнюю поверхность непроницаемой листвы моих деревьев, лишь несколько случайных отблесков проникают во внутреннее святилище.</p>
            </div>
            <div class="tem1">
                <p>Чудесная безмятежность овладела всей моей душой, как эти сладостные весенние утра, которыми я наслаждаюсь всем сердцем.</p>
            </div>
        </div>
    </div>
    <div class="about2">
        <div class="ab1">
            <img src="img/ab1.jpg">
        </div>
        <div class="ab1">
            <img src="img/ab2.jpg">
        </div>
        <div class="ab1">
            <img src="img/ab3.jpg">
        </div>
    </div>
    </div>

<?php require_once('footer.php');?>
</body>
</html>