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
<a id='tВозрождение' name='tВозрождение' style='position: absolute; top: 10px; left: 2790px'><font color=white size=3>Возрождение</font></a>
<a id='tРелигия' name='tРелигия' style='position: absolute; top: -5px; left: 2790px'><font color=white size=3>Религия</font></a>
<a id='tКлассицизм' name='tКлассицизм' style='position: absolute; top: 72px; left: 2790px'><font color=white size=3>Классицизм</font></a>
<a id='tИстория' name='tИстория' style='position: absolute; top: -5px; left: 2790px'><font color=white size=3>История</font></a>
<a id='tФилософия' name='tФилософия' style='position: absolute; top: -5px; left: 2790px'><font color=white size=3>Философия</font></a>
<a id='tЮмор' name='tЮмор' style='position: absolute; top: 54px; left: 2790px'><font color=white size=3>Юмор</font></a>
<a id='tРеализм' name='tРеализм' style='position: absolute; top: 60px; left: 2790px'><font color=white size=3>Реализм</font></a>
<a id='tАнтиутопия' name='tАнтиутопия' style='position: absolute; top: 58px; left: 2790px'><font color=white size=3>Антиутопия</font></a>
<a id='tФантастика' name='tФантастика' style='position: absolute; top: 63px; left: 2790px'><font color=white size=3>Фантастика</font></a>
<a id='tДетская' name='tДетская' style='position: absolute; top: 68px; left: 2790px'><font color=white size=3>Детская</font></a>
<a id='tПриключения' name='tПриключения' style='position: absolute; top: 83px; left: 2790px'><font color=white size=3>Приключения</font></a>
<a id='tСентиментализм' name='tСентиментализм' style='position: absolute; top: 98px; left: 2790px'><font color=white size=3>Сентиментализм</font></a>
<a id='tО любви' name='tО любви' style='position: absolute; top: 420px; left: 2790px'><font color=white size=3>О любви</font></a>
<a id='tРомантизм' name='tРомантизм' style='position: absolute; top: 129px; left: 2790px'><font color=white size=3>Романтизм</font></a>
<a id='tПсихология' name='tПсихология' style='position: absolute; top: 97px; left: 2790px'><font color=white size=3>Психология</font></a>
<a id='tГотика' name='tГотика' style='position: absolute; top: 142px; left: 2790px'><font color=white size=3>Готика</font></a>
<a id='tКритический реализм' name='tКритический реализм' style='position: absolute; top: 430px; left: 2790px'><font color=white size=3>Критический реализм</font></a>
<a id='tЭкзистенциализм' name='tЭкзистенциализм' style='position: absolute; top: 493px; left: 2790px'><font color=white size=3>Экзистенциализм</font></a>
<a id='tНатурализм' name='tНатурализм' style='position: absolute; top: 300px; left: 2790px'><font color=white size=3>Натурализм</font></a>
<a id='tСоцреализм' name='tСоцреализм' style='position: absolute; top: 340px; left: 2790px'><font color=white size=3>Соцреализм</font></a>
<a id='tО войне' name='tО войне' style='position: absolute; top: 457px; left: 2790px'><font color=white size=3>О войне</font></a>
<a id='tДеревня' name='tДеревня' style='position: absolute; top: 310px; left: 2790px'><font color=white size=3>Деревня</font></a>
<a id='tСимволизм' name='tСимволизм' style='position: absolute; top: 392px; left: 2790px'><font color=white size=3>Символизм</font></a>
<a id='tДекаданс' name='tДекаданс' style='position: absolute; top: 291px; left: 2790px'><font color=white size=3>Декаданс</font></a>
<a id='tМагический реализм' name='tМагический реализм' style='position: absolute; top: 266px; left: 2790px'><font color=white size=3>Магический реализм</font></a>
<a id='tСюрреализм' name='tСюрреализм' style='position: absolute; top: 472px; left: 2790px'><font color=white size=3>Сюрреализм</font></a>
<a id='tАбсурд' name='tАбсурд' style='position: absolute; top: 342px; left: 2790px'><font color=white size=3>Абсурд</font></a>
<a id='tБит' name='tБит' style='position: absolute; top: 441px; left: 2790px'><font color=white size=3>Бит</font></a>
<a id='tТвердая научная фантастика' name='tТвердая научная фантастика' style='position: absolute; top: 426px; left: 2790px'><font color=white size=3>Твердая научная фантастика</font></a>
<a id='tДетектив' name='tДетектив' style='position: absolute; top: 270px; left: 2790px'><font color=white size=3>Детектив</font></a>
<a id='tО животных' name='tО животных' style='position: absolute; top: 420px; left: 2790px'><font color=white size=3>О животных</font></a>
<a id='tМодернизм' name='tМодернизм' style='position: absolute; top: 342px; left: 2790px'><font color=white size=3>Модернизм</font></a>
<a id='tЭкспрессионизм' name='tЭкспрессионизм' style='position: absolute; top: 386px; left: 2790px'><font color=white size=3>Экспрессионизм</font></a>
<a id='tФэнтези' name='tФэнтези' style='position: absolute; top: 428px; left: 2790px'><font color=white size=3>Фэнтези</font></a>
<a id='tАнтироман' name='tАнтироман' style='position: absolute; top: 497px; left: 2790px'><font color=white size=3>Антироман</font></a>
<a id='tПостмодернизм' name='tПостмодернизм' style='position: absolute; top: 474px; left: 2790px'><font color=white size=3>Постмодернизм</font></a>
<a id='tДетская фантастика' name='tДетская фантастика' style='position: absolute; top: 172px; left: 2790px'><font color=white size=3>Детская фантастика</font></a>
<a id='tДля подростков' name='tДля подростков' style='position: absolute; top: 333px; left: 2790px'><font color=white size=3>Для подростков</font></a>
<a id='tДревний Китай' name='tДревний Китай' style='position: absolute; top: -5px; left: 2790px'><font color=white size=3>Древний Китай</font></a>
<a id='tМировая литература' name='tМировая литература' style='position: absolute; top: -5px; left: 2790px'><font color=white size=3>Мировая литература</font></a>
<a id='a1067' name='#a1067' style='position: absolute; top: 3px; left: 2790px'><font color=white size=3>Лао Цзы</font></a>
<a id='a1042' name='#a1042' style='position: absolute; top: 15px; left: 2790px'><font color=white size=3>Хайям</font></a>
<a id='a87' name='#a87' style='position: absolute; top: 38px; left: 2790px'><font color=white size=3>Боккаччо</font></a>
<a id='a427' name='#a427' style='position: absolute; top: 60px; left: 2790px'><font color=white size=3>Макиавелли</font></a>
<a id='a636' name='#a636' style='position: absolute; top: 71px; left: 2790px'><font color=white size=3>Сервантес</font></a>
<a id='a384' name='#a384' style='position: absolute; top: 81px; left: 2790px'><font color=white size=3>Лафонтен</font></a>
<a id='a547' name='#a547' style='position: absolute; top: 83px; left: 2790px'><font color=white size=3>Перро</font></a>
<a id='a1060' name='#a1060' style='position: absolute; top: 82px; left: 2790px'><font color=white size=3>Спиноза</font></a>
<a id='a231' name='#a231' style='position: absolute; top: 110px; left: 2790px'><font color=white size=3>Дефо</font></a>
<a id='a627' name='#a627' style='position: absolute; top: 103px; left: 2790px'><font color=white size=3>Свифт</font></a>
<a id='a589' name='#a589' style='position: absolute; top: 179px; left: 2790px'><font color=white size=3>Распе</font></a>
<a id='a381' name='#a381' style='position: absolute; top: 189px; left: 2790px'><font color=white size=3>Лакло</font></a>
<a id='a315' name='#a315' style='position: absolute; top: 222px; left: 2790px'><font color=white size=3>Карамзин</font></a>
<a id='a369' name='#a369' style='position: absolute; top: 243px; left: 2790px'><font color=white size=3>Крылов</font></a>
<a id='a642' name='#a642' style='position: absolute; top: 227px; left: 2790px'><font color=white size=3>Скотт</font></a>
<a id='a534' name='#a534' style='position: absolute; top: 222px; left: 2790px'><font color=white size=3>Остин</font></a>
<a id='a662' name='#a662' style='position: absolute; top: 255px; left: 2790px'><font color=white size=3>Стендал.</font></a>
<a id='a1053' name='#a1053' style='position: absolute; top: 270px; left: 2790px'><font color=white size=3>Гримм</font></a>
<a id='a43' name='#a43' style='position: absolute; top: 249px; left: 2790px'><font color=white size=3>Байрон</font></a>
<a id='a1061' name='#a1061' style='position: absolute; top: 278px; left: 2790px'><font color=white size=3>Шопенгау.</font></a>
<a id='a371' name='#a371' style='position: absolute; top: 270px; left: 2790px'><font color=white size=3>Купер</font></a>
<a id='a10' name='#a10' style='position: absolute; top: 293px; left: 2790px'><font color=white size=3>Аксаков</font></a>
<a id='a207' name='#a207' style='position: absolute; top: 253px; left: 2790px'><font color=white size=3>Грибоедов</font></a>
<a id='a46' name='#a46' style='position: absolute; top: 281px; left: 2790px'><font color=white size=3>Бальзак</font></a>
<a id='a1039' name='#a1039' style='position: absolute; top: 316px; left: 2790px'><font color=white size=3>Даль</font></a>
<a id='a169' name='#a169' style='position: absolute; top: 247px; left: 2790px'><font color=white size=3>Гауф</font></a>
<a id='a218' name='#a218' style='position: absolute; top: 320px; left: 2790px'><font color=white size=3>Гюго</font></a>
<a id='a260' name='#a260' style='position: absolute; top: 304px; left: 2790px'><font color=white size=3>Дюма</font></a>
<a id='a621' name='#a621' style='position: absolute; top: 302px; left: 2790px'><font color=white size=3>Санд</font></a>
<a id='a562' name='#a562' style='position: absolute; top: 289px; left: 2790px'><font color=white size=3>По</font></a>
<a id='a76' name='#a76' style='position: absolute; top: 325px; left: 2790px'><font color=white size=3>Б-Стоу</font></a>
<a id='a686' name='#a686' style='position: absolute; top: 306px; left: 2790px'><font color=white size=3>Теккерей</font></a>
<a id='a195' name='#a195' style='position: absolute; top: 348px; left: 2790px'><font color=white size=3>Гончаров</font></a>
<a id='a242' name='#a242' style='position: absolute; top: 325px; left: 2790px'><font color=white size=3>Диккенс</font></a>
<a id='a698' name='#a698' style='position: absolute; top: 325px; left: 2790px'><font color=white size=3>А Толстой</font></a>
<a id='a593' name='#a593' style='position: absolute; top: 302px; left: 2790px'><font color=white size=3>Рид</font></a>
<a id='a709' name='#a709' style='position: absolute; top: 320px; left: 2790px'><font color=white size=3>Тургенев</font></a>
<a id='a451' name='#a451' style='position: absolute; top: 348px; left: 2790px'><font color=white size=3>Мелвилл</font></a>
<a id='a251' name='#a251' style='position: absolute; top: 335px; left: 2790px'><font color=white size=3>Достое.</font></a>
<a id='a740' name='#a740' style='position: absolute; top: 344px; left: 2790px'><font color=white size=3>Флобер</font></a>
<a id='a351' name='#a351' style='position: absolute; top: 348px; left: 2790px'><font color=white size=3>У Коллин.</font></a>
<a id='a620' name='#a620' style='position: absolute; top: 350px; left: 2790px'><font color=white size=3>С-Щедрин</font></a>
<a id='a134' name='#a134' style='position: absolute; top: 371px; left: 2790px'><font color=white size=3>Верн</font></a>
<a id='a699' name='#a699' style='position: absolute; top: 390px; left: 2790px'><font color=white size=3>Л Толстой</font></a>
<a id='a787' name='#a787' style='position: absolute; top: 352px; left: 2790px'><font color=white size=3>Черныш.</font></a>
<a id='a433' name='#a433' style='position: absolute; top: 373px; left: 2790px'><font color=white size=3>Мало</font></a>
<a id='a396' name='#a396' style='position: absolute; top: 367px; left: 2790px'><font color=white size=3>Лесков</font></a>
<a id='a375' name='#a375' style='position: absolute; top: 365px; left: 2790px'><font color=white size=3>Кэрролл</font></a>
<a id='a684' name='#a684' style='position: absolute; top: 417px; left: 2790px'><font color=white size=3>Твен</font></a>
<a id='a246' name='#a246' style='position: absolute; top: 354px; left: 2790px'><font color=white size=3>Доде</font></a>
<a id='a282' name='#a282' style='position: absolute; top: 377px; left: 2790px'><font color=white size=3>Золя</font></a>
<a id='a510' name='#a510' style='position: absolute; top: 379px; left: 2790px'><font color=white size=3>Ницше</font></a>
<a id='a633' name='#a633' style='position: absolute; top: 392px; left: 2790px'><font color=white size=3>Сенкевич</font></a>
<a id='a1092' name='#a1092' style='position: absolute; top: 396px; left: 2790px'><font color=white size=3>Стокер</font></a>
<a id='a477' name='#a477' style='position: absolute; top: 400px; left: 2790px'><font color=white size=3>Мопассан</font></a>
<a id='a664' name='#a664' style='position: absolute; top: 394px; left: 2790px'><font color=white size=3>Стивенс.</font></a>
<a id='a359' name='#a359' style='position: absolute; top: 413px; left: 2790px'><font color=white size=3>Короленко</font></a>
<a id='a714' name='#a714' style='position: absolute; top: 390px; left: 2790px'><font color=white size=3>Уайльд</font></a>
<a id='a1037' name='#a1037' style='position: absolute; top: 415px; left: 2790px'><font color=white size=3>Гиляровск.</font></a>
<a id='a1074' name='#a1074' style='position: absolute; top: 402px; left: 2790px'><font color=white size=3>Рони</font></a>
<a id='a378' name='#a378' style='position: absolute; top: 436px; left: 2790px'><font color=white size=3>Лагерл.</font></a>
<a id='a236' name='#a236' style='position: absolute; top: 428px; left: 2790px'><font color=white size=3>Джером</font></a>
<a id='a247' name='#a247' style='position: absolute; top: 428px; left: 2790px'><font color=white size=3>Дойл</font></a>
<a id='a789' name='#a789' style='position: absolute; top: 352px; left: 2790px'><font color=white size=3>Чехов</font></a>
<a id='a1048' name='#a1048' style='position: absolute; top: 444px; left: 2790px'><font color=white size=3>С-Томпс.</font></a>
<a id='a461' name='#a461' style='position: absolute; top: 451px; left: 2790px'><font color=white size=3>Метерлинк</font></a>
<a id='a518' name='#a518' style='position: absolute; top: 404px; left: 2790px'><font color=white size=3>Генри</font></a>
<a id='a1043' name='#a1043' style='position: absolute; top: 425px; left: 2790px'><font color=white size=3>Обручев</font></a>
<a id='a144' name='#a144' style='position: absolute; top: 461px; left: 2790px'><font color=white size=3>Войнич</font></a>
<a id='a337' name='#a337' style='position: absolute; top: 398px; left: 2790px'><font color=white size=3>Киплинг</font></a>
<a id='a724' name='#a724' style='position: absolute; top: 451px; left: 2790px'><font color=white size=3>Уэллс</font></a>
<a id='a197' name='#a197' style='position: absolute; top: 442px; left: 2790px'><font color=white size=3>Горький</font></a>
<a id='a1071' name='#a1071' style='position: absolute; top: 419px; left: 2790px'><font color=white size=3>Э Портер</font></a>
<a id='a109' name='#a109' style='position: absolute; top: 446px; left: 2790px'><font color=white size=3>Бунин</font></a>
<a id='a372' name='#a372' style='position: absolute; top: 455px; left: 2790px'><font color=white size=3>Куприн</font></a>
<a id='a22' name='#a22' style='position: absolute; top: 428px; left: 2790px'><font color=white size=3>Л Андр.</font></a>
<a id='a252' name='#a252' style='position: absolute; top: 455px; left: 2790px'><font color=white size=3>Драйзер</font></a>
<a id='a579' name='#a579' style='position: absolute; top: 375px; left: 2790px'><font color=white size=3>Пруст</font></a>
<a id='a1081' name='#a1081' style='position: absolute; top: 432px; left: 2790px'><font color=white size=3>Арсеньев</font></a>
<a id='a577' name='#a577' style='position: absolute; top: 467px; left: 2790px'><font color=white size=3>Пришвин</font></a>
<a id='a813' name='#a813' style='position: absolute; top: 463px; left: 2790px'><font color=white size=3>Шмелёв</font></a>
<a id='a484' name='#a484' style='position: absolute; top: 480px; left: 2790px'><font color=white size=3>Моэм</font></a>
<a id='a440' name='#a440' style='position: absolute; top: 470px; left: 2790px'><font color=white size=3>Т Манн</font></a>
<a id='a1052' name='#a1052' style='position: absolute; top: 465px; left: 2790px'><font color=white size=3>Сабатини</font></a>
<a id='a412' name='#a412' style='position: absolute; top: 440px; left: 2790px'><font color=white size=3>Лондон</font></a>
<a id='a179' name='#a179' style='position: absolute; top: 480px; left: 2790px'><font color=white size=3>Гессе</font></a>
<a id='a1047' name='#a1047' style='position: absolute; top: 438px; left: 2790px'><font color=white size=3>Кун</font></a>
<a id='a41' name='#a41' style='position: absolute; top: 438px; left: 2790px'><font color=white size=3>Бажов</font></a>
<a id='a211' name='#a211' style='position: absolute; top: 451px; left: 2790px'><font color=white size=3>А Грин</font></a>
<a id='a777' name='#a777' style='position: absolute; top: 484px; left: 2790px'><font color=white size=3>Цвейг</font></a>
<a id='a153' name='#a153' style='position: absolute; top: 421px; left: 2790px'><font color=white size=3>В Вулф</font></a>
<a id='a238' name='#a238' style='position: absolute; top: 444px; left: 2790px'><font color=white size=3>Джойс</font></a>
<a id='a464' name='#a464' style='position: absolute; top: 461px; left: 2790px'><font color=white size=3>Милн</font></a>
<a id='a170' name='#a170' style='position: absolute; top: 451px; left: 2790px'><font color=white size=3>Гашек</font></a>
<a id='a321' name='#a321' style='position: absolute; top: 442px; left: 2790px'><font color=white size=3>Кафка</font></a>
<a id='a700' name='#a700' style='position: absolute; top: 470px; left: 2790px'><font color=white size=3>А Толстой</font></a>
<a id='a63' name='#a63' style='position: absolute; top: 449px; left: 2790px'><font color=white size=3>А Беляев</font></a>
<a id='a277' name='#a277' style='position: absolute; top: 465px; left: 2790px'><font color=white size=3>Замятин</font></a>
<a id='a425' name='#a425' style='position: absolute; top: 442px; left: 2790px'><font color=white size=3>Макаренк.</font></a>
<a id='a367' name='#a367' style='position: absolute; top: 499px; left: 2790px'><font color=white size=3>Кристи</font></a>
<a id='a544' name='#a544' style='position: absolute; top: 467px; left: 2790px'><font color=white size=3>Пастерн.</font></a>
<a id='a107' name='#a107' style='position: absolute; top: 472px; left: 2790px'><font color=white size=3>Булгаков</font></a>
<a id='a146' name='#a146' style='position: absolute; top: 488px; left: 2790px'><font color=white size=3>Волков</font></a>
<a id='a545' name='#a545' style='position: absolute; top: 501px; left: 2790px'><font color=white size=3>Паустовск.</font></a>
<a id='a696' name='#a696' style='position: absolute; top: 476px; left: 2790px'><font color=white size=3>Толкин</font></a>
<a id='a284' name='#a284' style='position: absolute; top: 474px; left: 2790px'><font color=white size=3>Зощенко</font></a>
<a id='a630' name='#a630' style='position: absolute; top: 514px; left: 2790px'><font color=white size=3>Селин</font></a>
<a id='a755' name='#a755' style='position: absolute; top: 472px; left: 2790px'><font color=white size=3>Хаксли</font></a>
<a id='a368' name='#a368' style='position: absolute; top: 516px; left: 2790px'><font color=white size=3>Кронин</font></a>
<a id='a738' name='#a738' style='position: absolute; top: 493px; left: 2790px'><font color=white size=3>Фицджера.</font></a>
<a id='a319' name='#a319' style='position: absolute; top: 495px; left: 2790px'><font color=white size=3>Катаев</font></a>
<a id='a741' name='#a741' style='position: absolute; top: 537px; left: 2790px'><font color=white size=3>Фолкнер</font></a>
<a id='a591' name='#a591' style='position: absolute; top: 512px; left: 2790px'><font color=white size=3>Ремарк</font></a>
<a id='a1056' name='#a1056' style='position: absolute; top: 503px; left: 2790px'><font color=white size=3>К Льюис</font></a>
<a id='a493' name='#a493' style='position: absolute; top: 518px; left: 2790px'><font color=white size=3>Набоков</font></a>
<a id='a559' name='#a559' style='position: absolute; top: 491px; left: 2790px'><font color=white size=3>Платонов</font></a>
<a id='a765' name='#a765' style='position: absolute; top: 560px; left: 2790px'><font color=white size=3>Хемингу.</font></a>
<a id='a290' name='#a290' style='position: absolute; top: 472px; left: 2790px'><font color=white size=3>Петров</font></a>
<a id='a469' name='#a469' style='position: absolute; top: 488px; left: 2790px'><font color=white size=3>М Митч.</font></a>
<a id='a634' name='#a634' style='position: absolute; top: 484px; left: 2790px'><font color=white size=3>С-Экзюп.</font></a>
<a id='a1059' name='#a1059' style='position: absolute; top: 499px; left: 2790px'><font color=white size=3>Ларри</font></a>
<a id='a300' name='#a300' style='position: absolute; top: 545px; left: 2790px'><font color=white size=3>Каверин</font></a>
<a id='a533' name='#a533' style='position: absolute; top: 512px; left: 2790px'><font color=white size=3>Осеева</font></a>
<a id='a661' name='#a661' style='position: absolute; top: 512px; left: 2790px'><font color=white size=3>Стейнбек</font></a>
<a id='a379' name='#a379' style='position: absolute; top: 522px; left: 2790px'><font color=white size=3>Лагин</font></a>
<a id='a531' name='#a531' style='position: absolute; top: 495px; left: 2790px'><font color=white size=3>Оруэлл</font></a>
<a id='a1062' name='#a1062' style='position: absolute; top: 535px; left: 2790px'><font color=white size=3>Стоун</font></a>
<a id='a156' name='#a156' style='position: absolute; top: 465px; left: 2790px'><font color=white size=3>Гайдар</font></a>
<a id='a318' name='#a318' style='position: absolute; top: 535px; left: 2790px'><font color=white size=3>Кассиль</font></a>
<a id='a624' name='#a624' style='position: absolute; top: 528px; left: 2790px'><font color=white size=3>Сартр</font></a>
<a id='a707' name='#a707' style='position: absolute; top: 558px; left: 2790px'><font color=white size=3>Троепол.</font></a>
<a id='a817' name='#a817' style='position: absolute; top: 541px; left: 2790px'><font color=white size=3>Шолохов</font></a>
<a id='a1044' name='#a1044' style='position: absolute; top: 497px; left: 2790px'><font color=white size=3>Соловьёв</font></a>
<a id='a407' name='#a407' style='position: absolute; top: 577px; left: 2790px'><font color=white size=3>Линдгр.</font></a>
<a id='a1096' name='#a1096' style='position: absolute; top: 495px; left: 2790px'><font color=white size=3>Хайнлайн</font></a>
<a id='a1091' name='#a1091' style='position: absolute; top: 539px; left: 2790px'><font color=white size=3>Морье</font></a>
<a id='a1073' name='#a1073' style='position: absolute; top: 530px; left: 2790px'><font color=white size=3>А Некрас.</font></a>
<a id='a516' name='#a516' style='position: absolute; top: 484px; left: 2790px'><font color=white size=3>Н Носов</font></a>
<a id='a565' name='#a565' style='position: absolute; top: 564px; left: 2790px'><font color=white size=3>Полевой</font></a>
<a id='a1034' name='#a1034' style='position: absolute; top: 522px; left: 2790px'><font color=white size=3>Ефрем.</font></a>
<a id='a249' name='#a249' style='position: absolute; top: 518px; left: 2790px'><font color=white size=3>Домбровск.</font></a>
<a id='a42' name='#a42' style='position: absolute; top: 562px; left: 2790px'><font color=white size=3>Базен</font></a>
<a id='a188' name='#a188' style='position: absolute; top: 568px; left: 2790px'><font color=white size=3>Голдинг</font></a>
<a id='a612' name='#a612' style='position: absolute; top: 581px; left: 2790px'><font color=white size=3>Рыбаков</font></a>
<a id='a309' name='#a309' style='position: absolute; top: 516px; left: 2790px'><font color=white size=3>Камю</font></a>
<a id='a1046' name='#a1046' style='position: absolute; top: 507px; left: 2790px'><font color=white size=3>Драгунск.</font></a>
<a id='a1064' name='#a1064' style='position: absolute; top: 591px; left: 2790px'><font color=white size=3>Янссон</font></a>
<a id='a639' name='#a639' style='position: absolute; top: 503px; left: 2790px'><font color=white size=3>Симонов</font></a>
<a id='a59' name='#a59' style='position: absolute; top: 539px; left: 2790px'><font color=white size=3>Бёлль</font></a>
<a id='a339' name='#a339' style='position: absolute; top: 575px; left: 2790px'><font color=white size=3>Кларк</font></a>
<a id='a256' name='#a256' style='position: absolute; top: 572px; left: 2790px'><font color=white size=3>Дрюон</font></a>
<a id='a258' name='#a258' style='position: absolute; top: 570px; left: 2790px'><font color=white size=3>Дудинцев</font></a>
<a id='a649' name='#a649' style='position: absolute; top: 585px; left: 2790px'><font color=white size=3>Солжениц.</font></a>
<a id='a455' name='#a455' style='position: absolute; top: 562px; left: 2790px'><font color=white size=3>Мёрдок</font></a>
<a id='a676' name='#a676' style='position: absolute; top: 575px; left: 2790px'><font color=white size=3>Сэлиндж.</font></a>
<a id='a7' name='#a7' style='position: absolute; top: 551px; left: 2790px'><font color=white size=3>Азимов</font></a>
<a id='a105' name='#a105' style='position: absolute; top: 587px; left: 2790px'><font color=white size=3>Брэдбери</font></a>
<a id='a583' name='#a583' style='position: absolute; top: 568px; left: 2790px'><font color=white size=3>Пьюзо</font></a>
<a id='a598' name='#a598' style='position: absolute; top: 554px; left: 2790px'><font color=white size=3>Родари</font></a>
<a id='a762' name='#a762' style='position: absolute; top: 591px; left: 2790px'><font color=white size=3>Хейли</font></a>
<a id='a389' name='#a389' style='position: absolute; top: 541px; left: 2790px'><font color=white size=3>Лем</font></a>
<a id='a150' name='#a150' style='position: absolute; top: 564px; left: 2790px'><font color=white size=3>Воннегут</font></a>
<a id='a3' name='#a3' style='position: absolute; top: 528px; left: 2790px'><font color=white size=3>Абэ</font></a>
<a id='a35' name='#a35' style='position: absolute; top: 549px; left: 2790px'><font color=white size=3>Астафьев</font></a>
<a id='a86' name='#a86' style='position: absolute; top: 572px; left: 2790px'><font color=white size=3>Богомолов</font></a>
<a id='a115' name='#a115' style='position: absolute; top: 596px; left: 2790px'><font color=white size=3>Быков</font></a>
<a id='a127' name='#a127' style='position: absolute; top: 619px; left: 2790px'><font color=white size=3>Васильев</font></a>
<a id='a1088' name='#a1088' style='position: absolute; top: 562px; left: 2790px'><font color=white size=3>Клавелл</font></a>
<a id='a269' name='#a269' style='position: absolute; top: 604px; left: 2790px'><font color=white size=3>Железн.</font></a>
<a id='a670' name='#a670' style='position: absolute; top: 518px; left: 2790px'><font color=white size=3>Стругацк.</font></a>
<a id='a404' name='#a404' style='position: absolute; top: 587px; left: 2790px'><font color=white size=3>Ли</font></a>
<a id='a730' name='#a730' style='position: absolute; top: 596px; left: 2790px'><font color=white size=3>Фаулз</font></a>
<a id='a331' name='#a331' style='position: absolute; top: 587px; left: 2790px'><font color=white size=3>Киз</font></a>
<a id='a443' name='#a443' style='position: absolute; top: 621px; left: 2790px'><font color=white size=3>Маркес</font></a>
<a id='a9' name='#a9' style='position: absolute; top: 551px; left: 2790px'><font color=white size=3>Айтматов</font></a>
<a id='a1035' name='#a1035' style='position: absolute; top: 526px; left: 2790px'><font color=white size=3>Пикуль</font></a>
<a id='a293' name='#a293' style='position: absolute; top: 608px; left: 2790px'><font color=white size=3>Искандер</font></a>
<a id='a370' name='#a370' style='position: absolute; top: 583px; left: 2790px'><font color=white size=3>Кундера</font></a>
<a id='a823' name='#a823' style='position: absolute; top: 547px; left: 2790px'><font color=white size=3>Шукшин</font></a>
<a id='a1174' name='#a1174' style='position: absolute; top: 530px; left: 2790px'><font color=white size=3>Гуин</font></a>
<a id='a145' name='#a145' style='position: absolute; top: 520px; left: 2790px'><font color=white size=3>Войнович</font></a>
<a id='a825' name='#a825' style='position: absolute; top: 593px; left: 2790px'><font color=white size=3>Эко</font></a>
<a id='a108' name='#a108' style='position: absolute; top: 614px; left: 2790px'><font color=white size=3>Булычёв</font></a>
<a id='a332' name='#a332' style='position: absolute; top: 575px; left: 2790px'><font color=white size=3>Кизи</font></a>
<a id='a615' name='#a615' style='position: absolute; top: 568px; left: 2790px'><font color=white size=3>Саган</font></a>
<a id='a1054' name='#a1054' style='position: absolute; top: 522px; left: 2790px'><font color=white size=3>Вайнеры</font></a>
<a id='a1049' name='#a1049' style='position: absolute; top: 545px; left: 2790px'><font color=white size=3>Шевалль</font></a>
<a id='a56' name='#a56' style='position: absolute; top: 547px; left: 2790px'><font color=white size=3>Бах</font></a>
<a id='a429' name='#a429' style='position: absolute; top: 591px; left: 2790px'><font color=white size=3>Маккалоу</font></a>
<a id='a590' name='#a590' style='position: absolute; top: 598px; left: 2790px'><font color=white size=3>Распутин</font></a>
<a id='a1051' name='#a1051' style='position: absolute; top: 610px; left: 2790px'><font color=white size=3>Желязны</font></a>
<a id='a1050' name='#a1050' style='position: absolute; top: 600px; left: 2790px'><font color=white size=3>Э Успенс.</font></a>
<a id='a1068' name='#a1068' style='position: absolute; top: 566px; left: 2790px'><font color=white size=3>Горин</font></a>
<a id='a245' name='#a245' style='position: absolute; top: 543px; left: 2790px'><font color=white size=3>Довлатов</font></a>
<a id='a1075' name='#a1075' style='position: absolute; top: 549px; left: 2790px'><font color=white size=3>Д Ирвинг</font></a>
<a id='a1089' name='#a1089' style='position: absolute; top: 572px; left: 2790px'><font color=white size=3>Улицкая</font></a>
<a id='a1036' name='#a1036' style='position: absolute; top: 612px; left: 2790px'><font color=white size=3>Филатов</font></a>
<a id='a336' name='#a336' style='position: absolute; top: 633px; left: 2790px'><font color=white size=3>Кинг</font></a>
<a id='a1097' name='#a1097' style='position: absolute; top: 554px; left: 2790px'><font color=white size=3>Сапковск.</font></a>
<a id='a1094' name='#a1094' style='position: absolute; top: 600px; left: 2790px'><font color=white size=3>Пратчетт</font></a>
<a id='a1077' name='#a1077' style='position: absolute; top: 577px; left: 2790px'><font color=white size=3>Мартин</font></a>
<a id='a285' name='#a285' style='position: absolute; top: 575px; left: 2790px'><font color=white size=3>Зюскинд</font></a>
<a id='a488' name='#a488' style='position: absolute; top: 598px; left: 2790px'><font color=white size=3>Мураками</font></a>
<a id='a597' name='#a597' style='position: absolute; top: 598px; left: 2790px'><font color=white size=3>Робертс</font></a>
<a id='a1066' name='#a1066' style='position: absolute; top: 635px; left: 2790px'><font color=white size=3>Адамс</font></a>
<a id='a1063' name='#a1063' style='position: absolute; top: 638px; left: 2790px'><font color=white size=3>Ларссон</font></a>
<a id='a1033' name='#a1033' style='position: absolute; top: 589px; left: 2790px'><font color=white size=3>Поляков</font></a>
<a id='a1076' name='#a1076' style='position: absolute; top: 614px; left: 2790px'><font color=white size=3>Акунин</font></a>
<a id='a1070' name='#a1070' style='position: absolute; top: 614px; left: 2790px'><font color=white size=3>Голден</font></a>
<a id='a546' name='#a546' style='position: absolute; top: 619px; left: 2790px'><font color=white size=3>Пелевин</font></a>
<a id='a605' name='#a605' style='position: absolute; top: 623px; left: 2790px'><font color=white size=3>Роулинг</font></a>
<a id='a1093' name='#a1093' style='position: absolute; top: 646px; left: 2790px'><font color=white size=3>Фрай</font></a>
<a id='a1065' name='#a1065' style='position: absolute; top: 625px; left: 2790px'><font color=white size=3>Санаев</font></a>
<a id='a1055' name='#a1055' style='position: absolute; top: 631px; left: 2790px'><font color=white size=3>А Иванов</font></a>
<a id='a213' name='#a213' style='position: absolute; top: 642px; left: 2790px'><font color=white size=3>Д Грин</font></a>

<img id=img align=left class=coords border=0 src=maps/en4.png>
<div style='background:transparent; position:absolute; top: 0px; left: 0px; width:100%; height:100%;'>
<a  href='build-rlmap4.php?t_name=Возрождение' title=''><div class=area style='position:absolute; width:48px; height:18px; left:661px; top:26px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Возрождение' title=''><div class=area style='position:absolute; width:49px; height:18px; left:612px; top:26px'></div></a>
<a  href='build-rlmap4.php?t_name=Религия' title='Религия'><div class=area style='position:absolute; width:30px; height:18px; left:1592px; top:13px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Религия' title='Религия'><div class=area style='position:absolute; width:31px; height:18px; left:1561px; top:13px'></div></a>
<a  href='build-rlmap4.php?t_name=Классицизм' title=''><div class=area style='position:absolute; width:42px; height:18px; left:318px; top:88px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Классицизм' title=''><div class=area style='position:absolute; width:42px; height:18px; left:276px; top:88px'></div></a>
<a  href='build-rlmap4.php?t_name=История' title=''><div class=area style='position:absolute; width:30px; height:18px; left:1266px; top:13px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=История' title=''><div class=area style='position:absolute; width:30px; height:18px; left:1236px; top:13px'></div></a>
<a  href='build-rlmap4.php?t_name=Философия' title='Философия'><div class=area style='position:absolute; width:36px; height:18px; left:1522px; top:13px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Философия' title='Философия'><div class=area style='position:absolute; width:37px; height:18px; left:1485px; top:13px'></div></a>
<a  href='build-rlmap4.php?t_name=Юмор' title=''><div class=area style='position:absolute; width:22px; height:18px; left:2248px; top:72px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Юмор' title=''><div class=area style='position:absolute; width:22px; height:18px; left:2226px; top:72px'></div></a>
<a  href='build-rlmap4.php?t_name=Реализм' title=''><div class=area style='position:absolute; width:31px; height:18px; left:1350px; top:78px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Реализм' title=''><div class=area style='position:absolute; width:32px; height:18px; left:1318px; top:78px'></div></a>
<a  href='build-rlmap4.php?t_name=Антиутопия' title='Антиутопия'><div class=area style='position:absolute; width:32px; height:18px; left:1750px; top:76px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Антиутопия' title='Антиутопия'><div class=area style='position:absolute; width:32px; height:18px; left:1718px; top:76px'></div></a>
<a  href='build-rlmap4.php?t_name=Фантастика' title='Фантастика'><div class=area style='position:absolute; width:32px; height:18px; left:1671px; top:81px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Фантастика' title='Фантастика'><div class=area style='position:absolute; width:32px; height:18px; left:1639px; top:81px'></div></a>
<a  href='build-rlmap4.php?t_name=Детская' title=''><div class=area style='position:absolute; width:30px; height:18px; left:2181px; top:86px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Детская' title=''><div class=area style='position:absolute; width:30px; height:18px; left:2151px; top:86px'></div></a>
<a  href='build-rlmap4.php?t_name=Приключения' title='Приключения'><div class=area style='position:absolute; width:34px; height:18px; left:1198px; top:101px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Приключения' title='Приключения'><div class=area style='position:absolute; width:35px; height:18px; left:1163px; top:101px'></div></a>
<a  href='build-rlmap4.php?t_name=Сентиментализм' title='Сентиментализм'><div class=area style='position:absolute; width:39px; height:18px; left:2346px; top:116px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Сентиментализм' title='Сентиментализм'><div class=area style='position:absolute; width:40px; height:18px; left:2306px; top:116px'></div></a>
<a  href='build-rlmap4.php?t_name=О любви' title=''><div class=area style='position:absolute; width:31px; height:18px; left:2338px; top:438px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=О любви' title=''><div class=area style='position:absolute; width:32px; height:18px; left:2306px; top:438px'></div></a>
<a  href='build-rlmap4.php?t_name=Романтизм' title=''><div class=area style='position:absolute; width:39px; height:18px; left:412px; top:147px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Романтизм' title=''><div class=area style='position:absolute; width:39px; height:18px; left:373px; top:147px'></div></a>
<a  href='build-rlmap4.php?t_name=Психология' title='Психология'><div class=area style='position:absolute; width:29px; height:18px; left:1440px; top:115px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Психология' title='Психология'><div class=area style='position:absolute; width:29px; height:18px; left:1411px; top:115px'></div></a>
<a  href='build-rlmap4.php?t_name=Готика' title=''><div class=area style='position:absolute; width:25px; height:18px; left:1808px; top:160px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Готика' title=''><div class=area style='position:absolute; width:25px; height:18px; left:1783px; top:160px'></div></a>
<a  href='build-rlmap4.php?t_name=Критический реализм' title='Критический реализм'><div class=area style='position:absolute; width:31px; height:18px; left:498px; top:448px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Критический реализм' title='Критический реализм'><div class=area style='position:absolute; width:31px; height:18px; left:467px; top:448px'></div></a>
<a  href='build-rlmap4.php?t_name=Экзистенциализм' title='Экзистенциализм'><div class=area style='position:absolute; width:26px; height:18px; left:185px; top:511px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Экзистенциализм' title='Экзистенциализм'><div class=area style='position:absolute; width:27px; height:18px; left:158px; top:511px'></div></a>
<a  href='build-rlmap4.php?t_name=Натурализм' title='Натурализм'><div class=area style='position:absolute; width:32px; height:18px; left:1115px; top:318px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Натурализм' title='Натурализм'><div class=area style='position:absolute; width:32px; height:18px; left:1083px; top:318px'></div></a>
<a  href='build-rlmap4.php?t_name=Соцреализм' title=''><div class=area style='position:absolute; width:43px; height:18px; left:803px; top:358px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Соцреализм' title=''><div class=area style='position:absolute; width:44px; height:18px; left:759px; top:358px'></div></a>
<a  href='build-rlmap4.php?t_name=О войне' title=''><div class=area style='position:absolute; width:30px; height:18px; left:882px; top:475px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=О войне' title=''><div class=area style='position:absolute; width:31px; height:18px; left:851px; top:475px'></div></a>
<a  href='build-rlmap4.php?t_name=Деревня' title=''><div class=area style='position:absolute; width:32px; height:18px; left:967px; top:328px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Деревня' title=''><div class=area style='position:absolute; width:32px; height:18px; left:935px; top:328px'></div></a>
<a  href='build-rlmap4.php?t_name=Символизм' title=''><div class=area style='position:absolute; width:40px; height:18px; left:285px; top:410px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Символизм' title=''><div class=area style='position:absolute; width:40px; height:18px; left:245px; top:410px'></div></a>
<a  href='build-rlmap4.php?t_name=Декаданс' title=''><div class=area style='position:absolute; width:35px; height:18px; left:128px; top:309px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Декаданс' title=''><div class=area style='position:absolute; width:36px; height:18px; left:92px; top:309px'></div></a>
<a  href='build-rlmap4.php?t_name=Магический реализм' title='Магический реализм'><div class=area style='position:absolute; width:31px; height:18px; left:636px; top:284px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Магический реализм' title='Магический реализм'><div class=area style='position:absolute; width:31px; height:18px; left:605px; top:284px'></div></a>
<a  href='build-rlmap4.php?t_name=Сюрреализм' title='Сюрреализм'><div class=area style='position:absolute; width:23px; height:18px; left:2754px; top:490px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Сюрреализм' title='Сюрреализм'><div class=area style='position:absolute; width:23px; height:18px; left:2731px; top:490px'></div></a>
<a  href='build-rlmap4.php?t_name=Абсурд' title=''><div class=area style='position:absolute; width:27px; height:18px; left:2407px; top:360px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Абсурд' title=''><div class=area style='position:absolute; width:28px; height:18px; left:2379px; top:360px'></div></a>
<a  href='build-rlmap4.php?t_name=Бит' title=''><div class=area style='position:absolute; width:15px; height:18px; left:554px; top:459px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Бит' title=''><div class=area style='position:absolute; width:15px; height:18px; left:539px; top:459px'></div></a>
<a  href='build-rlmap4.php?t_name=Твердая научная фантастика' title='Твердая научная фантастика'><div class=area style='position:absolute; width:25px; height:18px; left:1881px; top:444px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Твердая научная фантастика' title='Твердая научная фантастика'><div class=area style='position:absolute; width:26px; height:18px; left:1855px; top:444px'></div></a>
<a  href='build-rlmap4.php?t_name=Детектив' title=''><div class=area style='position:absolute; width:33px; height:18px; left:718px; top:288px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Детектив' title=''><div class=area style='position:absolute; width:34px; height:18px; left:684px; top:288px'></div></a>
<a  href='build-rlmap4.php?t_name=О животных' title='О животных'><div class=area style='position:absolute; width:30px; height:18px; left:1044px; top:438px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=О животных' title='О животных'><div class=area style='position:absolute; width:31px; height:18px; left:1013px; top:438px'></div></a>
<a  href='build-rlmap4.php?t_name=Модернизм' title='Модернизм'><div class=area style='position:absolute; width:34px; height:18px; left:2484px; top:360px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Модернизм' title='Модернизм'><div class=area style='position:absolute; width:35px; height:18px; left:2449px; top:360px'></div></a>
<a  href='build-rlmap4.php?t_name=Экспрессионизм' title='Экспрессионизм'><div class=area style='position:absolute; width:32px; height:18px; left:2555px; top:404px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Экспрессионизм' title='Экспрессионизм'><div class=area style='position:absolute; width:32px; height:18px; left:2523px; top:404px'></div></a>
<a  href='build-rlmap4.php?t_name=Фэнтези' title=''><div class=area style='position:absolute; width:31px; height:18px; left:2024px; top:446px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Фэнтези' title=''><div class=area style='position:absolute; width:31px; height:18px; left:1993px; top:446px'></div></a>
<a  href='build-rlmap4.php?t_name=Антироман' title='Антироман'><div class=area style='position:absolute; width:33px; height:18px; left:2695px; top:515px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Антироман' title='Антироман'><div class=area style='position:absolute; width:34px; height:18px; left:2661px; top:515px'></div></a>
<a  href='build-rlmap4.php?t_name=Постмодернизм' title='Постмодернизм'><div class=area style='position:absolute; width:32px; height:18px; left:2624px; top:492px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Постмодернизм' title='Постмодернизм'><div class=area style='position:absolute; width:33px; height:18px; left:2591px; top:492px'></div></a>
<a  href='build-rlmap4.php?t_name=Детская фантастика' title='Детская фантастика'><div class=area style='position:absolute; width:37px; height:18px; left:1956px; top:190px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Детская фантастика' title='Детская фантастика'><div class=area style='position:absolute; width:37px; height:18px; left:1919px; top:190px'></div></a>
<a  href='build-rlmap4.php?t_name=Для подростков' title='Для подростков'><div class=area style='position:absolute; width:31px; height:18px; left:2103px; top:351px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Для подростков' title='Для подростков'><div class=area style='position:absolute; width:32px; height:18px; left:2071px; top:351px'></div></a>
<a  href='build-rlmap4.php?t_name=Древний Китай' title='Древний Китай'><div class=area style='position:absolute; width:22px; height:18px; left:2404px; top:13px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Древний Китай' title='Древний Китай'><div class=area style='position:absolute; width:22px; height:18px; left:2382px; top:13px'></div></a>
<a  href='build-rlmap4.php?t_name=Мировая литература' title='Мировая литература'><div class=area style='position:absolute; width:16px; height:18px; left:2816px; top:13px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Мировая литература' title='Мировая литература'><div class=area style='position:absolute; width:17px; height:18px; left:2799px; top:13px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2366&a_id=1067&y=-600' title='Лао Цзы
Философ
Древний Китай
CHN
-600--550
MY: 0/0
MX: 2366
WN: 1
RAT: 2002'><div class=area style='position:absolute; width:31px; height:20px; left:2385px; top:3px'></div></a>
<a  href='build-rlmap4.php?mp=2366&a_id=1067&y=-600' title='Лао Цзы
Философ
Древний Китай
CHN
-600--550
MY: 0/0
MX: 2366
WN: 1
RAT: 2002'><div class=area style='position:absolute; width:30px; height:20px; left:2416px; top:3px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1468&a_id=1042&y=1048' title='Омар Хайям
Философ
Мистицизм, Философия, 
Агностицизм, Спиритуализм
PER
1048-1131
MY: 0/0
MX: 1468
WN: 1
RAT: 6594'><div class=area style='position:absolute; width:23px; height:20px; left:1487px; top:15px'></div></a>
<a  href='build-rlmap4.php?mp=1468&a_id=1042&y=1048' title='Омар Хайям
Философ
Мистицизм, Философия, 
Агностицизм, Спиритуализм
PER
1048-1131
MY: 0/0
MX: 1468
WN: 1
RAT: 6594'><div class=area style='position:absolute; width:23px; height:20px; left:1510px; top:15px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2&a_id=87&y=1313' title='Джованни Боккаччо
Писатель
Возрождение
ITA
1313-1375
MY: 0/0
MX: 2
WN: 4
RAT: 2683'><div class=area style='position:absolute; width:32px; height:20px; left:21px; top:38px'></div></a>
<a  href='build-rlmap4.php?mp=2&a_id=87&y=1313' title='Джованни Боккаччо
Писатель
Возрождение
ITA
1313-1375
MY: 0/0
MX: 2
WN: 4
RAT: 2683'><div class=area style='position:absolute; width:32px; height:20px; left:53px; top:38px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=330&a_id=427&y=1469' title='Никколо Макиавелли
Философ
Возрождение, 
Древние философы
ITA
1469-1527
MY: 0/0
MX: 330
WN: 2
RAT: 1560'><div class=area style='position:absolute; width:41px; height:20px; left:349px; top:60px'></div></a>
<a  href='build-rlmap4.php?mp=330&a_id=427&y=1469' title='Никколо Макиавелли
Философ
Возрождение, 
Древние философы
ITA
1469-1527
MY: 0/0
MX: 330
WN: 2
RAT: 1560'><div class=area style='position:absolute; width:40px; height:20px; left:390px; top:60px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=535&a_id=636&y=1547' title='Мигель де Сервантес
Писатель
Возрождение, 
Приключения, Юмор
SPA
1547-1616
MY: 0/0
MX: 535
WN: 1
RAT: 23765'><div class=area style='position:absolute; width:40px; height:20px; left:554px; top:71px'></div></a>
<a  href='build-rlmap4.php?mp=535&a_id=636&y=1547' title='Мигель де Сервантес
Писатель
Возрождение, 
Приключения, Юмор
SPA
1547-1616
MY: 0/0
MX: 535
WN: 1
RAT: 23765'><div class=area style='position:absolute; width:39px; height:20px; left:594px; top:71px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=384&y=1621' title='Жан де Лафонтен

Барокко, Басня
FRA
1621-1695
MY: 0/-5
MX: 2209
WN: 1
RAT: 3500'><div class=area style='position:absolute; width:34px; height:20px; left:2228px; top:81px'></div></a>
<a  href='build-rlmap4.php?mp=2209&a_id=384&y=1621' title='Жан де Лафонтен

Барокко, Басня
FRA
1621-1695
MY: 0/-5
MX: 2209
WN: 1
RAT: 3500'><div class=area style='position:absolute; width:33px; height:20px; left:2262px; top:81px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2134&a_id=547&y=1628' title='Шарль Перро
Автор
Детская, Классицизм
FRA
1628-1703
MY: 0/0
MX: 2134
WN: 3
RAT: 3755'><div class=area style='position:absolute; width:23px; height:20px; left:2153px; top:83px'></div></a>
<a  href='build-rlmap4.php?mp=2134&a_id=547&y=1628' title='Шарль Перро
Автор
Детская, Классицизм
FRA
1628-1703
MY: 0/0
MX: 2134
WN: 3
RAT: 3755'><div class=area style='position:absolute; width:22px; height:20px; left:2176px; top:83px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1468&a_id=1060&y=1632' title='Бенедикт Спиноза
Философ
Просвещение, Философия, 
Детерминизм, Натурализм, Пантеизм, Рационализм
NLD
1632-1677
MY: 0/0
MX: 1468
WN: 1
RAT: 2322'><div class=area style='position:absolute; width:29px; height:20px; left:1487px; top:82px'></div></a>
<a  href='build-rlmap4.php?mp=1468&a_id=1060&y=1632' title='Бенедикт Спиноза
Философ
Просвещение, Философия, 
Детерминизм, Натурализм, Пантеизм, Рационализм
NLD
1632-1677
MY: 0/0
MX: 1468
WN: 1
RAT: 2322'><div class=area style='position:absolute; width:29px; height:20px; left:1516px; top:82px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1146&a_id=231&y=1660' title='Даниэль Дефо
Писатель
Классицизм, Приключения, 
Детская
BRI
1660-1731
MY: 20/0
MX: 1146
WN: 5
RAT: 27730'><div class=area style='position:absolute; width:23px; height:20px; left:1165px; top:110px'></div></a>
<a  href='build-rlmap4.php?mp=1146&a_id=231&y=1660' title='Даниэль Дефо
Писатель
Классицизм, Приключения, 
Детская
BRI
1660-1731
MY: 20/0
MX: 1146
WN: 5
RAT: 27730'><div class=area style='position:absolute; width:23px; height:20px; left:1188px; top:110px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=627&y=1667' title='Джонатан Свифт
Писатель
Классицизм, Сатира, 
Детская, Философия
BRI
1667-1745
MY: 0/5
MX: 2209
WN: 2
RAT: 9375'><div class=area style='position:absolute; width:23px; height:20px; left:2228px; top:103px'></div></a>
<a  href='build-rlmap4.php?mp=2209&a_id=627&y=1667' title='Джонатан Свифт
Писатель
Классицизм, Сатира, 
Детская, Философия
BRI
1667-1745
MY: 0/5
MX: 2209
WN: 2
RAT: 9375'><div class=area style='position:absolute; width:23px; height:20px; left:2251px; top:103px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2134&a_id=589&y=1736' title='Рудольф Эрих Распе
Писатель
Детская, 
История, Приключения, Сказка, Юмор
DEU
1736-1794
MY: 0/0
MX: 2134
WN: 1
RAT: 2725'><div class=area style='position:absolute; width:23px; height:20px; left:2153px; top:179px'></div></a>
<a  href='build-rlmap4.php?mp=2134&a_id=589&y=1736' title='Рудольф Эрих Распе
Писатель
Детская, 
История, Приключения, Сказка, Юмор
DEU
1736-1794
MY: 0/0
MX: 2134
WN: 1
RAT: 2725'><div class=area style='position:absolute; width:22px; height:20px; left:2176px; top:179px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=381&y=1741' title='Шодерло де Лакло
Автор
Сатира, 
О любви, Эпистолярный роман
FRA
1741-1803
MY: 0/0
MX: 2209
WN: 1
RAT: 3261'><div class=area style='position:absolute; width:23px; height:20px; left:2228px; top:189px'></div></a>
<a  href='build-rlmap4.php?mp=2209&a_id=381&y=1741' title='Шодерло де Лакло
Автор
Сатира, 
О любви, Эпистолярный роман
FRA
1741-1803
MY: 0/0
MX: 2209
WN: 1
RAT: 3261'><div class=area style='position:absolute; width:22px; height:20px; left:2251px; top:189px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2289&a_id=315&y=1766' title='Н. М. Карамзин

Сентиментализм, 
Карамзинисты, Консерватизм
RUS
1766-1826
MY: 0/0
MX: 2289
WN: 7
RAT: 1245'><div class=area style='position:absolute; width:33px; height:20px; left:2308px; top:222px'></div></a>
<a  href='build-rlmap4.php?mp=2289&a_id=315&y=1766' title='Н. М. Карамзин

Сентиментализм, 
Карамзинисты, Консерватизм
RUS
1766-1826
MY: 0/0
MX: 2289
WN: 7
RAT: 1245'><div class=area style='position:absolute; width:33px; height:20px; left:2341px; top:222px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=369&y=1769' title='И. А. Крылов
Автор
Басня, 
Сатира
RUS
1769-1844
MY: 0/0
MX: 2209
WN: 6
RAT: 12687'><div class=area style='position:absolute; width:30px; height:20px; left:2228px; top:243px'></div></a>
<a  href='build-rlmap4.php?mp=2209&a_id=369&y=1769' title='И. А. Крылов
Автор
Басня, 
Сатира
RUS
1769-1844
MY: 0/0
MX: 2209
WN: 6
RAT: 12687'><div class=area style='position:absolute; width:29px; height:20px; left:2258px; top:243px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=441&a_id=642&y=1771' title='Вальтер Скотт
Писатель
Романтизм, 
История, Приключения
BRI
1771-1832
MY: 0/-3
MX: 441
WN: 7
RAT: 5796'><div class=area style='position:absolute; width:21px; height:20px; left:460px; top:227px'></div></a>
<a  href='build-rlmap4.php?mp=441&a_id=642&y=1771' title='Вальтер Скотт
Писатель
Романтизм, 
История, Приключения
BRI
1771-1832
MY: 0/-3
MX: 441
WN: 7
RAT: 5796'><div class=area style='position:absolute; width:20px; height:20px; left:481px; top:227px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=534&y=1775' title='Джейн Остин
Писательница
Реализм, 
Готика, О любви
BRI
1775-1817
MY: 0/0
MX: 1302
WN: 7
RAT: 21808'><div class=area style='position:absolute; width:24px; height:20px; left:1321px; top:222px'></div></a>
<a  href='build-rlmap4.php?mp=1302&a_id=534&y=1775' title='Джейн Остин
Писательница
Реализм, 
Готика, О любви
BRI
1775-1817
MY: 0/0
MX: 1302
WN: 7
RAT: 21808'><div class=area style='position:absolute; width:23px; height:20px; left:1345px; top:222px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1395&a_id=662&y=1783' title='Стендаль
Писатель
Психология, Реализм, 
Агностицизм, Романтизм
FRA
1783-1842
MY: 0/0
MX: 1395
WN: 3
RAT: 16969'><div class=area style='position:absolute; width:34px; height:20px; left:1414px; top:255px'></div></a>
<a  href='build-rlmap4.php?mp=1395&a_id=662&y=1783' title='Стендаль
Писатель
Психология, Реализм, 
Агностицизм, Романтизм
FRA
1783-1842
MY: 0/0
MX: 1395
WN: 3
RAT: 16969'><div class=area style='position:absolute; width:33px; height:20px; left:1448px; top:255px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2134&a_id=1053&y=1785' title='Братья Гримм

Детская, 
Сказка, Фольклор
DEU
1785-1862
MY: 0/-4
MX: 2134
WN: 1
RAT: 3286'><div class=area style='position:absolute; width:24px; height:20px; left:2153px; top:270px'></div></a>
<a  href='build-rlmap4.php?mp=2134&a_id=1053&y=1785' title='Братья Гримм

Детская, 
Сказка, Фольклор
DEU
1785-1862
MY: 0/-4
MX: 2134
WN: 1
RAT: 3286'><div class=area style='position:absolute; width:23px; height:20px; left:2177px; top:270px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=441&a_id=43&y=1788' title='Джордж Байрон
Барон Байрон
Романтизм, 
Готика, Либертинаж
BRI
1788-1824
MY: 0/4
MX: 441
WN: 8
RAT: 5710'><div class=area style='position:absolute; width:26px; height:20px; left:460px; top:249px'></div></a>
<a  href='build-rlmap4.php?mp=441&a_id=43&y=1788' title='Джордж Байрон
Барон Байрон
Романтизм, 
Готика, Либертинаж
BRI
1788-1824
MY: 0/4
MX: 441
WN: 8
RAT: 5710'><div class=area style='position:absolute; width:26px; height:20px; left:486px; top:249px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1468&a_id=1061&y=1788' title='Артур Шопенгауэр
Философ
Философия, 
Волюнтаризм, Иррационализм, Мизантропия, Монархизм, Палингенезия, Трансцендентальный идеализм, Эстетизм, Этика
DEU
1788-1860
MY: 0/0
MX: 1468
WN: 3
RAT: 2185'><div class=area style='position:absolute; width:34px; height:20px; left:1487px; top:278px'></div></a>
<a  href='build-rlmap4.php?mp=1468&a_id=1061&y=1788' title='Артур Шопенгауэр
Философ
Философия, 
Волюнтаризм, Иррационализм, Мизантропия, Монархизм, Палингенезия, Трансцендентальный идеализм, Эстетизм, Этика
DEU
1788-1860
MY: 0/0
MX: 1468
WN: 3
RAT: 2185'><div class=area style='position:absolute; width:34px; height:20px; left:1521px; top:278px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1146&a_id=371&y=1789' title='Фенимор Купер
Романист
Приключения, 
Индейцы
USA
1789-1851
MY: 0/0
MX: 1146
WN: 6
RAT: 6613'><div class=area style='position:absolute; width:22px; height:20px; left:1165px; top:270px'></div></a>
<a  href='build-rlmap4.php?mp=1146&a_id=371&y=1789' title='Фенимор Купер
Романист
Приключения, 
Индейцы
USA
1789-1851
MY: 0/0
MX: 1146
WN: 6
RAT: 6613'><div class=area style='position:absolute; width:22px; height:20px; left:1187px; top:270px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2134&a_id=10&y=1791' title='С. Т. Аксаков
Писатель
Детская, 
Сказка
RUS
1791-1859
MY: 0/6
MX: 2134
WN: 4
RAT: 4917'><div class=area style='position:absolute; width:30px; height:20px; left:2153px; top:293px'></div></a>
<a  href='build-rlmap4.php?mp=2134&a_id=10&y=1791' title='С. Т. Аксаков
Писатель
Детская, 
Сказка
RUS
1791-1859
MY: 0/6
MX: 2134
WN: 4
RAT: 4917'><div class=area style='position:absolute; width:29px; height:20px; left:2183px; top:293px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2&a_id=207&y=1795' title='А. С. Грибоедов
Дипломат
Классицизм
RUS
1795-1829
MY: 0/0
MX: 2
WN: 1
RAT: 52142'><div class=area style='position:absolute; width:40px; height:20px; left:21px; top:253px'></div></a>
<a  href='build-rlmap4.php?mp=2&a_id=207&y=1795' title='А. С. Грибоедов
Дипломат
Классицизм
RUS
1795-1829
MY: 0/0
MX: 2
WN: 1
RAT: 52142'><div class=area style='position:absolute; width:39px; height:20px; left:61px; top:253px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=46&y=1799' title='Оноре де Бальзак
Писатель
Реализм, 
История
FRA
1799-1850
MY: 0/0
MX: 1302
WN: 12
RAT: 4836'><div class=area style='position:absolute; width:29px; height:20px; left:1321px; top:281px'></div></a>
<a  href='build-rlmap4.php?mp=1302&a_id=46&y=1799' title='Оноре де Бальзак
Писатель
Реализм, 
История
FRA
1799-1850
MY: 0/0
MX: 1302
WN: 12
RAT: 4836'><div class=area style='position:absolute; width:29px; height:20px; left:1350px; top:281px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2134&a_id=1039&y=1801' title='Владимир Даль
Писатель
Детская, Словарь
RUS
1801-1872
MY: 0/5
MX: 2134
WN: 4
RAT: 7258'><div class=area style='position:absolute; width:20px; height:20px; left:2153px; top:316px'></div></a>
<a  href='build-rlmap4.php?mp=2134&a_id=1039&y=1801' title='Владимир Даль
Писатель
Детская, Словарь
RUS
1801-1872
MY: 0/5
MX: 2134
WN: 4
RAT: 7258'><div class=area style='position:absolute; width:19px; height:20px; left:2173px; top:316px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2134&a_id=169&y=1802' title='Вильгельм Гауф
Писатель
Детская, Романтизм, 
Бидермейер, Сказка
DEU
1802-1827
MY: 0/-6
MX: 2134
WN: 4
RAT: 1275'><div class=area style='position:absolute; width:19px; height:20px; left:2153px; top:247px'></div></a>
<a  href='build-rlmap4.php?mp=2134&a_id=169&y=1802' title='Вильгельм Гауф
Писатель
Детская, Романтизм, 
Бидермейер, Сказка
DEU
1802-1827
MY: 0/-6
MX: 2134
WN: 4
RAT: 1275'><div class=area style='position:absolute; width:19px; height:20px; left:2172px; top:247px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1766&a_id=218&y=1802' title='Виктор Гюго
Писатель
Готика, Романтизм, 
Фэнтези
FRA
1802-1885
MY: 0/0
MX: 1766
WN: 8
RAT: 128539'><div class=area style='position:absolute; width:20px; height:20px; left:1785px; top:320px'></div></a>
<a  href='build-rlmap4.php?mp=1766&a_id=218&y=1802' title='Виктор Гюго
Писатель
Готика, Романтизм, 
Фэнтези
FRA
1802-1885
MY: 0/0
MX: 1766
WN: 8
RAT: 128539'><div class=area style='position:absolute; width:19px; height:20px; left:1805px; top:320px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1219&a_id=260&y=1802' title='Александр Дюма
Писатель
История, Романтизм, 
Фэнтези
FRA
1802-1870
MY: 0/0
MX: 1219
WN: 16
RAT: 105259'><div class=area style='position:absolute; width:23px; height:20px; left:1238px; top:304px'></div></a>
<a  href='build-rlmap4.php?mp=1219&a_id=260&y=1802' title='Александр Дюма
Писатель
История, Романтизм, 
Фэнтези
FRA
1802-1870
MY: 0/0
MX: 1219
WN: 16
RAT: 105259'><div class=area style='position:absolute; width:23px; height:20px; left:1261px; top:304px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2289&a_id=621&y=1804' title='Жорж Санд
Писательница
О любви, Романтизм, 
История, Социализм, Феминизм
FRA
1804-1876
MY: 0/-5
MX: 2289
WN: 5
RAT: 1701'><div class=area style='position:absolute; width:20px; height:20px; left:2308px; top:302px'></div></a>
<a  href='build-rlmap4.php?mp=2289&a_id=621&y=1804' title='Жорж Санд
Писательница
О любви, Романтизм, 
История, Социализм, Феминизм
FRA
1804-1876
MY: 0/-5
MX: 2289
WN: 5
RAT: 1701'><div class=area style='position:absolute; width:19px; height:20px; left:2328px; top:302px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1766&a_id=562&y=1809' title='Эдгар По
Писатель
Готика, Романтизм, 
Викторианская эпоха, Фантастика, Хоррор
USA
1809-1849
MY: 0/0
MX: 1766
WN: 16
RAT: 6711'><div class=area style='position:absolute; width:12px; height:20px; left:1785px; top:289px'></div></a>
<a  href='build-rlmap4.php?mp=1766&a_id=562&y=1809' title='Эдгар По
Писатель
Готика, Романтизм, 
Викторианская эпоха, Фантастика, Хоррор
USA
1809-1849
MY: 0/0
MX: 1766
WN: 16
RAT: 6711'><div class=area style='position:absolute; width:12px; height:20px; left:1797px; top:289px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1146&a_id=76&y=1811' title='Гарриет Бичер-Стоу
Писательница
Аболиционизм, Приключения
USA
1811-1896
MY: 0/-8
MX: 1146
WN: 1
RAT: 2468'><div class=area style='position:absolute; width:25px; height:20px; left:1165px; top:325px'></div></a>
<a  href='build-rlmap4.php?mp=1146&a_id=76&y=1811' title='Гарриет Бичер-Стоу
Писательница
Аболиционизм, Приключения
USA
1811-1896
MY: 0/-8
MX: 1146
WN: 1
RAT: 2468'><div class=area style='position:absolute; width:24px; height:20px; left:1190px; top:325px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=686&y=1811' title='Уильям Теккерей
Писатель
Реализм, Сатира, 
История
BRI
1811-1863
MY: 0/0
MX: 2209
WN: 3
RAT: 3964'><div class=area style='position:absolute; width:32px; height:20px; left:2228px; top:306px'></div></a>
<a  href='build-rlmap4.php?mp=2209&a_id=686&y=1811' title='Уильям Теккерей
Писатель
Реализм, Сатира, 
История
BRI
1811-1863
MY: 0/0
MX: 2209
WN: 3
RAT: 3964'><div class=area style='position:absolute; width:31px; height:20px; left:2260px; top:306px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2289&a_id=195&y=1812' title='И. А. Гончаров
Писатель
Реализм, Сентиментализм, 
Натуральная школа
RUS
1812-1891
MY: 0/5
MX: 2289
WN: 5
RAT: 58189'><div class=area style='position:absolute; width:36px; height:20px; left:2308px; top:348px'></div></a>
<a  href='build-rlmap4.php?mp=2289&a_id=195&y=1812' title='И. А. Гончаров
Писатель
Реализм, Сентиментализм, 
Натуральная школа
RUS
1812-1891
MY: 0/5
MX: 2289
WN: 5
RAT: 58189'><div class=area style='position:absolute; width:35px; height:20px; left:2344px; top:348px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2289&a_id=242&y=1812' title='Чарльз Диккенс
Писатель-романист
Реализм, Сентиментализм, 
Детская, История, Сказка, Юмор
BRI
1812-1870
MY: 0/5
MX: 2289
WN: 15
RAT: 29666'><div class=area style='position:absolute; width:32px; height:20px; left:2308px; top:325px'></div></a>
<a  href='build-rlmap4.php?mp=2289&a_id=242&y=1812' title='Чарльз Диккенс
Писатель-романист
Реализм, Сентиментализм, 
Детская, История, Сказка, Юмор
BRI
1812-1870
MY: 0/5
MX: 2289
WN: 15
RAT: 29666'><div class=area style='position:absolute; width:32px; height:20px; left:2340px; top:325px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=358&a_id=698&y=1817' title='А. К. Толстой
Писатель
Романтизм, 
Готика, Драматургия, История, Поэзия, Сатира
RUS
1817-1875
MY: 0/0
MX: 358
WN: 18
RAT: 3929'><div class=area style='position:absolute; width:35px; height:20px; left:377px; top:325px'></div></a>
<a  href='build-rlmap4.php?mp=358&a_id=698&y=1817' title='А. К. Толстой
Писатель
Романтизм, 
Готика, Драматургия, История, Поэзия, Сатира
RUS
1817-1875
MY: 0/0
MX: 358
WN: 18
RAT: 3929'><div class=area style='position:absolute; width:34px; height:20px; left:412px; top:325px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1146&a_id=593&y=1818' title='Майн Рид
Писатель
Приключения, 
Индейцы
BRI
1818-1883
MY: 0/-16
MX: 1146
WN: 5
RAT: 6930'><div class=area style='position:absolute; width:16px; height:20px; left:1165px; top:302px'></div></a>
<a  href='build-rlmap4.php?mp=1146&a_id=593&y=1818' title='Майн Рид
Писатель
Приключения, 
Индейцы
BRI
1818-1883
MY: 0/-16
MX: 1146
WN: 5
RAT: 6930'><div class=area style='position:absolute; width:16px; height:20px; left:1181px; top:302px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=709&y=1818' title='И. С. Тургенев
Писатель
Реализм, 
Романтизм
RUS
1818-1883
MY: 0/-7
MX: 1302
WN: 49
RAT: 162682'><div class=area style='position:absolute; width:35px; height:20px; left:1321px; top:320px'></div></a>
<a  href='build-rlmap4.php?mp=1302&a_id=709&y=1818' title='И. С. Тургенев
Писатель
Реализм, 
Романтизм
RUS
1818-1883
MY: 0/-7
MX: 1302
WN: 49
RAT: 162682'><div class=area style='position:absolute; width:34px; height:20px; left:1356px; top:320px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1146&a_id=451&y=1819' title='Герман Мелвилл
Писатель
Приключения, 
Готика, Путешествия
USA
1819-1891
MY: 0/2
MX: 1146
WN: 4
RAT: 1003'><div class=area style='position:absolute; width:31px; height:20px; left:1165px; top:348px'></div></a>
<a  href='build-rlmap4.php?mp=1146&a_id=451&y=1819' title='Герман Мелвилл
Писатель
Приключения, 
Готика, Путешествия
USA
1819-1891
MY: 0/2
MX: 1146
WN: 4
RAT: 1003'><div class=area style='position:absolute; width:30px; height:20px; left:1196px; top:348px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1395&a_id=251&y=1821' title='Ф. М. Достоевский
Писатель
Психология, Реализм, 
Религия, Философия, Экзистенциализм
RUS
1821-1881
MY: 0/0
MX: 1395
WN: 18
RAT: 735325'><div class=area style='position:absolute; width:30px; height:20px; left:1414px; top:335px'></div></a>
<a  href='build-rlmap4.php?mp=1395&a_id=251&y=1821' title='Ф. М. Достоевский
Писатель
Психология, Реализм, 
Религия, Философия, Экзистенциализм
RUS
1821-1881
MY: 0/0
MX: 1395
WN: 18
RAT: 735325'><div class=area style='position:absolute; width:29px; height:20px; left:1444px; top:335px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=740&y=1821' title='Гюстав Флобер
Писатель
Реализм, Романтизм, 
История, Рассказ, Фэнтези, Эстетизм
FRA
1821-1880
MY: 0/4
MX: 1302
WN: 4
RAT: 4208'><div class=area style='position:absolute; width:27px; height:20px; left:1321px; top:344px'></div></a>
<a  href='build-rlmap4.php?mp=1302&a_id=740&y=1821' title='Гюстав Флобер
Писатель
Реализм, Романтизм, 
История, Рассказ, Фэнтези, Эстетизм
FRA
1821-1880
MY: 0/4
MX: 1302
WN: 4
RAT: 4208'><div class=area style='position:absolute; width:27px; height:20px; left:1348px; top:344px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=667&a_id=351&y=1824' title='Уилки Коллинз
Писатель
Детектив, 
Готика, Драматургия
BRI
1824-1889
MY: 0/0
MX: 667
WN: 2
RAT: 3954'><div class=area style='position:absolute; width:34px; height:20px; left:686px; top:348px'></div></a>
<a  href='build-rlmap4.php?mp=667&a_id=351&y=1824' title='Уилки Коллинз
Писатель
Детектив, 
Готика, Драматургия
BRI
1824-1889
MY: 0/0
MX: 667
WN: 2
RAT: 3954'><div class=area style='position:absolute; width:33px; height:20px; left:720px; top:348px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=620&y=1826' title='М. Е. Салтыков-Щедрин
Писатель
Сатира, 
Абсурд, Реализм
RUS
1826-1889
MY: 0/0
MX: 2209
WN: 16
RAT: 18745'><div class=area style='position:absolute; width:37px; height:20px; left:2228px; top:350px'></div></a>
<a  href='build-rlmap4.php?mp=2209&a_id=620&y=1826' title='М. Е. Салтыков-Щедрин
Писатель
Сатира, 
Абсурд, Реализм
RUS
1826-1889
MY: 0/0
MX: 2209
WN: 16
RAT: 18745'><div class=area style='position:absolute; width:36px; height:20px; left:2265px; top:350px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1146&a_id=134&y=1828' title='Жюль Верн
Писатель
Приключения, Фантастика, 
Твердая научная фантастика
FRA
1828-1905
MY: 0/1
MX: 1146
WN: 12
RAT: 58782'><div class=area style='position:absolute; width:21px; height:20px; left:1165px; top:371px'></div></a>
<a  href='build-rlmap4.php?mp=1146&a_id=134&y=1828' title='Жюль Верн
Писатель
Приключения, Фантастика, 
Твердая научная фантастика
FRA
1828-1905
MY: 0/1
MX: 1146
WN: 12
RAT: 58782'><div class=area style='position:absolute; width:20px; height:20px; left:1186px; top:371px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=699&y=1828' title='Л. Н. Толстой
Писатель
Реализм, Философия, 
Анархизм, Религия
RUS
1828-1910
MY: 0/8
MX: 1302
WN: 35
RAT: 583017'><div class=area style='position:absolute; width:38px; height:20px; left:1321px; top:390px'></div></a>
<a  href='build-rlmap4.php?mp=1302&a_id=699&y=1828' title='Л. Н. Толстой
Писатель
Реализм, Философия, 
Анархизм, Религия
RUS
1828-1910
MY: 0/8
MX: 1302
WN: 35
RAT: 583017'><div class=area style='position:absolute; width:37px; height:20px; left:1359px; top:390px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1468&a_id=787&y=1828' title='Н. Г. Чернышевский
Философ
Реализм, Философия
RUS
1828-1889
MY: 0/0
MX: 1468
WN: 3
RAT: 8385'><div class=area style='position:absolute; width:31px; height:20px; left:1487px; top:352px'></div></a>
<a  href='build-rlmap4.php?mp=1468&a_id=787&y=1828' title='Н. Г. Чернышевский
Философ
Реализм, Философия
RUS
1828-1889
MY: 0/0
MX: 1468
WN: 3
RAT: 8385'><div class=area style='position:absolute; width:30px; height:20px; left:1518px; top:352px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2056&a_id=433&y=1830' title='Гектор Мало

Детская, Для подростков, 
Приключения
FRA
1830-1907
MY: 0/0
MX: 2056
WN: 1
RAT: 2079'><div class=area style='position:absolute; width:20px; height:20px; left:2075px; top:373px'></div></a>
<a  href='build-rlmap4.php?mp=2056&a_id=433&y=1830' title='Гектор Мало

Детская, Для подростков, 
Приключения
FRA
1830-1907
MY: 0/0
MX: 2056
WN: 1
RAT: 2079'><div class=area style='position:absolute; width:20px; height:20px; left:2095px; top:373px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=396&y=1831' title='Николай Лесков
Писатель
Реализм, 
История, Сатира
RUS
1831-1895
MY: 0/3
MX: 1302
WN: 15
RAT: 28719'><div class=area style='position:absolute; width:28px; height:20px; left:1321px; top:367px'></div></a>
<a  href='build-rlmap4.php?mp=1302&a_id=396&y=1831' title='Николай Лесков
Писатель
Реализм, 
История, Сатира
RUS
1831-1895
MY: 0/3
MX: 1302
WN: 15
RAT: 28719'><div class=area style='position:absolute; width:28px; height:20px; left:1349px; top:367px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2361&a_id=375&y=1832' title='Льюис Кэрролл
Писатель
Абсурд, 
Детская, Неоромантизм, Приключения, Философия
BRI
1832-1898
MY: 0/0
MX: 2361
WN: 4
RAT: 26483'><div class=area style='position:absolute; width:32px; height:20px; left:2380px; top:365px'></div></a>
<a  href='build-rlmap4.php?mp=2361&a_id=375&y=1832' title='Льюис Кэрролл
Писатель
Абсурд, 
Детская, Неоромантизм, Приключения, Философия
BRI
1832-1898
MY: 0/0
MX: 2361
WN: 4
RAT: 26483'><div class=area style='position:absolute; width:31px; height:20px; left:2412px; top:365px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1146&a_id=684&y=1835' title='Марк Твен
Писатель
Приключения, Реализм, 
Гуманизм, Демократия, Критический реализм, Сатира, Фантастика, Юмор
USA
1835-1910
MY: 0/17
MX: 1146
WN: 6
RAT: 62626'><div class=area style='position:absolute; width:21px; height:20px; left:1165px; top:417px'></div></a>
<a  href='build-rlmap4.php?mp=1146&a_id=684&y=1835' title='Марк Твен
Писатель
Приключения, Реализм, 
Гуманизм, Демократия, Критический реализм, Сатира, Фантастика, Юмор
USA
1835-1910
MY: 0/17
MX: 1146
WN: 6
RAT: 62626'><div class=area style='position:absolute; width:20px; height:20px; left:1186px; top:417px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1067&a_id=246&y=1840' title='Альфонс Доде
Романист
Натурализм, 
Драматургия
FRA
1840-1897
MY: 0/-9
MX: 1067
WN: 1
RAT: 1005'><div class=area style='position:absolute; width:20px; height:20px; left:1086px; top:354px'></div></a>
<a  href='build-rlmap4.php?mp=1067&a_id=246&y=1840' title='Альфонс Доде
Романист
Натурализм, 
Драматургия
FRA
1840-1897
MY: 0/-9
MX: 1067
WN: 1
RAT: 1005'><div class=area style='position:absolute; width:20px; height:20px; left:1106px; top:354px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1067&a_id=282&y=1840' title='Эмиль Золя
Писатель
Натурализм, 
Драматургия, Импрессионизм, Публицистика, Реализм
FRA
1840-1902
MY: 0/0
MX: 1067
WN: 14
RAT: 3385'><div class=area style='position:absolute; width:19px; height:20px; left:1086px; top:377px'></div></a>
<a  href='build-rlmap4.php?mp=1067&a_id=282&y=1840' title='Эмиль Золя
Писатель
Натурализм, 
Драматургия, Импрессионизм, Публицистика, Реализм
FRA
1840-1902
MY: 0/0
MX: 1067
WN: 14
RAT: 3385'><div class=area style='position:absolute; width:18px; height:20px; left:1105px; top:377px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1468&a_id=510&y=1844' title='Фридрих Ницше
Филолог
Философия, 
Экзистенциализм
DEU
1844-1900
MY: 0/0
MX: 1468
WN: 8
RAT: 4336'><div class=area style='position:absolute; width:25px; height:20px; left:1487px; top:379px'></div></a>
<a  href='build-rlmap4.php?mp=1468&a_id=510&y=1844' title='Фридрих Ницше
Филолог
Философия, 
Экзистенциализм
DEU
1844-1900
MY: 0/0
MX: 1468
WN: 8
RAT: 4336'><div class=area style='position:absolute; width:24px; height:20px; left:1512px; top:379px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1219&a_id=633&y=1846' title='Генрик Сенкевич
Писатель
История, 
Беллетристика, О войне, О любви
POL
1846-1916
MY: 0/-3
MX: 1219
WN: 7
RAT: 2021'><div class=area style='position:absolute; width:33px; height:20px; left:1238px; top:392px'></div></a>
<a  href='build-rlmap4.php?mp=1219&a_id=633&y=1846' title='Генрик Сенкевич
Писатель
История, 
Беллетристика, О войне, О любви
POL
1846-1916
MY: 0/-3
MX: 1219
WN: 7
RAT: 2021'><div class=area style='position:absolute; width:32px; height:20px; left:1271px; top:392px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1766&a_id=1092&y=1847' title='Брэм Стокер
Романист
Готика, Хоррор, 
Приключения, Фантастика
BRI
1847-1912
MY: 0/0
MX: 1766
WN: 2
RAT: 1065'><div class=area style='position:absolute; width:25px; height:20px; left:1785px; top:396px'></div></a>
<a  href='build-rlmap4.php?mp=1766&a_id=1092&y=1847' title='Брэм Стокер
Романист
Готика, Хоррор, 
Приключения, Фантастика
BRI
1847-1912
MY: 0/0
MX: 1766
WN: 2
RAT: 1065'><div class=area style='position:absolute; width:24px; height:20px; left:1810px; top:396px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1067&a_id=477&y=1850' title='Ги де Мопассан
Новеллист
Натурализм, 
О любви, Эротика
FRA
1850-1893
MY: 0/10
MX: 1067
WN: 5
RAT: 5146'><div class=area style='position:absolute; width:34px; height:20px; left:1086px; top:400px'></div></a>
<a  href='build-rlmap4.php?mp=1067&a_id=477&y=1850' title='Ги де Мопассан
Новеллист
Натурализм, 
О любви, Эротика
FRA
1850-1893
MY: 0/10
MX: 1067
WN: 5
RAT: 5146'><div class=area style='position:absolute; width:34px; height:20px; left:1120px; top:400px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1146&a_id=664&y=1850' title='Р. Л. Стивенсон
Писатель
Неоромантизм, Приключения, 
Детская, История, Фантастика, Хоррор
BRI
1850-1894
MY: 0/7
MX: 1146
WN: 8
RAT: 29109'><div class=area style='position:absolute; width:33px; height:20px; left:1165px; top:394px'></div></a>
<a  href='build-rlmap4.php?mp=1146&a_id=664&y=1850' title='Р. Л. Стивенсон
Писатель
Неоромантизм, Приключения, 
Детская, История, Фантастика, Хоррор
BRI
1850-1894
MY: 0/7
MX: 1146
WN: 8
RAT: 29109'><div class=area style='position:absolute; width:33px; height:20px; left:1198px; top:394px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=359&y=1853' title='Владимир Короленко
Журналист
Нон-конформизм, Реализм, 
Народничество, Психология, Публицистика, Революционер, Социализм, Философия
RUS
1853-1921
MY: 0/1
MX: 1302
WN: 9
RAT: 7341'><div class=area style='position:absolute; width:36px; height:20px; left:1321px; top:413px'></div></a>
<a  href='build-rlmap4.php?mp=1302&a_id=359&y=1853' title='Владимир Короленко
Журналист
Нон-конформизм, Реализм, 
Народничество, Психология, Публицистика, Революционер, Социализм, Философия
RUS
1853-1921
MY: 0/1
MX: 1302
WN: 9
RAT: 7341'><div class=area style='position:absolute; width:35px; height:20px; left:1357px; top:413px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=76&a_id=714&y=1854' title='Оскар Уайльд
Писатель
Декаданс, 
Анархизм, Готика, Импрессионизм, Эстетизм
BRI
1854-1900
MY: 0/0
MX: 76
WN: 11
RAT: 20669'><div class=area style='position:absolute; width:30px; height:20px; left:95px; top:390px'></div></a>
<a  href='build-rlmap4.php?mp=76&a_id=714&y=1854' title='Оскар Уайльд
Писатель
Декаданс, 
Анархизм, Готика, Импрессионизм, Эстетизм
BRI
1854-1900
MY: 0/0
MX: 76
WN: 11
RAT: 20669'><div class=area style='position:absolute; width:29px; height:20px; left:125px; top:390px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1219&a_id=1037&y=1855' title='Владимир Гиляровский
Писатель
История, Реализм, 
Беллетристика
RUS
1855-1935
MY: 0/-6
MX: 1219
WN: 2
RAT: 7772'><div class=area style='position:absolute; width:37px; height:20px; left:1238px; top:415px'></div></a>
<a  href='build-rlmap4.php?mp=1219&a_id=1037&y=1855' title='Владимир Гиляровский
Писатель
История, Реализм, 
Беллетристика
RUS
1855-1935
MY: 0/-6
MX: 1219
WN: 2
RAT: 7772'><div class=area style='position:absolute; width:36px; height:20px; left:1275px; top:415px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1622&a_id=1074&y=1856' title='Жозеф Анри Рони-старший

Фантастика, 
Приключения, Фэнтези
FRA
1856-1940
MY: 0/-15
MX: 1622
WN: 1
RAT: 1605'><div class=area style='position:absolute; width:19px; height:20px; left:1641px; top:402px'></div></a>
<a  href='build-rlmap4.php?mp=1622&a_id=1074&y=1856' title='Жозеф Анри Рони-старший

Фантастика, 
Приключения, Фэнтези
FRA
1856-1940
MY: 0/-15
MX: 1622
WN: 1
RAT: 1605'><div class=area style='position:absolute; width:19px; height:20px; left:1660px; top:402px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1903&a_id=378&y=1858' title='Сельма Лагерлёф
Писательница
Детская, 
История, Фантастика
SWE
1858-1940
MY: 0/0
MX: 1903
WN: 2
RAT: 4831'><div class=area style='position:absolute; width:27px; height:20px; left:1922px; top:436px'></div></a>
<a  href='build-rlmap4.php?mp=1903&a_id=378&y=1858' title='Сельма Лагерлёф
Писательница
Детская, 
История, Фантастика
SWE
1858-1940
MY: 0/0
MX: 1903
WN: 2
RAT: 4831'><div class=area style='position:absolute; width:27px; height:20px; left:1949px; top:436px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=236&y=1859' title='Джером К. Джером
Писатель
Юмор, 
Сатира
BRI
1859-1927
MY: 0/2
MX: 2209
WN: 3
RAT: 9046'><div class=area style='position:absolute; width:29px; height:20px; left:2228px; top:428px'></div></a>
<a  href='build-rlmap4.php?mp=2209&a_id=236&y=1859' title='Джером К. Джером
Писатель
Юмор, 
Сатира
BRI
1859-1927
MY: 0/2
MX: 2209
WN: 3
RAT: 9046'><div class=area style='position:absolute; width:28px; height:20px; left:2257px; top:428px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=667&a_id=247&y=1859' title='Артур Конан Дойл
Писатель
Детектив, 
История, Фантастика
BRI
1859-1930
MY: 0/0
MX: 667
WN: 69
RAT: 84296'><div class=area style='position:absolute; width:21px; height:20px; left:686px; top:428px'></div></a>
<a  href='build-rlmap4.php?mp=667&a_id=247&y=1859' title='Артур Конан Дойл
Писатель
Детектив, 
История, Фантастика
BRI
1859-1930
MY: 0/0
MX: 667
WN: 69
RAT: 84296'><div class=area style='position:absolute; width:21px; height:20px; left:707px; top:428px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2432&a_id=789&y=1860' title='Антон Павлович Чехов
Писатель
Модернизм, Новая драма, Реализм, 
Беллетристика, Критический реализм
RUS
1860-1904
MY: 0/-23
MX: 2432
WN: 47
RAT: 215027'><div class=area style='position:absolute; width:25px; height:20px; left:2451px; top:352px'></div></a>
<a  href='build-rlmap4.php?mp=2432&a_id=789&y=1860' title='Антон Павлович Чехов
Писатель
Модернизм, Новая драма, Реализм, 
Беллетристика, Критический реализм
RUS
1860-1904
MY: 0/-23
MX: 2432
WN: 47
RAT: 215027'><div class=area style='position:absolute; width:24px; height:20px; left:2476px; top:352px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=996&a_id=1048&y=1860' title='Эрнест Сетон-Томпсон
Писатель
О животных, 
Детская, Индейцы, Приключения
CAN
1860-1946
MY: 0/0
MX: 996
WN: 1
RAT: 4678'><div class=area style='position:absolute; width:30px; height:20px; left:1015px; top:444px'></div></a>
<a  href='build-rlmap4.php?mp=996&a_id=1048&y=1860' title='Эрнест Сетон-Томпсон
Писатель
О животных, 
Детская, Индейцы, Приключения
CAN
1860-1946
MY: 0/0
MX: 996
WN: 1
RAT: 4678'><div class=area style='position:absolute; width:30px; height:20px; left:1045px; top:444px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=229&a_id=461&y=1862' title='Морис Метерлинк
Писатель
Новая драма, Символизм, 
Драматургия, Импрессионизм, Сказка, Философия
BEL
1862-1949
MY: 0/0
MX: 229
WN: 4
RAT: 3463'><div class=area style='position:absolute; width:37px; height:20px; left:248px; top:451px'></div></a>
<a  href='build-rlmap4.php?mp=229&a_id=461&y=1862' title='Морис Метерлинк
Писатель
Новая драма, Символизм, 
Драматургия, Импрессионизм, Сказка, Философия
BEL
1862-1949
MY: 0/0
MX: 229
WN: 4
RAT: 3463'><div class=area style='position:absolute; width:36px; height:20px; left:285px; top:451px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=518&y=1862' title='О. Генри

Юмор, 
Вестерн
USA
1862-1910
MY: 0/-2
MX: 2209
WN: 26
RAT: 11617'><div class=area style='position:absolute; width:24px; height:20px; left:2228px; top:404px'></div></a>
<a  href='build-rlmap4.php?mp=2209&a_id=518&y=1862' title='О. Генри

Юмор, 
Вестерн
USA
1862-1910
MY: 0/-2
MX: 2209
WN: 26
RAT: 11617'><div class=area style='position:absolute; width:23px; height:20px; left:2252px; top:404px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1622&a_id=1043&y=1863' title='Владимир Обручев
Геолог
Фантастика, 
Приключения
RUS
1863-1956
MY: 0/-16
MX: 1622
WN: 2
RAT: 6362'><div class=area style='position:absolute; width:30px; height:20px; left:1641px; top:425px'></div></a>
<a  href='build-rlmap4.php?mp=1622&a_id=1043&y=1863' title='Владимир Обручев
Геолог
Фантастика, 
Приключения
RUS
1863-1956
MY: 0/-16
MX: 1622
WN: 2
RAT: 6362'><div class=area style='position:absolute; width:30px; height:20px; left:1671px; top:425px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1219&a_id=144&y=1864' title='Этель Лилиан Войнич
Писательница
История, 
Викторианская эпоха, О любви, Приключения, Революция
BRI
1864-1960
MY: 0/-1
MX: 1219
WN: 3
RAT: 6787'><div class=area style='position:absolute; width:26px; height:20px; left:1238px; top:461px'></div></a>
<a  href='build-rlmap4.php?mp=1219&a_id=144&y=1864' title='Этель Лилиан Войнич
Писательница
История, 
Викторианская эпоха, О любви, Приключения, Революция
BRI
1864-1960
MY: 0/-1
MX: 1219
WN: 3
RAT: 6787'><div class=area style='position:absolute; width:26px; height:20px; left:1264px; top:461px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2432&a_id=337&y=1865' title='Редьярд Киплинг
Писатель
Детская, Модернизм, Неоромантизм, 
История, Приключения
BRI
1865-1936
MY: 0/-20
MX: 2432
WN: 4
RAT: 6775'><div class=area style='position:absolute; width:29px; height:20px; left:2451px; top:398px'></div></a>
<a  href='build-rlmap4.php?mp=2432&a_id=337&y=1865' title='Редьярд Киплинг
Писатель
Детская, Модернизм, Неоромантизм, 
История, Приключения
BRI
1865-1936
MY: 0/-20
MX: 2432
WN: 4
RAT: 6775'><div class=area style='position:absolute; width:28px; height:20px; left:2480px; top:398px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1838&a_id=724&y=1866' title='Герберт Уэллс
Писатель
Твердая научная фантастика, 
История, Критический реализм, Философия
BRI
1866-1946
MY: 0/0
MX: 1838
WN: 14
RAT: 22114'><div class=area style='position:absolute; width:25px; height:20px; left:1857px; top:451px'></div></a>
<a  href='build-rlmap4.php?mp=1838&a_id=724&y=1866' title='Герберт Уэллс
Писатель
Твердая научная фантастика, 
История, Критический реализм, Философия
BRI
1866-1946
MY: 0/0
MX: 1838
WN: 14
RAT: 22114'><div class=area style='position:absolute; width:24px; height:20px; left:1882px; top:451px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=742&a_id=197&y=1868' title='Максим Горький
Писатель
Соцреализм, 
Модернизм, Поэзия, Романтизм
RUS
1868-1936
MY: 0/0
MX: 742
WN: 24
RAT: 18529'><div class=area style='position:absolute; width:31px; height:20px; left:761px; top:442px'></div></a>
<a  href='build-rlmap4.php?mp=742&a_id=197&y=1868' title='Максим Горький
Писатель
Соцреализм, 
Модернизм, Поэзия, Романтизм
RUS
1868-1936
MY: 0/0
MX: 742
WN: 24
RAT: 18529'><div class=area style='position:absolute; width:31px; height:20px; left:792px; top:442px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2056&a_id=1071&y=1868' title='Элинор Портер
Писательница-романистка
Детская, Для подростков
USA
1868-1920
MY: 0/-3
MX: 2056
WN: 1
RAT: 1830'><div class=area style='position:absolute; width:32px; height:20px; left:2075px; top:419px'></div></a>
<a  href='build-rlmap4.php?mp=2056&a_id=1071&y=1868' title='Элинор Портер
Писательница-романистка
Детская, Для подростков
USA
1868-1920
MY: 0/-3
MX: 2056
WN: 1
RAT: 1830'><div class=area style='position:absolute; width:31px; height:20px; left:2107px; top:419px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=109&y=1870' title='И. А. Бунин
Писатель
Реализм, 
О любви, Романтизм
RUS
1870-1953
MY: 0/-8
MX: 1302
WN: 33
RAT: 14701'><div class=area style='position:absolute; width:24px; height:20px; left:1321px; top:446px'></div></a>
<a  href='build-rlmap4.php?mp=1302&a_id=109&y=1870' title='И. А. Бунин
Писатель
Реализм, 
О любви, Романтизм
RUS
1870-1953
MY: 0/-8
MX: 1302
WN: 33
RAT: 14701'><div class=area style='position:absolute; width:24px; height:20px; left:1345px; top:446px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1067&a_id=372&y=1870' title='А. И. Куприн

Натурализм, Реализм
RUS
1870-1938
MY: 0/4
MX: 1067
WN: 28
RAT: 28458'><div class=area style='position:absolute; width:28px; height:20px; left:1086px; top:455px'></div></a>
<a  href='build-rlmap4.php?mp=1067&a_id=372&y=1870' title='А. И. Куприн

Натурализм, Реализм
RUS
1870-1938
MY: 0/4
MX: 1067
WN: 28
RAT: 28458'><div class=area style='position:absolute; width:27px; height:20px; left:1114px; top:455px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2506&a_id=22&y=1871' title='Леонид Андреев
Писатель
Экспрессионизм, 
Модернизм, Натурализм, Реализм, Символизм, Фантастика, Хоррор
RUS
1871-1919
MY: 0/0
MX: 2506
WN: 14
RAT: 4601'><div class=area style='position:absolute; width:28px; height:20px; left:2525px; top:428px'></div></a>
<a  href='build-rlmap4.php?mp=2506&a_id=22&y=1871' title='Леонид Андреев
Писатель
Экспрессионизм, 
Модернизм, Натурализм, Реализм, Символизм, Фантастика, Хоррор
RUS
1871-1919
MY: 0/0
MX: 2506
WN: 14
RAT: 4601'><div class=area style='position:absolute; width:28px; height:20px; left:2553px; top:428px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=450&a_id=252&y=1871' title='Теодор Драйзер
Писатель
Критический реализм, Натурализм
USA
1871-1945
MY: 0/0
MX: 450
WN: 7
RAT: 28841'><div class=area style='position:absolute; width:33px; height:20px; left:469px; top:455px'></div></a>
<a  href='build-rlmap4.php?mp=450&a_id=252&y=1871' title='Теодор Драйзер
Писатель
Критический реализм, Натурализм
USA
1871-1945
MY: 0/0
MX: 450
WN: 7
RAT: 28841'><div class=area style='position:absolute; width:32px; height:20px; left:502px; top:455px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2432&a_id=579&y=1871' title='Марсель Пруст
Писатель
Модернизм, 
Психология
FRA
1871-1922
MY: 0/-27
MX: 2432
WN: 8
RAT: 9235'><div class=area style='position:absolute; width:22px; height:20px; left:2451px; top:375px'></div></a>
<a  href='build-rlmap4.php?mp=2432&a_id=579&y=1871' title='Марсель Пруст
Писатель
Модернизм, 
Психология
FRA
1871-1922
MY: 0/-27
MX: 2432
WN: 8
RAT: 9235'><div class=area style='position:absolute; width:22px; height:20px; left:2473px; top:375px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1067&a_id=1081&y=1872' title='Владимир Арсеньев
Географ
Натурализм, Приключения, 
Путешествия
RUS
1872-1930
MY: 0/-4
MX: 1067
WN: 1
RAT: 1334'><div class=area style='position:absolute; width:34px; height:20px; left:1086px; top:432px'></div></a>
<a  href='build-rlmap4.php?mp=1067&a_id=1081&y=1872' title='Владимир Арсеньев
Географ
Натурализм, Приключения, 
Путешествия
RUS
1872-1930
MY: 0/-4
MX: 1067
WN: 1
RAT: 1334'><div class=area style='position:absolute; width:34px; height:20px; left:1120px; top:432px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=996&a_id=577&y=1873' title='Михаил Пришвин
Писатель
О природе, 
Детская, История, О животных, Публицистика, Философия
RUS
1873-1954
MY: 0/0
MX: 996
WN: 12
RAT: 1089'><div class=area style='position:absolute; width:32px; height:20px; left:1015px; top:467px'></div></a>
<a  href='build-rlmap4.php?mp=996&a_id=577&y=1873' title='Михаил Пришвин
Писатель
О природе, 
Детская, История, О животных, Публицистика, Философия
RUS
1873-1954
MY: 0/0
MX: 996
WN: 12
RAT: 1089'><div class=area style='position:absolute; width:31px; height:20px; left:1047px; top:467px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1544&a_id=813&y=1873' title='Иван Шмелёв
Писатель
Духовный реализм, Религия, 
Консерватизм, Реализм
RUS
1873-1950
MY: 0/0
MX: 1544
WN: 5
RAT: 3576'><div class=area style='position:absolute; width:28px; height:20px; left:1563px; top:463px'></div></a>
<a  href='build-rlmap4.php?mp=1544&a_id=813&y=1873' title='Иван Шмелёв
Писатель
Духовный реализм, Религия, 
Консерватизм, Реализм
RUS
1873-1950
MY: 0/0
MX: 1544
WN: 5
RAT: 3576'><div class=area style='position:absolute; width:28px; height:20px; left:1591px; top:463px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1067&a_id=484&y=1874' title='Сомерсет Моэм
Писатель
Натурализм, 
Путешествия
BRI
1874-1965
MY: 0/0
MX: 1067
WN: 8
RAT: 6187'><div class=area style='position:absolute; width:21px; height:20px; left:1086px; top:480px'></div></a>
<a  href='build-rlmap4.php?mp=1067&a_id=484&y=1874' title='Сомерсет Моэм
Писатель
Натурализм, 
Путешествия
BRI
1874-1965
MY: 0/0
MX: 1067
WN: 8
RAT: 6187'><div class=area style='position:absolute; width:21px; height:20px; left:1107px; top:480px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1395&a_id=440&y=1875' title='Томас Манн
Писатель
Психология, 
Импрессионизм, Литература изгнания, Модернизм, Символизм, Философия
DEU
1875-1955
MY: 0/0
MX: 1395
WN: 13
RAT: 24327'><div class=area style='position:absolute; width:28px; height:20px; left:1414px; top:470px'></div></a>
<a  href='build-rlmap4.php?mp=1395&a_id=440&y=1875' title='Томас Манн
Писатель
Психология, 
Импрессионизм, Литература изгнания, Модернизм, Символизм, Философия
DEU
1875-1955
MY: 0/0
MX: 1395
WN: 13
RAT: 24327'><div class=area style='position:absolute; width:28px; height:20px; left:1442px; top:470px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1146&a_id=1052&y=1875' title='Рафаэль Сабатини
Писатель
История, Приключения, 
Море, О любви
BRI
1875-1950
MY: 0/0
MX: 1146
WN: 4
RAT: 3335'><div class=area style='position:absolute; width:32px; height:20px; left:1165px; top:465px'></div></a>
<a  href='build-rlmap4.php?mp=1146&a_id=1052&y=1875' title='Рафаэль Сабатини
Писатель
История, Приключения, 
Море, О любви
BRI
1875-1950
MY: 0/0
MX: 1146
WN: 4
RAT: 3335'><div class=area style='position:absolute; width:32px; height:20px; left:1197px; top:465px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1146&a_id=412&y=1876' title='Джек Лондон
Писатель
Натурализм, Приключения, Реализм, 
О животных, Социализм
USA
1876-1916
MY: 0/5
MX: 1146
WN: 20
RAT: 74150'><div class=area style='position:absolute; width:29px; height:20px; left:1165px; top:440px'></div></a>
<a  href='build-rlmap4.php?mp=1146&a_id=412&y=1876' title='Джек Лондон
Писатель
Натурализм, Приключения, Реализм, 
О животных, Социализм
USA
1876-1916
MY: 0/5
MX: 1146
WN: 20
RAT: 74150'><div class=area style='position:absolute; width:29px; height:20px; left:1194px; top:440px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1468&a_id=179&y=1877' title='Герман Гессе
Писатель
Модернизм, Философия, 
Мистицизм
DEU
1877-1962
MY: 0/0
MX: 1468
WN: 9
RAT: 21638'><div class=area style='position:absolute; width:23px; height:20px; left:1487px; top:480px'></div></a>
<a  href='build-rlmap4.php?mp=1468&a_id=179&y=1877' title='Герман Гессе
Писатель
Модернизм, Философия, 
Мистицизм
DEU
1877-1962
MY: 0/0
MX: 1468
WN: 9
RAT: 21638'><div class=area style='position:absolute; width:23px; height:20px; left:1510px; top:480px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1219&a_id=1047&y=1877' title='Николай Кун
Писатель
История, 
Детская
RUS
1877-1940
MY: 0/-9
MX: 1219
WN: 1
RAT: 4708'><div class=area style='position:absolute; width:15px; height:20px; left:1238px; top:438px'></div></a>
<a  href='build-rlmap4.php?mp=1219&a_id=1047&y=1877' title='Николай Кун
Писатель
История, 
Детская
RUS
1877-1940
MY: 0/-9
MX: 1219
WN: 1
RAT: 4708'><div class=area style='position:absolute; width:15px; height:20px; left:1253px; top:438px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2134&a_id=41&y=1879' title='Павел Петрович Бажов
Писатель
Детская, 
Сказка, Соцреализм
RUS
1879-1950
MY: 0/-15
MX: 2134
WN: 5
RAT: 2163'><div class=area style='position:absolute; width:24px; height:20px; left:2153px; top:438px'></div></a>
<a  href='build-rlmap4.php?mp=2134&a_id=41&y=1879' title='Павел Петрович Бажов
Писатель
Детская, 
Сказка, Соцреализм
RUS
1879-1950
MY: 0/-15
MX: 2134
WN: 5
RAT: 2163'><div class=area style='position:absolute; width:23px; height:20px; left:2177px; top:438px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=358&a_id=211&y=1880' title='Александр Грин
Писатель
Беллетристика, Неоромантизм, 
Философия, Фантастика, Символизм, Психология, Приключения, О любви, Детская, Фэнтези
RUS
1880-1932
MY: 0/0
MX: 358
WN: 15
RAT: 25010'><div class=area style='position:absolute; width:27px; height:20px; left:377px; top:451px'></div></a>
<a  href='build-rlmap4.php?mp=358&a_id=211&y=1880' title='Александр Грин
Писатель
Беллетристика, Неоромантизм, 
Философия, Фантастика, Символизм, Психология, Приключения, О любви, Детская, Фэнтези
RUS
1880-1932
MY: 0/0
MX: 358
WN: 15
RAT: 25010'><div class=area style='position:absolute; width:26px; height:20px; left:404px; top:451px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1219&a_id=777&y=1881' title='Стефан Цвейг
Автор
История, 
Биография, Импрессионизм, О любви, Пацифизм
DEU
1881-1942
MY: 0/10
MX: 1219
WN: 12
RAT: 6735'><div class=area style='position:absolute; width:23px; height:20px; left:1238px; top:484px'></div></a>
<a  href='build-rlmap4.php?mp=1219&a_id=777&y=1881' title='Стефан Цвейг
Автор
История, 
Биография, Импрессионизм, О любви, Пацифизм
DEU
1881-1942
MY: 0/10
MX: 1219
WN: 12
RAT: 6735'><div class=area style='position:absolute; width:22px; height:20px; left:1261px; top:484px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2432&a_id=153&y=1882' title='Вирджиния Вулф
Писательница
Модернизм, 
Феминизм
BRI
1882-1941
MY: 0/-20
MX: 2432
WN: 6
RAT: 1001'><div class=area style='position:absolute; width:27px; height:20px; left:2451px; top:421px'></div></a>
<a  href='build-rlmap4.php?mp=2432&a_id=153&y=1882' title='Вирджиния Вулф
Писательница
Модернизм, 
Феминизм
BRI
1882-1941
MY: 0/-20
MX: 2432
WN: 6
RAT: 1001'><div class=area style='position:absolute; width:26px; height:20px; left:2478px; top:421px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2432&a_id=238&y=1882' title='Джеймс Джойс
Писатель
Модернизм, 
Абсурд, Авангард, Агностицизм
IRL
1882-1941
MY: 0/-9
MX: 2432
WN: 2
RAT: 3154'><div class=area style='position:absolute; width:24px; height:20px; left:2451px; top:444px'></div></a>
<a  href='build-rlmap4.php?mp=2432&a_id=238&y=1882' title='Джеймс Джойс
Писатель
Модернизм, 
Абсурд, Авангард, Агностицизм
IRL
1882-1941
MY: 0/-9
MX: 2432
WN: 2
RAT: 3154'><div class=area style='position:absolute; width:24px; height:20px; left:2475px; top:444px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2134&a_id=464&y=1882' title='Алан А. Милн
Писатель
Детская
BRI
1882-1956
MY: 0/-8
MX: 2134
WN: 3
RAT: 3865'><div class=area style='position:absolute; width:20px; height:20px; left:2153px; top:461px'></div></a>
<a  href='build-rlmap4.php?mp=2134&a_id=464&y=1882' title='Алан А. Милн
Писатель
Детская
BRI
1882-1956
MY: 0/-8
MX: 2134
WN: 3
RAT: 3865'><div class=area style='position:absolute; width:20px; height:20px; left:2173px; top:461px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=170&y=1883' title='Ярослав Гашек
Писатель
О войне, Юмор, 
Анархизм, История, Сатира
CZE
1883-1923
MY: 0/3
MX: 2209
WN: 2
RAT: 23746'><div class=area style='position:absolute; width:25px; height:20px; left:2228px; top:451px'></div></a>
<a  href='build-rlmap4.php?mp=2209&a_id=170&y=1883' title='Ярослав Гашек
Писатель
О войне, Юмор, 
Анархизм, История, Сатира
CZE
1883-1923
MY: 0/3
MX: 2209
WN: 2
RAT: 23746'><div class=area style='position:absolute; width:24px; height:20px; left:2253px; top:451px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1701&a_id=321&y=1883' title='Франц Кафка
Писатель
Абсурд, Антиутопия, 
Анархизм, Атеизм, Магический реализм, Модернизм, Фантастика, Философия, Экзистенциализм
DEU
1883-1924
MY: 0/-2
MX: 1701
WN: 6
RAT: 21240'><div class=area style='position:absolute; width:26px; height:20px; left:1720px; top:442px'></div></a>
<a  href='build-rlmap4.php?mp=1701&a_id=321&y=1883' title='Франц Кафка
Писатель
Абсурд, Антиутопия, 
Анархизм, Атеизм, Магический реализм, Модернизм, Фантастика, Философия, Экзистенциализм
DEU
1883-1924
MY: 0/-2
MX: 1701
WN: 6
RAT: 21240'><div class=area style='position:absolute; width:25px; height:20px; left:1746px; top:442px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=700&y=1883' title='А. Н. Толстой
Писатель
История, Реализм, Соцреализм, 
Детская, Фантастика
RUS
1883-1945
MY: 0/1
MX: 1302
WN: 5
RAT: 1000'><div class=area style='position:absolute; width:35px; height:20px; left:1321px; top:470px'></div></a>
<a  href='build-rlmap4.php?mp=1302&a_id=700&y=1883' title='А. Н. Толстой
Писатель
История, Реализм, Соцреализм, 
Детская, Фантастика
RUS
1883-1945
MY: 0/1
MX: 1302
WN: 5
RAT: 1000'><div class=area style='position:absolute; width:34px; height:20px; left:1356px; top:470px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1622&a_id=63&y=1884' title='Александр Беляев
Писатель
Фантастика, 
Твердая научная фантастика
RUS
1884-1942
MY: 0/-8
MX: 1622
WN: 5
RAT: 32174'><div class=area style='position:absolute; width:36px; height:20px; left:1641px; top:449px'></div></a>
<a  href='build-rlmap4.php?mp=1622&a_id=63&y=1884' title='Александр Беляев
Писатель
Фантастика, 
Твердая научная фантастика
RUS
1884-1942
MY: 0/-8
MX: 1622
WN: 5
RAT: 32174'><div class=area style='position:absolute; width:35px; height:20px; left:1677px; top:449px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1701&a_id=277&y=1884' title='Евгений Замятин
Писатель
Антиутопия, Реализм, Фантастика, 
Политика, Сатира
RUS
1884-1937
MY: 0/2
MX: 1701
WN: 7
RAT: 6668'><div class=area style='position:absolute; width:29px; height:20px; left:1720px; top:465px'></div></a>
<a  href='build-rlmap4.php?mp=1701&a_id=277&y=1884' title='Евгений Замятин
Писатель
Антиутопия, Реализм, Фантастика, 
Политика, Сатира
RUS
1884-1937
MY: 0/2
MX: 1701
WN: 7
RAT: 6668'><div class=area style='position:absolute; width:29px; height:20px; left:1749px; top:465px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2056&a_id=425&y=1888' title='А. С. Макаренко
Педагог
Педагогика, 
Для подростков
RUS
1888-1939
MY: 0/-12
MX: 2056
WN: 2
RAT: 6965'><div class=area style='position:absolute; width:35px; height:20px; left:2075px; top:442px'></div></a>
<a  href='build-rlmap4.php?mp=2056&a_id=425&y=1888' title='А. С. Макаренко
Педагог
Педагогика, 
Для подростков
RUS
1888-1939
MY: 0/-12
MX: 2056
WN: 2
RAT: 6965'><div class=area style='position:absolute; width:34px; height:20px; left:2110px; top:442px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=667&a_id=367&y=1890' title='Агата Кристи
Писательница
Беллетристика, Детектив, 
Приключения
BRI
1890-1976
MY: 0/-4
MX: 667
WN: 33
RAT: 10068'><div class=area style='position:absolute; width:27px; height:20px; left:686px; top:499px'></div></a>
<a  href='build-rlmap4.php?mp=667&a_id=367&y=1890' title='Агата Кристи
Писательница
Беллетристика, Детектив, 
Приключения
BRI
1890-1976
MY: 0/-4
MX: 667
WN: 33
RAT: 10068'><div class=area style='position:absolute; width:26px; height:20px; left:713px; top:499px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2432&a_id=544&y=1890' title='Борис Пастернак
Писатель
Футуризм, 
История, Нон-конформизм, Поэзия, Реализм, Элегия
RUS
1890-1960
MY: 0/-11
MX: 2432
WN: 3
RAT: 21470'><div class=area style='position:absolute; width:33px; height:20px; left:2451px; top:467px'></div></a>
<a  href='build-rlmap4.php?mp=2432&a_id=544&y=1890' title='Борис Пастернак
Писатель
Футуризм, 
История, Нон-конформизм, Поэзия, Реализм, Элегия
RUS
1890-1960
MY: 0/-11
MX: 2432
WN: 3
RAT: 21470'><div class=area style='position:absolute; width:33px; height:20px; left:2484px; top:467px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=590&a_id=107&y=1891' title='Михаил Булгаков
Писатель
Магический реализм, 
Реализм, Сатира, Фантастика
RUS
1891-1940
MY: 0/0
MX: 590
WN: 22
RAT: 381119'><div class=area style='position:absolute; width:34px; height:20px; left:609px; top:472px'></div></a>
<a  href='build-rlmap4.php?mp=590&a_id=107&y=1891' title='Михаил Булгаков
Писатель
Магический реализм, 
Реализм, Сатира, Фантастика
RUS
1891-1940
MY: 0/0
MX: 590
WN: 22
RAT: 381119'><div class=area style='position:absolute; width:34px; height:20px; left:643px; top:472px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2056&a_id=146&y=1891' title='А. М. Волков
Писатель
Детская, Для подростков, 
История
RUS
1891-1977
MY: 0/-10
MX: 2056
WN: 6
RAT: 5973'><div class=area style='position:absolute; width:26px; height:20px; left:2075px; top:488px'></div></a>
<a  href='build-rlmap4.php?mp=2056&a_id=146&y=1891' title='А. М. Волков
Писатель
Детская, Для подростков, 
История
RUS
1891-1977
MY: 0/-10
MX: 2056
WN: 6
RAT: 5973'><div class=area style='position:absolute; width:25px; height:20px; left:2101px; top:488px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=358&a_id=545&y=1892' title='К. Паустовский
Писатель
Неоромантизм, 
Детская, Нон-конформизм, О природе
RUS
1892-1968
MY: 0/0
MX: 358
WN: 18
RAT: 5345'><div class=area style='position:absolute; width:37px; height:20px; left:377px; top:501px'></div></a>
<a  href='build-rlmap4.php?mp=358&a_id=545&y=1892' title='К. Паустовский
Писатель
Неоромантизм, 
Детская, Нон-конформизм, О природе
RUS
1892-1968
MY: 0/0
MX: 358
WN: 18
RAT: 5345'><div class=area style='position:absolute; width:36px; height:20px; left:414px; top:501px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1903&a_id=696&y=1892' title='Джон Толкин
Писатель
Высокое фэнтези, Для подростков, Мифы, 
Поэзия, Приключения, Фэнтези
BRI
1892-1973
MY: 0/-15
MX: 1903
WN: 7
RAT: 3270'><div class=area style='position:absolute; width:25px; height:20px; left:1922px; top:476px'></div></a>
<a  href='build-rlmap4.php?mp=1903&a_id=696&y=1892' title='Джон Толкин
Писатель
Высокое фэнтези, Для подростков, Мифы, 
Поэзия, Приключения, Фэнтези
BRI
1892-1973
MY: 0/-15
MX: 1903
WN: 7
RAT: 3270'><div class=area style='position:absolute; width:24px; height:20px; left:1947px; top:476px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=284&y=1894' title='Михаил Зощенко
Писатель
Сатира
RUS
1894-1958
MY: 0/-9
MX: 2209
WN: 8
RAT: 3324'><div class=area style='position:absolute; width:31px; height:20px; left:2228px; top:474px'></div></a>
<a  href='build-rlmap4.php?mp=2209&a_id=284&y=1894' title='Михаил Зощенко
Писатель
Сатира
RUS
1894-1958
MY: 0/-9
MX: 2209
WN: 8
RAT: 3324'><div class=area style='position:absolute; width:31px; height:20px; left:2259px; top:474px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2432&a_id=630&y=1894' title='Луи-Фердинанд Селин
Писатель
Модернизм
FRA
1894-1961
MY: 0/8
MX: 2432
WN: 1
RAT: 2100'><div class=area style='position:absolute; width:23px; height:20px; left:2451px; top:514px'></div></a>
<a  href='build-rlmap4.php?mp=2432&a_id=630&y=1894' title='Луи-Фердинанд Селин
Писатель
Модернизм
FRA
1894-1961
MY: 0/8
MX: 2432
WN: 1
RAT: 2100'><div class=area style='position:absolute; width:22px; height:20px; left:2474px; top:514px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1622&a_id=755&y=1894' title='Олдос Хаксли
Писатель
Фантастика, 
Агностицизм, Антиутопия, Гуманизм, Мистицизм, Пацифизм, Сатира, Философия
BRI
1894-1963
MY: 0/-13
MX: 1622
WN: 5
RAT: 21082'><div class=area style='position:absolute; width:28px; height:20px; left:1641px; top:472px'></div></a>
<a  href='build-rlmap4.php?mp=1622&a_id=755&y=1894' title='Олдос Хаксли
Писатель
Фантастика, 
Агностицизм, Антиутопия, Гуманизм, Мистицизм, Пацифизм, Сатира, Философия
BRI
1894-1963
MY: 0/-13
MX: 1622
WN: 5
RAT: 21082'><div class=area style='position:absolute; width:28px; height:20px; left:1669px; top:472px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=368&y=1896' title='Арчибальд Кронин
Писатель
Реализм
BRI
1896-1981
MY: 0/-2
MX: 1302
WN: 4
RAT: 1874'><div class=area style='position:absolute; width:26px; height:20px; left:1321px; top:516px'></div></a>
<a  href='build-rlmap4.php?mp=1302&a_id=368&y=1896' title='Арчибальд Кронин
Писатель
Реализм
BRI
1896-1981
MY: 0/-2
MX: 1302
WN: 4
RAT: 1874'><div class=area style='position:absolute; width:25px; height:20px; left:1347px; top:516px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=738&y=1896' title='Фрэнсис Фицджеральд
Писатель
Реализм, 
Модернизм, Психология, Фантастика
USA
1896-1940
MY: 0/8
MX: 1302
WN: 26
RAT: 34122'><div class=area style='position:absolute; width:41px; height:20px; left:1321px; top:493px'></div></a>
<a  href='build-rlmap4.php?mp=1302&a_id=738&y=1896' title='Фрэнсис Фицджеральд
Писатель
Реализм, 
Модернизм, Психология, Фантастика
USA
1896-1940
MY: 0/8
MX: 1302
WN: 26
RAT: 34122'><div class=area style='position:absolute; width:41px; height:20px; left:1362px; top:493px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=742&a_id=319&y=1897' title='Валентин Катаев
Писатель
Соцреализм, 
Автобиография, Детская, О войне, Приключения
RUS
1897-1986
MY: 0/-15
MX: 742
WN: 10
RAT: 13601'><div class=area style='position:absolute; width:27px; height:20px; left:761px; top:495px'></div></a>
<a  href='build-rlmap4.php?mp=742&a_id=319&y=1897' title='Валентин Катаев
Писатель
Соцреализм, 
Автобиография, Детская, О войне, Приключения
RUS
1897-1986
MY: 0/-15
MX: 742
WN: 10
RAT: 13601'><div class=area style='position:absolute; width:27px; height:20px; left:788px; top:495px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2432&a_id=741&y=1897' title='Уильям Фолкнер
Писатель
Модернизм, 
Готика
USA
1897-1962
MY: 0/17
MX: 2432
WN: 9
RAT: 2922'><div class=area style='position:absolute; width:30px; height:20px; left:2451px; top:537px'></div></a>
<a  href='build-rlmap4.php?mp=2432&a_id=741&y=1897' title='Уильям Фолкнер
Писатель
Модернизм, 
Готика
USA
1897-1962
MY: 0/17
MX: 2432
WN: 9
RAT: 2922'><div class=area style='position:absolute; width:30px; height:20px; left:2481px; top:537px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2289&a_id=591&y=1898' title='Эрих Мария Ремарк
Писатель
О любви, Реализм, 
О войне
DEU
1898-1970
MY: 0/1
MX: 2289
WN: 12
RAT: 204244'><div class=area style='position:absolute; width:29px; height:20px; left:2308px; top:512px'></div></a>
<a  href='build-rlmap4.php?mp=2289&a_id=591&y=1898' title='Эрих Мария Ремарк
Писатель
О любви, Реализм, 
О войне
DEU
1898-1970
MY: 0/1
MX: 2289
WN: 12
RAT: 204244'><div class=area style='position:absolute; width:29px; height:20px; left:2337px; top:512px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1544&a_id=1056&y=1898' title='Клайв Льюис
Писатель
Детская, Религия, Фэнтези, 
Сказка, Фантастика
BRI
1898-1963
MY: 0/0
MX: 1544
WN: 2
RAT: 3013'><div class=area style='position:absolute; width:30px; height:20px; left:1563px; top:503px'></div></a>
<a  href='build-rlmap4.php?mp=1544&a_id=1056&y=1898' title='Клайв Льюис
Писатель
Детская, Религия, Фэнтези, 
Сказка, Фантастика
BRI
1898-1963
MY: 0/0
MX: 1544
WN: 2
RAT: 3013'><div class=area style='position:absolute; width:30px; height:20px; left:1593px; top:503px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2645&a_id=493&y=1899' title='Владимир Набоков
Писатель
Антироман, Постмодернизм, 
Абсурд, Антиутопия, Модернизм, Сатира
RUS
1899-1977
MY: 0/0
MX: 2645
WN: 17
RAT: 7236'><div class=area style='position:absolute; width:29px; height:20px; left:2664px; top:518px'></div></a>
<a  href='build-rlmap4.php?mp=2645&a_id=493&y=1899' title='Владимир Набоков
Писатель
Антироман, Постмодернизм, 
Абсурд, Антиутопия, Модернизм, Сатира
RUS
1899-1977
MY: 0/0
MX: 2645
WN: 17
RAT: 7236'><div class=area style='position:absolute; width:29px; height:20px; left:2693px; top:518px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2432&a_id=559&y=1899' title='Андрей Платонов
Писатель
Модернизм, 
Антиутопия, Коммунизм, Утопия, Экзистенциализм
RUS
1899-1951
MY: 0/0
MX: 2432
WN: 14
RAT: 4009'><div class=area style='position:absolute; width:32px; height:20px; left:2451px; top:491px'></div></a>
<a  href='build-rlmap4.php?mp=2432&a_id=559&y=1899' title='Андрей Платонов
Писатель
Модернизм, 
Антиутопия, Коммунизм, Утопия, Экзистенциализм
RUS
1899-1951
MY: 0/0
MX: 2432
WN: 14
RAT: 4009'><div class=area style='position:absolute; width:32px; height:20px; left:2483px; top:491px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2432&a_id=765&y=1899' title='Эрнест Хемингуэй
Писатель
Модернизм, Реализм, 
Автобиография, Антифашизм, О войне, О любви, Приключения
USA
1899-1961
MY: 0/28
MX: 2432
WN: 9
RAT: 144569'><div class=area style='position:absolute; width:33px; height:20px; left:2451px; top:560px'></div></a>
<a  href='build-rlmap4.php?mp=2432&a_id=765&y=1899' title='Эрнест Хемингуэй
Писатель
Модернизм, Реализм, 
Автобиография, Антифашизм, О войне, О любви, Приключения
USA
1899-1961
MY: 0/28
MX: 2432
WN: 9
RAT: 144569'><div class=area style='position:absolute; width:33px; height:20px; left:2484px; top:560px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=742&a_id=290&y=1900' title='Ильф и Петров

Соцреализм, 
Сатира, Фантастика, Юмор
RUS
1900-1940
MY: 0/-4
MX: 742
WN: 3
RAT: 105467'><div class=area style='position:absolute; width:28px; height:20px; left:761px; top:472px'></div></a>
<a  href='build-rlmap4.php?mp=742&a_id=290&y=1900' title='Ильф и Петров

Соцреализм, 
Сатира, Фантастика, Юмор
RUS
1900-1940
MY: 0/-4
MX: 742
WN: 3
RAT: 105467'><div class=area style='position:absolute; width:27px; height:20px; left:789px; top:472px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2289&a_id=469&y=1900' title='Маргарет Митчелл
Писательница
О любви, Реализм, 
История, О войне
USA
1900-1949
MY: 0/-1
MX: 2289
WN: 1
RAT: 21040'><div class=area style='position:absolute; width:30px; height:20px; left:2308px; top:488px'></div></a>
<a  href='build-rlmap4.php?mp=2289&a_id=469&y=1900' title='Маргарет Митчелл
Писательница
О любви, Реализм, 
История, О войне
USA
1900-1949
MY: 0/-1
MX: 2289
WN: 1
RAT: 21040'><div class=area style='position:absolute; width:30px; height:20px; left:2338px; top:488px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1977&a_id=634&y=1900' title='А. де Сент-Экзюпери
Писатель
Реализм, Фэнтези, 
Автобиография, Детская, О войне, Философия
FRA
1900-1944
MY: 0/0
MX: 1977
WN: 4
RAT: 42072'><div class=area style='position:absolute; width:34px; height:20px; left:1996px; top:484px'></div></a>
<a  href='build-rlmap4.php?mp=1977&a_id=634&y=1900' title='А. де Сент-Экзюпери
Писатель
Реализм, Фэнтези, 
Автобиография, Детская, О войне, Философия
FRA
1900-1944
MY: 0/0
MX: 1977
WN: 4
RAT: 42072'><div class=area style='position:absolute; width:33px; height:20px; left:2030px; top:484px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1903&a_id=1059&y=1900' title='Ян Ларри
Писатель
Детская, Фантастика
RUS
1900-1977
MY: 0/-10
MX: 1903
WN: 1
RAT: 2446'><div class=area style='position:absolute; width:23px; height:20px; left:1922px; top:499px'></div></a>
<a  href='build-rlmap4.php?mp=1903&a_id=1059&y=1900' title='Ян Ларри
Писатель
Детская, Фантастика
RUS
1900-1977
MY: 0/-10
MX: 1903
WN: 1
RAT: 2446'><div class=area style='position:absolute; width:23px; height:20px; left:1945px; top:499px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1903&a_id=300&y=1902' title='Вениамин Каверин
Писатель
Детская, Соцреализм, 
Приключения, Реализм, Фантастика
RUS
1902-1989
MY: 0/5
MX: 1903
WN: 5
RAT: 23329'><div class=area style='position:absolute; width:32px; height:20px; left:1922px; top:545px'></div></a>
<a  href='build-rlmap4.php?mp=1903&a_id=300&y=1902' title='Вениамин Каверин
Писатель
Детская, Соцреализм, 
Приключения, Реализм, Фантастика
RUS
1902-1989
MY: 0/5
MX: 1903
WN: 5
RAT: 23329'><div class=area style='position:absolute; width:32px; height:20px; left:1954px; top:545px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2056&a_id=533&y=1902' title='В. А. Осеева
Писательница
Детская, Для подростков, Соцреализм, 
Автобиография, О войне, О любви, Приключения
RUS
1902-1969
MY: 0/-1
MX: 2056
WN: 4
RAT: 1464'><div class=area style='position:absolute; width:27px; height:20px; left:2075px; top:512px'></div></a>
<a  href='build-rlmap4.php?mp=2056&a_id=533&y=1902' title='В. А. Осеева
Писательница
Детская, Для подростков, Соцреализм, 
Автобиография, О войне, О любви, Приключения
RUS
1902-1969
MY: 0/-1
MX: 2056
WN: 4
RAT: 1464'><div class=area style='position:absolute; width:26px; height:20px; left:2102px; top:512px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1067&a_id=661&y=1902' title='Джон Стейнбек
Автор
Натурализм, 
Реализм
USA
1902-1968
MY: 0/0
MX: 1067
WN: 7
RAT: 5610'><div class=area style='position:absolute; width:32px; height:20px; left:1086px; top:512px'></div></a>
<a  href='build-rlmap4.php?mp=1067&a_id=661&y=1902' title='Джон Стейнбек
Автор
Натурализм, 
Реализм
USA
1902-1968
MY: 0/0
MX: 1067
WN: 7
RAT: 5610'><div class=area style='position:absolute; width:32px; height:20px; left:1118px; top:512px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1903&a_id=379&y=1903' title='Л. И. Лагин
Писатель
Детская, Сатира, Соцреализм, Фантастика
RUS
1903-1979
MY: 0/-1
MX: 1903
WN: 1
RAT: 1115'><div class=area style='position:absolute; width:22px; height:20px; left:1922px; top:522px'></div></a>
<a  href='build-rlmap4.php?mp=1903&a_id=379&y=1903' title='Л. И. Лагин
Писатель
Детская, Сатира, Соцреализм, Фантастика
RUS
1903-1979
MY: 0/-1
MX: 1903
WN: 1
RAT: 1115'><div class=area style='position:absolute; width:22px; height:20px; left:1944px; top:522px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1701&a_id=531&y=1903' title='Джордж Оруэлл
Писатель
Антиутопия, 
Сатира, Фантастика
BRI
1903-1950
MY: 0/0
MX: 1701
WN: 6
RAT: 73699'><div class=area style='position:absolute; width:28px; height:20px; left:1720px; top:495px'></div></a>
<a  href='build-rlmap4.php?mp=1701&a_id=531&y=1903' title='Джордж Оруэлл
Писатель
Антиутопия, 
Сатира, Фантастика
BRI
1903-1950
MY: 0/0
MX: 1701
WN: 6
RAT: 73699'><div class=area style='position:absolute; width:28px; height:20px; left:1748px; top:495px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1219&a_id=1062&y=1903' title='Ирвинг Стоун
Писатель
Биография, История, 
Психология
USA
1903-1989
MY: 0/0
MX: 1219
WN: 4
RAT: 2165'><div class=area style='position:absolute; width:22px; height:20px; left:1238px; top:535px'></div></a>
<a  href='build-rlmap4.php?mp=1219&a_id=1062&y=1903' title='Ирвинг Стоун
Писатель
Биография, История, 
Психология
USA
1903-1989
MY: 0/0
MX: 1219
WN: 4
RAT: 2165'><div class=area style='position:absolute; width:21px; height:20px; left:1260px; top:535px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2056&a_id=156&y=1904' title='Аркадий Гайдар
Писатель
Детская, Для подростков, 
Коммунист, Революционер, Сказка, Фантастика
RUS
1904-1941
MY: 0/-10
MX: 2056
WN: 9
RAT: 4232'><div class=area style='position:absolute; width:26px; height:20px; left:2075px; top:465px'></div></a>
<a  href='build-rlmap4.php?mp=2056&a_id=156&y=1904' title='Аркадий Гайдар
Писатель
Детская, Для подростков, 
Коммунист, Революционер, Сказка, Фантастика
RUS
1904-1941
MY: 0/-10
MX: 2056
WN: 9
RAT: 4232'><div class=area style='position:absolute; width:25px; height:20px; left:2101px; top:465px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2056&a_id=318&y=1905' title='Лев Кассиль
Писатель
Детская, Для подростков, Соцреализм, 
О войне, Приключения, Юмор
RUS
1905-1970
MY: 0/8
MX: 2056
WN: 6
RAT: 1808'><div class=area style='position:absolute; width:29px; height:20px; left:2075px; top:535px'></div></a>
<a  href='build-rlmap4.php?mp=2056&a_id=318&y=1905' title='Лев Кассиль
Писатель
Детская, Для подростков, Соцреализм, 
О войне, Приключения, Юмор
RUS
1905-1970
MY: 0/8
MX: 2056
WN: 6
RAT: 1808'><div class=area style='position:absolute; width:29px; height:20px; left:2104px; top:535px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=140&a_id=624&y=1905' title='Жан-Поль Сартр
Философ
Экзистенциализм, 
Антифашизм, Атеизм, Марксизм, Пацифизм, Политика, Философия
FRA
1905-1980
MY: 0/0
MX: 140
WN: 6
RAT: 2170'><div class=area style='position:absolute; width:22px; height:20px; left:159px; top:528px'></div></a>
<a  href='build-rlmap4.php?mp=140&a_id=624&y=1905' title='Жан-Поль Сартр
Философ
Экзистенциализм, 
Антифашизм, Атеизм, Марксизм, Пацифизм, Политика, Философия
FRA
1905-1980
MY: 0/0
MX: 140
WN: 6
RAT: 2170'><div class=area style='position:absolute; width:21px; height:20px; left:181px; top:528px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2056&a_id=707&y=1905' title='Г. Н. Троепольский
Писатель
Детская, Для подростков, 
О животных, Соцреализм
RUS
1905-1995
MY: 0/7
MX: 2056
WN: 1
RAT: 6365'><div class=area style='position:absolute; width:31px; height:20px; left:2075px; top:558px'></div></a>
<a  href='build-rlmap4.php?mp=2056&a_id=707&y=1905' title='Г. Н. Троепольский
Писатель
Детская, Для подростков, 
О животных, Соцреализм
RUS
1905-1995
MY: 0/7
MX: 2056
WN: 1
RAT: 6365'><div class=area style='position:absolute; width:30px; height:20px; left:2106px; top:558px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=742&a_id=817&y=1905' title='Михаил Шолохов
Писатель
Соцреализм, 
История, О войне, О любви
RUS
1905-1984
MY: 0/4
MX: 742
WN: 7
RAT: 63322'><div class=area style='position:absolute; width:34px; height:20px; left:761px; top:541px'></div></a>
<a  href='build-rlmap4.php?mp=742&a_id=817&y=1905' title='Михаил Шолохов
Писатель
Соцреализм, 
История, О войне, О любви
RUS
1905-1984
MY: 0/4
MX: 742
WN: 7
RAT: 63322'><div class=area style='position:absolute; width:34px; height:20px; left:795px; top:541px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=1044&y=1906' title='Леонид Соловьёв
Писатель
Плутовской роман, Реализм, Фольклор, Юмор, 
Притча, Публицистика
RUS
1906-1962
MY: 0/-6
MX: 2209
WN: 2
RAT: 5702'><div class=area style='position:absolute; width:33px; height:20px; left:2228px; top:497px'></div></a>
<a  href='build-rlmap4.php?mp=2209&a_id=1044&y=1906' title='Леонид Соловьёв
Писатель
Плутовской роман, Реализм, Фольклор, Юмор, 
Притча, Публицистика
RUS
1906-1962
MY: 0/-6
MX: 2209
WN: 2
RAT: 5702'><div class=area style='position:absolute; width:33px; height:20px; left:2261px; top:497px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2134&a_id=407&y=1907' title='Астрид Линдгрен
Писательница
Детская
SWE
1907-2002
MY: 0/11
MX: 2134
WN: 18
RAT: 13314'><div class=area style='position:absolute; width:30px; height:20px; left:2153px; top:577px'></div></a>
<a  href='build-rlmap4.php?mp=2134&a_id=407&y=1907' title='Астрид Линдгрен
Писательница
Детская
SWE
1907-2002
MY: 0/11
MX: 2134
WN: 18
RAT: 13314'><div class=area style='position:absolute; width:29px; height:20px; left:2183px; top:577px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1622&a_id=1096&y=1907' title='Роберт Хайнлайн
Писатель
Фантастика, 
О войне, Приключения, Философия, Футурология, Фэнтези
USA
1907-1988
MY: 0/-21
MX: 1622
WN: 12
RAT: 1032'><div class=area style='position:absolute; width:33px; height:20px; left:1641px; top:495px'></div></a>
<a  href='build-rlmap4.php?mp=1622&a_id=1096&y=1907' title='Роберт Хайнлайн
Писатель
Фантастика, 
О войне, Приключения, Философия, Футурология, Фэнтези
USA
1907-1988
MY: 0/-21
MX: 1622
WN: 12
RAT: 1032'><div class=area style='position:absolute; width:32px; height:20px; left:1674px; top:495px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1766&a_id=1091&y=1907' title='Дафна дю Морье
Писательница
Готика, Триллер, 
Биография, Детектив, История, Мистицизм, О любви, Психология
BRI
1907-1989
MY: 0/0
MX: 1766
WN: 2
RAT: 1098'><div class=area style='position:absolute; width:24px; height:20px; left:1785px; top:539px'></div></a>
<a  href='build-rlmap4.php?mp=1766&a_id=1091&y=1907' title='Дафна дю Морье
Писательница
Готика, Триллер, 
Биография, Детектив, История, Мистицизм, О любви, Психология
BRI
1907-1989
MY: 0/0
MX: 1766
WN: 2
RAT: 1098'><div class=area style='position:absolute; width:23px; height:20px; left:1809px; top:539px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2134&a_id=1073&y=1907' title='Андрей Некрасов
Писатель
Детская, 
Юмор
RUS
1907-1987
MY: 0/-3
MX: 2134
WN: 1
RAT: 1661'><div class=area style='position:absolute; width:35px; height:20px; left:2153px; top:530px'></div></a>
<a  href='build-rlmap4.php?mp=2134&a_id=1073&y=1907' title='Андрей Некрасов
Писатель
Детская, 
Юмор
RUS
1907-1987
MY: 0/-3
MX: 2134
WN: 1
RAT: 1661'><div class=area style='position:absolute; width:34px; height:20px; left:2188px; top:530px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2134&a_id=516&y=1908' title='Николай Носов
Писатель
Детская, 
Соцреализм
RUS
1908-1976
MY: 0/-20
MX: 2134
WN: 7
RAT: 9245'><div class=area style='position:absolute; width:29px; height:20px; left:2153px; top:484px'></div></a>
<a  href='build-rlmap4.php?mp=2134&a_id=516&y=1908' title='Николай Носов
Писатель
Детская, 
Соцреализм
RUS
1908-1976
MY: 0/-20
MX: 2134
WN: 7
RAT: 9245'><div class=area style='position:absolute; width:29px; height:20px; left:2182px; top:484px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=742&a_id=565&y=1908' title='Б. Н. Полевой

Соцреализм, 
История, О войне
RUS
1908-1981
MY: 0/15
MX: 742
WN: 1
RAT: 6426'><div class=area style='position:absolute; width:30px; height:20px; left:761px; top:564px'></div></a>
<a  href='build-rlmap4.php?mp=742&a_id=565&y=1908' title='Б. Н. Полевой

Соцреализм, 
История, О войне
RUS
1908-1981
MY: 0/15
MX: 742
WN: 1
RAT: 6426'><div class=area style='position:absolute; width:29px; height:20px; left:791px; top:564px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1838&a_id=1034&y=1908' title='Иван Ефремов
Писатель
Твердая научная фантастика, 
Антиутопия, Для подростков, История, Приключения, Утопия, Фантастика, Философия
RUS
1908-1972
MY: 0/0
MX: 1838
WN: 8
RAT: 22342'><div class=area style='position:absolute; width:29px; height:20px; left:1857px; top:522px'></div></a>
<a  href='build-rlmap4.php?mp=1838&a_id=1034&y=1908' title='Иван Ефремов
Писатель
Твердая научная фантастика, 
Антиутопия, Для подростков, История, Приключения, Утопия, Фантастика, Философия
RUS
1908-1972
MY: 0/0
MX: 1838
WN: 8
RAT: 22342'><div class=area style='position:absolute; width:28px; height:20px; left:1886px; top:522px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=742&a_id=249&y=1909' title='Юрий Домбровский

Соцреализм, 
История
RUS
1909-1978
MY: 0/-6
MX: 742
WN: 3
RAT: 8910'><div class=area style='position:absolute; width:39px; height:20px; left:761px; top:518px'></div></a>
<a  href='build-rlmap4.php?mp=742&a_id=249&y=1909' title='Юрий Домбровский

Соцреализм, 
История
RUS
1909-1978
MY: 0/-6
MX: 742
WN: 3
RAT: 8910'><div class=area style='position:absolute; width:39px; height:20px; left:800px; top:518px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=42&y=1911' title='Эрве Базен
Писатель
Реализм, 
Коммунист, Пацифизм
FRA
1911-1996
MY: 0/5
MX: 1302
WN: 4
RAT: 1282'><div class=area style='position:absolute; width:22px; height:20px; left:1321px; top:562px'></div></a>
<a  href='build-rlmap4.php?mp=1302&a_id=42&y=1911' title='Эрве Базен
Писатель
Реализм, 
Коммунист, Пацифизм
FRA
1911-1996
MY: 0/5
MX: 1302
WN: 4
RAT: 1282'><div class=area style='position:absolute; width:22px; height:20px; left:1343px; top:562px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1903&a_id=188&y=1911' title='Уильям Голдинг
Писатель
Детская, Фантастика, 
Выживание, История, Психология
BRI
1911-1993
MY: 0/10
MX: 1903
WN: 2
RAT: 4789'><div class=area style='position:absolute; width:29px; height:20px; left:1922px; top:568px'></div></a>
<a  href='build-rlmap4.php?mp=1903&a_id=188&y=1911' title='Уильям Голдинг
Писатель
Детская, Фантастика, 
Выживание, История, Психология
BRI
1911-1993
MY: 0/10
MX: 1903
WN: 2
RAT: 4789'><div class=area style='position:absolute; width:28px; height:20px; left:1951px; top:568px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2056&a_id=612&y=1911' title='Анатолий Рыбаков
Писатель
Для подростков, Соцреализм, 
Детектив, Детская, История, О войне, О любви, Приключения, Реализм
RUS
1911-1998
MY: 0/13
MX: 2056
WN: 7
RAT: 9702'><div class=area style='position:absolute; width:30px; height:20px; left:2075px; top:581px'></div></a>
<a  href='build-rlmap4.php?mp=2056&a_id=612&y=1911' title='Анатолий Рыбаков
Писатель
Для подростков, Соцреализм, 
Детектив, Детская, История, О войне, О любви, Приключения, Реализм
RUS
1911-1998
MY: 0/13
MX: 2056
WN: 7
RAT: 9702'><div class=area style='position:absolute; width:30px; height:20px; left:2105px; top:581px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1468&a_id=309&y=1913' title='Альбер Камю
Писатель
Философия, Экзистенциализм, 
Абсурд, Анархизм, Поток сознания, Публицистика
FRA
1913-1960
MY: 0/0
MX: 1468
WN: 8
RAT: 5463'><div class=area style='position:absolute; width:21px; height:20px; left:1487px; top:516px'></div></a>
<a  href='build-rlmap4.php?mp=1468&a_id=309&y=1913' title='Альбер Камю
Писатель
Философия, Экзистенциализм, 
Абсурд, Анархизм, Поток сознания, Публицистика
FRA
1913-1960
MY: 0/0
MX: 1468
WN: 8
RAT: 5463'><div class=area style='position:absolute; width:21px; height:20px; left:1508px; top:516px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2134&a_id=1046&y=1913' title='Виктор Драгунский
Писатель
Детская, Юмор
RUS
1913-1972
MY: 0/-10
MX: 2134
WN: 1
RAT: 5212'><div class=area style='position:absolute; width:34px; height:20px; left:2153px; top:507px'></div></a>
<a  href='build-rlmap4.php?mp=2134&a_id=1046&y=1913' title='Виктор Драгунский
Писатель
Детская, Юмор
RUS
1913-1972
MY: 0/-10
MX: 2134
WN: 1
RAT: 5212'><div class=area style='position:absolute; width:33px; height:20px; left:2187px; top:507px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1903&a_id=1064&y=1914' title='Туве Янссон
Писательница
Детская, Фантастика, 
Приключения, Сказка
SWE
1914-2001
MY: 0/15
MX: 1903
WN: 5
RAT: 2105'><div class=area style='position:absolute; width:27px; height:20px; left:1922px; top:591px'></div></a>
<a  href='build-rlmap4.php?mp=1903&a_id=1064&y=1914' title='Туве Янссон
Писательница
Детская, Фантастика, 
Приключения, Сказка
SWE
1914-2001
MY: 0/15
MX: 1903
WN: 5
RAT: 2105'><div class=area style='position:absolute; width:26px; height:20px; left:1949px; top:591px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=836&a_id=639&y=1915' title='Константин Симонов
Киносценарист
О войне, Соцреализм
RUS
1915-1979
MY: 0/-16
MX: 836
WN: 4
RAT: 10730'><div class=area style='position:absolute; width:33px; height:20px; left:855px; top:503px'></div></a>
<a  href='build-rlmap4.php?mp=836&a_id=639&y=1915' title='Константин Симонов
Киносценарист
О войне, Соцреализм
RUS
1915-1979
MY: 0/-16
MX: 836
WN: 4
RAT: 10730'><div class=area style='position:absolute; width:33px; height:20px; left:888px; top:503px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=59&y=1917' title='Генрих Бёлль
Писатель
Реализм, 
О войне
DEU
1917-1985
MY: 0/-3
MX: 1302
WN: 3
RAT: 1291'><div class=area style='position:absolute; width:23px; height:20px; left:1321px; top:539px'></div></a>
<a  href='build-rlmap4.php?mp=1302&a_id=59&y=1917' title='Генрих Бёлль
Писатель
Реализм, 
О войне
DEU
1917-1985
MY: 0/-3
MX: 1302
WN: 3
RAT: 1291'><div class=area style='position:absolute; width:22px; height:20px; left:1344px; top:539px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1838&a_id=339&y=1917' title='Артур Кларк
Писатель
Твердая научная фантастика, 
Антиутопия, Приключения, Утопия, Фантастика
BRI
1917-2008
MY: 0/2
MX: 1838
WN: 6
RAT: 1175'><div class=area style='position:absolute; width:22px; height:20px; left:1857px; top:575px'></div></a>
<a  href='build-rlmap4.php?mp=1838&a_id=339&y=1917' title='Артур Кларк
Писатель
Твердая научная фантастика, 
Антиутопия, Приключения, Утопия, Фантастика
BRI
1917-2008
MY: 0/2
MX: 1838
WN: 6
RAT: 1175'><div class=area style='position:absolute; width:22px; height:20px; left:1879px; top:575px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1067&a_id=256&y=1918' title='Морис Дрюон
Писатель
Натурализм, 
История, Сказка
FRA
1918-2009
MY: 0/0
MX: 1067
WN: 4
RAT: 2192'><div class=area style='position:absolute; width:25px; height:20px; left:1086px; top:572px'></div></a>
<a  href='build-rlmap4.php?mp=1067&a_id=256&y=1918' title='Морис Дрюон
Писатель
Натурализм, 
История, Сказка
FRA
1918-2009
MY: 0/0
MX: 1067
WN: 4
RAT: 2192'><div class=area style='position:absolute; width:24px; height:20px; left:1111px; top:572px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1468&a_id=258&y=1918' title='Владимир Дудинцев
Писатель
История, Философия
RUS
1918-1998
MY: 0/5
MX: 1468
WN: 2
RAT: 1811'><div class=area style='position:absolute; width:34px; height:20px; left:1487px; top:570px'></div></a>
<a  href='build-rlmap4.php?mp=1468&a_id=258&y=1918' title='Владимир Дудинцев
Писатель
История, Философия
RUS
1918-1998
MY: 0/5
MX: 1468
WN: 2
RAT: 1811'><div class=area style='position:absolute; width:34px; height:20px; left:1521px; top:570px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=649&y=1918' title='А. И. Солженицын
Писатель
Нон-конформизм, Реализм
RUS
1918-2008
MY: 0/7
MX: 1302
WN: 9
RAT: 9391'><div class=area style='position:absolute; width:36px; height:20px; left:1321px; top:585px'></div></a>
<a  href='build-rlmap4.php?mp=1302&a_id=649&y=1918' title='А. И. Солженицын
Писатель
Нон-конформизм, Реализм
RUS
1918-2008
MY: 0/7
MX: 1302
WN: 9
RAT: 9391'><div class=area style='position:absolute; width:35px; height:20px; left:1357px; top:585px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=140&a_id=455&y=1919' title='Айрис Мёрдок
Писательница
Экзистенциализм, 
Коммунист, Философия
BRI
1919-1999
MY: 0/0
MX: 140
WN: 4
RAT: 2466'><div class=area style='position:absolute; width:28px; height:20px; left:159px; top:562px'></div></a>
<a  href='build-rlmap4.php?mp=140&a_id=455&y=1919' title='Айрис Мёрдок
Писательница
Экзистенциализм, 
Коммунист, Философия
BRI
1919-1999
MY: 0/0
MX: 140
WN: 4
RAT: 2466'><div class=area style='position:absolute; width:27px; height:20px; left:187px; top:562px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1544&a_id=676&y=1919' title='Джером Сэлинджер
Писатель
Мистицизм, 
Буддизм, Нигилизм
USA
1919-2010
MY: 0/0
MX: 1544
WN: 5
RAT: 14740'><div class=area style='position:absolute; width:35px; height:20px; left:1563px; top:575px'></div></a>
<a  href='build-rlmap4.php?mp=1544&a_id=676&y=1919' title='Джером Сэлинджер
Писатель
Мистицизм, 
Буддизм, Нигилизм
USA
1919-2010
MY: 0/0
MX: 1544
WN: 5
RAT: 14740'><div class=area style='position:absolute; width:35px; height:20px; left:1598px; top:575px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1838&a_id=7&y=1920' title='Айзек Азимов
Писатель
Научная литература, Твердая научная фантастика
USA
1920-1992
MY: 0/-2
MX: 1838
WN: 9
RAT: 1422'><div class=area style='position:absolute; width:28px; height:20px; left:1857px; top:551px'></div></a>
<a  href='build-rlmap4.php?mp=1838&a_id=7&y=1920' title='Айзек Азимов
Писатель
Научная литература, Твердая научная фантастика
USA
1920-1992
MY: 0/-2
MX: 1838
WN: 9
RAT: 1422'><div class=area style='position:absolute; width:27px; height:20px; left:1885px; top:551px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1622&a_id=105&y=1920' title='Рэй Брэдбери
Писатель
Фантастика, 
Фэнтези, Хоррор
USA
1920-2012
MY: 0/5
MX: 1622
WN: 14
RAT: 67068'><div class=area style='position:absolute; width:36px; height:20px; left:1641px; top:587px'></div></a>
<a  href='build-rlmap4.php?mp=1622&a_id=105&y=1920' title='Рэй Брэдбери
Писатель
Фантастика, 
Фэнтези, Хоррор
USA
1920-2012
MY: 0/5
MX: 1622
WN: 14
RAT: 67068'><div class=area style='position:absolute; width:36px; height:20px; left:1677px; top:587px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=667&a_id=583&y=1920' title='Марио Пьюзо
Писатель
Детектив, 
Беллетристика, Триллер, Фантастика
ITA
1920-1999
MY: 0/2
MX: 667
WN: 3
RAT: 4291'><div class=area style='position:absolute; width:24px; height:20px; left:686px; top:568px'></div></a>
<a  href='build-rlmap4.php?mp=667&a_id=583&y=1920' title='Марио Пьюзо
Писатель
Детектив, 
Беллетристика, Триллер, Фантастика
ITA
1920-1999
MY: 0/2
MX: 667
WN: 3
RAT: 4291'><div class=area style='position:absolute; width:23px; height:20px; left:710px; top:568px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2134&a_id=598&y=1920' title='Джанни Родари
Писатель
Детская, 
Коммунист, Приключения, Революционер, Сказка
ITA
1920-1980
MY: 0/5
MX: 2134
WN: 3
RAT: 1853'><div class=area style='position:absolute; width:27px; height:20px; left:2153px; top:554px'></div></a>
<a  href='build-rlmap4.php?mp=2134&a_id=598&y=1920' title='Джанни Родари
Писатель
Детская, 
Коммунист, Приключения, Революционер, Сказка
ITA
1920-1980
MY: 0/5
MX: 2134
WN: 3
RAT: 1853'><div class=area style='position:absolute; width:26px; height:20px; left:2180px; top:554px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=667&a_id=762&y=1920' title='Артур Хейли

Детектив, Производственный роман, 
Триллер
CAN
1920-2004
MY: 0/11
MX: 667
WN: 5
RAT: 4806'><div class=area style='position:absolute; width:22px; height:20px; left:686px; top:591px'></div></a>
<a  href='build-rlmap4.php?mp=667&a_id=762&y=1920' title='Артур Хейли

Детектив, Производственный роман, 
Триллер
CAN
1920-2004
MY: 0/11
MX: 667
WN: 5
RAT: 4806'><div class=area style='position:absolute; width:22px; height:20px; left:708px; top:591px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1622&a_id=389&y=1921' title='Станислав Лем
Футуролог
Фантастика, 
Твердая научная фантастика, Философия, Футурология
POL
1921-2006
MY: 0/-15
MX: 1622
WN: 15
RAT: 46064'><div class=area style='position:absolute; width:18px; height:20px; left:1641px; top:541px'></div></a>
<a  href='build-rlmap4.php?mp=1622&a_id=389&y=1921' title='Станислав Лем
Футуролог
Фантастика, 
Твердая научная фантастика, Философия, Футурология
POL
1921-2006
MY: 0/-15
MX: 1622
WN: 15
RAT: 46064'><div class=area style='position:absolute; width:17px; height:20px; left:1659px; top:541px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1622&a_id=150&y=1922' title='Курт Воннегут
Писатель
Сатира, Фантастика, 
Анархизм, Пацифизм, Постмодернизм, Философия
USA
1922-2007
MY: 0/-5
MX: 1622
WN: 8
RAT: 3601'><div class=area style='position:absolute; width:32px; height:20px; left:1641px; top:564px'></div></a>
<a  href='build-rlmap4.php?mp=1622&a_id=150&y=1922' title='Курт Воннегут
Писатель
Сатира, Фантастика, 
Анархизм, Пацифизм, Постмодернизм, Философия
USA
1922-2007
MY: 0/-5
MX: 1622
WN: 8
RAT: 3601'><div class=area style='position:absolute; width:31px; height:20px; left:1673px; top:564px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=590&a_id=3&y=1924' title='Кобо Абэ
Писатель
Магический реализм, 
Авангард, Коммунизм, Фантастика
JAP
1924-1993
MY: 0/-16
MX: 590
WN: 4
RAT: 6437'><div class=area style='position:absolute; width:17px; height:20px; left:609px; top:528px'></div></a>
<a  href='build-rlmap4.php?mp=590&a_id=3&y=1924' title='Кобо Абэ
Писатель
Магический реализм, 
Авангард, Коммунизм, Фантастика
JAP
1924-1993
MY: 0/-16
MX: 590
WN: 4
RAT: 6437'><div class=area style='position:absolute; width:17px; height:20px; left:626px; top:528px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=836&a_id=35&y=1924' title='Виктор Астафьев
Писатель
О войне, 
Деревня, Детская, История, Мемуары, Соцреализм
RUS
1924-2001
MY: 0/-10
MX: 836
WN: 20
RAT: 10798'><div class=area style='position:absolute; width:38px; height:20px; left:855px; top:549px'></div></a>
<a  href='build-rlmap4.php?mp=836&a_id=35&y=1924' title='Виктор Астафьев
Писатель
О войне, 
Деревня, Детская, История, Мемуары, Соцреализм
RUS
1924-2001
MY: 0/-10
MX: 836
WN: 20
RAT: 10798'><div class=area style='position:absolute; width:37px; height:20px; left:893px; top:549px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=836&a_id=86&y=1924' title='Владимир Богомолов
Писатель
О войне
RUS
1924-2003
MY: 0/0
MX: 836
WN: 3
RAT: 7075'><div class=area style='position:absolute; width:37px; height:20px; left:855px; top:572px'></div></a>
<a  href='build-rlmap4.php?mp=836&a_id=86&y=1924' title='Владимир Богомолов
Писатель
О войне
RUS
1924-2003
MY: 0/0
MX: 836
WN: 3
RAT: 7075'><div class=area style='position:absolute; width:36px; height:20px; left:892px; top:572px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=836&a_id=115&y=1924' title='Василь Быков
Писатель
О войне
RUS
1924-2003
MY: 0/11
MX: 836
WN: 13
RAT: 15459'><div class=area style='position:absolute; width:26px; height:20px; left:855px; top:596px'></div></a>
<a  href='build-rlmap4.php?mp=836&a_id=115&y=1924' title='Василь Быков
Писатель
О войне
RUS
1924-2003
MY: 0/11
MX: 836
WN: 13
RAT: 15459'><div class=area style='position:absolute; width:25px; height:20px; left:881px; top:596px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=836&a_id=127&y=1924' title='Борис Васильев
Писатель
История, О войне, 
Драматургия
RUS
1924-2013
MY: 0/17
MX: 836
WN: 12
RAT: 31220'><div class=area style='position:absolute; width:36px; height:20px; left:855px; top:619px'></div></a>
<a  href='build-rlmap4.php?mp=836&a_id=127&y=1924' title='Борис Васильев
Писатель
История, О войне, 
Драматургия
RUS
1924-2013
MY: 0/17
MX: 836
WN: 12
RAT: 31220'><div class=area style='position:absolute; width:36px; height:20px; left:891px; top:619px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1219&a_id=1088&y=1924' title='Джеймс Клавелл
Писатель
История, Триллер, 
Объективизм, Приключения
USA
1924-1994
MY: 0/0
MX: 1219
WN: 2
RAT: 1134'><div class=area style='position:absolute; width:29px; height:20px; left:1238px; top:562px'></div></a>
<a  href='build-rlmap4.php?mp=1219&a_id=1088&y=1924' title='Джеймс Клавелл
Писатель
История, Триллер, 
Объективизм, Приключения
USA
1924-1994
MY: 0/0
MX: 1219
WN: 2
RAT: 1134'><div class=area style='position:absolute; width:29px; height:20px; left:1267px; top:562px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2056&a_id=269&y=1925' title='В. К. Железников
Писатель
Детская, Для подростков, 
Соцреализм
RUS
1925-2015
MY: 0/9
MX: 2056
WN: 7
RAT: 2023'><div class=area style='position:absolute; width:29px; height:20px; left:2075px; top:604px'></div></a>
<a  href='build-rlmap4.php?mp=2056&a_id=269&y=1925' title='В. К. Железников
Писатель
Детская, Для подростков, 
Соцреализм
RUS
1925-2015
MY: 0/9
MX: 2056
WN: 7
RAT: 2023'><div class=area style='position:absolute; width:28px; height:20px; left:2104px; top:604px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1622&a_id=670&y=1925' title='Стругацкие

Фантастика, 
Твердая научная фантастика, Философия, Юмор
RUS
1925-2000
MY: 0/-25
MX: 1622
WN: 21
RAT: 91398'><div class=area style='position:absolute; width:35px; height:20px; left:1641px; top:518px'></div></a>
<a  href='build-rlmap4.php?mp=1622&a_id=670&y=1925' title='Стругацкие

Фантастика, 
Твердая научная фантастика, Философия, Юмор
RUS
1925-2000
MY: 0/-25
MX: 1622
WN: 21
RAT: 91398'><div class=area style='position:absolute; width:35px; height:20px; left:1676px; top:518px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1766&a_id=404&y=1926' title='Харпер Ли
Писательница
Готика, 
Дидактизм, Для подростков, Юмор
USA
1926-2016
MY: 0/0
MX: 1766
WN: 2
RAT: 4389'><div class=area style='position:absolute; width:13px; height:20px; left:1785px; top:587px'></div></a>
<a  href='build-rlmap4.php?mp=1766&a_id=404&y=1926' title='Харпер Ли
Писательница
Готика, 
Дидактизм, Для подростков, Юмор
USA
1926-2016
MY: 0/0
MX: 1766
WN: 2
RAT: 4389'><div class=area style='position:absolute; width:12px; height:20px; left:1798px; top:587px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2574&a_id=730&y=1926' title='Джон Фаулз
Писатель-романист
Постмодернизм, 
Атеизм
BRI
1926-2005
MY: 0/9
MX: 2574
WN: 3
RAT: 7336'><div class=area style='position:absolute; width:23px; height:20px; left:2593px; top:596px'></div></a>
<a  href='build-rlmap4.php?mp=2574&a_id=730&y=1926' title='Джон Фаулз
Писатель-романист
Постмодернизм, 
Атеизм
BRI
1926-2005
MY: 0/9
MX: 2574
WN: 3
RAT: 7336'><div class=area style='position:absolute; width:23px; height:20px; left:2616px; top:596px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1395&a_id=331&y=1927' title='Дэниел Киз
Писатель
Психология, Фантастика
USA
1927-2014
MY: 0/0
MX: 1395
WN: 2
RAT: 5856'><div class=area style='position:absolute; width:15px; height:20px; left:1414px; top:587px'></div></a>
<a  href='build-rlmap4.php?mp=1395&a_id=331&y=1927' title='Дэниел Киз
Писатель
Психология, Фантастика
USA
1927-2014
MY: 0/0
MX: 1395
WN: 2
RAT: 5856'><div class=area style='position:absolute; width:14px; height:20px; left:1429px; top:587px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=590&a_id=443&y=1927' title='Г. Г. Маркес
Писатель
Магический реализм, 
О любви, Постмодернизм, Социализм, Философия
COL
1927-2014
MY: 0/16
MX: 590
WN: 5
RAT: 46632'><div class=area style='position:absolute; width:29px; height:20px; left:609px; top:621px'></div></a>
<a  href='build-rlmap4.php?mp=590&a_id=443&y=1927' title='Г. Г. Маркес
Писатель
Магический реализм, 
О любви, Постмодернизм, Социализм, Философия
COL
1927-2014
MY: 0/16
MX: 590
WN: 5
RAT: 46632'><div class=area style='position:absolute; width:29px; height:20px; left:638px; top:621px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=590&a_id=9&y=1928' title='Чингиз Айтматов
Писатель
Магический реализм, Соцреализм, 
О любви, Фантастика, Философия
RUS
1928-2008
MY: 0/-14
MX: 590
WN: 11
RAT: 9605'><div class=area style='position:absolute; width:33px; height:20px; left:609px; top:551px'></div></a>
<a  href='build-rlmap4.php?mp=590&a_id=9&y=1928' title='Чингиз Айтматов
Писатель
Магический реализм, Соцреализм, 
О любви, Фантастика, Философия
RUS
1928-2008
MY: 0/-14
MX: 590
WN: 11
RAT: 9605'><div class=area style='position:absolute; width:33px; height:20px; left:642px; top:551px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=836&a_id=1035&y=1928' title='Валентин Пикуль
Писатель
О войне, 
История
RUS
1928-1990
MY: 0/-17
MX: 836
WN: 20
RAT: 13945'><div class=area style='position:absolute; width:28px; height:20px; left:855px; top:526px'></div></a>
<a  href='build-rlmap4.php?mp=836&a_id=1035&y=1928' title='Валентин Пикуль
Писатель
О войне, 
История
RUS
1928-1990
MY: 0/-17
MX: 836
WN: 20
RAT: 13945'><div class=area style='position:absolute; width:27px; height:20px; left:883px; top:526px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=293&y=1929' title='Фазиль Искандер
Писатель
Реализм, 
Детская, Сатира, Юмор
RUS
1929-2016
MY: 0/8
MX: 1302
WN: 7
RAT: 6273'><div class=area style='position:absolute; width:33px; height:20px; left:1321px; top:608px'></div></a>
<a  href='build-rlmap4.php?mp=1302&a_id=293&y=1929' title='Фазиль Искандер
Писатель
Реализм, 
Детская, Сатира, Юмор
RUS
1929-2016
MY: 0/8
MX: 1302
WN: 7
RAT: 6273'><div class=area style='position:absolute; width:33px; height:20px; left:1354px; top:608px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2432&a_id=370&y=1929' title='Милан Кундера
Писатель
Модернизм, 
Коммунист, О любви, Постмодернизм, Философия
CZE
1929-
MY: 0/20
MX: 2432
WN: 6
RAT: 2342'><div class=area style='position:absolute; width:30px; height:20px; left:2451px; top:583px'></div></a>
<a  href='build-rlmap4.php?mp=2432&a_id=370&y=1929' title='Милан Кундера
Писатель
Модернизм, 
Коммунист, О любви, Постмодернизм, Философия
CZE
1929-
MY: 0/20
MX: 2432
WN: 6
RAT: 2342'><div class=area style='position:absolute; width:29px; height:20px; left:2481px; top:583px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=919&a_id=823&y=1929' title='Василий Шукшин
Кинорежиссёр
Деревня, 
О любви, Психология, Публицистика, Юмор
RUS
1929-1974
MY: 0/0
MX: 919
WN: 12
RAT: 9191'><div class=area style='position:absolute; width:29px; height:20px; left:938px; top:547px'></div></a>
<a  href='build-rlmap4.php?mp=919&a_id=823&y=1929' title='Василий Шукшин
Кинорежиссёр
Деревня, 
О любви, Психология, Публицистика, Юмор
RUS
1929-1974
MY: 0/0
MX: 919
WN: 12
RAT: 9191'><div class=area style='position:absolute; width:28px; height:20px; left:967px; top:547px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1977&a_id=1174&y=1929' title='Урсула Ле Гуин
Писательница
Детская, Фэнтези, 
Анархизм, Фантастика, Феминизм
USA
1929-
MY: 0/-5
MX: 1977
WN: 2
RAT: 3230'><div class=area style='position:absolute; width:18px; height:20px; left:1996px; top:530px'></div></a>
<a  href='build-rlmap4.php?mp=1977&a_id=1174&y=1929' title='Урсула Ле Гуин
Писательница
Детская, Фэнтези, 
Анархизм, Фантастика, Феминизм
USA
1929-
MY: 0/-5
MX: 1977
WN: 2
RAT: 3230'><div class=area style='position:absolute; width:18px; height:20px; left:2014px; top:530px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=145&y=1932' title='Владимир Войнович
Писатель
Юмор, 
Антикоммунизм, Антиутопия, Нон-конформизм, Сатира
RUS
1932-
MY: 0/-13
MX: 2209
WN: 4
RAT: 3151'><div class=area style='position:absolute; width:33px; height:20px; left:2228px; top:520px'></div></a>
<a  href='build-rlmap4.php?mp=2209&a_id=145&y=1932' title='Владимир Войнович
Писатель
Юмор, 
Антикоммунизм, Антиутопия, Нон-конформизм, Сатира
RUS
1932-
MY: 0/-13
MX: 2209
WN: 4
RAT: 3151'><div class=area style='position:absolute; width:33px; height:20px; left:2261px; top:520px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1468&a_id=825&y=1932' title='Умберто Эко
Философ
Философия, 
История, Медиевализм, Мистицизм, Постмодернизм
ITA
1932-2016
MY: 0/0
MX: 1468
WN: 5
RAT: 5280'><div class=area style='position:absolute; width:15px; height:20px; left:1487px; top:593px'></div></a>
<a  href='build-rlmap4.php?mp=1468&a_id=825&y=1932' title='Умберто Эко
Философ
Философия, 
История, Медиевализм, Мистицизм, Постмодернизм
ITA
1932-2016
MY: 0/0
MX: 1468
WN: 5
RAT: 5280'><div class=area style='position:absolute; width:15px; height:20px; left:1502px; top:593px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1903&a_id=108&y=1934' title='Кир Булычёв
Писатель
Детская, Фантастика, 
Приключения
RUS
1934-2003
MY: 0/15
MX: 1903
WN: 16
RAT: 5813'><div class=area style='position:absolute; width:31px; height:20px; left:1922px; top:614px'></div></a>
<a  href='build-rlmap4.php?mp=1903&a_id=108&y=1934' title='Кир Булычёв
Писатель
Детская, Фантастика, 
Приключения
RUS
1934-2003
MY: 0/15
MX: 1903
WN: 16
RAT: 5813'><div class=area style='position:absolute; width:30px; height:20px; left:1953px; top:614px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=523&a_id=332&y=1935' title='Кен Кизи
Писатель
Бит, 
Постмодернизм
USA
1935-2001
MY: 0/-3
MX: 523
WN: 2
RAT: 22914'><div class=area style='position:absolute; width:20px; height:20px; left:542px; top:575px'></div></a>
<a  href='build-rlmap4.php?mp=523&a_id=332&y=1935' title='Кен Кизи
Писатель
Бит, 
Постмодернизм
USA
1935-2001
MY: 0/-3
MX: 523
WN: 2
RAT: 22914'><div class=area style='position:absolute; width:19px; height:20px; left:562px; top:575px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2289&a_id=615&y=1935' title='Франсуаза Саган
Писательница
Беллетристика, О любви
FRA
1935-2004
MY: 0/-8
MX: 2289
WN: 7
RAT: 3396'><div class=area style='position:absolute; width:22px; height:20px; left:2308px; top:568px'></div></a>
<a  href='build-rlmap4.php?mp=2289&a_id=615&y=1935' title='Франсуаза Саган
Писательница
Беллетристика, О любви
FRA
1935-2004
MY: 0/-8
MX: 2289
WN: 7
RAT: 3396'><div class=area style='position:absolute; width:21px; height:20px; left:2330px; top:568px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=667&a_id=1054&y=1935' title='Братья Вайнеры

Детектив
RUS
1935-
MY: 0/-15
MX: 667
WN: 6
RAT: 3282'><div class=area style='position:absolute; width:31px; height:20px; left:686px; top:522px'></div></a>
<a  href='build-rlmap4.php?mp=667&a_id=1054&y=1935' title='Братья Вайнеры

Детектив
RUS
1935-
MY: 0/-15
MX: 667
WN: 6
RAT: 3282'><div class=area style='position:absolute; width:30px; height:20px; left:717px; top:522px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=667&a_id=1049&y=1935' title='Пер Вале, Май Шевалль

Детектив, 
Полицейский детектив
SWE
1935-
MY: 0/-4
MX: 667
WN: 2
RAT: 4500'><div class=area style='position:absolute; width:31px; height:20px; left:686px; top:545px'></div></a>
<a  href='build-rlmap4.php?mp=667&a_id=1049&y=1935' title='Пер Вале, Май Шевалль

Детектив, 
Полицейский детектив
SWE
1935-
MY: 0/-4
MX: 667
WN: 2
RAT: 4500'><div class=area style='position:absolute; width:30px; height:20px; left:717px; top:545px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1468&a_id=56&y=1936' title='Ричард Бах
Писатель
Философия, 
Фэнтези
USA
1936-
MY: 0/-4
MX: 1468
WN: 5
RAT: 3534'><div class=area style='position:absolute; width:16px; height:20px; left:1487px; top:547px'></div></a>
<a  href='build-rlmap4.php?mp=1468&a_id=56&y=1936' title='Ричард Бах
Писатель
Философия, 
Фэнтези
USA
1936-
MY: 0/-4
MX: 1468
WN: 5
RAT: 3534'><div class=area style='position:absolute; width:15px; height:20px; left:1503px; top:547px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2289&a_id=429&y=1937' title='Колин Маккалоу
Писательница
О любви, 
История, Фэнтези
AUS
1937-2015
MY: 0/-3
MX: 2289
WN: 9
RAT: 6543'><div class=area style='position:absolute; width:33px; height:20px; left:2308px; top:591px'></div></a>
<a  href='build-rlmap4.php?mp=2289&a_id=429&y=1937' title='Колин Маккалоу
Писательница
О любви, 
История, Фэнтези
AUS
1937-2015
MY: 0/-3
MX: 2289
WN: 9
RAT: 6543'><div class=area style='position:absolute; width:33px; height:20px; left:2341px; top:591px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=919&a_id=590&y=1937' title='Валентин Распутин
Писатель
Деревня
RUS
1937-2015
MY: 0/0
MX: 919
WN: 7
RAT: 14151'><div class=area style='position:absolute; width:35px; height:20px; left:938px; top:598px'></div></a>
<a  href='build-rlmap4.php?mp=919&a_id=590&y=1937' title='Валентин Распутин
Писатель
Деревня
RUS
1937-2015
MY: 0/0
MX: 919
WN: 7
RAT: 14151'><div class=area style='position:absolute; width:34px; height:20px; left:973px; top:598px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1622&a_id=1051&y=1937' title='Роджер Желязны
Писатель
Фантастика, 
Фэнтези, Хоррор
USA
1937-1995
MY: 0/16
MX: 1622
WN: 13
RAT: 3520'><div class=area style='position:absolute; width:32px; height:20px; left:1641px; top:610px'></div></a>
<a  href='build-rlmap4.php?mp=1622&a_id=1051&y=1937' title='Роджер Желязны
Писатель
Фантастика, 
Фэнтези, Хоррор
USA
1937-1995
MY: 0/16
MX: 1622
WN: 13
RAT: 3520'><div class=area style='position:absolute; width:31px; height:20px; left:1673px; top:610px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2134&a_id=1050&y=1937' title='Эдуард Успенский
Писатель
Детская, 
История, Юмор
RUS
1937-
MY: 0/20
MX: 2134
WN: 7
RAT: 3875'><div class=area style='position:absolute; width:34px; height:20px; left:2153px; top:600px'></div></a>
<a  href='build-rlmap4.php?mp=2134&a_id=1050&y=1937' title='Эдуард Успенский
Писатель
Детская, 
История, Юмор
RUS
1937-
MY: 0/20
MX: 2134
WN: 7
RAT: 3875'><div class=area style='position:absolute; width:33px; height:20px; left:2187px; top:600px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=1068&y=1940' title='Григорий Горин
Писатель
Сатира, Юмор, 
Драматургия, Публицистика
RUS
1940-2000
MY: 0/-9
MX: 2209
WN: 1
RAT: 1957'><div class=area style='position:absolute; width:22px; height:20px; left:2228px; top:566px'></div></a>
<a  href='build-rlmap4.php?mp=2209&a_id=1068&y=1940' title='Григорий Горин
Писатель
Сатира, Юмор, 
Драматургия, Публицистика
RUS
1940-2000
MY: 0/-9
MX: 2209
WN: 1
RAT: 1957'><div class=area style='position:absolute; width:21px; height:20px; left:2250px; top:566px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=245&y=1941' title='Сергей Довлатов
Писатель
Реализм, Юмор, 
Автобиография, Публицистика, Сатира
RUS
1941-1990
MY: 0/-16
MX: 2209
WN: 6
RAT: 1160'><div class=area style='position:absolute; width:33px; height:20px; left:2228px; top:543px'></div></a>
<a  href='build-rlmap4.php?mp=2209&a_id=245&y=1941' title='Сергей Довлатов
Писатель
Реализм, Юмор, 
Автобиография, Публицистика, Сатира
RUS
1941-1990
MY: 0/-16
MX: 2209
WN: 6
RAT: 1160'><div class=area style='position:absolute; width:32px; height:20px; left:2261px; top:543px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2574&a_id=1075&y=1942' title='Джон Ирвинг
Писатель
Постмодернизм
USA
1942-
MY: 0/-9
MX: 2574
WN: 3
RAT: 1563'><div class=area style='position:absolute; width:33px; height:20px; left:2593px; top:549px'></div></a>
<a  href='build-rlmap4.php?mp=2574&a_id=1075&y=1942' title='Джон Ирвинг
Писатель
Постмодернизм
USA
1942-
MY: 0/-9
MX: 2574
WN: 3
RAT: 1563'><div class=area style='position:absolute; width:32px; height:20px; left:2626px; top:549px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2574&a_id=1089&y=1943' title='Людмила Улицкая
Писательница
Постмодернизм, Современная проза, 
Реализм, Эстетизм
RUS
1943-
MY: 0/1
MX: 2574
WN: 7
RAT: 1121'><div class=area style='position:absolute; width:29px; height:20px; left:2593px; top:572px'></div></a>
<a  href='build-rlmap4.php?mp=2574&a_id=1089&y=1943' title='Людмила Улицкая
Писательница
Постмодернизм, Современная проза, 
Реализм, Эстетизм
RUS
1943-
MY: 0/1
MX: 2574
WN: 7
RAT: 1121'><div class=area style='position:absolute; width:29px; height:20px; left:2622px; top:572px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=1036&y=1946' title='Леонид Филатов
Актёр
Юмор, 
Сатира
RUS
1946-2003
MY: 0/8
MX: 2209
WN: 2
RAT: 10537'><div class=area style='position:absolute; width:33px; height:20px; left:2228px; top:612px'></div></a>
<a  href='build-rlmap4.php?mp=2209&a_id=1036&y=1946' title='Леонид Филатов
Актёр
Юмор, 
Сатира
RUS
1946-2003
MY: 0/8
MX: 2209
WN: 2
RAT: 10537'><div class=area style='position:absolute; width:33px; height:20px; left:2261px; top:612px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1622&a_id=336&y=1947' title='Стивен Кинг
Писатель
Триллер, Фантастика, Хоррор, 
Мистицизм, Фэнтези
USA
1947-
MY: 0/26
MX: 1622
WN: 33
RAT: 5251'><div class=area style='position:absolute; width:18px; height:20px; left:1641px; top:633px'></div></a>
<a  href='build-rlmap4.php?mp=1622&a_id=336&y=1947' title='Стивен Кинг
Писатель
Триллер, Фантастика, Хоррор, 
Мистицизм, Фэнтези
USA
1947-
MY: 0/26
MX: 1622
WN: 33
RAT: 5251'><div class=area style='position:absolute; width:18px; height:20px; left:1659px; top:633px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1977&a_id=1097&y=1948' title='Анджей Сапковский
Писатель
Фэнтези, 
Приключения, Фантастика
POL
1948-
MY: 0/-13
MX: 1977
WN: 4
RAT: 1022'><div class=area style='position:absolute; width:34px; height:20px; left:1996px; top:554px'></div></a>
<a  href='build-rlmap4.php?mp=1977&a_id=1097&y=1948' title='Анджей Сапковский
Писатель
Фэнтези, 
Приключения, Фантастика
POL
1948-
MY: 0/-13
MX: 1977
WN: 4
RAT: 1022'><div class=area style='position:absolute; width:33px; height:20px; left:2030px; top:554px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1977&a_id=1094&y=1948' title='Терри Пратчетт
Писатель
Сатира, Фэнтези, 
Для подростков, Приключения, Фантастика, Юмор
BRI
1948-2015
MY: 0/-5
MX: 1977
WN: 13
RAT: 1038'><div class=area style='position:absolute; width:31px; height:20px; left:1996px; top:600px'></div></a>
<a  href='build-rlmap4.php?mp=1977&a_id=1094&y=1948' title='Терри Пратчетт
Писатель
Сатира, Фэнтези, 
Для подростков, Приключения, Фантастика, Юмор
BRI
1948-2015
MY: 0/-5
MX: 1977
WN: 13
RAT: 1038'><div class=area style='position:absolute; width:30px; height:20px; left:2027px; top:600px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1977&a_id=1077&y=1948' title='Джордж Мартин
Писатель
Фэнтези, 
История, О войне, О любви, Приключения, Фантастика
USA
1948-
MY: 0/-2
MX: 1977
WN: 4
RAT: 1493'><div class=area style='position:absolute; width:26px; height:20px; left:1996px; top:577px'></div></a>
<a  href='build-rlmap4.php?mp=1977&a_id=1077&y=1948' title='Джордж Мартин
Писатель
Фэнтези, 
История, О войне, О любви, Приключения, Фантастика
USA
1948-
MY: 0/-2
MX: 1977
WN: 4
RAT: 1493'><div class=area style='position:absolute; width:26px; height:20px; left:2022px; top:577px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=590&a_id=285&y=1949' title='Патрик Зюскинд
Писатель
Магический реализм, Постмодернизм, 
Мистицизм, Хоррор
DEU
1949-
MY: 0/-4
MX: 590
WN: 3
RAT: 1495'><div class=area style='position:absolute; width:31px; height:20px; left:609px; top:575px'></div></a>
<a  href='build-rlmap4.php?mp=590&a_id=285&y=1949' title='Патрик Зюскинд
Писатель
Магический реализм, Постмодернизм, 
Мистицизм, Хоррор
DEU
1949-
MY: 0/-4
MX: 590
WN: 3
RAT: 1495'><div class=area style='position:absolute; width:30px; height:20px; left:640px; top:575px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=590&a_id=488&y=1949' title='Харуки Мураками
Писатель
Магический реализм, 
Антиутопия, Постмодернизм, Реализм, Сюрреализм, Фантастика
JAP
1949-
MY: 0/7
MX: 590
WN: 11
RAT: 7778'><div class=area style='position:absolute; width:35px; height:20px; left:609px; top:598px'></div></a>
<a  href='build-rlmap4.php?mp=590&a_id=488&y=1949' title='Харуки Мураками
Писатель
Магический реализм, 
Антиутопия, Постмодернизм, Реализм, Сюрреализм, Фантастика
JAP
1949-
MY: 0/7
MX: 590
WN: 11
RAT: 7778'><div class=area style='position:absolute; width:34px; height:20px; left:644px; top:598px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=523&a_id=597&y=1952' title='Г. Д. Робертс
Писатель
Исповедь, 
Биография, Приключения, Триллер, Философия
AUS
1952-
MY: 0/4
MX: 523
WN: 1
RAT: 1466'><div class=area style='position:absolute; width:29px; height:20px; left:542px; top:598px'></div></a>
<a  href='build-rlmap4.php?mp=523&a_id=597&y=1952' title='Г. Д. Робертс
Писатель
Исповедь, 
Биография, Приключения, Триллер, Философия
AUS
1952-
MY: 0/4
MX: 523
WN: 1
RAT: 1466'><div class=area style='position:absolute; width:28px; height:20px; left:571px; top:598px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=1066&y=1952' title='Дуглас Адамс
Писатель
Фантастика, Юмор
BRI
1952-2001
MY: 0/17
MX: 2209
WN: 1
RAT: 2007'><div class=area style='position:absolute; width:25px; height:20px; left:2228px; top:635px'></div></a>
<a  href='build-rlmap4.php?mp=2209&a_id=1066&y=1952' title='Дуглас Адамс
Писатель
Фантастика, Юмор
BRI
1952-2001
MY: 0/17
MX: 2209
WN: 1
RAT: 2007'><div class=area style='position:absolute; width:25px; height:20px; left:2253px; top:635px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=667&a_id=1063&y=1954' title='Стиг Ларссон
Писатель
Детектив, 
Антифашизм, Мистицизм, Триллер
SWE
1954-2004
MY: 0/16
MX: 667
WN: 3
RAT: 2159'><div class=area style='position:absolute; width:30px; height:20px; left:686px; top:638px'></div></a>
<a  href='build-rlmap4.php?mp=667&a_id=1063&y=1954' title='Стиг Ларссон
Писатель
Детектив, 
Антифашизм, Мистицизм, Триллер
SWE
1954-2004
MY: 0/16
MX: 667
WN: 3
RAT: 2159'><div class=area style='position:absolute; width:30px; height:20px; left:716px; top:638px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2209&a_id=1033&y=1954' title='Юрий Поляков
Писатель
Гротескный реализм, Юмор, 
Биография, О любви, Публицистика, Эротика
RUS
1954-
MY: 0/-2
MX: 2209
WN: 15
RAT: 25046'><div class=area style='position:absolute; width:32px; height:20px; left:2228px; top:589px'></div></a>
<a  href='build-rlmap4.php?mp=2209&a_id=1033&y=1954' title='Юрий Поляков
Писатель
Гротескный реализм, Юмор, 
Биография, О любви, Публицистика, Эротика
RUS
1954-
MY: 0/-2
MX: 2209
WN: 15
RAT: 25046'><div class=area style='position:absolute; width:32px; height:20px; left:2260px; top:589px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=667&a_id=1076&y=1956' title='Борис Акунин
Писатель
Детектив, 
Беллетристика, История, Постмодернизм, Приключения, Фантастика, Японизм
RUS
1956-
MY: 0/8
MX: 667
WN: 15
RAT: 1496'><div class=area style='position:absolute; width:27px; height:20px; left:686px; top:614px'></div></a>
<a  href='build-rlmap4.php?mp=667&a_id=1076&y=1956' title='Борис Акунин
Писатель
Детектив, 
Беллетристика, История, Постмодернизм, Приключения, Фантастика, Японизм
RUS
1956-
MY: 0/8
MX: 667
WN: 15
RAT: 1496'><div class=area style='position:absolute; width:26px; height:20px; left:713px; top:614px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2289&a_id=1070&y=1956' title='Артур Голден
Писатель
О любви, 
История, Японизм
USA
1956-
MY: 0/8
MX: 2289
WN: 1
RAT: 1896'><div class=area style='position:absolute; width:26px; height:20px; left:2308px; top:614px'></div></a>
<a  href='build-rlmap4.php?mp=2289&a_id=1070&y=1956' title='Артур Голден
Писатель
О любви, 
История, Японизм
USA
1956-
MY: 0/8
MX: 2289
WN: 1
RAT: 1896'><div class=area style='position:absolute; width:25px; height:20px; left:2334px; top:614px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2574&a_id=546&y=1962' title='Виктор Пелевин
Писатель
Постмодернизм, 
Буддизм, Магический реализм, Турбореализм, Фантастика, Философия
RUS
1962-
MY: 0/4
MX: 2574
WN: 13
RAT: 3663'><div class=area style='position:absolute; width:30px; height:20px; left:2593px; top:619px'></div></a>
<a  href='build-rlmap4.php?mp=2574&a_id=546&y=1962' title='Виктор Пелевин
Писатель
Постмодернизм, 
Буддизм, Магический реализм, Турбореализм, Фантастика, Философия
RUS
1962-
MY: 0/4
MX: 2574
WN: 13
RAT: 3663'><div class=area style='position:absolute; width:29px; height:20px; left:2623px; top:619px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1977&a_id=605&y=1965' title='Джоан Роулинг
Писательница
Для подростков, Фэнтези, 
Фантастика
BRI
1965-
MY: 0/3
MX: 1977
WN: 4
RAT: 3046'><div class=area style='position:absolute; width:29px; height:20px; left:1996px; top:623px'></div></a>
<a  href='build-rlmap4.php?mp=1977&a_id=605&y=1965' title='Джоан Роулинг
Писательница
Для подростков, Фэнтези, 
Фантастика
BRI
1965-
MY: 0/3
MX: 1977
WN: 4
RAT: 3046'><div class=area style='position:absolute; width:29px; height:20px; left:2025px; top:623px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1977&a_id=1093&y=1965' title='Макс Фрай

Фантастика, Фэнтези
RUS
1965-
MY: 0/14
MX: 1977
WN: 3
RAT: 1052'><div class=area style='position:absolute; width:20px; height:20px; left:1996px; top:646px'></div></a>
<a  href='build-rlmap4.php?mp=1977&a_id=1093&y=1965' title='Макс Фрай

Фантастика, Фэнтези
RUS
1965-
MY: 0/14
MX: 1977
WN: 3
RAT: 1052'><div class=area style='position:absolute; width:20px; height:20px; left:2016px; top:646px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1067&a_id=1065&y=1969' title='Павел Санаев
Писатель
Натурализм, 
Для подростков, Реализм
RUS
1969-
MY: 0/0
MX: 1067
WN: 2
RAT: 2091'><div class=area style='position:absolute; width:26px; height:20px; left:1086px; top:625px'></div></a>
<a  href='build-rlmap4.php?mp=1067&a_id=1065&y=1969' title='Павел Санаев
Писатель
Натурализм, 
Для подростков, Реализм
RUS
1969-
MY: 0/0
MX: 1067
WN: 2
RAT: 2091'><div class=area style='position:absolute; width:26px; height:20px; left:1112px; top:625px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=1302&a_id=1055&y=1969' title='Алексей Иванов
Писатель
Пародия, Реализм, Современная проза, 
Дидактизм, История, Магический реализм, Экзистенциализм, Юмор
RUS
1969-
MY: 0/3
MX: 1302
WN: 5
RAT: 3093'><div class=area style='position:absolute; width:34px; height:20px; left:1321px; top:631px'></div></a>
<a  href='build-rlmap4.php?mp=1302&a_id=1055&y=1969' title='Алексей Иванов
Писатель
Пародия, Реализм, Современная проза, 
Дидактизм, История, Магический реализм, Экзистенциализм, Юмор
RUS
1969-
MY: 0/3
MX: 1302
WN: 5
RAT: 3093'><div class=area style='position:absolute; width:33px; height:20px; left:1355px; top:631px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rlit/authors.php?mp=2056&a_id=213&y=1977' title='Джон Грин
Писатель
Беллетристика, Для подростков, Реализм
USA
1977-
MY: 0/0
MX: 2056
WN: 3
RAT: 1000'><div class=area style='position:absolute; width:25px; height:20px; left:2075px; top:642px'></div></a>
<a  href='build-rlmap4.php?mp=2056&a_id=213&y=1977' title='Джон Грин
Писатель
Беллетристика, Для подростков, Реализм
USA
1977-
MY: 0/0
MX: 2056
WN: 3
RAT: 1000'><div class=area style='position:absolute; width:25px; height:20px; left:2100px; top:642px'></div></a>

</div>
</div>
</table>

<p><a href=?act=moveall>Move all tags and authors to new position</a>
<p><a target=_blank href=edit-rlmap.php?act=optim-dist&mi=3>Optimize vertical distance</a>
<p>Точки в имени показывают сокращение (пропуск букв)
<p>Толстая цветная линия сбоку зоны направления показывает интервал времени, когда стиль был наиболее распространен.
<p>Кликните на автора или стиль чтобы узнать больше или прочитать цитаты. Самые известные авторы выделены жирным шрифтом.
<p>Используйте Ctrl+F или 'Найти на странице' для поиска направлений и авторов на карте.

    <script type='text/javascript'>//<![CDATA[

var astart = [];

astart[21] = 860;

astart[20] = 650;

astart[19] = 440;

astart[18] = 230;

astart[17] = 90;

astart[16] = 76;

astart[15] = 62;

astart[14] = 48;

astart[13] = 34;

astart[12] = 20;

astart[11] = 17;

astart[10] = 14;

astart[9] = 11;

astart[8] = 8;


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
    function closest (num, arr) {
      for (var i = 20; i > -10; i--) {
        var diff = num - arr[i];
        if (diff > 0) {
          return i;
        }
      }
      return 0;
    }
  
function make_y(y) {
      cent = closest(y, astart);
      //return cent;
      if (cent == 0) return 'NAN'
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
                var x = Math.round( e.clientX - 30 + $(window).scrollLeft()),
                    y = make_y( e.clientY - 16 + $(window).scrollTop() );
                
                $( tooltip ).text( x + ' : ' + y).css({
                    left: e.clientX - 38,
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
  
