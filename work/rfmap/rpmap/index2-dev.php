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
<a id='tМарксизм' name='tМарксизм' style='position: absolute; top: 506px; left: 1790px'><font color=white size=3>Марксизм</font></a>
<a id='tЭмпиризм' name='tЭмпиризм' style='position: absolute; top: 230px; left: 1790px'><font color=white size=3>Эмпиризм</font></a>
<a id='tРационализм' name='tРационализм' style='position: absolute; top: 217px; left: 1790px'><font color=white size=3>Рационализм</font></a>
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
<a id='tЛегизм' name='tЛегизм' style='position: absolute; top: 45px; left: 1790px'><font color=white size=3>Легизм</font></a>
<a id='tРанняя партистика' name='tРанняя партистика' style='position: absolute; top: 104px; left: 1790px'><font color=white size=3>Ранняя партистика</font></a>
<a id='tЗрелая патристика' name='tЗрелая патристика' style='position: absolute; top: 136px; left: 1790px'><font color=white size=3>Зрелая патристика</font></a>
<a id='tПоздняя патристика' name='tПоздняя патристика' style='position: absolute; top: 167px; left: 1790px'><font color=white size=3>Поздняя патристика</font></a>
<a id='tРанняя схоластика' name='tРанняя схоластика' style='position: absolute; top: 188px; left: 1790px'><font color=white size=3>Ранняя схоластика</font></a>
<a id='tЗрелая схоластика' name='tЗрелая схоластика' style='position: absolute; top: 210px; left: 1790px'><font color=white size=3>Зрелая схоластика</font></a>
<a id='tМистицизм' name='tМистицизм' style='position: absolute; top: 229px; left: 1790px'><font color=white size=3>Мистицизм</font></a>
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
<a id='tХристианство' name='tХристианство' style='position: absolute; top: 642px; left: 1790px'><font color=white size=3>Христианство</font></a>
<a id='tРелигиозный экзистенциализм' name='tРелигиозный экзистенциализм' style='position: absolute; top: 548px; left: 1790px'><font color=white size=3>Религиозный экзистенциализм</font></a>
<a id='tАналитическая философия' name='tАналитическая философия' style='position: absolute; top: 604px; left: 1790px'><font color=white size=3>Аналитическая философия</font></a>
<a id='tНеотомизм' name='tНеотомизм' style='position: absolute; top: 592px; left: 1790px'><font color=white size=3>Неотомизм</font></a>
<a id='tАнархизм' name='tАнархизм' style='position: absolute; top: 497px; left: 1790px'><font color=white size=3>Анархизм</font></a>
<a id='tФеноменология' name='tФеноменология' style='position: absolute; top: 579px; left: 1790px'><font color=white size=3>Феноменология</font></a>
<a id='tТоталитаризм' name='tТоталитаризм' style='position: absolute; top: 663px; left: 1790px'><font color=white size=3>Тоталитаризм</font></a>
<a id='tПостмодернизм' name='tПостмодернизм' style='position: absolute; top: 671px; left: 1790px'><font color=white size=3>Постмодернизм</font></a>
<a id='tСтруктурализм' name='tСтруктурализм' style='position: absolute; top: 732px; left: 1790px'><font color=white size=3>Структурализм</font></a>
<a id='tГерменевтика' name='tГерменевтика' style='position: absolute; top: 718px; left: 1790px'><font color=white size=3>Герменевтика</font></a>
<a id='tФилософская литература' name='tФилософская литература' style='position: absolute; top: -5px; left: 1790px'><font color=white size=3>Философская литература</font></a>
<a id='tВосточная_философия средневековья' name='tВосточная_философия средневековья' style='position: absolute; top: 161px; left: 1790px'><font color=white size=3>Восточная_философия средневековья</font></a>
<a id='tЙога' name='tЙога' style='position: absolute; top: 59px; left: 1790px'><font color=white size=3>Йога</font></a>
<a id='a1883' name='#a1883' style='position: absolute; top: 24px; left: 1790px'><font color=white size=3>Hesiod</font></a>
<a id='a1921' name='#a1921' style='position: absolute; top: 22px; left: 1790px'><font color=white size=3>Homer</font></a>
<a id='a3887' name='#a3887' style='position: absolute; top: 43px; left: 1790px'><font color=white size=3>Laozi</font></a>
<a id='a3830' name='#a3830' style='position: absolute; top: 43px; left: 1790px'><font color=white size=3>Xenophanes</font></a>
<a id='a5393' name='#a5393' style='position: absolute; top: 47px; left: 1790px'><font color=white size=3>Pythagoras</font></a>
<a id='a6126' name='#a6126' style='position: absolute; top: 40px; left: 1790px'><font color=white size=3>Buddha</font></a>
<a id='a3755' name='#a3755' style='position: absolute; top: 51px; left: 1790px'><font color=white size=3>Confucius</font></a>
<a id='a1850' name='#a1850' style='position: absolute; top: 51px; left: 1790px'><font color=white size=3>Heraclitus</font></a>
<a id='a574' name='#a574' style='position: absolute; top: 73px; left: 1790px'><font color=white size=3>Anaxagoras</font></a>
<a id='a7558' name='#a7558' style='position: absolute; top: 63px; left: 1790px'><font color=white size=3>Empedocles</font></a>
<a id='a5472' name='#a5472' style='position: absolute; top: 61px; left: 1790px'><font color=white size=3>Protagoras</font></a>
<a id='a6176' name='#a6176' style='position: absolute; top: 62px; left: 1790px'><font color=white size=3>Socrates</font></a>
<a id='a2067' name='#a2067' style='position: absolute; top: 58px; left: 1790px'><font color=white size=3>Democritus</font></a>
<a id='a804' name='#a804' style='position: absolute; top: 63px; left: 1790px'><font color=white size=3>Antisthenes</font></a>
<a id='a5395' name='#a5395' style='position: absolute; top: 68px; left: 1790px'><font color=white size=3>Plato</font></a>
<a id='a2634' name='#a2634' style='position: absolute; top: 71px; left: 1790px'><font color=white size=3>Diogenes</font></a>
<a id='a868' name='#a868' style='position: absolute; top: 76px; left: 1790px'><font color=white size=3>Aristotle</font></a>
<a id='a4766' name='#a4766' style='position: absolute; top: 77px; left: 1790px'><font color=white size=3>Mencius</font></a>
<a id='a6425' name='#a6425' style='position: absolute; top: 98px; left: 1790px'><font color=white size=3>Theophrastus</font></a>
<a id='a7603' name='#a7603' style='position: absolute; top: 84px; left: 1790px'><font color=white size=3>Epicurus</font></a>
<a id='a7032' name='#a7032' style='position: absolute; top: 87px; left: 1790px'><font color=white size=3>Han Fei</font></a>
<a id='a7124' name='#a7124' style='position: absolute; top: 89px; left: 1790px'><font color=white size=3>Chrysippus</font></a>
<a id='a5269' name='#a5269' style='position: absolute; top: 101px; left: 1790px'><font color=white size=3>Patanjali</font></a>
<a id='a4431' name='#a4431' style='position: absolute; top: 113px; left: 1790px'><font color=white size=3>Marcus</font></a>
<a id='a6482' name='#a6482' style='position: absolute; top: 113px; left: 1790px'><font color=white size=3>Lucretius</font></a>
<a id='a6848' name='#a6848' style='position: absolute; top: 122px; left: 1790px'><font color=white size=3>Philo</font></a>
<a id='a4162' name='#a4162' style='position: absolute; top: 143px; left: 1790px'><font color=white size=3>Lucius</font></a>
<a id='a5399' name='#a5399' style='position: absolute; top: 135px; left: 1790px'><font color=white size=3>Plutarch</font></a>
<a id='a7602' name='#a7602' style='position: absolute; top: 128px; left: 1790px'><font color=white size=3>Epictetus</font></a>
<a id='a4406' name='#a4406' style='position: absolute; top: 146px; left: 1790px'><font color=white size=3>Marcus</font></a>
<a id='a6437' name='#a6437' style='position: absolute; top: 150px; left: 1790px'><font color=white size=3>Tertullian</font></a>
<a id='a5398' name='#a5398' style='position: absolute; top: 149px; left: 1790px'><font color=white size=3>Plotinus</font></a>
<a id='a58' name='#a58' style='position: absolute; top: 178px; left: 1790px'><font color=white size=3>Saint Augustine</font></a>
<a id='a736' name='#a736' style='position: absolute; top: 193px; left: 1790px'><font color=white size=3>Boethius</font></a>
<a id='a5168' name='#a5168' style='position: absolute; top: 248px; left: 1790px'><font color=white size=3>Khayyam</font></a>
<a id='a5482' name='#a5482' style='position: absolute; top: 238px; left: 1790px'><font color=white size=3>Abelard</font></a>
<a id='a4702' name='#a4702' style='position: absolute; top: 257px; left: 1790px'><font color=white size=3>Maimonides</font></a>
<a id='a2109' name='#a2109' style='position: absolute; top: 246px; left: 1790px'><font color=white size=3>Rumi</font></a>
<a id='a5781' name='#a5781' style='position: absolute; top: 248px; left: 1790px'><font color=white size=3>Bacon</font></a>
<a id='a6865' name='#a6865' style='position: absolute; top: 248px; left: 1790px'><font color=white size=3>Aquinas</font></a>
<a id='a4517' name='#a4517' style='position: absolute; top: 251px; left: 1790px'><font color=white size=3>Eckhart</font></a>
<a id='a4460' name='#a4460' style='position: absolute; top: 259px; left: 1790px'><font color=white size=3>Ficino</font></a>
<a id='a2309' name='#a2309' style='position: absolute; top: 269px; left: 1790px'><font color=white size=3>Savonarola</font></a>
<a id='a3966' name='#a3966' style='position: absolute; top: 267px; left: 1790px'><font color=white size=3>Vinci</font></a>
<a id='a2340' name='#a2340' style='position: absolute; top: 269px; left: 1790px'><font color=white size=3>Mirandola</font></a>
<a id='a4889' name='#a4889' style='position: absolute; top: 272px; left: 1790px'><font color=white size=3>Machiavelli</font></a>
<a id='a7608' name='#a7608' style='position: absolute; top: 281px; left: 1790px'><font color=white size=3>Erasmus</font></a>
<a id='a6544' name='#a6544' style='position: absolute; top: 269px; left: 1790px'><font color=white size=3>More</font></a>
<a id='a4469' name='#a4469' style='position: absolute; top: 274px; left: 1790px'><font color=white size=3>Luther</font></a>
<a id='a5264' name='#a5264' style='position: absolute; top: 274px; left: 1790px'><font color=white size=3>Paracelsus</font></a>
<a id='a3017' name='#a3017' style='position: absolute; top: 277px; left: 1790px'><font color=white size=3>Calvin</font></a>
<a id='a4684' name='#a4684' style='position: absolute; top: 283px; left: 1790px'><font color=white size=3>Montaigne</font></a>
<a id='a2515' name='#a2515' style='position: absolute; top: 284px; left: 1790px'><font color=white size=3>Bruno</font></a>
<a id='a6987' name='#a6987' style='position: absolute; top: 274px; left: 1790px'><font color=white size=3>Bacon</font></a>
<a id='a1686' name='#a1686' style='position: absolute; top: 289px; left: 1790px'><font color=white size=3>Galilei</font></a>
<a id='a6566' name='#a6566' style='position: absolute; top: 291px; left: 1790px'><font color=white size=3>Campanella</font></a>
<a id='a2403' name='#a2403' style='position: absolute; top: 290px; left: 1790px'><font color=white size=3>Donne</font></a>
<a id='a7785' name='#a7785' style='position: absolute; top: 286px; left: 1790px'><font color=white size=3>Bohme</font></a>
<a id='a6527' name='#a6527' style='position: absolute; top: 296px; left: 1790px'><font color=white size=3>Hobbes</font></a>
<a id='a5614' name='#a5614' style='position: absolute; top: 274px; left: 1790px'><font color=white size=3>Descartes</font></a>
<a id='a1105' name='#a1105' style='position: absolute; top: 296px; left: 1790px'><font color=white size=3>Pascal</font></a>
<a id='a1033' name='#a1033' style='position: absolute; top: 318px; left: 1790px'><font color=white size=3>Spinoza</font></a>
<a id='a2432' name='#a2432' style='position: absolute; top: 318px; left: 1790px'><font color=white size=3>Locke</font></a>
<a id='a1927' name='#a1927' style='position: absolute; top: 341px; left: 1790px'><font color=white size=3>Leibniz</font></a>
<a id='a2104' name='#a2104' style='position: absolute; top: 336px; left: 1790px'><font color=white size=3>Berkeley</font></a>
<a id='a7267' name='#a7267' style='position: absolute; top: 325px; left: 1790px'><font color=white size=3>Montesquieu</font></a>
<a id='a1633' name='#a1633' style='position: absolute; top: 348px; left: 1790px'><font color=white size=3>Voltaire</font></a>
<a id='a2813' name='#a2813' style='position: absolute; top: 362px; left: 1790px'><font color=white size=3>Hume</font></a>
<a id='a3047' name='#a3047' style='position: absolute; top: 370px; left: 1790px'><font color=white size=3>Rousseau</font></a>
<a id='a2075' name='#a2075' style='position: absolute; top: 363px; left: 1790px'><font color=white size=3>Diderot</font></a>
<a id='a3680' name='#a3680' style='position: absolute; top: 369px; left: 1790px'><font color=white size=3>Helvetius</font></a>
<a id='a5456' name='#a5456' style='position: absolute; top: 385px; left: 1790px'><font color=white size=3>Holbach</font></a>
<a id='a3335' name='#a3335' style='position: absolute; top: 390px; left: 1790px'><font color=white size=3>Kant</font></a>
<a id='a3362' name='#a3362' style='position: absolute; top: 425px; left: 1790px'><font color=white size=3>Goethe</font></a>
<a id='a3373' name='#a3373' style='position: absolute; top: 402px; left: 1790px'><font color=white size=3>Schiller</font></a>
<a id='a3367' name='#a3367' style='position: absolute; top: 423px; left: 1790px'><font color=white size=3>Fichte</font></a>
<a id='a1821' name='#a1821' style='position: absolute; top: 442px; left: 1790px'><font color=white size=3>Hegel</font></a>
<a id='a5022' name='#a5022' style='position: absolute; top: 422px; left: 1790px'><font color=white size=3>Novalis</font></a>
<a id='a6332' name='#a6332' style='position: absolute; top: 448px; left: 1790px'><font color=white size=3>Coleridge</font></a>
<a id='a941' name='#a941' style='position: absolute; top: 490px; left: 1790px'><font color=white size=3>Schopenhauer</font></a>
<a id='a2108' name='#a2108' style='position: absolute; top: 472px; left: 1790px'><font color=white size=3>Leopardi</font></a>
<a id='a5069' name='#a5069' style='position: absolute; top: 490px; left: 1790px'><font color=white size=3>Comte</font></a>
<a id='a5555' name='#a5555' style='position: absolute; top: 541px; left: 1790px'><font color=white size=3>Emerson</font></a>
<a id='a2469' name='#a2469' style='position: absolute; top: 537px; left: 1790px'><font color=white size=3>Mill</font></a>
<a id='a245' name='#a245' style='position: absolute; top: 526px; left: 1790px'><font color=white size=3>Herzen</font></a>
<a id='a6109' name='#a6109' style='position: absolute; top: 511px; left: 1790px'><font color=white size=3>Kierkegaard</font></a>
<a id='a4602' name='#a4602' style='position: absolute; top: 535px; left: 1790px'><font color=white size=3>Bakunin</font></a>
<a id='a1784' name='#a1784' style='position: absolute; top: 518px; left: 1790px'><font color=white size=3>Thoreau</font></a>
<a id='a3527' name='#a3527' style='position: absolute; top: 543px; left: 1790px'><font color=white size=3>Marx</font></a>
<a id='a1869' name='#a1869' style='position: absolute; top: 587px; left: 1790px'><font color=white size=3>Melville</font></a>
<a id='a1857' name='#a1857' style='position: absolute; top: 583px; left: 1790px'><font color=white size=3>Spencer</font></a>
<a id='a6961' name='#a6961' style='position: absolute; top: 566px; left: 1790px'><font color=white size=3>Engels</font></a>
<a id='a6766' name='#a6766' style='position: absolute; top: 564px; left: 1790px'><font color=white size=3>Dostoevsky</font></a>
<a id='a3387' name='#a3387' style='position: absolute; top: 560px; left: 1790px'><font color=white size=3>Taine</font></a>
<a id='a3929' name='#a3929' style='position: absolute; top: 610px; left: 1790px'><font color=white size=3>Tolstoy</font></a>
<a id='a7173' name='#a7173' style='position: absolute; top: 612px; left: 1790px'><font color=white size=3>Peirce</font></a>
<a id='a6641' name='#a6641' style='position: absolute; top: 589px; left: 1790px'><font color=white size=3>James</font></a>
<a id='a6950' name='#a6950' style='position: absolute; top: 591px; left: 1790px'><font color=white size=3>Nietzsche</font></a>
<a id='a3160' name='#a3160' style='position: absolute; top: 646px; left: 1790px'><font color=white size=3>Freud</font></a>
<a id='a3752' name='#a3752' style='position: absolute; top: 640px; left: 1790px'><font color=white size=3>Tsiolkovsky</font></a>
<a id='a782' name='#a782' style='position: absolute; top: 648px; left: 1790px'><font color=white size=3>Bergson</font></a>
<a id='a2405' name='#a2405' style='position: absolute; top: 663px; left: 1790px'><font color=white size=3>Dewey</font></a>
<a id='a7411' name='#a7411' style='position: absolute; top: 648px; left: 1790px'><font color=white size=3>Husserl</font></a>
<a id='a2550' name='#a2550' style='position: absolute; top: 677px; left: 1790px'><font color=white size=3>Santayana</font></a>
<a id='a5962' name='#a5962' style='position: absolute; top: 614px; left: 1790px'><font color=white size=3>Vivekananda</font></a>
<a id='a4541' name='#a4541' style='position: absolute; top: 637px; left: 1790px'><font color=white size=3>Unamuno</font></a>
<a id='a5839' name='#a5839' style='position: absolute; top: 671px; left: 1790px'><font color=white size=3>Rolland</font></a>
<a id='a4506' name='#a4506' style='position: absolute; top: 644px; left: 1790px'><font color=white size=3>Gandhi</font></a>
<a id='a1562' name='#a1562' style='position: absolute; top: 646px; left: 1790px'><font color=white size=3>Lenin</font></a>
<a id='a1059' name='#a1059' style='position: absolute; top: 703px; left: 1790px'><font color=white size=3>Russell</font></a>
<a id='a7312' name='#a7312' style='position: absolute; top: 667px; left: 1790px'><font color=white size=3>Aurobindo</font></a>
<a id='a4900' name='#a4900' style='position: absolute; top: 684px; left: 1790px'><font color=white size=3>Berdyaev</font></a>
<a id='a507' name='#a507' style='position: absolute; top: 690px; left: 1790px'><font color=white size=3>Schweitzer</font></a>
<a id='a3519' name='#a3519' style='position: absolute; top: 688px; left: 1790px'><font color=white size=3>Jung</font></a>
<a id='a7315' name='#a7315' style='position: absolute; top: 690px; left: 1790px'><font color=white size=3>Maharshi</font></a>
<a id='a5184' name='#a5184' style='position: absolute; top: 671px; left: 1790px'><font color=white size=3>Spengler</font></a>
<a id='a5512' name='#a5512' style='position: absolute; top: 667px; left: 1790px'><font color=white size=3>Chardin</font></a>
<a id='a2979' name='#a2979' style='position: absolute; top: 713px; left: 1790px'><font color=white size=3>Maritain</font></a>
<a id='a2128' name='#a2128' style='position: absolute; top: 654px; left: 1790px'><font color=white size=3>Gibran</font></a>
<a id='a3538' name='#a3538' style='position: absolute; top: 707px; left: 1790px'><font color=white size=3>Jaspers</font></a>
<a id='a7113' name='#a7113' style='position: absolute; top: 694px; left: 1790px'><font color=white size=3>Gasset</font></a>
<a id='a1670' name='#a1670' style='position: absolute; top: 730px; left: 1790px'><font color=white size=3>Marcel</font></a>
<a id='a4176' name='#a4176' style='position: absolute; top: 679px; left: 1790px'><font color=white size=3>Wittgenstein</font></a>
<a id='a4477' name='#a4477' style='position: absolute; top: 700px; left: 1790px'><font color=white size=3>Heidegger</font></a>
<a id='a2276' name='#a2276' style='position: absolute; top: 736px; left: 1790px'><font color=white size=3>Krishnamurti</font></a>
<a id='a7105' name='#a7105' style='position: absolute; top: 721px; left: 1790px'><font color=white size=3>Borges</font></a>
<a id='a7637' name='#a7637' style='position: absolute; top: 734px; left: 1790px'><font color=white size=3>Fromm</font></a>
<a id='a3531' name='#a3531' style='position: absolute; top: 740px; left: 1790px'><font color=white size=3>Popper</font></a>
<a id='a6412' name='#a6412' style='position: absolute; top: 732px; left: 1790px'><font color=white size=3>Adorno</font></a>
<a id='a3060' name='#a3060' style='position: absolute; top: 747px; left: 1790px'><font color=white size=3>Sartre</font></a>
<a id='a7023' name='#a7023' style='position: absolute; top: 736px; left: 1790px'><font color=white size=3>Arendt</font></a>
<a id='a3682' name='#a3682' style='position: absolute; top: 774px; left: 1790px'><font color=white size=3>Levi-Strauss</font></a>
<a id='a4719' name='#a4719' style='position: absolute; top: 719px; left: 1790px'><font color=white size=3>Merleau-Ponty</font></a>
<a id='a6145' name='#a6145' style='position: absolute; top: 770px; left: 1790px'><font color=white size=3>Beauvoir</font></a>
<a id='a6615' name='#a6615' style='position: absolute; top: 749px; left: 1790px'><font color=white size=3>Quine</font></a>
<a id='a6144' name='#a6144' style='position: absolute; top: 711px; left: 1790px'><font color=white size=3>Weil</font></a>
<a id='a6215' name='#a6215' style='position: absolute; top: 698px; left: 1790px'><font color=white size=3>Lec</font></a>
<a id='a4487' name='#a4487' style='position: absolute; top: 728px; left: 1790px'><font color=white size=3>McLuhan</font></a>
<a id='a7539' name='#a7539' style='position: absolute; top: 766px; left: 1790px'><font color=white size=3>Cioran</font></a>
<a id='a494' name='#a494' style='position: absolute; top: 724px; left: 1790px'><font color=white size=3>Camus</font></a>
<a id='a5452' name='#a5452' style='position: absolute; top: 774px; left: 1790px'><font color=white size=3>Ricoeur</font></a>
<a id='a4505' name='#a4505' style='position: absolute; top: 805px; left: 1790px'><font color=white size=3>Yogi</font></a>
<a id='a3339' name='#a3339' style='position: absolute; top: 763px; left: 1790px'><font color=white size=3>Lakatos</font></a>
<a id='a3553' name='#a3553' style='position: absolute; top: 768px; left: 1790px'><font color=white size=3>Castaneda</font></a>
<a id='a4696' name='#a4696' style='position: absolute; top: 766px; left: 1790px'><font color=white size=3>Foucault</font></a>
<a id='a3006' name='#a3006' style='position: absolute; top: 797px; left: 1790px'><font color=white size=3>Baudrillard</font></a>
<a id='a2978' name='#a2978' style='position: absolute; top: 774px; left: 1790px'><font color=white size=3>Derrida</font></a>
<a id='a4526' name='#a4526' style='position: absolute; top: 772px; left: 1790px'><font color=white size=3>Mamardashvili</font></a>
<a id='a6701' name='#a6701' style='position: absolute; top: 837px; left: 1790px'><font color=white size=3>Eco</font></a>
<a id='a5652' name='#a5652' style='position: absolute; top: 745px; left: 1790px'><font color=white size=3>Bach</font></a>
<a id='a3382' name='#a3382' style='position: absolute; top: 814px; left: 1790px'><font color=white size=3>Brodsky</font></a>
<a id='a2829' name='#a2829' style='position: absolute; top: 795px; left: 1790px'><font color=white size=3>Dennett</font></a>
<a id='a5385' name='#a5385' style='position: absolute; top: 818px; left: 1790px'><font color=white size=3>Singer</font></a>
<a id='a5281' name='#a5281' style='position: absolute; top: 791px; left: 1790px'><font color=white size=3>Coelho</font></a>
<a id='a6171' name='#a6171' style='position: absolute; top: 795px; left: 1790px'><font color=white size=3>Zizek</font></a>

<img id=img align=left class=coords border=0 src=maps/en2.png>
<div style='background:transparent; position:absolute; top: 0px; left: 0px; width:100%; height:100%;'>
<a  href='build-rfmap2.php?t_name=Материализм' title='Материализм'><div class=area style='position:absolute; width:32px; height:18px; left:220px; top:878px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Материализм' title='Материализм'><div class=area style='position:absolute; width:33px; height:18px; left:187px; top:878px'></div></a>
<a  href='build-rfmap2.php?t_name=Объективный идеализм' title='Объективный идеализм'><div class=area style='position:absolute; width:50px; height:18px; left:317px; top:878px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Объективный идеализм' title='Объективный идеализм'><div class=area style='position:absolute; width:51px; height:18px; left:266px; top:878px'></div></a>
<a  href='build-rfmap2.php?t_name=Субъективный идеализм' title='Субъективный идеализм'><div class=area style='position:absolute; width:54px; height:18px; left:435px; top:878px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Субъективный идеализм' title='Субъективный идеализм'><div class=area style='position:absolute; width:54px; height:18px; left:381px; top:878px'></div></a>
<a  href='build-rfmap2.php?t_name=Политическая философия' title='Политическая философия'><div class=area style='position:absolute; width:22px; height:18px; left:526px; top:878px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Политическая философия' title='Политическая философия'><div class=area style='position:absolute; width:23px; height:18px; left:503px; top:878px'></div></a>
<a  href='build-rfmap2.php?t_name=Восточная философия' title='Восточная философия'><div class=area style='position:absolute; width:14px; height:17px; left:577px; top:878px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Восточная философия' title='Восточная философия'><div class=area style='position:absolute; width:15px; height:17px; left:562px; top:878px'></div></a>
<a  href='build-rfmap2.php?t_name=Другие' title='Другие'><div class=area style='position:absolute; width:18px; height:17px; left:623px; top:878px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Другие' title='Другие'><div class=area style='position:absolute; width:18px; height:17px; left:605px; top:878px'></div></a>
<a  href='build-rfmap2.php?t_name=Субъективный идеализм' title='Субъективный идеализм
- Внешний мир - иллюзия, существующая благодаря субьективному сознанию.'><div class=area style='position:absolute; width:54px; height:18px; left:1097px; top:299px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Субъективный идеализм' title='Субъективный идеализм
- Внешний мир - иллюзия, существующая благодаря субьективному сознанию.'><div class=area style='position:absolute; width:54px; height:18px; left:1043px; top:299px'></div></a>
<a  href='build-rfmap2.php?t_name=Объективный идеализм' title='Объективный идеализм
- Внешний мир и сознание - порождение высшего духовного первоначала (мирового разума, Бога и др.)'><div class=area style='position:absolute; width:37px; height:18px; left:667px; top:352px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Объективный идеализм' title='Объективный идеализм
- Внешний мир и сознание - порождение высшего духовного первоначала (мирового разума, Бога и др.)'><div class=area style='position:absolute; width:38px; height:18px; left:629px; top:352px'></div></a>
<a  href='build-rfmap2.php?t_name=Платонизм' title='Платонизм
- Объективный идеализм. Бессмертие бестелесной души. Универсальные понятия существуют независимо от их конкретных воплощений.'><div class=area style='position:absolute; width:29px; height:18px; left:775px; top:29px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Платонизм' title='Платонизм
- Объективный идеализм. Бессмертие бестелесной души. Универсальные понятия существуют независимо от их конкретных воплощений.'><div class=area style='position:absolute; width:29px; height:18px; left:746px; top:29px'></div></a>
<a  href='build-rfmap2.php?t_name=Марксизм' title='Марксизм
- Изучение материальной субстанции и истории в их изменчивости, противоречивости и взаимосвязи.'><div class=area style='position:absolute; width:24px; height:18px; left:146px; top:524px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Марксизм' title='Марксизм
- Изучение материальной субстанции и истории в их изменчивости, противоречивости и взаимосвязи.'><div class=area style='position:absolute; width:25px; height:18px; left:121px; top:524px'></div></a>
<a  href='build-rfmap2.php?t_name=Эмпиризм' title='Эмпиризм
- Наука должна опираться на показания органов чувств.'><div class=area style='position:absolute; width:31px; height:18px; left:57px; top:248px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Эмпиризм' title='Эмпиризм
- Наука должна опираться на показания органов чувств.'><div class=area style='position:absolute; width:32px; height:18px; left:25px; top:248px'></div></a>
<a  href='build-rfmap2.php?t_name=Рационализм' title='Рационализм
- Органам чувств доверять нельзя, наука должна рассчитывать только на силу мысли.'><div class=area style='position:absolute; width:34px; height:18px; left:424px; top:235px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Рационализм' title='Рационализм
- Органам чувств доверять нельзя, наука должна рассчитывать только на силу мысли.'><div class=area style='position:absolute; width:34px; height:18px; left:390px; top:235px'></div></a>
<a  href='build-rfmap2.php?t_name=Древний материализм' title='Древний материализм
- Стихийный, не обоснованный, опирающийся на житейские наблюдения, здравый смысл.'><div class=area style='position:absolute; width:54px; height:18px; left:579px; top:11px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Древний материализм' title='Древний материализм
- Стихийный, не обоснованный, опирающийся на житейские наблюдения, здравый смысл.'><div class=area style='position:absolute; width:55px; height:18px; left:524px; top:11px'></div></a>
<a  href='build-rfmap2.php?t_name=Восточная философия' title='Восточная философия
- Религия, мифология, антропоцентризм, традиционализм.'><div class=area style='position:absolute; width:41px; height:17px; left:1615px; top:536px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Восточная философия' title='Восточная философия
- Религия, мифология, антропоцентризм, традиционализм.'><div class=area style='position:absolute; width:41px; height:17px; left:1574px; top:536px'></div></a>
<a  href='build-rfmap2.php?t_name=Конфуцианство' title='Конфуцианство
- Рационализм, порядок, этика, политика, сдержанность.'><div class=area style='position:absolute; width:39px; height:18px; left:1398px; top:13px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Конфуцианство' title='Конфуцианство
- Рационализм, порядок, этика, политика, сдержанность.'><div class=area style='position:absolute; width:40px; height:18px; left:1358px; top:13px'></div></a>
<a  href='build-rfmap2.php?t_name=Буддизм' title='Буддизм
- Путь к спасению (нирване) через отказ от желаний (страданий), отрешенность от внешнего мира.'><div class=area style='position:absolute; width:30px; height:18px; left:1597px; top:19px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Буддизм' title='Буддизм
- Путь к спасению (нирване) через отказ от желаний (страданий), отрешенность от внешнего мира.'><div class=area style='position:absolute; width:30px; height:18px; left:1567px; top:19px'></div></a>
<a  href='build-rfmap2.php?t_name=Даосизм' title='Даосизм
- Мистицизм, спонтанность, естественность, отказ от суеты.'><div class=area style='position:absolute; width:22px; height:18px; left:1465px; top:19px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Даосизм' title='Даосизм
- Мистицизм, спонтанность, естественность, отказ от суеты.'><div class=area style='position:absolute; width:22px; height:18px; left:1443px; top:19px'></div></a>
<a  href='build-rfmap2.php?t_name=Пифагорейцы' title='Пифагорейцы
- Число. Идеализм.'><div class=area style='position:absolute; width:36px; height:17px; left:687px; top:13px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Пифагорейцы' title='Пифагорейцы
- Число. Идеализм.'><div class=area style='position:absolute; width:36px; height:17px; left:651px; top:13px'></div></a>
<a  href='build-rfmap2.php?t_name=Элейцы' title='Элейцы
- От материализма к идеализму. Представители элейской школы (г. Элея, VI – нач. V в. до н. э.) – Ксенофан, Парменид, Зенон, - создали первый в истории западноевропейской философии образец чисто логического конструирования бытия. Полагая, что чувства дают нам не достоверные знания о мире, а всего лишь ложные, противоречивые, субъективные мнения, элеаты стремились постичь истину силой разума, путем умозаключений, исходя из принципа тождества мыслимого и сущего.'><div class=area style='position:absolute; width:23px; height:18px; left:902px; top:19px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Элейцы' title='Элейцы
- От материализма к идеализму. Представители элейской школы (г. Элея, VI – нач. V в. до н. э.) – Ксенофан, Парменид, Зенон, - создали первый в истории западноевропейской философии образец чисто логического конструирования бытия. Полагая, что чувства дают нам не достоверные знания о мире, а всего лишь ложные, противоречивые, субъективные мнения, элеаты стремились постичь истину силой разума, путем умозаключений, исходя из принципа тождества мыслимого и сущего.'><div class=area style='position:absolute; width:24px; height:18px; left:878px; top:19px'></div></a>
<a  href='build-rfmap2.php?t_name=Софизм' title='Софизм
- Риторика, социум, политика. Релятивизм.'><div class=area style='position:absolute; width:26px; height:18px; left:1056px; top:34px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Софизм' title='Софизм
- Риторика, социум, политика. Релятивизм.'><div class=area style='position:absolute; width:27px; height:18px; left:1029px; top:34px'></div></a>
<a  href='build-rfmap2.php?t_name=Эпикурейство' title='Эпикурейство
- Атараксия, гедонизм, древний материализм.
Самыми значительными последователями Эпикура были Тит Лукреций Кар, изложивший учение Эпикура в поэме «О природе вещей», поэт Вергилий, оратор и крупный государственный деятель Цицерон. Идеи Эпикура восприняли многие мыслители эпохи Возрождения (Л.Валла, Ф.Рабле, М.Монтень и др.) и Нового времени (Ф.Бэкон, С.де Бержерак, Д.Дидро и др.). И это не случайно: немецкий мыслитель-экзистенциалист ХX века Карл Ясперс писал, что в жизни каждого человека существуют такие моменты, когда философия Эпикура может стать прибежищем от слабости и страха.'><div class=area style='position:absolute; width:38px; height:18px; left:591px; top:140px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Эпикурейство' title='Эпикурейство
- Атараксия, гедонизм, древний материализм.
Самыми значительными последователями Эпикура были Тит Лукреций Кар, изложивший учение Эпикура в поэме «О природе вещей», поэт Вергилий, оратор и крупный государственный деятель Цицерон. Идеи Эпикура восприняли многие мыслители эпохи Возрождения (Л.Валла, Ф.Рабле, М.Монтень и др.) и Нового времени (Ф.Бэкон, С.де Бержерак, Д.Дидро и др.). И это не случайно: немецкий мыслитель-экзистенциалист ХX века Карл Ясперс писал, что в жизни каждого человека существуют такие моменты, когда философия Эпикура может стать прибежищем от слабости и страха.'><div class=area style='position:absolute; width:39px; height:18px; left:552px; top:140px'></div></a>
<a  href='build-rfmap2.php?t_name=Кинизм' title='Кинизм
- Последователи Сократа. Аскетизм. Первый в истории протест против культуры и цивилизации, норм нравственности и правил поведения.'><div class=area style='position:absolute; width:29px; height:18px; left:267px; top:34px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Кинизм' title='Кинизм
- Последователи Сократа. Аскетизм. Первый в истории протест против культуры и цивилизации, норм нравственности и правил поведения.'><div class=area style='position:absolute; width:29px; height:18px; left:238px; top:34px'></div></a>
<a  href='build-rfmap2.php?t_name=Стоицизм' title='Стоицизм
- Непоколебимость человека. Истинный мудрец принимает свою судьбу как данность и противостоит ей только силой духа, сохраняя невозмутимость, безмятежность, равнодушие.'><div class=area style='position:absolute; width:26px; height:18px; left:208px; top:68px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Стоицизм' title='Стоицизм
- Непоколебимость человека. Истинный мудрец принимает свою судьбу как данность и противостоит ей только силой духа, сохраняя невозмутимость, безмятежность, равнодушие.'><div class=area style='position:absolute; width:26px; height:18px; left:182px; top:68px'></div></a>
<a  href='build-rfmap2.php?t_name=Неоплатонизм' title='
- Согласование платонизма с аристотелизмом.'><div class=area style='position:absolute; width:42px; height:17px; left:789px; top:194px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Неоплатонизм' title='
- Согласование платонизма с аристотелизмом.'><div class=area style='position:absolute; width:43px; height:17px; left:746px; top:194px'></div></a>
<a  href='build-rfmap2.php?t_name=Атомизм' title='Атомизм
- Натурфилософская и физическая теория, согласно которой чувственно воспринимаемые (материальные) вещи состоят из химически неделимых частиц — атомов.'><div class=area style='position:absolute; width:26px; height:18px; left:574px; top:34px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Атомизм' title='Атомизм
- Натурфилософская и физическая теория, согласно которой чувственно воспринимаемые (материальные) вещи состоят из химически неделимых частиц — атомов.'><div class=area style='position:absolute; width:26px; height:18px; left:548px; top:34px'></div></a>
<a  href='build-rfmap2.php?t_name=Аристотелизм' title='Аристотелизм
- Единство формы и материи.'><div class=area style='position:absolute; width:46px; height:17px; left:697px; top:130.4px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Аристотелизм' title='Аристотелизм
- Единство формы и материи.'><div class=area style='position:absolute; width:46px; height:17px; left:651px; top:130.4px'></div></a>
<a  href='build-rfmap2.php?t_name=Сократики' title='Сократики
- Антропология, рационализм.'><div class=area style='position:absolute; width:25px; height:18px; left:837px; top:24px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Сократики' title='Сократики
- Антропология, рационализм.'><div class=area style='position:absolute; width:25px; height:18px; left:812px; top:24px'></div></a>
<a  href='build-rfmap2.php?t_name=Легизм' title='Легизм
- Преодоление эгоизма человека, деспотизм, наказание, законы.'><div class=area style='position:absolute; width:28px; height:18px; left:1262px; top:63px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Легизм' title='Легизм
- Преодоление эгоизма человека, деспотизм, наказание, законы.'><div class=area style='position:absolute; width:29px; height:18px; left:1233px; top:63px'></div></a>
<a  href='build-rfmap2.php?t_name=Ранняя партистика' title='Ранняя партистика
- Оформление и защита христианства от язычества.'><div class=area style='position:absolute; width:42px; height:18px; left:923px; top:122px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Ранняя партистика' title='Ранняя партистика
- Оформление и защита христианства от язычества.'><div class=area style='position:absolute; width:42px; height:18px; left:881px; top:122px'></div></a>
<a  href='build-rfmap2.php?t_name=Зрелая патристика' title='Зрелая патристика
- Рациональное обоснование христианских догматов на основе неоплатонизма.'><div class=area style='position:absolute; width:41px; height:18px; left:1060px; top:154px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Зрелая патристика' title='Зрелая патристика
- Рациональное обоснование христианских догматов на основе неоплатонизма.'><div class=area style='position:absolute; width:42px; height:18px; left:1018px; top:154px'></div></a>
<a  href='build-rfmap2.php?t_name=Поздняя патристика' title='Поздняя патристика
- Догматизация, появление аристотелизма.'><div class=area style='position:absolute; width:40px; height:18px; left:1346px; top:183px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Поздняя патристика' title='Поздняя патристика
- Догматизация, появление аристотелизма.'><div class=area style='position:absolute; width:41px; height:18px; left:1305px; top:183px'></div></a>
<a  href='build-rfmap2.php?t_name=Ранняя схоластика' title='Ранняя схоластика
- Под влиянием неоплатонизма. Увеличение роли рационализма, логики.'><div class=area style='position:absolute; width:54px; height:18px; left:936px; top:206px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Ранняя схоластика' title='Ранняя схоластика
- Под влиянием неоплатонизма. Увеличение роли рационализма, логики.'><div class=area style='position:absolute; width:55px; height:18px; left:881px; top:206px'></div></a>
<a  href='build-rfmap2.php?t_name=Зрелая схоластика' title='Зрелая схоластика
- Вытестение неоплатонизма аритотелизмом.'><div class=area style='position:absolute; width:54px; height:18px; left:1074px; top:228px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Зрелая схоластика' title='Зрелая схоластика
- Вытестение неоплатонизма аритотелизмом.'><div class=area style='position:absolute; width:54px; height:18px; left:1020px; top:228px'></div></a>
<a  href='build-rfmap2.php?t_name=Мистицизм' title='Мистицизм
- Понимание и восприятие мира, основанное на эмоциях, интуиции и иррационализме. Мистический опыт - прямое личностное общение, слияние или постижение некоей абсолютной реальности и абсолютной истины, а в рамках религий часто отождествляемое с Божеством или Абсолютом.'><div class=area style='position:absolute; width:29px; height:18px; left:1338px; top:338px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Мистицизм' title='Мистицизм
- Понимание и восприятие мира, основанное на эмоциях, интуиции и иррационализме. Мистический опыт - прямое личностное общение, слияние или постижение некоей абсолютной реальности и абсолютной истины, а в рамках религий часто отождествляемое с Божеством или Абсолютом.'><div class=area style='position:absolute; width:29px; height:18px; left:1309px; top:338px'></div></a>
<a  href='build-rfmap2.php?t_name=Гуманизм' title='Гуманизм
- Освобождение человеческой личности от идейного застоя феодализма и католицизма.'><div class=area style='position:absolute; width:30px; height:18px; left:584px; top:235px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Гуманизм' title='Гуманизм
- Освобождение человеческой личности от идейного застоя феодализма и католицизма.'><div class=area style='position:absolute; width:31px; height:18px; left:553px; top:235px'></div></a>
<a  href='build-rfmap2.php?t_name=Антропоцентризм' title='Антропоцентризм
- Человек - средоточие Вселенной и цель всех совершающихся в мире событий (идеализм).'><div class=area style='position:absolute; width:31px; height:17px; left:203px; top:214px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Антропоцентризм' title='Антропоцентризм
- Человек - средоточие Вселенной и цель всех совершающихся в мире событий (идеализм).'><div class=area style='position:absolute; width:31px; height:17px; left:172px; top:214px'></div></a>
<a  href='build-rfmap2.php?t_name=Христианский гуманизм' title='Христианский гуманизм
- Против злоупотреблений католической церкви и даже рассчитанная на ее реформу.'><div class=area style='position:absolute; width:55px; height:18px; left:783px; top:235px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Христианский гуманизм' title='Христианский гуманизм
- Против злоупотреблений католической церкви и даже рассчитанная на ее реформу.'><div class=area style='position:absolute; width:56px; height:18px; left:727px; top:235px'></div></a>
<a  href='build-rfmap2.php?t_name=Натурфилософия' title='Натурфилософия
- Философия природы (целостная система самых общих законов естествознания).'><div class=area style='position:absolute; width:53px; height:18px; left:290px; top:235px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Натурфилософия' title='Натурфилософия
- Философия природы (целостная система самых общих законов естествознания).'><div class=area style='position:absolute; width:54px; height:18px; left:236px; top:235px'></div></a>
<a  href='build-rfmap2.php?t_name=Деспотизм' title='Деспотизм
- Неограниченная власть.'><div class=area style='position:absolute; width:31px; height:18px; left:660px; top:235px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Деспотизм' title='Деспотизм
- Неограниченная власть.'><div class=area style='position:absolute; width:31px; height:18px; left:629px; top:235px'></div></a>
<a  href='build-rfmap2.php?t_name=Утопизм' title='Утопизм
- Несбыточные мечтания.'><div class=area style='position:absolute; width:25px; height:18px; left:489px; top:235px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Утопизм' title='Утопизм
- Несбыточные мечтания.'><div class=area style='position:absolute; width:25px; height:18px; left:464px; top:235px'></div></a>
<a  href='build-rfmap2.php?t_name=Протестантизм' title='Протестантизм
- Новая трактовка Библии (лютеранство, кальвинизм).'><div class=area style='position:absolute; width:39px; height:18px; left:921px; top:311px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Протестантизм' title='Протестантизм
- Новая трактовка Библии (лютеранство, кальвинизм).'><div class=area style='position:absolute; width:40px; height:18px; left:881px; top:311px'></div></a>
<a  href='build-rfmap2.php?t_name=Материалистический атеизм' title='Материалистический атеизм
- Отказ от существования бога.'><div class=area style='position:absolute; width:22px; height:17px; left:195px; top:324px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Материалистический атеизм' title='Материалистический атеизм
- Отказ от существования бога.'><div class=area style='position:absolute; width:23px; height:17px; left:172px; top:324px'></div></a>
<a  href='build-rfmap2.php?t_name=Деизм' title='
- Бог - первопричина мира, но дальше на развитие природы он не влияет.'><div class=area style='position:absolute; width:21px; height:17px; left:260px; top:396px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Деизм' title='
- Бог - первопричина мира, но дальше на развитие природы он не влияет.'><div class=area style='position:absolute; width:21px; height:17px; left:239px; top:396px'></div></a>
<a  href='build-rfmap2.php?t_name=Экзистенциализм' title='Экзистенциализм
- Уникальность, иррациональность бытия человека. Преодоление человеком своей сущности, акцент на глубине эмоциональной природы.'><div class=area style='position:absolute; width:39px; height:18px; left:1083px; top:465px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Экзистенциализм' title='Экзистенциализм
- Уникальность, иррациональность бытия человека. Преодоление человеком своей сущности, акцент на глубине эмоциональной природы.'><div class=area style='position:absolute; width:40px; height:18px; left:1043px; top:465px'></div></a>
<a  href='build-rfmap2.php?t_name=Позитивизм' title='Позитивизм
- Фундаментальное значение конкретного, основанного на опыте, проверяемого и практически эффективного («позитивного») знания.'><div class=area style='position:absolute; width:30px; height:18px; left:1233px; top:454px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Позитивизм' title='Позитивизм
- Фундаментальное значение конкретного, основанного на опыте, проверяемого и практически эффективного («позитивного») знания.'><div class=area style='position:absolute; width:30px; height:18px; left:1203px; top:454px'></div></a>
<a  href='build-rfmap2.php?t_name=Постпозитивизм' title='Постпозитивизм
- Критика получения объективного знания из опыта.'><div class=area style='position:absolute; width:42px; height:18px; left:336px; top:677px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Постпозитивизм' title='Постпозитивизм
- Критика получения объективного знания из опыта.'><div class=area style='position:absolute; width:42px; height:18px; left:294px; top:677px'></div></a>
<a  href='build-rfmap2.php?t_name=Прагматизм' title='Прагматизм
- Качество идей и объектов определяется исключительно их практическими эффектами.'><div class=area style='position:absolute; width:33px; height:18px; left:1405px; top:547px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Прагматизм' title='Прагматизм
- Качество идей и объектов определяется исключительно их практическими эффектами.'><div class=area style='position:absolute; width:34px; height:18px; left:1371px; top:547px'></div></a>
<a  href='build-rfmap2.php?t_name=Философия жизни' title='Философия жизни
- Иррационализм.'><div class=area style='position:absolute; width:35px; height:17px; left:1309px; top:454px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Философия жизни' title='Философия жизни
- Иррационализм.'><div class=area style='position:absolute; width:36px; height:17px; left:1273px; top:454px'></div></a>
<a  href='build-rfmap2.php?t_name=Психоанализ' title='Психоанализ
- Выявление и анализ вытесненных, травмирующих переживаний, неисполненных желаний и др. из сознания в бессознательное.'><div class=area style='position:absolute; width:25px; height:17px; left:1465px; top:608px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Психоанализ' title='Психоанализ
- Выявление и анализ вытесненных, травмирующих переживаний, неисполненных желаний и др. из сознания в бессознательное.'><div class=area style='position:absolute; width:26px; height:17px; left:1439px; top:608px'></div></a>
<a  href='build-rfmap2.php?t_name=Атеистический экзистенциализм' title='Атеистический экзистенциализм
- Позиция человека, для которого христианский Бог не обладает ценностью.'><div class=area style='position:absolute; width:40px; height:18px; left:1181px; top:622px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Атеистический экзистенциализм' title='Атеистический экзистенциализм
- Позиция человека, для которого христианский Бог не обладает ценностью.'><div class=area style='position:absolute; width:40px; height:18px; left:1141px; top:622px'></div></a>
<a  href='build-rfmap2.php?t_name=Научный космизм' title='Научный космизм
- Космос - структурно-организованный упорядоченный мир. Человек - «гражданин мира».'><div class=area style='position:absolute; width:31px; height:18px; left:57px; top:603px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Научный космизм' title='Научный космизм
- Космос - структурно-организованный упорядоченный мир. Человек - «гражданин мира».'><div class=area style='position:absolute; width:32px; height:18px; left:25px; top:603px'></div></a>
<a  href='build-rfmap2.php?t_name=Западничество' title='Западничество
- В отличие от славянофилов признавали западноевропейский капиталистический путь развития приемлемым для России.'><div class=area style='position:absolute; width:32px; height:17px; left:404px; top:471px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Западничество' title='Западничество
- В отличие от славянофилов признавали западноевропейский капиталистический путь развития приемлемым для России.'><div class=area style='position:absolute; width:32px; height:17px; left:372px; top:471px'></div></a>
<a  href='build-rfmap2.php?t_name=Христианство' title='Христианство
- Авраамическая мировая религия, основанная на жизни и учении Иисуса Христа, описанных в Новом Завете.'><div class=area style='position:absolute; width:33px; height:18px; left:763px; top:660px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Христианство' title='Христианство
- Авраамическая мировая религия, основанная на жизни и учении Иисуса Христа, описанных в Новом Завете.'><div class=area style='position:absolute; width:34px; height:18px; left:729px; top:660px'></div></a>
<a  href='build-rfmap2.php?t_name=Религиозный экзистенциализм' title='Религиозный экзистенциализм
- Личность соотносительна миру и Богу и определяет себя но отношению к Богу.'><div class=area style='position:absolute; width:29px; height:18px; left:997px; top:566px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Религиозный экзистенциализм' title='Религиозный экзистенциализм
- Личность соотносительна миру и Богу и определяет себя но отношению к Богу.'><div class=area style='position:absolute; width:29px; height:18px; left:968px; top:566px'></div></a>
<a  href='build-rfmap2.php?t_name=Аналитическая философия' title='Аналитическая философия
- Логика, лингвистический анализ'><div class=area style='position:absolute; width:33px; height:18px; left:232px; top:622px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Аналитическая философия' title='Аналитическая философия
- Логика, лингвистический анализ'><div class=area style='position:absolute; width:34px; height:18px; left:198px; top:622px'></div></a>
<a  href='build-rfmap2.php?t_name=Неотомизм' title='Неотомизм
- Развитие томизма (христианская адаптация аристотелизма). Дуализм бытия (Бог) и сущего (Природа). Бог - первопричина, вещи - соединение материи и формы, процессы — переход потенции в актуальность.'><div class=area style='position:absolute; width:40px; height:17px; left:860px; top:610px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Неотомизм' title='Неотомизм
- Развитие томизма (христианская адаптация аристотелизма). Дуализм бытия (Бог) и сущего (Природа). Бог - первопричина, вещи - соединение материи и формы, процессы — переход потенции в актуальность.'><div class=area style='position:absolute; width:40px; height:17px; left:820px; top:610px'></div></a>
<a  href='build-rfmap2.php?t_name=Анархизм' title='
- Ликвидация любого принудительного управления и власти человека над человеком.'><div class=area style='position:absolute; width:30px; height:17px; left:512px; top:515px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Анархизм' title='
- Ликвидация любого принудительного управления и власти человека над человеком.'><div class=area style='position:absolute; width:30px; height:17px; left:482px; top:515px'></div></a>
<a  href='build-rfmap2.php?t_name=Феноменология' title='Феноменология
- Отказ от любых идеализаций, описание спонтанно-смысловой жизни сознания. Неразрывность и взаимная несводимость, нередуцируемость сознания, человеческого бытия, личности и предметного мира.'><div class=area style='position:absolute; width:34px; height:17px; left:1535px; top:597px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Феноменология' title='Феноменология
- Отказ от любых идеализаций, описание спонтанно-смысловой жизни сознания. Неразрывность и взаимная несводимость, нередуцируемость сознания, человеческого бытия, личности и предметного мира.'><div class=area style='position:absolute; width:34px; height:17px; left:1501px; top:597px'></div></a>
<a  href='build-rfmap2.php?t_name=Тоталитаризм' title='Тоталитаризм
- Полный контроль государства над всеми аспектами жизни общества и человека.'><div class=area style='position:absolute; width:35px; height:18px; left:665px; top:681px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Тоталитаризм' title='Тоталитаризм
- Полный контроль государства над всеми аспектами жизни общества и человека.'><div class=area style='position:absolute; width:36px; height:18px; left:629px; top:681px'></div></a>
<a  href='build-rfmap2.php?t_name=Постмодернизм' title='Постмодернизм
- Постструктурализм: главное в структуре — то, что выводит за её пределы.'><div class=area style='position:absolute; width:32px; height:17px; left:498px; top:689px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Постмодернизм' title='Постмодернизм
- Постструктурализм: главное в структуре — то, что выводит за её пределы.'><div class=area style='position:absolute; width:33px; height:17px; left:465px; top:689px'></div></a>
<a  href='build-rfmap2.php?t_name=Структурализм' title='Структурализм
- Раскрытие моделей, лежащих в основе социальных и культурных явлений.'><div class=area style='position:absolute; width:38px; height:18px; left:762px; top:801.25px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Структурализм' title='Структурализм
- Раскрытие моделей, лежащих в основе социальных и культурных явлений.'><div class=area style='position:absolute; width:39px; height:18px; left:723px; top:801.25px'></div></a>
<a  href='build-rfmap2.php?t_name=Герменевтика' title='Герменевтика
- Теория интерпретации литературных текстов.'><div class=area style='position:absolute; width:33px; height:17px; left:433px; top:736px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Герменевтика' title='Герменевтика
- Теория интерпретации литературных текстов.'><div class=area style='position:absolute; width:33px; height:17px; left:400px; top:736px'></div></a>
<a  href='build-rfmap2.php?t_name=Философская литература' title='Философская литература'><div class=area style='position:absolute; width:29px; height:18px; left:1703px; top:53.68px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Философская литература' title='Философская литература'><div class=area style='position:absolute; width:29px; height:18px; left:1674px; top:53.68px'></div></a>
<a  href='build-rfmap2.php?t_name=Восточная_философия средневековья' title='Восточная_философия средневековья'><div class=area style='position:absolute; width:79px; height:18px; left:1514px; top:179px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Восточная_философия средневековья' title='Восточная_философия средневековья'><div class=area style='position:absolute; width:79px; height:18px; left:1435px; top:179px'></div></a>
<a  href='build-rfmap2.php?t_name=Йога' title='Йога'><div class=area style='position:absolute; width:17px; height:17px; left:1584px; top:77px'></div></a>
<a  href='http://ru.wikipedia.org/w/index.php?search=Йога' title='Йога'><div class=area style='position:absolute; width:17px; height:17px; left:1567px; top:77px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1706&a_id=9212&y=-750' title='Гесиод

Мифология, 
Генеалогический эпос, Дидактический эпос
GRC
-750--720
MY: -20/0
MX: 1706
QN: 9'><div class=area style='position:absolute; width:21px; height:20px; left:1725px; top:24px'></div></a>
<a  href='build-rfmap2.php?mp=1706&a_id=1883&y=-750' title='Гесиод

Мифология, 
Генеалогический эпос, Дидактический эпос
GRC
-750--720
MY: -20/0
MX: 1706
QN: 9'><div class=area style='position:absolute; width:20px; height:20px; left:1746px; top:24px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1658&a_id=9229&y=-700' title='Гомер

Мифология, 
Героический эпос
GRC
-700--800
MY: -20/0
MX: 1658
QN: 20'><div class=area style='position:absolute; width:20px; height:20px; left:1677px; top:22px'></div></a>
<a  href='build-rfmap2.php?mp=1658&a_id=1921&y=-700' title='Гомер

Мифология, 
Героический эпос
GRC
-700--800
MY: -20/0
MX: 1658
QN: 20'><div class=area style='position:absolute; width:20px; height:20px; left:1697px; top:22px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1427&a_id=14317&y=-600' title='Лао-Цзы

Даосизм, 
Этика
CHN
-600--550
MY: 0/0
MX: 1427
QN: 83'><div class=area style='position:absolute; width:18px; height:20px; left:1446px; top:43px'></div></a>
<a  href='build-rfmap2.php?mp=1427&a_id=3887&y=-600' title='Лао-Цзы

Даосизм, 
Этика
CHN
-600--550
MY: 0/0
MX: 1427
QN: 83'><div class=area style='position:absolute; width:18px; height:20px; left:1464px; top:43px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=935&a_id=24764&y=-570' title='Ксенофан Колофонский

Элейцы, 
Досократики, Монотеизм, Натурфилософия, Поэзия, Скептицизм
GRC
-570--480
MY: 0/-43
MX: 935
QN: 4'><div class=area style='position:absolute; width:35px; height:20px; left:954px; top:43px'></div></a>
<a  href='build-rfmap2.php?mp=935&a_id=3830&y=-570' title='Ксенофан Колофонский

Элейцы, 
Досократики, Монотеизм, Натурфилософия, Поэзия, Скептицизм
GRC
-570--480
MY: 0/-43
MX: 935
QN: 4'><div class=area style='position:absolute; width:34px; height:20px; left:989px; top:43px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=635&a_id=18540&y=-570' title='Пифагор

Пифагорейцы, 
Астрономия, Досократики, Мистицизм, Натурфилософия, Объективный идеализм
GRC
-570--490
MY: -15/0
MX: 635
QN: 55'><div class=area style='position:absolute; width:34px; height:20px; left:654px; top:47px'></div></a>
<a  href='build-rfmap2.php?mp=635&a_id=5393&y=-570' title='Пифагор

Пифагорейцы, 
Астрономия, Досократики, Мистицизм, Натурфилософия, Объективный идеализм
GRC
-570--490
MY: -15/0
MX: 635
QN: 55'><div class=area style='position:absolute; width:34px; height:20px; left:688px; top:47px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1550&a_id=2232&y=-563' title='Сиддхартха Гаутама (Будда)

Буддизм
IND
-563--623
MY: 0/0
MX: 1550
QN: 110'><div class=area style='position:absolute; width:25px; height:20px; left:1569px; top:40px'></div></a>
<a  href='build-rfmap2.php?mp=1550&a_id=6126&y=-563' title='Сиддхартха Гаутама (Будда)

Буддизм
IND
-563--623
MY: 0/0
MX: 1550
QN: 110'><div class=area style='position:absolute; width:25px; height:20px; left:1594px; top:40px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1342&a_id=3567&y=-551' title='Конфуций

Конфуцианство, 
Социальная философия, Этика
CHN
-551--479
MY: 0/0
MX: 1342
QN: 149'><div class=area style='position:absolute; width:32px; height:20px; left:1361px; top:51px'></div></a>
<a  href='build-rfmap2.php?mp=1342&a_id=3755&y=-551' title='Конфуций

Конфуцианство, 
Социальная философия, Этика
CHN
-551--479
MY: 0/0
MX: 1342
QN: 149'><div class=area style='position:absolute; width:31px; height:20px; left:1393px; top:51px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=376&a_id=9194&y=-544' title='Гераклит

Древний материализм, 
Диалектика, Досократики
GRC
-544--483
MY: 0/-1
MX: 376
QN: 37'><div class=area style='position:absolute; width:31px; height:20px; left:395px; top:51px'></div></a>
<a  href='build-rfmap2.php?mp=376&a_id=1850&y=-544' title='Гераклит

Древний материализм, 
Диалектика, Досократики
GRC
-544--483
MY: 0/-1
MX: 376
QN: 37'><div class=area style='position:absolute; width:30px; height:20px; left:426px; top:51px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=376&a_id=107&y=-500' title='Анаксагор Клазоменский

Древний материализм, Физики, 
Астрономия, Досократики
GRC
-500--428
MY: 0/104
MX: 376
QN: 10'><div class=area style='position:absolute; width:34px; height:20px; left:395px; top:73px'></div></a>
<a  href='build-rfmap2.php?mp=376&a_id=574&y=-500' title='Анаксагор Клазоменский

Древний материализм, Физики, 
Астрономия, Досократики
GRC
-500--428
MY: 0/104
MX: 376
QN: 10'><div class=area style='position:absolute; width:33px; height:20px; left:429px; top:73px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=453&a_id=7504&y=-490' title='Эмпедокл Акрагантский

Древний материализм, Плюрализм, 
Демократия, Досократики, Физики
GRC
-490--430
MY: 30/0
MX: 453
QN: 1'><div class=area style='position:absolute; width:33px; height:20px; left:472px; top:63px'></div></a>
<a  href='build-rfmap2.php?mp=453&a_id=7558&y=-490' title='Эмпедокл Акрагантский

Древний материализм, Плюрализм, 
Демократия, Досократики, Физики
GRC
-490--430
MY: 30/0
MX: 453
QN: 1'><div class=area style='position:absolute; width:32px; height:20px; left:505px; top:63px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1025&a_id=18737&y=-481' title='Протагор

Сенсуализм, Софизм, 
Досократики, Материализм, Скептицизм
GRC
-481--411
MY: 0/0
MX: 1025
QN: 7'><div class=area style='position:absolute; width:30px; height:20px; left:1044px; top:61px'></div></a>
<a  href='build-rfmap2.php?mp=1025&a_id=5472&y=-481' title='Протагор

Сенсуализм, Софизм, 
Досократики, Материализм, Скептицизм
GRC
-481--411
MY: 0/0
MX: 1025
QN: 7'><div class=area style='position:absolute; width:30px; height:20px; left:1074px; top:61px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=796&a_id=21143&y=-469' title='Сократ

Антропологизм, Классическая античность, 
Диалектика, Рационализм, Сократики, Субъективный идеализм, Этика
GRC
-469--399
MY: 0/0
MX: 796
QN: 74'><div class=area style='position:absolute; width:28px; height:20px; left:815px; top:62px'></div></a>
<a  href='build-rfmap2.php?mp=796&a_id=6176&y=-469' title='Сократ

Антропологизм, Классическая античность, 
Диалектика, Рационализм, Сократики, Субъективный идеализм, Этика
GRC
-469--399
MY: 0/0
MX: 796
QN: 74'><div class=area style='position:absolute; width:27px; height:20px; left:843px; top:62px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=535&a_id=5064&y=-460' title='Демокрит

Древний материализм, Физики, 
Астрономия, Атомизм, Детерминизм, Досократики, Натурфилософия, Ученые
GRC
-460--370
MY: -50/0
MX: 535
QN: 73'><div class=area style='position:absolute; width:34px; height:20px; left:554px; top:58px'></div></a>
<a  href='build-rfmap2.php?mp=535&a_id=2067&y=-460' title='Демокрит

Древний материализм, Физики, 
Астрономия, Атомизм, Детерминизм, Досократики, Натурфилософия, Ученые
GRC
-460--370
MY: -50/0
MX: 535
QN: 73'><div class=area style='position:absolute; width:34px; height:20px; left:588px; top:58px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=225&a_id=555&y=-444' title='Антисфен

Кинизм, 
Этика
GRC
-444--371
MY: 0/-18
MX: 225
QN: 27'><div class=area style='position:absolute; width:36px; height:20px; left:244px; top:63px'></div></a>
<a  href='build-rfmap2.php?mp=225&a_id=804&y=-444' title='Антисфен

Кинизм, 
Этика
GRC
-444--371
MY: 0/-18
MX: 225
QN: 27'><div class=area style='position:absolute; width:36px; height:20px; left:280px; top:63px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=729&a_id=18523&y=-427' title='Платон

Платонизм, 
Атомизм, Объективный идеализм, Политика, Эстетика
GRC
-427--347
MY: 0/-3
MX: 729
QN: 62'><div class=area style='position:absolute; width:18px; height:20px; left:748px; top:68px'></div></a>
<a  href='build-rfmap2.php?mp=729&a_id=5395&y=-427' title='Платон

Платонизм, 
Атомизм, Объективный идеализм, Политика, Эстетика
GRC
-427--347
MY: 0/-3
MX: 729
QN: 62'><div class=area style='position:absolute; width:18px; height:20px; left:766px; top:68px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=302&a_id=5101&y=-412' title='Диоген Синопский

Кинизм, 
Материализм
GRC
-412--323
MY: 0/0
MX: 302
QN: 18'><div class=area style='position:absolute; width:27px; height:20px; left:321px; top:71px'></div></a>
<a  href='build-rfmap2.php?mp=302&a_id=2634&y=-412' title='Диоген Синопский

Кинизм, 
Материализм
GRC
-412--323
MY: 0/0
MX: 302
QN: 18'><div class=area style='position:absolute; width:26px; height:20px; left:348px; top:71px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=635&a_id=172&y=-384' title='Аристотель

Аристотелизм, Логика, 
Метафизика, Эмпиризм, Этика
GRC
-384--322
MY: 80/-65
MX: 635
QN: 126'><div class=area style='position:absolute; width:27px; height:20px; left:654px; top:76px'></div></a>
<a  href='build-rfmap2.php?mp=635&a_id=868&y=-384' title='Аристотель

Аристотелизм, Логика, 
Метафизика, Эмпиризм, Этика
GRC
-384--322
MY: 80/-65
MX: 635
QN: 126'><div class=area style='position:absolute; width:27px; height:20px; left:681px; top:76px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1342&a_id=15569&y=-371' title='Мэн-цзы

Конфуцианство
CHN
-371--289
MY: 0/0
MX: 1342
QN: 2'><div class=area style='position:absolute; width:24px; height:20px; left:1361px; top:77px'></div></a>
<a  href='build-rfmap2.php?mp=1342&a_id=4766&y=-371' title='Мэн-цзы

Конфуцианство
CHN
-371--289
MY: 0/0
MX: 1342
QN: 2'><div class=area style='position:absolute; width:23px; height:20px; left:1385px; top:77px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=635&a_id=23095&y=-370' title='Теофраст

Аристотелизм, 
Ботаника
GRC
-370--285
MY: 80/66
MX: 635
QN: 12'><div class=area style='position:absolute; width:37px; height:20px; left:654px; top:98px'></div></a>
<a  href='build-rfmap2.php?mp=635&a_id=6425&y=-370' title='Теофраст

Аристотелизм, 
Ботаника
GRC
-370--285
MY: 80/66
MX: 635
QN: 12'><div class=area style='position:absolute; width:36px; height:20px; left:691px; top:98px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=535&a_id=6612&y=-341' title='Эпикур

Древний материализм, Сенсуализм, Эпикурейство, 
Атараксия, Атомизм, Гедонизм, Гуманизм, Натурфилософия
GRC
-341--271
MY: 30/0
MX: 535
QN: 41'><div class=area style='position:absolute; width:28px; height:20px; left:554px; top:84px'></div></a>
<a  href='build-rfmap2.php?mp=535&a_id=7603&y=-341' title='Эпикур

Древний материализм, Сенсуализм, Эпикурейство, 
Атараксия, Атомизм, Гедонизм, Гуманизм, Натурфилософия
GRC
-341--271
MY: 30/0
MX: 535
QN: 41'><div class=area style='position:absolute; width:27px; height:20px; left:582px; top:84px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1216&a_id=9083&y=-280' title='Хань Фэй

Деспотизм, Легизм, 
Политика
CHN
-280--233
MY: 0/0
MX: 1216
QN: 1'><div class=area style='position:absolute; width:23px; height:20px; left:1235px; top:87px'></div></a>
<a  href='build-rfmap2.php?mp=1216&a_id=7032&y=-280' title='Хань Фэй

Деспотизм, Легизм, 
Политика
CHN
-280--233
MY: 0/0
MX: 1216
QN: 1'><div class=area style='position:absolute; width:23px; height:20px; left:1258px; top:87px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=126&a_id=4330&y=-279' title='Хрисипп Солийский

Стоицизм, 
Логика, Натурфилософия
GRC
-279--206
MY: 0/0
MX: 126
QN: 4'><div class=area style='position:absolute; width:31px; height:20px; left:145px; top:89px'></div></a>
<a  href='build-rfmap2.php?mp=126&a_id=7124&y=-279' title='Хрисипп Солийский

Стоицизм, 
Логика, Натурфилософия
GRC
-279--206
MY: 0/0
MX: 126
QN: 4'><div class=area style='position:absolute; width:31px; height:20px; left:176px; top:89px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1552&a_id=19155&y=-200' title='Патанджали

Индуизм, Йога
IND
-200--120
MY: 0/0
MX: 1552
QN: 8'><div class=area style='position:absolute; width:24px; height:20px; left:1571px; top:101px'></div></a>
<a  href='build-rfmap2.php?mp=1552&a_id=5269&y=-200' title='Патанджали

Индуизм, Йога
IND
-200--120
MY: 0/0
MX: 1552
QN: 8'><div class=area style='position:absolute; width:23px; height:20px; left:1595px; top:101px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=147&a_id=15482&y=-106' title='Марк Туллий Цицерон

Стоицизм, Эклектизм
ROM
-106--43
MY: 0/0
MX: 147
QN: 153'><div class=area style='position:absolute; width:23px; height:20px; left:166px; top:113px'></div></a>
<a  href='build-rfmap2.php?mp=147&a_id=4431&y=-106' title='Марк Туллий Цицерон

Стоицизм, Эклектизм
ROM
-106--43
MY: 0/0
MX: 147
QN: 153'><div class=area style='position:absolute; width:23px; height:20px; left:189px; top:113px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=535&a_id=14481&y=-94' title='Тит Лукреций Кар

Атомизм, Эпикурейство, 
Материализм, Метафизика, Эстетика, Этика
ROM
-94--55
MY: 0/0
MX: 535
QN: 10'><div class=area style='position:absolute; width:25px; height:20px; left:554px; top:113px'></div></a>
<a  href='build-rfmap2.php?mp=535&a_id=6482&y=-94' title='Тит Лукреций Кар

Атомизм, Эпикурейство, 
Материализм, Метафизика, Эстетика, Этика
ROM
-94--55
MY: 0/0
MX: 535
QN: 10'><div class=area style='position:absolute; width:25px; height:20px; left:579px; top:113px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=729&a_id=18712&y=-20' title='Филон Александрийский

Иудаизм, Платонизм, 
Герменевтика, Стоицизм
ISR
-20--50
MY: 30/0
MX: 729
QN: 1'><div class=area style='position:absolute; width:16px; height:20px; left:748px; top:122px'></div></a>
<a  href='build-rfmap2.php?mp=729&a_id=6848&y=-20' title='Филон Александрийский

Иудаизм, Платонизм, 
Герменевтика, Стоицизм
ISR
-20--50
MY: 30/0
MX: 729
QN: 1'><div class=area style='position:absolute; width:15px; height:20px; left:764px; top:122px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=157&a_id=14478&y=-4' title='Луций Анней Сенека

Стоицизм
ROM
-4-65
MY: 110/0
MX: 157
QN: 149'><div class=area style='position:absolute; width:22px; height:20px; left:176px; top:143px'></div></a>
<a  href='build-rfmap2.php?mp=157&a_id=4162&y=-4' title='Луций Анней Сенека

Стоицизм
ROM
-4-65
MY: 110/0
MX: 157
QN: 149'><div class=area style='position:absolute; width:22px; height:20px; left:198px; top:143px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=787&a_id=18525&y=46' title='Плутарх

Неоплатонизм, 
Морализм, Эстетика
GRC
46-127
MY: 0/0
MX: 787
QN: 45'><div class=area style='position:absolute; width:26px; height:20px; left:806px; top:135px'></div></a>
<a  href='build-rfmap2.php?mp=787&a_id=5399&y=46' title='Плутарх

Неоплатонизм, 
Морализм, Эстетика
GRC
46-127
MY: 0/0
MX: 787
QN: 45'><div class=area style='position:absolute; width:26px; height:20px; left:832px; top:135px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=16&a_id=6611&y=55' title='Эпиктет

Стоицизм, 
Этика
GRC
55-135
MY: 0/-56
MX: 16
QN: 50'><div class=area style='position:absolute; width:25px; height:20px; left:35px; top:128px'></div></a>
<a  href='build-rfmap2.php?mp=16&a_id=7602&y=55' title='Эпиктет

Стоицизм, 
Этика
GRC
55-135
MY: 0/-56
MX: 16
QN: 50'><div class=area style='position:absolute; width:24px; height:20px; left:60px; top:128px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=79&a_id=15479&y=121' title='Марк Аврелий

Стоицизм
ROM
121-180
MY: 10/0
MX: 79
QN: 66'><div class=area style='position:absolute; width:23px; height:20px; left:98px; top:146px'></div></a>
<a  href='build-rfmap2.php?mp=79&a_id=4406&y=121' title='Марк Аврелий

Стоицизм
ROM
121-180
MY: 10/0
MX: 79
QN: 66'><div class=area style='position:absolute; width:23px; height:20px; left:121px; top:146px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=915&a_id=22666&y=160' title='Тертуллиан

Патристика, 
Ранняя патристика, Средневековье
ITA
160-225
MY: 0/0
MX: 915
QN: 3'><div class=area style='position:absolute; width:26px; height:20px; left:934px; top:150px'></div></a>
<a  href='build-rfmap2.php?mp=915&a_id=6437&y=160' title='Тертуллиан

Патристика, 
Ранняя патристика, Средневековье
ITA
160-225
MY: 0/0
MX: 915
QN: 3'><div class=area style='position:absolute; width:25px; height:20px; left:960px; top:150px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=729&a_id=19308&y=205' title='Плотин

Неоплатонизм, 
Идеализм, Эстетика, Этика
ROM
205-270
MY: 0/-54
MX: 729
QN: 4'><div class=area style='position:absolute; width:22px; height:20px; left:748px; top:149px'></div></a>
<a  href='build-rfmap2.php?mp=729&a_id=5398&y=205' title='Плотин

Неоплатонизм, 
Идеализм, Эстетика, Этика
ROM
205-270
MY: 0/-54
MX: 729
QN: 4'><div class=area style='position:absolute; width:22px; height:20px; left:770px; top:149px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1036&a_id=21034&y=354' title='Аврелий Августин

Патристика, 
Волюнтаризм, Зрелая патристика, Средневековье, Эстетика, Этика
ROM
354-430
MY: 0/0
MX: 1036
QN: 56'><div class=area style='position:absolute; width:47px; height:20px; left:1055px; top:178px'></div></a>
<a  href='build-rfmap2.php?mp=1036&a_id=58&y=354' title='Аврелий Августин

Патристика, 
Волюнтаризм, Зрелая патристика, Средневековье, Эстетика, Этика
ROM
354-430
MY: 0/0
MX: 1036
QN: 56'><div class=area style='position:absolute; width:47px; height:20px; left:1102px; top:178px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1158&a_id=2352&y=480' title='Аниций Манлий Торкват Северин Боэций

Аристотелизм, Неоплатонизм, Патристика, 
Поздняя патристика, Теология, Эклектизм
ROM
480-525
MY: 0/0
MX: 1158
QN: 4'><div class=area style='position:absolute; width:24px; height:20px; left:1177px; top:193px'></div></a>
<a  href='build-rfmap2.php?mp=1158&a_id=736&y=480' title='Аниций Манлий Торкват Северин Боэций

Аристотелизм, Неоплатонизм, Патристика, 
Поздняя патристика, Теология, Эклектизм
ROM
480-525
MY: 0/0
MX: 1158
QN: 4'><div class=area style='position:absolute; width:24px; height:20px; left:1201px; top:193px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1490&a_id=18245&y=1048' title='Омар Хайям

Агностицизм, 
Гедонизм, Материализм, Мистицизм, Скептицизм
PER
1048-1131
MY: 0/160
MX: 1490
QN: 392'><div class=area style='position:absolute; width:28px; height:20px; left:1509px; top:248px'></div></a>
<a  href='build-rfmap2.php?mp=1490&a_id=5168&y=1048' title='Омар Хайям

Агностицизм, 
Гедонизм, Материализм, Мистицизм, Скептицизм
PER
1048-1131
MY: 0/160
MX: 1490
QN: 392'><div class=area style='position:absolute; width:28px; height:20px; left:1537px; top:248px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=931&a_id=18655&y=1079' title='Пьер Абеляр

Номинализм, Схоластика, 
Концептуализм, Ранняя схоластика, Средневековье
FRA
1079-1142
MY: 10/0
MX: 931
QN: 20'><div class=area style='position:absolute; width:25px; height:20px; left:950px; top:238px'></div></a>
<a  href='build-rfmap2.php?mp=931&a_id=5482&y=1079' title='Пьер Абеляр

Номинализм, Схоластика, 
Концептуализм, Ранняя схоластика, Средневековье
FRA
1079-1142
MY: 10/0
MX: 931
QN: 20'><div class=area style='position:absolute; width:24px; height:20px; left:975px; top:238px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1565&a_id=15464&y=1135' title='Моисей Маймонид (Моше бен Маймон)

Натурфилософия, 
Восток, Средневековье
ISR
1135-1204
MY: 0/209
MX: 1565
QN: 6'><div class=area style='position:absolute; width:32px; height:20px; left:1584px; top:257px'></div></a>
<a  href='build-rfmap2.php?mp=1565&a_id=4702&y=1135' title='Моисей Маймонид (Моше бен Маймон)

Натурфилософия, 
Восток, Средневековье
ISR
1135-1204
MY: 0/209
MX: 1565
QN: 6'><div class=area style='position:absolute; width:32px; height:20px; left:1616px; top:257px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1657&a_id=19526&y=1207' title='Джалаладдин Руми

Философская литература
PER
1207-1273
MY: 0/-12
MX: 1657
QN: 67'><div class=area style='position:absolute; width:18px; height:20px; left:1676px; top:246px'></div></a>
<a  href='build-rfmap2.php?mp=1657&a_id=2109&y=1207' title='Джалаладдин Руми

Философская литература
PER
1207-1273
MY: 0/-12
MX: 1657
QN: 67'><div class=area style='position:absolute; width:17px; height:20px; left:1694px; top:246px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1080&a_id=20686&y=1214' title='Роджер Бэкон

Схоластика, 
Алхимия, Зрелая схоластика, Натурфилософия
ENG
1214-1294
MY: 0/0
MX: 1080
QN: 2'><div class=area style='position:absolute; width:19px; height:20px; left:1099px; top:248px'></div></a>
<a  href='build-rfmap2.php?mp=1080&a_id=5781&y=1214' title='Роджер Бэкон

Схоластика, 
Алхимия, Зрелая схоластика, Натурфилософия
ENG
1214-1294
MY: 0/0
MX: 1080
QN: 2'><div class=area style='position:absolute; width:19px; height:20px; left:1118px; top:248px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1010&a_id=22686&y=1225' title='Фома Аквинский

Реализм, Томизм, Схоластика, 
Средневековье, Алхимия, Натурфилософия, Католицизм, Зрелая схоластика, Аристотелизм, Этика
ITA
1225-1274
MY: 0/0
MX: 1010
QN: 10'><div class=area style='position:absolute; width:24px; height:20px; left:1029px; top:248px'></div></a>
<a  href='build-rfmap2.php?mp=1010&a_id=6865&y=1225' title='Фома Аквинский

Реализм, Томизм, Схоластика, 
Средневековье, Алхимия, Натурфилософия, Католицизм, Зрелая схоластика, Аристотелизм, Этика
ITA
1225-1274
MY: 0/0
MX: 1010
QN: 10'><div class=area style='position:absolute; width:23px; height:20px; left:1053px; top:248px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1317&a_id=15562&y=1260' title='Мейстер Экхарт

Мистицизм, 
Средневековье
DEU
1260-1328
MY: 0/0
MX: 1317
QN: 7'><div class=area style='position:absolute; width:22px; height:20px; left:1336px; top:251px'></div></a>
<a  href='build-rfmap2.php?mp=1317&a_id=4517&y=1260' title='Мейстер Экхарт

Мистицизм, 
Средневековье
DEU
1260-1328
MY: 0/0
MX: 1317
QN: 7'><div class=area style='position:absolute; width:22px; height:20px; left:1358px; top:251px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=710&a_id=17115&y=1433' title='Марсилио Фичино

Гуманизм, Неоплатонизм, 
Астрология, Возрождение, Оккультизм, Пантеизм
ITA
1433-1499
MY: 0/-57
MX: 710
QN: 2'><div class=area style='position:absolute; width:18px; height:20px; left:729px; top:259px'></div></a>
<a  href='build-rfmap2.php?mp=710&a_id=4460&y=1433' title='Марсилио Фичино

Гуманизм, Неоплатонизм, 
Астрология, Возрождение, Оккультизм, Пантеизм
ITA
1433-1499
MY: 0/-57
MX: 710
QN: 2'><div class=area style='position:absolute; width:18px; height:20px; left:747px; top:259px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=775&a_id=8998&y=1452' title='Джироламо Савонарола

Гуманизм, 
Аскетизм, Возрождение
ITA
1452-1498
MY: 0/0
MX: 775
QN: 10'><div class=area style='position:absolute; width:32px; height:20px; left:794px; top:269px'></div></a>
<a  href='build-rfmap2.php?mp=775&a_id=2309&y=1452' title='Джироламо Савонарола

Гуманизм, 
Аскетизм, Возрождение
ITA
1452-1498
MY: 0/0
MX: 775
QN: 10'><div class=area style='position:absolute; width:31px; height:20px; left:826px; top:269px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=8&a_id=14380&y=1452' title='Леонардо да Винчи

Гуманизм, 
Возрождение, Материализм, Механика, Натурфилософия
ITA
1452-1519
MY: 0/-19
MX: 8
QN: 73'><div class=area style='position:absolute; width:18px; height:20px; left:27px; top:267px'></div></a>
<a  href='build-rfmap2.php?mp=8&a_id=3966&y=1452' title='Леонардо да Винчи

Гуманизм, 
Возрождение, Материализм, Механика, Натурфилософия
ITA
1452-1519
MY: 0/-19
MX: 8
QN: 73'><div class=area style='position:absolute; width:17px; height:20px; left:45px; top:267px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=155&a_id=8784&y=1463' title='Джованни Пико делла Мирандола

Антропоцентризм, Гуманизм, 
Возрождение, Материализм, Неоплатонизм, Оккультизм
ITA
1463-1494
MY: 0/0
MX: 155
QN: 3'><div class=area style='position:absolute; width:28px; height:20px; left:174px; top:269px'></div></a>
<a  href='build-rfmap2.php?mp=155&a_id=2340&y=1463' title='Джованни Пико делла Мирандола

Антропоцентризм, Гуманизм, 
Возрождение, Материализм, Неоплатонизм, Оккультизм
ITA
1463-1494
MY: 0/0
MX: 155
QN: 3'><div class=area style='position:absolute; width:27px; height:20px; left:202px; top:269px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=611&a_id=17659&y=1469' title='Никколо Макиавелли

Гуманизм, 
Возрождение, Деспотизм, Этика
ITA
1469-1527
MY: 0/0
MX: 611
QN: 25'><div class=area style='position:absolute; width:33px; height:20px; left:630px; top:272px'></div></a>
<a  href='build-rfmap2.php?mp=611&a_id=4889&y=1469' title='Никколо Макиавелли

Гуманизм, 
Возрождение, Деспотизм, Этика
ITA
1469-1527
MY: 0/0
MX: 611
QN: 25'><div class=area style='position:absolute; width:33px; height:20px; left:663px; top:272px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=710&a_id=5078&y=1469' title='Эразм Роттердамский

Христианский гуманизм, 
Возрождение, Пацифизм
NLD
1469-1536
MY: 0/58
MX: 710
QN: 34'><div class=area style='position:absolute; width:27px; height:20px; left:729px; top:281px'></div></a>
<a  href='build-rfmap2.php?mp=710&a_id=7608&y=1469' title='Эразм Роттердамский

Христианский гуманизм, 
Возрождение, Пацифизм
NLD
1469-1536
MY: 0/58
MX: 710
QN: 34'><div class=area style='position:absolute; width:26px; height:20px; left:756px; top:281px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=446&a_id=22705&y=1478' title='Томас Мор

Гуманизм, Утопизм, 
Возрождение, Материализм, Социализм
ENG
1478-1535
MY: 0/-28
MX: 446
QN: 7'><div class=area style='position:absolute; width:17px; height:20px; left:465px; top:269px'></div></a>
<a  href='build-rfmap2.php?mp=446&a_id=6544&y=1478' title='Томас Мор

Гуманизм, Утопизм, 
Возрождение, Материализм, Социализм
ENG
1478-1535
MY: 0/-28
MX: 446
QN: 7'><div class=area style='position:absolute; width:17px; height:20px; left:482px; top:269px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=866&a_id=15534&y=1483' title='Мартин Лютер

Протестантизм, 
Лютеранство
DEU
1483-1546
MY: 0/0
MX: 866
QN: 16'><div class=area style='position:absolute; width:22px; height:20px; left:885px; top:274px'></div></a>
<a  href='build-rfmap2.php?mp=866&a_id=4469&y=1483' title='Мартин Лютер

Протестантизм, 
Лютеранство
DEU
1483-1546
MY: 0/0
MX: 866
QN: 16'><div class=area style='position:absolute; width:22px; height:20px; left:907px; top:274px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=291&a_id=18354&y=1493' title='Парацельс

Врач, 
Алхимия, Возрождение, Пантеизм
CHE
1493-1541
MY: 0/0
MX: 291
QN: 33'><div class=area style='position:absolute; width:30px; height:20px; left:310px; top:274px'></div></a>
<a  href='build-rfmap2.php?mp=291&a_id=5264&y=1493' title='Парацельс

Врач, 
Алхимия, Возрождение, Пантеизм
CHE
1493-1541
MY: 0/0
MX: 291
QN: 33'><div class=area style='position:absolute; width:30px; height:20px; left:340px; top:274px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=921&a_id=10242&y=1509' title='Жан Кальвин

Протестантизм, 
Кальвинизм
FRA
1509-1564
MY: 0/0
MX: 921
QN: 2'><div class=area style='position:absolute; width:19px; height:20px; left:940px; top:277px'></div></a>
<a  href='build-rfmap2.php?mp=921&a_id=3017&y=1509' title='Жан Кальвин

Протестантизм, 
Кальвинизм
FRA
1509-1564
MY: 0/0
MX: 921
QN: 2'><div class=area style='position:absolute; width:19px; height:20px; left:959px; top:277px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=536&a_id=15590&y=1533' title='Мишель де Монтень

Гуманизм, 
Аболиционизм, Возрождение, Этика
FRA
1533-1592
MY: 0/12
MX: 536
QN: 146'><div class=area style='position:absolute; width:33px; height:20px; left:555px; top:283px'></div></a>
<a  href='build-rfmap2.php?mp=536&a_id=4684&y=1533' title='Мишель де Монтень

Гуманизм, 
Аболиционизм, Возрождение, Этика
FRA
1533-1592
MY: 0/12
MX: 536
QN: 146'><div class=area style='position:absolute; width:32px; height:20px; left:588px; top:283px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=218&a_id=8181&y=1548' title='Джордано Бруно

Натурфилософия, Пантеизм, 
Астрология, Возрождение, Материализм, Поэзия, Эзотеризм
ITA
1548-1600
MY: 0/9
MX: 218
QN: 22'><div class=area style='position:absolute; width:19px; height:20px; left:237px; top:284px'></div></a>
<a  href='build-rfmap2.php?mp=218&a_id=2515&y=1548' title='Джордано Бруно

Натурфилософия, Пантеизм, 
Астрология, Возрождение, Материализм, Поэзия, Эзотеризм
ITA
1548-1600
MY: 0/9
MX: 218
QN: 22'><div class=area style='position:absolute; width:18px; height:20px; left:256px; top:284px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=83&a_id=7616&y=1561' title='Фрэнсис Бэкон

Механистический материализм, Эмпиризм, 
Новое время
ENG
1561-1626
MY: 0/-77
MX: 83
QN: 127'><div class=area style='position:absolute; width:21px; height:20px; left:102px; top:274px'></div></a>
<a  href='build-rfmap2.php?mp=83&a_id=6987&y=1561' title='Фрэнсис Бэкон

Механистический материализм, Эмпиризм, 
Новое время
ENG
1561-1626
MY: 0/-77
MX: 83
QN: 127'><div class=area style='position:absolute; width:21px; height:20px; left:123px; top:274px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=8&a_id=8062&y=1564' title='Галилео Галилей

Ученые, 
Возрождение, Материализм
ITA
1564-1642
MY: 0/19
MX: 8
QN: 17'><div class=area style='position:absolute; width:18px; height:20px; left:27px; top:289px'></div></a>
<a  href='build-rfmap2.php?mp=8&a_id=1686&y=1564' title='Галилео Галилей

Ученые, 
Возрождение, Материализм
ITA
1564-1642
MY: 0/19
MX: 8
QN: 17'><div class=area style='position:absolute; width:18px; height:20px; left:45px; top:289px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=446&a_id=23752&y=1568' title='Томмазо Кампанелла

Гуманизм, Утопизм, 
Возрождение, Материализм, Социализм, Христианство
ITA
1568-1639
MY: 0/29
MX: 446
QN: 2'><div class=area style='position:absolute; width:32px; height:20px; left:465px; top:291px'></div></a>
<a  href='build-rfmap2.php?mp=446&a_id=6566&y=1568' title='Томмазо Кампанелла

Гуманизм, Утопизм, 
Возрождение, Материализм, Социализм, Христианство
ITA
1568-1639
MY: 0/29
MX: 446
QN: 2'><div class=area style='position:absolute; width:32px; height:20px; left:497px; top:291px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1657&a_id=10247&y=1572' title='Джон Донн

Философская литература
ENG
1572-1631
MY: 0/23
MX: 1657
QN: 40'><div class=area style='position:absolute; width:21px; height:20px; left:1676px; top:290px'></div></a>
<a  href='build-rfmap2.php?mp=1657&a_id=2403&y=1572' title='Джон Донн

Философская литература
ENG
1572-1631
MY: 0/23
MX: 1657
QN: 40'><div class=area style='position:absolute; width:20px; height:20px; left:1697px; top:290px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1317&a_id=11133&y=1575' title='Якоб Бёме

Гуманизм, 
Возрождение, Гностицизм, Мистицизм, Оккультизм, Софиология, Теософия
DEU
1575-1624
MY: 0/0
MX: 1317
QN: 2'><div class=area style='position:absolute; width:21px; height:20px; left:1336px; top:286px'></div></a>
<a  href='build-rfmap2.php?mp=1317&a_id=7785&y=1575' title='Якоб Бёме

Гуманизм, 
Возрождение, Гностицизм, Мистицизм, Оккультизм, Софиология, Теософия
DEU
1575-1624
MY: 0/0
MX: 1317
QN: 2'><div class=area style='position:absolute; width:21px; height:20px; left:1357px; top:286px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=83&a_id=22696&y=1588' title='Томас Гоббс

Механистический материализм, Монархизм, Эмпиризм, 
История, Новое время, Политика, Этика
ENG
1588-1679
MY: 0/37
MX: 83
QN: 15'><div class=area style='position:absolute; width:23px; height:20px; left:102px; top:296px'></div></a>
<a  href='build-rfmap2.php?mp=83&a_id=6527&y=1588' title='Томас Гоббс

Механистический материализм, Монархизм, Эмпиризм, 
История, Новое время, Политика, Этика
ENG
1588-1679
MY: 0/37
MX: 83
QN: 15'><div class=area style='position:absolute; width:22px; height:20px; left:125px; top:296px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=374&a_id=19397&y=1596' title='Рене Декарт

Дуализм, Рационализм, 
Картезианство, Натурфилософия, Новое время, Субъективный идеализм, Ученые
FRA
1596-1650
MY: 0/-108
MX: 374
QN: 32'><div class=area style='position:absolute; width:28px; height:20px; left:393px; top:274px'></div></a>
<a  href='build-rfmap2.php?mp=374&a_id=5614&y=1596' title='Рене Декарт

Дуализм, Рационализм, 
Картезианство, Натурфилософия, Новое время, Субъективный идеализм, Ученые
FRA
1596-1650
MY: 0/-108
MX: 374
QN: 32'><div class=area style='position:absolute; width:27px; height:20px; left:421px; top:274px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=374&a_id=2168&y=1623' title='Блез Паскаль

Рационализм, Эмпиризм, 
Мистицизм, Новое время, Ученые, Этика
FRA
1623-1662
MY: 0/25
MX: 374
QN: 62'><div class=area style='position:absolute; width:21px; height:20px; left:393px; top:296px'></div></a>
<a  href='build-rfmap2.php?mp=374&a_id=1105&y=1623' title='Блез Паскаль

Рационализм, Эмпиризм, 
Мистицизм, Новое время, Ученые, Этика
FRA
1623-1662
MY: 0/25
MX: 374
QN: 62'><div class=area style='position:absolute; width:21px; height:20px; left:414px; top:296px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=374&a_id=2066&y=1632' title='Бенедикт Спиноза

Пантеизм, Рационализм, 
Детерминизм, Дуализм, Материализм, Метафизика, Новое время, Эпистемология, Этика
NLD
1632-1677
MY: 0/58
MX: 374
QN: 33'><div class=area style='position:absolute; width:26px; height:20px; left:393px; top:318px'></div></a>
<a  href='build-rfmap2.php?mp=374&a_id=1033&y=1632' title='Бенедикт Спиноза

Пантеизм, Рационализм, 
Детерминизм, Дуализм, Материализм, Метафизика, Новое время, Эпистемология, Этика
NLD
1632-1677
MY: 0/58
MX: 374
QN: 33'><div class=area style='position:absolute; width:25px; height:20px; left:419px; top:318px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=83&a_id=10260&y=1632' title='Джон Локк

Либерализм, Сенсуализм, Эмпиризм, 
Деизм, Материализм, Метафизика, Новое время, Политика, Эпистемология
ENG
1632-1704
MY: 0/45
MX: 83
QN: 35'><div class=area style='position:absolute; width:21px; height:20px; left:102px; top:318px'></div></a>
<a  href='build-rfmap2.php?mp=83&a_id=2432&y=1632' title='Джон Локк

Либерализм, Сенсуализм, Эмпиризм, 
Деизм, Материализм, Метафизика, Новое время, Политика, Эпистемология
ENG
1632-1704
MY: 0/45
MX: 83
QN: 35'><div class=area style='position:absolute; width:20px; height:20px; left:123px; top:318px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=374&a_id=8205&y=1646' title='Готфрид Вильгельм Лейбниц

Плюрализм, Рационализм, 
Деизм, История, Логика, Новое время, Объективный идеализм, Ученые, Этика
DEU
1646-1716
MY: 0/48
MX: 374
QN: 13'><div class=area style='position:absolute; width:21px; height:20px; left:393px; top:341px'></div></a>
<a  href='build-rfmap2.php?mp=374&a_id=1927&y=1646' title='Готфрид Вильгельм Лейбниц

Плюрализм, Рационализм, 
Деизм, История, Логика, Новое время, Объективный идеализм, Ученые, Этика
DEU
1646-1716
MY: 0/48
MX: 374
QN: 13'><div class=area style='position:absolute; width:20px; height:20px; left:414px; top:341px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1027&a_id=8096&y=1685' title='Джoрдж Беркли

Субъективный идеализм, 
Новое время, Сенсуализм, Спиритуализм
ENG
1685-1753
MY: 7/0
MX: 1027
QN: 1'><div class=area style='position:absolute; width:25px; height:20px; left:1046px; top:336px'></div></a>
<a  href='build-rfmap2.php?mp=1027&a_id=2104&y=1685' title='Джoрдж Беркли

Субъективный идеализм, 
Новое время, Сенсуализм, Спиритуализм
ENG
1685-1753
MY: 7/0
MX: 1027
QN: 1'><div class=area style='position:absolute; width:25px; height:20px; left:1071px; top:336px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=223&a_id=3457&y=1689' title='Шарль Луи де Монтескьё

Просвещение, 
Деизм, История, Натурализм, Политика, Этика
FRA
1689-1755
MY: 0/-4
MX: 223
QN: 40'><div class=area style='position:absolute; width:39px; height:20px; left:242px; top:325px'></div></a>
<a  href='build-rfmap2.php?mp=223&a_id=7267&y=1689' title='Шарль Луи де Монтескьё

Просвещение, 
Деизм, История, Натурализм, Политика, Этика
FRA
1689-1755
MY: 0/-4
MX: 223
QN: 40'><div class=area style='position:absolute; width:38px; height:20px; left:281px; top:325px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=223&a_id=24014&y=1694' title='Вольтер (Франсуа-Мари Аруэ)

Деизм, Просвещение, Просвещенный абсолютизм, 
Дуализм, Материализм, Монархизм
FRA
1694-1778
MY: 0/-2
MX: 223
QN: 155'><div class=area style='position:absolute; width:25px; height:20px; left:242px; top:348px'></div></a>
<a  href='build-rfmap2.php?mp=223&a_id=1633&y=1694' title='Вольтер (Франсуа-Мари Аруэ)

Деизм, Просвещение, Просвещенный абсолютизм, 
Дуализм, Материализм, Монархизм
FRA
1694-1778
MY: 0/-2
MX: 223
QN: 155'><div class=area style='position:absolute; width:25px; height:20px; left:267px; top:348px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1027&a_id=5024&y=1711' title='Дэвид Юм

Агностицизм, Субъективный идеализм, Эмпиризм, 
Номинализм, Просвещение, Новое время, Сенсуализм, Скептицизм, Деизм, Психологический атомизм
SCO
1711-1776
MY: 0/0
MX: 1027
QN: 21'><div class=area style='position:absolute; width:19px; height:20px; left:1046px; top:362px'></div></a>
<a  href='build-rfmap2.php?mp=1027&a_id=2813&y=1711' title='Дэвид Юм

Агностицизм, Субъективный идеализм, Эмпиризм, 
Номинализм, Просвещение, Новое время, Сенсуализм, Скептицизм, Деизм, Психологический атомизм
SCO
1711-1776
MY: 0/0
MX: 1027
QN: 21'><div class=area style='position:absolute; width:18px; height:20px; left:1065px; top:362px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=223&a_id=10177&y=1712' title='Жан-Жак Руссо

Просвещение, 
Деизм, Политика, Сентиментализм, Эстетика, Этика
FRA
1712-1778
MY: 0/5
MX: 223
QN: 65'><div class=area style='position:absolute; width:31px; height:20px; left:242px; top:370px'></div></a>
<a  href='build-rfmap2.php?mp=223&a_id=3047&y=1712' title='Жан-Жак Руссо

Просвещение, 
Деизм, Политика, Сентиментализм, Эстетика, Этика
FRA
1712-1778
MY: 0/5
MX: 223
QN: 65'><div class=area style='position:absolute; width:30px; height:20px; left:273px; top:370px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=156&a_id=5066&y=1713' title='Дени Дидро

Атеизм, Механистический материализм, Просвещение, 
Натурфилософия
FRA
1713-1784
MY: 0/-4
MX: 156
QN: 42'><div class=area style='position:absolute; width:24px; height:20px; left:175px; top:363px'></div></a>
<a  href='build-rfmap2.php?mp=156&a_id=2075&y=1713' title='Дени Дидро

Атеизм, Механистический материализм, Просвещение, 
Натурфилософия
FRA
1713-1784
MY: 0/-4
MX: 156
QN: 42'><div class=area style='position:absolute; width:23px; height:20px; left:199px; top:363px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=62&a_id=4543&y=1715' title='Клод Адриан Гельвеций

Механистический материализм, Утилитаризм, 
Натурфилософия, Эмпиризм, Этика
FRA
1715-1771
MY: 6/0
MX: 62
QN: 59'><div class=area style='position:absolute; width:29px; height:20px; left:81px; top:369px'></div></a>
<a  href='build-rfmap2.php?mp=62&a_id=3680&y=1715' title='Клод Адриан Гельвеций

Механистический материализм, Утилитаризм, 
Натурфилософия, Эмпиризм, Этика
FRA
1715-1771
MY: 6/0
MX: 62
QN: 59'><div class=area style='position:absolute; width:28px; height:20px; left:110px; top:369px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=156&a_id=2450&y=1723' title='Поль-Анри Гольбах

Механистический материализм, Просвещение, 
Атеизм, Натурфилософия
FRA
1723-1789
MY: 0/5
MX: 156
QN: 21'><div class=area style='position:absolute; width:24px; height:20px; left:175px; top:385px'></div></a>
<a  href='build-rfmap2.php?mp=156&a_id=5456&y=1723' title='Поль-Анри Гольбах

Механистический материализм, Просвещение, 
Атеизм, Натурфилософия
FRA
1723-1789
MY: 0/5
MX: 156
QN: 21'><div class=area style='position:absolute; width:23px; height:20px; left:199px; top:385px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=613&a_id=9912&y=1724' title='Иммануил Кант

Кантианство, Трансцендентальный идеализм, 
Дуализм, Субъективный идеализм
DEU
1724-1804
MY: 0/0
MX: 613
QN: 71'><div class=area style='position:absolute; width:17px; height:20px; left:632px; top:390px'></div></a>
<a  href='build-rfmap2.php?mp=613&a_id=3335&y=1724' title='Иммануил Кант

Кантианство, Трансцендентальный идеализм, 
Дуализм, Субъективный идеализм
DEU
1724-1804
MY: 0/0
MX: 613
QN: 71'><div class=area style='position:absolute; width:16px; height:20px; left:649px; top:390px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1657&a_id=10236&y=1749' title='Иоганн Вольфганг фон Гёте

Философская литература
DEU
1749-1832
MY: 0/-2
MX: 1657
QN: 214'><div class=area style='position:absolute; width:24px; height:20px; left:1676px; top:425px'></div></a>
<a  href='build-rfmap2.php?mp=1657&a_id=3362&y=1749' title='Иоганн Вольфганг фон Гёте

Философская литература
DEU
1749-1832
MY: 0/-2
MX: 1657
QN: 214'><div class=area style='position:absolute; width:23px; height:20px; left:1700px; top:425px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1657&a_id=7726&y=1759' title='Иоганн Кристоф Фридрих фон Шиллер

Романтизм, Философская литература, 
Буря и натиск, Эстетика, Этика
DEU
1759-1805
MY: 0/-9
MX: 1657
QN: 57'><div class=area style='position:absolute; width:21px; height:20px; left:1676px; top:402px'></div></a>
<a  href='build-rfmap2.php?mp=1657&a_id=3373&y=1759' title='Иоганн Кристоф Фридрих фон Шиллер

Романтизм, Философская литература, 
Буря и натиск, Эстетика, Этика
DEU
1759-1805
MY: 0/-9
MX: 1657
QN: 57'><div class=area style='position:absolute; width:21px; height:20px; left:1697px; top:402px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1027&a_id=11432&y=1762' title='Иоганн Готлиб Фихте

Субъективный идеализм, 
Волюнтаризм, Метафизика, Онтология, Этика
DEU
1762-1814
MY: 0/0
MX: 1027
QN: 9'><div class=area style='position:absolute; width:19px; height:20px; left:1046px; top:423px'></div></a>
<a  href='build-rfmap2.php?mp=1027&a_id=3367&y=1762' title='Иоганн Готлиб Фихте

Субъективный идеализм, 
Волюнтаризм, Метафизика, Онтология, Этика
DEU
1762-1814
MY: 0/0
MX: 1027
QN: 9'><div class=area style='position:absolute; width:18px; height:20px; left:1065px; top:423px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=613&a_id=8092&y=1770' title='Георг Вильгельм Фридрих Гегель

Абсолютный идеализм, Гегельянцы, Объективный идеализм, 
Волюнтаризм, Диалектика
DEU
1770-1831
MY: 0/0
MX: 613
QN: 44'><div class=area style='position:absolute; width:18px; height:20px; left:632px; top:442px'></div></a>
<a  href='build-rfmap2.php?mp=613&a_id=1821&y=1770' title='Георг Вильгельм Фридрих Гегель

Абсолютный идеализм, Гегельянцы, Объективный идеализм, 
Волюнтаризм, Диалектика
DEU
1770-1831
MY: 0/0
MX: 613
QN: 44'><div class=area style='position:absolute; width:18px; height:20px; left:650px; top:442px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1295&a_id=17767&y=1772' title='Новалис (Фридрих фон Харденберг)

Мистицизм, Романтизм, 
Монархизм, Поэзия, Эстетика
DEU
1772-1801
MY: 0/0
MX: 1295
QN: 8'><div class=area style='position:absolute; width:22px; height:20px; left:1314px; top:422px'></div></a>
<a  href='build-rfmap2.php?mp=1295&a_id=5022&y=1772' title='Новалис (Фридрих фон Харденберг)

Мистицизм, Романтизм, 
Монархизм, Поэзия, Эстетика
DEU
1772-1801
MY: 0/0
MX: 1295
QN: 8'><div class=area style='position:absolute; width:21px; height:20px; left:1336px; top:422px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1657&a_id=21062&y=1772' title='Сэмюэл Тэйлор Кольридж

Философская литература
ENG
1772-1834
MY: 0/1
MX: 1657
QN: 17'><div class=area style='position:absolute; width:28px; height:20px; left:1676px; top:448px'></div></a>
<a  href='build-rfmap2.php?mp=1657&a_id=6332&y=1772' title='Сэмюэл Тэйлор Кольридж

Философская литература
ENG
1772-1834
MY: 0/1
MX: 1657
QN: 17'><div class=area style='position:absolute; width:27px; height:20px; left:1704px; top:448px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1258&a_id=185&y=1788' title='Артур Шопенгауэр

Иррационализм, Философия жизни, 
Волюнтаризм, Эстетика, Романтизм, Пессимизм, Палингенезия, Монархизм, Мистицизм, Мизантропия, Этика
DEU
1788-1860
MY: 0/0
MX: 1258
QN: 199'><div class=area style='position:absolute; width:44px; height:20px; left:1277px; top:490px'></div></a>
<a  href='build-rfmap2.php?mp=1258&a_id=941&y=1788' title='Артур Шопенгауэр

Иррационализм, Философия жизни, 
Волюнтаризм, Эстетика, Романтизм, Пессимизм, Палингенезия, Монархизм, Мистицизм, Мизантропия, Этика
DEU
1788-1860
MY: 0/0
MX: 1258
QN: 199'><div class=area style='position:absolute; width:43px; height:20px; left:1321px; top:490px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1657&a_id=8769&y=1798' title='Джакомо Леопарди

Философская литература
ITA
1798-1837
MY: 0/-3
MX: 1657
QN: 14'><div class=area style='position:absolute; width:25px; height:20px; left:1676px; top:472px'></div></a>
<a  href='build-rfmap2.php?mp=1657&a_id=2108&y=1798' title='Джакомо Леопарди

Философская литература
ITA
1798-1837
MY: 0/-3
MX: 1657
QN: 14'><div class=area style='position:absolute; width:25px; height:20px; left:1701px; top:472px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1188&a_id=388&y=1798' title='Огюст Конт

Позитивизм, 
Политика, Социология, Эстетика
FRA
1798-1857
MY: 0/-4
MX: 1188
QN: 1'><div class=area style='position:absolute; width:20px; height:20px; left:1207px; top:490px'></div></a>
<a  href='build-rfmap2.php?mp=1188&a_id=5069&y=1798' title='Огюст Конт

Позитивизм, 
Политика, Социология, Эстетика
FRA
1798-1857
MY: 0/-4
MX: 1188
QN: 1'><div class=area style='position:absolute; width:19px; height:20px; left:1227px; top:490px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1657&a_id=19366&y=1803' title='Ральф Уолдо Эмерсон

Философская литература
USA
1803-1882
MY: 0/5
MX: 1657
QN: 108'><div class=area style='position:absolute; width:27px; height:20px; left:1676px; top:541px'></div></a>
<a  href='build-rfmap2.php?mp=1657&a_id=5555&y=1803' title='Ральф Уолдо Эмерсон

Философская литература
USA
1803-1882
MY: 0/5
MX: 1657
QN: 108'><div class=area style='position:absolute; width:27px; height:20px; left:1703px; top:541px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1188&a_id=10272&y=1806' title='Джон Стюарт Милль

Либерализм, Позитивизм, 
Утилитаризм
ENG
1806-1873
MY: 0/6
MX: 1188
QN: 11'><div class=area style='position:absolute; width:13px; height:20px; left:1207px; top:537px'></div></a>
<a  href='build-rfmap2.php?mp=1188&a_id=2469&y=1806' title='Джон Стюарт Милль

Либерализм, Позитивизм, 
Утилитаризм
ENG
1806-1873
MY: 0/6
MX: 1188
QN: 11'><div class=area style='position:absolute; width:13px; height:20px; left:1220px; top:537px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=356&a_id=659&y=1812' title='Александр Иванович Герцен

Западничество, 
Гегельянцы, Материализм
RUS
1812-1870
MY: 0/0
MX: 356
QN: 39'><div class=area style='position:absolute; width:22px; height:20px; left:375px; top:526px'></div></a>
<a  href='build-rfmap2.php?mp=356&a_id=245&y=1812' title='Александр Иванович Герцен

Западничество, 
Гегельянцы, Материализм
RUS
1812-1870
MY: 0/0
MX: 356
QN: 39'><div class=area style='position:absolute; width:21px; height:20px; left:397px; top:526px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1028&a_id=21152&y=1813' title='Сёрен Обю Кьеркегор

Философия жизни, 
Дуализм, Экзистенциализм
DNK
1813-1855
MY: 0/0
MX: 1028
QN: 25'><div class=area style='position:absolute; width:36px; height:20px; left:1047px; top:511px'></div></a>
<a  href='build-rfmap2.php?mp=1028&a_id=6109&y=1813' title='Сёрен Обю Кьеркегор

Философия жизни, 
Дуализм, Экзистенциализм
DNK
1813-1855
MY: 0/0
MX: 1028
QN: 25'><div class=area style='position:absolute; width:35px; height:20px; left:1083px; top:511px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=467&a_id=15609&y=1814' title='Михаил Александрович Бакунин

Анархизм, Народничество, Панславизм, 
Атеизм, Материализм
RUS
1814-1876
MY: 0/0
MX: 467
QN: 10'><div class=area style='position:absolute; width:23px; height:20px; left:486px; top:535px'></div></a>
<a  href='build-rfmap2.php?mp=467&a_id=4602&y=1814' title='Михаил Александрович Бакунин

Анархизм, Народничество, Панславизм, 
Атеизм, Материализм
RUS
1814-1876
MY: 0/0
MX: 467
QN: 10'><div class=area style='position:absolute; width:23px; height:20px; left:509px; top:535px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1657&a_id=9175&y=1817' title='Генри Дэвид Торо

Философская литература
USA
1817-1862
MY: 0/-3
MX: 1657
QN: 51'><div class=area style='position:absolute; width:26px; height:20px; left:1676px; top:518px'></div></a>
<a  href='build-rfmap2.php?mp=1657&a_id=1784&y=1817' title='Генри Дэвид Торо

Философская литература
USA
1817-1862
MY: 0/-3
MX: 1657
QN: 51'><div class=area style='position:absolute; width:26px; height:20px; left:1702px; top:518px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=105&a_id=13436&y=1818' title='Карл Маркс

Марксизм, 
Материализм
DEU
1818-1883
MY: 0/-2
MX: 105
QN: 80'><div class=area style='position:absolute; width:17px; height:20px; left:124px; top:543px'></div></a>
<a  href='build-rfmap2.php?mp=105&a_id=3527&y=1818' title='Карл Маркс

Марксизм, 
Материализм
DEU
1818-1883
MY: 0/-2
MX: 105
QN: 80'><div class=area style='position:absolute; width:17px; height:20px; left:141px; top:543px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1657&a_id=9207&y=1819' title='Герман Мелвилл

Философская литература
USA
1819-1891
MY: 0/15
MX: 1657
QN: 3'><div class=area style='position:absolute; width:22px; height:20px; left:1676px; top:587px'></div></a>
<a  href='build-rfmap2.php?mp=1657&a_id=1869&y=1819' title='Герман Мелвилл

Философская литература
USA
1819-1891
MY: 0/15
MX: 1657
QN: 3'><div class=area style='position:absolute; width:22px; height:20px; left:1698px; top:587px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1188&a_id=9202&y=1820' title='Герберт Спенсер

Либерализм, Позитивизм, Эволюционизм, 
Органическая школа, Этика
ENG
1820-1903
MY: 0/6
MX: 1188
QN: 12'><div class=area style='position:absolute; width:24px; height:20px; left:1207px; top:583px'></div></a>
<a  href='build-rfmap2.php?mp=1188&a_id=1857&y=1820' title='Герберт Спенсер

Либерализм, Позитивизм, Эволюционизм, 
Органическая школа, Этика
ENG
1820-1903
MY: 0/6
MX: 1188
QN: 12'><div class=area style='position:absolute; width:24px; height:20px; left:1231px; top:583px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=105&a_id=7724&y=1820' title='Фридрих Энгельс

Марксизм, 
Материализм
DEU
1820-1895
MY: 0/2
MX: 105
QN: 37'><div class=area style='position:absolute; width:20px; height:20px; left:124px; top:566px'></div></a>
<a  href='build-rfmap2.php?mp=105&a_id=6961&y=1820' title='Фридрих Энгельс

Марксизм, 
Материализм
DEU
1820-1895
MY: 0/2
MX: 105
QN: 37'><div class=area style='position:absolute; width:20px; height:20px; left:144px; top:566px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1657&a_id=7732&y=1821' title='Фёдор Михайлович Достоевский

Философская литература, 
Нравственность
RUS
1821-1881
MY: 0/8
MX: 1657
QN: 93'><div class=area style='position:absolute; width:35px; height:20px; left:1676px; top:564px'></div></a>
<a  href='build-rfmap2.php?mp=1657&a_id=6766&y=1821' title='Фёдор Михайлович Достоевский

Философская литература, 
Нравственность
RUS
1821-1881
MY: 0/8
MX: 1657
QN: 93'><div class=area style='position:absolute; width:35px; height:20px; left:1711px; top:564px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1188&a_id=9791&y=1828' title='Ипполит Тэн

Позитивизм, 
История, Эстетика
FRA
1828-1893
MY: 0/-4
MX: 1188
QN: 3'><div class=area style='position:absolute; width:19px; height:20px; left:1207px; top:560px'></div></a>
<a  href='build-rfmap2.php?mp=1188&a_id=3387&y=1828' title='Ипполит Тэн

Позитивизм, 
История, Эстетика
FRA
1828-1893
MY: 0/-4
MX: 1188
QN: 3'><div class=area style='position:absolute; width:19px; height:20px; left:1226px; top:560px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1657&a_id=14371&y=1828' title='Лев Николаевич Толстой

Философская литература, 
Нравственность
RUS
1828-1910
MY: 0/12
MX: 1657
QN: 171'><div class=area style='position:absolute; width:24px; height:20px; left:1676px; top:610px'></div></a>
<a  href='build-rfmap2.php?mp=1657&a_id=3929&y=1828' title='Лев Николаевич Толстой

Философская литература, 
Нравственность
RUS
1828-1910
MY: 0/12
MX: 1657
QN: 171'><div class=area style='position:absolute; width:24px; height:20px; left:1700px; top:610px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1355&a_id=3473&y=1839' title='Чарлз Пирс

Прагматизм, 
Логика
USA
1839-1914
MY: 0/5
MX: 1355
QN: 2'><div class=area style='position:absolute; width:20px; height:20px; left:1374px; top:612px'></div></a>
<a  href='build-rfmap2.php?mp=1355&a_id=7173&y=1839' title='Чарлз Пирс

Прагматизм, 
Логика
USA
1839-1914
MY: 0/5
MX: 1355
QN: 2'><div class=area style='position:absolute; width:19px; height:20px; left:1394px; top:612px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1355&a_id=24219&y=1842' title='Уильям Джеймс

Прагматизм, Функционализм
USA
1842-1910
MY: 0/-5
MX: 1355
QN: 27'><div class=area style='position:absolute; width:20px; height:20px; left:1374px; top:589px'></div></a>
<a  href='build-rfmap2.php?mp=1355&a_id=6641&y=1842' title='Уильям Джеймс

Прагматизм, Функционализм
USA
1842-1910
MY: 0/-5
MX: 1355
QN: 27'><div class=area style='position:absolute; width:19px; height:20px; left:1394px; top:589px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1258&a_id=7725&y=1844' title='Фридрих Вильгельм Ницше

Философия жизни, 
Волюнтаризм, Сверхчеловек
DEU
1844-1900
MY: 0/0
MX: 1258
QN: 219'><div class=area style='position:absolute; width:30px; height:20px; left:1277px; top:591px'></div></a>
<a  href='build-rfmap2.php?mp=1258&a_id=6950&y=1844' title='Фридрих Вильгельм Ницше

Философия жизни, 
Волюнтаризм, Сверхчеловек
DEU
1844-1900
MY: 0/0
MX: 1258
QN: 219'><div class=area style='position:absolute; width:30px; height:20px; left:1307px; top:591px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1423&a_id=21128&y=1856' title='Зигмунд Фрейд

Психоанализ
AUT
1856-1939
MY: 0/0
MX: 1423
QN: 105'><div class=area style='position:absolute; width:20px; height:20px; left:1442px; top:646px'></div></a>
<a  href='build-rfmap2.php?mp=1423&a_id=3160&y=1856' title='Зигмунд Фрейд

Психоанализ
AUT
1856-1939
MY: 0/0
MX: 1423
QN: 105'><div class=area style='position:absolute; width:19px; height:20px; left:1462px; top:646px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=9&a_id=13786&y=1857' title='Константин Эдуардович Циолковский

Научный космизм, 
Материализм
RUS
1857-1935
MY: 0/-1
MX: 9
QN: 15'><div class=area style='position:absolute; width:32px; height:20px; left:28px; top:640px'></div></a>
<a  href='build-rfmap2.php?mp=9&a_id=3752&y=1857' title='Константин Эдуардович Циолковский

Научный космизм, 
Материализм
RUS
1857-1935
MY: 0/-1
MX: 9
QN: 15'><div class=area style='position:absolute; width:31px; height:20px; left:60px; top:640px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1258&a_id=9157&y=1859' title='Анри Бергсон

Интуитивизм, Философия жизни, 
Волюнтаризм
FRA
1859-1941
MY: 0/-1
MX: 1258
QN: 7'><div class=area style='position:absolute; width:24px; height:20px; left:1277px; top:648px'></div></a>
<a  href='build-rfmap2.php?mp=1258&a_id=782&y=1859' title='Анри Бергсон

Интуитивизм, Философия жизни, 
Волюнтаризм
FRA
1859-1941
MY: 0/-1
MX: 1258
QN: 7'><div class=area style='position:absolute; width:24px; height:20px; left:1301px; top:648px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1355&a_id=10246&y=1859' title='Джон Дьюи

Прагматизм
USA
1859-1952
MY: 0/0
MX: 1355
QN: 4'><div class=area style='position:absolute; width:21px; height:20px; left:1374px; top:663px'></div></a>
<a  href='build-rfmap2.php?mp=1355&a_id=2405&y=1859' title='Джон Дьюи

Прагматизм
USA
1859-1952
MY: 0/0
MX: 1355
QN: 4'><div class=area style='position:absolute; width:21px; height:20px; left:1395px; top:663px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1485&a_id=6514&y=1859' title='Эдмунд Гуссерль

Феноменология, 
Субъективный идеализм
DEU
1859-1938
MY: 0/0
MX: 1485
QN: 4'><div class=area style='position:absolute; width:22px; height:20px; left:1504px; top:648px'></div></a>
<a  href='build-rfmap2.php?mp=1485&a_id=7411&y=1859' title='Эдмунд Гуссерль

Феноменология, 
Субъективный идеализм
DEU
1859-1938
MY: 0/0
MX: 1485
QN: 4'><div class=area style='position:absolute; width:22px; height:20px; left:1526px; top:648px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=536&a_id=8138&y=1863' title='Джордж Сантаяна

Гуманизм, 
Элитаризм, Эстетика, Этика
USA
1863-1952
MY: 0/5
MX: 536
QN: 24'><div class=area style='position:absolute; width:30px; height:20px; left:555px; top:677px'></div></a>
<a  href='build-rfmap2.php?mp=536&a_id=2550&y=1863' title='Джордж Сантаяна

Гуманизм, 
Элитаризм, Эстетика, Этика
USA
1863-1952
MY: 0/5
MX: 536
QN: 24'><div class=area style='position:absolute; width:29px; height:20px; left:585px; top:677px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1557&a_id=21223&y=1863' title='Свами Вивекананда

Индуизм, 
Этика
IND
1863-1902
MY: 0/0
MX: 1557
QN: 5'><div class=area style='position:absolute; width:36px; height:20px; left:1576px; top:614px'></div></a>
<a  href='build-rfmap2.php?mp=1557&a_id=5962&y=1863' title='Свами Вивекананда

Индуизм, 
Этика
IND
1863-1902
MY: 0/0
MX: 1557
QN: 5'><div class=area style='position:absolute; width:35px; height:20px; left:1612px; top:614px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=952&a_id=15598&y=1864' title='Мигель де Унамуно

Персонализм, Философская литература, Экзистенциализм, 
Социализм
SPA
1864-1936
MY: 0/-6
MX: 952
QN: 14'><div class=area style='position:absolute; width:27px; height:20px; left:971px; top:637px'></div></a>
<a  href='build-rfmap2.php?mp=952&a_id=4541&y=1864' title='Мигель де Унамуно

Персонализм, Философская литература, Экзистенциализм, 
Социализм
SPA
1864-1936
MY: 0/-6
MX: 952
QN: 14'><div class=area style='position:absolute; width:27px; height:20px; left:998px; top:637px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1657&a_id=19695&y=1866' title='Ромен Роллан

Философская литература
FRA
1866-1944
MY: 0/5
MX: 1657
QN: 39'><div class=area style='position:absolute; width:25px; height:20px; left:1676px; top:671px'></div></a>
<a  href='build-rfmap2.php?mp=1657&a_id=5839&y=1866' title='Ромен Роллан

Философская литература
FRA
1866-1944
MY: 0/5
MX: 1657
QN: 39'><div class=area style='position:absolute; width:24px; height:20px; left:1701px; top:671px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1557&a_id=15462&y=1869' title='Махатма Ганди

Антимодернизм, 
Индуизм, Пацифизм, Социализм, Этика
IND
1869-1948
MY: 0/-12
MX: 1557
QN: 81'><div class=area style='position:absolute; width:23px; height:20px; left:1576px; top:644px'></div></a>
<a  href='build-rfmap2.php?mp=1557&a_id=4506&y=1869' title='Махатма Ганди

Антимодернизм, 
Индуизм, Пацифизм, Социализм, Этика
IND
1869-1948
MY: 0/-12
MX: 1557
QN: 81'><div class=area style='position:absolute; width:23px; height:20px; left:1599px; top:644px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=105&a_id=24008&y=1870' title='Владимир Ильич Ленин

Марксизм, 
Антиинтеллектуализм
RUS
1870-1924
MY: 0/1
MX: 105
QN: 51'><div class=area style='position:absolute; width:19px; height:20px; left:124px; top:646px'></div></a>
<a  href='build-rfmap2.php?mp=105&a_id=1562&y=1870' title='Владимир Ильич Ленин

Марксизм, 
Антиинтеллектуализм
RUS
1870-1924
MY: 0/1
MX: 105
QN: 51'><div class=area style='position:absolute; width:19px; height:20px; left:143px; top:646px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=183&a_id=2109&y=1872' title='Бертран Рассел

Аналитическая философия, Атеизм, Либерализм, 
История, Логика, Материализм, Пацифизм, Позитивизм, Реализм
ENG
1872-1970
MY: 0/4
MX: 183
QN: 81'><div class=area style='position:absolute; width:24px; height:20px; left:202px; top:703px'></div></a>
<a  href='build-rfmap2.php?mp=183&a_id=1059&y=1872' title='Бертран Рассел

Аналитическая философия, Атеизм, Либерализм, 
История, Логика, Материализм, Пацифизм, Позитивизм, Реализм
ENG
1872-1970
MY: 0/4
MX: 183
QN: 81'><div class=area style='position:absolute; width:23px; height:20px; left:226px; top:703px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1557&a_id=21759&y=1872' title='Шри Ауробиндо

Индуизм, Интегральная йога
IND
1872-1950
MY: 0/-3
MX: 1557
QN: 19'><div class=area style='position:absolute; width:29px; height:20px; left:1576px; top:667px'></div></a>
<a  href='build-rfmap2.php?mp=1557&a_id=7312&y=1872' title='Шри Ауробиндо

Индуизм, Интегральная йога
IND
1872-1950
MY: 0/-3
MX: 1557
QN: 19'><div class=area style='position:absolute; width:29px; height:20px; left:1605px; top:667px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=952&a_id=18121&y=1874' title='Николай Александрович Бердяев

Персонализм, Религиозный персонализм, Экзистенциализм, 
Диалогический персонализм, Религиозный экзистенциализм, Христианство
RUS
1874-1948
MY: 0/5
MX: 952
QN: 60'><div class=area style='position:absolute; width:28px; height:20px; left:971px; top:684px'></div></a>
<a  href='build-rfmap2.php?mp=952&a_id=4900&y=1874' title='Николай Александрович Бердяев

Персонализм, Религиозный персонализм, Экзистенциализм, 
Диалогический персонализм, Религиозный экзистенциализм, Христианство
RUS
1874-1948
MY: 0/5
MX: 952
QN: 60'><div class=area style='position:absolute; width:27px; height:20px; left:999px; top:684px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=804&a_id=57&y=1875' title='Альберт Швейцер

Томизм, 
Гуманизм, Христианство, Этика
DEU
1875-1965
MY: 0/-1
MX: 804
QN: 24'><div class=area style='position:absolute; width:33px; height:20px; left:823px; top:690px'></div></a>
<a  href='build-rfmap2.php?mp=804&a_id=507&y=1875' title='Альберт Швейцер

Томизм, 
Гуманизм, Христианство, Этика
DEU
1875-1965
MY: 0/-1
MX: 804
QN: 24'><div class=area style='position:absolute; width:33px; height:20px; left:856px; top:690px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1423&a_id=3401&y=1875' title='Карл Густав Юнг

Неофрейдизм, Психоанализ
CHE
1875-1961
MY: 0/0
MX: 1423
QN: 60'><div class=area style='position:absolute; width:18px; height:20px; left:1442px; top:688px'></div></a>
<a  href='build-rfmap2.php?mp=1423&a_id=3519&y=1875' title='Карл Густав Юнг

Неофрейдизм, Психоанализ
CHE
1875-1961
MY: 0/0
MX: 1423
QN: 60'><div class=area style='position:absolute; width:18px; height:20px; left:1460px; top:688px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1557&a_id=19369&y=1879' title='Шри Рамана Махарши

Индуизм
IND
1879-1950
MY: 0/4
MX: 1557
QN: 2'><div class=area style='position:absolute; width:26px; height:20px; left:1576px; top:690px'></div></a>
<a  href='build-rfmap2.php?mp=1557&a_id=7315&y=1879' title='Шри Рамана Махарши

Индуизм
IND
1879-1950
MY: 0/4
MX: 1557
QN: 2'><div class=area style='position:absolute; width:26px; height:20px; left:1602px; top:690px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1258&a_id=18301&y=1880' title='Освальд Шпенглер

Национализм, Философия жизни, 
Антимодернизм, Консерватизм, Публицистика
DEU
1880-1936
MY: 0/2
MX: 1258
QN: 26'><div class=area style='position:absolute; width:26px; height:20px; left:1277px; top:671px'></div></a>
<a  href='build-rfmap2.php?mp=1258&a_id=5184&y=1880' title='Освальд Шпенглер

Национализм, Философия жизни, 
Антимодернизм, Консерватизм, Публицистика
DEU
1880-1936
MY: 0/2
MX: 1258
QN: 26'><div class=area style='position:absolute; width:25px; height:20px; left:1303px; top:671px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=804&a_id=18514&y=1881' title='Пьер Тейяр де Шарден

Антропологизм, Томизм, 
Иезуит, Католицизм, Космизм, Христианство
FRA
1881-1955
MY: 0/-10
MX: 804
QN: 12'><div class=area style='position:absolute; width:23px; height:20px; left:823px; top:667px'></div></a>
<a  href='build-rfmap2.php?mp=804&a_id=5512&y=1881' title='Пьер Тейяр де Шарден

Антропологизм, Томизм, 
Иезуит, Католицизм, Космизм, Христианство
FRA
1881-1955
MY: 0/-10
MX: 804
QN: 12'><div class=area style='position:absolute; width:23px; height:20px; left:846px; top:667px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=804&a_id=12132&y=1882' title='Жак Маритен

Томизм, 
Христианство, Эстетика, Этика
FRA
1882-1973
MY: 0/2
MX: 804
QN: 6'><div class=area style='position:absolute; width:23px; height:20px; left:823px; top:713px'></div></a>
<a  href='build-rfmap2.php?mp=804&a_id=2979&y=1882' title='Жак Маритен

Томизм, 
Христианство, Эстетика, Этика
FRA
1882-1973
MY: 0/2
MX: 804
QN: 6'><div class=area style='position:absolute; width:22px; height:20px; left:846px; top:713px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=536&a_id=13556&y=1883' title='Джебран Халиль Джебран

Гуманизм
LBY
1883-1931
MY: 0/-5
MX: 536
QN: 58'><div class=area style='position:absolute; width:22px; height:20px; left:555px; top:654px'></div></a>
<a  href='build-rfmap2.php?mp=536&a_id=2128&y=1883' title='Джебран Халиль Джебран

Гуманизм
LBY
1883-1931
MY: 0/-5
MX: 536
QN: 58'><div class=area style='position:absolute; width:21px; height:20px; left:577px; top:654px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=952&a_id=13432&y=1883' title='Карл Теодор Ясперс

Экзистенциализм, 
Кантианство, Религиозный экзистенциализм, Эстетика, Этика
DEU
1883-1969
MY: 0/1
MX: 952
QN: 9'><div class=area style='position:absolute; width:23px; height:20px; left:971px; top:707px'></div></a>
<a  href='build-rfmap2.php?mp=952&a_id=3538&y=1883' title='Карл Теодор Ясперс

Экзистенциализм, 
Кантианство, Религиозный экзистенциализм, Эстетика, Этика
DEU
1883-1969
MY: 0/1
MX: 952
QN: 9'><div class=area style='position:absolute; width:23px; height:20px; left:994px; top:707px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1258&a_id=10688&y=1883' title='Хосе Ортега-и-Гассет

Философия жизни
SPA
1883-1955
MY: 0/2
MX: 1258
QN: 10'><div class=area style='position:absolute; width:21px; height:20px; left:1277px; top:694px'></div></a>
<a  href='build-rfmap2.php?mp=1258&a_id=7113&y=1883' title='Хосе Ортега-и-Гассет

Философия жизни
SPA
1883-1955
MY: 0/2
MX: 1258
QN: 10'><div class=area style='position:absolute; width:20px; height:20px; left:1298px; top:694px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=952&a_id=8256&y=1889' title='Габриэль Оноре Марсель

Экзистенциализм, 
Религиозный экзистенциализм, Этика
FRA
1889-1973
MY: 0/7
MX: 952
QN: 6'><div class=area style='position:absolute; width:21px; height:20px; left:971px; top:730px'></div></a>
<a  href='build-rfmap2.php?mp=952&a_id=1670&y=1889' title='Габриэль Оноре Марсель

Экзистенциализм, 
Религиозный экзистенциализм, Этика
FRA
1889-1973
MY: 0/7
MX: 952
QN: 6'><div class=area style='position:absolute; width:21px; height:20px; left:992px; top:730px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=183&a_id=14487&y=1889' title='Людвиг Витгенштейн

Аналитическая философия
AUT
1889-1951
MY: 0/-6
MX: 183
QN: 14'><div class=area style='position:absolute; width:32px; height:20px; left:202px; top:679px'></div></a>
<a  href='build-rfmap2.php?mp=183&a_id=4176&y=1889' title='Людвиг Витгенштейн

Аналитическая философия
AUT
1889-1951
MY: 0/-6
MX: 183
QN: 14'><div class=area style='position:absolute; width:31px; height:20px; left:234px; top:679px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1126&a_id=15532&y=1889' title='Мартин Хайдеггер

Экзистенциализм, 
Герменевтика, Феноменология, Этика
DEU
1889-1976
MY: 0/-9
MX: 1126
QN: 7'><div class=area style='position:absolute; width:29px; height:20px; left:1145px; top:700px'></div></a>
<a  href='build-rfmap2.php?mp=1126&a_id=4477&y=1889' title='Мартин Хайдеггер

Экзистенциализм, 
Герменевтика, Феноменология, Этика
DEU
1889-1976
MY: 0/-9
MX: 1126
QN: 7'><div class=area style='position:absolute; width:29px; height:20px; left:1174px; top:700px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1557&a_id=10206&y=1895' title='Джидду Кришнамурти

Индуизм
IND
1895-1986
MY: 0/0
MX: 1557
QN: 13'><div class=area style='position:absolute; width:33px; height:20px; left:1576px; top:736px'></div></a>
<a  href='build-rfmap2.php?mp=1557&a_id=2276&y=1895' title='Джидду Кришнамурти

Индуизм
IND
1895-1986
MY: 0/0
MX: 1557
QN: 13'><div class=area style='position:absolute; width:33px; height:20px; left:1609px; top:736px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1657&a_id=10292&y=1899' title='Хорхе Луис Борхес

Философская литература
ARG
1899-1986
MY: 0/-9
MX: 1657
QN: 20'><div class=area style='position:absolute; width:23px; height:20px; left:1676px; top:721px'></div></a>
<a  href='build-rfmap2.php?mp=1657&a_id=7105&y=1899' title='Хорхе Луис Борхес

Философская литература
ARG
1899-1986
MY: 0/-9
MX: 1657
QN: 20'><div class=area style='position:absolute; width:23px; height:20px; left:1699px; top:721px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1423&a_id=6630&y=1900' title='Эрих Фромм

Марксизм, Неофрейдизм, Психоанализ, 
Пацифизм, Политика, Фрейдомарксизм, Этика
DEU
1900-1980
MY: 0/0
MX: 1423
QN: 13'><div class=area style='position:absolute; width:21px; height:20px; left:1442px; top:734px'></div></a>
<a  href='build-rfmap2.php?mp=1423&a_id=7637&y=1900' title='Эрих Фромм

Марксизм, Неофрейдизм, Психоанализ, 
Пацифизм, Политика, Фрейдомарксизм, Этика
DEU
1900-1980
MY: 0/0
MX: 1423
QN: 13'><div class=area style='position:absolute; width:20px; height:20px; left:1463px; top:734px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=277&a_id=13439&y=1902' title='Карл Поппер

Критический рационализм, Постпозитивизм
AUT
1902-1994
MY: 0/-5
MX: 277
QN: 12'><div class=area style='position:absolute; width:22px; height:20px; left:296px; top:740px'></div></a>
<a  href='build-rfmap2.php?mp=277&a_id=3531&y=1902' title='Карл Поппер

Критический рационализм, Постпозитивизм
AUT
1902-1994
MY: 0/-5
MX: 277
QN: 12'><div class=area style='position:absolute; width:21px; height:20px; left:318px; top:740px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=105&a_id=22672&y=1903' title='Теодор Адорно

Марксизм, 
Психоанализ
DEU
1903-1969
MY: 0/3
MX: 105
QN: 15'><div class=area style='position:absolute; width:22px; height:20px; left:124px; top:732px'></div></a>
<a  href='build-rfmap2.php?mp=105&a_id=6412&y=1903' title='Теодор Адорно

Марксизм, 
Психоанализ
DEU
1903-1969
MY: 0/3
MX: 105
QN: 15'><div class=area style='position:absolute; width:22px; height:20px; left:146px; top:732px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1126&a_id=10180&y=1905' title='Жан-Поль Сартр

Атеизм, Неофрейдизм, Экзистенциализм, 
Марксизм
FRA
1905-1980
MY: 0/3
MX: 1126
QN: 25'><div class=area style='position:absolute; width:21px; height:20px; left:1145px; top:747px'></div></a>
<a  href='build-rfmap2.php?mp=1126&a_id=3060&y=1905' title='Жан-Поль Сартр

Атеизм, Неофрейдизм, Экзистенциализм, 
Марксизм
FRA
1905-1980
MY: 0/3
MX: 1126
QN: 25'><div class=area style='position:absolute; width:20px; height:20px; left:1166px; top:747px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=613&a_id=9087&y=1906' title='Ханна Арендт

Тоталитаризм, Феноменология
DEU
1906-1975
MY: 0/0
MX: 613
QN: 8'><div class=area style='position:absolute; width:21px; height:20px; left:632px; top:736px'></div></a>
<a  href='build-rfmap2.php?mp=613&a_id=7023&y=1906' title='Ханна Арендт

Тоталитаризм, Феноменология
DEU
1906-1975
MY: 0/0
MX: 613
QN: 8'><div class=area style='position:absolute; width:20px; height:20px; left:653px; top:736px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=713&a_id=3947&y=1908' title='Клод Леви-Стросс

Структурализм, 
Антропологизм, Социализм
FRA
1908-2009
MY: 0/0
MX: 713
QN: 6'><div class=area style='position:absolute; width:34px; height:20px; left:732px; top:774px'></div></a>
<a  href='build-rfmap2.php?mp=713&a_id=3682&y=1908' title='Клод Леви-Стросс

Структурализм, 
Антропологизм, Социализм
FRA
1908-2009
MY: 0/0
MX: 713
QN: 6'><div class=area style='position:absolute; width:33px; height:20px; left:766px; top:774px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1028&a_id=17500&y=1908' title='Морис Мерло-Понти

Феноменология, Экзистенциализм, 
Коммунизм
FRA
1908-1961
MY: 0/-2
MX: 1028
QN: 2'><div class=area style='position:absolute; width:39px; height:20px; left:1047px; top:719px'></div></a>
<a  href='build-rfmap2.php?mp=1028&a_id=4719&y=1908' title='Морис Мерло-Понти

Феноменология, Экзистенциализм, 
Коммунизм
FRA
1908-1961
MY: 0/-2
MX: 1028
QN: 2'><div class=area style='position:absolute; width:39px; height:20px; left:1086px; top:719px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1126&a_id=21134&y=1908' title='Симона де Бовуар

Экзистенциализм, 
Феминизм
FRA
1908-1986
MY: 0/10
MX: 1126
QN: 26'><div class=area style='position:absolute; width:28px; height:20px; left:1145px; top:770px'></div></a>
<a  href='build-rfmap2.php?mp=1126&a_id=6145&y=1908' title='Симона де Бовуар

Экзистенциализм, 
Феминизм
FRA
1908-1986
MY: 0/10
MX: 1126
QN: 26'><div class=area style='position:absolute; width:28px; height:20px; left:1173px; top:770px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=183&a_id=24173&y=1908' title='Уиллард Ван Орман Куайн

Аналитическая философия, Логика, Математика, 
Неопозитивизм
USA
1908-2000
MY: 0/-7
MX: 183
QN: 1'><div class=area style='position:absolute; width:19px; height:20px; left:202px; top:749px'></div></a>
<a  href='build-rfmap2.php?mp=183&a_id=6615&y=1908' title='Уиллард Ван Орман Куайн

Аналитическая философия, Логика, Математика, 
Неопозитивизм
USA
1908-2000
MY: 0/-7
MX: 183
QN: 1'><div class=area style='position:absolute; width:18px; height:20px; left:221px; top:749px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=714&a_id=21135&y=1909' title='Симона Вейль

Неоплатонизм, 
Анархизм, Марксизм, Мистицизм, Социализм, Хенология, Христианство
FRA
1909-1943
MY: 0/3
MX: 714
QN: 11'><div class=area style='position:absolute; width:14px; height:20px; left:733px; top:711px'></div></a>
<a  href='build-rfmap2.php?mp=714&a_id=6144&y=1909' title='Симона Вейль

Неоплатонизм, 
Анархизм, Марксизм, Мистицизм, Социализм, Хенология, Христианство
FRA
1909-1943
MY: 0/3
MX: 714
QN: 11'><div class=area style='position:absolute; width:14px; height:20px; left:747px; top:711px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1657&a_id=21159&y=1909' title='Станислав Ежи Лец

Философская литература
POL
1909-1966
MY: 0/-15
MX: 1657
QN: 830'><div class=area style='position:absolute; width:14px; height:20px; left:1676px; top:698px'></div></a>
<a  href='build-rfmap2.php?mp=1657&a_id=6215&y=1909' title='Станислав Ежи Лец

Философская литература
POL
1909-1966
MY: 0/-15
MX: 1657
QN: 830'><div class=area style='position:absolute; width:13px; height:20px; left:1690px; top:698px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=449&a_id=15524&y=1911' title='Маршалл Маклюэн

Постмодернизм, 
Футурология
CAN
1911-1980
MY: 0/-9
MX: 449
QN: 5'><div class=area style='position:absolute; width:26px; height:20px; left:468px; top:728px'></div></a>
<a  href='build-rfmap2.php?mp=449&a_id=4487&y=1911' title='Маршалл Маклюэн

Постмодернизм, 
Футурология
CAN
1911-1980
MY: 0/-9
MX: 449
QN: 5'><div class=area style='position:absolute; width:26px; height:20px; left:494px; top:728px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1028&a_id=6591&y=1911' title='Эмиль Мишель Чоран (Сьоран)

Антиинтеллектуализм, Экзистенциализм, 
Абсурдизм, Нигилизм
ROU
1911-1995
MY: 0/2
MX: 1028
QN: 56'><div class=area style='position:absolute; width:22px; height:20px; left:1047px; top:766px'></div></a>
<a  href='build-rfmap2.php?mp=1028&a_id=7539&y=1911' title='Эмиль Мишель Чоран (Сьоран)

Антиинтеллектуализм, Экзистенциализм, 
Абсурдизм, Нигилизм
ROU
1911-1995
MY: 0/2
MX: 1028
QN: 56'><div class=area style='position:absolute; width:21px; height:20px; left:1069px; top:766px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1126&a_id=52&y=1913' title='Альбер Камю

Экзистенциализм, 
Абсурдизм, Анархизм, Пацифизм, Публицистика, Этика
FRA
1913-1960
MY: 0/-2
MX: 1126
QN: 83'><div class=area style='position:absolute; width:22px; height:20px; left:1145px; top:724px'></div></a>
<a  href='build-rfmap2.php?mp=1126&a_id=494&y=1913' title='Альбер Камю

Экзистенциализм, 
Абсурдизм, Анархизм, Пацифизм, Публицистика, Этика
FRA
1913-1960
MY: 0/-2
MX: 1126
QN: 83'><div class=area style='position:absolute; width:22px; height:20px; left:1167px; top:724px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=385&a_id=18619&y=1913' title='Поль Рикер

Герменевтика, Феноменология, 
Неофрейдизм
FRA
1913-2005
MY: 0/0
MX: 385
QN: 8'><div class=area style='position:absolute; width:23px; height:20px; left:404px; top:774px'></div></a>
<a  href='build-rfmap2.php?mp=385&a_id=5452&y=1913' title='Поль Рикер

Герменевтика, Феноменология, 
Неофрейдизм
FRA
1913-2005
MY: 0/0
MX: 385
QN: 8'><div class=area style='position:absolute; width:22px; height:20px; left:427px; top:774px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1557&a_id=15461&y=1918' title='Махариши Махеш Йоги

Трансцендентальная медитация
IND
1918-2008
MY: 0/11
MX: 1557
QN: 2'><div class=area style='position:absolute; width:15px; height:20px; left:1576px; top:805px'></div></a>
<a  href='build-rfmap2.php?mp=1557&a_id=4505&y=1918' title='Махариши Махеш Йоги

Трансцендентальная медитация
IND
1918-2008
MY: 0/11
MX: 1557
QN: 2'><div class=area style='position:absolute; width:15px; height:20px; left:1591px; top:805px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=277&a_id=9919&y=1922' title='Имре Лакатос

Критический рационализм, Постпозитивизм, 
Коммунизм
ENG
1922-1974
MY: 0/6
MX: 277
QN: 1'><div class=area style='position:absolute; width:22px; height:20px; left:296px; top:763px'></div></a>
<a  href='build-rfmap2.php?mp=277&a_id=3339&y=1922' title='Имре Лакатос

Критический рационализм, Постпозитивизм, 
Коммунизм
ENG
1922-1974
MY: 0/6
MX: 277
QN: 1'><div class=area style='position:absolute; width:22px; height:20px; left:318px; top:763px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1657&a_id=3407&y=1925' title='Карлос Кастанеда

Философская литература
USA
1925-1998
MY: 0/-6
MX: 1657
QN: 11'><div class=area style='position:absolute; width:32px; height:20px; left:1676px; top:768px'></div></a>
<a  href='build-rfmap2.php?mp=1657&a_id=3553&y=1925' title='Карлос Кастанеда

Философская литература
USA
1925-1998
MY: 0/-6
MX: 1657
QN: 11'><div class=area style='position:absolute; width:32px; height:20px; left:1708px; top:768px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1423&a_id=15591&y=1926' title='Мишель Фуко

Психоанализ, Структурализм, 
Постмодернизм, Постструктурализм
FRA
1926-1984
MY: 0/0
MX: 1423
QN: 5'><div class=area style='position:absolute; width:25px; height:20px; left:1442px; top:766px'></div></a>
<a  href='build-rfmap2.php?mp=1423&a_id=4696&y=1926' title='Мишель Фуко

Психоанализ, Структурализм, 
Постмодернизм, Постструктурализм
FRA
1926-1984
MY: 0/0
MX: 1423
QN: 5'><div class=area style='position:absolute; width:24px; height:20px; left:1467px; top:766px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=449&a_id=10171&y=1929' title='Жан Бодрийяр

Постмодернизм, Постструктурализм
FRA
1929-2007
MY: 0/2
MX: 449
QN: 13'><div class=area style='position:absolute; width:30px; height:20px; left:468px; top:797px'></div></a>
<a  href='build-rfmap2.php?mp=449&a_id=3006&y=1929' title='Жан Бодрийяр

Постмодернизм, Постструктурализм
FRA
1929-2007
MY: 0/2
MX: 449
QN: 13'><div class=area style='position:absolute; width:29px; height:20px; left:498px; top:797px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=449&a_id=10139&y=1930' title='Жак Деррида

Деконструктивизм, Постмодернизм, Постструктурализм, 
Политика, Психоанализ, Теология, Эстетика, Этика
FRA
1930-2004
MY: 0/-8
MX: 449
QN: 6'><div class=area style='position:absolute; width:22px; height:20px; left:468px; top:774px'></div></a>
<a  href='build-rfmap2.php?mp=449&a_id=2978&y=1930' title='Жак Деррида

Деконструктивизм, Постмодернизм, Постструктурализм, 
Политика, Психоанализ, Теология, Эстетика, Этика
FRA
1930-2004
MY: 0/-8
MX: 449
QN: 6'><div class=area style='position:absolute; width:22px; height:20px; left:490px; top:774px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=183&a_id=17518&y=1930' title='Мераб Мамардашвили

Рационализм, 
Логика
RUS
1930-1990
MY: 0/-2
MX: 183
QN: 15'><div class=area style='position:absolute; width:38px; height:20px; left:202px; top:772px'></div></a>
<a  href='build-rfmap2.php?mp=183&a_id=4526&y=1930' title='Мераб Мамардашвили

Рационализм, 
Логика
RUS
1930-1990
MY: 0/-2
MX: 183
QN: 15'><div class=area style='position:absolute; width:38px; height:20px; left:240px; top:772px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1657&a_id=23795&y=1932' title='Умберто Эко

История, Постмодернизм, Семиотика, Филология, Философская литература, 
Медиевализм, Эстетика
ITA
1932-2016
MY: 0/15
MX: 1657
QN: 8'><div class=area style='position:absolute; width:13px; height:20px; left:1676px; top:837px'></div></a>
<a  href='build-rfmap2.php?mp=1657&a_id=6701&y=1932' title='Умберто Эко

История, Постмодернизм, Семиотика, Филология, Философская литература, 
Медиевализм, Эстетика
ITA
1932-2016
MY: 0/15
MX: 1657
QN: 8'><div class=area style='position:absolute; width:13px; height:20px; left:1689px; top:837px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1657&a_id=19404&y=1936' title='Ричард Бах

Философская литература
USA
1936-
MY: 0/-11
MX: 1657
QN: 9'><div class=area style='position:absolute; width:18px; height:20px; left:1676px; top:745px'></div></a>
<a  href='build-rfmap2.php?mp=1657&a_id=5652&y=1936' title='Ричард Бах

Философская литература
USA
1936-
MY: 0/-11
MX: 1657
QN: 9'><div class=area style='position:absolute; width:17px; height:20px; left:1694px; top:745px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1657&a_id=10487&y=1940' title='Иосиф Александрович Бродский

Философская литература
RUS
1940-1996
MY: 0/10
MX: 1657
QN: 497'><div class=area style='position:absolute; width:26px; height:20px; left:1676px; top:814px'></div></a>
<a  href='build-rfmap2.php?mp=1657&a_id=3382&y=1940' title='Иосиф Александрович Бродский

Философская литература
RUS
1940-1996
MY: 0/10
MX: 1657
QN: 497'><div class=area style='position:absolute; width:26px; height:20px; left:1702px; top:814px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=183&a_id=4976&y=1942' title='Дэниел Деннет

Аналитическая философия, 
Гуманизм, Материализм, Философия науки, Философия сознания
USA
1942-
MY: 0/7
MX: 183
QN: 1'><div class=area style='position:absolute; width:23px; height:20px; left:202px; top:795px'></div></a>
<a  href='build-rfmap2.php?mp=183&a_id=2829&y=1942' title='Дэниел Деннет

Аналитическая философия, 
Гуманизм, Материализм, Философия науки, Философия сознания
USA
1942-
MY: 0/7
MX: 183
QN: 1'><div class=area style='position:absolute; width:22px; height:20px; left:225px; top:795px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=183&a_id=18475&y=1946' title='Питер Сингер

Аналитическая философия, Утилитаризм, 
Этика
AUS
1946-
MY: 0/14
MX: 183
QN: 3'><div class=area style='position:absolute; width:20px; height:20px; left:202px; top:818px'></div></a>
<a  href='build-rfmap2.php?mp=183&a_id=5385&y=1946' title='Питер Сингер

Аналитическая философия, Утилитаризм, 
Этика
AUS
1946-
MY: 0/14
MX: 183
QN: 3'><div class=area style='position:absolute; width:19px; height:20px; left:222px; top:818px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1657&a_id=18439&y=1947' title='Пауло Коэльо

Философская литература
BRA
1947-
MY: 0/0
MX: 1657
QN: 24'><div class=area style='position:absolute; width:24px; height:20px; left:1676px; top:791px'></div></a>
<a  href='build-rfmap2.php?mp=1657&a_id=5281&y=1947' title='Пауло Коэльо

Философская литература
BRA
1947-
MY: 0/0
MX: 1657
QN: 24'><div class=area style='position:absolute; width:23px; height:20px; left:1700px; top:791px'></div></a>
<a  href='http://alch.strangled.net/artquiz/equotes/authors.php?mp=1423&a_id=21139&y=1949' title='Славой Жижек

Гегельянцы, Марксизм, Неофрейдизм, Психоанализ
SVN
1949-
MY: 0/0
MX: 1423
QN: 1'><div class=area style='position:absolute; width:18px; height:20px; left:1442px; top:795px'></div></a>
<a  href='build-rfmap2.php?mp=1423&a_id=6171&y=1949' title='Славой Жижек

Гегельянцы, Марксизм, Неофрейдизм, Психоанализ
SVN
1949-
MY: 0/0
MX: 1423
QN: 1'><div class=area style='position:absolute; width:17px; height:20px; left:1460px; top:795px'></div></a>

</div>
</div>
</table>

<p><a href=?act=moveall>Move all tags and authors to new position</a>
<p>Dots in the name show reductions.
<p>Similar schools have the same color.
<p>Some schools have a thick colored line at their side, which shows the main interval when the school was active.
<p>Click on philosopher, school or country to find out more and read quotes.
<p>Most well known philosophers are marked bold.
<p>Image is searchable. Use Ctrl+F or 'Search in page'.

    <script type='text/javascript'>//<![CDATA[

var astart = [];

astart[21] = 1072;

astart[20] = 862;

astart[19] = 652;

astart[18] = 442;

astart[17] = 302;

astart[16] = 288;

astart[15] = 274;

astart[14] = 260;

astart[13] = 253;

astart[12] = 246;

astart[11] = 239;

astart[10] = 232;

astart[9] = 229;

astart[8] = 226;

astart[7] = 223;

astart[6] = 209;

astart[5] = 195;

astart[4] = 181;

astart[3] = 167;

astart[2] = 153;

astart[1] = 139;

astart[0] = 125;

astart[-1] = 111;

astart[-2] = 97;

astart[-3] = 83;

astart[-4] = 69;

astart[-5] = 55;

astart[-6] = 41;

astart[-7] = 31;

astart[-8] = 21;

astart[-9] = 11;


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
  
