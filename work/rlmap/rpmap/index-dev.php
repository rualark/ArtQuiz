<? include '../url.php'; ?>
<? include '../analytics.php'; ?>
<? include 'style.php'; ?>
<? include 'menu.php'; ?>
<style>#tooltip { text-align:center; background:black; color:white; padding:3px 0; width:60px; position:fixed; display:none; opacity: 0.6; white-space:nowrap; }</style>
<script type='text/javascript' src='http://code.jquery.com/jquery-git.js'></script>
<script src='js/jquery-1.9.1.min.js'></script>
<script src='js/jquery.maphighlight.js'></script>
<script type='text/javascript'>$(function() {
$('.coords').maphilight({ stroke: false, fillColor: '999999',});
});</script>
<style>.area:hover { background: rgba(120, 120, 120, 0.2); }</style>
<p>
<table><tr><td>
<div style='position: relative; width: 100%'>
<a id='tДревние философы' name='tДревние философы' style='position: absolute; top: 3px; left: 2890px'><font color=white size=3>Древние философы</font></a>
<a id='tДревняя Греция' name='tДревняя Греция' style='position: absolute; top: -5px; left: 2890px'><font color=white size=3>Древняя Греция</font></a>
<a id='tДревний Рим' name='tДревний Рим' style='position: absolute; top: 31px; left: 2890px'><font color=white size=3>Древний Рим</font></a>
<a id='tВозрождение' name='tВозрождение' style='position: absolute; top: 124px; left: 2890px'><font color=white size=3>Возрождение</font></a>
<a id='tРелигия' name='tРелигия' style='position: absolute; top: 51px; left: 2890px'><font color=white size=3>Религия</font></a>
<a id='tСредние века' name='tСредние века' style='position: absolute; top: 91px; left: 2890px'><font color=white size=3>Средние века</font></a>
<a id='tКлассицизм' name='tКлассицизм' style='position: absolute; top: 250px; left: 2890px'><font color=white size=3>Классицизм</font></a>
<a id='tМаньеризм' name='tМаньеризм' style='position: absolute; top: 184px; left: 2890px'><font color=white size=3>Маньеризм</font></a>
<a id='tБарокко' name='tБарокко' style='position: absolute; top: 189px; left: 2890px'><font color=white size=3>Барокко</font></a>
<a id='tИстория' name='tИстория' style='position: absolute; top: 61px; left: 2890px'><font color=white size=3>История</font></a>
<a id='tФилософия' name='tФилософия' style='position: absolute; top: 91px; left: 2890px'><font color=white size=3>Философия</font></a>
<a id='tЮмор' name='tЮмор' style='position: absolute; top: 186px; left: 2890px'><font color=white size=3>Юмор</font></a>
<a id='tРеализм' name='tРеализм' style='position: absolute; top: 204px; left: 2890px'><font color=white size=3>Реализм</font></a>
<a id='tАнтиутопия' name='tАнтиутопия' style='position: absolute; top: 199px; left: 2890px'><font color=white size=3>Антиутопия</font></a>
<a id='tФантастика' name='tФантастика' style='position: absolute; top: 214px; left: 2890px'><font color=white size=3>Фантастика</font></a>
<a id='tДетская' name='tДетская' style='position: absolute; top: 230px; left: 2890px'><font color=white size=3>Детская</font></a>
<a id='tПриключения' name='tПриключения' style='position: absolute; top: 298px; left: 2890px'><font color=white size=3>Приключения</font></a>
<a id='tСентиментализм' name='tСентиментализм' style='position: absolute; top: 328px; left: 2890px'><font color=white size=3>Сентиментализм</font></a>
<a id='tО любви' name='tО любви' style='position: absolute; top: 1157px; left: 2890px'><font color=white size=3>О любви</font></a>
<a id='tРомантизм' name='tРомантизм' style='position: absolute; top: 390px; left: 2890px'><font color=white size=3>Романтизм</font></a>
<a id='tПсихология' name='tПсихология' style='position: absolute; top: 326px; left: 2890px'><font color=white size=3>Психология</font></a>
<a id='tГотика' name='tГотика' style='position: absolute; top: 415px; left: 2890px'><font color=white size=3>Готика</font></a>
<a id='tКритический реализм' name='tКритический реализм' style='position: absolute; top: 1188px; left: 2890px'><font color=white size=3>Критический реализм</font></a>
<a id='tЭкзистенциализм' name='tЭкзистенциализм' style='position: absolute; top: 1373px; left: 2890px'><font color=white size=3>Экзистенциализм</font></a>
<a id='tНатурализм' name='tНатурализм' style='position: absolute; top: 806px; left: 2890px'><font color=white size=3>Натурализм</font></a>
<a id='tТрансцендентализм' name='tТрансцендентализм' style='position: absolute; top: 781px; left: 2890px'><font color=white size=3>Трансцендентализм</font></a>
<a id='tСоцреализм' name='tСоцреализм' style='position: absolute; top: 923px; left: 2890px'><font color=white size=3>Соцреализм</font></a>
<a id='tО войне' name='tО войне' style='position: absolute; top: 1268px; left: 2890px'><font color=white size=3>О войне</font></a>
<a id='tДеревня' name='tДеревня' style='position: absolute; top: 837px; left: 2890px'><font color=white size=3>Деревня</font></a>
<a id='tСимволизм' name='tСимволизм' style='position: absolute; top: 1077px; left: 2890px'><font color=white size=3>Символизм</font></a>
<a id='tДекаданс' name='tДекаданс' style='position: absolute; top: 781px; left: 2890px'><font color=white size=3>Декаданс</font></a>
<a id='tИмпрессионизм' name='tИмпрессионизм' style='position: absolute; top: 1022px; left: 2890px'><font color=white size=3>Импрессионизм</font></a>
<a id='tМагический реализм' name='tМагический реализм' style='position: absolute; top: 708px; left: 2890px'><font color=white size=3>Магический реализм</font></a>
<a id='tСюрреализм' name='tСюрреализм' style='position: absolute; top: 1311px; left: 2890px'><font color=white size=3>Сюрреализм</font></a>
<a id='tАбсурд' name='tАбсурд' style='position: absolute; top: 929px; left: 2890px'><font color=white size=3>Абсурд</font></a>
<a id='tБит' name='tБит' style='position: absolute; top: 1219px; left: 2890px'><font color=white size=3>Бит</font></a>
<a id='tТвердая научная фантастика' name='tТвердая научная фантастика' style='position: absolute; top: 1176px; left: 2890px'><font color=white size=3>Твердая научная фантастика</font></a>
<a id='tДетектив' name='tДетектив' style='position: absolute; top: 720px; left: 2890px'><font color=white size=3>Детектив</font></a>
<a id='tО животных' name='tО животных' style='position: absolute; top: 1157px; left: 2890px'><font color=white size=3>О животных</font></a>
<a id='tМодернизм' name='tМодернизм' style='position: absolute; top: 929px; left: 2890px'><font color=white size=3>Модернизм</font></a>
<a id='tЭкспрессионизм' name='tЭкспрессионизм' style='position: absolute; top: 1059px; left: 2890px'><font color=white size=3>Экспрессионизм</font></a>
<a id='tФэнтези' name='tФэнтези' style='position: absolute; top: 1182px; left: 2890px'><font color=white size=3>Фэнтези</font></a>
<a id='tФормализм' name='tФормализм' style='position: absolute; top: 1262px; left: 2890px'><font color=white size=3>Формализм</font></a>
<a id='tАнтироман' name='tАнтироман' style='position: absolute; top: 1385px; left: 2890px'><font color=white size=3>Антироман</font></a>
<a id='tРассерженные молодые люди' name='tРассерженные молодые люди' style='position: absolute; top: 1521px; left: 2890px'><font color=white size=3>Рассерженные молодые люди</font></a>
<a id='tОрнаментальная проза' name='tОрнаментальная проза' style='position: absolute; top: 1256px; left: 2890px'><font color=white size=3>Орнаментальная проза</font></a>
<a id='tДраматургия' name='tДраматургия' style='position: absolute; top: 732px; left: 2890px'><font color=white size=3>Драматургия</font></a>
<a id='tПостмодернизм' name='tПостмодернизм' style='position: absolute; top: 1317px; left: 2890px'><font color=white size=3>Постмодернизм</font></a>
<a id='tДетская фантастика' name='tДетская фантастика' style='position: absolute; top: 477px; left: 2890px'><font color=white size=3>Детская фантастика</font></a>
<a id='tДля подростков' name='tДля подростков' style='position: absolute; top: 905px; left: 2890px'><font color=white size=3>Для подростков</font></a>
<a id='tДревний Китай' name='tДревний Китай' style='position: absolute; top: -5px; left: 2890px'><font color=white size=3>Древний Китай</font></a>
<a id='tДревняя Индия' name='tДревняя Индия' style='position: absolute; top: 56px; left: 2890px'><font color=white size=3>Древняя Индия</font></a>
<a id='tДревняя Персия' name='tДревняя Персия' style='position: absolute; top: 86px; left: 2890px'><font color=white size=3>Древняя Персия</font></a>
<a id='tМировая литература' name='tМировая литература' style='position: absolute; top: 61px; left: 2890px'><font color=white size=3>Мировая литература</font></a>
<a id='a178' name='#a178' style='position: absolute; top: 26px; left: 2890px'><font color=white size=3>Гесиод</font></a>
<a id='a192' name='#a192' style='position: absolute; top: 24px; left: 2890px'><font color=white size=3>Гомер</font></a>
<a id='a1146' name='#a1146' style='position: absolute; top: 42px; left: 2890px'><font color=white size=3>Эзоп</font></a>
<a id='a1067' name='#a1067' style='position: absolute; top: 42px; left: 2890px'><font color=white size=3>Лао Цзы</font></a>
<a id='a1217' name='#a1217' style='position: absolute; top: 43px; left: 2890px'><font color=white size=3>Пифагор</font></a>
<a id='a836' name='#a836' style='position: absolute; top: 46px; left: 2890px'><font color=white size=3>Эсхил</font></a>
<a id='a655' name='#a655' style='position: absolute; top: 48px; left: 2890px'><font color=white size=3>Софокл</font></a>
<a id='a263' name='#a263' style='position: absolute; top: 55px; left: 2890px'><font color=white size=3>Еврипид</font></a>
<a id='a32' name='#a32' style='position: absolute; top: 57px; left: 2890px'><font color=white size=3>Аристофан</font></a>
<a id='a558' name='#a558' style='position: absolute; top: 60px; left: 2890px'><font color=white size=3>Платон</font></a>
<a id='a1138' name='#a1138' style='position: absolute; top: 67px; left: 2890px'><font color=white size=3>Аристотель</font></a>
<a id='a454' name='#a454' style='position: absolute; top: 67px; left: 2890px'><font color=white size=3>Менандр</font></a>
<a id='a673' name='#a673' style='position: absolute; top: 71px; left: 2890px'><font color=white size=3>Сунь-цзы</font></a>
<a id='a599' name='#a599' style='position: absolute; top: 73px; left: 2890px'><font color=white size=3>Аполлоний Р</font></a>
<a id='a557' name='#a557' style='position: absolute; top: 77px; left: 2890px'><font color=white size=3>Плавт</font></a>
<a id='a691' name='#a691' style='position: absolute; top: 80px; left: 2890px'><font color=white size=3>Теренций</font></a>
<a id='a132' name='#a132' style='position: absolute; top: 95px; left: 2890px'><font color=white size=3>Вергилий</font></a>
<a id='a522' name='#a522' style='position: absolute; top: 96px; left: 2890px'><font color=white size=3>Овидий</font></a>
<a id='a632' name='#a632' style='position: absolute; top: 99px; left: 2890px'><font color=white size=3>Сенека</font></a>
<a id='a114' name='#a114' style='position: absolute; top: 99px; left: 2890px'><font color=white size=3>Бхаса</font></a>
<a id='a1143' name='#a1143' style='position: absolute; top: 99px; left: 2890px'><font color=white size=3>Петроний</font></a>
<a id='a48' name='#a48' style='position: absolute; top: 95px; left: 2890px'><font color=white size=3>Бань Гу</font></a>
<a id='a561' name='#a561' style='position: absolute; top: 99px; left: 2890px'><font color=white size=3>Плутарх</font></a>
<a id='a1212' name='#a1212' style='position: absolute; top: 99px; left: 2890px'><font color=white size=3>Тацит</font></a>
<a id='a39' name='#a39' style='position: absolute; top: 99px; left: 2890px'><font color=white size=3>Ашвагх.</font></a>
<a id='a410' name='#a410' style='position: absolute; top: 100px; left: 2890px'><font color=white size=3>Лонг</font></a>
<a id='a682' name='#a682' style='position: absolute; top: 100px; left: 2890px'><font color=white size=3>Ахилл Т</font></a>
<a id='a757' name='#a757' style='position: absolute; top: 100px; left: 2890px'><font color=white size=3>Харитон</font></a>
<a id='a415' name='#a415' style='position: absolute; top: 101px; left: 2890px'><font color=white size=3>Лукиан</font></a>
<a id='a26' name='#a26' style='position: absolute; top: 101px; left: 2890px'><font color=white size=3>Апулей</font></a>
<a id='a174' name='#a174' style='position: absolute; top: 104px; left: 2890px'><font color=white size=3>Гелиодор</font></a>
<a id='a305' name='#a305' style='position: absolute; top: 103px; left: 2890px'><font color=white size=3>Калидаса</font></a>
<a id='a822' name='#a822' style='position: absolute; top: 107px; left: 2890px'><font color=white size=3>Шудрака</font></a>
<a id='a139' name='#a139' style='position: absolute; top: 109px; left: 2890px'><font color=white size=3>Вишакх.</font></a>
<a id='a113' name='#a113' style='position: absolute; top: 112px; left: 2890px'><font color=white size=3>Бхарави</font></a>
<a id='a671' name='#a671' style='position: absolute; top: 113px; left: 2890px'><font color=white size=3>Субандху</font></a>
<a id='a656' name='#a656' style='position: absolute; top: 106px; left: 2890px'><font color=white size=3>Софроний</font></a>
<a id='a47' name='#a47' style='position: absolute; top: 115px; left: 2890px'><font color=white size=3>Банабх.</font></a>
<a id='a760' name='#a760' style='position: absolute; top: 115px; left: 2890px'><font color=white size=3>Харша</font></a>
<a id='a112' name='#a112' style='position: absolute; top: 121px; left: 2890px'><font color=white size=3>Бхавабхути</font></a>
<a id='a421' name='#a421' style='position: absolute; top: 122px; left: 2890px'><font color=white size=3>Магха</font></a>
<a id='a824' name='#a824' style='position: absolute; top: 113px; left: 2890px'><font color=white size=3>Цзицзи</font></a>
<a id='a399' name='#a399' style='position: absolute; top: 114px; left: 2890px'><font color=white size=3>Фуянь</font></a>
<a id='a81' name='#a81' style='position: absolute; top: 114px; left: 2890px'><font color=white size=3>Синцзянь</font></a>
<a id='a398' name='#a398' style='position: absolute; top: 114px; left: 2890px'><font color=white size=3>Гунцзо</font></a>
<a id='a838' name='#a838' style='position: absolute; top: 114px; left: 2890px'><font color=white size=3>Ю Чжэнь</font></a>
<a id='a418' name='#a418' style='position: absolute; top: 119px; left: 2890px'><font color=white size=3>Ши</font></a>
<a id='a737' name='#a737' style='position: absolute; top: 125px; left: 2890px'><font color=white size=3>Фирдоуси</font></a>
<a id='a498' name='#a498' style='position: absolute; top: 125px; left: 2890px'><font color=white size=3>Нарекаци</font></a>
<a id='a675' name='#a675' style='position: absolute; top: 109px; left: 2890px'><font color=white size=3>С-Сёнаг.</font></a>
<a id='a489' name='#a489' style='position: absolute; top: 131px; left: 2890px'><font color=white size=3>Мураса.</font></a>
<a id='a289' name='#a289' style='position: absolute; top: 128px; left: 2890px'><font color=white size=3>Иларион</font></a>
<a id='a1042' name='#a1042' style='position: absolute; top: 129px; left: 2890px'><font color=white size=3>Хайям</font></a>
<a id='a419' name='#a419' style='position: absolute; top: 128px; left: 2890px'><font color=white size=3>Лю Фу</font></a>
<a id='a779' name='#a779' style='position: absolute; top: 122px; left: 2890px'><font color=white size=3>Чунь</font></a>
<a id='a504' name='#a504' style='position: absolute; top: 150px; left: 2890px'><font color=white size=3>Нестор</font></a>
<a id='a233' name='#a233' style='position: absolute; top: 130px; left: 2890px'><font color=white size=3>Джаядева</font></a>
<a id='a820' name='#a820' style='position: absolute; top: 131px; left: 2890px'><font color=white size=3>Шрихарша</font></a>
<a id='a506' name='#a506' style='position: absolute; top: 131px; left: 2890px'><font color=white size=3>Низами</font></a>
<a id='a708' name='#a708' style='position: absolute; top: 131px; left: 2890px'><font color=white size=3>К де Труа</font></a>
<a id='a791' name='#a791' style='position: absolute; top: 145px; left: 2890px'><font color=white size=3>Тинъюй</font></a>
<a id='a688' name='#a688' style='position: absolute; top: 153px; left: 2890px'><font color=white size=3>Тёмэй</font></a>
<a id='a837' name='#a837' style='position: absolute; top: 132px; left: 2890px'><font color=white size=3>Вольфрам Э</font></a>
<a id='a610' name='#a610' style='position: absolute; top: 132px; left: 2890px'><font color=white size=3>Рустав.</font></a>
<a id='a809' name='#a809' style='position: absolute; top: 158px; left: 2890px'><font color=white size=3>Цзюньбао</font></a>
<a id='a159' name='#a159' style='position: absolute; top: 135px; left: 2890px'><font color=white size=3>Маоцин</font></a>
<a id='a400' name='#a400' style='position: absolute; top: 136px; left: 2890px'><font color=white size=3>Вэньюй</font></a>
<a id='a505' name='#a505' style='position: absolute; top: 175px; left: 2890px'><font color=white size=3>Нидзё</font></a>
<a id='a780' name='#a780' style='position: absolute; top: 136px; left: 2890px'><font color=white size=3>Цзяньфу</font></a>
<a id='a790' name='#a790' style='position: absolute; top: 136px; left: 2890px'><font color=white size=3>Гобинь</font></a>
<a id='a844' name='#a844' style='position: absolute; top: 136px; left: 2890px'><font color=white size=3>Сяньчжи</font></a>
<a id='a216' name='#a216' style='position: absolute; top: 158px; left: 2890px'><font color=white size=3>Ханьцин</font></a>
<a id='a82' name='#a82' style='position: absolute; top: 158px; left: 2890px'><font color=white size=3>Пу</font></a>
<a id='a224' name='#a224' style='position: absolute; top: 159px; left: 2890px'><font color=white size=3>Шаньфу</font></a>
<a id='a401' name='#a401' style='position: absolute; top: 159px; left: 2890px'><font color=white size=3>Чжифу</font></a>
<a id='a420' name='#a420' style='position: absolute; top: 170px; left: 2890px'><font color=white size=3>Чжиюань</font></a>
<a id='a711' name='#a711' style='position: absolute; top: 159px; left: 2890px'><font color=white size=3>Ханьчэнь</font></a>
<a id='a225' name='#a225' style='position: absolute; top: 145px; left: 2890px'><font color=white size=3>Данте</font></a>
<a id='a842' name='#a842' style='position: absolute; top: 180px; left: 2890px'><font color=white size=3>Бочуань</font></a>
<a id='a87' name='#a87' style='position: absolute; top: 152px; left: 2890px'><font color=white size=3>Боккаччо</font></a>
<a id='a390' name='#a390' style='position: absolute; top: 154px; left: 2890px'><font color=white size=3>Ленгленд</font></a>
<a id='a619' name='#a619' style='position: absolute; top: 155px; left: 2890px'><font color=white size=3>Саккетти</font></a>
<a id='a782' name='#a782' style='position: absolute; top: 181px; left: 2890px'><font color=white size=3>Ю</font></a>
<a id='a793' name='#a793' style='position: absolute; top: 156px; left: 2890px'><font color=white size=3>Чосер</font></a>
<a id='a402' name='#a402' style='position: absolute; top: 181px; left: 2890px'><font color=white size=3>Л Чжэнь</font></a>
<a id='a507' name='#a507' style='position: absolute; top: 170px; left: 2890px'><font color=white size=3>Никитин</font></a>
<a id='a490' name='#a490' style='position: absolute; top: 171px; left: 2890px'><font color=white size=3>Мэлори</font></a>
<a id='a495' name='#a495' style='position: absolute; top: 169px; left: 2890px'><font color=white size=3>Навои</font></a>
<a id='a604' name='#a604' style='position: absolute; top: 188px; left: 2890px'><font color=white size=3>Эразм Р</font></a>
<a id='a427' name='#a427' style='position: absolute; top: 187px; left: 2890px'><font color=white size=3>Макиавелли</font></a>
<a id='a31' name='#a31' style='position: absolute; top: 186px; left: 2890px'><font color=white size=3>Ариосто</font></a>
<a id='a478' name='#a478' style='position: absolute; top: 191px; left: 2890px'><font color=white size=3>Мор</font></a>
<a id='a668' name='#a668' style='position: absolute; top: 196px; left: 2890px'><font color=white size=3>Страпарола</font></a>
<a id='a30' name='#a30' style='position: absolute; top: 198px; left: 2890px'><font color=white size=3>Аретино</font></a>
<a id='a494' name='#a494' style='position: absolute; top: 197px; left: 2890px'><font color=white size=3>Наваррская</font></a>
<a id='a584' name='#a584' style='position: absolute; top: 194px; left: 2890px'><font color=white size=3>Рабле</font></a>
<a id='a712' name='#a712' style='position: absolute; top: 205px; left: 2890px'><font color=white size=3>Чэнъэнь</font></a>
<a id='a786' name='#a786' style='position: absolute; top: 203px; left: 2890px'><font color=white size=3>Челлини</font></a>
<a id='a1168' name='#a1168' style='position: absolute; top: 205px; left: 2890px'><font color=white size=3>Насмешник</font></a>
<a id='a308' name='#a308' style='position: absolute; top: 210px; left: 2890px'><font color=white size=3>Камоэнс</font></a>
<a id='a475' name='#a475' style='position: absolute; top: 219px; left: 2890px'><font color=white size=3>Монтень</font></a>
<a id='a681' name='#a681' style='position: absolute; top: 217px; left: 2890px'><font color=white size=3>Тассо</font></a>
<a id='a636' name='#a636' style='position: absolute; top: 222px; left: 2890px'><font color=white size=3>Сервантес</font></a>
<a id='a193' name='#a193' style='position: absolute; top: 227px; left: 2890px'><font color=white size=3>Гонгора</font></a>
<a id='a129' name='#a129' style='position: absolute; top: 230px; left: 2890px'><font color=white size=3>Вега</font></a>
<a id='a444' name='#a444' style='position: absolute; top: 221px; left: 2890px'><font color=white size=3>Марло</font></a>
<a id='a805' name='#a805' style='position: absolute; top: 226px; left: 2890px'><font color=white size=3>Шекспир</font></a>
<a id='a753' name='#a753' style='position: absolute; top: 237px; left: 2890px'><font color=white size=3>Мэнлун</font></a>
<a id='a473' name='#a473' style='position: absolute; top: 240px; left: 2890px'><font color=white size=3>Молина</font></a>
<a id='a322' name='#a322' style='position: absolute; top: 231px; left: 2890px'><font color=white size=3>Кеведо</font></a>
<a id='a406' name='#a406' style='position: absolute; top: 238px; left: 2890px'><font color=white size=3>Мэнчу</font></a>
<a id='a1189' name='#a1189' style='position: absolute; top: 249px; left: 2890px'><font color=white size=3>Гоббс</font></a>
<a id='a307' name='#a307' style='position: absolute; top: 259px; left: 2890px'><font color=white size=3>Кальдерон</font></a>
<a id='a204' name='#a204' style='position: absolute; top: 227px; left: 2890px'><font color=white size=3>Грасиан</font></a>
<a id='a652' name='#a652' style='position: absolute; top: 250px; left: 2890px'><font color=white size=3>Сорель</font></a>
<a id='a358' name='#a358' style='position: absolute; top: 255px; left: 2890px'><font color=white size=3>Корнель</font></a>
<a id='a465' name='#a465' style='position: absolute; top: 273px; left: 2890px'><font color=white size=3>Мильтон</font></a>
<a id='a403' name='#a403' style='position: absolute; top: 262px; left: 2890px'><font color=white size=3>Юй</font></a>
<a id='a641' name='#a641' style='position: absolute; top: 246px; left: 2890px'><font color=white size=3>Скаррон</font></a>
<a id='a69' name='#a69' style='position: absolute; top: 256px; left: 2890px'><font color=white size=3>Бержерак</font></a>
<a id='a679' name='#a679' style='position: absolute; top: 269px; left: 2890px'><font color=white size=3>Таллеман Р</font></a>
<a id='a754' name='#a754' style='position: absolute; top: 268px; left: 2890px'><font color=white size=3>Фюретьер</font></a>
<a id='a4' name='#a4' style='position: absolute; top: 261px; left: 2890px'><font color=white size=3>Аввакум</font></a>
<a id='a384' name='#a384' style='position: absolute; top: 253px; left: 2890px'><font color=white size=3>Лафонтен</font></a>
<a id='a210' name='#a210' style='position: absolute; top: 264px; left: 2890px'><font color=white size=3>Гриммельсгаузен</font></a>
<a id='a474' name='#a474' style='position: absolute; top: 264px; left: 2890px'><font color=white size=3>Мольер</font></a>
<a id='a543' name='#a543' style='position: absolute; top: 271px; left: 2890px'><font color=white size=3>Паскаль</font></a>
<a id='a49' name='#a49' style='position: absolute; top: 283px; left: 2890px'><font color=white size=3>Баньян</font></a>
<a id='a181' name='#a181' style='position: absolute; top: 273px; left: 2890px'><font color=white size=3>Гийераг</font></a>
<a id='a547' name='#a547' style='position: absolute; top: 276px; left: 2890px'><font color=white size=3>Перро</font></a>
<a id='a131' name='#a131' style='position: absolute; top: 266px; left: 2890px'><font color=white size=3>Верас</font></a>
<a id='a1060' name='#a1060' style='position: absolute; top: 293px; left: 2890px'><font color=white size=3>Спиноза</font></a>
<a id='a383' name='#a383' style='position: absolute; top: 275px; left: 2890px'><font color=white size=3>Лафайет</font></a>
<a id='a588' name='#a588' style='position: absolute; top: 275px; left: 2890px'><font color=white size=3>Расин</font></a>
<a id='a581' name='#a581' style='position: absolute; top: 285px; left: 2890px'><font color=white size=3>Сунлин</font></a>
<a id='a617' name='#a617' style='position: absolute; top: 274px; left: 2890px'><font color=white size=3>Сайкаку</font></a>
<a id='a376' name='#a376' style='position: absolute; top: 280px; left: 2890px'><font color=white size=3>Лабрюйер</font></a>
<a id='a157' name='#a157' style='position: absolute; top: 288px; left: 2890px'><font color=white size=3>Гамильтон</font></a>
<a id='a733' name='#a733' style='position: absolute; top: 288px; left: 2890px'><font color=white size=3>Фенелон</font></a>
<a id='a693' name='#a693' style='position: absolute; top: 296px; left: 2890px'><font color=white size=3>Тикамац.</font></a>
<a id='a231' name='#a231' style='position: absolute; top: 345px; left: 2890px'><font color=white size=3>Дефо</font></a>
<a id='a28' name='#a28' style='position: absolute; top: 342px; left: 2890px'><font color=white size=3>Арбетнот</font></a>
<a id='a627' name='#a627' style='position: absolute; top: 364px; left: 2890px'><font color=white size=3>Свифт</font></a>
<a id='a395' name='#a395' style='position: absolute; top: 387px; left: 2890px'><font color=white size=3>Лесаж</font></a>
<a id='a354' name='#a354' style='position: absolute; top: 320px; left: 2890px'><font color=white size=3>Конгрив</font></a>
<a id='a729' name='#a729' style='position: absolute; top: 297px; left: 2890px'><font color=white size=3>Фаркер</font></a>
<a id='a171' name='#a171' style='position: absolute; top: 409px; left: 2890px'><font color=white size=3>Гей</font></a>
<a id='a441' name='#a441' style='position: absolute; top: 367px; left: 2890px'><font color=white size=3>Мариво</font></a>
<a id='a571' name='#a571' style='position: absolute; top: 348px; left: 2890px'><font color=white size=3>Поуп</font></a>
<a id='a476' name='#a476' style='position: absolute; top: 362px; left: 2890px'><font color=white size=3>Монтеск.</font></a>
<a id='a595' name='#a595' style='position: absolute; top: 370px; left: 2890px'><font color=white size=3>Ричардс.н</font></a>
<a id='a8' name='#a8' style='position: absolute; top: 336px; left: 2890px'><font color=white size=3>Аиссе</font></a>
<a id='a148' name='#a148' style='position: absolute; top: 401px; left: 2890px'><font color=white size=3>Вольтер</font></a>
<a id='a572' name='#a572' style='position: absolute; top: 390px; left: 2890px'><font color=white size=3>Прево</font></a>
<a id='a704' name='#a704' style='position: absolute; top: 401px; left: 2890px'><font color=white size=3>Тредиаковский</font></a>
<a id='a191' name='#a191' style='position: absolute; top: 454px; left: 2890px'><font color=white size=3>Гольдони</font></a>
<a id='a312' name='#a312' style='position: absolute; top: 432px; left: 2890px'><font color=white size=3>Кантемир</font></a>
<a id='a409' name='#a409' style='position: absolute; top: 406px; left: 2890px'><font color=white size=3>Ломоносов</font></a>
<a id='a609' name='#a609' style='position: absolute; top: 432px; left: 2890px'><font color=white size=3>Руссо</font></a>
<a id='a241' name='#a241' style='position: absolute; top: 437px; left: 2890px'><font color=white size=3>Дидро</font></a>
<a id='a663' name='#a663' style='position: absolute; top: 409px; left: 2890px'><font color=white size=3>Стерн</font></a>
<a id='a839' name='#a839' style='position: absolute; top: 460px; left: 2890px'><font color=white size=3>Мэй</font></a>
<a id='a672' name='#a672' style='position: absolute; top: 432px; left: 2890px'><font color=white size=3>Сумароков</font></a>
<a id='a304' name='#a304' style='position: absolute; top: 457px; left: 2890px'><font color=white size=3>Казот</font></a>
<a id='a202' name='#a202' style='position: absolute; top: 499px; left: 2890px'><font color=white size=3>Гоцци</font></a>
<a id='a646' name='#a646' style='position: absolute; top: 429px; left: 2890px'><font color=white size=3>Смоллетт</font></a>
<a id='a1102' name='#a1102' style='position: absolute; top: 479px; left: 2890px'><font color=white size=3>Кант</font></a>
<a id='a303' name='#a303' style='position: absolute; top: 468px; left: 2890px'><font color=white size=3>Казанова</font></a>
<a id='a422' name='#a422' style='position: absolute; top: 476px; left: 2890px'><font color=white size=3>Майков</font></a>
<a id='a397' name='#a397' style='position: absolute; top: 454px; left: 2890px'><font color=white size=3>Лессинг</font></a>
<a id='a189' name='#a189' style='position: absolute; top: 454px; left: 2890px'><font color=white size=3>Голдсмит</font></a>
<a id='a1225' name='#a1225' style='position: absolute; top: 490px; left: 2890px'><font color=white size=3>Суворов</font></a>
<a id='a89' name='#a89' style='position: absolute; top: 544px; left: 2890px'><font color=white size=3>Бомарше</font></a>
<a id='a96' name='#a96' style='position: absolute; top: 479px; left: 2890px'><font color=white size=3>Бретон</font></a>
<a id='a589' name='#a589' style='position: absolute; top: 482px; left: 2890px'><font color=white size=3>Распе</font></a>
<a id='a71' name='#a71' style='position: absolute; top: 502px; left: 2890px'><font color=white size=3>Бернард.н</font></a>
<a id='a346' name='#a346' style='position: absolute; top: 485px; left: 2890px'><font color=white size=3>Княжнин</font></a>
<a id='a459' name='#a459' style='position: absolute; top: 516px; left: 2890px'><font color=white size=3>Мерсье</font></a>
<a id='a616' name='#a616' style='position: absolute; top: 524px; left: 2890px'><font color=white size=3>Сад</font></a>
<a id='a381' name='#a381' style='position: absolute; top: 566px; left: 2890px'><font color=white size=3>Лакло</font></a>
<a id='a1' name='#a1' style='position: absolute; top: 521px; left: 2890px'><font color=white size=3>Аблесим.</font></a>
<a id='a227' name='#a227' style='position: absolute; top: 516px; left: 2890px'><font color=white size=3>Дашкова</font></a>
<a id='a230' name='#a230' style='position: absolute; top: 524px; left: 2890px'><font color=white size=3>Державин</font></a>
<a id='a797' name='#a797' style='position: absolute; top: 490px; left: 2890px'><font color=white size=3>Чулков</font></a>
<a id='a85' name='#a85' style='position: absolute; top: 592px; left: 2890px'><font color=white size=3>Богданов.</font></a>
<a id='a742' name='#a742' style='position: absolute; top: 493px; left: 2890px'><font color=white size=3>Фонвизин</font></a>
<a id='a388' name='#a388' style='position: absolute; top: 541px; left: 2890px'><font color=white size=3>Лёвшин</font></a>
<a id='a17' name='#a17' style='position: absolute; top: 513px; left: 2890px'><font color=white size=3>Альфьери</font></a>
<a id='a180' name='#a180' style='position: absolute; top: 546px; left: 2890px'><font color=white size=3>Гёте</font></a>
<a id='a586' name='#a586' style='position: absolute; top: 513px; left: 2890px'><font color=white size=3>Радищев</font></a>
<a id='a313' name='#a313' style='position: absolute; top: 555px; left: 2890px'><font color=white size=3>Капнист</font></a>
<a id='a810' name='#a810' style='position: absolute; top: 465px; left: 2890px'><font color=white size=3>Шиллер</font></a>
<a id='a1123' name='#a1123' style='position: absolute; top: 569px; left: 2890px'><font color=white size=3>Поль</font></a>
<a id='a315' name='#a315' style='position: absolute; top: 592px; left: 2890px'><font color=white size=3>Карамзин</font></a>
<a id='a659' name='#a659' style='position: absolute; top: 510px; left: 2890px'><font color=white size=3>Сталь</font></a>
<a id='a357' name='#a357' style='position: absolute; top: 555px; left: 2890px'><font color=white size=3>Констан</font></a>
<a id='a800' name='#a800' style='position: absolute; top: 629px; left: 2890px'><font color=white size=3>Шатобриан</font></a>
<a id='a369' name='#a369' style='position: absolute; top: 623px; left: 2890px'><font color=white size=3>Крылов</font></a>
<a id='a175' name='#a175' style='position: absolute; top: 580px; left: 2890px'><font color=white size=3>Гёльдерл.</font></a>
<a id='a1144' name='#a1144' style='position: absolute; top: 586px; left: 2890px'><font color=white size=3>Гегель</font></a>
<a id='a642' name='#a642' style='position: absolute; top: 535px; left: 2890px'><font color=white size=3>Скотт</font></a>
<a id='a511' name='#a511' style='position: absolute; top: 488px; left: 2890px'><font color=white size=3>Новалис</font></a>
<a id='a812' name='#a812' style='position: absolute; top: 577px; left: 2890px'><font color=white size=3>Шлегель</font></a>
<a id='a692' name='#a692' style='position: absolute; top: 728px; left: 2890px'><font color=white size=3>Тик</font></a>
<a id='a534' name='#a534' style='position: absolute; top: 569px; left: 2890px'><font color=white size=3>Остин</font></a>
<a id='a201' name='#a201' style='position: absolute; top: 577px; left: 2890px'><font color=white size=3>Гофман</font></a>
<a id='a341' name='#a341' style='position: absolute; top: 532px; left: 2890px'><font color=white size=3>Клейст</font></a>
<a id='a751' name='#a751' style='position: absolute; top: 654px; left: 2890px'><font color=white size=3>Фуке</font></a>
<a id='a826' name='#a826' style='position: absolute; top: 777px; left: 2890px'><font color=white size=3>Эленшлег.</font></a>
<a id='a497' name='#a497' style='position: absolute; top: 598px; left: 2890px'><font color=white size=3>Нарежный</font></a>
<a id='a513' name='#a513' style='position: absolute; top: 703px; left: 2890px'><font color=white size=3>Нодье</font></a>
<a id='a799' name='#a799' style='position: absolute; top: 679px; left: 2890px'><font color=white size=3>Шамиссо</font></a>
<a id='a491' name='#a491' style='position: absolute; top: 598px; left: 2890px'><font color=white size=3>Мэтьюр.</font></a>
<a id='a685' name='#a685' style='position: absolute; top: 752px; left: 2890px'><font color=white size=3>Тегнер</font></a>
<a id='a273' name='#a273' style='position: absolute; top: 691px; left: 2890px'><font color=white size=3>Жуковск.</font></a>
<a id='a292' name='#a292' style='position: absolute; top: 605px; left: 2890px'><font color=white size=3>В Ирвинг</font></a>
<a id='a662' name='#a662' style='position: absolute; top: 660px; left: 2890px'><font color=white size=3>Стендал.</font></a>
<a id='a438' name='#a438' style='position: absolute; top: 728px; left: 2890px'><font color=white size=3>Мандзони</font></a>
<a id='a1053' name='#a1053' style='position: absolute; top: 722px; left: 2890px'><font color=white size=3>Гримм</font></a>
<a id='a564' name='#a564' style='position: absolute; top: 654px; left: 2890px'><font color=white size=3>Погорел.</font></a>
<a id='a43' name='#a43' style='position: absolute; top: 558px; left: 2890px'><font color=white size=3>Байрон</font></a>
<a id='a1061' name='#a1061' style='position: absolute; top: 722px; left: 2890px'><font color=white size=3>Шопенгау.</font></a>
<a id='a274' name='#a274' style='position: absolute; top: 709px; left: 2890px'><font color=white size=3>Загоскин</font></a>
<a id='a371' name='#a371' style='position: absolute; top: 703px; left: 2890px'><font color=white size=3>Купер</font></a>
<a id='a10' name='#a10' style='position: absolute; top: 746px; left: 2890px'><font color=white size=3>Аксаков</font></a>
<a id='a209' name='#a209' style='position: absolute; top: 777px; left: 2890px'><font color=white size=3>Грильпар.</font></a>
<a id='a643' name='#a643' style='position: absolute; top: 740px; left: 2890px'><font color=white size=3>Скриб</font></a>
<a id='a380' name='#a380' style='position: absolute; top: 771px; left: 2890px'><font color=white size=3>Лажечник.</font></a>
<a id='a806' name='#a806' style='position: absolute; top: 605px; left: 2890px'><font color=white size=3>П Шелли</font></a>
<a id='a1133' name='#a1133' style='position: absolute; top: 746px; left: 2890px'><font color=white size=3>Чаадаев</font></a>
<a id='a207' name='#a207' style='position: absolute; top: 654px; left: 2890px'><font color=white size=3>Грибоедов</font></a>
<a id='a73' name='#a73' style='position: absolute; top: 802px; left: 2890px'><font color=white size=3>Бестужев</font></a>
<a id='a138' name='#a138' style='position: absolute; top: 777px; left: 2890px'><font color=white size=3>Виньи</font></a>
<a id='a173' name='#a173' style='position: absolute; top: 679px; left: 2890px'><font color=white size=3>Гейне</font></a>
<a id='a807' name='#a807' style='position: absolute; top: 728px; left: 2890px'><font color=white size=3>М Шелли</font></a>
<a id='a470' name='#a470' style='position: absolute; top: 703px; left: 2890px'><font color=white size=3>Мицкевич</font></a>
<a id='a46' name='#a46' style='position: absolute; top: 703px; left: 2890px'><font color=white size=3>Бальзак</font></a>
<a id='a582' name='#a582' style='position: absolute; top: 679px; left: 2890px'><font color=white size=3>Пушкин</font></a>
<a id='a51' name='#a51' style='position: absolute; top: 654px; left: 2890px'><font color=white size=3>Баратынск.</font></a>
<a id='a1039' name='#a1039' style='position: absolute; top: 802px; left: 2890px'><font color=white size=3>Даль</font></a>
<a id='a169' name='#a169' style='position: absolute; top: 672px; left: 2890px'><font color=white size=3>Гауф</font></a>
<a id='a218' name='#a218' style='position: absolute; top: 851px; left: 2890px'><font color=white size=3>Гюго</font></a>
<a id='a260' name='#a260' style='position: absolute; top: 802px; left: 2890px'><font color=white size=3>Дюма</font></a>
<a id='a457' name='#a457' style='position: absolute; top: 900px; left: 2890px'><font color=white size=3>Мериме</font></a>
<a id='a1069' name='#a1069' style='position: absolute; top: 950px; left: 2890px'><font color=white size=3>Тютчев</font></a>
<a id='a198' name='#a198' style='position: absolute; top: 826px; left: 2890px'><font color=white size=3>Готорн</font></a>
<a id='a523' name='#a523' style='position: absolute; top: 925px; left: 2890px'><font color=white size=3>Одоевский</font></a>
<a id='a566' name='#a566' style='position: absolute; top: 629px; left: 2890px'><font color=white size=3>Полежаев</font></a>
<a id='a621' name='#a621' style='position: absolute; top: 820px; left: 2890px'><font color=white size=3>Санд</font></a>
<a id='a677' name='#a677' style='position: absolute; top: 771px; left: 2890px'><font color=white size=3>Сю</font></a>
<a id='a19' name='#a19' style='position: absolute; top: 826px; left: 2890px'><font color=white size=3>Андерс.</font></a>
<a id='a411' name='#a411' style='position: absolute; top: 833px; left: 2890px'><font color=white size=3>Лонгфел.</font></a>
<a id='a184' name='#a184' style='position: absolute; top: 771px; left: 2890px'><font color=white size=3>Гоголь</font></a>
<a id='a562' name='#a562' style='position: absolute; top: 759px; left: 2890px'><font color=white size=3>По</font></a>
<a id='a644' name='#a644' style='position: absolute; top: 752px; left: 2890px'><font color=white size=3>Словацкий</font></a>
<a id='a492' name='#a492' style='position: absolute; top: 851px; left: 2890px'><font color=white size=3>Мюссе</font></a>
<a id='a1240' name='#a1240' style='position: absolute; top: 974px; left: 2890px'><font color=white size=3>Гаскелл</font></a>
<a id='a76' name='#a76' style='position: absolute; top: 906px; left: 2890px'><font color=white size=3>Б-Стоу</font></a>
<a id='a199' name='#a199' style='position: absolute; top: 833px; left: 2890px'><font color=white size=3>Готье</font></a>
<a id='a686' name='#a686' style='position: absolute; top: 808px; left: 2890px'><font color=white size=3>Теккерей</font></a>
<a id='a177' name='#a177' style='position: absolute; top: 833px; left: 2890px'><font color=white size=3>Герцен</font></a>
<a id='a195' name='#a195' style='position: absolute; top: 900px; left: 2890px'><font color=white size=3>Гончаров</font></a>
<a id='a242' name='#a242' style='position: absolute; top: 845px; left: 2890px'><font color=white size=3>Диккенс</font></a>
<a id='a120' name='#a120' style='position: absolute; top: 728px; left: 2890px'><font color=white size=3>Бюхнер</font></a>
<a id='a373' name='#a373' style='position: absolute; top: 789px; left: 2890px'><font color=white size=3>Кьеркегор</font></a>
<a id='a650' name='#a650' style='position: absolute; top: 876px; left: 2890px'><font color=white size=3>Соллогуб</font></a>
<a id='a761' name='#a761' style='position: absolute; top: 814px; left: 2890px'><font color=white size=3>Хеббель</font></a>
<a id='a394' name='#a394' style='position: absolute; top: 752px; left: 2890px'><font color=white size=3>Лермонтов</font></a>
<a id='a267' name='#a267' style='position: absolute; top: 851px; left: 2890px'><font color=white size=3>Ершов</font></a>
<a id='a100' name='#a100' style='position: absolute; top: 876px; left: 2890px'><font color=white size=3>Ш Бронте</font></a>
<a id='a674' name='#a674' style='position: absolute; top: 950px; left: 2890px'><font color=white size=3>Сухово-К</font></a>
<a id='a698' name='#a698' style='position: absolute; top: 999px; left: 2890px'><font color=white size=3>А Толстой</font></a>
<a id='a702' name='#a702' style='position: absolute; top: 826px; left: 2890px'><font color=white size=3>Торо</font></a>
<a id='a101' name='#a101' style='position: absolute; top: 802px; left: 2890px'><font color=white size=3>Эм Бронте</font></a>
<a id='a593' name='#a593' style='position: absolute; top: 882px; left: 2890px'><font color=white size=3>Рид</font></a>
<a id='a701' name='#a701' style='position: absolute; top: 937px; left: 2890px'><font color=white size=3>Топелиус</font></a>
<a id='a709' name='#a709' style='position: absolute; top: 851px; left: 2890px'><font color=white size=3>Тургенев</font></a>
<a id='a1112' name='#a1112' style='position: absolute; top: 894px; left: 2890px'><font color=white size=3>Маркс</font></a>
<a id='a324' name='#a324' style='position: absolute; top: 925px; left: 2890px'><font color=white size=3>Келлер</font></a>
<a id='a451' name='#a451' style='position: absolute; top: 931px; left: 2890px'><font color=white size=3>Мелвилл</font></a>
<a id='a827' name='#a827' style='position: absolute; top: 826px; left: 2890px'><font color=white size=3>Д Элиот</font></a>
<a id='a1084' name='#a1084' style='position: absolute; top: 876px; left: 2890px'><font color=white size=3>Уитмен</font></a>
<a id='a102' name='#a102' style='position: absolute; top: 777px; left: 2890px'><font color=white size=3>Эн Бронте</font></a>
<a id='a1126' name='#a1126' style='position: absolute; top: 1024px; left: 2890px'><font color=white size=3>Фет</font></a>
<a id='a1218' name='#a1218' style='position: absolute; top: 931px; left: 2890px'><font color=white size=3>Энгельс</font></a>
<a id='a251' name='#a251' style='position: absolute; top: 894px; left: 2890px'><font color=white size=3>Достое.</font></a>
<a id='a501' name='#a501' style='position: absolute; top: 888px; left: 2890px'><font color=white size=3>Н Некра.</font></a>
<a id='a554' name='#a554' style='position: absolute; top: 876px; left: 2890px'><font color=white size=3>Писемский</font></a>
<a id='a740' name='#a740' style='position: absolute; top: 900px; left: 2890px'><font color=white size=3>Флобер</font></a>
<a id='a1167' name='#a1167' style='position: absolute; top: 857px; left: 2890px'><font color=white size=3>Бодлер</font></a>
<a id='a208' name='#a208' style='position: absolute; top: 956px; left: 2890px'><font color=white size=3>Григоров.</font></a>
<a id='a535' name='#a535' style='position: absolute; top: 913px; left: 2890px'><font color=white size=3>А Остров.</font></a>
<a id='a351' name='#a351' style='position: absolute; top: 931px; left: 2890px'><font color=white size=3>У Коллин.</font></a>
<a id='a1118' name='#a1118' style='position: absolute; top: 950px; left: 2890px'><font color=white size=3>Дюма-сын</font></a>
<a id='a194' name='#a194' style='position: absolute; top: 857px; left: 2890px'><font color=white size=3>Гонкур</font></a>
<a id='a620' name='#a620' style='position: absolute; top: 937px; left: 2890px'><font color=white size=3>С-Щедрин</font></a>
<a id='a361' name='#a361' style='position: absolute; top: 906px; left: 2890px'><font color=white size=3>Костер</font></a>
<a id='a719' name='#a719' style='position: absolute; top: 980px; left: 2890px'><font color=white size=3>Уоллес</font></a>
<a id='a134' name='#a134' style='position: absolute; top: 993px; left: 2890px'><font color=white size=3>Верн</font></a>
<a id='a286' name='#a286' style='position: absolute; top: 974px; left: 2890px'><font color=white size=3>Ибсен</font></a>
<a id='a699' name='#a699' style='position: absolute; top: 974px; left: 2890px'><font color=white size=3>Л Толстой</font></a>
<a id='a787' name='#a787' style='position: absolute; top: 956px; left: 2890px'><font color=white size=3>Черныш.</font></a>
<a id='a433' name='#a433' style='position: absolute; top: 1005px; left: 2890px'><font color=white size=3>Мало</font></a>
<a id='a396' name='#a396' style='position: absolute; top: 950px; left: 2890px'><font color=white size=3>Лесков</font></a>
<a id='a375' name='#a375' style='position: absolute; top: 980px; left: 2890px'><font color=white size=3>Кэрролл</font></a>
<a id='a567' name='#a567' style='position: absolute; top: 802px; left: 2890px'><font color=white size=3>Помяловск.</font></a>
<a id='a684' name='#a684' style='position: absolute; top: 1042px; left: 2890px'><font color=white size=3>Твен</font></a>
<a id='a83' name='#a83' style='position: absolute; top: 1048px; left: 2890px'><font color=white size=3>Боборыкин</font></a>
<a id='a166' name='#a166' style='position: absolute; top: 999px; left: 2890px'><font color=white size=3>Гарт</font></a>
<a id='a278' name='#a278' style='position: absolute; top: 987px; left: 2890px'><font color=white size=3>З-Мазох</font></a>
<a id='a237' name='#a237' style='position: absolute; top: 1054px; left: 2890px'><font color=white size=3>Джованьо.</font></a>
<a id='a161' name='#a161' style='position: absolute; top: 1122px; left: 2890px'><font color=white size=3>Гарди</font></a>
<a id='a246' name='#a246' style='position: absolute; top: 999px; left: 2890px'><font color=white size=3>Доде</font></a>
<a id='a282' name='#a282' style='position: absolute; top: 1024px; left: 2890px'><font color=white size=3>Золя</font></a>
<a id='a366' name='#a366' style='position: absolute; top: 1005px; left: 2890px'><font color=white size=3>Крестовск.</font></a>
<a id='a234' name='#a234' style='position: absolute; top: 1073px; left: 2890px'><font color=white size=3>Г Джеймс</font></a>
<a id='a660' name='#a660' style='position: absolute; top: 1024px; left: 2890px'><font color=white size=3>Станюкович</font></a>
<a id='a510' name='#a510' style='position: absolute; top: 1024px; left: 2890px'><font color=white size=3>Ницше</font></a>
<a id='a633' name='#a633' style='position: absolute; top: 1079px; left: 2890px'><font color=white size=3>Сенкевич</font></a>
<a id='a110' name='#a110' style='position: absolute; top: 1067px; left: 2890px'><font color=white size=3>Буссенар</font></a>
<a id='a1092' name='#a1092' style='position: absolute; top: 1073px; left: 2890px'><font color=white size=3>Стокер</font></a>
<a id='a219' name='#a219' style='position: absolute; top: 1073px; left: 2890px'><font color=white size=3>Гюисманс</font></a>
<a id='a669' name='#a669' style='position: absolute; top: 1079px; left: 2890px'><font color=white size=3>Стринд..рг</font></a>
<a id='a1115' name='#a1115' style='position: absolute; top: 1110px; left: 2890px'><font color=white size=3>Бёрнетт</font></a>
<a id='a477' name='#a477' style='position: absolute; top: 1048px; left: 2890px'><font color=white size=3>Мопассан</font></a>
<a id='a664' name='#a664' style='position: absolute; top: 1017px; left: 2890px'><font color=white size=3>Стивенс.</font></a>
<a id='a1136' name='#a1136' style='position: absolute; top: 962px; left: 2890px'><font color=white size=3>Прутков</font></a>
<a id='a295' name='#a295' style='position: absolute; top: 1196px; left: 2890px'><font color=white size=3>Йирасек</font></a>
<a id='a164' name='#a164' style='position: absolute; top: 1073px; left: 2890px'><font color=white size=3>Гарин-М</font></a>
<a id='a435' name='#a435' style='position: absolute; top: 1097px; left: 2890px'><font color=white size=3>Мамин-С</font></a>
<a id='a359' name='#a359' style='position: absolute; top: 1171px; left: 2890px'><font color=white size=3>Короленко</font></a>
<a id='a714' name='#a714' style='position: absolute; top: 1048px; left: 2890px'><font color=white size=3>Уайльд</font></a>
<a id='a1037' name='#a1037' style='position: absolute; top: 1116px; left: 2890px'><font color=white size=3>Гиляровск.</font></a>
<a id='a55' name='#a55' style='position: absolute; top: 1134px; left: 2890px'><font color=white size=3>Баум</font></a>
<a id='a747' name='#a747' style='position: absolute; top: 1147px; left: 2890px'><font color=white size=3>Франко</font></a>
<a id='a749' name='#a749' style='position: absolute; top: 1184px; left: 2890px'><font color=white size=3>Фрейд</font></a>
<a id='a818' name='#a818' style='position: absolute; top: 1270px; left: 2890px'><font color=white size=3>Б Шоу</font></a>
<a id='a1152' name='#a1152' style='position: absolute; top: 1128px; left: 2890px'><font color=white size=3>Хаггард</font></a>
<a id='a1074' name='#a1074' style='position: absolute; top: 1184px; left: 2890px'><font color=white size=3>Рони</font></a>
<a id='a356' name='#a356' style='position: absolute; top: 1153px; left: 2890px'><font color=white size=3>Конрад</font></a>
<a id='a1203' name='#a1203' style='position: absolute; top: 1153px; left: 2890px'><font color=white size=3>Зудерман</font></a>
<a id='a378' name='#a378' style='position: absolute; top: 1178px; left: 2890px'><font color=white size=3>Лагерл.</font></a>
<a id='a158' name='#a158' style='position: absolute; top: 1097px; left: 2890px'><font color=white size=3>Гамсун</font></a>
<a id='a236' name='#a236' style='position: absolute; top: 1147px; left: 2890px'><font color=white size=3>Джером</font></a>
<a id='a247' name='#a247' style='position: absolute; top: 1159px; left: 2890px'><font color=white size=3>Дойл</font></a>
<a id='a1172' name='#a1172' style='position: absolute; top: 1171px; left: 2890px'><font color=white size=3>Грэм</font></a>
<a id='a54' name='#a54' style='position: absolute; top: 1202px; left: 2890px'><font color=white size=3>Барри</font></a>
<a id='a789' name='#a789' style='position: absolute; top: 974px; left: 2890px'><font color=white size=3>Чехов</font></a>
<a id='a1048' name='#a1048' style='position: absolute; top: 1202px; left: 2890px'><font color=white size=3>С-Томпс.</font></a>
<a id='a1195' name='#a1195' style='position: absolute; top: 1202px; left: 2890px'><font color=white size=3>Тагор</font></a>
<a id='a168' name='#a168' style='position: absolute; top: 1227px; left: 2890px'><font color=white size=3>Гауптман</font></a>
<a id='a461' name='#a461' style='position: absolute; top: 1221px; left: 2890px'><font color=white size=3>Метерлинк</font></a>
<a id='a480' name='#a480' style='position: absolute; top: 1134px; left: 2890px'><font color=white size=3>Мори</font></a>
<a id='a518' name='#a518' style='position: absolute; top: 1110px; left: 2890px'><font color=white size=3>Генри</font></a>
<a id='a815' name='#a815' style='position: absolute; top: 1171px; left: 2890px'><font color=white size=3>Шницлер</font></a>
<a id='a50' name='#a50' style='position: absolute; top: 1196px; left: 2890px'><font color=white size=3>Бар</font></a>
<a id='a221' name='#a221' style='position: absolute; top: 1202px; left: 2890px'><font color=white size=3>Аннунцио</font></a>
<a id='a635' name='#a635' style='position: absolute; top: 999px; left: 2890px'><font color=white size=3>Серафим..ич</font></a>
<a id='a651' name='#a651' style='position: absolute; top: 1122px; left: 2890px'><font color=white size=3>Сологуб</font></a>
<a id='a1043' name='#a1043' style='position: absolute; top: 1245px; left: 2890px'><font color=white size=3>Обручев</font></a>
<a id='a144' name='#a144' style='position: absolute; top: 1239px; left: 2890px'><font color=white size=3>Войнич</font></a>
<a id='a270' name='#a270' style='position: absolute; top: 1221px; left: 2890px'><font color=white size=3>Жеромский</font></a>
<a id='a717' name='#a717' style='position: absolute; top: 1196px; left: 2890px'><font color=white size=3>Унамуно</font></a>
<a id='a775' name='#a775' style='position: absolute; top: 1141px; left: 2890px'><font color=white size=3>Хух</font></a>
<a id='a337' name='#a337' style='position: absolute; top: 1024px; left: 2890px'><font color=white size=3>Киплинг</font></a>
<a id='a456' name='#a456' style='position: absolute; top: 1196px; left: 2890px'><font color=white size=3>Мережк.</font></a>
<a id='a626' name='#a626' style='position: absolute; top: 1221px; left: 2890px'><font color=white size=3>Свирский</font></a>
<a id='a65' name='#a65' style='position: absolute; top: 1258px; left: 2890px'><font color=white size=3>Бенавен.</font></a>
<a id='a602' name='#a602' style='position: absolute; top: 1227px; left: 2890px'><font color=white size=3>Роллан</font></a>
<a id='a724' name='#a724' style='position: absolute; top: 1233px; left: 2890px'><font color=white size=3>Уэллс</font></a>
<a id='a79' name='#a79' style='position: absolute; top: 1245px; left: 2890px'><font color=white size=3>Ибаньес</font></a>
<a id='a133' name='#a133' style='position: absolute; top: 1295px; left: 2890px'><font color=white size=3>Вересаев</font></a>
<a id='a190' name='#a190' style='position: absolute; top: 1196px; left: 2890px'><font color=white size=3>Голсуор.</font></a>
<a id='a499' name='#a499' style='position: absolute; top: 1159px; left: 2890px'><font color=white size=3>Нацумэ</font></a>
<a id='a687' name='#a687' style='position: absolute; top: 1227px; left: 2890px'><font color=white size=3>Телешов</font></a>
<a id='a197' name='#a197' style='position: absolute; top: 974px; left: 2890px'><font color=white size=3>Горький</font></a>
<a id='a343' name='#a343' style='position: absolute; top: 1270px; left: 2890px'><font color=white size=3>Клодель</font></a>
<a id='a423' name='#a423' style='position: absolute; top: 1196px; left: 2890px'><font color=white size=3>Майринк</font></a>
<a id='a603' name='#a603' style='position: absolute; top: 1153px; left: 2890px'><font color=white size=3>Ростан</font></a>
<a id='a1071' name='#a1071' style='position: absolute; top: 1159px; left: 2890px'><font color=white size=3>Э Портер</font></a>
<a id='a271' name='#a271' style='position: absolute; top: 1258px; left: 2890px'><font color=white size=3>Жид</font></a>
<a id='a109' name='#a109' style='position: absolute; top: 1319px; left: 2890px'><font color=white size=3>Бунин</font></a>
<a id='a372' name='#a372' style='position: absolute; top: 1251px; left: 2890px'><font color=white size=3>Куприн</font></a>
<a id='a515' name='#a515' style='position: absolute; top: 1110px; left: 2890px'><font color=white size=3>Норрис</font></a>
<a id='a22' name='#a22' style='position: absolute; top: 1165px; left: 2890px'><font color=white size=3>Л Андр.</font></a>
<a id='a252' name='#a252' style='position: absolute; top: 1245px; left: 2890px'><font color=white size=3>Драйзер</font></a>
<a id='a439' name='#a439' style='position: absolute; top: 1214px; left: 2890px'><font color=white size=3>Г Манн</font></a>
<a id='a579' name='#a579' style='position: absolute; top: 999px; left: 2890px'><font color=white size=3>Пруст</font></a>
<a id='a1081' name='#a1081' style='position: absolute; top: 1178px; left: 2890px'><font color=white size=3>Арсеньев</font></a>
<a id='a106' name='#a106' style='position: absolute; top: 1147px; left: 2890px'><font color=white size=3>Брюсов</font></a>
<a id='a294' name='#a294' style='position: absolute; top: 1264px; left: 2890px'><font color=white size=3>Йенсен</font></a>
<a id='a350' name='#a350' style='position: absolute; top: 1295px; left: 2890px'><font color=white size=3>Колетт</font></a>
<a id='a577' name='#a577' style='position: absolute; top: 1282px; left: 2890px'><font color=white size=3>Пришвин</font></a>
<a id='a743' name='#a743' style='position: absolute; top: 1122px; left: 2890px'><font color=white size=3>Форш</font></a>
<a id='a813' name='#a813' style='position: absolute; top: 1270px; left: 2890px'><font color=white size=3>Шмелёв</font></a>
<a id='a1072' name='#a1072' style='position: absolute; top: 1024px; left: 2890px'><font color=white size=3>Шишков</font></a>
<a id='a484' name='#a484' style='position: absolute; top: 1307px; left: 2890px'><font color=white size=3>Моэм</font></a>
<a id='a788' name='#a788' style='position: absolute; top: 1227px; left: 2890px'><font color=white size=3>Честертон</font></a>
<a id='a440' name='#a440' style='position: absolute; top: 1288px; left: 2890px'><font color=white size=3>Т Манн</font></a>
<a id='a594' name='#a594' style='position: absolute; top: 1048px; left: 2890px'><font color=white size=3>Рильке</font></a>
<a id='a1155' name='#a1155' style='position: absolute; top: 1338px; left: 2890px'><font color=white size=3>С-Ценский</font></a>
<a id='a1079' name='#a1079' style='position: absolute; top: 1097px; left: 2890px'><font color=white size=3>Ян</font></a>
<a id='a1052' name='#a1052' style='position: absolute; top: 1276px; left: 2890px'><font color=white size=3>Сабатини</font></a>
<a id='a1216' name='#a1216' style='position: absolute; top: 1276px; left: 2890px'><font color=white size=3>Э Берроу.</font></a>
<a id='a412' name='#a412' style='position: absolute; top: 1178px; left: 2890px'><font color=white size=3>Лондон</font></a>
<a id='a705' name='#a705' style='position: absolute; top: 1048px; left: 2890px'><font color=white size=3>Тренёв</font></a>
<a id='a179' name='#a179' style='position: absolute; top: 1319px; left: 2890px'><font color=white size=3>Гессе</font></a>
<a id='a592' name='#a592' style='position: absolute; top: 1196px; left: 2890px'><font color=white size=3>Ремизов</font></a>
<a id='a1047' name='#a1047' style='position: absolute; top: 1165px; left: 2890px'><font color=white size=3>Кун</font></a>
<a id='a34' name='#a34' style='position: absolute; top: 1202px; left: 2890px'><font color=white size=3>Арцыбаш.</font></a>
<a id='a125' name='#a125' style='position: absolute; top: 1221px; left: 2890px'><font color=white size=3>Вальзер</font></a>
<a id='a228' name='#a228' style='position: absolute; top: 1362px; left: 2890px'><font color=white size=3>Дёблин</font></a>
<a id='a328' name='#a328' style='position: absolute; top: 1227px; left: 2890px'><font color=white size=3>Кервуд</font></a>
<a id='a41' name='#a41' style='position: absolute; top: 1251px; left: 2890px'><font color=white size=3>Бажов</font></a>
<a id='a325' name='#a325' style='position: absolute; top: 1368px; left: 2890px'><font color=white size=3>Келлерман</font></a>
<a id='a1179' name='#a1179' style='position: absolute; top: 1301px; left: 2890px'><font color=white size=3>Писахов</font></a>
<a id='a62' name='#a62' style='position: absolute; top: 1245px; left: 2890px'><font color=white size=3>Белый</font></a>
<a id='a80' name='#a80' style='position: absolute; top: 1171px; left: 2890px'><font color=white size=3>Блок</font></a>
<a id='a211' name='#a211' style='position: absolute; top: 1233px; left: 2890px'><font color=white size=3>А Грин</font></a>
<a id='a486' name='#a486' style='position: absolute; top: 1122px; left: 2890px'><font color=white size=3>Музиль</font></a>
<a id='a1082' name='#a1082' style='position: absolute; top: 1221px; left: 2890px'><font color=white size=3>Черный</font></a>
<a id='a1237' name='#a1237' style='position: absolute; top: 1251px; left: 2890px'><font color=white size=3>Шпенглер</font></a>
<a id='a5' name='#a5' style='position: absolute; top: 1171px; left: 2890px'><font color=white size=3>Аверчен.</font></a>
<a id='a152' name='#a152' style='position: absolute; top: 1270px; left: 2890px'><font color=white size=3>Вудхауз</font></a>
<a id='a160' name='#a160' style='position: absolute; top: 1332px; left: 2890px'><font color=white size=3>Гар</font></a>
<a id='a777' name='#a777' style='position: absolute; top: 1288px; left: 2890px'><font color=white size=3>Цвейг</font></a>
<a id='a153' name='#a153' style='position: absolute; top: 1147px; left: 2890px'><font color=white size=3>В Вулф</font></a>
<a id='a238' name='#a238' style='position: absolute; top: 1171px; left: 2890px'><font color=white size=3>Джойс</font></a>
<a id='a272' name='#a272' style='position: absolute; top: 1270px; left: 2890px'><font color=white size=3>Жироду</font></a>
<a id='a349' name='#a349' style='position: absolute; top: 1147px; left: 2890px'><font color=white size=3>Колас</font></a>
<a id='a464' name='#a464' style='position: absolute; top: 1276px; left: 2890px'><font color=white size=3>Милн</font></a>
<a id='a718' name='#a718' style='position: absolute; top: 1313px; left: 2890px'><font color=white size=3>Унсет</font></a>
<a id='a746' name='#a746' style='position: absolute; top: 1332px; left: 2890px'><font color=white size=3>Франк</font></a>
<a id='a796' name='#a796' style='position: absolute; top: 1325px; left: 2890px'><font color=white size=3>Чуковск.</font></a>
<a id='a170' name='#a170' style='position: absolute; top: 1196px; left: 2890px'><font color=white size=3>Гашек</font></a>
<a id='a321' name='#a321' style='position: absolute; top: 1221px; left: 2890px'><font color=white size=3>Кафка</font></a>
<a id='a700' name='#a700' style='position: absolute; top: 1344px; left: 2890px'><font color=white size=3>А Толстой</font></a>
<a id='a63' name='#a63' style='position: absolute; top: 1270px; left: 2890px'><font color=white size=3>А Беляев</font></a>
<a id='a277' name='#a277' style='position: absolute; top: 1264px; left: 2890px'><font color=white size=3>Замятин</font></a>
<a id='a732' name='#a732' style='position: absolute; top: 1387px; left: 2890px'><font color=white size=3>Фейхтв..ер</font></a>
<a id='a413' name='#a413' style='position: absolute; top: 1245px; left: 2890px'><font color=white size=3>Лоуренс</font></a>
<a id='a482' name='#a482' style='position: absolute; top: 1412px; left: 2890px'><font color=white size=3>Моруа</font></a>
<a id='a103' name='#a103' style='position: absolute; top: 1295px; left: 2890px'><font color=white size=3>Брох</font></a>
<a id='a680' name='#a680' style='position: absolute; top: 1356px; left: 2890px'><font color=white size=3>Танидз.</font></a>
<a id='a1165' name='#a1165' style='position: absolute; top: 1338px; left: 2890px'><font color=white size=3>Антарова</font></a>
<a id='a1187' name='#a1187' style='position: absolute; top: 1295px; left: 2890px'><font color=white size=3>Ходасевич</font></a>
<a id='a1221' name='#a1221' style='position: absolute; top: 1073px; left: 2890px'><font color=white size=3>Н Гумил.</font></a>
<a id='a446' name='#a446' style='position: absolute; top: 1350px; left: 2890px'><font color=white size=3>Маршак</font></a>
<a id='a1211' name='#a1211' style='position: absolute; top: 1301px; left: 2890px'><font color=white size=3>Кржижан.</font></a>
<a id='a316' name='#a316' style='position: absolute; top: 1332px; left: 2890px'><font color=white size=3>Карнеги</font></a>
<a id='a374' name='#a374' style='position: absolute; top: 1418px; left: 2890px'><font color=white size=3>Кэри</font></a>
<a id='a425' name='#a425' style='position: absolute; top: 1276px; left: 2890px'><font color=white size=3>Макаренк.</font></a>
<a id='a784' name='#a784' style='position: absolute; top: 1184px; left: 2890px'><font color=white size=3>Чандлер</font></a>
<a id='a828' name='#a828' style='position: absolute; top: 1368px; left: 2890px'><font color=white size=3>Т Элиот</font></a>
<a id='a38' name='#a38' style='position: absolute; top: 1418px; left: 2890px'><font color=white size=3>Ахматова</font></a>
<a id='a220' name='#a220' style='position: absolute; top: 1332px; left: 2890px'><font color=white size=3>Гюнтекин</font></a>
<a id='a345' name='#a345' style='position: absolute; top: 1251px; left: 2890px'><font color=white size=3>Клычков</font></a>
<a id='a348' name='#a348' style='position: absolute; top: 1356px; left: 2890px'><font color=white size=3>Кокто</font></a>
<a id='a1219' name='#a1219' style='position: absolute; top: 1233px; left: 2890px'><font color=white size=3>Э Гардн.р</font></a>
<a id='a367' name='#a367' style='position: absolute; top: 1258px; left: 2890px'><font color=white size=3>Кристи</font></a>
<a id='a544' name='#a544' style='position: absolute; top: 1319px; left: 2890px'><font color=white size=3>Пастерн.</font></a>
<a id='a570' name='#a570' style='position: absolute; top: 1566px; left: 2890px'><font color=white size=3>К Портер</font></a>
<a id='a785' name='#a785' style='position: absolute; top: 1295px; left: 2890px'><font color=white size=3>Чапек</font></a>
<a id='a1198' name='#a1198' style='position: absolute; top: 1307px; left: 2890px'><font color=white size=3>Верфель</font></a>
<a id='a107' name='#a107' style='position: absolute; top: 1276px; left: 2890px'><font color=white size=3>Булгаков</font></a>
<a id='a146' name='#a146' style='position: absolute; top: 1350px; left: 2890px'><font color=white size=3>Волков</font></a>
<a id='a377' name='#a377' style='position: absolute; top: 1516px; left: 2890px'><font color=white size=3>Лагеркви.</font></a>
<a id='a437' name='#a437' style='position: absolute; top: 1319px; left: 2890px'><font color=white size=3>Мандельш.</font></a>
<a id='a462' name='#a462' style='position: absolute; top: 1381px; left: 2890px'><font color=white size=3>Г Милл.</font></a>
<a id='a745' name='#a745' style='position: absolute; top: 1325px; left: 2890px'><font color=white size=3>Фраерман</font></a>
<a id='a752' name='#a752' style='position: absolute; top: 1190px; left: 2890px'><font color=white size=3>Фурманов</font></a>
<a id='a833' name='#a833' style='position: absolute; top: 1375px; left: 2890px'><font color=white size=3>Эренбур.</font></a>
<a id='a12' name='#a12' style='position: absolute; top: 1258px; left: 2890px'><font color=white size=3>Акутаг.</font></a>
<a id='a323' name='#a323' style='position: absolute; top: 1282px; left: 2890px'><font color=white size=3>Кейн</font></a>
<a id='a545' name='#a545' style='position: absolute; top: 1381px; left: 2890px'><font color=white size=3>Паустовск.</font></a>
<a id='a696' name='#a696' style='position: absolute; top: 1393px; left: 2890px'><font color=white size=3>Толкин</font></a>
<a id='a731' name='#a731' style='position: absolute; top: 1270px; left: 2890px'><font color=white size=3>Федин</font></a>
<a id='a778' name='#a778' style='position: absolute; top: 1344px; left: 2890px'><font color=white size=3>Цветаева</font></a>
<a id='a1120' name='#a1120' style='position: absolute; top: 1221px; left: 2890px'><font color=white size=3>Степанов</font></a>
<a id='a448' name='#a448' style='position: absolute; top: 1073px; left: 2890px'><font color=white size=3>Маяковский</font></a>
<a id='a728' name='#a728' style='position: absolute; top: 1319px; left: 2890px'><font color=white size=3>Фаллада</font></a>
<a id='a811' name='#a811' style='position: absolute; top: 1436px; left: 2890px'><font color=white size=3>Шкловс.</font></a>
<a id='a40' name='#a40' style='position: absolute; top: 1245px; left: 2890px'><font color=white size=3>Бабель</font></a>
<a id='a284' name='#a284' style='position: absolute; top: 1245px; left: 2890px'><font color=white size=3>Зощенко</font></a>
<a id='a550' name='#a550' style='position: absolute; top: 1295px; left: 2890px'><font color=white size=3>Пильняк</font></a>
<a id='a575' name='#a575' style='position: absolute; top: 1307px; left: 2890px'><font color=white size=3>Пристли</font></a>
<a id='a630' name='#a630' style='position: absolute; top: 1442px; left: 2890px'><font color=white size=3>Селин</font></a>
<a id='a710' name='#a710' style='position: absolute; top: 1313px; left: 2890px'><font color=white size=3>Тынянов</font></a>
<a id='a755' name='#a755' style='position: absolute; top: 1344px; left: 2890px'><font color=white size=3>Хаксли</font></a>
<a id='a766' name='#a766' style='position: absolute; top: 1208px; left: 2890px'><font color=white size=3>Хеммет</font></a>
<a id='a1116' name='#a1116' style='position: absolute; top: 1442px; left: 2890px'><font color=white size=3>Фидлер</font></a>
<a id='a1107' name='#a1107' style='position: absolute; top: 1405px; left: 2890px'><font color=white size=3>Дери</font></a>
<a id='a1104' name='#a1104' style='position: absolute; top: 1375px; left: 2890px'><font color=white size=3>Бианки</font></a>
<a id='a268' name='#a268' style='position: absolute; top: 1258px; left: 2890px'><font color=white size=3>Есенин</font></a>
<a id='a287' name='#a287' style='position: absolute; top: 1356px; left: 2890px'><font color=white size=3>В Иван.в</font></a>
<a id='a759' name='#a759' style='position: absolute; top: 1424px; left: 2890px'><font color=white size=3>Хартли</font></a>
<a id='a250' name='#a250' style='position: absolute; top: 1541px; left: 2890px'><font color=white size=3>Пассос</font></a>
<a id='a368' name='#a368' style='position: absolute; top: 1442px; left: 2890px'><font color=white size=3>Кронин</font></a>
<a id='a738' name='#a738' style='position: absolute; top: 1393px; left: 2890px'><font color=white size=3>Фицджера.</font></a>
<a id='a781' name='#a781' style='position: absolute; top: 1424px; left: 2890px'><font color=white size=3>Цукмайер</font></a>
<a id='a803' name='#a803' style='position: absolute; top: 1362px; left: 2890px'><font color=white size=3>Шварц</font></a>
<a id='a1173' name='#a1173' style='position: absolute; top: 1375px; left: 2890px'><font color=white size=3>Шергин</font></a>
<a id='a1178' name='#a1178' style='position: absolute; top: 1436px; left: 2890px'><font color=white size=3>Жуков</font></a>
<a id='a27' name='#a27' style='position: absolute; top: 1455px; left: 2890px'><font color=white size=3>Арагон</font></a>
<a id='a217' name='#a217' style='position: absolute; top: 1424px; left: 2890px'><font color=white size=3>Гэллико</font></a>
<a id='a319' name='#a319' style='position: absolute; top: 1393px; left: 2890px'><font color=white size=3>Катаев</font></a>
<a id='a741' name='#a741' style='position: absolute; top: 1467px; left: 2890px'><font color=white size=3>Фолкнер</font></a>
<a id='a74' name='#a74' style='position: absolute; top: 1368px; left: 2890px'><font color=white size=3>Бжехва</font></a>
<a id='a97' name='#a97' style='position: absolute; top: 1393px; left: 2890px'><font color=white size=3>Брехт</font></a>
<a id='a165' name='#a165' style='position: absolute; top: 1270px; left: 2890px'><font color=white size=3>Лорка</font></a>
<a id='a591' name='#a591' style='position: absolute; top: 1405px; left: 2890px'><font color=white size=3>Ремарк</font></a>
<a id='a1056' name='#a1056' style='position: absolute; top: 1375px; left: 2890px'><font color=white size=3>К Льюис</font></a>
<a id='a36' name='#a36' style='position: absolute; top: 1325px; left: 2890px'><font color=white size=3>Астуриас</font></a>
<a id='a93' name='#a93' style='position: absolute; top: 1375px; left: 2890px'><font color=white size=3>Борхес</font></a>
<a id='a121' name='#a121' style='position: absolute; top: 1301px; left: 2890px'><font color=white size=3>Вагинов</font></a>
<a id='a298' name='#a298' style='position: absolute; top: 1418px; left: 2890px'><font color=white size=3>Каваб.</font></a>
<a id='a330' name='#a330' style='position: absolute; top: 1449px; left: 2890px'><font color=white size=3>Кестнер</font></a>
<a id='a393' name='#a393' style='position: absolute; top: 1615px; left: 2890px'><font color=white size=3>Леонов</font></a>
<a id='a493' name='#a493' style='position: absolute; top: 1430px; left: 2890px'><font color=white size=3>Набоков</font></a>
<a id='a530' name='#a530' style='position: absolute; top: 1399px; left: 2890px'><font color=white size=3>Олеша</font></a>
<a id='a559' name='#a559' style='position: absolute; top: 1344px; left: 2890px'><font color=white size=3>Платонов</font></a>
<a id='a765' name='#a765' style='position: absolute; top: 1492px; left: 2890px'><font color=white size=3>Хемингу.</font></a>
<a id='a279' name='#a279' style='position: absolute; top: 1418px; left: 2890px'><font color=white size=3>Зегерс</font></a>
<a id='a290' name='#a290' style='position: absolute; top: 1171px; left: 2890px'><font color=white size=3>Петров</font></a>
<a id='a469' name='#a469' style='position: absolute; top: 1356px; left: 2890px'><font color=white size=3>М Митч.</font></a>
<a id='a623' name='#a623' style='position: absolute; top: 1504px; left: 2890px'><font color=white size=3>Саррот</font></a>
<a id='a634' name='#a634' style='position: absolute; top: 1332px; left: 2890px'><font color=white size=3>С-Экзюп.</font></a>
<a id='a736' name='#a736' style='position: absolute; top: 1368px; left: 2890px'><font color=white size=3>Филиппо</font></a>
<a id='a832' name='#a832' style='position: absolute; top: 1590px; left: 2890px'><font color=white size=3>Эрдман</font></a>
<a id='a1059' name='#a1059' style='position: absolute; top: 1418px; left: 2890px'><font color=white size=3>Ларри</font></a>
<a id='a434' name='#a434' style='position: absolute; top: 1442px; left: 2890px'><font color=white size=3>Мальро</font></a>
<a id='a727' name='#a727' style='position: absolute; top: 1245px; left: 2890px'><font color=white size=3>Фадеев</font></a>
<a id='a92' name='#a92' style='position: absolute; top: 1442px; left: 2890px'><font color=white size=3>Борген</font></a>
<a id='a300' name='#a300' style='position: absolute; top: 1467px; left: 2890px'><font color=white size=3>Каверин</font></a>
<a id='a382' name='#a382' style='position: absolute; top: 1504px; left: 2890px'><font color=white size=3>Лаксне.</font></a>
<a id='a533' name='#a533' style='position: absolute; top: 1399px; left: 2890px'><font color=white size=3>Осеева</font></a>
<a id='a661' name='#a661' style='position: absolute; top: 1412px; left: 2890px'><font color=white size=3>Стейнбек</font></a>
<a id='a141' name='#a141' style='position: absolute; top: 1319px; left: 2890px'><font color=white size=3>Во</font></a>
<a id='a327' name='#a327' style='position: absolute; top: 1479px; left: 2890px'><font color=white size=3>Кено</font></a>
<a id='a379' name='#a379' style='position: absolute; top: 1442px; left: 2890px'><font color=white size=3>Лагин</font></a>
<a id='a531' name='#a531' style='position: absolute; top: 1362px; left: 2890px'><font color=white size=3>Оруэлл</font></a>
<a id='a637' name='#a637' style='position: absolute; top: 1356px; left: 2890px'><font color=white size=3>Сименон</font></a>
<a id='a841' name='#a841' style='position: absolute; top: 1486px; left: 2890px'><font color=white size=3>Юрсенар</font></a>
<a id='a1119' name='#a1119' style='position: absolute; top: 1387px; left: 2890px'><font color=white size=3>Заболоц.</font></a>
<a id='a1062' name='#a1062' style='position: absolute; top: 1510px; left: 2890px'><font color=white size=3>Стоун</font></a>
<a id='a156' name='#a156' style='position: absolute; top: 1301px; left: 2890px'><font color=white size=3>Гайдар</font></a>
<a id='a212' name='#a212' style='position: absolute; top: 1405px; left: 2890px'><font color=white size=3>Г Грин</font></a>
<a id='a280' name='#a280' style='position: absolute; top: 1399px; left: 2890px'><font color=white size=3>Зингер</font></a>
<a id='a317' name='#a317' style='position: absolute; top: 1350px; left: 2890px'><font color=white size=3>Карпент.</font></a>
<a id='a445' name='#a445' style='position: absolute; top: 1368px; left: 2890px'><font color=white size=3>Мартинсон</font></a>
<a id='a503' name='#a503' style='position: absolute; top: 1430px; left: 2890px'><font color=white size=3>Неруда</font></a>
<a id='a536' name='#a536' style='position: absolute; top: 1196px; left: 2890px'><font color=white size=3>Н Островск.</font></a>
<a id='a618' name='#a618' style='position: absolute; top: 1424px; left: 2890px'><font color=white size=3>Саймак</font></a>
<a id='a1156' name='#a1156' style='position: absolute; top: 1461px; left: 2890px'><font color=white size=3>Гинзбург</font></a>
<a id='a1125' name='#a1125' style='position: absolute; top: 1535px; left: 2890px'><font color=white size=3>Головкина</font></a>
<a id='a1238' name='#a1238' style='position: absolute; top: 1504px; left: 2890px'><font color=white size=3>Дали</font></a>
<a id='a214' name='#a214' style='position: absolute; top: 1313px; left: 2890px'><font color=white size=3>Гроссман</font></a>
<a id='a318' name='#a318' style='position: absolute; top: 1473px; left: 2890px'><font color=white size=3>Кассиль</font></a>
<a id='a613' name='#a613' style='position: absolute; top: 1467px; left: 2890px'><font color=white size=3>Рэнд</font></a>
<a id='a624' name='#a624' style='position: absolute; top: 1467px; left: 2890px'><font color=white size=3>Сартр</font></a>
<a id='a647' name='#a647' style='position: absolute; top: 1332px; left: 2890px'><font color=white size=3>Сноу</font></a>
<a id='a707' name='#a707' style='position: absolute; top: 1547px; left: 2890px'><font color=white size=3>Троепол.</font></a>
<a id='a817' name='#a817' style='position: absolute; top: 1516px; left: 2890px'><font color=white size=3>Шолохов</font></a>
<a id='a1153' name='#a1153' style='position: absolute; top: 1295px; left: 2890px'><font color=white size=3>Панова</font></a>
<a id='a1145' name='#a1145' style='position: absolute; top: 1344px; left: 2890px'><font color=white size=3>Хармс</font></a>
<a id='a57' name='#a57' style='position: absolute; top: 1492px; left: 2890px'><font color=white size=3>Беккет</font></a>
<a id='a111' name='#a111' style='position: absolute; top: 1418px; left: 2890px'><font color=white size=3>Буццати</font></a>
<a id='a1170' name='#a1170' style='position: absolute; top: 1381px; left: 2890px'><font color=white size=3>Чейз</font></a>
<a id='a1080' name='#a1080' style='position: absolute; top: 1473px; left: 2890px'><font color=white size=3>Барто</font></a>
<a id='a1044' name='#a1044' style='position: absolute; top: 1295px; left: 2890px'><font color=white size=3>Соловьёв</font></a>
<a id='a1235' name='#a1235' style='position: absolute; top: 1399px; left: 2890px'><font color=white size=3>Андреев</font></a>
<a id='a407' name='#a407' style='position: absolute; top: 1572px; left: 2890px'><font color=white size=3>Линдгр.</font></a>
<a id='a479' name='#a479' style='position: absolute; top: 1516px; left: 2890px'><font color=white size=3>Моравиа</font></a>
<a id='a798' name='#a798' style='position: absolute; top: 1492px; left: 2890px'><font color=white size=3>Шаламов</font></a>
<a id='a1096' name='#a1096' style='position: absolute; top: 1393px; left: 2890px'><font color=white size=3>Хайнлайн</font></a>
<a id='a1091' name='#a1091' style='position: absolute; top: 1492px; left: 2890px'><font color=white size=3>Морье</font></a>
<a id='a1073' name='#a1073' style='position: absolute; top: 1498px; left: 2890px'><font color=white size=3>А Некрас.</font></a>
<a id='a29' name='#a29' style='position: absolute; top: 1640px; left: 2890px'><font color=white size=3>Арбузов</font></a>
<a id='a84' name='#a84' style='position: absolute; top: 1492px; left: 2890px'><font color=white size=3>Бовуар</font></a>
<a id='a275' name='#a275' style='position: absolute; top: 1590px; left: 2890px'><font color=white size=3>Закруткин</font></a>
<a id='a509' name='#a509' style='position: absolute; top: 1541px; left: 2890px'><font color=white size=3>Нилин</font></a>
<a id='a516' name='#a516' style='position: absolute; top: 1424px; left: 2890px'><font color=white size=3>Н Носов</font></a>
<a id='a539' name='#a539' style='position: absolute; top: 1381px; left: 2890px'><font color=white size=3>Павезе</font></a>
<a id='a541' name='#a541' style='position: absolute; top: 1522px; left: 2890px'><font color=white size=3>Л Пантел.</font></a>
<a id='a565' name='#a565' style='position: absolute; top: 1566px; left: 2890px'><font color=white size=3>Полевой</font></a>
<a id='a1108' name='#a1108' style='position: absolute; top: 1442px; left: 2890px'><font color=white size=3>Седых</font></a>
<a id='a1034' name='#a1034' style='position: absolute; top: 1442px; left: 2890px'><font color=white size=3>Ефрем.</font></a>
<a id='a1208' name='#a1208' style='position: absolute; top: 1516px; left: 2890px'><font color=white size=3>Рихтер</font></a>
<a id='a64' name='#a64' style='position: absolute; top: 1689px; left: 2890px'><font color=white size=3>В Беляев</font></a>
<a id='a223' name='#a223' style='position: absolute; top: 1381px; left: 2890px'><font color=white size=3>Дадзай</font></a>
<a id='a249' name='#a249' style='position: absolute; top: 1467px; left: 2890px'><font color=white size=3>Домбровск.</font></a>
<a id='a291' name='#a291' style='position: absolute; top: 1516px; left: 2890px'><font color=white size=3>Ионеско</font></a>
<a id='a1150' name='#a1150' style='position: absolute; top: 1344px; left: 2890px'><font color=white size=3>Лец</font></a>
<a id='a1057' name='#a1057' style='position: absolute; top: 1362px; left: 2890px'><font color=white size=3>Кожевник.</font></a>
<a id='a24' name='#a24' style='position: absolute; top: 1615px; left: 2890px'><font color=white size=3>Ануй</font></a>
<a id='a257' name='#a257' style='position: absolute; top: 1522px; left: 2890px'><font color=white size=3>Дубов</font></a>
<a id='a683' name='#a683' style='position: absolute; top: 1344px; left: 2890px'><font color=white size=3>Твардовск.</font></a>
<a id='a1185' name='#a1185' style='position: absolute; top: 1319px; left: 2890px'><font color=white size=3>Герман</font></a>
<a id='a42' name='#a42' style='position: absolute; top: 1590px; left: 2890px'><font color=white size=3>Базен</font></a>
<a id='a188' name='#a188' style='position: absolute; top: 1492px; left: 2890px'><font color=white size=3>Голдинг</font></a>
<a id='a502' name='#a502' style='position: absolute; top: 1664px; left: 2890px'><font color=white size=3>В Некрасов</font></a>
<a id='a612' name='#a612' style='position: absolute; top: 1572px; left: 2890px'><font color=white size=3>Рыбаков</font></a>
<a id='a716' name='#a716' style='position: absolute; top: 1486px; left: 2890px'><font color=white size=3>Уильямс</font></a>
<a id='a1162' name='#a1162' style='position: absolute; top: 1430px; left: 2890px'><font color=white size=3>Тушнова</font></a>
<a id='a1214' name='#a1214' style='position: absolute; top: 1368px; left: 2890px'><font color=white size=3>Аргедас</font></a>
<a id='a18' name='#a18' style='position: absolute; top: 1473px; left: 2890px'><font color=white size=3>Амаду</font></a>
<a id='a715' name='#a715' style='position: absolute; top: 1510px; left: 2890px'><font color=white size=3>Уайт</font></a>
<a id='a1171' name='#a1171' style='position: absolute; top: 1449px; left: 2890px'><font color=white size=3>Губарев</font></a>
<a id='a1128' name='#a1128' style='position: absolute; top: 1559px; left: 2890px'><font color=white size=3>Л Гумилев</font></a>
<a id='a276' name='#a276' style='position: absolute; top: 1763px; left: 2890px'><font color=white size=3>Залыгин</font></a>
<a id='a301' name='#a301' style='position: absolute; top: 1338px; left: 2890px'><font color=white size=3>Казакевич</font></a>
<a id='a309' name='#a309' style='position: absolute; top: 1418px; left: 2890px'><font color=white size=3>Камю</font></a>
<a id='a601' name='#a601' style='position: absolute; top: 1787px; left: 2890px'><font color=white size=3>Розов</font></a>
<a id='a819' name='#a819' style='position: absolute; top: 1486px; left: 2890px'><font color=white size=3>И Шоу</font></a>
<a id='a845' name='#a845' style='position: absolute; top: 1368px; left: 2890px'><font color=white size=3>Яшин</font></a>
<a id='a1046' name='#a1046' style='position: absolute; top: 1449px; left: 2890px'><font color=white size=3>Драгунск.</font></a>
<a id='a1200' name='#a1200' style='position: absolute; top: 1461px; left: 2890px'><font color=white size=3>Чаковский</font></a>
<a id='a72' name='#a72' style='position: absolute; top: 1541px; left: 2890px'><font color=white size=3>У Берр.</font></a>
<a id='a163' name='#a163' style='position: absolute; top: 1393px; left: 2890px'><font color=white size=3>Гари</font></a>
<a id='a261' name='#a261' style='position: absolute; top: 1467px; left: 2890px'><font color=white size=3>Дюрас</font></a>
<a id='a360' name='#a360' style='position: absolute; top: 1424px; left: 2890px'><font color=white size=3>Кортасар</font></a>
<a id='a1149' name='#a1149' style='position: absolute; top: 1455px; left: 2890px'><font color=white size=3>Гуляшки</font></a>
<a id='a1064' name='#a1064' style='position: absolute; top: 1516px; left: 2890px'><font color=white size=3>Янссон</font></a>
<a id='a1191' name='#a1191' style='position: absolute; top: 1418px; left: 2890px'><font color=white size=3>Вежинов</font></a>
<a id='a639' name='#a639' style='position: absolute; top: 1387px; left: 2890px'><font color=white size=3>Симонов</font></a>
<a id='a1181' name='#a1181' style='position: absolute; top: 1467px; left: 2890px'><font color=white size=3>Шефнер</font></a>
<a id='a1106' name='#a1106' style='position: absolute; top: 1541px; left: 2890px'><font color=white size=3>Хэрриот</font></a>
<a id='a59' name='#a59' style='position: absolute; top: 1541px; left: 2890px'><font color=white size=3>Бёлль</font></a>
<a id='a68' name='#a68' style='position: absolute; top: 1535px; left: 2890px'><font color=white size=3>Бёрдж.</font></a>
<a id='a339' name='#a339' style='position: absolute; top: 1584px; left: 2890px'><font color=white size=3>Кларк</font></a>
<a id='a428' name='#a428' style='position: absolute; top: 1442px; left: 2890px'><font color=white size=3>Маккал.</font></a>
<a id='a1130' name='#a1130' style='position: absolute; top: 1652px; left: 2890px'><font color=white size=3>Шелдон</font></a>
<a id='a256' name='#a256' style='position: absolute; top: 1590px; left: 2890px'><font color=white size=3>Дрюон</font></a>
<a id='a258' name='#a258' style='position: absolute; top: 1559px; left: 2890px'><font color=white size=3>Дудинцев</font></a>
<a id='a529' name='#a529' style='position: absolute; top: 1646px; left: 2890px'><font color=white size=3>Олдридж</font></a>
<a id='a649' name='#a649' style='position: absolute; top: 1615px; left: 2890px'><font color=white size=3>Солжениц.</font></a>
<a id='a147' name='#a147' style='position: absolute; top: 1559px; left: 2890px'><font color=white size=3>Володин</font></a>
<a id='a151' name='#a151' style='position: absolute; top: 1412px; left: 2890px'><font color=white size=3>Воробьёв</font></a>
<a id='a203' name='#a203' style='position: absolute; top: 1467px; left: 2890px'><font color=white size=3>Гранин</font></a>
<a id='a455' name='#a455' style='position: absolute; top: 1566px; left: 2890px'><font color=white size=3>Мёрдок</font></a>
<a id='a676' name='#a676' style='position: absolute; top: 1596px; left: 2890px'><font color=white size=3>Сэлиндж.</font></a>
<a id='a2' name='#a2' style='position: absolute; top: 1455px; left: 2890px'><font color=white size=3>Абрамов</font></a>
<a id='a7' name='#a7' style='position: absolute; top: 1541px; left: 2890px'><font color=white size=3>Азимов</font></a>
<a id='a105' name='#a105' style='position: absolute; top: 1640px; left: 2890px'><font color=white size=3>Брэдбери</font></a>
<a id='a355' name='#a355' style='position: absolute; top: 1510px; left: 2890px'><font color=white size=3>Кондрать.в</font></a>
<a id='a583' name='#a583' style='position: absolute; top: 1603px; left: 2890px'><font color=white size=3>Пьюзо</font></a>
<a id='a598' name='#a598' style='position: absolute; top: 1547px; left: 2890px'><font color=white size=3>Родари</font></a>
<a id='a762' name='#a762' style='position: absolute; top: 1676px; left: 2890px'><font color=white size=3>Хейли</font></a>
<a id='a1117' name='#a1117' style='position: absolute; top: 1442px; left: 2890px'><font color=white size=3>Герберт</font></a>
<a id='a239' name='#a239' style='position: absolute; top: 1436px; left: 2890px'><font color=white size=3>Джонс</font></a>
<a id='a262' name='#a262' style='position: absolute; top: 1553px; left: 2890px'><font color=white size=3>Дюрренм.</font></a>
<a id='a389' name='#a389' style='position: absolute; top: 1590px; left: 2890px'><font color=white size=3>Лем</font></a>
<a id='a802' name='#a802' style='position: absolute; top: 1479px; left: 2890px'><font color=white size=3>Шаша</font></a>
<a id='a1127' name='#a1127' style='position: absolute; top: 1467px; left: 2890px'><font color=white size=3>Никулин</font></a>
<a id='a1224' name='#a1224' style='position: absolute; top: 1683px; left: 2890px'><font color=white size=3>Амирэ..би</font></a>
<a id='a150' name='#a150' style='position: absolute; top: 1615px; left: 2890px'><font color=white size=3>Воннегут</font></a>
<a id='a329' name='#a329' style='position: absolute; top: 1479px; left: 2890px'><font color=white size=3>Керуак</font></a>
<a id='a596' name='#a596' style='position: absolute; top: 1596px; left: 2890px'><font color=white size=3>Р-Грийе</font></a>
<a id='a830' name='#a830' style='position: absolute; top: 1547px; left: 2890px'><font color=white size=3>К Эмис</font></a>
<a id='a13' name='#a13' style='position: absolute; top: 1621px; left: 2890px'><font color=white size=3>Алексеев</font></a>
<a id='a44' name='#a44' style='position: absolute; top: 1707px; left: 2890px'><font color=white size=3>Бакланов</font></a>
<a id='a306' name='#a306' style='position: absolute; top: 1442px; left: 2890px'><font color=white size=3>Кальвино</font></a>
<a id='a450' name='#a450' style='position: absolute; top: 1658px; left: 2890px'><font color=white size=3>Мейлер</font></a>
<a id='a472' name='#a472' style='position: absolute; top: 1603px; left: 2890px'><font color=white size=3>Можаев</font></a>
<a id='a689' name='#a689' style='position: absolute; top: 1529px; left: 2890px'><font color=white size=3>Тендряк.</font></a>
<a id='a763' name='#a763' style='position: absolute; top: 1516px; left: 2890px'><font color=white size=3>Хеллер</font></a>
<a id='a3' name='#a3' style='position: absolute; top: 1498px; left: 2890px'><font color=white size=3>Абэ</font></a>
<a id='a14' name='#a14' style='position: absolute; top: 1498px; left: 2890px'><font color=white size=3>Алексин</font></a>
<a id='a35' name='#a35' style='position: absolute; top: 1584px; left: 2890px'><font color=white size=3>Астафьев</font></a>
<a id='a86' name='#a86' style='position: absolute; top: 1609px; left: 2890px'><font color=white size=3>Богомолов</font></a>
<a id='a90' name='#a90' style='position: absolute; top: 1492px; left: 2890px'><font color=white size=3>Бондарев</font></a>
<a id='a115' name='#a115' style='position: absolute; top: 1633px; left: 2890px'><font color=white size=3>Быков</font></a>
<a id='a127' name='#a127' style='position: absolute; top: 1732px; left: 2890px'><font color=white size=3>Васильев</font></a>
<a id='a222' name='#a222' style='position: absolute; top: 1658px; left: 2890px'><font color=white size=3>Давыдов</font></a>
<a id='a314' name='#a314' style='position: absolute; top: 1541px; left: 2890px'><font color=white size=3>Капоте</font></a>
<a id='a1135' name='#a1135' style='position: absolute; top: 1479px; left: 2890px'><font color=white size=3>Севак</font></a>
<a id='a1088' name='#a1088' style='position: absolute; top: 1633px; left: 2890px'><font color=white size=3>Клавелл</font></a>
<a id='a226' name='#a226' style='position: absolute; top: 1566px; left: 2890px'><font color=white size=3>Даррелл</font></a>
<a id='a269' name='#a269' style='position: absolute; top: 1695px; left: 2890px'><font color=white size=3>Железн.</font></a>
<a id='a468' name='#a468' style='position: absolute; top: 1504px; left: 2890px'><font color=white size=3>Мисима</font></a>
<a id='a517' name='#a517' style='position: absolute; top: 1627px; left: 2890px'><font color=white size=3>Е Носов</font></a>
<a id='a519' name='#a519' style='position: absolute; top: 1467px; left: 2890px'><font color=white size=3>О`Коннор</font></a>
<a id='a563' name='#a563' style='position: absolute; top: 1596px; left: 2890px'><font color=white size=3>Погодин</font></a>
<a id='a640' name='#a640' style='position: absolute; top: 1516px; left: 2890px'><font color=white size=3>Синявск.</font></a>
<a id='a670' name='#a670' style='position: absolute; top: 1541px; left: 2890px'><font color=white size=3>Стругацк.</font></a>
<a id='a706' name='#a706' style='position: absolute; top: 1713px; left: 2890px'><font color=white size=3>Трифонов</font></a>
<a id='a723' name='#a723' style='position: absolute; top: 1572px; left: 2890px'><font color=white size=3>Уэйн</font></a>
<a id='a1122' name='#a1122' style='position: absolute; top: 1572px; left: 2890px'><font color=white size=3>Кастанеда</font></a>
<a id='a1110' name='#a1110' style='position: absolute; top: 1615px; left: 2890px'><font color=white size=3>Гаррисон</font></a>
<a id='a118' name='#a118' style='position: absolute; top: 1633px; left: 2890px'><font color=white size=3>Бютор</font></a>
<a id='a404' name='#a404' style='position: absolute; top: 1633px; left: 2890px'><font color=white size=3>Ли</font></a>
<a id='a730' name='#a730' style='position: absolute; top: 1689px; left: 2890px'><font color=white size=3>Фаулз</font></a>
<a id='a801' name='#a801' style='position: absolute; top: 1609px; left: 2890px'><font color=white size=3>Шаффер</font></a>
<a id='a1111' name='#a1111' style='position: absolute; top: 1566px; left: 2890px'><font color=white size=3>Крюс</font></a>
<a id='a1182' name='#a1182' style='position: absolute; top: 1621px; left: 2890px'><font color=white size=3>Матесон</font></a>
<a id='a6' name='#a6' style='position: absolute; top: 1559px; left: 2890px'><font color=white size=3>Адамович</font></a>
<a id='a205' name='#a205' style='position: absolute; top: 1670px; left: 2890px'><font color=white size=3>Грасс</font></a>
<a id='a331' name='#a331' style='position: absolute; top: 1633px; left: 2890px'><font color=white size=3>Киз</font></a>
<a id='a443' name='#a443' style='position: absolute; top: 1695px; left: 2890px'><font color=white size=3>Маркес</font></a>
<a id='a631' name='#a631' style='position: absolute; top: 1504px; left: 2890px'><font color=white size=3>Сёмин</font></a>
<a id='a9' name='#a9' style='position: absolute; top: 1572px; left: 2890px'><font color=white size=3>Айтматов</font></a>
<a id='a527' name='#a527' style='position: absolute; top: 1658px; left: 2890px'><font color=white size=3>Олби</font></a>
<a id='a1134' name='#a1134' style='position: absolute; top: 1689px; left: 2890px'><font color=white size=3>Шекли</font></a>
<a id='a1085' name='#a1085' style='position: absolute; top: 1652px; left: 2890px'><font color=white size=3>А Иванов</font></a>
<a id='a1035' name='#a1035' style='position: absolute; top: 1535px; left: 2890px'><font color=white size=3>Пикуль</font></a>
<a id='a149' name='#a149' style='position: absolute; top: 1837px; left: 2890px'><font color=white size=3>Вольф</font></a>
<a id='a293' name='#a293' style='position: absolute; top: 1664px; left: 2890px'><font color=white size=3>Искандер</font></a>
<a id='a370' name='#a370' style='position: absolute; top: 1640px; left: 2890px'><font color=white size=3>Кундера</font></a>
<a id='a532' name='#a532' style='position: absolute; top: 1596px; left: 2890px'><font color=white size=3>Осборн</font></a>
<a id='a823' name='#a823' style='position: absolute; top: 1479px; left: 2890px'><font color=white size=3>Шукшин</font></a>
<a id='a1169' name='#a1169' style='position: absolute; top: 1596px; left: 2890px'><font color=white size=3>Павич</font></a>
<a id='a1174' name='#a1174' style='position: absolute; top: 1473px; left: 2890px'><font color=white size=3>Гуин</font></a>
<a id='a1199' name='#a1199' style='position: absolute; top: 1486px; left: 2890px'><font color=white size=3>Кузнецов</font></a>
<a id='a1239' name='#a1239' style='position: absolute; top: 1590px; left: 2890px'><font color=white size=3>Энде</font></a>
<a id='a432' name='#a432' style='position: absolute; top: 1584px; left: 2890px'><font color=white size=3>Максимов</font></a>
<a id='a552' name='#a552' style='position: absolute; top: 1584px; left: 2890px'><font color=white size=3>Пинтер</font></a>
<a id='a1141' name='#a1141' style='position: absolute; top: 1393px; left: 2890px'><font color=white size=3>Данелия</font></a>
<a id='a140' name='#a140' style='position: absolute; top: 1640px; left: 2890px'><font color=white size=3>Владимов</font></a>
<a id='a187' name='#a187' style='position: absolute; top: 1418px; left: 2890px'><font color=white size=3>Гойтисо.</font></a>
<a id='a248' name='#a248' style='position: absolute; top: 1732px; left: 2890px'><font color=white size=3>Доктороу</font></a>
<a id='a385' name='#a385' style='position: absolute; top: 1430px; left: 2890px'><font color=white size=3>Карре</font></a>
<a id='a574' name='#a574' style='position: absolute; top: 1757px; left: 2890px'><font color=white size=3>Приставк.н</font></a>
<a id='a1101' name='#a1101' style='position: absolute; top: 1726px; left: 2890px'><font color=white size=3>Жапризо</font></a>
<a id='a1058' name='#a1058' style='position: absolute; top: 1701px; left: 2890px'><font color=white size=3>Семенов</font></a>
<a id='a11' name='#a11' style='position: absolute; top: 1664px; left: 2890px'><font color=white size=3>Аксёнов</font></a>
<a id='a60' name='#a60' style='position: absolute; top: 1676px; left: 2890px'><font color=white size=3>Белов</font></a>
<a id='a145' name='#a145' style='position: absolute; top: 1418px; left: 2890px'><font color=white size=3>Войнович</font></a>
<a id='a580' name='#a580' style='position: absolute; top: 1566px; left: 2890px'><font color=white size=3>Пташников</font></a>
<a id='a825' name='#a825' style='position: absolute; top: 1652px; left: 2890px'><font color=white size=3>Эко</font></a>
<a id='a91' name='#a91' style='position: absolute; top: 1535px; left: 2890px'><font color=white size=3>Боно</font></a>
<a id='a162' name='#a162' style='position: absolute; top: 1498px; left: 2890px'><font color=white size=3>Д Гардн.р</font></a>
<a id='a430' name='#a430' style='position: absolute; top: 1516px; left: 2890px'><font color=white size=3>Маккарти</font></a>
<a id='a606' name='#a606' style='position: absolute; top: 1683px; left: 2890px'><font color=white size=3>Рощин</font></a>
<a id='a1194' name='#a1194' style='position: absolute; top: 1720px; left: 2890px'><font color=white size=3>Чиладзе</font></a>
<a id='a1228' name='#a1228' style='position: absolute; top: 1664px; left: 2890px'><font color=white size=3>Уэстлейк</font></a>
<a id='a108' name='#a108' style='position: absolute; top: 1640px; left: 2890px'><font color=white size=3>Булычёв</font></a>
<a id='a560' name='#a560' style='position: absolute; top: 1633px; left: 2890px'><font color=white size=3>Пленцд.</font></a>
<a id='a792' name='#a792' style='position: absolute; top: 1683px; left: 2890px'><font color=white size=3>Чигринов</font></a>
<a id='a1129' name='#a1129' style='position: absolute; top: 1615px; left: 2890px'><font color=white size=3>Велтист.</font></a>
<a id='a332' name='#a332' style='position: absolute; top: 1615px; left: 2890px'><font color=white size=3>Кизи</font></a>
<a id='a408' name='#a408' style='position: absolute; top: 1535px; left: 2890px'><font color=white size=3>Лиханов</font></a>
<a id='a538' name='#a538' style='position: absolute; top: 1541px; left: 2890px'><font color=white size=3>Оэ</font></a>
<a id='a615' name='#a615' style='position: absolute; top: 1559px; left: 2890px'><font color=white size=3>Саган</font></a>
<a id='a1054' name='#a1054' style='position: absolute; top: 1504px; left: 2890px'><font color=white size=3>Вайнеры</font></a>
<a id='a1049' name='#a1049' style='position: absolute; top: 1529px; left: 2890px'><font color=white size=3>Шевалль</font></a>
<a id='a56' name='#a56' style='position: absolute; top: 1535px; left: 2890px'><font color=white size=3>Бах</font></a>
<a id='a585' name='#a585' style='position: absolute; top: 1584px; left: 2890px'><font color=white size=3>Радзинск.</font></a>
<a id='a654' name='#a654' style='position: absolute; top: 1492px; left: 2890px'><font color=white size=3>Соснора</font></a>
<a id='a1151' name='#a1151' style='position: absolute; top: 1553px; left: 2890px'><font color=white size=3>Рубцов</font></a>
<a id='a1124' name='#a1124' style='position: absolute; top: 1442px; left: 2890px'><font color=white size=3>Губерман</font></a>
<a id='a1206' name='#a1206' style='position: absolute; top: 1449px; left: 2890px'><font color=white size=3>Льоса</font></a>
<a id='a75' name='#a75' style='position: absolute; top: 1516px; left: 2890px'><font color=white size=3>Битов</font></a>
<a id='a126' name='#a126' style='position: absolute; top: 1738px; left: 2890px'><font color=white size=3>Вампилов</font></a>
<a id='a429' name='#a429' style='position: absolute; top: 1633px; left: 2890px'><font color=white size=3>Маккалоу</font></a>
<a id='a590' name='#a590' style='position: absolute; top: 1701px; left: 2890px'><font color=white size=3>Распутин</font></a>
<a id='a666' name='#a666' style='position: absolute; top: 1510px; left: 2890px'><font color=white size=3>Стоппард</font></a>
<a id='a695' name='#a695' style='position: absolute; top: 1578px; left: 2890px'><font color=white size=3>Токарева</font></a>
<a id='a758' name='#a758' style='position: absolute; top: 1541px; left: 2890px'><font color=white size=3>Харитон.</font></a>
<a id='a1159' name='#a1159' style='position: absolute; top: 1633px; left: 2890px'><font color=white size=3>Томпсон</font></a>
<a id='a1051' name='#a1051' style='position: absolute; top: 1664px; left: 2890px'><font color=white size=3>Желязны</font></a>
<a id='a1050' name='#a1050' style='position: absolute; top: 1596px; left: 2890px'><font color=white size=3>Э Успенс.</font></a>
<a id='a1210' name='#a1210' style='position: absolute; top: 1584px; left: 2890px'><font color=white size=3>Ахмаду.</font></a>
<a id='a265' name='#a265' style='position: absolute; top: 1578px; left: 2890px'><font color=white size=3>Екимов</font></a>
<a id='a266' name='#a266' style='position: absolute; top: 1664px; left: 2890px'><font color=white size=3>Ерофеев</font></a>
<a id='a347' name='#a347' style='position: absolute; top: 1670px; left: 2890px'><font color=white size=3>Коваль</font></a>
<a id='a364' name='#a364' style='position: absolute; top: 1541px; left: 2890px'><font color=white size=3>Крапивин</font></a>
<a id='a537' name='#a537' style='position: absolute; top: 1566px; left: 2890px'><font color=white size=3>Оутс</font></a>
<a id='a549' name='#a549' style='position: absolute; top: 1535px; left: 2890px'><font color=white size=3>Петрушев.</font></a>
<a id='a1209' name='#a1209' style='position: absolute; top: 1609px; left: 2890px'><font color=white size=3>Влади</font></a>
<a id='a334' name='#a334' style='position: absolute; top: 1522px; left: 2890px'><font color=white size=3>Ким</font></a>
<a id='a569' name='#a569' style='position: absolute; top: 1492px; left: 2890px'><font color=white size=3>В Попов</font></a>
<a id='a1252' name='#a1252' style='position: absolute; top: 1492px; left: 2890px'><font color=white size=3>Этвуд</font></a>
<a id='a98' name='#a98' style='position: absolute; top: 1615px; left: 2890px'><font color=white size=3>Бродский</font></a>
<a id='a1137' name='#a1137' style='position: absolute; top: 1627px; left: 2890px'><font color=white size=3>Т Харрис</font></a>
<a id='a1068' name='#a1068' style='position: absolute; top: 1640px; left: 2890px'><font color=white size=3>Горин</font></a>
<a id='a245' name='#a245' style='position: absolute; top: 1541px; left: 2890px'><font color=white size=3>Довлатов</font></a>
<a id='a338' name='#a338' style='position: absolute; top: 1812px; left: 2890px'><font color=white size=3>Киреев</font></a>
<a id='a1176' name='#a1176' style='position: absolute; top: 1522px; left: 2890px'><font color=white size=3>Райс</font></a>
<a id='a1230' name='#a1230' style='position: absolute; top: 1689px; left: 2890px'><font color=white size=3>Житинск.</font></a>
<a id='a770' name='#a770' style='position: absolute; top: 1590px; left: 2890px'><font color=white size=3>Хилл</font></a>
<a id='a297' name='#a297' style='position: absolute; top: 1584px; left: 2890px'><font color=white size=3>Кабаков</font></a>
<a id='a405' name='#a405' style='position: absolute; top: 1590px; left: 2890px'><font color=white size=3>Лимонов</font></a>
<a id='a648' name='#a648' style='position: absolute; top: 1615px; left: 2890px'><font color=white size=3>Соколов</font></a>
<a id='a1089' name='#a1089' style='position: absolute; top: 1640px; left: 2890px'><font color=white size=3>Улицкая</font></a>
<a id='a1248' name='#a1248' style='position: absolute; top: 1566px; left: 2890px'><font color=white size=3>Прист</font></a>
<a id='a1164' name='#a1164' style='position: absolute; top: 1510px; left: 2890px'><font color=white size=3>Масетти</font></a>
<a id='a1086' name='#a1086' style='position: absolute; top: 1535px; left: 2890px'><font color=white size=3>Шлинк</font></a>
<a id='a200' name='#a200' style='position: absolute; top: 1603px; left: 2890px'><font color=white size=3>Гоулман</font></a>
<a id='a1121' name='#a1121' style='position: absolute; top: 1547px; left: 2890px'><font color=white size=3>Пулман</font></a>
<a id='a1036' name='#a1036' style='position: absolute; top: 1713px; left: 2890px'><font color=white size=3>Филатов</font></a>
<a id='a336' name='#a336' style='position: absolute; top: 1713px; left: 2890px'><font color=white size=3>Кинг</font></a>
<a id='a362' name='#a362' style='position: absolute; top: 1621px; left: 2890px'><font color=white size=3>Коэльо</font></a>
<a id='a611' name='#a611' style='position: absolute; top: 1547px; left: 2890px'><font color=white size=3>Рушди</font></a>
<a id='a1163' name='#a1163' style='position: absolute; top: 1707px; left: 2890px'><font color=white size=3>Алексиев.</font></a>
<a id='a1160' name='#a1160' style='position: absolute; top: 1566px; left: 2890px'><font color=white size=3>Задорнов</font></a>
<a id='a1098' name='#a1098' style='position: absolute; top: 1670px; left: 2890px'><font color=white size=3>Джордан</font></a>
<a id='a1097' name='#a1097' style='position: absolute; top: 1572px; left: 2890px'><font color=white size=3>Сапковск.</font></a>
<a id='a1094' name='#a1094' style='position: absolute; top: 1695px; left: 2890px'><font color=white size=3>Пратчетт</font></a>
<a id='a1077' name='#a1077' style='position: absolute; top: 1596px; left: 2890px'><font color=white size=3>Мартин</font></a>
<a id='a1202' name='#a1202' style='position: absolute; top: 1590px; left: 2890px'><font color=white size=3>Веллер</font></a>
<a id='a1223' name='#a1223' style='position: absolute; top: 1750px; left: 2890px'><font color=white size=3>Корецкий</font></a>
<a id='a285' name='#a285' style='position: absolute; top: 1621px; left: 2890px'><font color=white size=3>Зюскинд</font></a>
<a id='a488' name='#a488' style='position: absolute; top: 1646px; left: 2890px'><font color=white size=3>Мураками</font></a>
<a id='a831' name='#a831' style='position: absolute; top: 1713px; left: 2890px'><font color=white size=3>М Эмис</font></a>
<a id='a697' name='#a697' style='position: absolute; top: 1633px; left: 2890px'><font color=white size=3>Толстая</font></a>
<a id='a1175' name='#a1175' style='position: absolute; top: 1646px; left: 2890px'><font color=white size=3>Кард</font></a>
<a id='a597' name='#a597' style='position: absolute; top: 1640px; left: 2890px'><font color=white size=3>Робертс</font></a>
<a id='a1066' name='#a1066' style='position: absolute; top: 1738px; left: 2890px'><font color=white size=3>Адамс</font></a>
<a id='a607' name='#a607' style='position: absolute; top: 1744px; left: 2890px'><font color=white size=3>Рубина</font></a>
<a id='a116' name='#a116' style='position: absolute; top: 1713px; left: 2890px'><font color=white size=3>Бэнкс</font></a>
<a id='a1148' name='#a1148' style='position: absolute; top: 1609px; left: 2890px'><font color=white size=3>Вишневс.</font></a>
<a id='a1063' name='#a1063' style='position: absolute; top: 1849px; left: 2890px'><font color=white size=3>Ларссон</font></a>
<a id='a1033' name='#a1033' style='position: absolute; top: 1689px; left: 2890px'><font color=white size=3>Поляков</font></a>
<a id='a471' name='#a471' style='position: absolute; top: 1769px; left: 2890px'><font color=white size=3>Янь</font></a>
<a id='a653' name='#a653' style='position: absolute; top: 1738px; left: 2890px'><font color=white size=3>Сорокин</font></a>
<a id='a1247' name='#a1247' style='position: absolute; top: 1775px; left: 2890px'><font color=white size=3>Пирс</font></a>
<a id='a1154' name='#a1154' style='position: absolute; top: 1763px; left: 2890px'><font color=white size=3>Уэльбек</font></a>
<a id='a1076' name='#a1076' style='position: absolute; top: 1800px; left: 2890px'><font color=white size=3>Акунин</font></a>
<a id='a1070' name='#a1070' style='position: absolute; top: 1658px; left: 2890px'><font color=white size=3>Голден</font></a>
<a id='a1204' name='#a1204' style='position: absolute; top: 1824px; left: 2890px'><font color=white size=3>Маринина</font></a>
<a id='a726' name='#a726' style='position: absolute; top: 1763px; left: 2890px'><font color=white size=3>Уэлш</font></a>
<a id='a1231' name='#a1231' style='position: absolute; top: 1689px; left: 2890px'><font color=white size=3>Барикко</font></a>
<a id='a1244' name='#a1244' style='position: absolute; top: 1787px; left: 2890px'><font color=white size=3>Х Филдинг</font></a>
<a id='a1184' name='#a1184' style='position: absolute; top: 1738px; left: 2890px'><font color=white size=3>Эшбах</font></a>
<a id='a1140' name='#a1140' style='position: absolute; top: 1683px; left: 2890px'><font color=white size=3>Глаттауэр</font></a>
<a id='a1109' name='#a1109' style='position: absolute; top: 1695px; left: 2890px'><font color=white size=3>Вербер</font></a>
<a id='a353' name='#a353' style='position: absolute; top: 1713px; left: 2890px'><font color=white size=3>Коллинз</font></a>
<a id='a540' name='#a540' style='position: absolute; top: 1812px; left: 2890px'><font color=white size=3>Паланик</font></a>
<a id='a546' name='#a546' style='position: absolute; top: 1787px; left: 2890px'><font color=white size=3>Пелевин</font></a>
<a id='a1241' name='#a1241' style='position: absolute; top: 1763px; left: 2890px'><font color=white size=3>Янси</font></a>
<a id='a235' name='#a235' style='position: absolute; top: 1707px; left: 2890px'><font color=white size=3>Э Джеймс</font></a>
<a id='a1236' name='#a1236' style='position: absolute; top: 1720px; left: 2890px'><font color=white size=3>Перумов</font></a>
<a id='a95' name='#a95' style='position: absolute; top: 1874px; left: 2890px'><font color=white size=3>Браун</font></a>
<a id='a1139' name='#a1139' style='position: absolute; top: 1794px; left: 2890px'><font color=white size=3>Липскер.</font></a>
<a id='a1099' name='#a1099' style='position: absolute; top: 1818px; left: 2890px'><font color=white size=3>Д Харрис</font></a>
<a id='a1180' name='#a1180' style='position: absolute; top: 1720px; left: 2890px'><font color=white size=3>Сеттерф.</font></a>
<a id='a605' name='#a605' style='position: absolute; top: 1744px; left: 2890px'><font color=white size=3>Роулинг</font></a>
<a id='a1105' name='#a1105' style='position: absolute; top: 1732px; left: 2890px'><font color=white size=3>Бегбедер</font></a>
<a id='a1093' name='#a1093' style='position: absolute; top: 1769px; left: 2890px'><font color=white size=3>Фрай</font></a>
<a id='a1090' name='#a1090' style='position: absolute; top: 1757px; left: 2890px'><font color=white size=3>Спаркс</font></a>
<a id='a1131' name='#a1131' style='position: absolute; top: 1726px; left: 2890px'><font color=white size=3>Козлов</font></a>
<a id='a1132' name='#a1132' style='position: absolute; top: 1781px; left: 2890px'><font color=white size=3>Гришков.</font></a>
<a id='a1234' name='#a1234' style='position: absolute; top: 1794px; left: 2890px'><font color=white size=3>Белянин</font></a>
<a id='a1142' name='#a1142' style='position: absolute; top: 1787px; left: 2890px'><font color=white size=3>Лукьянен.</font></a>
<a id='a1226' name='#a1226' style='position: absolute; top: 1812px; left: 2890px'><font color=white size=3>Дивов</font></a>
<a id='a1065' name='#a1065' style='position: absolute; top: 1744px; left: 2890px'><font color=white size=3>Санаев</font></a>
<a id='a1055' name='#a1055' style='position: absolute; top: 1744px; left: 2890px'><font color=white size=3>А Иванов</font></a>
<a id='a1190' name='#a1190' style='position: absolute; top: 1806px; left: 2890px'><font color=white size=3>Мойес</font></a>
<a id='a1250' name='#a1250' style='position: absolute; top: 1837px; left: 2890px'><font color=white size=3>Лу</font></a>
<a id='a1251' name='#a1251' style='position: absolute; top: 1837px; left: 2890px'><font color=white size=3>Д Митчелл</font></a>
<a id='a1083' name='#a1083' style='position: absolute; top: 1830px; left: 2890px'><font color=white size=3>Гавальда</font></a>
<a id='a1229' name='#a1229' style='position: absolute; top: 1818px; left: 2890px'><font color=white size=3>Ротфусс</font></a>
<a id='a573' name='#a573' style='position: absolute; top: 1781px; left: 2890px'><font color=white size=3>Прилепин</font></a>
<a id='a213' name='#a213' style='position: absolute; top: 1794px; left: 2890px'><font color=white size=3>Д Грин</font></a>
<a id='a1213' name='#a1213' style='position: absolute; top: 1843px; left: 2890px'><font color=white size=3>Пехов</font></a>
<a id='a1103' name='#a1103' style='position: absolute; top: 1855px; left: 2890px'><font color=white size=3>Ахерн</font></a>
<a id='a1192' name='#a1192' style='position: absolute; top: 1867px; left: 2890px'><font color=white size=3>Щерба</font></a>

<img id=img align=left class=coords border=0 src=maps/en.png>
<div style='background:transparent; position:absolute; top: 0px; left: 0px; width:100%; height:100%;'>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?order=a_country,%20a_year1' title=''><div class=area style='position:absolute; width:38px; height:20px; left:720px; top:400px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?order=a_country,%20a_year1' title=''><div class=area style='position:absolute; width:51px; height:20px; left:720px; top:423px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?order=a_country,%20a_year1' title=''><div class=area style='position:absolute; width:52px; height:20px; left:720px; top:446px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?order=a_country,%20a_year1' title=''><div class=area style='position:absolute; width:52px; height:20px; left:720px; top:469px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?order=a_country,%20a_year1' title=''><div class=area style='position:absolute; width:62px; height:20px; left:720px; top:492px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?order=a_country,%20a_year1' title=''><div class=area style='position:absolute; width:67px; height:20px; left:720px; top:515px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?order=a_country,%20a_year1' title=''><div class=area style='position:absolute; width:52px; height:20px; left:830px; top:400px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?order=a_country,%20a_year1' title=''><div class=area style='position:absolute; width:59px; height:20px; left:830px; top:423px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?order=a_country,%20a_year1' title=''><div class=area style='position:absolute; width:52px; height:20px; left:830px; top:446px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?order=a_country,%20a_year1' title=''><div class=area style='position:absolute; width:57px; height:20px; left:830px; top:469px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?order=a_country,%20a_year1' title=''><div class=area style='position:absolute; width:46px; height:20px; left:830px; top:492px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?order=a_country,%20a_year1' title=''><div class=area style='position:absolute; width:67px; height:20px; left:830px; top:515px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?order=a_country,%20a_year1' title=''><div class=area style='position:absolute; width:57px; height:20px; left:940px; top:400px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?order=a_country,%20a_year1' title=''><div class=area style='position:absolute; width:76px; height:20px; left:940px; top:423px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?order=a_country,%20a_year1' title=''><div class=area style='position:absolute; width:46px; height:20px; left:940px; top:446px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?order=a_country,%20a_year1' title=''><div class=area style='position:absolute; width:54px; height:20px; left:940px; top:469px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?order=a_country,%20a_year1' title=''><div class=area style='position:absolute; width:44px; height:20px; left:940px; top:492px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?order=a_country,%20a_year1' title=''><div class=area style='position:absolute; width:53px; height:20px; left:940px; top:515px'></div></a>
<a  href='build-rlmap.php?t_name=Древние философы' title='Древние философы'><div class=area style='position:absolute; width:40px; height:19px; left:402px; top:21px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Древние философы' title='Древние философы'><div class=area style='position:absolute; width:41px; height:19px; left:361px; top:21px'></div></a>
<a  href='build-rlmap.php?t_name=Древняя Греция' title='Древняя Греция'><div class=area style='position:absolute; width:96px; height:19px; left:126px; top:13px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Древняя Греция' title='Древняя Греция'><div class=area style='position:absolute; width:96px; height:19px; left:30px; top:13px'></div></a>
<a  href='build-rlmap.php?t_name=Древний Рим' title=''><div class=area style='position:absolute; width:45px; height:19px; left:841px; top:47px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Древний Рим' title=''><div class=area style='position:absolute; width:45px; height:19px; left:796px; top:47px'></div></a>
<a  href='build-rlmap.php?t_name=Возрождение' title=''><div class=area style='position:absolute; width:46px; height:19px; left:678px; top:140px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Возрождение' title=''><div class=area style='position:absolute; width:46px; height:19px; left:632px; top:140px'></div></a>
<a  href='build-rlmap.php?t_name=Религия' title='Религия'><div class=area style='position:absolute; width:29px; height:19px; left:1606px; top:69px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Религия' title='Религия'><div class=area style='position:absolute; width:30px; height:19px; left:1576px; top:69px'></div></a>
<a  href='build-rlmap.php?t_name=Средние века' title=''><div class=area style='position:absolute; width:45px; height:19px; left:937px; top:109px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Средние века' title=''><div class=area style='position:absolute; width:46px; height:19px; left:891px; top:109px'></div></a>
<a  href='build-rlmap.php?t_name=Классицизм' title=''><div class=area style='position:absolute; width:41px; height:19px; left:334px; top:266px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Классицизм' title=''><div class=area style='position:absolute; width:41px; height:19px; left:293px; top:266px'></div></a>
<a  href='build-rlmap.php?t_name=Маньеризм' title=''><div class=area style='position:absolute; width:38px; height:19px; left:783px; top:200px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Маньеризм' title=''><div class=area style='position:absolute; width:39px; height:19px; left:744px; top:200px'></div></a>
<a  href='build-rlmap.php?t_name=Барокко' title=''><div class=area style='position:absolute; width:29px; height:19px; left:1217px; top:205px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Барокко' title=''><div class=area style='position:absolute; width:29px; height:19px; left:1188px; top:205px'></div></a>
<a  href='build-rlmap.php?t_name=История' title=''><div class=area style='position:absolute; width:29px; height:19px; left:1281px; top:79px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=История' title=''><div class=area style='position:absolute; width:30px; height:19px; left:1251px; top:79px'></div></a>
<a  href='build-rlmap.php?t_name=Философия' title='Философия'><div class=area style='position:absolute; width:34px; height:19px; left:1535px; top:109px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Философия' title='Философия'><div class=area style='position:absolute; width:35px; height:19px; left:1500px; top:109px'></div></a>
<a  href='build-rlmap.php?t_name=Юмор' title=''><div class=area style='position:absolute; width:22px; height:19px; left:2264px; top:204px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Юмор' title=''><div class=area style='position:absolute; width:23px; height:19px; left:2241px; top:204px'></div></a>
<a  href='build-rlmap.php?t_name=Реализм' title=''><div class=area style='position:absolute; width:29px; height:19px; left:1363px; top:222px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Реализм' title=''><div class=area style='position:absolute; width:30px; height:19px; left:1333px; top:222px'></div></a>
<a  href='build-rlmap.php?t_name=Антиутопия' title='Антиутопия'><div class=area style='position:absolute; width:31px; height:19px; left:1764px; top:217px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Антиутопия' title='Антиутопия'><div class=area style='position:absolute; width:31px; height:19px; left:1733px; top:217px'></div></a>
<a  href='build-rlmap.php?t_name=Фантастика' title='Фантастика'><div class=area style='position:absolute; width:29px; height:19px; left:1684px; top:232px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Фантастика' title='Фантастика'><div class=area style='position:absolute; width:30px; height:19px; left:1654px; top:232px'></div></a>
<a  href='build-rlmap.php?t_name=Детская' title=''><div class=area style='position:absolute; width:28px; height:19px; left:2194px; top:248px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Детская' title=''><div class=area style='position:absolute; width:28px; height:19px; left:2166px; top:248px'></div></a>
<a  href='build-rlmap.php?t_name=Приключения' title='Приключения'><div class=area style='position:absolute; width:33px; height:19px; left:1211px; top:316px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Приключения' title='Приключения'><div class=area style='position:absolute; width:33px; height:19px; left:1178px; top:316px'></div></a>
<a  href='build-rlmap.php?t_name=Сентиментализм' title='Сентиментализм'><div class=area style='position:absolute; width:37px; height:19px; left:2359px; top:346px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Сентиментализм' title='Сентиментализм'><div class=area style='position:absolute; width:38px; height:19px; left:2321px; top:346px'></div></a>
<a  href='build-rlmap.php?t_name=О любви' title=''><div class=area style='position:absolute; width:31px; height:19px; left:2352px; top:1175px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=О любви' title=''><div class=area style='position:absolute; width:31px; height:19px; left:2321px; top:1175px'></div></a>
<a  href='build-rlmap.php?t_name=Романтизм' title=''><div class=area style='position:absolute; width:37px; height:19px; left:425px; top:408px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Романтизм' title=''><div class=area style='position:absolute; width:37px; height:19px; left:388px; top:408px'></div></a>
<a  href='build-rlmap.php?t_name=Психология' title='Психология'><div class=area style='position:absolute; width:27px; height:19px; left:1454px; top:344px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Психология' title='Психология'><div class=area style='position:absolute; width:28px; height:19px; left:1426px; top:344px'></div></a>
<a  href='build-rlmap.php?t_name=Готика' title=''><div class=area style='position:absolute; width:24px; height:19px; left:1822px; top:433px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Готика' title=''><div class=area style='position:absolute; width:24px; height:19px; left:1798px; top:433px'></div></a>
<a  href='build-rlmap.php?t_name=Критический реализм' title='Критический реализм'><div class=area style='position:absolute; width:29px; height:19px; left:512px; top:1206px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Критический реализм' title='Критический реализм'><div class=area style='position:absolute; width:30px; height:19px; left:482px; top:1206px'></div></a>
<a  href='build-rlmap.php?t_name=Экзистенциализм' title='Экзистенциализм'><div class=area style='position:absolute; width:25px; height:19px; left:199px; top:1391px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Экзистенциализм' title='Экзистенциализм'><div class=area style='position:absolute; width:26px; height:19px; left:173px; top:1391px'></div></a>
<a  href='build-rlmap.php?t_name=Натурализм' title='Натурализм'><div class=area style='position:absolute; width:30px; height:19px; left:1129px; top:824px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Натурализм' title='Натурализм'><div class=area style='position:absolute; width:31px; height:19px; left:1098px; top:824px'></div></a>
<a  href='build-rlmap.php?t_name=Трансцендентализм' title='Трансцендентализм'><div class=area style='position:absolute; width:27px; height:19px; left:288px; top:799px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Трансцендентализм' title='Трансцендентализм'><div class=area style='position:absolute; width:28px; height:19px; left:260px; top:799px'></div></a>
<a  href='build-rlmap.php?t_name=Соцреализм' title=''><div class=area style='position:absolute; width:42px; height:19px; left:816px; top:941px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Соцреализм' title=''><div class=area style='position:absolute; width:42px; height:19px; left:774px; top:941px'></div></a>
<a  href='build-rlmap.php?t_name=О войне' title=''><div class=area style='position:absolute; width:29px; height:19px; left:895px; top:1286px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=О войне' title=''><div class=area style='position:absolute; width:29px; height:19px; left:866px; top:1286px'></div></a>
<a  href='build-rlmap.php?t_name=Деревня' title=''><div class=area style='position:absolute; width:30px; height:19px; left:980px; top:855px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Деревня' title=''><div class=area style='position:absolute; width:30px; height:19px; left:950px; top:855px'></div></a>
<a  href='build-rlmap.php?t_name=Символизм' title=''><div class=area style='position:absolute; width:39px; height:19px; left:300px; top:1095px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Символизм' title=''><div class=area style='position:absolute; width:40px; height:19px; left:260px; top:1095px'></div></a>
<a  href='build-rlmap.php?t_name=Декаданс' title=''><div class=area style='position:absolute; width:32px; height:19px; left:140px; top:799px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Декаданс' title=''><div class=area style='position:absolute; width:33px; height:19px; left:107px; top:799px'></div></a>
<a  href='build-rlmap.php?t_name=Импрессионизм' title='Импрессионизм'><div class=area style='position:absolute; width:31px; height:19px; left:216px; top:1040px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Импрессионизм' title='Импрессионизм'><div class=area style='position:absolute; width:32px; height:19px; left:184px; top:1040px'></div></a>
<a  href='build-rlmap.php?t_name=Магический реализм' title='Магический реализм'><div class=area style='position:absolute; width:29px; height:19px; left:650px; top:726px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Магический реализм' title='Магический реализм'><div class=area style='position:absolute; width:30px; height:19px; left:620px; top:726px'></div></a>
<a  href='build-rlmap.php?t_name=Сюрреализм' title='Сюрреализм'><div class=area style='position:absolute; width:22px; height:19px; left:2769px; top:1329px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Сюрреализм' title='Сюрреализм'><div class=area style='position:absolute; width:23px; height:19px; left:2746px; top:1329px'></div></a>
<a  href='build-rlmap.php?t_name=Абсурд' title=''><div class=area style='position:absolute; width:27px; height:19px; left:2422px; top:947px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Абсурд' title=''><div class=area style='position:absolute; width:28px; height:19px; left:2394px; top:947px'></div></a>
<a  href='build-rlmap.php?t_name=Бит' title=''><div class=area style='position:absolute; width:15px; height:19px; left:569px; top:1237px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Бит' title=''><div class=area style='position:absolute; width:15px; height:19px; left:554px; top:1237px'></div></a>
<a  href='build-rlmap.php?t_name=Твердая научная фантастика' title='Твердая научная фантастика'><div class=area style='position:absolute; width:25px; height:19px; left:1895px; top:1194px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Твердая научная фантастика' title='Твердая научная фантастика'><div class=area style='position:absolute; width:25px; height:19px; left:1870px; top:1194px'></div></a>
<a  href='build-rlmap.php?t_name=Детектив' title=''><div class=area style='position:absolute; width:32px; height:19px; left:731px; top:738px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Детектив' title=''><div class=area style='position:absolute; width:32px; height:19px; left:699px; top:738px'></div></a>
<a  href='build-rlmap.php?t_name=О животных' title='О животных'><div class=area style='position:absolute; width:29px; height:20px; left:1057px; top:1175px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=О животных' title='О животных'><div class=area style='position:absolute; width:29px; height:20px; left:1028px; top:1175px'></div></a>
<a  href='build-rlmap.php?t_name=Модернизм' title='Модернизм'><div class=area style='position:absolute; width:33px; height:19px; left:2497px; top:947px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Модернизм' title='Модернизм'><div class=area style='position:absolute; width:33px; height:19px; left:2464px; top:947px'></div></a>
<a  href='build-rlmap.php?t_name=Экспрессионизм' title='Экспрессионизм'><div class=area style='position:absolute; width:30px; height:19px; left:2568px; top:1077px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Экспрессионизм' title='Экспрессионизм'><div class=area style='position:absolute; width:30px; height:19px; left:2538px; top:1077px'></div></a>
<a  href='build-rlmap.php?t_name=Фэнтези' title=''><div class=area style='position:absolute; width:28px; height:19px; left:2037px; top:1200px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Фэнтези' title=''><div class=area style='position:absolute; width:29px; height:19px; left:2008px; top:1200px'></div></a>
<a  href='build-rlmap.php?t_name=Формализм' title='Формализм'><div class=area style='position:absolute; width:29px; height:19px; left:137px; top:1280px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Формализм' title='Формализм'><div class=area style='position:absolute; width:30px; height:19px; left:107px; top:1280px'></div></a>
<a  href='build-rlmap.php?t_name=Антироман' title='Антироман'><div class=area style='position:absolute; width:32px; height:19px; left:2709px; top:1403px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Антироман' title='Антироман'><div class=area style='position:absolute; width:33px; height:19px; left:2676px; top:1403px'></div></a>
<a  href='build-rlmap.php?t_name=Рассерженные молодые люди' title='Рассерженные молодые люди'><div class=area style='position:absolute; width:27px; height:19px; left:2769px; top:1630px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Рассерженные молодые люди' title='Рассерженные молодые люди'><div class=area style='position:absolute; width:27px; height:19px; left:2742px; top:1630px'></div></a>
<a  href='build-rlmap.php?t_name=Орнаментальная проза' title='Орнаментальная проза'><div class=area style='position:absolute; width:25px; height:19px; left:2701px; top:1274px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Орнаментальная проза' title='Орнаментальная проза'><div class=area style='position:absolute; width:25px; height:19px; left:2676px; top:1274px'></div></a>
<a  href='build-rlmap.php?t_name=Драматургия' title='Драматургия'><div class=area style='position:absolute; width:38px; height:19px; left:68px; top:750px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Драматургия' title='Драматургия'><div class=area style='position:absolute; width:38px; height:19px; left:30px; top:750px'></div></a>
<a  href='build-rlmap.php?t_name=Постмодернизм' title='Постмодернизм'><div class=area style='position:absolute; width:32px; height:19px; left:2638px; top:1335px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Постмодернизм' title='Постмодернизм'><div class=area style='position:absolute; width:32px; height:19px; left:2606px; top:1335px'></div></a>
<a  href='build-rlmap.php?t_name=Детская фантастика' title='Детская фантастика'><div class=area style='position:absolute; width:34px; height:19px; left:1969px; top:495px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Детская фантастика' title='Детская фантастика'><div class=area style='position:absolute; width:35px; height:19px; left:1934px; top:495px'></div></a>
<a  href='build-rlmap.php?t_name=Для подростков' title='Для подростков'><div class=area style='position:absolute; width:31px; height:19px; left:2118px; top:923px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Для подростков' title='Для подростков'><div class=area style='position:absolute; width:32px; height:19px; left:2086px; top:923px'></div></a>
<a  href='build-rlmap.php?t_name=Древний Китай' title='Древний Китай'><div class=area style='position:absolute; width:21px; height:19px; left:2419px; top:13px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Древний Китай' title='Древний Китай'><div class=area style='position:absolute; width:22px; height:19px; left:2397px; top:13px'></div></a>
<a  href='build-rlmap.php?t_name=Древняя Индия' title=''><div class=area style='position:absolute; width:51px; height:19px; left:1743px; top:74px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Древняя Индия' title=''><div class=area style='position:absolute; width:51px; height:19px; left:1692px; top:74px'></div></a>
<a  href='build-rlmap.php?t_name=Древняя Персия' title='Древняя Персия'><div class=area style='position:absolute; width:26px; height:19px; left:2270px; top:104px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Древняя Персия' title='Древняя Персия'><div class=area style='position:absolute; width:26px; height:19px; left:2244px; top:104px'></div></a>
<a  href='build-rlmap.php?t_name=Мировая литература' title='Мировая литература'><div class=area style='position:absolute; width:17px; height:19px; left:2831px; top:79px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Мировая литература' title='Мировая литература'><div class=area style='position:absolute; width:17px; height:19px; left:2814px; top:79px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2&a_id=178&y=-750' title='Гесиод
Устный поэт
Древняя Греция
GRC
-750-
MY: 0/0
MX: 2'><div class=area style='position:absolute; width:25px; height:20px; left:36px; top:26px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2&a_id=178&y=-750' title='Гесиод
Устный поэт
Древняя Греция
GRC
-750-
MY: 0/0
MX: 2'><div class=area style='position:absolute; width:25px; height:20px; left:61px; top:26px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=57&a_id=192&y=-700' title='Гомер
Поэт
Древняя Греция, Поэзия
GRC
-700-
MY: 0/0
MX: 57'><div class=area style='position:absolute; width:24px; height:20px; left:91px; top:24px'></div></a>
<a target=_blank href='build-rlmap.php?mp=57&a_id=192&y=-700' title='Гомер
Поэт
Древняя Греция, Поэзия
GRC
-700-
MY: 0/0
MX: 57'><div class=area style='position:absolute; width:23px; height:20px; left:115px; top:24px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=110&a_id=1146&y=-600' title='Эзоп
Поэт
Древняя Греция, 
Поэзия
GRC
-600-
MY: 0/0
MX: 110'><div class=area style='position:absolute; width:18px; height:20px; left:144px; top:42px'></div></a>
<a target=_blank href='build-rlmap.php?mp=110&a_id=1146&y=-600' title='Эзоп
Поэт
Древняя Греция, 
Поэзия
GRC
-600-
MY: 0/0
MX: 110'><div class=area style='position:absolute; width:18px; height:20px; left:162px; top:42px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2366&a_id=1067&y=-600' title='Лао Цзы
Философ
Древний Китай
CHN
-600-
MY: 0/0
MX: 2366'><div class=area style='position:absolute; width:29px; height:20px; left:2400px; top:42px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2366&a_id=1067&y=-600' title='Лао Цзы
Философ
Древний Китай
CHN
-600-
MY: 0/0
MX: 2366'><div class=area style='position:absolute; width:29px; height:20px; left:2429px; top:42px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=385&a_id=1217&y=-570' title='Пифагор
Философ
Древняя Греция, 
Древние философы
GRC
-570-
MY: -30/0
MX: 385'><div class=area style='position:absolute; width:29px; height:20px; left:419px; top:43px'></div></a>
<a target=_blank href='build-rlmap.php?mp=385&a_id=1217&y=-570' title='Пифагор
Философ
Древняя Греция, 
Древние философы
GRC
-570-
MY: -30/0
MX: 385'><div class=area style='position:absolute; width:29px; height:20px; left:448px; top:43px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=152&a_id=836&y=-525' title='Эсхил
Драматург
Древняя Греция
GRC
-525-
MY: -40/0
MX: 152'><div class=area style='position:absolute; width:22px; height:20px; left:186px; top:46px'></div></a>
<a target=_blank href='build-rlmap.php?mp=152&a_id=836&y=-525' title='Эсхил
Драматург
Древняя Греция
GRC
-525-
MY: -40/0
MX: 152'><div class=area style='position:absolute; width:21px; height:20px; left:208px; top:46px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=201&a_id=655&y=-496' title='Софокл
Драматург
Древняя Греция
GRC
-496-
MY: -60/0
MX: 201'><div class=area style='position:absolute; width:26px; height:20px; left:235px; top:48px'></div></a>
<a target=_blank href='build-rlmap.php?mp=201&a_id=655&y=-496' title='Софокл
Драматург
Древняя Греция
GRC
-496-
MY: -60/0
MX: 201'><div class=area style='position:absolute; width:26px; height:20px; left:261px; top:48px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=258&a_id=263&y=-480' title='Еврипид
Драматург
Древняя Греция
GRC
-480-
MY: 0/0
MX: 258'><div class=area style='position:absolute; width:29px; height:20px; left:292px; top:55px'></div></a>
<a target=_blank href='build-rlmap.php?mp=258&a_id=263&y=-480' title='Еврипид
Драматург
Древняя Греция
GRC
-480-
MY: 0/0
MX: 258'><div class=area style='position:absolute; width:29px; height:20px; left:321px; top:55px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=3&a_id=32&y=-446' title='Аристофан
Комедиограф
Древняя Греция
GRC
-446-
MY: 0/0
MX: 3'><div class=area style='position:absolute; width:36px; height:20px; left:37px; top:57px'></div></a>
<a target=_blank href='build-rlmap.php?mp=3&a_id=32&y=-446' title='Аристофан
Комедиограф
Древняя Греция
GRC
-446-
MY: 0/0
MX: 3'><div class=area style='position:absolute; width:36px; height:20px; left:73px; top:57px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=330&a_id=558&y=-427' title='Платон
Философ
Древняя Греция, 
Древние философы
GRC
-427-
MY: 0/0
MX: 330'><div class=area style='position:absolute; width:25px; height:20px; left:364px; top:60px'></div></a>
<a target=_blank href='build-rlmap.php?mp=330&a_id=558&y=-427' title='Платон
Философ
Древняя Греция, 
Древние философы
GRC
-427-
MY: 0/0
MX: 330'><div class=area style='position:absolute; width:24px; height:20px; left:389px; top:60px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=385&a_id=1138&y=-384' title='Аристотель
Философ
Древняя Греция, 
Древние философы
GRC
-384-
MY: 30/0
MX: 385'><div class=area style='position:absolute; width:37px; height:20px; left:419px; top:67px'></div></a>
<a target=_blank href='build-rlmap.php?mp=385&a_id=1138&y=-384' title='Аристотель
Философ
Древняя Греция, 
Древние философы
GRC
-384-
MY: 30/0
MX: 385'><div class=area style='position:absolute; width:36px; height:20px; left:456px; top:67px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=85&a_id=454&y=-343' title='Менандр
Комедиограф
Древняя Греция
GRC
-343-
MY: 0/0
MX: 85'><div class=area style='position:absolute; width:30px; height:20px; left:119px; top:67px'></div></a>
<a target=_blank href='build-rlmap.php?mp=85&a_id=454&y=-343' title='Менандр
Комедиограф
Древняя Греция
GRC
-343-
MY: 0/0
MX: 85'><div class=area style='position:absolute; width:30px; height:20px; left:149px; top:67px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2366&a_id=673&y=-313' title='Сунь-цзы
Стратеги
Древний Китай
CHN
-313-
MY: 0/0
MX: 2366'><div class=area style='position:absolute; width:30px; height:20px; left:2400px; top:71px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2366&a_id=673&y=-313' title='Сунь-цзы
Стратеги
Древний Китай
CHN
-313-
MY: 0/0
MX: 2366'><div class=area style='position:absolute; width:30px; height:20px; left:2430px; top:71px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=155&a_id=599&y=-300' title='Аполлоний Родосский
Поэт
Древняя Греция, Поэзия
GRC
-300-
MY: 20/0
MX: 155'><div class=area style='position:absolute; width:41px; height:20px; left:189px; top:73px'></div></a>
<a target=_blank href='build-rlmap.php?mp=155&a_id=599&y=-300' title='Аполлоний Родосский
Поэт
Древняя Греция, Поэзия
GRC
-300-
MY: 20/0
MX: 155'><div class=area style='position:absolute; width:41px; height:20px; left:230px; top:73px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=535&a_id=557&y=-254' title='Плавт
Комедиограф
Древний Рим
ROM
-254-
MY: 0/0
MX: 535'><div class=area style='position:absolute; width:22px; height:20px; left:569px; top:77px'></div></a>
<a target=_blank href='build-rlmap.php?mp=535&a_id=557&y=-254' title='Плавт
Комедиограф
Древний Рим
ROM
-254-
MY: 0/0
MX: 535'><div class=area style='position:absolute; width:21px; height:20px; left:591px; top:77px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=585&a_id=691&y=-195' title='Теренций
Драматург
Древний Рим
ROM
-195-
MY: -10/0
MX: 585'><div class=area style='position:absolute; width:33px; height:20px; left:619px; top:80px'></div></a>
<a target=_blank href='build-rlmap.php?mp=585&a_id=691&y=-195' title='Теренций
Драматург
Древний Рим
ROM
-195-
MY: -10/0
MX: 585'><div class=area style='position:absolute; width:32px; height:20px; left:652px; top:80px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=653&a_id=132&y=-70' title='Вергилий
Поэт
Древний Рим, Поэзия
ROM
-70-
MY: 0/0
MX: 653'><div class=area style='position:absolute; width:31px; height:20px; left:687px; top:95px'></div></a>
<a target=_blank href='build-rlmap.php?mp=653&a_id=132&y=-70' title='Вергилий
Поэт
Древний Рим, Поэзия
ROM
-70-
MY: 0/0
MX: 653'><div class=area style='position:absolute; width:30px; height:20px; left:718px; top:95px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=723&a_id=522&y=-43' title='Овидий
Поэт
Древний Рим, Поэзия
ROM
-43-
MY: 0/0
MX: 723'><div class=area style='position:absolute; width:26px; height:20px; left:757px; top:96px'></div></a>
<a target=_blank href='build-rlmap.php?mp=723&a_id=522&y=-43' title='Овидий
Поэт
Древний Рим, Поэзия
ROM
-43-
MY: 0/0
MX: 723'><div class=area style='position:absolute; width:26px; height:20px; left:783px; top:96px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=472&a_id=632&y=-4' title='Сенека
Философ
Древний Рим, 
Древние философы
ROM
-4-65
MY: 0/0
MX: 472'><div class=area style='position:absolute; width:25px; height:20px; left:506px; top:99px'></div></a>
<a target=_blank href='build-rlmap.php?mp=472&a_id=632&y=-4' title='Сенека
Философ
Древний Рим, 
Древние философы
ROM
-4-65
MY: 0/0
MX: 472'><div class=area style='position:absolute; width:24px; height:20px; left:531px; top:99px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1664&a_id=114&y=0' title='Бхаса
Автор
Древняя Индия
IND
0-
MY: -20/0
MX: 1664'><div class=area style='position:absolute; width:21px; height:20px; left:1698px; top:99px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1664&a_id=114&y=0' title='Бхаса
Автор
Древняя Индия
IND
0-
MY: -20/0
MX: 1664'><div class=area style='position:absolute; width:21px; height:20px; left:1719px; top:99px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=785&a_id=1143&y=14' title='Петроний Арбитр
Автор
Древний Рим
ROM
14-66
MY: 0/0
MX: 785'><div class=area style='position:absolute; width:32px; height:20px; left:819px; top:99px'></div></a>
<a target=_blank href='build-rlmap.php?mp=785&a_id=1143&y=14' title='Петроний Арбитр
Автор
Древний Рим
ROM
14-66
MY: 0/0
MX: 785'><div class=area style='position:absolute; width:31px; height:20px; left:851px; top:99px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2366&a_id=48&y=32' title='Бань Гу

Древний Китай
CHN
32-92
MY: -100/0
MX: 2366'><div class=area style='position:absolute; width:26px; height:20px; left:2400px; top:95px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2366&a_id=48&y=32' title='Бань Гу

Древний Китай
CHN
32-92
MY: -100/0
MX: 2366'><div class=area style='position:absolute; width:25px; height:20px; left:2426px; top:95px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=385&a_id=561&y=46' title='Плутарх
Философ
Древняя Греция, 
Древние философы
GRC
46-127
MY: 0/0
MX: 385'><div class=area style='position:absolute; width:28px; height:20px; left:419px; top:99px'></div></a>
<a target=_blank href='build-rlmap.php?mp=385&a_id=561&y=46' title='Плутарх
Философ
Древняя Греция, 
Древние философы
GRC
46-127
MY: 0/0
MX: 385'><div class=area style='position:absolute; width:27px; height:20px; left:447px; top:99px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1219&a_id=1212&y=58' title='Публий Корнелий Тацит
Историк
Древняя Греция, История
ROM
58-117
MY: 0/0
MX: 1219'><div class=area style='position:absolute; width:22px; height:20px; left:1253px; top:99px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1219&a_id=1212&y=58' title='Публий Корнелий Тацит
Историк
Древняя Греция, История
ROM
58-117
MY: 0/0
MX: 1219'><div class=area style='position:absolute; width:21px; height:20px; left:1275px; top:99px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1713&a_id=39&y=80' title='Ашвагхоша
Драматург
Древняя Индия
IND
80-150
MY: -100/0
MX: 1713'><div class=area style='position:absolute; width:26px; height:20px; left:1747px; top:99px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1713&a_id=39&y=80' title='Ашвагхоша
Драматург
Древняя Индия
IND
80-150
MY: -100/0
MX: 1713'><div class=area style='position:absolute; width:25px; height:20px; left:1773px; top:99px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=3&a_id=410&y=100' title='Лонг

Древняя Греция
GRC
100-
MY: 0/0
MX: 3'><div class=area style='position:absolute; width:18px; height:20px; left:37px; top:100px'></div></a>
<a target=_blank href='build-rlmap.php?mp=3&a_id=410&y=100' title='Лонг

Древняя Греция
GRC
100-
MY: 0/0
MX: 3'><div class=area style='position:absolute; width:18px; height:20px; left:55px; top:100px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=47&a_id=682&y=100' title='Ахилл Татий
Писатель
Древняя Греция
GRC
100-
MY: 0/0
MX: 47'><div class=area style='position:absolute; width:27px; height:20px; left:81px; top:100px'></div></a>
<a target=_blank href='build-rlmap.php?mp=47&a_id=682&y=100' title='Ахилл Татий
Писатель
Древняя Греция
GRC
100-
MY: 0/0
MX: 47'><div class=area style='position:absolute; width:27px; height:20px; left:108px; top:100px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=110&a_id=757&y=100' title='Харитон

Древняя Греция
GRC
100-
MY: 0/0
MX: 110'><div class=area style='position:absolute; width:28px; height:20px; left:144px; top:100px'></div></a>
<a target=_blank href='build-rlmap.php?mp=110&a_id=757&y=100' title='Харитон

Древняя Греция
GRC
100-
MY: 0/0
MX: 110'><div class=area style='position:absolute; width:28px; height:20px; left:172px; top:100px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=180&a_id=415&y=120' title='Лукиан
Писатель
Древняя Греция
GRC
120-180
MY: 0/0
MX: 180'><div class=area style='position:absolute; width:24px; height:20px; left:214px; top:101px'></div></a>
<a target=_blank href='build-rlmap.php?mp=180&a_id=415&y=120' title='Лукиан
Писатель
Древняя Греция
GRC
120-180
MY: 0/0
MX: 180'><div class=area style='position:absolute; width:24px; height:20px; left:238px; top:101px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=535&a_id=26&y=124' title='Апулей
Писатель
Древний Рим
ROM
124-180
MY: 10/0
MX: 535'><div class=area style='position:absolute; width:24px; height:20px; left:569px; top:101px'></div></a>
<a target=_blank href='build-rlmap.php?mp=535&a_id=26&y=124' title='Апулей
Писатель
Древний Рим
ROM
124-180
MY: 10/0
MX: 535'><div class=area style='position:absolute; width:24px; height:20px; left:593px; top:101px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=245&a_id=174&y=250' title='Гелиодор
Писатель
Древняя Греция
GRC
250-
MY: 0/0
MX: 245'><div class=area style='position:absolute; width:32px; height:20px; left:279px; top:104px'></div></a>
<a target=_blank href='build-rlmap.php?mp=245&a_id=174&y=250' title='Гелиодор
Писатель
Древняя Греция
GRC
250-
MY: 0/0
MX: 245'><div class=area style='position:absolute; width:31px; height:20px; left:311px; top:104px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1776&a_id=305&y=350' title='Калидаса
Драматург
Древняя Индия
IND
350-420
MY: -140/0
MX: 1776'><div class=area style='position:absolute; width:32px; height:20px; left:1810px; top:103px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1776&a_id=305&y=350' title='Калидаса
Драматург
Древняя Индия
IND
350-420
MY: -140/0
MX: 1776'><div class=area style='position:absolute; width:31px; height:20px; left:1842px; top:103px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1845&a_id=822&y=350' title='Шудрака
Автор
Древняя Индия
IND
350-
MY: 0/0
MX: 1845'><div class=area style='position:absolute; width:28px; height:20px; left:1879px; top:107px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1845&a_id=822&y=350' title='Шудрака
Автор
Древняя Индия
IND
350-
MY: 0/0
MX: 1845'><div class=area style='position:absolute; width:28px; height:20px; left:1907px; top:107px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1908&a_id=139&y=450' title='Вишакхадатта
Поэт
Древняя Индия, Поэзия
IND
450-
MY: -50/0
MX: 1908'><div class=area style='position:absolute; width:26px; height:20px; left:1942px; top:109px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1908&a_id=139&y=450' title='Вишакхадатта
Поэт
Древняя Индия, Поэзия
IND
450-
MY: -50/0
MX: 1908'><div class=area style='position:absolute; width:26px; height:20px; left:1968px; top:109px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1968&a_id=113&y=500' title='Бхарави
Автор
Древняя Индия
IND
500-
MY: 0/0
MX: 1968'><div class=area style='position:absolute; width:28px; height:20px; left:2002px; top:112px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1968&a_id=113&y=500' title='Бхарави
Автор
Древняя Индия
IND
500-
MY: 0/0
MX: 1968'><div class=area style='position:absolute; width:28px; height:20px; left:2030px; top:112px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2029&a_id=671&y=550' title='Субандху
Роман
Древняя Индия
IND
550-
MY: 0/0
MX: 2029'><div class=area style='position:absolute; width:31px; height:20px; left:2063px; top:113px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2029&a_id=671&y=550' title='Субандху
Роман
Древняя Индия
IND
550-
MY: 0/0
MX: 2029'><div class=area style='position:absolute; width:30px; height:20px; left:2094px; top:113px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1544&a_id=656&y=560' title='Софроний Иерусалимский

Религия, Средние века
RUS
560-638
MY: 0/-264
MX: 1544'><div class=area style='position:absolute; width:34px; height:20px; left:1578px; top:106px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1544&a_id=656&y=560' title='Софроний Иерусалимский

Религия, Средние века
RUS
560-638
MY: 0/-264
MX: 1544'><div class=area style='position:absolute; width:34px; height:20px; left:1612px; top:106px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2098&a_id=47&y=600' title='Банабхатта
Литератор
Древняя Индия
IND
600-
MY: 0/0
MX: 2098'><div class=area style='position:absolute; width:26px; height:20px; left:2132px; top:115px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2098&a_id=47&y=600' title='Банабхатта
Литератор
Древняя Индия
IND
600-
MY: 0/0
MX: 2098'><div class=area style='position:absolute; width:26px; height:20px; left:2158px; top:115px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2156&a_id=760&y=606' title='Харша

Древняя Индия
IND
606-647
MY: 0/0
MX: 2156'><div class=area style='position:absolute; width:23px; height:20px; left:2190px; top:115px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2156&a_id=760&y=606' title='Харша

Древняя Индия
IND
606-647
MY: 0/0
MX: 2156'><div class=area style='position:absolute; width:23px; height:20px; left:2213px; top:115px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1664&a_id=112&y=700' title='Бхавабхути
Автор
Древняя Индия
IND
700-
MY: 100/0
MX: 1664'><div class=area style='position:absolute; width:36px; height:20px; left:1698px; top:121px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1664&a_id=112&y=700' title='Бхавабхути
Автор
Древняя Индия
IND
700-
MY: 100/0
MX: 1664'><div class=area style='position:absolute; width:36px; height:20px; left:1734px; top:121px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1748&a_id=421&y=700' title='Магха

Древняя Индия
IND
700-
MY: 160/0
MX: 1748'><div class=area style='position:absolute; width:21px; height:20px; left:1782px; top:122px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1748&a_id=421&y=700' title='Магха

Древняя Индия
IND
700-
MY: 160/0
MX: 1748'><div class=area style='position:absolute; width:21px; height:20px; left:1803px; top:122px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2417&a_id=824&y=750' title='Шэнь Цзицзи
Писатель
Древний Китай
CHN
750-800
MY: -200/0
MX: 2417'><div class=area style='position:absolute; width:25px; height:20px; left:2451px; top:113px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2417&a_id=824&y=750' title='Шэнь Цзицзи
Писатель
Древний Китай
CHN
750-800
MY: -200/0
MX: 2417'><div class=area style='position:absolute; width:24px; height:20px; left:2476px; top:113px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2542&a_id=399&y=775' title='Ли Фуянь
Писатель
Древний Китай
CHN
775-833
MY: -200/0
MX: 2542'><div class=area style='position:absolute; width:21px; height:20px; left:2576px; top:114px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2542&a_id=399&y=775' title='Ли Фуянь
Писатель
Древний Китай
CHN
775-833
MY: -200/0
MX: 2542'><div class=area style='position:absolute; width:21px; height:20px; left:2597px; top:114px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2474&a_id=81&y=776' title='Бо Синцзянь
Писатель
Древний Китай
CHN
776-826
MY: -200/0
MX: 2474'><div class=area style='position:absolute; width:32px; height:20px; left:2508px; top:114px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2474&a_id=81&y=776' title='Бо Синцзянь
Писатель
Древний Китай
CHN
776-826
MY: -200/0
MX: 2474'><div class=area style='position:absolute; width:31px; height:20px; left:2540px; top:114px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2657&a_id=398&y=778' title='Ли Гунцзо
Писатель
Древний Китай
CHN
778-848
MY: -200/0
MX: 2657'><div class=area style='position:absolute; width:23px; height:20px; left:2691px; top:114px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2657&a_id=398&y=778' title='Ли Гунцзо
Писатель
Древний Китай
CHN
778-848
MY: -200/0
MX: 2657'><div class=area style='position:absolute; width:23px; height:20px; left:2714px; top:114px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2591&a_id=838&y=779' title='Юань Чжэнь
Писатель
Древний Китай
CHN
779-831
MY: -200/0
MX: 2591'><div class=area style='position:absolute; width:29px; height:20px; left:2625px; top:114px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2591&a_id=838&y=779' title='Юань Чжэнь
Писатель
Древний Китай
CHN
779-831
MY: -200/0
MX: 2591'><div class=area style='position:absolute; width:28px; height:20px; left:2654px; top:114px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2708&a_id=418&y=930' title='Лэ Ши
Писатель
Древний Китай
CHN
930-1008
MY: -200/0
MX: 2708'><div class=area style='position:absolute; width:13px; height:20px; left:2742px; top:119px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2708&a_id=418&y=930' title='Лэ Ши
Писатель
Древний Китай
CHN
930-1008
MY: -200/0
MX: 2708'><div class=area style='position:absolute; width:12px; height:20px; left:2755px; top:119px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2220&a_id=737&y=935' title='Фирдоуси
Поэт
Древняя Персия, Поэзия
PER
935-1020
MY: 0/0
MX: 2220'><div class=area style='position:absolute; width:32px; height:20px; left:2254px; top:125px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2220&a_id=737&y=935' title='Фирдоуси
Поэт
Древняя Персия, Поэзия
PER
935-1020
MY: 0/0
MX: 2220'><div class=area style='position:absolute; width:32px; height:20px; left:2286px; top:125px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1067&a_id=498&y=951' title='Григор Нарекаци

Древняя Армения
ARM
951-1003
MY: 0/0
MX: 1067'><div class=area style='position:absolute; width:32px; height:20px; left:1101px; top:125px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1067&a_id=498&y=951' title='Григор Нарекаци

Древняя Армения
ARM
951-1003
MY: 0/0
MX: 1067'><div class=area style='position:absolute; width:31px; height:20px; left:1133px; top:125px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2783&a_id=675&y=965' title='Сэй-Сёнагон
Автор
Древняя Япония
JAP
965-1017
MY: 0/-542
MX: 2783'><div class=area style='position:absolute; width:29px; height:20px; left:2817px; top:109px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2783&a_id=675&y=965' title='Сэй-Сёнагон
Автор
Древняя Япония
JAP
965-1017
MY: 0/-542
MX: 2783'><div class=area style='position:absolute; width:28px; height:20px; left:2846px; top:109px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2783&a_id=489&y=978' title='Сикибу Мурасаки
Писательница
Древняя Япония
JAP
978-1014
MY: 0/177
MX: 2783'><div class=area style='position:absolute; width:27px; height:20px; left:2817px; top:131px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2783&a_id=489&y=978' title='Сикибу Мурасаки
Писательница
Древняя Япония
JAP
978-1014
MY: 0/177
MX: 2783'><div class=area style='position:absolute; width:27px; height:20px; left:2844px; top:131px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1544&a_id=289&y=990' title='Иларион
Автор
Религия, Средние века
RUS
990-1055
MY: 0/27
MX: 1544'><div class=area style='position:absolute; width:29px; height:20px; left:1578px; top:128px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1544&a_id=289&y=990' title='Иларион
Автор
Религия, Средние века
RUS
990-1055
MY: 0/27
MX: 1544'><div class=area style='position:absolute; width:29px; height:20px; left:1607px; top:128px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1468&a_id=1042&y=1048' title='Омар Хайям
Философ
Мистицизм, Философия, 
Агностицизм, Спиритуализм
PER
1048-1131
MY: 0/0
MX: 1468'><div class=area style='position:absolute; width:23px; height:20px; left:1502px; top:129px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1468&a_id=1042&y=1048' title='Омар Хайям
Философ
Мистицизм, Философия, 
Агностицизм, Спиритуализм
PER
1048-1131
MY: 0/0
MX: 1468'><div class=area style='position:absolute; width:22px; height:20px; left:1525px; top:129px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2366&a_id=419&y=1050' title='Лю Фу
Писатель
Древний Китай
CHN
1050-
MY: 0/0
MX: 2366'><div class=area style='position:absolute; width:22px; height:20px; left:2400px; top:128px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2366&a_id=419&y=1050' title='Лю Фу
Писатель
Древний Китай
CHN
1050-
MY: 0/0
MX: 2366'><div class=area style='position:absolute; width:22px; height:20px; left:2422px; top:128px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2737&a_id=779&y=1050' title='Цинь Чунь
Писатель
Древний Китай
CHN
1050-
MY: -200/0
MX: 2737'><div class=area style='position:absolute; width:17px; height:20px; left:2771px; top:122px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2737&a_id=779&y=1050' title='Цинь Чунь
Писатель
Древний Китай
CHN
1050-
MY: -200/0
MX: 2737'><div class=area style='position:absolute; width:16px; height:20px; left:2788px; top:122px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1544&a_id=504&y=1056' title='Нестор Летописец
Монах
Религия, Средние века
RUS
1056-1114
MY: 0/240
MX: 1544'><div class=area style='position:absolute; width:25px; height:20px; left:1578px; top:150px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1544&a_id=504&y=1056' title='Нестор Летописец
Монах
Религия, Средние века
RUS
1056-1114
MY: 0/240
MX: 1544'><div class=area style='position:absolute; width:24px; height:20px; left:1603px; top:150px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1800&a_id=233&y=1100' title='Джаядева
Автор
Древняя Индия
IND
1100-
MY: 0/0
MX: 1800'><div class=area style='position:absolute; width:33px; height:20px; left:1834px; top:130px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1800&a_id=233&y=1100' title='Джаядева
Автор
Древняя Индия
IND
1100-
MY: 0/0
MX: 1800'><div class=area style='position:absolute; width:33px; height:20px; left:1867px; top:130px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1874&a_id=820&y=1100' title='Шрихарша
Автор
Древняя Индия
IND
1100-
MY: 50/0
MX: 1874'><div class=area style='position:absolute; width:34px; height:20px; left:1908px; top:131px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1874&a_id=820&y=1100' title='Шрихарша
Автор
Древняя Индия
IND
1100-
MY: 50/0
MX: 1874'><div class=area style='position:absolute; width:34px; height:20px; left:1942px; top:131px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2297&a_id=506&y=1141' title='Гянджеви Низами
Поэт
Поэзия, 
Древняя Персия
PER
1141-1209
MY: 0/0
MX: 2297'><div class=area style='position:absolute; width:26px; height:20px; left:2331px; top:131px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2297&a_id=506&y=1141' title='Гянджеви Низами
Поэт
Поэзия, 
Древняя Персия
PER
1141-1209
MY: 0/0
MX: 2297'><div class=area style='position:absolute; width:25px; height:20px; left:2357px; top:131px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=910&a_id=708&y=1150' title='Кретьен де Труа

Средние века
FRA
1150-1190
MY: 0/0
MX: 910'><div class=area style='position:absolute; width:31px; height:20px; left:944px; top:131px'></div></a>
<a target=_blank href='build-rlmap.php?mp=910&a_id=708&y=1150' title='Кретьен де Труа

Средние века
FRA
1150-1190
MY: 0/0
MX: 910'><div class=area style='position:absolute; width:31px; height:20px; left:975px; top:131px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2717&a_id=791&y=1150' title='Чжэн Тинъюй
Автор

CHN
1150-
MY: 120/0
MX: 2717'><div class=area style='position:absolute; width:27px; height:20px; left:2751px; top:145px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2717&a_id=791&y=1150' title='Чжэн Тинъюй
Автор

CHN
1150-
MY: 120/0
MX: 2717'><div class=area style='position:absolute; width:27px; height:20px; left:2778px; top:145px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2783&a_id=688&y=1155' title='Камо-но Тёмэй
Писатель

JAP
1155-1216
MY: 0/161
MX: 2783'><div class=area style='position:absolute; width:22px; height:20px; left:2817px; top:153px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2783&a_id=688&y=1155' title='Камо-но Тёмэй
Писатель

JAP
1155-1216
MY: 0/161
MX: 2783'><div class=area style='position:absolute; width:22px; height:20px; left:2839px; top:153px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=980&a_id=837&y=1170' title='Вольфрам фон Эшенбах
Поэт
Поэзия, Средние века
DEU
1170-1220
MY: 0/0
MX: 980'><div class=area style='position:absolute; width:40px; height:20px; left:1014px; top:132px'></div></a>
<a target=_blank href='build-rlmap.php?mp=980&a_id=837&y=1170' title='Вольфрам фон Эшенбах
Поэт
Поэзия, Средние века
DEU
1170-1220
MY: 0/0
MX: 980'><div class=area style='position:absolute; width:39px; height:20px; left:1054px; top:132px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1136&a_id=610&y=1172' title='Шота Руставели
Поэт
Поэзия
GEO
1172-1216
MY: 0/0
MX: 1136'><div class=area style='position:absolute; width:25px; height:20px; left:1170px; top:132px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1136&a_id=610&y=1172' title='Шота Руставели
Поэт
Поэзия
GEO
1172-1216
MY: 0/0
MX: 1136'><div class=area style='position:absolute; width:24px; height:20px; left:1195px; top:132px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2366&a_id=809&y=1191' title='Ши Цзюньбао


CHN
1191-1276
MY: 150/0
MX: 2366'><div class=area style='position:absolute; width:33px; height:20px; left:2400px; top:158px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2366&a_id=809&y=1191' title='Ши Цзюньбао


CHN
1191-1276
MY: 150/0
MX: 2366'><div class=area style='position:absolute; width:32px; height:20px; left:2433px; top:158px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2421&a_id=159&y=1200' title='Гао Маоцин


CHN
1200-
MY: 0/0
MX: 2421'><div class=area style='position:absolute; width:27px; height:20px; left:2455px; top:135px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2421&a_id=159&y=1200' title='Гао Маоцин


CHN
1200-
MY: 0/0
MX: 2421'><div class=area style='position:absolute; width:26px; height:20px; left:2482px; top:135px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2478&a_id=400&y=1200' title='Ли Вэньюй


CHN
1200-
MY: 5/0
MX: 2478'><div class=area style='position:absolute; width:25px; height:20px; left:2512px; top:136px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2478&a_id=400&y=1200' title='Ли Вэньюй


CHN
1200-
MY: 5/0
MX: 2478'><div class=area style='position:absolute; width:25px; height:20px; left:2537px; top:136px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2783&a_id=505&y=1200' title='Нидзё


JAP
1200-
MY: 0/232
MX: 2783'><div class=area style='position:absolute; width:22px; height:20px; left:2817px; top:175px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2783&a_id=505&y=1200' title='Нидзё


JAP
1200-
MY: 0/232
MX: 2783'><div class=area style='position:absolute; width:22px; height:20px; left:2839px; top:175px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2536&a_id=780&y=1200' title='Цинь Цзяньфу


CHN
1200-
MY: 5/0
MX: 2536'><div class=area style='position:absolute; width:29px; height:20px; left:2570px; top:136px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2536&a_id=780&y=1200' title='Цинь Цзяньфу


CHN
1200-
MY: 5/0
MX: 2536'><div class=area style='position:absolute; width:29px; height:20px; left:2599px; top:136px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2599&a_id=790&y=1200' title='Чжан Гобинь


CHN
1200-
MY: 5/0
MX: 2599'><div class=area style='position:absolute; width:24px; height:20px; left:2633px; top:136px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2599&a_id=790&y=1200' title='Чжан Гобинь


CHN
1200-
MY: 5/0
MX: 2599'><div class=area style='position:absolute; width:24px; height:20px; left:2657px; top:136px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2652&a_id=844&y=1200' title='Ян Сяньчжи


CHN
1200-
MY: 5/0
MX: 2652'><div class=area style='position:absolute; width:29px; height:20px; left:2686px; top:136px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2652&a_id=844&y=1200' title='Ян Сяньчжи


CHN
1200-
MY: 5/0
MX: 2652'><div class=area style='position:absolute; width:28px; height:20px; left:2715px; top:136px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2438&a_id=216&y=1210' title='Гуань Ханьцин


CHN
1210-1280
MY: 140/0
MX: 2438'><div class=area style='position:absolute; width:29px; height:20px; left:2472px; top:158px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2438&a_id=216&y=1210' title='Гуань Ханьцин


CHN
1210-1280
MY: 140/0
MX: 2438'><div class=area style='position:absolute; width:28px; height:20px; left:2501px; top:158px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2499&a_id=82&y=1226' title='Бо Пу
Автор

CHN
1226-1310
MY: 120/0
MX: 2499'><div class=area style='position:absolute; width:11px; height:20px; left:2533px; top:158px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2499&a_id=82&y=1226' title='Бо Пу
Автор

CHN
1226-1310
MY: 120/0
MX: 2499'><div class=area style='position:absolute; width:11px; height:20px; left:2544px; top:158px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2526&a_id=224&y=1250' title='Дай Шаньфу


CHN
1250-
MY: 120/0
MX: 2526'><div class=area style='position:absolute; width:27px; height:20px; left:2560px; top:159px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2526&a_id=224&y=1250' title='Дай Шаньфу


CHN
1250-
MY: 120/0
MX: 2526'><div class=area style='position:absolute; width:27px; height:20px; left:2587px; top:159px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2584&a_id=401&y=1250' title='Ли Чжифу


CHN
1250-
MY: 120/0
MX: 2584'><div class=area style='position:absolute; width:23px; height:20px; left:2618px; top:159px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2584&a_id=401&y=1250' title='Ли Чжифу


CHN
1250-
MY: 120/0
MX: 2584'><div class=area style='position:absolute; width:23px; height:20px; left:2641px; top:159px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2701&a_id=420&y=1250' title='Ма Чжиюань


CHN
1250-1323
MY: 150/0
MX: 2701'><div class=area style='position:absolute; width:30px; height:20px; left:2735px; top:170px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2701&a_id=420&y=1250' title='Ма Чжиюань


CHN
1250-1323
MY: 150/0
MX: 2701'><div class=area style='position:absolute; width:29px; height:20px; left:2765px; top:170px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2635&a_id=711&y=1250' title='У Ханьчэнь


CHN
1250-
MY: 120/0
MX: 2635'><div class=area style='position:absolute; width:31px; height:20px; left:2669px; top:159px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2635&a_id=711&y=1250' title='У Ханьчэнь


CHN
1250-
MY: 120/0
MX: 2635'><div class=area style='position:absolute; width:30px; height:20px; left:2700px; top:159px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=860&a_id=225&y=1265' title='Данте
Поэт
Поэзия, Средние века
ITA
1265-1321
MY: 0/0
MX: 860'><div class=area style='position:absolute; width:22px; height:20px; left:894px; top:145px'></div></a>
<a target=_blank href='build-rlmap.php?mp=860&a_id=225&y=1265' title='Данте
Поэт
Поэзия, Средние века
ITA
1265-1321
MY: 0/0
MX: 860'><div class=area style='position:absolute; width:21px; height:20px; left:916px; top:145px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2534&a_id=842&y=1271' title='Юэ Бочуань


CHN
1271-1368
MY: 150/0
MX: 2534'><div class=area style='position:absolute; width:27px; height:20px; left:2568px; top:180px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2534&a_id=842&y=1271' title='Юэ Бочуань


CHN
1271-1368
MY: 150/0
MX: 2534'><div class=area style='position:absolute; width:26px; height:20px; left:2595px; top:180px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2&a_id=87&y=1313' title='Джованни Боккаччо
Писатель
Возрождение
ITA
1313-1375
MY: 0/0
MX: 2'><div class=area style='position:absolute; width:29px; height:20px; left:36px; top:152px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2&a_id=87&y=1313' title='Джованни Боккаччо
Писатель
Возрождение
ITA
1313-1375
MY: 0/0
MX: 2'><div class=area style='position:absolute; width:29px; height:20px; left:65px; top:152px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=910&a_id=390&y=1332' title='Уильям Ленгленд
Автор
Средние века
BRI
1332-1386
MY: 0/0
MX: 910'><div class=area style='position:absolute; width:32px; height:20px; left:944px; top:154px'></div></a>
<a target=_blank href='build-rlmap.php?mp=910&a_id=390&y=1332' title='Уильям Ленгленд
Автор
Средние века
BRI
1332-1386
MY: 0/0
MX: 910'><div class=area style='position:absolute; width:32px; height:20px; left:976px; top:154px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=71&a_id=619&y=1332' title='Франко Саккетти
Писатель
Возрождение
ITA
1332-1400
MY: 0/0
MX: 71'><div class=area style='position:absolute; width:29px; height:20px; left:105px; top:155px'></div></a>
<a target=_blank href='build-rlmap.php?mp=71&a_id=619&y=1332' title='Франко Саккетти
Писатель
Возрождение
ITA
1332-1400
MY: 0/0
MX: 71'><div class=area style='position:absolute; width:28px; height:20px; left:134px; top:155px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2597&a_id=782&y=1341' title='Цюй Ю
Писатель

CHN
1341-1427
MY: 90/0
MX: 2597'><div class=area style='position:absolute; width:10px; height:20px; left:2631px; top:181px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2597&a_id=782&y=1341' title='Цюй Ю
Писатель

CHN
1341-1427
MY: 90/0
MX: 2597'><div class=area style='position:absolute; width:9px; height:20px; left:2641px; top:181px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=982&a_id=793&y=1343' title='Джефри Чосер
Поэт
Поэзия, Средние века, 
Детская, Дидактизм, Разговорный, Фэнтези
BRI
1343-1400
MY: 0/0
MX: 982'><div class=area style='position:absolute; width:22px; height:20px; left:1016px; top:156px'></div></a>
<a target=_blank href='build-rlmap.php?mp=982&a_id=793&y=1343' title='Джефри Чосер
Поэт
Поэзия, Средние века, 
Детская, Дидактизм, Разговорный, Фэнтези
BRI
1343-1400
MY: 0/0
MX: 982'><div class=area style='position:absolute; width:21px; height:20px; left:1038px; top:156px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2620&a_id=402&y=1376' title='Ли Чжэнь
Писатель

CHN
1376-1452
MY: 60/0
MX: 2620'><div class=area style='position:absolute; width:28px; height:20px; left:2654px; top:181px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2620&a_id=402&y=1376' title='Ли Чжэнь
Писатель

CHN
1376-1452
MY: 60/0
MX: 2620'><div class=area style='position:absolute; width:27px; height:20px; left:2682px; top:181px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=135&a_id=507&y=1400' title='Афанасий Никитин

Возрождение
RUS
1400-1472
MY: 0/0
MX: 135'><div class=area style='position:absolute; width:27px; height:20px; left:169px; top:170px'></div></a>
<a target=_blank href='build-rlmap.php?mp=135&a_id=507&y=1400' title='Афанасий Никитин

Возрождение
RUS
1400-1472
MY: 0/0
MX: 135'><div class=area style='position:absolute; width:27px; height:20px; left:196px; top:170px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1033&a_id=490&y=1405' title='Томас Мэлори
Писатель
Средние века
BRI
1405-1471
MY: 0/0
MX: 1033'><div class=area style='position:absolute; width:26px; height:20px; left:1067px; top:171px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1033&a_id=490&y=1405' title='Томас Мэлори
Писатель
Средние века
BRI
1405-1471
MY: 0/0
MX: 1033'><div class=area style='position:absolute; width:26px; height:20px; left:1093px; top:171px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2297&a_id=495&y=1441' title='Алишер Навои
Поэт
Древняя Персия, Поэзия
PER
1441-1501
MY: -40/0
MX: 2297'><div class=area style='position:absolute; width:22px; height:20px; left:2331px; top:169px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2297&a_id=495&y=1441' title='Алишер Навои
Поэт
Древняя Персия, Поэзия
PER
1441-1501
MY: -40/0
MX: 2297'><div class=area style='position:absolute; width:22px; height:20px; left:2353px; top:169px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=416&a_id=604&y=1466' title='Эразм Роттердамский
Философ
Возрождение, 
Древние философы
NLD
1466-1536
MY: 0/0
MX: 416'><div class=area style='position:absolute; width:28px; height:20px; left:450px; top:188px'></div></a>
<a target=_blank href='build-rlmap.php?mp=416&a_id=604&y=1466' title='Эразм Роттердамский
Философ
Возрождение, 
Древние философы
NLD
1466-1536
MY: 0/0
MX: 416'><div class=area style='position:absolute; width:27px; height:20px; left:478px; top:188px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=330&a_id=427&y=1469' title='Никколо Макиавелли
Философ
Возрождение, 
Древние философы
ITA
1469-1527
MY: 0/0
MX: 330'><div class=area style='position:absolute; width:40px; height:20px; left:364px; top:187px'></div></a>
<a target=_blank href='build-rlmap.php?mp=330&a_id=427&y=1469' title='Никколо Макиавелли
Философ
Возрождение, 
Древние философы
ITA
1469-1527
MY: 0/0
MX: 330'><div class=area style='position:absolute; width:39px; height:20px; left:404px; top:187px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=196&a_id=31&y=1474' title='Лудовико Ариосто
Поэт-песенник
Возрождение, 
Поэзия
ITA
1474-1533
MY: -10/0
MX: 196'><div class=area style='position:absolute; width:28px; height:20px; left:230px; top:186px'></div></a>
<a target=_blank href='build-rlmap.php?mp=196&a_id=31&y=1474' title='Лудовико Ариосто
Поэт-песенник
Возрождение, 
Поэзия
ITA
1474-1533
MY: -10/0
MX: 196'><div class=area style='position:absolute; width:27px; height:20px; left:258px; top:186px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=490&a_id=478&y=1478' title='Томас Мор
Философ
Возрождение, 
Гуманизм, Древние философы, Философия
BRI
1478-1535
MY: 0/0
MX: 490'><div class=area style='position:absolute; width:16px; height:20px; left:524px; top:191px'></div></a>
<a target=_blank href='build-rlmap.php?mp=490&a_id=478&y=1478' title='Томас Мор
Философ
Возрождение, 
Гуманизм, Древние философы, Философия
BRI
1478-1535
MY: 0/0
MX: 490'><div class=area style='position:absolute; width:16px; height:20px; left:540px; top:191px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=535&a_id=668&y=1480' title='Дж. Страпарола

Возрождение
ITA
1480-1557
MY: 0/0
MX: 535'><div class=area style='position:absolute; width:39px; height:20px; left:569px; top:196px'></div></a>
<a target=_blank href='build-rlmap.php?mp=535&a_id=668&y=1480' title='Дж. Страпарола

Возрождение
ITA
1480-1557
MY: 0/0
MX: 535'><div class=area style='position:absolute; width:38px; height:20px; left:608px; top:196px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=617&a_id=30&y=1492' title='Пьетро Аретино
Писатель
Возрождение
ITA
1492-1556
MY: 0/0
MX: 617'><div class=area style='position:absolute; width:28px; height:20px; left:651px; top:198px'></div></a>
<a target=_blank href='build-rlmap.php?mp=617&a_id=30&y=1492' title='Пьетро Аретино
Писатель
Возрождение
ITA
1492-1556
MY: 0/0
MX: 617'><div class=area style='position:absolute; width:27px; height:20px; left:679px; top:198px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=90&a_id=494&y=1492' title='Маргарита Наваррская
Писательница
Возрождение, 
Гуманизм
FRA
1492-1549
MY: 0/0
MX: 90'><div class=area style='position:absolute; width:39px; height:20px; left:124px; top:197px'></div></a>
<a target=_blank href='build-rlmap.php?mp=90&a_id=494&y=1492' title='Маргарита Наваррская
Писательница
Возрождение, 
Гуманизм
FRA
1492-1549
MY: 0/0
MX: 90'><div class=area style='position:absolute; width:38px; height:20px; left:163px; top:197px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=260&a_id=584&y=1494' title='Франсуа Рабле
Писатель
Возрождение
FRA
1494-1553
MY: -10/0
MX: 260'><div class=area style='position:absolute; width:22px; height:20px; left:294px; top:194px'></div></a>
<a target=_blank href='build-rlmap.php?mp=260&a_id=584&y=1494' title='Франсуа Рабле
Писатель
Возрождение
FRA
1494-1553
MY: -10/0
MX: 260'><div class=area style='position:absolute; width:22px; height:20px; left:316px; top:194px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2616&a_id=712&y=1500' title='У Чэнъэнь
Писатель

CHN
1500-1582
MY: 0/0
MX: 2616'><div class=area style='position:absolute; width:28px; height:20px; left:2650px; top:205px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2616&a_id=712&y=1500' title='У Чэнъэнь
Писатель

CHN
1500-1582
MY: 0/0
MX: 2616'><div class=area style='position:absolute; width:27px; height:20px; left:2678px; top:205px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=3&a_id=786&y=1500' title='Бенвенуто Челлини
Скульптор
Возрождение
ITA
1500-1571
MY: 0/0
MX: 3'><div class=area style='position:absolute; width:29px; height:20px; left:37px; top:203px'></div></a>
<a target=_blank href='build-rlmap.php?mp=3&a_id=786&y=1500' title='Бенвенуто Челлини
Скульптор
Возрождение
ITA
1500-1571
MY: 0/0
MX: 3'><div class=area style='position:absolute; width:28px; height:20px; left:66px; top:203px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2534&a_id=1168&y=1520' title='Ланьлинский насмешник
Писатель
Древний Китай
CHN
1520-
MY: 0/0
MX: 2534'><div class=area style='position:absolute; width:37px; height:20px; left:2568px; top:205px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2534&a_id=1168&y=1520' title='Ланьлинский насмешник
Писатель
Древний Китай
CHN
1520-
MY: 0/0
MX: 2534'><div class=area style='position:absolute; width:37px; height:20px; left:2605px; top:205px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=175&a_id=308&y=1524' title='Луис де Камоэнс
Поэт
Возрождение, Поэзия
POR
1524-1580
MY: 0/0
MX: 175'><div class=area style='position:absolute; width:28px; height:20px; left:209px; top:210px'></div></a>
<a target=_blank href='build-rlmap.php?mp=175&a_id=308&y=1524' title='Луис де Камоэнс
Поэт
Возрождение, Поэзия
POR
1524-1580
MY: 0/0
MX: 175'><div class=area style='position:absolute; width:28px; height:20px; left:237px; top:210px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=240&a_id=475&y=1533' title='Мишель де Монтень
Писатель
Возрождение
FRA
1533-1592
MY: 10/0
MX: 240'><div class=area style='position:absolute; width:29px; height:20px; left:274px; top:219px'></div></a>
<a target=_blank href='build-rlmap.php?mp=240&a_id=475&y=1533' title='Мишель де Монтень
Писатель
Возрождение
FRA
1533-1592
MY: 10/0
MX: 240'><div class=area style='position:absolute; width:28px; height:20px; left:303px; top:219px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=700&a_id=681&y=1544' title='Торквато Тассо
Поэт
Маньеризм, Поэзия, 
Возрождение
ITA
1544-1595
MY: 0/0
MX: 700'><div class=area style='position:absolute; width:22px; height:20px; left:734px; top:217px'></div></a>
<a target=_blank href='build-rlmap.php?mp=700&a_id=681&y=1544' title='Торквато Тассо
Поэт
Маньеризм, Поэзия, 
Возрождение
ITA
1544-1595
MY: 0/0
MX: 700'><div class=area style='position:absolute; width:22px; height:20px; left:756px; top:217px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=535&a_id=636&y=1547' title='Мигель де Сервантес
Писатель
Возрождение, 
Приключения, Юмор
SPA
1547-1616
MY: 0/0
MX: 535'><div class=area style='position:absolute; width:37px; height:20px; left:569px; top:222px'></div></a>
<a target=_blank href='build-rlmap.php?mp=535&a_id=636&y=1547' title='Мигель де Сервантес
Писатель
Возрождение, 
Приключения, Юмор
SPA
1547-1616
MY: 0/0
MX: 535'><div class=area style='position:absolute; width:36px; height:20px; left:606px; top:222px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=794&a_id=193&y=1561' title='Луис де Гонгора
Поэт-песенник
Барокко, 
Поэзия
SPA
1561-1627
MY: 0/0
MX: 794'><div class=area style='position:absolute; width:27px; height:20px; left:828px; top:227px'></div></a>
<a target=_blank href='build-rlmap.php?mp=794&a_id=193&y=1561' title='Луис де Гонгора
Поэт-песенник
Барокко, 
Поэзия
SPA
1561-1627
MY: 0/0
MX: 794'><div class=area style='position:absolute; width:26px; height:20px; left:855px; top:227px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=748&a_id=129&y=1562' title='Лопе де Вега
Драматург
Маньеризм, 
Возрождение
SPA
1562-1635
MY: 0/0
MX: 748'><div class=area style='position:absolute; width:17px; height:20px; left:782px; top:230px'></div></a>
<a target=_blank href='build-rlmap.php?mp=748&a_id=129&y=1562' title='Лопе де Вега
Драматург
Маньеризм, 
Возрождение
SPA
1562-1635
MY: 0/0
MX: 748'><div class=area style='position:absolute; width:16px; height:20px; left:799px; top:230px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=90&a_id=444&y=1564' title='Кристофер Марло
Поэт
Возрождение, Поэзия
BRI
1564-1593
MY: 0/0
MX: 90'><div class=area style='position:absolute; width:23px; height:20px; left:124px; top:221px'></div></a>
<a target=_blank href='build-rlmap.php?mp=90&a_id=444&y=1564' title='Кристофер Марло
Поэт
Возрождение, Поэзия
BRI
1564-1593
MY: 0/0
MX: 90'><div class=area style='position:absolute; width:23px; height:20px; left:147px; top:221px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=621&a_id=805&y=1564' title='Уильям Шекспир
Поэт
Возрождение, Поэзия, 
Белый стих
BRI
1564-1616
MY: 0/0
MX: 621'><div class=area style='position:absolute; width:32px; height:20px; left:655px; top:226px'></div></a>
<a target=_blank href='build-rlmap.php?mp=621&a_id=805&y=1564' title='Уильям Шекспир
Поэт
Возрождение, Поэзия, 
Белый стих
BRI
1564-1616
MY: 0/0
MX: 621'><div class=area style='position:absolute; width:31px; height:20px; left:687px; top:226px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2534&a_id=753&y=1574' title='Фэн Мэнлун
Писатель

CHN
1574-1645
MY: 0/0
MX: 2534'><div class=area style='position:absolute; width:25px; height:20px; left:2568px; top:237px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2534&a_id=753&y=1574' title='Фэн Мэнлун
Писатель

CHN
1574-1645
MY: 0/0
MX: 2534'><div class=area style='position:absolute; width:25px; height:20px; left:2593px; top:237px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=854&a_id=473&y=1579' title='Тирсо де Молина
Драматург
Барокко
SPA
1579-1648
MY: 0/0
MX: 854'><div class=area style='position:absolute; width:27px; height:20px; left:888px; top:240px'></div></a>
<a target=_blank href='build-rlmap.php?mp=854&a_id=473&y=1579' title='Тирсо де Молина
Драматург
Барокко
SPA
1579-1648
MY: 0/0
MX: 854'><div class=area style='position:absolute; width:26px; height:20px; left:915px; top:240px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=322&y=1580' title='Франсиско де Кеведо

Барокко, 
Плутовской роман, Сатира
SPA
1580-1645
MY: 0/-11
MX: 2209'><div class=area style='position:absolute; width:25px; height:20px; left:2243px; top:231px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2209&a_id=322&y=1580' title='Франсиско де Кеведо

Барокко, 
Плутовской роман, Сатира
SPA
1580-1645
MY: 0/-11
MX: 2209'><div class=area style='position:absolute; width:24px; height:20px; left:2268px; top:231px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2616&a_id=406&y=1580' title='Лин Мэнчу
Писатель

CHN
1580-1644
MY: 0/0
MX: 2616'><div class=area style='position:absolute; width:22px; height:20px; left:2650px; top:238px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2616&a_id=406&y=1580' title='Лин Мэнчу
Писатель

CHN
1580-1644
MY: 0/0
MX: 2616'><div class=area style='position:absolute; width:21px; height:20px; left:2672px; top:238px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1468&a_id=1189&y=1588' title='Томас Гоббс
Философ
Философия, 
Материализм
BRI
1588-1679
MY: 0/-7
MX: 1468'><div class=area style='position:absolute; width:21px; height:20px; left:1502px; top:249px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1468&a_id=1189&y=1588' title='Томас Гоббс
Философ
Философия, 
Материализм
BRI
1588-1679
MY: 0/-7
MX: 1468'><div class=area style='position:absolute; width:21px; height:20px; left:1523px; top:249px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=700&a_id=307&y=1600' title='Педро Кальдерон
Драматург
Маньеризм, 
Барокко
SPA
1600-1681
MY: 0/0
MX: 700'><div class=area style='position:absolute; width:35px; height:20px; left:734px; top:259px'></div></a>
<a target=_blank href='build-rlmap.php?mp=700&a_id=307&y=1600' title='Педро Кальдерон
Драматург
Маньеризм, 
Барокко
SPA
1600-1681
MY: 0/0
MX: 700'><div class=area style='position:absolute; width:34px; height:20px; left:769px; top:259px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1468&a_id=204&y=1601' title='Бальтасар Грасиан
Философ
Барокко
SPA
1601-1658
MY: 0/-36
MX: 1468'><div class=area style='position:absolute; width:28px; height:20px; left:1502px; top:227px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1468&a_id=204&y=1601' title='Бальтасар Грасиан
Философ
Барокко
SPA
1601-1658
MY: 0/-36
MX: 1468'><div class=area style='position:absolute; width:28px; height:20px; left:1530px; top:227px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=975&a_id=652&y=1602' title='Шарль Сорель
Писатель
Барокко
FRA
1602-1674
MY: -10/0
MX: 975'><div class=area style='position:absolute; width:25px; height:20px; left:1009px; top:250px'></div></a>
<a target=_blank href='build-rlmap.php?mp=975&a_id=652&y=1602' title='Шарль Сорель
Писатель
Барокко
FRA
1602-1674
MY: -10/0
MX: 975'><div class=area style='position:absolute; width:25px; height:20px; left:1034px; top:250px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1031&a_id=358&y=1606' title='Пьер Корнель
Драматург
Барокко, 
Классицизм
FRA
1606-1684
MY: -10/0
MX: 1031'><div class=area style='position:absolute; width:28px; height:20px; left:1065px; top:255px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1031&a_id=358&y=1606' title='Пьер Корнель
Драматург
Барокко, 
Классицизм
FRA
1606-1684
MY: -10/0
MX: 1031'><div class=area style='position:absolute; width:27px; height:20px; left:1093px; top:255px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2&a_id=465&y=1608' title='Джон Мильтон
Поэт
Классицизм, Поэзия, 
Белый стих, Просвещение, Религия, Эпос
BRI
1608-1674
MY: 20/0
MX: 2'><div class=area style='position:absolute; width:29px; height:20px; left:36px; top:273px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2&a_id=465&y=1608' title='Джон Мильтон
Поэт
Классицизм, Поэзия, 
Белый стих, Просвещение, Религия, Эпос
BRI
1608-1674
MY: 20/0
MX: 2'><div class=area style='position:absolute; width:28px; height:20px; left:65px; top:273px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2598&a_id=403&y=1610' title='Ли Юй
Романист

CHN
1610-1680
MY: 0/0
MX: 2598'><div class=area style='position:absolute; width:13px; height:20px; left:2632px; top:262px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2598&a_id=403&y=1610' title='Ли Юй
Романист

CHN
1610-1680
MY: 0/0
MX: 2598'><div class=area style='position:absolute; width:13px; height:20px; left:2645px; top:262px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=912&a_id=641&y=1610' title='Поль Скаррон
Романист
Барокко
FRA
1610-1660
MY: -12/0
MX: 912'><div class=area style='position:absolute; width:28px; height:20px; left:946px; top:246px'></div></a>
<a target=_blank href='build-rlmap.php?mp=912&a_id=641&y=1610' title='Поль Скаррон
Романист
Барокко
FRA
1610-1660
MY: -12/0
MX: 912'><div class=area style='position:absolute; width:28px; height:20px; left:974px; top:246px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1622&a_id=69&y=1619' title='Сирано де Бержерак

Барокко, Фантастика
FRA
1619-1655
MY: 0/0
MX: 1622'><div class=area style='position:absolute; width:32px; height:20px; left:1656px; top:256px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1622&a_id=69&y=1619' title='Сирано де Бержерак

Барокко, Фантастика
FRA
1619-1655
MY: 0/0
MX: 1622'><div class=area style='position:absolute; width:32px; height:20px; left:1688px; top:256px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=868&a_id=679&y=1619' title='Таллеман де Рео
Литератор
Барокко, 
История
FRA
1619-1692
MY: 0/0
MX: 868'><div class=area style='position:absolute; width:39px; height:20px; left:902px; top:269px'></div></a>
<a target=_blank href='build-rlmap.php?mp=868&a_id=679&y=1619' title='Таллеман де Рео
Литератор
Барокко, 
История
FRA
1619-1692
MY: 0/0
MX: 868'><div class=area style='position:absolute; width:38px; height:20px; left:941px; top:269px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=794&a_id=754&y=1619' title='Антуан Фюретьер
Писатель
Барокко
FRA
1619-1688
MY: 0/0
MX: 794'><div class=area style='position:absolute; width:33px; height:20px; left:828px; top:268px'></div></a>
<a target=_blank href='build-rlmap.php?mp=794&a_id=754&y=1619' title='Антуан Фюретьер
Писатель
Барокко
FRA
1619-1688
MY: 0/0
MX: 794'><div class=area style='position:absolute; width:32px; height:20px; left:861px; top:268px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1544&a_id=4&y=1620' title='Аввакум
Автор
Барокко, Религия
RUS
1620-1682
MY: 0/-7
MX: 1544'><div class=area style='position:absolute; width:27px; height:20px; left:1578px; top:261px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1544&a_id=4&y=1620' title='Аввакум
Автор
Барокко, Религия
RUS
1620-1682
MY: 0/-7
MX: 1544'><div class=area style='position:absolute; width:27px; height:20px; left:1605px; top:261px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=384&y=1621' title='Жан де Лафонтен

Барокко, Басня
FRA
1621-1695
MY: 0/-25
MX: 2209'><div class=area style='position:absolute; width:34px; height:20px; left:2243px; top:253px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2209&a_id=384&y=1621' title='Жан де Лафонтен

Барокко, Басня
FRA
1621-1695
MY: 0/-25
MX: 2209'><div class=area style='position:absolute; width:33px; height:20px; left:2277px; top:253px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1094&a_id=210&y=1622' title='Г. Я. К. фон Гриммельсгаузен
Писатель
Барокко, 
Плутовской роман
DEU
1622-1676
MY: 0/0
MX: 1094'><div class=area style='position:absolute; width:54px; height:20px; left:1128px; top:264px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1094&a_id=210&y=1622' title='Г. Я. К. фон Гриммельсгаузен
Писатель
Барокко, 
Плутовской роман
DEU
1622-1676
MY: 0/0
MX: 1094'><div class=area style='position:absolute; width:53px; height:20px; left:1182px; top:264px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=474&y=1622' title='Мольер
Комедиограф
Реализм, 
Классицизм, Комедия
FRA
1622-1673
MY: 0/0
MX: 1302'><div class=area style='position:absolute; width:26px; height:20px; left:1336px; top:264px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1302&a_id=474&y=1622' title='Мольер
Комедиограф
Реализм, 
Классицизм, Комедия
FRA
1622-1673
MY: 0/0
MX: 1302'><div class=area style='position:absolute; width:26px; height:20px; left:1362px; top:264px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1468&a_id=543&y=1623' title='Блез Паскаль
Математик
Философия, 
Прото-экзистенциализм
FRA
1623-1662
MY: 0/15
MX: 1468'><div class=area style='position:absolute; width:28px; height:20px; left:1502px; top:271px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1468&a_id=543&y=1623' title='Блез Паскаль
Математик
Философия, 
Прото-экзистенциализм
FRA
1623-1662
MY: 0/15
MX: 1468'><div class=area style='position:absolute; width:27px; height:20px; left:1530px; top:271px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1544&a_id=49&y=1628' title='Джон Баньян
Писатель
Барокко, Религия, 
История, Протестантизм
BRI
1628-1688
MY: 10/7
MX: 1544'><div class=area style='position:absolute; width:25px; height:20px; left:1578px; top:283px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1544&a_id=49&y=1628' title='Джон Баньян
Писатель
Барокко, Религия, 
История, Протестантизм
BRI
1628-1688
MY: 10/7
MX: 1544'><div class=area style='position:absolute; width:24px; height:20px; left:1603px; top:283px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=952&a_id=181&y=1628' title='Г.-Ж. Гийераг

Барокко
FRA
1628-1685
MY: 4/0
MX: 952'><div class=area style='position:absolute; width:27px; height:20px; left:986px; top:273px'></div></a>
<a target=_blank href='build-rlmap.php?mp=952&a_id=181&y=1628' title='Г.-Ж. Гийераг

Барокко
FRA
1628-1685
MY: 4/0
MX: 952'><div class=area style='position:absolute; width:27px; height:20px; left:1013px; top:273px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2134&a_id=547&y=1628' title='Шарль Перро
Автор
Детская, Классицизм
FRA
1628-1703
MY: 0/0
MX: 2134'><div class=area style='position:absolute; width:22px; height:20px; left:2168px; top:276px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2134&a_id=547&y=1628' title='Шарль Перро
Автор
Детская, Классицизм
FRA
1628-1703
MY: 0/0
MX: 2134'><div class=area style='position:absolute; width:22px; height:20px; left:2190px; top:276px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1701&a_id=131&y=1630' title='Дени Верас

Утопия, Философия, 
Деизм, Протестантизм, Социализм, Фантастика
FRA
1630-1672
MY: 0/0
MX: 1701'><div class=area style='position:absolute; width:22px; height:20px; left:1735px; top:266px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1701&a_id=131&y=1630' title='Дени Верас

Утопия, Философия, 
Деизм, Протестантизм, Социализм, Фантастика
FRA
1630-1672
MY: 0/0
MX: 1701'><div class=area style='position:absolute; width:21px; height:20px; left:1757px; top:266px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1468&a_id=1060&y=1632' title='Бенедикт Спиноза
Философ
Просвещение, Философия, 
Детерминизм, Натурализм, Пантеизм, Рационализм
NLD
1632-1677
MY: 0/35
MX: 1468'><div class=area style='position:absolute; width:29px; height:20px; left:1502px; top:293px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1468&a_id=1060&y=1632' title='Бенедикт Спиноза
Философ
Просвещение, Философия, 
Детерминизм, Натурализм, Пантеизм, Рационализм
NLD
1632-1677
MY: 0/35
MX: 1468'><div class=area style='position:absolute; width:28px; height:20px; left:1531px; top:293px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=64&a_id=383&y=1634' title='М. М. де Лафайет
Писательница
Классицизм, 
История
FRA
1634-1693
MY: 0/0
MX: 64'><div class=area style='position:absolute; width:31px; height:20px; left:98px; top:275px'></div></a>
<a target=_blank href='build-rlmap.php?mp=64&a_id=383&y=1634' title='М. М. де Лафайет
Писательница
Классицизм, 
История
FRA
1634-1693
MY: 0/0
MX: 64'><div class=area style='position:absolute; width:30px; height:20px; left:129px; top:275px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=588&y=1639' title='Жан Расин
Драматург
Классицизм, 
Комедия, Трагедия
FRA
1639-1699
MY: 0/-5
MX: 2209'><div class=area style='position:absolute; width:22px; height:20px; left:2243px; top:275px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2209&a_id=588&y=1639' title='Жан Расин
Драматург
Классицизм, 
Комедия, Трагедия
FRA
1639-1699
MY: 0/-5
MX: 2209'><div class=area style='position:absolute; width:21px; height:20px; left:2265px; top:275px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2616&a_id=581&y=1640' title='Пу Сунлин
Автор
Фантастика
CHN
1640-1715
MY: 0/0
MX: 2616'><div class=area style='position:absolute; width:25px; height:20px; left:2650px; top:285px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2616&a_id=581&y=1640' title='Пу Сунлин
Автор
Фантастика
CHN
1640-1715
MY: 0/0
MX: 2616'><div class=area style='position:absolute; width:24px; height:20px; left:2675px; top:285px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2783&a_id=617&y=1642' title='Ихара Сайкаку
Писатель

JAP
1642-1693
MY: 0/-5
MX: 2783'><div class=area style='position:absolute; width:27px; height:20px; left:2817px; top:274px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2783&a_id=617&y=1642' title='Ихара Сайкаку
Писатель

JAP
1642-1693
MY: 0/-5
MX: 2783'><div class=area style='position:absolute; width:26px; height:20px; left:2844px; top:274px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=128&a_id=376&y=1645' title='Жан де Лабрюйер

Классицизм, 
Моралист, Философия
FRA
1645-1696
MY: 0/0
MX: 128'><div class=area style='position:absolute; width:34px; height:20px; left:162px; top:280px'></div></a>
<a target=_blank href='build-rlmap.php?mp=128&a_id=376&y=1645' title='Жан де Лабрюйер

Классицизм, 
Моралист, Философия
FRA
1645-1696
MY: 0/0
MX: 128'><div class=area style='position:absolute; width:34px; height:20px; left:196px; top:280px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=203&a_id=157&y=1646' title='Антуан Гамильтон
Писатель
Классицизм
FRA
1646-1720
MY: 0/0
MX: 203'><div class=area style='position:absolute; width:34px; height:20px; left:237px; top:288px'></div></a>
<a target=_blank href='build-rlmap.php?mp=203&a_id=157&y=1646' title='Антуан Гамильтон
Писатель
Классицизм
FRA
1646-1720
MY: 0/0
MX: 203'><div class=area style='position:absolute; width:34px; height:20px; left:271px; top:288px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=278&a_id=733&y=1651' title='Франсуа Фенелон

Классицизм
FRA
1651-1715
MY: 0/0
MX: 278'><div class=area style='position:absolute; width:30px; height:20px; left:312px; top:288px'></div></a>
<a target=_blank href='build-rlmap.php?mp=278&a_id=733&y=1651' title='Франсуа Фенелон

Классицизм
FRA
1651-1715
MY: 0/0
MX: 278'><div class=area style='position:absolute; width:29px; height:20px; left:342px; top:288px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2783&a_id=693&y=1653' title='Мондзаэмон Тикамацу
Драматург

JAP
1653-1725
MY: 0/5
MX: 2783'><div class=area style='position:absolute; width:30px; height:20px; left:2817px; top:296px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2783&a_id=693&y=1653' title='Мондзаэмон Тикамацу
Драматург

JAP
1653-1725
MY: 0/5
MX: 2783'><div class=area style='position:absolute; width:30px; height:20px; left:2847px; top:296px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1146&a_id=231&y=1660' title='Даниэль Дефо
Писатель
Классицизм, Приключения, 
Детская
BRI
1660-1731
MY: 20/0
MX: 1146'><div class=area style='position:absolute; width:22px; height:20px; left:1180px; top:345px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1146&a_id=231&y=1660' title='Даниэль Дефо
Писатель
Классицизм, Приключения, 
Детская
BRI
1660-1731
MY: 20/0
MX: 1146'><div class=area style='position:absolute; width:21px; height:20px; left:1202px; top:345px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=28&y=1667' title='Джон Арбетнот
Врач
Сатира
BRI
1667-1735
MY: 0/14
MX: 2209'><div class=area style='position:absolute; width:31px; height:20px; left:2243px; top:342px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2209&a_id=28&y=1667' title='Джон Арбетнот
Врач
Сатира
BRI
1667-1735
MY: 0/14
MX: 2209'><div class=area style='position:absolute; width:30px; height:20px; left:2274px; top:342px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=627&y=1667' title='Джонатан Свифт
Писатель
Классицизм, Сатира, 
Детская, Философия
BRI
1667-1745
MY: 0/17
MX: 2209'><div class=area style='position:absolute; width:23px; height:20px; left:2243px; top:364px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2209&a_id=627&y=1667' title='Джонатан Свифт
Писатель
Классицизм, Сатира, 
Детская, Философия
BRI
1667-1745
MY: 0/17
MX: 2209'><div class=area style='position:absolute; width:23px; height:20px; left:2266px; top:364px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=395&y=1668' title='Ален Рене Лесаж
Романист
Сатира, 
Плутовской роман
FRA
1668-1747
MY: 0/23
MX: 2209'><div class=area style='position:absolute; width:24px; height:20px; left:2243px; top:387px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2209&a_id=395&y=1668' title='Ален Рене Лесаж
Романист
Сатира, 
Плутовской роман
FRA
1668-1747
MY: 0/23
MX: 2209'><div class=area style='position:absolute; width:23px; height:20px; left:2267px; top:387px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=354&y=1670' title='Уильям Конгрив
Драматург
Классицизм, 
Комедия, Реставрация Стюартов, Сатира
BRI
1670-1729
MY: 0/7
MX: 2209'><div class=area style='position:absolute; width:27px; height:20px; left:2243px; top:320px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2209&a_id=354&y=1670' title='Уильям Конгрив
Драматург
Классицизм, 
Комедия, Реставрация Стюартов, Сатира
BRI
1670-1729
MY: 0/7
MX: 2209'><div class=area style='position:absolute; width:26px; height:20px; left:2270px; top:320px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=729&y=1677' title='Джордж Фаркер
Драматург
Драматургия, Юмор
BRI
1677-1707
MY: 0/3
MX: 2209'><div class=area style='position:absolute; width:25px; height:20px; left:2243px; top:297px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2209&a_id=729&y=1677' title='Джордж Фаркер
Драматург
Драматургия, Юмор
BRI
1677-1707
MY: 0/3
MX: 2209'><div class=area style='position:absolute; width:25px; height:20px; left:2268px; top:297px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=171&y=1685' title='Джон Гей
Поэт
Поэзия, Юмор, 
Басня, Драматургия, Комедия
BRI
1685-1732
MY: 0/30
MX: 2209'><div class=area style='position:absolute; width:14px; height:20px; left:2243px; top:409px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2209&a_id=171&y=1685' title='Джон Гей
Поэт
Поэзия, Юмор, 
Басня, Драматургия, Комедия
BRI
1685-1732
MY: 0/30
MX: 2209'><div class=area style='position:absolute; width:14px; height:20px; left:2257px; top:409px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1395&a_id=441&y=1688' title='Пьер де Мариво
Драматург
Драматургия, Психология, 
История, О любви
FRA
1688-1763
MY: 0/-2
MX: 1395'><div class=area style='position:absolute; width:27px; height:20px; left:1429px; top:367px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1395&a_id=441&y=1688' title='Пьер де Мариво
Драматург
Драматургия, Психология, 
История, О любви
FRA
1688-1763
MY: 0/-2
MX: 1395'><div class=area style='position:absolute; width:26px; height:20px; left:1456px; top:367px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2&a_id=571&y=1688' title='Александр Поуп
Поэт
Классицизм, Поэзия, 
Деизм, Дидактизм, Просвещение, Сатира
BRI
1688-1745
MY: 0/0
MX: 2'><div class=area style='position:absolute; width:18px; height:20px; left:36px; top:348px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2&a_id=571&y=1688' title='Александр Поуп
Поэт
Классицизм, Поэзия, 
Деизм, Дидактизм, Просвещение, Сатира
BRI
1688-1745
MY: 0/0
MX: 2'><div class=area style='position:absolute; width:17px; height:20px; left:54px; top:348px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1468&a_id=476&y=1689' title='Ш. Л. де Монтескьё
Писатель
Философия, 
Натурализм, Политика
FRA
1689-1755
MY: 0/0
MX: 1468'><div class=area style='position:absolute; width:30px; height:20px; left:1502px; top:362px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1468&a_id=476&y=1689' title='Ш. Л. де Монтескьё
Писатель
Философия, 
Натурализм, Политика
FRA
1689-1755
MY: 0/0
MX: 1468'><div class=area style='position:absolute; width:29px; height:20px; left:1532px; top:362px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2289&a_id=595&y=1689' title='Сэмюэл Ричардсон
Писатель
Сентиментализм
BRI
1689-1761
MY: 0/0
MX: 2289'><div class=area style='position:absolute; width:33px; height:20px; left:2323px; top:370px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2289&a_id=595&y=1689' title='Сэмюэл Ричардсон
Писатель
Сентиментализм
BRI
1689-1761
MY: 0/0
MX: 2289'><div class=area style='position:absolute; width:33px; height:20px; left:2356px; top:370px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1219&a_id=8&y=1693' title='Шарлотта Аиссе
Писательница
История, 
Эпистолярный роман
FRA
1693-1733
MY: 0/0
MX: 1219'><div class=area style='position:absolute; width:22px; height:20px; left:1253px; top:336px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1219&a_id=8&y=1693' title='Шарлотта Аиссе
Писательница
История, 
Эпистолярный роман
FRA
1693-1733
MY: 0/0
MX: 1219'><div class=area style='position:absolute; width:22px; height:20px; left:1275px; top:336px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1468&a_id=148&y=1694' title='Вольтер
Философ
Философия, 
История, Классицизм, Просвещение, Сатира
FRA
1694-1778
MY: 0/0
MX: 1468'><div class=area style='position:absolute; width:27px; height:20px; left:1502px; top:401px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1468&a_id=148&y=1694' title='Вольтер
Философ
Философия, 
История, Классицизм, Просвещение, Сатира
FRA
1694-1778
MY: 0/0
MX: 1468'><div class=area style='position:absolute; width:27px; height:20px; left:1529px; top:401px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1395&a_id=572&y=1697' title='Антуан-Франсуа Прево
Писатель
Психология, 
История
FRA
1697-1763
MY: 0/2
MX: 1395'><div class=area style='position:absolute; width:22px; height:20px; left:1429px; top:390px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1395&a_id=572&y=1697' title='Антуан-Франсуа Прево
Писатель
Психология, 
История
FRA
1697-1763
MY: 0/2
MX: 1395'><div class=area style='position:absolute; width:22px; height:20px; left:1451px; top:390px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=44&a_id=704&y=1703' title='В. К. Тредиаковский
Поэт
Классицизм, Поэзия
RUS
1703-1769
MY: 0/0
MX: 44'><div class=area style='position:absolute; width:48px; height:20px; left:78px; top:401px'></div></a>
<a target=_blank href='build-rlmap.php?mp=44&a_id=704&y=1703' title='В. К. Тредиаковский
Поэт
Классицизм, Поэзия
RUS
1703-1769
MY: 0/0
MX: 44'><div class=area style='position:absolute; width:48px; height:20px; left:126px; top:401px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=191&y=1707' title='Карло Гольдони
Драматург
Комедия, 
Бытовая комедия, Трагедия
ITA
1707-1793
MY: 0/5
MX: 2209'><div class=area style='position:absolute; width:31px; height:20px; left:2243px; top:454px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2209&a_id=191&y=1707' title='Карло Гольдони
Драматург
Комедия, 
Бытовая комедия, Трагедия
ITA
1707-1793
MY: 0/5
MX: 2209'><div class=area style='position:absolute; width:31px; height:20px; left:2274px; top:454px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=312&y=1708' title='А. Д. Кантемир
Дипломат
Классицизм, Поэзия, Просвещение, Сатира
RUS
1708-1744
MY: 0/21
MX: 2209'><div class=area style='position:absolute; width:31px; height:20px; left:2243px; top:432px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2209&a_id=312&y=1708' title='А. Д. Кантемир
Дипломат
Классицизм, Поэзия, Просвещение, Сатира
RUS
1708-1744
MY: 0/21
MX: 2209'><div class=area style='position:absolute; width:31px; height:20px; left:2274px; top:432px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=147&a_id=409&y=1711' title='М. В. Ломоносов
Учёный-физик
Классицизм, Поэзия, 
Басня, Славянофильство, Юмор
RUS
1711-1765
MY: 0/0
MX: 147'><div class=area style='position:absolute; width:37px; height:20px; left:181px; top:406px'></div></a>
<a target=_blank href='build-rlmap.php?mp=147&a_id=409&y=1711' title='М. В. Ломоносов
Учёный-физик
Классицизм, Поэзия, 
Басня, Славянофильство, Юмор
RUS
1711-1765
MY: 0/0
MX: 147'><div class=area style='position:absolute; width:37px; height:20px; left:218px; top:406px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2289&a_id=609&y=1712' title='Жан-Жак Руссо
Философ
Сентиментализм, 
Политика, Просвещение, Романтизм, Философия
FRA
1712-1778
MY: 0/2
MX: 2289'><div class=area style='position:absolute; width:21px; height:20px; left:2323px; top:432px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2289&a_id=609&y=1712' title='Жан-Жак Руссо
Философ
Сентиментализм, 
Политика, Просвещение, Романтизм, Философия
FRA
1712-1778
MY: 0/2
MX: 2289'><div class=area style='position:absolute; width:20px; height:20px; left:2344px; top:432px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=80&a_id=241&y=1713' title='Дени Дидро
Писатель
Классицизм, 
Драматургия, Материализм, Натурализм, Просвещение, Просвещенный абсолютизм, Философия, Юмор
FRA
1713-1784
MY: 0/0
MX: 80'><div class=area style='position:absolute; width:22px; height:20px; left:114px; top:437px'></div></a>
<a target=_blank href='build-rlmap.php?mp=80&a_id=241&y=1713' title='Дени Дидро
Писатель
Классицизм, 
Драматургия, Материализм, Натурализм, Просвещение, Просвещенный абсолютизм, Философия, Юмор
FRA
1713-1784
MY: 0/0
MX: 80'><div class=area style='position:absolute; width:22px; height:20px; left:136px; top:437px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2289&a_id=663&y=1713' title='Лоренс Стерн
Писатель
Сентиментализм
BRI
1713-1768
MY: 0/-2
MX: 2289'><div class=area style='position:absolute; width:21px; height:20px; left:2323px; top:409px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2289&a_id=663&y=1713' title='Лоренс Стерн
Писатель
Сентиментализм
BRI
1713-1768
MY: 0/-2
MX: 2289'><div class=area style='position:absolute; width:21px; height:20px; left:2344px; top:409px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2616&a_id=839&y=1716' title='Юань Мэй
Писатель

CHN
1716-1797
MY: 0/0
MX: 2616'><div class=area style='position:absolute; width:16px; height:20px; left:2650px; top:460px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2616&a_id=839&y=1716' title='Юань Мэй
Писатель

CHN
1716-1797
MY: 0/0
MX: 2616'><div class=area style='position:absolute; width:15px; height:20px; left:2666px; top:460px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2&a_id=672&y=1717' title='А. П. Сумароков
Поэт
Классицизм, Поэзия, 
Басня, Песня, Сатира
RUS
1717-1777
MY: 0/0
MX: 2'><div class=area style='position:absolute; width:35px; height:20px; left:36px; top:432px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2&a_id=672&y=1717' title='А. П. Сумароков
Поэт
Классицизм, Поэзия, 
Басня, Песня, Сатира
RUS
1717-1777
MY: 0/0
MX: 2'><div class=area style='position:absolute; width:34px; height:20px; left:71px; top:432px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1766&a_id=304&y=1719' title='Жак Казот
Писатель
Готика, 
Мартинизм, Мистицизм, Философия, Фэнтези, Хоррор
FRA
1719-1792
MY: 0/0
MX: 1766'><div class=area style='position:absolute; width:20px; height:20px; left:1800px; top:457px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1766&a_id=304&y=1719' title='Жак Казот
Писатель
Готика, 
Мартинизм, Мистицизм, Философия, Фэнтези, Хоррор
FRA
1719-1792
MY: 0/0
MX: 1766'><div class=area style='position:absolute; width:20px; height:20px; left:1820px; top:457px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=202&y=1720' title='Карло Гоцци
Писатель
Драматургия, 
Детская, Комедия дель арте, Сказка, Фьяба
ITA
1720-1806
MY: 0/8
MX: 2209'><div class=area style='position:absolute; width:21px; height:20px; left:2243px; top:499px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2209&a_id=202&y=1720' title='Карло Гоцци
Писатель
Драматургия, 
Детская, Комедия дель арте, Сказка, Фьяба
ITA
1720-1806
MY: 0/8
MX: 2209'><div class=area style='position:absolute; width:21px; height:20px; left:2264px; top:499px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1146&a_id=646&y=1721' title='Тобайас Смоллетт
Романист
Классицизм, Приключения, 
История, Плутовской роман, Поэзия, Просвещение, Реализм
BRI
1721-1771
MY: 0/0
MX: 1146'><div class=area style='position:absolute; width:32px; height:20px; left:1180px; top:429px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1146&a_id=646&y=1721' title='Тобайас Смоллетт
Романист
Классицизм, Приключения, 
История, Плутовской роман, Поэзия, Просвещение, Реализм
BRI
1721-1771
MY: 0/0
MX: 1146'><div class=area style='position:absolute; width:31px; height:20px; left:1212px; top:429px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1468&a_id=1102&y=1724' title='Иммануил Кант
Философ
Немецкий идеализм, Романтизм, Философия, 
Просвещение
DEU
1724-1804
MY: 0/0
MX: 1468'><div class=area style='position:absolute; width:17px; height:20px; left:1502px; top:479px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1468&a_id=1102&y=1724' title='Иммануил Кант
Философ
Немецкий идеализм, Романтизм, Философия, 
Просвещение
DEU
1724-1804
MY: 0/0
MX: 1468'><div class=area style='position:absolute; width:17px; height:20px; left:1519px; top:479px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1219&a_id=303&y=1725' title='Джакомо Казанова
Писатель
История, 
Авантюрист, Мемуары, Эротика
ITA
1725-1798
MY: 0/-2
MX: 1219'><div class=area style='position:absolute; width:31px; height:20px; left:1253px; top:468px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1219&a_id=303&y=1725' title='Джакомо Казанова
Писатель
История, 
Авантюрист, Мемуары, Эротика
ITA
1725-1798
MY: 0/-2
MX: 1219'><div class=area style='position:absolute; width:31px; height:20px; left:1284px; top:468px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=422&y=1728' title='В. И. Майков

Классицизм, 
Басня, Бурлеск, Сатира, Юмор
RUS
1728-1778
MY: 0/10
MX: 2209'><div class=area style='position:absolute; width:26px; height:20px; left:2243px; top:476px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2209&a_id=422&y=1728' title='В. И. Майков

Классицизм, 
Басня, Бурлеск, Сатира, Юмор
RUS
1728-1778
MY: 0/10
MX: 2209'><div class=area style='position:absolute; width:25px; height:20px; left:2269px; top:476px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=130&a_id=397&y=1729' title='Г. Э. Лессинг
Драматург
Классицизм, Просвещение, 
Драматургия
DEU
1729-1781
MY: 0/0
MX: 130'><div class=area style='position:absolute; width:29px; height:20px; left:164px; top:454px'></div></a>
<a target=_blank href='build-rlmap.php?mp=130&a_id=397&y=1729' title='Г. Э. Лессинг
Драматург
Классицизм, Просвещение, 
Драматургия
DEU
1729-1781
MY: 0/0
MX: 130'><div class=area style='position:absolute; width:28px; height:20px; left:193px; top:454px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2289&a_id=189&y=1730' title='Оливер Голдсмит
Поэт
Сентиментализм, 
Драматургия, Поэзия
BRI
1730-1774
MY: 0/3
MX: 2289'><div class=area style='position:absolute; width:32px; height:20px; left:2323px; top:454px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2289&a_id=189&y=1730' title='Оливер Голдсмит
Поэт
Сентиментализм, 
Драматургия, Поэзия
BRI
1730-1774
MY: 0/3
MX: 2289'><div class=area style='position:absolute; width:31px; height:20px; left:2355px; top:454px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1219&a_id=1225&y=1730' title='Александр Суворов
Великий полководец
Автобиография, История, О войне
RUS
1730-1800
MY: 0/3
MX: 1219'><div class=area style='position:absolute; width:28px; height:20px; left:1253px; top:490px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1219&a_id=1225&y=1730' title='Александр Суворов
Великий полководец
Автобиография, История, О войне
RUS
1730-1800
MY: 0/3
MX: 1219'><div class=area style='position:absolute; width:28px; height:20px; left:1281px; top:490px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=89&y=1732' title='Пьер Бомарше
Драматург
Драматургия
FRA
1732-1799
MY: 0/21
MX: 2209'><div class=area style='position:absolute; width:31px; height:20px; left:2243px; top:544px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2209&a_id=89&y=1732' title='Пьер Бомарше
Драматург
Драматургия
FRA
1732-1799
MY: 0/21
MX: 2209'><div class=area style='position:absolute; width:30px; height:20px; left:2274px; top:544px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2289&a_id=96&y=1734' title='Ретиф де ла Бретон
Писатель
Эротика, 
Утопия, Фантастика
FRA
1734-1806
MY: 0/-6
MX: 2289'><div class=area style='position:absolute; width:24px; height:20px; left:2323px; top:479px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2289&a_id=96&y=1734' title='Ретиф де ла Бретон
Писатель
Эротика, 
Утопия, Фантастика
FRA
1734-1806
MY: 0/-6
MX: 2289'><div class=area style='position:absolute; width:24px; height:20px; left:2347px; top:479px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2134&a_id=589&y=1736' title='Рудольф Эрих Распе
Писатель
Детская, 
История, Приключения, Сказка, Юмор
DEU
1736-1794
MY: 0/0
MX: 2134'><div class=area style='position:absolute; width:22px; height:20px; left:2168px; top:482px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2134&a_id=589&y=1736' title='Рудольф Эрих Распе
Писатель
Детская, 
История, Приключения, Сказка, Юмор
DEU
1736-1794
MY: 0/0
MX: 2134'><div class=area style='position:absolute; width:22px; height:20px; left:2190px; top:482px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2289&a_id=71&y=1737' title='Жак-Анри Бернарден
Писатель
Сентиментализм, 
Авантюрист, Просвещение
FRA
1737-1814
MY: 0/-4
MX: 2289'><div class=area style='position:absolute; width:34px; height:20px; left:2323px; top:502px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2289&a_id=71&y=1737' title='Жак-Анри Бернарден
Писатель
Сентиментализм, 
Авантюрист, Просвещение
FRA
1737-1814
MY: 0/-4
MX: 2289'><div class=area style='position:absolute; width:33px; height:20px; left:2357px; top:502px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2&a_id=346&y=1740' title='Я. Б. Княжнин
Драматург
Драматургия, Классицизм, 
Патриотизм
RUS
1740-1791
MY: 0/0
MX: 2'><div class=area style='position:absolute; width:29px; height:20px; left:36px; top:485px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2&a_id=346&y=1740' title='Я. Б. Княжнин
Драматург
Драматургия, Классицизм, 
Патриотизм
RUS
1740-1791
MY: 0/0
MX: 2'><div class=area style='position:absolute; width:28px; height:20px; left:65px; top:485px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1701&a_id=459&y=1740' title='Луи-Себастьян Мерсье
Писатель
Утопия, 
Фантастика
FRA
1740-1814
MY: 0/0
MX: 1701'><div class=area style='position:absolute; width:27px; height:20px; left:1735px; top:516px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1701&a_id=459&y=1740' title='Луи-Себастьян Мерсье
Писатель
Утопия, 
Фантастика
FRA
1740-1814
MY: 0/0
MX: 1701'><div class=area style='position:absolute; width:26px; height:20px; left:1762px; top:516px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2289&a_id=616&y=1740' title='Маркиз де Сад
Писатель
Эротика, 
Гедонизм, Либертинаж, Садизм
FRA
1740-1814
MY: 0/3
MX: 2289'><div class=area style='position:absolute; width:16px; height:20px; left:2323px; top:524px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2289&a_id=616&y=1740' title='Маркиз де Сад
Писатель
Эротика, 
Гедонизм, Либертинаж, Садизм
FRA
1740-1814
MY: 0/3
MX: 2289'><div class=area style='position:absolute; width:15px; height:20px; left:2339px; top:524px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=381&y=1741' title='Шодерло де Лакло
Автор
Сатира, 
О любви, Эпистолярный роман
FRA
1741-1803
MY: 0/23
MX: 2209'><div class=area style='position:absolute; width:22px; height:20px; left:2243px; top:566px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2209&a_id=381&y=1741' title='Шодерло де Лакло
Автор
Сатира, 
О любви, Эпистолярный роман
FRA
1741-1803
MY: 0/23
MX: 2209'><div class=area style='position:absolute; width:21px; height:20px; left:2265px; top:566px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=1&y=1742' title='А. О. Аблесимов
Драматург
Комедия, Сатира, 
Драматургия
RUS
1742-1783
MY: 0/16
MX: 2209'><div class=area style='position:absolute; width:31px; height:20px; left:2243px; top:521px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2209&a_id=1&y=1742' title='А. О. Аблесимов
Драматург
Комедия, Сатира, 
Драматургия
RUS
1742-1783
MY: 0/16
MX: 2209'><div class=area style='position:absolute; width:30px; height:20px; left:2274px; top:521px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1219&a_id=227&y=1743' title='Е. Р. Дашкова

История, 
Мемуары, Просвещение
RUS
1743-1810
MY: 0/0
MX: 1219'><div class=area style='position:absolute; width:29px; height:20px; left:1253px; top:516px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1219&a_id=227&y=1743' title='Е. Р. Дашкова

История, 
Мемуары, Просвещение
RUS
1743-1810
MY: 0/0
MX: 1219'><div class=area style='position:absolute; width:29px; height:20px; left:1282px; top:516px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2&a_id=230&y=1743' title='Г. Р. Державин
Поэт
Классицизм, 
Архаизм, Поэзия, Просвещение, Религия
RUS
1743-1816
MY: 0/0
MX: 2'><div class=area style='position:absolute; width:33px; height:20px; left:36px; top:524px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2&a_id=230&y=1743' title='Г. Р. Державин
Поэт
Классицизм, 
Архаизм, Поэзия, Просвещение, Религия
RUS
1743-1816
MY: 0/0
MX: 2'><div class=area style='position:absolute; width:33px; height:20px; left:69px; top:524px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=66&a_id=797&y=1743' title='М. Д. Чулков
Писатель
Классицизм, Плутовской роман, Просвещение, 
Гуманизм, История, Мифы
RUS
1743-1792
MY: 0/0
MX: 66'><div class=area style='position:absolute; width:23px; height:20px; left:100px; top:490px'></div></a>
<a target=_blank href='build-rlmap.php?mp=66&a_id=797&y=1743' title='М. Д. Чулков
Писатель
Классицизм, Плутовской роман, Просвещение, 
Гуманизм, История, Мифы
RUS
1743-1792
MY: 0/0
MX: 66'><div class=area style='position:absolute; width:23px; height:20px; left:123px; top:490px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=85&y=1744' title='И. Ф. Богданович
Автор
Классицизм, 
Юмор
RUS
1744-1803
MY: 0/28
MX: 2209'><div class=area style='position:absolute; width:32px; height:20px; left:2243px; top:592px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2209&a_id=85&y=1744' title='И. Ф. Богданович
Автор
Классицизм, 
Юмор
RUS
1744-1803
MY: 0/28
MX: 2209'><div class=area style='position:absolute; width:32px; height:20px; left:2275px; top:592px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=121&a_id=742&y=1745' title='Д. И. Фонвизин

Драматургия, Классицизм, Комедия
RUS
1745-1792
MY: 0/0
MX: 121'><div class=area style='position:absolute; width:33px; height:20px; left:155px; top:493px'></div></a>
<a target=_blank href='build-rlmap.php?mp=121&a_id=742&y=1745' title='Д. И. Фонвизин

Драматургия, Классицизм, Комедия
RUS
1745-1792
MY: 0/0
MX: 121'><div class=area style='position:absolute; width:32px; height:20px; left:188px; top:493px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1903&a_id=388&y=1746' title='В. А. Лёвшин

Сказка, 
Фантастика, Экономика
RUS
1746-1826
MY: 0/0
MX: 1903'><div class=area style='position:absolute; width:27px; height:20px; left:1937px; top:541px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1903&a_id=388&y=1746' title='В. А. Лёвшин

Сказка, 
Фантастика, Экономика
RUS
1746-1826
MY: 0/0
MX: 1903'><div class=area style='position:absolute; width:27px; height:20px; left:1964px; top:541px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=193&a_id=17&y=1749' title='Витторио Альфьери
Драматург
Драматургия, Классицизм, Поэзия, 
Трагедия
ITA
1749-1803
MY: 0/0
MX: 193'><div class=area style='position:absolute; width:33px; height:20px; left:227px; top:513px'></div></a>
<a target=_blank href='build-rlmap.php?mp=193&a_id=17&y=1749' title='Витторио Альфьери
Драматург
Драматургия, Классицизм, Поэзия, 
Трагедия
ITA
1749-1803
MY: 0/0
MX: 193'><div class=area style='position:absolute; width:32px; height:20px; left:260px; top:513px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2289&a_id=180&y=1749' title='И. В. Гёте
Поэт
Романтизм, Сентиментализм, Философия, 
Поэзия
DEU
1749-1832
MY: 0/-3
MX: 2289'><div class=area style='position:absolute; width:18px; height:20px; left:2323px; top:546px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2289&a_id=180&y=1749' title='И. В. Гёте
Поэт
Романтизм, Сентиментализм, Философия, 
Поэзия
DEU
1749-1832
MY: 0/-3
MX: 2289'><div class=area style='position:absolute; width:17px; height:20px; left:2341px; top:546px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=268&a_id=586&y=1749' title='А. Н. Радищев

Классицизм, Сентиментализм, 
Поэзия, Философия
RUS
1749-1802
MY: 0/0
MX: 268'><div class=area style='position:absolute; width:30px; height:20px; left:302px; top:513px'></div></a>
<a target=_blank href='build-rlmap.php?mp=268&a_id=586&y=1749' title='А. Н. Радищев

Классицизм, Сентиментализм, 
Поэзия, Философия
RUS
1749-1802
MY: 0/0
MX: 268'><div class=area style='position:absolute; width:30px; height:20px; left:332px; top:513px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2&a_id=313&y=1758' title='В. В. Капнист

Драматургия, Классицизм, Поэзия, 
Комедия, Лирика
RUS
1758-1823
MY: 0/0
MX: 2'><div class=area style='position:absolute; width:28px; height:20px; left:36px; top:555px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2&a_id=313&y=1758' title='В. В. Капнист

Драматургия, Классицизм, Поэзия, 
Комедия, Лирика
RUS
1758-1823
MY: 0/0
MX: 2'><div class=area style='position:absolute; width:27px; height:20px; left:64px; top:555px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=358&a_id=810&y=1759' title='Фридрих Шиллер
Поэт
Поэзия, Романтизм, 
Драматургия, Философия
DEU
1759-1805
MY: 0/-23
MX: 358'><div class=area style='position:absolute; width:27px; height:20px; left:392px; top:465px'></div></a>
<a target=_blank href='build-rlmap.php?mp=358&a_id=810&y=1759' title='Фридрих Шиллер
Поэт
Поэзия, Романтизм, 
Драматургия, Философия
DEU
1759-1805
MY: 0/-23
MX: 358'><div class=area style='position:absolute; width:26px; height:20px; left:419px; top:465px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2289&a_id=1123&y=1763' title='Жан Поль
Писатель
Сентиментализм, 
Преромантизм, Сатира
DEU
1763-1825
MY: 0/2
MX: 2289'><div class=area style='position:absolute; width:18px; height:20px; left:2323px; top:569px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2289&a_id=1123&y=1763' title='Жан Поль
Писатель
Сентиментализм, 
Преромантизм, Сатира
DEU
1763-1825
MY: 0/2
MX: 2289'><div class=area style='position:absolute; width:18px; height:20px; left:2341px; top:569px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2289&a_id=315&y=1766' title='Н. М. Карамзин

Сентиментализм, 
Карамзинисты, Консерватизм
RUS
1766-1826
MY: 0/6
MX: 2289'><div class=area style='position:absolute; width:32px; height:20px; left:2323px; top:592px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2289&a_id=315&y=1766' title='Н. М. Карамзин

Сентиментализм, 
Карамзинисты, Консерватизм
RUS
1766-1826
MY: 0/6
MX: 2289'><div class=area style='position:absolute; width:31px; height:20px; left:2355px; top:592px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=358&a_id=659&y=1766' title='Мадам де Сталь
Писательница
Романтизм, 
Национализм, Политика
FRA
1766-1817
MY: 0/-17
MX: 358'><div class=area style='position:absolute; width:21px; height:20px; left:392px; top:510px'></div></a>
<a target=_blank href='build-rlmap.php?mp=358&a_id=659&y=1766' title='Мадам де Сталь
Писательница
Романтизм, 
Национализм, Политика
FRA
1766-1817
MY: 0/-17
MX: 358'><div class=area style='position:absolute; width:20px; height:20px; left:413px; top:510px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=358&a_id=357&y=1767' title='Бенжамен Констан
Писатель
Романтизм, 
Реставрация Стюартов, Философия
FRA
1767-1830
MY: 0/-8
MX: 358'><div class=area style='position:absolute; width:27px; height:20px; left:392px; top:555px'></div></a>
<a target=_blank href='build-rlmap.php?mp=358&a_id=357&y=1767' title='Бенжамен Констан
Писатель
Романтизм, 
Реставрация Стюартов, Философия
FRA
1767-1830
MY: 0/-8
MX: 358'><div class=area style='position:absolute; width:27px; height:20px; left:419px; top:555px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=441&a_id=800&y=1768' title='Ф. Р. де Шатобриан
Писатель
Романтизм, 
Консерватизм
FRA
1768-1848
MY: 0/0
MX: 441'><div class=area style='position:absolute; width:36px; height:20px; left:475px; top:629px'></div></a>
<a target=_blank href='build-rlmap.php?mp=441&a_id=800&y=1768' title='Ф. Р. де Шатобриан
Писатель
Романтизм, 
Консерватизм
FRA
1768-1848
MY: 0/0
MX: 441'><div class=area style='position:absolute; width:36px; height:20px; left:511px; top:629px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=369&y=1769' title='И. А. Крылов
Автор
Басня, 
Сатира
RUS
1769-1844
MY: 0/0
MX: 2209'><div class=area style='position:absolute; width:29px; height:20px; left:2243px; top:623px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2209&a_id=369&y=1769' title='И. А. Крылов
Автор
Басня, 
Сатира
RUS
1769-1844
MY: 0/0
MX: 2209'><div class=area style='position:absolute; width:29px; height:20px; left:2272px; top:623px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=441&a_id=175&y=1770' title='Фридрих Гёльдерлин
Поэт
Поэзия, Романтизм
DEU
1770-1843
MY: 0/-7
MX: 441'><div class=area style='position:absolute; width:33px; height:20px; left:475px; top:580px'></div></a>
<a target=_blank href='build-rlmap.php?mp=441&a_id=175&y=1770' title='Фридрих Гёльдерлин
Поэт
Поэзия, Романтизм
DEU
1770-1843
MY: 0/-7
MX: 441'><div class=area style='position:absolute; width:32px; height:20px; left:508px; top:580px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1468&a_id=1144&y=1770' title='Гегель
Философ
Немецкий идеализм, Философия
DEU
1770-1831
MY: 0/0
MX: 1468'><div class=area style='position:absolute; width:23px; height:20px; left:1502px; top:586px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1468&a_id=1144&y=1770' title='Гегель
Философ
Немецкий идеализм, Философия
DEU
1770-1831
MY: 0/0
MX: 1468'><div class=area style='position:absolute; width:22px; height:20px; left:1525px; top:586px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=441&a_id=642&y=1771' title='Вальтер Скотт
Писатель
Романтизм, 
История, Приключения
BRI
1771-1832
MY: 0/-18
MX: 441'><div class=area style='position:absolute; width:20px; height:20px; left:475px; top:535px'></div></a>
<a target=_blank href='build-rlmap.php?mp=441&a_id=642&y=1771' title='Вальтер Скотт
Писатель
Романтизм, 
История, Приключения
BRI
1771-1832
MY: 0/-18
MX: 441'><div class=area style='position:absolute; width:19px; height:20px; left:495px; top:535px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=358&a_id=511&y=1772' title='Новалис
Философ
Романтизм, 
Мистицизм, Монархизм, Эстетизм
DEU
1772-1801
MY: 0/-20
MX: 358'><div class=area style='position:absolute; width:29px; height:20px; left:392px; top:488px'></div></a>
<a target=_blank href='build-rlmap.php?mp=358&a_id=511&y=1772' title='Новалис
Философ
Романтизм, 
Мистицизм, Монархизм, Эстетизм
DEU
1772-1801
MY: 0/-20
MX: 358'><div class=area style='position:absolute; width:29px; height:20px; left:421px; top:488px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=358&a_id=812&y=1772' title='Фридрих Шлегель
Писатель
Романтизм, 
Монархизм, Поэзия, Философия, Эстетизм
DEU
1772-1829
MY: 0/-2
MX: 358'><div class=area style='position:absolute; width:28px; height:20px; left:392px; top:577px'></div></a>
<a target=_blank href='build-rlmap.php?mp=358&a_id=812&y=1772' title='Фридрих Шлегель
Писатель
Романтизм, 
Монархизм, Поэзия, Философия, Эстетизм
DEU
1772-1829
MY: 0/-2
MX: 358'><div class=area style='position:absolute; width:28px; height:20px; left:420px; top:577px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=441&a_id=692&y=1773' title='Людвиг Тик
Поэт
Романтизм, 
Драматургия, Поэзия, Сказка, Эстетизм
DEU
1773-1853
MY: 0/11
MX: 441'><div class=area style='position:absolute; width:15px; height:20px; left:475px; top:728px'></div></a>
<a target=_blank href='build-rlmap.php?mp=441&a_id=692&y=1773' title='Людвиг Тик
Поэт
Романтизм, 
Драматургия, Поэзия, Сказка, Эстетизм
DEU
1773-1853
MY: 0/11
MX: 441'><div class=area style='position:absolute; width:14px; height:20px; left:490px; top:728px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=534&y=1775' title='Джейн Остин
Писательница
Реализм, 
Готика, О любви
BRI
1775-1817
MY: 0/0
MX: 1302'><div class=area style='position:absolute; width:23px; height:20px; left:1336px; top:569px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1302&a_id=534&y=1775' title='Джейн Остин
Писательница
Реализм, 
Готика, О любви
BRI
1775-1817
MY: 0/0
MX: 1302'><div class=area style='position:absolute; width:22px; height:20px; left:1359px; top:569px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1903&a_id=201&y=1776' title='Э. Т. А. Гофман
Писатель
Детская, Романзитм, 
Сказка, Фэнтези, Хоррор
DEU
1776-1822
MY: 0/0
MX: 1903'><div class=area style='position:absolute; width:27px; height:20px; left:1937px; top:577px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1903&a_id=201&y=1776' title='Э. Т. А. Гофман
Писатель
Детская, Романзитм, 
Сказка, Фэнтези, Хоррор
DEU
1776-1822
MY: 0/0
MX: 1903'><div class=area style='position:absolute; width:26px; height:20px; left:1964px; top:577px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=358&a_id=341&y=1777' title='Генрих фон Клейст
Драматург
Романтизм, 
Драматургия, Поэзия, Рассказ
DEU
1777-1811
MY: 0/-11
MX: 358'><div class=area style='position:absolute; width:24px; height:20px; left:392px; top:532px'></div></a>
<a target=_blank href='build-rlmap.php?mp=358&a_id=341&y=1777' title='Генрих фон Клейст
Драматург
Романтизм, 
Драматургия, Поэзия, Рассказ
DEU
1777-1811
MY: 0/-11
MX: 358'><div class=area style='position:absolute; width:24px; height:20px; left:416px; top:532px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=441&a_id=751&y=1777' title='Ф. де ла М. Фуке
Писатель
Романтизм, 
Сказка, Хоррор
FRA
1777-1843
MY: 0/2
MX: 441'><div class=area style='position:absolute; width:18px; height:20px; left:475px; top:654px'></div></a>
<a target=_blank href='build-rlmap.php?mp=441&a_id=751&y=1777' title='Ф. де ла М. Фуке
Писатель
Романтизм, 
Сказка, Хоррор
FRA
1777-1843
MY: 0/2
MX: 441'><div class=area style='position:absolute; width:17px; height:20px; left:493px; top:654px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=441&a_id=826&y=1779' title='А. Г. Эленшлегер
Писатель
Романтизм, 
Опера
DNK
1779-1850
MY: 0/17
MX: 441'><div class=area style='position:absolute; width:34px; height:20px; left:475px; top:777px'></div></a>
<a target=_blank href='build-rlmap.php?mp=441&a_id=826&y=1779' title='А. Г. Эленшлегер
Писатель
Романтизм, 
Опера
DNK
1779-1850
MY: 0/17
MX: 441'><div class=area style='position:absolute; width:33px; height:20px; left:509px; top:777px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=497&y=1780' title='В. Т. Нарежный
Писатель
Реализм
RUS
1780-1825
MY: 0/0
MX: 1302'><div class=area style='position:absolute; width:34px; height:20px; left:1336px; top:598px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1302&a_id=497&y=1780' title='В. Т. Нарежный
Писатель
Реализм
RUS
1780-1825
MY: 0/0
MX: 1302'><div class=area style='position:absolute; width:34px; height:20px; left:1370px; top:598px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=441&a_id=513&y=1780' title='Шарль Нодье
Писатель
Романтизм, 
Сказка, Фэнтези
FRA
1780-1844
MY: 0/8
MX: 441'><div class=area style='position:absolute; width:22px; height:20px; left:475px; top:703px'></div></a>
<a target=_blank href='build-rlmap.php?mp=441&a_id=513&y=1780' title='Шарль Нодье
Писатель
Романтизм, 
Сказка, Фэнтези
FRA
1780-1844
MY: 0/8
MX: 441'><div class=area style='position:absolute; width:22px; height:20px; left:497px; top:703px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=441&a_id=799&y=1781' title='А. фон Шамиссо
Писатель
Романтизм, 
Ученый
DEU
1781-1838
MY: 0/6
MX: 441'><div class=area style='position:absolute; width:31px; height:20px; left:475px; top:679px'></div></a>
<a target=_blank href='build-rlmap.php?mp=441&a_id=799&y=1781' title='А. фон Шамиссо
Писатель
Романтизм, 
Ученый
DEU
1781-1838
MY: 0/6
MX: 441'><div class=area style='position:absolute; width:30px; height:20px; left:506px; top:679px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1766&a_id=491&y=1782' title='Чарлз Мэтьюрин
Писатель
Готика, 
Драматургия, Хоррор
BRI
1782-1824
MY: 0/0
MX: 1766'><div class=area style='position:absolute; width:27px; height:20px; left:1800px; top:598px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1766&a_id=491&y=1782' title='Чарлз Мэтьюрин
Писатель
Готика, 
Драматургия, Хоррор
BRI
1782-1824
MY: 0/0
MX: 1766'><div class=area style='position:absolute; width:27px; height:20px; left:1827px; top:598px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=441&a_id=685&y=1782' title='Эсайас Тегнер
Автор
Романтизм, 
Гуманизм, Классицизм, Поэзия, Эпос
SWE
1782-1846
MY: 0/14
MX: 441'><div class=area style='position:absolute; width:24px; height:20px; left:475px; top:752px'></div></a>
<a target=_blank href='build-rlmap.php?mp=441&a_id=685&y=1782' title='Эсайас Тегнер
Автор
Романтизм, 
Гуманизм, Классицизм, Поэзия, Эпос
SWE
1782-1846
MY: 0/14
MX: 441'><div class=area style='position:absolute; width:24px; height:20px; left:499px; top:752px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2289&a_id=273&y=1783' title='Василий Жуковский
Поэт
Поэзия, Романтизм, Сентиментализм, 
Готика, Карамзинисты, Песня
RUS
1783-1852
MY: 0/0
MX: 2289'><div class=area style='position:absolute; width:29px; height:20px; left:2323px; top:691px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2289&a_id=273&y=1783' title='Василий Жуковский
Поэт
Поэзия, Романтизм, Сентиментализм, 
Готика, Карамзинисты, Песня
RUS
1783-1852
MY: 0/0
MX: 2289'><div class=area style='position:absolute; width:29px; height:20px; left:2352px; top:691px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=358&a_id=292&y=1783' title='Вашингтон Ирвинг
Писатель
Романтизм, 
Драматургия, История, Сатира
USA
1783-1859
MY: 0/-17
MX: 358'><div class=area style='position:absolute; width:30px; height:20px; left:392px; top:605px'></div></a>
<a target=_blank href='build-rlmap.php?mp=358&a_id=292&y=1783' title='Вашингтон Ирвинг
Писатель
Романтизм, 
Драматургия, История, Сатира
USA
1783-1859
MY: 0/-17
MX: 358'><div class=area style='position:absolute; width:30px; height:20px; left:422px; top:605px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1395&a_id=662&y=1783' title='Стендаль
Писатель
Психология, Реализм, 
Агностицизм, Романтизм
FRA
1783-1842
MY: 0/0
MX: 1395'><div class=area style='position:absolute; width:31px; height:20px; left:1429px; top:660px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1395&a_id=662&y=1783' title='Стендаль
Писатель
Психология, Реализм, 
Агностицизм, Романтизм
FRA
1783-1842
MY: 0/0
MX: 1395'><div class=area style='position:absolute; width:31px; height:20px; left:1460px; top:660px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=358&a_id=438&y=1785' title='Алессандро Мандзони
Писатель
Романтизм, 
История
ITA
1785-1873
MY: 0/-5
MX: 358'><div class=area style='position:absolute; width:33px; height:20px; left:392px; top:728px'></div></a>
<a target=_blank href='build-rlmap.php?mp=358&a_id=438&y=1785' title='Алессандро Мандзони
Писатель
Романтизм, 
История
ITA
1785-1873
MY: 0/-5
MX: 358'><div class=area style='position:absolute; width:33px; height:20px; left:425px; top:728px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2134&a_id=1053&y=1785' title='Братья Гримм

Детская, 
Сказка, Фольклор
DEU
1785-1862
MY: 0/-1
MX: 2134'><div class=area style='position:absolute; width:22px; height:20px; left:2168px; top:722px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2134&a_id=1053&y=1785' title='Братья Гримм

Детская, 
Сказка, Фольклор
DEU
1785-1862
MY: 0/-1
MX: 2134'><div class=area style='position:absolute; width:22px; height:20px; left:2190px; top:722px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2289&a_id=564&y=1787' title='Антоний Погорельский
Писатель
Сентиментализм, 
Детская, Романтизм, Сказка, Фантастика
RUS
1787-1836
MY: 0/0
MX: 2289'><div class=area style='position:absolute; width:29px; height:20px; left:2323px; top:654px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2289&a_id=564&y=1787' title='Антоний Погорельский
Писатель
Сентиментализм, 
Детская, Романтизм, Сказка, Фантастика
RUS
1787-1836
MY: 0/0
MX: 2289'><div class=area style='position:absolute; width:29px; height:20px; left:2352px; top:654px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=441&a_id=43&y=1788' title='Джордж Байрон
Барон Байрон
Романтизм, 
Готика, Либертинаж
BRI
1788-1824
MY: 0/-14
MX: 441'><div class=area style='position:absolute; width:25px; height:20px; left:475px; top:558px'></div></a>
<a target=_blank href='build-rlmap.php?mp=441&a_id=43&y=1788' title='Джордж Байрон
Барон Байрон
Романтизм, 
Готика, Либертинаж
BRI
1788-1824
MY: 0/-14
MX: 441'><div class=area style='position:absolute; width:25px; height:20px; left:500px; top:558px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1468&a_id=1061&y=1788' title='Артур Шопенгауэр
Философ
Философия, 
Волюнтаризм, Иррационализм, Мизантропия, Монархизм, Палингенезия, Трансцендентальный идеализм, Эстетизм, Этика
DEU
1788-1860
MY: 0/-1
MX: 1468'><div class=area style='position:absolute; width:33px; height:20px; left:1502px; top:722px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1468&a_id=1061&y=1788' title='Артур Шопенгауэр
Философ
Философия, 
Волюнтаризм, Иррационализм, Мизантропия, Монархизм, Палингенезия, Трансцендентальный идеализм, Эстетизм, Этика
DEU
1788-1860
MY: 0/-1
MX: 1468'><div class=area style='position:absolute; width:32px; height:20px; left:1535px; top:722px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1219&a_id=274&y=1789' title='Михаил Загоскин
Писатель
История
RUS
1789-1852
MY: 0/0
MX: 1219'><div class=area style='position:absolute; width:30px; height:20px; left:1253px; top:709px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1219&a_id=274&y=1789' title='Михаил Загоскин
Писатель
История
RUS
1789-1852
MY: 0/0
MX: 1219'><div class=area style='position:absolute; width:29px; height:20px; left:1283px; top:709px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1146&a_id=371&y=1789' title='Фенимор Купер
Романист
Приключения, 
Индейцы
USA
1789-1851
MY: 0/0
MX: 1146'><div class=area style='position:absolute; width:20px; height:20px; left:1180px; top:703px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1146&a_id=371&y=1789' title='Фенимор Купер
Романист
Приключения, 
Индейцы
USA
1789-1851
MY: 0/0
MX: 1146'><div class=area style='position:absolute; width:20px; height:20px; left:1200px; top:703px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2134&a_id=10&y=1791' title='С. Т. Аксаков
Писатель
Детская, 
Сказка
RUS
1791-1859
MY: 0/2
MX: 2134'><div class=area style='position:absolute; width:27px; height:20px; left:2168px; top:746px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2134&a_id=10&y=1791' title='С. Т. Аксаков
Писатель
Детская, 
Сказка
RUS
1791-1859
MY: 0/2
MX: 2134'><div class=area style='position:absolute; width:26px; height:20px; left:2195px; top:746px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=-2&a_id=209&y=1791' title='Франц Грильпарцер
Драматург
Драматургия, 
Классицизм, Поэзия, Реализм, Романтизм
DEU
1791-1872
MY: 0/0
MX: -2'><div class=area style='position:absolute; width:33px; height:20px; left:32px; top:777px'></div></a>
<a target=_blank href='build-rlmap.php?mp=-2&a_id=209&y=1791' title='Франц Грильпарцер
Драматург
Драматургия, 
Классицизм, Поэзия, Реализм, Романтизм
DEU
1791-1872
MY: 0/0
MX: -2'><div class=area style='position:absolute; width:32px; height:20px; left:65px; top:777px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=643&y=1791' title='Эжен Скриб
Драматург
Комедия, 
Водевиль, Опера
FRA
1791-1861
MY: 0/0
MX: 2209'><div class=area style='position:absolute; width:21px; height:20px; left:2243px; top:740px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2209&a_id=643&y=1791' title='Эжен Скриб
Драматург
Комедия, 
Водевиль, Опера
FRA
1791-1861
MY: 0/0
MX: 2209'><div class=area style='position:absolute; width:21px; height:20px; left:2264px; top:740px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1219&a_id=380&y=1792' title='Иван Лажечников
Писатель
История
RUS
1792-1869
MY: 0/0
MX: 1219'><div class=area style='position:absolute; width:34px; height:20px; left:1253px; top:771px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1219&a_id=380&y=1792' title='Иван Лажечников
Писатель
История
RUS
1792-1869
MY: 0/0
MX: 1219'><div class=area style='position:absolute; width:33px; height:20px; left:1287px; top:771px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=441&a_id=806&y=1792' title='Перси Биши Шелли
Поэт
Поэзия, Романтизм, 
Анархизм, Готика, Дидактизм, Фэнтези, Эпос
BRI
1792-1822
MY: 0/-3
MX: 441'><div class=area style='position:absolute; width:29px; height:20px; left:475px; top:605px'></div></a>
<a target=_blank href='build-rlmap.php?mp=441&a_id=806&y=1792' title='Перси Биши Шелли
Поэт
Поэзия, Романтизм, 
Анархизм, Готика, Дидактизм, Фэнтези, Эпос
BRI
1792-1822
MY: 0/-3
MX: 441'><div class=area style='position:absolute; width:29px; height:20px; left:504px; top:605px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1468&a_id=1133&y=1794' title='Петр Чаадаев
Философ
Философия, 
История, Нон-конформизм, Публицистика
RUS
1794-1856
MY: 0/2
MX: 1468'><div class=area style='position:absolute; width:29px; height:20px; left:1502px; top:746px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1468&a_id=1133&y=1794' title='Петр Чаадаев
Философ
Философия, 
История, Нон-конформизм, Публицистика
RUS
1794-1856
MY: 0/2
MX: 1468'><div class=area style='position:absolute; width:28px; height:20px; left:1531px; top:746px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2&a_id=207&y=1795' title='А. С. Грибоедов
Дипломат
Классицизм
RUS
1795-1829
MY: 0/0
MX: 2'><div class=area style='position:absolute; width:39px; height:20px; left:36px; top:654px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2&a_id=207&y=1795' title='А. С. Грибоедов
Дипломат
Классицизм
RUS
1795-1829
MY: 0/0
MX: 2'><div class=area style='position:absolute; width:38px; height:20px; left:75px; top:654px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=441&a_id=73&y=1797' title='А. А. Бестужев-Марлинский
Писатель
Романтизм, 
Декабрист, История, Публицистика
RUS
1797-1837
MY: 0/19
MX: 441'><div class=area style='position:absolute; width:31px; height:20px; left:475px; top:802px'></div></a>
<a target=_blank href='build-rlmap.php?mp=441&a_id=73&y=1797' title='А. А. Бестужев-Марлинский
Писатель
Романтизм, 
Декабрист, История, Публицистика
RUS
1797-1837
MY: 0/19
MX: 441'><div class=area style='position:absolute; width:30px; height:20px; left:506px; top:802px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=358&a_id=138&y=1797' title='Альфред де Виньи
Писатель
Романтизм, 
Аристократизм, Драматургия, История, Консерватизм, Поэзия
FRA
1797-1863
MY: 0/2
MX: 358'><div class=area style='position:absolute; width:21px; height:20px; left:392px; top:777px'></div></a>
<a target=_blank href='build-rlmap.php?mp=358&a_id=138&y=1797' title='Альфред де Виньи
Писатель
Романтизм, 
Аристократизм, Драматургия, История, Консерватизм, Поэзия
FRA
1797-1863
MY: 0/2
MX: 358'><div class=area style='position:absolute; width:21px; height:20px; left:413px; top:777px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=358&a_id=173&y=1797' title='Генрих Гейне
Поэт
Поэзия, Романтизм, 
Лирика, Разговорный, Фельетон
DEU
1797-1856
MY: 0/-11
MX: 358'><div class=area style='position:absolute; width:22px; height:20px; left:392px; top:679px'></div></a>
<a target=_blank href='build-rlmap.php?mp=358&a_id=173&y=1797' title='Генрих Гейне
Поэт
Поэзия, Романтизм, 
Лирика, Разговорный, Фельетон
DEU
1797-1856
MY: 0/-11
MX: 358'><div class=area style='position:absolute; width:21px; height:20px; left:414px; top:679px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1766&a_id=807&y=1797' title='Мэри Шелли
Писательница
Готика, Романтизм, 
Мистицизм, Фантастика, Хоррор
BRI
1797-1851
MY: 0/0
MX: 1766'><div class=area style='position:absolute; width:30px; height:20px; left:1800px; top:728px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1766&a_id=807&y=1797' title='Мэри Шелли
Писательница
Готика, Романтизм, 
Мистицизм, Фантастика, Хоррор
BRI
1797-1851
MY: 0/0
MX: 1766'><div class=area style='position:absolute; width:30px; height:20px; left:1830px; top:728px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=358&a_id=470&y=1798' title='Адам Мицкевич
Поэт
Поэзия, Романтизм, 
Публицистика
POL
1798-1855
MY: 0/-7
MX: 358'><div class=area style='position:absolute; width:32px; height:20px; left:392px; top:703px'></div></a>
<a target=_blank href='build-rlmap.php?mp=358&a_id=470&y=1798' title='Адам Мицкевич
Поэт
Поэзия, Романтизм, 
Публицистика
POL
1798-1855
MY: 0/-7
MX: 358'><div class=area style='position:absolute; width:32px; height:20px; left:424px; top:703px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=46&y=1799' title='Оноре де Бальзак
Писатель
Реализм, 
История
FRA
1799-1850
MY: 0/-5
MX: 1302'><div class=area style='position:absolute; width:27px; height:20px; left:1336px; top:703px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1302&a_id=46&y=1799' title='Оноре де Бальзак
Писатель
Реализм, 
История
FRA
1799-1850
MY: 0/-5
MX: 1302'><div class=area style='position:absolute; width:27px; height:20px; left:1363px; top:703px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=582&y=1799' title='А. С. Пушкин
Поэт
Реализм, 
Поэзия, Романтизм
RUS
1799-1837
MY: 0/-2
MX: 1302'><div class=area style='position:absolute; width:27px; height:20px; left:1336px; top:679px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1302&a_id=582&y=1799' title='А. С. Пушкин
Поэт
Реализм, 
Поэзия, Романтизм
RUS
1799-1837
MY: 0/-2
MX: 1302'><div class=area style='position:absolute; width:27px; height:20px; left:1363px; top:679px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=358&a_id=51&y=1800' title='Е. А. Баратынский
Поэт-песенник
Поэзия, Романтизм, 
Готика
RUS
1800-1844
MY: 0/-10
MX: 358'><div class=area style='position:absolute; width:36px; height:20px; left:392px; top:654px'></div></a>
<a target=_blank href='build-rlmap.php?mp=358&a_id=51&y=1800' title='Е. А. Баратынский
Поэт-песенник
Поэзия, Романтизм, 
Готика
RUS
1800-1844
MY: 0/-10
MX: 358'><div class=area style='position:absolute; width:36px; height:20px; left:428px; top:654px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2134&a_id=1039&y=1801' title='Владимир Даль
Писатель
Детская, Словарь
RUS
1801-1872
MY: 0/-1
MX: 2134'><div class=area style='position:absolute; width:18px; height:20px; left:2168px; top:802px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2134&a_id=1039&y=1801' title='Владимир Даль
Писатель
Детская, Словарь
RUS
1801-1872
MY: 0/-1
MX: 2134'><div class=area style='position:absolute; width:18px; height:20px; left:2186px; top:802px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2134&a_id=169&y=1802' title='Вильгельм Гауф
Писатель
Детская, Романтизм, 
Бидермейер, Сказка
DEU
1802-1827
MY: 0/0
MX: 2134'><div class=area style='position:absolute; width:18px; height:20px; left:2168px; top:672px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2134&a_id=169&y=1802' title='Вильгельм Гауф
Писатель
Детская, Романтизм, 
Бидермейер, Сказка
DEU
1802-1827
MY: 0/0
MX: 2134'><div class=area style='position:absolute; width:18px; height:20px; left:2186px; top:672px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1766&a_id=218&y=1802' title='Виктор Гюго
Писатель
Готика, Романтизм, 
Фэнтези
FRA
1802-1885
MY: 0/0
MX: 1766'><div class=area style='position:absolute; width:19px; height:20px; left:1800px; top:851px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1766&a_id=218&y=1802' title='Виктор Гюго
Писатель
Готика, Романтизм, 
Фэнтези
FRA
1802-1885
MY: 0/0
MX: 1766'><div class=area style='position:absolute; width:19px; height:20px; left:1819px; top:851px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1219&a_id=260&y=1802' title='Александр Дюма
Писатель
История, Романтизм, 
Фэнтези
FRA
1802-1870
MY: 0/0
MX: 1219'><div class=area style='position:absolute; width:22px; height:20px; left:1253px; top:802px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1219&a_id=260&y=1802' title='Александр Дюма
Писатель
История, Романтизм, 
Фэнтези
FRA
1802-1870
MY: 0/0
MX: 1219'><div class=area style='position:absolute; width:22px; height:20px; left:1275px; top:802px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=358&a_id=457&y=1803' title='Проспер Мериме
Писатель
Романтизм, 
Аболиционизм, Драматургия, История, Рассказ
FRA
1803-1870
MY: 0/15
MX: 358'><div class=area style='position:absolute; width:28px; height:20px; left:392px; top:900px'></div></a>
<a target=_blank href='build-rlmap.php?mp=358&a_id=457&y=1803' title='Проспер Мериме
Писатель
Романтизм, 
Аболиционизм, Драматургия, История, Рассказ
FRA
1803-1870
MY: 0/15
MX: 358'><div class=area style='position:absolute; width:27px; height:20px; left:420px; top:900px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=358&a_id=1069&y=1803' title='Фёдор Тютчев
Поэт
Поэзия, Романтизм, 
Религия, Славянофильство, Философия
RUS
1803-1873
MY: 0/22
MX: 358'><div class=area style='position:absolute; width:25px; height:20px; left:392px; top:950px'></div></a>
<a target=_blank href='build-rlmap.php?mp=358&a_id=1069&y=1803' title='Фёдор Тютчев
Поэт
Поэзия, Романтизм, 
Религия, Славянофильство, Философия
RUS
1803-1873
MY: 0/22
MX: 358'><div class=area style='position:absolute; width:25px; height:20px; left:417px; top:950px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=358&a_id=198&y=1804' title='Натаниел Готорн

Романтизм, 
Аллегория, Готика, История, Рассказ, Символизм, Фантастика
USA
1804-1864
MY: 0/6
MX: 358'><div class=area style='position:absolute; width:24px; height:20px; left:392px; top:826px'></div></a>
<a target=_blank href='build-rlmap.php?mp=358&a_id=198&y=1804' title='Натаниел Готорн

Романтизм, 
Аллегория, Готика, История, Рассказ, Символизм, Фантастика
USA
1804-1864
MY: 0/6
MX: 358'><div class=area style='position:absolute; width:23px; height:20px; left:416px; top:826px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=358&a_id=523&y=1804' title='Владимир Одоевский
Писатель
Романтизм, 
Мистицизм, Сказка, Утопия, Филантроп
RUS
1804-1869
MY: 0/19
MX: 358'><div class=area style='position:absolute; width:36px; height:20px; left:392px; top:925px'></div></a>
<a target=_blank href='build-rlmap.php?mp=358&a_id=523&y=1804' title='Владимир Одоевский
Писатель
Романтизм, 
Мистицизм, Сказка, Утопия, Филантроп
RUS
1804-1869
MY: 0/19
MX: 358'><div class=area style='position:absolute; width:35px; height:20px; left:428px; top:925px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=358&a_id=566&y=1804' title='Александр Полежаев

Романтизм
RUS
1804-1838
MY: 0/-13
MX: 358'><div class=area style='position:absolute; width:33px; height:20px; left:392px; top:629px'></div></a>
<a target=_blank href='build-rlmap.php?mp=358&a_id=566&y=1804' title='Александр Полежаев

Романтизм
RUS
1804-1838
MY: 0/-13
MX: 358'><div class=area style='position:absolute; width:33px; height:20px; left:425px; top:629px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2289&a_id=621&y=1804' title='Жорж Санд
Писательница
О любви, Романтизм, 
История, Социализм, Феминизм
FRA
1804-1876
MY: 0/-1
MX: 2289'><div class=area style='position:absolute; width:19px; height:20px; left:2323px; top:820px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2289&a_id=621&y=1804' title='Жорж Санд
Писательница
О любви, Романтизм, 
История, Социализм, Феминизм
FRA
1804-1876
MY: 0/-1
MX: 2289'><div class=area style='position:absolute; width:19px; height:20px; left:2342px; top:820px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=667&a_id=677&y=1804' title='Эжен Сю
Писатель
Детектив, Романтизм, 
История, Приключения
FRA
1804-1857
MY: 0/0
MX: 667'><div class=area style='position:absolute; width:13px; height:20px; left:701px; top:771px'></div></a>
<a target=_blank href='build-rlmap.php?mp=667&a_id=677&y=1804' title='Эжен Сю
Писатель
Детектив, Романтизм, 
История, Приключения
FRA
1804-1857
MY: 0/0
MX: 667'><div class=area style='position:absolute; width:12px; height:20px; left:714px; top:771px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2134&a_id=19&y=1805' title='Г. Х. Андерсен
Поэт
Детская, Романтизм, 
Поэзия, Приключения
DNK
1805-1875
MY: 0/0
MX: 2134'><div class=area style='position:absolute; width:29px; height:20px; left:2168px; top:826px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2134&a_id=19&y=1805' title='Г. Х. Андерсен
Поэт
Детская, Романтизм, 
Поэзия, Приключения
DNK
1805-1875
MY: 0/0
MX: 2134'><div class=area style='position:absolute; width:28px; height:20px; left:2197px; top:826px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=441&a_id=411&y=1807' title='Генри Лонгфелло
Поэт
Поэзия, 
Дидактизм, Индейцы, Романтизм
USA
1807-1882
MY: -4/0
MX: 441'><div class=area style='position:absolute; width:31px; height:20px; left:475px; top:833px'></div></a>
<a target=_blank href='build-rlmap.php?mp=441&a_id=411&y=1807' title='Генри Лонгфелло
Поэт
Поэзия, 
Дидактизм, Индейцы, Романтизм
USA
1807-1882
MY: -4/0
MX: 441'><div class=area style='position:absolute; width:31px; height:20px; left:506px; top:833px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=590&a_id=184&y=1809' title='Н. В. Гоголь
Драматург
Магический реализм, 
Мистицизм, Реализм, Романтизм
RUS
1809-1852
MY: 0/0
MX: 590'><div class=area style='position:absolute; width:26px; height:20px; left:624px; top:771px'></div></a>
<a target=_blank href='build-rlmap.php?mp=590&a_id=184&y=1809' title='Н. В. Гоголь
Драматург
Магический реализм, 
Мистицизм, Реализм, Романтизм
RUS
1809-1852
MY: 0/0
MX: 590'><div class=area style='position:absolute; width:26px; height:20px; left:650px; top:771px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1766&a_id=562&y=1809' title='Эдгар По
Писатель
Готика, Романтизм, 
Викторианская эпоха, Фантастика, Хоррор
USA
1809-1849
MY: 0/0
MX: 1766'><div class=area style='position:absolute; width:12px; height:20px; left:1800px; top:759px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1766&a_id=562&y=1809' title='Эдгар По
Писатель
Готика, Романтизм, 
Викторианская эпоха, Фантастика, Хоррор
USA
1809-1849
MY: 0/0
MX: 1766'><div class=area style='position:absolute; width:11px; height:20px; left:1812px; top:759px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=358&a_id=644&y=1809' title='Юлиуш Словацкий
Поэт
Поэзия, Романтизм, 
Драматургия, История, Мистицизм
POL
1809-1849
MY: 0/-1
MX: 358'><div class=area style='position:absolute; width:35px; height:20px; left:392px; top:752px'></div></a>
<a target=_blank href='build-rlmap.php?mp=358&a_id=644&y=1809' title='Юлиуш Словацкий
Поэт
Поэзия, Романтизм, 
Драматургия, История, Мистицизм
POL
1809-1849
MY: 0/-1
MX: 358'><div class=area style='position:absolute; width:35px; height:20px; left:427px; top:752px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=358&a_id=492&y=1810' title='Альфред де Мюссе
Поэт
Романтизм, 
Драматургия, Поэзия
FRA
1810-1857
MY: 0/10
MX: 358'><div class=area style='position:absolute; width:25px; height:20px; left:392px; top:851px'></div></a>
<a target=_blank href='build-rlmap.php?mp=358&a_id=492&y=1810' title='Альфред де Мюссе
Поэт
Романтизм, 
Драматургия, Поэзия
FRA
1810-1857
MY: 0/10
MX: 358'><div class=area style='position:absolute; width:24px; height:20px; left:417px; top:851px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=358&a_id=1240&y=1810' title='Элизабет Гаскелл
Писательница
Романтизм, 
О любви, Рассказ
BRI
1810-1865
MY: 0/26
MX: 358'><div class=area style='position:absolute; width:27px; height:20px; left:392px; top:974px'></div></a>
<a target=_blank href='build-rlmap.php?mp=358&a_id=1240&y=1810' title='Элизабет Гаскелл
Писательница
Романтизм, 
О любви, Рассказ
BRI
1810-1865
MY: 0/26
MX: 358'><div class=area style='position:absolute; width:27px; height:20px; left:419px; top:974px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1146&a_id=76&y=1811' title='Гарриет Бичер-Стоу
Писательница
Аболиционизм, Приключения
USA
1811-1896
MY: 0/-1
MX: 1146'><div class=area style='position:absolute; width:23px; height:20px; left:1180px; top:906px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1146&a_id=76&y=1811' title='Гарриет Бичер-Стоу
Писательница
Аболиционизм, Приключения
USA
1811-1896
MY: 0/-1
MX: 1146'><div class=area style='position:absolute; width:23px; height:20px; left:1203px; top:906px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=76&a_id=199&y=1811' title='Теофиль Готье
Поэт-песенник
Декаданс, 
Поэзия, Романтизм
FRA
1811-1872
MY: 0/-1
MX: 76'><div class=area style='position:absolute; width:20px; height:20px; left:110px; top:833px'></div></a>
<a target=_blank href='build-rlmap.php?mp=76&a_id=199&y=1811' title='Теофиль Готье
Поэт-песенник
Декаданс, 
Поэзия, Романтизм
FRA
1811-1872
MY: 0/-1
MX: 76'><div class=area style='position:absolute; width:20px; height:20px; left:130px; top:833px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=686&y=1811' title='Уильям Теккерей
Писатель
Реализм, Сатира, 
История
BRI
1811-1863
MY: 0/0
MX: 2209'><div class=area style='position:absolute; width:31px; height:20px; left:2243px; top:808px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2209&a_id=686&y=1811' title='Уильям Теккерей
Писатель
Реализм, Сатира, 
История
BRI
1811-1863
MY: 0/0
MX: 2209'><div class=area style='position:absolute; width:30px; height:20px; left:2274px; top:808px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1395&a_id=177&y=1812' title='Александр Герцен

Психология, 
Нон-конформизм, Панславизм, Публицистика, Социализм, Философия
RUS
1812-1870
MY: 0/0
MX: 1395'><div class=area style='position:absolute; width:25px; height:20px; left:1429px; top:833px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1395&a_id=177&y=1812' title='Александр Герцен

Психология, 
Нон-конформизм, Панславизм, Публицистика, Социализм, Философия
RUS
1812-1870
MY: 0/0
MX: 1395'><div class=area style='position:absolute; width:24px; height:20px; left:1454px; top:833px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2289&a_id=195&y=1812' title='И. А. Гончаров
Писатель
Реализм, Сентиментализм, 
Натуральная школа
RUS
1812-1891
MY: 0/0
MX: 2289'><div class=area style='position:absolute; width:34px; height:20px; left:2323px; top:900px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2289&a_id=195&y=1812' title='И. А. Гончаров
Писатель
Реализм, Сентиментализм, 
Натуральная школа
RUS
1812-1891
MY: 0/0
MX: 2289'><div class=area style='position:absolute; width:33px; height:20px; left:2357px; top:900px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2289&a_id=242&y=1812' title='Чарльз Диккенс
Писатель-романист
Реализм, Сентиментализм, 
Детская, История, Сказка, Юмор
BRI
1812-1870
MY: 0/2
MX: 2289'><div class=area style='position:absolute; width:29px; height:20px; left:2323px; top:845px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2289&a_id=242&y=1812' title='Чарльз Диккенс
Писатель-романист
Реализм, Сентиментализм, 
Детская, История, Сказка, Юмор
BRI
1812-1870
MY: 0/2
MX: 2289'><div class=area style='position:absolute; width:29px; height:20px; left:2352px; top:845px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=120&y=1813' title='Георг Бюхнер
Драматург
Драматургия, Поэзия, Реализм, 
Экспрессионизм
DEU
1813-1837
MY: 0/-1
MX: 1302'><div class=area style='position:absolute; width:26px; height:20px; left:1336px; top:728px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1302&a_id=120&y=1813' title='Георг Бюхнер
Драматург
Драматургия, Поэзия, Реализм, 
Экспрессионизм
DEU
1813-1837
MY: 0/-1
MX: 1302'><div class=area style='position:absolute; width:25px; height:20px; left:1362px; top:728px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1468&a_id=373&y=1813' title='Сёрен Кьеркегор
Философ
Философия, 
Постмодернизм, Психология, Религия, Экзистенциализм
DNK
1813-1855
MY: 0/0
MX: 1468'><div class=area style='position:absolute; width:32px; height:20px; left:1502px; top:789px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1468&a_id=373&y=1813' title='Сёрен Кьеркегор
Философ
Философия, 
Постмодернизм, Психология, Религия, Экзистенциализм
DNK
1813-1855
MY: 0/0
MX: 1468'><div class=area style='position:absolute; width:32px; height:20px; left:1534px; top:789px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2289&a_id=650&y=1813' title='Владимир Соллогуб
Автор
Беллетристика, 
Водевиль, Драматургия, Натурализм, Публицистика
RUS
1813-1882
MY: 0/0
MX: 2289'><div class=area style='position:absolute; width:30px; height:20px; left:2323px; top:876px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2289&a_id=650&y=1813' title='Владимир Соллогуб
Автор
Беллетристика, 
Водевиль, Драматургия, Натурализм, Публицистика
RUS
1813-1882
MY: 0/0
MX: 2289'><div class=area style='position:absolute; width:30px; height:20px; left:2353px; top:876px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=-2&a_id=761&y=1813' title='К. Ф. Хеббель
Драматург
Драматургия
DEU
1813-1863
MY: 0/0
MX: -2'><div class=area style='position:absolute; width:29px; height:20px; left:32px; top:814px'></div></a>
<a target=_blank href='build-rlmap.php?mp=-2&a_id=761&y=1813' title='К. Ф. Хеббель
Драматург
Драматургия
DEU
1813-1863
MY: 0/0
MX: -2'><div class=area style='position:absolute; width:28px; height:20px; left:61px; top:814px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=394&y=1814' title='М. Ю. Лермонтов
Поэт
Реализм, 
Готика, Поэзия, Романтизм
RUS
1814-1841
MY: 0/0
MX: 1302'><div class=area style='position:absolute; width:39px; height:20px; left:1336px; top:752px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1302&a_id=394&y=1814' title='М. Ю. Лермонтов
Поэт
Реализм, 
Готика, Поэзия, Романтизм
RUS
1814-1841
MY: 0/0
MX: 1302'><div class=area style='position:absolute; width:39px; height:20px; left:1375px; top:752px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2134&a_id=267&y=1815' title='Пётр Ершов
Поэт
Детская, Поэзия, 
Драматургия, Сказка
RUS
1815-1869
MY: 0/2
MX: 2134'><div class=area style='position:absolute; width:23px; height:20px; left:2168px; top:851px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2134&a_id=267&y=1815' title='Пётр Ершов
Поэт
Детская, Поэзия, 
Драматургия, Сказка
RUS
1815-1869
MY: 0/2
MX: 2134'><div class=area style='position:absolute; width:22px; height:20px; left:2191px; top:851px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=358&a_id=100&y=1816' title='Шарлотта Бронте
Поэтесса
Романтизм, 
Готика, Поэзия
BRI
1816-1855
MY: 0/12
MX: 358'><div class=area style='position:absolute; width:34px; height:20px; left:392px; top:876px'></div></a>
<a target=_blank href='build-rlmap.php?mp=358&a_id=100&y=1816' title='Шарлотта Бронте
Поэтесса
Романтизм, 
Готика, Поэзия
BRI
1816-1855
MY: 0/12
MX: 358'><div class=area style='position:absolute; width:34px; height:20px; left:426px; top:876px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2289&a_id=674&y=1817' title='А. Сухово-Кобылин
Драматург
Драматургия, Реализм, Сентиментализм, 
Поэзия, Философия
RUS
1817-1903
MY: 0/0
MX: 2289'><div class=area style='position:absolute; width:30px; height:20px; left:2323px; top:950px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2289&a_id=674&y=1817' title='А. Сухово-Кобылин
Драматург
Драматургия, Реализм, Сентиментализм, 
Поэзия, Философия
RUS
1817-1903
MY: 0/0
MX: 2289'><div class=area style='position:absolute; width:30px; height:20px; left:2353px; top:950px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=358&a_id=698&y=1817' title='А. К. Толстой
Писатель
Романтизм, 
Готика, Драматургия, История, Поэзия, Сатира
RUS
1817-1875
MY: 0/22
MX: 358'><div class=area style='position:absolute; width:34px; height:20px; left:392px; top:999px'></div></a>
<a target=_blank href='build-rlmap.php?mp=358&a_id=698&y=1817' title='А. К. Толстой
Писатель
Романтизм, 
Готика, Драматургия, История, Поэзия, Сатира
RUS
1817-1875
MY: 0/22
MX: 358'><div class=area style='position:absolute; width:33px; height:20px; left:426px; top:999px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=229&a_id=702&y=1817' title='Генри Дэвид Торо
Писатель
Трансцендентализм, Философия, 
Дидактизм, Пантеизм, Поэзия
USA
1817-1862
MY: 0/0
MX: 229'><div class=area style='position:absolute; width:19px; height:20px; left:263px; top:826px'></div></a>
<a target=_blank href='build-rlmap.php?mp=229&a_id=702&y=1817' title='Генри Дэвид Торо
Писатель
Трансцендентализм, Философия, 
Дидактизм, Пантеизм, Поэзия
USA
1817-1862
MY: 0/0
MX: 229'><div class=area style='position:absolute; width:18px; height:20px; left:282px; top:826px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=358&a_id=101&y=1818' title='Эмили Бронте
Писательница
Романтизм, 
Готика, О любви
BRI
1818-1848
MY: 0/3
MX: 358'><div class=area style='position:absolute; width:35px; height:20px; left:392px; top:802px'></div></a>
<a target=_blank href='build-rlmap.php?mp=358&a_id=101&y=1818' title='Эмили Бронте
Писательница
Романтизм, 
Готика, О любви
BRI
1818-1848
MY: 0/3
MX: 358'><div class=area style='position:absolute; width:34px; height:20px; left:427px; top:802px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1146&a_id=593&y=1818' title='Майн Рид
Писатель
Приключения, 
Индейцы
BRI
1818-1883
MY: 0/-2
MX: 1146'><div class=area style='position:absolute; width:15px; height:20px; left:1180px; top:882px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1146&a_id=593&y=1818' title='Майн Рид
Писатель
Приключения, 
Индейцы
BRI
1818-1883
MY: 0/-2
MX: 1146'><div class=area style='position:absolute; width:15px; height:20px; left:1195px; top:882px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2134&a_id=701&y=1818' title='Сакариас Топелиус
Писатель
Детская, Романтизм, 
Сказка
FIN
1818-1898
MY: 0/0
MX: 2134'><div class=area style='position:absolute; width:32px; height:20px; left:2168px; top:937px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2134&a_id=701&y=1818' title='Сакариас Топелиус
Писатель
Детская, Романтизм, 
Сказка
FIN
1818-1898
MY: 0/0
MX: 2134'><div class=area style='position:absolute; width:31px; height:20px; left:2200px; top:937px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=709&y=1818' title='И. С. Тургенев
Писатель
Реализм, 
Романтизм
RUS
1818-1883
MY: 0/-7
MX: 1302'><div class=area style='position:absolute; width:33px; height:20px; left:1336px; top:851px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1302&a_id=709&y=1818' title='И. С. Тургенев
Писатель
Реализм, 
Романтизм
RUS
1818-1883
MY: 0/-7
MX: 1302'><div class=area style='position:absolute; width:32px; height:20px; left:1369px; top:851px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1468&a_id=1112&y=1818' title='Карл Маркс
Философ
Философия, 
Политика
DEU
1818-1883
MY: 0/0
MX: 1468'><div class=area style='position:absolute; width:22px; height:20px; left:1502px; top:894px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1468&a_id=1112&y=1818' title='Карл Маркс
Философ
Философия, 
Политика
DEU
1818-1883
MY: 0/0
MX: 1468'><div class=area style='position:absolute; width:22px; height:20px; left:1524px; top:894px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=324&y=1819' title='Готфрид Келлер
Писатель
Реализм, 
Роман
CHE
1819-1890
MY: 0/1
MX: 1302'><div class=area style='position:absolute; width:25px; height:20px; left:1336px; top:925px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1302&a_id=324&y=1819' title='Готфрид Келлер
Писатель
Реализм, 
Роман
CHE
1819-1890
MY: 0/1
MX: 1302'><div class=area style='position:absolute; width:24px; height:20px; left:1361px; top:925px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1146&a_id=451&y=1819' title='Герман Мелвилл
Писатель
Приключения, 
Готика, Путешествия
USA
1819-1891
MY: 0/2
MX: 1146'><div class=area style='position:absolute; width:30px; height:20px; left:1180px; top:931px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1146&a_id=451&y=1819' title='Герман Мелвилл
Писатель
Приключения, 
Готика, Путешествия
USA
1819-1891
MY: 0/2
MX: 1146'><div class=area style='position:absolute; width:30px; height:20px; left:1210px; top:931px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=827&y=1819' title='Джордж Элиот
Писательница
Реализм, 
Атеизм
BRI
1819-1880
MY: 0/-10
MX: 1302'><div class=area style='position:absolute; width:28px; height:20px; left:1336px; top:826px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1302&a_id=827&y=1819' title='Джордж Элиот
Писательница
Реализм, 
Атеизм
BRI
1819-1880
MY: 0/-10
MX: 1302'><div class=area style='position:absolute; width:27px; height:20px; left:1364px; top:826px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=229&a_id=1084&y=1819' title='Уолт Уитмен
Поэт
Поэзия, Трансцендентализм, 
Социализм, Реализм, Гуманизм, Пантеизм, О войне, Дидактизм, Деизм, Фэнтези
USA
1819-1892
MY: -8/0
MX: 229'><div class=area style='position:absolute; width:25px; height:20px; left:263px; top:876px'></div></a>
<a target=_blank href='build-rlmap.php?mp=229&a_id=1084&y=1819' title='Уолт Уитмен
Поэт
Поэзия, Трансцендентализм, 
Социализм, Реализм, Гуманизм, Пантеизм, О войне, Дидактизм, Деизм, Фэнтези
USA
1819-1892
MY: -8/0
MX: 229'><div class=area style='position:absolute; width:25px; height:20px; left:288px; top:876px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=102&y=1820' title='Энн Бронте
Писательница
Реализм, 
Религия, Феминизм
BRI
1820-1849
MY: 0/-3
MX: 1302'><div class=area style='position:absolute; width:34px; height:20px; left:1336px; top:777px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1302&a_id=102&y=1820' title='Энн Бронте
Писательница
Реализм, 
Религия, Феминизм
BRI
1820-1849
MY: 0/-3
MX: 1302'><div class=area style='position:absolute; width:34px; height:20px; left:1370px; top:777px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=358&a_id=1126&y=1820' title='Афанасий Фет
Переводчик
Лирика, Поэзия, Романтизм
RUS
1820-1892
MY: 0/16
MX: 358'><div class=area style='position:absolute; width:15px; height:20px; left:392px; top:1024px'></div></a>
<a target=_blank href='build-rlmap.php?mp=358&a_id=1126&y=1820' title='Афанасий Фет
Переводчик
Лирика, Поэзия, Романтизм
RUS
1820-1892
MY: 0/16
MX: 358'><div class=area style='position:absolute; width:15px; height:20px; left:407px; top:1024px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1468&a_id=1218&y=1820' title='Фридрих Энгельс
Философ
Философия, 
Материализм, Политика, Экономика
DEU
1820-1895
MY: 0/-1
MX: 1468'><div class=area style='position:absolute; width:27px; height:20px; left:1502px; top:931px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1468&a_id=1218&y=1820' title='Фридрих Энгельс
Философ
Философия, 
Материализм, Политика, Экономика
DEU
1820-1895
MY: 0/-1
MX: 1468'><div class=area style='position:absolute; width:27px; height:20px; left:1529px; top:931px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1395&a_id=251&y=1821' title='Ф. М. Достоевский
Писатель
Психология, Реализм, 
Религия, Философия, Экзистенциализм
RUS
1821-1881
MY: 0/0
MX: 1395'><div class=area style='position:absolute; width:28px; height:20px; left:1429px; top:894px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1395&a_id=251&y=1821' title='Ф. М. Достоевский
Писатель
Психология, Реализм, 
Религия, Философия, Экзистенциализм
RUS
1821-1881
MY: 0/0
MX: 1395'><div class=area style='position:absolute; width:28px; height:20px; left:1457px; top:894px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=919&a_id=501&y=1821' title='Н. А. Некрасов
Поэт
Деревня, Поэзия
RUS
1821-1878
MY: 0/0
MX: 919'><div class=area style='position:absolute; width:30px; height:20px; left:953px; top:888px'></div></a>
<a target=_blank href='build-rlmap.php?mp=919&a_id=501&y=1821' title='Н. А. Некрасов
Поэт
Деревня, Поэзия
RUS
1821-1878
MY: 0/0
MX: 919'><div class=area style='position:absolute; width:29px; height:20px; left:983px; top:888px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=554&y=1821' title='Алексей Писемский
Писатель
Реализм, 
Драматургия
RUS
1821-1881
MY: 0/-3
MX: 1302'><div class=area style='position:absolute; width:36px; height:20px; left:1336px; top:876px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1302&a_id=554&y=1821' title='Алексей Писемский
Писатель
Реализм, 
Драматургия
RUS
1821-1881
MY: 0/-3
MX: 1302'><div class=area style='position:absolute; width:35px; height:20px; left:1372px; top:876px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=740&y=1821' title='Гюстав Флобер
Писатель
Реализм, Романтизм, 
История, Рассказ, Фэнтези, Эстетизм
FRA
1821-1880
MY: 0/1
MX: 1302'><div class=area style='position:absolute; width:26px; height:20px; left:1336px; top:900px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1302&a_id=740&y=1821' title='Гюстав Флобер
Писатель
Реализм, Романтизм, 
История, Рассказ, Фэнтези, Эстетизм
FRA
1821-1880
MY: 0/1
MX: 1302'><div class=area style='position:absolute; width:26px; height:20px; left:1362px; top:900px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=76&a_id=1167&y=1821' title='Шарль Бодлер
Поэт
Декаданс, Поэзия, 
Готика, Импрессионизм, Либертинаж, Модернизм, Романтизм, Символизм, Эротика
FRA
1821-1867
MY: 0/1
MX: 76'><div class=area style='position:absolute; width:25px; height:20px; left:110px; top:857px'></div></a>
<a target=_blank href='build-rlmap.php?mp=76&a_id=1167&y=1821' title='Шарль Бодлер
Поэт
Декаданс, Поэзия, 
Готика, Импрессионизм, Либертинаж, Модернизм, Романтизм, Символизм, Эротика
FRA
1821-1867
MY: 0/1
MX: 76'><div class=area style='position:absolute; width:25px; height:20px; left:135px; top:857px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2056&a_id=208&y=1822' title='Д. В. Григорович
Писатель
Детская, Для подростков, Реализм, 
Рассказ
RUS
1822-1900
MY: 0/0
MX: 2056'><div class=area style='position:absolute; width:32px; height:20px; left:2090px; top:956px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2056&a_id=208&y=1822' title='Д. В. Григорович
Писатель
Детская, Для подростков, Реализм, 
Рассказ
RUS
1822-1900
MY: 0/0
MX: 2056'><div class=area style='position:absolute; width:31px; height:20px; left:2122px; top:956px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=535&y=1823' title='А. Н. Островский
Драматург
Драматургия, Комедия, 
Детская, Трагедия
RUS
1823-1886
MY: 0/-1
MX: 2209'><div class=area style='position:absolute; width:35px; height:20px; left:2243px; top:913px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2209&a_id=535&y=1823' title='А. Н. Островский
Драматург
Драматургия, Комедия, 
Детская, Трагедия
RUS
1823-1886
MY: 0/-1
MX: 2209'><div class=area style='position:absolute; width:35px; height:20px; left:2278px; top:913px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=667&a_id=351&y=1824' title='Уилки Коллинз
Писатель
Детектив, 
Готика, Драматургия
BRI
1824-1889
MY: 0/0
MX: 667'><div class=area style='position:absolute; width:32px; height:20px; left:701px; top:931px'></div></a>
<a target=_blank href='build-rlmap.php?mp=667&a_id=351&y=1824' title='Уилки Коллинз
Писатель
Детектив, 
Готика, Драматургия
BRI
1824-1889
MY: 0/0
MX: 667'><div class=area style='position:absolute; width:32px; height:20px; left:733px; top:931px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1219&a_id=1118&y=1824' title='Александр Дюма (сын)
Драматург
История, Романтизм, 
Драматургия
FRA
1824-1895
MY: 0/0
MX: 1219'><div class=area style='position:absolute; width:34px; height:20px; left:1253px; top:950px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1219&a_id=1118&y=1824' title='Александр Дюма (сын)
Драматург
История, Романтизм, 
Драматургия
FRA
1824-1895
MY: 0/0
MX: 1219'><div class=area style='position:absolute; width:33px; height:20px; left:1287px; top:950px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1067&a_id=194&y=1825' title='Эдмон и Жюль Гонкур

Натурализм, 
Импрессионизм
FRA
1825-
MY: 0/0
MX: 1067'><div class=area style='position:absolute; width:23px; height:20px; left:1101px; top:857px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1067&a_id=194&y=1825' title='Эдмон и Жюль Гонкур

Натурализм, 
Импрессионизм
FRA
1825-
MY: 0/0
MX: 1067'><div class=area style='position:absolute; width:22px; height:20px; left:1124px; top:857px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=620&y=1826' title='М. Е. Салтыков-Щедрин
Писатель
Сатира, 
Абсурд, Реализм
RUS
1826-1889
MY: 0/0
MX: 2209'><div class=area style='position:absolute; width:36px; height:20px; left:2243px; top:937px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2209&a_id=620&y=1826' title='М. Е. Салтыков-Щедрин
Писатель
Сатира, 
Абсурд, Реализм
RUS
1826-1889
MY: 0/0
MX: 2209'><div class=area style='position:absolute; width:35px; height:20px; left:2279px; top:937px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1219&a_id=361&y=1827' title='Шарль де Костер
Писатель
История
BEL
1827-1879
MY: 0/0
MX: 1219'><div class=area style='position:absolute; width:24px; height:20px; left:1253px; top:906px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1219&a_id=361&y=1827' title='Шарль де Костер
Писатель
История
BEL
1827-1879
MY: 0/0
MX: 1219'><div class=area style='position:absolute; width:23px; height:20px; left:1277px; top:906px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1219&a_id=719&y=1827' title='Лью Уоллес
Политический деятель
История
USA
1827-1905
MY: 0/-1
MX: 1219'><div class=area style='position:absolute; width:26px; height:20px; left:1253px; top:980px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1219&a_id=719&y=1827' title='Лью Уоллес
Политический деятель
История
USA
1827-1905
MY: 0/-1
MX: 1219'><div class=area style='position:absolute; width:25px; height:20px; left:1279px; top:980px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1146&a_id=134&y=1828' title='Жюль Верн
Писатель
Приключения, Фантастика, 
Твердая научная фантастика
FRA
1828-1905
MY: 0/0
MX: 1146'><div class=area style='position:absolute; width:19px; height:20px; left:1180px; top:993px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1146&a_id=134&y=1828' title='Жюль Верн
Писатель
Приключения, Фантастика, 
Твердая научная фантастика
FRA
1828-1905
MY: 0/0
MX: 1146'><div class=area style='position:absolute; width:19px; height:20px; left:1199px; top:993px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1067&a_id=286&y=1828' title='Генрик Ибсен
Драматург
Натурализм, Новая драма, Реализм, Символизм, 
Драматургия, Сарказм
NOR
1828-1906
MY: 0/-3
MX: 1067'><div class=area style='position:absolute; width:22px; height:20px; left:1101px; top:974px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1067&a_id=286&y=1828' title='Генрик Ибсен
Драматург
Натурализм, Новая драма, Реализм, Символизм, 
Драматургия, Сарказм
NOR
1828-1906
MY: 0/-3
MX: 1067'><div class=area style='position:absolute; width:22px; height:20px; left:1123px; top:974px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=699&y=1828' title='Л. Н. Толстой
Писатель
Реализм, Философия, 
Анархизм, Религия
RUS
1828-1910
MY: 0/-5
MX: 1302'><div class=area style='position:absolute; width:37px; height:20px; left:1336px; top:974px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1302&a_id=699&y=1828' title='Л. Н. Толстой
Писатель
Реализм, Философия, 
Анархизм, Религия
RUS
1828-1910
MY: 0/-5
MX: 1302'><div class=area style='position:absolute; width:36px; height:20px; left:1373px; top:974px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1468&a_id=787&y=1828' title='Н. Г. Чернышевский
Философ
Реализм, Философия
RUS
1828-1889
MY: 0/2
MX: 1468'><div class=area style='position:absolute; width:29px; height:20px; left:1502px; top:956px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1468&a_id=787&y=1828' title='Н. Г. Чернышевский
Философ
Реализм, Философия
RUS
1828-1889
MY: 0/2
MX: 1468'><div class=area style='position:absolute; width:28px; height:20px; left:1531px; top:956px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2056&a_id=433&y=1830' title='Гектор Мало

Детская, Для подростков, 
Приключения
FRA
1830-1907
MY: 0/0
MX: 2056'><div class=area style='position:absolute; width:20px; height:20px; left:2090px; top:1005px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2056&a_id=433&y=1830' title='Гектор Мало

Детская, Для подростков, 
Приключения
FRA
1830-1907
MY: 0/0
MX: 2056'><div class=area style='position:absolute; width:19px; height:20px; left:2110px; top:1005px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=396&y=1831' title='Николай Лесков
Писатель
Реализм, 
История, Сатира
RUS
1831-1895
MY: 0/-3
MX: 1302'><div class=area style='position:absolute; width:27px; height:20px; left:1336px; top:950px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1302&a_id=396&y=1831' title='Николай Лесков
Писатель
Реализм, 
История, Сатира
RUS
1831-1895
MY: 0/-3
MX: 1302'><div class=area style='position:absolute; width:26px; height:20px; left:1363px; top:950px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2361&a_id=375&y=1832' title='Льюис Кэрролл
Писатель
Абсурд, 
Детская, Неоромантизм, Приключения, Философия
BRI
1832-1898
MY: 0/0
MX: 2361'><div class=area style='position:absolute; width:31px; height:20px; left:2395px; top:980px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2361&a_id=375&y=1832' title='Льюис Кэрролл
Писатель
Абсурд, 
Детская, Неоромантизм, Приключения, Философия
BRI
1832-1898
MY: 0/0
MX: 2361'><div class=area style='position:absolute; width:31px; height:20px; left:2426px; top:980px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=567&y=1835' title='Николай Помяловский
Писатель
Реализм
RUS
1835-1863
MY: 0/-13
MX: 1302'><div class=area style='position:absolute; width:37px; height:20px; left:1336px; top:802px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1302&a_id=567&y=1835' title='Николай Помяловский
Писатель
Реализм
RUS
1835-1863
MY: 0/-13
MX: 1302'><div class=area style='position:absolute; width:37px; height:20px; left:1373px; top:802px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1146&a_id=684&y=1835' title='Марк Твен
Писатель
Приключения, Реализм, 
Гуманизм, Демократия, Критический реализм, Сатира, Фантастика, Юмор
USA
1835-1910
MY: 0/2
MX: 1146'><div class=area style='position:absolute; width:19px; height:20px; left:1180px; top:1042px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1146&a_id=684&y=1835' title='Марк Твен
Писатель
Приключения, Реализм, 
Гуманизм, Демократия, Критический реализм, Сатира, Фантастика, Юмор
USA
1835-1910
MY: 0/2
MX: 1146'><div class=area style='position:absolute; width:19px; height:20px; left:1199px; top:1042px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=83&y=1836' title='П. Д. Боборыкин
Писатель
Реализм, 
Драматургия, История
RUS
1836-1921
MY: 0/-3
MX: 1302'><div class=area style='position:absolute; width:36px; height:20px; left:1336px; top:1048px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1302&a_id=83&y=1836' title='П. Д. Боборыкин
Писатель
Реализм, 
Драматургия, История
RUS
1836-1921
MY: 0/-3
MX: 1302'><div class=area style='position:absolute; width:35px; height:20px; left:1372px; top:1048px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=166&y=1836' title='Брет Гарт
Поэт-песенник
Реализм, 
Вестерн, Поэзия, Приключения
USA
1836-1902
MY: 0/-1
MX: 1302'><div class=area style='position:absolute; width:17px; height:20px; left:1336px; top:999px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1302&a_id=166&y=1836' title='Брет Гарт
Поэт-песенник
Реализм, 
Вестерн, Поэзия, Приключения
USA
1836-1902
MY: 0/-1
MX: 1302'><div class=area style='position:absolute; width:17px; height:20px; left:1353px; top:999px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2289&a_id=278&y=1836' title='Л. фон Захер-Мазох
Писатель
Эротика, 
Мазохизм
DEU
1836-1895
MY: 0/0
MX: 2289'><div class=area style='position:absolute; width:29px; height:20px; left:2323px; top:987px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2289&a_id=278&y=1836' title='Л. фон Захер-Мазох
Писатель
Эротика, 
Мазохизм
DEU
1836-1895
MY: 0/0
MX: 2289'><div class=area style='position:absolute; width:29px; height:20px; left:2352px; top:987px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1219&a_id=237&y=1838' title='Рафаэлло Джованьоли

История, Романтизм
ITA
1838-1915
MY: 0/0
MX: 1219'><div class=area style='position:absolute; width:34px; height:20px; left:1253px; top:1054px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1219&a_id=237&y=1838' title='Рафаэлло Джованьоли

История, Романтизм
ITA
1838-1915
MY: 0/0
MX: 1219'><div class=area style='position:absolute; width:34px; height:20px; left:1287px; top:1054px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=161&y=1840' title='Томас Гарди
Писатель
Реализм, 
Агностицизм, О войне, Пессимизм
BRI
1840-1928
MY: 0/4
MX: 1302'><div class=area style='position:absolute; width:21px; height:20px; left:1336px; top:1122px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1302&a_id=161&y=1840' title='Томас Гарди
Писатель
Реализм, 
Агностицизм, О войне, Пессимизм
BRI
1840-1928
MY: 0/4
MX: 1302'><div class=area style='position:absolute; width:21px; height:20px; left:1357px; top:1122px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1067&a_id=246&y=1840' title='Альфонс Доде
Романист
Натурализм, 
Драматургия
FRA
1840-1897
MY: 0/-1
MX: 1067'><div class=area style='position:absolute; width:19px; height:20px; left:1101px; top:999px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1067&a_id=246&y=1840' title='Альфонс Доде
Романист
Натурализм, 
Драматургия
FRA
1840-1897
MY: 0/-1
MX: 1067'><div class=area style='position:absolute; width:19px; height:20px; left:1120px; top:999px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1067&a_id=282&y=1840' title='Эмиль Золя
Писатель
Натурализм, 
Драматургия, Импрессионизм, Публицистика, Реализм
FRA
1840-1902
MY: 0/1
MX: 1067'><div class=area style='position:absolute; width:18px; height:20px; left:1101px; top:1024px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1067&a_id=282&y=1840' title='Эмиль Золя
Писатель
Натурализм, 
Драматургия, Импрессионизм, Публицистика, Реализм
FRA
1840-1902
MY: 0/1
MX: 1067'><div class=area style='position:absolute; width:18px; height:20px; left:1119px; top:1024px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1219&a_id=366&y=1840' title='Всеволод Крестовский

История, 
Детектив, Публицистика
RUS
1840-1895
MY: 0/1
MX: 1219'><div class=area style='position:absolute; width:35px; height:20px; left:1253px; top:1005px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1219&a_id=366&y=1840' title='Всеволод Крестовский

История, 
Детектив, Публицистика
RUS
1840-1895
MY: 0/1
MX: 1219'><div class=area style='position:absolute; width:34px; height:20px; left:1288px; top:1005px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=153&a_id=234&y=1843' title='Генри Джеймс
Писатель
Импрессионизм, 
Готика, Предмодернизм, Реализм, Социальный реализм
USA
1843-1916
MY: 0/0
MX: 153'><div class=area style='position:absolute; width:31px; height:20px; left:187px; top:1073px'></div></a>
<a target=_blank href='build-rlmap.php?mp=153&a_id=234&y=1843' title='Генри Джеймс
Писатель
Импрессионизм, 
Готика, Предмодернизм, Реализм, Социальный реализм
USA
1843-1916
MY: 0/0
MX: 153'><div class=area style='position:absolute; width:31px; height:20px; left:218px; top:1073px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=660&y=1843' title='К. Станюкович
Писатель
Море, Реализм
RUS
1843-1903
MY: 0/-1
MX: 1302'><div class=area style='position:absolute; width:38px; height:20px; left:1336px; top:1024px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1302&a_id=660&y=1843' title='К. Станюкович
Писатель
Море, Реализм
RUS
1843-1903
MY: 0/-1
MX: 1302'><div class=area style='position:absolute; width:38px; height:20px; left:1374px; top:1024px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1468&a_id=510&y=1844' title='Фридрих Ницше
Филолог
Философия, 
Экзистенциализм
DEU
1844-1900
MY: 0/0
MX: 1468'><div class=area style='position:absolute; width:24px; height:20px; left:1502px; top:1024px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1468&a_id=510&y=1844' title='Фридрих Ницше
Филолог
Философия, 
Экзистенциализм
DEU
1844-1900
MY: 0/0
MX: 1468'><div class=area style='position:absolute; width:23px; height:20px; left:1526px; top:1024px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1219&a_id=633&y=1846' title='Генрик Сенкевич
Писатель
История, 
Беллетристика, О войне, О любви
POL
1846-1916
MY: 0/0
MX: 1219'><div class=area style='position:absolute; width:31px; height:20px; left:1253px; top:1079px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1219&a_id=633&y=1846' title='Генрик Сенкевич
Писатель
История, 
Беллетристика, О войне, О любви
POL
1846-1916
MY: 0/0
MX: 1219'><div class=area style='position:absolute; width:31px; height:20px; left:1284px; top:1079px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1146&a_id=110&y=1847' title='Луи Буссенар
Писатель
Приключения
FRA
1847-1910
MY: 0/0
MX: 1146'><div class=area style='position:absolute; width:31px; height:20px; left:1180px; top:1067px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1146&a_id=110&y=1847' title='Луи Буссенар
Писатель
Приключения
FRA
1847-1910
MY: 0/0
MX: 1146'><div class=area style='position:absolute; width:31px; height:20px; left:1211px; top:1067px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1766&a_id=1092&y=1847' title='Брэм Стокер
Романист
Готика, Хоррор, 
Приключения, Фантастика
BRI
1847-1912
MY: 0/0
MX: 1766'><div class=area style='position:absolute; width:24px; height:20px; left:1800px; top:1073px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1766&a_id=1092&y=1847' title='Брэм Стокер
Романист
Готика, Хоррор, 
Приключения, Фантастика
BRI
1847-1912
MY: 0/0
MX: 1766'><div class=area style='position:absolute; width:23px; height:20px; left:1824px; top:1073px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=76&a_id=219&y=1848' title='Жорис-Карл Гюисманс
Писатель
Декаданс, Натурализм, 
Мистицизм, Религия, Символизм
FRA
1848-1907
MY: 0/2
MX: 76'><div class=area style='position:absolute; width:33px; height:20px; left:110px; top:1073px'></div></a>
<a target=_blank href='build-rlmap.php?mp=76&a_id=219&y=1848' title='Жорис-Карл Гюисманс
Писатель
Декаданс, Натурализм, 
Мистицизм, Религия, Символизм
FRA
1848-1907
MY: 0/2
MX: 76'><div class=area style='position:absolute; width:33px; height:20px; left:143px; top:1073px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1067&a_id=669&y=1849' title='Август Стриндберг
Писатель
Натурализм, Новая драма, 
Драматургия, Сюрреализм, Экспрессионизм
SWE
1849-1912
MY: 0/0
MX: 1067'><div class=area style='position:absolute; width:34px; height:20px; left:1101px; top:1079px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1067&a_id=669&y=1849' title='Август Стриндберг
Писатель
Натурализм, Новая драма, 
Драматургия, Сюрреализм, Экспрессионизм
SWE
1849-1912
MY: 0/0
MX: 1067'><div class=area style='position:absolute; width:33px; height:20px; left:1135px; top:1079px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2134&a_id=1115&y=1849' title='Фрэнсис Элиза Бёрнетт
Писательница
Детская
BRI
1849-1924
MY: 0/-1
MX: 2134'><div class=area style='position:absolute; width:27px; height:20px; left:2168px; top:1110px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2134&a_id=1115&y=1849' title='Фрэнсис Элиза Бёрнетт
Писательница
Детская
BRI
1849-1924
MY: 0/-1
MX: 2134'><div class=area style='position:absolute; width:27px; height:20px; left:2195px; top:1110px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1067&a_id=477&y=1850' title='Ги де Мопассан
Новеллист
Натурализм, 
О любви, Эротика
FRA
1850-1893
MY: 0/4
MX: 1067'><div class=area style='position:absolute; width:34px; height:20px; left:1101px; top:1048px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1067&a_id=477&y=1850' title='Ги де Мопассан
Новеллист
Натурализм, 
О любви, Эротика
FRA
1850-1893
MY: 0/4
MX: 1067'><div class=area style='position:absolute; width:33px; height:20px; left:1135px; top:1048px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1146&a_id=664&y=1850' title='Р. Л. Стивенсон
Писатель
Неоромантизм, Приключения, 
Детская, История, Фантастика, Хоррор
BRI
1850-1894
MY: 0/-1
MX: 1146'><div class=area style='position:absolute; width:31px; height:20px; left:1180px; top:1017px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1146&a_id=664&y=1850' title='Р. Л. Стивенсон
Писатель
Неоромантизм, Приключения, 
Детская, История, Фантастика, Хоррор
BRI
1850-1894
MY: 0/-1
MX: 1146'><div class=area style='position:absolute; width:31px; height:20px; left:1211px; top:1017px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=1136&y=1850' title='Козьма Прутков

Сатира, 
Басня, Пародия, Юмор
RUS
1850-1870
MY: 0/2
MX: 2209'><div class=area style='position:absolute; width:26px; height:20px; left:2243px; top:962px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2209&a_id=1136&y=1850' title='Козьма Прутков

Сатира, 
Басня, Пародия, Юмор
RUS
1850-1870
MY: 0/2
MX: 2209'><div class=area style='position:absolute; width:26px; height:20px; left:2269px; top:962px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=295&y=1851' title='Алоис Йирасек
Писатель
Реализм, 
Драматургия, История
CZE
1851-1930
MY: 0/9
MX: 1302'><div class=area style='position:absolute; width:29px; height:20px; left:1336px; top:1196px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1302&a_id=295&y=1851' title='Алоис Йирасек
Писатель
Реализм, 
Драматургия, История
CZE
1851-1930
MY: 0/9
MX: 1302'><div class=area style='position:absolute; width:28px; height:20px; left:1365px; top:1196px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=164&y=1852' title='Н. Г. Гарин-Михайловский
Писатель
Реализм, 
Сказка
RUS
1852-1906
MY: 0/1
MX: 1302'><div class=area style='position:absolute; width:29px; height:20px; left:1336px; top:1073px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1302&a_id=164&y=1852' title='Н. Г. Гарин-Михайловский
Писатель
Реализм, 
Сказка
RUS
1852-1906
MY: 0/1
MX: 1302'><div class=area style='position:absolute; width:28px; height:20px; left:1365px; top:1073px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=435&y=1852' title='Д. Н. Мамин-Сибиряк

Реализм, 
Детская, Путешествия
RUS
1852-1912
MY: 0/2
MX: 1302'><div class=area style='position:absolute; width:30px; height:20px; left:1336px; top:1097px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1302&a_id=435&y=1852' title='Д. Н. Мамин-Сибиряк

Реализм, 
Детская, Путешествия
RUS
1852-1912
MY: 0/2
MX: 1302'><div class=area style='position:absolute; width:30px; height:20px; left:1366px; top:1097px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=359&y=1853' title='Владимир Короленко
Журналист
Нон-конформизм, Реализм, 
Народничество, Психология, Публицистика, Революционер, Социализм, Философия
RUS
1853-1921
MY: 0/9
MX: 1302'><div class=area style='position:absolute; width:34px; height:20px; left:1336px; top:1171px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1302&a_id=359&y=1853' title='Владимир Короленко
Журналист
Нон-конформизм, Реализм, 
Народничество, Психология, Публицистика, Революционер, Социализм, Философия
RUS
1853-1921
MY: 0/9
MX: 1302'><div class=area style='position:absolute; width:34px; height:20px; left:1370px; top:1171px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=76&a_id=714&y=1854' title='Оскар Уайльд
Писатель
Декаданс, 
Анархизм, Готика, Импрессионизм, Эстетизм
BRI
1854-1900
MY: 0/-1
MX: 76'><div class=area style='position:absolute; width:28px; height:20px; left:110px; top:1048px'></div></a>
<a target=_blank href='build-rlmap.php?mp=76&a_id=714&y=1854' title='Оскар Уайльд
Писатель
Декаданс, 
Анархизм, Готика, Импрессионизм, Эстетизм
BRI
1854-1900
MY: 0/-1
MX: 76'><div class=area style='position:absolute; width:28px; height:20px; left:138px; top:1048px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1219&a_id=1037&y=1855' title='Владимир Гиляровский
Писатель
История, Реализм, 
Беллетристика
RUS
1855-1935
MY: 0/-8
MX: 1219'><div class=area style='position:absolute; width:36px; height:20px; left:1253px; top:1116px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1219&a_id=1037&y=1855' title='Владимир Гиляровский
Писатель
История, Реализм, 
Беллетристика
RUS
1855-1935
MY: 0/-8
MX: 1219'><div class=area style='position:absolute; width:35px; height:20px; left:1289px; top:1116px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2134&a_id=55&y=1856' title='Лаймен Фрэнк Баум
Писатель
Детская
USA
1856-1919
MY: 0/2
MX: 2134'><div class=area style='position:absolute; width:18px; height:20px; left:2168px; top:1134px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2134&a_id=55&y=1856' title='Лаймен Фрэнк Баум
Писатель
Детская
USA
1856-1919
MY: 0/2
MX: 2134'><div class=area style='position:absolute; width:17px; height:20px; left:2186px; top:1134px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=747&y=1856' title='И. Я. Франко
Писатель
Реализм, 
История, Революционер, Социализм
UKR
1856-1916
MY: 0/6
MX: 1302'><div class=area style='position:absolute; width:25px; height:20px; left:1336px; top:1147px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1302&a_id=747&y=1856' title='И. Я. Франко
Писатель
Реализм, 
История, Революционер, Социализм
UKR
1856-1916
MY: 0/6
MX: 1302'><div class=area style='position:absolute; width:25px; height:20px; left:1361px; top:1147px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1395&a_id=749&y=1856' title='Зигмунд Фрейд
Психоаналитик
Психология
DEU
1856-1939
MY: 0/0
MX: 1395'><div class=area style='position:absolute; width:23px; height:20px; left:1429px; top:1184px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1395&a_id=749&y=1856' title='Зигмунд Фрейд
Психоаналитик
Психология
DEU
1856-1939
MY: 0/0
MX: 1395'><div class=area style='position:absolute; width:23px; height:20px; left:1452px; top:1184px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=818&y=1856' title='Бернард Шоу
Драматург
Драматургия, Реализм, 
Мистицизм, Модернизм, Социализм
BRI
1856-1950
MY: 0/9
MX: 1302'><div class=area style='position:absolute; width:21px; height:20px; left:1336px; top:1270px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1302&a_id=818&y=1856' title='Бернард Шоу
Драматург
Драматургия, Реализм, 
Мистицизм, Модернизм, Социализм
BRI
1856-1950
MY: 0/9
MX: 1302'><div class=area style='position:absolute; width:21px; height:20px; left:1357px; top:1270px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1146&a_id=1152&y=1856' title='Генри Райдер Хаггард
Писатель
Приключения, 
Басня, История, Фантастика
BRI
1856-1925
MY: 0/-2
MX: 1146'><div class=area style='position:absolute; width:27px; height:20px; left:1180px; top:1128px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1146&a_id=1152&y=1856' title='Генри Райдер Хаггард
Писатель
Приключения, 
Басня, История, Фантастика
BRI
1856-1925
MY: 0/-2
MX: 1146'><div class=area style='position:absolute; width:26px; height:20px; left:1207px; top:1128px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1622&a_id=1074&y=1856' title='Жозеф Анри Рони-старший

Фантастика, 
Приключения, Фэнтези
FRA
1856-1940
MY: 0/0
MX: 1622'><div class=area style='position:absolute; width:18px; height:20px; left:1656px; top:1184px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1622&a_id=1074&y=1856' title='Жозеф Анри Рони-старший

Фантастика, 
Приключения, Фэнтези
FRA
1856-1940
MY: 0/0
MX: 1622'><div class=area style='position:absolute; width:18px; height:20px; left:1674px; top:1184px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1146&a_id=356&y=1857' title='Джозеф Конрад
Писатель
Приключения, 
Модернизм, Море, Реализм
BRI
1857-1924
MY: 0/2
MX: 1146'><div class=area style='position:absolute; width:25px; height:20px; left:1180px; top:1153px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1146&a_id=356&y=1857' title='Джозеф Конрад
Писатель
Приключения, 
Модернизм, Море, Реализм
BRI
1857-1924
MY: 0/2
MX: 1146'><div class=area style='position:absolute; width:25px; height:20px; left:1205px; top:1153px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=-2&a_id=1203&y=1857' title='Герман Зудерман
Драматург
Автобиография, Беллетристика, Драматургия
DEU
1857-1928
MY: 0/0
MX: -2'><div class=area style='position:absolute; width:32px; height:20px; left:32px; top:1153px'></div></a>
<a target=_blank href='build-rlmap.php?mp=-2&a_id=1203&y=1857' title='Герман Зудерман
Драматург
Автобиография, Беллетристика, Драматургия
DEU
1857-1928
MY: 0/0
MX: -2'><div class=area style='position:absolute; width:31px; height:20px; left:64px; top:1153px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1903&a_id=378&y=1858' title='Сельма Лагерлёф
Писательница
Детская, 
История, Фантастика
SWE
1858-1940
MY: 0/-2
MX: 1903'><div class=area style='position:absolute; width:26px; height:20px; left:1937px; top:1178px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1903&a_id=378&y=1858' title='Сельма Лагерлёф
Писательница
Детская, 
История, Фантастика
SWE
1858-1940
MY: 0/-2
MX: 1903'><div class=area style='position:absolute; width:26px; height:20px; left:1963px; top:1178px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2432&a_id=158&y=1859' title='Кнут Гамсун
Писатель
Модернизм, 
Антикоммунизм, Неореализм, Неоромантизм
NOR
1859-1952
MY: 0/-22
MX: 2432'><div class=area style='position:absolute; width:24px; height:20px; left:2466px; top:1097px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2432&a_id=158&y=1859' title='Кнут Гамсун
Писатель
Модернизм, 
Антикоммунизм, Неореализм, Неоромантизм
NOR
1859-1952
MY: 0/-22
MX: 2432'><div class=area style='position:absolute; width:24px; height:20px; left:2490px; top:1097px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=236&y=1859' title='Джером К. Джером
Писатель
Юмор, 
Сатира
BRI
1859-1927
MY: 0/-1
MX: 2209'><div class=area style='position:absolute; width:27px; height:20px; left:2243px; top:1147px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2209&a_id=236&y=1859' title='Джером К. Джером
Писатель
Юмор, 
Сатира
BRI
1859-1927
MY: 0/-1
MX: 2209'><div class=area style='position:absolute; width:26px; height:20px; left:2270px; top:1147px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=667&a_id=247&y=1859' title='Артур Конан Дойл
Писатель
Детектив, 
История, Фантастика
BRI
1859-1930
MY: 0/-1
MX: 667'><div class=area style='position:absolute; width:21px; height:20px; left:701px; top:1159px'></div></a>
<a target=_blank href='build-rlmap.php?mp=667&a_id=247&y=1859' title='Артур Конан Дойл
Писатель
Детектив, 
История, Фантастика
BRI
1859-1930
MY: 0/-1
MX: 667'><div class=area style='position:absolute; width:20px; height:20px; left:722px; top:1159px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2134&a_id=1172&y=1859' title='Кеннет Грэм
Писатель
Детская, 
Сказка
BRI
1859-1932
MY: 0/0
MX: 2134'><div class=area style='position:absolute; width:18px; height:20px; left:2168px; top:1171px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2134&a_id=1172&y=1859' title='Кеннет Грэм
Писатель
Детская, 
Сказка
BRI
1859-1932
MY: 0/0
MX: 2134'><div class=area style='position:absolute; width:17px; height:20px; left:2186px; top:1171px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1903&a_id=54&y=1860' title='Джеймс Барри
Драматург
Детская, 
Сказка, Фантастика
BRI
1860-1937
MY: 0/2
MX: 1903'><div class=area style='position:absolute; width:22px; height:20px; left:1937px; top:1202px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1903&a_id=54&y=1860' title='Джеймс Барри
Драматург
Детская, 
Сказка, Фантастика
BRI
1860-1937
MY: 0/2
MX: 1903'><div class=area style='position:absolute; width:21px; height:20px; left:1959px; top:1202px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2432&a_id=789&y=1860' title='Антон Павлович Чехов
Писатель
Модернизм, Новая драма, Реализм, 
Беллетристика, Критический реализм
RUS
1860-1904
MY: 0/-18
MX: 2432'><div class=area style='position:absolute; width:23px; height:20px; left:2466px; top:974px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2432&a_id=789&y=1860' title='Антон Павлович Чехов
Писатель
Модернизм, Новая драма, Реализм, 
Беллетристика, Критический реализм
RUS
1860-1904
MY: 0/-18
MX: 2432'><div class=area style='position:absolute; width:22px; height:20px; left:2489px; top:974px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=996&a_id=1048&y=1860' title='Эрнест Сетон-Томпсон
Писатель
О животных, 
Детская, Индейцы, Приключения
CAN
1860-1946
MY: 0/-2
MX: 996'><div class=area style='position:absolute; width:31px; height:20px; left:1030px; top:1202px'></div></a>
<a target=_blank href='build-rlmap.php?mp=996&a_id=1048&y=1860' title='Эрнест Сетон-Томпсон
Писатель
О животных, 
Детская, Индейцы, Приключения
CAN
1860-1946
MY: 0/-2
MX: 996'><div class=area style='position:absolute; width:30px; height:20px; left:1061px; top:1202px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2783&a_id=1195&y=1861' title='Рабиндранат Тагор
Писатель
Modernism, Бенгальское возрождение, Контекстуальный модернизм
IND
1861-1941
MY: 0/0
MX: 2783'><div class=area style='position:absolute; width:21px; height:20px; left:2817px; top:1202px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2783&a_id=1195&y=1861' title='Рабиндранат Тагор
Писатель
Modernism, Бенгальское возрождение, Контекстуальный модернизм
IND
1861-1941
MY: 0/0
MX: 2783'><div class=area style='position:absolute; width:20px; height:20px; left:2838px; top:1202px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1067&a_id=168&y=1862' title='Герхарт Гауптман
Драматург
Драматургия, Натурализм
DEU
1862-1946
MY: 0/1
MX: 1067'><div class=area style='position:absolute; width:30px; height:20px; left:1101px; top:1227px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1067&a_id=168&y=1862' title='Герхарт Гауптман
Драматург
Драматургия, Натурализм
DEU
1862-1946
MY: 0/1
MX: 1067'><div class=area style='position:absolute; width:30px; height:20px; left:1131px; top:1227px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=229&a_id=461&y=1862' title='Морис Метерлинк
Писатель
Новая драма, Символизм, 
Драматургия, Импрессионизм, Сказка, Философия
BEL
1862-1949
MY: 0/-2
MX: 229'><div class=area style='position:absolute; width:36px; height:20px; left:263px; top:1221px'></div></a>
<a target=_blank href='build-rlmap.php?mp=229&a_id=461&y=1862' title='Морис Метерлинк
Писатель
Новая драма, Символизм, 
Драматургия, Импрессионизм, Сказка, Философия
BEL
1862-1949
MY: 0/-2
MX: 229'><div class=area style='position:absolute; width:35px; height:20px; left:299px; top:1221px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2783&a_id=480&y=1862' title='Огай Мори
Писатель
Романтизм
JAP
1862-1922
MY: 0/-2
MX: 2783'><div class=area style='position:absolute; width:20px; height:20px; left:2817px; top:1134px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2783&a_id=480&y=1862' title='Огай Мори
Писатель
Романтизм
JAP
1862-1922
MY: 0/-2
MX: 2783'><div class=area style='position:absolute; width:19px; height:20px; left:2837px; top:1134px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=518&y=1862' title='О. Генри

Юмор, 
Вестерн
USA
1862-1910
MY: 0/0
MX: 2209'><div class=area style='position:absolute; width:22px; height:20px; left:2243px; top:1110px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2209&a_id=518&y=1862' title='О. Генри

Юмор, 
Вестерн
USA
1862-1910
MY: 0/0
MX: 2209'><div class=area style='position:absolute; width:22px; height:20px; left:2265px; top:1110px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=153&a_id=815&y=1862' title='Артур Шницлер
Писатель
Импрессионизм, 
Декаданс, Драматургия, Модернизм
DEU
1862-1931
MY: 0/-1
MX: 153'><div class=area style='position:absolute; width:30px; height:20px; left:187px; top:1171px'></div></a>
<a target=_blank href='build-rlmap.php?mp=153&a_id=815&y=1862' title='Артур Шницлер
Писатель
Импрессионизм, 
Декаданс, Драматургия, Модернизм
DEU
1862-1931
MY: 0/-1
MX: 153'><div class=area style='position:absolute; width:30px; height:20px; left:217px; top:1171px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=153&a_id=50&y=1863' title='Герман Бар
Писатель
Импрессионизм, 
Авангард, Драматургия
DEU
1863-1934
MY: 0/1
MX: 153'><div class=area style='position:absolute; width:15px; height:20px; left:187px; top:1196px'></div></a>
<a target=_blank href='build-rlmap.php?mp=153&a_id=50&y=1863' title='Герман Бар
Писатель
Импрессионизм, 
Авангард, Драматургия
DEU
1863-1934
MY: 0/1
MX: 153'><div class=area style='position:absolute; width:14px; height:20px; left:202px; top:1196px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=76&a_id=221&y=1863' title='Габриеле д`Аннунцио
Писатель
Декаданс, 
Деизм, Мартинизм, Национализм, Революционер, Символизм, Эстетизм
ITA
1863-1938
MY: 0/0
MX: 76'><div class=area style='position:absolute; width:31px; height:20px; left:110px; top:1202px'></div></a>
<a target=_blank href='build-rlmap.php?mp=76&a_id=221&y=1863' title='Габриеле д`Аннунцио
Писатель
Декаданс, 
Деизм, Мартинизм, Национализм, Революционер, Символизм, Эстетизм
ITA
1863-1938
MY: 0/0
MX: 76'><div class=area style='position:absolute; width:31px; height:20px; left:141px; top:1202px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=742&a_id=635&y=1863' title='А. Серафимович
Писатель
Соцреализм
RUS
1863-1949
MY: 0/-38
MX: 742'><div class=area style='position:absolute; width:41px; height:20px; left:776px; top:999px'></div></a>
<a target=_blank href='build-rlmap.php?mp=742&a_id=635&y=1863' title='А. Серафимович
Писатель
Соцреализм
RUS
1863-1949
MY: 0/-38
MX: 742'><div class=area style='position:absolute; width:40px; height:20px; left:817px; top:999px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=229&a_id=651&y=1863' title='Фёдор Сологуб
Писатель
Декаданс, Символизм, 
Драматургия
RUS
1863-1927
MY: 0/-7
MX: 229'><div class=area style='position:absolute; width:27px; height:20px; left:263px; top:1122px'></div></a>
<a target=_blank href='build-rlmap.php?mp=229&a_id=651&y=1863' title='Фёдор Сологуб
Писатель
Декаданс, Символизм, 
Драматургия
RUS
1863-1927
MY: 0/-7
MX: 229'><div class=area style='position:absolute; width:26px; height:20px; left:290px; top:1122px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1622&a_id=1043&y=1863' title='Владимир Обручев
Геолог
Фантастика, 
Приключения
RUS
1863-1956
MY: 0/-2
MX: 1622'><div class=area style='position:absolute; width:28px; height:20px; left:1656px; top:1245px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1622&a_id=1043&y=1863' title='Владимир Обручев
Геолог
Фантастика, 
Приключения
RUS
1863-1956
MY: 0/-2
MX: 1622'><div class=area style='position:absolute; width:28px; height:20px; left:1684px; top:1245px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1219&a_id=144&y=1864' title='Этель Лилиан Войнич
Писательница
История, 
Викторианская эпоха, О любви, Приключения, Революция
BRI
1864-1960
MY: 0/-5
MX: 1219'><div class=area style='position:absolute; width:25px; height:20px; left:1253px; top:1239px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1219&a_id=144&y=1864' title='Этель Лилиан Войнич
Писательница
История, 
Викторианская эпоха, О любви, Приключения, Революция
BRI
1864-1960
MY: 0/-5
MX: 1219'><div class=area style='position:absolute; width:24px; height:20px; left:1278px; top:1239px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=270&y=1864' title='Стефан Жеромский
Писатель
Реализм, 
История
POL
1864-1925
MY: 0/9
MX: 1302'><div class=area style='position:absolute; width:37px; height:20px; left:1336px; top:1221px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1302&a_id=270&y=1864' title='Стефан Жеромский
Писатель
Реализм, 
История
POL
1864-1925
MY: 0/9
MX: 1302'><div class=area style='position:absolute; width:37px; height:20px; left:1373px; top:1221px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1468&a_id=717&y=1864' title='Мигель де Унамуно
Философ
Философия, 
Драматургия, Платонизм, Позитивизм, Политика, Поэзия, Схоластика, Экзистенциализм
SPA
1864-1936
MY: 0/0
MX: 1468'><div class=area style='position:absolute; width:29px; height:20px; left:1502px; top:1196px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1468&a_id=717&y=1864' title='Мигель де Унамуно
Философ
Философия, 
Драматургия, Платонизм, Позитивизм, Политика, Поэзия, Схоластика, Экзистенциализм
SPA
1864-1936
MY: 0/0
MX: 1468'><div class=area style='position:absolute; width:28px; height:20px; left:1531px; top:1196px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1219&a_id=775&y=1864' title='Рикарда Хух
Писательница
История, Романтизм, 
Феминизм, Философия
DEU
1864-1947
MY: 0/-15
MX: 1219'><div class=area style='position:absolute; width:15px; height:20px; left:1253px; top:1141px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1219&a_id=775&y=1864' title='Рикарда Хух
Писательница
История, Романтизм, 
Феминизм, Философия
DEU
1864-1947
MY: 0/-15
MX: 1219'><div class=area style='position:absolute; width:14px; height:20px; left:1268px; top:1141px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2432&a_id=337&y=1865' title='Редьярд Киплинг
Писатель
Детская, Модернизм, Неоромантизм, 
История, Приключения
BRI
1865-1936
MY: 0/-29
MX: 2432'><div class=area style='position:absolute; width:27px; height:20px; left:2466px; top:1024px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2432&a_id=337&y=1865' title='Редьярд Киплинг
Писатель
Детская, Модернизм, Неоромантизм, 
История, Приключения
BRI
1865-1936
MY: 0/-29
MX: 2432'><div class=area style='position:absolute; width:27px; height:20px; left:2493px; top:1024px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=229&a_id=456&y=1865' title='Дмитрий Мережковский
Писатель
Декаданс, Символизм, 
Историософский роман, Религия, Философия
RUS
1865-1941
MY: 0/-3
MX: 229'><div class=area style='position:absolute; width:28px; height:20px; left:263px; top:1196px'></div></a>
<a target=_blank href='build-rlmap.php?mp=229&a_id=456&y=1865' title='Дмитрий Мережковский
Писатель
Декаданс, Символизм, 
Историософский роман, Религия, Философия
RUS
1865-1941
MY: 0/-3
MX: 229'><div class=area style='position:absolute; width:27px; height:20px; left:291px; top:1196px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2056&a_id=626&y=1865' title='А. И. Свирский
Писатель
Беллетристика, Детская, Для подростков
RUS
1865-1942
MY: 0/0
MX: 2056'><div class=area style='position:absolute; width:32px; height:20px; left:2090px; top:1221px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2056&a_id=626&y=1865' title='А. И. Свирский
Писатель
Беллетристика, Детская, Для подростков
RUS
1865-1942
MY: 0/0
MX: 2056'><div class=area style='position:absolute; width:31px; height:20px; left:2122px; top:1221px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=-2&a_id=65&y=1866' title='Х. Бенавенте-и-Мартинес

Драматургия
SPA
1866-1954
MY: 0/0
MX: -2'><div class=area style='position:absolute; width:30px; height:20px; left:32px; top:1258px'></div></a>
<a target=_blank href='build-rlmap.php?mp=-2&a_id=65&y=1866' title='Х. Бенавенте-и-Мартинес

Драматургия
SPA
1866-1954
MY: 0/0
MX: -2'><div class=area style='position:absolute; width:30px; height:20px; left:62px; top:1258px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1468&a_id=602&y=1866' title='Ромен Роллан
Писатель
Философия, 
История, Мистицизм, Пацифизм, Социализм
FRA
1866-1944
MY: 0/0
MX: 1468'><div class=area style='position:absolute; width:25px; height:20px; left:1502px; top:1227px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1468&a_id=602&y=1866' title='Ромен Роллан
Писатель
Философия, 
История, Мистицизм, Пацифизм, Социализм
FRA
1866-1944
MY: 0/0
MX: 1468'><div class=area style='position:absolute; width:25px; height:20px; left:1527px; top:1227px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1838&a_id=724&y=1866' title='Герберт Уэллс
Писатель
Твердая научная фантастика, 
История, Критический реализм, Философия
BRI
1866-1946
MY: 0/0
MX: 1838'><div class=area style='position:absolute; width:23px; height:20px; left:1872px; top:1233px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1838&a_id=724&y=1866' title='Герберт Уэллс
Писатель
Твердая научная фантастика, 
История, Критический реализм, Философия
BRI
1866-1946
MY: 0/0
MX: 1838'><div class=area style='position:absolute; width:23px; height:20px; left:1895px; top:1233px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=79&y=1867' title='В. Бласко Ибаньес
Писатель
Реализм, 
Демократия, История
SPA
1867-1928
MY: 0/10
MX: 1302'><div class=area style='position:absolute; width:29px; height:20px; left:1336px; top:1245px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1302&a_id=79&y=1867' title='В. Бласко Ибаньес
Писатель
Реализм, 
Демократия, История
SPA
1867-1928
MY: 0/10
MX: 1302'><div class=area style='position:absolute; width:28px; height:20px; left:1365px; top:1245px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=133&y=1867' title='Викентий Вересаев
Писатель
Реализм
RUS
1867-1945
MY: 0/10
MX: 1302'><div class=area style='position:absolute; width:32px; height:20px; left:1336px; top:1295px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1302&a_id=133&y=1867' title='Викентий Вересаев
Писатель
Реализм
RUS
1867-1945
MY: 0/10
MX: 1302'><div class=area style='position:absolute; width:32px; height:20px; left:1368px; top:1295px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2289&a_id=190&y=1867' title='Джон Голсуорси
Драматург
Драматургия, О любви
BRI
1867-1933
MY: 0/0
MX: 2289'><div class=area style='position:absolute; width:29px; height:20px; left:2323px; top:1196px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2289&a_id=190&y=1867' title='Джон Голсуорси
Драматург
Драматургия, О любви
BRI
1867-1933
MY: 0/0
MX: 2289'><div class=area style='position:absolute; width:28px; height:20px; left:2352px; top:1196px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2783&a_id=499&y=1867' title='Сосэки Нацумэ
Писатель

JAP
1867-1916
MY: 0/2
MX: 2783'><div class=area style='position:absolute; width:25px; height:20px; left:2817px; top:1159px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2783&a_id=499&y=1867' title='Сосэки Нацумэ
Писатель

JAP
1867-1916
MY: 0/2
MX: 2783'><div class=area style='position:absolute; width:24px; height:20px; left:2842px; top:1159px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2134&a_id=687&y=1867' title='Н. Д. Телешов
Писатель
Детская, 
Реализм, Сказка
RUS
1867-1957
MY: 0/-7
MX: 2134'><div class=area style='position:absolute; width:30px; height:20px; left:2168px; top:1227px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2134&a_id=687&y=1867' title='Н. Д. Телешов
Писатель
Детская, 
Реализм, Сказка
RUS
1867-1957
MY: 0/-7
MX: 2134'><div class=area style='position:absolute; width:30px; height:20px; left:2198px; top:1227px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=742&a_id=197&y=1868' title='Максим Горький
Писатель
Соцреализм, 
Модернизм, Поэзия, Романтизм
RUS
1868-1936
MY: 0/-38
MX: 742'><div class=area style='position:absolute; width:30px; height:20px; left:776px; top:974px'></div></a>
<a target=_blank href='build-rlmap.php?mp=742&a_id=197&y=1868' title='Максим Горький
Писатель
Соцреализм, 
Модернизм, Поэзия, Романтизм
RUS
1868-1936
MY: 0/-38
MX: 742'><div class=area style='position:absolute; width:30px; height:20px; left:806px; top:974px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=229&a_id=343&y=1868' title='Поль Клодель
Драматург
Символизм, 
Религия
FRA
1868-1955
MY: 0/0
MX: 229'><div class=area style='position:absolute; width:28px; height:20px; left:263px; top:1270px'></div></a>
<a target=_blank href='build-rlmap.php?mp=229&a_id=343&y=1868' title='Поль Клодель
Драматург
Символизм, 
Религия
FRA
1868-1955
MY: 0/0
MX: 229'><div class=area style='position:absolute; width:27px; height:20px; left:291px; top:1270px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2506&a_id=423&y=1868' title='Густав Майринк
Писатель
Экспрессионизм, 
Мистицизм
DEU
1868-1932
MY: 0/0
MX: 2506'><div class=area style='position:absolute; width:30px; height:20px; left:2540px; top:1196px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2506&a_id=423&y=1868' title='Густав Майринк
Писатель
Экспрессионизм, 
Мистицизм
DEU
1868-1932
MY: 0/0
MX: 2506'><div class=area style='position:absolute; width:29px; height:20px; left:2570px; top:1196px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=358&a_id=603&y=1868' title='Эдмон Ростан
Поэт
Неоромантизм, Поэзия
FRA
1868-1918
MY: 0/0
MX: 358'><div class=area style='position:absolute; width:24px; height:20px; left:392px; top:1153px'></div></a>
<a target=_blank href='build-rlmap.php?mp=358&a_id=603&y=1868' title='Эдмон Ростан
Поэт
Неоромантизм, Поэзия
FRA
1868-1918
MY: 0/0
MX: 358'><div class=area style='position:absolute; width:24px; height:20px; left:416px; top:1153px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2056&a_id=1071&y=1868' title='Элинор Портер
Писательница-романистка
Детская, Для подростков
USA
1868-1920
MY: 0/0
MX: 2056'><div class=area style='position:absolute; width:31px; height:20px; left:2090px; top:1159px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2056&a_id=1071&y=1868' title='Элинор Портер
Писательница-романистка
Детская, Для подростков
USA
1868-1920
MY: 0/0
MX: 2056'><div class=area style='position:absolute; width:30px; height:20px; left:2121px; top:1159px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=523&a_id=271&y=1869' title='Андре Жид
Писатель
Исповедь, 
Антиимпериализм, Антикоммунизм, Модернизм, Символизм, Социализм
FRA
1869-1951
MY: 0/0
MX: 523'><div class=area style='position:absolute; width:17px; height:20px; left:557px; top:1258px'></div></a>
<a target=_blank href='build-rlmap.php?mp=523&a_id=271&y=1869' title='Андре Жид
Писатель
Исповедь, 
Антиимпериализм, Антикоммунизм, Модернизм, Символизм, Социализм
FRA
1869-1951
MY: 0/0
MX: 523'><div class=area style='position:absolute; width:17px; height:20px; left:574px; top:1258px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=109&y=1870' title='И. А. Бунин
Писатель
Реализм, 
О любви, Романтизм
RUS
1870-1953
MY: 0/8
MX: 1302'><div class=area style='position:absolute; width:23px; height:20px; left:1336px; top:1319px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1302&a_id=109&y=1870' title='И. А. Бунин
Писатель
Реализм, 
О любви, Романтизм
RUS
1870-1953
MY: 0/8
MX: 1302'><div class=area style='position:absolute; width:22px; height:20px; left:1359px; top:1319px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1067&a_id=372&y=1870' title='А. И. Куприн

Натурализм, Реализм
RUS
1870-1938
MY: 0/5
MX: 1067'><div class=area style='position:absolute; width:26px; height:20px; left:1101px; top:1251px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1067&a_id=372&y=1870' title='А. И. Куприн

Натурализм, Реализм
RUS
1870-1938
MY: 0/5
MX: 1067'><div class=area style='position:absolute; width:26px; height:20px; left:1127px; top:1251px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1067&a_id=515&y=1870' title='Фрэнк Норрис
Писатель
Натурализм
USA
1870-1902
MY: 0/0
MX: 1067'><div class=area style='position:absolute; width:26px; height:20px; left:1101px; top:1110px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1067&a_id=515&y=1870' title='Фрэнк Норрис
Писатель
Натурализм
USA
1870-1902
MY: 0/0
MX: 1067'><div class=area style='position:absolute; width:25px; height:20px; left:1127px; top:1110px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2506&a_id=22&y=1871' title='Леонид Андреев
Писатель
Экспрессионизм, 
Модернизм, Натурализм, Реализм, Символизм, Фантастика, Хоррор
RUS
1871-1919
MY: 0/0
MX: 2506'><div class=area style='position:absolute; width:26px; height:20px; left:2540px; top:1165px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2506&a_id=22&y=1871' title='Леонид Андреев
Писатель
Экспрессионизм, 
Модернизм, Натурализм, Реализм, Символизм, Фантастика, Хоррор
RUS
1871-1919
MY: 0/0
MX: 2506'><div class=area style='position:absolute; width:25px; height:20px; left:2566px; top:1165px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=450&a_id=252&y=1871' title='Теодор Драйзер
Писатель
Критический реализм, Натурализм
USA
1871-1945
MY: 0/0
MX: 450'><div class=area style='position:absolute; width:31px; height:20px; left:484px; top:1245px'></div></a>
<a target=_blank href='build-rlmap.php?mp=450&a_id=252&y=1871' title='Теодор Драйзер
Писатель
Критический реализм, Натурализм
USA
1871-1945
MY: 0/0
MX: 450'><div class=area style='position:absolute; width:31px; height:20px; left:515px; top:1245px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1219&a_id=439&y=1871' title='Генрих Манн
Писатель
История, Общество, 
Антифашизм, Пацифизм
DEU
1871-1950
MY: 0/-8
MX: 1219'><div class=area style='position:absolute; width:25px; height:20px; left:1253px; top:1214px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1219&a_id=439&y=1871' title='Генрих Манн
Писатель
История, Общество, 
Антифашизм, Пацифизм
DEU
1871-1950
MY: 0/-8
MX: 1219'><div class=area style='position:absolute; width:24px; height:20px; left:1278px; top:1214px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2432&a_id=579&y=1871' title='Марсель Пруст
Писатель
Модернизм, 
Психология
FRA
1871-1922
MY: 0/-29
MX: 2432'><div class=area style='position:absolute; width:21px; height:20px; left:2466px; top:999px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2432&a_id=579&y=1871' title='Марсель Пруст
Писатель
Модернизм, 
Психология
FRA
1871-1922
MY: 0/-29
MX: 2432'><div class=area style='position:absolute; width:20px; height:20px; left:2487px; top:999px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1067&a_id=1081&y=1872' title='Владимир Арсеньев
Географ
Натурализм, Приключения, 
Путешествия
RUS
1872-1930
MY: 0/-4
MX: 1067'><div class=area style='position:absolute; width:32px; height:20px; left:1101px; top:1178px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1067&a_id=1081&y=1872' title='Владимир Арсеньев
Географ
Натурализм, Приключения, 
Путешествия
RUS
1872-1930
MY: 0/-4
MX: 1067'><div class=area style='position:absolute; width:31px; height:20px; left:1133px; top:1178px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=229&a_id=106&y=1873' title='Валерий Брюсов
Поэт
Символизм, 
История, Лирика, Поэзия, Фантастика
RUS
1873-1924
MY: 0/-7
MX: 229'><div class=area style='position:absolute; width:26px; height:20px; left:263px; top:1147px'></div></a>
<a target=_blank href='build-rlmap.php?mp=229&a_id=106&y=1873' title='Валерий Брюсов
Поэт
Символизм, 
История, Лирика, Поэзия, Фантастика
RUS
1873-1924
MY: 0/-7
MX: 229'><div class=area style='position:absolute; width:26px; height:20px; left:289px; top:1147px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1219&a_id=294&y=1873' title='Й. В. Йенсен
Писатель
История
DNK
1873-1950
MY: 0/-1
MX: 1219'><div class=area style='position:absolute; width:26px; height:20px; left:1253px; top:1264px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1219&a_id=294&y=1873' title='Й. В. Йенсен
Писатель
История
DNK
1873-1950
MY: 0/-1
MX: 1219'><div class=area style='position:absolute; width:25px; height:20px; left:1279px; top:1264px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2289&a_id=350&y=1873' title='С.-Г. Колетт
Писательница
О любви, 
История, Прекрасная эпоха
FRA
1873-1954
MY: 0/2
MX: 2289'><div class=area style='position:absolute; width:23px; height:20px; left:2323px; top:1295px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2289&a_id=350&y=1873' title='С.-Г. Колетт
Писательница
О любви, 
История, Прекрасная эпоха
FRA
1873-1954
MY: 0/2
MX: 2289'><div class=area style='position:absolute; width:23px; height:20px; left:2346px; top:1295px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=996&a_id=577&y=1873' title='Михаил Пришвин
Писатель
О природе, 
Детская, История, О животных, Публицистика, Философия
RUS
1873-1954
MY: 0/0
MX: 996'><div class=area style='position:absolute; width:30px; height:20px; left:1030px; top:1282px'></div></a>
<a target=_blank href='build-rlmap.php?mp=996&a_id=577&y=1873' title='Михаил Пришвин
Писатель
О природе, 
Детская, История, О животных, Публицистика, Философия
RUS
1873-1954
MY: 0/0
MX: 996'><div class=area style='position:absolute; width:30px; height:20px; left:1060px; top:1282px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=742&a_id=743&y=1873' title='Ольга Форш
Писательница
История, Соцреализм, 
Демократизм, Драматургия
RUS
1873-1961
MY: 0/-29
MX: 742'><div class=area style='position:absolute; width:21px; height:20px; left:776px; top:1122px'></div></a>
<a target=_blank href='build-rlmap.php?mp=742&a_id=743&y=1873' title='Ольга Форш
Писательница
История, Соцреализм, 
Демократизм, Драматургия
RUS
1873-1961
MY: 0/-29
MX: 742'><div class=area style='position:absolute; width:21px; height:20px; left:797px; top:1122px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1544&a_id=813&y=1873' title='Иван Шмелёв
Писатель
Духовный реализм, Религия, 
Консерватизм, Реализм
RUS
1873-1950
MY: 0/0
MX: 1544'><div class=area style='position:absolute; width:27px; height:20px; left:1578px; top:1270px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1544&a_id=813&y=1873' title='Иван Шмелёв
Писатель
Духовный реализм, Религия, 
Консерватизм, Реализм
RUS
1873-1950
MY: 0/0
MX: 1544'><div class=area style='position:absolute; width:27px; height:20px; left:1605px; top:1270px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=742&a_id=1072&y=1873' title='Вячеслав Шишков
Писатель
Соцреализм, 
История
RUS
1873-1945
MY: 0/-37
MX: 742'><div class=area style='position:absolute; width:27px; height:20px; left:776px; top:1024px'></div></a>
<a target=_blank href='build-rlmap.php?mp=742&a_id=1072&y=1873' title='Вячеслав Шишков
Писатель
Соцреализм, 
История
RUS
1873-1945
MY: 0/-37
MX: 742'><div class=area style='position:absolute; width:26px; height:20px; left:803px; top:1024px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1067&a_id=484&y=1874' title='Сомерсет Моэм
Писатель
Натурализм, 
Путешествия
BRI
1874-1965
MY: 0/-2
MX: 1067'><div class=area style='position:absolute; width:20px; height:20px; left:1101px; top:1307px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1067&a_id=484&y=1874' title='Сомерсет Моэм
Писатель
Натурализм, 
Путешествия
BRI
1874-1965
MY: 0/-2
MX: 1067'><div class=area style='position:absolute; width:19px; height:20px; left:1121px; top:1307px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1977&a_id=788&y=1874' title='Г. К. Честертон
Журналист
Фэнтези, 
Антиимпериализм, Деизм, Мистицизм, Публицистика, Религия, Сюрреализм
BRI
1874-1936
MY: 0/0
MX: 1977'><div class=area style='position:absolute; width:34px; height:20px; left:2011px; top:1227px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1977&a_id=788&y=1874' title='Г. К. Честертон
Журналист
Фэнтези, 
Антиимпериализм, Деизм, Мистицизм, Публицистика, Религия, Сюрреализм
BRI
1874-1936
MY: 0/0
MX: 1977'><div class=area style='position:absolute; width:33px; height:20px; left:2045px; top:1227px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1395&a_id=440&y=1875' title='Томас Манн
Писатель
Психология, 
Импрессионизм, Литература изгнания, Модернизм, Символизм, Философия
DEU
1875-1955
MY: 0/0
MX: 1395'><div class=area style='position:absolute; width:26px; height:20px; left:1429px; top:1288px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1395&a_id=440&y=1875' title='Томас Манн
Писатель
Психология, 
Импрессионизм, Литература изгнания, Модернизм, Символизм, Философия
DEU
1875-1955
MY: 0/0
MX: 1395'><div class=area style='position:absolute; width:25px; height:20px; left:1455px; top:1288px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2432&a_id=594&y=1875' title='Райнер Мария Рильке
Поэт
Модернизм, Поэзия, 
Лирика, Мистицизм, Религия, Экзистенциализм
DEU
1875-1926
MY: 0/-25
MX: 2432'><div class=area style='position:absolute; width:24px; height:20px; left:2466px; top:1048px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2432&a_id=594&y=1875' title='Райнер Мария Рильке
Поэт
Модернизм, Поэзия, 
Лирика, Мистицизм, Религия, Экзистенциализм
DEU
1875-1926
MY: 0/-25
MX: 2432'><div class=area style='position:absolute; width:24px; height:20px; left:2490px; top:1048px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1219&a_id=1155&y=1875' title='Сергей Сергеев-Ценский
Писатель
История, Модернизм, 
О войне, Публицистика
RUS
1875-1958
MY: 0/6
MX: 1219'><div class=area style='position:absolute; width:35px; height:20px; left:1253px; top:1338px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1219&a_id=1155&y=1875' title='Сергей Сергеев-Ценский
Писатель
История, Модернизм, 
О войне, Публицистика
RUS
1875-1958
MY: 0/6
MX: 1219'><div class=area style='position:absolute; width:34px; height:20px; left:1288px; top:1338px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=742&a_id=1079&y=1875' title='Василий Ян
Писатель
История, Соцреализм
RUS
1875-1954
MY: 0/-31
MX: 742'><div class=area style='position:absolute; width:12px; height:20px; left:776px; top:1097px'></div></a>
<a target=_blank href='build-rlmap.php?mp=742&a_id=1079&y=1875' title='Василий Ян
Писатель
История, Соцреализм
RUS
1875-1954
MY: 0/-31
MX: 742'><div class=area style='position:absolute; width:12px; height:20px; left:788px; top:1097px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1146&a_id=1052&y=1875' title='Рафаэль Сабатини
Писатель
История, Приключения, 
Море, О любви
BRI
1875-1950
MY: 0/0
MX: 1146'><div class=area style='position:absolute; width:32px; height:20px; left:1180px; top:1276px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1146&a_id=1052&y=1875' title='Рафаэль Сабатини
Писатель
История, Приключения, 
Море, О любви
BRI
1875-1950
MY: 0/0
MX: 1146'><div class=area style='position:absolute; width:31px; height:20px; left:1212px; top:1276px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1977&a_id=1216&y=1875' title='Эдгар Берроуз
Писатель
Фэнтези, 
Приключения, Фантастика
USA
1875-1950
MY: 0/0
MX: 1977'><div class=area style='position:absolute; width:32px; height:20px; left:2011px; top:1276px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1977&a_id=1216&y=1875' title='Эдгар Берроуз
Писатель
Фэнтези, 
Приключения, Фантастика
USA
1875-1950
MY: 0/0
MX: 1977'><div class=area style='position:absolute; width:31px; height:20px; left:2043px; top:1276px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1146&a_id=412&y=1876' title='Джек Лондон
Писатель
Натурализм, Приключения, Реализм, 
О животных, Социализм
USA
1876-1916
MY: 0/1
MX: 1146'><div class=area style='position:absolute; width:28px; height:20px; left:1180px; top:1178px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1146&a_id=412&y=1876' title='Джек Лондон
Писатель
Натурализм, Приключения, Реализм, 
О животных, Социализм
USA
1876-1916
MY: 0/1
MX: 1146'><div class=area style='position:absolute; width:27px; height:20px; left:1208px; top:1178px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=742&a_id=705&y=1876' title='Константин Тренёв

Соцреализм, 
Драматургия, История
RUS
1876-1945
MY: 0/-35
MX: 742'><div class=area style='position:absolute; width:26px; height:20px; left:776px; top:1048px'></div></a>
<a target=_blank href='build-rlmap.php?mp=742&a_id=705&y=1876' title='Константин Тренёв

Соцреализм, 
Драматургия, История
RUS
1876-1945
MY: 0/-35
MX: 742'><div class=area style='position:absolute; width:25px; height:20px; left:802px; top:1048px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1468&a_id=179&y=1877' title='Герман Гессе
Писатель
Модернизм, Философия, 
Мистицизм
DEU
1877-1962
MY: 0/0
MX: 1468'><div class=area style='position:absolute; width:22px; height:20px; left:1502px; top:1319px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1468&a_id=179&y=1877' title='Герман Гессе
Писатель
Модернизм, Философия, 
Мистицизм
DEU
1877-1962
MY: 0/0
MX: 1468'><div class=area style='position:absolute; width:21px; height:20px; left:1524px; top:1319px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2432&a_id=592&y=1877' title='Алексей Ремизов
Писатель
Модернизм, 
Медиевализм, Фантастика
RUS
1877-1957
MY: 0/-17
MX: 2432'><div class=area style='position:absolute; width:29px; height:20px; left:2466px; top:1196px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2432&a_id=592&y=1877' title='Алексей Ремизов
Писатель
Модернизм, 
Медиевализм, Фантастика
RUS
1877-1957
MY: 0/-17
MX: 2432'><div class=area style='position:absolute; width:28px; height:20px; left:2495px; top:1196px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1219&a_id=1047&y=1877' title='Николай Кун
Писатель
История, 
Детская
RUS
1877-1940
MY: 0/-14
MX: 1219'><div class=area style='position:absolute; width:13px; height:20px; left:1253px; top:1165px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1219&a_id=1047&y=1877' title='Николай Кун
Писатель
История, 
Детская
RUS
1877-1940
MY: 0/-14
MX: 1219'><div class=area style='position:absolute; width:13px; height:20px; left:1266px; top:1165px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1067&a_id=34&y=1878' title='Михаил Арцыбашев
Писатель
Натурализм, 
Драматургия, Публицистика
RUS
1878-1927
MY: 0/-2
MX: 1067'><div class=area style='position:absolute; width:32px; height:20px; left:1101px; top:1202px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1067&a_id=34&y=1878' title='Михаил Арцыбашев
Писатель
Натурализм, 
Драматургия, Публицистика
RUS
1878-1927
MY: 0/-2
MX: 1067'><div class=area style='position:absolute; width:32px; height:20px; left:1133px; top:1202px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2432&a_id=125&y=1878' title='Роберт Вальзер

Модернизм
CHE
1878-1956
MY: 0/-13
MX: 2432'><div class=area style='position:absolute; width:28px; height:20px; left:2466px; top:1221px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2432&a_id=125&y=1878' title='Роберт Вальзер

Модернизм
CHE
1878-1956
MY: 0/-13
MX: 2432'><div class=area style='position:absolute; width:27px; height:20px; left:2494px; top:1221px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1219&a_id=228&y=1878' title='Альфред Дёблин
Писатель
История, 
Литература изгнания, Модернизм, Новая вещественность, Фантастика
DEU
1878-1957
MY: 0/9
MX: 1219'><div class=area style='position:absolute; width:26px; height:20px; left:1253px; top:1362px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1219&a_id=228&y=1878' title='Альфред Дёблин
Писатель
История, 
Литература изгнания, Модернизм, Новая вещественность, Фантастика
DEU
1878-1957
MY: 0/9
MX: 1219'><div class=area style='position:absolute; width:25px; height:20px; left:1279px; top:1362px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=996&a_id=328&y=1878' title='Джеймс Оливер Кервуд
Автор
О животных, Приключения, 
О природе
USA
1878-1927
MY: 0/2
MX: 996'><div class=area style='position:absolute; width:24px; height:20px; left:1030px; top:1227px'></div></a>
<a target=_blank href='build-rlmap.php?mp=996&a_id=328&y=1878' title='Джеймс Оливер Кервуд
Автор
О животных, Приключения, 
О природе
USA
1878-1927
MY: 0/2
MX: 996'><div class=area style='position:absolute; width:24px; height:20px; left:1054px; top:1227px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2134&a_id=41&y=1879' title='Павел Петрович Бажов
Писатель
Детская, 
Сказка, Соцреализм
RUS
1879-1950
MY: 0/-6
MX: 2134'><div class=area style='position:absolute; width:22px; height:20px; left:2168px; top:1251px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2134&a_id=41&y=1879' title='Павел Петрович Бажов
Писатель
Детская, 
Сказка, Соцреализм
RUS
1879-1950
MY: 0/-6
MX: 2134'><div class=area style='position:absolute; width:22px; height:20px; left:2190px; top:1251px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=325&y=1879' title='Бернгард Келлерман
Писатель
Реализм, 
История, Приключения, Фантастика
DEU
1879-1951
MY: 0/13
MX: 1302'><div class=area style='position:absolute; width:36px; height:20px; left:1336px; top:1368px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1302&a_id=325&y=1879' title='Бернгард Келлерман
Писатель
Реализм, 
История, Приключения, Фантастика
DEU
1879-1951
MY: 0/13
MX: 1302'><div class=area style='position:absolute; width:35px; height:20px; left:1372px; top:1368px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2134&a_id=1179&y=1879' title='Степан Писахов
Художник
Детская, 
Сказка
RUS
1879-1960
MY: 0/-3
MX: 2134'><div class=area style='position:absolute; width:29px; height:20px; left:2168px; top:1301px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2134&a_id=1179&y=1879' title='Степан Писахов
Художник
Детская, 
Сказка
RUS
1879-1960
MY: 0/-3
MX: 2134'><div class=area style='position:absolute; width:28px; height:20px; left:2197px; top:1301px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=229&a_id=62&y=1880' title='Андрей Белый
Писатель
Символизм, 
Модернизм
RUS
1880-1934
MY: 0/1
MX: 229'><div class=area style='position:absolute; width:23px; height:20px; left:263px; top:1245px'></div></a>
<a target=_blank href='build-rlmap.php?mp=229&a_id=62&y=1880' title='Андрей Белый
Писатель
Символизм, 
Модернизм
RUS
1880-1934
MY: 0/1
MX: 229'><div class=area style='position:absolute; width:22px; height:20px; left:286px; top:1245px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=229&a_id=80&y=1880' title='Александр Блок
Поэт
Поэзия, Символизм
RUS
1880-1921
MY: 0/-5
MX: 229'><div class=area style='position:absolute; width:18px; height:20px; left:263px; top:1171px'></div></a>
<a target=_blank href='build-rlmap.php?mp=229&a_id=80&y=1880' title='Александр Блок
Поэт
Поэзия, Символизм
RUS
1880-1921
MY: 0/-5
MX: 229'><div class=area style='position:absolute; width:17px; height:20px; left:281px; top:1171px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=358&a_id=211&y=1880' title='Александр Грин
Писатель
Беллетристика, Неоромантизм, 
Философия, Фантастика, Символизм, Психология, Приключения, О любви, Детская, Фэнтези
RUS
1880-1932
MY: 0/0
MX: 358'><div class=area style='position:absolute; width:25px; height:20px; left:392px; top:1233px'></div></a>
<a target=_blank href='build-rlmap.php?mp=358&a_id=211&y=1880' title='Александр Грин
Писатель
Беллетристика, Неоромантизм, 
Философия, Фантастика, Символизм, Психология, Приключения, О любви, Детская, Фэнтези
RUS
1880-1932
MY: 0/0
MX: 358'><div class=area style='position:absolute; width:25px; height:20px; left:417px; top:1233px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2432&a_id=486&y=1880' title='Роберт Музиль
Писатель
Модернизм, 
Литература изгнания
DEU
1880-1942
MY: 0/-23
MX: 2432'><div class=area style='position:absolute; width:25px; height:20px; left:2466px; top:1122px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2432&a_id=486&y=1880' title='Роберт Музиль
Писатель
Модернизм, 
Литература изгнания
DEU
1880-1942
MY: 0/-23
MX: 2432'><div class=area style='position:absolute; width:24px; height:20px; left:2491px; top:1122px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=1082&y=1880' title='Саша Черный
Поэт
Детская, Сатира, 
Лирика, Поэзия
RUS
1880-1932
MY: 0/-2
MX: 2209'><div class=area style='position:absolute; width:26px; height:20px; left:2243px; top:1221px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2209&a_id=1082&y=1880' title='Саша Черный
Поэт
Детская, Сатира, 
Лирика, Поэзия
RUS
1880-1932
MY: 0/-2
MX: 2209'><div class=area style='position:absolute; width:26px; height:20px; left:2269px; top:1221px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1468&a_id=1237&y=1880' title='Освальд Шпенглер
Философ
История, Философия, 
Консерватизм, Национализм
DEU
1880-1936
MY: 0/1
MX: 1468'><div class=area style='position:absolute; width:32px; height:20px; left:1502px; top:1251px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1468&a_id=1237&y=1880' title='Освальд Шпенглер
Философ
История, Философия, 
Консерватизм, Национализм
DEU
1880-1936
MY: 0/1
MX: 1468'><div class=area style='position:absolute; width:32px; height:20px; left:1534px; top:1251px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=5&y=1881' title='А. Т. Аверченко
Писатель
Сатира, Юмор, 
Драматургия
RUS
1881-1925
MY: 0/-7
MX: 2209'><div class=area style='position:absolute; width:30px; height:20px; left:2243px; top:1171px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2209&a_id=5&y=1881' title='А. Т. Аверченко
Писатель
Сатира, Юмор, 
Драматургия
RUS
1881-1925
MY: 0/-7
MX: 2209'><div class=area style='position:absolute; width:29px; height:20px; left:2273px; top:1171px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=152&y=1881' title='П. Г. Вудхауз
Писатель
Юмор
BRI
1881-1975
MY: 0/-16
MX: 2209'><div class=area style='position:absolute; width:26px; height:20px; left:2243px; top:1270px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2209&a_id=152&y=1881' title='П. Г. Вудхауз
Писатель
Юмор
BRI
1881-1975
MY: 0/-16
MX: 2209'><div class=area style='position:absolute; width:25px; height:20px; left:2269px; top:1270px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1067&a_id=160&y=1881' title='Роже Мартен дю Гар
Писатель
Натурализм, 
Реализм
FRA
1881-1958
MY: 0/2
MX: 1067'><div class=area style='position:absolute; width:14px; height:20px; left:1101px; top:1332px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1067&a_id=160&y=1881' title='Роже Мартен дю Гар
Писатель
Натурализм, 
Реализм
FRA
1881-1958
MY: 0/2
MX: 1067'><div class=area style='position:absolute; width:14px; height:20px; left:1115px; top:1332px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1219&a_id=777&y=1881' title='Стефан Цвейг
Автор
История, 
Биография, Импрессионизм, О любви, Пацифизм
DEU
1881-1942
MY: 0/3
MX: 1219'><div class=area style='position:absolute; width:21px; height:20px; left:1253px; top:1288px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1219&a_id=777&y=1881' title='Стефан Цвейг
Автор
История, 
Биография, Импрессионизм, О любви, Пацифизм
DEU
1881-1942
MY: 0/3
MX: 1219'><div class=area style='position:absolute; width:21px; height:20px; left:1274px; top:1288px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2432&a_id=153&y=1882' title='Вирджиния Вулф
Писательница
Модернизм, 
Феминизм
BRI
1882-1941
MY: 0/-20
MX: 2432'><div class=area style='position:absolute; width:24px; height:20px; left:2466px; top:1147px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2432&a_id=153&y=1882' title='Вирджиния Вулф
Писательница
Модернизм, 
Феминизм
BRI
1882-1941
MY: 0/-20
MX: 2432'><div class=area style='position:absolute; width:24px; height:20px; left:2490px; top:1147px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2432&a_id=238&y=1882' title='Джеймс Джойс
Писатель
Модернизм, 
Абсурд, Авангард, Агностицизм
IRL
1882-1941
MY: 0/-16
MX: 2432'><div class=area style='position:absolute; width:23px; height:20px; left:2466px; top:1171px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2432&a_id=238&y=1882' title='Джеймс Джойс
Писатель
Модернизм, 
Абсурд, Авангард, Агностицизм
IRL
1882-1941
MY: 0/-16
MX: 2432'><div class=area style='position:absolute; width:22px; height:20px; left:2489px; top:1171px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2289&a_id=272&y=1882' title='Жан Жироду
Новеллист
О любви, 
Фэнтези
FRA
1882-1944
MY: 0/-1
MX: 2289'><div class=area style='position:absolute; width:27px; height:20px; left:2323px; top:1270px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2289&a_id=272&y=1882' title='Жан Жироду
Новеллист
О любви, 
Фэнтези
FRA
1882-1944
MY: 0/-1
MX: 2289'><div class=area style='position:absolute; width:26px; height:20px; left:2350px; top:1270px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=742&a_id=349&y=1882' title='Якуб Колас
Писатель
Соцреализм, 
Деревня, Неоромантизм, О природе, Символизм
RUS
1882-1956
MY: 0/-27
MX: 742'><div class=area style='position:absolute; width:21px; height:20px; left:776px; top:1147px'></div></a>
<a target=_blank href='build-rlmap.php?mp=742&a_id=349&y=1882' title='Якуб Колас
Писатель
Соцреализм, 
Деревня, Неоромантизм, О природе, Символизм
RUS
1882-1956
MY: 0/-27
MX: 742'><div class=area style='position:absolute; width:21px; height:20px; left:797px; top:1147px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2134&a_id=464&y=1882' title='Алан А. Милн
Писатель
Детская
BRI
1882-1956
MY: 0/-6
MX: 2134'><div class=area style='position:absolute; width:20px; height:20px; left:2168px; top:1276px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2134&a_id=464&y=1882' title='Алан А. Милн
Писатель
Детская
BRI
1882-1956
MY: 0/-6
MX: 2134'><div class=area style='position:absolute; width:19px; height:20px; left:2188px; top:1276px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1219&a_id=718&y=1882' title='Сигрид Унсет
Писательница
История, 
Реализм
NOR
1882-1949
MY: 0/3
MX: 1219'><div class=area style='position:absolute; width:22px; height:20px; left:1253px; top:1313px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1219&a_id=718&y=1882' title='Сигрид Унсет
Писательница
История, 
Реализм
NOR
1882-1949
MY: 0/3
MX: 1219'><div class=area style='position:absolute; width:21px; height:20px; left:1275px; top:1313px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2506&a_id=746&y=1882' title='Леонгард Франк
Писатель
Экспрессионизм, 
Пацифизм, Социализм
DEU
1882-1961
MY: 0/0
MX: 2506'><div class=area style='position:absolute; width:22px; height:20px; left:2540px; top:1332px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2506&a_id=746&y=1882' title='Леонгард Франк
Писатель
Экспрессионизм, 
Пацифизм, Социализм
DEU
1882-1961
MY: 0/0
MX: 2506'><div class=area style='position:absolute; width:22px; height:20px; left:2562px; top:1332px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2134&a_id=796&y=1882' title='Корней Чуковский
Поэт
Детская, 
Поэзия
RUS
1882-1969
MY: 0/-5
MX: 2134'><div class=area style='position:absolute; width:27px; height:20px; left:2168px; top:1325px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2134&a_id=796&y=1882' title='Корней Чуковский
Поэт
Детская, 
Поэзия
RUS
1882-1969
MY: 0/-5
MX: 2134'><div class=area style='position:absolute; width:27px; height:20px; left:2195px; top:1325px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=170&y=1883' title='Ярослав Гашек
Писатель
О войне, Юмор, 
Анархизм, История, Сатира
CZE
1883-1923
MY: 0/-3
MX: 2209'><div class=area style='position:absolute; width:23px; height:20px; left:2243px; top:1196px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2209&a_id=170&y=1883' title='Ярослав Гашек
Писатель
О войне, Юмор, 
Анархизм, История, Сатира
CZE
1883-1923
MY: 0/-3
MX: 2209'><div class=area style='position:absolute; width:22px; height:20px; left:2266px; top:1196px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1701&a_id=321&y=1883' title='Франц Кафка
Писатель
Абсурд, Антиутопия, 
Анархизм, Атеизм, Магический реализм, Модернизм, Фантастика, Философия, Экзистенциализм
DEU
1883-1924
MY: 0/0
MX: 1701'><div class=area style='position:absolute; width:23px; height:20px; left:1735px; top:1221px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1701&a_id=321&y=1883' title='Франц Кафка
Писатель
Абсурд, Антиутопия, 
Анархизм, Атеизм, Магический реализм, Модернизм, Фантастика, Философия, Экзистенциализм
DEU
1883-1924
MY: 0/0
MX: 1701'><div class=area style='position:absolute; width:23px; height:20px; left:1758px; top:1221px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=700&y=1883' title='А. Н. Толстой
Писатель
История, Реализм, Соцреализм, 
Детская, Фантастика
RUS
1883-1945
MY: 0/10
MX: 1302'><div class=area style='position:absolute; width:34px; height:20px; left:1336px; top:1344px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1302&a_id=700&y=1883' title='А. Н. Толстой
Писатель
История, Реализм, Соцреализм, 
Детская, Фантастика
RUS
1883-1945
MY: 0/10
MX: 1302'><div class=area style='position:absolute; width:33px; height:20px; left:1370px; top:1344px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1622&a_id=63&y=1884' title='Александр Беляев
Писатель
Фантастика, 
Твердая научная фантастика
RUS
1884-1942
MY: 0/-1
MX: 1622'><div class=area style='position:absolute; width:33px; height:20px; left:1656px; top:1270px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1622&a_id=63&y=1884' title='Александр Беляев
Писатель
Фантастика, 
Твердая научная фантастика
RUS
1884-1942
MY: 0/-1
MX: 1622'><div class=area style='position:absolute; width:33px; height:20px; left:1689px; top:1270px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1701&a_id=277&y=1884' title='Евгений Замятин
Писатель
Антиутопия, Реализм, Фантастика, 
Политика, Сатира
RUS
1884-1937
MY: 0/0
MX: 1701'><div class=area style='position:absolute; width:28px; height:20px; left:1735px; top:1264px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1701&a_id=277&y=1884' title='Евгений Замятин
Писатель
Антиутопия, Реализм, Фантастика, 
Политика, Сатира
RUS
1884-1937
MY: 0/0
MX: 1701'><div class=area style='position:absolute; width:28px; height:20px; left:1763px; top:1264px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1219&a_id=732&y=1884' title='Лион Фейхтвангер
Писатель
История
DEU
1884-1958
MY: 0/10
MX: 1219'><div class=area style='position:absolute; width:35px; height:20px; left:1253px; top:1387px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1219&a_id=732&y=1884' title='Лион Фейхтвангер
Писатель
История
DEU
1884-1958
MY: 0/10
MX: 1219'><div class=area style='position:absolute; width:34px; height:20px; left:1288px; top:1387px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2289&a_id=413&y=1885' title='Д. Г. Лоуренс
Писатель
Имажизм, О любви, 
Психология, Эротика
BRI
1885-1930
MY: 0/0
MX: 2289'><div class=area style='position:absolute; width:29px; height:20px; left:2323px; top:1245px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2289&a_id=413&y=1885' title='Д. Г. Лоуренс
Писатель
Имажизм, О любви, 
Психология, Эротика
BRI
1885-1930
MY: 0/0
MX: 2289'><div class=area style='position:absolute; width:28px; height:20px; left:2352px; top:1245px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1219&a_id=482&y=1885' title='Андре Моруа
Писатель
История, 
Психология, Сатира
FRA
1885-1967
MY: 0/9
MX: 1219'><div class=area style='position:absolute; width:22px; height:20px; left:1253px; top:1412px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1219&a_id=482&y=1885' title='Андре Моруа
Писатель
История, 
Психология, Сатира
FRA
1885-1967
MY: 0/9
MX: 1219'><div class=area style='position:absolute; width:22px; height:20px; left:1275px; top:1412px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2432&a_id=103&y=1886' title='Герман Брох
Писатель
Модернизм
DEU
1886-1951
MY: 0/-3
MX: 2432'><div class=area style='position:absolute; width:19px; height:20px; left:2466px; top:1295px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2432&a_id=103&y=1886' title='Герман Брох
Писатель
Модернизм
DEU
1886-1951
MY: 0/-3
MX: 2432'><div class=area style='position:absolute; width:18px; height:20px; left:2485px; top:1295px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2783&a_id=680&y=1886' title='Дзюнъитиро Танидзаки
Писатель
Модернизм, 
Авангард, Эротика
JAP
1886-1965
MY: 0/0
MX: 2783'><div class=area style='position:absolute; width:27px; height:20px; left:2817px; top:1356px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2783&a_id=680&y=1886' title='Дзюнъитиро Танидзаки
Писатель
Модернизм, 
Авангард, Эротика
JAP
1886-1965
MY: 0/0
MX: 2783'><div class=area style='position:absolute; width:26px; height:20px; left:2844px; top:1356px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1544&a_id=1165&y=1886' title='Конкордия Антарова

Религия, Философия, Эзотерика, 
Теософия
RUS
1886-1959
MY: 0/0
MX: 1544'><div class=area style='position:absolute; width:31px; height:20px; left:1578px; top:1338px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1544&a_id=1165&y=1886' title='Конкордия Антарова

Религия, Философия, Эзотерика, 
Теософия
RUS
1886-1959
MY: 0/0
MX: 1544'><div class=area style='position:absolute; width:31px; height:20px; left:1609px; top:1338px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=229&a_id=1187&y=1886' title='Владислав Ходасевич

Поэзия, Символизм
RUS
1886-1939
MY: 0/3
MX: 229'><div class=area style='position:absolute; width:36px; height:20px; left:263px; top:1295px'></div></a>
<a target=_blank href='build-rlmap.php?mp=229&a_id=1187&y=1886' title='Владислав Ходасевич

Поэзия, Символизм
RUS
1886-1939
MY: 0/3
MX: 229'><div class=area style='position:absolute; width:35px; height:20px; left:299px; top:1295px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2432&a_id=1221&y=1886' title='Николай Гумилёв
Поэт
Поэзия, 
Акмеизм
RUS
1886-1921
MY: 0/-24
MX: 2432'><div class=area style='position:absolute; width:28px; height:20px; left:2466px; top:1073px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2432&a_id=1221&y=1886' title='Николай Гумилёв
Поэт
Поэзия, 
Акмеизм
RUS
1886-1921
MY: 0/-24
MX: 2432'><div class=area style='position:absolute; width:28px; height:20px; left:2494px; top:1073px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2134&a_id=446&y=1887' title='Самуил Маршак
Поэт
Детская, Поэзия
RUS
1887-1964
MY: 0/-1
MX: 2134'><div class=area style='position:absolute; width:27px; height:20px; left:2168px; top:1350px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2134&a_id=446&y=1887' title='Самуил Маршак
Поэт
Детская, Поэзия
RUS
1887-1964
MY: 0/-1
MX: 2134'><div class=area style='position:absolute; width:27px; height:20px; left:2195px; top:1350px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=590&a_id=1211&y=1887' title='Сигизмунд Кржижановский
Писатель
Магический реализм
RUS
1887-1950
MY: 0/-2
MX: 590'><div class=area style='position:absolute; width:31px; height:20px; left:624px; top:1301px'></div></a>
<a target=_blank href='build-rlmap.php?mp=590&a_id=1211&y=1887' title='Сигизмунд Кржижановский
Писатель
Магический реализм
RUS
1887-1950
MY: 0/-2
MX: 590'><div class=area style='position:absolute; width:30px; height:20px; left:655px; top:1301px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1395&a_id=316&y=1888' title='Дейл Карнеги
Педагог
Психология, 
Бизнес
USA
1888-1955
MY: 0/0
MX: 1395'><div class=area style='position:absolute; width:27px; height:20px; left:1429px; top:1332px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1395&a_id=316&y=1888' title='Дейл Карнеги
Педагог
Психология, 
Бизнес
USA
1888-1955
MY: 0/0
MX: 1395'><div class=area style='position:absolute; width:26px; height:20px; left:1456px; top:1332px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=374&y=1888' title='Джойс Кэри
Писатель
Реализм
BRI
1888-1957
MY: 0/13
MX: 1302'><div class=area style='position:absolute; width:17px; height:20px; left:1336px; top:1418px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1302&a_id=374&y=1888' title='Джойс Кэри
Писатель
Реализм
BRI
1888-1957
MY: 0/13
MX: 1302'><div class=area style='position:absolute; width:17px; height:20px; left:1353px; top:1418px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2056&a_id=425&y=1888' title='А. С. Макаренко
Педагог
Педагогика, 
Для подростков
RUS
1888-1939
MY: 0/-1
MX: 2056'><div class=area style='position:absolute; width:33px; height:20px; left:2090px; top:1276px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2056&a_id=425&y=1888' title='А. С. Макаренко
Педагог
Педагогика, 
Для подростков
RUS
1888-1939
MY: 0/-1
MX: 2056'><div class=area style='position:absolute; width:33px; height:20px; left:2123px; top:1276px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=667&a_id=784&y=1888' title='Реймонд Чандлер
Писатель
Крутой детектив, 
Детектив, Реализм, Триллер
USA
1888-1959
MY: 0/-26
MX: 667'><div class=area style='position:absolute; width:29px; height:20px; left:701px; top:1184px'></div></a>
<a target=_blank href='build-rlmap.php?mp=667&a_id=784&y=1888' title='Реймонд Чандлер
Писатель
Крутой детектив, 
Детектив, Реализм, Триллер
USA
1888-1959
MY: 0/-26
MX: 667'><div class=area style='position:absolute; width:28px; height:20px; left:730px; top:1184px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2432&a_id=828&y=1888' title='Томас Элиот
Поэт
Модернизм, Поэзия
USA
1888-1965
MY: 0/1
MX: 2432'><div class=area style='position:absolute; width:28px; height:20px; left:2466px; top:1368px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2432&a_id=828&y=1888' title='Томас Элиот
Поэт
Модернизм, Поэзия
USA
1888-1965
MY: 0/1
MX: 2432'><div class=area style='position:absolute; width:27px; height:20px; left:2494px; top:1368px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2432&a_id=38&y=1889' title='Анна Ахматова
Поэтесса
Акмеизм, Модернизм, Поэзия
RUS
1889-1966
MY: 0/8
MX: 2432'><div class=area style='position:absolute; width:31px; height:20px; left:2466px; top:1418px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2432&a_id=38&y=1889' title='Анна Ахматова
Поэтесса
Акмеизм, Модернизм, Поэзия
RUS
1889-1966
MY: 0/8
MX: 2432'><div class=area style='position:absolute; width:31px; height:20px; left:2497px; top:1418px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2289&a_id=220&y=1889' title='Решат Нури Гюнтекин
Романист
Реализм, Сентиментализм
TUR
1889-1956
MY: 0/-1
MX: 2289'><div class=area style='position:absolute; width:31px; height:20px; left:2323px; top:1332px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2289&a_id=220&y=1889' title='Решат Нури Гюнтекин
Романист
Реализм, Сентиментализм
TUR
1889-1956
MY: 0/-1
MX: 2289'><div class=area style='position:absolute; width:30px; height:20px; left:2354px; top:1332px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=590&a_id=345&y=1889' title='Сергей Клычков

Магический реализм, 
Деревня, Поэзия
RUS
1889-1940
MY: 0/-6
MX: 590'><div class=area style='position:absolute; width:28px; height:20px; left:624px; top:1251px'></div></a>
<a target=_blank href='build-rlmap.php?mp=590&a_id=345&y=1889' title='Сергей Клычков

Магический реализм, 
Деревня, Поэзия
RUS
1889-1940
MY: 0/-6
MX: 590'><div class=area style='position:absolute; width:27px; height:20px; left:652px; top:1251px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2715&a_id=348&y=1889' title='Жан Кокто
Писатель
Сюрреализм, 
Драматургия
FRA
1889-1963
MY: 0/0
MX: 2715'><div class=area style='position:absolute; width:19px; height:20px; left:2749px; top:1356px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2715&a_id=348&y=1889' title='Жан Кокто
Писатель
Сюрреализм, 
Драматургия
FRA
1889-1963
MY: 0/0
MX: 2715'><div class=area style='position:absolute; width:19px; height:20px; left:2768px; top:1356px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=667&a_id=1219&y=1889' title='Эрл Стэнли Гарднер
Писатель
Детектив
USA
1889-1970
MY: 0/-24
MX: 667'><div class=area style='position:absolute; width:32px; height:20px; left:701px; top:1233px'></div></a>
<a target=_blank href='build-rlmap.php?mp=667&a_id=1219&y=1889' title='Эрл Стэнли Гарднер
Писатель
Детектив
USA
1889-1970
MY: 0/-24
MX: 667'><div class=area style='position:absolute; width:32px; height:20px; left:733px; top:1233px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=667&a_id=367&y=1890' title='Агата Кристи
Писательница
Беллетристика, Детектив, 
Приключения
BRI
1890-1976
MY: 0/-23
MX: 667'><div class=area style='position:absolute; width:26px; height:20px; left:701px; top:1258px'></div></a>
<a target=_blank href='build-rlmap.php?mp=667&a_id=367&y=1890' title='Агата Кристи
Писательница
Беллетристика, Детектив, 
Приключения
BRI
1890-1976
MY: 0/-23
MX: 667'><div class=area style='position:absolute; width:26px; height:20px; left:727px; top:1258px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2432&a_id=544&y=1890' title='Борис Пастернак
Писатель
Футуризм, 
История, Нон-конформизм, Поэзия, Реализм, Элегия
RUS
1890-1960
MY: 0/-5
MX: 2432'><div class=area style='position:absolute; width:31px; height:20px; left:2466px; top:1319px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2432&a_id=544&y=1890' title='Борис Пастернак
Писатель
Футуризм, 
История, Нон-конформизм, Поэзия, Реализм, Элегия
RUS
1890-1960
MY: 0/-5
MX: 2432'><div class=area style='position:absolute; width:30px; height:20px; left:2497px; top:1319px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2432&a_id=570&y=1890' title='Кэтрин Энн Портер
Журналистка
Модернизм, 
Антифашизм
USA
1890-1980
MY: 0/25
MX: 2432'><div class=area style='position:absolute; width:30px; height:20px; left:2466px; top:1566px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2432&a_id=570&y=1890' title='Кэтрин Энн Портер
Журналистка
Модернизм, 
Антифашизм
USA
1890-1980
MY: 0/25
MX: 2432'><div class=area style='position:absolute; width:29px; height:20px; left:2496px; top:1566px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1622&a_id=785&y=1890' title='Карел Чапек
Писатель
Фантастика, 
Антиутопия, Драматургия, Сатира, Сказка
CZE
1890-1938
MY: 0/2
MX: 1622'><div class=area style='position:absolute; width:21px; height:20px; left:1656px; top:1295px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1622&a_id=785&y=1890' title='Карел Чапек
Писатель
Фантастика, 
Антиутопия, Драматургия, Сатира, Сказка
CZE
1890-1938
MY: 0/2
MX: 1622'><div class=area style='position:absolute; width:21px; height:20px; left:1677px; top:1295px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2506&a_id=1198&y=1890' title='Франц Верфель
Драматург
Экспрессионизм, 
Драматургия, История, Религия
DEU
1890-1945
MY: 0/0
MX: 2506'><div class=area style='position:absolute; width:30px; height:20px; left:2540px; top:1307px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2506&a_id=1198&y=1890' title='Франц Верфель
Драматург
Экспрессионизм, 
Драматургия, История, Религия
DEU
1890-1945
MY: 0/0
MX: 2506'><div class=area style='position:absolute; width:29px; height:20px; left:2570px; top:1307px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=590&a_id=107&y=1891' title='Михаил Булгаков
Писатель
Магический реализм, 
Реализм, Сатира, Фантастика
RUS
1891-1940
MY: 0/-3
MX: 590'><div class=area style='position:absolute; width:33px; height:20px; left:624px; top:1276px'></div></a>
<a target=_blank href='build-rlmap.php?mp=590&a_id=107&y=1891' title='Михаил Булгаков
Писатель
Магический реализм, 
Реализм, Сатира, Фантастика
RUS
1891-1940
MY: 0/-3
MX: 590'><div class=area style='position:absolute; width:32px; height:20px; left:657px; top:1276px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2056&a_id=146&y=1891' title='А. М. Волков
Писатель
Детская, Для подростков, 
История
RUS
1891-1977
MY: 0/-9
MX: 2056'><div class=area style='position:absolute; width:24px; height:20px; left:2090px; top:1350px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2056&a_id=146&y=1891' title='А. М. Волков
Писатель
Детская, Для подростков, 
История
RUS
1891-1977
MY: 0/-9
MX: 2056'><div class=area style='position:absolute; width:24px; height:20px; left:2114px; top:1350px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2432&a_id=377&y=1891' title='Пер Лагерквист
Писатель
Модернизм, 
Кубизм, Мифы, Реализм, Экзистенциализм, Экспрессионизм
SWE
1891-1974
MY: 0/19
MX: 2432'><div class=area style='position:absolute; width:32px; height:20px; left:2466px; top:1516px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2432&a_id=377&y=1891' title='Пер Лагерквист
Писатель
Модернизм, 
Кубизм, Мифы, Реализм, Экзистенциализм, Экспрессионизм
SWE
1891-1974
MY: 0/19
MX: 2432'><div class=area style='position:absolute; width:32px; height:20px; left:2498px; top:1516px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=229&a_id=437&y=1891' title='Осип Мандельштам
Поэт
Акмеизм, Символизм, 
Поэзия
RUS
1891-1938
MY: 0/5
MX: 229'><div class=area style='position:absolute; width:36px; height:20px; left:263px; top:1319px'></div></a>
<a target=_blank href='build-rlmap.php?mp=229&a_id=437&y=1891' title='Осип Мандельштам
Поэт
Акмеизм, Символизм, 
Поэзия
RUS
1891-1938
MY: 0/5
MX: 229'><div class=area style='position:absolute; width:35px; height:20px; left:299px; top:1319px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2715&a_id=462&y=1891' title='Генри Миллер
Писатель
Сюрреализм, 
Мистицизм, Философия, Эротика
USA
1891-1980
MY: 0/-6
MX: 2715'><div class=area style='position:absolute; width:26px; height:20px; left:2749px; top:1381px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2715&a_id=462&y=1891' title='Генри Миллер
Писатель
Сюрреализм, 
Мистицизм, Философия, Эротика
USA
1891-1980
MY: 0/-6
MX: 2715'><div class=area style='position:absolute; width:26px; height:20px; left:2775px; top:1381px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2056&a_id=745&y=1891' title='Рувим Фраерман
Писатель
Детская, Для подростков, 
Соцреализм
RUS
1891-1972
MY: 0/-11
MX: 2056'><div class=area style='position:absolute; width:34px; height:20px; left:2090px; top:1325px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2056&a_id=745&y=1891' title='Рувим Фраерман
Писатель
Детская, Для подростков, 
Соцреализм
RUS
1891-1972
MY: 0/-11
MX: 2056'><div class=area style='position:absolute; width:33px; height:20px; left:2124px; top:1325px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1219&a_id=752&y=1891' title='Дмитрий Фурманов
Писатель
История, 
О войне, Революционер
RUS
1891-1926
MY: 0/-10
MX: 1219'><div class=area style='position:absolute; width:33px; height:20px; left:1253px; top:1190px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1219&a_id=752&y=1891' title='Дмитрий Фурманов
Писатель
История, 
О войне, Революционер
RUS
1891-1926
MY: 0/-10
MX: 1219'><div class=area style='position:absolute; width:32px; height:20px; left:1286px; top:1190px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1395&a_id=833&y=1891' title='Илья Эренбург
Писатель
Психология, 
Антифашизм, Лирика, Публицистика, Сатира, Философия
RUS
1891-1967
MY: 0/0
MX: 1395'><div class=area style='position:absolute; width:30px; height:20px; left:1429px; top:1375px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1395&a_id=833&y=1891' title='Илья Эренбург
Писатель
Психология, 
Антифашизм, Лирика, Публицистика, Сатира, Философия
RUS
1891-1967
MY: 0/0
MX: 1395'><div class=area style='position:absolute; width:29px; height:20px; left:1459px; top:1375px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2783&a_id=12&y=1892' title='Рюноскэ Акутагава
Писатель
Буддизм, Модернизм, Социализм
JAP
1892-1927
MY: 0/0
MX: 2783'><div class=area style='position:absolute; width:22px; height:20px; left:2817px; top:1258px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2783&a_id=12&y=1892' title='Рюноскэ Акутагава
Писатель
Буддизм, Модернизм, Социализм
JAP
1892-1927
MY: 0/0
MX: 2783'><div class=area style='position:absolute; width:22px; height:20px; left:2839px; top:1258px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=667&a_id=323&y=1892' title='Джеймс Кейн
Писатель
Детектив
USA
1892-1977
MY: 0/-21
MX: 667'><div class=area style='position:absolute; width:18px; height:20px; left:701px; top:1282px'></div></a>
<a target=_blank href='build-rlmap.php?mp=667&a_id=323&y=1892' title='Джеймс Кейн
Писатель
Детектив
USA
1892-1977
MY: 0/-21
MX: 667'><div class=area style='position:absolute; width:17px; height:20px; left:719px; top:1282px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=358&a_id=545&y=1892' title='К. Паустовский
Писатель
Неоромантизм, 
Детская, Нон-конформизм, О природе
RUS
1892-1968
MY: 0/0
MX: 358'><div class=area style='position:absolute; width:35px; height:20px; left:392px; top:1381px'></div></a>
<a target=_blank href='build-rlmap.php?mp=358&a_id=545&y=1892' title='К. Паустовский
Писатель
Неоромантизм, 
Детская, Нон-конформизм, О природе
RUS
1892-1968
MY: 0/0
MX: 358'><div class=area style='position:absolute; width:34px; height:20px; left:427px; top:1381px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1903&a_id=696&y=1892' title='Джон Толкин
Писатель
Высокое фэнтези, Для подростков, Мифы, 
Поэзия, Приключения, Фэнтези
BRI
1892-1973
MY: 0/-1
MX: 1903'><div class=area style='position:absolute; width:25px; height:20px; left:1937px; top:1393px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1903&a_id=696&y=1892' title='Джон Толкин
Писатель
Высокое фэнтези, Для подростков, Мифы, 
Поэзия, Приключения, Фэнтези
BRI
1892-1973
MY: 0/-1
MX: 1903'><div class=area style='position:absolute; width:24px; height:20px; left:1962px; top:1393px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=742&a_id=731&y=1892' title='Константин Федин
Писатель
Соцреализм
RUS
1892-1977
MY: 0/-23
MX: 742'><div class=area style='position:absolute; width:23px; height:20px; left:776px; top:1270px'></div></a>
<a target=_blank href='build-rlmap.php?mp=742&a_id=731&y=1892' title='Константин Федин
Писатель
Соцреализм
RUS
1892-1977
MY: 0/-23
MX: 742'><div class=area style='position:absolute; width:22px; height:20px; left:799px; top:1270px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=229&a_id=778&y=1892' title='Марина Цветаева
Поэтесса
Авангард, Поэзия, Символизм
RUS
1892-1941
MY: 0/7
MX: 229'><div class=area style='position:absolute; width:32px; height:20px; left:263px; top:1344px'></div></a>
<a target=_blank href='build-rlmap.php?mp=229&a_id=778&y=1892' title='Марина Цветаева
Поэтесса
Авангард, Поэзия, Символизм
RUS
1892-1941
MY: 0/7
MX: 229'><div class=area style='position:absolute; width:31px; height:20px; left:295px; top:1344px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=742&a_id=1120&y=1892' title='Александр Степанов
Писатель
Соцреализм, 
История, О войне
RUS
1892-1965
MY: 0/-25
MX: 742'><div class=area style='position:absolute; width:32px; height:20px; left:776px; top:1221px'></div></a>
<a target=_blank href='build-rlmap.php?mp=742&a_id=1120&y=1892' title='Александр Степанов
Писатель
Соцреализм, 
История, О войне
RUS
1892-1965
MY: 0/-25
MX: 742'><div class=area style='position:absolute; width:31px; height:20px; left:808px; top:1221px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=742&a_id=448&y=1893' title='Владимир Маяковский
Поэт
Авангард, Кубофутуризм, Поэзия, Соцреализм, 
Футуризм
RUS
1893-1930
MY: 0/-32
MX: 742'><div class=area style='position:absolute; width:39px; height:20px; left:776px; top:1073px'></div></a>
<a target=_blank href='build-rlmap.php?mp=742&a_id=448&y=1893' title='Владимир Маяковский
Поэт
Авангард, Кубофутуризм, Поэзия, Соцреализм, 
Футуризм
RUS
1893-1930
MY: 0/-32
MX: 742'><div class=area style='position:absolute; width:38px; height:20px; left:815px; top:1073px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=450&a_id=728&y=1893' title='Ганс Фаллада
Писатель
Критический реализм, Новая вещественность
DEU
1893-1947
MY: 0/0
MX: 450'><div class=area style='position:absolute; width:30px; height:20px; left:484px; top:1319px'></div></a>
<a target=_blank href='build-rlmap.php?mp=450&a_id=728&y=1893' title='Ганс Фаллада
Писатель
Критический реализм, Новая вещественность
DEU
1893-1947
MY: 0/0
MX: 450'><div class=area style='position:absolute; width:29px; height:20px; left:514px; top:1319px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=74&a_id=811&y=1893' title='Виктор Шкловский
Писатель
Формализм, 
Революционер
RUS
1893-1984
MY: 0/0
MX: 74'><div class=area style='position:absolute; width:27px; height:20px; left:108px; top:1436px'></div></a>
<a target=_blank href='build-rlmap.php?mp=74&a_id=811&y=1893' title='Виктор Шкловский
Писатель
Формализм, 
Революционер
RUS
1893-1984
MY: 0/0
MX: 74'><div class=area style='position:absolute; width:27px; height:20px; left:135px; top:1436px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2432&a_id=40&y=1894' title='Исаак Бабель
Писатель
Модернизм, Нон-конформизм
RUS
1894-1940
MY: 0/-9
MX: 2432'><div class=area style='position:absolute; width:25px; height:20px; left:2466px; top:1245px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2432&a_id=40&y=1894' title='Исаак Бабель
Писатель
Модернизм, Нон-конформизм
RUS
1894-1940
MY: 0/-9
MX: 2432'><div class=area style='position:absolute; width:24px; height:20px; left:2491px; top:1245px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=284&y=1894' title='Михаил Зощенко
Писатель
Сатира
RUS
1894-1958
MY: 0/-18
MX: 2209'><div class=area style='position:absolute; width:29px; height:20px; left:2243px; top:1245px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2209&a_id=284&y=1894' title='Михаил Зощенко
Писатель
Сатира
RUS
1894-1958
MY: 0/-18
MX: 2209'><div class=area style='position:absolute; width:29px; height:20px; left:2272px; top:1245px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2645&a_id=550&y=1894' title='Борис Пильняк
Писатель
Орнаментальная проза
RUS
1894-1938
MY: 0/0
MX: 2645'><div class=area style='position:absolute; width:28px; height:20px; left:2679px; top:1295px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2645&a_id=550&y=1894' title='Борис Пильняк
Писатель
Орнаментальная проза
RUS
1894-1938
MY: 0/0
MX: 2645'><div class=area style='position:absolute; width:28px; height:20px; left:2707px; top:1295px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=667&a_id=575&y=1894' title='Джон Бойнтон Пристли
Романист
Детектив, 
Драматургия, Социализм, Юмор
BRI
1894-1984
MY: 0/-21
MX: 667'><div class=area style='position:absolute; width:28px; height:20px; left:701px; top:1307px'></div></a>
<a target=_blank href='build-rlmap.php?mp=667&a_id=575&y=1894' title='Джон Бойнтон Пристли
Романист
Детектив, 
Драматургия, Социализм, Юмор
BRI
1894-1984
MY: 0/-21
MX: 667'><div class=area style='position:absolute; width:28px; height:20px; left:729px; top:1307px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2432&a_id=630&y=1894' title='Луи-Фердинанд Селин
Писатель
Модернизм
FRA
1894-1961
MY: 0/12
MX: 2432'><div class=area style='position:absolute; width:22px; height:20px; left:2466px; top:1442px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2432&a_id=630&y=1894' title='Луи-Фердинанд Селин
Писатель
Модернизм
FRA
1894-1961
MY: 0/12
MX: 2432'><div class=area style='position:absolute; width:22px; height:20px; left:2488px; top:1442px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=74&a_id=710&y=1894' title='Юрий Тынянов
Переводчик
Формализм, 
История
RUS
1894-1943
MY: 0/0
MX: 74'><div class=area style='position:absolute; width:30px; height:20px; left:108px; top:1313px'></div></a>
<a target=_blank href='build-rlmap.php?mp=74&a_id=710&y=1894' title='Юрий Тынянов
Переводчик
Формализм, 
История
RUS
1894-1943
MY: 0/0
MX: 74'><div class=area style='position:absolute; width:30px; height:20px; left:138px; top:1313px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1622&a_id=755&y=1894' title='Олдос Хаксли
Писатель
Фантастика, 
Агностицизм, Антиутопия, Гуманизм, Мистицизм, Пацифизм, Сатира, Философия
BRI
1894-1963
MY: 0/-5
MX: 1622'><div class=area style='position:absolute; width:26px; height:20px; left:1656px; top:1344px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1622&a_id=755&y=1894' title='Олдос Хаксли
Писатель
Фантастика, 
Агностицизм, Антиутопия, Гуманизм, Мистицизм, Пацифизм, Сатира, Философия
BRI
1894-1963
MY: 0/-5
MX: 1622'><div class=area style='position:absolute; width:26px; height:20px; left:1682px; top:1344px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=667&a_id=766&y=1894' title='Дэшил Хеммет
Писатель
Крутой детектив, 
Детектив, Нуар
USA
1894-1961
MY: 0/-26
MX: 667'><div class=area style='position:absolute; width:26px; height:20px; left:701px; top:1208px'></div></a>
<a target=_blank href='build-rlmap.php?mp=667&a_id=766&y=1894' title='Дэшил Хеммет
Писатель
Крутой детектив, 
Детектив, Нуар
USA
1894-1961
MY: 0/-26
MX: 667'><div class=area style='position:absolute; width:26px; height:20px; left:727px; top:1208px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1146&a_id=1116&y=1894' title='Аркадий Фидлер
Писатель
Приключения, 
Индейцы, История
POL
1894-1985
MY: 0/0
MX: 1146'><div class=area style='position:absolute; width:26px; height:20px; left:1180px; top:1442px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1146&a_id=1116&y=1894' title='Аркадий Фидлер
Писатель
Приключения, 
Индейцы, История
POL
1894-1985
MY: 0/0
MX: 1146'><div class=area style='position:absolute; width:26px; height:20px; left:1206px; top:1442px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2715&a_id=1107&y=1894' title='Тибор Дери
Поэт
Дадаизм, Сюрреализм, 
Антикоммунизм, Коммунизм, Поэзия, Реализм, Революционер, Сатира, Экзистенциализм
HUN
1894-1977
MY: 0/-2
MX: 2715'><div class=area style='position:absolute; width:19px; height:20px; left:2749px; top:1405px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2715&a_id=1107&y=1894' title='Тибор Дери
Поэт
Дадаизм, Сюрреализм, 
Антикоммунизм, Коммунизм, Поэзия, Реализм, Революционер, Сатира, Экзистенциализм
HUN
1894-1977
MY: 0/-2
MX: 2715'><div class=area style='position:absolute; width:18px; height:20px; left:2768px; top:1405px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2134&a_id=1104&y=1894' title='Виталий Бианки
Писатель
Детская, 
О животных, Приключения, Сказка
RUS
1894-1959
MY: 0/2
MX: 2134'><div class=area style='position:absolute; width:24px; height:20px; left:2168px; top:1375px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2134&a_id=1104&y=1894' title='Виталий Бианки
Писатель
Детская, 
О животных, Приключения, Сказка
RUS
1894-1959
MY: 0/2
MX: 2134'><div class=area style='position:absolute; width:24px; height:20px; left:2192px; top:1375px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=919&a_id=268&y=1895' title='Сергей Есенин
Поэт
Деревня, Имажинизм, Поэзия, 
Автобиография
RUS
1895-1925
MY: 0/0
MX: 919'><div class=area style='position:absolute; width:26px; height:20px; left:953px; top:1258px'></div></a>
<a target=_blank href='build-rlmap.php?mp=919&a_id=268&y=1895' title='Сергей Есенин
Поэт
Деревня, Имажинизм, Поэзия, 
Автобиография
RUS
1895-1925
MY: 0/0
MX: 919'><div class=area style='position:absolute; width:25px; height:20px; left:979px; top:1258px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2645&a_id=287&y=1895' title='Всеволод Иванов
Писатель
Орнаментальная проза, 
Автобиография, Антиутопия, Драматургия, Революция, Фантастика
RUS
1895-1963
MY: -3/0
MX: 2645'><div class=area style='position:absolute; width:29px; height:20px; left:2679px; top:1356px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2645&a_id=287&y=1895' title='Всеволод Иванов
Писатель
Орнаментальная проза, 
Автобиография, Антиутопия, Драматургия, Революция, Фантастика
RUS
1895-1963
MY: -3/0
MX: 2645'><div class=area style='position:absolute; width:29px; height:20px; left:2708px; top:1356px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1544&a_id=759&y=1895' title='Лесли Поулс Хартли
Писатель
Мистицизм, 
Психология
BRI
1895-1972
MY: 0/3
MX: 1544'><div class=area style='position:absolute; width:25px; height:20px; left:1578px; top:1424px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1544&a_id=759&y=1895' title='Лесли Поулс Хартли
Писатель
Мистицизм, 
Психология
BRI
1895-1972
MY: 0/3
MX: 1544'><div class=area style='position:absolute; width:24px; height:20px; left:1603px; top:1424px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2432&a_id=250&y=1896' title='Джон Дос Пассос
Писатель
Модернизм, 
Коммунизм, Потерянное поколение
USA
1896-1970
MY: 0/23
MX: 2432'><div class=area style='position:absolute; width:26px; height:20px; left:2466px; top:1541px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2432&a_id=250&y=1896' title='Джон Дос Пассос
Писатель
Модернизм, 
Коммунизм, Потерянное поколение
USA
1896-1970
MY: 0/23
MX: 2432'><div class=area style='position:absolute; width:25px; height:20px; left:2492px; top:1541px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=368&y=1896' title='Арчибальд Кронин
Писатель
Реализм
BRI
1896-1981
MY: 0/1
MX: 1302'><div class=area style='position:absolute; width:25px; height:20px; left:1336px; top:1442px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1302&a_id=368&y=1896' title='Арчибальд Кронин
Писатель
Реализм
BRI
1896-1981
MY: 0/1
MX: 1302'><div class=area style='position:absolute; width:24px; height:20px; left:1361px; top:1442px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=738&y=1896' title='Фрэнсис Фицджеральд
Писатель
Реализм, 
Модернизм, Психология, Фантастика
USA
1896-1940
MY: 0/14
MX: 1302'><div class=area style='position:absolute; width:38px; height:20px; left:1336px; top:1393px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1302&a_id=738&y=1896' title='Фрэнсис Фицджеральд
Писатель
Реализм, 
Модернизм, Психология, Фантастика
USA
1896-1940
MY: 0/14
MX: 1302'><div class=area style='position:absolute; width:37px; height:20px; left:1374px; top:1393px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=-2&a_id=781&y=1896' title='Карл Цукмайер
Писатель
Драматургия, 
Литература изгнания
DEU
1896-1977
MY: 0/0
MX: -2'><div class=area style='position:absolute; width:31px; height:20px; left:32px; top:1424px'></div></a>
<a target=_blank href='build-rlmap.php?mp=-2&a_id=781&y=1896' title='Карл Цукмайер
Писатель
Драматургия, 
Литература изгнания
DEU
1896-1977
MY: 0/0
MX: -2'><div class=area style='position:absolute; width:31px; height:20px; left:63px; top:1424px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1977&a_id=803&y=1896' title='Евгений Шварц
Драматург
Авангард, Детская, Фэнтези, 
Драматургия
RUS
1896-1958
MY: 0/0
MX: 1977'><div class=area style='position:absolute; width:24px; height:20px; left:2011px; top:1362px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1977&a_id=803&y=1896' title='Евгений Шварц
Драматург
Авангард, Детская, Фэнтези, 
Драматургия
RUS
1896-1958
MY: 0/0
MX: 1977'><div class=area style='position:absolute; width:23px; height:20px; left:2035px; top:1362px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2056&a_id=1173&y=1896' title='Борис Шергин
Писатель
Детская, Для подростков, 
Сказка, Фольклор
RUS
1896-1973
MY: 0/-6
MX: 2056'><div class=area style='position:absolute; width:25px; height:20px; left:2090px; top:1375px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2056&a_id=1173&y=1896' title='Борис Шергин
Писатель
Детская, Для подростков, 
Сказка, Фольклор
RUS
1896-1973
MY: 0/-6
MX: 2056'><div class=area style='position:absolute; width:25px; height:20px; left:2115px; top:1375px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1219&a_id=1178&y=1896' title='Георгий Жуков
Полководец
История, 
Автобиография, Биография, Мемуары, О войне
RUS
1896-1974
MY: 0/4
MX: 1219'><div class=area style='position:absolute; width:22px; height:20px; left:1253px; top:1436px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1219&a_id=1178&y=1896' title='Георгий Жуков
Полководец
История, 
Автобиография, Биография, Мемуары, О войне
RUS
1896-1974
MY: 0/4
MX: 1219'><div class=area style='position:absolute; width:21px; height:20px; left:1275px; top:1436px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2715&a_id=27&y=1897' title='Луи Арагон
Поэт
Дадаизм, Сюрреализм, 
Марксизм, Поэзия, Революционер
FRA
1897-1982
MY: 0/2
MX: 2715'><div class=area style='position:absolute; width:24px; height:20px; left:2749px; top:1455px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2715&a_id=27&y=1897' title='Луи Арагон
Поэт
Дадаизм, Сюрреализм, 
Марксизм, Поэзия, Революционер
FRA
1897-1982
MY: 0/2
MX: 2715'><div class=area style='position:absolute; width:23px; height:20px; left:2773px; top:1455px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2056&a_id=217&y=1897' title='Пол Гэллико
Писатель
Детская, Для подростков, 
Приключения
USA
1897-1976
MY: 0/0
MX: 2056'><div class=area style='position:absolute; width:27px; height:20px; left:2090px; top:1424px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2056&a_id=217&y=1897' title='Пол Гэллико
Писатель
Детская, Для подростков, 
Приключения
USA
1897-1976
MY: 0/0
MX: 2056'><div class=area style='position:absolute; width:26px; height:20px; left:2117px; top:1424px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=742&a_id=319&y=1897' title='Валентин Катаев
Писатель
Соцреализм, 
Автобиография, Детская, О войне, Приключения
RUS
1897-1986
MY: 0/-10
MX: 742'><div class=area style='position:absolute; width:25px; height:20px; left:776px; top:1393px'></div></a>
<a target=_blank href='build-rlmap.php?mp=742&a_id=319&y=1897' title='Валентин Катаев
Писатель
Соцреализм, 
Автобиография, Детская, О войне, Приключения
RUS
1897-1986
MY: 0/-10
MX: 742'><div class=area style='position:absolute; width:25px; height:20px; left:801px; top:1393px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2432&a_id=741&y=1897' title='Уильям Фолкнер
Писатель
Модернизм, 
Готика
USA
1897-1962
MY: 0/14
MX: 2432'><div class=area style='position:absolute; width:29px; height:20px; left:2466px; top:1467px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2432&a_id=741&y=1897' title='Уильям Фолкнер
Писатель
Модернизм, 
Готика
USA
1897-1962
MY: 0/14
MX: 2432'><div class=area style='position:absolute; width:28px; height:20px; left:2495px; top:1467px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1903&a_id=74&y=1898' title='Ян Бжехва
Поэт
Детская, 
Поэзия, Фантастика
POL
1898-1966
MY: 0/-4
MX: 1903'><div class=area style='position:absolute; width:25px; height:20px; left:1937px; top:1368px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1903&a_id=74&y=1898' title='Ян Бжехва
Поэт
Детская, 
Поэзия, Фантастика
POL
1898-1966
MY: 0/-4
MX: 1903'><div class=area style='position:absolute; width:25px; height:20px; left:1962px; top:1368px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2432&a_id=97&y=1898' title='Бертольт Брехт
Драматург
Драматургия, Модернизм, 
Антифашизм, Атеизм, Литература изгнания, Марксизм, Опера, Экспрессионизм, Эпический театр
DEU
1898-1956
MY: 0/5
MX: 2432'><div class=area style='position:absolute; width:21px; height:20px; left:2466px; top:1393px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2432&a_id=97&y=1898' title='Бертольт Брехт
Драматург
Драматургия, Модернизм, 
Антифашизм, Атеизм, Литература изгнания, Марксизм, Опера, Экспрессионизм, Эпический театр
DEU
1898-1956
MY: 0/5
MX: 2432'><div class=area style='position:absolute; width:20px; height:20px; left:2487px; top:1393px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2432&a_id=165&y=1898' title='Ф. Гарсиа Лорка
Поэт
Авангард, Модернизм, 
Драматургия, Поэзия, Символизм, Сюрреализм, Футуризм
SPA
1898-1936
MY: 0/-5
MX: 2432'><div class=area style='position:absolute; width:22px; height:20px; left:2466px; top:1270px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2432&a_id=165&y=1898' title='Ф. Гарсиа Лорка
Поэт
Авангард, Модернизм, 
Драматургия, Поэзия, Символизм, Сюрреализм, Футуризм
SPA
1898-1936
MY: 0/-5
MX: 2432'><div class=area style='position:absolute; width:21px; height:20px; left:2488px; top:1270px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2289&a_id=591&y=1898' title='Эрих Мария Ремарк
Писатель
О любви, Реализм, 
О войне
DEU
1898-1970
MY: 0/0
MX: 2289'><div class=area style='position:absolute; width:27px; height:20px; left:2323px; top:1405px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2289&a_id=591&y=1898' title='Эрих Мария Ремарк
Писатель
О любви, Реализм, 
О войне
DEU
1898-1970
MY: 0/0
MX: 2289'><div class=area style='position:absolute; width:26px; height:20px; left:2350px; top:1405px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1544&a_id=1056&y=1898' title='Клайв Льюис
Писатель
Детская, Религия, Фэнтези, 
Сказка, Фантастика
BRI
1898-1963
MY: 0/-2
MX: 1544'><div class=area style='position:absolute; width:27px; height:20px; left:1578px; top:1375px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1544&a_id=1056&y=1898' title='Клайв Льюис
Писатель
Детская, Религия, Фэнтези, 
Сказка, Фантастика
BRI
1898-1963
MY: 0/-2
MX: 1544'><div class=area style='position:absolute; width:27px; height:20px; left:1605px; top:1375px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=590&a_id=36&y=1899' title='М. А. Астуриас
Писатель
Магический реализм, 
Индейцы
GTM
1899-1974
MY: 0/-16
MX: 590'><div class=area style='position:absolute; width:30px; height:20px; left:624px; top:1325px'></div></a>
<a target=_blank href='build-rlmap.php?mp=590&a_id=36&y=1899' title='М. А. Астуриас
Писатель
Магический реализм, 
Индейцы
GTM
1899-1974
MY: 0/-16
MX: 590'><div class=area style='position:absolute; width:30px; height:20px; left:654px; top:1325px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=590&a_id=93&y=1899' title='Хорхе Луис Борхес
Поэт
Магический реализм, 
Авангард, Поэзия, Публицистика, Философия, Фэнтези
ARG
1899-1986
MY: 0/-14
MX: 590'><div class=area style='position:absolute; width:25px; height:20px; left:624px; top:1375px'></div></a>
<a target=_blank href='build-rlmap.php?mp=590&a_id=93&y=1899' title='Хорхе Луис Борхес
Поэт
Магический реализм, 
Авангард, Поэзия, Публицистика, Философия, Фэнтези
ARG
1899-1986
MY: 0/-14
MX: 590'><div class=area style='position:absolute; width:24px; height:20px; left:649px; top:1375px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2361&a_id=121&y=1899' title='Константин Вагинов

Абсурд, Авангард
RUS
1899-1934
MY: 0/0
MX: 2361'><div class=area style='position:absolute; width:27px; height:20px; left:2395px; top:1301px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2361&a_id=121&y=1899' title='Константин Вагинов

Абсурд, Авангард
RUS
1899-1934
MY: 0/0
MX: 2361'><div class=area style='position:absolute; width:27px; height:20px; left:2422px; top:1301px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2783&a_id=298&y=1899' title='Ясунари Кавабата
Писатель
Лирика
JAP
1899-1972
MY: 0/0
MX: 2783'><div class=area style='position:absolute; width:23px; height:20px; left:2817px; top:1418px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2783&a_id=298&y=1899' title='Ясунари Кавабата
Писатель
Лирика
JAP
1899-1972
MY: 0/0
MX: 2783'><div class=area style='position:absolute; width:22px; height:20px; left:2840px; top:1418px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2056&a_id=330&y=1899' title='Эрих Кестнер
Писатель
Детская, Для подростков, Сатира, Юмор
DEU
1899-1974
MY: 0/4
MX: 2056'><div class=area style='position:absolute; width:27px; height:20px; left:2090px; top:1449px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2056&a_id=330&y=1899' title='Эрих Кестнер
Писатель
Детская, Для подростков, Сатира, Юмор
DEU
1899-1974
MY: 0/4
MX: 2056'><div class=area style='position:absolute; width:27px; height:20px; left:2117px; top:1449px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=742&a_id=393&y=1899' title='Леонид Леонов
Писатель
Соцреализм, 
Религия
RUS
1899-1994
MY: 0/21
MX: 742'><div class=area style='position:absolute; width:26px; height:20px; left:776px; top:1615px'></div></a>
<a target=_blank href='build-rlmap.php?mp=742&a_id=393&y=1899' title='Леонид Леонов
Писатель
Соцреализм, 
Религия
RUS
1899-1994
MY: 0/21
MX: 742'><div class=area style='position:absolute; width:26px; height:20px; left:802px; top:1615px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2645&a_id=493&y=1899' title='Владимир Набоков
Писатель
Антироман, Постмодернизм, 
Абсурд, Антиутопия, Модернизм, Сатира
RUS
1899-1977
MY: 0/0
MX: 2645'><div class=area style='position:absolute; width:28px; height:20px; left:2679px; top:1430px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2645&a_id=493&y=1899' title='Владимир Набоков
Писатель
Антироман, Постмодернизм, 
Абсурд, Антиутопия, Модернизм, Сатира
RUS
1899-1977
MY: 0/0
MX: 2645'><div class=area style='position:absolute; width:28px; height:20px; left:2707px; top:1430px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2134&a_id=530&y=1899' title='Юрий Олеша
Писатель
Детская, Мемуары, 
Драматургия, Сказка
RUS
1899-1960
MY: 0/3
MX: 2134'><div class=area style='position:absolute; width:24px; height:20px; left:2168px; top:1399px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2134&a_id=530&y=1899' title='Юрий Олеша
Писатель
Детская, Мемуары, 
Драматургия, Сказка
RUS
1899-1960
MY: 0/3
MX: 2134'><div class=area style='position:absolute; width:23px; height:20px; left:2192px; top:1399px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2432&a_id=559&y=1899' title='Андрей Платонов
Писатель
Модернизм, 
Антиутопия, Коммунизм, Утопия, Экзистенциализм
RUS
1899-1951
MY: 0/-1
MX: 2432'><div class=area style='position:absolute; width:32px; height:20px; left:2466px; top:1344px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2432&a_id=559&y=1899' title='Андрей Платонов
Писатель
Модернизм, 
Антиутопия, Коммунизм, Утопия, Экзистенциализм
RUS
1899-1951
MY: 0/-1
MX: 2432'><div class=area style='position:absolute; width:31px; height:20px; left:2498px; top:1344px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2432&a_id=765&y=1899' title='Эрнест Хемингуэй
Писатель
Модернизм, Реализм, 
Автобиография, Антифашизм, О войне, О любви, Приключения
USA
1899-1961
MY: 0/18
MX: 2432'><div class=area style='position:absolute; width:31px; height:20px; left:2466px; top:1492px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2432&a_id=765&y=1899' title='Эрнест Хемингуэй
Писатель
Модернизм, Реализм, 
Автобиография, Антифашизм, О войне, О любви, Приключения
USA
1899-1961
MY: 0/18
MX: 2432'><div class=area style='position:absolute; width:31px; height:20px; left:2497px; top:1492px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=742&a_id=279&y=1900' title='Анна Зегерс
Писательница
Соцреализм, 
Коммунист, Социализм
DEU
1900-1983
MY: 0/-6
MX: 742'><div class=area style='position:absolute; width:24px; height:20px; left:776px; top:1418px'></div></a>
<a target=_blank href='build-rlmap.php?mp=742&a_id=279&y=1900' title='Анна Зегерс
Писательница
Соцреализм, 
Коммунист, Социализм
DEU
1900-1983
MY: 0/-6
MX: 742'><div class=area style='position:absolute; width:23px; height:20px; left:800px; top:1418px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=742&a_id=290&y=1900' title='Ильф и Петров

Соцреализм, 
Сатира, Фантастика, Юмор
RUS
1900-1940
MY: 0/-24
MX: 742'><div class=area style='position:absolute; width:27px; height:20px; left:776px; top:1171px'></div></a>
<a target=_blank href='build-rlmap.php?mp=742&a_id=290&y=1900' title='Ильф и Петров

Соцреализм, 
Сатира, Фантастика, Юмор
RUS
1900-1940
MY: 0/-24
MX: 742'><div class=area style='position:absolute; width:26px; height:20px; left:803px; top:1171px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2289&a_id=469&y=1900' title='Маргарет Митчелл
Писательница
О любви, Реализм, 
История, О войне
USA
1900-1949
MY: 0/1
MX: 2289'><div class=area style='position:absolute; width:28px; height:20px; left:2323px; top:1356px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2289&a_id=469&y=1900' title='Маргарет Митчелл
Писательница
О любви, Реализм, 
История, О войне
USA
1900-1949
MY: 0/1
MX: 2289'><div class=area style='position:absolute; width:28px; height:20px; left:2351px; top:1356px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2645&a_id=623&y=1900' title='Натали Саррот
Писательница
Антироман, 
Модернизм
FRA
1900-1999
MY: 0/0
MX: 2645'><div class=area style='position:absolute; width:25px; height:20px; left:2679px; top:1504px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2645&a_id=623&y=1900' title='Натали Саррот
Писательница
Антироман, 
Модернизм
FRA
1900-1999
MY: 0/0
MX: 2645'><div class=area style='position:absolute; width:25px; height:20px; left:2704px; top:1504px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1977&a_id=634&y=1900' title='А. де Сент-Экзюпери
Писатель
Реализм, Фэнтези, 
Автобиография, Детская, О войне, Философия
FRA
1900-1944
MY: 0/0
MX: 1977'><div class=area style='position:absolute; width:31px; height:20px; left:2011px; top:1332px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1977&a_id=634&y=1900' title='А. де Сент-Экзюпери
Писатель
Реализм, Фэнтези, 
Автобиография, Детская, О войне, Философия
FRA
1900-1944
MY: 0/0
MX: 1977'><div class=area style='position:absolute; width:31px; height:20px; left:2042px; top:1332px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=736&y=1900' title='Эдуардо де Филиппо
Комедиограф
Драматургия, Комедия
ITA
1900-1984
MY: 0/-14
MX: 2209'><div class=area style='position:absolute; width:30px; height:20px; left:2243px; top:1368px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2209&a_id=736&y=1900' title='Эдуардо де Филиппо
Комедиограф
Драматургия, Комедия
ITA
1900-1984
MY: 0/-14
MX: 2209'><div class=area style='position:absolute; width:29px; height:20px; left:2273px; top:1368px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2432&a_id=832&y=1900' title='Николай Эрдман
Драматург
Драматургия, 
Авангард, Имажинизм
RUS
1900-1970
MY: 0/29
MX: 2432'><div class=area style='position:absolute; width:26px; height:20px; left:2466px; top:1590px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2432&a_id=832&y=1900' title='Николай Эрдман
Драматург
Драматургия, 
Авангард, Имажинизм
RUS
1900-1970
MY: 0/29
MX: 2432'><div class=area style='position:absolute; width:26px; height:20px; left:2492px; top:1590px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1903&a_id=1059&y=1900' title='Ян Ларри
Писатель
Детская, Фантастика
RUS
1900-1977
MY: 0/-3
MX: 1903'><div class=area style='position:absolute; width:23px; height:20px; left:1937px; top:1418px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1903&a_id=1059&y=1900' title='Ян Ларри
Писатель
Детская, Фантастика
RUS
1900-1977
MY: 0/-3
MX: 1903'><div class=area style='position:absolute; width:22px; height:20px; left:1960px; top:1418px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1468&a_id=434&y=1901' title='Андре Мальро
Писатель
Философия, 
Антифашизм, История
FRA
1901-1976
MY: 0/1
MX: 1468'><div class=area style='position:absolute; width:26px; height:20px; left:1502px; top:1442px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1468&a_id=434&y=1901' title='Андре Мальро
Писатель
Философия, 
Антифашизм, История
FRA
1901-1976
MY: 0/1
MX: 1468'><div class=area style='position:absolute; width:26px; height:20px; left:1528px; top:1442px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=742&a_id=727&y=1901' title='Александр Фадеев
Писатель
Соцреализм, 
Детектив, История, О войне
RUS
1901-1956
MY: 0/-21
MX: 742'><div class=area style='position:absolute; width:26px; height:20px; left:776px; top:1245px'></div></a>
<a target=_blank href='build-rlmap.php?mp=742&a_id=727&y=1901' title='Александр Фадеев
Писатель
Соцреализм, 
Детектив, История, О войне
RUS
1901-1956
MY: 0/-21
MX: 742'><div class=area style='position:absolute; width:26px; height:20px; left:802px; top:1245px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=140&a_id=92&y=1902' title='Юхан Борген
Писатель
Экзистенциализм, 
Психология
NOR
1902-1979
MY: 0/-1
MX: 140'><div class=area style='position:absolute; width:24px; height:20px; left:174px; top:1442px'></div></a>
<a target=_blank href='build-rlmap.php?mp=140&a_id=92&y=1902' title='Юхан Борген
Писатель
Экзистенциализм, 
Психология
NOR
1902-1979
MY: 0/-1
MX: 140'><div class=area style='position:absolute; width:23px; height:20px; left:198px; top:1442px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1903&a_id=300&y=1902' title='Вениамин Каверин
Писатель
Детская, Соцреализм, 
Приключения, Реализм, Фантастика
RUS
1902-1989
MY: 0/-2
MX: 1903'><div class=area style='position:absolute; width:30px; height:20px; left:1937px; top:1467px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1903&a_id=300&y=1902' title='Вениамин Каверин
Писатель
Детская, Соцреализм, 
Приключения, Реализм, Фантастика
RUS
1902-1989
MY: 0/-2
MX: 1903'><div class=area style='position:absolute; width:30px; height:20px; left:1967px; top:1467px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2506&a_id=382&y=1902' title='Халлдор Лакснесс
Писатель
Реализм, Сюрреализм, Экспрессионизм, 
Автобиография, Драматургия, Коммунист, Пацифизм, Социализм
ISL
1902-1998
MY: 0/0
MX: 2506'><div class=area style='position:absolute; width:27px; height:20px; left:2540px; top:1504px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2506&a_id=382&y=1902' title='Халлдор Лакснесс
Писатель
Реализм, Сюрреализм, Экспрессионизм, 
Автобиография, Драматургия, Коммунист, Пацифизм, Социализм
ISL
1902-1998
MY: 0/0
MX: 2506'><div class=area style='position:absolute; width:26px; height:20px; left:2567px; top:1504px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2056&a_id=533&y=1902' title='В. А. Осеева
Писательница
Детская, Для подростков, Соцреализм, 
Автобиография, О войне, О любви, Приключения
RUS
1902-1969
MY: 0/-3
MX: 2056'><div class=area style='position:absolute; width:26px; height:20px; left:2090px; top:1399px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2056&a_id=533&y=1902' title='В. А. Осеева
Писательница
Детская, Для подростков, Соцреализм, 
Автобиография, О войне, О любви, Приключения
RUS
1902-1969
MY: 0/-3
MX: 2056'><div class=area style='position:absolute; width:26px; height:20px; left:2116px; top:1399px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1067&a_id=661&y=1902' title='Джон Стейнбек
Автор
Натурализм, 
Реализм
USA
1902-1968
MY: 0/0
MX: 1067'><div class=area style='position:absolute; width:31px; height:20px; left:1101px; top:1412px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1067&a_id=661&y=1902' title='Джон Стейнбек
Автор
Натурализм, 
Реализм
USA
1902-1968
MY: 0/0
MX: 1067'><div class=area style='position:absolute; width:31px; height:20px; left:1132px; top:1412px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=141&y=1903' title='Ивлин Во
Писатель-романист
Сатира, Юмор, 
Антикоммунизм, Беллетристика, Биография, Путешествия
BRI
1903-1966
MY: 0/-15
MX: 2209'><div class=area style='position:absolute; width:11px; height:20px; left:2243px; top:1319px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2209&a_id=141&y=1903' title='Ивлин Во
Писатель-романист
Сатира, Юмор, 
Антикоммунизм, Беллетристика, Биография, Путешествия
BRI
1903-1966
MY: 0/-15
MX: 2209'><div class=area style='position:absolute; width:11px; height:20px; left:2254px; top:1319px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2715&a_id=327&y=1903' title='Раймон Кено
Писатель
Сюрреализм, 
Коммунизм, О любви, Юмор
FRA
1903-1976
MY: 0/6
MX: 2715'><div class=area style='position:absolute; width:18px; height:20px; left:2749px; top:1479px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2715&a_id=327&y=1903' title='Раймон Кено
Писатель
Сюрреализм, 
Коммунизм, О любви, Юмор
FRA
1903-1976
MY: 0/6
MX: 2715'><div class=area style='position:absolute; width:17px; height:20px; left:2767px; top:1479px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1903&a_id=379&y=1903' title='Л. И. Лагин
Писатель
Детская, Сатира, Соцреализм, Фантастика
RUS
1903-1979
MY: 0/-1
MX: 1903'><div class=area style='position:absolute; width:21px; height:20px; left:1937px; top:1442px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1903&a_id=379&y=1903' title='Л. И. Лагин
Писатель
Детская, Сатира, Соцреализм, Фантастика
RUS
1903-1979
MY: 0/-1
MX: 1903'><div class=area style='position:absolute; width:21px; height:20px; left:1958px; top:1442px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1701&a_id=531&y=1903' title='Джордж Оруэлл
Писатель
Антиутопия, 
Сатира, Фантастика
BRI
1903-1950
MY: 0/0
MX: 1701'><div class=area style='position:absolute; width:28px; height:20px; left:1735px; top:1362px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1701&a_id=531&y=1903' title='Джордж Оруэлл
Писатель
Антиутопия, 
Сатира, Фантастика
BRI
1903-1950
MY: 0/0
MX: 1701'><div class=area style='position:absolute; width:27px; height:20px; left:1763px; top:1362px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=667&a_id=637&y=1903' title='Жорж Сименон
Писатель
Детектив, 
Мемуары
BEL
1903-1989
MY: 0/-20
MX: 667'><div class=area style='position:absolute; width:30px; height:20px; left:701px; top:1356px'></div></a>
<a target=_blank href='build-rlmap.php?mp=667&a_id=637&y=1903' title='Жорж Сименон
Писатель
Детектив, 
Мемуары
BEL
1903-1989
MY: 0/-20
MX: 667'><div class=area style='position:absolute; width:29px; height:20px; left:731px; top:1356px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1219&a_id=841&y=1903' title='Маргерит Юрсенар
Писательница
История
FRA
1903-1987
MY: 0/2
MX: 1219'><div class=area style='position:absolute; width:31px; height:20px; left:1253px; top:1486px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1219&a_id=841&y=1903' title='Маргерит Юрсенар
Писательница
История
FRA
1903-1987
MY: 0/2
MX: 1219'><div class=area style='position:absolute; width:30px; height:20px; left:1284px; top:1486px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2361&a_id=1119&y=1903' title='Николай Заболоцкий
Поэт-песенник
Абсурд, Поэзия, 
Авангард, ОБЭРИУ
RUS
1903-1958
MY: 0/0
MX: 2361'><div class=area style='position:absolute; width:30px; height:20px; left:2395px; top:1387px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2361&a_id=1119&y=1903' title='Николай Заболоцкий
Поэт-песенник
Абсурд, Поэзия, 
Авангард, ОБЭРИУ
RUS
1903-1958
MY: 0/0
MX: 2361'><div class=area style='position:absolute; width:30px; height:20px; left:2425px; top:1387px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1219&a_id=1062&y=1903' title='Ирвинг Стоун
Писатель
Биография, История, 
Психология
USA
1903-1989
MY: 0/5
MX: 1219'><div class=area style='position:absolute; width:20px; height:20px; left:1253px; top:1510px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1219&a_id=1062&y=1903' title='Ирвинг Стоун
Писатель
Биография, История, 
Психология
USA
1903-1989
MY: 0/5
MX: 1219'><div class=area style='position:absolute; width:20px; height:20px; left:1273px; top:1510px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2056&a_id=156&y=1904' title='Аркадий Гайдар
Писатель
Детская, Для подростков, 
Коммунист, Революционер, Сказка, Фантастика
RUS
1904-1941
MY: 0/-6
MX: 2056'><div class=area style='position:absolute; width:25px; height:20px; left:2090px; top:1301px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2056&a_id=156&y=1904' title='Аркадий Гайдар
Писатель
Детская, Для подростков, 
Коммунист, Революционер, Сказка, Фантастика
RUS
1904-1941
MY: 0/-6
MX: 2056'><div class=area style='position:absolute; width:24px; height:20px; left:2115px; top:1301px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=667&a_id=212&y=1904' title='Грэм Грин
Писатель
Детектив, 
Политика, Приключения, Религия
BRI
1904-1991
MY: 0/-14
MX: 667'><div class=area style='position:absolute; width:23px; height:20px; left:701px; top:1405px'></div></a>
<a target=_blank href='build-rlmap.php?mp=667&a_id=212&y=1904' title='Грэм Грин
Писатель
Детектив, 
Политика, Приключения, Религия
BRI
1904-1991
MY: 0/-14
MX: 667'><div class=area style='position:absolute; width:22px; height:20px; left:724px; top:1405px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=590&a_id=280&y=1904' title='Исаак Зингер
Писатель
Магический реализм
USA
1904-1991
MY: 0/-15
MX: 590'><div class=area style='position:absolute; width:24px; height:20px; left:624px; top:1399px'></div></a>
<a target=_blank href='build-rlmap.php?mp=590&a_id=280&y=1904' title='Исаак Зингер
Писатель
Магический реализм
USA
1904-1991
MY: 0/-15
MX: 590'><div class=area style='position:absolute; width:23px; height:20px; left:648px; top:1399px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=590&a_id=317&y=1904' title='Алехо Карпентьер
Писатель
Магический реализм
CUB
1904-1980
MY: 0/-17
MX: 590'><div class=area style='position:absolute; width:29px; height:20px; left:624px; top:1350px'></div></a>
<a target=_blank href='build-rlmap.php?mp=590&a_id=317&y=1904' title='Алехо Карпентьер
Писатель
Магический реализм
CUB
1904-1980
MY: 0/-17
MX: 590'><div class=area style='position:absolute; width:28px; height:20px; left:653px; top:1350px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1622&a_id=445&y=1904' title='Харри Мартинсон
Писатель
Фантастика, 
Символизм
SWE
1904-1978
MY: 0/-13
MX: 1622'><div class=area style='position:absolute; width:36px; height:20px; left:1656px; top:1368px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1622&a_id=445&y=1904' title='Харри Мартинсон
Писатель
Фантастика, 
Символизм
SWE
1904-1978
MY: 0/-13
MX: 1622'><div class=area style='position:absolute; width:36px; height:20px; left:1692px; top:1368px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2715&a_id=503&y=1904' title='Пабло Неруда
Поэт
Сюрреализм, 
Атеизм, Коммунизм, Модернизм, Поэзия
CHL
1904-1973
MY: 0/-1
MX: 2715'><div class=area style='position:absolute; width:25px; height:20px; left:2749px; top:1430px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2715&a_id=503&y=1904' title='Пабло Неруда
Поэт
Сюрреализм, 
Атеизм, Коммунизм, Модернизм, Поэзия
CHL
1904-1973
MY: 0/-1
MX: 2715'><div class=area style='position:absolute; width:24px; height:20px; left:2774px; top:1430px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=742&a_id=536&y=1904' title='Н. А. Островский
Писатель
Соцреализм, 
Автобиография, История, О войне
RUS
1904-1936
MY: 0/-20
MX: 742'><div class=area style='position:absolute; width:39px; height:20px; left:776px; top:1196px'></div></a>
<a target=_blank href='build-rlmap.php?mp=742&a_id=536&y=1904' title='Н. А. Островский
Писатель
Соцреализм, 
Автобиография, История, О войне
RUS
1904-1936
MY: 0/-20
MX: 742'><div class=area style='position:absolute; width:38px; height:20px; left:815px; top:1196px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1977&a_id=618&y=1904' title='Клиффорд Саймак
Писатель
Фантастика, Фэнтези
USA
1904-1988
MY: 0/-9
MX: 1977'><div class=area style='position:absolute; width:26px; height:20px; left:2011px; top:1424px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1977&a_id=618&y=1904' title='Клиффорд Саймак
Писатель
Фантастика, Фэнтези
USA
1904-1988
MY: 0/-9
MX: 1977'><div class=area style='position:absolute; width:25px; height:20px; left:2037px; top:1424px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1219&a_id=1156&y=1904' title='Евгения Гинзбург

История, Мемуары
RUS
1904-1977
MY: 0/2
MX: 1219'><div class=area style='position:absolute; width:29px; height:20px; left:1253px; top:1461px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1219&a_id=1156&y=1904' title='Евгения Гинзбург

История, Мемуары
RUS
1904-1977
MY: 0/2
MX: 1219'><div class=area style='position:absolute; width:29px; height:20px; left:1282px; top:1461px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1219&a_id=1125&y=1904' title='Ирина Головкина (Римская-Корсакова)
Писательница
История
RUS
1904-1989
MY: 0/8
MX: 1219'><div class=area style='position:absolute; width:34px; height:20px; left:1253px; top:1535px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1219&a_id=1125&y=1904' title='Ирина Головкина (Римская-Корсакова)
Писательница
История
RUS
1904-1989
MY: 0/8
MX: 1219'><div class=area style='position:absolute; width:34px; height:20px; left:1287px; top:1535px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2715&a_id=1238&y=1904' title='Сальвадор Дали
Живописец
Автобиография, Сюрреализм
SPA
1904-1989
MY: 0/3
MX: 2715'><div class=area style='position:absolute; width:19px; height:20px; left:2749px; top:1504px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2715&a_id=1238&y=1904' title='Сальвадор Дали
Живописец
Автобиография, Сюрреализм
SPA
1904-1989
MY: 0/3
MX: 2715'><div class=area style='position:absolute; width:18px; height:20px; left:2768px; top:1504px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=836&a_id=214&y=1905' title='Василий Гроссман
Писатель
О войне, 
История
RUS
1905-1964
MY: 0/-16
MX: 836'><div class=area style='position:absolute; width:32px; height:20px; left:870px; top:1313px'></div></a>
<a target=_blank href='build-rlmap.php?mp=836&a_id=214&y=1905' title='Василий Гроссман
Писатель
О войне, 
История
RUS
1905-1964
MY: 0/-16
MX: 836'><div class=area style='position:absolute; width:32px; height:20px; left:902px; top:1313px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2056&a_id=318&y=1905' title='Лев Кассиль
Писатель
Детская, Для подростков, Соцреализм, 
О войне, Приключения, Юмор
RUS
1905-1970
MY: 0/7
MX: 2056'><div class=area style='position:absolute; width:28px; height:20px; left:2090px; top:1473px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2056&a_id=318&y=1905' title='Лев Кассиль
Писатель
Детская, Для подростков, Соцреализм, 
О войне, Приключения, Юмор
RUS
1905-1970
MY: 0/7
MX: 2056'><div class=area style='position:absolute; width:27px; height:20px; left:2118px; top:1473px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1468&a_id=613&y=1905' title='Айн Рэнд
Писательница
Беллетристика, Объективизм, Философия, 
Либертарианство, Политика
USA
1905-1982
MY: 0/0
MX: 1468'><div class=area style='position:absolute; width:18px; height:20px; left:1502px; top:1467px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1468&a_id=613&y=1905' title='Айн Рэнд
Писательница
Беллетристика, Объективизм, Философия, 
Либертарианство, Политика
USA
1905-1982
MY: 0/0
MX: 1468'><div class=area style='position:absolute; width:18px; height:20px; left:1520px; top:1467px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=140&a_id=624&y=1905' title='Жан-Поль Сартр
Философ
Экзистенциализм, 
Антифашизм, Атеизм, Марксизм, Пацифизм, Политика, Философия
FRA
1905-1980
MY: 0/1
MX: 140'><div class=area style='position:absolute; width:21px; height:20px; left:174px; top:1467px'></div></a>
<a target=_blank href='build-rlmap.php?mp=140&a_id=624&y=1905' title='Жан-Поль Сартр
Философ
Экзистенциализм, 
Антифашизм, Атеизм, Марксизм, Пацифизм, Политика, Философия
FRA
1905-1980
MY: 0/1
MX: 140'><div class=area style='position:absolute; width:21px; height:20px; left:195px; top:1467px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=667&a_id=647&y=1905' title='Чарльз П. Сноу
Писатель
Детектив, 
Политика, Психология
BRI
1905-1980
MY: 0/-21
MX: 667'><div class=area style='position:absolute; width:18px; height:20px; left:701px; top:1332px'></div></a>
<a target=_blank href='build-rlmap.php?mp=667&a_id=647&y=1905' title='Чарльз П. Сноу
Писатель
Детектив, 
Политика, Психология
BRI
1905-1980
MY: 0/-21
MX: 667'><div class=area style='position:absolute; width:18px; height:20px; left:719px; top:1332px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2056&a_id=707&y=1905' title='Г. Н. Троепольский
Писатель
Детская, Для подростков, 
О животных, Соцреализм
RUS
1905-1995
MY: 0/7
MX: 2056'><div class=area style='position:absolute; width:31px; height:20px; left:2090px; top:1547px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2056&a_id=707&y=1905' title='Г. Н. Троепольский
Писатель
Детская, Для подростков, 
О животных, Соцреализм
RUS
1905-1995
MY: 0/7
MX: 2056'><div class=area style='position:absolute; width:30px; height:20px; left:2121px; top:1547px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=742&a_id=817&y=1905' title='Михаил Шолохов
Писатель
Соцреализм, 
История, О войне, О любви
RUS
1905-1984
MY: 0/7
MX: 742'><div class=area style='position:absolute; width:33px; height:20px; left:776px; top:1516px'></div></a>
<a target=_blank href='build-rlmap.php?mp=742&a_id=817&y=1905' title='Михаил Шолохов
Писатель
Соцреализм, 
История, О войне, О любви
RUS
1905-1984
MY: 0/7
MX: 742'><div class=area style='position:absolute; width:32px; height:20px; left:809px; top:1516px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=742&a_id=1153&y=1905' title='Вера Панова
Писательница
Соцреализм, 
Детская, Драматургия
RUS
1905-1973
MY: 0/-23
MX: 742'><div class=area style='position:absolute; width:26px; height:20px; left:776px; top:1295px'></div></a>
<a target=_blank href='build-rlmap.php?mp=742&a_id=1153&y=1905' title='Вера Панова
Писательница
Соцреализм, 
Детская, Драматургия
RUS
1905-1973
MY: 0/-23
MX: 742'><div class=area style='position:absolute; width:25px; height:20px; left:802px; top:1295px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2361&a_id=1145&y=1905' title='Даниил Хармс
Писатель
Абсурд, 
Магический реализм
RUS
1905-1942
MY: 0/0
MX: 2361'><div class=area style='position:absolute; width:23px; height:20px; left:2395px; top:1344px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2361&a_id=1145&y=1905' title='Даниил Хармс
Писатель
Абсурд, 
Магический реализм
RUS
1905-1942
MY: 0/0
MX: 2361'><div class=area style='position:absolute; width:22px; height:20px; left:2418px; top:1344px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2361&a_id=57&y=1906' title='Сэмюэл Беккет
Писатель
Абсурд, Драматургия, 
Модернизм
IRL
1906-1989
MY: 0/0
MX: 2361'><div class=area style='position:absolute; width:23px; height:20px; left:2395px; top:1492px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2361&a_id=57&y=1906' title='Сэмюэл Беккет
Писатель
Абсурд, Драматургия, 
Модернизм
IRL
1906-1989
MY: 0/0
MX: 2361'><div class=area style='position:absolute; width:22px; height:20px; left:2418px; top:1492px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=140&a_id=111&y=1906' title='Дино Буццати
Писатель
Экзистенциализм
ITA
1906-1972
MY: 0/-3
MX: 140'><div class=area style='position:absolute; width:27px; height:20px; left:174px; top:1418px'></div></a>
<a target=_blank href='build-rlmap.php?mp=140&a_id=111&y=1906' title='Дино Буццати
Писатель
Экзистенциализм
ITA
1906-1972
MY: 0/-3
MX: 140'><div class=area style='position:absolute; width:26px; height:20px; left:201px; top:1418px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=667&a_id=1170&y=1906' title='Джеймс Хедли Чейз
Писатель
Детектив
BRI
1906-1985
MY: 0/-16
MX: 667'><div class=area style='position:absolute; width:18px; height:20px; left:701px; top:1381px'></div></a>
<a target=_blank href='build-rlmap.php?mp=667&a_id=1170&y=1906' title='Джеймс Хедли Чейз
Писатель
Детектив
BRI
1906-1985
MY: 0/-16
MX: 667'><div class=area style='position:absolute; width:17px; height:20px; left:719px; top:1381px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2134&a_id=1080&y=1906' title='Агния Барто
Поэтесса
Детская, Поэзия
RUS
1906-1981
MY: 0/1
MX: 2134'><div class=area style='position:absolute; width:21px; height:20px; left:2168px; top:1473px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2134&a_id=1080&y=1906' title='Агния Барто
Поэтесса
Детская, Поэзия
RUS
1906-1981
MY: 0/1
MX: 2134'><div class=area style='position:absolute; width:20px; height:20px; left:2189px; top:1473px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=1044&y=1906' title='Леонид Соловьёв
Писатель
Плутовской роман, Реализм, Фольклор, Юмор, 
Притча, Публицистика
RUS
1906-1962
MY: 0/-18
MX: 2209'><div class=area style='position:absolute; width:32px; height:20px; left:2243px; top:1295px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2209&a_id=1044&y=1906' title='Леонид Соловьёв
Писатель
Плутовской роман, Реализм, Фольклор, Юмор, 
Притча, Публицистика
RUS
1906-1962
MY: 0/-18
MX: 2209'><div class=area style='position:absolute; width:32px; height:20px; left:2275px; top:1295px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1544&a_id=1235&y=1906' title='Даниил Андреев
Писатель
Мистицизм, Религия, 
Философия
RUS
1906-1959
MY: 0/0
MX: 1544'><div class=area style='position:absolute; width:29px; height:20px; left:1578px; top:1399px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1544&a_id=1235&y=1906' title='Даниил Андреев
Писатель
Мистицизм, Религия, 
Философия
RUS
1906-1959
MY: 0/0
MX: 1544'><div class=area style='position:absolute; width:28px; height:20px; left:1607px; top:1399px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2134&a_id=407&y=1907' title='Астрид Линдгрен
Писательница
Детская
SWE
1907-2002
MY: 0/6
MX: 2134'><div class=area style='position:absolute; width:28px; height:20px; left:2168px; top:1572px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2134&a_id=407&y=1907' title='Астрид Линдгрен
Писательница
Детская
SWE
1907-2002
MY: 0/6
MX: 2134'><div class=area style='position:absolute; width:28px; height:20px; left:2196px; top:1572px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=140&a_id=479&y=1907' title='Альберто Моравиа
Писатель
Экзистенциализм, 
Атеизм, Психология, Эротика
ITA
1907-1990
MY: 0/3
MX: 140'><div class=area style='position:absolute; width:30px; height:20px; left:174px; top:1516px'></div></a>
<a target=_blank href='build-rlmap.php?mp=140&a_id=479&y=1907' title='Альберто Моравиа
Писатель
Экзистенциализм, 
Атеизм, Психология, Эротика
ITA
1907-1990
MY: 0/3
MX: 140'><div class=area style='position:absolute; width:30px; height:20px; left:204px; top:1516px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=798&y=1907' title='Варлам Шаламов
Поэт
Реализм, 
Модернизм, Неоромантизм, Постмодернизм, Поэзия, Символизм
RUS
1907-1982
MY: 0/3
MX: 1302'><div class=area style='position:absolute; width:31px; height:20px; left:1336px; top:1492px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1302&a_id=798&y=1907' title='Варлам Шаламов
Поэт
Реализм, 
Модернизм, Неоромантизм, Постмодернизм, Поэзия, Символизм
RUS
1907-1982
MY: 0/3
MX: 1302'><div class=area style='position:absolute; width:30px; height:20px; left:1367px; top:1492px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1622&a_id=1096&y=1907' title='Роберт Хайнлайн
Писатель
Фантастика, 
О войне, Приключения, Философия, Футурология, Фэнтези
USA
1907-1988
MY: 0/-16
MX: 1622'><div class=area style='position:absolute; width:33px; height:20px; left:1656px; top:1393px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1622&a_id=1096&y=1907' title='Роберт Хайнлайн
Писатель
Фантастика, 
О войне, Приключения, Философия, Футурология, Фэнтези
USA
1907-1988
MY: 0/-16
MX: 1622'><div class=area style='position:absolute; width:32px; height:20px; left:1689px; top:1393px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1766&a_id=1091&y=1907' title='Дафна дю Морье
Писательница
Готика, Триллер, 
Биография, Детектив, История, Мистицизм, О любви, Психология
BRI
1907-1989
MY: 0/0
MX: 1766'><div class=area style='position:absolute; width:23px; height:20px; left:1800px; top:1492px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1766&a_id=1091&y=1907' title='Дафна дю Морье
Писательница
Готика, Триллер, 
Биография, Детектив, История, Мистицизм, О любви, Психология
BRI
1907-1989
MY: 0/0
MX: 1766'><div class=area style='position:absolute; width:23px; height:20px; left:1823px; top:1492px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2134&a_id=1073&y=1907' title='Андрей Некрасов
Писатель
Детская, 
Юмор
RUS
1907-1987
MY: 0/2
MX: 2134'><div class=area style='position:absolute; width:32px; height:20px; left:2168px; top:1498px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2134&a_id=1073&y=1907' title='Андрей Некрасов
Писатель
Детская, 
Юмор
RUS
1907-1987
MY: 0/2
MX: 2134'><div class=area style='position:absolute; width:31px; height:20px; left:2200px; top:1498px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=742&a_id=29&y=1908' title='Алексей Арбузов
Драматург
Соцреализм, 
Драматургия
RUS
1908-1986
MY: 0/25
MX: 742'><div class=area style='position:absolute; width:27px; height:20px; left:776px; top:1640px'></div></a>
<a target=_blank href='build-rlmap.php?mp=742&a_id=29&y=1908' title='Алексей Арбузов
Драматург
Соцреализм, 
Драматургия
RUS
1908-1986
MY: 0/25
MX: 742'><div class=area style='position:absolute; width:27px; height:20px; left:803px; top:1640px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=140&a_id=84&y=1908' title='Симона де Бовуар
Писательница
Экзистенциализм, 
Марксизм, Феминизм, Философия
FRA
1908-1986
MY: 0/1
MX: 140'><div class=area style='position:absolute; width:24px; height:20px; left:174px; top:1492px'></div></a>
<a target=_blank href='build-rlmap.php?mp=140&a_id=84&y=1908' title='Симона де Бовуар
Писательница
Экзистенциализм, 
Марксизм, Феминизм, Философия
FRA
1908-1986
MY: 0/1
MX: 140'><div class=area style='position:absolute; width:24px; height:20px; left:198px; top:1492px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=742&a_id=275&y=1908' title='Виталий Закруткин
Писатель
Соцреализм
RUS
1908-1984
MY: 0/18
MX: 742'><div class=area style='position:absolute; width:32px; height:20px; left:776px; top:1590px'></div></a>
<a target=_blank href='build-rlmap.php?mp=742&a_id=275&y=1908' title='Виталий Закруткин
Писатель
Соцреализм
RUS
1908-1984
MY: 0/18
MX: 742'><div class=area style='position:absolute; width:31px; height:20px; left:808px; top:1590px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=742&a_id=509&y=1908' title='Павел Нилин
Писатель
Соцреализм, 
Драматургия
RUS
1908-1981
MY: 0/11
MX: 742'><div class=area style='position:absolute; width:22px; height:20px; left:776px; top:1541px'></div></a>
<a target=_blank href='build-rlmap.php?mp=742&a_id=509&y=1908' title='Павел Нилин
Писатель
Соцреализм, 
Драматургия
RUS
1908-1981
MY: 0/11
MX: 742'><div class=area style='position:absolute; width:22px; height:20px; left:798px; top:1541px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2134&a_id=516&y=1908' title='Николай Носов
Писатель
Детская, 
Соцреализм
RUS
1908-1976
MY: 0/-5
MX: 2134'><div class=area style='position:absolute; width:28px; height:20px; left:2168px; top:1424px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2134&a_id=516&y=1908' title='Николай Носов
Писатель
Детская, 
Соцреализм
RUS
1908-1976
MY: 0/-5
MX: 2134'><div class=area style='position:absolute; width:28px; height:20px; left:2196px; top:1424px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2289&a_id=539&y=1908' title='Чезаре Павезе
Писатель
О любви, 
Коммунист
ITA
1908-1950
MY: 0/1
MX: 2289'><div class=area style='position:absolute; width:26px; height:20px; left:2323px; top:1381px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2289&a_id=539&y=1908' title='Чезаре Павезе
Писатель
О любви, 
Коммунист
ITA
1908-1950
MY: 0/1
MX: 2289'><div class=area style='position:absolute; width:25px; height:20px; left:2349px; top:1381px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2056&a_id=541&y=1908' title='Л. Пантелеев
Писатель
Для подростков, 
Реализм
RUS
1908-1987
MY: 0/5
MX: 2056'><div class=area style='position:absolute; width:33px; height:20px; left:2090px; top:1522px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2056&a_id=541&y=1908' title='Л. Пантелеев
Писатель
Для подростков, 
Реализм
RUS
1908-1987
MY: 0/5
MX: 2056'><div class=area style='position:absolute; width:32px; height:20px; left:2123px; top:1522px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=742&a_id=565&y=1908' title='Б. Н. Полевой

Соцреализм, 
История, О войне
RUS
1908-1981
MY: 0/15
MX: 742'><div class=area style='position:absolute; width:29px; height:20px; left:776px; top:1566px'></div></a>
<a target=_blank href='build-rlmap.php?mp=742&a_id=565&y=1908' title='Б. Н. Полевой

Соцреализм, 
История, О войне
RUS
1908-1981
MY: 0/15
MX: 742'><div class=area style='position:absolute; width:29px; height:20px; left:805px; top:1566px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=742&a_id=1108&y=1908' title='Константин Седых
Писатель
Соцреализм, 
История
RUS
1908-1979
MY: 0/-4
MX: 742'><div class=area style='position:absolute; width:24px; height:20px; left:776px; top:1442px'></div></a>
<a target=_blank href='build-rlmap.php?mp=742&a_id=1108&y=1908' title='Константин Седых
Писатель
Соцреализм, 
История
RUS
1908-1979
MY: 0/-4
MX: 742'><div class=area style='position:absolute; width:23px; height:20px; left:800px; top:1442px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1838&a_id=1034&y=1908' title='Иван Ефремов
Писатель
Твердая научная фантастика, 
Антиутопия, Для подростков, История, Приключения, Утопия, Фантастика, Философия
RUS
1908-1972
MY: 0/0
MX: 1838'><div class=area style='position:absolute; width:27px; height:20px; left:1872px; top:1442px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1838&a_id=1034&y=1908' title='Иван Ефремов
Писатель
Твердая научная фантастика, 
Антиутопия, Для подростков, История, Приключения, Утопия, Фантастика, Философия
RUS
1908-1972
MY: 0/0
MX: 1838'><div class=area style='position:absolute; width:26px; height:20px; left:1899px; top:1442px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=1208&y=1908' title='Ханс Вернер Рихтер
Писатель
Реализм, 
Антифашизм, Коммунист
DEU
1908-1993
MY: 0/1
MX: 1302'><div class=area style='position:absolute; width:24px; height:20px; left:1336px; top:1516px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1302&a_id=1208&y=1908' title='Ханс Вернер Рихтер
Писатель
Реализм, 
Антифашизм, Коммунист
DEU
1908-1993
MY: 0/1
MX: 1302'><div class=area style='position:absolute; width:23px; height:20px; left:1360px; top:1516px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=742&a_id=64&y=1909' title='В. П. Беляев
Писатель
Соцреализм, 
Детская, Приключения, Публицистика
RUS
1909-1990
MY: 0/30
MX: 742'><div class=area style='position:absolute; width:31px; height:20px; left:776px; top:1689px'></div></a>
<a target=_blank href='build-rlmap.php?mp=742&a_id=64&y=1909' title='В. П. Беляев
Писатель
Соцреализм, 
Детская, Приключения, Публицистика
RUS
1909-1990
MY: 0/30
MX: 742'><div class=area style='position:absolute; width:30px; height:20px; left:807px; top:1689px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2783&a_id=223&y=1909' title='Осаму Дадзай
Писатель
Автобиография
JAP
1909-1948
MY: 0/1
MX: 2783'><div class=area style='position:absolute; width:25px; height:20px; left:2817px; top:1381px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2783&a_id=223&y=1909' title='Осаму Дадзай
Писатель
Автобиография
JAP
1909-1948
MY: 0/1
MX: 2783'><div class=area style='position:absolute; width:25px; height:20px; left:2842px; top:1381px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=742&a_id=249&y=1909' title='Юрий Домбровский

Соцреализм, 
История
RUS
1909-1978
MY: 0/0
MX: 742'><div class=area style='position:absolute; width:37px; height:20px; left:776px; top:1467px'></div></a>
<a target=_blank href='build-rlmap.php?mp=742&a_id=249&y=1909' title='Юрий Домбровский

Соцреализм, 
История
RUS
1909-1978
MY: 0/0
MX: 742'><div class=area style='position:absolute; width:37px; height:20px; left:813px; top:1467px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2361&a_id=291&y=1909' title='Эжен Ионеско
Драматург
Абсурд, Дадаизм, Драматургия, 
Авангард, Фантастика
FRA
1909-1994
MY: 0/0
MX: 2361'><div class=area style='position:absolute; width:28px; height:20px; left:2395px; top:1516px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2361&a_id=291&y=1909' title='Эжен Ионеско
Драматург
Абсурд, Дадаизм, Драматургия, 
Авангард, Фантастика
FRA
1909-1994
MY: 0/0
MX: 2361'><div class=area style='position:absolute; width:28px; height:20px; left:2423px; top:1516px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=1150&y=1909' title='Станислав Ежи Лец
Писатель
Сатира, Философия, 
Юмор
POL
1909-1966
MY: 0/-14
MX: 2209'><div class=area style='position:absolute; width:16px; height:20px; left:2243px; top:1344px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2209&a_id=1150&y=1909' title='Станислав Ежи Лец
Писатель
Сатира, Философия, 
Юмор
POL
1909-1966
MY: 0/-14
MX: 2209'><div class=area style='position:absolute; width:16px; height:20px; left:2259px; top:1344px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=836&a_id=1057&y=1909' title='Вадим Кожевников
Писатель
О войне, Соцреализм
RUS
1909-1984
MY: 0/-20
MX: 836'><div class=area style='position:absolute; width:33px; height:20px; left:870px; top:1362px'></div></a>
<a target=_blank href='build-rlmap.php?mp=836&a_id=1057&y=1909' title='Вадим Кожевников
Писатель
О войне, Соцреализм
RUS
1909-1984
MY: 0/-20
MX: 836'><div class=area style='position:absolute; width:32px; height:20px; left:903px; top:1362px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2432&a_id=24&y=1910' title='Жан Ануй
Драматург
Драматургия, Модернизм
FRA
1910-1987
MY: 0/19
MX: 2432'><div class=area style='position:absolute; width:17px; height:20px; left:2466px; top:1615px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2432&a_id=24&y=1910' title='Жан Ануй
Драматург
Драматургия, Модернизм
FRA
1910-1987
MY: 0/19
MX: 2432'><div class=area style='position:absolute; width:17px; height:20px; left:2483px; top:1615px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2134&a_id=257&y=1910' title='Н. И. Дубов
Писатель
Детская, Соцреализм
RUS
1910-1983
MY: 0/6
MX: 2134'><div class=area style='position:absolute; width:21px; height:20px; left:2168px; top:1522px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2134&a_id=257&y=1910' title='Н. И. Дубов
Писатель
Детская, Соцреализм
RUS
1910-1983
MY: 0/6
MX: 2134'><div class=area style='position:absolute; width:21px; height:20px; left:2189px; top:1522px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=742&a_id=683&y=1910' title='А. Твардовский
Писатель
Поэзия, Соцреализм, 
История, О войне
RUS
1910-1971
MY: 0/-17
MX: 742'><div class=area style='position:absolute; width:37px; height:20px; left:776px; top:1344px'></div></a>
<a target=_blank href='build-rlmap.php?mp=742&a_id=683&y=1910' title='А. Твардовский
Писатель
Поэзия, Соцреализм, 
История, О войне
RUS
1910-1971
MY: 0/-17
MX: 742'><div class=area style='position:absolute; width:36px; height:20px; left:813px; top:1344px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=742&a_id=1185&y=1910' title='Юрий Герман
Писатель
Драматургия, Соцреализм, 
История
RUS
1910-1967
MY: 0/-19
MX: 742'><div class=area style='position:absolute; width:25px; height:20px; left:776px; top:1319px'></div></a>
<a target=_blank href='build-rlmap.php?mp=742&a_id=1185&y=1910' title='Юрий Герман
Писатель
Драматургия, Соцреализм, 
История
RUS
1910-1967
MY: 0/-19
MX: 742'><div class=area style='position:absolute; width:25px; height:20px; left:801px; top:1319px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=42&y=1911' title='Эрве Базен
Писатель
Реализм, 
Коммунист, Пацифизм
FRA
1911-1996
MY: 0/10
MX: 1302'><div class=area style='position:absolute; width:21px; height:20px; left:1336px; top:1590px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1302&a_id=42&y=1911' title='Эрве Базен
Писатель
Реализм, 
Коммунист, Пацифизм
FRA
1911-1996
MY: 0/10
MX: 1302'><div class=area style='position:absolute; width:21px; height:20px; left:1357px; top:1590px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1903&a_id=188&y=1911' title='Уильям Голдинг
Писатель
Детская, Фантастика, 
Выживание, История, Психология
BRI
1911-1993
MY: 0/-4
MX: 1903'><div class=area style='position:absolute; width:27px; height:20px; left:1937px; top:1492px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1903&a_id=188&y=1911' title='Уильям Голдинг
Писатель
Детская, Фантастика, 
Выживание, История, Психология
BRI
1911-1993
MY: 0/-4
MX: 1903'><div class=area style='position:absolute; width:27px; height:20px; left:1964px; top:1492px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=742&a_id=502&y=1911' title='В. П. Некрасов
Писатель
Соцреализм, 
Нон-конформизм, О войне, Реализм
RUS
1911-1987
MY: 0/27
MX: 742'><div class=area style='position:absolute; width:37px; height:20px; left:776px; top:1664px'></div></a>
<a target=_blank href='build-rlmap.php?mp=742&a_id=502&y=1911' title='В. П. Некрасов
Писатель
Соцреализм, 
Нон-конформизм, О войне, Реализм
RUS
1911-1987
MY: 0/27
MX: 742'><div class=area style='position:absolute; width:37px; height:20px; left:813px; top:1664px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2056&a_id=612&y=1911' title='Анатолий Рыбаков
Писатель
Для подростков, Соцреализм, 
Детектив, Детская, История, О войне, О любви, Приключения, Реализм
RUS
1911-1998
MY: 0/6
MX: 2056'><div class=area style='position:absolute; width:29px; height:20px; left:2090px; top:1572px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2056&a_id=612&y=1911' title='Анатолий Рыбаков
Писатель
Для подростков, Соцреализм, 
Детектив, Детская, История, О войне, О любви, Приключения, Реализм
RUS
1911-1998
MY: 0/6
MX: 2056'><div class=area style='position:absolute; width:28px; height:20px; left:2119px; top:1572px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=-2&a_id=716&y=1911' title='Теннесси Уильямс
Драматург
Драматургия, 
Мемуары, Психология
USA
1911-1983
MY: 0/0
MX: -2'><div class=area style='position:absolute; width:29px; height:20px; left:32px; top:1486px'></div></a>
<a target=_blank href='build-rlmap.php?mp=-2&a_id=716&y=1911' title='Теннесси Уильямс
Драматург
Драматургия, 
Мемуары, Психология
USA
1911-1983
MY: 0/0
MX: -2'><div class=area style='position:absolute; width:29px; height:20px; left:61px; top:1486px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2289&a_id=1162&y=1911' title='Вероника Тушнова
Поэтесса
О любви, Поэзия, 
Лирика
RUS
1911-1965
MY: 0/0
MX: 2289'><div class=area style='position:absolute; width:29px; height:20px; left:2323px; top:1430px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2289&a_id=1162&y=1911' title='Вероника Тушнова
Поэтесса
О любви, Поэзия, 
Лирика
RUS
1911-1965
MY: 0/0
MX: 2289'><div class=area style='position:absolute; width:29px; height:20px; left:2352px; top:1430px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2574&a_id=1214&y=1911' title='Хосе Мария Аргедас
Писатель
Постмодернизм, 
Автобиография, Реализм
SPA
1911-1969
MY: 0/-12
MX: 2574'><div class=area style='position:absolute; width:27px; height:20px; left:2608px; top:1368px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2574&a_id=1214&y=1911' title='Хосе Мария Аргедас
Писатель
Постмодернизм, 
Автобиография, Реализм
SPA
1911-1969
MY: 0/-12
MX: 2574'><div class=area style='position:absolute; width:27px; height:20px; left:2635px; top:1368px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=590&a_id=18&y=1912' title='Жоржи Амаду
Писатель
Магический реализм, Реализм, 
Коммунизм, Мемуары, Модернизм, Религия, Юмор
BRA
1912-2001
MY: 0/-12
MX: 590'><div class=area style='position:absolute; width:22px; height:20px; left:624px; top:1473px'></div></a>
<a target=_blank href='build-rlmap.php?mp=590&a_id=18&y=1912' title='Жоржи Амаду
Писатель
Магический реализм, Реализм, 
Коммунизм, Мемуары, Модернизм, Религия, Юмор
BRA
1912-2001
MY: 0/-12
MX: 590'><div class=area style='position:absolute; width:21px; height:20px; left:646px; top:1473px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1395&a_id=715&y=1912' title='Патрик Уайт
Писатель
Психология, 
Юмор
AUS
1912-1990
MY: 0/0
MX: 1395'><div class=area style='position:absolute; width:18px; height:20px; left:1429px; top:1510px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1395&a_id=715&y=1912' title='Патрик Уайт
Писатель
Психология, 
Юмор
AUS
1912-1990
MY: 0/0
MX: 1395'><div class=area style='position:absolute; width:18px; height:20px; left:1447px; top:1510px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1977&a_id=1171&y=1912' title='Виталий Губарев
Писатель
Детская, Фэнтези, 
Приключения, Фантастика
RUS
1912-1981
MY: 0/-6
MX: 1977'><div class=area style='position:absolute; width:27px; height:20px; left:2011px; top:1449px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1977&a_id=1171&y=1912' title='Виталий Губарев
Писатель
Детская, Фэнтези, 
Приключения, Фантастика
RUS
1912-1981
MY: 0/-6
MX: 1977'><div class=area style='position:absolute; width:27px; height:20px; left:2038px; top:1449px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1219&a_id=1128&y=1912' title='Лев Гумилев
Писатель
История, Научная литература, Публицистика, 
Философия
RUS
1912-1992
MY: 0/7
MX: 1219'><div class=area style='position:absolute; width:34px; height:20px; left:1253px; top:1559px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1219&a_id=1128&y=1912' title='Лев Гумилев
Писатель
История, Научная литература, Публицистика, 
Философия
RUS
1912-1992
MY: 0/7
MX: 1219'><div class=area style='position:absolute; width:34px; height:20px; left:1287px; top:1559px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=742&a_id=276&y=1913' title='Сергей Залыгин
Писатель
Соцреализм, 
Деревня
RUS
1913-2000
MY: 0/35
MX: 742'><div class=area style='position:absolute; width:28px; height:20px; left:776px; top:1763px'></div></a>
<a target=_blank href='build-rlmap.php?mp=742&a_id=276&y=1913' title='Сергей Залыгин
Писатель
Соцреализм, 
Деревня
RUS
1913-2000
MY: 0/35
MX: 742'><div class=area style='position:absolute; width:28px; height:20px; left:804px; top:1763px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=836&a_id=301&y=1913' title='Эммануил Казакевич
Писатель
О войне, Соцреализм, 
Коммунист
RUS
1913-1962
MY: 0/-15
MX: 836'><div class=area style='position:absolute; width:33px; height:20px; left:870px; top:1338px'></div></a>
<a target=_blank href='build-rlmap.php?mp=836&a_id=301&y=1913' title='Эммануил Казакевич
Писатель
О войне, Соцреализм, 
Коммунист
RUS
1913-1962
MY: 0/-15
MX: 836'><div class=area style='position:absolute; width:33px; height:20px; left:903px; top:1338px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1468&a_id=309&y=1913' title='Альбер Камю
Писатель
Философия, Экзистенциализм, 
Абсурд, Анархизм, Поток сознания, Публицистика
FRA
1913-1960
MY: 0/-1
MX: 1468'><div class=area style='position:absolute; width:19px; height:20px; left:1502px; top:1418px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1468&a_id=309&y=1913' title='Альбер Камю
Писатель
Философия, Экзистенциализм, 
Абсурд, Анархизм, Поток сознания, Публицистика
FRA
1913-1960
MY: 0/-1
MX: 1468'><div class=area style='position:absolute; width:19px; height:20px; left:1521px; top:1418px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=742&a_id=601&y=1913' title='Виктор Розов
Автор
Драматургия, Соцреализм, 
Мемуары
RUS
1913-2004
MY: 0/37
MX: 742'><div class=area style='position:absolute; width:21px; height:20px; left:776px; top:1787px'></div></a>
<a target=_blank href='build-rlmap.php?mp=742&a_id=601&y=1913' title='Виктор Розов
Автор
Драматургия, Соцреализм, 
Мемуары
RUS
1913-2004
MY: 0/37
MX: 742'><div class=area style='position:absolute; width:21px; height:20px; left:797px; top:1787px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1395&a_id=819&y=1913' title='Ирвин Шоу
Писатель
Драматургия, Психология, 
Детектив, О войне, Триллер
USA
1913-1984
MY: 0/-2
MX: 1395'><div class=area style='position:absolute; width:22px; height:20px; left:1429px; top:1486px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1395&a_id=819&y=1913' title='Ирвин Шоу
Писатель
Драматургия, Психология, 
Детектив, О войне, Триллер
USA
1913-1984
MY: 0/-2
MX: 1395'><div class=area style='position:absolute; width:21px; height:20px; left:1451px; top:1486px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=742&a_id=845&y=1913' title='Александр Яшин

Соцреализм
RUS
1913-1968
MY: 0/-13
MX: 742'><div class=area style='position:absolute; width:20px; height:20px; left:776px; top:1368px'></div></a>
<a target=_blank href='build-rlmap.php?mp=742&a_id=845&y=1913' title='Александр Яшин

Соцреализм
RUS
1913-1968
MY: 0/-13
MX: 742'><div class=area style='position:absolute; width:20px; height:20px; left:796px; top:1368px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2134&a_id=1046&y=1913' title='Виктор Драгунский
Писатель
Детская, Юмор
RUS
1913-1972
MY: 0/-2
MX: 2134'><div class=area style='position:absolute; width:31px; height:20px; left:2168px; top:1449px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2134&a_id=1046&y=1913' title='Виктор Драгунский
Писатель
Детская, Юмор
RUS
1913-1972
MY: 0/-2
MX: 2134'><div class=area style='position:absolute; width:30px; height:20px; left:2199px; top:1449px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=836&a_id=1200&y=1913' title='Александр Чаковский
Писатель
О войне, Соцреализм
RUS
1913-1994
MY: 0/-11
MX: 836'><div class=area style='position:absolute; width:34px; height:20px; left:870px; top:1461px'></div></a>
<a target=_blank href='build-rlmap.php?mp=836&a_id=1200&y=1913' title='Александр Чаковский
Писатель
О войне, Соцреализм
RUS
1913-1994
MY: 0/-11
MX: 836'><div class=area style='position:absolute; width:33px; height:20px; left:904px; top:1461px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=523&a_id=72&y=1914' title='Уильям Берроуз
Писатель
Бит, Исповедь, 
Антиутопия, Постмодернизм, Сатира, Фантастика
USA
1914-1997
MY: 0/0
MX: 523'><div class=area style='position:absolute; width:26px; height:20px; left:557px; top:1541px'></div></a>
<a target=_blank href='build-rlmap.php?mp=523&a_id=72&y=1914' title='Уильям Берроуз
Писатель
Бит, Исповедь, 
Антиутопия, Постмодернизм, Сатира, Фантастика
USA
1914-1997
MY: 0/0
MX: 523'><div class=area style='position:absolute; width:25px; height:20px; left:583px; top:1541px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2574&a_id=163&y=1914' title='Ромен Гари
Писатель
Постмодернизм
FRA
1914-1980
MY: 0/-15
MX: 2574'><div class=area style='position:absolute; width:18px; height:20px; left:2608px; top:1393px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2574&a_id=163&y=1914' title='Ромен Гари
Писатель
Постмодернизм
FRA
1914-1980
MY: 0/-15
MX: 2574'><div class=area style='position:absolute; width:17px; height:20px; left:2626px; top:1393px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2574&a_id=261&y=1914' title='Маргерит Дюрас
Писательница
Постмодернизм, 
Коммунист
FRA
1914-1996
MY: 0/-11
MX: 2574'><div class=area style='position:absolute; width:23px; height:20px; left:2608px; top:1467px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2574&a_id=261&y=1914' title='Маргерит Дюрас
Писательница
Постмодернизм, 
Коммунист
FRA
1914-1996
MY: 0/-11
MX: 2574'><div class=area style='position:absolute; width:23px; height:20px; left:2631px; top:1467px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=590&a_id=360&y=1914' title='Хулио Кортасар
Поэт
Магический реализм, 
Антироман, Поэзия
ARG
1914-1984
MY: 0/-12
MX: 590'><div class=area style='position:absolute; width:31px; height:20px; left:624px; top:1424px'></div></a>
<a target=_blank href='build-rlmap.php?mp=590&a_id=360&y=1914' title='Хулио Кортасар
Поэт
Магический реализм, 
Антироман, Поэзия
ARG
1914-1984
MY: 0/-12
MX: 590'><div class=area style='position:absolute; width:30px; height:20px; left:655px; top:1424px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=667&a_id=1149&y=1914' title='Андрей Гуляшки
Писатель
Детектив, 
Приключения, Юмор
BGR
1914-1995
MY: 0/-13
MX: 667'><div class=area style='position:absolute; width:27px; height:20px; left:701px; top:1455px'></div></a>
<a target=_blank href='build-rlmap.php?mp=667&a_id=1149&y=1914' title='Андрей Гуляшки
Писатель
Детектив, 
Приключения, Юмор
BGR
1914-1995
MY: 0/-13
MX: 667'><div class=area style='position:absolute; width:27px; height:20px; left:728px; top:1455px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1903&a_id=1064&y=1914' title='Туве Янссон
Писательница
Детская, Фантастика, 
Приключения, Сказка
SWE
1914-2001
MY: 0/-6
MX: 1903'><div class=area style='position:absolute; width:26px; height:20px; left:1937px; top:1516px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1903&a_id=1064&y=1914' title='Туве Янссон
Писательница
Детская, Фантастика, 
Приключения, Сказка
SWE
1914-2001
MY: 0/-6
MX: 1903'><div class=area style='position:absolute; width:26px; height:20px; left:1963px; top:1516px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1622&a_id=1191&y=1914' title='Павел Вежинов
Писатель
Реализм, Фантастика, 
Мистицизм
BGR
1914-1983
MY: 0/-13
MX: 1622'><div class=area style='position:absolute; width:29px; height:20px; left:1656px; top:1418px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1622&a_id=1191&y=1914' title='Павел Вежинов
Писатель
Реализм, Фантастика, 
Мистицизм
BGR
1914-1983
MY: 0/-13
MX: 1622'><div class=area style='position:absolute; width:29px; height:20px; left:1685px; top:1418px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=836&a_id=639&y=1915' title='Константин Симонов
Киносценарист
О войне, Соцреализм
RUS
1915-1979
MY: 0/-16
MX: 836'><div class=area style='position:absolute; width:32px; height:20px; left:870px; top:1387px'></div></a>
<a target=_blank href='build-rlmap.php?mp=836&a_id=639&y=1915' title='Константин Симонов
Киносценарист
О войне, Соцреализм
RUS
1915-1979
MY: 0/-16
MX: 836'><div class=area style='position:absolute; width:32px; height:20px; left:902px; top:1387px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1622&a_id=1181&y=1915' title='Вадим Шефнер
Поэт
Соцреализм, Фантастика, 
О войне, О любви, Поэзия, Юмор
RUS
1915-2002
MY: 0/-15
MX: 1622'><div class=area style='position:absolute; width:28px; height:20px; left:1656px; top:1467px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1622&a_id=1181&y=1915' title='Вадим Шефнер
Поэт
Соцреализм, Фантастика, 
О войне, О любви, Поэзия, Юмор
RUS
1915-2002
MY: 0/-15
MX: 1622'><div class=area style='position:absolute; width:28px; height:20px; left:1684px; top:1467px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=996&a_id=1106&y=1916' title='Джеймс Хэрриот
Писатель
О животных, 
Юмор
BRI
1916-1995
MY: 0/0
MX: 996'><div class=area style='position:absolute; width:28px; height:20px; left:1030px; top:1541px'></div></a>
<a target=_blank href='build-rlmap.php?mp=996&a_id=1106&y=1916' title='Джеймс Хэрриот
Писатель
О животных, 
Юмор
BRI
1916-1995
MY: 0/0
MX: 996'><div class=area style='position:absolute; width:28px; height:20px; left:1058px; top:1541px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=59&y=1917' title='Генрих Бёлль
Писатель
Реализм, 
О войне
DEU
1917-1985
MY: 0/5
MX: 1302'><div class=area style='position:absolute; width:21px; height:20px; left:1336px; top:1541px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1302&a_id=59&y=1917' title='Генрих Бёлль
Писатель
Реализм, 
О войне
DEU
1917-1985
MY: 0/5
MX: 1302'><div class=area style='position:absolute; width:21px; height:20px; left:1357px; top:1541px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1701&a_id=68&y=1917' title='Энтони Бёрджесс
Писатель
Антиутопия, Киберпанк, Сатира, 
Биография, История, Фантастика, Философия
BRI
1917-1993
MY: 0/0
MX: 1701'><div class=area style='position:absolute; width:24px; height:20px; left:1735px; top:1535px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1701&a_id=68&y=1917' title='Энтони Бёрджесс
Писатель
Антиутопия, Киберпанк, Сатира, 
Биография, История, Фантастика, Философия
BRI
1917-1993
MY: 0/0
MX: 1701'><div class=area style='position:absolute; width:23px; height:20px; left:1759px; top:1535px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1838&a_id=339&y=1917' title='Артур Кларк
Писатель
Твердая научная фантастика, 
Антиутопия, Приключения, Утопия, Фантастика
BRI
1917-2008
MY: 0/0
MX: 1838'><div class=area style='position:absolute; width:21px; height:20px; left:1872px; top:1584px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1838&a_id=339&y=1917' title='Артур Кларк
Писатель
Твердая научная фантастика, 
Антиутопия, Приключения, Утопия, Фантастика
BRI
1917-2008
MY: 0/0
MX: 1838'><div class=area style='position:absolute; width:20px; height:20px; left:1893px; top:1584px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1766&a_id=428&y=1917' title='Карсон Маккалерс
Писательница
Готика
USA
1917-1967
MY: 0/-2
MX: 1766'><div class=area style='position:absolute; width:26px; height:20px; left:1800px; top:1442px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1766&a_id=428&y=1917' title='Карсон Маккалерс
Писательница
Готика
USA
1917-1967
MY: 0/-2
MX: 1766'><div class=area style='position:absolute; width:26px; height:20px; left:1826px; top:1442px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=667&a_id=1130&y=1917' title='Сидни Шелдон
Писатель
Детектив, 
Беллетристика, Криминал, О любви, Триллер
USA
1917-2007
MY: 0/12
MX: 667'><div class=area style='position:absolute; width:27px; height:20px; left:701px; top:1652px'></div></a>
<a target=_blank href='build-rlmap.php?mp=667&a_id=1130&y=1917' title='Сидни Шелдон
Писатель
Детектив, 
Беллетристика, Криминал, О любви, Триллер
USA
1917-2007
MY: 0/12
MX: 667'><div class=area style='position:absolute; width:26px; height:20px; left:728px; top:1652px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1067&a_id=256&y=1918' title='Морис Дрюон
Писатель
Натурализм, 
История, Сказка
FRA
1918-2009
MY: 0/0
MX: 1067'><div class=area style='position:absolute; width:23px; height:20px; left:1101px; top:1590px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1067&a_id=256&y=1918' title='Морис Дрюон
Писатель
Натурализм, 
История, Сказка
FRA
1918-2009
MY: 0/0
MX: 1067'><div class=area style='position:absolute; width:23px; height:20px; left:1124px; top:1590px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1468&a_id=258&y=1918' title='Владимир Дудинцев
Писатель
История, Философия
RUS
1918-1998
MY: 0/1
MX: 1468'><div class=area style='position:absolute; width:32px; height:20px; left:1502px; top:1559px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1468&a_id=258&y=1918' title='Владимир Дудинцев
Писатель
История, Философия
RUS
1918-1998
MY: 0/1
MX: 1468'><div class=area style='position:absolute; width:31px; height:20px; left:1534px; top:1559px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2056&a_id=529&y=1918' title='Джеймс Олдридж
Писатель
Для подростков, 
О любви, Приключения, Социализм
AUS
1918-2015
MY: 0/6
MX: 2056'><div class=area style='position:absolute; width:31px; height:20px; left:2090px; top:1646px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2056&a_id=529&y=1918' title='Джеймс Олдридж
Писатель
Для подростков, 
О любви, Приключения, Социализм
AUS
1918-2015
MY: 0/6
MX: 2056'><div class=area style='position:absolute; width:30px; height:20px; left:2121px; top:1646px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=649&y=1918' title='А. И. Солженицын
Писатель
Нон-конформизм, Реализм
RUS
1918-2008
MY: 0/5
MX: 1302'><div class=area style='position:absolute; width:35px; height:20px; left:1336px; top:1615px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1302&a_id=649&y=1918' title='А. И. Солженицын
Писатель
Нон-конформизм, Реализм
RUS
1918-2008
MY: 0/5
MX: 1302'><div class=area style='position:absolute; width:34px; height:20px; left:1371px; top:1615px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=-2&a_id=147&y=1919' title='Александр Володин
Сценарист
Драматургия
RUS
1919-2001
MY: 0/-1
MX: -2'><div class=area style='position:absolute; width:29px; height:20px; left:32px; top:1559px'></div></a>
<a target=_blank href='build-rlmap.php?mp=-2&a_id=147&y=1919' title='Александр Володин
Сценарист
Драматургия
RUS
1919-2001
MY: 0/-1
MX: -2'><div class=area style='position:absolute; width:28px; height:20px; left:61px; top:1559px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=836&a_id=151&y=1919' title='Константин Воробьёв
Писатель
О войне
RUS
1919-1975
MY: 0/-12
MX: 836'><div class=area style='position:absolute; width:32px; height:20px; left:870px; top:1412px'></div></a>
<a target=_blank href='build-rlmap.php?mp=836&a_id=151&y=1919' title='Константин Воробьёв
Писатель
О войне
RUS
1919-1975
MY: 0/-12
MX: 836'><div class=area style='position:absolute; width:31px; height:20px; left:902px; top:1412px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=203&y=1919' title='Даниил Гранин
Писатель
Моралист, Реализм, 
О войне
RUS
1919-
MY: 0/5
MX: 1302'><div class=area style='position:absolute; width:25px; height:20px; left:1336px; top:1467px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1302&a_id=203&y=1919' title='Даниил Гранин
Писатель
Моралист, Реализм, 
О войне
RUS
1919-
MY: 0/5
MX: 1302'><div class=area style='position:absolute; width:24px; height:20px; left:1361px; top:1467px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=140&a_id=455&y=1919' title='Айрис Мёрдок
Писательница
Экзистенциализм, 
Коммунист, Философия
BRI
1919-1999
MY: 0/1
MX: 140'><div class=area style='position:absolute; width:26px; height:20px; left:174px; top:1566px'></div></a>
<a target=_blank href='build-rlmap.php?mp=140&a_id=455&y=1919' title='Айрис Мёрдок
Писательница
Экзистенциализм, 
Коммунист, Философия
BRI
1919-1999
MY: 0/1
MX: 140'><div class=area style='position:absolute; width:26px; height:20px; left:200px; top:1566px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1544&a_id=676&y=1919' title='Джером Сэлинджер
Писатель
Мистицизм, 
Буддизм, Нигилизм
USA
1919-2010
MY: 0/0
MX: 1544'><div class=area style='position:absolute; width:33px; height:20px; left:1578px; top:1596px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1544&a_id=676&y=1919' title='Джером Сэлинджер
Писатель
Мистицизм, 
Буддизм, Нигилизм
USA
1919-2010
MY: 0/0
MX: 1544'><div class=area style='position:absolute; width:33px; height:20px; left:1611px; top:1596px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=919&a_id=2&y=1920' title='Фёдор Абрамов
Писатель
Деревня, Соцреализм, 
О войне, Публицистика
RUS
1920-1983
MY: 0/-10
MX: 919'><div class=area style='position:absolute; width:29px; height:20px; left:953px; top:1455px'></div></a>
<a target=_blank href='build-rlmap.php?mp=919&a_id=2&y=1920' title='Фёдор Абрамов
Писатель
Деревня, Соцреализм, 
О войне, Публицистика
RUS
1920-1983
MY: 0/-10
MX: 919'><div class=area style='position:absolute; width:29px; height:20px; left:982px; top:1455px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1838&a_id=7&y=1920' title='Айзек Азимов
Писатель
Научная литература, Твердая научная фантастика
USA
1920-1992
MY: 0/0
MX: 1838'><div class=area style='position:absolute; width:25px; height:20px; left:1872px; top:1541px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1838&a_id=7&y=1920' title='Айзек Азимов
Писатель
Научная литература, Твердая научная фантастика
USA
1920-1992
MY: 0/0
MX: 1838'><div class=area style='position:absolute; width:25px; height:20px; left:1897px; top:1541px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1622&a_id=105&y=1920' title='Рэй Брэдбери
Писатель
Фантастика, 
Фэнтези, Хоррор
USA
1920-2012
MY: 0/6
MX: 1622'><div class=area style='position:absolute; width:35px; height:20px; left:1656px; top:1640px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1622&a_id=105&y=1920' title='Рэй Брэдбери
Писатель
Фантастика, 
Фэнтези, Хоррор
USA
1920-2012
MY: 0/6
MX: 1622'><div class=area style='position:absolute; width:35px; height:20px; left:1691px; top:1640px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=836&a_id=355&y=1920' title='Вячеслав Кондратьев
Писатель
О войне
RUS
1920-1993
MY: 0/-6
MX: 836'><div class=area style='position:absolute; width:35px; height:20px; left:870px; top:1510px'></div></a>
<a target=_blank href='build-rlmap.php?mp=836&a_id=355&y=1920' title='Вячеслав Кондратьев
Писатель
О войне
RUS
1920-1993
MY: 0/-6
MX: 836'><div class=area style='position:absolute; width:35px; height:20px; left:905px; top:1510px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=667&a_id=583&y=1920' title='Марио Пьюзо
Писатель
Детектив, 
Беллетристика, Триллер, Фантастика
ITA
1920-1999
MY: 0/6
MX: 667'><div class=area style='position:absolute; width:22px; height:20px; left:701px; top:1603px'></div></a>
<a target=_blank href='build-rlmap.php?mp=667&a_id=583&y=1920' title='Марио Пьюзо
Писатель
Детектив, 
Беллетристика, Триллер, Фантастика
ITA
1920-1999
MY: 0/6
MX: 667'><div class=area style='position:absolute; width:22px; height:20px; left:723px; top:1603px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2134&a_id=598&y=1920' title='Джанни Родари
Писатель
Детская, 
Коммунист, Приключения, Революционер, Сказка
ITA
1920-1980
MY: 0/7
MX: 2134'><div class=area style='position:absolute; width:25px; height:20px; left:2168px; top:1547px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2134&a_id=598&y=1920' title='Джанни Родари
Писатель
Детская, 
Коммунист, Приключения, Революционер, Сказка
ITA
1920-1980
MY: 0/7
MX: 2134'><div class=area style='position:absolute; width:25px; height:20px; left:2193px; top:1547px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=667&a_id=762&y=1920' title='Артур Хейли

Детектив, Производственный роман, 
Триллер
CAN
1920-2004
MY: 0/16
MX: 667'><div class=area style='position:absolute; width:22px; height:20px; left:701px; top:1676px'></div></a>
<a target=_blank href='build-rlmap.php?mp=667&a_id=762&y=1920' title='Артур Хейли

Детектив, Производственный роман, 
Триллер
CAN
1920-2004
MY: 0/16
MX: 667'><div class=area style='position:absolute; width:22px; height:20px; left:723px; top:1676px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1622&a_id=1117&y=1920' title='Фрэнк Герберт
Писатель
Фантастика
USA
1920-1986
MY: 0/-13
MX: 1622'><div class=area style='position:absolute; width:28px; height:20px; left:1656px; top:1442px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1622&a_id=1117&y=1920' title='Фрэнк Герберт
Писатель
Фантастика
USA
1920-1986
MY: 0/-13
MX: 1622'><div class=area style='position:absolute; width:27px; height:20px; left:1684px; top:1442px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=836&a_id=239&y=1921' title='Джеймс Рамон Джонс
Писатель
О войне
USA
1921-1977
MY: 0/-10
MX: 836'><div class=area style='position:absolute; width:23px; height:20px; left:870px; top:1436px'></div></a>
<a target=_blank href='build-rlmap.php?mp=836&a_id=239&y=1921' title='Джеймс Рамон Джонс
Писатель
О войне
USA
1921-1977
MY: 0/-10
MX: 836'><div class=area style='position:absolute; width:22px; height:20px; left:893px; top:1436px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=667&a_id=262&y=1921' title='Фридрих Дюрренматт
Драматург
Детектив, Драматургия, 
Публицистика
CHE
1921-1990
MY: 0/2
MX: 667'><div class=area style='position:absolute; width:32px; height:20px; left:701px; top:1553px'></div></a>
<a target=_blank href='build-rlmap.php?mp=667&a_id=262&y=1921' title='Фридрих Дюрренматт
Драматург
Детектив, Драматургия, 
Публицистика
CHE
1921-1990
MY: 0/2
MX: 667'><div class=area style='position:absolute; width:32px; height:20px; left:733px; top:1553px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1622&a_id=389&y=1921' title='Станислав Лем
Футуролог
Фантастика, 
Твердая научная фантастика, Философия, Футурология
POL
1921-2006
MY: 0/0
MX: 1622'><div class=area style='position:absolute; width:17px; height:20px; left:1656px; top:1590px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1622&a_id=389&y=1921' title='Станислав Лем
Футуролог
Фантастика, 
Твердая научная фантастика, Философия, Футурология
POL
1921-2006
MY: 0/0
MX: 1622'><div class=area style='position:absolute; width:16px; height:20px; left:1673px; top:1590px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=667&a_id=802&y=1921' title='Леонардо Шаша
Писатель
Детектив, 
Коммунист, Криминал
ITA
1921-1989
MY: 0/-9
MX: 667'><div class=area style='position:absolute; width:21px; height:20px; left:701px; top:1479px'></div></a>
<a target=_blank href='build-rlmap.php?mp=667&a_id=802&y=1921' title='Леонардо Шаша
Писатель
Детектив, 
Коммунист, Криминал
ITA
1921-1989
MY: 0/-9
MX: 667'><div class=area style='position:absolute; width:20px; height:20px; left:722px; top:1479px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=1127&y=1921' title='Юрий Никулин
Киноактёр
Автобиография, История, Юмор
RUS
1921-1997
MY: 0/-15
MX: 2209'><div class=area style='position:absolute; width:27px; height:20px; left:2243px; top:1467px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2209&a_id=1127&y=1921' title='Юрий Никулин
Киноактёр
Автобиография, История, Юмор
RUS
1921-1997
MY: 0/-15
MX: 2209'><div class=area style='position:absolute; width:27px; height:20px; left:2270px; top:1467px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1219&a_id=1224&y=1921' title='Чабуа Амирэджиби
Писатель
История, 
Нон-конформизм
GEO
1921-2013
MY: 0/12
MX: 1219'><div class=area style='position:absolute; width:32px; height:20px; left:1253px; top:1683px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1219&a_id=1224&y=1921' title='Чабуа Амирэджиби
Писатель
История, 
Нон-конформизм
GEO
1921-2013
MY: 0/12
MX: 1219'><div class=area style='position:absolute; width:31px; height:20px; left:1285px; top:1683px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1622&a_id=150&y=1922' title='Курт Воннегут
Писатель
Сатира, Фантастика, 
Анархизм, Пацифизм, Постмодернизм, Философия
USA
1922-2007
MY: 0/3
MX: 1622'><div class=area style='position:absolute; width:29px; height:20px; left:1656px; top:1615px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1622&a_id=150&y=1922' title='Курт Воннегут
Писатель
Сатира, Фантастика, 
Анархизм, Пацифизм, Постмодернизм, Философия
USA
1922-2007
MY: 0/3
MX: 1622'><div class=area style='position:absolute; width:29px; height:20px; left:1685px; top:1615px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=523&a_id=329&y=1922' title='Джек Керуак
Писатель
Бит, 
Автобиография, Буддизм, Исповедь, Наркотики, Философия
USA
1922-1969
MY: 0/0
MX: 523'><div class=area style='position:absolute; width:23px; height:20px; left:557px; top:1479px'></div></a>
<a target=_blank href='build-rlmap.php?mp=523&a_id=329&y=1922' title='Джек Керуак
Писатель
Бит, 
Автобиография, Буддизм, Исповедь, Наркотики, Философия
USA
1922-1969
MY: 0/0
MX: 523'><div class=area style='position:absolute; width:23px; height:20px; left:580px; top:1479px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2645&a_id=596&y=1922' title='Ален Роб-Грийе
Сценарист
Антироман
FRA
1922-2008
MY: 0/0
MX: 2645'><div class=area style='position:absolute; width:28px; height:20px; left:2679px; top:1596px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2645&a_id=596&y=1922' title='Ален Роб-Грийе
Сценарист
Антироман
FRA
1922-2008
MY: 0/0
MX: 2645'><div class=area style='position:absolute; width:27px; height:20px; left:2707px; top:1596px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2711&a_id=830&y=1922' title='Кингсли Эмис
Поэт
Рассерженные молодые люди, Социальный реализм, 
Поэзия
BRI
1922-1995
MY: 0/-2
MX: 2711'><div class=area style='position:absolute; width:24px; height:20px; left:2745px; top:1547px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2711&a_id=830&y=1922' title='Кингсли Эмис
Поэт
Рассерженные молодые люди, Социальный реализм, 
Поэзия
BRI
1922-1995
MY: 0/-2
MX: 2711'><div class=area style='position:absolute; width:24px; height:20px; left:2769px; top:1547px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2056&a_id=13&y=1923' title='С. П. Алексеев
Писатель
Детская, Для подростков, История, Социализм
RUS
1923-2008
MY: 0/3
MX: 2056'><div class=area style='position:absolute; width:31px; height:20px; left:2090px; top:1621px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2056&a_id=13&y=1923' title='С. П. Алексеев
Писатель
Детская, Для подростков, История, Социализм
RUS
1923-2008
MY: 0/3
MX: 2056'><div class=area style='position:absolute; width:31px; height:20px; left:2121px; top:1621px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=836&a_id=44&y=1923' title='Григорий Бакланов
Писатель
О войне
RUS
1923-2009
MY: 0/17
MX: 836'><div class=area style='position:absolute; width:31px; height:20px; left:870px; top:1707px'></div></a>
<a target=_blank href='build-rlmap.php?mp=836&a_id=44&y=1923' title='Григорий Бакланов
Писатель
О войне
RUS
1923-2009
MY: 0/17
MX: 836'><div class=area style='position:absolute; width:31px; height:20px; left:901px; top:1707px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2574&a_id=306&y=1923' title='Итало Кальвино
Писатель
Постмодернизм, Фантастика, 
Коммунист, Сказка, Философия, Фольклор
ITA
1923-1985
MY: 0/-14
MX: 2574'><div class=area style='position:absolute; width:31px; height:20px; left:2608px; top:1442px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2574&a_id=306&y=1923' title='Итало Кальвино
Писатель
Постмодернизм, Фантастика, 
Коммунист, Сказка, Философия, Фольклор
ITA
1923-1985
MY: 0/-14
MX: 2574'><div class=area style='position:absolute; width:31px; height:20px; left:2639px; top:1442px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=836&a_id=450&y=1923' title='Норман Мейлер
Писатель
О войне
USA
1923-2007
MY: 0/10
MX: 836'><div class=area style='position:absolute; width:27px; height:20px; left:870px; top:1658px'></div></a>
<a target=_blank href='build-rlmap.php?mp=836&a_id=450&y=1923' title='Норман Мейлер
Писатель
О войне
USA
1923-2007
MY: 0/10
MX: 836'><div class=area style='position:absolute; width:26px; height:20px; left:897px; top:1658px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=919&a_id=472&y=1923' title='Борис Можаев
Писатель
Деревня
RUS
1923-1996
MY: 0/6
MX: 919'><div class=area style='position:absolute; width:27px; height:20px; left:953px; top:1603px'></div></a>
<a target=_blank href='build-rlmap.php?mp=919&a_id=472&y=1923' title='Борис Можаев
Писатель
Деревня
RUS
1923-1996
MY: 0/6
MX: 919'><div class=area style='position:absolute; width:27px; height:20px; left:980px; top:1603px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=919&a_id=689&y=1923' title='Владимир Тендряков
Писатель
Деревня, Соцреализм, 
Детская, Трагедия
RUS
1923-1984
MY: 0/0
MX: 919'><div class=area style='position:absolute; width:30px; height:20px; left:953px; top:1529px'></div></a>
<a target=_blank href='build-rlmap.php?mp=919&a_id=689&y=1923' title='Владимир Тендряков
Писатель
Деревня, Соцреализм, 
Детская, Трагедия
RUS
1923-1984
MY: 0/0
MX: 919'><div class=area style='position:absolute; width:29px; height:20px; left:983px; top:1529px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=763&y=1923' title='Джозеф Хеллер
Романист
Абсурд, Пацифизм, Сатира, 
Черный юмор, Юмор
USA
1923-1999
MY: 0/-9
MX: 2209'><div class=area style='position:absolute; width:26px; height:20px; left:2243px; top:1516px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2209&a_id=763&y=1923' title='Джозеф Хеллер
Романист
Абсурд, Пацифизм, Сатира, 
Черный юмор, Юмор
USA
1923-1999
MY: 0/-9
MX: 2209'><div class=area style='position:absolute; width:25px; height:20px; left:2269px; top:1516px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=590&a_id=3&y=1924' title='Кобо Абэ
Писатель
Магический реализм, 
Авангард, Коммунизм, Фантастика
JAP
1924-1993
MY: 0/-10
MX: 590'><div class=area style='position:absolute; width:14px; height:20px; left:624px; top:1498px'></div></a>
<a target=_blank href='build-rlmap.php?mp=590&a_id=3&y=1924' title='Кобо Абэ
Писатель
Магический реализм, 
Авангард, Коммунизм, Фантастика
JAP
1924-1993
MY: 0/-10
MX: 590'><div class=area style='position:absolute; width:14px; height:20px; left:638px; top:1498px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2056&a_id=14&y=1924' title='А. Г. Алексин
Писатель
Детская, Для подростков, Соцреализм
RUS
1924-
MY: 0/5
MX: 2056'><div class=area style='position:absolute; width:28px; height:20px; left:2090px; top:1498px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2056&a_id=14&y=1924' title='А. Г. Алексин
Писатель
Детская, Для подростков, Соцреализм
RUS
1924-
MY: 0/5
MX: 2056'><div class=area style='position:absolute; width:27px; height:20px; left:2118px; top:1498px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=836&a_id=35&y=1924' title='Виктор Астафьев
Писатель
О войне, 
Деревня, Детская, История, Мемуары, Соцреализм
RUS
1924-2001
MY: 0/0
MX: 836'><div class=area style='position:absolute; width:36px; height:20px; left:870px; top:1584px'></div></a>
<a target=_blank href='build-rlmap.php?mp=836&a_id=35&y=1924' title='Виктор Астафьев
Писатель
О войне, 
Деревня, Детская, История, Мемуары, Соцреализм
RUS
1924-2001
MY: 0/0
MX: 836'><div class=area style='position:absolute; width:35px; height:20px; left:906px; top:1584px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=836&a_id=86&y=1924' title='Владимир Богомолов
Писатель
О войне
RUS
1924-2003
MY: 0/3
MX: 836'><div class=area style='position:absolute; width:35px; height:20px; left:870px; top:1609px'></div></a>
<a target=_blank href='build-rlmap.php?mp=836&a_id=86&y=1924' title='Владимир Богомолов
Писатель
О войне
RUS
1924-2003
MY: 0/3
MX: 836'><div class=area style='position:absolute; width:34px; height:20px; left:905px; top:1609px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=742&a_id=90&y=1924' title='Юрий Бондарев
Писатель
Соцреализм, 
О войне
RUS
1924-
MY: 0/4
MX: 742'><div class=area style='position:absolute; width:32px; height:20px; left:776px; top:1492px'></div></a>
<a target=_blank href='build-rlmap.php?mp=742&a_id=90&y=1924' title='Юрий Бондарев
Писатель
Соцреализм, 
О войне
RUS
1924-
MY: 0/4
MX: 742'><div class=area style='position:absolute; width:32px; height:20px; left:808px; top:1492px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=836&a_id=115&y=1924' title='Василь Быков
Писатель
О войне
RUS
1924-2003
MY: 0/7
MX: 836'><div class=area style='position:absolute; width:25px; height:20px; left:870px; top:1633px'></div></a>
<a target=_blank href='build-rlmap.php?mp=836&a_id=115&y=1924' title='Василь Быков
Писатель
О войне
RUS
1924-2003
MY: 0/7
MX: 836'><div class=area style='position:absolute; width:24px; height:20px; left:895px; top:1633px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=836&a_id=127&y=1924' title='Борис Васильев
Писатель
История, О войне, 
Драматургия
RUS
1924-2013
MY: 0/18
MX: 836'><div class=area style='position:absolute; width:35px; height:20px; left:870px; top:1732px'></div></a>
<a target=_blank href='build-rlmap.php?mp=836&a_id=127&y=1924' title='Борис Васильев
Писатель
История, О войне, 
Драматургия
RUS
1924-2013
MY: 0/18
MX: 836'><div class=area style='position:absolute; width:34px; height:20px; left:905px; top:1732px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1219&a_id=222&y=1924' title='Юрий Давыдов
Писатель
История, 
Море
RUS
1924-2002
MY: 0/12
MX: 1219'><div class=area style='position:absolute; width:30px; height:20px; left:1253px; top:1658px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1219&a_id=222&y=1924' title='Юрий Давыдов
Писатель
История, 
Море
RUS
1924-2002
MY: 0/12
MX: 1219'><div class=area style='position:absolute; width:30px; height:20px; left:1283px; top:1658px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1766&a_id=314&y=1924' title='Трумэн Капоте
Романист
Готика, Детектив, 
Документалистика, Криминал, Приключения
USA
1924-1984
MY: 0/2
MX: 1766'><div class=area style='position:absolute; width:24px; height:20px; left:1800px; top:1541px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1766&a_id=314&y=1924' title='Трумэн Капоте
Романист
Готика, Детектив, 
Документалистика, Криминал, Приключения
USA
1924-1984
MY: 0/2
MX: 1766'><div class=area style='position:absolute; width:24px; height:20px; left:1824px; top:1541px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2783&a_id=1135&y=1924' title='Паруйр Севак
Поэт
Поэзия
ARM
1924-1971
MY: 0/-2
MX: 2783'><div class=area style='position:absolute; width:22px; height:20px; left:2817px; top:1479px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2783&a_id=1135&y=1924' title='Паруйр Севак
Поэт
Поэзия
ARM
1924-1971
MY: 0/-2
MX: 2783'><div class=area style='position:absolute; width:21px; height:20px; left:2839px; top:1479px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1219&a_id=1088&y=1924' title='Джеймс Клавелл
Писатель
История, Триллер, 
Объективизм, Приключения
USA
1924-1994
MY: 0/12
MX: 1219'><div class=area style='position:absolute; width:28px; height:20px; left:1253px; top:1633px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1219&a_id=1088&y=1924' title='Джеймс Клавелл
Писатель
История, Триллер, 
Объективизм, Приключения
USA
1924-1994
MY: 0/12
MX: 1219'><div class=area style='position:absolute; width:28px; height:20px; left:1281px; top:1633px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=996&a_id=226&y=1925' title='Джеральд Даррелл
Писатель
О животных, Юмор, 
Мемуары, Приключения
BRI
1925-1995
MY: 0/0
MX: 996'><div class=area style='position:absolute; width:29px; height:20px; left:1030px; top:1566px'></div></a>
<a target=_blank href='build-rlmap.php?mp=996&a_id=226&y=1925' title='Джеральд Даррелл
Писатель
О животных, Юмор, 
Мемуары, Приключения
BRI
1925-1995
MY: 0/0
MX: 996'><div class=area style='position:absolute; width:29px; height:20px; left:1059px; top:1566px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2056&a_id=269&y=1925' title='В. К. Железников
Писатель
Детская, Для подростков, 
Соцреализм
RUS
1925-2015
MY: 0/11
MX: 2056'><div class=area style='position:absolute; width:28px; height:20px; left:2090px; top:1695px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2056&a_id=269&y=1925' title='В. К. Железников
Писатель
Детская, Для подростков, 
Соцреализм
RUS
1925-2015
MY: 0/11
MX: 2056'><div class=area style='position:absolute; width:28px; height:20px; left:2118px; top:1695px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2783&a_id=468&y=1925' title='Юкио Мисима
Писатель
Эстетизм, 
Буддизм, Драматургия
JAP
1925-1970
MY: 0/2
MX: 2783'><div class=area style='position:absolute; width:27px; height:20px; left:2817px; top:1504px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2783&a_id=468&y=1925' title='Юкио Мисима
Писатель
Эстетизм, 
Буддизм, Драматургия
JAP
1925-1970
MY: 0/2
MX: 2783'><div class=area style='position:absolute; width:27px; height:20px; left:2844px; top:1504px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=919&a_id=517&y=1925' title='Евгений Носов
Писатель
Деревня, Соцреализм
RUS
1925-2002
MY: 0/6
MX: 919'><div class=area style='position:absolute; width:28px; height:20px; left:953px; top:1627px'></div></a>
<a target=_blank href='build-rlmap.php?mp=919&a_id=517&y=1925' title='Евгений Носов
Писатель
Деревня, Соцреализм
RUS
1925-2002
MY: 0/6
MX: 919'><div class=area style='position:absolute; width:27px; height:20px; left:981px; top:1627px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1766&a_id=519&y=1925' title='Фланнери О`Коннор
Писательница
Готика
USA
1925-1964
MY: 0/-1
MX: 1766'><div class=area style='position:absolute; width:32px; height:20px; left:1800px; top:1467px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1766&a_id=519&y=1925' title='Фланнери О`Коннор
Писательница
Готика
USA
1925-1964
MY: 0/-1
MX: 1766'><div class=area style='position:absolute; width:31px; height:20px; left:1832px; top:1467px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2056&a_id=563&y=1925' title='Радий Погодин
Писатель
Детская, Для подростков, Соцреализм, 
Реализм
RUS
1925-1993
MY: 0/6
MX: 2056'><div class=area style='position:absolute; width:28px; height:20px; left:2090px; top:1596px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2056&a_id=563&y=1925' title='Радий Погодин
Писатель
Детская, Для подростков, Соцреализм, 
Реализм
RUS
1925-1993
MY: 0/6
MX: 2056'><div class=area style='position:absolute; width:27px; height:20px; left:2118px; top:1596px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1622&a_id=640&y=1925' title='Андрей Синявский
Писатель
Нон-конформизм, 
Фантастика
RUS
1925-1997
MY: 0/-9
MX: 1622'><div class=area style='position:absolute; width:30px; height:20px; left:1656px; top:1516px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1622&a_id=640&y=1925' title='Андрей Синявский
Писатель
Нон-конформизм, 
Фантастика
RUS
1925-1997
MY: 0/-9
MX: 1622'><div class=area style='position:absolute; width:29px; height:20px; left:1686px; top:1516px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1622&a_id=670&y=1925' title='Стругацкие

Фантастика, 
Твердая научная фантастика, Философия, Юмор
RUS
1925-2000
MY: 0/-7
MX: 1622'><div class=area style='position:absolute; width:33px; height:20px; left:1656px; top:1541px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1622&a_id=670&y=1925' title='Стругацкие

Фантастика, 
Твердая научная фантастика, Философия, Юмор
RUS
1925-2000
MY: 0/-7
MX: 1622'><div class=area style='position:absolute; width:33px; height:20px; left:1689px; top:1541px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=742&a_id=706&y=1925' title='Юрий Трифонов
Писатель
Соцреализм, 
Город, История
RUS
1925-1981
MY: 0/31
MX: 742'><div class=area style='position:absolute; width:34px; height:20px; left:776px; top:1713px'></div></a>
<a target=_blank href='build-rlmap.php?mp=742&a_id=706&y=1925' title='Юрий Трифонов
Писатель
Соцреализм, 
Город, История
RUS
1925-1981
MY: 0/31
MX: 742'><div class=area style='position:absolute; width:34px; height:20px; left:810px; top:1713px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2711&a_id=723&y=1925' title='Джон Уэйн
Автор
Рассерженные молодые люди
BRI
1925-1994
MY: 0/1
MX: 2711'><div class=area style='position:absolute; width:18px; height:20px; left:2745px; top:1572px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2711&a_id=723&y=1925' title='Джон Уэйн
Автор
Рассерженные молодые люди
BRI
1925-1994
MY: 0/1
MX: 2711'><div class=area style='position:absolute; width:18px; height:20px; left:2763px; top:1572px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1544&a_id=1122&y=1925' title='Карлос Кастанеда
Писатель
Антропология, Мистицизм, Психология, Философия, 
Мемуары, Эзотерика
USA
1925-1998
MY: 0/-1
MX: 1544'><div class=area style='position:absolute; width:34px; height:20px; left:1578px; top:1572px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1544&a_id=1122&y=1925' title='Карлос Кастанеда
Писатель
Антропология, Мистицизм, Психология, Философия, 
Мемуары, Эзотерика
USA
1925-1998
MY: 0/-1
MX: 1544'><div class=area style='position:absolute; width:34px; height:20px; left:1612px; top:1572px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=1110&y=1925' title='Гарри Гаррисон
Писатель
Сатира, Фантастика, Юмор
USA
1925-2012
MY: 0/-1
MX: 2209'><div class=area style='position:absolute; width:32px; height:20px; left:2243px; top:1615px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2209&a_id=1110&y=1925' title='Гарри Гаррисон
Писатель
Сатира, Фантастика, Юмор
USA
1925-2012
MY: 0/-1
MX: 2209'><div class=area style='position:absolute; width:31px; height:20px; left:2275px; top:1615px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2645&a_id=118&y=1926' title='Мишель Бютор
Писатель
Антироман, 
Психология
FRA
1926-2016
MY: 0/0
MX: 2645'><div class=area style='position:absolute; width:22px; height:20px; left:2679px; top:1633px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2645&a_id=118&y=1926' title='Мишель Бютор
Писатель
Антироман, 
Психология
FRA
1926-2016
MY: 0/0
MX: 2645'><div class=area style='position:absolute; width:21px; height:20px; left:2701px; top:1633px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1766&a_id=404&y=1926' title='Харпер Ли
Писательница
Готика, 
Дидактизм, Для подростков, Юмор
USA
1926-2016
MY: 0/0
MX: 1766'><div class=area style='position:absolute; width:12px; height:20px; left:1800px; top:1633px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1766&a_id=404&y=1926' title='Харпер Ли
Писательница
Готика, 
Дидактизм, Для подростков, Юмор
USA
1926-2016
MY: 0/0
MX: 1766'><div class=area style='position:absolute; width:12px; height:20px; left:1812px; top:1633px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2574&a_id=730&y=1926' title='Джон Фаулз
Писатель-романист
Постмодернизм, 
Атеизм
BRI
1926-2005
MY: 0/14
MX: 2574'><div class=area style='position:absolute; width:21px; height:20px; left:2608px; top:1689px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2574&a_id=730&y=1926' title='Джон Фаулз
Писатель-романист
Постмодернизм, 
Атеизм
BRI
1926-2005
MY: 0/14
MX: 2574'><div class=area style='position:absolute; width:21px; height:20px; left:2629px; top:1689px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=-2&a_id=801&y=1926' title='Питер Шаффер
Драматург
Драматургия
BRI
1926-2016
MY: 0/-4
MX: -2'><div class=area style='position:absolute; width:30px; height:20px; left:32px; top:1609px'></div></a>
<a target=_blank href='build-rlmap.php?mp=-2&a_id=801&y=1926' title='Питер Шаффер
Драматург
Драматургия
BRI
1926-2016
MY: 0/-4
MX: -2'><div class=area style='position:absolute; width:29px; height:20px; left:62px; top:1609px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1903&a_id=1111&y=1926' title='Джеймс Крюс
Писатель
Детская, 
Приключения, Сказка, Фантастика, Философия
DEU
1926-1997
MY: 0/-2
MX: 1903'><div class=area style='position:absolute; width:19px; height:20px; left:1937px; top:1566px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1903&a_id=1111&y=1926' title='Джеймс Крюс
Писатель
Детская, 
Приключения, Сказка, Фантастика, Философия
DEU
1926-1997
MY: 0/-2
MX: 1903'><div class=area style='position:absolute; width:18px; height:20px; left:1956px; top:1566px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1977&a_id=1182&y=1926' title='Ричард Матесон
Писатель
Фантастика, Фэнтези, Хоррор, 
Мистицизм
USA
1926-2013
MY: 0/-1
MX: 1977'><div class=area style='position:absolute; width:29px; height:20px; left:2011px; top:1621px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1977&a_id=1182&y=1926' title='Ричард Матесон
Писатель
Фантастика, Фэнтези, Хоррор, 
Мистицизм
USA
1926-2013
MY: 0/-1
MX: 1977'><div class=area style='position:absolute; width:29px; height:20px; left:2040px; top:1621px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=836&a_id=6&y=1927' title='Алесь Адамович
Писатель
О войне, Соцреализм, 
Антифашизм, История
RUS
1927-1994
MY: 0/-2
MX: 836'><div class=area style='position:absolute; width:32px; height:20px; left:870px; top:1559px'></div></a>
<a target=_blank href='build-rlmap.php?mp=836&a_id=6&y=1927' title='Алесь Адамович
Писатель
О войне, Соцреализм, 
Антифашизм, История
RUS
1927-1994
MY: 0/-2
MX: 836'><div class=area style='position:absolute; width:32px; height:20px; left:902px; top:1559px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=590&a_id=205&y=1927' title='Гюнтер Грасс
Писатель
Магический реализм, 
Социализм
DEU
1927-2015
MY: 0/6
MX: 590'><div class=area style='position:absolute; width:21px; height:20px; left:624px; top:1670px'></div></a>
<a target=_blank href='build-rlmap.php?mp=590&a_id=205&y=1927' title='Гюнтер Грасс
Писатель
Магический реализм, 
Социализм
DEU
1927-2015
MY: 0/6
MX: 590'><div class=area style='position:absolute; width:21px; height:20px; left:645px; top:1670px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1395&a_id=331&y=1927' title='Дэниел Киз
Писатель
Психология, Фантастика
USA
1927-2014
MY: 0/0
MX: 1395'><div class=area style='position:absolute; width:14px; height:20px; left:1429px; top:1633px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1395&a_id=331&y=1927' title='Дэниел Киз
Писатель
Психология, Фантастика
USA
1927-2014
MY: 0/0
MX: 1395'><div class=area style='position:absolute; width:13px; height:20px; left:1443px; top:1633px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=590&a_id=443&y=1927' title='Г. Г. Маркес
Писатель
Магический реализм, 
О любви, Постмодернизм, Социализм, Философия
COL
1927-2014
MY: 0/10
MX: 590'><div class=area style='position:absolute; width:27px; height:20px; left:624px; top:1695px'></div></a>
<a target=_blank href='build-rlmap.php?mp=590&a_id=443&y=1927' title='Г. Г. Маркес
Писатель
Магический реализм, 
О любви, Постмодернизм, Социализм, Философия
COL
1927-2014
MY: 0/10
MX: 590'><div class=area style='position:absolute; width:26px; height:20px; left:651px; top:1695px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=919&a_id=631&y=1927' title='Виталий Сёмин
Писатель
Деревня, 
Реализм
RUS
1927-1978
MY: 0/-3
MX: 919'><div class=area style='position:absolute; width:23px; height:20px; left:953px; top:1504px'></div></a>
<a target=_blank href='build-rlmap.php?mp=919&a_id=631&y=1927' title='Виталий Сёмин
Писатель
Деревня, 
Реализм
RUS
1927-1978
MY: 0/-3
MX: 919'><div class=area style='position:absolute; width:22px; height:20px; left:976px; top:1504px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=590&a_id=9&y=1928' title='Чингиз Айтматов
Писатель
Магический реализм, Соцреализм, 
О любви, Фантастика, Философия
RUS
1928-2008
MY: 0/-7
MX: 590'><div class=area style='position:absolute; width:31px; height:20px; left:624px; top:1572px'></div></a>
<a target=_blank href='build-rlmap.php?mp=590&a_id=9&y=1928' title='Чингиз Айтматов
Писатель
Магический реализм, Соцреализм, 
О любви, Фантастика, Философия
RUS
1928-2008
MY: 0/-7
MX: 590'><div class=area style='position:absolute; width:30px; height:20px; left:655px; top:1572px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=-2&a_id=527&y=1928' title='Эдвард Олби
Драматург
Драматургия
USA
1928-2016
MY: 0/3
MX: -2'><div class=area style='position:absolute; width:19px; height:20px; left:32px; top:1658px'></div></a>
<a target=_blank href='build-rlmap.php?mp=-2&a_id=527&y=1928' title='Эдвард Олби
Драматург
Драматургия
USA
1928-2016
MY: 0/3
MX: -2'><div class=area style='position:absolute; width:19px; height:20px; left:51px; top:1658px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1622&a_id=1134&y=1928' title='Роберт Шекли
Писатель
Фантастика, 
Антиутопия, Фэнтези
USA
1928-2005
MY: 0/13
MX: 1622'><div class=area style='position:absolute; width:22px; height:20px; left:1656px; top:1689px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1622&a_id=1134&y=1928' title='Роберт Шекли
Писатель
Фантастика, 
Антиутопия, Фэнтези
USA
1928-2005
MY: 0/13
MX: 1622'><div class=area style='position:absolute; width:22px; height:20px; left:1678px; top:1689px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=919&a_id=1085&y=1928' title='Анатолий Иванов
Писатель
Деревня, Соцреализм, 
О войне, О любви, Почвенник
RUS
1928-1999
MY: 0/10
MX: 919'><div class=area style='position:absolute; width:31px; height:20px; left:953px; top:1652px'></div></a>
<a target=_blank href='build-rlmap.php?mp=919&a_id=1085&y=1928' title='Анатолий Иванов
Писатель
Деревня, Соцреализм, 
О войне, О любви, Почвенник
RUS
1928-1999
MY: 0/10
MX: 919'><div class=area style='position:absolute; width:31px; height:20px; left:984px; top:1652px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=836&a_id=1035&y=1928' title='Валентин Пикуль
Писатель
О войне, 
История
RUS
1928-1990
MY: 0/-4
MX: 836'><div class=area style='position:absolute; width:27px; height:20px; left:870px; top:1535px'></div></a>
<a target=_blank href='build-rlmap.php?mp=836&a_id=1035&y=1928' title='Валентин Пикуль
Писатель
О войне, 
История
RUS
1928-1990
MY: 0/-4
MX: 836'><div class=area style='position:absolute; width:27px; height:20px; left:897px; top:1535px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=742&a_id=149&y=1929' title='Криста Вольф
Писательница
Соцреализм
DEU
1929-2011
MY: 0/34
MX: 742'><div class=area style='position:absolute; width:23px; height:20px; left:776px; top:1837px'></div></a>
<a target=_blank href='build-rlmap.php?mp=742&a_id=149&y=1929' title='Криста Вольф
Писательница
Соцреализм
DEU
1929-2011
MY: 0/34
MX: 742'><div class=area style='position:absolute; width:22px; height:20px; left:799px; top:1837px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=293&y=1929' title='Фазиль Искандер
Писатель
Реализм, 
Детская, Сатира, Юмор
RUS
1929-2016
MY: 0/3
MX: 1302'><div class=area style='position:absolute; width:32px; height:20px; left:1336px; top:1664px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1302&a_id=293&y=1929' title='Фазиль Искандер
Писатель
Реализм, 
Детская, Сатира, Юмор
RUS
1929-2016
MY: 0/3
MX: 1302'><div class=area style='position:absolute; width:31px; height:20px; left:1368px; top:1664px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2432&a_id=370&y=1929' title='Милан Кундера
Писатель
Модернизм, 
Коммунист, О любви, Постмодернизм, Философия
CZE
1929-
MY: 0/23
MX: 2432'><div class=area style='position:absolute; width:27px; height:20px; left:2466px; top:1640px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2432&a_id=370&y=1929' title='Милан Кундера
Писатель
Модернизм, 
Коммунист, О любви, Постмодернизм, Философия
CZE
1929-
MY: 0/23
MX: 2432'><div class=area style='position:absolute; width:27px; height:20px; left:2493px; top:1640px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2711&a_id=532&y=1929' title='Джон Осборн
Драматург
Рассерженные молодые люди
BRI
1929-1994
MY: 0/3
MX: 2711'><div class=area style='position:absolute; width:26px; height:20px; left:2745px; top:1596px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2711&a_id=532&y=1929' title='Джон Осборн
Драматург
Рассерженные молодые люди
BRI
1929-1994
MY: 0/3
MX: 2711'><div class=area style='position:absolute; width:26px; height:20px; left:2771px; top:1596px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=919&a_id=823&y=1929' title='Василий Шукшин
Кинорежиссёр
Деревня, 
О любви, Психология, Публицистика, Юмор
RUS
1929-1974
MY: 0/-6
MX: 919'><div class=area style='position:absolute; width:26px; height:20px; left:953px; top:1479px'></div></a>
<a target=_blank href='build-rlmap.php?mp=919&a_id=823&y=1929' title='Василий Шукшин
Кинорежиссёр
Деревня, 
О любви, Психология, Публицистика, Юмор
RUS
1929-1974
MY: 0/-6
MX: 919'><div class=area style='position:absolute; width:25px; height:20px; left:979px; top:1479px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=590&a_id=1169&y=1929' title='Милорад Павич
Поэт
Магический реализм, 
Поэзия
SRB
1929-2009
MY: 0/-4
MX: 590'><div class=area style='position:absolute; width:22px; height:20px; left:624px; top:1596px'></div></a>
<a target=_blank href='build-rlmap.php?mp=590&a_id=1169&y=1929' title='Милорад Павич
Поэт
Магический реализм, 
Поэзия
SRB
1929-2009
MY: 0/-4
MX: 590'><div class=area style='position:absolute; width:21px; height:20px; left:646px; top:1596px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1977&a_id=1174&y=1929' title='Урсула Ле Гуин
Писательница
Детская, Фэнтези, 
Анархизм, Фантастика, Феминизм
USA
1929-
MY: 0/-4
MX: 1977'><div class=area style='position:absolute; width:17px; height:20px; left:2011px; top:1473px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1977&a_id=1174&y=1929' title='Урсула Ле Гуин
Писательница
Детская, Фэнтези, 
Анархизм, Фантастика, Феминизм
USA
1929-
MY: 0/-4
MX: 1977'><div class=area style='position:absolute; width:16px; height:20px; left:2028px; top:1473px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=836&a_id=1199&y=1929' title='Анатолий Кузнецов
Писатель
О войне, 
Документалистика, Мемуары
RUS
1929-1979
MY: 0/-7
MX: 836'><div class=area style='position:absolute; width:30px; height:20px; left:870px; top:1486px'></div></a>
<a target=_blank href='build-rlmap.php?mp=836&a_id=1199&y=1929' title='Анатолий Кузнецов
Писатель
О войне, 
Документалистика, Мемуары
RUS
1929-1979
MY: 0/-7
MX: 836'><div class=area style='position:absolute; width:30px; height:20px; left:900px; top:1486px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1903&a_id=1239&y=1929' title='Михаэль Энде

Детская, Фантастика
DEU
1929-1995
MY: 0/2
MX: 1903'><div class=area style='position:absolute; width:19px; height:20px; left:1937px; top:1590px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1903&a_id=1239&y=1929' title='Михаэль Энде

Детская, Фантастика
DEU
1929-1995
MY: 0/2
MX: 1903'><div class=area style='position:absolute; width:19px; height:20px; left:1956px; top:1590px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1468&a_id=432&y=1930' title='Владимир Максимов
Писатель
Нон-конформизм, Философия, 
Публицистика
RUS
1930-1995
MY: 0/0
MX: 1468'><div class=area style='position:absolute; width:33px; height:20px; left:1502px; top:1584px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1468&a_id=432&y=1930' title='Владимир Максимов
Писатель
Нон-конформизм, Философия, 
Публицистика
RUS
1930-1995
MY: 0/0
MX: 1468'><div class=area style='position:absolute; width:33px; height:20px; left:1535px; top:1584px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=-2&a_id=552&y=1930' title='Гарольд Пинтер
Драматург
Драматургия, 
Социализм
BRI
1930-2008
MY: 0/-6
MX: -2'><div class=area style='position:absolute; width:25px; height:20px; left:32px; top:1584px'></div></a>
<a target=_blank href='build-rlmap.php?mp=-2&a_id=552&y=1930' title='Гарольд Пинтер
Драматург
Драматургия, 
Социализм
BRI
1930-2008
MY: 0/-6
MX: -2'><div class=area style='position:absolute; width:24px; height:20px; left:57px; top:1584px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=1141&y=1930' title='Георгий Данелия
Кинорежиссёр
Юмор, 
Автобиография, Публицистика, Фантастика
RUS
1930-
MY: 0/-18
MX: 2209'><div class=area style='position:absolute; width:29px; height:20px; left:2243px; top:1393px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2209&a_id=1141&y=1930' title='Георгий Данелия
Кинорежиссёр
Юмор, 
Автобиография, Публицистика, Фантастика
RUS
1930-
MY: 0/-18
MX: 2209'><div class=area style='position:absolute; width:29px; height:20px; left:2272px; top:1393px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=140&y=1931' title='Георгий Владимов
Писатель
Реализм, 
Море, Нон-конформизм, О животных
RUS
1931-2003
MY: 0/5
MX: 1302'><div class=area style='position:absolute; width:33px; height:20px; left:1336px; top:1640px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1302&a_id=140&y=1931' title='Георгий Владимов
Писатель
Реализм, 
Море, Нон-конформизм, О животных
RUS
1931-2003
MY: 0/5
MX: 1302'><div class=area style='position:absolute; width:32px; height:20px; left:1369px; top:1640px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2574&a_id=187&y=1931' title='Хуан Гойтисоло
Писатель
Постмодернизм
SPA
1931-
MY: 0/-15
MX: 2574'><div class=area style='position:absolute; width:29px; height:20px; left:2608px; top:1418px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2574&a_id=187&y=1931' title='Хуан Гойтисоло
Писатель
Постмодернизм
SPA
1931-
MY: 0/-15
MX: 2574'><div class=area style='position:absolute; width:28px; height:20px; left:2637px; top:1418px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1219&a_id=248&y=1931' title='Эдгар Л. Доктороу
Писатель
История
USA
1931-2015
MY: 0/14
MX: 1219'><div class=area style='position:absolute; width:30px; height:20px; left:1253px; top:1732px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1219&a_id=248&y=1931' title='Эдгар Л. Доктороу
Писатель
История
USA
1931-2015
MY: 0/14
MX: 1219'><div class=area style='position:absolute; width:30px; height:20px; left:1283px; top:1732px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=667&a_id=385&y=1931' title='Джон Ле Карре
Писатель
Детектив, 
Шпионский роман
BRI
1931-
MY: 0/-13
MX: 667'><div class=area style='position:absolute; width:22px; height:20px; left:701px; top:1430px'></div></a>
<a target=_blank href='build-rlmap.php?mp=667&a_id=385&y=1931' title='Джон Ле Карре
Писатель
Детектив, 
Шпионский роман
BRI
1931-
MY: 0/-13
MX: 667'><div class=area style='position:absolute; width:21px; height:20px; left:723px; top:1430px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=836&a_id=574&y=1931' title='Анатолий Приставкин
Писатель
О войне
RUS
1931-2008
MY: 0/21
MX: 836'><div class=area style='position:absolute; width:36px; height:20px; left:870px; top:1757px'></div></a>
<a target=_blank href='build-rlmap.php?mp=836&a_id=574&y=1931' title='Анатолий Приставкин
Писатель
О войне
RUS
1931-2008
MY: 0/21
MX: 836'><div class=area style='position:absolute; width:35px; height:20px; left:906px; top:1757px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=667&a_id=1101&y=1931' title='Себастьян Жапризо
Писатель
Детектив, 
Психология, Триллер
FRA
1931-2003
MY: 0/19
MX: 667'><div class=area style='position:absolute; width:30px; height:20px; left:701px; top:1726px'></div></a>
<a target=_blank href='build-rlmap.php?mp=667&a_id=1101&y=1931' title='Себастьян Жапризо
Писатель
Детектив, 
Психология, Триллер
FRA
1931-2003
MY: 0/19
MX: 667'><div class=area style='position:absolute; width:30px; height:20px; left:731px; top:1726px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=667&a_id=1058&y=1931' title='Юлиан Семенов
Писатель
Детектив, История, Соцреализм, 
О войне, Публицистика
RUS
1931-1993
MY: 0/20
MX: 667'><div class=area style='position:absolute; width:30px; height:20px; left:701px; top:1701px'></div></a>
<a target=_blank href='build-rlmap.php?mp=667&a_id=1058&y=1931' title='Юлиан Семенов
Писатель
Детектив, История, Соцреализм, 
О войне, Публицистика
RUS
1931-1993
MY: 0/20
MX: 667'><div class=area style='position:absolute; width:29px; height:20px; left:731px; top:1701px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1903&a_id=11&y=1932' title='Василий Аксёнов
Писатель
Детская, Фантастика, 
Антиутопия, История, Поток сознания, Сатира
RUS
1932-2009
MY: 0/5
MX: 1903'><div class=area style='position:absolute; width:28px; height:20px; left:1937px; top:1664px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1903&a_id=11&y=1932' title='Василий Аксёнов
Писатель
Детская, Фантастика, 
Антиутопия, История, Поток сознания, Сатира
RUS
1932-2009
MY: 0/5
MX: 1903'><div class=area style='position:absolute; width:27px; height:20px; left:1965px; top:1664px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=919&a_id=60&y=1932' title='Василий Белов
Писатель
Деревня
RUS
1932-2012
MY: 0/6
MX: 919'><div class=area style='position:absolute; width:22px; height:20px; left:953px; top:1676px'></div></a>
<a target=_blank href='build-rlmap.php?mp=919&a_id=60&y=1932' title='Василий Белов
Писатель
Деревня
RUS
1932-2012
MY: 0/6
MX: 919'><div class=area style='position:absolute; width:21px; height:20px; left:975px; top:1676px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=145&y=1932' title='Владимир Войнович
Писатель
Юмор, 
Антикоммунизм, Антиутопия, Нон-конформизм, Сатира
RUS
1932-
MY: 0/-16
MX: 2209'><div class=area style='position:absolute; width:32px; height:20px; left:2243px; top:1418px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2209&a_id=145&y=1932' title='Владимир Войнович
Писатель
Юмор, 
Антикоммунизм, Антиутопия, Нон-конформизм, Сатира
RUS
1932-
MY: 0/-16
MX: 2209'><div class=area style='position:absolute; width:31px; height:20px; left:2275px; top:1418px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=580&y=1932' title='Иван Пташников
Писатель
Реализм, 
История
RUS
1932-
MY: 0/8
MX: 1302'><div class=area style='position:absolute; width:35px; height:20px; left:1336px; top:1566px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1302&a_id=580&y=1932' title='Иван Пташников
Писатель
Реализм, 
История
RUS
1932-
MY: 0/8
MX: 1302'><div class=area style='position:absolute; width:35px; height:20px; left:1371px; top:1566px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1468&a_id=825&y=1932' title='Умберто Эко
Философ
Философия, 
История, Медиевализм, Мистицизм, Постмодернизм
ITA
1932-2016
MY: 0/0
MX: 1468'><div class=area style='position:absolute; width:14px; height:20px; left:1502px; top:1652px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1468&a_id=825&y=1932' title='Умберто Эко
Философ
Философия, 
История, Медиевализм, Мистицизм, Постмодернизм
ITA
1932-2016
MY: 0/0
MX: 1468'><div class=area style='position:absolute; width:14px; height:20px; left:1516px; top:1652px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1395&a_id=91&y=1933' title='Эдвард де Боно
Психолог
Психология
BRI
1933-
MY: 0/2
MX: 1395'><div class=area style='position:absolute; width:18px; height:20px; left:1429px; top:1535px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1395&a_id=91&y=1933' title='Эдвард де Боно
Психолог
Психология
BRI
1933-
MY: 0/2
MX: 1395'><div class=area style='position:absolute; width:18px; height:20px; left:1447px; top:1535px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1977&a_id=162&y=1933' title='Джон Гарднер
Писатель
Фэнтези
USA
1933-1982
MY: 0/-9
MX: 1977'><div class=area style='position:absolute; width:32px; height:20px; left:2011px; top:1498px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1977&a_id=162&y=1933' title='Джон Гарднер
Писатель
Фэнтези
USA
1933-1982
MY: 0/-9
MX: 1977'><div class=area style='position:absolute; width:32px; height:20px; left:2043px; top:1498px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1766&a_id=430&y=1933' title='Кормак Маккарти
Писатель-романист
Вестерн, Готика, Постапокалипсис, 
Детектив, Драма, Драматургия, Фантастика
USA
1933-
MY: 0/-1
MX: 1766'><div class=area style='position:absolute; width:31px; height:20px; left:1800px; top:1516px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1766&a_id=430&y=1933' title='Кормак Маккарти
Писатель-романист
Вестерн, Готика, Постапокалипсис, 
Детектив, Драма, Драматургия, Фантастика
USA
1933-
MY: 0/-1
MX: 1766'><div class=area style='position:absolute; width:30px; height:20px; left:1831px; top:1516px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=-2&a_id=606&y=1933' title='Михаил Рощин
Драматург
Драматургия
RUS
1933-2010
MY: 0/7
MX: -2'><div class=area style='position:absolute; width:23px; height:20px; left:32px; top:1683px'></div></a>
<a target=_blank href='build-rlmap.php?mp=-2&a_id=606&y=1933' title='Михаил Рощин
Драматург
Драматургия
RUS
1933-2010
MY: 0/7
MX: -2'><div class=area style='position:absolute; width:23px; height:20px; left:55px; top:1683px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=590&a_id=1194&y=1933' title='Отар Чиладзе
Писатель
Магический реализм, 
История, Постмодернизм, Философия
GEO
1933-2009
MY: 0/14
MX: 590'><div class=area style='position:absolute; width:29px; height:20px; left:624px; top:1720px'></div></a>
<a target=_blank href='build-rlmap.php?mp=590&a_id=1194&y=1933' title='Отар Чиладзе
Писатель
Магический реализм, 
История, Постмодернизм, Философия
GEO
1933-2009
MY: 0/14
MX: 590'><div class=area style='position:absolute; width:28px; height:20px; left:653px; top:1720px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=1228&y=1933' title='Дональд Уэстлейк
Писатель
Детектив, Фантастика, Юмор, 
Криминал, Приключения
USA
1933-2008
MY: 0/5
MX: 2209'><div class=area style='position:absolute; width:31px; height:20px; left:2243px; top:1664px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2209&a_id=1228&y=1933' title='Дональд Уэстлейк
Писатель
Детектив, Фантастика, Юмор, 
Криминал, Приключения
USA
1933-2008
MY: 0/5
MX: 2209'><div class=area style='position:absolute; width:30px; height:20px; left:2274px; top:1664px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1903&a_id=108&y=1934' title='Кир Булычёв
Писатель
Детская, Фантастика, 
Приключения
RUS
1934-2003
MY: 0/3
MX: 1903'><div class=area style='position:absolute; width:28px; height:20px; left:1937px; top:1640px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1903&a_id=108&y=1934' title='Кир Булычёв
Писатель
Детская, Фантастика, 
Приключения
RUS
1934-2003
MY: 0/3
MX: 1903'><div class=area style='position:absolute; width:28px; height:20px; left:1965px; top:1640px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=-2&a_id=560&y=1934' title='Ульрих Пленцдорф
Писатель
Драматургия
DEU
1934-2007
MY: 0/0
MX: -2'><div class=area style='position:absolute; width:27px; height:20px; left:32px; top:1633px'></div></a>
<a target=_blank href='build-rlmap.php?mp=-2&a_id=560&y=1934' title='Ульрих Пленцдорф
Писатель
Драматургия
DEU
1934-2007
MY: 0/0
MX: -2'><div class=area style='position:absolute; width:27px; height:20px; left:59px; top:1633px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=836&a_id=792&y=1934' title='Иван Чигринов
Писатель
История, О войне, Соцреализм, 
Антифашизм
RUS
1934-1996
MY: 0/14
MX: 836'><div class=area style='position:absolute; width:31px; height:20px; left:870px; top:1683px'></div></a>
<a target=_blank href='build-rlmap.php?mp=836&a_id=792&y=1934' title='Иван Чигринов
Писатель
История, О войне, Соцреализм, 
Антифашизм
RUS
1934-1996
MY: 0/14
MX: 836'><div class=area style='position:absolute; width:30px; height:20px; left:901px; top:1683px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1903&a_id=1129&y=1934' title='Евгений Велтистов
Писатель
Детская, Фантастика
RUS
1934-1989
MY: 0/6
MX: 1903'><div class=area style='position:absolute; width:28px; height:20px; left:1937px; top:1615px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1903&a_id=1129&y=1934' title='Евгений Велтистов
Писатель
Детская, Фантастика
RUS
1934-1989
MY: 0/6
MX: 1903'><div class=area style='position:absolute; width:28px; height:20px; left:1965px; top:1615px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=523&a_id=332&y=1935' title='Кен Кизи
Писатель
Бит, 
Постмодернизм
USA
1935-2001
MY: 0/0
MX: 523'><div class=area style='position:absolute; width:19px; height:20px; left:557px; top:1615px'></div></a>
<a target=_blank href='build-rlmap.php?mp=523&a_id=332&y=1935' title='Кен Кизи
Писатель
Бит, 
Постмодернизм
USA
1935-2001
MY: 0/0
MX: 523'><div class=area style='position:absolute; width:18px; height:20px; left:576px; top:1615px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=450&a_id=408&y=1935' title='А. А. Лиханов
Писатель
Детская, Критический реализм, 
О любви, Соцреализм
RUS
1935-
MY: 0/0
MX: 450'><div class=area style='position:absolute; width:29px; height:20px; left:484px; top:1535px'></div></a>
<a target=_blank href='build-rlmap.php?mp=450&a_id=408&y=1935' title='А. А. Лиханов
Писатель
Детская, Критический реализм, 
О любви, Соцреализм
RUS
1935-
MY: 0/0
MX: 450'><div class=area style='position:absolute; width:29px; height:20px; left:513px; top:1535px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=140&a_id=538&y=1935' title='Кэндзабуро Оэ
Писатель
Пацифизм, Экзистенциализм, 
Гротескный реализм, Формализм
JAP
1935-
MY: 0/1
MX: 140'><div class=area style='position:absolute; width:12px; height:20px; left:174px; top:1541px'></div></a>
<a target=_blank href='build-rlmap.php?mp=140&a_id=538&y=1935' title='Кэндзабуро Оэ
Писатель
Пацифизм, Экзистенциализм, 
Гротескный реализм, Формализм
JAP
1935-
MY: 0/1
MX: 140'><div class=area style='position:absolute; width:11px; height:20px; left:186px; top:1541px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2289&a_id=615&y=1935' title='Франсуаза Саган
Писательница
Беллетристика, О любви
FRA
1935-2004
MY: 0/-11
MX: 2289'><div class=area style='position:absolute; width:21px; height:20px; left:2323px; top:1559px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2289&a_id=615&y=1935' title='Франсуаза Саган
Писательница
Беллетристика, О любви
FRA
1935-2004
MY: 0/-11
MX: 2289'><div class=area style='position:absolute; width:20px; height:20px; left:2344px; top:1559px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=667&a_id=1054&y=1935' title='Братья Вайнеры

Детектив
RUS
1935-
MY: 0/-5
MX: 667'><div class=area style='position:absolute; width:30px; height:20px; left:701px; top:1504px'></div></a>
<a target=_blank href='build-rlmap.php?mp=667&a_id=1054&y=1935' title='Братья Вайнеры

Детектив
RUS
1935-
MY: 0/-5
MX: 667'><div class=area style='position:absolute; width:29px; height:20px; left:731px; top:1504px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=667&a_id=1049&y=1935' title='Пер Вале, Май Шевалль

Детектив, 
Полицейский детектив
SWE
1935-
MY: 0/-1
MX: 667'><div class=area style='position:absolute; width:30px; height:20px; left:701px; top:1529px'></div></a>
<a target=_blank href='build-rlmap.php?mp=667&a_id=1049&y=1935' title='Пер Вале, Май Шевалль

Детектив, 
Полицейский детектив
SWE
1935-
MY: 0/-1
MX: 667'><div class=area style='position:absolute; width:29px; height:20px; left:731px; top:1529px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1468&a_id=56&y=1936' title='Ричард Бах
Писатель
Философия, 
Фэнтези
USA
1936-
MY: 0/-1
MX: 1468'><div class=area style='position:absolute; width:15px; height:20px; left:1502px; top:1535px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1468&a_id=56&y=1936' title='Ричард Бах
Писатель
Философия, 
Фэнтези
USA
1936-
MY: 0/-1
MX: 1468'><div class=area style='position:absolute; width:15px; height:20px; left:1517px; top:1535px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1219&a_id=585&y=1936' title='Эдвард Радзинский
Писатель
История, 
Публицистика
RUS
1936-
MY: 0/7
MX: 1219'><div class=area style='position:absolute; width:32px; height:20px; left:1253px; top:1584px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1219&a_id=585&y=1936' title='Эдвард Радзинский
Писатель
История, 
Публицистика
RUS
1936-
MY: 0/7
MX: 1219'><div class=area style='position:absolute; width:32px; height:20px; left:1285px; top:1584px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2574&a_id=654&y=1936' title='Виктор Соснора
Автор
Неоромантизм, Постмодернизм, Футуризм
RUS
1936-
MY: 0/-8
MX: 2574'><div class=area style='position:absolute; width:29px; height:20px; left:2608px; top:1492px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2574&a_id=654&y=1936' title='Виктор Соснора
Автор
Неоромантизм, Постмодернизм, Футуризм
RUS
1936-
MY: 0/-8
MX: 2574'><div class=area style='position:absolute; width:29px; height:20px; left:2637px; top:1492px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=919&a_id=1151&y=1936' title='Николай Рубцов
Поэт-песенник
Деревня, Песня, 
Лирика, О природе, Поэзия
RUS
1936-1971
MY: 0/4
MX: 919'><div class=area style='position:absolute; width:24px; height:20px; left:953px; top:1553px'></div></a>
<a target=_blank href='build-rlmap.php?mp=919&a_id=1151&y=1936' title='Николай Рубцов
Поэт-песенник
Деревня, Песня, 
Лирика, О природе, Поэзия
RUS
1936-1971
MY: 0/4
MX: 919'><div class=area style='position:absolute; width:24px; height:20px; left:977px; top:1553px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=1124&y=1936' title='Игорь Губерман
Поэт
Юмор, 
Нон-конформизм, Поэзия, Сатира
RUS
1936-
MY: 0/-16
MX: 2209'><div class=area style='position:absolute; width:31px; height:20px; left:2243px; top:1442px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2209&a_id=1124&y=1936' title='Игорь Губерман
Поэт
Юмор, 
Нон-конформизм, Поэзия, Сатира
RUS
1936-
MY: 0/-16
MX: 2209'><div class=area style='position:absolute; width:31px; height:20px; left:2274px; top:1442px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=590&a_id=1206&y=1936' title='Марио Варгас Льоса
Публицист
Магический реализм, 
История, Сатира
SPA
1936-
MY: 0/-15
MX: 590'><div class=area style='position:absolute; width:22px; height:20px; left:624px; top:1449px'></div></a>
<a target=_blank href='build-rlmap.php?mp=590&a_id=1206&y=1936' title='Марио Варгас Льоса
Публицист
Магический реализм, 
История, Сатира
SPA
1936-
MY: 0/-15
MX: 590'><div class=area style='position:absolute; width:22px; height:20px; left:646px; top:1449px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2574&a_id=75&y=1937' title='Андрей Битов
Писатель
Постмодернизм
RUS
1937-
MY: 0/-5
MX: 2574'><div class=area style='position:absolute; width:21px; height:20px; left:2608px; top:1516px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2574&a_id=75&y=1937' title='Андрей Битов
Писатель
Постмодернизм
RUS
1937-
MY: 0/-5
MX: 2574'><div class=area style='position:absolute; width:20px; height:20px; left:2629px; top:1516px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=742&a_id=126&y=1937' title='Александр Вампилов

Драматургия, Соцреализм
RUS
1937-1972
MY: 0/33
MX: 742'><div class=area style='position:absolute; width:36px; height:20px; left:776px; top:1738px'></div></a>
<a target=_blank href='build-rlmap.php?mp=742&a_id=126&y=1937' title='Александр Вампилов

Драматургия, Соцреализм
RUS
1937-1972
MY: 0/33
MX: 742'><div class=area style='position:absolute; width:35px; height:20px; left:812px; top:1738px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2289&a_id=429&y=1937' title='Колин Маккалоу
Писательница
О любви, 
История, Фэнтези
AUS
1937-2015
MY: 0/-5
MX: 2289'><div class=area style='position:absolute; width:31px; height:20px; left:2323px; top:1633px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2289&a_id=429&y=1937' title='Колин Маккалоу
Писательница
О любви, 
История, Фэнтези
AUS
1937-2015
MY: 0/-5
MX: 2289'><div class=area style='position:absolute; width:31px; height:20px; left:2354px; top:1633px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=919&a_id=590&y=1937' title='Валентин Распутин
Писатель
Деревня
RUS
1937-2015
MY: 0/6
MX: 919'><div class=area style='position:absolute; width:32px; height:20px; left:953px; top:1701px'></div></a>
<a target=_blank href='build-rlmap.php?mp=919&a_id=590&y=1937' title='Валентин Распутин
Писатель
Деревня
RUS
1937-2015
MY: 0/6
MX: 919'><div class=area style='position:absolute; width:32px; height:20px; left:985px; top:1701px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=-2&a_id=666&y=1937' title='Том Стоппард
Драматург
Драматургия, 
Политика, Социальный реализм, Философия
BRI
1937-
MY: 0/-6
MX: -2'><div class=area style='position:absolute; width:32px; height:20px; left:32px; top:1510px'></div></a>
<a target=_blank href='build-rlmap.php?mp=-2&a_id=666&y=1937' title='Том Стоппард
Драматург
Драматургия, 
Политика, Социальный реализм, Философия
BRI
1937-
MY: 0/-6
MX: -2'><div class=area style='position:absolute; width:32px; height:20px; left:64px; top:1510px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=667&a_id=695&y=1937' title='Виктория Токарева
Сценарист
Беллетристика, 
Город, Детектив, Магический реализм, О любви, Юмор
RUS
1937-
MY: 0/5
MX: 667'><div class=area style='position:absolute; width:32px; height:20px; left:701px; top:1578px'></div></a>
<a target=_blank href='build-rlmap.php?mp=667&a_id=695&y=1937' title='Виктория Токарева
Сценарист
Беллетристика, 
Город, Детектив, Магический реализм, О любви, Юмор
RUS
1937-
MY: 0/5
MX: 667'><div class=area style='position:absolute; width:31px; height:20px; left:733px; top:1578px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2574&a_id=758&y=1937' title='Марк Харитонов
Писатель
Постмодернизм
RUS
1937-
MY: 0/-1
MX: 2574'><div class=area style='position:absolute; width:30px; height:20px; left:2608px; top:1541px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2574&a_id=758&y=1937' title='Марк Харитонов
Писатель
Постмодернизм
RUS
1937-
MY: 0/-1
MX: 2574'><div class=area style='position:absolute; width:29px; height:20px; left:2638px; top:1541px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1067&a_id=1159&y=1937' title='Хантер Стоктон Томпсон
Писатель
Биография, Натурализм, 
Гонзо-журналистика, Приключения
USA
1937-2005
MY: 0/0
MX: 1067'><div class=area style='position:absolute; width:30px; height:20px; left:1101px; top:1633px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1067&a_id=1159&y=1937' title='Хантер Стоктон Томпсон
Писатель
Биография, Натурализм, 
Гонзо-журналистика, Приключения
USA
1937-2005
MY: 0/0
MX: 1067'><div class=area style='position:absolute; width:29px; height:20px; left:1131px; top:1633px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1622&a_id=1051&y=1937' title='Роджер Желязны
Писатель
Фантастика, 
Фэнтези, Хоррор
USA
1937-1995
MY: 0/10
MX: 1622'><div class=area style='position:absolute; width:31px; height:20px; left:1656px; top:1664px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1622&a_id=1051&y=1937' title='Роджер Желязны
Писатель
Фантастика, 
Фэнтези, Хоррор
USA
1937-1995
MY: 0/10
MX: 1622'><div class=area style='position:absolute; width:31px; height:20px; left:1687px; top:1664px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2134&a_id=1050&y=1937' title='Эдуард Успенский
Писатель
Детская, 
История, Юмор
RUS
1937-
MY: 0/8
MX: 2134'><div class=area style='position:absolute; width:33px; height:20px; left:2168px; top:1596px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2134&a_id=1050&y=1937' title='Эдуард Успенский
Писатель
Детская, 
История, Юмор
RUS
1937-
MY: 0/8
MX: 2134'><div class=area style='position:absolute; width:32px; height:20px; left:2201px; top:1596px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2289&a_id=1210&y=1937' title='Белла Ахмадулина
Поэтесса
Лирика, Поэзия
RUS
1937-2010
MY: 0/-11
MX: 2289'><div class=area style='position:absolute; width:26px; height:20px; left:2323px; top:1584px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2289&a_id=1210&y=1937' title='Белла Ахмадулина
Поэтесса
Лирика, Поэзия
RUS
1937-2010
MY: 0/-11
MX: 2289'><div class=area style='position:absolute; width:25px; height:20px; left:2349px; top:1584px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=919&a_id=265&y=1938' title='Борис Екимов

Деревня
RUS
1938-
MY: 0/4
MX: 919'><div class=area style='position:absolute; width:25px; height:20px; left:953px; top:1578px'></div></a>
<a target=_blank href='build-rlmap.php?mp=919&a_id=265&y=1938' title='Борис Екимов

Деревня
RUS
1938-
MY: 0/4
MX: 919'><div class=area style='position:absolute; width:24px; height:20px; left:978px; top:1578px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2574&a_id=266&y=1938' title='Венедикт Ерофеев
Писатель
Постмодернизм, 
Приключения, Философия
RUS
1938-1990
MY: 0/12
MX: 2574'><div class=area style='position:absolute; width:30px; height:20px; left:2608px; top:1664px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2574&a_id=266&y=1938' title='Венедикт Ерофеев
Писатель
Постмодернизм, 
Приключения, Философия
RUS
1938-1990
MY: 0/12
MX: 2574'><div class=area style='position:absolute; width:30px; height:20px; left:2638px; top:1664px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2056&a_id=347&y=1938' title='Ю. И. Коваль
Писатель
Детская, Для подростков
RUS
1938-1995
MY: 0/10
MX: 2056'><div class=area style='position:absolute; width:24px; height:20px; left:2090px; top:1670px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2056&a_id=347&y=1938' title='Ю. И. Коваль
Писатель
Детская, Для подростков
RUS
1938-1995
MY: 0/10
MX: 2056'><div class=area style='position:absolute; width:24px; height:20px; left:2114px; top:1670px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1903&a_id=364&y=1938' title='В. П. Крапивин
Писатель
Детская, Реализм, 
Фантастика
RUS
1938-
MY: 0/-2
MX: 1903'><div class=area style='position:absolute; width:32px; height:20px; left:1937px; top:1541px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1903&a_id=364&y=1938' title='В. П. Крапивин
Писатель
Детская, Реализм, 
Фантастика
RUS
1938-
MY: 0/-2
MX: 1903'><div class=area style='position:absolute; width:31px; height:20px; left:1969px; top:1541px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1766&a_id=537&y=1938' title='Джойс Кэрол Оутс
Поэт
Готика, 
Исповедь, Мистицизм, Поэзия, Хоррор
USA
1938-
MY: 0/2
MX: 1766'><div class=area style='position:absolute; width:17px; height:20px; left:1800px; top:1566px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1766&a_id=537&y=1938' title='Джойс Кэрол Оутс
Поэт
Готика, 
Исповедь, Мистицизм, Поэзия, Хоррор
USA
1938-
MY: 0/2
MX: 1766'><div class=area style='position:absolute; width:17px; height:20px; left:1817px; top:1566px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=-2&a_id=549&y=1938' title='Людмила Петрушевская
Певица
Драматургия, 
Детская
RUS
1938-
MY: 0/-3
MX: -2'><div class=area style='position:absolute; width:33px; height:20px; left:32px; top:1535px'></div></a>
<a target=_blank href='build-rlmap.php?mp=-2&a_id=549&y=1938' title='Людмила Петрушевская
Певица
Драматургия, 
Детская
RUS
1938-
MY: 0/-3
MX: -2'><div class=area style='position:absolute; width:33px; height:20px; left:65px; top:1535px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1219&a_id=1209&y=1938' title='Марина Влади
Актриса
Биография, История, Мемуары
FRA
1938-
MY: 0/9
MX: 1219'><div class=area style='position:absolute; width:22px; height:20px; left:1253px; top:1609px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1219&a_id=1209&y=1938' title='Марина Влади
Актриса
Биография, История, Мемуары
FRA
1938-
MY: 0/9
MX: 1219'><div class=area style='position:absolute; width:21px; height:20px; left:1275px; top:1609px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=590&a_id=334&y=1939' title='Анатолий Ким

Магический реализм, 
Драматургия
RUS
1939-
MY: 0/-6
MX: 590'><div class=area style='position:absolute; width:15px; height:20px; left:624px; top:1522px'></div></a>
<a target=_blank href='build-rlmap.php?mp=590&a_id=334&y=1939' title='Анатолий Ким

Магический реализм, 
Драматургия
RUS
1939-
MY: 0/-6
MX: 590'><div class=area style='position:absolute; width:14px; height:20px; left:639px; top:1522px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=569&y=1939' title='Валерий Попов
Писатель
Сатира, Юмор
RUS
1939-
MY: 0/-11
MX: 2209'><div class=area style='position:absolute; width:28px; height:20px; left:2243px; top:1492px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2209&a_id=569&y=1939' title='Валерий Попов
Писатель
Сатира, Юмор
RUS
1939-
MY: 0/-11
MX: 2209'><div class=area style='position:absolute; width:27px; height:20px; left:2271px; top:1492px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1622&a_id=1252&y=1939' title='Маргарет Этвуд

История, Фантастика
CAN
1939-
MY: 0/-11
MX: 1622'><div class=area style='position:absolute; width:21px; height:20px; left:1656px; top:1492px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1622&a_id=1252&y=1939' title='Маргарет Этвуд

История, Фантастика
CAN
1939-
MY: 0/-11
MX: 1622'><div class=area style='position:absolute; width:20px; height:20px; left:1677px; top:1492px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1468&a_id=98&y=1940' title='Иосиф Бродский
Поэт
Нон-конформизм, Философия, 
Ахматовские сироты, Мемуары, Поэзия, Религия
RUS
1940-1996
MY: 0/0
MX: 1468'><div class=area style='position:absolute; width:31px; height:20px; left:1502px; top:1615px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1468&a_id=98&y=1940' title='Иосиф Бродский
Поэт
Нон-конформизм, Философия, 
Ахматовские сироты, Мемуары, Поэзия, Религия
RUS
1940-1996
MY: 0/0
MX: 1468'><div class=area style='position:absolute; width:31px; height:20px; left:1533px; top:1615px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=667&a_id=1137&y=1940' title='Томас Харрис
Писатель
Детектив, Триллер, 
О маньяках, Психология, Хоррор
USA
1940-
MY: 0/10
MX: 667'><div class=area style='position:absolute; width:31px; height:20px; left:701px; top:1627px'></div></a>
<a target=_blank href='build-rlmap.php?mp=667&a_id=1137&y=1940' title='Томас Харрис
Писатель
Детектив, Триллер, 
О маньяках, Психология, Хоррор
USA
1940-
MY: 0/10
MX: 667'><div class=area style='position:absolute; width:31px; height:20px; left:732px; top:1627px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=1068&y=1940' title='Григорий Горин
Писатель
Сатира, Юмор, 
Драматургия, Публицистика
RUS
1940-2000
MY: 0/2
MX: 2209'><div class=area style='position:absolute; width:21px; height:20px; left:2243px; top:1640px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2209&a_id=1068&y=1940' title='Григорий Горин
Писатель
Сатира, Юмор, 
Драматургия, Публицистика
RUS
1940-2000
MY: 0/2
MX: 2209'><div class=area style='position:absolute; width:21px; height:20px; left:2264px; top:1640px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=245&y=1941' title='Сергей Довлатов
Писатель
Реализм, Юмор, 
Автобиография, Публицистика, Сатира
RUS
1941-1990
MY: 0/-10
MX: 2209'><div class=area style='position:absolute; width:32px; height:20px; left:2243px; top:1541px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2209&a_id=245&y=1941' title='Сергей Довлатов
Писатель
Реализм, Юмор, 
Автобиография, Публицистика, Сатира
RUS
1941-1990
MY: 0/-10
MX: 2209'><div class=area style='position:absolute; width:31px; height:20px; left:2275px; top:1541px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=742&a_id=338&y=1941' title='Руслан Киреев
Писатель
Соцреализм
RUS
1941-
MY: 0/39
MX: 742'><div class=area style='position:absolute; width:25px; height:20px; left:776px; top:1812px'></div></a>
<a target=_blank href='build-rlmap.php?mp=742&a_id=338&y=1941' title='Руслан Киреев
Писатель
Соцреализм
RUS
1941-
MY: 0/39
MX: 742'><div class=area style='position:absolute; width:24px; height:20px; left:801px; top:1812px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1977&a_id=1176&y=1941' title='Энн Райс
Писательница
Готика, Мистицизм, Фэнтези, Хоррор, 
Триллер, Эротика
USA
1941-
MY: 0/-8
MX: 1977'><div class=area style='position:absolute; width:18px; height:20px; left:2011px; top:1522px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1977&a_id=1176&y=1941' title='Энн Райс
Писательница
Готика, Мистицизм, Фэнтези, Хоррор, 
Триллер, Эротика
USA
1941-
MY: 0/-8
MX: 1977'><div class=area style='position:absolute; width:18px; height:20px; left:2029px; top:1522px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1903&a_id=1230&y=1941' title='Александр Житинский
Писатель
Для подростков, 
Драматургия, Приключения, Фантастика, Юмор
RUS
1941-2012
MY: 0/3
MX: 1903'><div class=area style='position:absolute; width:30px; height:20px; left:1937px; top:1689px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1903&a_id=1230&y=1941' title='Александр Житинский
Писатель
Для подростков, 
Драматургия, Приключения, Фантастика, Юмор
RUS
1941-2012
MY: 0/3
MX: 1903'><div class=area style='position:absolute; width:30px; height:20px; left:1967px; top:1689px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1766&a_id=770&y=1942' title='Сьюзен Хилл
Писательница
Готика, 
Мистицизм, Фантастика, Фэнтези
BRI
1942-
MY: 0/2
MX: 1766'><div class=area style='position:absolute; width:19px; height:20px; left:1800px; top:1590px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1766&a_id=770&y=1942' title='Сьюзен Хилл
Писательница
Готика, 
Мистицизм, Фантастика, Фэнтези
BRI
1942-
MY: 0/2
MX: 1766'><div class=area style='position:absolute; width:18px; height:20px; left:1819px; top:1590px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1701&a_id=297&y=1943' title='Александр Кабаков
Писатель
Антиутопия
RUS
1943-
MY: 0/0
MX: 1701'><div class=area style='position:absolute; width:27px; height:20px; left:1735px; top:1584px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1701&a_id=297&y=1943' title='Александр Кабаков
Писатель
Антиутопия
RUS
1943-
MY: 0/0
MX: 1701'><div class=area style='position:absolute; width:27px; height:20px; left:1762px; top:1584px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2574&a_id=405&y=1943' title='Эдуард Лимонов
Писатель
Постмодернизм, 
ЛДПР, Национализм, Социализм
RUS
1943-
MY: 0/1
MX: 2574'><div class=area style='position:absolute; width:30px; height:20px; left:2608px; top:1590px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2574&a_id=405&y=1943' title='Эдуард Лимонов
Писатель
Постмодернизм, 
ЛДПР, Национализм, Социализм
RUS
1943-
MY: 0/1
MX: 2574'><div class=area style='position:absolute; width:30px; height:20px; left:2638px; top:1590px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2574&a_id=648&y=1943' title='Саша Соколов
Писатель
Постмодернизм, 
Нон-конформизм, Психология
RUS
1943-
MY: 0/5
MX: 2574'><div class=area style='position:absolute; width:28px; height:20px; left:2608px; top:1615px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2574&a_id=648&y=1943' title='Саша Соколов
Писатель
Постмодернизм, 
Нон-конформизм, Психология
RUS
1943-
MY: 0/5
MX: 2574'><div class=area style='position:absolute; width:28px; height:20px; left:2636px; top:1615px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2574&a_id=1089&y=1943' title='Людмила Улицкая
Писательница
Постмодернизм, Современная проза, 
Реализм, Эстетизм
RUS
1943-
MY: 0/9
MX: 2574'><div class=area style='position:absolute; width:28px; height:20px; left:2608px; top:1640px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2574&a_id=1089&y=1943' title='Людмила Улицкая
Писательница
Постмодернизм, Современная проза, 
Реализм, Эстетизм
RUS
1943-
MY: 0/9
MX: 2574'><div class=area style='position:absolute; width:28px; height:20px; left:2636px; top:1640px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1622&a_id=1248&y=1943' title='Кристофер Прист

Фантастика

1943-
MY: 0/-3
MX: 1622'><div class=area style='position:absolute; width:22px; height:20px; left:1656px; top:1566px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1622&a_id=1248&y=1943' title='Кристофер Прист

Фантастика

1943-
MY: 0/-3
MX: 1622'><div class=area style='position:absolute; width:21px; height:20px; left:1678px; top:1566px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2289&a_id=1164&y=1944' title='Катарина Масетти
Журналистка
О любви
SWE
1944-
MY: 0/-13
MX: 2289'><div class=area style='position:absolute; width:28px; height:20px; left:2323px; top:1510px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2289&a_id=1164&y=1944' title='Катарина Масетти
Журналистка
О любви
SWE
1944-
MY: 0/-13
MX: 2289'><div class=area style='position:absolute; width:28px; height:20px; left:2351px; top:1510px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2289&a_id=1086&y=1944' title='Бернхард Шлинк
Писатель
О любви, 
Драма, Криминал, О войне, Современная проза
DEU
1944-
MY: 0/-9
MX: 2289'><div class=area style='position:absolute; width:23px; height:20px; left:2323px; top:1535px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2289&a_id=1086&y=1944' title='Бернхард Шлинк
Писатель
О любви, 
Драма, Криминал, О войне, Современная проза
DEU
1944-
MY: 0/-9
MX: 2289'><div class=area style='position:absolute; width:22px; height:20px; left:2346px; top:1535px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1395&a_id=200&y=1946' title='Дэниел Гоулман
Писатель
Психология
USA
1946-
MY: 0/0
MX: 1395'><div class=area style='position:absolute; width:28px; height:20px; left:1429px; top:1603px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1395&a_id=200&y=1946' title='Дэниел Гоулман
Писатель
Психология
USA
1946-
MY: 0/0
MX: 1395'><div class=area style='position:absolute; width:27px; height:20px; left:1457px; top:1603px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1977&a_id=1121&y=1946' title='Филип Пулман
Писатель
Для подростков, Фэнтези, 
Приключения, Фантастика
BRI
1946-
MY: 0/-9
MX: 1977'><div class=area style='position:absolute; width:25px; height:20px; left:2011px; top:1547px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1977&a_id=1121&y=1946' title='Филип Пулман
Писатель
Для подростков, Фэнтези, 
Приключения, Фантастика
BRI
1946-
MY: 0/-9
MX: 1977'><div class=area style='position:absolute; width:25px; height:20px; left:2036px; top:1547px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=1036&y=1946' title='Леонид Филатов
Актёр
Юмор, 
Сатира
RUS
1946-2003
MY: 0/9
MX: 2209'><div class=area style='position:absolute; width:31px; height:20px; left:2243px; top:1713px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2209&a_id=1036&y=1946' title='Леонид Филатов
Актёр
Юмор, 
Сатира
RUS
1946-2003
MY: 0/9
MX: 2209'><div class=area style='position:absolute; width:31px; height:20px; left:2274px; top:1713px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1622&a_id=336&y=1947' title='Стивен Кинг
Писатель
Триллер, Фантастика, Хоррор, 
Мистицизм, Фэнтези
USA
1947-
MY: 0/17
MX: 1622'><div class=area style='position:absolute; width:17px; height:20px; left:1656px; top:1713px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1622&a_id=336&y=1947' title='Стивен Кинг
Писатель
Триллер, Фантастика, Хоррор, 
Мистицизм, Фэнтези
USA
1947-
MY: 0/17
MX: 1622'><div class=area style='position:absolute; width:16px; height:20px; left:1673px; top:1713px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1544&a_id=362&y=1947' title='Пауло Коэльо
Поэт
Мистицизм, Философия, 
Детектив, Фэнтези, Религия, Притча, Приключения, Поэзия, О любви, Эзотерика
BRA
1947-
MY: 0/2
MX: 1544'><div class=area style='position:absolute; width:24px; height:20px; left:1578px; top:1621px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1544&a_id=362&y=1947' title='Пауло Коэльо
Поэт
Мистицизм, Философия, 
Детектив, Фэнтези, Религия, Притча, Приключения, Поэзия, О любви, Эзотерика
BRA
1947-
MY: 0/2
MX: 1544'><div class=area style='position:absolute; width:23px; height:20px; left:1602px; top:1621px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=590&a_id=611&y=1947' title='Салман Рушди
Писатель
Магический реализм, 
Постколониализм, Сатира
BRI
1947-
MY: 0/-10
MX: 590'><div class=area style='position:absolute; width:22px; height:20px; left:624px; top:1547px'></div></a>
<a target=_blank href='build-rlmap.php?mp=590&a_id=611&y=1947' title='Салман Рушди
Писатель
Магический реализм, 
Постколониализм, Сатира
BRI
1947-
MY: 0/-10
MX: 590'><div class=area style='position:absolute; width:21px; height:20px; left:646px; top:1547px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1219&a_id=1163&y=1948' title='Светлана Алексиевич
Писательница
История, 
Документалистика, Мемуары, О войне, Пацифизм, Публицистика
RUS
1948-
MY: 0/15
MX: 1219'><div class=area style='position:absolute; width:33px; height:20px; left:1253px; top:1707px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1219&a_id=1163&y=1948' title='Светлана Алексиевич
Писательница
История, 
Документалистика, Мемуары, О войне, Пацифизм, Публицистика
RUS
1948-
MY: 0/15
MX: 1219'><div class=area style='position:absolute; width:32px; height:20px; left:1286px; top:1707px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=1160&y=1948' title='Михаил Задорнов
Писатель
Лирика, Сатира, Юмор
RUS
1948-
MY: 0/-8
MX: 2209'><div class=area style='position:absolute; width:32px; height:20px; left:2243px; top:1566px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2209&a_id=1160&y=1948' title='Михаил Задорнов
Писатель
Лирика, Сатира, Юмор
RUS
1948-
MY: 0/-8
MX: 2209'><div class=area style='position:absolute; width:32px; height:20px; left:2275px; top:1566px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1977&a_id=1098&y=1948' title='Роберт Джордан
Писатель
Фэнтези, Эпическое фэнтези
USA
1948-2007
MY: 0/-1
MX: 1977'><div class=area style='position:absolute; width:30px; height:20px; left:2011px; top:1670px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1977&a_id=1098&y=1948' title='Роберт Джордан
Писатель
Фэнтези, Эпическое фэнтези
USA
1948-2007
MY: 0/-1
MX: 1977'><div class=area style='position:absolute; width:29px; height:20px; left:2041px; top:1670px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1977&a_id=1097&y=1948' title='Анджей Сапковский
Писатель
Фэнтези, 
Приключения, Фантастика
POL
1948-
MY: 0/-7
MX: 1977'><div class=area style='position:absolute; width:32px; height:20px; left:2011px; top:1572px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1977&a_id=1097&y=1948' title='Анджей Сапковский
Писатель
Фэнтези, 
Приключения, Фантастика
POL
1948-
MY: 0/-7
MX: 1977'><div class=area style='position:absolute; width:32px; height:20px; left:2043px; top:1572px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1977&a_id=1094&y=1948' title='Терри Пратчетт
Писатель
Сатира, Фэнтези, 
Для подростков, Приключения, Фантастика, Юмор
BRI
1948-2015
MY: 0/-1
MX: 1977'><div class=area style='position:absolute; width:30px; height:20px; left:2011px; top:1695px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1977&a_id=1094&y=1948' title='Терри Пратчетт
Писатель
Сатира, Фэнтези, 
Для подростков, Приключения, Фантастика, Юмор
BRI
1948-2015
MY: 0/-1
MX: 1977'><div class=area style='position:absolute; width:29px; height:20px; left:2041px; top:1695px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1977&a_id=1077&y=1948' title='Джордж Мартин
Писатель
Фэнтези, 
История, О войне, О любви, Приключения, Фантастика
USA
1948-
MY: 0/-3
MX: 1977'><div class=area style='position:absolute; width:26px; height:20px; left:2011px; top:1596px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1977&a_id=1077&y=1948' title='Джордж Мартин
Писатель
Фэнтези, 
История, О войне, О любви, Приключения, Фантастика
USA
1948-
MY: 0/-3
MX: 1977'><div class=area style='position:absolute; width:25px; height:20px; left:2037px; top:1596px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=1202&y=1948' title='Михаил Веллер
Писатель
История, Философия, Юмор, 
Биография, О войне, Реализм, Сатира
RUS
1948-
MY: 0/-4
MX: 2209'><div class=area style='position:absolute; width:25px; height:20px; left:2243px; top:1590px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2209&a_id=1202&y=1948' title='Михаил Веллер
Писатель
История, Философия, Юмор, 
Биография, О войне, Реализм, Сатира
RUS
1948-
MY: 0/-4
MX: 2209'><div class=area style='position:absolute; width:25px; height:20px; left:2268px; top:1590px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=667&a_id=1223&y=1948' title='Данил Корецкий
Писатель
Детектив, 
Милицейский роман, Триллер
RUS
1948-
MY: 0/22
MX: 667'><div class=area style='position:absolute; width:31px; height:20px; left:701px; top:1750px'></div></a>
<a target=_blank href='build-rlmap.php?mp=667&a_id=1223&y=1948' title='Данил Корецкий
Писатель
Детектив, 
Милицейский роман, Триллер
RUS
1948-
MY: 0/22
MX: 667'><div class=area style='position:absolute; width:30px; height:20px; left:732px; top:1750px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=590&a_id=285&y=1949' title='Патрик Зюскинд
Писатель
Магический реализм, Постмодернизм, 
Мистицизм, Хоррор
DEU
1949-
MY: 0/0
MX: 590'><div class=area style='position:absolute; width:29px; height:20px; left:624px; top:1621px'></div></a>
<a target=_blank href='build-rlmap.php?mp=590&a_id=285&y=1949' title='Патрик Зюскинд
Писатель
Магический реализм, Постмодернизм, 
Мистицизм, Хоррор
DEU
1949-
MY: 0/0
MX: 590'><div class=area style='position:absolute; width:29px; height:20px; left:653px; top:1621px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=590&a_id=488&y=1949' title='Харуки Мураками
Писатель
Магический реализм, 
Антиутопия, Постмодернизм, Реализм, Сюрреализм, Фантастика
JAP
1949-
MY: 0/4
MX: 590'><div class=area style='position:absolute; width:32px; height:20px; left:624px; top:1646px'></div></a>
<a target=_blank href='build-rlmap.php?mp=590&a_id=488&y=1949' title='Харуки Мураками
Писатель
Магический реализм, 
Антиутопия, Постмодернизм, Реализм, Сюрреализм, Фантастика
JAP
1949-
MY: 0/4
MX: 590'><div class=area style='position:absolute; width:32px; height:20px; left:656px; top:1646px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2574&a_id=831&y=1949' title='Мартин Эмис

Постмодернизм, Сатира
BRI
1949-
MY: 0/15
MX: 2574'><div class=area style='position:absolute; width:26px; height:20px; left:2608px; top:1713px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2574&a_id=831&y=1949' title='Мартин Эмис

Постмодернизм, Сатира
BRI
1949-
MY: 0/15
MX: 2574'><div class=area style='position:absolute; width:26px; height:20px; left:2634px; top:1713px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1701&a_id=697&y=1951' title='Т. Н. Толстая
Писательница
Антиутопия, Постапокалипсис, Сатира, 
Публицистика
RUS
1951-
MY: 0/0
MX: 1701'><div class=area style='position:absolute; width:28px; height:20px; left:1735px; top:1633px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1701&a_id=697&y=1951' title='Т. Н. Толстая
Писательница
Антиутопия, Постапокалипсис, Сатира, 
Публицистика
RUS
1951-
MY: 0/0
MX: 1701'><div class=area style='position:absolute; width:28px; height:20px; left:1763px; top:1633px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1977&a_id=1175&y=1951' title='Орсон Скотт Кард
Писатель
Альтернативная история, Фантастика, Фэнтези
USA
1951-
MY: 0/2
MX: 1977'><div class=area style='position:absolute; width:18px; height:20px; left:2011px; top:1646px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1977&a_id=1175&y=1951' title='Орсон Скотт Кард
Писатель
Альтернативная история, Фантастика, Фэнтези
USA
1951-
MY: 0/2
MX: 1977'><div class=area style='position:absolute; width:18px; height:20px; left:2029px; top:1646px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=523&a_id=597&y=1952' title='Г. Д. Робертс
Писатель
Исповедь, 
Биография, Приключения, Триллер, Философия
AUS
1952-
MY: 0/0
MX: 523'><div class=area style='position:absolute; width:28px; height:20px; left:557px; top:1640px'></div></a>
<a target=_blank href='build-rlmap.php?mp=523&a_id=597&y=1952' title='Г. Д. Робертс
Писатель
Исповедь, 
Биография, Приключения, Триллер, Философия
AUS
1952-
MY: 0/0
MX: 523'><div class=area style='position:absolute; width:27px; height:20px; left:585px; top:1640px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=1066&y=1952' title='Дуглас Адамс
Писатель
Фантастика, Юмор
BRI
1952-2001
MY: 0/11
MX: 2209'><div class=area style='position:absolute; width:22px; height:20px; left:2243px; top:1738px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2209&a_id=1066&y=1952' title='Дуглас Адамс
Писатель
Фантастика, Юмор
BRI
1952-2001
MY: 0/11
MX: 2209'><div class=area style='position:absolute; width:22px; height:20px; left:2265px; top:1738px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=590&a_id=607&y=1953' title='Дина Рубина
Писательница
Магический реализм, 
Мистицизм, Юмор
RUS
1953-
MY: 0/16
MX: 590'><div class=area style='position:absolute; width:24px; height:20px; left:624px; top:1744px'></div></a>
<a target=_blank href='build-rlmap.php?mp=590&a_id=607&y=1953' title='Дина Рубина
Писательница
Магический реализм, 
Мистицизм, Юмор
RUS
1953-
MY: 0/16
MX: 590'><div class=area style='position:absolute; width:24px; height:20px; left:648px; top:1744px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=116&y=1954' title='Иэн Бэнкс
Писатель
Реализм, Фантастика, 
Атеизм, Триллер
BRI
1954-2013
MY: 0/0
MX: 1302'><div class=area style='position:absolute; width:20px; height:20px; left:1336px; top:1713px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1302&a_id=116&y=1954' title='Иэн Бэнкс
Писатель
Реализм, Фантастика, 
Атеизм, Триллер
BRI
1954-2013
MY: 0/0
MX: 1302'><div class=area style='position:absolute; width:20px; height:20px; left:1356px; top:1713px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2289&a_id=1148&y=1954' title='Януш Вишневский
Писатель
Беллетристика, О любви, 
Эротика
POL
1954-
MY: 0/-7
MX: 2289'><div class=area style='position:absolute; width:31px; height:20px; left:2323px; top:1609px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2289&a_id=1148&y=1954' title='Януш Вишневский
Писатель
Беллетристика, О любви, 
Эротика
POL
1954-
MY: 0/-7
MX: 2289'><div class=area style='position:absolute; width:31px; height:20px; left:2354px; top:1609px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=667&a_id=1063&y=1954' title='Стиг Ларссон
Писатель
Детектив, 
Антифашизм, Мистицизм, Триллер
SWE
1954-2004
MY: 0/27
MX: 667'><div class=area style='position:absolute; width:30px; height:20px; left:701px; top:1849px'></div></a>
<a target=_blank href='build-rlmap.php?mp=667&a_id=1063&y=1954' title='Стиг Ларссон
Писатель
Детектив, 
Антифашизм, Мистицизм, Триллер
SWE
1954-2004
MY: 0/27
MX: 667'><div class=area style='position:absolute; width:29px; height:20px; left:731px; top:1849px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=1033&y=1954' title='Юрий Поляков
Писатель
Гротескный реализм, Юмор, 
Биография, О любви, Публицистика, Эротика
RUS
1954-
MY: 0/6
MX: 2209'><div class=area style='position:absolute; width:31px; height:20px; left:2243px; top:1689px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2209&a_id=1033&y=1954' title='Юрий Поляков
Писатель
Гротескный реализм, Юмор, 
Биография, О любви, Публицистика, Эротика
RUS
1954-
MY: 0/6
MX: 2209'><div class=area style='position:absolute; width:30px; height:20px; left:2274px; top:1689px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=590&a_id=471&y=1955' title='Мо Янь
Писатель
Магический реализм, 
Галлюцинаторный реализм
CHN
1955-
MY: 0/18
MX: 590'><div class=area style='position:absolute; width:15px; height:20px; left:624px; top:1769px'></div></a>
<a target=_blank href='build-rlmap.php?mp=590&a_id=471&y=1955' title='Мо Янь
Писатель
Магический реализм, 
Галлюцинаторный реализм
CHN
1955-
MY: 0/18
MX: 590'><div class=area style='position:absolute; width:15px; height:20px; left:639px; top:1769px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2574&a_id=653&y=1955' title='Владимир Сорокин
Писатель
Концептуализм, Постмодернизм, 
Абсурд, История, Соц-арт, Фантастика
RUS
1955-
MY: 0/13
MX: 2574'><div class=area style='position:absolute; width:28px; height:20px; left:2608px; top:1738px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2574&a_id=653&y=1955' title='Владимир Сорокин
Писатель
Концептуализм, Постмодернизм, 
Абсурд, История, Соц-арт, Фантастика
RUS
1955-
MY: 0/13
MX: 2574'><div class=area style='position:absolute; width:28px; height:20px; left:2636px; top:1738px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=667&a_id=1247&y=1955' title='Йен Пирс

Детектив, История

1955-
MY: 0/19
MX: 667'><div class=area style='position:absolute; width:19px; height:20px; left:701px; top:1775px'></div></a>
<a target=_blank href='build-rlmap.php?mp=667&a_id=1247&y=1955' title='Йен Пирс

Детектив, История

1955-
MY: 0/19
MX: 667'><div class=area style='position:absolute; width:18px; height:20px; left:720px; top:1775px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2574&a_id=1154&y=1956' title='Мишель Уэльбек
Писатель
Постмодернизм, 
Фантастика, Эротика
FRA
1956-
MY: 0/16
MX: 2574'><div class=area style='position:absolute; width:28px; height:20px; left:2608px; top:1763px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2574&a_id=1154&y=1956' title='Мишель Уэльбек
Писатель
Постмодернизм, 
Фантастика, Эротика
FRA
1956-
MY: 0/16
MX: 2574'><div class=area style='position:absolute; width:27px; height:20px; left:2636px; top:1763px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=667&a_id=1076&y=1956' title='Борис Акунин
Писатель
Детектив, 
Беллетристика, История, Постмодернизм, Приключения, Фантастика, Японизм
RUS
1956-
MY: 0/22
MX: 667'><div class=area style='position:absolute; width:23px; height:20px; left:701px; top:1800px'></div></a>
<a target=_blank href='build-rlmap.php?mp=667&a_id=1076&y=1956' title='Борис Акунин
Писатель
Детектив, 
Беллетристика, История, Постмодернизм, Приключения, Фантастика, Японизм
RUS
1956-
MY: 0/22
MX: 667'><div class=area style='position:absolute; width:23px; height:20px; left:724px; top:1800px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2289&a_id=1070&y=1956' title='Артур Голден
Писатель
О любви, 
История, Японизм
USA
1956-
MY: 0/-1
MX: 2289'><div class=area style='position:absolute; width:25px; height:20px; left:2323px; top:1658px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2289&a_id=1070&y=1956' title='Артур Голден
Писатель
О любви, 
История, Японизм
USA
1956-
MY: 0/-1
MX: 2289'><div class=area style='position:absolute; width:24px; height:20px; left:2348px; top:1658px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=667&a_id=1204&y=1957' title='Александра Маринина
Писатель
Детектив
RUS
1957-
MY: 0/25
MX: 667'><div class=area style='position:absolute; width:34px; height:20px; left:701px; top:1824px'></div></a>
<a target=_blank href='build-rlmap.php?mp=667&a_id=1204&y=1957' title='Александра Маринина
Писатель
Детектив
RUS
1957-
MY: 0/25
MX: 667'><div class=area style='position:absolute; width:33px; height:20px; left:735px; top:1824px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=726&y=1958' title='Ирвин Уэлш
Писатель
Сатира, 
Грязный реализм, Постмодернизм
BRI
1958-
MY: 0/14
MX: 2209'><div class=area style='position:absolute; width:20px; height:20px; left:2243px; top:1763px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2209&a_id=726&y=1958' title='Ирвин Уэлш
Писатель
Сатира, 
Грязный реализм, Постмодернизм
BRI
1958-
MY: 0/14
MX: 2209'><div class=area style='position:absolute; width:20px; height:20px; left:2263px; top:1763px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=1231&y=1958' title='Алессандро Барикко
Писатель
Реализм, 
Драматургия
ITA
1958-
MY: 0/2
MX: 1302'><div class=area style='position:absolute; width:27px; height:20px; left:1336px; top:1689px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1302&a_id=1231&y=1958' title='Алессандро Барикко
Писатель
Реализм, 
Драматургия
ITA
1958-
MY: 0/2
MX: 1302'><div class=area style='position:absolute; width:26px; height:20px; left:1363px; top:1689px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=1244&y=1958' title='Хелен Филдинг
Писательница
Юмор
BRI
1958-
MY: 0/18
MX: 2209'><div class=area style='position:absolute; width:34px; height:20px; left:2243px; top:1787px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2209&a_id=1244&y=1958' title='Хелен Филдинг
Писательница
Юмор
BRI
1958-
MY: 0/18
MX: 2209'><div class=area style='position:absolute; width:34px; height:20px; left:2277px; top:1787px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1622&a_id=1184&y=1959' title='Андреас Эшбах
Писатель-фантаст
Фантастика
DEU
1959-
MY: 0/9
MX: 1622'><div class=area style='position:absolute; width:24px; height:20px; left:1656px; top:1738px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1622&a_id=1184&y=1959' title='Андреас Эшбах
Писатель-фантаст
Фантастика
DEU
1959-
MY: 0/9
MX: 1622'><div class=area style='position:absolute; width:23px; height:20px; left:1680px; top:1738px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2289&a_id=1140&y=1960' title='Даниэль Глаттауэр
Писатель
О любви, Юмор, 
Сатира
DEU
1960-
MY: 0/-1
MX: 2289'><div class=area style='position:absolute; width:32px; height:20px; left:2323px; top:1683px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2289&a_id=1140&y=1960' title='Даниэль Глаттауэр
Писатель
О любви, Юмор, 
Сатира
DEU
1960-
MY: 0/-1
MX: 2289'><div class=area style='position:absolute; width:31px; height:20px; left:2355px; top:1683px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1468&a_id=1109&y=1961' title='Бернар Вербер
Писатель
Философия, 
Детектив, Мистицизм, Фантастика
FRA
1961-
MY: 0/0
MX: 1468'><div class=area style='position:absolute; width:25px; height:20px; left:1502px; top:1695px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1468&a_id=1109&y=1961' title='Бернар Вербер
Писатель
Философия, 
Детектив, Мистицизм, Фантастика
FRA
1961-
MY: 0/0
MX: 1468'><div class=area style='position:absolute; width:25px; height:20px; left:1527px; top:1695px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1903&a_id=353&y=1962' title='Сьюзен Коллинз
Писательница
Для подростков, 
Антиутопия, Постапокалипсис, Приключения, Фантастика, Фэнтези
USA
1962-
MY: 0/2
MX: 1903'><div class=area style='position:absolute; width:28px; height:20px; left:1937px; top:1713px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1903&a_id=353&y=1962' title='Сьюзен Коллинз
Писательница
Для подростков, 
Антиутопия, Постапокалипсис, Приключения, Фантастика, Фэнтези
USA
1962-
MY: 0/2
MX: 1903'><div class=area style='position:absolute; width:27px; height:20px; left:1965px; top:1713px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=540&y=1962' title='Чак Паланик
Писатель
Сатира, 
Минимализм, Постмодернизм, Хоррор, Цинизм
USA
1962-
MY: 0/18
MX: 2209'><div class=area style='position:absolute; width:29px; height:20px; left:2243px; top:1812px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2209&a_id=540&y=1962' title='Чак Паланик
Писатель
Сатира, 
Минимализм, Постмодернизм, Хоррор, Цинизм
USA
1962-
MY: 0/18
MX: 2209'><div class=area style='position:absolute; width:28px; height:20px; left:2272px; top:1812px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2574&a_id=546&y=1962' title='Виктор Пелевин
Писатель
Постмодернизм, 
Буддизм, Магический реализм, Турбореализм, Фантастика, Философия
RUS
1962-
MY: 0/14
MX: 2574'><div class=area style='position:absolute; width:29px; height:20px; left:2608px; top:1787px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2574&a_id=546&y=1962' title='Виктор Пелевин
Писатель
Постмодернизм, 
Буддизм, Магический реализм, Турбореализм, Фантастика, Философия
RUS
1962-
MY: 0/14
MX: 2574'><div class=area style='position:absolute; width:29px; height:20px; left:2637px; top:1787px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1622&a_id=1241&y=1962' title='Рик Янси
Писатель
Фантастика, 
О войне, Постапокалипсис, Фэнтези
USA
1962-
MY: 0/10
MX: 1622'><div class=area style='position:absolute; width:19px; height:20px; left:1656px; top:1763px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1622&a_id=1241&y=1962' title='Рик Янси
Писатель
Фантастика, 
О войне, Постапокалипсис, Фэнтези
USA
1962-
MY: 0/10
MX: 1622'><div class=area style='position:absolute; width:19px; height:20px; left:1675px; top:1763px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2289&a_id=235&y=1963' title='Э. Л. Джеймс
Писательница
Эротика
BRI
1963-
MY: 0/0
MX: 2289'><div class=area style='position:absolute; width:32px; height:20px; left:2323px; top:1707px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2289&a_id=235&y=1963' title='Э. Л. Джеймс
Писательница
Эротика
BRI
1963-
MY: 0/0
MX: 2289'><div class=area style='position:absolute; width:32px; height:20px; left:2355px; top:1707px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1977&a_id=1236&y=1963' title='Ник Перумов
Писатель
Фэнтези, 
Стимпанк, Фантастика
RUS
1963-
MY: 0/2
MX: 1977'><div class=area style='position:absolute; width:29px; height:20px; left:2011px; top:1720px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1977&a_id=1236&y=1963' title='Ник Перумов
Писатель
Фэнтези, 
Стимпанк, Фантастика
RUS
1963-
MY: 0/2
MX: 1977'><div class=area style='position:absolute; width:28px; height:20px; left:2040px; top:1720px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=667&a_id=95&y=1964' title='Дэн Браун
Писатель
Детектив, 
Мистицизм, Триллер, Фантастика
USA
1964-
MY: 0/26
MX: 667'><div class=area style='position:absolute; width:21px; height:20px; left:701px; top:1874px'></div></a>
<a target=_blank href='build-rlmap.php?mp=667&a_id=95&y=1964' title='Дэн Браун
Писатель
Детектив, 
Мистицизм, Триллер, Фантастика
USA
1964-
MY: 0/26
MX: 667'><div class=area style='position:absolute; width:20px; height:20px; left:722px; top:1874px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=590&a_id=1139&y=1964' title='Дмитрий Липскеров
Писатель
Магический реализм, 
Драматургия, Мистицизм, Постмодернизм, Фантастика
RUS
1964-
MY: 0/13
MX: 590'><div class=area style='position:absolute; width:30px; height:20px; left:624px; top:1794px'></div></a>
<a target=_blank href='build-rlmap.php?mp=590&a_id=1139&y=1964' title='Дмитрий Липскеров
Писатель
Магический реализм, 
Драматургия, Мистицизм, Постмодернизм, Фантастика
RUS
1964-
MY: 0/13
MX: 590'><div class=area style='position:absolute; width:30px; height:20px; left:654px; top:1794px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=590&a_id=1099&y=1964' title='Джоанн Харрис
Писательница
Магический реализм, 
Фантастика, Фэнтези
BRI
1964-
MY: 0/17
MX: 590'><div class=area style='position:absolute; width:31px; height:20px; left:624px; top:1818px'></div></a>
<a target=_blank href='build-rlmap.php?mp=590&a_id=1099&y=1964' title='Джоанн Харрис
Писательница
Магический реализм, 
Фантастика, Фэнтези
BRI
1964-
MY: 0/17
MX: 590'><div class=area style='position:absolute; width:31px; height:20px; left:655px; top:1818px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2056&a_id=1180&y=1964' title='Диана Сеттерфилд
Писательница
Для подростков, 
Готика
BRI
1964-
MY: 0/1
MX: 2056'><div class=area style='position:absolute; width:30px; height:20px; left:2090px; top:1720px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2056&a_id=1180&y=1964' title='Диана Сеттерфилд
Писательница
Для подростков, 
Готика
BRI
1964-
MY: 0/1
MX: 2056'><div class=area style='position:absolute; width:30px; height:20px; left:2120px; top:1720px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1977&a_id=605&y=1965' title='Джоан Роулинг
Писательница
Для подростков, Фэнтези, 
Фантастика
BRI
1965-
MY: 0/4
MX: 1977'><div class=area style='position:absolute; width:27px; height:20px; left:2011px; top:1744px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1977&a_id=605&y=1965' title='Джоан Роулинг
Писательница
Для подростков, Фэнтези, 
Фантастика
BRI
1965-
MY: 0/4
MX: 1977'><div class=area style='position:absolute; width:26px; height:20px; left:2038px; top:1744px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2289&a_id=1105&y=1965' title='Фредерик Бегбедер
Публицист
О любви, 
Бизнес, Политика, Публицистика
FRA
1965-
MY: 0/2
MX: 2289'><div class=area style='position:absolute; width:31px; height:20px; left:2323px; top:1732px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2289&a_id=1105&y=1965' title='Фредерик Бегбедер
Публицист
О любви, 
Бизнес, Политика, Публицистика
FRA
1965-
MY: 0/2
MX: 2289'><div class=area style='position:absolute; width:30px; height:20px; left:2354px; top:1732px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1977&a_id=1093&y=1965' title='Макс Фрай

Фантастика, Фэнтези
RUS
1965-
MY: 0/8
MX: 1977'><div class=area style='position:absolute; width:19px; height:20px; left:2011px; top:1769px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1977&a_id=1093&y=1965' title='Макс Фрай

Фантастика, Фэнтези
RUS
1965-
MY: 0/8
MX: 1977'><div class=area style='position:absolute; width:19px; height:20px; left:2030px; top:1769px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2289&a_id=1090&y=1965' title='Николас Спаркс
Писатель
О любви, 
Религия
USA
1965-
MY: 0/6
MX: 2289'><div class=area style='position:absolute; width:25px; height:20px; left:2323px; top:1757px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2289&a_id=1090&y=1965' title='Николас Спаркс
Писатель
О любви, 
Религия
USA
1965-
MY: 0/6
MX: 2289'><div class=area style='position:absolute; width:24px; height:20px; left:2348px; top:1757px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2134&a_id=1131&y=1966' title='Сергей Козлов
Писатель
Детская, 
Сказка
RUS
1966-
MY: 0/0
MX: 2134'><div class=area style='position:absolute; width:24px; height:20px; left:2168px; top:1726px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2134&a_id=1131&y=1966' title='Сергей Козлов
Писатель
Детская, 
Сказка
RUS
1966-
MY: 0/0
MX: 2134'><div class=area style='position:absolute; width:24px; height:20px; left:2192px; top:1726px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2289&a_id=1132&y=1967' title='Евгений Гришковец
Киноактёр
О любви, 
Драматургия
RUS
1967-
MY: 0/8
MX: 2289'><div class=area style='position:absolute; width:30px; height:20px; left:2323px; top:1781px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2289&a_id=1132&y=1967' title='Евгений Гришковец
Киноактёр
О любви, 
Драматургия
RUS
1967-
MY: 0/8
MX: 2289'><div class=area style='position:absolute; width:29px; height:20px; left:2353px; top:1781px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1977&a_id=1234&y=1967' title='Андрей Белянин
Писатель
Фэнтези, Юмор, 
Фантастика
RUS
1967-
MY: 0/10
MX: 1977'><div class=area style='position:absolute; width:29px; height:20px; left:2011px; top:1794px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1977&a_id=1234&y=1967' title='Андрей Белянин
Писатель
Фэнтези, Юмор, 
Фантастика
RUS
1967-
MY: 0/10
MX: 1977'><div class=area style='position:absolute; width:28px; height:20px; left:2040px; top:1794px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1622&a_id=1142&y=1968' title='Сергей Лукьяненко
Писатель
Фантастика, 
Киберпанк, Постмодернизм
RUS
1968-
MY: 0/8
MX: 1622'><div class=area style='position:absolute; width:32px; height:20px; left:1656px; top:1787px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1622&a_id=1142&y=1968' title='Сергей Лукьяненко
Писатель
Фантастика, 
Киберпанк, Постмодернизм
RUS
1968-
MY: 0/8
MX: 1622'><div class=area style='position:absolute; width:32px; height:20px; left:1688px; top:1787px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1622&a_id=1226&y=1968' title='Олег Дивов
Писатель
Фантастика, 
Антиутопия, Утопия, Фэнтези, Хоррор
RUS
1968-
MY: 0/12
MX: 1622'><div class=area style='position:absolute; width:22px; height:20px; left:1656px; top:1812px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1622&a_id=1226&y=1968' title='Олег Дивов
Писатель
Фантастика, 
Антиутопия, Утопия, Фэнтези, Хоррор
RUS
1968-
MY: 0/12
MX: 1622'><div class=area style='position:absolute; width:22px; height:20px; left:1678px; top:1812px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1067&a_id=1065&y=1969' title='Павел Санаев
Писатель
Натурализм, 
Для подростков, Реализм
RUS
1969-
MY: 0/0
MX: 1067'><div class=area style='position:absolute; width:26px; height:20px; left:1101px; top:1744px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1067&a_id=1065&y=1969' title='Павел Санаев
Писатель
Натурализм, 
Для подростков, Реализм
RUS
1969-
MY: 0/0
MX: 1067'><div class=area style='position:absolute; width:25px; height:20px; left:1127px; top:1744px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=1055&y=1969' title='Алексей Иванов
Писатель
Пародия, Реализм, Современная проза, 
Дидактизм, История, Магический реализм, Экзистенциализм, Юмор
RUS
1969-
MY: 0/0
MX: 1302'><div class=area style='position:absolute; width:31px; height:20px; left:1336px; top:1744px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1302&a_id=1055&y=1969' title='Алексей Иванов
Писатель
Пародия, Реализм, Современная проза, 
Дидактизм, История, Магический реализм, Экзистенциализм, Юмор
RUS
1969-
MY: 0/0
MX: 1302'><div class=area style='position:absolute; width:31px; height:20px; left:1367px; top:1744px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2289&a_id=1190&y=1969' title='Джоджо Мойес

О любви
BRI
1969-
MY: 0/10
MX: 2289'><div class=area style='position:absolute; width:23px; height:20px; left:2323px; top:1806px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2289&a_id=1190&y=1969' title='Джоджо Мойес

О любви
BRI
1969-
MY: 0/10
MX: 2289'><div class=area style='position:absolute; width:23px; height:20px; left:2346px; top:1806px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=1250&y=1969' title='Эрленд Лу

Наив, 
Сатира, Юмор
NOR
1969-
MY: 0/15
MX: 2209'><div class=area style='position:absolute; width:12px; height:20px; left:2243px; top:1837px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2209&a_id=1250&y=1969' title='Эрленд Лу

Наив, 
Сатира, Юмор
NOR
1969-
MY: 0/15
MX: 2209'><div class=area style='position:absolute; width:11px; height:20px; left:2255px; top:1837px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1622&a_id=1251&y=1969' title='Дэвид Митчелл

Фантастика

1969-
MY: 0/15
MX: 1622'><div class=area style='position:absolute; width:35px; height:20px; left:1656px; top:1837px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1622&a_id=1251&y=1969' title='Дэвид Митчелл

Фантастика

1969-
MY: 0/15
MX: 1622'><div class=area style='position:absolute; width:34px; height:20px; left:1691px; top:1837px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2289&a_id=1083&y=1970' title='Анна Гавальда
Писательница
О любви, 
Детская
FRA
1970-
MY: 0/13
MX: 2289'><div class=area style='position:absolute; width:31px; height:20px; left:2323px; top:1830px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2289&a_id=1083&y=1970' title='Анна Гавальда
Писательница
О любви, 
Детская
FRA
1970-
MY: 0/13
MX: 2289'><div class=area style='position:absolute; width:31px; height:20px; left:2354px; top:1830px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1977&a_id=1229&y=1973' title='Патрик Ротфусс
Писатель
Фэнтези, 
Фантастика
USA
1973-
MY: 0/8
MX: 1977'><div class=area style='position:absolute; width:28px; height:20px; left:2011px; top:1818px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1977&a_id=1229&y=1973' title='Патрик Ротфусс
Писатель
Фэнтези, 
Фантастика
USA
1973-
MY: 0/8
MX: 1977'><div class=area style='position:absolute; width:28px; height:20px; left:2039px; top:1818px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=836&a_id=573&y=1975' title='Захар Прилепин
Писатель
О войне, Реализм, 
Национализм
RUS
1975-
MY: 0/0
MX: 836'><div class=area style='position:absolute; width:33px; height:20px; left:870px; top:1781px'></div></a>
<a target=_blank href='build-rlmap.php?mp=836&a_id=573&y=1975' title='Захар Прилепин
Писатель
О войне, Реализм, 
Национализм
RUS
1975-
MY: 0/0
MX: 836'><div class=area style='position:absolute; width:32px; height:20px; left:903px; top:1781px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2056&a_id=213&y=1977' title='Джон Грин
Писатель
Беллетристика, Для подростков, Реализм
USA
1977-
MY: 0/0
MX: 2056'><div class=area style='position:absolute; width:24px; height:20px; left:2090px; top:1794px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2056&a_id=213&y=1977' title='Джон Грин
Писатель
Беллетристика, Для подростков, Реализм
USA
1977-
MY: 0/0
MX: 2056'><div class=area style='position:absolute; width:23px; height:20px; left:2114px; top:1794px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1977&a_id=1213&y=1978' title='Алексей Пехов
Писатель
Фэнтези
RUS
1978-
MY: 0/7
MX: 1977'><div class=area style='position:absolute; width:22px; height:20px; left:2011px; top:1843px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1977&a_id=1213&y=1978' title='Алексей Пехов
Писатель
Фэнтези
RUS
1978-
MY: 0/7
MX: 1977'><div class=area style='position:absolute; width:21px; height:20px; left:2033px; top:1843px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2289&a_id=1103&y=1981' title='Сесилия Ахерн
Автор
Беллетристика, О любви
BRI
1981-
MY: 0/6
MX: 2289'><div class=area style='position:absolute; width:21px; height:20px; left:2323px; top:1855px'></div></a>
<a target=_blank href='build-rlmap.php?mp=2289&a_id=1103&y=1981' title='Сесилия Ахерн
Автор
Беллетристика, О любви
BRI
1981-
MY: 0/6
MX: 2289'><div class=area style='position:absolute; width:21px; height:20px; left:2344px; top:1855px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1977&a_id=1192&y=1983' title='Наталья Щерба
Писательница
Фэнтези, 
Фантастика
RUS
1983-
MY: 0/6
MX: 1977'><div class=area style='position:absolute; width:23px; height:20px; left:2011px; top:1867px'></div></a>
<a target=_blank href='build-rlmap.php?mp=1977&a_id=1192&y=1983' title='Наталья Щерба
Писательница
Фэнтези, 
Фантастика
RUS
1983-
MY: 0/6
MX: 1977'><div class=area style='position:absolute; width:23px; height:20px; left:2034px; top:1867px'></div></a>

</div>
</div>
</table>

<p>Точки в имени показывают сокращение (пропуск букв)
<p>Похожие стили имеют один цвет.
<p>Толстая цветная линия сбоку зоны стиля показывает интервал времени, когда стиль был наиболее распространен.
<p>Кликните на автора или стиль чтобы узнать больше или прочитать книги. Самые известные авторы выделены жирным шрифтом.
<p>Используйте Ctrl+F или 'Найти на странице' для поиска стилей и авторов на карте.

    <script type='text/javascript'>//<![CDATA[

var astart = [];

astart[21] = 2430;

astart[20] = 1814;

astart[19] = 1198;

astart[18] = 582;

astart[17] = 302;

astart[16] = 232;

astart[15] = 190;

astart[14] = 162;

astart[13] = 148;

astart[12] = 134;

astart[11] = 131;

astart[10] = 128;

astart[9] = 125;

astart[8] = 122;

astart[7] = 119;

astart[6] = 116;

astart[5] = 113;

astart[4] = 110;

astart[3] = 107;

astart[2] = 104;

astart[0] = 101;

astart[-1] = 91;

astart[-2] = 81;

astart[-3] = 71;

astart[-4] = 61;

astart[-5] = 51;

astart[-6] = 41;

astart[-7] = 31;

astart[-8] = 21;

astart[-9] = 11;


    function closest (num, arr) {
      var curr = arr[13];
      var diff = num - curr;
      for (var i = 20; i > 12; i--) {
        var diff = num - arr[i];
        if (diff > 0) {
          return i;
        }
      }
      return 0;
    }
    function binaryIndexOf(searchElement) {
    'use strict';
 
    var minIndex = 0;
    var maxIndex = this.length - 1;
    var currentIndex;
    var currentElement;
 
    while (minIndex <= maxIndex) {
        currentIndex = (minIndex + maxIndex) / 2 | 0;
        currentElement = this[currentIndex];
 
        if (currentElement < searchElement) {
            minIndex = currentIndex + 1;
        }
        else if (currentElement > searchElement) {
            maxIndex = currentIndex - 1;
        }
        else {
            return currentIndex;
        }
    }
 
    return currentIndex;
    }
function make_y(y) {
      cent = closest(y, astart);
      return Math.round(100*(cent+(y-astart[cent])/(astart[cent+1]-astart[cent])));
    }
    $(window).on('load', function() {
    var tooltip = $( '<div id=tooltip>' ).appendTo( 'body' )[0];
    $( '.coords' ).
    each(function () {
        var pos = $( this ).position(),
            top = pos.top,
            left = pos.left,
            width = $( this ).width(),
            height = $( this ).height();
        
        $( this ).
            mousemove(function ( e ) {
                var x = Math.round( e.clientX - 45 + $(window).scrollLeft()),
                    y = make_y( e.clientY - 16 + $(window).scrollTop() );
                
                $( tooltip ).text( x + ' : ' + y).css({
                    left: e.clientX - 30,
                    top: e.clientY - 30,
                    width: 80
                }).show();
            }).
            mouseleave(function () {
                $( tooltip ).hide();
            }); 
    });
    });
    $('img2').mouseover(function(e) {
      e = e || window.event; var cursor = { y: 0 }; cursor.y = e.pageY; //Cursor YPos
      var papaWindow = parent.window;
      var $pxFromTop = $(papaWindow).scrollTop();
      var $userScreenHeight = $(papaWindow).height();
      if (cursor.y > (($userScreenHeight + $pxFromTop) / 1.25)) {
        if ($pxFromTop < ($userScreenHeight * 3.2)) {
          papaWindow.scrollBy(0, ($userScreenHeight / 30));
        }
      }
      else if (cursor.y < (($userScreenHeight + $pxFromTop) * .75)) {
        papaWindow.scrollBy(0, -($userScreenHeight / 30));
      }
   }); //End mouseover()
   </script>
  
