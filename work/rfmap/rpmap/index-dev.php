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
<a id='tМатериализм' name='tМатериализм' style='position: absolute; top: 860px; left: 1790px'><font color=white size=3>Материализм</font></a>
<a id='tОбъективный идеализм' name='tОбъективный идеализм' style='position: absolute; top: 860px; left: 1790px'><font color=white size=3>Объективный идеализм</font></a>
<a id='tСубъективный идеализм' name='tСубъективный идеализм' style='position: absolute; top: 860px; left: 1790px'><font color=white size=3>Субъективный идеализм</font></a>
<a id='tПолитическая философия' name='tПолитическая философия' style='position: absolute; top: 860px; left: 1790px'><font color=white size=3>Политическая философия</font></a>
<a id='tВосточная философия' name='tВосточная философия' style='position: absolute; top: 860px; left: 1790px'><font color=white size=3>Восточная философия</font></a>
<a id='tДругие' name='tДругие' style='position: absolute; top: 860px; left: 1790px'><font color=white size=3>Другие</font></a>
<a id='tСубъективный идеализм' name='tСубъективный идеализм' style='position: absolute; top: 281px; left: 1790px'><font color=white size=3>Субъективный идеализм</font></a>
<a id='tОбъективный идеализм' name='tОбъективный идеализм' style='position: absolute; top: 334px; left: 1790px'><font color=white size=3>Объективный идеализм</font></a>
<a id='tПлатонизм' name='tПлатонизм' style='position: absolute; top: 11px; left: 1790px'><font color=white size=3>Платонизм</font></a>
<a id='tАнтропологизм' name='tАнтропологизм' style='position: absolute; top: 464px; left: 1790px'><font color=white size=3>Антропологизм</font></a>
<a id='tМарксизм' name='tМарксизм' style='position: absolute; top: 506px; left: 1790px'><font color=white size=3>Марксизм</font></a>
<a id='tЭмпиризм' name='tЭмпиризм' style='position: absolute; top: 230px; left: 1790px'><font color=white size=3>Эмпиризм</font></a>
<a id='tРационализм' name='tРационализм' style='position: absolute; top: 217px; left: 1790px'><font color=white size=3>Рационализм</font></a>
<a id='tИррационализм' name='tИррационализм' style='position: absolute; top: 632px; left: 1790px'><font color=white size=3>Иррационализм</font></a>
<a id='tСкептицизм' name='tСкептицизм' style='position: absolute; top: 11px; left: 1790px'><font color=white size=3>Скептицизм</font></a>
<a id='tДревний материализм' name='tДревний материализм' style='position: absolute; top: -5px; left: 1790px'><font color=white size=3>Древний материализм</font></a>
<a id='tВосточная философия' name='tВосточная философия' style='position: absolute; top: 518px; left: 1790px'><font color=white size=3>Восточная философия</font></a>
<a id='tКонфуцианство' name='tКонфуцианство' style='position: absolute; top: -5px; left: 1790px'><font color=white size=3>Конфуцианство</font></a>
<a id='tБуддизм' name='tБуддизм' style='position: absolute; top: 1px; left: 1790px'><font color=white size=3>Буддизм</font></a>
<a id='tДаосизм' name='tДаосизм' style='position: absolute; top: 1px; left: 1790px'><font color=white size=3>Даосизм</font></a>
<a id='tПифагорейцы' name='tПифагорейцы' style='position: absolute; top: -5px; left: 1790px'><font color=white size=3>Пифагорейцы</font></a>
<a id='tЭлейцы' name='tЭлейцы' style='position: absolute; top: 1px; left: 1790px'><font color=white size=3>Элейцы</font></a>
<a id='tСофизм' name='tСофизм' style='position: absolute; top: 16px; left: 1790px'><font color=white size=3>Софизм</font></a>
<a id='tЭпикурейство' name='tЭпикурейство' style='position: absolute; top: 66px; left: 1790px'><font color=white size=3>Эпикурейство</font></a>
<a id='tКинизм' name='tКинизм' style='position: absolute; top: 16px; left: 1790px'><font color=white size=3>Кинизм</font></a>
<a id='tСтоицизм' name='tСтоицизм' style='position: absolute; top: 52px; left: 1790px'><font color=white size=3>Стоицизм</font></a>
<a id='tНеоплатонизм' name='tНеоплатонизм' style='position: absolute; top: 104px; left: 1790px'><font color=white size=3>Неоплатонизм</font></a>
<a id='tАтомизм' name='tАтомизм' style='position: absolute; top: 16px; left: 1790px'><font color=white size=3>Атомизм</font></a>
<a id='tАристотелизм' name='tАристотелизм' style='position: absolute; top: 58px; left: 1790px'><font color=white size=3>Аристотелизм</font></a>
<a id='tСократики' name='tСократики' style='position: absolute; top: 6px; left: 1790px'><font color=white size=3>Сократики</font></a>
<a id='tМоизм' name='tМоизм' style='position: absolute; top: 19px; left: 1790px'><font color=white size=3>Моизм</font></a>
<a id='tЛегизм' name='tЛегизм' style='position: absolute; top: 45px; left: 1790px'><font color=white size=3>Легизм</font></a>
<a id='tРанняя партистика' name='tРанняя партистика' style='position: absolute; top: 104px; left: 1790px'><font color=white size=3>Ранняя партистика</font></a>
<a id='tЗрелая патристика' name='tЗрелая патристика' style='position: absolute; top: 136px; left: 1790px'><font color=white size=3>Зрелая патристика</font></a>
<a id='tПоздняя патристика' name='tПоздняя патристика' style='position: absolute; top: 167px; left: 1790px'><font color=white size=3>Поздняя патристика</font></a>
<a id='tРанняя схоластика' name='tРанняя схоластика' style='position: absolute; top: 188px; left: 1790px'><font color=white size=3>Ранняя схоластика</font></a>
<a id='tЗрелая схоластика' name='tЗрелая схоластика' style='position: absolute; top: 210px; left: 1790px'><font color=white size=3>Зрелая схоластика</font></a>
<a id='tПоздняя схоластика' name='tПоздняя схоластика' style='position: absolute; top: 229px; left: 1790px'><font color=white size=3>Поздняя схоластика</font></a>
<a id='tМистицизм' name='tМистицизм' style='position: absolute; top: 189px; left: 1790px'><font color=white size=3>Мистицизм</font></a>
<a id='tГуманизм' name='tГуманизм' style='position: absolute; top: 217px; left: 1790px'><font color=white size=3>Гуманизм</font></a>
<a id='tАнтропоцентризм' name='tАнтропоцентризм' style='position: absolute; top: 196px; left: 1790px'><font color=white size=3>Антропоцентризм</font></a>
<a id='tХристианский гуманизм' name='tХристианский гуманизм' style='position: absolute; top: 217px; left: 1790px'><font color=white size=3>Христианский гуманизм</font></a>
<a id='tНатурфилософия' name='tНатурфилософия' style='position: absolute; top: 217px; left: 1790px'><font color=white size=3>Натурфилософия</font></a>
<a id='tДеспотизм' name='tДеспотизм' style='position: absolute; top: 217px; left: 1790px'><font color=white size=3>Деспотизм</font></a>
<a id='tУтопизм' name='tУтопизм' style='position: absolute; top: 217px; left: 1790px'><font color=white size=3>Утопизм</font></a>
<a id='tПротестантизм' name='tПротестантизм' style='position: absolute; top: 254px; left: 1790px'><font color=white size=3>Протестантизм</font></a>
<a id='tМатериалистический атеизм' name='tМатериалистический атеизм' style='position: absolute; top: 306px; left: 1790px'><font color=white size=3>Материалистический атеизм</font></a>
<a id='tДеизм' name='tДеизм' style='position: absolute; top: 306px; left: 1790px'><font color=white size=3>Деизм</font></a>
<a id='tЭкзистенциализм' name='tЭкзистенциализм' style='position: absolute; top: 447px; left: 1790px'><font color=white size=3>Экзистенциализм</font></a>
<a id='tПозитивизм' name='tПозитивизм' style='position: absolute; top: 436px; left: 1790px'><font color=white size=3>Позитивизм</font></a>
<a id='tПостпозитивизм' name='tПостпозитивизм' style='position: absolute; top: 659px; left: 1790px'><font color=white size=3>Постпозитивизм</font></a>
<a id='tПрагматизм' name='tПрагматизм' style='position: absolute; top: 529px; left: 1790px'><font color=white size=3>Прагматизм</font></a>
<a id='tФилософия жизни' name='tФилософия жизни' style='position: absolute; top: 436px; left: 1790px'><font color=white size=3>Философия жизни</font></a>
<a id='tПсихоанализ' name='tПсихоанализ' style='position: absolute; top: 590px; left: 1790px'><font color=white size=3>Психоанализ</font></a>
<a id='tАтеистический экзистенциализм' name='tАтеистический экзистенциализм' style='position: absolute; top: 604px; left: 1790px'><font color=white size=3>Атеистический экзистенциализм</font></a>
<a id='tНаучный космизм' name='tНаучный космизм' style='position: absolute; top: 585px; left: 1790px'><font color=white size=3>Научный космизм</font></a>
<a id='tЗападничество' name='tЗападничество' style='position: absolute; top: 453px; left: 1790px'><font color=white size=3>Западничество</font></a>
<a id='tСлавянофильство' name='tСлавянофильство' style='position: absolute; top: 438px; left: 1790px'><font color=white size=3>Славянофильство</font></a>
<a id='tХристианство' name='tХристианство' style='position: absolute; top: 327px; left: 1790px'><font color=white size=3>Христианство</font></a>
<a id='tРелигиозный экзистенциализм' name='tРелигиозный экзистенциализм' style='position: absolute; top: 548px; left: 1790px'><font color=white size=3>Религиозный экзистенциализм</font></a>
<a id='tАналитическая философия' name='tАналитическая философия' style='position: absolute; top: 604px; left: 1790px'><font color=white size=3>Аналитическая философия</font></a>
<a id='tНеотомизм' name='tНеотомизм' style='position: absolute; top: 592px; left: 1790px'><font color=white size=3>Неотомизм</font></a>
<a id='tРелигиозный персонализм' name='tРелигиозный персонализм' style='position: absolute; top: 592px; left: 1790px'><font color=white size=3>Религиозный персонализм</font></a>
<a id='tАнархизм' name='tАнархизм' style='position: absolute; top: 497px; left: 1790px'><font color=white size=3>Анархизм</font></a>
<a id='tНигилизм' name='tНигилизм' style='position: absolute; top: 516px; left: 1790px'><font color=white size=3>Нигилизм</font></a>
<a id='tФеноменология' name='tФеноменология' style='position: absolute; top: 579px; left: 1790px'><font color=white size=3>Феноменология</font></a>
<a id='tТоталитаризм' name='tТоталитаризм' style='position: absolute; top: 663px; left: 1790px'><font color=white size=3>Тоталитаризм</font></a>
<a id='tПостмодернизм' name='tПостмодернизм' style='position: absolute; top: 671px; left: 1790px'><font color=white size=3>Постмодернизм</font></a>
<a id='tСтруктурализм' name='tСтруктурализм' style='position: absolute; top: 732px; left: 1790px'><font color=white size=3>Структурализм</font></a>
<a id='tГерменевтика' name='tГерменевтика' style='position: absolute; top: 718px; left: 1790px'><font color=white size=3>Герменевтика</font></a>
<a id='tФилософская литература' name='tФилософская литература' style='position: absolute; top: -5px; left: 1790px'><font color=white size=3>Философская литература</font></a>
<a id='tВосточная_философия средневековья' name='tВосточная_философия средневековья' style='position: absolute; top: 161px; left: 1790px'><font color=white size=3>Восточная_философия средневековья</font></a>
<a id='tЙога' name='tЙога' style='position: absolute; top: 59px; left: 1790px'><font color=white size=3>Йога</font></a>
<a id='a1883' name='#a1883' style='position: absolute; top: 24px; left: 1790px'><font color=white size=3>Гесиод</font></a>
<a id='a1921' name='#a1921' style='position: absolute; top: 22px; left: 1790px'><font color=white size=3>Гомер</font></a>
<a id='a6744' name='#a6744' style='position: absolute; top: 29px; left: 1790px'><font color=white size=3>Фалес</font></a>
<a id='a1968' name='#a1968' style='position: absolute; top: 45px; left: 1790px'><font color=white size=3>Гуань</font></a>
<a id='a3887' name='#a3887' style='position: absolute; top: 43px; left: 1790px'><font color=white size=3>Лао-Цзы</font></a>
<a id='a575' name='#a575' style='position: absolute; top: 41px; left: 1790px'><font color=white size=3>Анаксимен</font></a>
<a id='a3830' name='#a3830' style='position: absolute; top: 43px; left: 1790px'><font color=white size=3>Ксенофан</font></a>
<a id='a5393' name='#a5393' style='position: absolute; top: 47px; left: 1790px'><font color=white size=3>Пифагор</font></a>
<a id='a6126' name='#a6126' style='position: absolute; top: 40px; left: 1790px'><font color=white size=3>Будда</font></a>
<a id='a3755' name='#a3755' style='position: absolute; top: 51px; left: 1790px'><font color=white size=3>Конфуций</font></a>
<a id='a1850' name='#a1850' style='position: absolute; top: 51px; left: 1790px'><font color=white size=3>Гераклит</font></a>
<a id='a5266' name='#a5266' style='position: absolute; top: 54px; left: 1790px'><font color=white size=3>Парменид</font></a>
<a id='a574' name='#a574' style='position: absolute; top: 73px; left: 1790px'><font color=white size=3>Анаксагор</font></a>
<a id='a4530' name='#a4530' style='position: absolute; top: 57px; left: 1790px'><font color=white size=3>Метродор</font></a>
<a id='a3156' name='#a3156' style='position: absolute; top: 65px; left: 1790px'><font color=white size=3>Зенон Э</font></a>
<a id='a7558' name='#a7558' style='position: absolute; top: 63px; left: 1790px'><font color=white size=3>Эмпедокл</font></a>
<a id='a5472' name='#a5472' style='position: absolute; top: 61px; left: 1790px'><font color=white size=3>Протагор</font></a>
<a id='a1924' name='#a1924' style='position: absolute; top: 63px; left: 1790px'><font color=white size=3>Горгий</font></a>
<a id='a4697' name='#a4697' style='position: absolute; top: 63px; left: 1790px'><font color=white size=3>Мо-Цзы</font></a>
<a id='a6176' name='#a6176' style='position: absolute; top: 62px; left: 1790px'><font color=white size=3>Сократ</font></a>
<a id='a2067' name='#a2067' style='position: absolute; top: 58px; left: 1790px'><font color=white size=3>Демокрит</font></a>
<a id='a7822' name='#a7822' style='position: absolute; top: 66px; left: 1790px'><font color=white size=3>Ян Чжу</font></a>
<a id='a804' name='#a804' style='position: absolute; top: 63px; left: 1790px'><font color=white size=3>Антисфен</font></a>
<a id='a5395' name='#a5395' style='position: absolute; top: 68px; left: 1790px'><font color=white size=3>Платон</font></a>
<a id='a2634' name='#a2634' style='position: absolute; top: 71px; left: 1790px'><font color=white size=3>Диоген С</font></a>
<a id='a868' name='#a868' style='position: absolute; top: 76px; left: 1790px'><font color=white size=3>Аристотель</font></a>
<a id='a4766' name='#a4766' style='position: absolute; top: 77px; left: 1790px'><font color=white size=3>Мэн-цзы</font></a>
<a id='a6425' name='#a6425' style='position: absolute; top: 98px; left: 1790px'><font color=white size=3>Теофраст</font></a>
<a id='a7226' name='#a7226' style='position: absolute; top: 88px; left: 1790px'><font color=white size=3>Чжуан-цзы</font></a>
<a id='a7851' name='#a7851' style='position: absolute; top: 79px; left: 1790px'><font color=white size=3>Пиррон</font></a>
<a id='a7603' name='#a7603' style='position: absolute; top: 84px; left: 1790px'><font color=white size=3>Эпикур</font></a>
<a id='a3154' name='#a3154' style='position: absolute; top: 81px; left: 1790px'><font color=white size=3>Зенон К</font></a>
<a id='a3667' name='#a3667' style='position: absolute; top: 84px; left: 1790px'><font color=white size=3>Клеанф</font></a>
<a id='a1101' name='#a1101' style='position: absolute; top: 85px; left: 1790px'><font color=white size=3>Бион</font></a>
<a id='a3880' name='#a3880' style='position: absolute; top: 90px; left: 1790px'><font color=white size=3>Лакид</font></a>
<a id='a7032' name='#a7032' style='position: absolute; top: 87px; left: 1790px'><font color=white size=3>Хань Ф</font></a>
<a id='a7124' name='#a7124' style='position: absolute; top: 89px; left: 1790px'><font color=white size=3>Хрисипп</font></a>
<a id='a3560' name='#a3560' style='position: absolute; top: 101px; left: 1790px'><font color=white size=3>Карнеад</font></a>
<a id='a5269' name='#a5269' style='position: absolute; top: 101px; left: 1790px'><font color=white size=3>Патанджали</font></a>
<a id='a5257' name='#a5257' style='position: absolute; top: 103px; left: 1790px'><font color=white size=3>Панетий</font></a>
<a id='a5460' name='#a5460' style='position: absolute; top: 113px; left: 1790px'><font color=white size=3>Посидоний</font></a>
<a id='a4431' name='#a4431' style='position: absolute; top: 113px; left: 1790px'><font color=white size=3>Цицерон</font></a>
<a id='a6482' name='#a6482' style='position: absolute; top: 113px; left: 1790px'><font color=white size=3>Тит</font></a>
<a id='a6848' name='#a6848' style='position: absolute; top: 122px; left: 1790px'><font color=white size=3>Филон</font></a>
<a id='a4162' name='#a4162' style='position: absolute; top: 143px; left: 1790px'><font color=white size=3>Сенека</font></a>
<a id='a5399' name='#a5399' style='position: absolute; top: 135px; left: 1790px'><font color=white size=3>Плутарх</font></a>
<a id='a7602' name='#a7602' style='position: absolute; top: 128px; left: 1790px'><font color=white size=3>Эпиктет</font></a>
<a id='a2068' name='#a2068' style='position: absolute; top: 150px; left: 1790px'><font color=white size=3>Демонакт</font></a>
<a id='a7775' name='#a7775' style='position: absolute; top: 142px; left: 1790px'><font color=white size=3>Юстин</font></a>
<a id='a4406' name='#a4406' style='position: absolute; top: 146px; left: 1790px'><font color=white size=3>Марк Авр.</font></a>
<a id='a6437' name='#a6437' style='position: absolute; top: 150px; left: 1790px'><font color=white size=3>Тертуллиан</font></a>
<a id='a5398' name='#a5398' style='position: absolute; top: 149px; left: 1790px'><font color=white size=3>Плотин</font></a>
<a id='a5459' name='#a5459' style='position: absolute; top: 161px; left: 1790px'><font color=white size=3>Порфирий</font></a>
<a id='a7802' name='#a7802' style='position: absolute; top: 171px; left: 1790px'><font color=white size=3>Ямвлих</font></a>
<a id='a1325' name='#a1325' style='position: absolute; top: 173px; left: 1790px'><font color=white size=3>Василий В</font></a>
<a id='a58' name='#a58' style='position: absolute; top: 178px; left: 1790px'><font color=white size=3>Аврелий</font></a>
<a id='a736' name='#a736' style='position: absolute; top: 193px; left: 1790px'><font color=white size=3>Боэций</font></a>
<a id='a4293' name='#a4293' style='position: absolute; top: 210px; left: 1790px'><font color=white size=3>Максим И</font></a>
<a id='a3355' name='#a3355' style='position: absolute; top: 213px; left: 1790px'><font color=white size=3>И Дамаскин</font></a>
<a id='a7031' name='#a7031' style='position: absolute; top: 213px; left: 1790px'><font color=white size=3>Хань С</font></a>
<a id='a7852' name='#a7852' style='position: absolute; top: 225px; left: 1790px'><font color=white size=3>Эриугена</font></a>
<a id='a488' name='#a488' style='position: absolute; top: 213px; left: 1790px'><font color=white size=3>Аль-Фараби</font></a>
<a id='a41' name='#a41' style='position: absolute; top: 235px; left: 1790px'><font color=white size=3>Абуль-Ала</font></a>
<a id='a29' name='#a29' style='position: absolute; top: 226px; left: 1790px'><font color=white size=3>Авиценна</font></a>
<a id='a3184' name='#a3184' style='position: absolute; top: 235px; left: 1790px'><font color=white size=3>Ибн Хазм</font></a>
<a id='a5168' name='#a5168' style='position: absolute; top: 248px; left: 1790px'><font color=white size=3>О Хайям</font></a>
<a id='a5482' name='#a5482' style='position: absolute; top: 238px; left: 1790px'><font color=white size=3>Абеляр</font></a>
<a id='a4702' name='#a4702' style='position: absolute; top: 257px; left: 1790px'><font color=white size=3>Маймонид</font></a>
<a id='a7245' name='#a7245' style='position: absolute; top: 257px; left: 1790px'><font color=white size=3>Тебризи</font></a>
<a id='a2109' name='#a2109' style='position: absolute; top: 246px; left: 1790px'><font color=white size=3>Руми</font></a>
<a id='a5781' name='#a5781' style='position: absolute; top: 248px; left: 1790px'><font color=white size=3>Р Бэкон</font></a>
<a id='a6865' name='#a6865' style='position: absolute; top: 248px; left: 1790px'><font color=white size=3>Аквинский</font></a>
<a id='a4517' name='#a4517' style='position: absolute; top: 251px; left: 1790px'><font color=white size=3>Экхарт</font></a>
<a id='a6662' name='#a6662' style='position: absolute; top: 252px; left: 1790px'><font color=white size=3>Оккам</font></a>
<a id='a4945' name='#a4945' style='position: absolute; top: 262px; left: 1790px'><font color=white size=3>Кузанский</font></a>
<a id='a4098' name='#a4098' style='position: absolute; top: 261px; left: 1790px'><font color=white size=3>Валла</font></a>
<a id='a4460' name='#a4460' style='position: absolute; top: 259px; left: 1790px'><font color=white size=3>Фичино</font></a>
<a id='a3465' name='#a3465' style='position: absolute; top: 268px; left: 1790px'><font color=white size=3>Кабир</font></a>
<a id='a2309' name='#a2309' style='position: absolute; top: 269px; left: 1790px'><font color=white size=3>Савонарола</font></a>
<a id='a3966' name='#a3966' style='position: absolute; top: 267px; left: 1790px'><font color=white size=3>да Винчи</font></a>
<a id='a2340' name='#a2340' style='position: absolute; top: 269px; left: 1790px'><font color=white size=3>Пико</font></a>
<a id='a4889' name='#a4889' style='position: absolute; top: 272px; left: 1790px'><font color=white size=3>Макиавелли</font></a>
<a id='a7608' name='#a7608' style='position: absolute; top: 281px; left: 1790px'><font color=white size=3>Эразм Р</font></a>
<a id='a6544' name='#a6544' style='position: absolute; top: 269px; left: 1790px'><font color=white size=3>Мор</font></a>
<a id='a4469' name='#a4469' style='position: absolute; top: 274px; left: 1790px'><font color=white size=3>Лютер</font></a>
<a id='a5264' name='#a5264' style='position: absolute; top: 274px; left: 1790px'><font color=white size=3>Парацельс</font></a>
<a id='a3017' name='#a3017' style='position: absolute; top: 277px; left: 1790px'><font color=white size=3>Кальвин</font></a>
<a id='a4684' name='#a4684' style='position: absolute; top: 283px; left: 1790px'><font color=white size=3>Монтень</font></a>
<a id='a2515' name='#a2515' style='position: absolute; top: 284px; left: 1790px'><font color=white size=3>Бруно</font></a>
<a id='a6987' name='#a6987' style='position: absolute; top: 274px; left: 1790px'><font color=white size=3>Ф Бэкон</font></a>
<a id='a1686' name='#a1686' style='position: absolute; top: 289px; left: 1790px'><font color=white size=3>Галилей</font></a>
<a id='a6566' name='#a6566' style='position: absolute; top: 291px; left: 1790px'><font color=white size=3>Кампанелла</font></a>
<a id='a2403' name='#a2403' style='position: absolute; top: 290px; left: 1790px'><font color=white size=3>Донн</font></a>
<a id='a7785' name='#a7785' style='position: absolute; top: 286px; left: 1790px'><font color=white size=3>Бёме</font></a>
<a id='a6527' name='#a6527' style='position: absolute; top: 296px; left: 1790px'><font color=white size=3>Гоббс</font></a>
<a id='a5614' name='#a5614' style='position: absolute; top: 274px; left: 1790px'><font color=white size=3>Декарт</font></a>
<a id='a1105' name='#a1105' style='position: absolute; top: 296px; left: 1790px'><font color=white size=3>Паскаль</font></a>
<a id='a1033' name='#a1033' style='position: absolute; top: 318px; left: 1790px'><font color=white size=3>Спиноза</font></a>
<a id='a2432' name='#a2432' style='position: absolute; top: 318px; left: 1790px'><font color=white size=3>Локк</font></a>
<a id='a1927' name='#a1927' style='position: absolute; top: 341px; left: 1790px'><font color=white size=3>Лейбниц</font></a>
<a id='a2104' name='#a2104' style='position: absolute; top: 336px; left: 1790px'><font color=white size=3>Беркли</font></a>
<a id='a7267' name='#a7267' style='position: absolute; top: 325px; left: 1790px'><font color=white size=3>Монтескьё</font></a>
<a id='a1633' name='#a1633' style='position: absolute; top: 348px; left: 1790px'><font color=white size=3>Вольтер</font></a>
<a id='a2813' name='#a2813' style='position: absolute; top: 362px; left: 1790px'><font color=white size=3>Юм</font></a>
<a id='a4615' name='#a4615' style='position: absolute; top: 345px; left: 1790px'><font color=white size=3>Ломоносов</font></a>
<a id='a3047' name='#a3047' style='position: absolute; top: 370px; left: 1790px'><font color=white size=3>Руссо</font></a>
<a id='a2075' name='#a2075' style='position: absolute; top: 363px; left: 1790px'><font color=white size=3>Дидро</font></a>
<a id='a3680' name='#a3680' style='position: absolute; top: 369px; left: 1790px'><font color=white size=3>Гельвеций</font></a>
<a id='a1960' name='#a1960' style='position: absolute; top: 381px; left: 1790px'><font color=white size=3>Сковорода</font></a>
<a id='a5456' name='#a5456' style='position: absolute; top: 385px; left: 1790px'><font color=white size=3>Гольбах</font></a>
<a id='a3335' name='#a3335' style='position: absolute; top: 390px; left: 1790px'><font color=white size=3>Кант</font></a>
<a id='a2250' name='#a2250' style='position: absolute; top: 514px; left: 1790px'><font color=white size=3>Бентам</font></a>
<a id='a295' name='#a295' style='position: absolute; top: 406px; left: 1790px'><font color=white size=3>Радищев</font></a>
<a id='a3362' name='#a3362' style='position: absolute; top: 425px; left: 1790px'><font color=white size=3>Гёте</font></a>
<a id='a3373' name='#a3373' style='position: absolute; top: 402px; left: 1790px'><font color=white size=3>Шиллер</font></a>
<a id='a790' name='#a790' style='position: absolute; top: 430px; left: 1790px'><font color=white size=3>Сен-Симон</font></a>
<a id='a3367' name='#a3367' style='position: absolute; top: 423px; left: 1790px'><font color=white size=3>Фихте</font></a>
<a id='a1821' name='#a1821' style='position: absolute; top: 442px; left: 1790px'><font color=white size=3>Гегель</font></a>
<a id='a5022' name='#a5022' style='position: absolute; top: 422px; left: 1790px'><font color=white size=3>Новалис</font></a>
<a id='a6332' name='#a6332' style='position: absolute; top: 448px; left: 1790px'><font color=white size=3>Кольридж</font></a>
<a id='a6951' name='#a6951' style='position: absolute; top: 472px; left: 1790px'><font color=white size=3>Шеллинг</font></a>
<a id='a941' name='#a941' style='position: absolute; top: 490px; left: 1790px'><font color=white size=3>Шопенгауэр</font></a>
<a id='a5350' name='#a5350' style='position: absolute; top: 493px; left: 1790px'><font color=white size=3>Чаадаев</font></a>
<a id='a2108' name='#a2108' style='position: absolute; top: 472px; left: 1790px'><font color=white size=3>Леопарди</font></a>
<a id='a5069' name='#a5069' style='position: absolute; top: 490px; left: 1790px'><font color=white size=3>Конт</font></a>
<a id='a5555' name='#a5555' style='position: absolute; top: 541px; left: 1790px'><font color=white size=3>Эмерсон</font></a>
<a id='a6764' name='#a6764' style='position: absolute; top: 495px; left: 1790px'><font color=white size=3>Тютчев</font></a>
<a id='a412' name='#a412' style='position: absolute; top: 503px; left: 1790px'><font color=white size=3>Хомяков</font></a>
<a id='a4180' name='#a4180' style='position: absolute; top: 520px; left: 1790px'><font color=white size=3>Фейербах</font></a>
<a id='a2469' name='#a2469' style='position: absolute; top: 537px; left: 1790px'><font color=white size=3>Милль</font></a>
<a id='a245' name='#a245' style='position: absolute; top: 526px; left: 1790px'><font color=white size=3>Герцен</font></a>
<a id='a6109' name='#a6109' style='position: absolute; top: 511px; left: 1790px'><font color=white size=3>Кьеркегор</font></a>
<a id='a4602' name='#a4602' style='position: absolute; top: 535px; left: 1790px'><font color=white size=3>Бакунин</font></a>
<a id='a1784' name='#a1784' style='position: absolute; top: 518px; left: 1790px'><font color=white size=3>Торо</font></a>
<a id='a3747' name='#a3747' style='position: absolute; top: 526px; left: 1790px'><font color=white size=3>Аксаков</font></a>
<a id='a3527' name='#a3527' style='position: absolute; top: 543px; left: 1790px'><font color=white size=3>Маркс</font></a>
<a id='a1869' name='#a1869' style='position: absolute; top: 587px; left: 1790px'><font color=white size=3>Мелвилл</font></a>
<a id='a1857' name='#a1857' style='position: absolute; top: 583px; left: 1790px'><font color=white size=3>Спенсер</font></a>
<a id='a6961' name='#a6961' style='position: absolute; top: 566px; left: 1790px'><font color=white size=3>Энгельс</font></a>
<a id='a6766' name='#a6766' style='position: absolute; top: 564px; left: 1790px'><font color=white size=3>Достоевский</font></a>
<a id='a3387' name='#a3387' style='position: absolute; top: 560px; left: 1790px'><font color=white size=3>Тэн</font></a>
<a id='a3929' name='#a3929' style='position: absolute; top: 610px; left: 1790px'><font color=white size=3>Толстой</font></a>
<a id='a4922' name='#a4922' style='position: absolute; top: 564px; left: 1790px'><font color=white size=3>Чернышевский</font></a>
<a id='a7173' name='#a7173' style='position: absolute; top: 612px; left: 1790px'><font color=white size=3>Пирс</font></a>
<a id='a2675' name='#a2675' style='position: absolute; top: 553px; left: 1790px'><font color=white size=3>Писарев</font></a>
<a id='a6641' name='#a6641' style='position: absolute; top: 589px; left: 1790px'><font color=white size=3>Джеймс</font></a>
<a id='a6950' name='#a6950' style='position: absolute; top: 591px; left: 1790px'><font color=white size=3>Ницше</font></a>
<a id='a1461' name='#a1461' style='position: absolute; top: 612px; left: 1790px'><font color=white size=3>Виндельбанд</font></a>
<a id='a1602' name='#a1602' style='position: absolute; top: 602px; left: 1790px'><font color=white size=3>Соловьёв</font></a>
<a id='a1324' name='#a1324' style='position: absolute; top: 625px; left: 1790px'><font color=white size=3>Розанов</font></a>
<a id='a1833' name='#a1833' style='position: absolute; top: 623px; left: 1790px'><font color=white size=3>Плеханов</font></a>
<a id='a3160' name='#a3160' style='position: absolute; top: 646px; left: 1790px'><font color=white size=3>Фрейд</font></a>
<a id='a3752' name='#a3752' style='position: absolute; top: 640px; left: 1790px'><font color=white size=3>Циолковский</font></a>
<a id='a782' name='#a782' style='position: absolute; top: 648px; left: 1790px'><font color=white size=3>Бергсон</font></a>
<a id='a2405' name='#a2405' style='position: absolute; top: 663px; left: 1790px'><font color=white size=3>Дьюи</font></a>
<a id='a7411' name='#a7411' style='position: absolute; top: 648px; left: 1790px'><font color=white size=3>Гуссерль</font></a>
<a id='a1555' name='#a1555' style='position: absolute; top: 663px; left: 1790px'><font color=white size=3>Вернадский</font></a>
<a id='a2550' name='#a2550' style='position: absolute; top: 677px; left: 1790px'><font color=white size=3>Сантаяна</font></a>
<a id='a5962' name='#a5962' style='position: absolute; top: 614px; left: 1790px'><font color=white size=3>Вивекананда</font></a>
<a id='a4541' name='#a4541' style='position: absolute; top: 637px; left: 1790px'><font color=white size=3>Унамуно</font></a>
<a id='a2697' name='#a2697' style='position: absolute; top: 648px; left: 1790px'><font color=white size=3>Мережковский</font></a>
<a id='a3925' name='#a3925' style='position: absolute; top: 661px; left: 1790px'><font color=white size=3>Шестов</font></a>
<a id='a5839' name='#a5839' style='position: absolute; top: 671px; left: 1790px'><font color=white size=3>Роллан</font></a>
<a id='a4506' name='#a4506' style='position: absolute; top: 644px; left: 1790px'><font color=white size=3>Ганди</font></a>
<a id='a1562' name='#a1562' style='position: absolute; top: 646px; left: 1790px'><font color=white size=3>Ленин</font></a>
<a id='a4967' name='#a4967' style='position: absolute; top: 688px; left: 1790px'><font color=white size=3>Лосский</font></a>
<a id='a1059' name='#a1059' style='position: absolute; top: 703px; left: 1790px'><font color=white size=3>Рассел</font></a>
<a id='a7312' name='#a7312' style='position: absolute; top: 667px; left: 1790px'><font color=white size=3>Ауробиндо</font></a>
<a id='a4900' name='#a4900' style='position: absolute; top: 684px; left: 1790px'><font color=white size=3>Бердяев</font></a>
<a id='a507' name='#a507' style='position: absolute; top: 690px; left: 1790px'><font color=white size=3>Швейцер</font></a>
<a id='a3519' name='#a3519' style='position: absolute; top: 688px; left: 1790px'><font color=white size=3>Юнг</font></a>
<a id='a6871' name='#a6871' style='position: absolute; top: 688px; left: 1790px'><font color=white size=3>Франк</font></a>
<a id='a7315' name='#a7315' style='position: absolute; top: 690px; left: 1790px'><font color=white size=3>Махарши</font></a>
<a id='a5184' name='#a5184' style='position: absolute; top: 671px; left: 1790px'><font color=white size=3>Шпенглер</font></a>
<a id='a5512' name='#a5512' style='position: absolute; top: 667px; left: 1790px'><font color=white size=3>Шарден</font></a>
<a id='a2979' name='#a2979' style='position: absolute; top: 713px; left: 1790px'><font color=white size=3>Маритен</font></a>
<a id='a5245' name='#a5245' style='position: absolute; top: 665px; left: 1790px'><font color=white size=3>Флоренский</font></a>
<a id='a2128' name='#a2128' style='position: absolute; top: 654px; left: 1790px'><font color=white size=3>Джебран</font></a>
<a id='a3538' name='#a3538' style='position: absolute; top: 707px; left: 1790px'><font color=white size=3>Ясперс</font></a>
<a id='a7113' name='#a7113' style='position: absolute; top: 694px; left: 1790px'><font color=white size=3>О-и-Гассет</font></a>
<a id='a7671' name='#a7671' style='position: absolute; top: 736px; left: 1790px'><font color=white size=3>Жильсон</font></a>
<a id='a7653' name='#a7653' style='position: absolute; top: 709px; left: 1790px'><font color=white size=3>Блох</font></a>
<a id='a6352' name='#a6352' style='position: absolute; top: 717px; left: 1790px'><font color=white size=3>Котарбиньский</font></a>
<a id='a1670' name='#a1670' style='position: absolute; top: 730px; left: 1790px'><font color=white size=3>Марсель</font></a>
<a id='a4176' name='#a4176' style='position: absolute; top: 679px; left: 1790px'><font color=white size=3>Витгенштейн</font></a>
<a id='a4477' name='#a4477' style='position: absolute; top: 700px; left: 1790px'><font color=white size=3>Хайдеггер</font></a>
<a id='a2276' name='#a2276' style='position: absolute; top: 736px; left: 1790px'><font color=white size=3>Кришнамурти</font></a>
<a id='a7001' name='#a7001' style='position: absolute; top: 759px; left: 1790px'><font color=white size=3>Ф Юлань</font></a>
<a id='a3101' name='#a3101' style='position: absolute; top: 713px; left: 1790px'><font color=white size=3>Батай</font></a>
<a id='a7313' name='#a7313' style='position: absolute; top: 713px; left: 1790px'><font color=white size=3>Махарадж</font></a>
<a id='a7105' name='#a7105' style='position: absolute; top: 721px; left: 1790px'><font color=white size=3>Борхес</font></a>
<a id='a7637' name='#a7637' style='position: absolute; top: 734px; left: 1790px'><font color=white size=3>Фромм</font></a>
<a id='a4892' name='#a4892' style='position: absolute; top: 742px; left: 1790px'><font color=white size=3>Аббаньяно</font></a>
<a id='a3531' name='#a3531' style='position: absolute; top: 740px; left: 1790px'><font color=white size=3>Поппер</font></a>
<a id='a6412' name='#a6412' style='position: absolute; top: 732px; left: 1790px'><font color=white size=3>Адорно</font></a>
<a id='a3060' name='#a3060' style='position: absolute; top: 747px; left: 1790px'><font color=white size=3>Сартр</font></a>
<a id='a7555' name='#a7555' style='position: absolute; top: 711px; left: 1790px'><font color=white size=3>Мунье</font></a>
<a id='a7023' name='#a7023' style='position: absolute; top: 736px; left: 1790px'><font color=white size=3>Арендт</font></a>
<a id='a3682' name='#a3682' style='position: absolute; top: 774px; left: 1790px'><font color=white size=3>Леви-Стросс</font></a>
<a id='a4719' name='#a4719' style='position: absolute; top: 719px; left: 1790px'><font color=white size=3>Мерло-Понти</font></a>
<a id='a6145' name='#a6145' style='position: absolute; top: 770px; left: 1790px'><font color=white size=3>Бовуар</font></a>
<a id='a6615' name='#a6615' style='position: absolute; top: 749px; left: 1790px'><font color=white size=3>Куайн</font></a>
<a id='a6144' name='#a6144' style='position: absolute; top: 711px; left: 1790px'><font color=white size=3>Вейль</font></a>
<a id='a6215' name='#a6215' style='position: absolute; top: 698px; left: 1790px'><font color=white size=3>Ежи Лец</font></a>
<a id='a532' name='#a532' style='position: absolute; top: 726px; left: 1790px'><font color=white size=3>Айер</font></a>
<a id='a4487' name='#a4487' style='position: absolute; top: 728px; left: 1790px'><font color=white size=3>Маклюэн</font></a>
<a id='a7539' name='#a7539' style='position: absolute; top: 766px; left: 1790px'><font color=white size=3>Чоран</font></a>
<a id='a494' name='#a494' style='position: absolute; top: 724px; left: 1790px'><font color=white size=3>Камю</font></a>
<a id='a5452' name='#a5452' style='position: absolute; top: 774px; left: 1790px'><font color=white size=3>Рикер</font></a>
<a id='a4505' name='#a4505' style='position: absolute; top: 805px; left: 1790px'><font color=white size=3>Махариши</font></a>
<a id='a3339' name='#a3339' style='position: absolute; top: 763px; left: 1790px'><font color=white size=3>Лакатос</font></a>
<a id='a5424' name='#a5424' style='position: absolute; top: 787px; left: 1790px'><font color=white size=3>Фейерабенд</font></a>
<a id='a3080' name='#a3080' style='position: absolute; top: 751px; left: 1790px'><font color=white size=3>Делёз</font></a>
<a id='a3553' name='#a3553' style='position: absolute; top: 768px; left: 1790px'><font color=white size=3>Кастанеда</font></a>
<a id='a4696' name='#a4696' style='position: absolute; top: 766px; left: 1790px'><font color=white size=3>Фуко</font></a>
<a id='a2893' name='#a2893' style='position: absolute; top: 799px; left: 1790px'><font color=white size=3>Дулуман</font></a>
<a id='a3006' name='#a3006' style='position: absolute; top: 797px; left: 1790px'><font color=white size=3>Бодрийяр</font></a>
<a id='a2978' name='#a2978' style='position: absolute; top: 774px; left: 1790px'><font color=white size=3>Деррида</font></a>
<a id='a4526' name='#a4526' style='position: absolute; top: 772px; left: 1790px'><font color=white size=3>Мамардашв.</font></a>
<a id='a7102' name='#a7102' style='position: absolute; top: 778px; left: 1790px'><font color=white size=3>Ливрага</font></a>
<a id='a983' name='#a983' style='position: absolute; top: 782px; left: 1790px'><font color=white size=3>Б Р Дасс</font></a>
<a id='a6701' name='#a6701' style='position: absolute; top: 837px; left: 1790px'><font color=white size=3>У Эко</font></a>
<a id='a5652' name='#a5652' style='position: absolute; top: 745px; left: 1790px'><font color=white size=3>Р Бах</font></a>
<a id='a3382' name='#a3382' style='position: absolute; top: 814px; left: 1790px'><font color=white size=3>Бродский</font></a>
<a id='a2829' name='#a2829' style='position: absolute; top: 795px; left: 1790px'><font color=white size=3>Деннет</font></a>
<a id='a5385' name='#a5385' style='position: absolute; top: 818px; left: 1790px'><font color=white size=3>Сингер</font></a>
<a id='a5281' name='#a5281' style='position: absolute; top: 791px; left: 1790px'><font color=white size=3>Коэльо</font></a>
<a id='a6762' name='#a6762' style='position: absolute; top: 820px; left: 1790px'><font color=white size=3>Гиренок</font></a>
<a id='a6171' name='#a6171' style='position: absolute; top: 795px; left: 1790px'><font color=white size=3>Жижек</font></a>
<a id='a2664' name='#a2664' style='position: absolute; top: 841px; left: 1790px'><font color=white size=3>Галковский</font></a>

<img id=img align=left class=coords border=0 src=maps/en.png>
<div style='background:transparent; position:absolute; top: 0px; left: 0px; width:100%; height:100%;'>
<a  href='build-rfmap.php?t_name=Материализм' title=''><div class=area style='position:absolute; width:47px; height:18px; left:235px; top:878px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Материализм' title=''><div class=area style='position:absolute; width:48px; height:18px; left:187px; top:878px'></div></a>
<a  href='build-rfmap.php?t_name=Объективный идеализм' title=''><div class=area style='position:absolute; width:82px; height:18px; left:379px; top:878px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Объективный идеализм' title=''><div class=area style='position:absolute; width:83px; height:18px; left:296px; top:878px'></div></a>
<a  href='build-rfmap.php?t_name=Субъективный идеализм' title=''><div class=area style='position:absolute; width:85px; height:18px; left:561px; top:878px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Субъективный идеализм' title=''><div class=area style='position:absolute; width:86px; height:18px; left:475px; top:878px'></div></a>
<a  href='build-rfmap.php?t_name=Политическая философия' title='Политическая философия'><div class=area style='position:absolute; width:34px; height:18px; left:694px; top:878px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Политическая философия' title='Политическая философия'><div class=area style='position:absolute; width:34px; height:18px; left:660px; top:878px'></div></a>
<a  href='build-rfmap.php?t_name=Восточная философия' title='Восточная философия'><div class=area style='position:absolute; width:26px; height:18px; left:768px; top:878px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Восточная философия' title='Восточная философия'><div class=area style='position:absolute; width:26px; height:18px; left:742px; top:878px'></div></a>
<a  href='build-rfmap.php?t_name=Другие' title=''><div class=area style='position:absolute; width:26px; height:18px; left:835px; top:878px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Другие' title=''><div class=area style='position:absolute; width:27px; height:18px; left:808px; top:878px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?country=GRC' title=''><div class=area style='position:absolute; width:54px; height:20px; left:170px; top:901px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?country=FRA' title=''><div class=area style='position:absolute; width:67px; height:20px; left:234px; top:901px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?country=RUS' title=''><div class=area style='position:absolute; width:54px; height:20px; left:311px; top:901px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?country=DEU' title=''><div class=area style='position:absolute; width:71px; height:20px; left:375px; top:901px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?country=ENG' title=''><div class=area style='position:absolute; width:54px; height:20px; left:456px; top:901px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?country=ITA' title=''><div class=area style='position:absolute; width:54px; height:20px; left:520px; top:901px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?country=USA' title=''><div class=area style='position:absolute; width:38px; height:20px; left:584px; top:901px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?country=CHN' title=''><div class=area style='position:absolute; width:45px; height:20px; left:632px; top:901px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?country=IND' title=''><div class=area style='position:absolute; width:48px; height:20px; left:687px; top:901px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?country=PER' title=''><div class=area style='position:absolute; width:115px; height:20px; left:745px; top:901px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?country=SPA' title=''><div class=area style='position:absolute; width:63px; height:20px; left:870px; top:901px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?country=CAN' title=''><div class=area style='position:absolute; width:55px; height:20px; left:943px; top:901px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?country=POL' title=''><div class=area style='position:absolute; width:129px; height:20px; left:1008px; top:901px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?country=DNK' title=''><div class=area style='position:absolute; width:49px; height:20px; left:1147px; top:901px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?country=NOR' title=''><div class=area style='position:absolute; width:69px; height:20px; left:1206px; top:901px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?country=SWE' title=''><div class=area style='position:absolute; width:59px; height:20px; left:1285px; top:901px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?country=AUS' title=''><div class=area style='position:absolute; width:78px; height:20px; left:1354px; top:901px'></div></a>
<a  href='build-rfmap.php?t_name=Субъективный идеализм' title='
- Внешний мир - иллюзия, существующая благодаря субьективному сознанию.'><div class=area style='position:absolute; width:51px; height:18px; left:1095px; top:299px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Субъективный идеализм' title='
- Внешний мир - иллюзия, существующая благодаря субьективному сознанию.'><div class=area style='position:absolute; width:52px; height:18px; left:1043px; top:299px'></div></a>
<a  href='build-rfmap.php?t_name=Объективный идеализм' title='
- Внешний мир и сознание - порождение высшего духовного первоначала (мирового разума, Бога и др.)'><div class=area style='position:absolute; width:48px; height:18px; left:678px; top:352px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Объективный идеализм' title='
- Внешний мир и сознание - порождение высшего духовного первоначала (мирового разума, Бога и др.)'><div class=area style='position:absolute; width:49px; height:18px; left:629px; top:352px'></div></a>
<a  href='build-rfmap.php?t_name=Платонизм' title='Платонизм
- Объективный идеализм. Бессмертие бестелесной души. Универсальные понятия существуют независимо от их конкретных воплощений.'><div class=area style='position:absolute; width:25px; height:18px; left:771px; top:29px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Платонизм' title='Платонизм
- Объективный идеализм. Бессмертие бестелесной души. Универсальные понятия существуют независимо от их конкретных воплощений.'><div class=area style='position:absolute; width:25px; height:18px; left:746px; top:29px'></div></a>
<a  href='build-rfmap.php?t_name=Антропологизм' title='Антропологизм
- Человек как биологическое существо - центральная проблема и исходный пункт философии.'><div class=area style='position:absolute; width:33px; height:18px; left:59px; top:482px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Антропологизм' title='Антропологизм
- Человек как биологическое существо - центральная проблема и исходный пункт философии.'><div class=area style='position:absolute; width:34px; height:18px; left:25px; top:482px'></div></a>
<a  href='build-rfmap.php?t_name=Марксизм' title='
- Изучение материальной субстанции и истории в их изменчивости, противоречивости и взаимосвязи.'><div class=area style='position:absolute; width:35px; height:18px; left:157px; top:524px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Марксизм' title='
- Изучение материальной субстанции и истории в их изменчивости, противоречивости и взаимосвязи.'><div class=area style='position:absolute; width:36px; height:18px; left:121px; top:524px'></div></a>
<a  href='build-rfmap.php?t_name=Эмпиризм' title='
- Наука должна опираться на показания органов чувств.'><div class=area style='position:absolute; width:36px; height:18px; left:61px; top:248px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Эмпиризм' title='
- Наука должна опираться на показания органов чувств.'><div class=area style='position:absolute; width:36px; height:18px; left:25px; top:248px'></div></a>
<a  href='build-rfmap.php?t_name=Рационализм' title='Рационализм
- Органам чувств доверять нельзя, наука должна рассчитывать только на силу мысли.'><div class=area style='position:absolute; width:34px; height:18px; left:425px; top:235px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Рационализм' title='Рационализм
- Органам чувств доверять нельзя, наука должна рассчитывать только на силу мысли.'><div class=area style='position:absolute; width:35px; height:18px; left:390px; top:235px'></div></a>
<a  href='build-rfmap.php?t_name=Иррационализм' title='Иррационализм
- Источник знаний не поддается рациональному объяснению: мистическая интуиция, сверхчувственное восприятие, божественное откровение, медитация.'><div class=area style='position:absolute; width:26px; height:18px; left:1247px; top:650px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Иррационализм' title='Иррационализм
- Источник знаний не поддается рациональному объяснению: мистическая интуиция, сверхчувственное восприятие, божественное откровение, медитация.'><div class=area style='position:absolute; width:26px; height:18px; left:1221px; top:650px'></div></a>
<a  href='build-rfmap.php?t_name=Скептицизм' title='Скептицизм
- Познаваемость мира сомнительна. Нет ничего абсолютно определенного, истинного ни об одной вещи сказать нельзя, ибо любое другое высказывание будет также иметь право на истинность.'><div class=area style='position:absolute; width:33px; height:18px; left:1189px; top:29px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Скептицизм' title='Скептицизм
- Познаваемость мира сомнительна. Нет ничего абсолютно определенного, истинного ни об одной вещи сказать нельзя, ибо любое другое высказывание будет также иметь право на истинность.'><div class=area style='position:absolute; width:34px; height:18px; left:1155px; top:29px'></div></a>
<a  href='build-rfmap.php?t_name=Древний материализм' title='
- Стихийный, не обоснованный, опирающийся на житейские наблюдения, здравый смысл.'><div class=area style='position:absolute; width:77px; height:18px; left:556px; top:11px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Древний материализм' title='
- Стихийный, не обоснованный, опирающийся на житейские наблюдения, здравый смысл.'><div class=area style='position:absolute; width:78px; height:18px; left:478px; top:11px'></div></a>
<a  href='build-rfmap.php?t_name=Восточная философия' title='Восточная философия
- Религия, мифология, антропоцентризм, традиционализм.'><div class=area style='position:absolute; width:48px; height:18px; left:1622px; top:536px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Восточная философия' title='Восточная философия
- Религия, мифология, антропоцентризм, традиционализм.'><div class=area style='position:absolute; width:48px; height:18px; left:1574px; top:536px'></div></a>
<a  href='build-rfmap.php?t_name=Конфуцианство' title='Конфуцианство
- Рационализм, порядок, этика, политика, сдержанность.'><div class=area style='position:absolute; width:35px; height:18px; left:1393px; top:13px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Конфуцианство' title='Конфуцианство
- Рационализм, порядок, этика, политика, сдержанность.'><div class=area style='position:absolute; width:35px; height:18px; left:1358px; top:13px'></div></a>
<a  href='build-rfmap.php?t_name=Буддизм' title='
- Путь к спасению (нирване) через отказ от желаний (страданий), отрешенность от внешнего мира.'><div class=area style='position:absolute; width:31px; height:18px; left:1598px; top:19px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Буддизм' title='
- Путь к спасению (нирване) через отказ от желаний (страданий), отрешенность от внешнего мира.'><div class=area style='position:absolute; width:31px; height:18px; left:1567px; top:19px'></div></a>
<a  href='build-rfmap.php?t_name=Даосизм' title='
- Мистицизм, спонтанность, естественность, отказ от суеты.'><div class=area style='position:absolute; width:31px; height:18px; left:1475px; top:19px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Даосизм' title='
- Мистицизм, спонтанность, естественность, отказ от суеты.'><div class=area style='position:absolute; width:32px; height:18px; left:1443px; top:19px'></div></a>
<a  href='build-rfmap.php?t_name=Пифагорейцы' title='Пифагорейцы
- Число. Идеализм.'><div class=area style='position:absolute; width:30px; height:18px; left:682px; top:13px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Пифагорейцы' title='Пифагорейцы
- Число. Идеализм.'><div class=area style='position:absolute; width:31px; height:18px; left:651px; top:13px'></div></a>
<a  href='build-rfmap.php?t_name=Элейцы' title='
- От материализма к идеализму. Представители элейской школы (г. Элея, VI – нач. V в. до н. э.) – Ксенофан, Парменид, Зенон, - создали первый в истории западноевропейской философии образец чисто логического конструирования бытия. Полагая, что чувства дают нам не достоверные знания о мире, а всего лишь ложные, противоречивые, субъективные мнения, элеаты стремились постичь истину силой разума, путем умозаключений, исходя из принципа тождества мыслимого и сущего.'><div class=area style='position:absolute; width:29px; height:18px; left:907px; top:19px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Элейцы' title='
- От материализма к идеализму. Представители элейской школы (г. Элея, VI – нач. V в. до н. э.) – Ксенофан, Парменид, Зенон, - создали первый в истории западноевропейской философии образец чисто логического конструирования бытия. Полагая, что чувства дают нам не достоверные знания о мире, а всего лишь ложные, противоречивые, субъективные мнения, элеаты стремились постичь истину силой разума, путем умозаключений, исходя из принципа тождества мыслимого и сущего.'><div class=area style='position:absolute; width:29px; height:18px; left:878px; top:19px'></div></a>
<a  href='build-rfmap.php?t_name=Софизм' title='
- Риторика, социум, политика. Релятивизм.'><div class=area style='position:absolute; width:29px; height:18px; left:1059px; top:34px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Софизм' title='
- Риторика, социум, политика. Релятивизм.'><div class=area style='position:absolute; width:30px; height:18px; left:1029px; top:34px'></div></a>
<a  href='build-rfmap.php?t_name=Эпикурейство' title='Эпикурейство
- Атараксия, гедонизм, древний материализм.
Самыми значительными последователями Эпикура были Тит Лукреций Кар, изложивший учение Эпикура в поэме «О природе вещей», поэт Вергилий, оратор и крупный государственный деятель Цицерон. Идеи Эпикура восприняли многие мыслители эпохи Возрождения (Л.Валла, Ф.Рабле, М.Монтень и др.) и Нового времени (Ф.Бэкон, С.де Бержерак, Д.Дидро и др.). И это не случайно: немецкий мыслитель-экзистенциалист ХX века Карл Ясперс писал, что в жизни каждого человека существуют такие моменты, когда философия Эпикура может стать прибежищем от слабости и страха.'><div class=area style='position:absolute; width:36px; height:18px; left:589px; top:140px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Эпикурейство' title='Эпикурейство
- Атараксия, гедонизм, древний материализм.
Самыми значительными последователями Эпикура были Тит Лукреций Кар, изложивший учение Эпикура в поэме «О природе вещей», поэт Вергилий, оратор и крупный государственный деятель Цицерон. Идеи Эпикура восприняли многие мыслители эпохи Возрождения (Л.Валла, Ф.Рабле, М.Монтень и др.) и Нового времени (Ф.Бэкон, С.де Бержерак, Д.Дидро и др.). И это не случайно: немецкий мыслитель-экзистенциалист ХX века Карл Ясперс писал, что в жизни каждого человека существуют такие моменты, когда философия Эпикура может стать прибежищем от слабости и страха.'><div class=area style='position:absolute; width:37px; height:18px; left:552px; top:140px'></div></a>
<a  href='build-rfmap.php?t_name=Кинизм' title='
- Последователи Сократа. Аскетизм. Первый в истории протест против культуры и цивилизации, норм нравственности и правил поведения.'><div class=area style='position:absolute; width:27px; height:18px; left:265px; top:34px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Кинизм' title='
- Последователи Сократа. Аскетизм. Первый в истории протест против культуры и цивилизации, норм нравственности и правил поведения.'><div class=area style='position:absolute; width:27px; height:18px; left:238px; top:34px'></div></a>
<a  href='build-rfmap.php?t_name=Стоицизм' title='
- Непоколебимость человека. Истинный мудрец принимает свою судьбу как данность и противостоит ей только силой духа, сохраняя невозмутимость, безмятежность, равнодушие.'><div class=area style='position:absolute; width:34px; height:18px; left:200px; top:68px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Стоицизм' title='
- Непоколебимость человека. Истинный мудрец принимает свою судьбу как данность и противостоит ей только силой духа, сохраняя невозмутимость, безмятежность, равнодушие.'><div class=area style='position:absolute; width:35px; height:18px; left:165px; top:68px'></div></a>
<a  href='build-rfmap.php?t_name=Неоплатонизм' title='
- Согласование платонизма с аристотелизмом.'><div class=area style='position:absolute; width:50px; height:18px; left:797px; top:193px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Неоплатонизм' title='
- Согласование платонизма с аристотелизмом.'><div class=area style='position:absolute; width:51px; height:18px; left:746px; top:193px'></div></a>
<a  href='build-rfmap.php?t_name=Атомизм' title='
- Натурфилософская и физическая теория, согласно которой чувственно воспринимаемые (материальные) вещи состоят из химически неделимых частиц — атомов.'><div class=area style='position:absolute; width:31px; height:18px; left:580px; top:34px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Атомизм' title='
- Натурфилософская и физическая теория, согласно которой чувственно воспринимаемые (материальные) вещи состоят из химически неделимых частиц — атомов.'><div class=area style='position:absolute; width:32px; height:18px; left:548px; top:34px'></div></a>
<a  href='build-rfmap.php?t_name=Аристотелизм' title='Аристотелизм
- Единство формы и материи.'><div class=area style='position:absolute; width:36px; height:18px; left:687px; top:129.9px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Аристотелизм' title='Аристотелизм
- Единство формы и материи.'><div class=area style='position:absolute; width:36px; height:18px; left:651px; top:129.9px'></div></a>
<a  href='build-rfmap.php?t_name=Сократики' title='Сократики
- Антропология, рационализм.'><div class=area style='position:absolute; width:26px; height:18px; left:838px; top:24px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Сократики' title='Сократики
- Антропология, рационализм.'><div class=area style='position:absolute; width:26px; height:18px; left:812px; top:24px'></div></a>
<a  href='build-rfmap.php?t_name=Моизм' title='
- Гуманизм, мудрость, пацифизм, любовь, взаимопомощь.'><div class=area style='position:absolute; width:24px; height:18px; left:1319px; top:37px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Моизм' title='
- Гуманизм, мудрость, пацифизм, любовь, взаимопомощь.'><div class=area style='position:absolute; width:25px; height:18px; left:1294px; top:37px'></div></a>
<a  href='build-rfmap.php?t_name=Легизм' title='
- Преодоление эгоизма человека, деспотизм, наказание, законы.'><div class=area style='position:absolute; width:26px; height:18px; left:1260px; top:63px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Легизм' title='
- Преодоление эгоизма человека, деспотизм, наказание, законы.'><div class=area style='position:absolute; width:27px; height:18px; left:1233px; top:63px'></div></a>
<a  href='build-rfmap.php?t_name=Ранняя партистика' title='
- Оформление и защита христианства от язычества.'><div class=area style='position:absolute; width:66px; height:18px; left:948px; top:122px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Ранняя партистика' title='
- Оформление и защита христианства от язычества.'><div class=area style='position:absolute; width:67px; height:18px; left:881px; top:122px'></div></a>
<a  href='build-rfmap.php?t_name=Зрелая патристика' title='
- Рациональное обоснование христианских догматов на основе неоплатонизма.'><div class=area style='position:absolute; width:66px; height:18px; left:1085px; top:154px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Зрелая патристика' title='
- Рациональное обоснование христианских догматов на основе неоплатонизма.'><div class=area style='position:absolute; width:67px; height:18px; left:1018px; top:154px'></div></a>
<a  href='build-rfmap.php?t_name=Поздняя патристика' title='
- Догматизация, появление аристотелизма.'><div class=area style='position:absolute; width:70px; height:18px; left:1316px; top:183px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Поздняя патристика' title='
- Догматизация, появление аристотелизма.'><div class=area style='position:absolute; width:70px; height:18px; left:1246px; top:183px'></div></a>
<a  href='build-rfmap.php?t_name=Ранняя схоластика' title='
- Под влиянием неоплатонизма. Увеличение роли рационализма, логики.'><div class=area style='position:absolute; width:67px; height:18px; left:948px; top:206px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Ранняя схоластика' title='
- Под влиянием неоплатонизма. Увеличение роли рационализма, логики.'><div class=area style='position:absolute; width:67px; height:18px; left:881px; top:206px'></div></a>
<a  href='build-rfmap.php?t_name=Зрелая схоластика' title='
- Вытестение неоплатонизма аритотелизмом.'><div class=area style='position:absolute; width:67px; height:18px; left:1087px; top:228px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Зрелая схоластика' title='
- Вытестение неоплатонизма аритотелизмом.'><div class=area style='position:absolute; width:67px; height:18px; left:1020px; top:228px'></div></a>
<a  href='build-rfmap.php?t_name=Поздняя схоластика' title='
- Разрушение схоластики.'><div class=area style='position:absolute; width:70px; height:18px; left:1234px; top:272px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Поздняя схоластика' title='
- Разрушение схоластики.'><div class=area style='position:absolute; width:71px; height:18px; left:1163px; top:272px'></div></a>
<a  href='build-rfmap.php?t_name=Мистицизм' title='
- Понимание и восприятие мира, основанное на эмоциях, интуиции и иррационализме. Мистический опыт - прямое личностное общение, слияние или постижение некоей абсолютной реальности и абсолютной истины, а в рамках религий часто отождествляемое с Божеством или Абсолютом.'><div class=area style='position:absolute; width:39px; height:18px; left:1348px; top:318px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Мистицизм' title='
- Понимание и восприятие мира, основанное на эмоциях, интуиции и иррационализме. Мистический опыт - прямое личностное общение, слияние или постижение некоей абсолютной реальности и абсолютной истины, а в рамках религий часто отождествляемое с Божеством или Абсолютом.'><div class=area style='position:absolute; width:39px; height:18px; left:1309px; top:318px'></div></a>
<a  href='build-rfmap.php?t_name=Гуманизм' title='
- Освобождение человеческой личности от идейного застоя феодализма и католицизма.'><div class=area style='position:absolute; width:34px; height:18px; left:588px; top:235px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Гуманизм' title='
- Освобождение человеческой личности от идейного застоя феодализма и католицизма.'><div class=area style='position:absolute; width:35px; height:18px; left:553px; top:235px'></div></a>
<a  href='build-rfmap.php?t_name=Антропоцентризм' title='Антропоцентризм
- Человек - средоточие Вселенной и цель всех совершающихся в мире событий (идеализм).'><div class=area style='position:absolute; width:29px; height:18px; left:201px; top:214px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Антропоцентризм' title='Антропоцентризм
- Человек - средоточие Вселенной и цель всех совершающихся в мире событий (идеализм).'><div class=area style='position:absolute; width:29px; height:18px; left:172px; top:214px'></div></a>
<a  href='build-rfmap.php?t_name=Христианский гуманизм' title='Христианский гуманизм
- Против злоупотреблений католической церкви и даже рассчитанная на ее реформу.'><div class=area style='position:absolute; width:69px; height:18px; left:796px; top:235px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Христианский гуманизм' title='Христианский гуманизм
- Против злоупотреблений католической церкви и даже рассчитанная на ее реформу.'><div class=area style='position:absolute; width:69px; height:18px; left:727px; top:235px'></div></a>
<a  href='build-rfmap.php?t_name=Натурфилософия' title='
- Философия природы (целостная система самых общих законов естествознания).'><div class=area style='position:absolute; width:61px; height:18px; left:298px; top:235px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Натурфилософия' title='
- Философия природы (целостная система самых общих законов естествознания).'><div class=area style='position:absolute; width:62px; height:18px; left:236px; top:235px'></div></a>
<a  href='build-rfmap.php?t_name=Деспотизм' title='
- Неограниченная власть.'><div class=area style='position:absolute; width:38px; height:18px; left:668px; top:235px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Деспотизм' title='
- Неограниченная власть.'><div class=area style='position:absolute; width:39px; height:18px; left:629px; top:235px'></div></a>
<a  href='build-rfmap.php?t_name=Утопизм' title='
- Несбыточные мечтания.'><div class=area style='position:absolute; width:31px; height:18px; left:495px; top:235px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Утопизм' title='
- Несбыточные мечтания.'><div class=area style='position:absolute; width:31px; height:18px; left:464px; top:235px'></div></a>
<a  href='build-rfmap.php?t_name=Протестантизм' title='
- Новая трактовка Библии (лютеранство, кальвинизм).'><div class=area style='position:absolute; width:52px; height:18px; left:933px; top:311px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Протестантизм' title='
- Новая трактовка Библии (лютеранство, кальвинизм).'><div class=area style='position:absolute; width:52px; height:18px; left:881px; top:311px'></div></a>
<a  href='build-rfmap.php?t_name=Материалистический атеизм' title='Материалистический атеизм
- Отказ от существования бога.'><div class=area style='position:absolute; width:26px; height:18px; left:198px; top:324px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Материалистический атеизм' title='Материалистический атеизм
- Отказ от существования бога.'><div class=area style='position:absolute; width:26px; height:18px; left:172px; top:324px'></div></a>
<a  href='build-rfmap.php?t_name=Деизм' title='
- Бог - первопричина мира, но дальше на развитие природы он не влияет.'><div class=area style='position:absolute; width:24px; height:18px; left:263px; top:395px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Деизм' title='
- Бог - первопричина мира, но дальше на развитие природы он не влияет.'><div class=area style='position:absolute; width:24px; height:18px; left:239px; top:395px'></div></a>
<a  href='build-rfmap.php?t_name=Экзистенциализм' title='Экзистенциализм
- Уникальность, иррациональность бытия человека. Преодоление человеком своей сущности, акцент на глубине эмоциональной природы.'><div class=area style='position:absolute; width:35px; height:18px; left:1079px; top:465px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Экзистенциализм' title='Экзистенциализм
- Уникальность, иррациональность бытия человека. Преодоление человеком своей сущности, акцент на глубине эмоциональной природы.'><div class=area style='position:absolute; width:36px; height:18px; left:1043px; top:465px'></div></a>
<a  href='build-rfmap.php?t_name=Позитивизм' title='Позитивизм
- Фундаментальное значение конкретного, основанного на опыте, проверяемого и практически эффективного («позитивного») знания.'><div class=area style='position:absolute; width:28px; height:18px; left:1232px; top:454px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Позитивизм' title='Позитивизм
- Фундаментальное значение конкретного, основанного на опыте, проверяемого и практически эффективного («позитивного») знания.'><div class=area style='position:absolute; width:29px; height:18px; left:1203px; top:454px'></div></a>
<a  href='build-rfmap.php?t_name=Постпозитивизм' title='Постпозитивизм
- Критика получения объективного знания из опыта.'><div class=area style='position:absolute; width:41px; height:18px; left:336px; top:677px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Постпозитивизм' title='Постпозитивизм
- Критика получения объективного знания из опыта.'><div class=area style='position:absolute; width:42px; height:18px; left:294px; top:677px'></div></a>
<a  href='build-rfmap.php?t_name=Прагматизм' title='Прагматизм
- Качество идей и объектов определяется исключительно их практическими эффектами.'><div class=area style='position:absolute; width:29px; height:18px; left:1401px; top:547px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Прагматизм' title='Прагматизм
- Качество идей и объектов определяется исключительно их практическими эффектами.'><div class=area style='position:absolute; width:30px; height:18px; left:1371px; top:547px'></div></a>
<a  href='build-rfmap.php?t_name=Философия жизни' title='
- Иррационализм.'><div class=area style='position:absolute; width:43px; height:18px; left:1316px; top:454px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Философия жизни' title='
- Иррационализм.'><div class=area style='position:absolute; width:43px; height:18px; left:1273px; top:454px'></div></a>
<a  href='build-rfmap.php?t_name=Психоанализ' title='Психоанализ
- Выявление и анализ вытесненных, травмирующих переживаний, неисполненных желаний и др. из сознания в бессознательное.'><div class=area style='position:absolute; width:26px; height:18px; left:1466px; top:608px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Психоанализ' title='Психоанализ
- Выявление и анализ вытесненных, травмирующих переживаний, неисполненных желаний и др. из сознания в бессознательное.'><div class=area style='position:absolute; width:27px; height:18px; left:1439px; top:608px'></div></a>
<a  href='build-rfmap.php?t_name=Атеистический экзистенциализм' title='Атеистический экзистенциализм
- Позиция человека, для которого христианский Бог не обладает ценностью.'><div class=area style='position:absolute; width:35px; height:18px; left:1176px; top:622px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Атеистический экзистенциализм' title='Атеистический экзистенциализм
- Позиция человека, для которого христианский Бог не обладает ценностью.'><div class=area style='position:absolute; width:35px; height:18px; left:1141px; top:622px'></div></a>
<a  href='build-rfmap.php?t_name=Научный космизм' title='
- Космос - структурно-организованный упорядоченный мир. Человек - «гражданин мира».'><div class=area style='position:absolute; width:32px; height:18px; left:58px; top:603px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Научный космизм' title='
- Космос - структурно-организованный упорядоченный мир. Человек - «гражданин мира».'><div class=area style='position:absolute; width:33px; height:18px; left:25px; top:603px'></div></a>
<a  href='build-rfmap.php?t_name=Западничество' title='Западничество
- В отличие от славянофилов признавали западноевропейский капиталистический путь развития приемлемым для России.'><div class=area style='position:absolute; width:39px; height:18px; left:411px; top:471px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Западничество' title='Западничество
- В отличие от славянофилов признавали западноевропейский капиталистический путь развития приемлемым для России.'><div class=area style='position:absolute; width:39px; height:18px; left:372px; top:471px'></div></a>
<a  href='build-rfmap.php?t_name=Славянофильство' title='Славянофильство
- Своеобразие исторического развития России, идеализация славянской культуры, в отличие от западников, отрицание возможности развития России по образцу западноевропейских капиталистических стран.'><div class=area style='position:absolute; width:30px; height:18px; left:851px; top:456px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Славянофильство' title='Славянофильство
- Своеобразие исторического развития России, идеализация славянской культуры, в отличие от западников, отрицание возможности развития России по образцу западноевропейских капиталистических стран.'><div class=area style='position:absolute; width:31px; height:18px; left:820px; top:456px'></div></a>
<a  href='build-rfmap.php?t_name=Христианство' title='Христианство
- Авраамическая мировая религия, основанная на жизни и учении Иисуса Христа, описанных в Новом Завете.'><div class=area style='position:absolute; width:37px; height:18px; left:766px; top:345px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Христианство' title='Христианство
- Авраамическая мировая религия, основанная на жизни и учении Иисуса Христа, описанных в Новом Завете.'><div class=area style='position:absolute; width:37px; height:18px; left:729px; top:345px'></div></a>
<a  href='build-rfmap.php?t_name=Религиозный экзистенциализм' title='Религиозный экзистенциализм
- Личность соотносительна миру и Богу и определяет себя но отношению к Богу.'><div class=area style='position:absolute; width:34px; height:18px; left:1003px; top:566px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Религиозный экзистенциализм' title='Религиозный экзистенциализм
- Личность соотносительна миру и Богу и определяет себя но отношению к Богу.'><div class=area style='position:absolute; width:35px; height:18px; left:968px; top:566px'></div></a>
<a  href='build-rfmap.php?t_name=Аналитическая философия' title='Аналитическая философия
- Логика, лингвистический анализ'><div class=area style='position:absolute; width:45px; height:18px; left:243px; top:622px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Аналитическая философия' title='Аналитическая философия
- Логика, лингвистический анализ'><div class=area style='position:absolute; width:45px; height:18px; left:198px; top:622px'></div></a>
<a  href='build-rfmap.php?t_name=Неотомизм' title='
- Развитие томизма (христианская адаптация аристотелизма). Дуализм бытия (Бог) и сущего (Природа). Бог - первопричина, вещи - соединение материи и формы, процессы — переход потенции в актуальность.'><div class=area style='position:absolute; width:39px; height:18px; left:859px; top:610px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Неотомизм' title='
- Развитие томизма (христианская адаптация аристотелизма). Дуализм бытия (Бог) и сущего (Природа). Бог - первопричина, вещи - соединение материи и формы, процессы — переход потенции в актуальность.'><div class=area style='position:absolute; width:39px; height:18px; left:820px; top:610px'></div></a>
<a  href='build-rfmap.php?t_name=Религиозный персонализм' title='Религиозный персонализм
- Жизнь - сотворчество (результат творческой активности Бога и человека). Бог - верховная личность, он вкладывает в людей все их творческие потенции.'><div class=area style='position:absolute; width:33px; height:18px; left:934px; top:610px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Религиозный персонализм' title='Религиозный персонализм
- Жизнь - сотворчество (результат творческой активности Бога и человека). Бог - верховная личность, он вкладывает в людей все их творческие потенции.'><div class=area style='position:absolute; width:34px; height:18px; left:900px; top:610px'></div></a>
<a  href='build-rfmap.php?t_name=Анархизм' title='
- Ликвидация любого принудительного управления и власти человека над человеком.'><div class=area style='position:absolute; width:36px; height:18px; left:518px; top:515px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Анархизм' title='
- Ликвидация любого принудительного управления и власти человека над человеком.'><div class=area style='position:absolute; width:36px; height:18px; left:482px; top:515px'></div></a>
<a  href='build-rfmap.php?t_name=Нигилизм' title='
- Отрицание общепринятых ценностей, идеалов, норм нравственности, культуры.'><div class=area style='position:absolute; width:34px; height:18px; left:232px; top:534px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Нигилизм' title='
- Отрицание общепринятых ценностей, идеалов, норм нравственности, культуры.'><div class=area style='position:absolute; width:34px; height:18px; left:198px; top:534px'></div></a>
<a  href='build-rfmap.php?t_name=Феноменология' title='Феноменология
- Отказ от любых идеализаций, описание спонтанно-смысловой жизни сознания. Неразрывность и взаимная несводимость, нередуцируемость сознания, человеческого бытия, личности и предметного мира.'><div class=area style='position:absolute; width:32px; height:18px; left:1533px; top:597px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Феноменология' title='Феноменология
- Отказ от любых идеализаций, описание спонтанно-смысловой жизни сознания. Неразрывность и взаимная несводимость, нередуцируемость сознания, человеческого бытия, личности и предметного мира.'><div class=area style='position:absolute; width:32px; height:18px; left:1501px; top:597px'></div></a>
<a  href='build-rfmap.php?t_name=Тоталитаризм' title='Тоталитаризм
- Полный контроль государства над всеми аспектами жизни общества и человека.'><div class=area style='position:absolute; width:29px; height:18px; left:658px; top:681px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Тоталитаризм' title='Тоталитаризм
- Полный контроль государства над всеми аспектами жизни общества и человека.'><div class=area style='position:absolute; width:29px; height:18px; left:629px; top:681px'></div></a>
<a  href='build-rfmap.php?t_name=Постмодернизм' title='Постмодернизм
- Постструктурализм: главное в структуре — то, что выводит за её пределы.'><div class=area style='position:absolute; width:31px; height:18px; left:497px; top:689px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Постмодернизм' title='Постмодернизм
- Постструктурализм: главное в структуре — то, что выводит за её пределы.'><div class=area style='position:absolute; width:32px; height:18px; left:465px; top:689px'></div></a>
<a  href='build-rfmap.php?t_name=Структурализм' title='Структурализм
- Раскрытие моделей, лежащих в основе социальных и культурных явлений.'><div class=area style='position:absolute; width:39px; height:18px; left:762px; top:801.25px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Структурализм' title='Структурализм
- Раскрытие моделей, лежащих в основе социальных и культурных явлений.'><div class=area style='position:absolute; width:39px; height:18px; left:723px; top:801.25px'></div></a>
<a  href='build-rfmap.php?t_name=Герменевтика' title='Герменевтика
- Теория интерпретации литературных текстов.'><div class=area style='position:absolute; width:29px; height:18px; left:430px; top:736px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Герменевтика' title='Герменевтика
- Теория интерпретации литературных текстов.'><div class=area style='position:absolute; width:30px; height:18px; left:400px; top:736px'></div></a>
<a  href='build-rfmap.php?t_name=Философская литература' title='Философская литература'><div class=area style='position:absolute; width:41px; height:18px; left:1716px; top:53.68px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Философская литература' title='Философская литература'><div class=area style='position:absolute; width:42px; height:18px; left:1674px; top:53.68px'></div></a>
<a  href='build-rfmap.php?t_name=Восточная_философия средневековья' title=''><div class=area style='position:absolute; width:79px; height:18px; left:1515px; top:179px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Восточная_философия средневековья' title=''><div class=area style='position:absolute; width:80px; height:18px; left:1435px; top:179px'></div></a>
<a  href='build-rfmap.php?t_name=Йога' title=''><div class=area style='position:absolute; width:18px; height:21px; left:1585px; top:77px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Йога' title=''><div class=area style='position:absolute; width:18px; height:21px; left:1567px; top:77px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1706&a_id=1883&y=-750' title='Гесиод

Мифология, 
Генеалогический эпос, Дидактический эпос
GRC
-750--720
MY: -20/0
MX: 1706
QN: 9'><div class=area style='position:absolute; width:26px; height:20px; left:1725px; top:24px'></div></a>
<a  href='build-rfmap.php?mp=1706&a_id=1883&y=-750' title='Гесиод

Мифология, 
Генеалогический эпос, Дидактический эпос
GRC
-750--720
MY: -20/0
MX: 1706
QN: 9'><div class=area style='position:absolute; width:25px; height:20px; left:1751px; top:24px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1658&a_id=1921&y=-700' title='Гомер

Мифология, 
Героический эпос
GRC
-700--800
MY: -20/0
MX: 1658
QN: 20'><div class=area style='position:absolute; width:23px; height:20px; left:1677px; top:22px'></div></a>
<a  href='build-rfmap.php?mp=1658&a_id=1921&y=-700' title='Гомер

Мифология, 
Героический эпос
GRC
-700--800
MY: -20/0
MX: 1658
QN: 20'><div class=area style='position:absolute; width:22px; height:20px; left:1700px; top:22px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=376&a_id=6744&y=-640' title='Фалес Милетский

Древний материализм, Милетцы, 
Досократики, Натурфилософия
GRC
-640--548
MY: 0/-102
MX: 376
QN: 20'><div class=area style='position:absolute; width:24px; height:20px; left:395px; top:29px'></div></a>
<a  href='build-rfmap.php?mp=376&a_id=6744&y=-640' title='Фалес Милетский

Древний материализм, Милетцы, 
Досократики, Натурфилософия
GRC
-640--548
MY: 0/-102
MX: 376
QN: 20'><div class=area style='position:absolute; width:23px; height:20px; left:419px; top:29px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1497&a_id=1968&y=-600' title='Гуань Инь-цзы

Даосизм
CHN
-600--520
MY: 0/0
MX: 1497
QN: 5'><div class=area style='position:absolute; width:22px; height:20px; left:1516px; top:45px'></div></a>
<a  href='build-rfmap.php?mp=1497&a_id=1968&y=-600' title='Гуань Инь-цзы

Даосизм
CHN
-600--520
MY: 0/0
MX: 1497
QN: 5'><div class=area style='position:absolute; width:21px; height:20px; left:1538px; top:45px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1427&a_id=3887&y=-600' title='Лао-Цзы

Даосизм, 
Этика
CHN
-600--550
MY: 0/0
MX: 1427
QN: 83'><div class=area style='position:absolute; width:33px; height:20px; left:1446px; top:43px'></div></a>
<a  href='build-rfmap.php?mp=1427&a_id=3887&y=-600' title='Лао-Цзы

Даосизм, 
Этика
CHN
-600--550
MY: 0/0
MX: 1427
QN: 83'><div class=area style='position:absolute; width:33px; height:20px; left:1479px; top:43px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=449&a_id=575&y=-585' title='Анаксимен

Милетцы, 
Астрономия, Досократики, Натурфилософия, Ученые
GRC
-585--525
MY: -30/0
MX: 449
QN: 2'><div class=area style='position:absolute; width:38px; height:20px; left:468px; top:41px'></div></a>
<a  href='build-rfmap.php?mp=449&a_id=575&y=-585' title='Анаксимен

Милетцы, 
Астрономия, Досократики, Натурфилософия, Ученые
GRC
-585--525
MY: -30/0
MX: 449
QN: 2'><div class=area style='position:absolute; width:38px; height:20px; left:506px; top:41px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=935&a_id=3830&y=-570' title='Ксенофан Колофонский

Элейцы, 
Досократики, Монотеизм, Натурфилософия, Поэзия, Скептицизм
GRC
-570--480
MY: 0/-43
MX: 935
QN: 4'><div class=area style='position:absolute; width:34px; height:20px; left:954px; top:43px'></div></a>
<a  href='build-rfmap.php?mp=935&a_id=3830&y=-570' title='Ксенофан Колофонский

Элейцы, 
Досократики, Монотеизм, Натурфилософия, Поэзия, Скептицизм
GRC
-570--480
MY: 0/-43
MX: 935
QN: 4'><div class=area style='position:absolute; width:33px; height:20px; left:988px; top:43px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=635&a_id=5393&y=-570' title='Пифагор

Пифагорейцы, 
Астрономия, Досократики, Мистицизм, Натурфилософия, Объективный идеализм
GRC
-570--490
MY: -15/0
MX: 635
QN: 55'><div class=area style='position:absolute; width:33px; height:20px; left:654px; top:47px'></div></a>
<a  href='build-rfmap.php?mp=635&a_id=5393&y=-570' title='Пифагор

Пифагорейцы, 
Астрономия, Досократики, Мистицизм, Натурфилософия, Объективный идеализм
GRC
-570--490
MY: -15/0
MX: 635
QN: 55'><div class=area style='position:absolute; width:33px; height:20px; left:687px; top:47px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1550&a_id=6126&y=-563' title='Сиддхартха Гаутама (Будда)

Буддизм
IND
-563--623
MY: 0/0
MX: 1550
QN: 110'><div class=area style='position:absolute; width:24px; height:20px; left:1569px; top:40px'></div></a>
<a  href='build-rfmap.php?mp=1550&a_id=6126&y=-563' title='Сиддхартха Гаутама (Будда)

Буддизм
IND
-563--623
MY: 0/0
MX: 1550
QN: 110'><div class=area style='position:absolute; width:24px; height:20px; left:1593px; top:40px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1342&a_id=3755&y=-551' title='Конфуций

Конфуцианство, 
Социальная философия, Этика
CHN
-551--479
MY: 0/0
MX: 1342
QN: 149'><div class=area style='position:absolute; width:38px; height:20px; left:1361px; top:51px'></div></a>
<a  href='build-rfmap.php?mp=1342&a_id=3755&y=-551' title='Конфуций

Конфуцианство, 
Социальная философия, Этика
CHN
-551--479
MY: 0/0
MX: 1342
QN: 149'><div class=area style='position:absolute; width:37px; height:20px; left:1399px; top:51px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=376&a_id=1850&y=-544' title='Гераклит

Древний материализм, 
Диалектика, Досократики
GRC
-544--483
MY: 0/-1
MX: 376
QN: 37'><div class=area style='position:absolute; width:35px; height:20px; left:395px; top:51px'></div></a>
<a  href='build-rfmap.php?mp=376&a_id=1850&y=-544' title='Гераклит

Древний материализм, 
Диалектика, Досократики
GRC
-544--483
MY: 0/-1
MX: 376
QN: 37'><div class=area style='position:absolute; width:34px; height:20px; left:430px; top:51px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=862&a_id=5266&y=-540' title='Парменид

Элейцы, 
Досократики, Логика, Материализм
GRC
-540--450
MY: 0/0
MX: 862
QN: 2'><div class=area style='position:absolute; width:35px; height:20px; left:881px; top:54px'></div></a>
<a  href='build-rfmap.php?mp=862&a_id=5266&y=-540' title='Парменид

Элейцы, 
Досократики, Логика, Материализм
GRC
-540--450
MY: 0/0
MX: 862
QN: 2'><div class=area style='position:absolute; width:34px; height:20px; left:916px; top:54px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=376&a_id=574&y=-500' title='Анаксагор Клазоменский

Древний материализм, Физики, 
Астрономия, Досократики
GRC
-500--428
MY: 0/104
MX: 376
QN: 10'><div class=area style='position:absolute; width:36px; height:20px; left:395px; top:73px'></div></a>
<a  href='build-rfmap.php?mp=376&a_id=574&y=-500' title='Анаксагор Клазоменский

Древний материализм, Физики, 
Астрономия, Досократики
GRC
-500--428
MY: 0/104
MX: 376
QN: 10'><div class=area style='position:absolute; width:36px; height:20px; left:431px; top:73px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1140&a_id=4530&y=-500' title='Метродор Хиосский

Скептицизм, 
Атомизм, Материализм, Эпикурейство
GRC
-500--420
MY: 0/-9
MX: 1140
QN: 2'><div class=area style='position:absolute; width:34px; height:20px; left:1159px; top:57px'></div></a>
<a  href='build-rfmap.php?mp=1140&a_id=4530&y=-500' title='Метродор Хиосский

Скептицизм, 
Атомизм, Материализм, Эпикурейство
GRC
-500--420
MY: 0/-9
MX: 1140
QN: 2'><div class=area style='position:absolute; width:33px; height:20px; left:1193px; top:57px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=935&a_id=3156&y=-490' title='Зенон Элейский

Элейцы, 
Досократики
GRC
-490--425
MY: 0/43
MX: 935
QN: 3'><div class=area style='position:absolute; width:29px; height:20px; left:954px; top:65px'></div></a>
<a  href='build-rfmap.php?mp=935&a_id=3156&y=-490' title='Зенон Элейский

Элейцы, 
Досократики
GRC
-490--425
MY: 0/43
MX: 935
QN: 3'><div class=area style='position:absolute; width:29px; height:20px; left:983px; top:65px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=453&a_id=7558&y=-490' title='Эмпедокл Акрагантский

Древний материализм, Плюрализм, 
Демократия, Досократики, Физики
GRC
-490--430
MY: 30/0
MX: 453
QN: 1'><div class=area style='position:absolute; width:34px; height:20px; left:472px; top:63px'></div></a>
<a  href='build-rfmap.php?mp=453&a_id=7558&y=-490' title='Эмпедокл Акрагантский

Древний материализм, Плюрализм, 
Демократия, Досократики, Физики
GRC
-490--430
MY: 30/0
MX: 453
QN: 1'><div class=area style='position:absolute; width:34px; height:20px; left:506px; top:63px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1013&a_id=5472&y=-481' title='Протагор

Сенсуализм, Софизм, 
Досократики, Материализм, Скептицизм
GRC
-481--411
MY: 0/0
MX: 1013
QN: 7'><div class=area style='position:absolute; width:31px; height:20px; left:1032px; top:61px'></div></a>
<a  href='build-rfmap.php?mp=1013&a_id=5472&y=-481' title='Протагор

Сенсуализм, Софизм, 
Досократики, Материализм, Скептицизм
GRC
-481--411
MY: 0/0
MX: 1013
QN: 7'><div class=area style='position:absolute; width:31px; height:20px; left:1063px; top:61px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1080&a_id=1924&y=-480' title='Горгий Леонтинский

Софизм, 
Досократики
GRC
-480--380
MY: 0/0
MX: 1080
QN: 7'><div class=area style='position:absolute; width:24px; height:20px; left:1099px; top:63px'></div></a>
<a  href='build-rfmap.php?mp=1080&a_id=1924&y=-480' title='Горгий Леонтинский

Софизм, 
Досократики
GRC
-480--380
MY: 0/0
MX: 1080
QN: 7'><div class=area style='position:absolute; width:24px; height:20px; left:1123px; top:63px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1277&a_id=4697&y=-470' title='Мо-Цзы

Всеобщая любовь, Консеквенциализм, Моизм, 
Логика, Пацифизм, Этика
CHN
-470--391
MY: 0/0
MX: 1277
QN: 3'><div class=area style='position:absolute; width:28px; height:20px; left:1296px; top:63px'></div></a>
<a  href='build-rfmap.php?mp=1277&a_id=4697&y=-470' title='Мо-Цзы

Всеобщая любовь, Консеквенциализм, Моизм, 
Логика, Пацифизм, Этика
CHN
-470--391
MY: 0/0
MX: 1277
QN: 3'><div class=area style='position:absolute; width:27px; height:20px; left:1324px; top:63px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=796&a_id=6176&y=-469' title='Сократ

Антропологизм, Классическая античность, 
Диалектика, Рационализм, Сократики, Субъективный идеализм, Этика
GRC
-469--399
MY: 0/0
MX: 796
QN: 74'><div class=area style='position:absolute; width:28px; height:20px; left:815px; top:62px'></div></a>
<a  href='build-rfmap.php?mp=796&a_id=6176&y=-469' title='Сократ

Антропологизм, Классическая античность, 
Диалектика, Рационализм, Сократики, Субъективный идеализм, Этика
GRC
-469--399
MY: 0/0
MX: 796
QN: 74'><div class=area style='position:absolute; width:27px; height:20px; left:843px; top:62px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=535&a_id=2067&y=-460' title='Демокрит

Древний материализм, Физики, 
Астрономия, Атомизм, Детерминизм, Досократики, Натурфилософия, Ученые
GRC
-460--370
MY: -50/0
MX: 535
QN: 73'><div class=area style='position:absolute; width:37px; height:20px; left:554px; top:58px'></div></a>
<a  href='build-rfmap.php?mp=535&a_id=2067&y=-460' title='Демокрит

Древний материализм, Физики, 
Астрономия, Атомизм, Детерминизм, Досократики, Натурфилософия, Ученые
GRC
-460--370
MY: -50/0
MX: 535
QN: 73'><div class=area style='position:absolute; width:36px; height:20px; left:591px; top:58px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1427&a_id=7822&y=-450' title='Ян Чжу

Даосизм, 
Антиконфуцианство
CHN
-450--380
MY: 10/0
MX: 1427
QN: 6'><div class=area style='position:absolute; width:27px; height:20px; left:1446px; top:66px'></div></a>
<a  href='build-rfmap.php?mp=1427&a_id=7822&y=-450' title='Ян Чжу

Даосизм, 
Антиконфуцианство
CHN
-450--380
MY: 10/0
MX: 1427
QN: 6'><div class=area style='position:absolute; width:27px; height:20px; left:1473px; top:66px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=222&a_id=804&y=-444' title='Антисфен

Кинизм, 
Этика
GRC
-444--371
MY: 0/-18
MX: 222
QN: 27'><div class=area style='position:absolute; width:38px; height:20px; left:241px; top:63px'></div></a>
<a  href='build-rfmap.php?mp=222&a_id=804&y=-444' title='Антисфен

Кинизм, 
Этика
GRC
-444--371
MY: 0/-18
MX: 222
QN: 27'><div class=area style='position:absolute; width:37px; height:20px; left:279px; top:63px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=729&a_id=5395&y=-427' title='Платон

Платонизм, 
Атомизм, Объективный идеализм, Политика, Эстетика
GRC
-427--347
MY: 0/-3
MX: 729
QN: 62'><div class=area style='position:absolute; width:28px; height:20px; left:748px; top:68px'></div></a>
<a  href='build-rfmap.php?mp=729&a_id=5395&y=-427' title='Платон

Платонизм, 
Атомизм, Объективный идеализм, Политика, Эстетика
GRC
-427--347
MY: 0/-3
MX: 729
QN: 62'><div class=area style='position:absolute; width:27px; height:20px; left:776px; top:68px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=302&a_id=2634&y=-412' title='Диоген Синопский

Кинизм, 
Материализм
GRC
-412--323
MY: 0/0
MX: 302
QN: 18'><div class=area style='position:absolute; width:32px; height:20px; left:321px; top:71px'></div></a>
<a  href='build-rfmap.php?mp=302&a_id=2634&y=-412' title='Диоген Синопский

Кинизм, 
Материализм
GRC
-412--323
MY: 0/0
MX: 302
QN: 18'><div class=area style='position:absolute; width:32px; height:20px; left:353px; top:71px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=635&a_id=868&y=-384' title='Аристотель

Аристотелизм, Логика, 
Метафизика, Эмпиризм, Этика
GRC
-384--322
MY: 80/-65
MX: 635
QN: 126'><div class=area style='position:absolute; width:43px; height:20px; left:654px; top:76px'></div></a>
<a  href='build-rfmap.php?mp=635&a_id=868&y=-384' title='Аристотель

Аристотелизм, Логика, 
Метафизика, Эмпиризм, Этика
GRC
-384--322
MY: 80/-65
MX: 635
QN: 126'><div class=area style='position:absolute; width:42px; height:20px; left:697px; top:76px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1342&a_id=4766&y=-371' title='Мэн-цзы

Конфуцианство
CHN
-371--289
MY: 0/0
MX: 1342
QN: 2'><div class=area style='position:absolute; width:30px; height:20px; left:1361px; top:77px'></div></a>
<a  href='build-rfmap.php?mp=1342&a_id=4766&y=-371' title='Мэн-цзы

Конфуцианство
CHN
-371--289
MY: 0/0
MX: 1342
QN: 2'><div class=area style='position:absolute; width:29px; height:20px; left:1391px; top:77px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=635&a_id=6425&y=-370' title='Теофраст

Аристотелизм, 
Ботаника
GRC
-370--285
MY: 80/66
MX: 635
QN: 12'><div class=area style='position:absolute; width:33px; height:20px; left:654px; top:98px'></div></a>
<a  href='build-rfmap.php?mp=635&a_id=6425&y=-370' title='Теофраст

Аристотелизм, 
Ботаника
GRC
-370--285
MY: 80/66
MX: 635
QN: 12'><div class=area style='position:absolute; width:33px; height:20px; left:687px; top:98px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1467&a_id=7226&y=-369' title='Чжуан-цзы (Чжуан Чжоу)

Даосизм
CHN
-369--286
MY: 80/0
MX: 1467
QN: 14'><div class=area style='position:absolute; width:37px; height:20px; left:1486px; top:88px'></div></a>
<a  href='build-rfmap.php?mp=1467&a_id=7226&y=-369' title='Чжуан-цзы (Чжуан Чжоу)

Даосизм
CHN
-369--286
MY: 80/0
MX: 1467
QN: 14'><div class=area style='position:absolute; width:36px; height:20px; left:1523px; top:88px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1140&a_id=7851&y=-360' title='Пиррон

Скептицизм
GRC
-360--270
MY: 0/-2
MX: 1140
QN: 5'><div class=area style='position:absolute; width:26px; height:20px; left:1159px; top:79px'></div></a>
<a  href='build-rfmap.php?mp=1140&a_id=7851&y=-360' title='Пиррон

Скептицизм
GRC
-360--270
MY: 0/-2
MX: 1140
QN: 5'><div class=area style='position:absolute; width:26px; height:20px; left:1185px; top:79px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=535&a_id=7603&y=-341' title='Эпикур

Древний материализм, Сенсуализм, Эпикурейство, 
Атараксия, Атомизм, Гедонизм, Гуманизм, Натурфилософия
GRC
-341--271
MY: 30/0
MX: 535
QN: 41'><div class=area style='position:absolute; width:28px; height:20px; left:554px; top:84px'></div></a>
<a  href='build-rfmap.php?mp=535&a_id=7603&y=-341' title='Эпикур

Древний материализм, Сенсуализм, Эпикурейство, 
Атараксия, Атомизм, Гедонизм, Гуманизм, Натурфилософия
GRC
-341--271
MY: 30/0
MX: 535
QN: 41'><div class=area style='position:absolute; width:27px; height:20px; left:582px; top:84px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=9&a_id=3154&y=-334' title='Зенон Китийский

Стоицизм, 
Натурфилософия, Пантеизм, Этика
GRC
-334--262
MY: 0/0
MX: 9
QN: 3'><div class=area style='position:absolute; width:29px; height:20px; left:28px; top:81px'></div></a>
<a  href='build-rfmap.php?mp=9&a_id=3154&y=-334' title='Зенон Китийский

Стоицизм, 
Натурфилософия, Пантеизм, Этика
GRC
-334--262
MY: 0/0
MX: 9
QN: 3'><div class=area style='position:absolute; width:28px; height:20px; left:57px; top:81px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=69&a_id=3667&y=-330' title='Клеанф

Стоицизм
GRC
-330--230
MY: 0/0
MX: 69
QN: 3'><div class=area style='position:absolute; width:27px; height:20px; left:88px; top:84px'></div></a>
<a  href='build-rfmap.php?mp=69&a_id=3667&y=-330' title='Клеанф

Стоицизм
GRC
-330--230
MY: 0/0
MX: 69
QN: 3'><div class=area style='position:absolute; width:26px; height:20px; left:115px; top:84px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=222&a_id=1101&y=-325' title='Бион Борисфенит

Кинизм
GRC
-325--246
MY: 0/18
MX: 222
QN: 9'><div class=area style='position:absolute; width:19px; height:20px; left:241px; top:85px'></div></a>
<a  href='build-rfmap.php?mp=222&a_id=1101&y=-325' title='Бион Борисфенит

Кинизм
GRC
-325--246
MY: 0/18
MX: 222
QN: 9'><div class=area style='position:absolute; width:19px; height:20px; left:260px; top:85px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=729&a_id=3880&y=-280' title='Лакид Киренский

Платонизм
GRC
-280--206
MY: 0/4
MX: 729
QN: 2'><div class=area style='position:absolute; width:23px; height:20px; left:748px; top:90px'></div></a>
<a  href='build-rfmap.php?mp=729&a_id=3880&y=-280' title='Лакид Киренский

Платонизм
GRC
-280--206
MY: 0/4
MX: 729
QN: 2'><div class=area style='position:absolute; width:23px; height:20px; left:771px; top:90px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1216&a_id=7032&y=-280' title='Хань Фэй

Деспотизм, Легизм, 
Политика
CHN
-280--233
MY: 0/0
MX: 1216
QN: 1'><div class=area style='position:absolute; width:26px; height:20px; left:1235px; top:87px'></div></a>
<a  href='build-rfmap.php?mp=1216&a_id=7032&y=-280' title='Хань Фэй

Деспотизм, Легизм, 
Политика
CHN
-280--233
MY: 0/0
MX: 1216
QN: 1'><div class=area style='position:absolute; width:26px; height:20px; left:1261px; top:87px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=126&a_id=7124&y=-279' title='Хрисипп Солийский

Стоицизм, 
Логика, Натурфилософия
GRC
-279--206
MY: 0/0
MX: 126
QN: 4'><div class=area style='position:absolute; width:29px; height:20px; left:145px; top:89px'></div></a>
<a  href='build-rfmap.php?mp=126&a_id=7124&y=-279' title='Хрисипп Солийский

Стоицизм, 
Логика, Натурфилософия
GRC
-279--206
MY: 0/0
MX: 126
QN: 4'><div class=area style='position:absolute; width:29px; height:20px; left:174px; top:89px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1140&a_id=3560&y=-214' title='Карнеад

Скептицизм, 
Академический скептицизм, Платонизм
GRC
-214--129
MY: 0/12
MX: 1140
QN: 2'><div class=area style='position:absolute; width:30px; height:20px; left:1159px; top:101px'></div></a>
<a  href='build-rfmap.php?mp=1140&a_id=3560&y=-214' title='Карнеад

Скептицизм, 
Академический скептицизм, Платонизм
GRC
-214--129
MY: 0/12
MX: 1140
QN: 2'><div class=area style='position:absolute; width:29px; height:20px; left:1189px; top:101px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1552&a_id=5269&y=-200' title='Патанджали

Индуизм, Йога
IND
-200--120
MY: 0/0
MX: 1552
QN: 8'><div class=area style='position:absolute; width:41px; height:20px; left:1571px; top:101px'></div></a>
<a  href='build-rfmap.php?mp=1552&a_id=5269&y=-200' title='Патанджали

Индуизм, Йога
IND
-200--120
MY: 0/0
MX: 1552
QN: 8'><div class=area style='position:absolute; width:40px; height:20px; left:1612px; top:101px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=9&a_id=5257&y=-180' title='Панетий Родосский

Стоицизм
GRC
-180--110
MY: 0/0
MX: 9
QN: 1'><div class=area style='position:absolute; width:29px; height:20px; left:28px; top:103px'></div></a>
<a  href='build-rfmap.php?mp=9&a_id=5257&y=-180' title='Панетий Родосский

Стоицизм
GRC
-180--110
MY: 0/0
MX: 9
QN: 1'><div class=area style='position:absolute; width:28px; height:20px; left:57px; top:103px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=69&a_id=5460&y=-139' title='Посидоний из Апамеи

Стоицизм, 
Астрономия
GRC
-139--51
MY: 20/0
MX: 69
QN: 3'><div class=area style='position:absolute; width:37px; height:20px; left:88px; top:113px'></div></a>
<a  href='build-rfmap.php?mp=69&a_id=5460&y=-139' title='Посидоний из Апамеи

Стоицизм, 
Астрономия
GRC
-139--51
MY: 20/0
MX: 69
QN: 3'><div class=area style='position:absolute; width:37px; height:20px; left:125px; top:113px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=147&a_id=4431&y=-106' title='Марк Туллий Цицерон

Стоицизм, Эклектизм
ROM
-106--43
MY: 0/0
MX: 147
QN: 153'><div class=area style='position:absolute; width:33px; height:20px; left:166px; top:113px'></div></a>
<a  href='build-rfmap.php?mp=147&a_id=4431&y=-106' title='Марк Туллий Цицерон

Стоицизм, Эклектизм
ROM
-106--43
MY: 0/0
MX: 147
QN: 153'><div class=area style='position:absolute; width:33px; height:20px; left:199px; top:113px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=535&a_id=6482&y=-94' title='Тит Лукреций Кар

Атомизм, Эпикурейство, 
Материализм, Метафизика, Эстетика, Этика
ROM
-94--55
MY: 0/0
MX: 535
QN: 10'><div class=area style='position:absolute; width:15px; height:20px; left:554px; top:113px'></div></a>
<a  href='build-rfmap.php?mp=535&a_id=6482&y=-94' title='Тит Лукреций Кар

Атомизм, Эпикурейство, 
Материализм, Метафизика, Эстетика, Этика
ROM
-94--55
MY: 0/0
MX: 535
QN: 10'><div class=area style='position:absolute; width:14px; height:20px; left:569px; top:113px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=729&a_id=6848&y=-20' title='Филон Александрийский

Иудаизм, Платонизм, 
Герменевтика, Стоицизм
ISR
-20--50
MY: 30/0
MX: 729
QN: 1'><div class=area style='position:absolute; width:24px; height:20px; left:748px; top:122px'></div></a>
<a  href='build-rfmap.php?mp=729&a_id=6848&y=-20' title='Филон Александрийский

Иудаизм, Платонизм, 
Герменевтика, Стоицизм
ISR
-20--50
MY: 30/0
MX: 729
QN: 1'><div class=area style='position:absolute; width:23px; height:20px; left:772px; top:122px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=157&a_id=4162&y=-4' title='Луций Анней Сенека

Стоицизм
ROM
-4-65
MY: 110/0
MX: 157
QN: 149'><div class=area style='position:absolute; width:28px; height:20px; left:176px; top:143px'></div></a>
<a  href='build-rfmap.php?mp=157&a_id=4162&y=-4' title='Луций Анней Сенека

Стоицизм
ROM
-4-65
MY: 110/0
MX: 157
QN: 149'><div class=area style='position:absolute; width:28px; height:20px; left:204px; top:143px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=787&a_id=5399&y=46' title='Плутарх

Неоплатонизм, 
Морализм, Эстетика
GRC
46-127
MY: 0/0
MX: 787
QN: 45'><div class=area style='position:absolute; width:32px; height:20px; left:806px; top:135px'></div></a>
<a  href='build-rfmap.php?mp=787&a_id=5399&y=46' title='Плутарх

Неоплатонизм, 
Морализм, Эстетика
GRC
46-127
MY: 0/0
MX: 787
QN: 45'><div class=area style='position:absolute; width:31px; height:20px; left:838px; top:135px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=9&a_id=7602&y=55' title='Эпиктет

Стоицизм, 
Этика
GRC
55-135
MY: 0/-56
MX: 9
QN: 50'><div class=area style='position:absolute; width:28px; height:20px; left:28px; top:128px'></div></a>
<a  href='build-rfmap.php?mp=9&a_id=7602&y=55' title='Эпиктет

Стоицизм, 
Этика
GRC
55-135
MY: 0/-56
MX: 9
QN: 50'><div class=area style='position:absolute; width:27px; height:20px; left:56px; top:128px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=9&a_id=2068&y=100' title='Демонакт

Кинизм, Стоицизм
GRC
100-180
MY: 0/56
MX: 9
QN: 13'><div class=area style='position:absolute; width:34px; height:20px; left:28px; top:150px'></div></a>
<a  href='build-rfmap.php?mp=9&a_id=2068&y=100' title='Демонакт

Кинизм, Стоицизм
GRC
100-180
MY: 0/56
MX: 9
QN: 13'><div class=area style='position:absolute; width:33px; height:20px; left:62px; top:150px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=864&a_id=7775&y=100' title='Юстин

Патристика
GRC
100-165
MY: 0/0
MX: 864
QN: 3'><div class=area style='position:absolute; width:24px; height:20px; left:883px; top:142px'></div></a>
<a  href='build-rfmap.php?mp=864&a_id=7775&y=100' title='Юстин

Патристика
GRC
100-165
MY: 0/0
MX: 864
QN: 3'><div class=area style='position:absolute; width:23px; height:20px; left:907px; top:142px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=79&a_id=4406&y=121' title='Марк Аврелий

Стоицизм
ROM
121-180
MY: 10/0
MX: 79
QN: 66'><div class=area style='position:absolute; width:38px; height:20px; left:98px; top:146px'></div></a>
<a  href='build-rfmap.php?mp=79&a_id=4406&y=121' title='Марк Аврелий

Стоицизм
ROM
121-180
MY: 10/0
MX: 79
QN: 66'><div class=area style='position:absolute; width:37px; height:20px; left:136px; top:146px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=915&a_id=6437&y=160' title='Тертуллиан

Патристика, 
Ранняя патристика, Средневековье
ITA
160-225
MY: 0/0
MX: 915
QN: 3'><div class=area style='position:absolute; width:39px; height:20px; left:934px; top:150px'></div></a>
<a  href='build-rfmap.php?mp=915&a_id=6437&y=160' title='Тертуллиан

Патристика, 
Ранняя патристика, Средневековье
ITA
160-225
MY: 0/0
MX: 915
QN: 3'><div class=area style='position:absolute; width:38px; height:20px; left:973px; top:150px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=729&a_id=5398&y=205' title='Плотин

Неоплатонизм, 
Идеализм, Эстетика, Этика
ROM
205-270
MY: 0/-54
MX: 729
QN: 4'><div class=area style='position:absolute; width:25px; height:20px; left:748px; top:149px'></div></a>
<a  href='build-rfmap.php?mp=729&a_id=5398&y=205' title='Плотин

Неоплатонизм, 
Идеализм, Эстетика, Этика
ROM
205-270
MY: 0/-54
MX: 729
QN: 4'><div class=area style='position:absolute; width:25px; height:20px; left:773px; top:149px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=787&a_id=5459&y=232' title='Порфирий

Неоплатонизм, 
Астрология, Математика
ROM
232-304
MY: 0/0
MX: 787
QN: 2'><div class=area style='position:absolute; width:34px; height:20px; left:806px; top:161px'></div></a>
<a  href='build-rfmap.php?mp=787&a_id=5459&y=232' title='Порфирий

Неоплатонизм, 
Астрология, Математика
ROM
232-304
MY: 0/0
MX: 787
QN: 2'><div class=area style='position:absolute; width:34px; height:20px; left:840px; top:161px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=729&a_id=7802&y=245' title='Ямвлих

Неоплатонизм, 
Астрология, Мистицизм, Пифагорейцы
ROM
245-325
MY: 0/55
MX: 729
QN: 1'><div class=area style='position:absolute; width:28px; height:20px; left:748px; top:171px'></div></a>
<a  href='build-rfmap.php?mp=729&a_id=7802&y=245' title='Ямвлих

Неоплатонизм, 
Астрология, Мистицизм, Пифагорейцы
ROM
245-325
MY: 0/55
MX: 729
QN: 1'><div class=area style='position:absolute; width:27px; height:20px; left:776px; top:171px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1001&a_id=1325&y=330' title='Василий Великий (Василий Кесарийский)

Патристика, 
Средневековье
TUR
330-379
MY: 0/0
MX: 1001
QN: 24'><div class=area style='position:absolute; width:36px; height:20px; left:1020px; top:173px'></div></a>
<a  href='build-rfmap.php?mp=1001&a_id=1325&y=330' title='Василий Великий (Василий Кесарийский)

Патристика, 
Средневековье
TUR
330-379
MY: 0/0
MX: 1001
QN: 24'><div class=area style='position:absolute; width:36px; height:20px; left:1056px; top:173px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1077&a_id=58&y=354' title='Аврелий Августин

Патристика, 
Волюнтаризм, Зрелая патристика, Средневековье, Эстетика, Этика
ROM
354-430
MY: 0/0
MX: 1077
QN: 56'><div class=area style='position:absolute; width:33px; height:20px; left:1096px; top:178px'></div></a>
<a  href='build-rfmap.php?mp=1077&a_id=58&y=354' title='Аврелий Августин

Патристика, 
Волюнтаризм, Зрелая патристика, Средневековье, Эстетика, Этика
ROM
354-430
MY: 0/0
MX: 1077
QN: 56'><div class=area style='position:absolute; width:33px; height:20px; left:1129px; top:178px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1152&a_id=736&y=480' title='Аниций Манлий Торкват Северин Боэций

Аристотелизм, Неоплатонизм, Патристика, 
Поздняя патристика, Теология, Эклектизм
ROM
480-525
MY: 0/0
MX: 1152
QN: 4'><div class=area style='position:absolute; width:26px; height:20px; left:1171px; top:193px'></div></a>
<a  href='build-rfmap.php?mp=1152&a_id=736&y=480' title='Аниций Манлий Торкват Северин Боэций

Аристотелизм, Неоплатонизм, Патристика, 
Поздняя патристика, Теология, Эклектизм
ROM
480-525
MY: 0/0
MX: 1152
QN: 4'><div class=area style='position:absolute; width:26px; height:20px; left:1197px; top:193px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1295&a_id=4293&y=580' title='Максим Исповедник

Мистицизм, Патристика, 
Средневековье
ROM
580-662
MY: 0/0
MX: 1295
QN: 1'><div class=area style='position:absolute; width:34px; height:20px; left:1314px; top:210px'></div></a>
<a  href='build-rfmap.php?mp=1295&a_id=4293&y=580' title='Максим Исповедник

Мистицизм, Патристика, 
Средневековье
ROM
580-662
MY: 0/0
MX: 1295
QN: 1'><div class=area style='position:absolute; width:34px; height:20px; left:1348px; top:210px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1204&a_id=3355&y=620' title='Иоанн Дамаскин

Патристика, 
Аристотелизм, Средневековье

620-
MY: 0/0
MX: 1204
QN: 18'><div class=area style='position:absolute; width:40px; height:20px; left:1223px; top:213px'></div></a>
<a  href='build-rfmap.php?mp=1204&a_id=3355&y=620' title='Иоанн Дамаскин

Патристика, 
Аристотелизм, Средневековье

620-
MY: 0/0
MX: 1204
QN: 18'><div class=area style='position:absolute; width:40px; height:20px; left:1263px; top:213px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1420&a_id=7031&y=800' title='Хань Сян-цзы

Даосизм
CHN
800-880
MY: 0/-194
MX: 1420
QN: 15'><div class=area style='position:absolute; width:28px; height:20px; left:1439px; top:213px'></div></a>
<a  href='build-rfmap.php?mp=1420&a_id=7031&y=800' title='Хань Сян-цзы

Даосизм
CHN
800-880
MY: 0/-194
MX: 1420
QN: 15'><div class=area style='position:absolute; width:28px; height:20px; left:1467px; top:213px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=865&a_id=7852&y=810' title='Иоанн Скот Эриугена

Ранняя схоластика, 
Мистицизм, Схоластика
IRL
810-877
MY: -10/0
MX: 865
QN: 4'><div class=area style='position:absolute; width:32px; height:20px; left:884px; top:225px'></div></a>
<a  href='build-rfmap.php?mp=865&a_id=7852&y=810' title='Иоанн Скот Эриугена

Ранняя схоластика, 
Мистицизм, Схоластика
IRL
810-877
MY: -10/0
MX: 865
QN: 4'><div class=area style='position:absolute; width:32px; height:20px; left:916px; top:225px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1565&a_id=488&y=872' title='Аль-Фараби

Астрономия, Логика, Медицина, Метафизика, Натурфилософия, Средневековье, Ученые, Этика
KAZ
872-950
MY: 0/-265
MX: 1565
QN: 6'><div class=area style='position:absolute; width:42px; height:20px; left:1584px; top:213px'></div></a>
<a  href='build-rfmap.php?mp=1565&a_id=488&y=872' title='Аль-Фараби

Астрономия, Логика, Медицина, Метафизика, Натурфилософия, Средневековье, Ученые, Этика
KAZ
872-950
MY: 0/-265
MX: 1565
QN: 6'><div class=area style='position:absolute; width:41px; height:20px; left:1626px; top:213px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1565&a_id=41&y=973' title='Абуль-Ала аль-Маарри

Аскетизм, Пессимизм, Рационализм, Скептицизм
SYR
973-1057
MY: 0/61
MX: 1565
QN: 27'><div class=area style='position:absolute; width:39px; height:20px; left:1584px; top:235px'></div></a>
<a  href='build-rfmap.php?mp=1565&a_id=41&y=973' title='Абуль-Ала аль-Маарри

Аскетизм, Пессимизм, Рационализм, Скептицизм
SYR
973-1057
MY: 0/61
MX: 1565
QN: 27'><div class=area style='position:absolute; width:39px; height:20px; left:1623px; top:235px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1490&a_id=29&y=980' title='Абу Али Хусейн ибн Абдаллах ибн Сина (Авиценна)

Восток, Средневековье
PER
980-1037
MY: 0/-159
MX: 1490
QN: 29'><div class=area style='position:absolute; width:34px; height:20px; left:1509px; top:226px'></div></a>
<a  href='build-rfmap.php?mp=1490&a_id=29&y=980' title='Абу Али Хусейн ибн Абдаллах ибн Сина (Авиценна)

Восток, Средневековье
PER
980-1037
MY: 0/-159
MX: 1490
QN: 29'><div class=area style='position:absolute; width:34px; height:20px; left:1543px; top:226px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1420&a_id=3184&y=994' title='Ибн Хазм

Ислам, История, Теология
SPA
994-1064
MY: 0/36
MX: 1420
QN: 4'><div class=area style='position:absolute; width:32px; height:20px; left:1439px; top:235px'></div></a>
<a  href='build-rfmap.php?mp=1420&a_id=3184&y=994' title='Ибн Хазм

Ислам, История, Теология
SPA
994-1064
MY: 0/36
MX: 1420
QN: 4'><div class=area style='position:absolute; width:32px; height:20px; left:1471px; top:235px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1490&a_id=5168&y=1048' title='Омар Хайям

Агностицизм, 
Гедонизм, Материализм, Мистицизм, Скептицизм
PER
1048-1131
MY: 0/160
MX: 1490
QN: 392'><div class=area style='position:absolute; width:32px; height:20px; left:1509px; top:248px'></div></a>
<a  href='build-rfmap.php?mp=1490&a_id=5168&y=1048' title='Омар Хайям

Агностицизм, 
Гедонизм, Материализм, Мистицизм, Скептицизм
PER
1048-1131
MY: 0/160
MX: 1490
QN: 392'><div class=area style='position:absolute; width:32px; height:20px; left:1541px; top:248px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=931&a_id=5482&y=1079' title='Пьер Абеляр

Номинализм, Схоластика, 
Концептуализм, Ранняя схоластика, Средневековье
FRA
1079-1142
MY: 10/0
MX: 931
QN: 20'><div class=area style='position:absolute; width:29px; height:20px; left:950px; top:238px'></div></a>
<a  href='build-rfmap.php?mp=931&a_id=5482&y=1079' title='Пьер Абеляр

Номинализм, Схоластика, 
Концептуализм, Ранняя схоластика, Средневековье
FRA
1079-1142
MY: 10/0
MX: 931
QN: 20'><div class=area style='position:absolute; width:29px; height:20px; left:979px; top:238px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1565&a_id=4702&y=1135' title='Моисей Маймонид (Моше бен Маймон)

Натурфилософия, 
Восток, Средневековье
ISR
1135-1204
MY: 0/209
MX: 1565
QN: 6'><div class=area style='position:absolute; width:36px; height:20px; left:1584px; top:257px'></div></a>
<a  href='build-rfmap.php?mp=1565&a_id=4702&y=1135' title='Моисей Маймонид (Моше бен Маймон)

Натурфилософия, 
Восток, Средневековье
ISR
1135-1204
MY: 0/209
MX: 1565
QN: 6'><div class=area style='position:absolute; width:35px; height:20px; left:1620px; top:257px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1420&a_id=7245&y=1185' title='Шамс ад-Дин Тебризи

Суфизм
PER
1185-1248
MY: 0/162
MX: 1420
QN: 4'><div class=area style='position:absolute; width:29px; height:20px; left:1439px; top:257px'></div></a>
<a  href='build-rfmap.php?mp=1420&a_id=7245&y=1185' title='Шамс ад-Дин Тебризи

Суфизм
PER
1185-1248
MY: 0/162
MX: 1420
QN: 4'><div class=area style='position:absolute; width:28px; height:20px; left:1468px; top:257px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1657&a_id=2109&y=1207' title='Джалаладдин Руми

Философская литература
PER
1207-1273
MY: 0/-12
MX: 1657
QN: 67'><div class=area style='position:absolute; width:21px; height:20px; left:1676px; top:246px'></div></a>
<a  href='build-rfmap.php?mp=1657&a_id=2109&y=1207' title='Джалаладдин Руми

Философская литература
PER
1207-1273
MY: 0/-12
MX: 1657
QN: 67'><div class=area style='position:absolute; width:20px; height:20px; left:1697px; top:246px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1080&a_id=5781&y=1214' title='Роджер Бэкон

Схоластика, 
Алхимия, Зрелая схоластика, Натурфилософия
ENG
1214-1294
MY: 0/0
MX: 1080
QN: 2'><div class=area style='position:absolute; width:29px; height:20px; left:1099px; top:248px'></div></a>
<a  href='build-rfmap.php?mp=1080&a_id=5781&y=1214' title='Роджер Бэкон

Схоластика, 
Алхимия, Зрелая схоластика, Натурфилософия
ENG
1214-1294
MY: 0/0
MX: 1080
QN: 2'><div class=area style='position:absolute; width:28px; height:20px; left:1128px; top:248px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1003&a_id=6865&y=1225' title='Фома Аквинский

Реализм, Томизм, Схоластика, 
Средневековье, Алхимия, Натурфилософия, Католицизм, Зрелая схоластика, Аристотелизм, Этика
ITA
1225-1274
MY: 0/0
MX: 1003
QN: 10'><div class=area style='position:absolute; width:37px; height:20px; left:1022px; top:248px'></div></a>
<a  href='build-rfmap.php?mp=1003&a_id=6865&y=1225' title='Фома Аквинский

Реализм, Томизм, Схоластика, 
Средневековье, Алхимия, Натурфилософия, Католицизм, Зрелая схоластика, Аристотелизм, Этика
ITA
1225-1274
MY: 0/0
MX: 1003
QN: 10'><div class=area style='position:absolute; width:36px; height:20px; left:1059px; top:248px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1317&a_id=4517&y=1260' title='Мейстер Экхарт

Мистицизм, 
Средневековье
DEU
1260-1328
MY: 0/0
MX: 1317
QN: 7'><div class=area style='position:absolute; width:25px; height:20px; left:1336px; top:251px'></div></a>
<a  href='build-rfmap.php?mp=1317&a_id=4517&y=1260' title='Мейстер Экхарт

Мистицизм, 
Средневековье
DEU
1260-1328
MY: 0/0
MX: 1317
QN: 7'><div class=area style='position:absolute; width:25px; height:20px; left:1361px; top:251px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1152&a_id=6662&y=1285' title='Уильям Оккам

Номинализм, Схоластика, 
Католицизм, Поздняя схоластика, Средневековье, Эпистемология
ENG
1285-1347
MY: 0/0
MX: 1152
QN: 2'><div class=area style='position:absolute; width:23px; height:20px; left:1171px; top:252px'></div></a>
<a  href='build-rfmap.php?mp=1152&a_id=6662&y=1285' title='Уильям Оккам

Номинализм, Схоластика, 
Католицизм, Поздняя схоластика, Средневековье, Эпистемология
ENG
1285-1347
MY: 0/0
MX: 1152
QN: 2'><div class=area style='position:absolute; width:23px; height:20px; left:1194px; top:252px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=218&a_id=4945&y=1401' title='Николай Кребс (Кузанский)

Гуманизм, Натурфилософия, Неоплатонизм, 
Возрождение, Пантеизм, Теология
DEU
1401-1464
MY: 0/-8
MX: 218
QN: 4'><div class=area style='position:absolute; width:35px; height:20px; left:237px; top:262px'></div></a>
<a  href='build-rfmap.php?mp=218&a_id=4945&y=1401' title='Николай Кребс (Кузанский)

Гуманизм, Натурфилософия, Неоплатонизм, 
Возрождение, Пантеизм, Теология
DEU
1401-1464
MY: 0/-8
MX: 218
QN: 4'><div class=area style='position:absolute; width:35px; height:20px; left:272px; top:262px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=536&a_id=4098&y=1407' title='Лоренцо Валла

Гуманизм, 
Возрождение, Эпикурейство
ITA
1407-1457
MY: 0/-11
MX: 536
QN: 4'><div class=area style='position:absolute; width:23px; height:20px; left:555px; top:261px'></div></a>
<a  href='build-rfmap.php?mp=536&a_id=4098&y=1407' title='Лоренцо Валла

Гуманизм, 
Возрождение, Эпикурейство
ITA
1407-1457
MY: 0/-11
MX: 536
QN: 4'><div class=area style='position:absolute; width:22px; height:20px; left:578px; top:261px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=710&a_id=4460&y=1433' title='Марсилио Фичино

Гуманизм, Неоплатонизм, 
Астрология, Возрождение, Оккультизм, Пантеизм
ITA
1433-1499
MY: 0/-57
MX: 710
QN: 2'><div class=area style='position:absolute; width:27px; height:20px; left:729px; top:259px'></div></a>
<a  href='build-rfmap.php?mp=710&a_id=4460&y=1433' title='Марсилио Фичино

Гуманизм, Неоплатонизм, 
Астрология, Возрождение, Оккультизм, Пантеизм
ITA
1433-1499
MY: 0/-57
MX: 710
QN: 2'><div class=area style='position:absolute; width:27px; height:20px; left:756px; top:259px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1657&a_id=3465&y=1440' title='Кабир

Философская литература
IND
1440-1518
MY: 0/-11
MX: 1657
QN: 4'><div class=area style='position:absolute; width:22px; height:20px; left:1676px; top:268px'></div></a>
<a  href='build-rfmap.php?mp=1657&a_id=3465&y=1440' title='Кабир

Философская литература
IND
1440-1518
MY: 0/-11
MX: 1657
QN: 4'><div class=area style='position:absolute; width:22px; height:20px; left:1698px; top:268px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=775&a_id=2309&y=1452' title='Джироламо Савонарола

Гуманизм, 
Аскетизм, Возрождение
ITA
1452-1498
MY: 0/0
MX: 775
QN: 10'><div class=area style='position:absolute; width:40px; height:20px; left:794px; top:269px'></div></a>
<a  href='build-rfmap.php?mp=775&a_id=2309&y=1452' title='Джироламо Савонарола

Гуманизм, 
Аскетизм, Возрождение
ITA
1452-1498
MY: 0/0
MX: 775
QN: 10'><div class=area style='position:absolute; width:40px; height:20px; left:834px; top:269px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=8&a_id=3966&y=1452' title='Леонардо да Винчи

Гуманизм, 
Возрождение, Материализм, Механика, Натурфилософия
ITA
1452-1519
MY: 0/-19
MX: 8
QN: 73'><div class=area style='position:absolute; width:35px; height:20px; left:27px; top:267px'></div></a>
<a  href='build-rfmap.php?mp=8&a_id=3966&y=1452' title='Леонардо да Винчи

Гуманизм, 
Возрождение, Материализм, Механика, Натурфилософия
ITA
1452-1519
MY: 0/-19
MX: 8
QN: 73'><div class=area style='position:absolute; width:35px; height:20px; left:62px; top:267px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=155&a_id=2340&y=1463' title='Джованни Пико делла Мирандола

Антропоцентризм, Гуманизм, 
Возрождение, Материализм, Неоплатонизм, Оккультизм
ITA
1463-1494
MY: 0/0
MX: 155
QN: 3'><div class=area style='position:absolute; width:19px; height:20px; left:174px; top:269px'></div></a>
<a  href='build-rfmap.php?mp=155&a_id=2340&y=1463' title='Джованни Пико делла Мирандола

Антропоцентризм, Гуманизм, 
Возрождение, Материализм, Неоплатонизм, Оккультизм
ITA
1463-1494
MY: 0/0
MX: 155
QN: 3'><div class=area style='position:absolute; width:18px; height:20px; left:193px; top:269px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=611&a_id=4889&y=1469' title='Никколо Макиавелли

Гуманизм, 
Возрождение, Деспотизм, Этика
ITA
1469-1527
MY: 0/0
MX: 611
QN: 25'><div class=area style='position:absolute; width:45px; height:20px; left:630px; top:272px'></div></a>
<a  href='build-rfmap.php?mp=611&a_id=4889&y=1469' title='Никколо Макиавелли

Гуманизм, 
Возрождение, Деспотизм, Этика
ITA
1469-1527
MY: 0/0
MX: 611
QN: 25'><div class=area style='position:absolute; width:45px; height:20px; left:675px; top:272px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=710&a_id=7608&y=1469' title='Эразм Роттердамский

Христианский гуманизм, 
Возрождение, Пацифизм
NLD
1469-1536
MY: 0/58
MX: 710
QN: 34'><div class=area style='position:absolute; width:31px; height:20px; left:729px; top:281px'></div></a>
<a  href='build-rfmap.php?mp=710&a_id=7608&y=1469' title='Эразм Роттердамский

Христианский гуманизм, 
Возрождение, Пацифизм
NLD
1469-1536
MY: 0/58
MX: 710
QN: 34'><div class=area style='position:absolute; width:31px; height:20px; left:760px; top:281px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=446&a_id=6544&y=1478' title='Томас Мор

Гуманизм, Утопизм, 
Возрождение, Материализм, Социализм
ENG
1478-1535
MY: 0/-28
MX: 446
QN: 7'><div class=area style='position:absolute; width:17px; height:20px; left:465px; top:269px'></div></a>
<a  href='build-rfmap.php?mp=446&a_id=6544&y=1478' title='Томас Мор

Гуманизм, Утопизм, 
Возрождение, Материализм, Социализм
ENG
1478-1535
MY: 0/-28
MX: 446
QN: 7'><div class=area style='position:absolute; width:16px; height:20px; left:482px; top:269px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=866&a_id=4469&y=1483' title='Мартин Лютер

Протестантизм, 
Лютеранство
DEU
1483-1546
MY: 0/0
MX: 866
QN: 16'><div class=area style='position:absolute; width:26px; height:20px; left:885px; top:274px'></div></a>
<a  href='build-rfmap.php?mp=866&a_id=4469&y=1483' title='Мартин Лютер

Протестантизм, 
Лютеранство
DEU
1483-1546
MY: 0/0
MX: 866
QN: 16'><div class=area style='position:absolute; width:25px; height:20px; left:911px; top:274px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=291&a_id=5264&y=1493' title='Парацельс

Врач, 
Алхимия, Возрождение, Пантеизм
CHE
1493-1541
MY: 0/0
MX: 291
QN: 33'><div class=area style='position:absolute; width:37px; height:20px; left:310px; top:274px'></div></a>
<a  href='build-rfmap.php?mp=291&a_id=5264&y=1493' title='Парацельс

Врач, 
Алхимия, Возрождение, Пантеизм
CHE
1493-1541
MY: 0/0
MX: 291
QN: 33'><div class=area style='position:absolute; width:36px; height:20px; left:347px; top:274px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=921&a_id=3017&y=1509' title='Жан Кальвин

Протестантизм, 
Кальвинизм
FRA
1509-1564
MY: 0/0
MX: 921
QN: 2'><div class=area style='position:absolute; width:29px; height:20px; left:940px; top:277px'></div></a>
<a  href='build-rfmap.php?mp=921&a_id=3017&y=1509' title='Жан Кальвин

Протестантизм, 
Кальвинизм
FRA
1509-1564
MY: 0/0
MX: 921
QN: 2'><div class=area style='position:absolute; width:29px; height:20px; left:969px; top:277px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=536&a_id=4684&y=1533' title='Мишель де Монтень

Гуманизм, 
Аболиционизм, Возрождение, Этика
FRA
1533-1592
MY: 0/12
MX: 536
QN: 146'><div class=area style='position:absolute; width:33px; height:20px; left:555px; top:283px'></div></a>
<a  href='build-rfmap.php?mp=536&a_id=4684&y=1533' title='Мишель де Монтень

Гуманизм, 
Аболиционизм, Возрождение, Этика
FRA
1533-1592
MY: 0/12
MX: 536
QN: 146'><div class=area style='position:absolute; width:32px; height:20px; left:588px; top:283px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=218&a_id=2515&y=1548' title='Джордано Бруно

Натурфилософия, Пантеизм, 
Астрология, Возрождение, Материализм, Поэзия, Эзотеризм
ITA
1548-1600
MY: 0/9
MX: 218
QN: 22'><div class=area style='position:absolute; width:23px; height:20px; left:237px; top:284px'></div></a>
<a  href='build-rfmap.php?mp=218&a_id=2515&y=1548' title='Джордано Бруно

Натурфилософия, Пантеизм, 
Астрология, Возрождение, Материализм, Поэзия, Эзотеризм
ITA
1548-1600
MY: 0/9
MX: 218
QN: 22'><div class=area style='position:absolute; width:22px; height:20px; left:260px; top:284px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=83&a_id=6987&y=1561' title='Фрэнсис Бэкон

Механистический материализм, Эмпиризм, 
Новое время
ENG
1561-1626
MY: 0/-77
MX: 83
QN: 127'><div class=area style='position:absolute; width:32px; height:20px; left:102px; top:274px'></div></a>
<a  href='build-rfmap.php?mp=83&a_id=6987&y=1561' title='Фрэнсис Бэкон

Механистический материализм, Эмпиризм, 
Новое время
ENG
1561-1626
MY: 0/-77
MX: 83
QN: 127'><div class=area style='position:absolute; width:31px; height:20px; left:134px; top:274px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=8&a_id=1686&y=1564' title='Галилео Галилей

Ученые, 
Возрождение, Материализм
ITA
1564-1642
MY: 0/19
MX: 8
QN: 17'><div class=area style='position:absolute; width:29px; height:20px; left:27px; top:289px'></div></a>
<a  href='build-rfmap.php?mp=8&a_id=1686&y=1564' title='Галилео Галилей

Ученые, 
Возрождение, Материализм
ITA
1564-1642
MY: 0/19
MX: 8
QN: 17'><div class=area style='position:absolute; width:28px; height:20px; left:56px; top:289px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=446&a_id=6566&y=1568' title='Томмазо Кампанелла

Гуманизм, Утопизм, 
Возрождение, Материализм, Социализм, Христианство
ITA
1568-1639
MY: 0/29
MX: 446
QN: 2'><div class=area style='position:absolute; width:41px; height:20px; left:465px; top:291px'></div></a>
<a  href='build-rfmap.php?mp=446&a_id=6566&y=1568' title='Томмазо Кампанелла

Гуманизм, Утопизм, 
Возрождение, Материализм, Социализм, Христианство
ITA
1568-1639
MY: 0/29
MX: 446
QN: 2'><div class=area style='position:absolute; width:40px; height:20px; left:506px; top:291px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1657&a_id=2403&y=1572' title='Джон Донн

Философская литература
ENG
1572-1631
MY: 0/23
MX: 1657
QN: 40'><div class=area style='position:absolute; width:20px; height:20px; left:1676px; top:290px'></div></a>
<a  href='build-rfmap.php?mp=1657&a_id=2403&y=1572' title='Джон Донн

Философская литература
ENG
1572-1631
MY: 0/23
MX: 1657
QN: 40'><div class=area style='position:absolute; width:19px; height:20px; left:1696px; top:290px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1317&a_id=7785&y=1575' title='Якоб Бёме

Гуманизм, 
Возрождение, Гностицизм, Мистицизм, Оккультизм, Софиология, Теософия
DEU
1575-1624
MY: 0/0
MX: 1317
QN: 2'><div class=area style='position:absolute; width:20px; height:20px; left:1336px; top:286px'></div></a>
<a  href='build-rfmap.php?mp=1317&a_id=7785&y=1575' title='Якоб Бёме

Гуманизм, 
Возрождение, Гностицизм, Мистицизм, Оккультизм, Софиология, Теософия
DEU
1575-1624
MY: 0/0
MX: 1317
QN: 2'><div class=area style='position:absolute; width:20px; height:20px; left:1356px; top:286px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=83&a_id=6527&y=1588' title='Томас Гоббс

Механистический материализм, Монархизм, Эмпиризм, 
История, Новое время, Политика, Этика
ENG
1588-1679
MY: 0/37
MX: 83
QN: 15'><div class=area style='position:absolute; width:22px; height:20px; left:102px; top:296px'></div></a>
<a  href='build-rfmap.php?mp=83&a_id=6527&y=1588' title='Томас Гоббс

Механистический материализм, Монархизм, Эмпиризм, 
История, Новое время, Политика, Этика
ENG
1588-1679
MY: 0/37
MX: 83
QN: 15'><div class=area style='position:absolute; width:21px; height:20px; left:124px; top:296px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=374&a_id=5614&y=1596' title='Рене Декарт

Дуализм, Рационализм, 
Картезианство, Натурфилософия, Новое время, Субъективный идеализм, Ученые
FRA
1596-1650
MY: 0/-108
MX: 374
QN: 32'><div class=area style='position:absolute; width:26px; height:20px; left:393px; top:274px'></div></a>
<a  href='build-rfmap.php?mp=374&a_id=5614&y=1596' title='Рене Декарт

Дуализм, Рационализм, 
Картезианство, Натурфилософия, Новое время, Субъективный идеализм, Ученые
FRA
1596-1650
MY: 0/-108
MX: 374
QN: 32'><div class=area style='position:absolute; width:25px; height:20px; left:419px; top:274px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=374&a_id=1105&y=1623' title='Блез Паскаль

Рационализм, Эмпиризм, 
Мистицизм, Новое время, Ученые, Этика
FRA
1623-1662
MY: 0/25
MX: 374
QN: 62'><div class=area style='position:absolute; width:32px; height:20px; left:393px; top:296px'></div></a>
<a  href='build-rfmap.php?mp=374&a_id=1105&y=1623' title='Блез Паскаль

Рационализм, Эмпиризм, 
Мистицизм, Новое время, Ученые, Этика
FRA
1623-1662
MY: 0/25
MX: 374
QN: 62'><div class=area style='position:absolute; width:31px; height:20px; left:425px; top:296px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=374&a_id=1033&y=1632' title='Бенедикт Спиноза

Пантеизм, Рационализм, 
Детерминизм, Дуализм, Материализм, Метафизика, Новое время, Эпистемология, Этика
NLD
1632-1677
MY: 0/58
MX: 374
QN: 33'><div class=area style='position:absolute; width:32px; height:20px; left:393px; top:318px'></div></a>
<a  href='build-rfmap.php?mp=374&a_id=1033&y=1632' title='Бенедикт Спиноза

Пантеизм, Рационализм, 
Детерминизм, Дуализм, Материализм, Метафизика, Новое время, Эпистемология, Этика
NLD
1632-1677
MY: 0/58
MX: 374
QN: 33'><div class=area style='position:absolute; width:32px; height:20px; left:425px; top:318px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=83&a_id=2432&y=1632' title='Джон Локк

Либерализм, Сенсуализм, Эмпиризм, 
Деизм, Материализм, Метафизика, Новое время, Политика, Эпистемология
ENG
1632-1704
MY: 0/45
MX: 83
QN: 35'><div class=area style='position:absolute; width:21px; height:20px; left:102px; top:318px'></div></a>
<a  href='build-rfmap.php?mp=83&a_id=2432&y=1632' title='Джон Локк

Либерализм, Сенсуализм, Эмпиризм, 
Деизм, Материализм, Метафизика, Новое время, Политика, Эпистемология
ENG
1632-1704
MY: 0/45
MX: 83
QN: 35'><div class=area style='position:absolute; width:20px; height:20px; left:123px; top:318px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=374&a_id=1927&y=1646' title='Готфрид Вильгельм Лейбниц

Плюрализм, Рационализм, 
Деизм, История, Логика, Новое время, Объективный идеализм, Ученые, Этика
DEU
1646-1716
MY: 0/48
MX: 374
QN: 13'><div class=area style='position:absolute; width:31px; height:20px; left:393px; top:341px'></div></a>
<a  href='build-rfmap.php?mp=374&a_id=1927&y=1646' title='Готфрид Вильгельм Лейбниц

Плюрализм, Рационализм, 
Деизм, История, Логика, Новое время, Объективный идеализм, Ученые, Этика
DEU
1646-1716
MY: 0/48
MX: 374
QN: 13'><div class=area style='position:absolute; width:30px; height:20px; left:424px; top:341px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1027&a_id=2104&y=1685' title='Джoрдж Беркли

Субъективный идеализм, 
Новое время, Сенсуализм, Спиритуализм
ENG
1685-1753
MY: 7/0
MX: 1027
QN: 1'><div class=area style='position:absolute; width:26px; height:20px; left:1046px; top:336px'></div></a>
<a  href='build-rfmap.php?mp=1027&a_id=2104&y=1685' title='Джoрдж Беркли

Субъективный идеализм, 
Новое время, Сенсуализм, Спиритуализм
ENG
1685-1753
MY: 7/0
MX: 1027
QN: 1'><div class=area style='position:absolute; width:25px; height:20px; left:1072px; top:336px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=223&a_id=7267&y=1689' title='Шарль Луи де Монтескьё

Просвещение, 
Деизм, История, Натурализм, Политика, Этика
FRA
1689-1755
MY: 0/-4
MX: 223
QN: 40'><div class=area style='position:absolute; width:40px; height:20px; left:242px; top:325px'></div></a>
<a  href='build-rfmap.php?mp=223&a_id=7267&y=1689' title='Шарль Луи де Монтескьё

Просвещение, 
Деизм, История, Натурализм, Политика, Этика
FRA
1689-1755
MY: 0/-4
MX: 223
QN: 40'><div class=area style='position:absolute; width:40px; height:20px; left:282px; top:325px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=223&a_id=1633&y=1694' title='Вольтер (Франсуа-Мари Аруэ)

Деизм, Просвещение, Просвещенный абсолютизм, 
Дуализм, Материализм, Монархизм
FRA
1694-1778
MY: 0/-2
MX: 223
QN: 155'><div class=area style='position:absolute; width:31px; height:20px; left:242px; top:348px'></div></a>
<a  href='build-rfmap.php?mp=223&a_id=1633&y=1694' title='Вольтер (Франсуа-Мари Аруэ)

Деизм, Просвещение, Просвещенный абсолютизм, 
Дуализм, Материализм, Монархизм
FRA
1694-1778
MY: 0/-2
MX: 223
QN: 155'><div class=area style='position:absolute; width:31px; height:20px; left:273px; top:348px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1027&a_id=2813&y=1711' title='Дэвид Юм

Агностицизм, Субъективный идеализм, Эмпиризм, 
Номинализм, Просвещение, Новое время, Сенсуализм, Скептицизм, Деизм, Психологический атомизм
SCO
1711-1776
MY: 0/0
MX: 1027
QN: 21'><div class=area style='position:absolute; width:15px; height:20px; left:1046px; top:362px'></div></a>
<a  href='build-rfmap.php?mp=1027&a_id=2813&y=1711' title='Дэвид Юм

Агностицизм, Субъективный идеализм, Эмпиризм, 
Номинализм, Просвещение, Новое время, Сенсуализм, Скептицизм, Деизм, Психологический атомизм
SCO
1711-1776
MY: 0/0
MX: 1027
QN: 21'><div class=area style='position:absolute; width:15px; height:20px; left:1061px; top:362px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=8&a_id=4615&y=1711' title='Михаил Васильевич Ломоносов

Деизм, Материализм, Натурфилософия, 
Атомизм, Новое время
RUS
1711-1765
MY: -6/0
MX: 8
QN: 20'><div class=area style='position:absolute; width:38px; height:20px; left:27px; top:345px'></div></a>
<a  href='build-rfmap.php?mp=8&a_id=4615&y=1711' title='Михаил Васильевич Ломоносов

Деизм, Материализм, Натурфилософия, 
Атомизм, Новое время
RUS
1711-1765
MY: -6/0
MX: 8
QN: 20'><div class=area style='position:absolute; width:38px; height:20px; left:65px; top:345px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=223&a_id=3047&y=1712' title='Жан-Жак Руссо

Просвещение, 
Деизм, Политика, Сентиментализм, Эстетика, Этика
FRA
1712-1778
MY: 0/5
MX: 223
QN: 65'><div class=area style='position:absolute; width:23px; height:20px; left:242px; top:370px'></div></a>
<a  href='build-rfmap.php?mp=223&a_id=3047&y=1712' title='Жан-Жак Руссо

Просвещение, 
Деизм, Политика, Сентиментализм, Эстетика, Этика
FRA
1712-1778
MY: 0/5
MX: 223
QN: 65'><div class=area style='position:absolute; width:23px; height:20px; left:265px; top:370px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=156&a_id=2075&y=1713' title='Дени Дидро

Атеизм, Механистический материализм, Просвещение, 
Натурфилософия
FRA
1713-1784
MY: 0/-4
MX: 156
QN: 42'><div class=area style='position:absolute; width:25px; height:20px; left:175px; top:363px'></div></a>
<a  href='build-rfmap.php?mp=156&a_id=2075&y=1713' title='Дени Дидро

Атеизм, Механистический материализм, Просвещение, 
Натурфилософия
FRA
1713-1784
MY: 0/-4
MX: 156
QN: 42'><div class=area style='position:absolute; width:25px; height:20px; left:200px; top:363px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=62&a_id=3680&y=1715' title='Клод Адриан Гельвеций

Механистический материализм, Утилитаризм, 
Натурфилософия, Эмпиризм, Этика
FRA
1715-1771
MY: 6/0
MX: 62
QN: 59'><div class=area style='position:absolute; width:40px; height:20px; left:81px; top:369px'></div></a>
<a  href='build-rfmap.php?mp=62&a_id=3680&y=1715' title='Клод Адриан Гельвеций

Механистический материализм, Утилитаризм, 
Натурфилософия, Эмпиризм, Этика
FRA
1715-1771
MY: 6/0
MX: 62
QN: 59'><div class=area style='position:absolute; width:39px; height:20px; left:121px; top:369px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=714&a_id=1960&y=1722' title='Григорий Сковорода

Религиозная философия
RUS
1722-1794
MY: 0/0
MX: 714
QN: 17'><div class=area style='position:absolute; width:37px; height:20px; left:733px; top:381px'></div></a>
<a  href='build-rfmap.php?mp=714&a_id=1960&y=1722' title='Григорий Сковорода

Религиозная философия
RUS
1722-1794
MY: 0/0
MX: 714
QN: 17'><div class=area style='position:absolute; width:36px; height:20px; left:770px; top:381px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=156&a_id=5456&y=1723' title='Поль-Анри Гольбах

Механистический материализм, Просвещение, 
Атеизм, Натурфилософия
FRA
1723-1789
MY: 0/5
MX: 156
QN: 21'><div class=area style='position:absolute; width:29px; height:20px; left:175px; top:385px'></div></a>
<a  href='build-rfmap.php?mp=156&a_id=5456&y=1723' title='Поль-Анри Гольбах

Механистический материализм, Просвещение, 
Атеизм, Натурфилософия
FRA
1723-1789
MY: 0/5
MX: 156
QN: 21'><div class=area style='position:absolute; width:28px; height:20px; left:204px; top:385px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=613&a_id=3335&y=1724' title='Иммануил Кант

Кантианство, Трансцендентальный идеализм, 
Дуализм, Субъективный идеализм
DEU
1724-1804
MY: 0/0
MX: 613
QN: 71'><div class=area style='position:absolute; width:20px; height:20px; left:632px; top:390px'></div></a>
<a  href='build-rfmap.php?mp=613&a_id=3335&y=1724' title='Иммануил Кант

Кантианство, Трансцендентальный идеализм, 
Дуализм, Субъективный идеализм
DEU
1724-1804
MY: 0/0
MX: 613
QN: 71'><div class=area style='position:absolute; width:19px; height:20px; left:652px; top:390px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1188&a_id=2250&y=1748' title='Джереми (Иеремия) Бентам

Либерализм, Позитивизм, Просвещение, Утилитаризм, 
Антиклерикализм, Экономика, Этика
ENG
1748-1932
MY: 0/-5
MX: 1188
QN: 8'><div class=area style='position:absolute; width:26px; height:20px; left:1207px; top:514px'></div></a>
<a  href='build-rfmap.php?mp=1188&a_id=2250&y=1748' title='Джереми (Иеремия) Бентам

Либерализм, Позитивизм, Просвещение, Утилитаризм, 
Антиклерикализм, Экономика, Этика
ENG
1748-1932
MY: 0/-5
MX: 1188
QN: 8'><div class=area style='position:absolute; width:26px; height:20px; left:1233px; top:514px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=8&a_id=295&y=1749' title='Александр Николаевич Радищев

Материализм
RUS
1749-1802
MY: 0/0
MX: 8
QN: 2'><div class=area style='position:absolute; width:33px; height:20px; left:27px; top:406px'></div></a>
<a  href='build-rfmap.php?mp=8&a_id=295&y=1749' title='Александр Николаевич Радищев

Материализм
RUS
1749-1802
MY: 0/0
MX: 8
QN: 2'><div class=area style='position:absolute; width:32px; height:20px; left:60px; top:406px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1657&a_id=3362&y=1749' title='Иоганн Вольфганг фон Гёте

Философская литература
DEU
1749-1832
MY: 0/-2
MX: 1657
QN: 214'><div class=area style='position:absolute; width:19px; height:20px; left:1676px; top:425px'></div></a>
<a  href='build-rfmap.php?mp=1657&a_id=3362&y=1749' title='Иоганн Вольфганг фон Гёте

Философская литература
DEU
1749-1832
MY: 0/-2
MX: 1657
QN: 214'><div class=area style='position:absolute; width:19px; height:20px; left:1695px; top:425px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1657&a_id=3373&y=1759' title='Иоганн Кристоф Фридрих фон Шиллер

Романтизм, Философская литература, 
Буря и натиск, Эстетика, Этика
DEU
1759-1805
MY: 0/-9
MX: 1657
QN: 57'><div class=area style='position:absolute; width:27px; height:20px; left:1676px; top:402px'></div></a>
<a  href='build-rfmap.php?mp=1657&a_id=3373&y=1759' title='Иоганн Кристоф Фридрих фон Шиллер

Романтизм, Философская литература, 
Буря и натиск, Эстетика, Этика
DEU
1759-1805
MY: 0/-9
MX: 1657
QN: 57'><div class=area style='position:absolute; width:27px; height:20px; left:1703px; top:402px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=446&a_id=790&y=1760' title='Анри Клод де Рувруа Сен-Симон

Утопизм, 
Материализм, Политика, Социализм
FRA
1760-1825
MY: 0/0
MX: 446
QN: 4'><div class=area style='position:absolute; width:37px; height:20px; left:465px; top:430px'></div></a>
<a  href='build-rfmap.php?mp=446&a_id=790&y=1760' title='Анри Клод де Рувруа Сен-Симон

Утопизм, 
Материализм, Политика, Социализм
FRA
1760-1825
MY: 0/0
MX: 446
QN: 4'><div class=area style='position:absolute; width:37px; height:20px; left:502px; top:430px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1027&a_id=3367&y=1762' title='Иоганн Готлиб Фихте

Субъективный идеализм, 
Волюнтаризм, Метафизика, Онтология, Этика
DEU
1762-1814
MY: 0/0
MX: 1027
QN: 9'><div class=area style='position:absolute; width:23px; height:20px; left:1046px; top:423px'></div></a>
<a  href='build-rfmap.php?mp=1027&a_id=3367&y=1762' title='Иоганн Готлиб Фихте

Субъективный идеализм, 
Волюнтаризм, Метафизика, Онтология, Этика
DEU
1762-1814
MY: 0/0
MX: 1027
QN: 9'><div class=area style='position:absolute; width:22px; height:20px; left:1069px; top:423px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=613&a_id=1821&y=1770' title='Георг Вильгельм Фридрих Гегель

Абсолютный идеализм, Гегельянцы, Объективный идеализм, 
Волюнтаризм, Диалектика
DEU
1770-1831
MY: 0/0
MX: 613
QN: 44'><div class=area style='position:absolute; width:24px; height:20px; left:632px; top:442px'></div></a>
<a  href='build-rfmap.php?mp=613&a_id=1821&y=1770' title='Георг Вильгельм Фридрих Гегель

Абсолютный идеализм, Гегельянцы, Объективный идеализм, 
Волюнтаризм, Диалектика
DEU
1770-1831
MY: 0/0
MX: 613
QN: 44'><div class=area style='position:absolute; width:24px; height:20px; left:656px; top:442px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1295&a_id=5022&y=1772' title='Новалис (Фридрих фон Харденберг)

Мистицизм, Романтизм, 
Монархизм, Поэзия, Эстетика
DEU
1772-1801
MY: 0/0
MX: 1295
QN: 8'><div class=area style='position:absolute; width:30px; height:20px; left:1314px; top:422px'></div></a>
<a  href='build-rfmap.php?mp=1295&a_id=5022&y=1772' title='Новалис (Фридрих фон Харденберг)

Мистицизм, Романтизм, 
Монархизм, Поэзия, Эстетика
DEU
1772-1801
MY: 0/0
MX: 1295
QN: 8'><div class=area style='position:absolute; width:29px; height:20px; left:1344px; top:422px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1657&a_id=6332&y=1772' title='Сэмюэл Тэйлор Кольридж

Философская литература
ENG
1772-1834
MY: 0/1
MX: 1657
QN: 17'><div class=area style='position:absolute; width:35px; height:20px; left:1676px; top:448px'></div></a>
<a  href='build-rfmap.php?mp=1657&a_id=6332&y=1772' title='Сэмюэл Тэйлор Кольридж

Философская литература
ENG
1772-1834
MY: 0/1
MX: 1657
QN: 17'><div class=area style='position:absolute; width:34px; height:20px; left:1711px; top:448px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=613&a_id=6951&y=1775' title='Фридрих Вильгельм Шеллинг

Объективный идеализм, 
Волюнтаризм, Метафизика, Натурфилософия, Романтизм, Эстетика
DEU
1775-1854
MY: 0/0
MX: 613
QN: 4'><div class=area style='position:absolute; width:30px; height:20px; left:632px; top:472px'></div></a>
<a  href='build-rfmap.php?mp=613&a_id=6951&y=1775' title='Фридрих Вильгельм Шеллинг

Объективный идеализм, 
Волюнтаризм, Метафизика, Натурфилософия, Романтизм, Эстетика
DEU
1775-1854
MY: 0/0
MX: 613
QN: 4'><div class=area style='position:absolute; width:30px; height:20px; left:662px; top:472px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1258&a_id=941&y=1788' title='Артур Шопенгауэр

Иррационализм, Философия жизни, 
Волюнтаризм, Эстетика, Романтизм, Пессимизм, Палингенезия, Монархизм, Мистицизм, Мизантропия, Этика
DEU
1788-1860
MY: 0/0
MX: 1258
QN: 199'><div class=area style='position:absolute; width:44px; height:20px; left:1277px; top:490px'></div></a>
<a  href='build-rfmap.php?mp=1258&a_id=941&y=1788' title='Артур Шопенгауэр

Иррационализм, Философия жизни, 
Волюнтаризм, Эстетика, Романтизм, Пессимизм, Палингенезия, Монархизм, Мистицизм, Мизантропия, Этика
DEU
1788-1860
MY: 0/0
MX: 1258
QN: 199'><div class=area style='position:absolute; width:43px; height:20px; left:1321px; top:490px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=356&a_id=5350&y=1794' title='Пётр Яковлевич Чаадаев

Западничество, Публицистика
RUS
1794-1856
MY: 0/0
MX: 356
QN: 30'><div class=area style='position:absolute; width:30px; height:20px; left:375px; top:493px'></div></a>
<a  href='build-rfmap.php?mp=356&a_id=5350&y=1794' title='Пётр Яковлевич Чаадаев

Западничество, Публицистика
RUS
1794-1856
MY: 0/0
MX: 356
QN: 30'><div class=area style='position:absolute; width:30px; height:20px; left:405px; top:493px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1657&a_id=2108&y=1798' title='Джакомо Леопарди

Философская литература
ITA
1798-1837
MY: 0/-3
MX: 1657
QN: 14'><div class=area style='position:absolute; width:34px; height:20px; left:1676px; top:472px'></div></a>
<a  href='build-rfmap.php?mp=1657&a_id=2108&y=1798' title='Джакомо Леопарди

Философская литература
ITA
1798-1837
MY: 0/-3
MX: 1657
QN: 14'><div class=area style='position:absolute; width:34px; height:20px; left:1710px; top:472px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1188&a_id=5069&y=1798' title='Огюст Конт

Позитивизм, 
Политика, Социология, Эстетика
FRA
1798-1857
MY: 0/-4
MX: 1188
QN: 1'><div class=area style='position:absolute; width:18px; height:20px; left:1207px; top:490px'></div></a>
<a  href='build-rfmap.php?mp=1188&a_id=5069&y=1798' title='Огюст Конт

Позитивизм, 
Политика, Социология, Эстетика
FRA
1798-1857
MY: 0/-4
MX: 1188
QN: 1'><div class=area style='position:absolute; width:18px; height:20px; left:1225px; top:490px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1657&a_id=5555&y=1803' title='Ральф Уолдо Эмерсон

Философская литература
USA
1803-1882
MY: 0/5
MX: 1657
QN: 108'><div class=area style='position:absolute; width:33px; height:20px; left:1676px; top:541px'></div></a>
<a  href='build-rfmap.php?mp=1657&a_id=5555&y=1803' title='Ральф Уолдо Эмерсон

Философская литература
USA
1803-1882
MY: 0/5
MX: 1657
QN: 108'><div class=area style='position:absolute; width:32px; height:20px; left:1709px; top:541px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1657&a_id=6764&y=1803' title='Фёдор Иванович Тютчев

Философская литература
RUS
1803-1873
MY: 0/-12
MX: 1657
QN: 53'><div class=area style='position:absolute; width:29px; height:20px; left:1676px; top:495px'></div></a>
<a  href='build-rfmap.php?mp=1657&a_id=6764&y=1803' title='Фёдор Иванович Тютчев

Философская литература
RUS
1803-1873
MY: 0/-12
MX: 1657
QN: 53'><div class=area style='position:absolute; width:29px; height:20px; left:1705px; top:495px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=803&a_id=412&y=1804' title='Алексей Степанович Хомяков

Словянофильство, 
Монархизм, Православие, Соборность
RUS
1804-1860
MY: 0/-2
MX: 803
QN: 3'><div class=area style='position:absolute; width:30px; height:20px; left:822px; top:503px'></div></a>
<a  href='build-rfmap.php?mp=803&a_id=412&y=1804' title='Алексей Степанович Хомяков

Словянофильство, 
Монархизм, Православие, Соборность
RUS
1804-1860
MY: 0/-2
MX: 803
QN: 3'><div class=area style='position:absolute; width:29px; height:20px; left:852px; top:503px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=9&a_id=4180&y=1804' title='Людвиг Фейербах

Антропологизм, 
Атеизм, Гегельянцы, Материализм, Политика, Социализм, Теология, Эмпиризм, Этика
DEU
1804-1872
MY: 0/0
MX: 9
QN: 25'><div class=area style='position:absolute; width:34px; height:20px; left:28px; top:520px'></div></a>
<a  href='build-rfmap.php?mp=9&a_id=4180&y=1804' title='Людвиг Фейербах

Антропологизм, 
Атеизм, Гегельянцы, Материализм, Политика, Социализм, Теология, Эмпиризм, Этика
DEU
1804-1872
MY: 0/0
MX: 9
QN: 25'><div class=area style='position:absolute; width:34px; height:20px; left:62px; top:520px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1188&a_id=2469&y=1806' title='Джон Стюарт Милль

Либерализм, Позитивизм, 
Утилитаризм
ENG
1806-1873
MY: 0/6
MX: 1188
QN: 11'><div class=area style='position:absolute; width:26px; height:20px; left:1207px; top:537px'></div></a>
<a  href='build-rfmap.php?mp=1188&a_id=2469&y=1806' title='Джон Стюарт Милль

Либерализм, Позитивизм, 
Утилитаризм
ENG
1806-1873
MY: 0/6
MX: 1188
QN: 11'><div class=area style='position:absolute; width:25px; height:20px; left:1233px; top:537px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=356&a_id=245&y=1812' title='Александр Иванович Герцен

Западничество, 
Гегельянцы, Материализм
RUS
1812-1870
MY: 0/0
MX: 356
QN: 39'><div class=area style='position:absolute; width:25px; height:20px; left:375px; top:526px'></div></a>
<a  href='build-rfmap.php?mp=356&a_id=245&y=1812' title='Александр Иванович Герцен

Западничество, 
Гегельянцы, Материализм
RUS
1812-1870
MY: 0/0
MX: 356
QN: 39'><div class=area style='position:absolute; width:25px; height:20px; left:400px; top:526px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1028&a_id=6109&y=1813' title='Сёрен Обю Кьеркегор

Философия жизни, 
Дуализм, Экзистенциализм
DNK
1813-1855
MY: 0/0
MX: 1028
QN: 25'><div class=area style='position:absolute; width:38px; height:20px; left:1047px; top:511px'></div></a>
<a  href='build-rfmap.php?mp=1028&a_id=6109&y=1813' title='Сёрен Обю Кьеркегор

Философия жизни, 
Дуализм, Экзистенциализм
DNK
1813-1855
MY: 0/0
MX: 1028
QN: 25'><div class=area style='position:absolute; width:38px; height:20px; left:1085px; top:511px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=467&a_id=4602&y=1814' title='Михаил Александрович Бакунин

Анархизм, Народничество, Панславизм, 
Атеизм, Материализм
RUS
1814-1876
MY: 0/0
MX: 467
QN: 10'><div class=area style='position:absolute; width:29px; height:20px; left:486px; top:535px'></div></a>
<a  href='build-rfmap.php?mp=467&a_id=4602&y=1814' title='Михаил Александрович Бакунин

Анархизм, Народничество, Панславизм, 
Атеизм, Материализм
RUS
1814-1876
MY: 0/0
MX: 467
QN: 10'><div class=area style='position:absolute; width:29px; height:20px; left:515px; top:535px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1657&a_id=1784&y=1817' title='Генри Дэвид Торо

Философская литература
USA
1817-1862
MY: 0/-3
MX: 1657
QN: 51'><div class=area style='position:absolute; width:21px; height:20px; left:1676px; top:518px'></div></a>
<a  href='build-rfmap.php?mp=1657&a_id=1784&y=1817' title='Генри Дэвид Торо

Философская литература
USA
1817-1862
MY: 0/-3
MX: 1657
QN: 51'><div class=area style='position:absolute; width:20px; height:20px; left:1697px; top:518px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=803&a_id=3747&y=1817' title='Константин Сергеевич Аксаков

Славянофильство, 
Мистицизм, Объективный идеализм
RUS
1817-1860
MY: 0/2
MX: 803
QN: 2'><div class=area style='position:absolute; width:30px; height:20px; left:822px; top:526px'></div></a>
<a  href='build-rfmap.php?mp=803&a_id=3747&y=1817' title='Константин Сергеевич Аксаков

Славянофильство, 
Мистицизм, Объективный идеализм
RUS
1817-1860
MY: 0/2
MX: 803
QN: 2'><div class=area style='position:absolute; width:29px; height:20px; left:852px; top:526px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=105&a_id=3527&y=1818' title='Карл Маркс

Марксизм, 
Материализм
DEU
1818-1883
MY: 0/-2
MX: 105
QN: 80'><div class=area style='position:absolute; width:25px; height:20px; left:124px; top:543px'></div></a>
<a  href='build-rfmap.php?mp=105&a_id=3527&y=1818' title='Карл Маркс

Марксизм, 
Материализм
DEU
1818-1883
MY: 0/-2
MX: 105
QN: 80'><div class=area style='position:absolute; width:25px; height:20px; left:149px; top:543px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1657&a_id=1869&y=1819' title='Герман Мелвилл

Философская литература
USA
1819-1891
MY: 0/15
MX: 1657
QN: 3'><div class=area style='position:absolute; width:31px; height:20px; left:1676px; top:587px'></div></a>
<a  href='build-rfmap.php?mp=1657&a_id=1869&y=1819' title='Герман Мелвилл

Философская литература
USA
1819-1891
MY: 0/15
MX: 1657
QN: 3'><div class=area style='position:absolute; width:30px; height:20px; left:1707px; top:587px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1188&a_id=1857&y=1820' title='Герберт Спенсер

Либерализм, Позитивизм, Эволюционизм, 
Органическая школа, Этика
ENG
1820-1903
MY: 0/6
MX: 1188
QN: 12'><div class=area style='position:absolute; width:30px; height:20px; left:1207px; top:583px'></div></a>
<a  href='build-rfmap.php?mp=1188&a_id=1857&y=1820' title='Герберт Спенсер

Либерализм, Позитивизм, Эволюционизм, 
Органическая школа, Этика
ENG
1820-1903
MY: 0/6
MX: 1188
QN: 12'><div class=area style='position:absolute; width:29px; height:20px; left:1237px; top:583px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=105&a_id=6961&y=1820' title='Фридрих Энгельс

Марксизм, 
Материализм
DEU
1820-1895
MY: 0/2
MX: 105
QN: 37'><div class=area style='position:absolute; width:29px; height:20px; left:124px; top:566px'></div></a>
<a  href='build-rfmap.php?mp=105&a_id=6961&y=1820' title='Фридрих Энгельс

Марксизм, 
Материализм
DEU
1820-1895
MY: 0/2
MX: 105
QN: 37'><div class=area style='position:absolute; width:28px; height:20px; left:153px; top:566px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1657&a_id=6766&y=1821' title='Фёдор Михайлович Достоевский

Философская литература, 
Нравственность
RUS
1821-1881
MY: 0/8
MX: 1657
QN: 93'><div class=area style='position:absolute; width:47px; height:20px; left:1676px; top:564px'></div></a>
<a  href='build-rfmap.php?mp=1657&a_id=6766&y=1821' title='Фёдор Михайлович Достоевский

Философская литература, 
Нравственность
RUS
1821-1881
MY: 0/8
MX: 1657
QN: 93'><div class=area style='position:absolute; width:46px; height:20px; left:1723px; top:564px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1188&a_id=3387&y=1828' title='Ипполит Тэн

Позитивизм, 
История, Эстетика
FRA
1828-1893
MY: 0/-4
MX: 1188
QN: 3'><div class=area style='position:absolute; width:16px; height:20px; left:1207px; top:560px'></div></a>
<a  href='build-rfmap.php?mp=1188&a_id=3387&y=1828' title='Ипполит Тэн

Позитивизм, 
История, Эстетика
FRA
1828-1893
MY: 0/-4
MX: 1188
QN: 3'><div class=area style='position:absolute; width:16px; height:20px; left:1223px; top:560px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1657&a_id=3929&y=1828' title='Лев Николаевич Толстой

Философская литература, 
Нравственность
RUS
1828-1910
MY: 0/12
MX: 1657
QN: 171'><div class=area style='position:absolute; width:31px; height:20px; left:1676px; top:610px'></div></a>
<a  href='build-rfmap.php?mp=1657&a_id=3929&y=1828' title='Лев Николаевич Толстой

Философская литература, 
Нравственность
RUS
1828-1910
MY: 0/12
MX: 1657
QN: 171'><div class=area style='position:absolute; width:31px; height:20px; left:1707px; top:610px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=356&a_id=4922&y=1828' title='Николай Гаврилович Чернышевский

Западничество, Утопизм, 
Материализм, Публицистика, Реализм, Социализм, Эстетика
RUS
1828-1889
MY: 0/0
MX: 356
QN: 11'><div class=area style='position:absolute; width:50px; height:20px; left:375px; top:564px'></div></a>
<a  href='build-rfmap.php?mp=356&a_id=4922&y=1828' title='Николай Гаврилович Чернышевский

Западничество, Утопизм, 
Материализм, Публицистика, Реализм, Социализм, Эстетика
RUS
1828-1889
MY: 0/0
MX: 356
QN: 11'><div class=area style='position:absolute; width:49px; height:20px; left:425px; top:564px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1355&a_id=7173&y=1839' title='Чарлз Пирс

Прагматизм, 
Логика
USA
1839-1914
MY: 0/5
MX: 1355
QN: 2'><div class=area style='position:absolute; width:19px; height:20px; left:1374px; top:612px'></div></a>
<a  href='build-rfmap.php?mp=1355&a_id=7173&y=1839' title='Чарлз Пирс

Прагматизм, 
Логика
USA
1839-1914
MY: 0/5
MX: 1355
QN: 2'><div class=area style='position:absolute; width:19px; height:20px; left:1393px; top:612px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=183&a_id=2675&y=1840' title='Дмитрий Иванович Писарев

Нигилизм, 
Демократия, Материализм, Публицистика, Эстетика
RUS
1840-1868
MY: 0/0
MX: 183
QN: 25'><div class=area style='position:absolute; width:30px; height:20px; left:202px; top:553px'></div></a>
<a  href='build-rfmap.php?mp=183&a_id=2675&y=1840' title='Дмитрий Иванович Писарев

Нигилизм, 
Демократия, Материализм, Публицистика, Эстетика
RUS
1840-1868
MY: 0/0
MX: 183
QN: 25'><div class=area style='position:absolute; width:29px; height:20px; left:232px; top:553px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1355&a_id=6641&y=1842' title='Уильям Джеймс

Прагматизм, Функционализм
USA
1842-1910
MY: 0/-5
MX: 1355
QN: 27'><div class=area style='position:absolute; width:29px; height:20px; left:1374px; top:589px'></div></a>
<a  href='build-rfmap.php?mp=1355&a_id=6641&y=1842' title='Уильям Джеймс

Прагматизм, Функционализм
USA
1842-1910
MY: 0/-5
MX: 1355
QN: 27'><div class=area style='position:absolute; width:28px; height:20px; left:1403px; top:589px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1258&a_id=6950&y=1844' title='Фридрих Вильгельм Ницше

Философия жизни, 
Волюнтаризм, Сверхчеловек
DEU
1844-1900
MY: 0/0
MX: 1258
QN: 219'><div class=area style='position:absolute; width:26px; height:20px; left:1277px; top:591px'></div></a>
<a  href='build-rfmap.php?mp=1258&a_id=6950&y=1844' title='Фридрих Вильгельм Ницше

Философия жизни, 
Волюнтаризм, Сверхчеловек
DEU
1844-1900
MY: 0/0
MX: 1258
QN: 219'><div class=area style='position:absolute; width:26px; height:20px; left:1303px; top:591px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=613&a_id=1461&y=1848' title='Вильгельм Виндельбанд

Кантианство
DEU
1848-1915
MY: 0/0
MX: 613
QN: 4'><div class=area style='position:absolute; width:45px; height:20px; left:632px; top:612px'></div></a>
<a  href='build-rfmap.php?mp=613&a_id=1461&y=1848' title='Вильгельм Виндельбанд

Кантианство
DEU
1848-1915
MY: 0/0
MX: 613
QN: 4'><div class=area style='position:absolute; width:44px; height:20px; left:677px; top:612px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=714&a_id=1602&y=1853' title='Владимир Сергеевич Соловьёв

Мистицизм, Христианская философия, 
Богочеловечество, Публицистика
RUS
1853-1900
MY: 0/0
MX: 714
QN: 6'><div class=area style='position:absolute; width:33px; height:20px; left:733px; top:602px'></div></a>
<a  href='build-rfmap.php?mp=714&a_id=1602&y=1853' title='Владимир Сергеевич Соловьёв

Мистицизм, Христианская философия, 
Богочеловечество, Публицистика
RUS
1853-1900
MY: 0/0
MX: 714
QN: 6'><div class=area style='position:absolute; width:33px; height:20px; left:766px; top:602px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=714&a_id=1324&y=1856' title='Василий Васильевич Розанов

Религиозная философия, 
Публицистика
RUS
1856-1919
MY: 0/0
MX: 714
QN: 22'><div class=area style='position:absolute; width:32px; height:20px; left:733px; top:625px'></div></a>
<a  href='build-rfmap.php?mp=714&a_id=1324&y=1856' title='Василий Васильевич Розанов

Религиозная философия, 
Публицистика
RUS
1856-1919
MY: 0/0
MX: 714
QN: 22'><div class=area style='position:absolute; width:32px; height:20px; left:765px; top:625px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=105&a_id=1833&y=1856' title='Георгий Валентинович Плеханов

Марксизм, 
Меньшевизм
RUS
1856-1918
MY: 0/0
MX: 105
QN: 6'><div class=area style='position:absolute; width:33px; height:20px; left:124px; top:623px'></div></a>
<a  href='build-rfmap.php?mp=105&a_id=1833&y=1856' title='Георгий Валентинович Плеханов

Марксизм, 
Меньшевизм
RUS
1856-1918
MY: 0/0
MX: 105
QN: 6'><div class=area style='position:absolute; width:33px; height:20px; left:157px; top:623px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1423&a_id=3160&y=1856' title='Зигмунд Фрейд

Психоанализ
AUT
1856-1939
MY: 0/0
MX: 1423
QN: 105'><div class=area style='position:absolute; width:27px; height:20px; left:1442px; top:646px'></div></a>
<a  href='build-rfmap.php?mp=1423&a_id=3160&y=1856' title='Зигмунд Фрейд

Психоанализ
AUT
1856-1939
MY: 0/0
MX: 1423
QN: 105'><div class=area style='position:absolute; width:26px; height:20px; left:1469px; top:646px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=9&a_id=3752&y=1857' title='Константин Эдуардович Циолковский

Научный космизм, 
Материализм
RUS
1857-1935
MY: 0/-1
MX: 9
QN: 15'><div class=area style='position:absolute; width:43px; height:20px; left:28px; top:640px'></div></a>
<a  href='build-rfmap.php?mp=9&a_id=3752&y=1857' title='Константин Эдуардович Циолковский

Научный космизм, 
Материализм
RUS
1857-1935
MY: 0/-1
MX: 9
QN: 15'><div class=area style='position:absolute; width:43px; height:20px; left:71px; top:640px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1258&a_id=782&y=1859' title='Анри Бергсон

Интуитивизм, Философия жизни, 
Волюнтаризм
FRA
1859-1941
MY: 0/-1
MX: 1258
QN: 7'><div class=area style='position:absolute; width:29px; height:20px; left:1277px; top:648px'></div></a>
<a  href='build-rfmap.php?mp=1258&a_id=782&y=1859' title='Анри Бергсон

Интуитивизм, Философия жизни, 
Волюнтаризм
FRA
1859-1941
MY: 0/-1
MX: 1258
QN: 7'><div class=area style='position:absolute; width:28px; height:20px; left:1306px; top:648px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1355&a_id=2405&y=1859' title='Джон Дьюи

Прагматизм
USA
1859-1952
MY: 0/0
MX: 1355
QN: 4'><div class=area style='position:absolute; width:21px; height:20px; left:1374px; top:663px'></div></a>
<a  href='build-rfmap.php?mp=1355&a_id=2405&y=1859' title='Джон Дьюи

Прагматизм
USA
1859-1952
MY: 0/0
MX: 1355
QN: 4'><div class=area style='position:absolute; width:21px; height:20px; left:1395px; top:663px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1485&a_id=7411&y=1859' title='Эдмунд Гуссерль

Феноменология, 
Субъективный идеализм
DEU
1859-1938
MY: 0/0
MX: 1485
QN: 4'><div class=area style='position:absolute; width:32px; height:20px; left:1504px; top:648px'></div></a>
<a  href='build-rfmap.php?mp=1485&a_id=7411&y=1859' title='Эдмунд Гуссерль

Феноменология, 
Субъективный идеализм
DEU
1859-1938
MY: 0/0
MX: 1485
QN: 4'><div class=area style='position:absolute; width:32px; height:20px; left:1536px; top:648px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=9&a_id=1555&y=1863' title='Владимир Иванович Вернадский

Научный космизм, 
Материализм
RUS
1863-1945
MY: 0/2
MX: 9
QN: 26'><div class=area style='position:absolute; width:40px; height:20px; left:28px; top:663px'></div></a>
<a  href='build-rfmap.php?mp=9&a_id=1555&y=1863' title='Владимир Иванович Вернадский

Научный космизм, 
Материализм
RUS
1863-1945
MY: 0/2
MX: 9
QN: 26'><div class=area style='position:absolute; width:40px; height:20px; left:68px; top:663px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=536&a_id=2550&y=1863' title='Джордж Сантаяна

Гуманизм, 
Элитаризм, Эстетика, Этика
USA
1863-1952
MY: 0/5
MX: 536
QN: 24'><div class=area style='position:absolute; width:32px; height:20px; left:555px; top:677px'></div></a>
<a  href='build-rfmap.php?mp=536&a_id=2550&y=1863' title='Джордж Сантаяна

Гуманизм, 
Элитаризм, Эстетика, Этика
USA
1863-1952
MY: 0/5
MX: 536
QN: 24'><div class=area style='position:absolute; width:32px; height:20px; left:587px; top:677px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1557&a_id=5962&y=1863' title='Свами Вивекананда

Индуизм, 
Этика
IND
1863-1902
MY: 0/0
MX: 1557
QN: 5'><div class=area style='position:absolute; width:44px; height:20px; left:1576px; top:614px'></div></a>
<a  href='build-rfmap.php?mp=1557&a_id=5962&y=1863' title='Свами Вивекананда

Индуизм, 
Этика
IND
1863-1902
MY: 0/0
MX: 1557
QN: 5'><div class=area style='position:absolute; width:43px; height:20px; left:1620px; top:614px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=952&a_id=4541&y=1864' title='Мигель де Унамуно

Персонализм, Философская литература, Экзистенциализм, 
Социализм
SPA
1864-1936
MY: 0/-6
MX: 952
QN: 14'><div class=area style='position:absolute; width:31px; height:20px; left:971px; top:637px'></div></a>
<a  href='build-rfmap.php?mp=952&a_id=4541&y=1864' title='Мигель де Унамуно

Персонализм, Философская литература, Экзистенциализм, 
Социализм
SPA
1864-1936
MY: 0/-6
MX: 952
QN: 14'><div class=area style='position:absolute; width:30px; height:20px; left:1002px; top:637px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1657&a_id=2697&y=1865' title='Дмитрий Сергеевич Мережковский

Философская литература
RUS
1865-1941
MY: 0/-4
MX: 1657
QN: 20'><div class=area style='position:absolute; width:48px; height:20px; left:1676px; top:648px'></div></a>
<a  href='build-rfmap.php?mp=1657&a_id=2697&y=1865' title='Дмитрий Сергеевич Мережковский

Философская литература
RUS
1865-1941
MY: 0/-4
MX: 1657
QN: 20'><div class=area style='position:absolute; width:48px; height:20px; left:1724px; top:648px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=952&a_id=3925&y=1866' title='Лев Исаакович Шестов

Персонализм, Экзистенциализм, 
Антиинтеллектуализм, Религиозный экзистенциализм
RUS
1866-1938
MY: 0/3
MX: 952
QN: 6'><div class=area style='position:absolute; width:26px; height:20px; left:971px; top:661px'></div></a>
<a  href='build-rfmap.php?mp=952&a_id=3925&y=1866' title='Лев Исаакович Шестов

Персонализм, Экзистенциализм, 
Антиинтеллектуализм, Религиозный экзистенциализм
RUS
1866-1938
MY: 0/3
MX: 952
QN: 6'><div class=area style='position:absolute; width:26px; height:20px; left:997px; top:661px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1657&a_id=5839&y=1866' title='Ромен Роллан

Философская литература
FRA
1866-1944
MY: 0/5
MX: 1657
QN: 39'><div class=area style='position:absolute; width:29px; height:20px; left:1676px; top:671px'></div></a>
<a  href='build-rfmap.php?mp=1657&a_id=5839&y=1866' title='Ромен Роллан

Философская литература
FRA
1866-1944
MY: 0/5
MX: 1657
QN: 39'><div class=area style='position:absolute; width:28px; height:20px; left:1705px; top:671px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1557&a_id=4506&y=1869' title='Махатма Ганди

Антимодернизм, 
Индуизм, Пацифизм, Социализм, Этика
IND
1869-1948
MY: 0/-12
MX: 1557
QN: 81'><div class=area style='position:absolute; width:24px; height:20px; left:1576px; top:644px'></div></a>
<a  href='build-rfmap.php?mp=1557&a_id=4506&y=1869' title='Махатма Ганди

Антимодернизм, 
Индуизм, Пацифизм, Социализм, Этика
IND
1869-1948
MY: 0/-12
MX: 1557
QN: 81'><div class=area style='position:absolute; width:23px; height:20px; left:1600px; top:644px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=105&a_id=1562&y=1870' title='Владимир Ильич Ленин

Марксизм, 
Антиинтеллектуализм
RUS
1870-1924
MY: 0/1
MX: 105
QN: 51'><div class=area style='position:absolute; width:25px; height:20px; left:124px; top:646px'></div></a>
<a  href='build-rfmap.php?mp=105&a_id=1562&y=1870' title='Владимир Ильич Ленин

Марксизм, 
Антиинтеллектуализм
RUS
1870-1924
MY: 0/1
MX: 105
QN: 51'><div class=area style='position:absolute; width:25px; height:20px; left:149px; top:646px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=884&a_id=4967&y=1870' title='Николай Онуфриевич Лосский

Интуитивизм, Религиозный персонализм, 
Гносеология, Натурфилософия
RUS
1870-1965
MY: 0/0
MX: 884
QN: 2'><div class=area style='position:absolute; width:30px; height:20px; left:903px; top:688px'></div></a>
<a  href='build-rfmap.php?mp=884&a_id=4967&y=1870' title='Николай Онуфриевич Лосский

Интуитивизм, Религиозный персонализм, 
Гносеология, Натурфилософия
RUS
1870-1965
MY: 0/0
MX: 884
QN: 2'><div class=area style='position:absolute; width:29px; height:20px; left:933px; top:688px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=183&a_id=1059&y=1872' title='Бертран Рассел

Аналитическая философия, Атеизм, Либерализм, 
История, Логика, Материализм, Пацифизм, Позитивизм, Реализм
ENG
1872-1970
MY: 0/4
MX: 183
QN: 81'><div class=area style='position:absolute; width:28px; height:20px; left:202px; top:703px'></div></a>
<a  href='build-rfmap.php?mp=183&a_id=1059&y=1872' title='Бертран Рассел

Аналитическая философия, Атеизм, Либерализм, 
История, Логика, Материализм, Пацифизм, Позитивизм, Реализм
ENG
1872-1970
MY: 0/4
MX: 183
QN: 81'><div class=area style='position:absolute; width:27px; height:20px; left:230px; top:703px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1557&a_id=7312&y=1872' title='Шри Ауробиндо

Индуизм, Интегральная йога
IND
1872-1950
MY: 0/-3
MX: 1557
QN: 19'><div class=area style='position:absolute; width:38px; height:20px; left:1576px; top:667px'></div></a>
<a  href='build-rfmap.php?mp=1557&a_id=7312&y=1872' title='Шри Ауробиндо

Индуизм, Интегральная йога
IND
1872-1950
MY: 0/-3
MX: 1557
QN: 19'><div class=area style='position:absolute; width:38px; height:20px; left:1614px; top:667px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=952&a_id=4900&y=1874' title='Николай Александрович Бердяев

Персонализм, Религиозный персонализм, Экзистенциализм, 
Диалогический персонализм, Религиозный экзистенциализм, Христианство
RUS
1874-1948
MY: 0/5
MX: 952
QN: 60'><div class=area style='position:absolute; width:30px; height:20px; left:971px; top:684px'></div></a>
<a  href='build-rfmap.php?mp=952&a_id=4900&y=1874' title='Николай Александрович Бердяев

Персонализм, Религиозный персонализм, Экзистенциализм, 
Диалогический персонализм, Религиозный экзистенциализм, Христианство
RUS
1874-1948
MY: 0/5
MX: 952
QN: 60'><div class=area style='position:absolute; width:30px; height:20px; left:1001px; top:684px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=804&a_id=507&y=1875' title='Альберт Швейцер

Томизм, 
Гуманизм, Христианство, Этика
DEU
1875-1965
MY: 0/-1
MX: 804
QN: 24'><div class=area style='position:absolute; width:34px; height:20px; left:823px; top:690px'></div></a>
<a  href='build-rfmap.php?mp=804&a_id=507&y=1875' title='Альберт Швейцер

Томизм, 
Гуманизм, Христианство, Этика
DEU
1875-1965
MY: 0/-1
MX: 804
QN: 24'><div class=area style='position:absolute; width:34px; height:20px; left:857px; top:690px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1423&a_id=3519&y=1875' title='Карл Густав Юнг

Неофрейдизм, Психоанализ
CHE
1875-1961
MY: 0/0
MX: 1423
QN: 60'><div class=area style='position:absolute; width:18px; height:20px; left:1442px; top:688px'></div></a>
<a  href='build-rfmap.php?mp=1423&a_id=3519&y=1875' title='Карл Густав Юнг

Неофрейдизм, Психоанализ
CHE
1875-1961
MY: 0/0
MX: 1423
QN: 60'><div class=area style='position:absolute; width:17px; height:20px; left:1460px; top:688px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=714&a_id=6871&y=1877' title='Франк Семен  Людвигович

Неоплатонизм, 
Теология
RUS
1877-1950
MY: 0/4
MX: 714
QN: 6'><div class=area style='position:absolute; width:24px; height:20px; left:733px; top:688px'></div></a>
<a  href='build-rfmap.php?mp=714&a_id=6871&y=1877' title='Франк Семен  Людвигович

Неоплатонизм, 
Теология
RUS
1877-1950
MY: 0/4
MX: 714
QN: 6'><div class=area style='position:absolute; width:23px; height:20px; left:757px; top:688px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1557&a_id=7315&y=1879' title='Шри Рамана Махарши

Индуизм
IND
1879-1950
MY: 0/4
MX: 1557
QN: 2'><div class=area style='position:absolute; width:33px; height:20px; left:1576px; top:690px'></div></a>
<a  href='build-rfmap.php?mp=1557&a_id=7315&y=1879' title='Шри Рамана Махарши

Индуизм
IND
1879-1950
MY: 0/4
MX: 1557
QN: 2'><div class=area style='position:absolute; width:32px; height:20px; left:1609px; top:690px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1258&a_id=5184&y=1880' title='Освальд Шпенглер

Национализм, Философия жизни, 
Антимодернизм, Консерватизм, Публицистика
DEU
1880-1936
MY: 0/2
MX: 1258
QN: 26'><div class=area style='position:absolute; width:33px; height:20px; left:1277px; top:671px'></div></a>
<a  href='build-rfmap.php?mp=1258&a_id=5184&y=1880' title='Освальд Шпенглер

Национализм, Философия жизни, 
Антимодернизм, Консерватизм, Публицистика
DEU
1880-1936
MY: 0/2
MX: 1258
QN: 26'><div class=area style='position:absolute; width:33px; height:20px; left:1310px; top:671px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=804&a_id=5512&y=1881' title='Пьер Тейяр де Шарден

Антропологизм, Томизм, 
Иезуит, Католицизм, Космизм, Христианство
FRA
1881-1955
MY: 0/-10
MX: 804
QN: 12'><div class=area style='position:absolute; width:28px; height:20px; left:823px; top:667px'></div></a>
<a  href='build-rfmap.php?mp=804&a_id=5512&y=1881' title='Пьер Тейяр де Шарден

Антропологизм, Томизм, 
Иезуит, Католицизм, Космизм, Христианство
FRA
1881-1955
MY: 0/-10
MX: 804
QN: 12'><div class=area style='position:absolute; width:27px; height:20px; left:851px; top:667px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=804&a_id=2979&y=1882' title='Жак Маритен

Томизм, 
Христианство, Эстетика, Этика
FRA
1882-1973
MY: 0/2
MX: 804
QN: 6'><div class=area style='position:absolute; width:30px; height:20px; left:823px; top:713px'></div></a>
<a  href='build-rfmap.php?mp=804&a_id=2979&y=1882' title='Жак Маритен

Томизм, 
Христианство, Эстетика, Этика
FRA
1882-1973
MY: 0/2
MX: 804
QN: 6'><div class=area style='position:absolute; width:29px; height:20px; left:853px; top:713px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=714&a_id=5245&y=1882' title='Павел Флоренский

Православие, Религиозный космизм, 
Антиинтеллектуализм, Математический идеализм
RUS
1882-1937
MY: 0/-3
MX: 714
QN: 2'><div class=area style='position:absolute; width:41px; height:20px; left:733px; top:665px'></div></a>
<a  href='build-rfmap.php?mp=714&a_id=5245&y=1882' title='Павел Флоренский

Православие, Религиозный космизм, 
Антиинтеллектуализм, Математический идеализм
RUS
1882-1937
MY: 0/-3
MX: 714
QN: 2'><div class=area style='position:absolute; width:40px; height:20px; left:774px; top:665px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=536&a_id=2128&y=1883' title='Джебран Халиль Джебран

Гуманизм
LBY
1883-1931
MY: 0/-5
MX: 536
QN: 58'><div class=area style='position:absolute; width:34px; height:20px; left:555px; top:654px'></div></a>
<a  href='build-rfmap.php?mp=536&a_id=2128&y=1883' title='Джебран Халиль Джебран

Гуманизм
LBY
1883-1931
MY: 0/-5
MX: 536
QN: 58'><div class=area style='position:absolute; width:34px; height:20px; left:589px; top:654px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=952&a_id=3538&y=1883' title='Карл Теодор Ясперс

Экзистенциализм, 
Кантианство, Религиозный экзистенциализм, Эстетика, Этика
DEU
1883-1969
MY: 0/1
MX: 952
QN: 9'><div class=area style='position:absolute; width:27px; height:20px; left:971px; top:707px'></div></a>
<a  href='build-rfmap.php?mp=952&a_id=3538&y=1883' title='Карл Теодор Ясперс

Экзистенциализм, 
Кантианство, Религиозный экзистенциализм, Эстетика, Этика
DEU
1883-1969
MY: 0/1
MX: 952
QN: 9'><div class=area style='position:absolute; width:26px; height:20px; left:998px; top:707px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1258&a_id=7113&y=1883' title='Хосе Ортега-и-Гассет

Философия жизни
SPA
1883-1955
MY: 0/2
MX: 1258
QN: 10'><div class=area style='position:absolute; width:37px; height:20px; left:1277px; top:694px'></div></a>
<a  href='build-rfmap.php?mp=1258&a_id=7113&y=1883' title='Хосе Ортега-и-Гассет

Философия жизни
SPA
1883-1955
MY: 0/2
MX: 1258
QN: 10'><div class=area style='position:absolute; width:37px; height:20px; left:1314px; top:694px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=804&a_id=7671&y=1884' title='Этьен Жильсон

Томизм, 
Христианство, Экзистенциализм
FRA
1884-1978
MY: 0/10
MX: 804
QN: 1'><div class=area style='position:absolute; width:31px; height:20px; left:823px; top:736px'></div></a>
<a  href='build-rfmap.php?mp=804&a_id=7671&y=1884' title='Этьен Жильсон

Томизм, 
Христианство, Экзистенциализм
FRA
1884-1978
MY: 0/10
MX: 804
QN: 1'><div class=area style='position:absolute; width:31px; height:20px; left:854px; top:736px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=105&a_id=7653&y=1885' title='Эрнст Симон Блох

Марксизм, 
Гуманизм, Утопизм
DEU
1885-1977
MY: 0/-3
MX: 105
QN: 5'><div class=area style='position:absolute; width:19px; height:20px; left:124px; top:709px'></div></a>
<a  href='build-rfmap.php?mp=105&a_id=7653&y=1885' title='Эрнст Симон Блох

Марксизм, 
Гуманизм, Утопизм
DEU
1885-1977
MY: 0/-3
MX: 105
QN: 5'><div class=area style='position:absolute; width:19px; height:20px; left:143px; top:709px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=277&a_id=6352&y=1886' title='Тадеуш Котарбиньский

Неопозитивизм, 
Логика, Материализм
POL
1886-1981
MY: 0/-2
MX: 277
QN: 7'><div class=area style='position:absolute; width:49px; height:20px; left:296px; top:717px'></div></a>
<a  href='build-rfmap.php?mp=277&a_id=6352&y=1886' title='Тадеуш Котарбиньский

Неопозитивизм, 
Логика, Материализм
POL
1886-1981
MY: 0/-2
MX: 277
QN: 7'><div class=area style='position:absolute; width:48px; height:20px; left:345px; top:717px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=952&a_id=1670&y=1889' title='Габриэль Оноре Марсель

Экзистенциализм, 
Религиозный экзистенциализм, Этика
FRA
1889-1973
MY: 0/7
MX: 952
QN: 6'><div class=area style='position:absolute; width:33px; height:20px; left:971px; top:730px'></div></a>
<a  href='build-rfmap.php?mp=952&a_id=1670&y=1889' title='Габриэль Оноре Марсель

Экзистенциализм, 
Религиозный экзистенциализм, Этика
FRA
1889-1973
MY: 0/7
MX: 952
QN: 6'><div class=area style='position:absolute; width:33px; height:20px; left:1004px; top:730px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=183&a_id=4176&y=1889' title='Людвиг Витгенштейн

Аналитическая философия
AUT
1889-1951
MY: 0/-6
MX: 183
QN: 14'><div class=area style='position:absolute; width:43px; height:20px; left:202px; top:679px'></div></a>
<a  href='build-rfmap.php?mp=183&a_id=4176&y=1889' title='Людвиг Витгенштейн

Аналитическая философия
AUT
1889-1951
MY: 0/-6
MX: 183
QN: 14'><div class=area style='position:absolute; width:42px; height:20px; left:245px; top:679px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1126&a_id=4477&y=1889' title='Мартин Хайдеггер

Экзистенциализм, 
Герменевтика, Феноменология, Этика
DEU
1889-1976
MY: 0/-9
MX: 1126
QN: 7'><div class=area style='position:absolute; width:35px; height:20px; left:1145px; top:700px'></div></a>
<a  href='build-rfmap.php?mp=1126&a_id=4477&y=1889' title='Мартин Хайдеггер

Экзистенциализм, 
Герменевтика, Феноменология, Этика
DEU
1889-1976
MY: 0/-9
MX: 1126
QN: 7'><div class=area style='position:absolute; width:34px; height:20px; left:1180px; top:700px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1557&a_id=2276&y=1895' title='Джидду Кришнамурти

Индуизм
IND
1895-1986
MY: 0/0
MX: 1557
QN: 13'><div class=area style='position:absolute; width:45px; height:20px; left:1576px; top:736px'></div></a>
<a  href='build-rfmap.php?mp=1557&a_id=2276&y=1895' title='Джидду Кришнамурти

Индуизм
IND
1895-1986
MY: 0/0
MX: 1557
QN: 13'><div class=area style='position:absolute; width:45px; height:20px; left:1621px; top:736px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1557&a_id=7001&y=1895' title='Фэн Юлань

Эклектизм
CHN
1895-1990
MY: 0/9
MX: 1557
QN: 4'><div class=area style='position:absolute; width:32px; height:20px; left:1576px; top:759px'></div></a>
<a  href='build-rfmap.php?mp=1557&a_id=7001&y=1895' title='Фэн Юлань

Эклектизм
CHN
1895-1990
MY: 0/9
MX: 1557
QN: 4'><div class=area style='position:absolute; width:32px; height:20px; left:1608px; top:759px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1205&a_id=3101&y=1897' title='Жорж Батай

Иррационализм, 
Коммунизм, Материализм, Эстетика
FRA
1897-1962
MY: 0/0
MX: 1205
QN: 5'><div class=area style='position:absolute; width:22px; height:20px; left:1224px; top:713px'></div></a>
<a  href='build-rfmap.php?mp=1205&a_id=3101&y=1897' title='Жорж Батай

Иррационализм, 
Коммунизм, Материализм, Эстетика
FRA
1897-1962
MY: 0/0
MX: 1205
QN: 5'><div class=area style='position:absolute; width:21px; height:20px; left:1246px; top:713px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1557&a_id=7313&y=1897' title='Шри Нисаргадатта Махарадж

Недвойственность, 
Метафизика
IND
1897-1981
MY: 0/-9
MX: 1557
QN: 19'><div class=area style='position:absolute; width:36px; height:20px; left:1576px; top:713px'></div></a>
<a  href='build-rfmap.php?mp=1557&a_id=7313&y=1897' title='Шри Нисаргадатта Махарадж

Недвойственность, 
Метафизика
IND
1897-1981
MY: 0/-9
MX: 1557
QN: 19'><div class=area style='position:absolute; width:36px; height:20px; left:1612px; top:713px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1657&a_id=7105&y=1899' title='Хорхе Луис Борхес

Философская литература
ARG
1899-1986
MY: 0/-9
MX: 1657
QN: 20'><div class=area style='position:absolute; width:29px; height:20px; left:1676px; top:721px'></div></a>
<a  href='build-rfmap.php?mp=1657&a_id=7105&y=1899' title='Хорхе Луис Борхес

Философская литература
ARG
1899-1986
MY: 0/-9
MX: 1657
QN: 20'><div class=area style='position:absolute; width:28px; height:20px; left:1705px; top:721px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1423&a_id=7637&y=1900' title='Эрих Фромм

Марксизм, Неофрейдизм, Психоанализ, 
Пацифизм, Политика, Фрейдомарксизм, Этика
DEU
1900-1980
MY: 0/0
MX: 1423
QN: 13'><div class=area style='position:absolute; width:26px; height:20px; left:1442px; top:734px'></div></a>
<a  href='build-rfmap.php?mp=1423&a_id=7637&y=1900' title='Эрих Фромм

Марксизм, Неофрейдизм, Психоанализ, 
Пацифизм, Политика, Фрейдомарксизм, Этика
DEU
1900-1980
MY: 0/0
MX: 1423
QN: 13'><div class=area style='position:absolute; width:25px; height:20px; left:1468px; top:734px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1028&a_id=4892&y=1901' title='Никола Аббаньяно

Экзистенциализм
ITA
1901-1990
MY: 0/-2
MX: 1028
QN: 1'><div class=area style='position:absolute; width:38px; height:20px; left:1047px; top:742px'></div></a>
<a  href='build-rfmap.php?mp=1028&a_id=4892&y=1901' title='Никола Аббаньяно

Экзистенциализм
ITA
1901-1990
MY: 0/-2
MX: 1028
QN: 1'><div class=area style='position:absolute; width:37px; height:20px; left:1085px; top:742px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=277&a_id=3531&y=1902' title='Карл Поппер

Критический рационализм, Постпозитивизм
AUT
1902-1994
MY: 0/-5
MX: 277
QN: 12'><div class=area style='position:absolute; width:26px; height:20px; left:296px; top:740px'></div></a>
<a  href='build-rfmap.php?mp=277&a_id=3531&y=1902' title='Карл Поппер

Критический рационализм, Постпозитивизм
AUT
1902-1994
MY: 0/-5
MX: 277
QN: 12'><div class=area style='position:absolute; width:26px; height:20px; left:322px; top:740px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=105&a_id=6412&y=1903' title='Теодор Адорно

Марксизм, 
Психоанализ
DEU
1903-1969
MY: 0/3
MX: 105
QN: 15'><div class=area style='position:absolute; width:28px; height:20px; left:124px; top:732px'></div></a>
<a  href='build-rfmap.php?mp=105&a_id=6412&y=1903' title='Теодор Адорно

Марксизм, 
Психоанализ
DEU
1903-1969
MY: 0/3
MX: 105
QN: 15'><div class=area style='position:absolute; width:27px; height:20px; left:152px; top:732px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1126&a_id=3060&y=1905' title='Жан-Поль Сартр

Атеизм, Неофрейдизм, Экзистенциализм, 
Марксизм
FRA
1905-1980
MY: 0/3
MX: 1126
QN: 25'><div class=area style='position:absolute; width:24px; height:20px; left:1145px; top:747px'></div></a>
<a  href='build-rfmap.php?mp=1126&a_id=3060&y=1905' title='Жан-Поль Сартр

Атеизм, Неофрейдизм, Экзистенциализм, 
Марксизм
FRA
1905-1980
MY: 0/3
MX: 1126
QN: 25'><div class=area style='position:absolute; width:23px; height:20px; left:1169px; top:747px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=884&a_id=7555&y=1905' title='Эммануэль Мунье

Религиозный персонализм, 
Социализм, Христианство
FRA
1905-1950
MY: 0/1
MX: 884
QN: 11'><div class=area style='position:absolute; width:24px; height:20px; left:903px; top:711px'></div></a>
<a  href='build-rfmap.php?mp=884&a_id=7555&y=1905' title='Эммануэль Мунье

Религиозный персонализм, 
Социализм, Христианство
FRA
1905-1950
MY: 0/1
MX: 884
QN: 11'><div class=area style='position:absolute; width:23px; height:20px; left:927px; top:711px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=613&a_id=7023&y=1906' title='Ханна Арендт

Тоталитаризм, Феноменология
DEU
1906-1975
MY: 0/0
MX: 613
QN: 8'><div class=area style='position:absolute; width:27px; height:20px; left:632px; top:736px'></div></a>
<a  href='build-rfmap.php?mp=613&a_id=7023&y=1906' title='Ханна Арендт

Тоталитаризм, Феноменология
DEU
1906-1975
MY: 0/0
MX: 613
QN: 8'><div class=area style='position:absolute; width:27px; height:20px; left:659px; top:736px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=707&a_id=3682&y=1908' title='Клод Леви-Стросс

Структурализм, 
Антропологизм, Социализм
FRA
1908-2009
MY: 0/0
MX: 707
QN: 6'><div class=area style='position:absolute; width:43px; height:20px; left:726px; top:774px'></div></a>
<a  href='build-rfmap.php?mp=707&a_id=3682&y=1908' title='Клод Леви-Стросс

Структурализм, 
Антропологизм, Социализм
FRA
1908-2009
MY: 0/0
MX: 707
QN: 6'><div class=area style='position:absolute; width:42px; height:20px; left:769px; top:774px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1028&a_id=4719&y=1908' title='Морис Мерло-Понти

Феноменология, Экзистенциализм, 
Коммунизм
FRA
1908-1961
MY: 0/-2
MX: 1028
QN: 2'><div class=area style='position:absolute; width:43px; height:20px; left:1047px; top:719px'></div></a>
<a  href='build-rfmap.php?mp=1028&a_id=4719&y=1908' title='Морис Мерло-Понти

Феноменология, Экзистенциализм, 
Коммунизм
FRA
1908-1961
MY: 0/-2
MX: 1028
QN: 2'><div class=area style='position:absolute; width:43px; height:20px; left:1090px; top:719px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1126&a_id=6145&y=1908' title='Симона де Бовуар

Экзистенциализм, 
Феминизм
FRA
1908-1986
MY: 0/10
MX: 1126
QN: 26'><div class=area style='position:absolute; width:28px; height:20px; left:1145px; top:770px'></div></a>
<a  href='build-rfmap.php?mp=1126&a_id=6145&y=1908' title='Симона де Бовуар

Экзистенциализм, 
Феминизм
FRA
1908-1986
MY: 0/10
MX: 1126
QN: 26'><div class=area style='position:absolute; width:28px; height:20px; left:1173px; top:770px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=183&a_id=6615&y=1908' title='Уиллард Ван Орман Куайн

Аналитическая философия, Логика, Математика, 
Неопозитивизм
USA
1908-2000
MY: 0/-7
MX: 183
QN: 1'><div class=area style='position:absolute; width:22px; height:20px; left:202px; top:749px'></div></a>
<a  href='build-rfmap.php?mp=183&a_id=6615&y=1908' title='Уиллард Ван Орман Куайн

Аналитическая философия, Логика, Математика, 
Неопозитивизм
USA
1908-2000
MY: 0/-7
MX: 183
QN: 1'><div class=area style='position:absolute; width:22px; height:20px; left:224px; top:749px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=714&a_id=6144&y=1909' title='Симона Вейль

Неоплатонизм, 
Анархизм, Марксизм, Мистицизм, Социализм, Хенология, Христианство
FRA
1909-1943
MY: 0/3
MX: 714
QN: 11'><div class=area style='position:absolute; width:23px; height:20px; left:733px; top:711px'></div></a>
<a  href='build-rfmap.php?mp=714&a_id=6144&y=1909' title='Симона Вейль

Неоплатонизм, 
Анархизм, Марксизм, Мистицизм, Социализм, Хенология, Христианство
FRA
1909-1943
MY: 0/3
MX: 714
QN: 11'><div class=area style='position:absolute; width:22px; height:20px; left:756px; top:711px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1657&a_id=6215&y=1909' title='Станислав Ежи Лец

Философская литература
POL
1909-1966
MY: 0/-15
MX: 1657
QN: 830'><div class=area style='position:absolute; width:32px; height:20px; left:1676px; top:698px'></div></a>
<a  href='build-rfmap.php?mp=1657&a_id=6215&y=1909' title='Станислав Ежи Лец

Философская литература
POL
1909-1966
MY: 0/-15
MX: 1657
QN: 830'><div class=area style='position:absolute; width:32px; height:20px; left:1708px; top:698px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=183&a_id=532&y=1910' title='Альфред Айер

Аналитическая философия, Неопозитивизм, 
Гуманизм, Логический эмпиризм, Эпистемология, Этика
ENG
1910-1989
MY: 0/-14
MX: 183
QN: 1'><div class=area style='position:absolute; width:20px; height:20px; left:202px; top:726px'></div></a>
<a  href='build-rfmap.php?mp=183&a_id=532&y=1910' title='Альфред Айер

Аналитическая философия, Неопозитивизм, 
Гуманизм, Логический эмпиризм, Эпистемология, Этика
ENG
1910-1989
MY: 0/-14
MX: 183
QN: 1'><div class=area style='position:absolute; width:20px; height:20px; left:222px; top:726px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=449&a_id=4487&y=1911' title='Маршалл Маклюэн

Постмодернизм, 
Футурология
CAN
1911-1980
MY: 0/-9
MX: 449
QN: 5'><div class=area style='position:absolute; width:32px; height:20px; left:468px; top:728px'></div></a>
<a  href='build-rfmap.php?mp=449&a_id=4487&y=1911' title='Маршалл Маклюэн

Постмодернизм, 
Футурология
CAN
1911-1980
MY: 0/-9
MX: 449
QN: 5'><div class=area style='position:absolute; width:31px; height:20px; left:500px; top:728px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1028&a_id=7539&y=1911' title='Эмиль Мишель Чоран (Сьоран)

Антиинтеллектуализм, Экзистенциализм, 
Абсурдизм, Нигилизм
ROU
1911-1995
MY: 0/2
MX: 1028
QN: 56'><div class=area style='position:absolute; width:25px; height:20px; left:1047px; top:766px'></div></a>
<a  href='build-rfmap.php?mp=1028&a_id=7539&y=1911' title='Эмиль Мишель Чоран (Сьоран)

Антиинтеллектуализм, Экзистенциализм, 
Абсурдизм, Нигилизм
ROU
1911-1995
MY: 0/2
MX: 1028
QN: 56'><div class=area style='position:absolute; width:24px; height:20px; left:1072px; top:766px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1126&a_id=494&y=1913' title='Альбер Камю

Экзистенциализм, 
Абсурдизм, Анархизм, Пацифизм, Публицистика, Этика
FRA
1913-1960
MY: 0/-2
MX: 1126
QN: 83'><div class=area style='position:absolute; width:22px; height:20px; left:1145px; top:724px'></div></a>
<a  href='build-rfmap.php?mp=1126&a_id=494&y=1913' title='Альбер Камю

Экзистенциализм, 
Абсурдизм, Анархизм, Пацифизм, Публицистика, Этика
FRA
1913-1960
MY: 0/-2
MX: 1126
QN: 83'><div class=area style='position:absolute; width:22px; height:20px; left:1167px; top:724px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=385&a_id=5452&y=1913' title='Поль Рикер

Герменевтика, Феноменология, 
Неофрейдизм
FRA
1913-2005
MY: 0/0
MX: 385
QN: 8'><div class=area style='position:absolute; width:22px; height:20px; left:404px; top:774px'></div></a>
<a  href='build-rfmap.php?mp=385&a_id=5452&y=1913' title='Поль Рикер

Герменевтика, Феноменология, 
Неофрейдизм
FRA
1913-2005
MY: 0/0
MX: 385
QN: 8'><div class=area style='position:absolute; width:22px; height:20px; left:426px; top:774px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1557&a_id=4505&y=1918' title='Махариши Махеш Йоги

Трансцендентальная медитация
IND
1918-2008
MY: 0/11
MX: 1557
QN: 2'><div class=area style='position:absolute; width:36px; height:20px; left:1576px; top:805px'></div></a>
<a  href='build-rfmap.php?mp=1557&a_id=4505&y=1918' title='Махариши Махеш Йоги

Трансцендентальная медитация
IND
1918-2008
MY: 0/11
MX: 1557
QN: 2'><div class=area style='position:absolute; width:36px; height:20px; left:1612px; top:805px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=277&a_id=3339&y=1922' title='Имре Лакатос

Критический рационализм, Постпозитивизм, 
Коммунизм
ENG
1922-1974
MY: 0/6
MX: 277
QN: 1'><div class=area style='position:absolute; width:29px; height:20px; left:296px; top:763px'></div></a>
<a  href='build-rfmap.php?mp=277&a_id=3339&y=1922' title='Имре Лакатос

Критический рационализм, Постпозитивизм, 
Коммунизм
ENG
1922-1974
MY: 0/6
MX: 277
QN: 1'><div class=area style='position:absolute; width:28px; height:20px; left:325px; top:763px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=277&a_id=5424&y=1924' title='Пол Фейерабенд

Критический рационализм, Постпозитивизм, Эпистемологический анархизм, 
Анархизм
USA
1924-1994
MY: 0/6
MX: 277
QN: 1'><div class=area style='position:absolute; width:42px; height:20px; left:296px; top:787px'></div></a>
<a  href='build-rfmap.php?mp=277&a_id=5424&y=1924' title='Пол Фейерабенд

Критический рационализм, Постпозитивизм, Эпистемологический анархизм, 
Анархизм
USA
1924-1994
MY: 0/6
MX: 277
QN: 1'><div class=area style='position:absolute; width:41px; height:20px; left:338px; top:787px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=449&a_id=3080&y=1925' title='Жиль Делёз

Постмодернизм, Постструктурализм
FRA
1925-1995
MY: 0/-12
MX: 449
QN: 5'><div class=area style='position:absolute; width:23px; height:20px; left:468px; top:751px'></div></a>
<a  href='build-rfmap.php?mp=449&a_id=3080&y=1925' title='Жиль Делёз

Постмодернизм, Постструктурализм
FRA
1925-1995
MY: 0/-12
MX: 449
QN: 5'><div class=area style='position:absolute; width:22px; height:20px; left:491px; top:751px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1657&a_id=3553&y=1925' title='Карлос Кастанеда

Философская литература
USA
1925-1998
MY: 0/-6
MX: 1657
QN: 11'><div class=area style='position:absolute; width:39px; height:20px; left:1676px; top:768px'></div></a>
<a  href='build-rfmap.php?mp=1657&a_id=3553&y=1925' title='Карлос Кастанеда

Философская литература
USA
1925-1998
MY: 0/-6
MX: 1657
QN: 11'><div class=area style='position:absolute; width:38px; height:20px; left:1715px; top:768px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1423&a_id=4696&y=1926' title='Мишель Фуко

Психоанализ, Структурализм, 
Постмодернизм, Постструктурализм
FRA
1926-1984
MY: 0/0
MX: 1423
QN: 5'><div class=area style='position:absolute; width:20px; height:20px; left:1442px; top:766px'></div></a>
<a  href='build-rfmap.php?mp=1423&a_id=4696&y=1926' title='Мишель Фуко

Психоанализ, Структурализм, 
Постмодернизм, Постструктурализм
FRA
1926-1984
MY: 0/0
MX: 1423
QN: 5'><div class=area style='position:absolute; width:19px; height:20px; left:1462px; top:766px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=105&a_id=2893&y=1928' title='Евграф Каленьевич Дулуман

Атеизм, Марксизм
RUS
1928-2013
MY: 0/0
MX: 105
QN: 8'><div class=area style='position:absolute; width:31px; height:20px; left:124px; top:799px'></div></a>
<a  href='build-rfmap.php?mp=105&a_id=2893&y=1928' title='Евграф Каленьевич Дулуман

Атеизм, Марксизм
RUS
1928-2013
MY: 0/0
MX: 105
QN: 8'><div class=area style='position:absolute; width:31px; height:20px; left:155px; top:799px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=449&a_id=3006&y=1929' title='Жан Бодрийяр

Постмодернизм, Постструктурализм
FRA
1929-2007
MY: 0/2
MX: 449
QN: 13'><div class=area style='position:absolute; width:34px; height:20px; left:468px; top:797px'></div></a>
<a  href='build-rfmap.php?mp=449&a_id=3006&y=1929' title='Жан Бодрийяр

Постмодернизм, Постструктурализм
FRA
1929-2007
MY: 0/2
MX: 449
QN: 13'><div class=area style='position:absolute; width:33px; height:20px; left:502px; top:797px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=449&a_id=2978&y=1930' title='Жак Деррида

Деконструктивизм, Постмодернизм, Постструктурализм, 
Политика, Психоанализ, Теология, Эстетика, Этика
FRA
1930-2004
MY: 0/-8
MX: 449
QN: 6'><div class=area style='position:absolute; width:31px; height:20px; left:468px; top:774px'></div></a>
<a  href='build-rfmap.php?mp=449&a_id=2978&y=1930' title='Жак Деррида

Деконструктивизм, Постмодернизм, Постструктурализм, 
Политика, Психоанализ, Теология, Эстетика, Этика
FRA
1930-2004
MY: 0/-8
MX: 449
QN: 6'><div class=area style='position:absolute; width:30px; height:20px; left:499px; top:774px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=183&a_id=4526&y=1930' title='Мераб Мамардашвили

Рационализм, 
Логика
RUS
1930-1990
MY: 0/-2
MX: 183
QN: 15'><div class=area style='position:absolute; width:43px; height:20px; left:202px; top:772px'></div></a>
<a  href='build-rfmap.php?mp=183&a_id=4526&y=1930' title='Мераб Мамардашвили

Рационализм, 
Логика
RUS
1930-1990
MY: 0/-2
MX: 183
QN: 15'><div class=area style='position:absolute; width:42px; height:20px; left:245px; top:772px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=536&a_id=7102&y=1930' title='Хорхе Анхель Ливрага

Гуманизм, 
Теософия
ITA
1930-1991
MY: 0/0
MX: 536
QN: 8'><div class=area style='position:absolute; width:29px; height:20px; left:555px; top:778px'></div></a>
<a  href='build-rfmap.php?mp=536&a_id=7102&y=1930' title='Хорхе Анхель Ливрага

Гуманизм, 
Теософия
ITA
1930-1991
MY: 0/0
MX: 536
QN: 8'><div class=area style='position:absolute; width:29px; height:20px; left:584px; top:778px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1557&a_id=983&y=1931' title='Баба Рам Дасс

Индуизм, Психология, Хиппи
USA
1931-
MY: 0/12
MX: 1557
QN: 2'><div class=area style='position:absolute; width:32px; height:20px; left:1576px; top:782px'></div></a>
<a  href='build-rfmap.php?mp=1557&a_id=983&y=1931' title='Баба Рам Дасс

Индуизм, Психология, Хиппи
USA
1931-
MY: 0/12
MX: 1557
QN: 2'><div class=area style='position:absolute; width:32px; height:20px; left:1608px; top:782px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1657&a_id=6701&y=1932' title='Умберто Эко

История, Постмодернизм, Семиотика, Филология, Философская литература, 
Медиевализм, Эстетика
ITA
1932-2016
MY: 0/15
MX: 1657
QN: 8'><div class=area style='position:absolute; width:22px; height:20px; left:1676px; top:837px'></div></a>
<a  href='build-rfmap.php?mp=1657&a_id=6701&y=1932' title='Умберто Эко

История, Постмодернизм, Семиотика, Филология, Философская литература, 
Медиевализм, Эстетика
ITA
1932-2016
MY: 0/15
MX: 1657
QN: 8'><div class=area style='position:absolute; width:21px; height:20px; left:1698px; top:837px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1657&a_id=5652&y=1936' title='Ричард Бах

Философская литература
USA
1936-
MY: 0/-11
MX: 1657
QN: 9'><div class=area style='position:absolute; width:24px; height:20px; left:1676px; top:745px'></div></a>
<a  href='build-rfmap.php?mp=1657&a_id=5652&y=1936' title='Ричард Бах

Философская литература
USA
1936-
MY: 0/-11
MX: 1657
QN: 9'><div class=area style='position:absolute; width:23px; height:20px; left:1700px; top:745px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1657&a_id=3382&y=1940' title='Иосиф Александрович Бродский

Философская литература
RUS
1940-1996
MY: 0/10
MX: 1657
QN: 497'><div class=area style='position:absolute; width:36px; height:20px; left:1676px; top:814px'></div></a>
<a  href='build-rfmap.php?mp=1657&a_id=3382&y=1940' title='Иосиф Александрович Бродский

Философская литература
RUS
1940-1996
MY: 0/10
MX: 1657
QN: 497'><div class=area style='position:absolute; width:35px; height:20px; left:1712px; top:814px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=183&a_id=2829&y=1942' title='Дэниел Деннет

Аналитическая философия, 
Гуманизм, Материализм, Философия науки, Философия сознания
USA
1942-
MY: 0/7
MX: 183
QN: 1'><div class=area style='position:absolute; width:26px; height:20px; left:202px; top:795px'></div></a>
<a  href='build-rfmap.php?mp=183&a_id=2829&y=1942' title='Дэниел Деннет

Аналитическая философия, 
Гуманизм, Материализм, Философия науки, Философия сознания
USA
1942-
MY: 0/7
MX: 183
QN: 1'><div class=area style='position:absolute; width:26px; height:20px; left:228px; top:795px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=183&a_id=5385&y=1946' title='Питер Сингер

Аналитическая философия, Утилитаризм, 
Этика
AUS
1946-
MY: 0/14
MX: 183
QN: 3'><div class=area style='position:absolute; width:25px; height:20px; left:202px; top:818px'></div></a>
<a  href='build-rfmap.php?mp=183&a_id=5385&y=1946' title='Питер Сингер

Аналитическая философия, Утилитаризм, 
Этика
AUS
1946-
MY: 0/14
MX: 183
QN: 3'><div class=area style='position:absolute; width:25px; height:20px; left:227px; top:818px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1657&a_id=5281&y=1947' title='Пауло Коэльо

Философская литература
BRA
1947-
MY: 0/0
MX: 1657
QN: 24'><div class=area style='position:absolute; width:28px; height:20px; left:1676px; top:791px'></div></a>
<a  href='build-rfmap.php?mp=1657&a_id=5281&y=1947' title='Пауло Коэльо

Философская литература
BRA
1947-
MY: 0/0
MX: 1657
QN: 24'><div class=area style='position:absolute; width:27px; height:20px; left:1704px; top:791px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=449&a_id=6762&y=1948' title='Фёдор Иванович Гиренок

Антропологизм, Постмодернизм
RUS
1948-
MY: 0/13
MX: 449
QN: 4'><div class=area style='position:absolute; width:29px; height:20px; left:468px; top:820px'></div></a>
<a  href='build-rfmap.php?mp=449&a_id=6762&y=1948' title='Фёдор Иванович Гиренок

Антропологизм, Постмодернизм
RUS
1948-
MY: 0/13
MX: 449
QN: 4'><div class=area style='position:absolute; width:28px; height:20px; left:497px; top:820px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=1423&a_id=6171&y=1949' title='Славой Жижек

Гегельянцы, Марксизм, Неофрейдизм, Психоанализ
SVN
1949-
MY: 0/0
MX: 1423
QN: 1'><div class=area style='position:absolute; width:25px; height:20px; left:1442px; top:795px'></div></a>
<a  href='build-rfmap.php?mp=1423&a_id=6171&y=1949' title='Славой Жижек

Гегельянцы, Марксизм, Неофрейдизм, Психоанализ
SVN
1949-
MY: 0/0
MX: 1423
QN: 1'><div class=area style='position:absolute; width:25px; height:20px; left:1467px; top:795px'></div></a>
<a  href='http://alch.strangled.net/artquiz/rfil/authors.php?mp=183&a_id=2664&y=1960' title='Дмитрий Галковский

Аналитическая философия, 
История, Метафизика, Политика, Социология, Теология, Этика
RUS
1960-
MY: 0/11
MX: 183
QN: 1'><div class=area style='position:absolute; width:38px; height:20px; left:202px; top:841px'></div></a>
<a  href='build-rfmap.php?mp=183&a_id=2664&y=1960' title='Дмитрий Галковский

Аналитическая философия, 
История, Метафизика, Политика, Социология, Теология, Этика
RUS
1960-
MY: 0/11
MX: 183
QN: 1'><div class=area style='position:absolute; width:38px; height:20px; left:240px; top:841px'></div></a>

