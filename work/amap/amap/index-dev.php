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
<a id='tFuturism' name='tFuturism' style='position: absolute; top: 1460px; left: 1820px'><font color=white size=3>Futurism</font></a>
<a id='tDada' name='tDada' style='position: absolute; top: 1669px; left: 1820px'><font color=white size=3>Dada</font></a>
<a id='tOp art' name='tOp art' style='position: absolute; top: 1774px; left: 1820px'><font color=white size=3>Op art</font></a>
<a id='tLyrical Abstraction' name='tLyrical Abstraction' style='position: absolute; top: 1732px; left: 1820px'><font color=white size=3>Lyrical Abstraction</font></a>
<a id='tColor Field' name='tColor Field' style='position: absolute; top: 1627px; left: 1820px'><font color=white size=3>Color Field</font></a>
<a id='tRenaissance' name='tRenaissance' style='position: absolute; top: 438px; left: 1820px'><font color=white size=3>Renaissance</font></a>
<a id='tAbstract Expressionism' name='tAbstract Expressionism' style='position: absolute; top: 1619px; left: 1820px'><font color=white size=3>Abstract Expressionism</font></a>
<a id='tMannerism' name='tMannerism' style='position: absolute; top: 632px; left: 1820px'><font color=white size=3>Mannerism</font></a>
<a id='tNeoplasticism' name='tNeoplasticism' style='position: absolute; top: 1572px; left: 1820px'><font color=white size=3>Neoplasticism</font></a>
<a id='tPost-dogmatism' name='tPost-dogmatism' style='position: absolute; top: 1850px; left: 1820px'><font color=white size=3>Post-dogmatism</font></a>
<a id='tGeometric abstraction' name='tGeometric abstraction' style='position: absolute; top: 1479px; left: 1820px'><font color=white size=3>Geometric abstraction</font></a>
<a id='tSynchromism' name='tSynchromism' style='position: absolute; top: 1564px; left: 1820px'><font color=white size=3>Synchromism</font></a>
<a id='tPrecisionism' name='tPrecisionism' style='position: absolute; top: 1470px; left: 1820px'><font color=white size=3>Precisionism</font></a>
<a id='tMinimalism' name='tMinimalism' style='position: absolute; top: 1766px; left: 1820px'><font color=white size=3>Minimalism</font></a>
<a id='tLandscape' name='tLandscape' style='position: absolute; top: 884px; left: 1820px'><font color=white size=3>Landscape</font></a>
<a id='tGothic' name='tGothic' style='position: absolute; top: 312px; left: 1820px'><font color=white size=3>Gothic</font></a>
<a id='tPop Art' name='tPop Art' style='position: absolute; top: 1740px; left: 1820px'><font color=white size=3>Pop Art</font></a>
<a id='tDutch Golden age' name='tDutch Golden age' style='position: absolute; top: 854px; left: 1820px'><font color=white size=3>Dutch Golden age</font></a>
<a id='tRococo' name='tRococo' style='position: absolute; top: 1073px; left: 1820px'><font color=white size=3>Rococo</font></a>
<a id='tFauvism' name='tFauvism' style='position: absolute; top: 1644px; left: 1820px'><font color=white size=3>Fauvism</font></a>
<a id='tNeoclassicism' name='tNeoclassicism' style='position: absolute; top: 1186px; left: 1820px'><font color=white size=3>Neoclassicism</font></a>
<a id='tCubism' name='tCubism' style='position: absolute; top: 1510px; left: 1820px'><font color=white size=3>Cubism</font></a>
<a id='tBaroque' name='tBaroque' style='position: absolute; top: 839px; left: 1820px'><font color=white size=3>Baroque</font></a>
<a id='tPrimitivism' name='tPrimitivism' style='position: absolute; top: 1498px; left: 1820px'><font color=white size=3>Primitivism</font></a>
<a id='tNorthern Renaissance' name='tNorthern Renaissance' style='position: absolute; top: 438px; left: 1820px'><font color=white size=3>Northern Renaissance</font></a>
<a id='tArt Nouveau' name='tArt Nouveau' style='position: absolute; top: 1439px; left: 1820px'><font color=white size=3>Art Nouveau</font></a>
<a id='tPost-Impressionism' name='tPost-Impressionism' style='position: absolute; top: 1384px; left: 1820px'><font color=white size=3>Post-Impressionism</font></a>
<a id='tByzantine Art' name='tByzantine Art' style='position: absolute; top: 199px; left: 1820px'><font color=white size=3>Byzantine Art</font></a>
<a id='tSurrealism' name='tSurrealism' style='position: absolute; top: 1568px; left: 1820px'><font color=white size=3>Surrealism</font></a>
<a id='tRomanticism' name='tRomanticism' style='position: absolute; top: 1217px; left: 1820px'><font color=white size=3>Romanticism</font></a>
<a id='tSymbolism' name='tSymbolism' style='position: absolute; top: 1396px; left: 1820px'><font color=white size=3>Symbolism</font></a>
<a id='tRealism' name='tRealism' style='position: absolute; top: 1257px; left: 1820px'><font color=white size=3>Realism</font></a>
<a id='tImpressionism' name='tImpressionism' style='position: absolute; top: 1379px; left: 1820px'><font color=white size=3>Impressionism</font></a>
<a id='tExpressionism' name='tExpressionism' style='position: absolute; top: 1451px; left: 1820px'><font color=white size=3>Expressionism</font></a>
<a id='tPre-Raphaelites' name='tPre-Raphaelites' style='position: absolute; top: 1374px; left: 1820px'><font color=white size=3>Pre-Raphaelites</font></a>
<a id='tRussian Enlightenment' name='tRussian Enlightenment' style='position: absolute; top: 1193px; left: 1820px'><font color=white size=3>Russian Enlightenment</font></a>
<a id='tFlemish Baroque' name='tFlemish Baroque' style='position: absolute; top: 839px; left: 1820px'><font color=white size=3>Flemish Baroque</font></a>
<a id='t(Neoclassicism)' name='t(Neoclassicism)' style='position: absolute; top: 1761px; left: 1820px'><font color=white size=3>(Neoclassicism)</font></a>
<a id='tAncient' name='tAncient' style='position: absolute; top: 5px; left: 1820px'><font color=white size=3>Ancient</font></a>
<a id='tWorld art' name='tWorld art' style='position: absolute; top: 108px; left: 1820px'><font color=white size=3>World art</font></a>
<a id='a405' name='#a405' style='position: absolute; top: 32px; left: 1820px'><font color=white size=3>Pre-historic art</font></a>
<a id='a350' name='#a350' style='position: absolute; top: 46px; left: 1820px'><font color=white size=3>Egyptian art</font></a>
<a id='a392' name='#a392' style='position: absolute; top: 46px; left: 1820px'><font color=white size=3>Mesopotamian art</font></a>
<a id='a394' name='#a394' style='position: absolute; top: 81px; left: 1820px'><font color=white size=3>Minoan art</font></a>
<a id='a396' name='#a396' style='position: absolute; top: 88px; left: 1820px'><font color=white size=3>Mycenaean art</font></a>
<a id='a317' name='#a317' style='position: absolute; top: 109px; left: 1820px'><font color=white size=3>Assyrian art</font></a>
<a id='a354' name='#a354' style='position: absolute; top: 119px; left: 1820px'><font color=white size=3>Etruscan art</font></a>
<a id='a359' name='#a359' style='position: absolute; top: 141px; left: 1820px'><font color=white size=3>Greek art</font></a>
<a id='a410' name='#a410' style='position: absolute; top: 150px; left: 1820px'><font color=white size=3>Roman art</font></a>
<a id='a331' name='#a331' style='position: absolute; top: 144px; left: 1820px'><font color=white size=3>Chinese art 0-II</font></a>
<a id='a366' name='#a366' style='position: absolute; top: 207px; left: 1820px'><font color=white size=3>Indian art 0-XI</font></a>
<a id='a393' name='#a393' style='position: absolute; top: 242px; left: 1820px'><font color=white size=3>Mexican art</font></a>
<a id='a334' name='#a334' style='position: absolute; top: 179px; left: 1820px'><font color=white size=3>Chinese art III-VIII</font></a>
<a id='a349' name='#a349' style='position: absolute; top: 186px; left: 1820px'><font color=white size=3>Early christian art</font></a>
<a id='a374' name='#a374' style='position: absolute; top: 186px; left: 1820px'><font color=white size=3>Japanese art III-VIII</font></a>
<a id='a326' name='#a326' style='position: absolute; top: 235px; left: 1820px'><font color=white size=3>Byzantine art VI-VIII</font></a>
<a id='a327' name='#a327' style='position: absolute; top: 256px; left: 1820px'><font color=white size=3>Carolingian art</font></a>
<a id='a335' name='#a335' style='position: absolute; top: 284px; left: 1820px'><font color=white size=3>Chinese art IX-XII</font></a>
<a id='a370' name='#a370' style='position: absolute; top: 312px; left: 1820px'><font color=white size=3>Islamic art IX-XV</font></a>
<a id='a400' name='#a400' style='position: absolute; top: 277px; left: 1820px'><font color=white size=3>Ottonian art</font></a>
<a id='a411' name='#a411' style='position: absolute; top: 291px; left: 1820px'><font color=white size=3>Romanesque art</font></a>
<a id='a325' name='#a325' style='position: absolute; top: 340px; left: 1820px'><font color=white size=3>Byzantine art XII-XIV</font></a>
<a id='a367' name='#a367' style='position: absolute; top: 403px; left: 1820px'><font color=white size=3>Indian art XII-XVI</font></a>
<a id='a372' name='#a372' style='position: absolute; top: 431px; left: 1820px'><font color=white size=3>Japanese art XII-XVI</font></a>
<a id='a332' name='#a332' style='position: absolute; top: 488px; left: 1820px'><font color=white size=3>Chinese art XIII-XVI</font></a>
<a id='a337' name='#a337' style='position: absolute; top: 349px; left: 1820px'><font color=white size=3>Cimabue - Florentine</font></a>
<a id='a347' name='#a347' style='position: absolute; top: 358px; left: 1820px'><font color=white size=3>Duccio - Sienese</font></a>
<a id='a41' name='#a41' style='position: absolute; top: 366px; left: 1820px'><font color=white size=3>Giotto - Late Gothic, Proto-Renaissance</font></a>
<a id='a382' name='#a382' style='position: absolute; top: 378px; left: 1820px'><font color=white size=3>P Lorenzetti - Sienese</font></a>
<a id='a389' name='#a389' style='position: absolute; top: 383px; left: 1820px'><font color=white size=3>S Martini</font></a>
<a id='a381' name='#a381' style='position: absolute; top: 388px; left: 1820px'><font color=white size=3>A Lorenzetti - Sienese</font></a>
<a id='a31' name='#a31' style='position: absolute; top: 419px; left: 1820px'><font color=white size=3>Theophanes the Greek</font></a>
<a id='a19' name='#a19' style='position: absolute; top: 463px; left: 1820px'><font color=white size=3>Rublev</font></a>
<a id='a114' name='#a114' style='position: absolute; top: 463px; left: 1820px'><font color=white size=3>Campin</font></a>
<a id='a50' name='#a50' style='position: absolute; top: 483px; left: 1820px'><font color=white size=3>Eyck</font></a>
<a id='a87' name='#a87' style='position: absolute; top: 509px; left: 1820px'><font color=white size=3>Fra Angelico - Florence</font></a>
<a id='a422' name='#a422' style='position: absolute; top: 529px; left: 1820px'><font color=white size=3>Uccello</font></a>
<a id='a90' name='#a90' style='position: absolute; top: 519px; left: 1820px'><font color=white size=3>van der Weyden</font></a>
<a id='a378' name='#a378' style='position: absolute; top: 1009px; left: 1820px'><font color=white size=3>Korean art</font></a>
<a id='a390' name='#a390' style='position: absolute; top: 476px; left: 1820px'><font color=white size=3>Masaccio - Florence</font></a>
<a id='a91' name='#a91' style='position: absolute; top: 526px; left: 1820px'><font color=white size=3>Paolo</font></a>
<a id='a311' name='#a311' style='position: absolute; top: 554px; left: 1820px'><font color=white size=3>Piero della Francesca</font></a>
<a id='a101' name='#a101' style='position: absolute; top: 584px; left: 1820px'><font color=white size=3>Messina</font></a>
<a id='a137' name='#a137' style='position: absolute; top: 609px; left: 1820px'><font color=white size=3>Bellini - Venice</font></a>
<a id='a122' name='#a122' style='position: absolute; top: 612px; left: 1820px'><font color=white size=3>Mantegna</font></a>
<a id='a104' name='#a104' style='position: absolute; top: 607px; left: 1820px'><font color=white size=3>Memling</font></a>
<a id='a42' name='#a42' style='position: absolute; top: 635px; left: 1820px'><font color=white size=3>Botticelli - Florence</font></a>
<a id='a150' name='#a150' style='position: absolute; top: 650px; left: 1820px'><font color=white size=3>Signorelli</font></a>
<a id='a89' name='#a89' style='position: absolute; top: 614px; left: 1820px'><font color=white size=3>Schongauer</font></a>
<a id='a24' name='#a24' style='position: absolute; top: 645px; left: 1820px'><font color=white size=3>Bosch</font></a>
<a id='a234' name='#a234' style='position: absolute; top: 632px; left: 1820px'><font color=white size=3>Berruguete</font></a>
<a id='a45' name='#a45' style='position: absolute; top: 662px; left: 1820px'><font color=white size=3>Vinci</font></a>
<a id='a35' name='#a35' style='position: absolute; top: 690px; left: 1820px'><font color=white size=3>Durer</font></a>
<a id='a111' name='#a111' style='position: absolute; top: 719px; left: 1820px'><font color=white size=3>Cranach</font></a>
<a id='a112' name='#a112' style='position: absolute; top: 735px; left: 1820px'><font color=white size=3>Michelangelo - Florence</font></a>
<a id='a106' name='#a106' style='position: absolute; top: 675px; left: 1820px'><font color=white size=3>Giorgione - Venice</font></a>
<a id='a100' name='#a100' style='position: absolute; top: 706px; left: 1820px'><font color=white size=3>Altdorfer</font></a>
<a id='a132' name='#a132' style='position: absolute; top: 712px; left: 1820px'><font color=white size=3>Garofalo</font></a>
<a id='a95' name='#a95' style='position: absolute; top: 706px; left: 1820px'><font color=white size=3>Raphael</font></a>
<a id='a92' name='#a92' style='position: absolute; top: 746px; left: 1820px'><font color=white size=3>Baldung</font></a>
<a id='a55' name='#a55' style='position: absolute; top: 768px; left: 1820px'><font color=white size=3>Titian - Venice</font></a>
<a id='a108' name='#a108' style='position: absolute; top: 710px; left: 1820px'><font color=white size=3>Correggio</font></a>
<a id='a110' name='#a110' style='position: absolute; top: 721px; left: 1820px'><font color=white size=3>van Leyden</font></a>
<a id='a403' name='#a403' style='position: absolute; top: 742px; left: 1820px'><font color=white size=3>Pontormo - Florence</font></a>
<a id='a98' name='#a98' style='position: absolute; top: 735px; left: 1820px'><font color=white size=3>Holbein</font></a>
<a id='a371' name='#a371' style='position: absolute; top: 1081px; left: 1820px'><font color=white size=3>Islamic art XVI-XX</font></a>
<a id='a397' name='#a397' style='position: absolute; top: 914px; left: 1820px'><font color=white size=3>Native American art</font></a>
<a id='a324' name='#a324' style='position: absolute; top: 768px; left: 1820px'><font color=white size=3>Bronzino - Florence</font></a>
<a id='a313' name='#a313' style='position: absolute; top: 793px; left: 1820px'><font color=white size=3>Vasari</font></a>
<a id='a268' name='#a268' style='position: absolute; top: 818px; left: 1820px'><font color=white size=3>Morales</font></a>
<a id='a267' name='#a267' style='position: absolute; top: 784px; left: 1820px'><font color=white size=3>Mor</font></a>
<a id='a420' name='#a420' style='position: absolute; top: 804px; left: 1820px'><font color=white size=3>Tintoretto - Venice</font></a>
<a id='a135' name='#a135' style='position: absolute; top: 793px; left: 1820px'><font color=white size=3>Moroni</font></a>
<a id='a39' name='#a39' style='position: absolute; top: 795px; left: 1820px'><font color=white size=3>Bruegel</font></a>
<a id='a296' name='#a296' style='position: absolute; top: 833px; left: 1820px'><font color=white size=3>Arcimboldo</font></a>
<a id='a155' name='#a155' style='position: absolute; top: 820px; left: 1820px'><font color=white size=3>Veronese - Venice</font></a>
<a id='a34' name='#a34' style='position: absolute; top: 865px; left: 1820px'><font color=white size=3>El Greco</font></a>
<a id='a271' name='#a271' style='position: absolute; top: 871px; left: 1820px'><font color=white size=3>Pantoja</font></a>
<a id='a124' name='#a124' style='position: absolute; top: 885px; left: 1820px'><font color=white size=3>Carracci</font></a>
<a id='a43' name='#a43' style='position: absolute; top: 907px; left: 1820px'><font color=white size=3>Caravaggio</font></a>
<a id='a278' name='#a278' style='position: absolute; top: 931px; left: 1820px'><font color=white size=3>Reni</font></a>
<a id='a238' name='#a238' style='position: absolute; top: 954px; left: 1820px'><font color=white size=3>Carducho</font></a>
<a id='a29' name='#a29' style='position: absolute; top: 935px; left: 1820px'><font color=white size=3>Rubens</font></a>
<a id='a285' name='#a285' style='position: absolute; top: 910px; left: 1820px'><font color=white size=3>Snyders - Hunting</font></a>
<a id='a270' name='#a270' style='position: absolute; top: 940px; left: 1820px'><font color=white size=3>Orrente</font></a>
<a id='a248' name='#a248' style='position: absolute; top: 933px; left: 1820px'><font color=white size=3>Francken - Genre</font></a>
<a id='a131' name='#a131' style='position: absolute; top: 959px; left: 1820px'><font color=white size=3>Hals</font></a>
<a id='a283' name='#a283' style='position: absolute; top: 971px; left: 1820px'><font color=white size=3>Daniel - Flowers</font></a>
<a id='a279' name='#a279' style='position: absolute; top: 981px; left: 1820px'><font color=white size=3>Ribera</font></a>
<a id='a303' name='#a303' style='position: absolute; top: 1004px; left: 1820px'><font color=white size=3>Gentileschi</font></a>
<a id='a97' name='#a97' style='position: absolute; top: 985px; left: 1820px'><font color=white size=3>Poussin</font></a>
<a id='a295' name='#a295' style='position: absolute; top: 978px; left: 1820px'><font color=white size=3>Zurbaran</font></a>
<a id='a46' name='#a46' style='position: absolute; top: 1004px; left: 1820px'><font color=white size=3>Velazquez</font></a>
<a id='a244' name='#a244' style='position: absolute; top: 962px; left: 1820px'><font color=white size=3>Dyck</font></a>
<a id='a258' name='#a258' style='position: absolute; top: 1012px; left: 1820px'><font color=white size=3>Lorrain</font></a>
<a id='a333' name='#a333' style='position: absolute; top: 1152px; left: 1820px'><font color=white size=3>Chinese art XVII-XIX</font></a>
<a id='a368' name='#a368' style='position: absolute; top: 1121px; left: 1820px'><font color=white size=3>Indian art XVII-XIX</font></a>
<a id='a373' name='#a373' style='position: absolute; top: 1045px; left: 1820px'><font color=white size=3>Japanese art XVII-XIX</font></a>
<a id='a121' name='#a121' style='position: absolute; top: 954px; left: 1820px'><font color=white size=3>van der Neer</font></a>
<a id='a54' name='#a54' style='position: absolute; top: 1012px; left: 1820px'><font color=white size=3>Rembrandt</font></a>
<a id='a276' name='#a276' style='position: absolute; top: 1031px; left: 1820px'><font color=white size=3>Quellinus - Battle</font></a>
<a id='a249' name='#a249' style='position: absolute; top: 1004px; left: 1820px'><font color=white size=3>Fyt - Hunting</font></a>
<a id='a141' name='#a141' style='position: absolute; top: 1054px; left: 1820px'><font color=white size=3>Coques - History</font></a>
<a id='a269' name='#a269' style='position: absolute; top: 1033px; left: 1820px'><font color=white size=3>Murillo</font></a>
<a id='a120' name='#a120' style='position: absolute; top: 1083px; left: 1820px'><font color=white size=3>Cuyp</font></a>
<a id='a145' name='#a145' style='position: absolute; top: 1040px; left: 1820px'><font color=white size=3>Steen</font></a>
<a id='a146' name='#a146' style='position: absolute; top: 1016px; left: 1820px'><font color=white size=3>Cappelle</font></a>
<a id='a68' name='#a68' style='position: absolute; top: 1040px; left: 1820px'><font color=white size=3>Hooch</font></a>
<a id='a143' name='#a143' style='position: absolute; top: 1047px; left: 1820px'><font color=white size=3>Ruisdael</font></a>
<a id='a74' name='#a74' style='position: absolute; top: 1066px; left: 1820px'><font color=white size=3>Vermeer</font></a>
<a id='a251' name='#a251' style='position: absolute; top: 1081px; left: 1820px'><font color=white size=3>Giordano</font></a>
<a id='a277' name='#a277' style='position: absolute; top: 1140px; left: 1820px'><font color=white size=3>Ranc</font></a>
<a id='a64' name='#a64' style='position: absolute; top: 1147px; left: 1820px'><font color=white size=3>Watteau</font></a>
<a id='a250' name='#a250' style='position: absolute; top: 1180px; left: 1820px'><font color=white size=3>Corrado</font></a>
<a id='a136' name='#a136' style='position: absolute; top: 1205px; left: 1820px'><font color=white size=3>GB Tiepolo</font></a>
<a id='a126' name='#a126' style='position: absolute; top: 1198px; left: 1820px'><font color=white size=3>Canaletto</font></a>
<a id='a160' name='#a160' style='position: absolute; top: 1195px; left: 1820px'><font color=white size=3>Hogarth</font></a>
<a id='a130' name='#a130' style='position: absolute; top: 1226px; left: 1820px'><font color=white size=3>Guardi - Veduta</font></a>
<a id='a265' name='#a265' style='position: absolute; top: 1233px; left: 1820px'><font color=white size=3>Melendez - Still</font></a>
<a id='a406' name='#a406' style='position: absolute; top: 1212px; left: 1820px'><font color=white size=3>Reynolds - Grand style</font></a>
<a id='a71' name='#a71' style='position: absolute; top: 1240px; left: 1820px'><font color=white size=3>Gainsborough</font></a>
<a id='a266' name='#a266' style='position: absolute; top: 1228px; left: 1820px'><font color=white size=3>Mengs</font></a>
<a id='a109' name='#a109' style='position: absolute; top: 1285px; left: 1820px'><font color=white size=3>Levitzky - Portrait</font></a>
<a id='a115' name='#a115' style='position: absolute; top: 1257px; left: 1820px'><font color=white size=3>Rokotov - Portrait</font></a>
<a id='a339' name='#a339' style='position: absolute; top: 1277px; left: 1820px'><font color=white size=3>Copley - Portrait</font></a>
<a id='a32' name='#a32' style='position: absolute; top: 1257px; left: 1820px'><font color=white size=3>Goya</font></a>
<a id='a300' name='#a300' style='position: absolute; top: 1274px; left: 1820px'><font color=white size=3>J-L David - Empire style</font></a>
<a id='a72' name='#a72' style='position: absolute; top: 1281px; left: 1820px'><font color=white size=3>Blake - Symbolism</font></a>
<a id='a76' name='#a76' style='position: absolute; top: 1313px; left: 1820px'><font color=white size=3>Borovikovsky - Portrait</font></a>
<a id='a360' name='#a360' style='position: absolute; top: 1299px; left: 1820px'><font color=white size=3>Gros</font></a>
<a id='a62' name='#a62' style='position: absolute; top: 1337px; left: 1820px'><font color=white size=3>Turner</font></a>
<a id='a66' name='#a66' style='position: absolute; top: 1311px; left: 1820px'><font color=white size=3>Constable</font></a>
<a id='a86' name='#a86' style='position: absolute; top: 1368px; left: 1820px'><font color=white size=3>Tropinin</font></a>
<a id='a369' name='#a369' style='position: absolute; top: 1328px; left: 1820px'><font color=white size=3>Ingres</font></a>
<a id='a12' name='#a12' style='position: absolute; top: 1337px; left: 1820px'><font color=white size=3>Kiprensky</font></a>
<a id='a70' name='#a70' style='position: absolute; top: 1311px; left: 1820px'><font color=white size=3>Gericault</font></a>
<a id='a340' name='#a340' style='position: absolute; top: 1354px; left: 1820px'><font color=white size=3>Corot - Romantic.</font></a>
<a id='a73' name='#a73' style='position: absolute; top: 1366px; left: 1820px'><font color=white size=3>Delacroix</font></a>
<a id='a38' name='#a38' style='position: absolute; top: 1330px; left: 1820px'><font color=white size=3>Bryullov</font></a>
<a id='a107' name='#a107' style='position: absolute; top: 1356px; left: 1820px'><font color=white size=3>Ivanov</font></a>
<a id='a23' name='#a23' style='position: absolute; top: 1394px; left: 1820px'><font color=white size=3>Aivazovsky</font></a>
<a id='a58' name='#a58' style='position: absolute; top: 1378px; left: 1820px'><font color=white size=3>Courbet</font></a>
<a id='a65' name='#a65' style='position: absolute; top: 1404px; left: 1820px'><font color=white size=3>Bouguereau - Academic</font></a>
<a id='a93' name='#a93' style='position: absolute; top: 1440px; left: 1820px'><font color=white size=3>Moreau</font></a>
<a id='a99' name='#a99' style='position: absolute; top: 1397px; left: 1820px'><font color=white size=3>Hunt</font></a>
<a id='a59' name='#a59' style='position: absolute; top: 1423px; left: 1820px'><font color=white size=3>Rossetti</font></a>
<a id='a67' name='#a67' style='position: absolute; top: 1451px; left: 1820px'><font color=white size=3>Millais</font></a>
<a id='a252' name='#a252' style='position: absolute; top: 1432px; left: 1820px'><font color=white size=3>Haes</font></a>
<a id='a61' name='#a61' style='position: absolute; top: 1404px; left: 1820px'><font color=white size=3>Pissarro</font></a>
<a id='a322' name='#a322' style='position: absolute; top: 1428px; left: 1820px'><font color=white size=3>Bierstadt</font></a>
<a id='a113' name='#a113' style='position: absolute; top: 1432px; left: 1820px'><font color=white size=3>Ge</font></a>
<a id='a8' name='#a8' style='position: absolute; top: 1456px; left: 1820px'><font color=white size=3>Shishkin</font></a>
<a id='a17' name='#a17' style='position: absolute; top: 1430px; left: 1820px'><font color=white size=3>Manet</font></a>
<a id='a102' name='#a102' style='position: absolute; top: 1504px; left: 1820px'><font color=white size=3>Hughes</font></a>
<a id='a88' name='#a88' style='position: absolute; top: 1478px; left: 1820px'><font color=white size=3>Burne-Jones</font></a>
<a id='a53' name='#a53' style='position: absolute; top: 1456px; left: 1820px'><font color=white size=3>Degas</font></a>
<a id='a314' name='#a314' style='position: absolute; top: 1456px; left: 1820px'><font color=white size=3>Whistler - Tonalism</font></a>
<a id='a364' name='#a364' style='position: absolute; top: 1456px; left: 1820px'><font color=white size=3>Homer</font></a>
<a id='a142' name='#a142' style='position: absolute; top: 1456px; left: 1820px'><font color=white size=3>Maris</font></a>
<a id='a247' name='#a247' style='position: absolute; top: 1428px; left: 1820px'><font color=white size=3>Fortuny</font></a>
<a id='a36' name='#a36' style='position: absolute; top: 1480px; left: 1820px'><font color=white size=3>Sisley</font></a>
<a id='a69' name='#a69' style='position: absolute; top: 1435px; left: 1820px'><font color=white size=3>Cezanne</font></a>
<a id='a9' name='#a9' style='position: absolute; top: 1513px; left: 1820px'><font color=white size=3>Monet</font></a>
<a id='a85' name='#a85' style='position: absolute; top: 1482px; left: 1820px'><font color=white size=3>Harlamov</font></a>
<a id='a30' name='#a30' style='position: absolute; top: 1506px; left: 1820px'><font color=white size=3>Renoir</font></a>
<a id='a125' name='#a125' style='position: absolute; top: 1430px; left: 1820px'><font color=white size=3>Morisot</font></a>
<a id='a3' name='#a3' style='position: absolute; top: 1482px; left: 1820px'><font color=white size=3>Kuindzhi</font></a>
<a id='a47' name='#a47' style='position: absolute; top: 1506px; left: 1820px'><font color=white size=3>Vereshchagin</font></a>
<a id='a203' name='#a203' style='position: absolute; top: 1430px; left: 1820px'><font color=white size=3>Boldini</font></a>
<a id='a25' name='#a25' style='position: absolute; top: 1506px; left: 1820px'><font color=white size=3>Repin</font></a>
<a id='a75' name='#a75' style='position: absolute; top: 1523px; left: 1820px'><font color=white size=3>Rousseau</font></a>
<a id='a328' name='#a328' style='position: absolute; top: 1530px; left: 1820px'><font color=white size=3>Cassatt</font></a>
<a id='a348' name='#a348' style='position: absolute; top: 1534px; left: 1820px'><font color=white size=3>Eakins</font></a>
<a id='a5' name='#a5' style='position: absolute; top: 1534px; left: 1820px'><font color=white size=3>Surikov</font></a>
<a id='a20' name='#a20' style='position: absolute; top: 1485px; left: 1820px'><font color=white size=3>Vasnetsov - Folk</font></a>
<a id='a94' name='#a94' style='position: absolute; top: 1513px; left: 1820px'><font color=white size=3>Gauguin</font></a>
<a id='a51' name='#a51' style='position: absolute; top: 1528px; left: 1820px'><font color=white size=3>Waterhouse</font></a>
<a id='a182' name='#a182' style='position: absolute; top: 1568px; left: 1820px'><font color=white size=3>Lebourg</font></a>
<a id='a231' name='#a231' style='position: absolute; top: 1559px; left: 1820px'><font color=white size=3>Chase</font></a>
<a id='a21' name='#a21' style='position: absolute; top: 1461px; left: 1820px'><font color=white size=3>van Gogh</font></a>
<a id='a27' name='#a27' style='position: absolute; top: 1466px; left: 1820px'><font color=white size=3>Vrubel</font></a>
<a id='a60' name='#a60' style='position: absolute; top: 1564px; left: 1820px'><font color=white size=3>Sargent</font></a>
<a id='a208' name='#a208' style='position: absolute; top: 1485px; left: 1820px'><font color=white size=3>Cross</font></a>
<a id='a220' name='#a220' style='position: absolute; top: 1487px; left: 1820px'><font color=white size=3>Corinth - Impress.</font></a>
<a id='a225' name='#a225' style='position: absolute; top: 1551px; left: 1820px'><font color=white size=3>Luce</font></a>
<a id='a77' name='#a77' style='position: absolute; top: 1487px; left: 1820px'><font color=white size=3>Seurat</font></a>
<a id='a48' name='#a48' style='position: absolute; top: 1456px; left: 1820px'><font color=white size=3>Levitan</font></a>
<a id='a56' name='#a56' style='position: absolute; top: 1572px; left: 1820px'><font color=white size=3>Mucha</font></a>
<a id='a188' name='#a188' style='position: absolute; top: 1506px; left: 1820px'><font color=white size=3>Korovin</font></a>
<a id='a22' name='#a22' style='position: absolute; top: 1516px; left: 1820px'><font color=white size=3>Klimt</font></a>
<a id='a230' name='#a230' style='position: absolute; top: 1538px; left: 1820px'><font color=white size=3>Rysselberghe</font></a>
<a id='a63' name='#a63' style='position: absolute; top: 1513px; left: 1820px'><font color=white size=3>Munch</font></a>
<a id='a96' name='#a96' style='position: absolute; top: 1564px; left: 1820px'><font color=white size=3>Signac</font></a>
<a id='a213' name='#a213' style='position: absolute; top: 1585px; left: 1820px'><font color=white size=3>Sorolla</font></a>
<a id='a57' name='#a57' style='position: absolute; top: 1490px; left: 1820px'><font color=white size=3>T-Lautrec</font></a>
<a id='a2' name='#a2' style='position: absolute; top: 1610px; left: 1820px'><font color=white size=3>Lebasque</font></a>
<a id='a84' name='#a84' style='position: absolute; top: 1482px; left: 1820px'><font color=white size=3>Serov</font></a>
<a id='a4' name='#a4' style='position: absolute; top: 1551px; left: 1820px'><font color=white size=3>Kandinskiy</font></a>
<a id='a186' name='#a186' style='position: absolute; top: 1639px; left: 1820px'><font color=white size=3>Streeton</font></a>
<a id='a323' name='#a323' style='position: absolute; top: 1593px; left: 1820px'><font color=white size=3>Bonnard</font></a>
<a id='a16' name='#a16' style='position: absolute; top: 1664px; left: 1820px'><font color=white size=3>Vinogradov</font></a>
<a id='a49' name='#a49' style='position: absolute; top: 1664px; left: 1820px'><font color=white size=3>Matisse</font></a>
<a id='a6' name='#a6' style='position: absolute; top: 1501px; left: 1820px'><font color=white size=3>Borisov-Musatov</font></a>
<a id='a103' name='#a103' style='position: absolute; top: 1601px; left: 1820px'><font color=white size=3>Benois</font></a>
<a id='a318' name='#a318' style='position: absolute; top: 1559px; left: 1820px'><font color=white size=3>Balla</font></a>
<a id='a80' name='#a80' style='position: absolute; top: 1606px; left: 1820px'><font color=white size=3>Mondrian</font></a>
<a id='a11' name='#a11' style='position: absolute; top: 1534px; left: 1820px'><font color=white size=3>Roerich</font></a>
<a id='a199' name='#a199' style='position: absolute; top: 1639px; left: 1820px'><font color=white size=3>Frieseke</font></a>
<a id='a10' name='#a10' style='position: absolute; top: 1564px; left: 1820px'><font color=white size=3>Yuon</font></a>
<a id='a299' name='#a299' style='position: absolute; top: 1543px; left: 1820px'><font color=white size=3>Ciurlionis</font></a>
<a id='a417' name='#a417' style='position: absolute; top: 1528px; left: 1820px'><font color=white size=3>J Stella</font></a>
<a id='a13' name='#a13' style='position: absolute; top: 1568px; left: 1820px'><font color=white size=3>Petrov-Vodkin</font></a>
<a id='a37' name='#a37' style='position: absolute; top: 1572px; left: 1820px'><font color=white size=3>Kustodiev</font></a>
<a id='a26' name='#a26' style='position: absolute; top: 1601px; left: 1820px'><font color=white size=3>Malevich</font></a>
<a id='a79' name='#a79' style='position: absolute; top: 1639px; left: 1820px'><font color=white size=3>Klee - Surreal.</font></a>
<a id='a197' name='#a197' style='position: absolute; top: 1568px; left: 1820px'><font color=white size=3>Picabia</font></a>
<a id='a117' name='#a117' style='position: absolute; top: 1597px; left: 1820px'><font color=white size=3>Saryan</font></a>
<a id='a346' name='#a346' style='position: absolute; top: 1690px; left: 1820px'><font color=white size=3>Derain</font></a>
<a id='a351' name='#a351' style='position: absolute; top: 1538px; left: 1820px'><font color=white size=3>Kirchner</font></a>
<a id='a363' name='#a363' style='position: absolute; top: 1673px; left: 1820px'><font color=white size=3>Hofmann</font></a>
<a id='a386' name='#a386' style='position: absolute; top: 1564px; left: 1820px'><font color=white size=3>Marc</font></a>
<a id='a28' name='#a28' style='position: absolute; top: 1593px; left: 1820px'><font color=white size=3>Picasso</font></a>
<a id='a307' name='#a307' style='position: absolute; top: 1618px; left: 1820px'><font color=white size=3>Leger</font></a>
<a id='a357' name='#a357' style='position: absolute; top: 1643px; left: 1820px'><font color=white size=3>Gleizes</font></a>
<a id='a401' name='#a401' style='position: absolute; top: 1643px; left: 1820px'><font color=white size=3>Bruce</font></a>
<a id='a116' name='#a116' style='position: absolute; top: 1534px; left: 1820px'><font color=white size=3>Kent</font></a>
<a id='a298' name='#a298' style='position: absolute; top: 1509px; left: 1820px'><font color=white size=3>Boccioni</font></a>
<a id='a302' name='#a302' style='position: absolute; top: 1564px; left: 1820px'><font color=white size=3>Hopper</font></a>
<a id='a320' name='#a320' style='position: absolute; top: 1506px; left: 1820px'><font color=white size=3>Bellows</font></a>
<a id='a81' name='#a81' style='position: absolute; top: 1534px; left: 1820px'><font color=white size=3>Filonov</font></a>
<a id='a345' name='#a345' style='position: absolute; top: 1551px; left: 1820px'><font color=white size=3>Demuth</font></a>
<a id='a375' name='#a375' style='position: absolute; top: 1669px; left: 1820px'><font color=white size=3>Metzinger</font></a>
<a id='a419' name='#a419' style='position: absolute; top: 1631px; left: 1820px'><font color=white size=3>van Doesburg</font></a>
<a id='a1' name='#a1' style='position: absolute; top: 1564px; left: 1820px'><font color=white size=3>Modigliani</font></a>
<a id='a44' name='#a44' style='position: absolute; top: 1664px; left: 1820px'><font color=white size=3>Serebriakova</font></a>
<a id='a391' name='#a391' style='position: absolute; top: 1589px; left: 1820px'><font color=white size=3>Beckmann</font></a>
<a id='a344' name='#a344' style='position: absolute; top: 1543px; left: 1820px'><font color=white size=3>Delaunay</font></a>
<a id='a7' name='#a7' style='position: absolute; top: 1639px; left: 1820px'><font color=white size=3>Rivera</font></a>
<a id='a413' name='#a413' style='position: absolute; top: 1614px; left: 1820px'><font color=white size=3>M Russell</font></a>
<a id='a40' name='#a40' style='position: absolute; top: 1597px; left: 1820px'><font color=white size=3>Chagall</font></a>
<a id='a301' name='#a301' style='position: absolute; top: 1698px; left: 1820px'><font color=white size=3>Duchamp</font></a>
<a id='a310' name='#a310' style='position: absolute; top: 1513px; left: 1820px'><font color=white size=3>Macke</font></a>
<a id='a316' name='#a316' style='position: absolute; top: 1643px; left: 1820px'><font color=white size=3>Albers</font></a>
<a id='a336' name='#a336' style='position: absolute; top: 1614px; left: 1820px'><font color=white size=3>Chirico</font></a>
<a id='a321' name='#a321' style='position: absolute; top: 1664px; left: 1820px'><font color=white size=3>Benton - Region.</font></a>
<a id='a52' name='#a52' style='position: absolute; top: 1538px; left: 1820px'><font color=white size=3>Schiele</font></a>
<a id='a384' name='#a384' style='position: absolute; top: 1639px; left: 1820px'><font color=white size=3>Macdonald</font></a>
<a id='a395' name='#a395' style='position: absolute; top: 1694px; left: 1820px'><font color=white size=3>Morandi - Still</font></a>
<a id='a421' name='#a421' style='position: absolute; top: 1698px; left: 1820px'><font color=white size=3>Tobey</font></a>
<a id='a315' name='#a315' style='position: absolute; top: 1593px; left: 1820px'><font color=white size=3>Wood - Region.</font></a>
<a id='a352' name='#a352' style='position: absolute; top: 1618px; left: 1820px'><font color=white size=3>Ernst</font></a>
<a id='a343' name='#a343' style='position: absolute; top: 1669px; left: 1820px'><font color=white size=3>S Davis</font></a>
<a id='a82' name='#a82' style='position: absolute; top: 1643px; left: 1820px'><font color=white size=3>Miro</font></a>
<a id='a330' name='#a330' style='position: absolute; top: 1614px; left: 1820px'><font color=white size=3>Soutine</font></a>
<a id='a361' name='#a361' style='position: absolute; top: 1702px; left: 1820px'><font color=white size=3>Grosz</font></a>
<a id='a415' name='#a415' style='position: absolute; top: 1639px; left: 1820px'><font color=white size=3>Siqueiros</font></a>
<a id='a14' name='#a14' style='position: absolute; top: 1673px; left: 1820px'><font color=white size=3>Magritte</font></a>
<a id='a309' name='#a309' style='position: absolute; top: 1711px; left: 1820px'><font color=white size=3>M.C.Escher</font></a>
<a id='a355' name='#a355' style='position: absolute; top: 1673px; left: 1820px'><font color=white size=3>Feitelson</font></a>
<a id='a105' name='#a105' style='position: absolute; top: 1593px; left: 1820px'><font color=white size=3>Deyneka</font></a>
<a id='a418' name='#a418' style='position: absolute; top: 1702px; left: 1820px'><font color=white size=3>Tanguy</font></a>
<a id='a412' name='#a412' style='position: absolute; top: 1664px; left: 1820px'><font color=white size=3>Rothko</font></a>
<a id='a15' name='#a15' style='position: absolute; top: 1732px; left: 1820px'><font color=white size=3>Dali</font></a>
<a id='a306' name='#a306' style='position: absolute; top: 1757px; left: 1820px'><font color=white size=3>Kooning</font></a>
<a id='a358' name='#a358' style='position: absolute; top: 1589px; left: 1820px'><font color=white size=3>Gorky</font></a>
<a id='a398' name='#a398' style='position: absolute; top: 1690px; left: 1820px'><font color=white size=3>Newman</font></a>
<a id='a33' name='#a33' style='position: absolute; top: 1643px; left: 1820px'><font color=white size=3>Kahlo</font></a>
<a id='a404' name='#a404' style='position: absolute; top: 1698px; left: 1820px'><font color=white size=3>Porter - Realism</font></a>
<a id='a319' name='#a319' style='position: absolute; top: 1803px; left: 1820px'><font color=white size=3>Balthus</font></a>
<a id='a297' name='#a297' style='position: absolute; top: 1761px; left: 1820px'><font color=white size=3>Bacon</font></a>
<a id='a118' name='#a118' style='position: absolute; top: 1723px; left: 1820px'><font color=white size=3>Pollock</font></a>
<a id='a383' name='#a383' style='position: absolute; top: 1723px; left: 1820px'><font color=white size=3>Louis</font></a>
<a id='a388' name='#a388' style='position: absolute; top: 1807px; left: 1820px'><font color=white size=3>A Martin</font></a>
<a id='a362' name='#a362' style='position: absolute; top: 1727px; left: 1820px'><font color=white size=3>Guston - Figur.</font></a>
<a id='a18' name='#a18' style='position: absolute; top: 1719px; left: 1820px'><font color=white size=3>Wyeth</font></a>
<a id='a341' name='#a341' style='position: absolute; top: 1753px; left: 1820px'><font color=white size=3>G Davis</font></a>
<a id='a78' name='#a78' style='position: absolute; top: 1757px; left: 1820px'><font color=white size=3>Freud - Portrait</font></a>
<a id='a407' name='#a407' style='position: absolute; top: 1786px; left: 1820px'><font color=white size=3>Diebenkorn</font></a>
<a id='a308' name='#a308' style='position: absolute; top: 1782px; left: 1820px'><font color=white size=3>Lichtenstein</font></a>
<a id='a399' name='#a399' style='position: absolute; top: 1820px; left: 1820px'><font color=white size=3>Noland</font></a>
<a id='a376' name='#a376' style='position: absolute; top: 1820px; left: 1820px'><font color=white size=3>Benjamin</font></a>
<a id='a409' name='#a409' style='position: absolute; top: 1795px; left: 1820px'><font color=white size=3>Rauschenberg</font></a>
<a id='a338' name='#a338' style='position: absolute; top: 1706px; left: 1820px'><font color=white size=3>Cook</font></a>
<a id='a83' name='#a83' style='position: absolute; top: 1811px; left: 1820px'><font color=white size=3>Warhol</font></a>
<a id='a356' name='#a356' style='position: absolute; top: 1853px; left: 1820px'><font color=white size=3>Frankenthaler</font></a>
<a id='a304' name='#a304' style='position: absolute; top: 1837px; left: 1820px'><font color=white size=3>Johns</font></a>
<a id='a408' name='#a408' style='position: absolute; top: 1841px; left: 1820px'><font color=white size=3>Riley</font></a>
<a id='a312' name='#a312' style='position: absolute; top: 1757px; left: 1820px'><font color=white size=3>Richter</font></a>
<a id='a353' name='#a353' style='position: absolute; top: 1790px; left: 1820px'><font color=white size=3>Estes - Photorealism</font></a>
<a id='a365' name='#a365' style='position: absolute; top: 1837px; left: 1820px'><font color=white size=3>Hoyland</font></a>
<a id='a416' name='#a416' style='position: absolute; top: 1837px; left: 1820px'><font color=white size=3>F Stella</font></a>
<a id='a342' name='#a342' style='position: absolute; top: 1853px; left: 1820px'><font color=white size=3>R Davis</font></a>
<a id='a385' name='#a385' style='position: absolute; top: 1866px; left: 1820px'><font color=white size=3>Mangold</font></a>
<a id='a387' name='#a387' style='position: absolute; top: 1895px; left: 1820px'><font color=white size=3>Marden</font></a>
<a id='a414' name='#a414' style='position: absolute; top: 1862px; left: 1820px'><font color=white size=3>Seery</font></a>
<a id='a402' name='#a402' style='position: absolute; top: 1904px; left: 1820px'><font color=white size=3>Angermann</font></a>
<a id='a377' name='#a377' style='position: absolute; top: 1870px; left: 1820px'><font color=white size=3>Larmee</font></a>
<a id='a380' name='#a380' style='position: absolute; top: 1824px; left: 1820px'><font color=white size=3>Landfield</font></a>
<a id='a329' name='#a329' style='position: absolute; top: 1891px; left: 1820px'><font color=white size=3>Touchon</font></a>
<a id='a305' name='#a305' style='position: absolute; top: 1841px; left: 1820px'><font color=white size=3>Basquiat - Primitiv.</font></a>

<img align=left class=coords border=0 src=maps/en.png>
<div style='background:transparent; position:absolute; top: 0px; left: 0px; width:100%; height:100%;'>
<a  href='http://alch.strangled.net/artquiz/aquiz/artists.php?nat=American' title=''><div class=area style='position:absolute; width:69px; height:20px; left:1165px; top:185px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artists.php?nat=Italian' title=''><div class=area style='position:absolute; width:47px; height:20px; left:1165px; top:208px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artists.php?nat=French' title=''><div class=area style='position:absolute; width:51px; height:20px; left:1165px; top:231px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artists.php?nat=Russian' title=''><div class=area style='position:absolute; width:56px; height:20px; left:1165px; top:254px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artists.php?nat=Dutch' title=''><div class=area style='position:absolute; width:43px; height:20px; left:1165px; top:277px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artists.php?nat=German' title=''><div class=area style='position:absolute; width:58px; height:20px; left:1165px; top:300px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artists.php?nat=British' title=''><div class=area style='position:absolute; width:47px; height:20px; left:1165px; top:323px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artists.php?nat=Spanish' title=''><div class=area style='position:absolute; width:58px; height:20px; left:1165px; top:346px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artists.php?nat=Greek' title=''><div class=area style='position:absolute; width:47px; height:20px; left:1165px; top:369px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artists.php?nat=Chinese' title=''><div class=area style='position:absolute; width:59px; height:20px; left:1165px; top:392px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artists.php?nat=Mexican' title=''><div class=area style='position:absolute; width:61px; height:20px; left:1285px; top:185px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artists.php?nat=Indian' title=''><div class=area style='position:absolute; width:47px; height:20px; left:1285px; top:208px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artists.php?nat=Japanese' title=''><div class=area style='position:absolute; width:70px; height:20px; left:1285px; top:231px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artists.php?nat=Islamic' title=''><div class=area style='position:absolute; width:53px; height:20px; left:1285px; top:254px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artists.php?nat=Belgian' title=''><div class=area style='position:absolute; width:56px; height:20px; left:1285px; top:277px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artists.php?nat=Czech' title=''><div class=area style='position:absolute; width:46px; height:20px; left:1285px; top:300px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artists.php?nat=Lithuanian' title=''><div class=area style='position:absolute; width:75px; height:20px; left:1285px; top:323px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artists.php?nat=Armenian' title=''><div class=area style='position:absolute; width:70px; height:20px; left:1285px; top:346px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artists.php?nat=Korean' title=''><div class=area style='position:absolute; width:53px; height:20px; left:1285px; top:369px'></div></a>
<a target=_blank href='i/tutorial.png' title=''><div class=area style='position:absolute; width:192px; height:34px; left:1158px; top:18px'></div></a>
<a  href='build-amap.php?t_name=Futurism' title=''><div class=area style='position:absolute; width:30px; height:18px; left:1569px; top:1478px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Futurism' title=''><div class=area style='position:absolute; width:31px; height:18px; left:1538px; top:1478px'></div></a>
<a  href='build-amap.php?t_name=Dada' title=''><div class=area style='position:absolute; width:19px; height:18px; left:194px; top:1729px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Dada' title=''><div class=area style='position:absolute; width:20px; height:18px; left:174px; top:1729px'></div></a>
<a  href='build-amap.php?t_name=Op art' title=''><div class=area style='position:absolute; width:23px; height:18px; left:1570px; top:1790px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Op art' title=''><div class=area style='position:absolute; width:23px; height:18px; left:1547px; top:1790px'></div></a>
<a  href='build-amap.php?t_name=Lyrical Abstraction' title=''><div class=area style='position:absolute; width:39px; height:18px; left:715px; top:1748px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Lyrical Abstraction' title=''><div class=area style='position:absolute; width:39px; height:18px; left:676px; top:1748px'></div></a>
<a  href='build-amap.php?t_name=Color Field' title=''><div class=area style='position:absolute; width:38px; height:18px; left:471px; top:1643px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Color Field' title=''><div class=area style='position:absolute; width:38px; height:18px; left:433px; top:1643px'></div></a>
<a  href='build-amap.php?t_name=Renaissance' title=''><div class=area style='position:absolute; width:43px; height:18px; left:748px; top:454px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Renaissance' title=''><div class=area style='position:absolute; width:44px; height:18px; left:704px; top:454px'></div></a>
<a  href='build-amap.php?t_name=Abstract Expressionism' title=''><div class=area style='position:absolute; width:49px; height:18px; left:571px; top:1637px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Abstract Expressionism' title=''><div class=area style='position:absolute; width:49px; height:18px; left:522px; top:1637px'></div></a>
<a  href='build-amap.php?t_name=Mannerism' title=''><div class=area style='position:absolute; width:38px; height:18px; left:886px; top:650px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Mannerism' title=''><div class=area style='position:absolute; width:38px; height:18px; left:848px; top:650px'></div></a>
<a  href='build-amap.php?t_name=Neoplasticism' title=''><div class=area style='position:absolute; width:47px; height:18px; left:1659px; top:1588px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Neoplasticism' title=''><div class=area style='position:absolute; width:47px; height:18px; left:1612px; top:1588px'></div></a>
<a  href='build-amap.php?t_name=Post-dogmatism' title=''><div class=area style='position:absolute; width:53px; height:18px; left:1162px; top:1918px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Post-dogmatism' title=''><div class=area style='position:absolute; width:54px; height:18px; left:1108px; top:1918px'></div></a>
<a  href='build-amap.php?t_name=Geometric abstraction' title=''><div class=area style='position:absolute; width:38px; height:18px; left:1442px; top:1497px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Geometric abstraction' title=''><div class=area style='position:absolute; width:38px; height:18px; left:1404px; top:1497px'></div></a>
<a  href='build-amap.php?t_name=Synchromism' title=''><div class=area style='position:absolute; width:46px; height:18px; left:207px; top:1580px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Synchromism' title=''><div class=area style='position:absolute; width:46px; height:18px; left:161px; top:1580px'></div></a>
<a  href='build-amap.php?t_name=Precisionism' title=''><div class=area style='position:absolute; width:43px; height:18px; left:1658px; top:1486px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Precisionism' title=''><div class=area style='position:absolute; width:44px; height:18px; left:1614px; top:1486px'></div></a>
<a  href='build-amap.php?t_name=Minimalism' title=''><div class=area style='position:absolute; width:39px; height:18px; left:1686px; top:1782px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Minimalism' title=''><div class=area style='position:absolute; width:40px; height:18px; left:1646px; top:1782px'></div></a>
<a  href='build-amap.php?t_name=Landscape' title=''><div class=area style='position:absolute; width:38px; height:18px; left:207px; top:902px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Landscape' title=''><div class=area style='position:absolute; width:38px; height:18px; left:169px; top:902px'></div></a>
<a  href='build-amap.php?t_name=Gothic' title=''><div class=area style='position:absolute; width:24px; height:18px; left:767px; top:328px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Gothic art' title=''><div class=area style='position:absolute; width:24px; height:18px; left:743px; top:328px'></div></a>
<a  href='build-amap.php?t_name=Pop Art' title=''><div class=area style='position:absolute; width:27px; height:18px; left:914px; top:1756px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Pop Art' title=''><div class=area style='position:absolute; width:27px; height:18px; left:887px; top:1756px'></div></a>
<a  href='build-amap.php?t_name=Dutch Golden age' title=''><div class=area style='position:absolute; width:60px; height:18px; left:97px; top:872px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Dutch Golden age' title=''><div class=area style='position:absolute; width:61px; height:18px; left:36px; top:872px'></div></a>
<a  href='build-amap.php?t_name=Rococo' title=''><div class=area style='position:absolute; width:26px; height:18px; left:1265px; top:1089px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Rococo' title=''><div class=area style='position:absolute; width:27px; height:18px; left:1238px; top:1089px'></div></a>
<a  href='build-amap.php?t_name=Fauvism' title=''><div class=area style='position:absolute; width:29px; height:18px; left:1677px; top:1729px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Fauvism' title=''><div class=area style='position:absolute; width:30px; height:18px; left:1647px; top:1729px'></div></a>
<a  href='build-amap.php?t_name=Neoclassicism' title=''><div class=area style='position:absolute; width:47px; height:18px; left:779px; top:1202px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Neoclassicism' title=''><div class=area style='position:absolute; width:48px; height:18px; left:731px; top:1202px'></div></a>
<a  href='build-amap.php?t_name=Cubism' title=''><div class=area style='position:absolute; width:26px; height:18px; left:123px; top:1729px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Cubism' title=''><div class=area style='position:absolute; width:27px; height:18px; left:96px; top:1729px'></div></a>
<a  href='build-amap.php?t_name=Baroque' title=''><div class=area style='position:absolute; width:30px; height:18px; left:801px; top:1162px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Baroque' title=''><div class=area style='position:absolute; width:31px; height:18px; left:770px; top:1162px'></div></a>
<a  href='build-amap.php?t_name=Primitivism' title=''><div class=area style='position:absolute; width:38px; height:18px; left:1754px; top:1742px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Primitivism' title=''><div class=area style='position:absolute; width:39px; height:18px; left:1715px; top:1742px'></div></a>
<a  href='build-amap.php?t_name=Northern Renaissance' title=''><div class=area style='position:absolute; width:73px; height:18px; left:258px; top:454px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Northern Renaissance' title=''><div class=area style='position:absolute; width:73px; height:18px; left:185px; top:454px'></div></a>
<a  href='build-amap.php?t_name=Art Nouveau' title=''><div class=area style='position:absolute; width:42px; height:18px; left:609px; top:1455px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Art Nouveau' title=''><div class=area style='position:absolute; width:43px; height:18px; left:566px; top:1455px'></div></a>
<a  href='build-amap.php?t_name=Post-Impressionism' title=''><div class=area style='position:absolute; width:64px; height:18px; left:934px; top:1400px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Post-Impressionism' title=''><div class=area style='position:absolute; width:64px; height:18px; left:870px; top:1400px'></div></a>
<a  href='build-amap.php?t_name=Byzantine Art' title=''><div class=area style='position:absolute; width:46px; height:18px; left:854px; top:515px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Byzantine Art' title=''><div class=area style='position:absolute; width:46px; height:18px; left:808px; top:515px'></div></a>
<a  href='build-amap.php?t_name=Surrealism' title=''><div class=area style='position:absolute; width:37px; height:18px; left:308px; top:1586px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Surrealism' title=''><div class=area style='position:absolute; width:38px; height:18px; left:270px; top:1586px'></div></a>
<a  href='build-amap.php?t_name=Romanticism' title=''><div class=area style='position:absolute; width:44px; height:18px; left:156px; top:1233px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Romanticism' title=''><div class=area style='position:absolute; width:44px; height:18px; left:112px; top:1233px'></div></a>
<a  href='build-amap.php?t_name=Symbolism' title=''><div class=area style='position:absolute; width:38px; height:18px; left:430px; top:1414px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Symbolism' title=''><div class=area style='position:absolute; width:38px; height:18px; left:392px; top:1414px'></div></a>
<a  href='build-amap.php?t_name=Realism' title=''><div class=area style='position:absolute; width:28px; height:18px; left:1214px; top:1813px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Realism' title=''><div class=area style='position:absolute; width:29px; height:18px; left:1185px; top:1813px'></div></a>
<a  href='build-amap.php?t_name=Impressionism' title=''><div class=area style='position:absolute; width:48px; height:18px; left:957px; top:1674px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Impressionism' title=''><div class=area style='position:absolute; width:49px; height:18px; left:908px; top:1674px'></div></a>
<a  href='build-amap.php?t_name=Expressionism' title=''><div class=area style='position:absolute; width:48px; height:18px; left:1345px; top:1467px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Expressionism' title=''><div class=area style='position:absolute; width:49px; height:18px; left:1296px; top:1467px'></div></a>
<a  href='build-amap.php?t_name=Pre-Raphaelites' title=''><div class=area style='position:absolute; width:54px; height:18px; left:309px; top:1390px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Pre-Raphaelites' title=''><div class=area style='position:absolute; width:54px; height:18px; left:255px; top:1390px'></div></a>
<a  href='build-amap.php?t_name=Russian Enlightenment' title=''><div class=area style='position:absolute; width:76px; height:18px; left:485px; top:1209px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Russian Enlightenment' title=''><div class=area style='position:absolute; width:76px; height:18px; left:409px; top:1209px'></div></a>
<a  href='build-amap.php?t_name=Flemish Baroque' title=''><div class=area style='position:absolute; width:57px; height:18px; left:444px; top:1162px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Flemish Baroque' title=''><div class=area style='position:absolute; width:58px; height:18px; left:386px; top:1162px'></div></a>
<a  href='build-amap.php?t_name=(Neoclassicism)' title=''><div class=area style='position:absolute; width:51px; height:18px; left:332px; top:1777px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=(Neoclassicism)' title=''><div class=area style='position:absolute; width:52px; height:18px; left:280px; top:1777px'></div></a>
<a  href='build-amap.php?t_name=Ancient' title=''><div class=area style='position:absolute; width:28px; height:18px; left:763px; top:21px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Ancient art' title=''><div class=area style='position:absolute; width:28px; height:18px; left:735px; top:21px'></div></a>
<a  href='build-amap.php?t_name=World art' title=''><div class=area style='position:absolute; width:33px; height:18px; left:1572px; top:126px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=World art' title=''><div class=area style='position:absolute; width:34px; height:18px; left:1538px; top:126px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=360&a_id=405&g=Pre-historic art&y=-40000' title='Pre-historic art
Pre-historic art
Pre-historic
40000BC-3000BC'><div class=area style='position:absolute; width:51px; height:20px; left:394px; top:32px'></div></a>
<a  href='build-amap.php?mp=360&a_id=405&g=Pre-historic art&y=-40000' title='Pre-historic art
Pre-historic art
Pre-historic
40000BC-3000BC'><div class=area style='position:absolute; width:50px; height:20px; left:445px; top:32px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=480&a_id=350&g=Egyptian art&y=-3000' title='Egyptian art
Egyptian art
Egyptian
3000BC-1000BC'><div class=area style='position:absolute; width:39px; height:20px; left:514px; top:46px'></div></a>
<a  href='build-amap.php?mp=480&a_id=350&g=Egyptian art&y=-3000' title='Egyptian art
Egyptian art
Egyptian
3000BC-1000BC'><div class=area style='position:absolute; width:38px; height:20px; left:553px; top:46px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=570&a_id=392&g=Mesopotamian art&y=-3000' title='Mesopotamian art
Mesopotamian art
Mesopotamian
3000BC-1000BC'><div class=area style='position:absolute; width:56px; height:20px; left:604px; top:46px'></div></a>
<a  href='build-amap.php?mp=570&a_id=392&g=Mesopotamian art&y=-3000' title='Mesopotamian art
Mesopotamian art
Mesopotamian
3000BC-1000BC'><div class=area style='position:absolute; width:55px; height:20px; left:660px; top:46px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=490&a_id=394&g=Minoan art&y=-1800' title='Minoan art
Minoan art
Greek
1800BC-1500BC'><div class=area style='position:absolute; width:34px; height:20px; left:524px; top:81px'></div></a>
<a  href='build-amap.php?mp=490&a_id=394&g=Minoan art&y=-1800' title='Minoan art
Minoan art
Greek
1800BC-1500BC'><div class=area style='position:absolute; width:34px; height:20px; left:558px; top:81px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=590&a_id=396&g=Mycenaean art&y=-1550' title='Mycenaean art
Mycenaean art
Greek
1550BC-1250BC'><div class=area style='position:absolute; width:47px; height:20px; left:624px; top:88px'></div></a>
<a  href='build-amap.php?mp=590&a_id=396&g=Mycenaean art&y=-1550' title='Mycenaean art
Mycenaean art
Greek
1550BC-1250BC'><div class=area style='position:absolute; width:46px; height:20px; left:671px; top:88px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=360&a_id=317&g=Assyrian art&y=-850' title='Assyrian art
Assyrian art
Assyrian
850BC-650BC'><div class=area style='position:absolute; width:40px; height:20px; left:394px; top:109px'></div></a>
<a  href='build-amap.php?mp=360&a_id=317&g=Assyrian art&y=-850' title='Assyrian art
Assyrian art
Assyrian
850BC-650BC'><div class=area style='position:absolute; width:39px; height:20px; left:434px; top:109px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=470&a_id=354&g=Etruscan art&y=-675' title='Etruscan art
Etruscan art
Italian
675BC-480BC'><div class=area style='position:absolute; width:39px; height:20px; left:504px; top:119px'></div></a>
<a  href='build-amap.php?mp=470&a_id=354&g=Etruscan art&y=-675' title='Etruscan art
Etruscan art
Italian
675BC-480BC'><div class=area style='position:absolute; width:39px; height:20px; left:543px; top:119px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=580&a_id=359&g=Greek art&y=-650' title='Greek art
Greek art
Greek
650BC-0'><div class=area style='position:absolute; width:31px; height:20px; left:614px; top:141px'></div></a>
<a  href='build-amap.php?mp=580&a_id=359&g=Greek art&y=-650' title='Greek art
Greek art
Greek
650BC-0'><div class=area style='position:absolute; width:30px; height:20px; left:645px; top:141px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=470&a_id=410&g=Roman art&y=-80' title='Roman art
Roman art
Roman
80BC-320'><div class=area style='position:absolute; width:34px; height:20px; left:504px; top:150px'></div></a>
<a  href='build-amap.php?mp=470&a_id=410&g=Roman art&y=-80' title='Roman art
Roman art
Roman
80BC-320'><div class=area style='position:absolute; width:33px; height:20px; left:538px; top:150px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1750&a_id=331&g=Chinese art&y=0' title='Chinese art
Chinese art
Chinese
0-200'><div class=area style='position:absolute; width:47px; height:20px; left:1690px; top:144px'></div></a>
<a  href='build-amap.php?mp=1750&a_id=331&g=Chinese art&y=0' title='Chinese art
Chinese art
Chinese
0-200'><div class=area style='position:absolute; width:47px; height:20px; left:1737px; top:144px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1730&a_id=366&g=Indian art&y=0' title='Indian art
Indian art
Indian
0-1100'><div class=area style='position:absolute; width:43px; height:20px; left:1679px; top:207px'></div></a>
<a  href='build-amap.php?mp=1730&a_id=366&g=Indian art&y=0' title='Indian art
Indian art
Indian
0-1100'><div class=area style='position:absolute; width:42px; height:20px; left:1722px; top:207px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1740&a_id=393&g=Mexican art&y=0' title='Mexican art
Mexican art
Mexican
0BC-1600'><div class=area style='position:absolute; width:38px; height:20px; left:1699px; top:242px'></div></a>
<a  href='build-amap.php?mp=1740&a_id=393&g=Mexican art&y=0' title='Mexican art
Mexican art
Mexican
0BC-1600'><div class=area style='position:absolute; width:37px; height:20px; left:1737px; top:242px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1750&a_id=334&g=Chinese art&y=200' title='Chinese art
Chinese art
Chinese
200-800'><div class=area style='position:absolute; width:54px; height:20px; left:1676px; top:179px'></div></a>
<a  href='build-amap.php?mp=1750&a_id=334&g=Chinese art&y=200' title='Chinese art
Chinese art
Chinese
200-800'><div class=area style='position:absolute; width:54px; height:20px; left:1730px; top:179px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=580&a_id=349&g=Early christian art&y=200' title='Early christian art
Early christian art
Christians
200-600'><div class=area style='position:absolute; width:55px; height:20px; left:614px; top:186px'></div></a>
<a  href='build-amap.php?mp=580&a_id=349&g=Early christian art&y=200' title='Early christian art
Early christian art
Christians
200-600'><div class=area style='position:absolute; width:54px; height:20px; left:669px; top:186px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1630&a_id=374&g=Japanese art&y=200' title='Japanese art
Japanese art
Japanese
200-800'><div class=area style='position:absolute; width:59px; height:20px; left:1546px; top:186px'></div></a>
<a  href='build-amap.php?mp=1630&a_id=374&g=Japanese art&y=200' title='Japanese art
Japanese art
Japanese
200-800'><div class=area style='position:absolute; width:59px; height:20px; left:1605px; top:186px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=810&a_id=326&g=Byzantine art&y=500' title='Byzantine art
Byzantine art
Byzantine
500-800'><div class=area style='position:absolute; width:61px; height:20px; left:844px; top:235px'></div></a>
<a  href='build-amap.php?mp=810&a_id=326&g=Byzantine art&y=500' title='Byzantine art
Byzantine art
Byzantine
500-800'><div class=area style='position:absolute; width:61px; height:20px; left:905px; top:235px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=360&a_id=327&g=Carolingian art&y=800' title='Carolingian art
Carolingian art
Frankish
800-900'><div class=area style='position:absolute; width:45px; height:20px; left:394px; top:256px'></div></a>
<a  href='build-amap.php?mp=360&a_id=327&g=Carolingian art&y=800' title='Carolingian art
Carolingian art
Frankish
800-900'><div class=area style='position:absolute; width:45px; height:20px; left:439px; top:256px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1640&a_id=335&g=Chinese art&y=800' title='Chinese art
Chinese art
Chinese
800-1200'><div class=area style='position:absolute; width:52px; height:20px; left:1570px; top:284px'></div></a>
<a  href='build-amap.php?mp=1640&a_id=335&g=Chinese art&y=800' title='Chinese art
Chinese art
Chinese
800-1200'><div class=area style='position:absolute; width:52px; height:20px; left:1622px; top:284px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1700&a_id=370&g=Islamic art&y=900' title='Islamic art
Islamic art
Islamic
900-1500'><div class=area style='position:absolute; width:52px; height:20px; left:1631px; top:312px'></div></a>
<a  href='build-amap.php?mp=1700&a_id=370&g=Islamic art&y=900' title='Islamic art
Islamic art
Islamic
900-1500'><div class=area style='position:absolute; width:51px; height:20px; left:1683px; top:312px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=580&a_id=400&g=Ottonian art&y=900' title='Ottonian art
Ottonian art
German
900-1000'><div class=area style='position:absolute; width:38px; height:20px; left:614px; top:277px'></div></a>
<a  href='build-amap.php?mp=580&a_id=400&g=Ottonian art&y=900' title='Ottonian art
Ottonian art
German
900-1000'><div class=area style='position:absolute; width:37px; height:20px; left:652px; top:277px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=460&a_id=411&g=Romanesque art&y=1000' title='Romanesque art
Romanesque art
European
1000-1200'><div class=area style='position:absolute; width:51px; height:20px; left:494px; top:291px'></div></a>
<a  href='build-amap.php?mp=460&a_id=411&g=Romanesque art&y=1000' title='Romanesque art
Romanesque art
European
1000-1200'><div class=area style='position:absolute; width:51px; height:20px; left:545px; top:291px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=790&a_id=325&g=Byzantine art&y=1100' title='Byzantine art
Byzantine art
Byzantine
1100-1400'><div class=area style='position:absolute; width:63px; height:20px; left:824px; top:340px'></div></a>
<a  href='build-amap.php?mp=790&a_id=325&g=Byzantine art&y=1100' title='Byzantine art
Byzantine art
Byzantine
1100-1400'><div class=area style='position:absolute; width:63px; height:20px; left:887px; top:340px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1730&a_id=367&g=Indian art&y=1100' title='Indian art
Indian art
Indian
1100-1600'><div class=area style='position:absolute; width:50px; height:20px; left:1664px; top:403px'></div></a>
<a  href='build-amap.php?mp=1730&a_id=367&g=Indian art&y=1100' title='Indian art
Indian art
Indian
1100-1600'><div class=area style='position:absolute; width:50px; height:20px; left:1714px; top:403px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1720&a_id=372&g=Japanese art&y=1100' title='Japanese art
Japanese art
Japanese
1100-1600'><div class=area style='position:absolute; width:62px; height:20px; left:1631px; top:431px'></div></a>
<a  href='build-amap.php?mp=1720&a_id=372&g=Japanese art&y=1100' title='Japanese art
Japanese art
Japanese
1100-1600'><div class=area style='position:absolute; width:61px; height:20px; left:1693px; top:431px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1750&a_id=332&g=Chinese art&y=1200' title='Chinese art
Chinese art
Chinese
1200-1600'><div class=area style='position:absolute; width:58px; height:20px; left:1668px; top:488px'></div></a>
<a  href='build-amap.php?mp=1750&a_id=332&g=Chinese art&y=1200' title='Chinese art
Chinese art
Chinese
1200-1600'><div class=area style='position:absolute; width:58px; height:20px; left:1726px; top:488px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=10&a_id=337&g=Gothic, Florentine&y=1240' title='Cimabue
Gothic, Florentine
Italian
1240-1302'><div class=area style='position:absolute; width:64px; height:20px; left:44px; top:349px'></div></a>
<a  href='build-amap.php?mp=10&a_id=337&g=Gothic, Florentine&y=1240' title='Cimabue
Gothic, Florentine
Italian
1240-1302'><div class=area style='position:absolute; width:63px; height:20px; left:108px; top:349px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=150&a_id=347&g=Sienese, Gothic&y=1255' title='Duccio, Di, Buoninsegna
Sienese, Gothic
Italian
1255-1318'><div class=area style='position:absolute; width:53px; height:20px; left:184px; top:358px'></div></a>
<a  href='build-amap.php?mp=150&a_id=347&g=Sienese, Gothic&y=1255' title='Duccio, Di, Buoninsegna
Sienese, Gothic
Italian
1255-1318'><div class=area style='position:absolute; width:53px; height:20px; left:237px; top:358px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=555&a_id=41&g=Late Gothic, Proto-Renaissance&y=1266' title='Giotto di Bondone
Late Gothic, Proto-Renaissance
Italian
1266-1337'><div class=area style='position:absolute; width:120px; height:20px; left:350px; top:366px'></div></a>
<a  href='build-amap.php?mp=555&a_id=41&g=Late Gothic, Proto-Renaissance&y=1266' title='Giotto di Bondone
Late Gothic, Proto-Renaissance
Italian
1266-1337'><div class=area style='position:absolute; width:119px; height:20px; left:470px; top:366px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=567&a_id=382&g=Sienese, Gothic&y=1280' title='Lorenzetti, Pietro
Sienese, Gothic
Italian
1280-1348'><div class=area style='position:absolute; width:68px; height:20px; left:601px; top:378px'></div></a>
<a  href='build-amap.php?mp=567&a_id=382&g=Sienese, Gothic&y=1280' title='Lorenzetti, Pietro
Sienese, Gothic
Italian
1280-1348'><div class=area style='position:absolute; width:68px; height:20px; left:669px; top:378px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=307&a_id=389&g=Gothic&y=1284' title='Martini, Simone
Gothic
Italian
1284-1344'><div class=area style='position:absolute; width:30px; height:20px; left:282px; top:383px'></div></a>
<a  href='build-amap.php?mp=307&a_id=389&g=Gothic&y=1284' title='Martini, Simone
Gothic
Italian
1284-1344'><div class=area style='position:absolute; width:29px; height:20px; left:312px; top:383px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=20&a_id=381&g=Sienese, Gothic&y=1290' title='Lorenzetti, Ambrogio
Sienese, Gothic
Italian
1290-1348'><div class=area style='position:absolute; width:69px; height:20px; left:54px; top:388px'></div></a>
<a  href='build-amap.php?mp=20&a_id=381&g=Sienese, Gothic&y=1290' title='Lorenzetti, Ambrogio
Sienese, Gothic
Italian
1290-1348'><div class=area style='position:absolute; width:69px; height:20px; left:123px; top:388px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=800&a_id=31&g=Byzantine art&y=1340' title='Theophanes the Greek
Byzantine art
Greek
1340-1405'><div class=area style='position:absolute; width:70px; height:20px; left:834px; top:419px'></div></a>
<a  href='build-amap.php?mp=800&a_id=31&g=Byzantine art&y=1340' title='Theophanes the Greek
Byzantine art
Greek
1340-1405'><div class=area style='position:absolute; width:69px; height:20px; left:904px; top:419px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=948&a_id=19&g=Byzantine Art&y=1360' title='Andrei Rublev
Byzantine Art
Russian
1360-1430'><div class=area style='position:absolute; width:23px; height:20px; left:936px; top:463px'></div></a>
<a  href='build-amap.php?mp=948&a_id=19&g=Byzantine Art&y=1360' title='Andrei Rublev
Byzantine Art
Russian
1360-1430'><div class=area style='position:absolute; width:23px; height:20px; left:959px; top:463px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=70&a_id=114&g=Northern Renaissance&y=1375' title='Robert Campin
Northern Renaissance
Flemish
1375-1444'><div class=area style='position:absolute; width:26px; height:20px; left:53px; top:463px'></div></a>
<a  href='build-amap.php?mp=70&a_id=114&g=Northern Renaissance&y=1375' title='Robert Campin
Northern Renaissance
Flemish
1375-1444'><div class=area style='position:absolute; width:25px; height:20px; left:79px; top:463px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=140&a_id=50&g=Northern Renaissance&y=1395' title='Jan van Eyck
Northern Renaissance
Flemish
1395-1441'><div class=area style='position:absolute; width:19px; height:20px; left:136px; top:483px'></div></a>
<a  href='build-amap.php?mp=140&a_id=50&g=Northern Renaissance&y=1395' title='Jan van Eyck
Northern Renaissance
Flemish
1395-1441'><div class=area style='position:absolute; width:19px; height:20px; left:155px; top:483px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=390&a_id=87&g=Gothic, Early Renaissance, Florentine School&y=1395' title='Fra Angelico
Gothic, Early Renaissance, Florentine School
Italian
1395-1455'><div class=area style='position:absolute; width:71px; height:20px; left:424px; top:509px'></div></a>
<a  href='build-amap.php?mp=390&a_id=87&g=Gothic, Early Renaissance, Florentine School&y=1395' title='Fra Angelico
Gothic, Early Renaissance, Florentine School
Italian
1395-1455'><div class=area style='position:absolute; width:71px; height:20px; left:495px; top:509px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=570&a_id=422&g=Early Renaissance&y=1397' title='Uccello, Paolo
Early Renaissance
Italian
1397-1475'><div class=area style='position:absolute; width:25px; height:20px; left:604px; top:529px'></div></a>
<a  href='build-amap.php?mp=570&a_id=422&g=Early Renaissance&y=1397' title='Uccello, Paolo
Early Renaissance
Italian
1397-1475'><div class=area style='position:absolute; width:25px; height:20px; left:629px; top:529px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=10&a_id=90&g=Northern Renaissance&y=1399' title='Rogier van der Weyden
Northern Renaissance
Dutch
1399-1464'><div class=area style='position:absolute; width:51px; height:20px; left:44px; top:519px'></div></a>
<a  href='build-amap.php?mp=10&a_id=90&g=Northern Renaissance&y=1399' title='Rogier van der Weyden
Northern Renaissance
Dutch
1399-1464'><div class=area style='position:absolute; width:50px; height:20px; left:95px; top:519px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1710&a_id=378&g=Korean art&y=1400' title='Korean art
Korean art
Korean
1400-1900'><div class=area style='position:absolute; width:34px; height:20px; left:1677px; top:1009px'></div></a>
<a  href='build-amap.php?mp=1710&a_id=378&g=Korean art&y=1400' title='Korean art
Korean art
Korean
1400-1900'><div class=area style='position:absolute; width:33px; height:20px; left:1711px; top:1009px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=340&a_id=390&g=Early Renaissance, Florentine School&y=1401' title='Masaccio, Tommaso
Early Renaissance, Florentine School
Italian
1401-1428'><div class=area style='position:absolute; width:63px; height:20px; left:374px; top:476px'></div></a>
<a  href='build-amap.php?mp=340&a_id=390&g=Early Renaissance, Florentine School&y=1401' title='Masaccio, Tommaso
Early Renaissance, Florentine School
Italian
1401-1428'><div class=area style='position:absolute; width:62px; height:20px; left:437px; top:476px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=330&a_id=91&g=Renaissance&y=1403' title='Giovanni di Paolo
Renaissance
Italian
1403-1482'><div class=area style='position:absolute; width:20px; height:20px; left:364px; top:526px'></div></a>
<a  href='build-amap.php?mp=330&a_id=91&g=Renaissance&y=1403' title='Giovanni di Paolo
Renaissance
Italian
1403-1482'><div class=area style='position:absolute; width:20px; height:20px; left:384px; top:526px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=550&a_id=311&g=Early Renaissance&y=1415' title='Piero della Francesca
Early Renaissance
Italian
1415-1492'><div class=area style='position:absolute; width:67px; height:20px; left:451px; top:554px'></div></a>
<a  href='build-amap.php?mp=550&a_id=311&g=Early Renaissance&y=1415' title='Piero della Francesca
Early Renaissance
Italian
1415-1492'><div class=area style='position:absolute; width:66px; height:20px; left:518px; top:554px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=540&a_id=101&g=Early Renaissance&y=1430' title='Antonello da Messina
Early Renaissance
Italian
1430-1479'><div class=area style='position:absolute; width:28px; height:20px; left:518px; top:584px'></div></a>
<a  href='build-amap.php?mp=540&a_id=101&g=Early Renaissance&y=1430' title='Antonello da Messina
Early Renaissance
Italian
1430-1479'><div class=area style='position:absolute; width:28px; height:20px; left:546px; top:584px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=530&a_id=137&g=Renaissance, Venetian&y=1430' title='Giovanni Bellini
Renaissance, Venetian
Italian
1430-1516'><div class=area style='position:absolute; width:47px; height:20px; left:470px; top:609px'></div></a>
<a  href='build-amap.php?mp=530&a_id=137&g=Renaissance, Venetian&y=1430' title='Giovanni Bellini
Renaissance, Venetian
Italian
1430-1516'><div class=area style='position:absolute; width:47px; height:20px; left:517px; top:609px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=630&a_id=122&g=Renaissance&y=1431' title='Andrea Mantegna
Renaissance
Italian
1431-1506'><div class=area style='position:absolute; width:32px; height:20px; left:600px; top:612px'></div></a>
<a  href='build-amap.php?mp=630&a_id=122&g=Renaissance&y=1431' title='Andrea Mantegna
Renaissance
Italian
1431-1506'><div class=area style='position:absolute; width:32px; height:20px; left:632px; top:612px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=80&a_id=104&g=Northern Renaissance&y=1440' title='Hans Memling
Northern Renaissance
Flemish
1440-1494'><div class=area style='position:absolute; width:28px; height:20px; left:58px; top:607px'></div></a>
<a  href='build-amap.php?mp=80&a_id=104&g=Northern Renaissance&y=1440' title='Hans Memling
Northern Renaissance
Flemish
1440-1494'><div class=area style='position:absolute; width:28px; height:20px; left:86px; top:607px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=340&a_id=42&g=Early Renaissance, Florentine School&y=1445' title='Sandro Botticelli
Early Renaissance, Florentine School
Italian
1445-1510'><div class=area style='position:absolute; width:66px; height:20px; left:374px; top:635px'></div></a>
<a  href='build-amap.php?mp=340&a_id=42&g=Early Renaissance, Florentine School&y=1445' title='Sandro Botticelli
Early Renaissance, Florentine School
Italian
1445-1510'><div class=area style='position:absolute; width:66px; height:20px; left:440px; top:635px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=580&a_id=150&g=Renaissance&y=1445' title='Luca Signorelli
Renaissance
Italian
1445-1523'><div class=area style='position:absolute; width:30px; height:20px; left:614px; top:650px'></div></a>
<a  href='build-amap.php?mp=580&a_id=150&g=Renaissance&y=1445' title='Luca Signorelli
Renaissance
Italian
1445-1523'><div class=area style='position:absolute; width:30px; height:20px; left:644px; top:650px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=170&a_id=89&g=Northern Renaissance&y=1448' title='Martin Schongauer
Northern Renaissance
German
1448-1491'><div class=area style='position:absolute; width:39px; height:20px; left:127px; top:614px'></div></a>
<a  href='build-amap.php?mp=170&a_id=89&g=Northern Renaissance&y=1448' title='Martin Schongauer
Northern Renaissance
German
1448-1491'><div class=area style='position:absolute; width:38px; height:20px; left:166px; top:614px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=180&a_id=24&g=Northern Renaissance&y=1450' title='Hieronymus Bosch
Northern Renaissance
Dutch
1450-1516'><div class=area style='position:absolute; width:23px; height:20px; left:169px; top:645px'></div></a>
<a  href='build-amap.php?mp=180&a_id=24&g=Northern Renaissance&y=1450' title='Hieronymus Bosch
Northern Renaissance
Dutch
1450-1516'><div class=area style='position:absolute; width:22px; height:20px; left:192px; top:645px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=670&a_id=234&g=Renaissance&y=1450' title='Berruguete Pedro
Renaissance
Spanish
1450-1504'><div class=area style='position:absolute; width:35px; height:20px; left:704px; top:632px'></div></a>
<a  href='build-amap.php?mp=670&a_id=234&g=Renaissance&y=1450' title='Berruguete Pedro
Renaissance
Spanish
1450-1504'><div class=area style='position:absolute; width:35px; height:20px; left:739px; top:632px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=320&a_id=45&g=High Renaissance&y=1452' title='Leonardo da Vinci
High Renaissance
Italian
1452-1519'><div class=area style='position:absolute; width:20px; height:20px; left:354px; top:662px'></div></a>
<a  href='build-amap.php?mp=320&a_id=45&g=High Renaissance&y=1452' title='Leonardo da Vinci
High Renaissance
Italian
1452-1519'><div class=area style='position:absolute; width:20px; height:20px; left:374px; top:662px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=190&a_id=35&g=High Renaissance&y=1471' title='Albrecht Durer
High Renaissance
German
1471-1528'><div class=area style='position:absolute; width:22px; height:20px; left:181px; top:690px'></div></a>
<a  href='build-amap.php?mp=190&a_id=35&g=High Renaissance&y=1471' title='Albrecht Durer
High Renaissance
German
1471-1528'><div class=area style='position:absolute; width:21px; height:20px; left:203px; top:690px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=10&a_id=111&g=Northern Renaissance&y=1472' title='Lucas Cranach the Elder
Northern Renaissance
German
1472-1553'><div class=area style='position:absolute; width:28px; height:20px; left:44px; top:719px'></div></a>
<a  href='build-amap.php?mp=10&a_id=111&g=Northern Renaissance&y=1472' title='Lucas Cranach the Elder
Northern Renaissance
German
1472-1553'><div class=area style='position:absolute; width:27px; height:20px; left:72px; top:719px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=420&a_id=112&g=High Renaissance, Florentine School&y=1475' title='Michelangelo
High Renaissance, Florentine School
Italian
1475-1564'><div class=area style='position:absolute; width:81px; height:20px; left:454px; top:735px'></div></a>
<a  href='build-amap.php?mp=420&a_id=112&g=High Renaissance, Florentine School&y=1475' title='Michelangelo
High Renaissance, Florentine School
Italian
1475-1564'><div class=area style='position:absolute; width:81px; height:20px; left:535px; top:735px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=560&a_id=106&g=High Renaissance, Venetian school&y=1477' title='Giorgione
High Renaissance, Venetian school
Italian
1477-1510'><div class=area style='position:absolute; width:57px; height:20px; left:480px; top:675px'></div></a>
<a  href='build-amap.php?mp=560&a_id=106&g=High Renaissance, Venetian school&y=1477' title='Giorgione
High Renaissance, Venetian school
Italian
1477-1510'><div class=area style='position:absolute; width:57px; height:20px; left:537px; top:675px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=220&a_id=100&g=Northern Renaissance&y=1480' title='Albrecht Altdorfer
Northern Renaissance
German
1480-1538'><div class=area style='position:absolute; width:29px; height:20px; left:254px; top:706px'></div></a>
<a  href='build-amap.php?mp=220&a_id=100&g=Northern Renaissance&y=1480' title='Albrecht Altdorfer
Northern Renaissance
German
1480-1538'><div class=area style='position:absolute; width:29px; height:20px; left:283px; top:706px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1020&a_id=132&g=Late-Renaissance, Mannerism&y=1481' title='Il Garofalo
Late-Renaissance, Mannerism
Italian
1481-1559'><div class=area style='position:absolute; width:28px; height:20px; left:999px; top:712px'></div></a>
<a  href='build-amap.php?mp=1020&a_id=132&g=Late-Renaissance, Mannerism&y=1481' title='Il Garofalo
Late-Renaissance, Mannerism
Italian
1481-1559'><div class=area style='position:absolute; width:27px; height:20px; left:1027px; top:712px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=410&a_id=95&g=High Renaissance&y=1483' title='Raphael
High Renaissance
Italian
1483-1520'><div class=area style='position:absolute; width:30px; height:20px; left:384px; top:706px'></div></a>
<a  href='build-amap.php?mp=410&a_id=95&g=High Renaissance&y=1483' title='Raphael
High Renaissance
Italian
1483-1520'><div class=area style='position:absolute; width:30px; height:20px; left:414px; top:706px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=90&a_id=92&g=Northern Renaissance&y=1484' title='Hans Baldung
Northern Renaissance
German
1484-1545'><div class=area style='position:absolute; width:27px; height:20px; left:70px; top:746px'></div></a>
<a  href='build-amap.php?mp=90&a_id=92&g=Northern Renaissance&y=1484' title='Hans Baldung
Northern Renaissance
German
1484-1545'><div class=area style='position:absolute; width:27px; height:20px; left:97px; top:746px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=590&a_id=55&g=High Renaissance, Venetian school&y=1488' title='Titian
High Renaissance, Venetian school
Italian
1488-1576'><div class=area style='position:absolute; width:51px; height:20px; left:523px; top:768px'></div></a>
<a  href='build-amap.php?mp=590&a_id=55&g=High Renaissance, Venetian school&y=1488' title='Titian
High Renaissance, Venetian school
Italian
1488-1576'><div class=area style='position:absolute; width:50px; height:20px; left:574px; top:768px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=570&a_id=108&g=High Renaissance&y=1489' title='Correggio
High Renaissance
Italian
1489-1534'><div class=area style='position:absolute; width:31px; height:20px; left:604px; top:710px'></div></a>
<a  href='build-amap.php?mp=570&a_id=108&g=High Renaissance&y=1489' title='Correggio
High Renaissance
Italian
1489-1534'><div class=area style='position:absolute; width:31px; height:20px; left:635px; top:710px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=100&a_id=110&g=Northern Renaissance&y=1494' title='Lucas van Leyden
Northern Renaissance
Dutch
1494-1533'><div class=area style='position:absolute; width:37px; height:20px; left:134px; top:721px'></div></a>
<a  href='build-amap.php?mp=100&a_id=110&g=Northern Renaissance&y=1494' title='Lucas van Leyden
Northern Renaissance
Dutch
1494-1533'><div class=area style='position:absolute; width:36px; height:20px; left:171px; top:721px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=840&a_id=403&g=Mannerism, Florentine&y=1494' title='Pontormo, Jacopo Da
Mannerism, Florentine
Italian
1494-1557'><div class=area style='position:absolute; width:63px; height:20px; left:874px; top:742px'></div></a>
<a  href='build-amap.php?mp=840&a_id=403&g=Mannerism, Florentine&y=1494' title='Pontormo, Jacopo Da
Mannerism, Florentine
Italian
1494-1557'><div class=area style='position:absolute; width:62px; height:20px; left:937px; top:742px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=210&a_id=98&g=Northern Renaissance&y=1497' title='Hans Holbein
Northern Renaissance
German
1497-1543'><div class=area style='position:absolute; width:28px; height:20px; left:244px; top:735px'></div></a>
<a  href='build-amap.php?mp=210&a_id=98&g=Northern Renaissance&y=1497' title='Hans Holbein
Northern Renaissance
German
1497-1543'><div class=area style='position:absolute; width:28px; height:20px; left:272px; top:735px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1770&a_id=371&g=Islamic art&y=1500' title='Islamic art
Islamic art
Islamic
1500-2000'><div class=area style='position:absolute; width:55px; height:20px; left:1695px; top:1081px'></div></a>
<a  href='build-amap.php?mp=1770&a_id=371&g=Islamic art&y=1500' title='Islamic art
Islamic art
Islamic
1500-2000'><div class=area style='position:absolute; width:54px; height:20px; left:1750px; top:1081px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1760&a_id=397&g=Native american art&y=1500' title='Native American art
Native american art
American
1500-2000'><div class=area style='position:absolute; width:60px; height:20px; left:1674px; top:914px'></div></a>
<a  href='build-amap.php?mp=1760&a_id=397&g=Native american art&y=1500' title='Native American art
Native american art
American
1500-2000'><div class=area style='position:absolute; width:60px; height:20px; left:1734px; top:914px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=850&a_id=324&g=Mannerism, Florentine&y=1503' title='Bronzino, Agnolo
Mannerism, Florentine
Italian
1503-1572'><div class=area style='position:absolute; width:60px; height:20px; left:884px; top:768px'></div></a>
<a  href='build-amap.php?mp=850&a_id=324&g=Mannerism, Florentine&y=1503' title='Bronzino, Agnolo
Mannerism, Florentine
Italian
1503-1572'><div class=area style='position:absolute; width:60px; height:20px; left:944px; top:768px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=860&a_id=313&g=High Renaissance, Mannerism&y=1511' title='Vasari, Giorgio
High Renaissance, Mannerism
Italian
1511-1574'><div class=area style='position:absolute; width:24px; height:20px; left:894px; top:793px'></div></a>
<a  href='build-amap.php?mp=860&a_id=313&g=High Renaissance, Mannerism&y=1511' title='Vasari, Giorgio
High Renaissance, Mannerism
Italian
1511-1574'><div class=area style='position:absolute; width:24px; height:20px; left:918px; top:793px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=830&a_id=268&g=Renaissance, Mannerism, Religion&y=1512' title='Morales Luis de
Renaissance, Mannerism, Religion
Spanish
1512-1586'><div class=area style='position:absolute; width:27px; height:20px; left:864px; top:818px'></div></a>
<a  href='build-amap.php?mp=830&a_id=268&g=Renaissance, Mannerism, Religion&y=1512' title='Morales Luis de
Renaissance, Mannerism, Religion
Spanish
1512-1586'><div class=area style='position:absolute; width:26px; height:20px; left:891px; top:818px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=280&a_id=267&g=High Renaissance&y=1517' title='Mor Van Dashorst Anthonis
High Renaissance
Dutch
1517-1577'><div class=area style='position:absolute; width:15px; height:20px; left:284px; top:784px'></div></a>
<a  href='build-amap.php?mp=280&a_id=267&g=High Renaissance&y=1517' title='Mor Van Dashorst Anthonis
High Renaissance
Dutch
1517-1577'><div class=area style='position:absolute; width:15px; height:20px; left:299px; top:784px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=920&a_id=420&g=Renaissance, Mannerism, Venetian school&y=1518' title='Tintoretto
Renaissance, Mannerism, Venetian school
Italian
1518-1594'><div class=area style='position:absolute; width:57px; height:20px; left:954px; top:804px'></div></a>
<a  href='build-amap.php?mp=920&a_id=420&g=Renaissance, Mannerism, Venetian school&y=1518' title='Tintoretto
Renaissance, Mannerism, Venetian school
Italian
1518-1594'><div class=area style='position:absolute; width:57px; height:20px; left:1011px; top:804px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=600&a_id=135&g=Late Renaissance&y=1520' title='Giovanni Battista Moroni
Late Renaissance
Italian
1520-1579'><div class=area style='position:absolute; width:23px; height:20px; left:588px; top:793px'></div></a>
<a  href='build-amap.php?mp=600&a_id=135&g=Late Renaissance&y=1520' title='Giovanni Battista Moroni
Late Renaissance
Italian
1520-1579'><div class=area style='position:absolute; width:23px; height:20px; left:611px; top:793px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=20&a_id=39&g=Northern Renaissance&y=1525' title='Pieter Bruegel
Northern Renaissance
Flemish
1525-1569'><div class=area style='position:absolute; width:29px; height:20px; left:54px; top:795px'></div></a>
<a  href='build-amap.php?mp=20&a_id=39&g=Northern Renaissance&y=1525' title='Pieter Bruegel
Northern Renaissance
Flemish
1525-1569'><div class=area style='position:absolute; width:28px; height:20px; left:83px; top:795px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1000&a_id=296&g=Mannerism&y=1526' title='Arcimboldo, Giuseppe
Mannerism
Italian
1526-1593'><div class=area style='position:absolute; width:37px; height:20px; left:960px; top:833px'></div></a>
<a  href='build-amap.php?mp=1000&a_id=296&g=Mannerism&y=1526' title='Arcimboldo, Giuseppe
Mannerism
Italian
1526-1593'><div class=area style='position:absolute; width:37px; height:20px; left:997px; top:833px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=620&a_id=155&g=Renaissance, Venetian school&y=1528' title='Paolo Veronese
Renaissance, Venetian school
Italian
1528-1588'><div class=area style='position:absolute; width:58px; height:20px; left:538px; top:820px'></div></a>
<a  href='build-amap.php?mp=620&a_id=155&g=Renaissance, Venetian school&y=1528' title='Paolo Veronese
Renaissance, Venetian school
Italian
1528-1588'><div class=area style='position:absolute; width:58px; height:20px; left:596px; top:820px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1010&a_id=34&g=Mannerism&y=1541' title='El Greco
Mannerism
Spanish, Greek
1541-1614'><div class=area style='position:absolute; width:31px; height:20px; left:983px; top:865px'></div></a>
<a  href='build-amap.php?mp=1010&a_id=34&g=Mannerism&y=1541' title='El Greco
Mannerism
Spanish, Greek
1541-1614'><div class=area style='position:absolute; width:30px; height:20px; left:1014px; top:865px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=900&a_id=271&g=Renaissance, Court painter&y=1553' title='Pantoja de la Cruz, Juan
Renaissance, Court painter
Spanish
1553-1608'><div class=area style='position:absolute; width:26px; height:20px; left:883px; top:871px'></div></a>
<a  href='build-amap.php?mp=900&a_id=271&g=Renaissance, Court painter&y=1553' title='Pantoja de la Cruz, Juan
Renaissance, Court painter
Spanish
1553-1608'><div class=area style='position:absolute; width:25px; height:20px; left:909px; top:871px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=490&a_id=124&g=Baroque&y=1560' title='Annibale Carracci
Baroque
Italian
1560-1609'><div class=area style='position:absolute; width:28px; height:20px; left:524px; top:885px'></div></a>
<a  href='build-amap.php?mp=490&a_id=124&g=Baroque&y=1560' title='Annibale Carracci
Baroque
Italian
1560-1609'><div class=area style='position:absolute; width:27px; height:20px; left:552px; top:885px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=500&a_id=43&g=Baroque&y=1571' title='Caravaggio
Baroque
Italian
1571-1610'><div class=area style='position:absolute; width:40px; height:20px; left:534px; top:907px'></div></a>
<a  href='build-amap.php?mp=500&a_id=43&g=Baroque&y=1571' title='Caravaggio
Baroque
Italian
1571-1610'><div class=area style='position:absolute; width:40px; height:20px; left:574px; top:907px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=510&a_id=278&g=Baroque&y=1575' title='Reni Guido
Baroque
Italian
1575-1642'><div class=area style='position:absolute; width:17px; height:20px; left:544px; top:931px'></div></a>
<a  href='build-amap.php?mp=510&a_id=278&g=Baroque&y=1575' title='Reni Guido
Baroque
Italian
1575-1642'><div class=area style='position:absolute; width:16px; height:20px; left:561px; top:931px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=520&a_id=238&g=Baroque&y=1576' title='Carducho, Vicente
Baroque
Italian
1568-1638'><div class=area style='position:absolute; width:31px; height:20px; left:554px; top:954px'></div></a>
<a  href='build-amap.php?mp=520&a_id=238&g=Baroque&y=1576' title='Carducho, Vicente
Baroque
Italian
1568-1638'><div class=area style='position:absolute; width:31px; height:20px; left:585px; top:954px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=460&a_id=29&g=Baroque&y=1577' title='Peter Paul Rubens
Baroque
Flemish
1577-1640'><div class=area style='position:absolute; width:28px; height:20px; left:439px; top:935px'></div></a>
<a  href='build-amap.php?mp=460&a_id=29&g=Baroque&y=1577' title='Peter Paul Rubens
Baroque
Flemish
1577-1640'><div class=area style='position:absolute; width:27px; height:20px; left:467px; top:935px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=250&a_id=285&g=Baroque, Animals, Hunting, Market, Still life&y=1579' title='Snyders, Frans
Baroque, Animals, Hunting, Market, Still life
Flemish
1579-1657'><div class=area style='position:absolute; width:56px; height:20px; left:284px; top:910px'></div></a>
<a  href='build-amap.php?mp=250&a_id=285&g=Baroque, Animals, Hunting, Market, Still life&y=1579' title='Snyders, Frans
Baroque, Animals, Hunting, Market, Still life
Flemish
1579-1657'><div class=area style='position:absolute; width:55px; height:20px; left:340px; top:910px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=630&a_id=270&g=Baroque&y=1580' title='Orrente, Pedro
Baroque
Spanish
1580-1645'><div class=area style='position:absolute; width:25px; height:20px; left:664px; top:940px'></div></a>
<a  href='build-amap.php?mp=630&a_id=270&g=Baroque&y=1580' title='Orrente, Pedro
Baroque
Spanish
1580-1645'><div class=area style='position:absolute; width:25px; height:20px; left:689px; top:940px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=260&a_id=248&g=Baroque, Genre&y=1581' title='Frans Francken the Younger
Baroque, Genre
Flemish
1581-1642'><div class=area style='position:absolute; width:54px; height:20px; left:294px; top:933px'></div></a>
<a  href='build-amap.php?mp=260&a_id=248&g=Baroque, Genre&y=1581' title='Frans Francken the Younger
Baroque, Genre
Flemish
1581-1642'><div class=area style='position:absolute; width:54px; height:20px; left:348px; top:933px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=30&a_id=131&g=Dutch Golden age, Portrait&y=1582' title='Frans Hals
Dutch Golden age, Portrait
Dutch
1582-1666'><div class=area style='position:absolute; width:17px; height:20px; left:64px; top:959px'></div></a>
<a  href='build-amap.php?mp=30&a_id=131&g=Dutch Golden age, Portrait&y=1582' title='Frans Hals
Dutch Golden age, Portrait
Dutch
1582-1666'><div class=area style='position:absolute; width:16px; height:20px; left:81px; top:959px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=270&a_id=283&g=Baroque, Still life, Flowers&y=1590' title='Seghers, Daniel
Baroque, Still life, Flowers
Flemish
1590-1661'><div class=area style='position:absolute; width:50px; height:20px; left:304px; top:971px'></div></a>
<a  href='build-amap.php?mp=270&a_id=283&g=Baroque, Still life, Flowers&y=1590' title='Seghers, Daniel
Baroque, Still life, Flowers
Flemish
1590-1661'><div class=area style='position:absolute; width:50px; height:20px; left:354px; top:971px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=600&a_id=279&g=Baroque&y=1591' title='Ribera, Jusepe de
Baroque
Italian
1591-1652'><div class=area style='position:absolute; width:22px; height:20px; left:590px; top:981px'></div></a>
<a  href='build-amap.php?mp=600&a_id=279&g=Baroque&y=1591' title='Ribera, Jusepe de
Baroque
Italian
1591-1652'><div class=area style='position:absolute; width:22px; height:20px; left:612px; top:981px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=610&a_id=303&g=Baroque&y=1593' title='Gentileschi, Artemisia
Baroque
Italian
1593-1656'><div class=area style='position:absolute; width:39px; height:20px; left:566px; top:1004px'></div></a>
<a  href='build-amap.php?mp=610&a_id=303&g=Baroque&y=1593' title='Gentileschi, Artemisia
Baroque
Italian
1593-1656'><div class=area style='position:absolute; width:39px; height:20px; left:605px; top:1004px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=735&a_id=97&g=Baroque&y=1594' title='Nicolas Poussin
Baroque
French
1594-1665'><div class=area style='position:absolute; width:27px; height:20px; left:769px; top:985px'></div></a>
<a  href='build-amap.php?mp=735&a_id=97&g=Baroque&y=1594' title='Nicolas Poussin
Baroque
French
1594-1665'><div class=area style='position:absolute; width:27px; height:20px; left:796px; top:985px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=640&a_id=295&g=Baroque, Religion, Still life&y=1598' title='Zurbaran Francisco de
Baroque, Religion, Still life
Spanish
1598-1664'><div class=area style='position:absolute; width:29px; height:20px; left:674px; top:978px'></div></a>
<a  href='build-amap.php?mp=640&a_id=295&g=Baroque, Religion, Still life&y=1598' title='Zurbaran Francisco de
Baroque, Religion, Still life
Spanish
1598-1664'><div class=area style='position:absolute; width:29px; height:20px; left:703px; top:978px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=650&a_id=46&g=Baroque&y=1599' title='Diego Velazquez
Baroque
Spanish
1599-1660'><div class=area style='position:absolute; width:35px; height:20px; left:684px; top:1004px'></div></a>
<a  href='build-amap.php?mp=650&a_id=46&g=Baroque&y=1599' title='Diego Velazquez
Baroque
Spanish
1599-1660'><div class=area style='position:absolute; width:35px; height:20px; left:719px; top:1004px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=450&a_id=244&g=Baroque, Court painter, Relaxed elegance, Portrait, Byblical, Mythology&y=1599' title='Dyck Sir Anthony van
Baroque, Court painter, Relaxed elegance, Portrait, Byblical, Mythology
Flemish
1599-1641'><div class=area style='position:absolute; width:19px; height:20px; left:447px; top:962px'></div></a>
<a  href='build-amap.php?mp=450&a_id=244&g=Baroque, Court painter, Relaxed elegance, Portrait, Byblical, Mythology&y=1599' title='Dyck Sir Anthony van
Baroque, Court painter, Relaxed elegance, Portrait, Byblical, Mythology
Flemish
1599-1641'><div class=area style='position:absolute; width:18px; height:20px; left:466px; top:962px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=745&a_id=258&g=Baroque, Landscape&y=1600' title='Claude Lorrain
Baroque, Landscape
French
1600-1682'><div class=area style='position:absolute; width:23px; height:20px; left:779px; top:1012px'></div></a>
<a  href='build-amap.php?mp=745&a_id=258&g=Baroque, Landscape&y=1600' title='Claude Lorrain
Baroque, Landscape
French
1600-1682'><div class=area style='position:absolute; width:23px; height:20px; left:802px; top:1012px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1750&a_id=333&g=Chinese art&y=1600' title='Chinese art
Chinese art
Chinese
1600-1900'><div class=area style='position:absolute; width:61px; height:20px; left:1663px; top:1152px'></div></a>
<a  href='build-amap.php?mp=1750&a_id=333&g=Chinese art&y=1600' title='Chinese art
Chinese art
Chinese
1600-1900'><div class=area style='position:absolute; width:60px; height:20px; left:1724px; top:1152px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1730&a_id=368&g=Indian art&y=1600' title='Indian art
Indian art
Indian
1600-1900'><div class=area style='position:absolute; width:54px; height:20px; left:1656px; top:1121px'></div></a>
<a  href='build-amap.php?mp=1730&a_id=368&g=Indian art&y=1600' title='Indian art
Indian art
Indian
1600-1900'><div class=area style='position:absolute; width:54px; height:20px; left:1710px; top:1121px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1720&a_id=373&g=Japanese art&y=1600' title='Japanese art
Japanese art
Japanese
1600-1900'><div class=area style='position:absolute; width:66px; height:20px; left:1623px; top:1045px'></div></a>
<a  href='build-amap.php?mp=1720&a_id=373&g=Japanese art&y=1600' title='Japanese art
Japanese art
Japanese
1600-1900'><div class=area style='position:absolute; width:65px; height:20px; left:1689px; top:1045px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=220&a_id=121&g=Landscape, Dutch Golden age&y=1603' title='Aert van der Neer
Landscape, Dutch Golden age
Dutch
1603-1677'><div class=area style='position:absolute; width:41px; height:20px; left:173px; top:954px'></div></a>
<a  href='build-amap.php?mp=220&a_id=121&g=Landscape, Dutch Golden age&y=1603' title='Aert van der Neer
Landscape, Dutch Golden age
Dutch
1603-1677'><div class=area style='position:absolute; width:40px; height:20px; left:214px; top:954px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=40&a_id=54&g=Baroque&y=1606' title='Rembrandt
Baroque
Dutch
1606-1669'><div class=area style='position:absolute; width:39px; height:20px; left:74px; top:1012px'></div></a>
<a  href='build-amap.php?mp=40&a_id=54&g=Baroque&y=1606' title='Rembrandt
Baroque
Dutch
1606-1669'><div class=area style='position:absolute; width:39px; height:20px; left:113px; top:1012px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=280&a_id=276&g=Baroque, History, Portrait, Battle&y=1607' title='Quellinus II Erasmus
Baroque, History, Portrait, Battle
Flemish
1607-1678'><div class=area style='position:absolute; width:54px; height:20px; left:314px; top:1031px'></div></a>
<a  href='build-amap.php?mp=280&a_id=276&g=Baroque, History, Portrait, Battle&y=1607' title='Quellinus II Erasmus
Baroque, History, Portrait, Battle
Flemish
1607-1678'><div class=area style='position:absolute; width:53px; height:20px; left:368px; top:1031px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=290&a_id=249&g=Baroque, Animals, Still life, Hunting&y=1611' title='Fyt, Jan
Baroque, Animals, Still life, Hunting
Flemish
1611-1661'><div class=area style='position:absolute; width:41px; height:20px; left:324px; top:1004px'></div></a>
<a  href='build-amap.php?mp=290&a_id=249&g=Baroque, Animals, Still life, Hunting&y=1611' title='Fyt, Jan
Baroque, Animals, Still life, Hunting
Flemish
1611-1661'><div class=area style='position:absolute; width:41px; height:20px; left:365px; top:1004px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=380&a_id=141&g=Portrait, History&y=1614' title='Gonzales Coques
Portrait, History
Flemish
1614-1684'><div class=area style='position:absolute; width:52px; height:20px; left:310px; top:1054px'></div></a>
<a  href='build-amap.php?mp=380&a_id=141&g=Portrait, History&y=1614' title='Gonzales Coques
Portrait, History
Flemish
1614-1684'><div class=area style='position:absolute; width:52px; height:20px; left:362px; top:1054px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=660&a_id=269&g=Baroque, Religion&y=1617' title='Bartolome Esteban Murillo
Baroque, Religion
Spanish
1617-1682'><div class=area style='position:absolute; width:23px; height:20px; left:694px; top:1033px'></div></a>
<a  href='build-amap.php?mp=660&a_id=269&g=Baroque, Religion&y=1617' title='Bartolome Esteban Murillo
Baroque, Religion
Spanish
1617-1682'><div class=area style='position:absolute; width:22px; height:20px; left:717px; top:1033px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=190&a_id=120&g=Landscape&y=1620' title='Aelbert Cuyp
Landscape
Dutch
1620-1691'><div class=area style='position:absolute; width:19px; height:20px; left:187px; top:1083px'></div></a>
<a  href='build-amap.php?mp=190&a_id=120&g=Landscape&y=1620' title='Aelbert Cuyp
Landscape
Dutch
1620-1691'><div class=area style='position:absolute; width:18px; height:20px; left:206px; top:1083px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=50&a_id=145&g=Dutch Golden Age&y=1626' title='Jan Steen
Dutch Golden Age
Dutch
1626-1679'><div class=area style='position:absolute; width:21px; height:20px; left:43px; top:1040px'></div></a>
<a  href='build-amap.php?mp=50&a_id=145&g=Dutch Golden Age&y=1626' title='Jan Steen
Dutch Golden Age
Dutch
1626-1679'><div class=area style='position:absolute; width:20px; height:20px; left:64px; top:1040px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=210&a_id=146&g=Dutch Golden Age, Seascape, Landscape&y=1626' title='Jan van de Cappelle
Dutch Golden Age, Seascape, Landscape
Dutch
1626-1679'><div class=area style='position:absolute; width:29px; height:20px; left:187px; top:1016px'></div></a>
<a  href='build-amap.php?mp=210&a_id=146&g=Dutch Golden Age, Seascape, Landscape&y=1626' title='Jan van de Cappelle
Dutch Golden Age, Seascape, Landscape
Dutch
1626-1679'><div class=area style='position:absolute; width:28px; height:20px; left:216px; top:1016px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=60&a_id=68&g=Baroque, Dutch Golden age&y=1629' title='Pieter de Hooch
Baroque, Dutch Golden age
Dutch
1629-1684'><div class=area style='position:absolute; width:22px; height:20px; left:94px; top:1040px'></div></a>
<a  href='build-amap.php?mp=60&a_id=68&g=Baroque, Dutch Golden age&y=1629' title='Pieter de Hooch
Baroque, Dutch Golden age
Dutch
1629-1684'><div class=area style='position:absolute; width:22px; height:20px; left:116px; top:1040px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=200&a_id=143&g=Dutch Golden age, Landscape&y=1629' title='Jacob van Ruisdael
Dutch Golden age, Landscape
Dutch
1629-1682'><div class=area style='position:absolute; width:29px; height:20px; left:177px; top:1047px'></div></a>
<a  href='build-amap.php?mp=200&a_id=143&g=Dutch Golden age, Landscape&y=1629' title='Jacob van Ruisdael
Dutch Golden age, Landscape
Dutch
1629-1682'><div class=area style='position:absolute; width:28px; height:20px; left:206px; top:1047px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=60&a_id=74&g=Dutch Golden age, Baroque&y=1632' title='Johannes Vermeer
Dutch Golden age, Baroque
Dutch
1632-1675'><div class=area style='position:absolute; width:32px; height:20px; left:94px; top:1066px'></div></a>
<a  href='build-amap.php?mp=60&a_id=74&g=Dutch Golden age, Baroque&y=1632' title='Johannes Vermeer
Dutch Golden age, Baroque
Dutch
1632-1675'><div class=area style='position:absolute; width:32px; height:20px; left:126px; top:1066px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=490&a_id=251&g=Baroque, Court painter&y=1634' title='Luca Giordano
Baroque, Court painter
Italian
1634-1705'><div class=area style='position:absolute; width:30px; height:20px; left:524px; top:1081px'></div></a>
<a  href='build-amap.php?mp=490&a_id=251&g=Baroque, Court painter&y=1634' title='Luca Giordano
Baroque, Court painter
Italian
1634-1705'><div class=area style='position:absolute; width:29px; height:20px; left:554px; top:1081px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=853&a_id=277&g=Rococo, Portrait&y=1674' title='Jean Ranc
Rococo, Portrait
French
1674-1735'><div class=area style='position:absolute; width:19px; height:20px; left:850px; top:1140px'></div></a>
<a  href='build-amap.php?mp=853&a_id=277&g=Rococo, Portrait&y=1674' title='Jean Ranc
Rococo, Portrait
French
1674-1735'><div class=area style='position:absolute; width:18px; height:20px; left:869px; top:1140px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=863&a_id=64&g=Rococo&y=1684' title='Antoine Watteau
Rococo
French
1684-1721'><div class=area style='position:absolute; width:29px; height:20px; left:897px; top:1147px'></div></a>
<a  href='build-amap.php?mp=863&a_id=64&g=Rococo&y=1684' title='Antoine Watteau
Rococo
French
1684-1721'><div class=area style='position:absolute; width:28px; height:20px; left:926px; top:1147px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=933&a_id=250&g=Rococo&y=1694' title='Giaquinto Corrado
Rococo
Italian
1694-1765'><div class=area style='position:absolute; width:26px; height:20px; left:915px; top:1180px'></div></a>
<a  href='build-amap.php?mp=933&a_id=250&g=Rococo&y=1694' title='Giaquinto Corrado
Rococo
Italian
1694-1765'><div class=area style='position:absolute; width:26px; height:20px; left:941px; top:1180px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=943&a_id=136&g=Rococo&y=1696' title='Giovanni Battista Tiepolo
Rococo
Italian
1696-1770'><div class=area style='position:absolute; width:36px; height:20px; left:906px; top:1205px'></div></a>
<a  href='build-amap.php?mp=943&a_id=136&g=Rococo&y=1696' title='Giovanni Battista Tiepolo
Rococo
Italian
1696-1770'><div class=area style='position:absolute; width:35px; height:20px; left:942px; top:1205px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=953&a_id=126&g=Rococo, Landscape, Etching&y=1697' title='Canaletto
Rococo, Landscape, Etching
Italian
1697-1768'><div class=area style='position:absolute; width:31px; height:20px; left:987px; top:1198px'></div></a>
<a  href='build-amap.php?mp=953&a_id=126&g=Rococo, Landscape, Etching&y=1697' title='Canaletto
Rococo, Landscape, Etching
Italian
1697-1768'><div class=area style='position:absolute; width:31px; height:20px; left:1018px; top:1198px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1083&a_id=160&g=Rococo, Realism, Portrait, Comic&y=1697' title='William Hogarth
Rococo, Realism, Portrait, Comic
English
1697-1764'><div class=area style='position:absolute; width:26px; height:20px; left:1065px; top:1195px'></div></a>
<a  href='build-amap.php?mp=1083&a_id=160&g=Rococo, Realism, Portrait, Comic&y=1697' title='William Hogarth
Rococo, Realism, Portrait, Comic
English
1697-1764'><div class=area style='position:absolute; width:26px; height:20px; left:1091px; top:1195px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=963&a_id=130&g=Rococo, Venetian School, Veduta&y=1712' title='Francesco Guardi
Rococo, Venetian School, Veduta
Italian
1712-1793'><div class=area style='position:absolute; width:49px; height:20px; left:997px; top:1226px'></div></a>
<a  href='build-amap.php?mp=963&a_id=130&g=Rococo, Venetian School, Veduta&y=1712' title='Francesco Guardi
Rococo, Venetian School, Veduta
Italian
1712-1793'><div class=area style='position:absolute; width:49px; height:20px; left:1046px; top:1226px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=843&a_id=265&g=Rococo, Still life&y=1716' title='Luis Egidio Melendez
Rococo, Still life
Spanish
1716-1780'><div class=area style='position:absolute; width:49px; height:20px; left:877px; top:1233px'></div></a>
<a  href='build-amap.php?mp=843&a_id=265&g=Rococo, Still life&y=1716' title='Luis Egidio Melendez
Rococo, Still life
Spanish
1716-1780'><div class=area style='position:absolute; width:48px; height:20px; left:926px; top:1233px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1093&a_id=406&g=Rococo, Grand style, Portrait&y=1723' title='Reynolds, Joshua
Rococo, Grand style, Portrait
British
1723-1792'><div class=area style='position:absolute; width:70px; height:20px; left:1127px; top:1212px'></div></a>
<a  href='build-amap.php?mp=1093&a_id=406&g=Rococo, Grand style, Portrait&y=1723' title='Reynolds, Joshua
Rococo, Grand style, Portrait
British
1723-1792'><div class=area style='position:absolute; width:70px; height:20px; left:1197px; top:1212px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1103&a_id=71&g=Rococo&y=1727' title='Thomas Gainsborough
Rococo
British
1727-1788'><div class=area style='position:absolute; width:44px; height:20px; left:1137px; top:1240px'></div></a>
<a  href='build-amap.php?mp=1103&a_id=71&g=Rococo&y=1727' title='Thomas Gainsborough
Rococo
British
1727-1788'><div class=area style='position:absolute; width:43px; height:20px; left:1181px; top:1240px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=695&a_id=266&g=Neoclassicism&y=1728' title='Anton Raphael Mengs
Neoclassicism
German
1728-1779'><div class=area style='position:absolute; width:23px; height:20px; left:683px; top:1228px'></div></a>
<a  href='build-amap.php?mp=695&a_id=266&g=Neoclassicism&y=1728' title='Anton Raphael Mengs
Neoclassicism
German
1728-1779'><div class=area style='position:absolute; width:23px; height:20px; left:706px; top:1228px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=360&a_id=109&g=Russian Enlightenment, Portrait&y=1735' title='Dmitry Levitzky
Russian Enlightenment, Portrait
Russian, Ukrainian
1735-1822'><div class=area style='position:absolute; width:54px; height:20px; left:394px; top:1285px'></div></a>
<a  href='build-amap.php?mp=360&a_id=109&g=Russian Enlightenment, Portrait&y=1735' title='Dmitry Levitzky
Russian Enlightenment, Portrait
Russian, Ukrainian
1735-1822'><div class=area style='position:absolute; width:54px; height:20px; left:448px; top:1285px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=350&a_id=115&g=Russian Enlightenment, Portrait&y=1736' title='Fyodor Rokotov
Russian Enlightenment, Portrait
Russian
1736-1808'><div class=area style='position:absolute; width:54px; height:20px; left:384px; top:1257px'></div></a>
<a  href='build-amap.php?mp=350&a_id=115&g=Russian Enlightenment, Portrait&y=1736' title='Fyodor Rokotov
Russian Enlightenment, Portrait
Russian
1736-1808'><div class=area style='position:absolute; width:53px; height:20px; left:438px; top:1257px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1020&a_id=339&g=Realism, Portrait&y=1738' title='Copley, John Singleton
Realism, Portrait
American
1738-1815'><div class=area style='position:absolute; width:51px; height:20px; left:1054px; top:1277px'></div></a>
<a  href='build-amap.php?mp=1020&a_id=339&g=Realism, Portrait&y=1738' title='Copley, John Singleton
Realism, Portrait
American
1738-1815'><div class=area style='position:absolute; width:50px; height:20px; left:1105px; top:1277px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=52&a_id=32&g=Romanticism&y=1746' title='Francisco Goya
Romanticism
Spanish
1746-1828'><div class=area style='position:absolute; width:20px; height:20px; left:86px; top:1257px'></div></a>
<a  href='build-amap.php?mp=52&a_id=32&g=Romanticism&y=1746' title='Francisco Goya
Romanticism
Spanish
1746-1828'><div class=area style='position:absolute; width:20px; height:20px; left:106px; top:1257px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=705&a_id=300&g=Neoclassicism, Empire style&y=1748' title='David, Jacques-Louis
Neoclassicism, Empire style
French
1748-1825'><div class=area style='position:absolute; width:79px; height:20px; left:581px; top:1274px'></div></a>
<a  href='build-amap.php?mp=705&a_id=300&g=Neoclassicism, Empire style&y=1748' title='David, Jacques-Louis
Neoclassicism, Empire style
French
1748-1825'><div class=area style='position:absolute; width:79px; height:20px; left:660px; top:1274px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=2&a_id=72&g=Romanticism, Symbolism&y=1757' title='William Blake
Romanticism, Symbolism
British
1757-1827'><div class=area style='position:absolute; width:59px; height:20px; left:36px; top:1281px'></div></a>
<a  href='build-amap.php?mp=2&a_id=72&g=Romanticism, Symbolism&y=1757' title='William Blake
Romanticism, Symbolism
British
1757-1827'><div class=area style='position:absolute; width:58px; height:20px; left:95px; top:1281px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=370&a_id=76&g=Russian Enlightenment, Sentimentalism, Portrait&y=1757' title='Vladimir Borovikovsky
Russian Enlightenment, Sentimentalism, Portrait
Russian, Ukrainian
1757-1825'><div class=area style='position:absolute; width:68px; height:20px; left:404px; top:1313px'></div></a>
<a  href='build-amap.php?mp=370&a_id=76&g=Russian Enlightenment, Sentimentalism, Portrait&y=1757' title='Vladimir Borovikovsky
Russian Enlightenment, Sentimentalism, Portrait
Russian, Ukrainian
1757-1825'><div class=area style='position:absolute; width:68px; height:20px; left:472px; top:1313px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=715&a_id=360&g=Neoclassicism, History&y=1771' title='Gros, Antoine-Jean
Neoclassicism, History
French
1771-1835'><div class=area style='position:absolute; width:18px; height:20px; left:714px; top:1299px'></div></a>
<a  href='build-amap.php?mp=715&a_id=360&g=Neoclassicism, History&y=1771' title='Gros, Antoine-Jean
Neoclassicism, History
French
1771-1835'><div class=area style='position:absolute; width:17px; height:20px; left:732px; top:1299px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=12&a_id=62&g=Romanticism&y=1775' title='William Turner
Romanticism
British
1775-1851'><div class=area style='position:absolute; width:26px; height:20px; left:46px; top:1337px'></div></a>
<a  href='build-amap.php?mp=12&a_id=62&g=Romanticism&y=1775' title='William Turner
Romanticism
British
1775-1851'><div class=area style='position:absolute; width:25px; height:20px; left:72px; top:1337px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=22&a_id=66&g=Romanticism&y=1776' title='John Constable
Romanticism
British
1776-1837'><div class=area style='position:absolute; width:33px; height:20px; left:56px; top:1311px'></div></a>
<a  href='build-amap.php?mp=22&a_id=66&g=Romanticism&y=1776' title='John Constable
Romanticism
British
1776-1837'><div class=area style='position:absolute; width:32px; height:20px; left:89px; top:1311px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=32&a_id=86&g=Romanticism&y=1776' title='Vasily Tropinin
Romanticism
Russian
1776-1857'><div class=area style='position:absolute; width:27px; height:20px; left:66px; top:1368px'></div></a>
<a  href='build-amap.php?mp=32&a_id=86&g=Romanticism&y=1776' title='Vasily Tropinin
Romanticism
Russian
1776-1857'><div class=area style='position:absolute; width:26px; height:20px; left:93px; top:1368px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=725&a_id=369&g=Neoclassicism&y=1780' title='Ingres, Jean Auguste Dominique
Neoclassicism
French
1780-1867'><div class=area style='position:absolute; width:21px; height:20px; left:717px; top:1328px'></div></a>
<a  href='build-amap.php?mp=725&a_id=369&g=Neoclassicism&y=1780' title='Ingres, Jean Auguste Dominique
Neoclassicism
French
1780-1867'><div class=area style='position:absolute; width:21px; height:20px; left:738px; top:1328px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=82&a_id=12&g=Romanticism, Portrait&y=1782' title='Orest Kiprensky
Romanticism, Portrait
Russian
1782-1836'><div class=area style='position:absolute; width:33px; height:20px; left:116px; top:1337px'></div></a>
<a  href='build-amap.php?mp=82&a_id=12&g=Romanticism, Portrait&y=1782' title='Orest Kiprensky
Romanticism, Portrait
Russian
1782-1836'><div class=area style='position:absolute; width:32px; height:20px; left:149px; top:1337px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=102&a_id=70&g=Romanticism&y=1791' title='Theodore Gericault
Romanticism
French
1791-1824'><div class=area style='position:absolute; width:30px; height:20px; left:136px; top:1311px'></div></a>
<a  href='build-amap.php?mp=102&a_id=70&g=Romanticism&y=1791' title='Theodore Gericault
Romanticism
French
1791-1824'><div class=area style='position:absolute; width:29px; height:20px; left:166px; top:1311px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1030&a_id=340&g=Romanticism, Realism, Portrait, Landscape&y=1796' title='Corot, Jean-Baptiste-Camille
Romanticism, Realism, Portrait, Landscape
French
1796-1875'><div class=area style='position:absolute; width:54px; height:20px; left:1064px; top:1354px'></div></a>
<a  href='build-amap.php?mp=1030&a_id=340&g=Romanticism, Realism, Portrait, Landscape&y=1796' title='Corot, Jean-Baptiste-Camille
Romanticism, Realism, Portrait, Landscape
French
1796-1875'><div class=area style='position:absolute; width:54px; height:20px; left:1118px; top:1354px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=92&a_id=73&g=Romanticism&y=1798' title='Eugene Delacroix
Romanticism
French
1798-1863'><div class=area style='position:absolute; width:31px; height:20px; left:126px; top:1366px'></div></a>
<a  href='build-amap.php?mp=92&a_id=73&g=Romanticism&y=1798' title='Eugene Delacroix
Romanticism
French
1798-1863'><div class=area style='position:absolute; width:30px; height:20px; left:157px; top:1366px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=735&a_id=38&g=Neoclassicism, Romanticism&y=1799' title='Karl Bryullov
Neoclassicism, Romanticism
Russian
1799-1852'><div class=area style='position:absolute; width:27px; height:20px; left:769px; top:1330px'></div></a>
<a  href='build-amap.php?mp=735&a_id=38&g=Neoclassicism, Romanticism&y=1799' title='Karl Bryullov
Neoclassicism, Romanticism
Russian
1799-1852'><div class=area style='position:absolute; width:26px; height:20px; left:796px; top:1330px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=745&a_id=107&g=Academic Art, Neoclassicism&y=1806' title='Alexander Ivanov
Academic Art, Neoclassicism
Russian
1806-1858'><div class=area style='position:absolute; width:21px; height:20px; left:779px; top:1356px'></div></a>
<a  href='build-amap.php?mp=745&a_id=107&g=Academic Art, Neoclassicism&y=1806' title='Alexander Ivanov
Academic Art, Neoclassicism
Russian
1806-1858'><div class=area style='position:absolute; width:21px; height:20px; left:800px; top:1356px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=162&a_id=23&g=Romanticism&y=1817' title='Ivan Aivazovsky
Romanticism
Russian, Armenian
1817-1900'><div class=area style='position:absolute; width:37px; height:20px; left:123px; top:1394px'></div></a>
<a  href='build-amap.php?mp=162&a_id=23&g=Romanticism&y=1817' title='Ivan Aivazovsky
Romanticism
Russian, Armenian
1817-1900'><div class=area style='position:absolute; width:36px; height:20px; left:160px; top:1394px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1003&a_id=58&g=Realism&y=1819' title='Gustave Courbet
Realism
French
1819-1877'><div class=area style='position:absolute; width:26px; height:20px; left:1037px; top:1378px'></div></a>
<a  href='build-amap.php?mp=1003&a_id=58&g=Realism&y=1819' title='Gustave Courbet
Realism
French
1819-1877'><div class=area style='position:absolute; width:26px; height:20px; left:1063px; top:1378px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1013&a_id=65&g=Academic Art, Realism&y=1825' title='William-Adolphe Bouguereau
Academic Art, Realism
French
1825-1905'><div class=area style='position:absolute; width:73px; height:20px; left:1047px; top:1404px'></div></a>
<a  href='build-amap.php?mp=1013&a_id=65&g=Academic Art, Realism&y=1825' title='William-Adolphe Bouguereau
Academic Art, Realism
French
1825-1905'><div class=area style='position:absolute; width:73px; height:20px; left:1120px; top:1404px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=474&a_id=93&g=Symbolism&y=1826' title='Gustave Moreau
Symbolism
French
1826-1898'><div class=area style='position:absolute; width:25px; height:20px; left:458px; top:1440px'></div></a>
<a  href='build-amap.php?mp=474&a_id=93&g=Symbolism&y=1826' title='Gustave Moreau
Symbolism
French
1826-1898'><div class=area style='position:absolute; width:25px; height:20px; left:483px; top:1440px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=182&a_id=99&g=Romanticism, Symbolism, Pre-Raphaelites&y=1827' title='William Holman Hunt
Romanticism, Symbolism, Pre-Raphaelites
British
1827-1910'><div class=area style='position:absolute; width:17px; height:20px; left:216px; top:1397px'></div></a>
<a  href='build-amap.php?mp=182&a_id=99&g=Romanticism, Symbolism, Pre-Raphaelites&y=1827' title='William Holman Hunt
Romanticism, Symbolism, Pre-Raphaelites
British
1827-1910'><div class=area style='position:absolute; width:17px; height:20px; left:233px; top:1397px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=192&a_id=59&g=Romanticism, Aestheticism, Pre-Raphaelites&y=1828' title='Dante Gabriel Rossetti
Romanticism, Aestheticism, Pre-Raphaelites
British
1828-1882'><div class=area style='position:absolute; width:28px; height:20px; left:226px; top:1423px'></div></a>
<a  href='build-amap.php?mp=192&a_id=59&g=Romanticism, Aestheticism, Pre-Raphaelites&y=1828' title='Dante Gabriel Rossetti
Romanticism, Aestheticism, Pre-Raphaelites
British
1828-1882'><div class=area style='position:absolute; width:27px; height:20px; left:254px; top:1423px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=202&a_id=67&g=Romanticism, Realism, Pre-Raphaelites&y=1829' title='John Everett Millais
Romanticism, Realism, Pre-Raphaelites
British
1829-1896'><div class=area style='position:absolute; width:22px; height:20px; left:236px; top:1451px'></div></a>
<a  href='build-amap.php?mp=202&a_id=67&g=Romanticism, Realism, Pre-Raphaelites&y=1829' title='John Everett Millais
Romanticism, Realism, Pre-Raphaelites
British
1829-1896'><div class=area style='position:absolute; width:22px; height:20px; left:258px; top:1451px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1023&a_id=252&g=Realism, Landscape&y=1829' title='Carlos de Haes
Realism, Landscape
Spanish
1829-1898'><div class=area style='position:absolute; width:19px; height:20px; left:1020px; top:1432px'></div></a>
<a  href='build-amap.php?mp=1023&a_id=252&g=Realism, Landscape&y=1829' title='Carlos de Haes
Realism, Landscape
Spanish
1829-1898'><div class=area style='position:absolute; width:18px; height:20px; left:1039px; top:1432px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=635&a_id=61&g=Impressionism, Post-Impressionism&y=1830' title='Camille Pissarro
Impressionism, Post-Impressionism
French
1830-1903'><div class=area style='position:absolute; width:29px; height:20px; left:669px; top:1404px'></div></a>
<a  href='build-amap.php?mp=635&a_id=61&g=Impressionism, Post-Impressionism&y=1830' title='Camille Pissarro
Impressionism, Post-Impressionism
French
1830-1903'><div class=area style='position:absolute; width:29px; height:20px; left:698px; top:1404px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=142&a_id=322&g=Neoromanticism, Landscape, Luminism, Hudson River School&y=1830' title='Bierstadt, Albert
Neoromanticism, Landscape, Luminism, Hudson River School
American
1830-1902'><div class=area style='position:absolute; width:30px; height:20px; left:117px; top:1428px'></div></a>
<a  href='build-amap.php?mp=142&a_id=322&g=Neoromanticism, Landscape, Luminism, Hudson River School&y=1830' title='Bierstadt, Albert
Neoromanticism, Landscape, Luminism, Hudson River School
American
1830-1902'><div class=area style='position:absolute; width:29px; height:20px; left:147px; top:1428px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1033&a_id=113&g=Realism&y=1831' title='Nikolai Ge
Realism
Russian
1831-1894'><div class=area style='position:absolute; width:12px; height:20px; left:1067px; top:1432px'></div></a>
<a  href='build-amap.php?mp=1033&a_id=113&g=Realism&y=1831' title='Nikolai Ge
Realism
Russian
1831-1894'><div class=area style='position:absolute; width:12px; height:20px; left:1079px; top:1432px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1043&a_id=8&g=Realism&y=1832' title='Ivan Shishkin
Realism
Russian
1832-1898'><div class=area style='position:absolute; width:29px; height:20px; left:1020px; top:1456px'></div></a>
<a  href='build-amap.php?mp=1043&a_id=8&g=Realism&y=1832' title='Ivan Shishkin
Realism
Russian
1832-1898'><div class=area style='position:absolute; width:28px; height:20px; left:1049px; top:1456px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=645&a_id=17&g=Impressionism, Realism&y=1832' title='Edouard Manet
Impressionism, Realism
French
1832-1883'><div class=area style='position:absolute; width:22px; height:20px; left:679px; top:1430px'></div></a>
<a  href='build-amap.php?mp=645&a_id=17&g=Impressionism, Realism&y=1832' title='Edouard Manet
Impressionism, Realism
French
1832-1883'><div class=area style='position:absolute; width:21px; height:20px; left:701px; top:1430px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=212&a_id=102&g=Romanticism, Pre-Raphaelites&y=1832' title='Arthur Hughes
Romanticism, Pre-Raphaelites
British
1832-1915'><div class=area style='position:absolute; width:26px; height:20px; left:246px; top:1504px'></div></a>
<a  href='build-amap.php?mp=212&a_id=102&g=Romanticism, Pre-Raphaelites&y=1832' title='Arthur Hughes
Romanticism, Pre-Raphaelites
British
1832-1915'><div class=area style='position:absolute; width:25px; height:20px; left:272px; top:1504px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=222&a_id=88&g=Romanticism, Aestheticism, Pre-Raphaelites&y=1833' title='Edward Burne-Jones
Romanticism, Aestheticism, Pre-Raphaelites
British
1833-1898'><div class=area style='position:absolute; width:40px; height:20px; left:256px; top:1478px'></div></a>
<a  href='build-amap.php?mp=222&a_id=88&g=Romanticism, Aestheticism, Pre-Raphaelites&y=1833' title='Edward Burne-Jones
Romanticism, Aestheticism, Pre-Raphaelites
British
1833-1898'><div class=area style='position:absolute; width:39px; height:20px; left:296px; top:1478px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=655&a_id=53&g=Impressionism&y=1834' title='Edgar Degas
Impressionism
French
1834-1917'><div class=area style='position:absolute; width:24px; height:20px; left:689px; top:1456px'></div></a>
<a  href='build-amap.php?mp=655&a_id=53&g=Impressionism&y=1834' title='Edgar Degas
Impressionism
French
1834-1917'><div class=area style='position:absolute; width:23px; height:20px; left:713px; top:1456px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=132&a_id=314&g=Tonalism&y=1834' title='Whistler, James Abbott Mcneill
Tonalism
American
1834-1903'><div class=area style='position:absolute; width:65px; height:20px; left:36px; top:1456px'></div></a>
<a  href='build-amap.php?mp=132&a_id=314&g=Tonalism&y=1834' title='Whistler, James Abbott Mcneill
Tonalism
American
1834-1903'><div class=area style='position:absolute; width:65px; height:20px; left:101px; top:1456px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1053&a_id=364&g=Realism, Landscape&y=1836' title='Homer, Winslow
Realism, Landscape
American
1836-1910'><div class=area style='position:absolute; width:23px; height:20px; left:1087px; top:1456px'></div></a>
<a  href='build-amap.php?mp=1053&a_id=364&g=Realism, Landscape&y=1836' title='Homer, Winslow
Realism, Landscape
American
1836-1910'><div class=area style='position:absolute; width:23px; height:20px; left:1110px; top:1456px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1203&a_id=142&g=Hague School&y=1837' title='Jacob Maris
Hague School
Dutch
1837-1899'><div class=area style='position:absolute; width:20px; height:20px; left:1198px; top:1456px'></div></a>
<a  href='build-amap.php?mp=1203&a_id=142&g=Hague School&y=1837' title='Jacob Maris
Hague School
Dutch
1837-1899'><div class=area style='position:absolute; width:19px; height:20px; left:1218px; top:1456px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=22&a_id=247&g=Romanticism, Oriental, History, Genre, Military&y=1838' title='Marià Fortuny
Romanticism, Oriental, History, Genre, Military
Spanish
1838-1874'><div class=area style='position:absolute; width:26px; height:20px; left:56px; top:1428px'></div></a>
<a  href='build-amap.php?mp=22&a_id=247&g=Romanticism, Oriental, History, Genre, Military&y=1838' title='Marià Fortuny
Romanticism, Oriental, History, Genre, Military
Spanish
1838-1874'><div class=area style='position:absolute; width:25px; height:20px; left:82px; top:1428px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=665&a_id=36&g=Impressionism&y=1839' title='Alfred Sisley
Impressionism
French, British
1839-1899'><div class=area style='position:absolute; width:22px; height:20px; left:699px; top:1480px'></div></a>
<a  href='build-amap.php?mp=665&a_id=36&g=Impressionism&y=1839' title='Alfred Sisley
Impressionism
French, British
1839-1899'><div class=area style='position:absolute; width:21px; height:20px; left:721px; top:1480px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=824&a_id=69&g=Post-Impressionism&y=1839' title='Paul Cezanne
Post-Impressionism
French
1839-1906'><div class=area style='position:absolute; width:32px; height:20px; left:858px; top:1435px'></div></a>
<a  href='build-amap.php?mp=824&a_id=69&g=Post-Impressionism&y=1839' title='Paul Cezanne
Post-Impressionism
French
1839-1906'><div class=area style='position:absolute; width:32px; height:20px; left:890px; top:1435px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=675&a_id=9&g=Impressionism&y=1840' title='Claude Monet
Impressionism
French
1840-1926'><div class=area style='position:absolute; width:24px; height:20px; left:662px; top:1513px'></div></a>
<a  href='build-amap.php?mp=675&a_id=9&g=Impressionism&y=1840' title='Claude Monet
Impressionism
French
1840-1926'><div class=area style='position:absolute; width:23px; height:20px; left:686px; top:1513px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1063&a_id=85&g=Realism&y=1840' title='Alexei Harlamov
Realism
Russian
1840-1925'><div class=area style='position:absolute; width:31px; height:20px; left:1036px; top:1482px'></div></a>
<a  href='build-amap.php?mp=1063&a_id=85&g=Realism&y=1840' title='Alexei Harlamov
Realism
Russian
1840-1925'><div class=area style='position:absolute; width:30px; height:20px; left:1067px; top:1482px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=685&a_id=30&g=Impressionism&y=1841' title='Pierre-Auguste Renoir
Impressionism
French
1841-1919'><div class=area style='position:absolute; width:25px; height:20px; left:719px; top:1506px'></div></a>
<a  href='build-amap.php?mp=685&a_id=30&g=Impressionism&y=1841' title='Pierre-Auguste Renoir
Impressionism
French
1841-1919'><div class=area style='position:absolute; width:25px; height:20px; left:744px; top:1506px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=695&a_id=125&g=Impressionism&y=1841' title='Berthe Morisot
Impressionism
French
1841-1895'><div class=area style='position:absolute; width:25px; height:20px; left:729px; top:1430px'></div></a>
<a  href='build-amap.php?mp=695&a_id=125&g=Impressionism&y=1841' title='Berthe Morisot
Impressionism
French
1841-1895'><div class=area style='position:absolute; width:25px; height:20px; left:754px; top:1430px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1073&a_id=3&g=Realism, Impressionism&y=1842' title='Arkhip Kuindzhi
Realism, Impressionism
Russian
1842-1910'><div class=area style='position:absolute; width:29px; height:20px; left:1107px; top:1482px'></div></a>
<a  href='build-amap.php?mp=1073&a_id=3&g=Realism, Impressionism&y=1842' title='Arkhip Kuindzhi
Realism, Impressionism
Russian
1842-1910'><div class=area style='position:absolute; width:28px; height:20px; left:1136px; top:1482px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1083&a_id=47&g=Realism&y=1842' title='Vasily Vereshchagin
Realism
Russian
1842-1904'><div class=area style='position:absolute; width:44px; height:20px; left:1029px; top:1506px'></div></a>
<a  href='build-amap.php?mp=1083&a_id=47&g=Realism&y=1842' title='Vasily Vereshchagin
Realism
Russian
1842-1904'><div class=area style='position:absolute; width:44px; height:20px; left:1073px; top:1506px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1193&a_id=203&g=Realism, Macchiaioli, Genre, Portrait&y=1842' title='Giovanni Boldini
Realism, Macchiaioli, Genre, Portrait
Italian
1842-1931'><div class=area style='position:absolute; width:23px; height:20px; left:1181px; top:1430px'></div></a>
<a  href='build-amap.php?mp=1193&a_id=203&g=Realism, Macchiaioli, Genre, Portrait&y=1842' title='Giovanni Boldini
Realism, Macchiaioli, Genre, Portrait
Italian
1842-1931'><div class=area style='position:absolute; width:23px; height:20px; left:1204px; top:1430px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1093&a_id=25&g=Realism&y=1844' title='Ilya Repin
Realism
Russian
1844-1930'><div class=area style='position:absolute; width:20px; height:20px; left:1127px; top:1506px'></div></a>
<a  href='build-amap.php?mp=1093&a_id=25&g=Realism&y=1844' title='Ilya Repin
Realism
Russian
1844-1930'><div class=area style='position:absolute; width:20px; height:20px; left:1147px; top:1506px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1690&a_id=75&g=Primitivism, Post-Impressionism&y=1844' title='Henri Rousseau
Primitivism, Post-Impressionism
French
1844-1910'><div class=area style='position:absolute; width:33px; height:20px; left:1724px; top:1523px'></div></a>
<a  href='build-amap.php?mp=1690&a_id=75&g=Primitivism, Post-Impressionism&y=1844' title='Henri Rousseau
Primitivism, Post-Impressionism
French
1844-1910'><div class=area style='position:absolute; width:32px; height:20px; left:1757px; top:1523px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=705&a_id=328&g=Impressionism&y=1844' title='Cassatt, Mary
Impressionism
American
1844-1926'><div class=area style='position:absolute; width:26px; height:20px; left:739px; top:1530px'></div></a>
<a  href='build-amap.php?mp=705&a_id=328&g=Impressionism&y=1844' title='Cassatt, Mary
Impressionism
American
1844-1926'><div class=area style='position:absolute; width:26px; height:20px; left:765px; top:1530px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1103&a_id=348&g=Realism&y=1844' title='Eakins, Thomas
Realism
American
1844-1916'><div class=area style='position:absolute; width:24px; height:20px; left:1090px; top:1534px'></div></a>
<a  href='build-amap.php?mp=1103&a_id=348&g=Realism&y=1844' title='Eakins, Thomas
Realism
American
1844-1916'><div class=area style='position:absolute; width:23px; height:20px; left:1114px; top:1534px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1113&a_id=5&g=Realism&y=1848' title='Vasily Surikov
Realism
Russian
1848-1916'><div class=area style='position:absolute; width:25px; height:20px; left:1147px; top:1534px'></div></a>
<a  href='build-amap.php?mp=1113&a_id=5&g=Realism&y=1848' title='Vasily Surikov
Realism
Russian
1848-1916'><div class=area style='position:absolute; width:25px; height:20px; left:1172px; top:1534px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=152&a_id=20&g=Romanticism, Symbolism, History, Mythology, Folk&y=1848' title='Viktor Vasnetsov
Romanticism, Symbolism, History, Mythology, Folk
Russian
1848-1926'><div class=area style='position:absolute; width:53px; height:20px; left:80px; top:1485px'></div></a>
<a  href='build-amap.php?mp=152&a_id=20&g=Romanticism, Symbolism, History, Mythology, Folk&y=1848' title='Viktor Vasnetsov
Romanticism, Symbolism, History, Mythology, Folk
Russian
1848-1926'><div class=area style='position:absolute; width:53px; height:20px; left:133px; top:1485px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=834&a_id=94&g=Symbolism, Post-Impressionism&y=1848' title='Paul Gauguin
Symbolism, Post-Impressionism
French
1848-1903'><div class=area style='position:absolute; width:28px; height:20px; left:868px; top:1513px'></div></a>
<a  href='build-amap.php?mp=834&a_id=94&g=Symbolism, Post-Impressionism&y=1848' title='Paul Gauguin
Symbolism, Post-Impressionism
French
1848-1903'><div class=area style='position:absolute; width:27px; height:20px; left:896px; top:1513px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=232&a_id=51&g=Romanticism, Pre-Raphaelites&y=1849' title='John Waterhouse
Romanticism, Pre-Raphaelites
British
1849-1917'><div class=area style='position:absolute; width:39px; height:20px; left:266px; top:1528px'></div></a>
<a  href='build-amap.php?mp=232&a_id=51&g=Romanticism, Pre-Raphaelites&y=1849' title='John Waterhouse
Romanticism, Pre-Raphaelites
British
1849-1917'><div class=area style='position:absolute; width:39px; height:20px; left:305px; top:1528px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=715&a_id=182&g=Impressionism, Post-Impressionism, Rouen School&y=1849' title='Albert Lebourg
Impressionism, Post-Impressionism, Rouen School
French
1849-1928'><div class=area style='position:absolute; width:27px; height:20px; left:696px; top:1568px'></div></a>
<a  href='build-amap.php?mp=715&a_id=182&g=Impressionism, Post-Impressionism, Rouen School&y=1849' title='Albert Lebourg
Impressionism, Post-Impressionism, Rouen School
French
1849-1928'><div class=area style='position:absolute; width:26px; height:20px; left:723px; top:1568px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=725&a_id=231&g=Impressionism&y=1849' title='William Merritt Chase
Impressionism
American
1849-1916'><div class=area style='position:absolute; width:22px; height:20px; left:759px; top:1559px'></div></a>
<a  href='build-amap.php?mp=725&a_id=231&g=Impressionism&y=1849' title='William Merritt Chase
Impressionism
American
1849-1916'><div class=area style='position:absolute; width:22px; height:20px; left:781px; top:1559px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=844&a_id=21&g=Post-Impressionism&y=1853' title='Vincent van Gogh
Post-Impressionism
Dutch
1853-1890'><div class=area style='position:absolute; width:35px; height:20px; left:878px; top:1461px'></div></a>
<a  href='build-amap.php?mp=844&a_id=21&g=Post-Impressionism&y=1853' title='Vincent van Gogh
Post-Impressionism
Dutch
1853-1890'><div class=area style='position:absolute; width:35px; height:20px; left:913px; top:1461px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=464&a_id=27&g=Symbolism&y=1856' title='Mikhail Vrubel
Symbolism
Russian
1856-1910'><div class=area style='position:absolute; width:23px; height:20px; left:452px; top:1466px'></div></a>
<a  href='build-amap.php?mp=464&a_id=27&g=Symbolism&y=1856' title='Mikhail Vrubel
Symbolism
Russian
1856-1910'><div class=area style='position:absolute; width:23px; height:20px; left:475px; top:1466px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1123&a_id=60&g=Realism, Impressionism&y=1856' title='John Singer Sargent
Realism, Impressionism
American
1856-1925'><div class=area style='position:absolute; width:26px; height:20px; left:1105px; top:1564px'></div></a>
<a  href='build-amap.php?mp=1123&a_id=60&g=Realism, Impressionism&y=1856' title='John Singer Sargent
Realism, Impressionism
American
1856-1925'><div class=area style='position:absolute; width:26px; height:20px; left:1131px; top:1564px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=854&a_id=208&g=Neo-Impressionism, Pointilism, Divisionism&y=1856' title='Henri Edmond Cross
Neo-Impressionism, Pointilism, Divisionism
French
1856-1910'><div class=area style='position:absolute; width:21px; height:20px; left:847px; top:1485px'></div></a>
<a  href='build-amap.php?mp=854&a_id=208&g=Neo-Impressionism, Pointilism, Divisionism&y=1856' title='Henri Edmond Cross
Neo-Impressionism, Pointilism, Divisionism
French
1856-1910'><div class=area style='position:absolute; width:20px; height:20px; left:868px; top:1485px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1223&a_id=220&g=Expressionism, Impressionism&y=1858' title='Lovis Corinth
Expressionism, Impressionism
German
1858-1925'><div class=area style='position:absolute; width:55px; height:20px; left:1257px; top:1487px'></div></a>
<a  href='build-amap.php?mp=1223&a_id=220&g=Expressionism, Impressionism&y=1858' title='Lovis Corinth
Expressionism, Impressionism
German
1858-1925'><div class=area style='position:absolute; width:54px; height:20px; left:1312px; top:1487px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=864&a_id=225&g=Neo-impressionism, Pointilism&y=1858' title='Maximilien Luce
Neo-impressionism, Pointilism
French
1858-1941'><div class=area style='position:absolute; width:18px; height:20px; left:863px; top:1551px'></div></a>
<a  href='build-amap.php?mp=864&a_id=225&g=Neo-impressionism, Pointilism&y=1858' title='Maximilien Luce
Neo-impressionism, Pointilism
French
1858-1941'><div class=area style='position:absolute; width:17px; height:20px; left:881px; top:1551px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=954&a_id=77&g=Post-Impressionism&y=1859' title='Georges Seurat
Post-Impressionism
French
1859-1891'><div class=area style='position:absolute; width:23px; height:20px; left:943px; top:1487px'></div></a>
<a  href='build-amap.php?mp=954&a_id=77&g=Post-Impressionism&y=1859' title='Georges Seurat
Post-Impressionism
French
1859-1891'><div class=area style='position:absolute; width:22px; height:20px; left:966px; top:1487px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1153&a_id=48&g=Realism&y=1860' title='Isaac Levitan
Realism
Russian, Jewish
1860-1900'><div class=area style='position:absolute; width:24px; height:20px; left:1140px; top:1456px'></div></a>
<a  href='build-amap.php?mp=1153&a_id=48&g=Realism&y=1860' title='Isaac Levitan
Realism
Russian, Jewish
1860-1900'><div class=area style='position:absolute; width:23px; height:20px; left:1164px; top:1456px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=493&a_id=56&g=Art Nouveau&y=1860' title='Alphonse Mucha
Art Nouveau
Czech
1860-1939'><div class=area style='position:absolute; width:23px; height:20px; left:527px; top:1572px'></div></a>
<a  href='build-amap.php?mp=493&a_id=56&g=Art Nouveau&y=1860' title='Alphonse Mucha
Art Nouveau
Czech
1860-1939'><div class=area style='position:absolute; width:23px; height:20px; left:550px; top:1572px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=795&a_id=188&g=Impressionism&y=1861' title='Constantin Korovin
Impressionism
Russian
1861-1939'><div class=area style='position:absolute; width:25px; height:20px; left:780px; top:1506px'></div></a>
<a  href='build-amap.php?mp=795&a_id=188&g=Impressionism&y=1861' title='Constantin Korovin
Impressionism
Russian
1861-1939'><div class=area style='position:absolute; width:24px; height:20px; left:805px; top:1506px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=503&a_id=22&g=Symbolism, Art Nouveau&y=1862' title='Gustav Klimt
Symbolism, Art Nouveau
Austrian
1862-1918'><div class=area style='position:absolute; width:21px; height:20px; left:537px; top:1516px'></div></a>
<a  href='build-amap.php?mp=503&a_id=22&g=Symbolism, Art Nouveau&y=1862' title='Gustav Klimt
Symbolism, Art Nouveau
Austrian
1862-1918'><div class=area style='position:absolute; width:20px; height:20px; left:558px; top:1516px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=874&a_id=230&g=Neo-impressionism&y=1862' title='Theo van Rysselberghe
Neo-impressionism
Belgian
1862-1926'><div class=area style='position:absolute; width:43px; height:20px; left:908px; top:1538px'></div></a>
<a  href='build-amap.php?mp=874&a_id=230&g=Neo-impressionism&y=1862' title='Theo van Rysselberghe
Neo-impressionism
Belgian
1862-1926'><div class=area style='position:absolute; width:43px; height:20px; left:951px; top:1538px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1233&a_id=63&g=Expressionism, Symbolism&y=1863' title='Edvard Munch
Expressionism, Symbolism
Norwegian
1863-1944'><div class=area style='position:absolute; width:25px; height:20px; left:1267px; top:1513px'></div></a>
<a  href='build-amap.php?mp=1233&a_id=63&g=Expressionism, Symbolism&y=1863' title='Edvard Munch
Expressionism, Symbolism
Norwegian
1863-1944'><div class=area style='position:absolute; width:24px; height:20px; left:1292px; top:1513px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=884&a_id=96&g=Post-Impressionism&y=1863' title='Paul Signac
Post-Impressionism
French
1863-1935'><div class=area style='position:absolute; width:24px; height:20px; left:918px; top:1564px'></div></a>
<a  href='build-amap.php?mp=884&a_id=96&g=Post-Impressionism&y=1863' title='Paul Signac
Post-Impressionism
French
1863-1935'><div class=area style='position:absolute; width:23px; height:20px; left:942px; top:1564px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=735&a_id=213&g=Impressionism&y=1863' title='Joaquin Sorolla
Impressionism
Spanish
1863-1924'><div class=area style='position:absolute; width:24px; height:20px; left:769px; top:1585px'></div></a>
<a  href='build-amap.php?mp=735&a_id=213&g=Impressionism&y=1863' title='Joaquin Sorolla
Impressionism
Spanish
1863-1924'><div class=area style='position:absolute; width:23px; height:20px; left:793px; top:1585px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=513&a_id=57&g=Post-Impressionism, Art Nouveau&y=1864' title='Henri de Toulouse-Lautrec
Post-Impressionism, Art Nouveau
French
1864-1901'><div class=area style='position:absolute; width:31px; height:20px; left:547px; top:1490px'></div></a>
<a  href='build-amap.php?mp=513&a_id=57&g=Post-Impressionism, Art Nouveau&y=1864' title='Henri de Toulouse-Lautrec
Post-Impressionism, Art Nouveau
French
1864-1901'><div class=area style='position:absolute; width:31px; height:20px; left:578px; top:1490px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=745&a_id=2&g=Impressionism&y=1865' title='Henri Lebasque
Impressionism
French
1865-1937'><div class=area style='position:absolute; width:32px; height:20px; left:716px; top:1610px'></div></a>
<a  href='build-amap.php?mp=745&a_id=2&g=Impressionism&y=1865' title='Henri Lebasque
Impressionism
French
1865-1937'><div class=area style='position:absolute; width:31px; height:20px; left:748px; top:1610px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1183&a_id=84&g=Impressionism, Realism&y=1865' title='Valentin Serov
Impressionism, Realism
Russian
1865-1911'><div class=area style='position:absolute; width:20px; height:20px; left:1177px; top:1482px'></div></a>
<a  href='build-amap.php?mp=1183&a_id=84&g=Impressionism, Realism&y=1865' title='Valentin Serov
Impressionism, Realism
Russian
1865-1911'><div class=area style='position:absolute; width:20px; height:20px; left:1197px; top:1482px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1373&a_id=4&g=Expressionism, Abstract art&y=1866' title='Vasiliy Kandinskiy
Expressionism, Abstract art
Russian
1866-1944'><div class=area style='position:absolute; width:39px; height:20px; left:1407px; top:1551px'></div></a>
<a  href='build-amap.php?mp=1373&a_id=4&g=Expressionism, Abstract art&y=1866' title='Vasiliy Kandinskiy
Expressionism, Abstract art
Russian
1866-1944'><div class=area style='position:absolute; width:38px; height:20px; left:1446px; top:1551px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=755&a_id=186&g=Heidelberg School, Impressionism, Landscape&y=1867' title='Arthur Streeton
Heidelberg School, Impressionism, Landscape
Australian
1867-1943'><div class=area style='position:absolute; width:28px; height:20px; left:733px; top:1639px'></div></a>
<a  href='build-amap.php?mp=755&a_id=186&g=Heidelberg School, Impressionism, Landscape&y=1867' title='Arthur Streeton
Heidelberg School, Impressionism, Landscape
Australian
1867-1943'><div class=area style='position:absolute; width:28px; height:20px; left:761px; top:1639px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=894&a_id=323&g=Post-impressionism, Avant-garde, Les Nabis&y=1867' title='Bonnard, Pierre
Post-impressionism, Avant-garde, Les Nabis
French
1867-1947'><div class=area style='position:absolute; width:28px; height:20px; left:928px; top:1593px'></div></a>
<a  href='build-amap.php?mp=894&a_id=323&g=Post-impressionism, Avant-garde, Les Nabis&y=1867' title='Bonnard, Pierre
Post-impressionism, Avant-garde, Les Nabis
French
1867-1947'><div class=area style='position:absolute; width:27px; height:20px; left:956px; top:1593px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=765&a_id=16&g=Impressionism&y=1869' title='Sergei Vinogradov
Impressionism
Russian
1869-1963'><div class=area style='position:absolute; width:37px; height:20px; left:726px; top:1664px'></div></a>
<a  href='build-amap.php?mp=765&a_id=16&g=Impressionism&y=1869' title='Sergei Vinogradov
Impressionism
Russian
1869-1963'><div class=area style='position:absolute; width:36px; height:20px; left:763px; top:1664px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1557&a_id=49&g=Fauvism, Impressionism, Post-Impressionism&y=1869' title='Henri Matisse
Fauvism, Impressionism, Post-Impressionism
French
1869-1954'><div class=area style='position:absolute; width:27px; height:20px; left:1591px; top:1664px'></div></a>
<a  href='build-amap.php?mp=1557&a_id=49&g=Fauvism, Impressionism, Post-Impressionism&y=1869' title='Henri Matisse
Fauvism, Impressionism, Post-Impressionism
French
1869-1954'><div class=area style='position:absolute; width:26px; height:20px; left:1618px; top:1664px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=363&a_id=6&g=Symbolism&y=1870' title='Victor Borisov-Musatov
Symbolism
Russian
1870-1905'><div class=area style='position:absolute; width:51px; height:20px; left:397px; top:1501px'></div></a>
<a  href='build-amap.php?mp=363&a_id=6&g=Symbolism&y=1870' title='Victor Borisov-Musatov
Symbolism
Russian
1870-1905'><div class=area style='position:absolute; width:51px; height:20px; left:448px; top:1501px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=523&a_id=103&g=Art Nouveau&y=1870' title='Alexandre Benois
Art Nouveau
Russian
1870-1960'><div class=area style='position:absolute; width:24px; height:20px; left:557px; top:1601px'></div></a>
<a  href='build-amap.php?mp=523&a_id=103&g=Art Nouveau&y=1870' title='Alexandre Benois
Art Nouveau
Russian
1870-1960'><div class=area style='position:absolute; width:23px; height:20px; left:581px; top:1601px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1507&a_id=318&g=Futurism&y=1871' title='Balla, Giacomo
Futurism
Italy
1871-1958'><div class=area style='position:absolute; width:18px; height:20px; left:1541px; top:1559px'></div></a>
<a  href='build-amap.php?mp=1507&a_id=318&g=Futurism&y=1871' title='Balla, Giacomo
Futurism
Italy
1871-1958'><div class=area style='position:absolute; width:18px; height:20px; left:1559px; top:1559px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1537&a_id=80&g=Neoplasticism&y=1872' title='Piet Mondrian
Neoplasticism
Dutch
1872-1944'><div class=area style='position:absolute; width:34px; height:20px; left:1571px; top:1606px'></div></a>
<a  href='build-amap.php?mp=1537&a_id=80&g=Neoplasticism&y=1872' title='Piet Mondrian
Neoplasticism
Dutch
1872-1944'><div class=area style='position:absolute; width:33px; height:20px; left:1605px; top:1606px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=373&a_id=11&g=Symbolism&y=1874' title='Nicholas Roerich
Symbolism
Russian
1874-1947'><div class=area style='position:absolute; width:26px; height:20px; left:407px; top:1534px'></div></a>
<a  href='build-amap.php?mp=373&a_id=11&g=Symbolism&y=1874' title='Nicholas Roerich
Symbolism
Russian
1874-1947'><div class=area style='position:absolute; width:25px; height:20px; left:433px; top:1534px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=775&a_id=199&g=Impressionism&y=1874' title='Frederick Carl Frieseke
Impressionism
American
1874-1939'><div class=area style='position:absolute; width:29px; height:20px; left:809px; top:1639px'></div></a>
<a  href='build-amap.php?mp=775&a_id=199&g=Impressionism&y=1874' title='Frederick Carl Frieseke
Impressionism
American
1874-1939'><div class=area style='position:absolute; width:28px; height:20px; left:838px; top:1639px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1133&a_id=10&g=Social Realism, Impressionism, Symbolism&y=1875' title='Konstantin Yuon
Social Realism, Impressionism, Symbolism
Russian
1875-1958'><div class=area style='position:absolute; width:19px; height:20px; left:1167px; top:1564px'></div></a>
<a  href='build-amap.php?mp=1133&a_id=10&g=Social Realism, Impressionism, Symbolism&y=1875' title='Konstantin Yuon
Social Realism, Impressionism, Symbolism
Russian
1875-1958'><div class=area style='position:absolute; width:18px; height:20px; left:1186px; top:1564px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=533&a_id=299&g=Symbolism, Art nouveau&y=1875' title='Mikalojus Konstantinas Ciurlionis
Symbolism, Art nouveau
Lithuanian
1875-1911'><div class=area style='position:absolute; width:30px; height:20px; left:567px; top:1543px'></div></a>
<a  href='build-amap.php?mp=533&a_id=299&g=Symbolism, Art nouveau&y=1875' title='Mikalojus Konstantinas Ciurlionis
Symbolism, Art nouveau
Lithuanian
1875-1911'><div class=area style='position:absolute; width:30px; height:20px; left:597px; top:1543px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1587&a_id=417&g=Futurism, Precisionism&y=1877' title='Stella, Joseph
Futurism, Precisionism
American
1877-1946'><div class=area style='position:absolute; width:26px; height:20px; left:1621px; top:1528px'></div></a>
<a  href='build-amap.php?mp=1587&a_id=417&g=Futurism, Precisionism&y=1877' title='Stella, Joseph
Futurism, Precisionism
American
1877-1946'><div class=area style='position:absolute; width:26px; height:20px; left:1647px; top:1528px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=383&a_id=13&g=Symbolism&y=1878' title='Kuzma Petrov-Vodkin
Symbolism
Russian
1878-1939'><div class=area style='position:absolute; width:44px; height:20px; left:417px; top:1568px'></div></a>
<a  href='build-amap.php?mp=383&a_id=13&g=Symbolism&y=1878' title='Kuzma Petrov-Vodkin
Symbolism
Russian
1878-1939'><div class=area style='position:absolute; width:43px; height:20px; left:461px; top:1568px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=607&a_id=37&g=Realism, Art Nouveau&y=1878' title='Boris Kustodiev
Realism, Art Nouveau
Russian
1878-1927'><div class=area style='position:absolute; width:32px; height:20px; left:577px; top:1572px'></div></a>
<a  href='build-amap.php?mp=607&a_id=37&g=Realism, Art Nouveau&y=1878' title='Boris Kustodiev
Realism, Art Nouveau
Russian
1878-1927'><div class=area style='position:absolute; width:32px; height:20px; left:609px; top:1572px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1383&a_id=26&g=Geometric abstraction, Suprematism&y=1879' title='Kazimir Malevich
Geometric abstraction, Suprematism
Russian
1879-1935'><div class=area style='position:absolute; width:29px; height:20px; left:1417px; top:1601px'></div></a>
<a  href='build-amap.php?mp=1383&a_id=26&g=Geometric abstraction, Suprematism&y=1879' title='Kazimir Malevich
Geometric abstraction, Suprematism
Russian
1879-1935'><div class=area style='position:absolute; width:28px; height:20px; left:1446px; top:1601px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1343&a_id=79&g=Expressionism, Abstract art, Surrealism&y=1879' title='Paul Klee
Expressionism, Abstract art, Surrealism
German, Swiss
1879-1940'><div class=area style='position:absolute; width:50px; height:20px; left:1278px; top:1639px'></div></a>
<a  href='build-amap.php?mp=1343&a_id=79&g=Expressionism, Abstract art, Surrealism&y=1879' title='Paul Klee
Expressionism, Abstract art, Surrealism
German, Swiss
1879-1940'><div class=area style='position:absolute; width:49px; height:20px; left:1328px; top:1639px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=10&a_id=197&g=Cubism, Dada, Surrealism&y=1879' title='Francis Picabia
Cubism, Dada, Surrealism
French
1879-1953'><div class=area style='position:absolute; width:25px; height:20px; left:44px; top:1568px'></div></a>
<a  href='build-amap.php?mp=10&a_id=197&g=Cubism, Dada, Surrealism&y=1879' title='Francis Picabia
Cubism, Dada, Surrealism
French
1879-1953'><div class=area style='position:absolute; width:25px; height:20px; left:69px; top:1568px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=393&a_id=117&g=Realism, Symbolism&y=1880' title='Martiros Saryan
Realism, Symbolism
Armenian
1880-1972'><div class=area style='position:absolute; width:24px; height:20px; left:427px; top:1597px'></div></a>
<a  href='build-amap.php?mp=393&a_id=117&g=Realism, Symbolism&y=1880' title='Martiros Saryan
Realism, Symbolism
Armenian
1880-1972'><div class=area style='position:absolute; width:24px; height:20px; left:451px; top:1597px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1567&a_id=346&g=Fauvism&y=1880' title='Derain, Andre Louis
Fauvism
French
1880-1954'><div class=area style='position:absolute; width:22px; height:20px; left:1601px; top:1690px'></div></a>
<a  href='build-amap.php?mp=1567&a_id=346&g=Fauvism&y=1880' title='Derain, Andre Louis
Fauvism
French
1880-1954'><div class=area style='position:absolute; width:22px; height:20px; left:1623px; top:1690px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1243&a_id=351&g=Expressionism&y=1880' title='Ernst Ludwig Kirchner
Expressionism
German
1880-1938'><div class=area style='position:absolute; width:28px; height:20px; left:1277px; top:1538px'></div></a>
<a  href='build-amap.php?mp=1243&a_id=351&g=Expressionism&y=1880' title='Ernst Ludwig Kirchner
Expressionism
German
1880-1938'><div class=area style='position:absolute; width:28px; height:20px; left:1305px; top:1538px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=533&a_id=363&g=Abstract Expressionism&y=1880' title='Hofmann, Hans
Abstract Expressionism
American
1880-1966'><div class=area style='position:absolute; width:29px; height:20px; left:567px; top:1673px'></div></a>
<a  href='build-amap.php?mp=533&a_id=363&g=Abstract Expressionism&y=1880' title='Hofmann, Hans
Abstract Expressionism
American
1880-1966'><div class=area style='position:absolute; width:29px; height:20px; left:596px; top:1673px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1253&a_id=386&g=Expressionism&y=1880' title='Marc, Franz
Expressionism
German
1880-1916'><div class=area style='position:absolute; width:18px; height:20px; left:1251px; top:1564px'></div></a>
<a  href='build-amap.php?mp=1253&a_id=386&g=Expressionism&y=1880' title='Marc, Franz
Expressionism
German
1880-1916'><div class=area style='position:absolute; width:18px; height:20px; left:1269px; top:1564px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=20&a_id=28&g=Cubism, Surrealism&y=1881' title='Pablo Picasso
Cubism, Surrealism
Spanish
1881-1973'><div class=area style='position:absolute; width:28px; height:20px; left:54px; top:1593px'></div></a>
<a  href='build-amap.php?mp=20&a_id=28&g=Cubism, Surrealism&y=1881' title='Pablo Picasso
Cubism, Surrealism
Spanish
1881-1973'><div class=area style='position:absolute; width:27px; height:20px; left:82px; top:1593px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=30&a_id=307&g=Tubism, Cubism, Modernism&y=1881' title='Leger, Fernand
Tubism, Cubism, Modernism
French
1881-1955'><div class=area style='position:absolute; width:23px; height:20px; left:64px; top:1618px'></div></a>
<a  href='build-amap.php?mp=30&a_id=307&g=Tubism, Cubism, Modernism&y=1881' title='Leger, Fernand
Tubism, Cubism, Modernism
French
1881-1955'><div class=area style='position:absolute; width:22px; height:20px; left:87px; top:1618px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=50&a_id=357&g=Cubism, Abstract art&y=1881' title='Gleizes, Albert
Cubism, Abstract art
French
1881-1953'><div class=area style='position:absolute; width:26px; height:20px; left:84px; top:1643px'></div></a>
<a  href='build-amap.php?mp=50&a_id=357&g=Cubism, Abstract art&y=1881' title='Gleizes, Albert
Cubism, Abstract art
French
1881-1953'><div class=area style='position:absolute; width:25px; height:20px; left:110px; top:1643px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=40&a_id=401&g=Cubism&y=1881' title='Patrick Henry Bruce
Cubism
American
1881-1935'><div class=area style='position:absolute; width:21px; height:20px; left:33px; top:1643px'></div></a>
<a  href='build-amap.php?mp=40&a_id=401&g=Cubism&y=1881' title='Patrick Henry Bruce
Cubism
American
1881-1935'><div class=area style='position:absolute; width:20px; height:20px; left:54px; top:1643px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=993&a_id=116&g=Realism&y=1882' title='Rockwell Kent
Realism
American
1882-1971'><div class=area style='position:absolute; width:17px; height:20px; left:1027px; top:1534px'></div></a>
<a  href='build-amap.php?mp=993&a_id=116&g=Realism&y=1882' title='Rockwell Kent
Realism
American
1882-1971'><div class=area style='position:absolute; width:17px; height:20px; left:1044px; top:1534px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1517&a_id=298&g=Futurism&y=1882' title='Boccioni, Umberto
Futurism
Italian
1882-1916'><div class=area style='position:absolute; width:29px; height:20px; left:1551px; top:1509px'></div></a>
<a  href='build-amap.php?mp=1517&a_id=298&g=Futurism&y=1882' title='Boccioni, Umberto
Futurism
Italian
1882-1916'><div class=area style='position:absolute; width:28px; height:20px; left:1580px; top:1509px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1003&a_id=302&g=Realism&y=1882' title='Edward Hopper
Realism
American
1882-1967'><div class=area style='position:absolute; width:27px; height:20px; left:1037px; top:1564px'></div></a>
<a  href='build-amap.php?mp=1003&a_id=302&g=Realism&y=1882' title='Edward Hopper
Realism
American
1882-1967'><div class=area style='position:absolute; width:27px; height:20px; left:1064px; top:1564px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1143&a_id=320&g=American realism, Ashcan School, The Eight&y=1882' title='Bellows, George Wesley
American realism, Ashcan School, The Eight
American
1882-1925'><div class=area style='position:absolute; width:26px; height:20px; left:1177px; top:1506px'></div></a>
<a  href='build-amap.php?mp=1143&a_id=320&g=American realism, Ashcan School, The Eight&y=1882' title='Bellows, George Wesley
American realism, Ashcan School, The Eight
American
1882-1925'><div class=area style='position:absolute; width:26px; height:20px; left:1203px; top:1506px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1527&a_id=81&g=Analytical Realism&y=1883' title='Pavel Filonov
Analytical Realism
Russian
1883-1941'><div class=area style='position:absolute; width:24px; height:20px; left:1561px; top:1534px'></div></a>
<a  href='build-amap.php?mp=1527&a_id=81&g=Analytical Realism&y=1883' title='Pavel Filonov
Analytical Realism
Russian
1883-1941'><div class=area style='position:absolute; width:24px; height:20px; left:1585px; top:1534px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1597&a_id=345&g=Precisionism&y=1883' title='Demuth, Charles
Precisionism
American
1883-1935'><div class=area style='position:absolute; width:26px; height:20px; left:1631px; top:1551px'></div></a>
<a  href='build-amap.php?mp=1597&a_id=345&g=Precisionism&y=1883' title='Demuth, Charles
Precisionism
American
1883-1935'><div class=area style='position:absolute; width:26px; height:20px; left:1657px; top:1551px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=60&a_id=375&g=Neo-Impressionism, Divisionism, Fauvism, Cubism&y=1883' title='Jean Metzinger
Neo-Impressionism, Divisionism, Fauvism, Cubism
French
1883-1956'><div class=area style='position:absolute; width:33px; height:20px; left:29px; top:1669px'></div></a>
<a  href='build-amap.php?mp=60&a_id=375&g=Neo-Impressionism, Divisionism, Fauvism, Cubism&y=1883' title='Jean Metzinger
Neo-Impressionism, Divisionism, Fauvism, Cubism
French
1883-1956'><div class=area style='position:absolute; width:32px; height:20px; left:62px; top:1669px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1547&a_id=419&g=Neoplasticism, Concrete art, Dada&y=1883' title='Theos van Doesburg
Neoplasticism, Concrete art, Dada
Dutch
1883-1931'><div class=area style='position:absolute; width:43px; height:20px; left:1581px; top:1631px'></div></a>
<a  href='build-amap.php?mp=1547&a_id=419&g=Neoplasticism, Concrete art, Dada&y=1883' title='Theos van Doesburg
Neoplasticism, Concrete art, Dada
Dutch
1883-1931'><div class=area style='position:absolute; width:43px; height:20px; left:1624px; top:1631px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1263&a_id=1&g=Expressionism&y=1884' title='Amedeo Modigliani
Expressionism
Italian
1884-1920'><div class=area style='position:absolute; width:37px; height:20px; left:1297px; top:1564px'></div></a>
<a  href='build-amap.php?mp=1263&a_id=1&g=Expressionism&y=1884' title='Amedeo Modigliani
Expressionism
Italian
1884-1920'><div class=area style='position:absolute; width:37px; height:20px; left:1334px; top:1564px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=785&a_id=44&g=Impressionism, Symbolism, Expressionism, Art Deco, Orientalism&y=1884' title='Zinaida Serebriakova
Impressionism, Symbolism, Expressionism, Art Deco, Orientalism
Russian
1884-1967'><div class=area style='position:absolute; width:41px; height:20px; left:819px; top:1664px'></div></a>
<a  href='build-amap.php?mp=785&a_id=44&g=Impressionism, Symbolism, Expressionism, Art Deco, Orientalism&y=1884' title='Zinaida Serebriakova
Impressionism, Symbolism, Expressionism, Art Deco, Orientalism
Russian
1884-1967'><div class=area style='position:absolute; width:40px; height:20px; left:860px; top:1664px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1283&a_id=391&g=New Objectivity, Expressionism&y=1884' title='Max Beckmann
New Objectivity, Expressionism
German
1884-1950'><div class=area style='position:absolute; width:35px; height:20px; left:1317px; top:1589px'></div></a>
<a  href='build-amap.php?mp=1283&a_id=391&g=New Objectivity, Expressionism&y=1884' title='Max Beckmann
New Objectivity, Expressionism
German
1884-1950'><div class=area style='position:absolute; width:34px; height:20px; left:1352px; top:1589px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=110&a_id=344&g=Orphism, Divisionism, Cubism, Abstract art&y=1885' title='Delaunay, Robert
Orphism, Divisionism, Cubism, Abstract art
French
1885-1941'><div class=area style='position:absolute; width:31px; height:20px; left:83px; top:1543px'></div></a>
<a  href='build-amap.php?mp=110&a_id=344&g=Orphism, Divisionism, Cubism, Abstract art&y=1885' title='Delaunay, Robert
Orphism, Divisionism, Cubism, Abstract art
French
1885-1941'><div class=area style='position:absolute; width:30px; height:20px; left:114px; top:1543px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1163&a_id=7&g=Social Realism, Muralism&y=1886' title='Diego Rivera
Social Realism, Muralism
Mexican
1886-1957'><div class=area style='position:absolute; width:24px; height:20px; left:1149px; top:1639px'></div></a>
<a  href='build-amap.php?mp=1163&a_id=7&g=Social Realism, Muralism&y=1886' title='Diego Rivera
Social Realism, Muralism
Mexican
1886-1957'><div class=area style='position:absolute; width:24px; height:20px; left:1173px; top:1639px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=192&a_id=413&g=Synchromism&y=1886' title='Russell, Morgan
Synchromism
American
1886-1953'><div class=area style='position:absolute; width:33px; height:20px; left:161px; top:1614px'></div></a>
<a  href='build-amap.php?mp=192&a_id=413&g=Synchromism&y=1886' title='Russell, Morgan
Synchromism
American
1886-1953'><div class=area style='position:absolute; width:32px; height:20px; left:194px; top:1614px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1700&a_id=40&g=Primitivism&y=1887' title='Marc Chagall
Primitivism
French, Jewish, Belarusian
1887-1985'><div class=area style='position:absolute; width:28px; height:20px; left:1734px; top:1597px'></div></a>
<a  href='build-amap.php?mp=1700&a_id=40&g=Primitivism&y=1887' title='Marc Chagall
Primitivism
French, Jewish, Belarusian
1887-1985'><div class=area style='position:absolute; width:28px; height:20px; left:1762px; top:1597px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=70&a_id=301&g=Cubism, Conceptual art, Dada&y=1887' title='Duchamp, Marcel
Cubism, Conceptual art, Dada
French
1887-1968'><div class=area style='position:absolute; width:34px; height:20px; left:37px; top:1698px'></div></a>
<a  href='build-amap.php?mp=70&a_id=301&g=Cubism, Conceptual art, Dada&y=1887' title='Duchamp, Marcel
Cubism, Conceptual art, Dada
French
1887-1968'><div class=area style='position:absolute; width:33px; height:20px; left:71px; top:1698px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1293&a_id=310&g=Expressionism&y=1887' title='Macke, August
Expressionism
German
1887-1914'><div class=area style='position:absolute; width:23px; height:20px; left:1327px; top:1513px'></div></a>
<a  href='build-amap.php?mp=1293&a_id=310&g=Expressionism&y=1887' title='Macke, August
Expressionism
German
1887-1914'><div class=area style='position:absolute; width:23px; height:20px; left:1350px; top:1513px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1393&a_id=316&g=Geometric abstraction&y=1888' title='Albers, Joseph
Geometric abstraction
German
1888-1976'><div class=area style='position:absolute; width:23px; height:20px; left:1427px; top:1643px'></div></a>
<a  href='build-amap.php?mp=1393&a_id=316&g=Geometric abstraction&y=1888' title='Albers, Joseph
Geometric abstraction
German
1888-1976'><div class=area style='position:absolute; width:23px; height:20px; left:1450px; top:1643px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=292&a_id=336&g=Metaphysical art, Surrealism, Neoclassicism, Neo-Baroque&y=1888' title='Chirico, Giorgio De
Metaphysical art, Surrealism, Neoclassicism, Neo-Baroque
Italian
1888-1978'><div class=area style='position:absolute; width:24px; height:20px; left:326px; top:1614px'></div></a>
<a  href='build-amap.php?mp=292&a_id=336&g=Metaphysical art, Surrealism, Neoclassicism, Neo-Baroque&y=1888' title='Chirico, Giorgio De
Metaphysical art, Surrealism, Neoclassicism, Neo-Baroque
Italian
1888-1978'><div class=area style='position:absolute; width:23px; height:20px; left:350px; top:1614px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1173&a_id=321&g=Regionalism, Social Realism, Modernism, American realism, Synchromism&y=1889' title='Benton, Thomas Hart
Regionalism, Social Realism, Modernism, American realism, Synchromism
American
1889-1975'><div class=area style='position:absolute; width:52px; height:20px; left:1104px; top:1664px'></div></a>
<a  href='build-amap.php?mp=1173&a_id=321&g=Regionalism, Social Realism, Modernism, American realism, Synchromism&y=1889' title='Benton, Thomas Hart
Regionalism, Social Realism, Modernism, American realism, Synchromism
American
1889-1975'><div class=area style='position:absolute; width:51px; height:20px; left:1156px; top:1664px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1303&a_id=52&g=Expressionism&y=1890' title='Egon Schiele
Expressionism
Austrian
1890-1918'><div class=area style='position:absolute; width:28px; height:20px; left:1337px; top:1538px'></div></a>
<a  href='build-amap.php?mp=1303&a_id=52&g=Expressionism&y=1890' title='Egon Schiele
Expressionism
Austrian
1890-1918'><div class=area style='position:absolute; width:28px; height:20px; left:1365px; top:1538px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=202&a_id=384&g=Synchromism&y=1890' title='Macdonald, Stanton
Synchromism
American
1890-1972'><div class=area style='position:absolute; width:35px; height:20px; left:166px; top:1639px'></div></a>
<a  href='build-amap.php?mp=202&a_id=384&g=Synchromism&y=1890' title='Macdonald, Stanton
Synchromism
American
1890-1972'><div class=area style='position:absolute; width:35px; height:20px; left:201px; top:1639px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1183&a_id=395&g=Metaphysical art, Futurism, Realism, Still life&y=1890' title='Morandi, Giorgio
Metaphysical art, Futurism, Realism, Still life
Italian
1890-1964'><div class=area style='position:absolute; width:44px; height:20px; left:1130px; top:1694px'></div></a>
<a  href='build-amap.php?mp=1183&a_id=395&g=Metaphysical art, Futurism, Realism, Still life&y=1890' title='Morandi, Giorgio
Metaphysical art, Futurism, Realism, Still life
Italian
1890-1964'><div class=area style='position:absolute; width:43px; height:20px; left:1174px; top:1694px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=543&a_id=421&g=Abstract Expressionism, Northwest School&y=1890' title='Tobey, Mark
Abstract Expressionism, Northwest School
American
1890-1976'><div class=area style='position:absolute; width:21px; height:20px; left:577px; top:1698px'></div></a>
<a  href='build-amap.php?mp=543&a_id=421&g=Abstract Expressionism, Northwest School&y=1890' title='Tobey, Mark
Abstract Expressionism, Northwest School
American
1890-1976'><div class=area style='position:absolute; width:21px; height:20px; left:598px; top:1698px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1203&a_id=315&g=Realism, Regionalism&y=1891' title='Wood, Grant
Realism, Regionalism
American
1891-1942'><div class=area style='position:absolute; width:53px; height:20px; left:1131px; top:1593px'></div></a>
<a  href='build-amap.php?mp=1203&a_id=315&g=Realism, Regionalism&y=1891' title='Wood, Grant
Realism, Regionalism
American
1891-1942'><div class=area style='position:absolute; width:53px; height:20px; left:1184px; top:1593px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=242&a_id=352&g=Dada, Surrealism&y=1891' title='Ernst, Max
Dada, Surrealism
German 
1891-1976'><div class=area style='position:absolute; width:19px; height:20px; left:276px; top:1618px'></div></a>
<a  href='build-amap.php?mp=242&a_id=352&g=Dada, Surrealism&y=1891' title='Ernst, Max
Dada, Surrealism
German 
1891-1976'><div class=area style='position:absolute; width:19px; height:20px; left:295px; top:1618px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1313&a_id=343&g=Modernism&y=1892' title='Davis, Stuart
Modernism
American
1892-1964'><div class=area style='position:absolute; width:26px; height:20px; left:1296px; top:1669px'></div></a>
<a  href='build-amap.php?mp=1313&a_id=343&g=Modernism&y=1892' title='Davis, Stuart
Modernism
American
1892-1964'><div class=area style='position:absolute; width:25px; height:20px; left:1322px; top:1669px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=252&a_id=82&g=Surrealism&y=1893' title='Joan Miro
Surrealism
Spanish
1893-1983'><div class=area style='position:absolute; width:18px; height:20px; left:286px; top:1643px'></div></a>
<a  href='build-amap.php?mp=252&a_id=82&g=Surrealism&y=1893' title='Joan Miro
Surrealism
Spanish
1893-1983'><div class=area style='position:absolute; width:17px; height:20px; left:304px; top:1643px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1323&a_id=330&g=Expressionism&y=1893' title='Chaim Soutine
Expressionism
Russian
1893-1943'><div class=area style='position:absolute; width:26px; height:20px; left:1306px; top:1614px'></div></a>
<a  href='build-amap.php?mp=1323&a_id=330&g=Expressionism&y=1893' title='Chaim Soutine
Expressionism
Russian
1893-1943'><div class=area style='position:absolute; width:25px; height:20px; left:1332px; top:1614px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=172&a_id=361&g=Dada, New Objectivity&y=1893' title='Grosz, George
Dada, New Objectivity
German
1893-1959'><div class=area style='position:absolute; width:21px; height:20px; left:164px; top:1702px'></div></a>
<a  href='build-amap.php?mp=172&a_id=361&g=Dada, New Objectivity&y=1893' title='Grosz, George
Dada, New Objectivity
German
1893-1959'><div class=area style='position:absolute; width:21px; height:20px; left:185px; top:1702px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1023&a_id=415&g=Muralism, Social Realism&y=1896' title='Siqueiros, David Alfaro
Muralism, Social Realism
Mexican
1896-1974'><div class=area style='position:absolute; width:31px; height:20px; left:1057px; top:1639px'></div></a>
<a  href='build-amap.php?mp=1023&a_id=415&g=Muralism, Social Realism&y=1896' title='Siqueiros, David Alfaro
Muralism, Social Realism
Mexican
1896-1974'><div class=area style='position:absolute; width:30px; height:20px; left:1088px; top:1639px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=262&a_id=14&g=Surrealism, Impressionism&y=1898' title='Rene Magritte
Surrealism, Impressionism
Belgian
1898-1967'><div class=area style='position:absolute; width:30px; height:20px; left:296px; top:1673px'></div></a>
<a  href='build-amap.php?mp=262&a_id=14&g=Surrealism, Impressionism&y=1898' title='Rene Magritte
Surrealism, Impressionism
Belgian
1898-1967'><div class=area style='position:absolute; width:30px; height:20px; left:326px; top:1673px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1413&a_id=309&g=Mathematics&y=1898' title='M.C.Escher
Mathematics
Dutch
1898-1972'><div class=area style='position:absolute; width:39px; height:20px; left:1447px; top:1711px'></div></a>
<a  href='build-amap.php?mp=1413&a_id=309&g=Mathematics&y=1898' title='M.C.Escher
Mathematics
Dutch
1898-1972'><div class=area style='position:absolute; width:39px; height:20px; left:1486px; top:1711px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1403&a_id=355&g=Hard-edge, Modernism&y=1898' title='Feitelson, Lorser
Hard-edge, Modernism
American
1898-1978'><div class=area style='position:absolute; width:30px; height:20px; left:1437px; top:1673px'></div></a>
<a  href='build-amap.php?mp=1403&a_id=355&g=Hard-edge, Modernism&y=1898' title='Feitelson, Lorser
Hard-edge, Modernism
American
1898-1978'><div class=area style='position:absolute; width:30px; height:20px; left:1467px; top:1673px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1033&a_id=105&g=Social Realism&y=1899' title='Aleksandr Deyneka
Social Realism
Russian
1899-1969'><div class=area style='position:absolute; width:29px; height:20px; left:1067px; top:1593px'></div></a>
<a  href='build-amap.php?mp=1033&a_id=105&g=Social Realism&y=1899' title='Aleksandr Deyneka
Social Realism
Russian
1899-1969'><div class=area style='position:absolute; width:29px; height:20px; left:1096px; top:1593px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=272&a_id=418&g=Surrealism&y=1900' title='Tanguy, Yves
Surrealism
French
1900-1955'><div class=area style='position:absolute; width:25px; height:20px; left:306px; top:1702px'></div></a>
<a  href='build-amap.php?mp=272&a_id=418&g=Surrealism&y=1900' title='Tanguy, Yves
Surrealism
French
1900-1955'><div class=area style='position:absolute; width:24px; height:20px; left:331px; top:1702px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=404&a_id=412&g=Abstract Expressionism, Color Field&y=1903' title='Rothko, Mark
Abstract Expressionism, Color Field
American
1903-1970'><div class=area style='position:absolute; width:24px; height:20px; left:438px; top:1664px'></div></a>
<a  href='build-amap.php?mp=404&a_id=412&g=Abstract Expressionism, Color Field&y=1903' title='Rothko, Mark
Abstract Expressionism, Color Field
American
1903-1970'><div class=area style='position:absolute; width:24px; height:20px; left:462px; top:1664px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=282&a_id=15&g=Surrealism&y=1904' title='Salvador Dali
Surrealism
Spanish
1904-1989'><div class=area style='position:absolute; width:16px; height:20px; left:316px; top:1732px'></div></a>
<a  href='build-amap.php?mp=282&a_id=15&g=Surrealism&y=1904' title='Salvador Dali
Surrealism
Spanish
1904-1989'><div class=area style='position:absolute; width:16px; height:20px; left:332px; top:1732px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=553&a_id=306&g=Abstract expressionism, Surrealism&y=1904' title='Kooning, Willem De
Abstract expressionism, Surrealism
Dutch, American
1904-1997'><div class=area style='position:absolute; width:30px; height:20px; left:587px; top:1757px'></div></a>
<a  href='build-amap.php?mp=553&a_id=306&g=Abstract expressionism, Surrealism&y=1904' title='Kooning, Willem De
Abstract expressionism, Surrealism
Dutch, American
1904-1997'><div class=area style='position:absolute; width:30px; height:20px; left:617px; top:1757px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1273&a_id=358&g=Abstract Expressionism&y=1904' title='Gorky, Arshile
Abstract Expressionism
American
1904-1948'><div class=area style='position:absolute; width:21px; height:20px; left:1265px; top:1589px'></div></a>
<a  href='build-amap.php?mp=1273&a_id=358&g=Abstract Expressionism&y=1904' title='Gorky, Arshile
Abstract Expressionism
American
1904-1948'><div class=area style='position:absolute; width:21px; height:20px; left:1286px; top:1589px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=414&a_id=398&g=Abstract Expressionism, Color Field&y=1905' title='Newman, Barnett
Abstract Expressionism, Color Field
American
1905-1970'><div class=area style='position:absolute; width:29px; height:20px; left:448px; top:1690px'></div></a>
<a  href='build-amap.php?mp=414&a_id=398&g=Abstract Expressionism, Color Field&y=1905' title='Newman, Barnett
Abstract Expressionism, Color Field
American
1905-1970'><div class=area style='position:absolute; width:28px; height:20px; left:477px; top:1690px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=302&a_id=33&g=Primitivism, Surrealism&y=1907' title='Frida Kahlo
Primitivism, Surrealism
Mexican
1907-1954'><div class=area style='position:absolute; width:22px; height:20px; left:336px; top:1643px'></div></a>
<a  href='build-amap.php?mp=302&a_id=33&g=Primitivism, Surrealism&y=1907' title='Frida Kahlo
Primitivism, Surrealism
Mexican
1907-1954'><div class=area style='position:absolute; width:22px; height:20px; left:358px; top:1643px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1333&a_id=404&g=New York Figurative Expressionism, Realism&y=1907' title='Porter, Fairfield
New York Figurative Expressionism, Realism
American
1907-1975'><div class=area style='position:absolute; width:51px; height:20px; left:1266px; top:1698px'></div></a>
<a  href='build-amap.php?mp=1333&a_id=404&g=New York Figurative Expressionism, Realism&y=1907' title='Porter, Fairfield
New York Figurative Expressionism, Realism
American
1907-1975'><div class=area style='position:absolute; width:50px; height:20px; left:1317px; top:1698px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=322&a_id=319&g=Neoclassicism&y=1908' title='Balthus
Neoclassicism
Polish
1908-2001'><div class=area style='position:absolute; width:26px; height:20px; left:305px; top:1803px'></div></a>
<a  href='build-amap.php?mp=322&a_id=319&g=Neoclassicism&y=1908' title='Balthus
Neoclassicism
Polish
1908-2001'><div class=area style='position:absolute; width:25px; height:20px; left:331px; top:1803px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1293&a_id=297&g=Expressionism&y=1909' title='Bacon, Francis
Expressionism
British
1909-1992'><div class=area style='position:absolute; width:24px; height:20px; left:1327px; top:1761px'></div></a>
<a  href='build-amap.php?mp=1293&a_id=297&g=Expressionism&y=1909' title='Bacon, Francis
Expressionism
British
1909-1992'><div class=area style='position:absolute; width:23px; height:20px; left:1351px; top:1761px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=563&a_id=118&g=Abstract Expressionism&y=1912' title='Jackson Pollock
Abstract Expressionism
American
1912-1956'><div class=area style='position:absolute; width:28px; height:20px; left:597px; top:1723px'></div></a>
<a  href='build-amap.php?mp=563&a_id=118&g=Abstract Expressionism&y=1912' title='Jackson Pollock
Abstract Expressionism
American
1912-1956'><div class=area style='position:absolute; width:28px; height:20px; left:625px; top:1723px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=424&a_id=383&g=Color Field, Abstract Expressionism, Post-painterly abstraction, Washington Color School&y=1912' title='Louis, Morris
Color Field, Abstract Expressionism, Post-painterly abstraction, Washington Color School
American
1912-1962'><div class=area style='position:absolute; width:19px; height:20px; left:458px; top:1723px'></div></a>
<a  href='build-amap.php?mp=424&a_id=383&g=Color Field, Abstract Expressionism, Post-painterly abstraction, Washington Color School&y=1912' title='Louis, Morris
Color Field, Abstract Expressionism, Post-painterly abstraction, Washington Color School
American
1912-1962'><div class=area style='position:absolute; width:19px; height:20px; left:477px; top:1723px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1607&a_id=388&g=Abstract expressionism, Minimalism&y=1912' title='Martin, Agnes
Abstract expressionism, Minimalism
American
1912-2004'><div class=area style='position:absolute; width:29px; height:20px; left:1641px; top:1807px'></div></a>
<a  href='build-amap.php?mp=1607&a_id=388&g=Abstract expressionism, Minimalism&y=1912' title='Martin, Agnes
Abstract expressionism, Minimalism
American
1912-2004'><div class=area style='position:absolute; width:29px; height:20px; left:1670px; top:1807px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1253&a_id=362&g=Neo-expressionism, Social realism, Figurative, New York school&y=1913' title='Guston, Philip
Neo-expressionism, Social realism, Figurative, New York school
American
1913-1980'><div class=area style='position:absolute; width:47px; height:20px; left:1287px; top:1727px'></div></a>
<a  href='build-amap.php?mp=1253&a_id=362&g=Neo-expressionism, Social realism, Figurative, New York school&y=1913' title='Guston, Philip
Neo-expressionism, Social realism, Figurative, New York school
American
1913-1980'><div class=area style='position:absolute; width:46px; height:20px; left:1334px; top:1727px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1013&a_id=18&g=Realism&y=1917' title='Andrew Wyeth
Realism
American
1917-2009'><div class=area style='position:absolute; width:23px; height:20px; left:1047px; top:1719px'></div></a>
<a  href='build-amap.php?mp=1013&a_id=18&g=Realism&y=1917' title='Andrew Wyeth
Realism
American
1917-2009'><div class=area style='position:absolute; width:23px; height:20px; left:1070px; top:1719px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=434&a_id=341&g=Washington Color School, Color Field, Post-painterly Abstraction&y=1920' title='Davis, Gene
Washington Color School, Color Field, Post-painterly Abstraction
American
1920-1985'><div class=area style='position:absolute; width:26px; height:20px; left:416px; top:1753px'></div></a>
<a  href='build-amap.php?mp=434&a_id=341&g=Washington Color School, Color Field, Post-painterly Abstraction&y=1920' title='Davis, Gene
Washington Color School, Color Field, Post-painterly Abstraction
American
1920-1985'><div class=area style='position:absolute; width:26px; height:20px; left:442px; top:1753px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1110&a_id=78&g=Portrait, Expressionism, Realism&y=1922' title='Lucian Freud
Portrait, Expressionism, Realism
British
1922-2011'><div class=area style='position:absolute; width:47px; height:20px; left:1144px; top:1757px'></div></a>
<a  href='build-amap.php?mp=1110&a_id=78&g=Portrait, Expressionism, Realism&y=1922' title='Lucian Freud
Portrait, Expressionism, Realism
British
1922-2011'><div class=area style='position:absolute; width:47px; height:20px; left:1191px; top:1757px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=444&a_id=407&g=Abstract expressionism, Color Field, Lyrical abstraction, Bay Area Figurative&y=1922' title='Richard Diebenkorn
Abstract expressionism, Color Field, Lyrical abstraction, Bay Area Figurative
American
1922-1993'><div class=area style='position:absolute; width:36px; height:20px; left:406px; top:1786px'></div></a>
<a  href='build-amap.php?mp=444&a_id=407&g=Abstract expressionism, Color Field, Lyrical abstraction, Bay Area Figurative&y=1922' title='Richard Diebenkorn
Abstract expressionism, Color Field, Lyrical abstraction, Bay Area Figurative
American
1922-1993'><div class=area style='position:absolute; width:36px; height:20px; left:442px; top:1786px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=820&a_id=308&g=Pop art&y=1923' title='Lichtenstein, Roy
Pop art
American
1923-1997'><div class=area style='position:absolute; width:42px; height:20px; left:854px; top:1782px'></div></a>
<a  href='build-amap.php?mp=820&a_id=308&g=Pop art&y=1923' title='Lichtenstein, Roy
Pop art
American
1923-1997'><div class=area style='position:absolute; width:42px; height:20px; left:896px; top:1782px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=454&a_id=399&g=	Color Field&y=1924' title='Noland, Kenneth
	Color Field
American
1924-2010'><div class=area style='position:absolute; width:24px; height:20px; left:441px; top:1820px'></div></a>
<a  href='build-amap.php?mp=454&a_id=399&g=	Color Field&y=1924' title='Noland, Kenneth
	Color Field
American
1924-2010'><div class=area style='position:absolute; width:23px; height:20px; left:465px; top:1820px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1423&a_id=376&g=	Abstract Expressionism&y=1925' title='Karl Benjamin
	Abstract Expressionism
American
1925-2012'><div class=area style='position:absolute; width:31px; height:20px; left:1457px; top:1820px'></div></a>
<a  href='build-amap.php?mp=1423&a_id=376&g=	Abstract Expressionism&y=1925' title='Karl Benjamin
	Abstract Expressionism
American
1925-2012'><div class=area style='position:absolute; width:30px; height:20px; left:1488px; top:1820px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=613&a_id=409&g=Neo-Dada, Abstract Expressionism&y=1925' title='Robert Rauschenberg
Neo-Dada, Abstract Expressionism
American
1925-2008'><div class=area style='position:absolute; width:45px; height:20px; left:557px; top:1795px'></div></a>
<a  href='build-amap.php?mp=613&a_id=409&g=Neo-Dada, Abstract Expressionism&y=1925' title='Robert Rauschenberg
Neo-Dada, Abstract Expressionism
American
1925-2008'><div class=area style='position:absolute; width:45px; height:20px; left:602px; top:1795px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1710&a_id=338&g=Comic&y=1926' title='Cook, Beryl
Comic
British
1926-2008'><div class=area style='position:absolute; width:19px; height:20px; left:1744px; top:1706px'></div></a>
<a  href='build-amap.php?mp=1710&a_id=338&g=Comic&y=1926' title='Cook, Beryl
Comic
British
1926-2008'><div class=area style='position:absolute; width:18px; height:20px; left:1763px; top:1706px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=830&a_id=83&g=Pop Art&y=1928' title='Andy Warhol
Pop Art
American
1928-1987'><div class=area style='position:absolute; width:27px; height:20px; left:864px; top:1811px'></div></a>
<a  href='build-amap.php?mp=830&a_id=83&g=Pop Art&y=1928' title='Andy Warhol
Pop Art
American
1928-1987'><div class=area style='position:absolute; width:27px; height:20px; left:891px; top:1811px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=464&a_id=356&g=Abstract Expressionism, Color Field, Lyrical Abstraction&y=1928' title='Frankenthaler, Helen
Abstract Expressionism, Color Field, Lyrical Abstraction
American
1928-2011'><div class=area style='position:absolute; width:44px; height:20px; left:411px; top:1853px'></div></a>
<a  href='build-amap.php?mp=464&a_id=356&g=Abstract Expressionism, Color Field, Lyrical Abstraction&y=1928' title='Frankenthaler, Helen
Abstract Expressionism, Color Field, Lyrical Abstraction
American
1928-2011'><div class=area style='position:absolute; width:43px; height:20px; left:455px; top:1853px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=840&a_id=304&g=Abstract expressionism, Neo-Dada, pop art&y=1930' title='Jasper Johns
Abstract expressionism, Neo-Dada, pop art
American
1930-'><div class=area style='position:absolute; width:23px; height:20px; left:874px; top:1837px'></div></a>
<a  href='build-amap.php?mp=840&a_id=304&g=Abstract expressionism, Neo-Dada, pop art&y=1930' title='Jasper Johns
Abstract expressionism, Neo-Dada, pop art
American
1930-'><div class=area style='position:absolute; width:23px; height:20px; left:897px; top:1837px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1517&a_id=408&g=Op art&y=1931' title='Riley, Bridget
Op art
British
1931-'><div class=area style='position:absolute; width:18px; height:20px; left:1551px; top:1841px'></div></a>
<a  href='build-amap.php?mp=1517&a_id=408&g=Op art&y=1931' title='Riley, Bridget
Op art
British
1931-'><div class=area style='position:absolute; width:18px; height:20px; left:1569px; top:1841px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1043&a_id=312&g=Capitalist realism&y=1932' title='Richter, Gerhard
Capitalist realism
German
1932-'><div class=area style='position:absolute; width:25px; height:20px; left:1077px; top:1757px'></div></a>
<a  href='build-amap.php?mp=1043&a_id=312&g=Capitalist realism&y=1932' title='Richter, Gerhard
Capitalist realism
German
1932-'><div class=area style='position:absolute; width:24px; height:20px; left:1102px; top:1757px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1053&a_id=353&g=Photorealism&y=1932' title='Estes, Richard
Photorealism
American
1932-'><div class=area style='position:absolute; width:65px; height:20px; left:1087px; top:1790px'></div></a>
<a  href='build-amap.php?mp=1053&a_id=353&g=Photorealism&y=1932' title='Estes, Richard
Photorealism
American
1932-'><div class=area style='position:absolute; width:64px; height:20px; left:1152px; top:1790px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=658&a_id=365&g=Lyrical abstraction&y=1934' title='Hoyland, John
Lyrical abstraction
British
1934-2011'><div class=area style='position:absolute; width:27px; height:20px; left:692px; top:1837px'></div></a>
<a  href='build-amap.php?mp=658&a_id=365&g=Lyrical abstraction&y=1934' title='Hoyland, John
Lyrical abstraction
British
1934-2011'><div class=area style='position:absolute; width:27px; height:20px; left:719px; top:1837px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1617&a_id=416&g=Minimalism, Post-painterly abstraction, Shaped canvas, Hard-edge, Color field&y=1936' title='Stella, Frank
Minimalism, Post-painterly abstraction, Shaped canvas, Hard-edge, Color field
American
1936-'><div class=area style='position:absolute; width:26px; height:20px; left:1651px; top:1837px'></div></a>
<a  href='build-amap.php?mp=1617&a_id=416&g=Minimalism, Post-painterly abstraction, Shaped canvas, Hard-edge, Color field&y=1936' title='Stella, Frank
Minimalism, Post-painterly abstraction, Shaped canvas, Hard-edge, Color field
American
1936-'><div class=area style='position:absolute; width:26px; height:20px; left:1677px; top:1837px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1433&a_id=342&g=Abstract Expressionism, Geometric abstraction, Abstract Illusionism, Lyrical Abstraction, Hard-edge, Shaped canvas, Color field, Digital art&y=1937' title='Davis, Ronald
Abstract Expressionism, Geometric abstraction, Abstract Illusionism, Lyrical Abstraction, Hard-edge, Shaped canvas, Color field, Digital art
American
1937-'><div class=area style='position:absolute; width:26px; height:20px; left:1467px; top:1853px'></div></a>
<a  href='build-amap.php?mp=1433&a_id=342&g=Abstract Expressionism, Geometric abstraction, Abstract Illusionism, Lyrical Abstraction, Hard-edge, Shaped canvas, Color field, Digital art&y=1937' title='Davis, Ronald
Abstract Expressionism, Geometric abstraction, Abstract Illusionism, Lyrical Abstraction, Hard-edge, Shaped canvas, Color field, Digital art
American
1937-'><div class=area style='position:absolute; width:25px; height:20px; left:1493px; top:1853px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1627&a_id=385&g=Minimalism&y=1937' title='Mangold, Robert
Minimalism
American
1937-'><div class=area style='position:absolute; width:28px; height:20px; left:1661px; top:1866px'></div></a>
<a  href='build-amap.php?mp=1627&a_id=385&g=Minimalism&y=1937' title='Mangold, Robert
Minimalism
American
1937-'><div class=area style='position:absolute; width:28px; height:20px; left:1689px; top:1866px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1637&a_id=387&g=Minimalism&y=1938' title='Marden, Brice
Minimalism
American
1938'><div class=area style='position:absolute; width:25px; height:20px; left:1671px; top:1895px'></div></a>
<a  href='build-amap.php?mp=1637&a_id=387&g=Minimalism&y=1938' title='Marden, Brice
Minimalism
American
1938'><div class=area style='position:absolute; width:25px; height:20px; left:1696px; top:1895px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=668&a_id=414&g=Lyrical abstraction&y=1941' title='Seery, John
Lyrical abstraction
American
1941-'><div class=area style='position:absolute; width:21px; height:20px; left:702px; top:1862px'></div></a>
<a  href='build-amap.php?mp=668&a_id=414&g=Lyrical abstraction&y=1941' title='Seery, John
Lyrical abstraction
American
1941-'><div class=area style='position:absolute; width:20px; height:20px; left:723px; top:1862px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1243&a_id=402&g=Expressionism&y=1945' title='Peter Angermann
Expressionism
German
1945-'><div class=area style='position:absolute; width:38px; height:20px; left:1277px; top:1904px'></div></a>
<a  href='build-amap.php?mp=1243&a_id=402&g=Expressionism&y=1945' title='Peter Angermann
Expressionism
German
1945-'><div class=area style='position:absolute; width:37px; height:20px; left:1315px; top:1904px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1223&a_id=377&g=Neo-expressionism&y=1946' title='Kevin Larmee
Neo-expressionism
American
1946'><div class=area style='position:absolute; width:25px; height:20px; left:1257px; top:1870px'></div></a>
<a  href='build-amap.php?mp=1223&a_id=377&g=Neo-expressionism&y=1946' title='Kevin Larmee
Neo-expressionism
American
1946'><div class=area style='position:absolute; width:25px; height:20px; left:1282px; top:1870px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=583&a_id=380&g=Abstract Expressionism, Post-minimalism, Color Field, Lyrical Abstraction&y=1947' title='Landfield, Ronnie
Abstract Expressionism, Post-minimalism, Color Field, Lyrical Abstraction
American
1947-'><div class=area style='position:absolute; width:29px; height:20px; left:559px; top:1824px'></div></a>
<a  href='build-amap.php?mp=583&a_id=380&g=Abstract Expressionism, Post-minimalism, Color Field, Lyrical Abstraction&y=1947' title='Landfield, Ronnie
Abstract Expressionism, Post-minimalism, Color Field, Lyrical Abstraction
American
1947-'><div class=area style='position:absolute; width:29px; height:20px; left:588px; top:1824px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1120&a_id=329&g=Post-dogmatism, Massurrealism, Fluxus&y=1956' title='Cecil Touchon
Post-dogmatism, Massurrealism, Fluxus
American
1956-'><div class=area style='position:absolute; width:28px; height:20px; left:1154px; top:1891px'></div></a>
<a  href='build-amap.php?mp=1120&a_id=329&g=Post-dogmatism, Massurrealism, Fluxus&y=1956' title='Cecil Touchon
Post-dogmatism, Massurrealism, Fluxus
American
1956-'><div class=area style='position:absolute; width:28px; height:20px; left:1182px; top:1891px'></div></a>
<a  href='http://alch.strangled.net/artquiz/aquiz/artist.php?mp=1233&a_id=305&g=Neo-expressionism, Primitivism, Abstract art, Figurative&y=1960' title='Jean-Michel Basquiat
Neo-expressionism, Primitivism, Abstract art, Figurative
American
1960-1988'><div class=area style='position:absolute; width:58px; height:20px; left:1267px; top:1841px'></div></a>
<a  href='build-amap.php?mp=1233&a_id=305&g=Neo-expressionism, Primitivism, Abstract art, Figurative&y=1960' title='Jean-Michel Basquiat
Neo-expressionism, Primitivism, Abstract art, Figurative
American
1960-1988'><div class=area style='position:absolute; width:57px; height:20px; left:1325px; top:1841px'></div></a>

</div>
</div>
</table>
<p>Most styles have a thick colored line at their side, which shows the main interval when the style was active.
<p>Click on artist, style or period to know more and view paintings. Bold font shows most known artists.
<p>Most well known artists are marked bold.
<p>Image is searchable. Use Ctrl+F or 'Search in page'.
<p>Other interactive timelines: <a href=index4.php>timeline by country</a>, <a href=index3.php>linear timeline</a>.

    <script type='text/javascript'>//<![CDATA[
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
                var x = ( e.clientX - 42 + $(window).scrollLeft()),
                    y = ( ( ( e.clientY - top ) ) );
                
                $( tooltip ).text( 'x = ' + x).css({
                    left: e.clientX - 30,
                    top: e.clientY - 30
                }).show();
            }).
            mouseleave(function () {
                $( tooltip ).hide();
            }); 
    });
    });</script>
  
