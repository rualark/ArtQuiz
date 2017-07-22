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
<a id='tRomanticism' name='tRomanticism' style='position: absolute; top: 234px; left: 1900px'><font color=white size=3>Romanticism</font></a>
<a id='tEnlightenment' name='tEnlightenment' style='position: absolute; top: 117px; left: 1900px'><font color=white size=3>Enlightenment</font></a>
<a id='tMetaphysical poets' name='tMetaphysical poets' style='position: absolute; top: 95px; left: 1900px'><font color=white size=3>Metaphysical poets</font></a>
<a id='tBeat' name='tBeat' style='position: absolute; top: 1113px; left: 1900px'><font color=white size=3>Beat</font></a>
<a id='tBlack Arts Movement' name='tBlack Arts Movement' style='position: absolute; top: 1236px; left: 1900px'><font color=white size=3>Black Arts Movement</font></a>
<a id='tConfessionalism' name='tConfessionalism' style='position: absolute; top: 1125px; left: 1900px'><font color=white size=3>Confessionalism</font></a>
<a id='tHarlem Renaissance' name='tHarlem Renaissance' style='position: absolute; top: 891px; left: 1900px'><font color=white size=3>Harlem Renaissance</font></a>
<a id='tPre-Raphaelite Brotherhood' name='tPre-Raphaelite Brotherhood' style='position: absolute; top: 571px; left: 1900px'><font color=white size=3>Pre-Raphaelite Brotherhood</font></a>
<a id='tImagism' name='tImagism' style='position: absolute; top: 860px; left: 1900px'><font color=white size=3>Imagism</font></a>
<a id='tLake Poets' name='tLake Poets' style='position: absolute; top: 281px; left: 1900px'><font color=white size=3>Lake Poets</font></a>
<a id='tModernism' name='tModernism' style='position: absolute; top: 737px; left: 1900px'><font color=white size=3>Modernism</font></a>
<a id='tFormalism' name='tFormalism' style='position: absolute; top: 860px; left: 1900px'><font color=white size=3>Formalism</font></a>
<a id='tSymbolism' name='tSymbolism' style='position: absolute; top: 669px; left: 1900px'><font color=white size=3>Symbolism</font></a>
<a id='tRealism' name='tRealism' style='position: absolute; top: 235px; left: 1900px'><font color=white size=3>Realism</font></a>
<a id='tTranscendentalism' name='tTranscendentalism' style='position: absolute; top: 484px; left: 1900px'><font color=white size=3>Transcendentalism</font></a>
<a id='tVictorian' name='tVictorian' style='position: absolute; top: 447px; left: 1900px'><font color=white size=3>Victorian</font></a>
<a id='tDirty realism' name='tDirty realism' style='position: absolute; top: 1211px; left: 1900px'><font color=white size=3>Dirty realism</font></a>
<a id='tFireside poets' name='tFireside poets' style='position: absolute; top: 460px; left: 1900px'><font color=white size=3>Fireside poets</font></a>
<a id='tDidactism' name='tDidactism' style='position: absolute; top: 466px; left: 1900px'><font color=white size=3>Didactism</font></a>
<a id='tSurrealism' name='tSurrealism' style='position: absolute; top: 848px; left: 1900px'><font color=white size=3>Surrealism</font></a>
<a id='tChildren' name='tChildren' style='position: absolute; top: 281px; left: 1900px'><font color=white size=3>Children</font></a>
<a id='tNonsense' name='tNonsense' style='position: absolute; top: 540px; left: 1900px'><font color=white size=3>Nonsense</font></a>
<a id='tWar' name='tWar' style='position: absolute; top: 780px; left: 1900px'><font color=white size=3>War</font></a>
<a id='tOptimism' name='tOptimism' style='position: absolute; top: 577px; left: 1900px'><font color=white size=3>Optimism</font></a>
<a id='tChristian' name='tChristian' style='position: absolute; top: 589px; left: 1900px'><font color=white size=3>Christian</font></a>
<a id='tRenaissance' name='tRenaissance' style='position: absolute; top: 79px; left: 1900px'><font color=white size=3>Renaissance</font></a>
<a id='tExpressionism' name='tExpressionism' style='position: absolute; top: 836px; left: 1900px'><font color=white size=3>Expressionism</font></a>
<a id='tNeoromanticism' name='tNeoromanticism' style='position: absolute; top: 897px; left: 1900px'><font color=white size=3>Neoromanticism</font></a>
<a id='tPhilosophy' name='tPhilosophy' style='position: absolute; top: 217px; left: 1900px'><font color=white size=3>Philosophy</font></a>
<a id='tDecadents' name='tDecadents' style='position: absolute; top: 491px; left: 1900px'><font color=white size=3>Decadents</font></a>
<a id='tMedieval' name='tMedieval' style='position: absolute; top: -5px; left: 1900px'><font color=white size=3>Medieval</font></a>
<a id='tAncient Greece' name='tAncient Greece' style='position: absolute; top: -5px; left: 1900px'><font color=white size=3>Ancient Greece</font></a>
<a id='tAncient Rome' name='tAncient Rome' style='position: absolute; top: -5px; left: 1900px'><font color=white size=3>Ancient Rome</font></a>
<a id='tWorld poetry' name='tWorld poetry' style='position: absolute; top: -5px; left: 1900px'><font color=white size=3>World poetry</font></a>
<a id='tBush' name='tBush' style='position: absolute; top: 571px; left: 1900px'><font color=white size=3>Bush</font></a>
<a id='tFeminism' name='tFeminism' style='position: absolute; top: 700px; left: 1900px'><font color=white size=3>Feminism</font></a>
<a id='tPoets' name='tPoets' style='position: absolute; top: 768px; left: 1900px'><font color=white size=3>Poets</font></a>
<a id='tPlaywright' name='tPlaywright' style='position: absolute; top: 922px; left: 1900px'><font color=white size=3>Playwright</font></a>
<a id='tNature' name='tNature' style='position: absolute; top: 731px; left: 1900px'><font color=white size=3>Nature</font></a>
<a id='a364' name='#a364' style='position: absolute; top: 14px; left: 1900px'><font color=white size=3>Homer</font></a>
<a id='a58' name='#a58' style='position: absolute; top: 19px; left: 1900px'><font color=white size=3>Sappho</font></a>
<a id='a173' name='#a173' style='position: absolute; top: 29px; left: 1900px'><font color=white size=3>Confucius</font></a>
<a id='a274' name='#a274' style='position: absolute; top: 31px; left: 1900px'><font color=white size=3>Aeschylus</font></a>
<a id='a369' name='#a369' style='position: absolute; top: 31px; left: 1900px'><font color=white size=3>Virgil</font></a>
<a id='a320' name='#a320' style='position: absolute; top: 31px; left: 1900px'><font color=white size=3>Horace</font></a>
<a id='a282' name='#a282' style='position: absolute; top: 31px; left: 1900px'><font color=white size=3>Ovid</font></a>
<a id='a223' name='#a223' style='position: absolute; top: 31px; left: 1900px'><font color=white size=3>Valmiki</font></a>
<a id='a122' name='#a122' style='position: absolute; top: 31px; left: 1900px'><font color=white size=3>Kalidasa</font></a>
<a id='a87' name='#a87' style='position: absolute; top: 31px; left: 1900px'><font color=white size=3>Bai</font></a>
<a id='a140' name='#a140' style='position: absolute; top: 31px; left: 1900px'><font color=white size=3>Fu</font></a>
<a id='a163' name='#a163' style='position: absolute; top: 31px; left: 1900px'><font color=white size=3>Khayyam</font></a>
<a id='a52' name='#a52' style='position: absolute; top: 37px; left: 1900px'><font color=white size=3>Rumi</font></a>
<a id='a294' name='#a294' style='position: absolute; top: 43px; left: 1900px'><font color=white size=3>Khusro</font></a>
<a id='a142' name='#a142' style='position: absolute; top: 44px; left: 1900px'><font color=white size=3>Alighieri</font></a>
<a id='a113' name='#a113' style='position: absolute; top: 54px; left: 1900px'><font color=white size=3>Chaucer</font></a>
<a id='a100' name='#a100' style='position: absolute; top: 72px; left: 1900px'><font color=white size=3>Mehta</font></a>
<a id='a213' name='#a213' style='position: absolute; top: 72px; left: 1900px'><font color=white size=3>Villon</font></a>
<a id='a23' name='#a23' style='position: absolute; top: 81px; left: 1900px'><font color=white size=3>Kabir</font></a>
<a id='a141' name='#a141' style='position: absolute; top: 100px; left: 1900px'><font color=white size=3>Surdas</font></a>
<a id='a72' name='#a72' style='position: absolute; top: 96px; left: 1900px'><font color=white size=3>Mirabai</font></a>
<a id='a347' name='#a347' style='position: absolute; top: 100px; left: 1900px'><font color=white size=3>Howard</font></a>
<a id='a201' name='#a201' style='position: absolute; top: 116px; left: 1900px'><font color=white size=3>Elizabeth I</font></a>
<a id='a174' name='#a174' style='position: absolute; top: 124px; left: 1900px'><font color=white size=3>Tulsidas</font></a>
<a id='a90' name='#a90' style='position: absolute; top: 119px; left: 1900px'><font color=white size=3>Spenser</font></a>
<a id='a189' name='#a189' style='position: absolute; top: 123px; left: 1900px'><font color=white size=3>Raleigh</font></a>
<a id='a177' name='#a177' style='position: absolute; top: 116px; left: 1900px'><font color=white size=3>Sidney</font></a>
<a id='a186' name='#a186' style='position: absolute; top: 125px; left: 1900px'><font color=white size=3>Daniel</font></a>
<a id='a240' name='#a240' style='position: absolute; top: 128px; left: 1900px'><font color=white size=3>Drayton</font></a>
<a id='a3' name='#a3' style='position: absolute; top: 125px; left: 1900px'><font color=white size=3>Shakespeare</font></a>
<a id='a169' name='#a169' style='position: absolute; top: 120px; left: 1900px'><font color=white size=3>Marlowe</font></a>
<a id='a45' name='#a45' style='position: absolute; top: 130px; left: 1900px'><font color=white size=3>Donne</font></a>
<a id='a111' name='#a111' style='position: absolute; top: 131px; left: 1900px'><font color=white size=3>Jonson</font></a>
<a id='a86' name='#a86' style='position: absolute; top: 143px; left: 1900px'><font color=white size=3>Herrick</font></a>
<a id='a348' name='#a348' style='position: absolute; top: 142px; left: 1900px'><font color=white size=3>King</font></a>
<a id='a92' name='#a92' style='position: absolute; top: 134px; left: 1900px'><font color=white size=3>G Herbert</font></a>
<a id='a345' name='#a345' style='position: absolute; top: 137px; left: 1900px'><font color=white size=3>Carew</font></a>
<a id='a63' name='#a63' style='position: absolute; top: 146px; left: 1900px'><font color=white size=3>Milton</font></a>
<a id='a153' name='#a153' style='position: absolute; top: 141px; left: 1900px'><font color=white size=3>Tukaram</font></a>
<a id='a305' name='#a305' style='position: absolute; top: 138px; left: 1900px'><font color=white size=3>Suckling</font></a>
<a id='a143' name='#a143' style='position: absolute; top: 149px; left: 1900px'><font color=white size=3>Bradstreet</font></a>
<a id='a278' name='#a278' style='position: absolute; top: 142px; left: 1900px'><font color=white size=3>Crashaw</font></a>
<a id='a199' name='#a199' style='position: absolute; top: 145px; left: 1900px'><font color=white size=3>Lovelace</font></a>
<a id='a110' name='#a110' style='position: absolute; top: 150px; left: 1900px'><font color=white size=3>Marvell</font></a>
<a id='a211' name='#a211' style='position: absolute; top: 153px; left: 1900px'><font color=white size=3>Vaughan</font></a>
<a id='a284' name='#a284' style='position: absolute; top: 157px; left: 1900px'><font color=white size=3>Dryden</font></a>
<a id='a271' name='#a271' style='position: absolute; top: 152px; left: 1900px'><font color=white size=3>Traherne</font></a>
<a id='a310' name='#a310' style='position: absolute; top: 158px; left: 1900px'><font color=white size=3>Behn</font></a>
<a id='a68' name='#a68' style='position: absolute; top: 158px; left: 1900px'><font color=white size=3>Basho</font></a>
<a id='a182' name='#a182' style='position: absolute; top: 158px; left: 1900px'><font color=white size=3>Wilmot</font></a>
<a id='a337' name='#a337' style='position: absolute; top: 160px; left: 1900px'><font color=white size=3>Cruz</font></a>
<a id='a246' name='#a246' style='position: absolute; top: 167px; left: 1900px'><font color=white size=3>Finch</font></a>
<a id='a358' name='#a358' style='position: absolute; top: 168px; left: 1900px'><font color=white size=3>Prior</font></a>
<a id='a129' name='#a129' style='position: absolute; top: 178px; left: 1900px'><font color=white size=3>Swift</font></a>
<a id='a301' name='#a301' style='position: absolute; top: 169px; left: 1900px'><font color=white size=3>Addison</font></a>
<a id='a91' name='#a91' style='position: absolute; top: 183px; left: 1900px'><font color=white size=3>Watts</font></a>
<a id='a316' name='#a316' style='position: absolute; top: 192px; left: 1900px'><font color=white size=3>B Shah</font></a>
<a id='a50' name='#a50' style='position: absolute; top: 189px; left: 1900px'><font color=white size=3>A Pope</font></a>
<a id='a354' name='#a354' style='position: absolute; top: 198px; left: 1900px'><font color=white size=3>Thomson</font></a>
<a id='a315' name='#a315' style='position: absolute; top: 224px; left: 1900px'><font color=white size=3>Wesley</font></a>
<a id='a164' name='#a164' style='position: absolute; top: 224px; left: 1900px'><font color=white size=3>S Johnson</font></a>
<a id='a321' name='#a321' style='position: absolute; top: 234px; left: 1900px'><font color=white size=3>Hammon</font></a>
<a id='a225' name='#a225' style='position: absolute; top: 227px; left: 1900px'><font color=white size=3>Buson</font></a>
<a id='a256' name='#a256' style='position: absolute; top: 220px; left: 1900px'><font color=white size=3>Gray</font></a>
<a id='a192' name='#a192' style='position: absolute; top: 233px; left: 1900px'><font color=white size=3>W Shah</font></a>
<a id='a202' name='#a202' style='position: absolute; top: 245px; left: 1900px'><font color=white size=3>Newton</font></a>
<a id='a159' name='#a159' style='position: absolute; top: 249px; left: 1900px'><font color=white size=3>Cowper</font></a>
<a id='a117' name='#a117' style='position: absolute; top: 289px; left: 1900px'><font color=white size=3>Goethe</font></a>
<a id='a135' name='#a135' style='position: absolute; top: 258px; left: 1900px'><font color=white size=3>C Smith</font></a>
<a id='a67' name='#a67' style='position: absolute; top: 248px; left: 1900px'><font color=white size=3>Wheatley</font></a>
<a id='a18' name='#a18' style='position: absolute; top: 274px; left: 1900px'><font color=white size=3>Blake</font></a>
<a id='a287' name='#a287' style='position: absolute; top: 259px; left: 1900px'><font color=white size=3>M Robinson</font></a>
<a id='a47' name='#a47' style='position: absolute; top: 258px; left: 1900px'><font color=white size=3>Burns</font></a>
<a id='a220' name='#a220' style='position: absolute; top: 263px; left: 1900px'><font color=white size=3>Schiller</font></a>
<a id='a322' name='#a322' style='position: absolute; top: 255px; left: 1900px'><font color=white size=3>Chenier</font></a>
<a id='a304' name='#a304' style='position: absolute; top: 277px; left: 1900px'><font color=white size=3>Issa</font></a>
<a id='a359' name='#a359' style='position: absolute; top: 351px; left: 1900px'><font color=white size=3>Opie</font></a>
<a id='a6' name='#a6' style='position: absolute; top: 351px; left: 1900px'><font color=white size=3>Wordsworth</font></a>
<a id='a335' name='#a335' style='position: absolute; top: 332px; left: 1900px'><font color=white size=3>Holderlin</font></a>
<a id='a118' name='#a118' style='position: absolute; top: 295px; left: 1900px'><font color=white size=3>W Scott</font></a>
<a id='a89' name='#a89' style='position: absolute; top: 314px; left: 1900px'><font color=white size=3>S Coleridge</font></a>
<a id='a272' name='#a272' style='position: absolute; top: 280px; left: 1900px'><font color=white size=3>Huong</font></a>
<a id='a214' name='#a214' style='position: absolute; top: 326px; left: 1900px'><font color=white size=3>Southey</font></a>
<a id='a219' name='#a219' style='position: absolute; top: 314px; left: 1900px'><font color=white size=3>Lamb</font></a>
<a id='a336' name='#a336' style='position: absolute; top: 279px; left: 1900px'><font color=white size=3>Austen</font></a>
<a id='a126' name='#a126' style='position: absolute; top: 351px; left: 1900px'><font color=white size=3>Campbell</font></a>
<a id='a226' name='#a226' style='position: absolute; top: 382px; left: 1900px'><font color=white size=3>T Moore</font></a>
<a id='a303' name='#a303' style='position: absolute; top: 431px; left: 1900px'><font color=white size=3>A Taylor</font></a>
<a id='a276' name='#a276' style='position: absolute; top: 308px; left: 1900px'><font color=white size=3>J Taylor</font></a>
<a id='a160' name='#a160' style='position: absolute; top: 419px; left: 1900px'><font color=white size=3>Hunt</font></a>
<a id='a120' name='#a120' style='position: absolute; top: 320px; left: 1900px'><font color=white size=3>Byron</font></a>
<a id='a15' name='#a15' style='position: absolute; top: 326px; left: 1900px'><font color=white size=3>Shelley</font></a>
<a id='a77' name='#a77' style='position: absolute; top: 468px; left: 1900px'><font color=white size=3>Clare</font></a>
<a id='a260' name='#a260' style='position: absolute; top: 369px; left: 1900px'><font color=white size=3>Hemans</font></a>
<a id='a218' name='#a218' style='position: absolute; top: 505px; left: 1900px'><font color=white size=3>Bryant</font></a>
<a id='a13' name='#a13' style='position: absolute; top: 332px; left: 1900px'><font color=white size=3>Keats</font></a>
<a id='a81' name='#a81' style='position: absolute; top: 431px; left: 1900px'><font color=white size=3>Reynolds</font></a>
<a id='a183' name='#a183' style='position: absolute; top: 449px; left: 1900px'><font color=white size=3>Heine</font></a>
<a id='a285' name='#a285' style='position: absolute; top: 394px; left: 1900px'><font color=white size=3>Leopardi</font></a>
<a id='a83' name='#a83' style='position: absolute; top: 394px; left: 1900px'><font color=white size=3>Pushkin</font></a>
<a id='a200' name='#a200' style='position: absolute; top: 419px; left: 1900px'><font color=white size=3>Hood</font></a>
<a id='a343' name='#a343' style='position: absolute; top: 437px; left: 1900px'><font color=white size=3>Preseren</font></a>
<a id='a138' name='#a138' style='position: absolute; top: 554px; left: 1900px'><font color=white size=3>Hugo</font></a>
<a id='a253' name='#a253' style='position: absolute; top: 406px; left: 1900px'><font color=white size=3>Landon</font></a>
<a id='a79' name='#a79' style='position: absolute; top: 529px; left: 1900px'><font color=white size=3>Emerson</font></a>
<a id='a238' name='#a238' style='position: absolute; top: 517px; left: 1900px'><font color=white size=3>Tyutchev</font></a>
<a id='a313' name='#a313' style='position: absolute; top: 529px; left: 1900px'><font color=white size=3>Andersen</font></a>
<a id='a43' name='#a43' style='position: absolute; top: 492px; left: 1900px'><font color=white size=3>E Browning</font></a>
<a id='a16' name='#a16' style='position: absolute; top: 554px; left: 1900px'><font color=white size=3>Longfellow</font></a>
<a id='a84' name='#a84' style='position: absolute; top: 579px; left: 1900px'><font color=white size=3>Whittier</font></a>
<a id='a248' name='#a248' style='position: absolute; top: 492px; left: 1900px'><font color=white size=3>Norton</font></a>
<a id='a7' name='#a7' style='position: absolute; top: 462px; left: 1900px'><font color=white size=3>Poe</font></a>
<a id='a14' name='#a14' style='position: absolute; top: 597px; left: 1900px'><font color=white size=3>Tennyson</font></a>
<a id='a125' name='#a125' style='position: absolute; top: 603px; left: 1900px'><font color=white size=3>Holmes</font></a>
<a id='a208' name='#a208' style='position: absolute; top: 511px; left: 1900px'><font color=white size=3>Lincoln</font></a>
<a id='a367' name='#a367' style='position: absolute; top: 536px; left: 1900px'><font color=white size=3>Gautier</font></a>
<a id='a37' name='#a37' style='position: absolute; top: 517px; left: 1900px'><font color=white size=3>R Browning</font></a>
<a id='a82' name='#a82' style='position: absolute; top: 591px; left: 1900px'><font color=white size=3>Lear</font></a>
<a id='a103' name='#a103' style='position: absolute; top: 536px; left: 1900px'><font color=white size=3>Dickens</font></a>
<a id='a371' name='#a371' style='position: absolute; top: 437px; left: 1900px'><font color=white size=3>Lermontov</font></a>
<a id='a217' name='#a217' style='position: absolute; top: 511px; left: 1900px'><font color=white size=3>C Bronte</font></a>
<a id='a107' name='#a107' style='position: absolute; top: 529px; left: 1900px'><font color=white size=3>Thoreau</font></a>
<a id='a234' name='#a234' style='position: absolute; top: 566px; left: 1900px'><font color=white size=3>Tolstoy</font></a>
<a id='a80' name='#a80' style='position: absolute; top: 486px; left: 1900px'><font color=white size=3>E Bronte</font></a>
<a id='a188' name='#a188' style='position: absolute; top: 634px; left: 1900px'><font color=white size=3>Alexander</font></a>
<a id='a10' name='#a10' style='position: absolute; top: 628px; left: 1900px'><font color=white size=3>Whitman</font></a>
<a id='a116' name='#a116' style='position: absolute; top: 616px; left: 1900px'><font color=white size=3>English</font></a>
<a id='a245' name='#a245' style='position: absolute; top: 529px; left: 1900px'><font color=white size=3>Clough</font></a>
<a id='a265' name='#a265' style='position: absolute; top: 573px; left: 1900px'><font color=white size=3>Kingsley</font></a>
<a id='a277' name='#a277' style='position: absolute; top: 628px; left: 1900px'><font color=white size=3>J Lowell</font></a>
<a id='a314' name='#a314' style='position: absolute; top: 622px; left: 1900px'><font color=white size=3>Melville</font></a>
<a id='a365' name='#a365' style='position: absolute; top: 585px; left: 1900px'><font color=white size=3>G Eliot</font></a>
<a id='a133' name='#a133' style='position: absolute; top: 499px; left: 1900px'><font color=white size=3>A Bronte</font></a>
<a id='a374' name='#a374' style='position: absolute; top: 628px; left: 1900px'><font color=white size=3>Fet</font></a>
<a id='a60' name='#a60' style='position: absolute; top: 560px; left: 1900px'><font color=white size=3>Baudelaire</font></a>
<a id='a373' name='#a373' style='position: absolute; top: 609px; left: 1900px'><font color=white size=3>Nekrasov</font></a>
<a id='a102' name='#a102' style='position: absolute; top: 616px; left: 1900px'><font color=white size=3>Arnold</font></a>
<a id='a216' name='#a216' style='position: absolute; top: 646px; left: 1900px'><font color=white size=3>Patmore</font></a>
<a id='a332' name='#a332' style='position: absolute; top: 609px; left: 1900px'><font color=white size=3>Rands</font></a>
<a id='a228' name='#a228' style='position: absolute; top: 683px; left: 1900px'><font color=white size=3>MacDonald</font></a>
<a id='a293' name='#a293' style='position: absolute; top: 566px; left: 1900px'><font color=white size=3>Allingham</font></a>
<a id='a136' name='#a136' style='position: absolute; top: 677px; left: 1900px'><font color=white size=3>McGonagall</font></a>
<a id='a361' name='#a361' style='position: absolute; top: 542px; left: 1900px'><font color=white size=3>Mulock</font></a>
<a id='a296' name='#a296' style='position: absolute; top: 665px; left: 1900px'><font color=white size=3>McIntyre</font></a>
<a id='a101' name='#a101' style='position: absolute; top: 622px; left: 1900px'><font color=white size=3>D Rossetti</font></a>
<a id='a244' name='#a244' style='position: absolute; top: 714px; left: 1900px'><font color=white size=3>Meredith</font></a>
<a id='a5' name='#a5' style='position: absolute; top: 646px; left: 1900px'><font color=white size=3>Dickinson</font></a>
<a id='a51' name='#a51' style='position: absolute; top: 671px; left: 1900px'><font color=white size=3>C Rossetti</font></a>
<a id='a65' name='#a65' style='position: absolute; top: 683px; left: 1900px'><font color=white size=3>Carroll</font></a>
<a id='a203' name='#a203' style='position: absolute; top: 653px; left: 1900px'><font color=white size=3>Alcott</font></a>
<a id='a323' name='#a323' style='position: absolute; top: 616px; left: 1900px'><font color=white size=3>Gordon</font></a>
<a id='a157' name='#a157' style='position: absolute; top: 696px; left: 1900px'><font color=white size=3>Morris</font></a>
<a id='a121' name='#a121' style='position: absolute; top: 794px; left: 1900px'><font color=white size=3>Austin</font></a>
<a id='a210' name='#a210' style='position: absolute; top: 733px; left: 1900px'><font color=white size=3>Twain</font></a>
<a id='a255' name='#a255' style='position: absolute; top: 727px; left: 1900px'><font color=white size=3>Gilbert</font></a>
<a id='a109' name='#a109' style='position: absolute; top: 733px; left: 1900px'><font color=white size=3>Swinburne</font></a>
<a id='a346' name='#a346' style='position: absolute; top: 640px; left: 1900px'><font color=white size=3>Webster</font></a>
<a id='a242' name='#a242' style='position: absolute; top: 659px; left: 1900px'><font color=white size=3>Kendall</font></a>
<a id='a48' name='#a48' style='position: absolute; top: 800px; left: 1900px'><font color=white size=3>Hardy</font></a>
<a id='a252' name='#a252' style='position: absolute; top: 844px; left: 1900px'><font color=white size=3>Blunt</font></a>
<a id='a119' name='#a119' style='position: absolute; top: 763px; left: 1900px'><font color=white size=3>Bierce</font></a>
<a id='a190' name='#a190' style='position: absolute; top: 591px; left: 1900px'><font color=white size=3>Lanier</font></a>
<a id='a368' name='#a368' style='position: absolute; top: 714px; left: 1900px'><font color=white size=3>Mallarme</font></a>
<a id='a99' name='#a99' style='position: absolute; top: 696px; left: 1900px'><font color=white size=3>Hopkins</font></a>
<a id='a299' name='#a299' style='position: absolute; top: 763px; left: 1900px'><font color=white size=3>Lang</font></a>
<a id='a309' name='#a309' style='position: absolute; top: 763px; left: 1900px'><font color=white size=3>Cambridge</font></a>
<a id='a340' name='#a340' style='position: absolute; top: 727px; left: 1900px'><font color=white size=3>Nietzsche</font></a>
<a id='a366' name='#a366' style='position: absolute; top: 708px; left: 1900px'><font color=white size=3>Verlaine</font></a>
<a id='a46' name='#a46' style='position: absolute; top: 782px; left: 1900px'><font color=white size=3>Riley</font></a>
<a id='a53' name='#a53' style='position: absolute; top: 819px; left: 1900px'><font color=white size=3>Henley</font></a>
<a id='a297' name='#a297' style='position: absolute; top: 690px; left: 1900px'><font color=white size=3>Lazarus</font></a>
<a id='a32' name='#a32' style='position: absolute; top: 807px; left: 1900px'><font color=white size=3>Wilcox</font></a>
<a id='a40' name='#a40' style='position: absolute; top: 739px; left: 1900px'><font color=white size=3>Stevenson</font></a>
<a id='a104' name='#a104' style='position: absolute; top: 733px; left: 1900px'><font color=white size=3>Field</font></a>
<a id='a70' name='#a70' style='position: absolute; top: 856px; left: 1900px'><font color=white size=3>Dyke</font></a>
<a id='a55' name='#a55' style='position: absolute; top: 757px; left: 1900px'><font color=white size=3>Wilde</font></a>
<a id='a93' name='#a93' style='position: absolute; top: 733px; left: 1900px'><font color=white size=3>Rimbaud</font></a>
<a id='a207' name='#a207' style='position: absolute; top: 757px; left: 1900px'><font color=white size=3>Drummond</font></a>
<a id='a224' name='#a224' style='position: absolute; top: 819px; left: 1900px'><font color=white size=3>Verhaeren</font></a>
<a id='a239' name='#a239' style='position: absolute; top: 696px; left: 1900px'><font color=white size=3>Dutt</font></a>
<a id='a268' name='#a268' style='position: absolute; top: 874px; left: 1900px'><font color=white size=3>Reese</font></a>
<a id='a317' name='#a317' style='position: absolute; top: 844px; left: 1900px'><font color=white size=3>Nesbit</font></a>
<a id='a257' name='#a257' style='position: absolute; top: 868px; left: 1900px'><font color=white size=3>Tynan</font></a>
<a id='a279' name='#a279' style='position: absolute; top: 868px; left: 1900px'><font color=white size=3>Bates</font></a>
<a id='a308' name='#a308' style='position: absolute; top: 868px; left: 1900px'><font color=white size=3>Thompson</font></a>
<a id='a283' name='#a283' style='position: absolute; top: 887px; left: 1900px'><font color=white size=3>Monroe</font></a>
<a id='a8' name='#a8' style='position: absolute; top: 893px; left: 1900px'><font color=white size=3>Tagore</font></a>
<a id='a145' name='#a145' style='position: absolute; top: 776px; left: 1900px'><font color=white size=3>Lampman</font></a>
<a id='a212' name='#a212' style='position: absolute; top: 745px; left: 1900px'><font color=white size=3>Levy</font></a>
<a id='a251' name='#a251' style='position: absolute; top: 893px; left: 1900px'><font color=white size=3>M Coleridge</font></a>
<a id='a263' name='#a263' style='position: absolute; top: 942px; left: 1900px'><font color=white size=3>Newbolt</font></a>
<a id='a312' name='#a312' style='position: absolute; top: 930px; left: 1900px'><font color=white size=3>D Scott</font></a>
<a id='a178' name='#a178' style='position: absolute; top: 874px; left: 1900px'><font color=white size=3>Cavafy</font></a>
<a id='a356' name='#a356' style='position: absolute; top: 813px; left: 1900px'><font color=white size=3>Evans</font></a>
<a id='a85' name='#a85' style='position: absolute; top: 917px; left: 1900px'><font color=white size=3>Paterson</font></a>
<a id='a351' name='#a351' style='position: absolute; top: 862px; left: 1900px'><font color=white size=3>Adcock</font></a>
<a id='a19' name='#a19' style='position: absolute; top: 942px; left: 1900px'><font color=white size=3>Kipling</font></a>
<a id='a17' name='#a17' style='position: absolute; top: 905px; left: 1900px'><font color=white size=3>Yeats</font></a>
<a id='a247' name='#a247' style='position: absolute; top: 930px; left: 1900px'><font color=white size=3>Symons</font></a>
<a id='a290' name='#a290' style='position: absolute; top: 887px; left: 1900px'><font color=white size=3>Dyson</font></a>
<a id='a328' name='#a328' style='position: absolute; top: 782px; left: 1900px'><font color=white size=3>Silva</font></a>
<a id='a331' name='#a331' style='position: absolute; top: 924px; left: 1900px'><font color=white size=3>Potter</font></a>
<a id='a27' name='#a27' style='position: absolute; top: 868px; left: 1900px'><font color=white size=3>Lawson</font></a>
<a id='a215' name='#a215' style='position: absolute; top: 794px; left: 1900px'><font color=white size=3>Dowson</font></a>
<a id='a325' name='#a325' style='position: absolute; top: 850px; left: 1900px'><font color=white size=3>Dario</font></a>
<a id='a184' name='#a184' style='position: absolute; top: 911px; left: 1900px'><font color=white size=3>J Pope</font></a>
<a id='a106' name='#a106' style='position: absolute; top: 967px; left: 1900px'><font color=white size=3>Masters</font></a>
<a id='a128' name='#a128' style='position: absolute; top: 899px; left: 1900px'><font color=white size=3>E Robinson</font></a>
<a id='a262' name='#a262' style='position: absolute; top: 961px; left: 1900px'><font color=white size=3>Binyon</font></a>
<a id='a344' name='#a344' style='position: absolute; top: 917px; left: 1900px'><font color=white size=3>Mew</font></a>
<a id='a64' name='#a64' style='position: absolute; top: 973px; left: 1900px'><font color=white size=3>Belloc</font></a>
<a id='a236' name='#a236' style='position: absolute; top: 837px; left: 1900px'><font color=white size=3>Brennan</font></a>
<a id='a269' name='#a269' style='position: absolute; top: 961px; left: 1900px'><font color=white size=3>L Douglas</font></a>
<a id='a149' name='#a149' style='position: absolute; top: 991px; left: 1900px'><font color=white size=3>J Johnson</font></a>
<a id='a22' name='#a22' style='position: absolute; top: 831px; left: 1900px'><font color=white size=3>Dunbar</font></a>
<a id='a185' name='#a185' style='position: absolute; top: 837px; left: 1900px'><font color=white size=3>McCrae</font></a>
<a id='a329' name='#a329' style='position: absolute; top: 936px; left: 1900px'><font color=white size=3>Adams</font></a>
<a id='a61' name='#a61' style='position: absolute; top: 998px; left: 1900px'><font color=white size=3>Mare</font></a>
<a id='a2' name='#a2' style='position: absolute; top: 1028px; left: 1900px'><font color=white size=3>Frost</font></a>
<a id='a24' name='#a24' style='position: absolute; top: 1004px; left: 1900px'><font color=white size=3>Service</font></a>
<a id='a114' name='#a114' style='position: absolute; top: 899px; left: 1900px'><font color=white size=3>A Lowell</font></a>
<a id='a171' name='#a171' style='position: absolute; top: 948px; left: 1900px'><font color=white size=3>Stein</font></a>
<a id='a295' name='#a295' style='position: absolute; top: 930px; left: 1900px'><font color=white size=3>Chesterton</font></a>
<a id='a357' name='#a357' style='position: absolute; top: 948px; left: 1900px'><font color=white size=3>Montgomery</font></a>
<a id='a33' name='#a33' style='position: absolute; top: 881px; left: 1900px'><font color=white size=3>Rilke</font></a>
<a id='a112' name='#a112' style='position: absolute; top: 924px; left: 1900px'><font color=white size=3>Machado</font></a>
<a id='a151' name='#a151' style='position: absolute; top: 942px; left: 1900px'><font color=white size=3>Dennis</font></a>
<a id='a59' name='#a59' style='position: absolute; top: 942px; left: 1900px'><font color=white size=3>Iqbal</font></a>
<a id='a338' name='#a338' style='position: absolute; top: 1022px; left: 1900px'><font color=white size=3>Hesse</font></a>
<a id='a44' name='#a44' style='position: absolute; top: 1041px; left: 1900px'><font color=white size=3>Sandburg</font></a>
<a id='a71' name='#a71' style='position: absolute; top: 1047px; left: 1900px'><font color=white size=3>Masefield</font></a>
<a id='a115' name='#a115' style='position: absolute; top: 893px; left: 1900px'><font color=white size=3>E Thomas</font></a>
<a id='a243' name='#a243' style='position: absolute; top: 813px; left: 1900px'><font color=white size=3>Crapsey</font></a>
<a id='a31' name='#a31' style='position: absolute; top: 967px; left: 1900px'><font color=white size=3>Naidu</font></a>
<a id='a88' name='#a88' style='position: absolute; top: 979px; left: 1900px'><font color=white size=3>Stevens</font></a>
<a id='a154' name='#a154' style='position: absolute; top: 917px; left: 1900px'><font color=white size=3>Lindsay</font></a>
<a id='a108' name='#a108' style='position: absolute; top: 1022px; left: 1900px'><font color=white size=3>Noyes</font></a>
<a id='a175' name='#a175' style='position: absolute; top: 868px; left: 1900px'><font color=white size=3>Blok</font></a>
<a id='a198' name='#a198' style='position: absolute; top: 1010px; left: 1900px'><font color=white size=3>Edgar</font></a>
<a id='a230' name='#a230' style='position: absolute; top: 893px; left: 1900px'><font color=white size=3>Apollinaire</font></a>
<a id='a74' name='#a74' style='position: absolute; top: 1022px; left: 1900px'><font color=white size=3>Guest</font></a>
<a id='a264' name='#a264' style='position: absolute; top: 1071px; left: 1900px'><font color=white size=3>Colum</font></a>
<a id='a78' name='#a78' style='position: absolute; top: 979px; left: 1900px'><font color=white size=3>Joyce</font></a>
<a id='a254' name='#a254' style='position: absolute; top: 985px; left: 1900px'><font color=white size=3>Stephens</font></a>
<a id='a21' name='#a21' style='position: absolute; top: 917px; left: 1900px'><font color=white size=3>Gibran</font></a>
<a id='a57' name='#a57' style='position: absolute; top: 1065px; left: 1900px'><font color=white size=3>Williams</font></a>
<a id='a34' name='#a34' style='position: absolute; top: 954px; left: 1900px'><font color=white size=3>Teasdale</font></a>
<a id='a42' name='#a42' style='position: absolute; top: 1090px; left: 1900px'><font color=white size=3>Pound</font></a>
<a id='a76' name='#a76' style='position: absolute; top: 1065px; left: 1900px'><font color=white size=3>Sassoon</font></a>
<a id='a280' name='#a280' style='position: absolute; top: 1084px; left: 1900px'><font color=white size=3>Cornford</font></a>
<a id='a49' name='#a49' style='position: absolute; top: 862px; left: 1900px'><font color=white size=3>Brooke</font></a>
<a id='a98' name='#a98' style='position: absolute; top: 1053px; left: 1900px'><font color=white size=3>Jeffers</font></a>
<a id='a179' name='#a179' style='position: absolute; top: 1108px; left: 1900px'><font color=white size=3>Muir</font></a>
<a id='a281' name='#a281' style='position: absolute; top: 905px; left: 1900px'><font color=white size=3>Trakl</font></a>
<a id='a324' name='#a324' style='position: absolute; top: 1115px; left: 1900px'><font color=white size=3>M Moore</font></a>
<a id='a341' name='#a341' style='position: absolute; top: 911px; left: 1900px'><font color=white size=3>Ledwidge</font></a>
<a id='a176' name='#a176' style='position: absolute; top: 887px; left: 1900px'><font color=white size=3>Seeger</font></a>
<a id='a300' name='#a300' style='position: absolute; top: 924px; left: 1900px'><font color=white size=3>Mansfield</font></a>
<a id='a334' name='#a334' style='position: absolute; top: 973px; left: 1900px'><font color=white size=3>Pessoa</font></a>
<a id='a363' name='#a363' style='position: absolute; top: 1022px; left: 1900px'><font color=white size=3>T Eliot</font></a>
<a id='a75' name='#a75' style='position: absolute; top: 1047px; left: 1900px'><font color=white size=3>Akhmatova</font></a>
<a id='a97' name='#a97' style='position: absolute; top: 1016px; left: 1900px'><font color=white size=3>McKay</font></a>
<a id='a286' name='#a286' style='position: absolute; top: 1059px; left: 1900px'><font color=white size=3>Mistral</font></a>
<a id='a298' name='#a298' style='position: absolute; top: 1090px; left: 1900px'><font color=white size=3>Aiken</font></a>
<a id='a152' name='#a152' style='position: absolute; top: 1053px; left: 1900px'><font color=white size=3>Pasternak</font></a>
<a id='a261' name='#a261' style='position: absolute; top: 936px; left: 1900px'><font color=white size=3>Rosenberg</font></a>
<a id='a41' name='#a41' style='position: absolute; top: 1028px; left: 1900px'><font color=white size=3>Millay</font></a>
<a id='a150' name='#a150' style='position: absolute; top: 1102px; left: 1900px'><font color=white size=3>Tolkien</font></a>
<a id='a170' name='#a170' style='position: absolute; top: 991px; left: 1900px'><font color=white size=3>Vallejo</font></a>
<a id='a204' name='#a204' style='position: absolute; top: 1170px; left: 1900px'><font color=white size=3>MacLeish</font></a>
<a id='a289' name='#a289' style='position: absolute; top: 1133px; left: 1900px'><font color=white size=3>West</font></a>
<a id='a375' name='#a375' style='position: absolute; top: 998px; left: 1900px'><font color=white size=3>Tsvetaeva</font></a>
<a id='a35' name='#a35' style='position: absolute; top: 985px; left: 1900px'><font color=white size=3>Owen</font></a>
<a id='a38' name='#a38' style='position: absolute; top: 1071px; left: 1900px'><font color=white size=3>Parker</font></a>
<a id='a319' name='#a319' style='position: absolute; top: 1115px; left: 1900px'><font color=white size=3>Zedong</font></a>
<a id='a360' name='#a360' style='position: absolute; top: 1016px; left: 1900px'><font color=white size=3>Nichols</font></a>
<a id='a372' name='#a372' style='position: absolute; top: 979px; left: 1900px'><font color=white size=3>Mayakovsky</font></a>
<a id='a233' name='#a233' style='position: absolute; top: 1028px; left: 1900px'><font color=white size=3>cummings</font></a>
<a id='a306' name='#a306' style='position: absolute; top: 1090px; left: 1900px'><font color=white size=3>Toomer</font></a>
<a id='a197' name='#a197' style='position: absolute; top: 1195px; left: 1900px'><font color=white size=3>Graves</font></a>
<a id='a267' name='#a267' style='position: absolute; top: 1047px; left: 1900px'><font color=white size=3>Eluard</font></a>
<a id='a370' name='#a370' style='position: absolute; top: 948px; left: 1900px'><font color=white size=3>Yesenin</font></a>
<a id='a307' name='#a307' style='position: absolute; top: 1071px; left: 1900px'><font color=white size=3>Tzara</font></a>
<a id='a333' name='#a333' style='position: absolute; top: 1096px; left: 1900px'><font color=white size=3>Breton</font></a>
<a id='a205' name='#a205' style='position: absolute; top: 1053px; left: 1900px'><font color=white size=3>Bogan</font></a>
<a id='a66' name='#a66' style='position: absolute; top: 998px; left: 1900px'><font color=white size=3>Lorca</font></a>
<a id='a206' name='#a206' style='position: absolute; top: 1059px; left: 1900px'><font color=white size=3>Brecht</font></a>
<a id='a318' name='#a318' style='position: absolute; top: 1035px; left: 1900px'><font color=white size=3>Benet</font></a>
<a id='a132' name='#a132' style='position: absolute; top: 1084px; left: 1900px'><font color=white size=3>Das</font></a>
<a id='a147' name='#a147' style='position: absolute; top: 1164px; left: 1900px'><font color=white size=3>Borges</font></a>
<a id='a156' name='#a156' style='position: absolute; top: 1084px; left: 1900px'><font color=white size=3>Hemingway</font></a>
<a id='a172' name='#a172' style='position: absolute; top: 954px; left: 1900px'><font color=white size=3>Crane</font></a>
<a id='a259' name='#a259' style='position: absolute; top: 1176px; left: 1900px'><font color=white size=3>Tate</font></a>
<a id='a221' name='#a221' style='position: absolute; top: 1022px; left: 1900px'><font color=white size=3>Desnos</font></a>
<a id='a229' name='#a229' style='position: absolute; top: 1127px; left: 1900px'><font color=white size=3>Prevert</font></a>
<a id='a258' name='#a258' style='position: absolute; top: 1121px; left: 1900px'><font color=white size=3>Seferis</font></a>
<a id='a166' name='#a166' style='position: absolute; top: 1145px; left: 1900px'><font color=white size=3>Slessor</font></a>
<a id='a11' name='#a11' style='position: absolute; top: 1115px; left: 1900px'><font color=white size=3>L Hughes</font></a>
<a id='a30' name='#a30' style='position: absolute; top: 1127px; left: 1900px'><font color=white size=3>Nash</font></a>
<a id='a73' name='#a73' style='position: absolute; top: 1096px; left: 1900px'><font color=white size=3>Hikmet</font></a>
<a id='a155' name='#a155' style='position: absolute; top: 1182px; left: 1900px'><font color=white size=3>S Smith</font></a>
<a id='a231' name='#a231' style='position: absolute; top: 1158px; left: 1900px'><font color=white size=3>Tessimond</font></a>
<a id='a270' name='#a270' style='position: absolute; top: 1145px; left: 1900px'><font color=white size=3>Nin</font></a>
<a id='a292' name='#a292' style='position: absolute; top: 1004px; left: 1900px'><font color=white size=3>Cullen</font></a>
<a id='a4' name='#a4' style='position: absolute; top: 1152px; left: 1900px'><font color=white size=3>Neruda</font></a>
<a id='a95' name='#a95' style='position: absolute; top: 1121px; left: 1900px'><font color=white size=3>Kavanagh</font></a>
<a id='a342' name='#a342' style='position: absolute; top: 1059px; left: 1900px'><font color=white size=3>Chauhan</font></a>
<a id='a148' name='#a148' style='position: absolute; top: 1238px; left: 1900px'><font color=white size=3>Frye</font></a>
<a id='a350' name='#a350' style='position: absolute; top: 1256px; left: 1900px'><font color=white size=3>Hein</font></a>
<a id='a250' name='#a250' style='position: absolute; top: 1201px; left: 1900px'><font color=white size=3>Betjeman</font></a>
<a id='a54' name='#a54' style='position: absolute; top: 1213px; left: 1900px'><font color=white size=3>Bachchan</font></a>
<a id='a209' name='#a209' style='position: absolute; top: 1152px; left: 1900px'><font color=white size=3>Auden</font></a>
<a id='a330' name='#a330' style='position: absolute; top: 1102px; left: 1900px'><font color=white size=3>MacNeice</font></a>
<a id='a235' name='#a235' style='position: absolute; top: 1127px; left: 1900px'><font color=white size=3>Roethke</font></a>
<a id='a275' name='#a275' style='position: absolute; top: 1207px; left: 1900px'><font color=white size=3>Swirszczy.</font></a>
<a id='a352' name='#a352' style='position: absolute; top: 1225px; left: 1900px'><font color=white size=3>Spender</font></a>
<a id='a39' name='#a39' style='position: absolute; top: 1176px; left: 1900px'><font color=white size=3>Bishop</font></a>
<a id='a123' name='#a123' style='position: absolute; top: 1256px; left: 1900px'><font color=white size=3>Milosz</font></a>
<a id='a131' name='#a131' style='position: absolute; top: 1158px; left: 1900px'><font color=white size=3>Patchen</font></a>
<a id='a194' name='#a194' style='position: absolute; top: 1164px; left: 1900px'><font color=white size=3>Faiz</font></a>
<a id='a193' name='#a193' style='position: absolute; top: 1189px; left: 1900px'><font color=white size=3>Hayden</font></a>
<a id='a195' name='#a195' style='position: absolute; top: 1232px; left: 1900px'><font color=white size=3>Swenson</font></a>
<a id='a241' name='#a241' style='position: absolute; top: 1219px; left: 1900px'><font color=white size=3>Schwartz</font></a>
<a id='a26' name='#a26' style='position: absolute; top: 1108px; left: 1900px'><font color=white size=3>D Thomas</font></a>
<a id='a94' name='#a94' style='position: absolute; top: 1244px; left: 1900px'><font color=white size=3>Paz</font></a>
<a id='a137' name='#a137' style='position: absolute; top: 1164px; left: 1900px'><font color=white size=3>Berryman</font></a>
<a id='a144' name='#a144' style='position: absolute; top: 1281px; left: 1900px'><font color=white size=3>Stafford</font></a>
<a id='a167' name='#a167' style='position: absolute; top: 1078px; left: 1900px'><font color=white size=3>Kees</font></a>
<a id='a249' name='#a249' style='position: absolute; top: 1145px; left: 1900px'><font color=white size=3>Jarrell</font></a>
<a id='a355' name='#a355' style='position: absolute; top: 1244px; left: 1900px'><font color=white size=3>Lee</font></a>
<a id='a134' name='#a134' style='position: absolute; top: 1256px; left: 1900px'><font color=white size=3>Wright</font></a>
<a id='a20' name='#a20' style='position: absolute; top: 1225px; left: 1900px'><font color=white size=3>Dahl</font></a>
<a id='a158' name='#a158' style='position: absolute; top: 1189px; left: 1900px'><font color=white size=3>R Lowell</font></a>
<a id='a311' name='#a311' style='position: absolute; top: 1269px; left: 1900px'><font color=white size=3>Causley</font></a>
<a id='a56' name='#a56' style='position: absolute; top: 1269px; left: 1900px'><font color=white size=3>Milligan</font></a>
<a id='a12' name='#a12' style='position: absolute; top: 1250px; left: 1900px'><font color=white size=3>Bukowski</font></a>
<a id='a181' name='#a181' style='position: absolute; top: 1176px; left: 1900px'><font color=white size=3>Celan</font></a>
<a id='a227' name='#a227' style='position: absolute; top: 1096px; left: 1900px'><font color=white size=3>K Douglas</font></a>
<a id='a291' name='#a291' style='position: absolute; top: 1262px; left: 1900px'><font color=white size=3>Harwood</font></a>
<a id='a349' name='#a349' style='position: absolute; top: 1275px; left: 1900px'><font color=white size=3>Nemerov</font></a>
<a id='a25' name='#a25' style='position: absolute; top: 1250px; left: 1900px'><font color=white size=3>Larkin</font></a>
<a id='a105' name='#a105' style='position: absolute; top: 1182px; left: 1900px'><font color=white size=3>Kerouac</font></a>
<a id='a232' name='#a232' style='position: absolute; top: 1250px; left: 1900px'><font color=white size=3>Popa</font></a>
<a id='a124' name='#a124' style='position: absolute; top: 1275px; left: 1900px'><font color=white size=3>Levertov</font></a>
<a id='a130' name='#a130' style='position: absolute; top: 1269px; left: 1900px'><font color=white size=3>Qabbani</font></a>
<a id='a237' name='#a237' style='position: absolute; top: 1306px; left: 1900px'><font color=white size=3>Dugan</font></a>
<a id='a146' name='#a146' style='position: absolute; top: 1293px; left: 1900px'><font color=white size=3>Ezekiel</font></a>
<a id='a191' name='#a191' style='position: absolute; top: 1281px; left: 1900px'><font color=white size=3>Amichai</font></a>
<a id='a339' name='#a339' style='position: absolute; top: 1287px; left: 1900px'><font color=white size=3>Z Herbert</font></a>
<a id='a302' name='#a302' style='position: absolute; top: 1299px; left: 1900px'><font color=white size=3>Justice</font></a>
<a id='a29' name='#a29' style='position: absolute; top: 1281px; left: 1900px'><font color=white size=3>Ginsberg</font></a>
<a id='a161' name='#a161' style='position: absolute; top: 1213px; left: 1900px'><font color=white size=3>Berman</font></a>
<a id='a1' name='#a1' style='position: absolute; top: 1336px; left: 1900px'><font color=white size=3>Angelou</font></a>
<a id='a28' name='#a28' style='position: absolute; top: 1238px; left: 1900px'><font color=white size=3>Sexton</font></a>
<a id='a139' name='#a139' style='position: absolute; top: 1336px; left: 1900px'><font color=white size=3>Rich</font></a>
<a id='a187' name='#a187' style='position: absolute; top: 1244px; left: 1900px'><font color=white size=3>Ramanujan</font></a>
<a id='a62' name='#a62' style='position: absolute; top: 1299px; left: 1900px'><font color=white size=3>Silverstein</font></a>
<a id='a69' name='#a69' style='position: absolute; top: 1293px; left: 1900px'><font color=white size=3>T Hughes</font></a>
<a id='a96' name='#a96' style='position: absolute; top: 1349px; left: 1900px'><font color=white size=3>Walcott</font></a>
<a id='a222' name='#a222' style='position: absolute; top: 1306px; left: 1900px'><font color=white size=3>Corso</font></a>
<a id='a162' name='#a162' style='position: absolute; top: 1330px; left: 1900px'><font color=white size=3>Faraz</font></a>
<a id='a165' name='#a165' style='position: absolute; top: 1355px; left: 1900px'><font color=white size=3>Viorst</font></a>
<a id='a327' name='#a327' style='position: absolute; top: 1275px; left: 1900px'><font color=white size=3>Knight</font></a>
<a id='a9' name='#a9' style='position: absolute; top: 1213px; left: 1900px'><font color=white size=3>Plath</font></a>
<a id='a266' name='#a266' style='position: absolute; top: 1238px; left: 1900px'><font color=white size=3>Nowlan</font></a>
<a id='a168' name='#a168' style='position: absolute; top: 1256px; left: 1900px'><font color=white size=3>Brautigan</font></a>
<a id='a362' name='#a362' style='position: absolute; top: 1189px; left: 1900px'><font color=white size=3>Farrokhzad</font></a>
<a id='a180' name='#a180' style='position: absolute; top: 1318px; left: 1900px'><font color=white size=3>Brodsky</font></a>
<a id='a36' name='#a36' style='position: absolute; top: 1386px; left: 1900px'><font color=white size=3>Collins</font></a>
<a id='a196' name='#a196' style='position: absolute; top: 1330px; left: 1900px'><font color=white size=3>Matthews</font></a>
<a id='a288' name='#a288' style='position: absolute; top: 1355px; left: 1900px'><font color=white size=3>Levis</font></a>

<img align=left class=coords border=0 src=maps/en.png>
<div style='background:transparent; position:absolute; top: 0px; left: 0px; width:100%; height:100%;'>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?order=a_country,%20a_year1' title=''><div class=area style='position:absolute; width:35px; height:20px; left:1140px; top:390px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?order=a_country,%20a_year1' title=''><div class=area style='position:absolute; width:56px; height:20px; left:1140px; top:413px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?order=a_country,%20a_year1' title=''><div class=area style='position:absolute; width:48px; height:20px; left:1140px; top:436px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?order=a_country,%20a_year1' title=''><div class=area style='position:absolute; width:35px; height:20px; left:1140px; top:459px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?order=a_country,%20a_year1' title=''><div class=area style='position:absolute; width:52px; height:20px; left:1140px; top:482px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?order=a_country,%20a_year1' title=''><div class=area style='position:absolute; width:66px; height:20px; left:1140px; top:505px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?order=a_country,%20a_year1' title=''><div class=area style='position:absolute; width:59px; height:20px; left:1250px; top:390px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?order=a_country,%20a_year1' title=''><div class=area style='position:absolute; width:44px; height:20px; left:1250px; top:413px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?order=a_country,%20a_year1' title=''><div class=area style='position:absolute; width:54px; height:20px; left:1250px; top:436px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?order=a_country,%20a_year1' title=''><div class=area style='position:absolute; width:52px; height:20px; left:1250px; top:459px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?order=a_country,%20a_year1' title=''><div class=area style='position:absolute; width:64px; height:20px; left:1250px; top:482px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?order=a_country,%20a_year1' title=''><div class=area style='position:absolute; width:66px; height:20px; left:1250px; top:505px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?order=a_country,%20a_year1' title=''><div class=area style='position:absolute; width:39px; height:20px; left:1360px; top:390px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?order=a_country,%20a_year1' title=''><div class=area style='position:absolute; width:47px; height:20px; left:1360px; top:413px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?order=a_country,%20a_year1' title=''><div class=area style='position:absolute; width:44px; height:20px; left:1360px; top:436px'></div></a>
<a  href='build-epmap.php?t_name=Romanticism' title=''><div class=area style='position:absolute; width:44px; height:18px; left:349px; top:250px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Romanticism' title=''><div class=area style='position:absolute; width:44px; height:18px; left:305px; top:250px'></div></a>
<a  href='build-epmap.php?t_name=Enlightenment' title=''><div class=area style='position:absolute; width:49px; height:18px; left:1149px; top:135px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Enlightenment' title=''><div class=area style='position:absolute; width:50px; height:18px; left:1099px; top:135px'></div></a>
<a  href='build-epmap.php?t_name=Metaphysical poets' title=''><div class=area style='position:absolute; width:64px; height:18px; left:1027px; top:111px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Metaphysical poets' title=''><div class=area style='position:absolute; width:64px; height:18px; left:963px; top:111px'></div></a>
<a  href='build-epmap.php?t_name=Beat' title=''><div class=area style='position:absolute; width:18px; height:18px; left:613px; top:1131px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Beat generation' title=''><div class=area style='position:absolute; width:18px; height:18px; left:595px; top:1131px'></div></a>
<a  href='build-epmap.php?t_name=Black Arts Movement' title='Black Arts Movement'><div class=area style='position:absolute; width:35px; height:18px; left:1385px; top:1254px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Black Arts Movement' title='Black Arts Movement'><div class=area style='position:absolute; width:35px; height:18px; left:1350px; top:1254px'></div></a>
<a  href='build-epmap.php?t_name=Confessionalism' title='Confessionalism'><div class=area style='position:absolute; width:29px; height:18px; left:706px; top:1143px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Confessionalism' title='Confessionalism'><div class=area style='position:absolute; width:30px; height:18px; left:676px; top:1143px'></div></a>
<a  href='build-epmap.php?t_name=Harlem Renaissance' title='Harlem Renaissance'><div class=area style='position:absolute; width:26px; height:18px; left:1376px; top:909px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Harlem Renaissance' title='Harlem Renaissance'><div class=area style='position:absolute; width:26px; height:18px; left:1350px; top:909px'></div></a>
<a  href='build-epmap.php?t_name=Pre-Raphaelite Brotherhood' title='Pre-Raphaelite Brotherhood'><div class=area style='position:absolute; width:34px; height:18px; left:711px; top:589px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Pre-Raphaelite Brotherhood' title='Pre-Raphaelite Brotherhood'><div class=area style='position:absolute; width:35px; height:18px; left:676px; top:589px'></div></a>
<a  href='build-epmap.php?t_name=Imagism' title=''><div class=area style='position:absolute; width:30px; height:18px; left:202px; top:878px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Imagism' title=''><div class=area style='position:absolute; width:30px; height:18px; left:172px; top:878px'></div></a>
<a  href='build-epmap.php?t_name=Lake Poets' title=''><div class=area style='position:absolute; width:38px; height:18px; left:75px; top:299px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Lake Poets' title=''><div class=area style='position:absolute; width:39px; height:18px; left:36px; top:299px'></div></a>
<a  href='build-epmap.php?t_name=Modernism' title=''><div class=area style='position:absolute; width:38px; height:18px; left:372px; top:755px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Modernism' title=''><div class=area style='position:absolute; width:38px; height:18px; left:334px; top:755px'></div></a>
<a  href='build-epmap.php?t_name=Formalism' title=''><div class=area style='position:absolute; width:36px; height:18px; left:285px; top:878px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Formalism' title=''><div class=area style='position:absolute; width:37px; height:18px; left:248px; top:878px'></div></a>
<a  href='build-epmap.php?t_name=Symbolism' title='Symbolism'><div class=area style='position:absolute; width:29px; height:18px; left:545px; top:687px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Symbolism' title='Symbolism'><div class=area style='position:absolute; width:29px; height:18px; left:516px; top:687px'></div></a>
<a  href='build-epmap.php?t_name=Realism' title=''><div class=area style='position:absolute; width:28px; height:18px; left:451px; top:253px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Realism' title=''><div class=area style='position:absolute; width:29px; height:18px; left:422px; top:253px'></div></a>
<a  href='build-epmap.php?t_name=Transcendentalism' title='Transcendentalism'><div class=area style='position:absolute; width:38px; height:18px; left:555px; top:502px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Transcendentalism' title='Transcendentalism'><div class=area style='position:absolute; width:39px; height:18px; left:516px; top:502px'></div></a>
<a  href='build-epmap.php?t_name=Victorian' title=''><div class=area style='position:absolute; width:32px; height:18px; left:794px; top:465px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Victorian' title=''><div class=area style='position:absolute; width:32px; height:18px; left:762px; top:465px'></div></a>
<a  href='build-epmap.php?t_name=Dirty realism' title='Dirty realism'><div class=area style='position:absolute; width:18px; height:18px; left:443px; top:1229px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Dirty realism' title='Dirty realism'><div class=area style='position:absolute; width:18px; height:18px; left:425px; top:1229px'></div></a>
<a  href='build-epmap.php?t_name=Fireside poets' title='Fireside poets'><div class=area style='position:absolute; width:29px; height:18px; left:319px; top:478px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Fireside poets' title='Fireside poets'><div class=area style='position:absolute; width:29px; height:18px; left:290px; top:478px'></div></a>
<a  href='build-epmap.php?t_name=Didactism' title=''><div class=area style='position:absolute; width:34px; height:18px; left:891px; top:484px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Didactism' title=''><div class=area style='position:absolute; width:34px; height:18px; left:857px; top:484px'></div></a>
<a  href='build-epmap.php?t_name=Surrealism' title=''><div class=area style='position:absolute; width:37px; height:18px; left:130px; top:866px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Surrealism' title=''><div class=area style='position:absolute; width:38px; height:18px; left:92px; top:866px'></div></a>
<a  href='build-epmap.php?t_name=Children' title=''><div class=area style='position:absolute; width:30px; height:18px; left:1658px; top:297px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Children' title=''><div class=area style='position:absolute; width:30px; height:18px; left:1628px; top:297px'></div></a>
<a  href='build-epmap.php?t_name=Nonsense' title=''><div class=area style='position:absolute; width:34px; height:18px; left:1637px; top:558px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Nonsense' title=''><div class=area style='position:absolute; width:34px; height:18px; left:1603px; top:558px'></div></a>
<a  href='build-epmap.php?t_name=War' title=''><div class=area style='position:absolute; width:17px; height:18px; left:693px; top:798px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=War' title=''><div class=area style='position:absolute; width:17px; height:18px; left:676px; top:798px'></div></a>
<a  href='build-epmap.php?t_name=Optimism' title='Optimism'><div class=area style='position:absolute; width:39px; height:18px; left:1470px; top:595px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Optimism' title='Optimism'><div class=area style='position:absolute; width:40px; height:18px; left:1430px; top:595px'></div></a>
<a  href='build-epmap.php?t_name=Christian' title=''><div class=area style='position:absolute; width:31px; height:18px; left:1063px; top:607px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Christianity' title=''><div class=area style='position:absolute; width:31px; height:18px; left:1032px; top:607px'></div></a>
<a  href='build-epmap.php?t_name=Renaissance' title=''><div class=area style='position:absolute; width:43px; height:18px; left:551px; top:162px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Renaissance' title=''><div class=area style='position:absolute; width:44px; height:18px; left:507px; top:162px'></div></a>
<a  href='build-epmap.php?t_name=Expressionism' title='Expressionism'><div class=area style='position:absolute; width:29px; height:18px; left:1293px; top:854px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Expressionism' title='Expressionism'><div class=area style='position:absolute; width:30px; height:18px; left:1263px; top:854px'></div></a>
<a  href='build-epmap.php?t_name=Neoromanticism' title='Neoromanticism'><div class=area style='position:absolute; width:30px; height:18px; left:546px; top:915px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Neoromanticism' title='Neoromanticism'><div class=area style='position:absolute; width:30px; height:18px; left:516px; top:915px'></div></a>
<a  href='build-epmap.php?t_name=Philosophy' title=''><div class=area style='position:absolute; width:38px; height:18px; left:975px; top:235px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Philosophical poets' title=''><div class=area style='position:absolute; width:39px; height:18px; left:936px; top:235px'></div></a>
<a  href='build-epmap.php?t_name=Decadents' title=''><div class=area style='position:absolute; width:36px; height:18px; left:631px; top:509px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Decadents' title=''><div class=area style='position:absolute; width:37px; height:18px; left:594px; top:509px'></div></a>
<a  href='build-epmap.php?t_name=Medieval' title=''><div class=area style='position:absolute; width:32px; height:18px; left:762px; top:13px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Medieval' title=''><div class=area style='position:absolute; width:32px; height:18px; left:730px; top:13px'></div></a>
<a  href='build-epmap.php?t_name=Ancient Greece' title=''><div class=area style='position:absolute; width:53px; height:18px; left:426px; top:11px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Ancient Greece' title=''><div class=area style='position:absolute; width:53px; height:18px; left:373px; top:11px'></div></a>
<a  href='build-epmap.php?t_name=Ancient Rome' title=''><div class=area style='position:absolute; width:48px; height:18px; left:559px; top:13px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Ancient Rome' title=''><div class=area style='position:absolute; width:49px; height:18px; left:510px; top:13px'></div></a>
<a  href='build-epmap.php?t_name=World poetry' title=''><div class=area style='position:absolute; width:45px; height:18px; left:1829px; top:11px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=World poetry' title=''><div class=area style='position:absolute; width:45px; height:18px; left:1784px; top:11px'></div></a>
<a  href='build-epmap.php?t_name=Bush' title=''><div class=area style='position:absolute; width:18px; height:18px; left:1132px; top:589px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Bush poetry' title=''><div class=area style='position:absolute; width:19px; height:18px; left:1113px; top:589px'></div></a>
<a  href='build-epmap.php?t_name=Feminism' title='Feminism'><div class=area style='position:absolute; width:25px; height:18px; left:57px; top:718px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Feminism' title='Feminism'><div class=area style='position:absolute; width:25px; height:18px; left:32px; top:718px'></div></a>
<a  href='build-epmap.php?t_name=Poets' title='Poets'><div class=area style='position:absolute; width:21px; height:18px; left:1714px; top:786px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Poets' title='Poets'><div class=area style='position:absolute; width:21px; height:18px; left:1693px; top:786px'></div></a>
<a  href='build-epmap.php?t_name=Playwright' title='Playwright'><div class=area style='position:absolute; width:24px; height:18px; left:1056px; top:940px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Playwright' title='Playwright'><div class=area style='position:absolute; width:24px; height:18px; left:1032px; top:940px'></div></a>
<a  href='build-epmap.php?t_name=Nature' title=''><div class=area style='position:absolute; width:24px; height:18px; left:1212px; top:749px'></div></a>
<a  href='http://en.wikipedia.org/w/index.php?search=Nature' title=''><div class=area style='position:absolute; width:25px; height:18px; left:1187px; top:749px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=215&a_id=364&y=-800' title='Homer
Epic, National
GRC
-800-
MY: 30
MX: 215'><div class=area style='position:absolute; width:25px; height:20px; left:249px; top:14px'></div></a>
<a  href='build-epmap.php?mp=215&a_id=364&y=-800' title='Homer
Epic, National
GRC
-800-
MY: 30
MX: 215'><div class=area style='position:absolute; width:25px; height:20px; left:274px; top:14px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=275&a_id=58&y=-615' title='Sappho
Homoerotism
GRC
-615-
MY: 0
MX: 275'><div class=area style='position:absolute; width:26px; height:20px; left:309px; top:19px'></div></a>
<a  href='build-epmap.php?mp=275&a_id=58&y=-615' title='Sappho
Homoerotism
GRC
-615-
MY: 0
MX: 275'><div class=area style='position:absolute; width:25px; height:20px; left:335px; top:19px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1455&a_id=173&y=-551' title='Confucius
Agnosticism, Spiritualism
CHN
-551-
MY: 0
MX: 1455'><div class=area style='position:absolute; width:32px; height:20px; left:1489px; top:29px'></div></a>
<a  href='build-epmap.php?mp=1455&a_id=173&y=-551' title='Confucius
Agnosticism, Spiritualism
CHN
-551-
MY: 0
MX: 1455'><div class=area style='position:absolute; width:32px; height:20px; left:1521px; top:29px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=335&a_id=274&y=-525' title='Aeschylus

GRC
-525-
MY: 0
MX: 335'><div class=area style='position:absolute; width:35px; height:20px; left:369px; top:31px'></div></a>
<a  href='build-epmap.php?mp=335&a_id=274&y=-525' title='Aeschylus

GRC
-525-
MY: 0
MX: 335'><div class=area style='position:absolute; width:35px; height:20px; left:404px; top:31px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=515&a_id=369&y=-70' title='Virgil

ROM
-70-
MY: 0
MX: 515'><div class=area style='position:absolute; width:19px; height:20px; left:549px; top:31px'></div></a>
<a  href='build-epmap.php?mp=515&a_id=369&y=-70' title='Virgil

ROM
-70-
MY: 0
MX: 515'><div class=area style='position:absolute; width:19px; height:20px; left:568px; top:31px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=565&a_id=320&y=-65' title='Horace
Satire
ROM
-65-
MY: 0
MX: 565'><div class=area style='position:absolute; width:24px; height:20px; left:599px; top:31px'></div></a>
<a  href='build-epmap.php?mp=565&a_id=320&y=-65' title='Horace
Satire
ROM
-65-
MY: 0
MX: 565'><div class=area style='position:absolute; width:24px; height:20px; left:623px; top:31px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=625&a_id=282&y=-43' title='Ovid
Epic
ROM
-43-
MY: 0
MX: 625'><div class=area style='position:absolute; width:16px; height:20px; left:659px; top:31px'></div></a>
<a  href='build-epmap.php?mp=625&a_id=282&y=-43' title='Ovid
Epic
ROM
-43-
MY: 0
MX: 625'><div class=area style='position:absolute; width:16px; height:20px; left:675px; top:31px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1645&a_id=223&y=301' title='Valmiki
Epic, Mysticism
IND
301-
MY: 0
MX: 1645'><div class=area style='position:absolute; width:26px; height:20px; left:1679px; top:31px'></div></a>
<a  href='build-epmap.php?mp=1645&a_id=223&y=301' title='Valmiki
Epic, Mysticism
IND
301-
MY: 0
MX: 1645'><div class=area style='position:absolute; width:26px; height:20px; left:1705px; top:31px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1702&a_id=122&y=353' title='Kalidasa
Epic, Spiritualism
IND
353-420
MY: 0
MX: 1702'><div class=area style='position:absolute; width:29px; height:20px; left:1736px; top:31px'></div></a>
<a  href='build-epmap.php?mp=1702&a_id=122&y=353' title='Kalidasa
Epic, Spiritualism
IND
353-420
MY: 0
MX: 1702'><div class=area style='position:absolute; width:28px; height:20px; left:1765px; top:31px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1385&a_id=87&y=701' title='Li Bai
Medieval, National
CHN
701-762
MY: 0
MX: 1385'><div class=area style='position:absolute; width:13px; height:20px; left:1419px; top:31px'></div></a>
<a  href='build-epmap.php?mp=1385&a_id=87&y=701' title='Li Bai
Medieval, National
CHN
701-762
MY: 0
MX: 1385'><div class=area style='position:absolute; width:13px; height:20px; left:1432px; top:31px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1423&a_id=140&y=712' title='Du Fu
Medieval, National, Spiritualism
CHN
712-770
MY: 0
MX: 1423'><div class=area style='position:absolute; width:11px; height:20px; left:1457px; top:31px'></div></a>
<a  href='build-epmap.php?mp=1423&a_id=140&y=712' title='Du Fu
Medieval, National, Spiritualism
CHN
712-770
MY: 0
MX: 1423'><div class=area style='position:absolute; width:11px; height:20px; left:1468px; top:31px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1525&a_id=163&y=1048' title='Omar Khayyam
Mysticism, Agnosticism, Spiritualism, Philosophy, Medieval
IRN
1048-1122
MY: 0
MX: 1525'><div class=area style='position:absolute; width:31px; height:20px; left:1559px; top:31px'></div></a>
<a  href='build-epmap.php?mp=1525&a_id=163&y=1048' title='Omar Khayyam
Mysticism, Agnosticism, Spiritualism, Philosophy, Medieval
IRN
1048-1122
MY: 0
MX: 1525'><div class=area style='position:absolute; width:31px; height:20px; left:1590px; top:31px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1595&a_id=52&y=1207' title='Mewlana Jalaluddin Rumi
Islam, Medieval, National, Philosophy
PER
1207-1273
MY: 0
MX: 1595'><div class=area style='position:absolute; width:19px; height:20px; left:1629px; top:37px'></div></a>
<a  href='build-epmap.php?mp=1595&a_id=52&y=1207' title='Mewlana Jalaluddin Rumi
Islam, Medieval, National, Philosophy
PER
1207-1273
MY: 0
MX: 1595'><div class=area style='position:absolute; width:18px; height:20px; left:1648px; top:37px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1765&a_id=294&y=1253' title='Amir Khusro
Medieval, Mysticism
IND
1253-1325
MY: 0
MX: 1765'><div class=area style='position:absolute; width:24px; height:20px; left:1799px; top:43px'></div></a>
<a  href='build-epmap.php?mp=1765&a_id=294&y=1253' title='Amir Khusro
Medieval, Mysticism
IND
1253-1325
MY: 0
MX: 1765'><div class=area style='position:absolute; width:24px; height:20px; left:1823px; top:43px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=705&a_id=142&y=1265' title='Dante Alighieri
Classicism, Sonnet, Christian, Vernacular, Epic, National, Medieval
ITA
1265-1321
MY: 0
MX: 705'><div class=area style='position:absolute; width:31px; height:20px; left:739px; top:44px'></div></a>
<a  href='build-epmap.php?mp=705&a_id=142&y=1265' title='Dante Alighieri
Classicism, Sonnet, Christian, Vernacular, Epic, National, Medieval
ITA
1265-1321
MY: 0
MX: 705'><div class=area style='position:absolute; width:31px; height:20px; left:770px; top:44px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=775&a_id=113&y=1340' title='Geoffrey Chaucer
Didactism, Vernacular, Children, Slavery, Laureate, Fantasy, Medieval
ENG
1340-1400
MY: -5
MX: 775'><div class=area style='position:absolute; width:31px; height:20px; left:809px; top:54px'></div></a>
<a  href='build-epmap.php?mp=775&a_id=113&y=1340' title='Geoffrey Chaucer
Didactism, Vernacular, Children, Slavery, Laureate, Fantasy, Medieval
ENG
1340-1400
MY: -5
MX: 775'><div class=area style='position:absolute; width:30px; height:20px; left:840px; top:54px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1765&a_id=100&y=1414' title='Narsinh Mehta
Bhakti, Medieval
IND
1414-1481
MY: 0
MX: 1765'><div class=area style='position:absolute; width:22px; height:20px; left:1799px; top:72px'></div></a>
<a  href='build-epmap.php?mp=1765&a_id=100&y=1414' title='Narsinh Mehta
Bhakti, Medieval
IND
1414-1481
MY: 0
MX: 1765'><div class=area style='position:absolute; width:21px; height:20px; left:1821px; top:72px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=845&a_id=213&y=1431' title='Francois Villon
Medieval
FRA
1431-1463
MY: 0
MX: 845'><div class=area style='position:absolute; width:21px; height:20px; left:879px; top:72px'></div></a>
<a  href='build-epmap.php?mp=845&a_id=213&y=1431' title='Francois Villon
Medieval
FRA
1431-1463
MY: 0
MX: 845'><div class=area style='position:absolute; width:20px; height:20px; left:900px; top:72px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1655&a_id=23&y=1440' title='Kabir
Mysticism, Bhakti, Spiritualism, Islam, Philosophy, Medieval
IND
1440-1518
MY: 0
MX: 1655'><div class=area style='position:absolute; width:19px; height:20px; left:1689px; top:81px'></div></a>
<a  href='build-epmap.php?mp=1655&a_id=23&y=1440' title='Kabir
Mysticism, Bhakti, Spiritualism, Islam, Philosophy, Medieval
IND
1440-1518
MY: 0
MX: 1655'><div class=area style='position:absolute; width:19px; height:20px; left:1708px; top:81px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1765&a_id=141&y=1478' title='Surdas
Mysticism
IND
1478-1581
MY: 0
MX: 1765'><div class=area style='position:absolute; width:24px; height:20px; left:1799px; top:100px'></div></a>
<a  href='build-epmap.php?mp=1765&a_id=141&y=1478' title='Surdas
Mysticism
IND
1478-1581
MY: 0
MX: 1765'><div class=area style='position:absolute; width:24px; height:20px; left:1823px; top:100px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1705&a_id=72&y=1498' title='Mirabai
Bhakti, Mysticism, Spiritualism
IND
1498-1546
MY: 0
MX: 1705'><div class=area style='position:absolute; width:25px; height:20px; left:1739px; top:96px'></div></a>
<a  href='build-epmap.php?mp=1705&a_id=72&y=1498' title='Mirabai
Bhakti, Mysticism, Spiritualism
IND
1498-1546
MY: 0
MX: 1705'><div class=area style='position:absolute; width:24px; height:20px; left:1764px; top:96px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=5&a_id=347&y=1517' title='Henry Howard 
Elizabethan, Renaissance
ENG
1517-1547
MY: 0
MX: 5'><div class=area style='position:absolute; width:25px; height:20px; left:39px; top:100px'></div></a>
<a  href='build-epmap.php?mp=5&a_id=347&y=1517' title='Henry Howard 
Elizabethan, Renaissance
ENG
1517-1547
MY: 0
MX: 5'><div class=area style='position:absolute; width:25px; height:20px; left:64px; top:100px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=112&a_id=201&y=1533' title='Queen Elizabeth I 
Elizabethan
ENG
1533-1603
MY: 0
MX: 112'><div class=area style='position:absolute; width:34px; height:20px; left:146px; top:116px'></div></a>
<a  href='build-epmap.php?mp=112&a_id=201&y=1533' title='Queen Elizabeth I 
Elizabethan
ENG
1533-1603
MY: 0
MX: 112'><div class=area style='position:absolute; width:34px; height:20px; left:180px; top:116px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1705&a_id=174&y=1543' title='Tulsidas
Mysticism, Spiritualism, Epic
IND
1543-1623
MY: 6
MX: 1705'><div class=area style='position:absolute; width:28px; height:20px; left:1739px; top:124px'></div></a>
<a  href='build-epmap.php?mp=1705&a_id=174&y=1543' title='Tulsidas
Mysticism, Spiritualism, Epic
IND
1543-1623
MY: 6
MX: 1705'><div class=area style='position:absolute; width:28px; height:20px; left:1767px; top:124px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=184&a_id=90&y=1552' title='Edmund Spenser
Elizabethan, Fantasy, Gothic, Laureate, Renaissance, Sonnet
ENG
1552-1599
MY: 0
MX: 184'><div class=area style='position:absolute; width:28px; height:20px; left:218px; top:119px'></div></a>
<a  href='build-epmap.php?mp=184&a_id=90&y=1552' title='Edmund Spenser
Elizabethan, Fantasy, Gothic, Laureate, Renaissance, Sonnet
ENG
1552-1599
MY: 0
MX: 184'><div class=area style='position:absolute; width:28px; height:20px; left:246px; top:119px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=303&a_id=189&y=1552' title='Walter Raleigh
Didactism, Elizabethan
ENG
1552-1618
MY: 0
MX: 303'><div class=area style='position:absolute; width:25px; height:20px; left:337px; top:123px'></div></a>
<a  href='build-epmap.php?mp=303&a_id=189&y=1552' title='Walter Raleigh
Didactism, Elizabethan
ENG
1552-1618
MY: 0
MX: 303'><div class=area style='position:absolute; width:25px; height:20px; left:362px; top:123px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=60&a_id=177&y=1554' title='Philip Sidney
Elizabethan, Renaissance, Sonnet
ENG
1554-1586
MY: 0
MX: 60'><div class=area style='position:absolute; width:24px; height:20px; left:94px; top:116px'></div></a>
<a  href='build-epmap.php?mp=60&a_id=177&y=1554' title='Philip Sidney
Elizabethan, Renaissance, Sonnet
ENG
1554-1586
MY: 0
MX: 60'><div class=area style='position:absolute; width:23px; height:20px; left:118px; top:116px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=452&a_id=186&y=1562' title='Samuel Daniel
Elizabethan, Laureate, Sonnet
ENG
1562-1620
MY: 0
MX: 452'><div class=area style='position:absolute; width:22px; height:20px; left:486px; top:125px'></div></a>
<a  href='build-epmap.php?mp=452&a_id=186&y=1562' title='Samuel Daniel
Elizabethan, Laureate, Sonnet
ENG
1562-1620
MY: 0
MX: 452'><div class=area style='position:absolute; width:21px; height:20px; left:508px; top:125px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=499&a_id=240&y=1563' title='Michael Drayton
Elizabethan, Sonnet
ENG
1563-1631
MY: 0
MX: 499'><div class=area style='position:absolute; width:26px; height:20px; left:533px; top:128px'></div></a>
<a  href='build-epmap.php?mp=499&a_id=240&y=1563' title='Michael Drayton
Elizabethan, Sonnet
ENG
1563-1631
MY: 0
MX: 499'><div class=area style='position:absolute; width:26px; height:20px; left:559px; top:128px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=357&a_id=3&y=1564' title='William Shakespeare
Blank verse, Classicism, Renaissance, Elizabethan, Didactism, Sonnet, Slavery, National, Fantasy, Homoerotism
ENG
1564-1616
MY: 0
MX: 357'><div class=area style='position:absolute; width:46px; height:20px; left:391px; top:125px'></div></a>
<a  href='build-epmap.php?mp=357&a_id=3&y=1564' title='William Shakespeare
Blank verse, Classicism, Renaissance, Elizabethan, Didactism, Sonnet, Slavery, National, Fantasy, Homoerotism
ENG
1564-1616
MY: 0
MX: 357'><div class=area style='position:absolute; width:45px; height:20px; left:437px; top:125px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=244&a_id=169&y=1564' title='Christopher Marlowe
Blank verse, Renaissance, Elizabethan, Atheism
ENG
1564-1593
MY: 0
MX: 244'><div class=area style='position:absolute; width:28px; height:20px; left:278px; top:120px'></div></a>
<a  href='build-epmap.php?mp=244&a_id=169&y=1564' title='Christopher Marlowe
Blank verse, Renaissance, Elizabethan, Atheism
ENG
1564-1593
MY: 0
MX: 244'><div class=area style='position:absolute; width:27px; height:20px; left:306px; top:120px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=575&a_id=45&y=1572' title='John Donne
Enlightenment, Metaphysical poets, Renaissance, Elizabethan, Didactism, Sonnet, Christian, Satire, Fantasy, Philosophy
ENG
1572-1631
MY: 0
MX: 575'><div class=area style='position:absolute; width:25px; height:20px; left:609px; top:130px'></div></a>
<a  href='build-epmap.php?mp=575&a_id=45&y=1572' title='John Donne
Enlightenment, Metaphysical poets, Renaissance, Elizabethan, Didactism, Sonnet, Christian, Satire, Fantasy, Philosophy
ENG
1572-1631
MY: 0
MX: 575'><div class=area style='position:absolute; width:24px; height:20px; left:634px; top:130px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=5&a_id=111&y=1572' title='Ben Jonson
Blank verse, Elizabethan, Enlightenment, Laureate, Renaissance
ENG
1572-1637
MY: 0
MX: 5'><div class=area style='position:absolute; width:25px; height:20px; left:39px; top:131px'></div></a>
<a  href='build-epmap.php?mp=5&a_id=111&y=1572' title='Ben Jonson
Blank verse, Elizabethan, Enlightenment, Laureate, Renaissance
ENG
1572-1637
MY: 0
MX: 5'><div class=area style='position:absolute; width:25px; height:20px; left:64px; top:131px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=112&a_id=86&y=1591' title='Robert Herrick
Cavalier poets, Didactism, Fantasy, Tribe of Ben
ENG
1591-1674
MY: 0
MX: 112'><div class=area style='position:absolute; width:27px; height:20px; left:146px; top:143px'></div></a>
<a  href='build-epmap.php?mp=112&a_id=86&y=1591' title='Robert Herrick
Cavalier poets, Didactism, Fantasy, Tribe of Ben
ENG
1591-1674
MY: 0
MX: 112'><div class=area style='position:absolute; width:27px; height:20px; left:173px; top:143px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=60&a_id=348&y=1592' title='Henry King

ENG
1592-1669
MY: 0
MX: 60'><div class=area style='position:absolute; width:17px; height:20px; left:94px; top:142px'></div></a>
<a  href='build-epmap.php?mp=60&a_id=348&y=1592' title='Henry King

ENG
1592-1669
MY: 0
MX: 60'><div class=area style='position:absolute; width:16px; height:20px; left:111px; top:142px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=628&a_id=92&y=1593' title='George Herbert
Christian, Devotional, Didactism, Enlightenment, Metaphysical poets, Sonnet
ENG
1593-1633
MY: 0
MX: 628'><div class=area style='position:absolute; width:32px; height:20px; left:662px; top:134px'></div></a>
<a  href='build-epmap.php?mp=628&a_id=92&y=1593' title='George Herbert
Christian, Devotional, Didactism, Enlightenment, Metaphysical poets, Sonnet
ENG
1593-1633
MY: 0
MX: 628'><div class=area style='position:absolute; width:31px; height:20px; left:694px; top:134px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=695&a_id=345&y=1595' title='Thomas Carew
Cavalier poets, Enlightenment, Metaphysical poets, Tribe of Ben
ENG
1595-1640
MY: 0
MX: 695'><div class=area style='position:absolute; width:22px; height:20px; left:729px; top:137px'></div></a>
<a  href='build-epmap.php?mp=695&a_id=345&y=1595' title='Thomas Carew
Cavalier poets, Enlightenment, Metaphysical poets, Tribe of Ben
ENG
1595-1640
MY: 0
MX: 695'><div class=area style='position:absolute; width:22px; height:20px; left:751px; top:137px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=244&a_id=63&y=1608' title='John Milton
Blank verse, Christian, Devotional, Didactism, Enlightenment, Epic, Neoclassicism, Slavery, Sonnet, Vernacular
ENG
1608-1674
MY: 0
MX: 244'><div class=area style='position:absolute; width:23px; height:20px; left:278px; top:146px'></div></a>
<a  href='build-epmap.php?mp=244&a_id=63&y=1608' title='John Milton
Blank verse, Christian, Devotional, Didactism, Enlightenment, Epic, Neoclassicism, Slavery, Sonnet, Vernacular
ENG
1608-1674
MY: 0
MX: 244'><div class=area style='position:absolute; width:23px; height:20px; left:301px; top:146px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1765&a_id=153&y=1608' title='Sant Tukaram
Mysticism, Bhakti, Spiritualism
IND
1608-1649
MY: 0
MX: 1765'><div class=area style='position:absolute; width:29px; height:20px; left:1799px; top:141px'></div></a>
<a  href='build-epmap.php?mp=1765&a_id=153&y=1608' title='Sant Tukaram
Mysticism, Bhakti, Spiritualism
IND
1608-1649
MY: 0
MX: 1765'><div class=area style='position:absolute; width:29px; height:20px; left:1828px; top:141px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=744&a_id=305&y=1609' title='John Suckling
Cavalier poets, Metaphysical poets, Tribe of Ben
ENG
1609-1642
MY: -5
MX: 744'><div class=area style='position:absolute; width:29px; height:20px; left:778px; top:138px'></div></a>
<a  href='build-epmap.php?mp=744&a_id=305&y=1609' title='John Suckling
Cavalier poets, Metaphysical poets, Tribe of Ben
ENG
1609-1642
MY: -5
MX: 744'><div class=area style='position:absolute; width:28px; height:20px; left:807px; top:138px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=303&a_id=143&y=1612' title='Anne Bradstreet
Christian
ENG/USA
1612-1672
MY: 6
MX: 303'><div class=area style='position:absolute; width:34px; height:20px; left:337px; top:149px'></div></a>
<a  href='build-epmap.php?mp=303&a_id=143&y=1612' title='Anne Bradstreet
Christian
ENG/USA
1612-1672
MY: 6
MX: 303'><div class=area style='position:absolute; width:33px; height:20px; left:371px; top:149px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=806&a_id=278&y=1612' title='Richard Crashaw
Metaphysical poets
ENG
1612-1649
MY: 0
MX: 806'><div class=area style='position:absolute; width:29px; height:20px; left:840px; top:142px'></div></a>
<a  href='build-epmap.php?mp=806&a_id=278&y=1612' title='Richard Crashaw
Metaphysical poets
ENG
1612-1649
MY: 0
MX: 806'><div class=area style='position:absolute; width:29px; height:20px; left:869px; top:142px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=184&a_id=199&y=1618' title='Richard Lovelace
Cavalier poets, Tribe of Ben
ENG
1618-1657
MY: 0
MX: 184'><div class=area style='position:absolute; width:29px; height:20px; left:218px; top:145px'></div></a>
<a  href='build-epmap.php?mp=184&a_id=199&y=1618' title='Richard Lovelace
Cavalier poets, Tribe of Ben
ENG
1618-1657
MY: 0
MX: 184'><div class=area style='position:absolute; width:28px; height:20px; left:247px; top:145px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=868&a_id=110&y=1621' title='Andrew Marvell
Enlightenment, Metaphysical poets, Vernacular
ENG
1621-1678
MY: 0
MX: 868'><div class=area style='position:absolute; width:27px; height:20px; left:902px; top:150px'></div></a>
<a  href='build-epmap.php?mp=868&a_id=110&y=1621' title='Andrew Marvell
Enlightenment, Metaphysical poets, Vernacular
ENG
1621-1678
MY: 0
MX: 868'><div class=area style='position:absolute; width:27px; height:20px; left:929px; top:150px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=991&a_id=211&y=1621' title='Henry Vaughan
Christian, Metaphysical poets
WEL
1621-1695
MY: 0
MX: 991'><div class=area style='position:absolute; width:30px; height:20px; left:1025px; top:153px'></div></a>
<a  href='build-epmap.php?mp=991&a_id=211&y=1621' title='Henry Vaughan
Christian, Metaphysical poets
WEL
1621-1695
MY: 0
MX: 991'><div class=area style='position:absolute; width:30px; height:20px; left:1055px; top:153px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1070&a_id=284&y=1631' title='John Dryden
Blank verse, Classicism, Enlightenment, Laureate, Satire
ENG
1631-1700
MY: 0
MX: 1070'><div class=area style='position:absolute; width:24px; height:20px; left:1104px; top:157px'></div></a>
<a  href='build-epmap.php?mp=1070&a_id=284&y=1631' title='John Dryden
Blank verse, Classicism, Enlightenment, Laureate, Satire
ENG
1631-1700
MY: 0
MX: 1070'><div class=area style='position:absolute; width:24px; height:20px; left:1128px; top:157px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=927&a_id=271&y=1636' title='Thomas Traherne
Christian, Metaphysical poets
ENG
1636-1674
MY: 0
MX: 927'><div class=area style='position:absolute; width:29px; height:20px; left:961px; top:152px'></div></a>
<a  href='build-epmap.php?mp=927&a_id=271&y=1636' title='Thomas Traherne
Christian, Metaphysical poets
ENG
1636-1674
MY: 0
MX: 927'><div class=area style='position:absolute; width:29px; height:20px; left:990px; top:152px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1123&a_id=310&y=1640' title='Aphra Behn
Libertine
ENG
1640-1689
MY: 4
MX: 1123'><div class=area style='position:absolute; width:19px; height:20px; left:1157px; top:158px'></div></a>
<a  href='build-epmap.php?mp=1123&a_id=310&y=1640' title='Aphra Behn
Libertine
ENG
1640-1689
MY: 4
MX: 1123'><div class=area style='position:absolute; width:18px; height:20px; left:1176px; top:158px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1709&a_id=68&y=1644' title='Matsuo Basho
Haiku
JAP
1644-1694
MY: 0
MX: 1709'><div class=area style='position:absolute; width:22px; height:20px; left:1743px; top:158px'></div></a>
<a  href='build-epmap.php?mp=1709&a_id=68&y=1644' title='Matsuo Basho
Haiku
JAP
1644-1694
MY: 0
MX: 1709'><div class=area style='position:absolute; width:22px; height:20px; left:1765px; top:158px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1165&a_id=182&y=1647' title='John Wilmot
Libertine
ENG
1647-1680
MY: 6
MX: 1165'><div class=area style='position:absolute; width:25px; height:20px; left:1199px; top:158px'></div></a>
<a  href='build-epmap.php?mp=1165&a_id=182&y=1647' title='John Wilmot
Libertine
ENG
1647-1680
MY: 6
MX: 1165'><div class=area style='position:absolute; width:24px; height:20px; left:1224px; top:158px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1219&a_id=337&y=1651' title='Sor Juana Ines de la Cruz
Enlightenment
SPA
1651-1695
MY: 0
MX: 1219'><div class=area style='position:absolute; width:17px; height:20px; left:1253px; top:160px'></div></a>
<a  href='build-epmap.php?mp=1219&a_id=337&y=1651' title='Sor Juana Ines de la Cruz
Enlightenment
SPA
1651-1695
MY: 0
MX: 1219'><div class=area style='position:absolute; width:17px; height:20px; left:1270px; top:160px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1258&a_id=246&y=1661' title='Anne Kingsmill Finch
Bipolar disorder, Enlightenment, Formalism
ENG
1661-1720
MY: 0
MX: 1258'><div class=area style='position:absolute; width:20px; height:20px; left:1292px; top:167px'></div></a>
<a  href='build-epmap.php?mp=1258&a_id=246&y=1661' title='Anne Kingsmill Finch
Bipolar disorder, Enlightenment, Formalism
ENG
1661-1720
MY: 0
MX: 1258'><div class=area style='position:absolute; width:19px; height:20px; left:1312px; top:167px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1302&a_id=358&y=1664' title='Matthew Prior

ENG
1664-1721
MY: 0
MX: 1302'><div class=area style='position:absolute; width:18px; height:20px; left:1336px; top:168px'></div></a>
<a  href='build-epmap.php?mp=1302&a_id=358&y=1664' title='Matthew Prior

ENG
1664-1721
MY: 0
MX: 1302'><div class=area style='position:absolute; width:17px; height:20px; left:1354px; top:168px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1404&a_id=129&y=1667' title='Jonathan Swift
Children, Didactism, Enlightenment, Neoclassicism, Satire
IRL
1667-1745
MY: 0
MX: 1404'><div class=area style='position:absolute; width:18px; height:20px; left:1438px; top:178px'></div></a>
<a  href='build-epmap.php?mp=1404&a_id=129&y=1667' title='Jonathan Swift
Children, Didactism, Enlightenment, Neoclassicism, Satire
IRL
1667-1745
MY: 0
MX: 1404'><div class=area style='position:absolute; width:17px; height:20px; left:1456px; top:178px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1342&a_id=301&y=1672' title='Joseph Addison

ENG
1672-1719
MY: 0
MX: 1342'><div class=area style='position:absolute; width:28px; height:20px; left:1376px; top:169px'></div></a>
<a  href='build-epmap.php?mp=1342&a_id=301&y=1672' title='Joseph Addison

ENG
1672-1719
MY: 0
MX: 1342'><div class=area style='position:absolute; width:28px; height:20px; left:1404px; top:169px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1070&a_id=91&y=1674' title='Isaac Watts
Devotional, Pantheism, Slavery
ENG
1674-1748
MY: 0
MX: 1070'><div class=area style='position:absolute; width:22px; height:20px; left:1104px; top:183px'></div></a>
<a  href='build-epmap.php?mp=1070&a_id=91&y=1674' title='Isaac Watts
Devotional, Pantheism, Slavery
ENG
1674-1748
MY: 0
MX: 1070'><div class=area style='position:absolute; width:21px; height:20px; left:1126px; top:183px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1765&a_id=316&y=1680' title='Bulleh Shah
Mysticism, Spiritualism
PAK
1680-1758
MY: 0
MX: 1765'><div class=area style='position:absolute; width:25px; height:20px; left:1799px; top:192px'></div></a>
<a  href='build-epmap.php?mp=1765&a_id=316&y=1680' title='Bulleh Shah
Mysticism, Spiritualism
PAK
1680-1758
MY: 0
MX: 1765'><div class=area style='position:absolute; width:25px; height:20px; left:1824px; top:192px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1118&a_id=50&y=1688' title='Alexander Pope
Classicism, Deism, Didactism, Enlightenment, Freemasons, Satire
ENG
1688-1744
MY: 0
MX: 1118'><div class=area style='position:absolute; width:28px; height:20px; left:1152px; top:189px'></div></a>
<a  href='build-epmap.php?mp=1118&a_id=50&y=1688' title='Alexander Pope
Classicism, Deism, Didactism, Enlightenment, Freemasons, Satire
ENG
1688-1744
MY: 0
MX: 1118'><div class=area style='position:absolute; width:27px; height:20px; left:1180px; top:189px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1178&a_id=354&y=1700' title='James Thomson
Blank verse, Classicism, Pessimism
SCO
1700-1748
MY: 0
MX: 1178'><div class=area style='position:absolute; width:31px; height:20px; left:1212px; top:198px'></div></a>
<a  href='build-epmap.php?mp=1178&a_id=354&y=1700' title='James Thomson
Blank verse, Classicism, Pessimism
SCO
1700-1748
MY: 0
MX: 1178'><div class=area style='position:absolute; width:30px; height:20px; left:1243px; top:198px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1358&a_id=315&y=1703' title='John Wesley
Methodism
ENG
1703-1791
MY: 0
MX: 1358'><div class=area style='position:absolute; width:26px; height:20px; left:1392px; top:224px'></div></a>
<a  href='build-epmap.php?mp=1358&a_id=315&y=1703' title='John Wesley
Methodism
ENG
1703-1791
MY: 0
MX: 1358'><div class=area style='position:absolute; width:26px; height:20px; left:1418px; top:224px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1285&a_id=164&y=1709' title='Samuel Johnson
Bipolar disorder, Didactism, Enlightenment, Satire
ENG
1709-1784
MY: 0
MX: 1285'><div class=area style='position:absolute; width:34px; height:20px; left:1319px; top:224px'></div></a>
<a  href='build-epmap.php?mp=1285&a_id=164&y=1709' title='Samuel Johnson
Bipolar disorder, Didactism, Enlightenment, Satire
ENG
1709-1784
MY: 0
MX: 1285'><div class=area style='position:absolute; width:34px; height:20px; left:1353px; top:224px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1070&a_id=321&y=1711' title='Jupiter Hammon

AFR/USA
1711-1800
MY: 0
MX: 1070'><div class=area style='position:absolute; width:30px; height:20px; left:1104px; top:234px'></div></a>
<a  href='build-epmap.php?mp=1070&a_id=321&y=1711' title='Jupiter Hammon

AFR/USA
1711-1800
MY: 0
MX: 1070'><div class=area style='position:absolute; width:29px; height:20px; left:1134px; top:234px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1709&a_id=225&y=1716' title='Yosa Buson
Haiku
JAP
1716-1784
MY: 0
MX: 1709'><div class=area style='position:absolute; width:22px; height:20px; left:1743px; top:227px'></div></a>
<a  href='build-epmap.php?mp=1709&a_id=225&y=1716' title='Yosa Buson
Haiku
JAP
1716-1784
MY: 0
MX: 1709'><div class=area style='position:absolute; width:22px; height:20px; left:1765px; top:227px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1245&a_id=256&y=1716' title='Thomas Gray
Bipolar disorder, Classicism, Enlightenment, Graveyard poets, Sonnet
ENG
1716-1771
MY: 0
MX: 1245'><div class=area style='position:absolute; width:18px; height:20px; left:1279px; top:220px'></div></a>
<a  href='build-epmap.php?mp=1245&a_id=256&y=1716' title='Thomas Gray
Bipolar disorder, Classicism, Enlightenment, Graveyard poets, Sonnet
ENG
1716-1771
MY: 0
MX: 1245'><div class=area style='position:absolute; width:17px; height:20px; left:1297px; top:220px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1765&a_id=192&y=1719' title='Waris Shah

PAK
1719-1790
MY: 0
MX: 1765'><div class=area style='position:absolute; width:28px; height:20px; left:1799px; top:233px'></div></a>
<a  href='build-epmap.php?mp=1765&a_id=192&y=1719' title='Waris Shah

PAK
1719-1790
MY: 0
MX: 1765'><div class=area style='position:absolute; width:27px; height:20px; left:1827px; top:233px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1217&a_id=202&y=1725' title='John Newton

ENG
1725-1807
MY: 0
MX: 1217'><div class=area style='position:absolute; width:25px; height:20px; left:1251px; top:245px'></div></a>
<a  href='build-epmap.php?mp=1217&a_id=202&y=1725' title='John Newton

ENG
1725-1807
MY: 0
MX: 1217'><div class=area style='position:absolute; width:25px; height:20px; left:1276px; top:245px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1285&a_id=159&y=1731' title='William Cowper
Enlightenment, Blank verse, Classicism, Bipolar disorder, Graveyard poets
ENG
1731-1800
MY: 4
MX: 1285'><div class=area style='position:absolute; width:26px; height:20px; left:1319px; top:249px'></div></a>
<a  href='build-epmap.php?mp=1285&a_id=159&y=1731' title='William Cowper
Enlightenment, Blank verse, Classicism, Bipolar disorder, Graveyard poets
ENG
1731-1800
MY: 4
MX: 1285'><div class=area style='position:absolute; width:25px; height:20px; left:1345px; top:249px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=906&a_id=117&y=1749' title='Johann Wolfgang von Goethe
Romanticism, Freemasons, Pantheism, Epic, Sturm und Drang, Slavery, Philosophy, National
DEU
1749-1831
MY: 11
MX: 906'><div class=area style='position:absolute; width:27px; height:20px; left:940px; top:289px'></div></a>
<a  href='build-epmap.php?mp=906&a_id=117&y=1749' title='Johann Wolfgang von Goethe
Romanticism, Freemasons, Pantheism, Epic, Sturm und Drang, Slavery, Philosophy, National
DEU
1749-1831
MY: 11
MX: 906'><div class=area style='position:absolute; width:27px; height:20px; left:967px; top:289px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=55&a_id=135&y=1749' title='Charlotte Smith
Gothic, Romanticism, Slavery, Sonnet
ENG
1749-1806
MY: 0
MX: 55'><div class=area style='position:absolute; width:27px; height:20px; left:89px; top:258px'></div></a>
<a  href='build-epmap.php?mp=55&a_id=135&y=1749' title='Charlotte Smith
Gothic, Romanticism, Slavery, Sonnet
ENG
1749-1806
MY: 0
MX: 55'><div class=area style='position:absolute; width:27px; height:20px; left:116px; top:258px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1135&a_id=67&y=1753' title='Phillis Wheatley

AFR/USA
1753-1784
MY: 0
MX: 1135'><div class=area style='position:absolute; width:32px; height:20px; left:1169px; top:248px'></div></a>
<a  href='build-epmap.php?mp=1135&a_id=67&y=1753' title='Phillis Wheatley

AFR/USA
1753-1784
MY: 0
MX: 1135'><div class=area style='position:absolute; width:31px; height:20px; left:1201px; top:248px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=310&a_id=18&y=1757' title='William Blake
Romanticism, Didactism, Mysticism, Bipolar disorder, Slavery
ENG
1757-1827
MY: 0
MX: 310'><div class=area style='position:absolute; width:22px; height:20px; left:344px; top:274px'></div></a>
<a  href='build-epmap.php?mp=310&a_id=18&y=1757' title='William Blake
Romanticism, Didactism, Mysticism, Bipolar disorder, Slavery
ENG
1757-1827
MY: 0
MX: 310'><div class=area style='position:absolute; width:22px; height:20px; left:366px; top:274px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=113&a_id=287&y=1758' title='Mary Darby Robinson
Della Cruscans, Didactism, Romanticism, Slavery
ENG
1758-1800
MY: 0
MX: 113'><div class=area style='position:absolute; width:38px; height:20px; left:147px; top:259px'></div></a>
<a  href='build-epmap.php?mp=113&a_id=287&y=1758' title='Mary Darby Robinson
Della Cruscans, Didactism, Romanticism, Slavery
ENG
1758-1800
MY: 0
MX: 113'><div class=area style='position:absolute; width:38px; height:20px; left:185px; top:259px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=5&a_id=47&y=1759' title='Robert Burns
Bipolar disorder, Didactism, Freemasons, Laureate, National, Slavery, Song, Vernacular
SCO
1759-1796
MY: 0
MX: 5'><div class=area style='position:absolute; width:22px; height:20px; left:39px; top:258px'></div></a>
<a  href='build-epmap.php?mp=5&a_id=47&y=1759' title='Robert Burns
Bipolar disorder, Didactism, Freemasons, Laureate, National, Slavery, Song, Vernacular
SCO
1759-1796
MY: 0
MX: 5'><div class=area style='position:absolute; width:22px; height:20px; left:61px; top:258px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=906&a_id=220&y=1759' title='Friedrich Schiller
Deism, Freemasons, Gothic, National, Philosophy, Romanticism, Slavery, Sturm und Drang
DEU
1759-1805
MY: 0
MX: 906'><div class=area style='position:absolute; width:26px; height:20px; left:940px; top:263px'></div></a>
<a  href='build-epmap.php?mp=906&a_id=220&y=1759' title='Friedrich Schiller
Deism, Freemasons, Gothic, National, Philosophy, Romanticism, Slavery, Sturm und Drang
DEU
1759-1805
MY: 0
MX: 906'><div class=area style='position:absolute; width:25px; height:20px; left:966px; top:263px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1358&a_id=322&y=1762' title='Andre Marie de Chenier

GRC/FRA
1762-1794
MY: -3
MX: 1358'><div class=area style='position:absolute; width:26px; height:20px; left:1392px; top:255px'></div></a>
<a  href='build-epmap.php?mp=1358&a_id=322&y=1762' title='Andre Marie de Chenier

GRC/FRA
1762-1794
MY: -3
MX: 1358'><div class=area style='position:absolute; width:26px; height:20px; left:1418px; top:255px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1709&a_id=304&y=1763' title='Kobayashi Issa
Haiku
JAP
1763-1827
MY: 0
MX: 1709'><div class=area style='position:absolute; width:16px; height:20px; left:1743px; top:277px'></div></a>
<a  href='build-epmap.php?mp=1709&a_id=304&y=1763' title='Kobayashi Issa
Haiku
JAP
1763-1827
MY: 0
MX: 1709'><div class=area style='position:absolute; width:15px; height:20px; left:1759px; top:277px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=165&a_id=359&y=1769' title='Amelia Opie
Romanticism
ENG
1769-1853
MY: 0
MX: 165'><div class=area style='position:absolute; width:17px; height:20px; left:199px; top:351px'></div></a>
<a  href='build-epmap.php?mp=165&a_id=359&y=1769' title='Amelia Opie
Romanticism
ENG
1769-1853
MY: 0
MX: 165'><div class=area style='position:absolute; width:17px; height:20px; left:216px; top:351px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=5&a_id=6&y=1770' title='William Wordsworth
Lake Poets, Romanticism, Blank verse, Sonnet, Slavery, Laureate
ENG
1770-1850
MY: 1
MX: 5'><div class=area style='position:absolute; width:42px; height:20px; left:39px; top:351px'></div></a>
<a  href='build-epmap.php?mp=5&a_id=6&y=1770' title='William Wordsworth
Lake Poets, Romanticism, Blank verse, Sonnet, Slavery, Laureate
ENG
1770-1850
MY: 1
MX: 5'><div class=area style='position:absolute; width:42px; height:20px; left:81px; top:351px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=298&a_id=335&y=1770' title='Friedrich Holderlin
Bipolar disorder, Romanticism
DEU
1770-1843
MY: 1
MX: 298'><div class=area style='position:absolute; width:29px; height:20px; left:332px; top:332px'></div></a>
<a  href='build-epmap.php?mp=298&a_id=335&y=1770' title='Friedrich Holderlin
Bipolar disorder, Romanticism
DEU
1770-1843
MY: 1
MX: 298'><div class=area style='position:absolute; width:28px; height:20px; left:361px; top:332px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=187&a_id=118&y=1771' title='Walter Scott
Romanticism, Didactism, Freemasons, Tory, History
SCO
1771-1832
MY: 0
MX: 187'><div class=area style='position:absolute; width:28px; height:20px; left:221px; top:295px'></div></a>
<a  href='build-epmap.php?mp=187&a_id=118&y=1771' title='Walter Scott
Romanticism, Didactism, Freemasons, Tory, History
SCO
1771-1832
MY: 0
MX: 187'><div class=area style='position:absolute; width:28px; height:20px; left:249px; top:295px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=906&a_id=89&y=1772' title='Samuel Taylor Coleridge
Bipolar disorder, Blank verse, Dark romanticism, Gothic, Lake Poets, Philosophy, Romanticism, Slavery
ENG
1772-1834
MY: 2
MX: 906'><div class=area style='position:absolute; width:42px; height:20px; left:940px; top:314px'></div></a>
<a  href='build-epmap.php?mp=906&a_id=89&y=1772' title='Samuel Taylor Coleridge
Bipolar disorder, Blank verse, Dark romanticism, Gothic, Lake Poets, Philosophy, Romanticism, Slavery
ENG
1772-1834
MY: 2
MX: 906'><div class=area style='position:absolute; width:41px; height:20px; left:982px; top:314px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1765&a_id=272&y=1772' title='Ho Xuan Huong

VNM
1772-1822
MY: 0
MX: 1765'><div class=area style='position:absolute; width:22px; height:20px; left:1799px; top:280px'></div></a>
<a  href='build-epmap.php?mp=1765&a_id=272&y=1772' title='Ho Xuan Huong

VNM
1772-1822
MY: 0
MX: 1765'><div class=area style='position:absolute; width:22px; height:20px; left:1821px; top:280px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=5&a_id=214&y=1774' title='Robert Southey
Lake Poets, Laureate, Romanticism, Slavery
ENG
1774-1843
MY: -2
MX: 5'><div class=area style='position:absolute; width:28px; height:20px; left:39px; top:326px'></div></a>
<a  href='build-epmap.php?mp=5&a_id=214&y=1774' title='Robert Southey
Lake Poets, Laureate, Romanticism, Slavery
ENG
1774-1843
MY: -2
MX: 5'><div class=area style='position:absolute; width:27px; height:20px; left:67px; top:326px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=98&a_id=219&y=1775' title='Charles Lamb
Blank verse, Children, Romanticism
ENG
1775-1834
MY: 0
MX: 98'><div class=area style='position:absolute; width:20px; height:20px; left:132px; top:314px'></div></a>
<a  href='build-epmap.php?mp=98&a_id=219&y=1775' title='Charles Lamb
Blank verse, Children, Romanticism
ENG
1775-1834
MY: 0
MX: 98'><div class=area style='position:absolute; width:19px; height:20px; left:152px; top:314px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=393&a_id=336&y=1775' title='Jane Austen
Gothic, Realism
ENG
1775-1817
MY: 0
MX: 393'><div class=area style='position:absolute; width:25px; height:20px; left:427px; top:279px'></div></a>
<a  href='build-epmap.php?mp=393&a_id=336&y=1775' title='Jane Austen
Gothic, Realism
ENG
1775-1817
MY: 0
MX: 393'><div class=area style='position:absolute; width:25px; height:20px; left:452px; top:279px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=98&a_id=126&y=1777' title='Thomas Campbell
Bipolar disorder, Romanticism
SCO
1777-1844
MY: 0
MX: 98'><div class=area style='position:absolute; width:31px; height:20px; left:132px; top:351px'></div></a>
<a  href='build-epmap.php?mp=98&a_id=126&y=1777' title='Thomas Campbell
Bipolar disorder, Romanticism
SCO
1777-1844
MY: 0
MX: 98'><div class=area style='position:absolute; width:30px; height:20px; left:163px; top:351px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=295&a_id=226&y=1779' title='Thomas Moore
National, Romanticism, Slavery, Song
IRL
1779-1852
MY: 0
MX: 295'><div class=area style='position:absolute; width:28px; height:20px; left:329px; top:382px'></div></a>
<a  href='build-epmap.php?mp=295&a_id=226&y=1779' title='Thomas Moore
National, Romanticism, Slavery, Song
IRL
1779-1852
MY: 0
MX: 295'><div class=area style='position:absolute; width:27px; height:20px; left:357px; top:382px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1487&a_id=303&y=1782' title='Ann Taylor
Children
ENG
1782-1866
MY: 0
MX: 1487'><div class=area style='position:absolute; width:29px; height:20px; left:1521px; top:431px'></div></a>
<a  href='build-epmap.php?mp=1487&a_id=303&y=1782' title='Ann Taylor
Children
ENG
1782-1866
MY: 0
MX: 1487'><div class=area style='position:absolute; width:28px; height:20px; left:1550px; top:431px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1487&a_id=276&y=1783' title='Jane Taylor
Children, Romanticism
ENG
1783-1824
MY: 0
MX: 1487'><div class=area style='position:absolute; width:27px; height:20px; left:1521px; top:308px'></div></a>
<a  href='build-epmap.php?mp=1487&a_id=276&y=1783' title='Jane Taylor
Children, Romanticism
ENG
1783-1824
MY: 0
MX: 1487'><div class=area style='position:absolute; width:27px; height:20px; left:1548px; top:308px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=5&a_id=160&y=1784' title='James Henry Leigh Hunt
Romanticism
ENG
1784-1859
MY: 0
MX: 5'><div class=area style='position:absolute; width:17px; height:20px; left:39px; top:419px'></div></a>
<a  href='build-epmap.php?mp=5&a_id=160&y=1784' title='James Henry Leigh Hunt
Romanticism
ENG
1784-1859
MY: 0
MX: 5'><div class=area style='position:absolute; width:17px; height:20px; left:56px; top:419px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=142&a_id=120&y=1788' title='George Gordon Byron
Bipolar disorder, Dark romanticism, Libertine, Romanticism, Slavery
ENG
1788-1824
MY: 0
MX: 142'><div class=area style='position:absolute; width:22px; height:20px; left:176px; top:320px'></div></a>
<a  href='build-epmap.php?mp=142&a_id=120&y=1788' title='George Gordon Byron
Bipolar disorder, Dark romanticism, Libertine, Romanticism, Slavery
ENG
1788-1824
MY: 0
MX: 142'><div class=area style='position:absolute; width:22px; height:20px; left:198px; top:320px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=190&a_id=15&y=1792' title='Percy Bysshe Shelley
Romanticism, Blank verse, Didactism, Sonnet, Anarchism, Bipolar disorder, Epic, Slavery, Gothic, Fantasy
ENG
1792-1822
MY: 0
MX: 190'><div class=area style='position:absolute; width:28px; height:20px; left:224px; top:326px'></div></a>
<a  href='build-epmap.php?mp=190&a_id=15&y=1792' title='Percy Bysshe Shelley
Romanticism, Blank verse, Didactism, Sonnet, Anarchism, Bipolar disorder, Epic, Slavery, Gothic, Fantasy
ENG
1792-1822
MY: 0
MX: 190'><div class=area style='position:absolute; width:28px; height:20px; left:252px; top:326px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=393&a_id=77&y=1793' title='John Clare
Bipolar disorder, Peasant, Romanticism, Sonnet
ENG
1793-1864
MY: 1
MX: 393'><div class=area style='position:absolute; width:19px; height:20px; left:427px; top:468px'></div></a>
<a  href='build-epmap.php?mp=393&a_id=77&y=1793' title='John Clare
Bipolar disorder, Peasant, Romanticism, Sonnet
ENG
1793-1864
MY: 1
MX: 393'><div class=area style='position:absolute; width:18px; height:20px; left:446px; top:468px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=205&a_id=260&y=1793' title='Felicia Dorothea Hemans
Romanticism
ENG
1793-1835
MY: 0
MX: 205'><div class=area style='position:absolute; width:28px; height:20px; left:239px; top:369px'></div></a>
<a  href='build-epmap.php?mp=205&a_id=260&y=1793' title='Felicia Dorothea Hemans
Romanticism
ENG
1793-1835
MY: 0
MX: 205'><div class=area style='position:absolute; width:27px; height:20px; left:267px; top:369px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=265&a_id=218&y=1794' title='William Cullen Bryant
Fireside poets, Romanticism
USA
1794-1878
MY: 0
MX: 265'><div class=area style='position:absolute; width:23px; height:20px; left:299px; top:505px'></div></a>
<a  href='build-epmap.php?mp=265&a_id=218&y=1794' title='William Cullen Bryant
Fireside poets, Romanticism
USA
1794-1878
MY: 0
MX: 265'><div class=area style='position:absolute; width:22px; height:20px; left:322px; top:505px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=251&a_id=13&y=1795' title='John Keats
Romanticism, Agnosticism, Sonnet, Bipolar disorder, Epic, Gothic
ENG
1795-1821
MY: 0
MX: 251'><div class=area style='position:absolute; width:22px; height:20px; left:285px; top:332px'></div></a>
<a  href='build-epmap.php?mp=251&a_id=13&y=1795' title='John Keats
Romanticism, Agnosticism, Sonnet, Bipolar disorder, Epic, Gothic
ENG
1795-1821
MY: 0
MX: 251'><div class=area style='position:absolute; width:21px; height:20px; left:307px; top:332px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=170&a_id=81&y=1795' title='John Hamilton Reynolds
Romanticism
ENG
1795-1852
MY: 0
MX: 170'><div class=area style='position:absolute; width:31px; height:20px; left:204px; top:431px'></div></a>
<a  href='build-epmap.php?mp=170&a_id=81&y=1795' title='John Hamilton Reynolds
Romanticism
ENG
1795-1852
MY: 0
MX: 170'><div class=area style='position:absolute; width:30px; height:20px; left:235px; top:431px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=5&a_id=183&y=1797' title='Heinrich Heine
Romanticism
DEU
1797-1856
MY: 0
MX: 5'><div class=area style='position:absolute; width:20px; height:20px; left:39px; top:449px'></div></a>
<a  href='build-epmap.php?mp=5&a_id=183&y=1797' title='Heinrich Heine
Romanticism
DEU
1797-1856
MY: 0
MX: 5'><div class=area style='position:absolute; width:20px; height:20px; left:59px; top:449px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=906&a_id=285&y=1798' title='Giacomo Leopardi
Atheism, National, Pessimism, Philosophy, Romanticism
ITA
1798-1837
MY: 0
MX: 906'><div class=area style='position:absolute; width:28px; height:20px; left:940px; top:394px'></div></a>
<a  href='build-epmap.php?mp=906&a_id=285&y=1798' title='Giacomo Leopardi
Atheism, National, Pessimism, Philosophy, Romanticism
ITA
1798-1837
MY: 0
MX: 906'><div class=area style='position:absolute; width:28px; height:20px; left:968px; top:394px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=393&a_id=83&y=1799' title='Alexander Pushkin
Agnosticism, Bipolar disorder, Blank verse, Fantasy, Freemasons, Golden age, National, Realism, Romanticism
RUS
1799-1837
MY: 0
MX: 393'><div class=area style='position:absolute; width:29px; height:20px; left:427px; top:394px'></div></a>
<a  href='build-epmap.php?mp=393&a_id=83&y=1799' title='Alexander Pushkin
Agnosticism, Bipolar disorder, Blank verse, Fantasy, Freemasons, Golden age, National, Realism, Romanticism
RUS
1799-1837
MY: 0
MX: 393'><div class=area style='position:absolute; width:28px; height:20px; left:456px; top:394px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=245&a_id=200&y=1799' title='Thomas Hood
Romanticism
ENG
1799-1845
MY: 0
MX: 245'><div class=area style='position:absolute; width:19px; height:20px; left:279px; top:419px'></div></a>
<a  href='build-epmap.php?mp=245&a_id=200&y=1799' title='Thomas Hood
Romanticism
ENG
1799-1845
MY: 0
MX: 245'><div class=area style='position:absolute; width:18px; height:20px; left:298px; top:419px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=295&a_id=343&y=1800' title='France Preseren
National, Romanticism
SVN
1800-1849
MY: 0
MX: 295'><div class=area style='position:absolute; width:30px; height:20px; left:329px; top:437px'></div></a>
<a  href='build-epmap.php?mp=295&a_id=343&y=1800' title='France Preseren
National, Romanticism
SVN
1800-1849
MY: 0
MX: 295'><div class=area style='position:absolute; width:29px; height:20px; left:359px; top:437px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=95&a_id=138&y=1802' title='Victor Hugo
Romanticism, Didactism, Vernacular, Deism, Bipolar disorder, Slavery, National, Fantasy
FRA
1802-1885
MY: 0
MX: 95'><div class=area style='position:absolute; width:19px; height:20px; left:129px; top:554px'></div></a>
<a  href='build-epmap.php?mp=95&a_id=138&y=1802' title='Victor Hugo
Romanticism, Didactism, Vernacular, Deism, Bipolar disorder, Slavery, National, Fantasy
FRA
1802-1885
MY: 0
MX: 95'><div class=area style='position:absolute; width:18px; height:20px; left:148px; top:554px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=95&a_id=253&y=1802' title='Letitia Elizabeth Landon
Romanticism
ENG
1802-1838
MY: 0
MX: 95'><div class=area style='position:absolute; width:25px; height:20px; left:129px; top:406px'></div></a>
<a  href='build-epmap.php?mp=95&a_id=253&y=1802' title='Letitia Elizabeth Landon
Romanticism
ENG
1802-1838
MY: 0
MX: 95'><div class=area style='position:absolute; width:24px; height:20px; left:154px; top:406px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=265&a_id=79&y=1803' title='Ralph Waldo Emerson
Didactism, Fireside poets, Mysticism, Pantheism, Philosophy, Romanticism, Transcendentalism
USA
1803-1882
MY: -3
MX: 265'><div class=area style='position:absolute; width:31px; height:20px; left:299px; top:529px'></div></a>
<a  href='build-epmap.php?mp=265&a_id=79&y=1803' title='Ralph Waldo Emerson
Didactism, Fireside poets, Mysticism, Pantheism, Philosophy, Romanticism, Transcendentalism
USA
1803-1882
MY: -3
MX: 265'><div class=area style='position:absolute; width:31px; height:20px; left:330px; top:529px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=175&a_id=238&y=1803' title='Fyodor Ivanovich Tyutchev
Christian, Golden age, Philosophy, Romanticism
RUS
1803-1873
MY: 0
MX: 175'><div class=area style='position:absolute; width:30px; height:20px; left:209px; top:517px'></div></a>
<a  href='build-epmap.php?mp=175&a_id=238&y=1803' title='Fyodor Ivanovich Tyutchev
Christian, Golden age, Philosophy, Romanticism
RUS
1803-1873
MY: 0
MX: 175'><div class=area style='position:absolute; width:30px; height:20px; left:239px; top:517px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1487&a_id=313&y=1805' title='Hans Christian Andersen
Children, Romanticism
DNK
1805-1875
MY: 0
MX: 1487'><div class=area style='position:absolute; width:32px; height:20px; left:1521px; top:529px'></div></a>
<a  href='build-epmap.php?mp=1487&a_id=313&y=1805' title='Hans Christian Andersen
Children, Romanticism
DNK
1805-1875
MY: 0
MX: 1487'><div class=area style='position:absolute; width:32px; height:20px; left:1553px; top:529px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=5&a_id=43&y=1806' title='Elizabeth Barrett Browning
Christian, Romanticism, Sonnet, Spasmodic, Victorian
ENG
1806-1861
MY: 0
MX: 5'><div class=area style='position:absolute; width:40px; height:20px; left:39px; top:492px'></div></a>
<a  href='build-epmap.php?mp=5&a_id=43&y=1806' title='Elizabeth Barrett Browning
Christian, Romanticism, Sonnet, Spasmodic, Victorian
ENG
1806-1861
MY: 0
MX: 5'><div class=area style='position:absolute; width:40px; height:20px; left:79px; top:492px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=265&a_id=16&y=1807' title='Henry Wadsworth Longfellow
Didactism, Fireside poets, Romanticism, Spasmodic, Vernacular, Victorian
USA
1807-1882
MY: -1
MX: 265'><div class=area style='position:absolute; width:40px; height:20px; left:299px; top:554px'></div></a>
<a  href='build-epmap.php?mp=265&a_id=16&y=1807' title='Henry Wadsworth Longfellow
Didactism, Fireside poets, Romanticism, Spasmodic, Vernacular, Victorian
USA
1807-1882
MY: -1
MX: 265'><div class=area style='position:absolute; width:39px; height:20px; left:339px; top:554px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=265&a_id=84&y=1807' title='John Greenleaf Whittier
Christian, Fantasy, Fireside poets, Slavery, Victorian
USA
1807-1892
MY: -2
MX: 265'><div class=area style='position:absolute; width:27px; height:20px; left:299px; top:579px'></div></a>
<a  href='build-epmap.php?mp=265&a_id=84&y=1807' title='John Greenleaf Whittier
Christian, Fantasy, Fireside poets, Slavery, Victorian
USA
1807-1892
MY: -2
MX: 265'><div class=area style='position:absolute; width:27px; height:20px; left:326px; top:579px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=733&a_id=248&y=1808' title='Caroline Elizabeth Sarah Norton
Victorian
ENG
1808-1877
MY: -9
MX: 733'><div class=area style='position:absolute; width:23px; height:20px; left:767px; top:492px'></div></a>
<a  href='build-epmap.php?mp=733&a_id=248&y=1808' title='Caroline Elizabeth Sarah Norton
Victorian
ENG
1808-1877
MY: -9
MX: 733'><div class=area style='position:absolute; width:22px; height:20px; left:790px; top:492px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=95&a_id=7&y=1809' title='Edgar Allan Poe
Romanticism, Victorian, Dark romanticism, Bipolar disorder, Gothic, Fantasy
USA
1809-1849
MY: 0
MX: 95'><div class=area style='position:absolute; width:17px; height:20px; left:129px; top:462px'></div></a>
<a  href='build-epmap.php?mp=95&a_id=7&y=1809' title='Edgar Allan Poe
Romanticism, Victorian, Dark romanticism, Bipolar disorder, Gothic, Fantasy
USA
1809-1849
MY: 0
MX: 95'><div class=area style='position:absolute; width:16px; height:20px; left:146px; top:462px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=5&a_id=14&y=1809' title='Alfred Lord Tennyson
Spasmodic, Victorian, Didactism, Bipolar disorder, War, Laureate, Fantasy
ENG
1809-1892
MY: 0
MX: 5'><div class=area style='position:absolute; width:35px; height:20px; left:39px; top:597px'></div></a>
<a  href='build-epmap.php?mp=5&a_id=14&y=1809' title='Alfred Lord Tennyson
Spasmodic, Victorian, Didactism, Bipolar disorder, War, Laureate, Fantasy
ENG
1809-1892
MY: 0
MX: 5'><div class=area style='position:absolute; width:34px; height:20px; left:74px; top:597px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=265&a_id=125&y=1809' title='Oliver Wendell Holmes
Fireside poets, Humour, Victorian
USA
1809-1894
MY: 0
MX: 265'><div class=area style='position:absolute; width:26px; height:20px; left:299px; top:603px'></div></a>
<a  href='build-epmap.php?mp=265&a_id=125&y=1809' title='Oliver Wendell Holmes
Fireside poets, Humour, Victorian
USA
1809-1894
MY: 0
MX: 265'><div class=area style='position:absolute; width:25px; height:20px; left:325px; top:603px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=826&a_id=208&y=1809' title='Abraham Lincoln
Deism, Didactism, Slavery
USA
1809-1865
MY: 0
MX: 826'><div class=area style='position:absolute; width:24px; height:20px; left:860px; top:511px'></div></a>
<a  href='build-epmap.php?mp=826&a_id=208&y=1809' title='Abraham Lincoln
Deism, Didactism, Slavery
USA
1809-1865
MY: 0
MX: 826'><div class=area style='position:absolute; width:24px; height:20px; left:884px; top:511px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=565&a_id=367&y=1811' title='Theophile Gautier
Decadents, Romanticism
FRA
1811-1872
MY: -1
MX: 565'><div class=area style='position:absolute; width:25px; height:20px; left:599px; top:536px'></div></a>
<a  href='build-epmap.php?mp=565&a_id=367&y=1811' title='Theophile Gautier
Decadents, Romanticism
FRA
1811-1872
MY: -1
MX: 565'><div class=area style='position:absolute; width:25px; height:20px; left:624px; top:536px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=733&a_id=37&y=1812' title='Robert Browning
History, Humour, Victorian
ENG
1812-1889
MY: -13
MX: 733'><div class=area style='position:absolute; width:41px; height:20px; left:767px; top:517px'></div></a>
<a  href='build-epmap.php?mp=733&a_id=37&y=1812' title='Robert Browning
History, Humour, Victorian
ENG
1812-1889
MY: -13
MX: 733'><div class=area style='position:absolute; width:40px; height:20px; left:808px; top:517px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1572&a_id=82&y=1812' title='Edward Lear
Children, Humour, Nonsense, Victorian
ENG
1812-1888
MY: 0
MX: 1572'><div class=area style='position:absolute; width:19px; height:20px; left:1606px; top:591px'></div></a>
<a  href='build-epmap.php?mp=1572&a_id=82&y=1812' title='Edward Lear
Children, Humour, Nonsense, Victorian
ENG
1812-1888
MY: 0
MX: 1572'><div class=area style='position:absolute; width:18px; height:20px; left:1625px; top:591px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=393&a_id=103&y=1812' title='Charles Dickens
Children, Didactism, Fantasy, Gothic, Realism, Satire, Victorian
ENG
1812-1870
MY: 0
MX: 393'><div class=area style='position:absolute; width:27px; height:20px; left:427px; top:536px'></div></a>
<a  href='build-epmap.php?mp=393&a_id=103&y=1812' title='Charles Dickens
Children, Didactism, Fantasy, Gothic, Realism, Satire, Victorian
ENG
1812-1870
MY: 0
MX: 393'><div class=area style='position:absolute; width:27px; height:20px; left:454px; top:536px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=393&a_id=371&y=1814' title='Mikhail Lermontov
Golden age, Realism, Romanticism
RUS
1814-1841
MY: -3
MX: 393'><div class=area style='position:absolute; width:34px; height:20px; left:427px; top:437px'></div></a>
<a  href='build-epmap.php?mp=393&a_id=371&y=1814' title='Mikhail Lermontov
Golden age, Realism, Romanticism
RUS
1814-1841
MY: -3
MX: 393'><div class=area style='position:absolute; width:33px; height:20px; left:461px; top:437px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=95&a_id=217&y=1816' title='Charlotte Bronte
Gothic, Romanticism, Victorian
ENG
1816-1855
MY: 1
MX: 95'><div class=area style='position:absolute; width:29px; height:20px; left:129px; top:511px'></div></a>
<a  href='build-epmap.php?mp=95&a_id=217&y=1816' title='Charlotte Bronte
Gothic, Romanticism, Victorian
ENG
1816-1855
MY: 1
MX: 95'><div class=area style='position:absolute; width:29px; height:20px; left:158px; top:511px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=488&a_id=107&y=1817' title='Henry David Thoreau
Didactism, Pantheism, Philosophy, Sage writers, Slavery, Transcendentalism
USA
1817-1862
MY: 0
MX: 488'><div class=area style='position:absolute; width:31px; height:20px; left:522px; top:529px'></div></a>
<a  href='build-epmap.php?mp=488&a_id=107&y=1817' title='Henry David Thoreau
Didactism, Pantheism, Philosophy, Sage writers, Slavery, Transcendentalism
USA
1817-1862
MY: 0
MX: 488'><div class=area style='position:absolute; width:30px; height:20px; left:553px; top:529px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=175&a_id=234&y=1817' title='Aleksey Konstantinovich Tolstoy
Gothic, Romanticism
RUS
1817-1875
MY: 0
MX: 175'><div class=area style='position:absolute; width:25px; height:20px; left:209px; top:566px'></div></a>
<a  href='build-epmap.php?mp=175&a_id=234&y=1817' title='Aleksey Konstantinovich Tolstoy
Gothic, Romanticism
RUS
1817-1875
MY: 0
MX: 175'><div class=area style='position:absolute; width:24px; height:20px; left:234px; top:566px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=95&a_id=80&y=1818' title='Emily Jane Bronte
Gothic, Romanticism, Victorian
ENG
1818-1848
MY: 0
MX: 95'><div class=area style='position:absolute; width:31px; height:20px; left:129px; top:486px'></div></a>
<a  href='build-epmap.php?mp=95&a_id=80&y=1818' title='Emily Jane Bronte
Gothic, Romanticism, Victorian
ENG
1818-1848
MY: 0
MX: 95'><div class=area style='position:absolute; width:31px; height:20px; left:160px; top:486px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1001&a_id=188&y=1818' title='Cecil Frances Alexander
Christian
IRL
1818-1895
MY: 0
MX: 1001'><div class=area style='position:absolute; width:34px; height:20px; left:1035px; top:634px'></div></a>
<a  href='build-epmap.php?mp=1001&a_id=188&y=1818' title='Cecil Frances Alexander
Christian
IRL
1818-1895
MY: 0
MX: 1001'><div class=area style='position:absolute; width:34px; height:20px; left:1069px; top:634px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=486&a_id=10&y=1819' title='Walt Whitman
Humanism, Realism, Transcendentalism, Free verse, Didactism, Deism, Pantheism, Bipolar disorder, War, Slavery, National, Fantasy, Homoerotism
USA
1819-1892
MY: 0
MX: 486'><div class=area style='position:absolute; width:33px; height:20px; left:520px; top:628px'></div></a>
<a  href='build-epmap.php?mp=486&a_id=10&y=1819' title='Walt Whitman
Humanism, Realism, Transcendentalism, Free verse, Didactism, Deism, Pantheism, Bipolar disorder, War, Slavery, National, Fantasy, Homoerotism
USA
1819-1892
MY: 0
MX: 486'><div class=area style='position:absolute; width:32px; height:20px; left:553px; top:628px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=733&a_id=116&y=1819' title='Thomas Dunn English

USA
1819-1902
MY: -7
MX: 733'><div class=area style='position:absolute; width:25px; height:20px; left:767px; top:616px'></div></a>
<a  href='build-epmap.php?mp=733&a_id=116&y=1819' title='Thomas Dunn English

USA
1819-1902
MY: -7
MX: 733'><div class=area style='position:absolute; width:25px; height:20px; left:792px; top:616px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=5&a_id=245&y=1819' title='Arthur Hugh Clough
Spasmodic, Victorian
ENG
1819-1861
MY: 0
MX: 5'><div class=area style='position:absolute; width:24px; height:20px; left:39px; top:529px'></div></a>
<a  href='build-epmap.php?mp=5&a_id=245&y=1819' title='Arthur Hugh Clough
Spasmodic, Victorian
ENG
1819-1861
MY: 0
MX: 5'><div class=area style='position:absolute; width:23px; height:20px; left:63px; top:529px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1487&a_id=265&y=1819' title='Charles Kingsley
Children
ENG
1819-1875
MY: 0
MX: 1487'><div class=area style='position:absolute; width:29px; height:20px; left:1521px; top:573px'></div></a>
<a  href='build-epmap.php?mp=1487&a_id=265&y=1819' title='Charles Kingsley
Children
ENG
1819-1875
MY: 0
MX: 1487'><div class=area style='position:absolute; width:28px; height:20px; left:1550px; top:573px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=265&a_id=277&y=1819' title='James Russell Lowell
Bipolar disorder, Fireside poets, Romanticism, Slavery, Vernacular
USA
1819-1891
MY: 1
MX: 265'><div class=area style='position:absolute; width:28px; height:20px; left:299px; top:628px'></div></a>
<a  href='build-epmap.php?mp=265&a_id=277&y=1819' title='James Russell Lowell
Bipolar disorder, Fireside poets, Romanticism, Slavery, Vernacular
USA
1819-1891
MY: 1
MX: 265'><div class=area style='position:absolute; width:27px; height:20px; left:327px; top:628px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=95&a_id=314&y=1819' title='Herman Melville
Dark romanticism, Philosophy
USA
1819-1891
MY: 0
MX: 95'><div class=area style='position:absolute; width:25px; height:20px; left:129px; top:622px'></div></a>
<a  href='build-epmap.php?mp=95&a_id=314&y=1819' title='Herman Melville
Dark romanticism, Philosophy
USA
1819-1891
MY: 0
MX: 95'><div class=area style='position:absolute; width:24px; height:20px; left:154px; top:622px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=393&a_id=365&y=1819' title='George Eliot
Atheism, Realism, Victorian
ENG
1819-1880
MY: -1
MX: 393'><div class=area style='position:absolute; width:24px; height:20px; left:427px; top:585px'></div></a>
<a  href='build-epmap.php?mp=393&a_id=365&y=1819' title='George Eliot
Atheism, Realism, Victorian
ENG
1819-1880
MY: -1
MX: 393'><div class=area style='position:absolute; width:23px; height:20px; left:451px; top:585px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=393&a_id=133&y=1820' title='Anne Bronte
Realism, Victorian, Christian, Feminism
ENG
1820-1849
MY: 0
MX: 393'><div class=area style='position:absolute; width:30px; height:20px; left:427px; top:499px'></div></a>
<a  href='build-epmap.php?mp=393&a_id=133&y=1820' title='Anne Bronte
Realism, Victorian, Christian, Feminism
ENG
1820-1849
MY: 0
MX: 393'><div class=area style='position:absolute; width:30px; height:20px; left:457px; top:499px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=175&a_id=374&y=1820' title='Afanasy Fet
Golden age, Romanticism
RUS
1820-1892
MY: 0
MX: 175'><div class=area style='position:absolute; width:13px; height:20px; left:209px; top:628px'></div></a>
<a  href='build-epmap.php?mp=175&a_id=374&y=1820' title='Afanasy Fet
Golden age, Romanticism
RUS
1820-1892
MY: 0
MX: 175'><div class=area style='position:absolute; width:13px; height:20px; left:222px; top:628px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=565&a_id=60&y=1821' title='Charles Baudelaire
Bipolar disorder, Dark romanticism, Decadents, Free verse, Impressionism, Libertine, Modernism, National, Romanticism, Sonnet, Symbolism
FRA
1821-1867
MY: 1
MX: 565'><div class=area style='position:absolute; width:34px; height:20px; left:599px; top:560px'></div></a>
<a  href='build-epmap.php?mp=565&a_id=60&y=1821' title='Charles Baudelaire
Bipolar disorder, Dark romanticism, Decadents, Free verse, Impressionism, Libertine, Modernism, National, Romanticism, Sonnet, Symbolism
FRA
1821-1867
MY: 1
MX: 565'><div class=area style='position:absolute; width:34px; height:20px; left:633px; top:560px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=393&a_id=373&y=1821' title='Nikolay Nekrasov
Golden age, Peasant
RUS
1821-1878
MY: 3
MX: 393'><div class=area style='position:absolute; width:31px; height:20px; left:427px; top:609px'></div></a>
<a  href='build-epmap.php?mp=393&a_id=373&y=1821' title='Nikolay Nekrasov
Golden age, Peasant
RUS
1821-1878
MY: 3
MX: 393'><div class=area style='position:absolute; width:30px; height:20px; left:458px; top:609px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=826&a_id=102&y=1822' title='Matthew Arnold
Didactism, Pessimism, Sage writers, Victorian
ENG
1822-1888
MY: -1
MX: 826'><div class=area style='position:absolute; width:25px; height:20px; left:860px; top:616px'></div></a>
<a  href='build-epmap.php?mp=826&a_id=102&y=1822' title='Matthew Arnold
Didactism, Pessimism, Sage writers, Victorian
ENG
1822-1888
MY: -1
MX: 826'><div class=area style='position:absolute; width:25px; height:20px; left:885px; top:616px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=648&a_id=216&y=1823' title='Coventry Patmore
Victorian
ENG
1823-1896
MY: -1
MX: 648'><div class=area style='position:absolute; width:28px; height:20px; left:682px; top:646px'></div></a>
<a  href='build-epmap.php?mp=648&a_id=216&y=1823' title='Coventry Patmore
Victorian
ENG
1823-1896
MY: -1
MX: 648'><div class=area style='position:absolute; width:28px; height:20px; left:710px; top:646px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1487&a_id=332&y=1823' title='William Brighty Rands
Children, Victorian
ENG
1823-1882
MY: 0
MX: 1487'><div class=area style='position:absolute; width:22px; height:20px; left:1521px; top:609px'></div></a>
<a  href='build-epmap.php?mp=1487&a_id=332&y=1823' title='William Brighty Rands
Children, Victorian
ENG
1823-1882
MY: 0
MX: 1487'><div class=area style='position:absolute; width:22px; height:20px; left:1543px; top:609px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1487&a_id=228&y=1824' title='George MacDonald
Children, Christian, Fantasy
SCO
1824-1905
MY: 0
MX: 1487'><div class=area style='position:absolute; width:36px; height:20px; left:1521px; top:683px'></div></a>
<a  href='build-epmap.php?mp=1487&a_id=228&y=1824' title='George MacDonald
Children, Christian, Fantasy
SCO
1824-1905
MY: 0
MX: 1487'><div class=area style='position:absolute; width:36px; height:20px; left:1557px; top:683px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=733&a_id=293&y=1824' title='William Allingham
Victorian
IRL
1824-1889
MY: -11
MX: 733'><div class=area style='position:absolute; width:33px; height:20px; left:767px; top:566px'></div></a>
<a  href='build-epmap.php?mp=733&a_id=293&y=1824' title='William Allingham
Victorian
IRL
1824-1889
MY: -11
MX: 733'><div class=area style='position:absolute; width:33px; height:20px; left:800px; top:566px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1399&a_id=136&y=1825' title='William Topaz McGonagall
Humour, Victorian
SCO
1825-1902
MY: 0
MX: 1399'><div class=area style='position:absolute; width:38px; height:20px; left:1433px; top:677px'></div></a>
<a  href='build-epmap.php?mp=1399&a_id=136&y=1825' title='William Topaz McGonagall
Humour, Victorian
SCO
1825-1902
MY: 0
MX: 1399'><div class=area style='position:absolute; width:38px; height:20px; left:1471px; top:677px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=733&a_id=361&y=1826' title='Dinah Maria Mulock
Victorian
ENG
1826-1887
MY: -15
MX: 733'><div class=area style='position:absolute; width:25px; height:20px; left:767px; top:542px'></div></a>
<a  href='build-epmap.php?mp=733&a_id=361&y=1826' title='Dinah Maria Mulock
Victorian
ENG
1826-1887
MY: -15
MX: 733'><div class=area style='position:absolute; width:24px; height:20px; left:792px; top:542px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=733&a_id=296&y=1827' title='James McIntyre

CAN
1827-1906
MY: -5
MX: 733'><div class=area style='position:absolute; width:29px; height:20px; left:767px; top:665px'></div></a>
<a  href='build-epmap.php?mp=733&a_id=296&y=1827' title='James McIntyre

CAN
1827-1906
MY: -5
MX: 733'><div class=area style='position:absolute; width:28px; height:20px; left:796px; top:665px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=648&a_id=101&y=1828' title='Dante Gabriel Rossetti
Pre-Raphaelite Brotherhood, Victorian
ENG
1828-1882
MY: 0
MX: 648'><div class=area style='position:absolute; width:34px; height:20px; left:682px; top:622px'></div></a>
<a  href='build-epmap.php?mp=648&a_id=101&y=1828' title='Dante Gabriel Rossetti
Pre-Raphaelite Brotherhood, Victorian
ENG
1828-1882
MY: 0
MX: 648'><div class=area style='position:absolute; width:34px; height:20px; left:716px; top:622px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=733&a_id=244&y=1828' title='George Meredith
Victorian
ENG
1828-1909
MY: 1
MX: 733'><div class=area style='position:absolute; width:29px; height:20px; left:767px; top:714px'></div></a>
<a  href='build-epmap.php?mp=733&a_id=244&y=1828' title='George Meredith
Victorian
ENG
1828-1909
MY: 1
MX: 733'><div class=area style='position:absolute; width:28px; height:20px; left:796px; top:714px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=826&a_id=5&y=1830' title='Emily Dickinson
Didactism, Spiritualism, Christian, Bipolar disorder, Difficult, National, Fantasy, Homoerotism
USA
1830-1886
MY: 1
MX: 826'><div class=area style='position:absolute; width:34px; height:20px; left:860px; top:646px'></div></a>
<a  href='build-epmap.php?mp=826&a_id=5&y=1830' title='Emily Dickinson
Didactism, Spiritualism, Christian, Bipolar disorder, Difficult, National, Fantasy, Homoerotism
USA
1830-1886
MY: 1
MX: 826'><div class=area style='position:absolute; width:34px; height:20px; left:894px; top:646px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=648&a_id=51&y=1830' title='Christina Georgina Rossetti
Christian, Free verse, Pre-Raphaelite Brotherhood, Sonnet, Speculative, Spiritualism, Victorian
ENG
1830-1894
MY: 1
MX: 648'><div class=area style='position:absolute; width:35px; height:20px; left:682px; top:671px'></div></a>
<a  href='build-epmap.php?mp=648&a_id=51&y=1830' title='Christina Georgina Rossetti
Christian, Free verse, Pre-Raphaelite Brotherhood, Sonnet, Speculative, Spiritualism, Victorian
ENG
1830-1894
MY: 1
MX: 648'><div class=area style='position:absolute; width:34px; height:20px; left:717px; top:671px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1572&a_id=65&y=1832' title='Lewis Carroll
Children, Deism, Neoromanticism, Nonsense, Victorian
ENG
1832-1898
MY: 0
MX: 1572'><div class=area style='position:absolute; width:22px; height:20px; left:1606px; top:683px'></div></a>
<a  href='build-epmap.php?mp=1572&a_id=65&y=1832' title='Lewis Carroll
Children, Deism, Neoromanticism, Nonsense, Victorian
ENG
1832-1898
MY: 0
MX: 1572'><div class=area style='position:absolute; width:22px; height:20px; left:1628px; top:683px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1487&a_id=203&y=1832' title='Louisa May Alcott
Transcendentalism, Children, Slavery, Feminism
USA
1832-1888
MY: 0
MX: 1487'><div class=area style='position:absolute; width:22px; height:20px; left:1521px; top:653px'></div></a>
<a  href='build-epmap.php?mp=1487&a_id=203&y=1832' title='Louisa May Alcott
Transcendentalism, Children, Slavery, Feminism
USA
1832-1888
MY: 0
MX: 1487'><div class=area style='position:absolute; width:21px; height:20px; left:1543px; top:653px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1085&a_id=323&y=1833' title='Adam Lindsay Gordon
Bipolar disorder, Committed suicide, National
AUS
1833-1870
MY: 2
MX: 1085'><div class=area style='position:absolute; width:25px; height:20px; left:1119px; top:616px'></div></a>
<a  href='build-epmap.php?mp=1085&a_id=323&y=1833' title='Adam Lindsay Gordon
Bipolar disorder, Committed suicide, National
AUS
1833-1870
MY: 2
MX: 1085'><div class=area style='position:absolute; width:24px; height:20px; left:1144px; top:616px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=648&a_id=157&y=1834' title='William Morris
Pre-Raphaelite Brotherhood, Freemasons, Fantasy
ENG
1834-1896
MY: 2
MX: 648'><div class=area style='position:absolute; width:22px; height:20px; left:682px; top:696px'></div></a>
<a  href='build-epmap.php?mp=648&a_id=157&y=1834' title='William Morris
Pre-Raphaelite Brotherhood, Freemasons, Fantasy
ENG
1834-1896
MY: 2
MX: 648'><div class=area style='position:absolute; width:21px; height:20px; left:704px; top:696px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=733&a_id=121&y=1835' title='Alfred Austin
Laureate, Victorian
ENG
1835-1913
MY: 9
MX: 733'><div class=area style='position:absolute; width:23px; height:20px; left:767px; top:794px'></div></a>
<a  href='build-epmap.php?mp=733&a_id=121&y=1835' title='Alfred Austin
Laureate, Victorian
ENG
1835-1913
MY: 9
MX: 733'><div class=area style='position:absolute; width:23px; height:20px; left:790px; top:794px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=393&a_id=210&y=1835' title='Mark Twain
Victorian, Didactism, Deism, Children, Realism, Satire, Humour, Vernacular
USA
1835-1910
MY: 0
MX: 393'><div class=area style='position:absolute; width:21px; height:20px; left:427px; top:733px'></div></a>
<a  href='build-epmap.php?mp=393&a_id=210&y=1835' title='Mark Twain
Victorian, Didactism, Deism, Children, Realism, Satire, Humour, Vernacular
USA
1835-1910
MY: 0
MX: 393'><div class=area style='position:absolute; width:20px; height:20px; left:448px; top:733px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1399&a_id=255&y=1836' title='William Schwenck Gilbert
Humour
ENG
1836-1911
MY: -2
MX: 1399'><div class=area style='position:absolute; width:23px; height:20px; left:1433px; top:727px'></div></a>
<a  href='build-epmap.php?mp=1399&a_id=255&y=1836' title='William Schwenck Gilbert
Humour
ENG
1836-1911
MY: -2
MX: 1399'><div class=area style='position:absolute; width:22px; height:20px; left:1456px; top:727px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=648&a_id=109&y=1837' title='Algernon Charles Swinburne
Pre-Raphaelite Brotherhood, Decadents, Victorian, Pessimism, Aestheticism
ENG
1837-1909
MY: 0
MX: 648'><div class=area style='position:absolute; width:34px; height:20px; left:682px; top:733px'></div></a>
<a  href='build-epmap.php?mp=648&a_id=109&y=1837' title='Algernon Charles Swinburne
Pre-Raphaelite Brotherhood, Decadents, Victorian, Pessimism, Aestheticism
ENG
1837-1909
MY: 0
MX: 648'><div class=area style='position:absolute; width:33px; height:20px; left:716px; top:733px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=733&a_id=346&y=1837' title='Augusta Davies Webster
Blank verse, Victorian
ENG
1837-1894
MY: -8
MX: 733'><div class=area style='position:absolute; width:29px; height:20px; left:767px; top:640px'></div></a>
<a  href='build-epmap.php?mp=733&a_id=346&y=1837' title='Augusta Davies Webster
Blank verse, Victorian
ENG
1837-1894
MY: -8
MX: 733'><div class=area style='position:absolute; width:29px; height:20px; left:796px; top:640px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1085&a_id=242&y=1839' title='Henry Kendall
Bipolar disorder, Bush
AUS
1839-1882
MY: 0
MX: 1085'><div class=area style='position:absolute; width:25px; height:20px; left:1119px; top:659px'></div></a>
<a  href='build-epmap.php?mp=1085&a_id=242&y=1839' title='Henry Kendall
Bipolar disorder, Bush
AUS
1839-1882
MY: 0
MX: 1085'><div class=area style='position:absolute; width:25px; height:20px; left:1144px; top:659px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=393&a_id=48&y=1840' title='Thomas Hardy
Agnosticism, Pessimism, Realism, Victorian, War
ENG
1840-1928
MY: 0
MX: 393'><div class=area style='position:absolute; width:23px; height:20px; left:427px; top:800px'></div></a>
<a  href='build-epmap.php?mp=393&a_id=48&y=1840' title='Thomas Hardy
Agnosticism, Pessimism, Realism, Victorian, War
ENG
1840-1928
MY: 0
MX: 393'><div class=area style='position:absolute; width:22px; height:20px; left:450px; top:800px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=733&a_id=252&y=1840' title='Wilfrid Scawen Blunt
Atheism, Victorian
ENG
1840-1922
MY: 10
MX: 733'><div class=area style='position:absolute; width:19px; height:20px; left:767px; top:844px'></div></a>
<a  href='build-epmap.php?mp=733&a_id=252&y=1840' title='Wilfrid Scawen Blunt
Atheism, Victorian
ENG
1840-1922
MY: 10
MX: 733'><div class=area style='position:absolute; width:18px; height:20px; left:786px; top:844px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=393&a_id=119&y=1842' title='Ambrose Bierce
Agnosticism, Realism, Satire, Gothic, Speculative
USA
1842-1914
MY: 0
MX: 393'><div class=area style='position:absolute; width:22px; height:20px; left:427px; top:763px'></div></a>
<a  href='build-epmap.php?mp=393&a_id=119&y=1842' title='Ambrose Bierce
Agnosticism, Realism, Satire, Gothic, Speculative
USA
1842-1914
MY: 0
MX: 393'><div class=area style='position:absolute; width:22px; height:20px; left:449px; top:763px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=733&a_id=190&y=1842' title='Sidney Lanier
Slavery
USA
1842-1881
MY: -12
MX: 733'><div class=area style='position:absolute; width:22px; height:20px; left:767px; top:591px'></div></a>
<a  href='build-epmap.php?mp=733&a_id=190&y=1842' title='Sidney Lanier
Slavery
USA
1842-1881
MY: -12
MX: 733'><div class=area style='position:absolute; width:21px; height:20px; left:789px; top:591px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=486&a_id=368&y=1842' title='Stephane Mallarme
Symbolism
FRA
1842-1898
MY: 0
MX: 486'><div class=area style='position:absolute; width:30px; height:20px; left:520px; top:714px'></div></a>
<a  href='build-epmap.php?mp=486&a_id=368&y=1842' title='Stephane Mallarme
Symbolism
FRA
1842-1898
MY: 0
MX: 486'><div class=area style='position:absolute; width:30px; height:20px; left:550px; top:714px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1001&a_id=99&y=1844' title='Gerard Manley Hopkins
Bipolar disorder, Christian, Parnassianism, Sonnet, Victorian
ENG
1844-1889
MY: 0
MX: 1001'><div class=area style='position:absolute; width:27px; height:20px; left:1035px; top:696px'></div></a>
<a  href='build-epmap.php?mp=1001&a_id=99&y=1844' title='Gerard Manley Hopkins
Bipolar disorder, Christian, Parnassianism, Sonnet, Victorian
ENG
1844-1889
MY: 0
MX: 1001'><div class=area style='position:absolute; width:27px; height:20px; left:1062px; top:696px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1487&a_id=299&y=1844' title='Andrew Lang
Children
SCO
1844-1912
MY: 0
MX: 1487'><div class=area style='position:absolute; width:18px; height:20px; left:1521px; top:763px'></div></a>
<a  href='build-epmap.php?mp=1487&a_id=299&y=1844' title='Andrew Lang
Children
SCO
1844-1912
MY: 0
MX: 1487'><div class=area style='position:absolute; width:17px; height:20px; left:1539px; top:763px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=733&a_id=309&y=1844' title='Ada Cambridge

ENG/AUS
1844-1926
MY: -7
MX: 733'><div class=area style='position:absolute; width:35px; height:20px; left:767px; top:763px'></div></a>
<a  href='build-epmap.php?mp=733&a_id=309&y=1844' title='Ada Cambridge

ENG/AUS
1844-1926
MY: -7
MX: 733'><div class=area style='position:absolute; width:34px; height:20px; left:802px; top:763px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=906&a_id=340&y=1844' title='Friedrich Nietzsche
Existentialism, Neoromanticism, Nihilism, Philosophy, Psychology
DEU
1844-1900
MY: 0
MX: 906'><div class=area style='position:absolute; width:33px; height:20px; left:940px; top:727px'></div></a>
<a  href='build-epmap.php?mp=906&a_id=340&y=1844' title='Friedrich Nietzsche
Existentialism, Neoromanticism, Nihilism, Philosophy, Psychology
DEU
1844-1900
MY: 0
MX: 906'><div class=area style='position:absolute; width:32px; height:20px; left:973px; top:727px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=565&a_id=366&y=1844' title='Paul Verlaine
Christian, Decadents, Homoerotism, Libertine, Parnassianism, Symbolism
FRA
1844-1896
MY: -1
MX: 565'><div class=area style='position:absolute; width:28px; height:20px; left:599px; top:708px'></div></a>
<a  href='build-epmap.php?mp=565&a_id=366&y=1844' title='Paul Verlaine
Christian, Decadents, Homoerotism, Libertine, Parnassianism, Symbolism
FRA
1844-1896
MY: -1
MX: 565'><div class=area style='position:absolute; width:28px; height:20px; left:627px; top:708px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1399&a_id=46&y=1849' title='James Whitcomb Riley
Victorian, Vernacular, Sentimentalism, Humour
USA
1849-1916
MY: -2
MX: 1399'><div class=area style='position:absolute; width:18px; height:20px; left:1433px; top:782px'></div></a>
<a  href='build-epmap.php?mp=1399&a_id=46&y=1849' title='James Whitcomb Riley
Victorian, Vernacular, Sentimentalism, Humour
USA
1849-1916
MY: -2
MX: 1399'><div class=area style='position:absolute; width:18px; height:20px; left:1451px; top:782px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=733&a_id=53&y=1849' title='William Ernest Henley
Victorian
ENG
1849-1902
MY: 11
MX: 733'><div class=area style='position:absolute; width:24px; height:20px; left:767px; top:819px'></div></a>
<a  href='build-epmap.php?mp=733&a_id=53&y=1849' title='William Ernest Henley
Victorian
ENG
1849-1902
MY: 11
MX: 733'><div class=area style='position:absolute; width:23px; height:20px; left:791px; top:819px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=733&a_id=297&y=1849' title='Emma Lazarus
Victorian
USA
1849-1887
MY: -2
MX: 733'><div class=area style='position:absolute; width:27px; height:20px; left:767px; top:690px'></div></a>
<a  href='build-epmap.php?mp=733&a_id=297&y=1849' title='Emma Lazarus
Victorian
USA
1849-1887
MY: -2
MX: 733'><div class=area style='position:absolute; width:26px; height:20px; left:794px; top:690px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1399&a_id=32&y=1850' title='Ella Wheeler Wilcox
Popular, Optimism
USA
1850-1919
MY: 0
MX: 1399'><div class=area style='position:absolute; width:24px; height:20px; left:1433px; top:807px'></div></a>
<a  href='build-epmap.php?mp=1399&a_id=32&y=1850' title='Ella Wheeler Wilcox
Popular, Optimism
USA
1850-1919
MY: 0
MX: 1399'><div class=area style='position:absolute; width:24px; height:20px; left:1457px; top:807px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=733&a_id=40&y=1850' title='Robert Louis Stevenson
Victorian, Children, Slavery, Gothic, Atheism
SCO
1850-1894
MY: 2
MX: 733'><div class=area style='position:absolute; width:37px; height:20px; left:767px; top:739px'></div></a>
<a  href='build-epmap.php?mp=733&a_id=40&y=1850' title='Robert Louis Stevenson
Victorian, Children, Slavery, Gothic, Atheism
SCO
1850-1894
MY: 2
MX: 733'><div class=area style='position:absolute; width:36px; height:20px; left:804px; top:739px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1487&a_id=104&y=1850' title='Eugene Field
Children, New American Poetry
USA
1850-1895
MY: 0
MX: 1487'><div class=area style='position:absolute; width:18px; height:20px; left:1521px; top:733px'></div></a>
<a  href='build-epmap.php?mp=1487&a_id=104&y=1850' title='Eugene Field
Children, New American Poetry
USA
1850-1895
MY: 0
MX: 1487'><div class=area style='position:absolute; width:17px; height:20px; left:1539px; top:733px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1001&a_id=70&y=1852' title='Henry Van Dyke
Christian
USA
1852-1933
MY: 0
MX: 1001'><div class=area style='position:absolute; width:19px; height:20px; left:1035px; top:856px'></div></a>
<a  href='build-epmap.php?mp=1001&a_id=70&y=1852' title='Henry Van Dyke
Christian
USA
1852-1933
MY: 0
MX: 1001'><div class=area style='position:absolute; width:18px; height:20px; left:1054px; top:856px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=565&a_id=55&y=1854' title='Oscar Wilde
Aestheticism, Anarchism, Children, Decadents, Didactism, Fantasy, Freemasons, Gothic, Homoerotism, Victorian
IRL
1854-1900
MY: 0
MX: 565'><div class=area style='position:absolute; width:23px; height:20px; left:599px; top:757px'></div></a>
<a  href='build-epmap.php?mp=565&a_id=55&y=1854' title='Oscar Wilde
Aestheticism, Anarchism, Children, Decadents, Didactism, Fantasy, Freemasons, Gothic, Homoerotism, Victorian
IRL
1854-1900
MY: 0
MX: 565'><div class=area style='position:absolute; width:23px; height:20px; left:622px; top:757px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=565&a_id=93&y=1854' title='Arthur Rimbaud
Anarchism, Dark romanticism, Decadents, Free verse, Homoerotism, Impressionism, Libertine, Symbolism
FRA
1854-1891
MY: 0
MX: 565'><div class=area style='position:absolute; width:29px; height:20px; left:599px; top:733px'></div></a>
<a  href='build-epmap.php?mp=565&a_id=93&y=1854' title='Arthur Rimbaud
Anarchism, Dark romanticism, Decadents, Free verse, Homoerotism, Impressionism, Libertine, Symbolism
FRA
1854-1891
MY: 0
MX: 565'><div class=area style='position:absolute; width:29px; height:20px; left:628px; top:733px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1399&a_id=207&y=1854' title='William Henry Drummond
Humour
IRL/CAN
1854-1907
MY: -4
MX: 1399'><div class=area style='position:absolute; width:35px; height:20px; left:1433px; top:757px'></div></a>
<a  href='build-epmap.php?mp=1399&a_id=207&y=1854' title='William Henry Drummond
Humour
IRL/CAN
1854-1907
MY: -4
MX: 1399'><div class=area style='position:absolute; width:35px; height:20px; left:1468px; top:757px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=565&a_id=224&y=1855' title='Emile Verhaeren
Decadents, National, Symbolism
BEL/FRA
1855-1916
MY: 1
MX: 565'><div class=area style='position:absolute; width:34px; height:20px; left:599px; top:819px'></div></a>
<a  href='build-epmap.php?mp=565&a_id=224&y=1855' title='Emile Verhaeren
Decadents, National, Symbolism
BEL/FRA
1855-1916
MY: 1
MX: 565'><div class=area style='position:absolute; width:34px; height:20px; left:633px; top:819px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1765&a_id=239&y=1856' title='Toru Dutt

IND/ENG
1856-1877
MY: 0
MX: 1765'><div class=area style='position:absolute; width:16px; height:20px; left:1799px; top:696px'></div></a>
<a  href='build-epmap.php?mp=1765&a_id=239&y=1856' title='Toru Dutt

IND/ENG
1856-1877
MY: 0
MX: 1765'><div class=area style='position:absolute; width:15px; height:20px; left:1815px; top:696px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1157&a_id=268&y=1856' title='Lizette Woodworth Reese
Nature
USA
1856-1935
MY: 0
MX: 1157'><div class=area style='position:absolute; width:22px; height:20px; left:1191px; top:874px'></div></a>
<a  href='build-epmap.php?mp=1157&a_id=268&y=1856' title='Lizette Woodworth Reese
Nature
USA
1856-1935
MY: 0
MX: 1157'><div class=area style='position:absolute; width:22px; height:20px; left:1213px; top:874px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1487&a_id=317&y=1858' title='Edith Nesbit
Children, Freemasons
ENG
1858-1924
MY: 0
MX: 1487'><div class=area style='position:absolute; width:22px; height:20px; left:1521px; top:844px'></div></a>
<a  href='build-epmap.php?mp=1487&a_id=317&y=1858' title='Edith Nesbit
Children, Freemasons
ENG
1858-1924
MY: 0
MX: 1487'><div class=area style='position:absolute; width:22px; height:20px; left:1543px; top:844px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=2&a_id=257&y=1859' title='Katharine Tynan
Christian, Feminism, Victorian
IRL
1859-1931
MY: 0
MX: 2'><div class=area style='position:absolute; width:22px; height:20px; left:36px; top:868px'></div></a>
<a  href='build-epmap.php?mp=2&a_id=257&y=1859' title='Katharine Tynan
Christian, Feminism, Victorian
IRL
1859-1931
MY: 0
MX: 2'><div class=area style='position:absolute; width:21px; height:20px; left:58px; top:868px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1487&a_id=279&y=1859' title='Katharine Lee Bates

USA
1859-1929
MY: 1
MX: 1487'><div class=area style='position:absolute; width:21px; height:20px; left:1521px; top:868px'></div></a>
<a  href='build-epmap.php?mp=1487&a_id=279&y=1859' title='Katharine Lee Bates

USA
1859-1929
MY: 1
MX: 1487'><div class=area style='position:absolute; width:20px; height:20px; left:1542px; top:868px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=733&a_id=308&y=1859' title='Francis Thompson
Bipolar disorder, Rhymers club, Victorian
ENG
1859-1907
MY: 12
MX: 733'><div class=area style='position:absolute; width:34px; height:20px; left:767px; top:868px'></div></a>
<a  href='build-epmap.php?mp=733&a_id=308&y=1859' title='Francis Thompson
Bipolar disorder, Rhymers club, Victorian
ENG
1859-1907
MY: 12
MX: 733'><div class=area style='position:absolute; width:34px; height:20px; left:801px; top:868px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1663&a_id=283&y=1860' title='Harriet Monroe

USA
1860-1936
MY: 0
MX: 1663'><div class=area style='position:absolute; width:25px; height:20px; left:1697px; top:887px'></div></a>
<a  href='build-epmap.php?mp=1663&a_id=283&y=1860' title='Harriet Monroe

USA
1860-1936
MY: 0
MX: 1663'><div class=area style='position:absolute; width:25px; height:20px; left:1722px; top:887px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1765&a_id=8&y=1861' title='Rabindranath Tagore
Romanticism, Contextual modernism, Freemasons, Spiritualism, Haiku
IND
1861-1941
MY: -2
MX: 1765'><div class=area style='position:absolute; width:27px; height:20px; left:1799px; top:893px'></div></a>
<a  href='build-epmap.php?mp=1765&a_id=8&y=1861' title='Rabindranath Tagore
Romanticism, Contextual modernism, Freemasons, Spiritualism, Haiku
IND
1861-1941
MY: -2
MX: 1765'><div class=area style='position:absolute; width:27px; height:20px; left:1826px; top:893px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1157&a_id=145&y=1861' title='Archibald Lampman
Sonnet, Confederation poets, Nature
CAN
1861-1899
MY: 0
MX: 1157'><div class=area style='position:absolute; width:32px; height:20px; left:1191px; top:776px'></div></a>
<a  href='build-epmap.php?mp=1157&a_id=145&y=1861' title='Archibald Lampman
Sonnet, Confederation poets, Nature
CAN
1861-1899
MY: 0
MX: 1157'><div class=area style='position:absolute; width:32px; height:20px; left:1223px; top:776px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=2&a_id=212&y=1861' title='Amy Levy
Feminism
ENG
1861-1889
MY: 0
MX: 2'><div class=area style='position:absolute; width:17px; height:20px; left:36px; top:745px'></div></a>
<a  href='build-epmap.php?mp=2&a_id=212&y=1861' title='Amy Levy
Feminism
ENG
1861-1889
MY: 0
MX: 2'><div class=area style='position:absolute; width:16px; height:20px; left:53px; top:745px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=733&a_id=251&y=1861' title='Mary Elizabeth Coleridge
Victorian
ENG
1861-1907
MY: 15
MX: 733'><div class=area style='position:absolute; width:38px; height:20px; left:767px; top:893px'></div></a>
<a  href='build-epmap.php?mp=733&a_id=251&y=1861' title='Mary Elizabeth Coleridge
Victorian
ENG
1861-1907
MY: 15
MX: 733'><div class=area style='position:absolute; width:38px; height:20px; left:805px; top:893px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=733&a_id=263&y=1862' title='Sir Henry Newbolt
Victorian
ENG
1862-1938
MY: 7
MX: 733'><div class=area style='position:absolute; width:27px; height:20px; left:767px; top:942px'></div></a>
<a  href='build-epmap.php?mp=733&a_id=263&y=1862' title='Sir Henry Newbolt
Victorian
ENG
1862-1938
MY: 7
MX: 733'><div class=area style='position:absolute; width:26px; height:20px; left:794px; top:942px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=219&a_id=312&y=1862' title='Duncan Campbell Scott
Confederation poets
CAN
1862-1947
MY: 0
MX: 219'><div class=area style='position:absolute; width:26px; height:20px; left:253px; top:930px'></div></a>
<a  href='build-epmap.php?mp=219&a_id=312&y=1862' title='Duncan Campbell Scott
Confederation poets
CAN
1862-1947
MY: 0
MX: 219'><div class=area style='position:absolute; width:25px; height:20px; left:279px; top:930px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=305&a_id=178&y=1863' title='Constantine P Cavafy
History, Modernism
GRC
1863-1933
MY: -2
MX: 305'><div class=area style='position:absolute; width:23px; height:20px; left:339px; top:874px'></div></a>
<a  href='build-epmap.php?mp=305&a_id=178&y=1863' title='Constantine P Cavafy
History, Modernism
GRC
1863-1933
MY: -2
MX: 305'><div class=area style='position:absolute; width:22px; height:20px; left:362px; top:874px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1085&a_id=356&y=1863' title='George Essex Evans
Fantasy
AUS
1863-1909
MY: 0
MX: 1085'><div class=area style='position:absolute; width:21px; height:20px; left:1119px; top:813px'></div></a>
<a  href='build-epmap.php?mp=1085&a_id=356&y=1863' title='George Essex Evans
Fantasy
AUS
1863-1909
MY: 0
MX: 1085'><div class=area style='position:absolute; width:21px; height:20px; left:1140px; top:813px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1085&a_id=85&y=1864' title='Banjo Paterson
Bush
AUS
1864-1941
MY: 0
MX: 1085'><div class=area style='position:absolute; width:30px; height:20px; left:1119px; top:917px'></div></a>
<a  href='build-epmap.php?mp=1085&a_id=85&y=1864' title='Banjo Paterson
Bush
AUS
1864-1941
MY: 0
MX: 1085'><div class=area style='position:absolute; width:29px; height:20px; left:1149px; top:917px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1663&a_id=351&y=1864' title='Arthur St. John Adcock

ENG
1864-1930
MY: -3
MX: 1663'><div class=area style='position:absolute; width:27px; height:20px; left:1697px; top:862px'></div></a>
<a  href='build-epmap.php?mp=1663&a_id=351&y=1864' title='Arthur St. John Adcock

ENG
1864-1930
MY: -3
MX: 1663'><div class=area style='position:absolute; width:26px; height:20px; left:1724px; top:862px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=486&a_id=19&y=1865' title='Rudyard Kipling
Children, Didactism, Freemasons, Modernism, Neoromanticism, Nonsense, Victorian, War
ENG
1865-1936
MY: 6
MX: 486'><div class=area style='position:absolute; width:26px; height:20px; left:520px; top:942px'></div></a>
<a  href='build-epmap.php?mp=486&a_id=19&y=1865' title='Rudyard Kipling
Children, Didactism, Freemasons, Modernism, Neoromanticism, Nonsense, Victorian, War
ENG
1865-1936
MY: 6
MX: 486'><div class=area style='position:absolute; width:26px; height:20px; left:546px; top:942px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=219&a_id=17&y=1865' title='William Butler Yeats
Modernism, Neoromanticism, Formalism, Rhymers club, Victorian, Sonnet, Spiritualism, Fantasy
IRL
1865-1939
MY: -1
MX: 219'><div class=area style='position:absolute; width:22px; height:20px; left:253px; top:905px'></div></a>
<a  href='build-epmap.php?mp=219&a_id=17&y=1865' title='William Butler Yeats
Modernism, Neoromanticism, Formalism, Rhymers club, Victorian, Sonnet, Spiritualism, Fantasy
IRL
1865-1939
MY: -1
MX: 219'><div class=area style='position:absolute; width:22px; height:20px; left:275px; top:905px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=565&a_id=247&y=1865' title='Arthur Symons
Decadents, Rhymers club
ENG
1865-1945
MY: 0
MX: 565'><div class=area style='position:absolute; width:28px; height:20px; left:599px; top:930px'></div></a>
<a  href='build-epmap.php?mp=565&a_id=247&y=1865' title='Arthur Symons
Decadents, Rhymers club
ENG
1865-1945
MY: 0
MX: 565'><div class=area style='position:absolute; width:27px; height:20px; left:627px; top:930px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1399&a_id=290&y=1865' title='Edward Dyson
Humour
AUS
1865-1931
MY: 0
MX: 1399'><div class=area style='position:absolute; width:22px; height:20px; left:1433px; top:887px'></div></a>
<a  href='build-epmap.php?mp=1399&a_id=290&y=1865' title='Edward Dyson
Humour
AUS
1865-1931
MY: 0
MX: 1399'><div class=area style='position:absolute; width:22px; height:20px; left:1455px; top:887px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=305&a_id=328&y=1865' title='Jose Asuncion Silva
Committed suicide, Modernism
COL
1865-1896
MY: 0
MX: 305'><div class=area style='position:absolute; width:17px; height:20px; left:339px; top:782px'></div></a>
<a  href='build-epmap.php?mp=305&a_id=328&y=1865' title='Jose Asuncion Silva
Committed suicide, Modernism
COL
1865-1896
MY: 0
MX: 305'><div class=area style='position:absolute; width:17px; height:20px; left:356px; top:782px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1487&a_id=331&y=1866' title='Beatrix Potter
Children
ENG
1866-1943
MY: -1
MX: 1487'><div class=area style='position:absolute; width:22px; height:20px; left:1521px; top:924px'></div></a>
<a  href='build-epmap.php?mp=1487&a_id=331&y=1866' title='Beatrix Potter
Children
ENG
1866-1943
MY: -1
MX: 1487'><div class=area style='position:absolute; width:21px; height:20px; left:1543px; top:924px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=393&a_id=27&y=1867' title='Henry Lawson
National, Realism, Slavery
AUS
1867-1922
MY: 0
MX: 393'><div class=area style='position:absolute; width:26px; height:20px; left:427px; top:868px'></div></a>
<a  href='build-epmap.php?mp=393&a_id=27&y=1867' title='Henry Lawson
National, Realism, Slavery
AUS
1867-1922
MY: 0
MX: 393'><div class=area style='position:absolute; width:25px; height:20px; left:453px; top:868px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=565&a_id=215&y=1867' title='Ernest Christopher Dowson
Bipolar disorder, Decadents, Pessimism, Rhymers club, Victorian
ENG
1867-1900
MY: -1
MX: 565'><div class=area style='position:absolute; width:27px; height:20px; left:599px; top:794px'></div></a>
<a  href='build-epmap.php?mp=565&a_id=215&y=1867' title='Ernest Christopher Dowson
Bipolar disorder, Decadents, Pessimism, Rhymers club, Victorian
ENG
1867-1900
MY: -1
MX: 565'><div class=area style='position:absolute; width:26px; height:20px; left:626px; top:794px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=305&a_id=325&y=1867' title='Ruben Dario
National
NIC
1867-1916
MY: 0
MX: 305'><div class=area style='position:absolute; width:19px; height:20px; left:339px; top:850px'></div></a>
<a  href='build-epmap.php?mp=305&a_id=325&y=1867' title='Ruben Dario
National
NIC
1867-1916
MY: 0
MX: 305'><div class=area style='position:absolute; width:18px; height:20px; left:358px; top:850px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=646&a_id=184&y=1868' title='Jessie Pope
War
ENG
1868-1941
MY: -3
MX: 646'><div class=area style='position:absolute; width:25px; height:20px; left:680px; top:911px'></div></a>
<a  href='build-epmap.php?mp=646&a_id=184&y=1868' title='Jessie Pope
War
ENG
1868-1941
MY: -3
MX: 646'><div class=area style='position:absolute; width:24px; height:20px; left:705px; top:911px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1001&a_id=106&y=1869' title='Edgar Lee Masters
Playwright, Slavery
USA
1869-1950
MY: 1
MX: 1001'><div class=area style='position:absolute; width:27px; height:20px; left:1035px; top:967px'></div></a>
<a  href='build-epmap.php?mp=1001&a_id=106&y=1869' title='Edgar Lee Masters
Playwright, Slavery
USA
1869-1950
MY: 1
MX: 1001'><div class=area style='position:absolute; width:27px; height:20px; left:1062px; top:967px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=305&a_id=128&y=1869' title='Edwin Arlington Robinson
Modernism
USA
1869-1935
MY: -2
MX: 305'><div class=area style='position:absolute; width:37px; height:20px; left:339px; top:899px'></div></a>
<a  href='build-epmap.php?mp=305&a_id=128&y=1869' title='Edwin Arlington Robinson
Modernism
USA
1869-1935
MY: -2
MX: 305'><div class=area style='position:absolute; width:37px; height:20px; left:376px; top:899px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=646&a_id=262&y=1869' title='Robert Laurence Binyon
War
ENG
1869-1943
MY: 4
MX: 646'><div class=area style='position:absolute; width:24px; height:20px; left:680px; top:961px'></div></a>
<a  href='build-epmap.php?mp=646&a_id=262&y=1869' title='Robert Laurence Binyon
War
ENG
1869-1943
MY: 4
MX: 646'><div class=area style='position:absolute; width:23px; height:20px; left:704px; top:961px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=733&a_id=344&y=1869' title='Charlotte  Mary Mew
Committed suicide, Modernism, Victorian
ENG
1869-1928
MY: 4
MX: 733'><div class=area style='position:absolute; width:18px; height:20px; left:767px; top:917px'></div></a>
<a  href='build-epmap.php?mp=733&a_id=344&y=1869' title='Charlotte  Mary Mew
Committed suicide, Modernism, Victorian
ENG
1869-1928
MY: 4
MX: 733'><div class=area style='position:absolute; width:17px; height:20px; left:785px; top:917px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1487&a_id=64&y=1870' title='Hilaire Belloc
Children, Christian, Humour
ENG
1870-1953
MY: 0
MX: 1487'><div class=area style='position:absolute; width:22px; height:20px; left:1521px; top:973px'></div></a>
<a  href='build-epmap.php?mp=1487&a_id=64&y=1870' title='Hilaire Belloc
Children, Christian, Humour
ENG
1870-1953
MY: 0
MX: 1487'><div class=area style='position:absolute; width:21px; height:20px; left:1543px; top:973px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1663&a_id=236&y=1870' title='Christopher Brennan

AUS
1870-1921
MY: -6
MX: 1663'><div class=area style='position:absolute; width:28px; height:20px; left:1697px; top:837px'></div></a>
<a  href='build-epmap.php?mp=1663&a_id=236&y=1870' title='Christopher Brennan

AUS
1870-1921
MY: -6
MX: 1663'><div class=area style='position:absolute; width:27px; height:20px; left:1725px; top:837px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1663&a_id=269&y=1870' title='Lord Alfred Douglas
Homoerotism, Rhymers club
ENG
1870-1945
MY: 2
MX: 1663'><div class=area style='position:absolute; width:33px; height:20px; left:1697px; top:961px'></div></a>
<a  href='build-epmap.php?mp=1663&a_id=269&y=1870' title='Lord Alfred Douglas
Homoerotism, Rhymers club
ENG
1870-1945
MY: 2
MX: 1663'><div class=area style='position:absolute; width:32px; height:20px; left:1730px; top:961px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1320&a_id=149&y=1871' title='James Weldon Johnson
Harlem Renaissance
AFR/USA
1871-1938
MY: 10
MX: 1320'><div class=area style='position:absolute; width:34px; height:20px; left:1354px; top:991px'></div></a>
<a  href='build-epmap.php?mp=1320&a_id=149&y=1871' title='James Weldon Johnson
Harlem Renaissance
AFR/USA
1871-1938
MY: 10
MX: 1320'><div class=area style='position:absolute; width:33px; height:20px; left:1388px; top:991px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=393&a_id=22&y=1872' title='Paul Laurence Dunbar
Fantasy, Realism, Slavery, Vernacular
AFR/USA
1872-1906
MY: 0
MX: 393'><div class=area style='position:absolute; width:27px; height:20px; left:427px; top:831px'></div></a>
<a  href='build-epmap.php?mp=393&a_id=22&y=1872' title='Paul Laurence Dunbar
Fantasy, Realism, Slavery, Vernacular
AFR/USA
1872-1906
MY: 0
MX: 393'><div class=area style='position:absolute; width:27px; height:20px; left:454px; top:831px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=646&a_id=185&y=1872' title='John McCrae
War
CAN
1872-1918
MY: -5
MX: 646'><div class=area style='position:absolute; width:26px; height:20px; left:680px; top:837px'></div></a>
<a  href='build-epmap.php?mp=646&a_id=185&y=1872' title='John McCrae
War
CAN
1872-1918
MY: -5
MX: 646'><div class=area style='position:absolute; width:26px; height:20px; left:706px; top:837px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1663&a_id=329&y=1872' title='Arthur Henry Adams

AUS
1872-1936
MY: 2
MX: 1663'><div class=area style='position:absolute; width:25px; height:20px; left:1697px; top:936px'></div></a>
<a  href='build-epmap.php?mp=1663&a_id=329&y=1872' title='Arthur Henry Adams

AUS
1872-1936
MY: 2
MX: 1663'><div class=area style='position:absolute; width:25px; height:20px; left:1722px; top:936px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1487&a_id=61&y=1873' title='Walter de la Mare
Children, Georgian poets, Gothic
ENG
1873-1956
MY: 1
MX: 1487'><div class=area style='position:absolute; width:18px; height:20px; left:1521px; top:998px'></div></a>
<a  href='build-epmap.php?mp=1487&a_id=61&y=1873' title='Walter de la Mare
Children, Georgian poets, Gothic
ENG
1873-1956
MY: 1
MX: 1487'><div class=area style='position:absolute; width:18px; height:20px; left:1539px; top:998px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=393&a_id=2&y=1874' title='Robert Frost
Dymock poets, Modernism, Formalism, Blank verse, Realism, Didactism, Vernacular, Sonnet, Optimism, Laureate, National
USA
1874-1963
MY: 2
MX: 393'><div class=area style='position:absolute; width:20px; height:20px; left:427px; top:1028px'></div></a>
<a  href='build-epmap.php?mp=393&a_id=2&y=1874' title='Robert Frost
Dymock poets, Modernism, Formalism, Blank verse, Realism, Didactism, Vernacular, Sonnet, Optimism, Laureate, National
USA
1874-1963
MY: 2
MX: 393'><div class=area style='position:absolute; width:19px; height:20px; left:447px; top:1028px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=393&a_id=24&y=1874' title='Robert W Service
Fantasy, Freemasons, Optimism, Slavery, War
CAN
1874-1958
MY: 1
MX: 393'><div class=area style='position:absolute; width:28px; height:20px; left:427px; top:1004px'></div></a>
<a  href='build-epmap.php?mp=393&a_id=24&y=1874' title='Robert W Service
Fantasy, Freemasons, Optimism, Slavery, War
CAN
1874-1958
MY: 1
MX: 393'><div class=area style='position:absolute; width:28px; height:20px; left:455px; top:1004px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=143&a_id=114&y=1874' title='Amy Lowell
Fantasy, Free verse, Imagism, Modernism
USA
1874-1925
MY: 0
MX: 143'><div class=area style='position:absolute; width:29px; height:20px; left:177px; top:899px'></div></a>
<a  href='build-epmap.php?mp=143&a_id=114&y=1874' title='Amy Lowell
Fantasy, Free verse, Imagism, Modernism
USA
1874-1925
MY: 0
MX: 143'><div class=area style='position:absolute; width:29px; height:20px; left:206px; top:899px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=305&a_id=171&y=1874' title='Gertrude Stein
Cubism, Modernism
USA
1874-1946
MY: -2
MX: 305'><div class=area style='position:absolute; width:19px; height:20px; left:339px; top:948px'></div></a>
<a  href='build-epmap.php?mp=305&a_id=171&y=1874' title='Gertrude Stein
Cubism, Modernism
USA
1874-1946
MY: -2
MX: 305'><div class=area style='position:absolute; width:18px; height:20px; left:358px; top:948px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=906&a_id=295&y=1874' title='Gilbert Keith Chesterton
Christian, Deism, Fantasy, Mystery, Tory
ENG
1874-1936
MY: 0
MX: 906'><div class=area style='position:absolute; width:35px; height:20px; left:940px; top:930px'></div></a>
<a  href='build-epmap.php?mp=906&a_id=295&y=1874' title='Gilbert Keith Chesterton
Christian, Deism, Fantasy, Mystery, Tory
ENG
1874-1936
MY: 0
MX: 906'><div class=area style='position:absolute; width:35px; height:20px; left:975px; top:930px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1487&a_id=357&y=1874' title='Lucy Maud Montgomery
Children
CAN
1874-1942
MY: 0
MX: 1487'><div class=area style='position:absolute; width:40px; height:20px; left:1521px; top:948px'></div></a>
<a  href='build-epmap.php?mp=1487&a_id=357&y=1874' title='Lucy Maud Montgomery
Children
CAN
1874-1942
MY: 0
MX: 1487'><div class=area style='position:absolute; width:39px; height:20px; left:1561px; top:948px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1235&a_id=33&y=1875' title='Rainer Maria Rilke
Christian, Existentialism, Expressionism, Modernism, Sonnet
BOH/DEU
1875-1926
MY: -4
MX: 1235'><div class=area style='position:absolute; width:18px; height:20px; left:1269px; top:881px'></div></a>
<a  href='build-epmap.php?mp=1235&a_id=33&y=1875' title='Rainer Maria Rilke
Christian, Existentialism, Expressionism, Modernism, Sonnet
BOH/DEU
1875-1926
MY: -4
MX: 1235'><div class=area style='position:absolute; width:18px; height:20px; left:1287px; top:881px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=393&a_id=112&y=1875' title='Antonio Machado
Haiku, Social realism
SPA
1875-1939
MY: -3
MX: 393'><div class=area style='position:absolute; width:30px; height:20px; left:427px; top:924px'></div></a>
<a  href='build-epmap.php?mp=393&a_id=112&y=1875' title='Antonio Machado
Haiku, Social realism
SPA
1875-1939
MY: -3
MX: 393'><div class=area style='position:absolute; width:30px; height:20px; left:457px; top:924px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1399&a_id=151&y=1876' title='C J Dennis

AUS
1876-1938
MY: 0
MX: 1399'><div class=area style='position:absolute; width:24px; height:20px; left:1433px; top:942px'></div></a>
<a  href='build-epmap.php?mp=1399&a_id=151&y=1876' title='C J Dennis

AUS
1876-1938
MY: 0
MX: 1399'><div class=area style='position:absolute; width:23px; height:20px; left:1457px; top:942px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1765&a_id=59&y=1877' title='Muhammad Iqbal
Islam, National
IND
1877-1938
MY: -1
MX: 1765'><div class=area style='position:absolute; width:17px; height:20px; left:1799px; top:942px'></div></a>
<a  href='build-epmap.php?mp=1765&a_id=59&y=1877' title='Muhammad Iqbal
Islam, National
IND
1877-1938
MY: -1
MX: 1765'><div class=area style='position:absolute; width:17px; height:20px; left:1816px; top:942px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=826&a_id=338&y=1877' title='Hermann Hesse
Didactism, Freemasons
DEU/CHE
1877-1962
MY: 0
MX: 826'><div class=area style='position:absolute; width:22px; height:20px; left:860px; top:1022px'></div></a>
<a  href='build-epmap.php?mp=826&a_id=338&y=1877' title='Hermann Hesse
Didactism, Freemasons
DEU/CHE
1877-1962
MY: 0
MX: 826'><div class=area style='position:absolute; width:22px; height:20px; left:882px; top:1022px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=143&a_id=44&y=1878' title='Carl Sandburg
Imagism, Others, Nonsense, Children, National
USA
1878-1967
MY: 0
MX: 143'><div class=area style='position:absolute; width:31px; height:20px; left:177px; top:1041px'></div></a>
<a  href='build-epmap.php?mp=143&a_id=44&y=1878' title='Carl Sandburg
Imagism, Others, Nonsense, Children, National
USA
1878-1967
MY: 0
MX: 143'><div class=area style='position:absolute; width:31px; height:20px; left:208px; top:1041px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1487&a_id=71&y=1878' title='John Masefield
Children, Laureate
ENG
1878-1967
MY: 1
MX: 1487'><div class=area style='position:absolute; width:31px; height:20px; left:1521px; top:1047px'></div></a>
<a  href='build-epmap.php?mp=1487&a_id=71&y=1878' title='John Masefield
Children, Laureate
ENG
1878-1967
MY: 1
MX: 1487'><div class=area style='position:absolute; width:31px; height:20px; left:1552px; top:1047px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=393&a_id=115&y=1878' title='Edward Thomas
Bipolar disorder, Dymock poets, War
ENG
1878-1917
MY: 1
MX: 393'><div class=area style='position:absolute; width:33px; height:20px; left:427px; top:893px'></div></a>
<a  href='build-epmap.php?mp=393&a_id=115&y=1878' title='Edward Thomas
Bipolar disorder, Dymock poets, War
ENG
1878-1917
MY: 1
MX: 393'><div class=area style='position:absolute; width:33px; height:20px; left:460px; top:893px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1663&a_id=243&y=1878' title='Adelaide Crapsey

USA
1878-1914
MY: -10
MX: 1663'><div class=area style='position:absolute; width:28px; height:20px; left:1697px; top:813px'></div></a>
<a  href='build-epmap.php?mp=1663&a_id=243&y=1878' title='Adelaide Crapsey

USA
1878-1914
MY: -10
MX: 1663'><div class=area style='position:absolute; width:27px; height:20px; left:1725px; top:813px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1765&a_id=31&y=1879' title='Sarojini Naidu
Spiritualism
IND
1879-1949
MY: -3
MX: 1765'><div class=area style='position:absolute; width:20px; height:20px; left:1799px; top:967px'></div></a>
<a  href='build-epmap.php?mp=1765&a_id=31&y=1879' title='Sarojini Naidu
Spiritualism
IND
1879-1949
MY: -3
MX: 1765'><div class=area style='position:absolute; width:20px; height:20px; left:1819px; top:967px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=219&a_id=88&y=1879' title='Wallace Stevens
Blank verse, Cubism, Formalism, Modernism
USA
1879-1955
MY: -4
MX: 219'><div class=area style='position:absolute; width:29px; height:20px; left:253px; top:979px'></div></a>
<a  href='build-epmap.php?mp=219&a_id=88&y=1879' title='Wallace Stevens
Blank verse, Cubism, Formalism, Modernism
USA
1879-1955
MY: -4
MX: 219'><div class=area style='position:absolute; width:29px; height:20px; left:282px; top:979px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1399&a_id=154&y=1879' title='Vachel Lindsay
Vernacular, Committed suicide, Bipolar disorder, Slavery, Jazz, Fantasy, Song
USA
1879-1931
MY: -2
MX: 1399'><div class=area style='position:absolute; width:26px; height:20px; left:1433px; top:917px'></div></a>
<a  href='build-epmap.php?mp=1399&a_id=154&y=1879' title='Vachel Lindsay
Vernacular, Committed suicide, Bipolar disorder, Slavery, Jazz, Fantasy, Song
USA
1879-1931
MY: -2
MX: 1399'><div class=area style='position:absolute; width:26px; height:20px; left:1459px; top:917px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1487&a_id=108&y=1880' title='Alfred Noyes
Children, Gothic, Playwright, Romanticism
ENG
1880-1958
MY: 1
MX: 1487'><div class=area style='position:absolute; width:22px; height:20px; left:1521px; top:1022px'></div></a>
<a  href='build-epmap.php?mp=1487&a_id=108&y=1880' title='Alfred Noyes
Children, Gothic, Playwright, Romanticism
ENG
1880-1958
MY: 1
MX: 1487'><div class=area style='position:absolute; width:22px; height:20px; left:1543px; top:1022px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=488&a_id=175&y=1880' title='Aleksandr Blok
Symbolism, Bipolar disorder, War, Silver age, Christian
RUS
1880-1921
MY: -6
MX: 488'><div class=area style='position:absolute; width:17px; height:20px; left:522px; top:868px'></div></a>
<a  href='build-epmap.php?mp=488&a_id=175&y=1880' title='Aleksandr Blok
Symbolism, Bipolar disorder, War, Silver age, Christian
RUS
1880-1921
MY: -6
MX: 488'><div class=area style='position:absolute; width:16px; height:20px; left:539px; top:868px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1663&a_id=198&y=1880' title='Marriott Edgar

SCO
1880-1951
MY: 2
MX: 1663'><div class=area style='position:absolute; width:21px; height:20px; left:1697px; top:1010px'></div></a>
<a  href='build-epmap.php?mp=1663&a_id=198&y=1880' title='Marriott Edgar

SCO
1880-1951
MY: 2
MX: 1663'><div class=area style='position:absolute; width:21px; height:20px; left:1718px; top:1010px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=62&a_id=230&y=1880' title='Guillaume Apollinaire
Cubism, Dada, Surrealism
FRA
1880-1918
MY: 0
MX: 62'><div class=area style='position:absolute; width:35px; height:20px; left:96px; top:893px'></div></a>
<a  href='build-epmap.php?mp=62&a_id=230&y=1880' title='Guillaume Apollinaire
Cubism, Dada, Surrealism
FRA
1880-1918
MY: 0
MX: 62'><div class=area style='position:absolute; width:34px; height:20px; left:131px; top:893px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1399&a_id=74&y=1881' title='Edgar Guest
Freemasons, Optimism, Sentimentalism
USA
1881-1959
MY: 0
MX: 1399'><div class=area style='position:absolute; width:21px; height:20px; left:1433px; top:1022px'></div></a>
<a  href='build-epmap.php?mp=1399&a_id=74&y=1881' title='Edgar Guest
Freemasons, Optimism, Sentimentalism
USA
1881-1959
MY: 0
MX: 1399'><div class=area style='position:absolute; width:21px; height:20px; left:1454px; top:1022px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1487&a_id=264&y=1881' title='Padraic Colum
Children
IRL
1881-1972
MY: 1
MX: 1487'><div class=area style='position:absolute; width:22px; height:20px; left:1521px; top:1071px'></div></a>
<a  href='build-epmap.php?mp=1487&a_id=264&y=1881' title='Padraic Colum
Children
IRL
1881-1972
MY: 1
MX: 1487'><div class=area style='position:absolute; width:22px; height:20px; left:1543px; top:1071px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1235&a_id=78&y=1882' title='James Joyce
Agnosticism, Difficult, Expressionism, Modernism, Nonsense
IRL
1882-1941
MY: 1
MX: 1235'><div class=area style='position:absolute; width:22px; height:20px; left:1269px; top:979px'></div></a>
<a  href='build-epmap.php?mp=1235&a_id=78&y=1882' title='James Joyce
Agnosticism, Difficult, Expressionism, Modernism, Nonsense
IRL
1882-1941
MY: 1
MX: 1235'><div class=area style='position:absolute; width:21px; height:20px; left:1291px; top:979px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1663&a_id=254&y=1882' title='James Stephens
Myth, National
IRL
1882-1950
MY: -2
MX: 1663'><div class=area style='position:absolute; width:31px; height:20px; left:1697px; top:985px'></div></a>
<a  href='build-epmap.php?mp=1663&a_id=254&y=1882' title='James Stephens
Myth, National
IRL
1882-1950
MY: -2
MX: 1663'><div class=area style='position:absolute; width:31px; height:20px; left:1728px; top:985px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1765&a_id=21&y=1883' title='Khalil Gibran
Christian, Mysticism, National, Slavery
LBN/USA
1883-1931
MY: -4
MX: 1765'><div class=area style='position:absolute; width:23px; height:20px; left:1799px; top:917px'></div></a>
<a  href='build-epmap.php?mp=1765&a_id=21&y=1883' title='Khalil Gibran
Christian, Mysticism, National, Slavery
LBN/USA
1883-1931
MY: -4
MX: 1765'><div class=area style='position:absolute; width:22px; height:20px; left:1822px; top:917px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=143&a_id=57&y=1883' title='William Carlos Williams
Imagism, Modernism, Others, Sentimentalism, Vernacular
USA
1883-1963
MY: 4
MX: 143'><div class=area style='position:absolute; width:29px; height:20px; left:177px; top:1065px'></div></a>
<a  href='build-epmap.php?mp=143&a_id=57&y=1883' title='William Carlos Williams
Imagism, Modernism, Others, Sentimentalism, Vernacular
USA
1883-1963
MY: 4
MX: 143'><div class=area style='position:absolute; width:29px; height:20px; left:206px; top:1065px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=826&a_id=34&y=1884' title='Sara Teasdale
Didactism, Committed suicide, Bipolar disorder
USA
1884-1933
MY: 0
MX: 826'><div class=area style='position:absolute; width:34px; height:20px; left:860px; top:954px'></div></a>
<a  href='build-epmap.php?mp=826&a_id=34&y=1884' title='Sara Teasdale
Didactism, Committed suicide, Bipolar disorder
USA
1884-1933
MY: 0
MX: 826'><div class=area style='position:absolute; width:33px; height:20px; left:894px; top:954px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=143&a_id=42&y=1885' title='Ezra Pound
Imagism, Modernism, Others, Didactism, Bipolar disorder, Haiku
USA
1885-1972
MY: 2
MX: 143'><div class=area style='position:absolute; width:22px; height:20px; left:177px; top:1090px'></div></a>
<a  href='build-epmap.php?mp=143&a_id=42&y=1885' title='Ezra Pound
Imagism, Modernism, Others, Didactism, Bipolar disorder, Haiku
USA
1885-1972
MY: 2
MX: 143'><div class=area style='position:absolute; width:22px; height:20px; left:199px; top:1090px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=646&a_id=76&y=1886' title='Siegfried Sassoon
Georgian poets, War
ENG
1886-1967
MY: 0
MX: 646'><div class=area style='position:absolute; width:29px; height:20px; left:680px; top:1065px'></div></a>
<a  href='build-epmap.php?mp=646&a_id=76&y=1886' title='Siegfried Sassoon
Georgian poets, War
ENG
1886-1967
MY: 0
MX: 646'><div class=area style='position:absolute; width:29px; height:20px; left:709px; top:1065px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1663&a_id=280&y=1886' title='Frances Cornford

ENG
1886-1960
MY: 7
MX: 1663'><div class=area style='position:absolute; width:28px; height:20px; left:1697px; top:1084px'></div></a>
<a  href='build-epmap.php?mp=1663&a_id=280&y=1886' title='Frances Cornford

ENG
1886-1960
MY: 7
MX: 1663'><div class=area style='position:absolute; width:27px; height:20px; left:1725px; top:1084px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=646&a_id=49&y=1887' title='Rupert Brooke
Bipolar disorder, Dymock poets, Georgian poets, Modernism, Sonnet, War
ENG
1887-1915
MY: -7
MX: 646'><div class=area style='position:absolute; width:24px; height:20px; left:680px; top:862px'></div></a>
<a  href='build-epmap.php?mp=646&a_id=49&y=1887' title='Rupert Brooke
Bipolar disorder, Dymock poets, Georgian poets, Modernism, Sonnet, War
ENG
1887-1915
MY: -7
MX: 646'><div class=area style='position:absolute; width:24px; height:20px; left:704px; top:862px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=826&a_id=98&y=1887' title='Robinson Jeffers
Anti-meter, Didactism, Pantheism, Slavery
USA
1887-1962
MY: 0
MX: 826'><div class=area style='position:absolute; width:23px; height:20px; left:860px; top:1053px'></div></a>
<a  href='build-epmap.php?mp=826&a_id=98&y=1887' title='Robinson Jeffers
Anti-meter, Didactism, Pantheism, Slavery
USA
1887-1962
MY: 0
MX: 826'><div class=area style='position:absolute; width:23px; height:20px; left:883px; top:1053px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1663&a_id=179&y=1887' title='Edwin Muir

SCO
1887-1959
MY: 11
MX: 1663'><div class=area style='position:absolute; width:17px; height:20px; left:1697px; top:1108px'></div></a>
<a  href='build-epmap.php?mp=1663&a_id=179&y=1887' title='Edwin Muir

SCO
1887-1959
MY: 11
MX: 1663'><div class=area style='position:absolute; width:16px; height:20px; left:1714px; top:1108px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1235&a_id=281&y=1887' title='Georg Trakl
Committed suicide, Bipolar disorder, Expressionism
DEU
1887-1914
MY: 0
MX: 1235'><div class=area style='position:absolute; width:18px; height:20px; left:1269px; top:905px'></div></a>
<a  href='build-epmap.php?mp=1235&a_id=281&y=1887' title='Georg Trakl
Committed suicide, Bipolar disorder, Expressionism
DEU
1887-1914
MY: 0
MX: 1235'><div class=area style='position:absolute; width:18px; height:20px; left:1287px; top:905px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=143&a_id=324&y=1887' title='Marianne Moore
Anti-meter, Modernism, Others
USA
1887-1972
MY: 5
MX: 143'><div class=area style='position:absolute; width:29px; height:20px; left:177px; top:1115px'></div></a>
<a  href='build-epmap.php?mp=143&a_id=324&y=1887' title='Marianne Moore
Anti-meter, Modernism, Others
USA
1887-1972
MY: 5
MX: 143'><div class=area style='position:absolute; width:29px; height:20px; left:206px; top:1115px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1663&a_id=341&y=1887' title='Francis Ledwidge

IRL
1887-1917
MY: 0
MX: 1663'><div class=area style='position:absolute; width:31px; height:20px; left:1697px; top:911px'></div></a>
<a  href='build-epmap.php?mp=1663&a_id=341&y=1887' title='Francis Ledwidge

IRL
1887-1917
MY: 0
MX: 1663'><div class=area style='position:absolute; width:30px; height:20px; left:1728px; top:911px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=646&a_id=176&y=1888' title='Alan Seeger
War
USA
1888-1916
MY: -4
MX: 646'><div class=area style='position:absolute; width:25px; height:20px; left:680px; top:887px'></div></a>
<a  href='build-epmap.php?mp=646&a_id=176&y=1888' title='Alan Seeger
War
USA
1888-1916
MY: -4
MX: 646'><div class=area style='position:absolute; width:24px; height:20px; left:705px; top:887px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=305&a_id=300&y=1888' title='Katherine Mansfield
Modernism, National
NZL/ENG
1888-1923
MY: -2
MX: 305'><div class=area style='position:absolute; width:31px; height:20px; left:339px; top:924px'></div></a>
<a  href='build-epmap.php?mp=305&a_id=300&y=1888' title='Katherine Mansfield
Modernism, National
NZL/ENG
1888-1923
MY: -2
MX: 305'><div class=area style='position:absolute; width:31px; height:20px; left:370px; top:924px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=305&a_id=334&y=1888' title='Fernando Pessoa
Agnosticism, Atheism, Avant-garde, Bipolar disorder, Homoerotism, Modernism, National, Spiritualism
POR
1888-1935
MY: 0
MX: 305'><div class=area style='position:absolute; width:26px; height:20px; left:339px; top:973px'></div></a>
<a  href='build-epmap.php?mp=305&a_id=334&y=1888' title='Fernando Pessoa
Agnosticism, Atheism, Avant-garde, Bipolar disorder, Homoerotism, Modernism, National, Spiritualism
POR
1888-1935
MY: 0
MX: 305'><div class=area style='position:absolute; width:25px; height:20px; left:365px; top:973px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=906&a_id=363&y=1888' title='Thomas Stearns Eliot
Bipolar disorder, Children, Christian, Existentialism, Jazz, Metaphysical poets, Modernism, Neoclassicism, Symbolism
USA/ENG
1888-1965
MY: -7
MX: 906'><div class=area style='position:absolute; width:25px; height:20px; left:940px; top:1022px'></div></a>
<a  href='build-epmap.php?mp=906&a_id=363&y=1888' title='Thomas Stearns Eliot
Bipolar disorder, Children, Christian, Existentialism, Jazz, Metaphysical poets, Modernism, Neoclassicism, Symbolism
USA/ENG
1888-1965
MY: -7
MX: 906'><div class=area style='position:absolute; width:24px; height:20px; left:965px; top:1022px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=305&a_id=75&y=1889' title='Anna Akhmatova
Acmeism, Modernism, Silver age
RUS
1889-1966
MY: -4
MX: 305'><div class=area style='position:absolute; width:37px; height:20px; left:339px; top:1047px'></div></a>
<a  href='build-epmap.php?mp=305&a_id=75&y=1889' title='Anna Akhmatova
Acmeism, Modernism, Silver age
RUS
1889-1966
MY: -4
MX: 305'><div class=area style='position:absolute; width:36px; height:20px; left:376px; top:1047px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1322&a_id=97&y=1889' title='Claude McKay
Harlem Renaissance
JAM/USA
1889-1948
MY: 0
MX: 1322'><div class=area style='position:absolute; width:24px; height:20px; left:1356px; top:1016px'></div></a>
<a  href='build-epmap.php?mp=1322&a_id=97&y=1889' title='Claude McKay
Harlem Renaissance
JAM/USA
1889-1948
MY: 0
MX: 1322'><div class=area style='position:absolute; width:24px; height:20px; left:1380px; top:1016px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1663&a_id=286&y=1889' title='Gabriela Mistral
Christian, Lyric, National, Postmodernism
CHL
1889-1957
MY: 3
MX: 1663'><div class=area style='position:absolute; width:23px; height:20px; left:1697px; top:1059px'></div></a>
<a  href='build-epmap.php?mp=1663&a_id=286&y=1889' title='Gabriela Mistral
Christian, Lyric, National, Postmodernism
CHL
1889-1957
MY: 3
MX: 1663'><div class=area style='position:absolute; width:23px; height:20px; left:1720px; top:1059px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1001&a_id=298&y=1889' title='Conrad Potter Aiken
Laureate, Playwright
USA
1889-1973
MY: 0
MX: 1001'><div class=area style='position:absolute; width:21px; height:20px; left:1035px; top:1090px'></div></a>
<a  href='build-epmap.php?mp=1001&a_id=298&y=1889' title='Conrad Potter Aiken
Laureate, Playwright
USA
1889-1973
MY: 0
MX: 1001'><div class=area style='position:absolute; width:21px; height:20px; left:1056px; top:1090px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=393&a_id=152&y=1890' title='Boris Pasternak
Realism, Bipolar disorder, Silver age, Futurism
RUS
1890-1960
MY: 0
MX: 393'><div class=area style='position:absolute; width:33px; height:20px; left:427px; top:1053px'></div></a>
<a  href='build-epmap.php?mp=393&a_id=152&y=1890' title='Boris Pasternak
Realism, Bipolar disorder, Silver age, Futurism
RUS
1890-1960
MY: 0
MX: 393'><div class=area style='position:absolute; width:33px; height:20px; left:460px; top:1053px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=646&a_id=261&y=1890' title='Isaac Rosenberg
War
ENG
1890-1918
MY: 2
MX: 646'><div class=area style='position:absolute; width:35px; height:20px; left:680px; top:936px'></div></a>
<a  href='build-epmap.php?mp=646&a_id=261&y=1890' title='Isaac Rosenberg
War
ENG
1890-1918
MY: 2
MX: 646'><div class=area style='position:absolute; width:34px; height:20px; left:715px; top:936px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=2&a_id=41&y=1892' title='Edna St. Vincent Millay
Modernism, Formalism, Didactism, Sonnet, Bipolar disorder, Feminism
USA
1892-1950
MY: 0
MX: 2'><div class=area style='position:absolute; width:21px; height:20px; left:36px; top:1028px'></div></a>
<a  href='build-epmap.php?mp=2&a_id=41&y=1892' title='Edna St. Vincent Millay
Modernism, Formalism, Didactism, Sonnet, Bipolar disorder, Feminism
USA
1892-1950
MY: 0
MX: 2'><div class=area style='position:absolute; width:20px; height:20px; left:57px; top:1028px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1572&a_id=150&y=1892' title='J R R Tolkien
Children, Fantasy, Myth
ENG
1892-1973
MY: 0
MX: 1572'><div class=area style='position:absolute; width:24px; height:20px; left:1606px; top:1102px'></div></a>
<a  href='build-epmap.php?mp=1572&a_id=150&y=1892' title='J R R Tolkien
Children, Fantasy, Myth
ENG
1892-1973
MY: 0
MX: 1572'><div class=area style='position:absolute; width:24px; height:20px; left:1630px; top:1102px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1765&a_id=170&y=1892' title='Cesar Vallejo
Difficult, National
PER
1892-1938
MY: 0
MX: 1765'><div class=area style='position:absolute; width:24px; height:20px; left:1799px; top:991px'></div></a>
<a  href='build-epmap.php?mp=1765&a_id=170&y=1892' title='Cesar Vallejo
Difficult, National
PER
1892-1938
MY: 0
MX: 1765'><div class=area style='position:absolute; width:24px; height:20px; left:1823px; top:991px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=305&a_id=204&y=1892' title='Archibald MacLeish
Modernism
USA
1892-1982
MY: 7
MX: 305'><div class=area style='position:absolute; width:32px; height:20px; left:339px; top:1170px'></div></a>
<a  href='build-epmap.php?mp=305&a_id=204&y=1892' title='Archibald MacLeish
Modernism
USA
1892-1982
MY: 7
MX: 305'><div class=area style='position:absolute; width:31px; height:20px; left:371px; top:1170px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1663&a_id=289&y=1892' title='Victoria Sackville West

ENG
1892-1962
MY: 11
MX: 1663'><div class=area style='position:absolute; width:20px; height:20px; left:1697px; top:1133px'></div></a>
<a  href='build-epmap.php?mp=1663&a_id=289&y=1892' title='Victoria Sackville West

ENG
1892-1962
MY: 11
MX: 1663'><div class=area style='position:absolute; width:19px; height:20px; left:1717px; top:1133px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=305&a_id=375&y=1892' title='Marina Tsvetaeva
Christian, Committed suicide, Silver age
RUS
1892-1941
MY: -1
MX: 305'><div class=area style='position:absolute; width:32px; height:20px; left:339px; top:998px'></div></a>
<a  href='build-epmap.php?mp=305&a_id=375&y=1892' title='Marina Tsvetaeva
Christian, Committed suicide, Silver age
RUS
1892-1941
MY: -1
MX: 305'><div class=area style='position:absolute; width:31px; height:20px; left:371px; top:998px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=646&a_id=35&y=1893' title='Wilfred Owen
Modernism, War
ENG
1893-1918
MY: 8
MX: 646'><div class=area style='position:absolute; width:20px; height:20px; left:680px; top:985px'></div></a>
<a  href='build-epmap.php?mp=646&a_id=35&y=1893' title='Wilfred Owen
Modernism, War
ENG
1893-1918
MY: 8
MX: 646'><div class=area style='position:absolute; width:20px; height:20px; left:700px; top:985px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=305&a_id=38&y=1893' title='Dorothy Parker
Modernism, Sentimentalism, Satire
USA
1893-1967
MY: -2
MX: 305'><div class=area style='position:absolute; width:23px; height:20px; left:339px; top:1071px'></div></a>
<a  href='build-epmap.php?mp=305&a_id=38&y=1893' title='Dorothy Parker
Modernism, Sentimentalism, Satire
USA
1893-1967
MY: -2
MX: 305'><div class=area style='position:absolute; width:23px; height:20px; left:362px; top:1071px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1765&a_id=319&y=1893' title='Mao Zedong

CHN
1893-1976
MY: 0
MX: 1765'><div class=area style='position:absolute; width:25px; height:20px; left:1799px; top:1115px'></div></a>
<a  href='build-epmap.php?mp=1765&a_id=319&y=1893' title='Mao Zedong

CHN
1893-1976
MY: 0
MX: 1765'><div class=area style='position:absolute; width:25px; height:20px; left:1824px; top:1115px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=646&a_id=360&y=1893' title='Robert Nichols
War
ENG
1893-1944
MY: 0
MX: 646'><div class=area style='position:absolute; width:25px; height:20px; left:680px; top:1016px'></div></a>
<a  href='build-epmap.php?mp=646&a_id=360&y=1893' title='Robert Nichols
War
ENG
1893-1944
MY: 0
MX: 646'><div class=area style='position:absolute; width:25px; height:20px; left:705px; top:1016px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=393&a_id=372&y=1893' title='Vladimir Mayakovsky
Fantasy, Free verse, Futurism, Realism, Silver age
RUS
1893-1930
MY: 1
MX: 393'><div class=area style='position:absolute; width:40px; height:20px; left:427px; top:979px'></div></a>
<a  href='build-epmap.php?mp=393&a_id=372&y=1893' title='Vladimir Mayakovsky
Fantasy, Free verse, Futurism, Realism, Silver age
RUS
1893-1930
MY: 1
MX: 393'><div class=area style='position:absolute; width:39px; height:20px; left:467px; top:979px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=219&a_id=233&y=1894' title='E.e. cummings
Aestheticism, Didactism, Formalism, Modernism, Sonnet
USA
1894-1962
MY: -7
MX: 219'><div class=area style='position:absolute; width:37px; height:20px; left:253px; top:1028px'></div></a>
<a  href='build-epmap.php?mp=219&a_id=233&y=1894' title='E.e. cummings
Aestheticism, Didactism, Formalism, Modernism, Sonnet
USA
1894-1962
MY: -7
MX: 219'><div class=area style='position:absolute; width:36px; height:20px; left:290px; top:1028px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1322&a_id=306&y=1894' title='Jean Toomer
Harlem Renaissance, Slavery
AFR/USA
1894-1967
MY: 0
MX: 1322'><div class=area style='position:absolute; width:26px; height:20px; left:1356px; top:1090px'></div></a>
<a  href='build-epmap.php?mp=1322&a_id=306&y=1894' title='Jean Toomer
Harlem Renaissance, Slavery
AFR/USA
1894-1967
MY: 0
MX: 1322'><div class=area style='position:absolute; width:25px; height:20px; left:1382px; top:1090px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=305&a_id=197&y=1895' title='Robert Graves
Georgian poets, Modernism, War, Atheism, Myth
ENG
1895-1985
MY: 8
MX: 305'><div class=area style='position:absolute; width:24px; height:20px; left:339px; top:1195px'></div></a>
<a  href='build-epmap.php?mp=305&a_id=197&y=1895' title='Robert Graves
Georgian poets, Modernism, War, Atheism, Myth
ENG
1895-1985
MY: 8
MX: 305'><div class=area style='position:absolute; width:23px; height:20px; left:363px; top:1195px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=64&a_id=267&y=1895' title='Paul Eluard
Dada, Haiku, Surrealism
FRA
1895-1952
MY: 0
MX: 64'><div class=area style='position:absolute; width:22px; height:20px; left:98px; top:1047px'></div></a>
<a  href='build-epmap.php?mp=64&a_id=267&y=1895' title='Paul Eluard
Dada, Haiku, Surrealism
FRA
1895-1952
MY: 0
MX: 64'><div class=area style='position:absolute; width:22px; height:20px; left:120px; top:1047px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=393&a_id=370&y=1895' title='Sergei Yesenin
Peasant, Silver age
RUS
1895-1925
MY: -2
MX: 393'><div class=area style='position:absolute; width:27px; height:20px; left:427px; top:948px'></div></a>
<a  href='build-epmap.php?mp=393&a_id=370&y=1895' title='Sergei Yesenin
Peasant, Silver age
RUS
1895-1925
MY: -2
MX: 393'><div class=area style='position:absolute; width:26px; height:20px; left:454px; top:948px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=64&a_id=307&y=1896' title='Tristan Tzara
Dada, Free verse, Nihilism, Satire, Surrealism
ROU/FRA
1896-1963
MY: -2
MX: 64'><div class=area style='position:absolute; width:20px; height:20px; left:98px; top:1071px'></div></a>
<a  href='build-epmap.php?mp=64&a_id=307&y=1896' title='Tristan Tzara
Dada, Free verse, Nihilism, Satire, Surrealism
ROU/FRA
1896-1963
MY: -2
MX: 64'><div class=area style='position:absolute; width:20px; height:20px; left:118px; top:1071px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=64&a_id=333&y=1896' title='Andre Breton
Atheism, Dada, Surrealism
FRA
1896-1966
MY: 1
MX: 64'><div class=area style='position:absolute; width:23px; height:20px; left:98px; top:1096px'></div></a>
<a  href='build-epmap.php?mp=64&a_id=333&y=1896' title='Andre Breton
Atheism, Dada, Surrealism
FRA
1896-1966
MY: 1
MX: 64'><div class=area style='position:absolute; width:22px; height:20px; left:121px; top:1096px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=219&a_id=205&y=1897' title='Louise Bogan
Formalism, Bipolar disorder, Laureate
USA
1897-1970
MY: -9
MX: 219'><div class=area style='position:absolute; width:22px; height:20px; left:253px; top:1053px'></div></a>
<a  href='build-epmap.php?mp=219&a_id=205&y=1897' title='Louise Bogan
Formalism, Bipolar disorder, Laureate
USA
1897-1970
MY: -9
MX: 219'><div class=area style='position:absolute; width:22px; height:20px; left:275px; top:1053px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=64&a_id=66&y=1898' title='Federico Garcia Lorca
Freemasons, Haiku, Homoerotism, Modernism, National, Surrealism
SPA
1898-1936
MY: -1
MX: 64'><div class=area style='position:absolute; width:20px; height:20px; left:98px; top:998px'></div></a>
<a  href='build-epmap.php?mp=64&a_id=66&y=1898' title='Federico Garcia Lorca
Freemasons, Haiku, Homoerotism, Modernism, National, Surrealism
SPA
1898-1936
MY: -1
MX: 64'><div class=area style='position:absolute; width:19px; height:20px; left:118px; top:998px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1235&a_id=206&y=1898' title='Bertolt Brecht
Atheism, Expressionism, Modernism
DEU
1898-1956
MY: -1
MX: 1235'><div class=area style='position:absolute; width:23px; height:20px; left:1269px; top:1059px'></div></a>
<a  href='build-epmap.php?mp=1235&a_id=206&y=1898' title='Bertolt Brecht
Atheism, Expressionism, Modernism
DEU
1898-1956
MY: -1
MX: 1235'><div class=area style='position:absolute; width:22px; height:20px; left:1292px; top:1059px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1663&a_id=318&y=1898' title='Stephen Vincent Benet
Fantasy
USA
1898-1943
MY: 1
MX: 1663'><div class=area style='position:absolute; width:21px; height:20px; left:1697px; top:1035px'></div></a>
<a  href='build-epmap.php?mp=1663&a_id=318&y=1898' title='Stephen Vincent Benet
Fantasy
USA
1898-1943
MY: 1
MX: 1663'><div class=area style='position:absolute; width:20px; height:20px; left:1718px; top:1035px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1765&a_id=132&y=1899' title='Jibanananda Das

IND
1899-1954
MY: 3
MX: 1765'><div class=area style='position:absolute; width:15px; height:20px; left:1799px; top:1084px'></div></a>
<a  href='build-epmap.php?mp=1765&a_id=132&y=1899' title='Jibanananda Das

IND
1899-1954
MY: 3
MX: 1765'><div class=area style='position:absolute; width:15px; height:20px; left:1814px; top:1084px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=906&a_id=147&y=1899' title='Jorge Luis Borges
Vernacular, Agnosticism, Haiku, National, Philosophy, Fantasy
ARG
1899-1986
MY: 0
MX: 906'><div class=area style='position:absolute; width:24px; height:20px; left:940px; top:1164px'></div></a>
<a  href='build-epmap.php?mp=906&a_id=147&y=1899' title='Jorge Luis Borges
Vernacular, Agnosticism, Haiku, National, Philosophy, Fantasy
ARG
1899-1986
MY: 0
MX: 906'><div class=area style='position:absolute; width:24px; height:20px; left:964px; top:1164px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1233&a_id=156&y=1899' title='Ernest Hemingway
Expressionism, Modernism
USA
1899-1961
MY: 0
MX: 1233'><div class=area style='position:absolute; width:37px; height:20px; left:1267px; top:1084px'></div></a>
<a  href='build-epmap.php?mp=1233&a_id=156&y=1899' title='Ernest Hemingway
Expressionism, Modernism
USA
1899-1961
MY: 0
MX: 1233'><div class=area style='position:absolute; width:37px; height:20px; left:1304px; top:1084px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=219&a_id=172&y=1899' title='Harold Hart Crane
Modernism, Formalism, Blank verse, Committed suicide, Bipolar disorder, Difficult, Fantasy
USA
1899-1932
MY: -7
MX: 219'><div class=area style='position:absolute; width:21px; height:20px; left:253px; top:954px'></div></a>
<a  href='build-epmap.php?mp=219&a_id=172&y=1899' title='Harold Hart Crane
Modernism, Formalism, Blank verse, Committed suicide, Bipolar disorder, Difficult, Fantasy
USA
1899-1932
MY: -7
MX: 219'><div class=area style='position:absolute; width:20px; height:20px; left:274px; top:954px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=219&a_id=259&y=1899' title='Allen Tate
Formalism, Fugitives, Laureate, Modernism, Southern Agrarians
USA
1899-1979
MY: 6
MX: 219'><div class=area style='position:absolute; width:16px; height:20px; left:253px; top:1176px'></div></a>
<a  href='build-epmap.php?mp=219&a_id=259&y=1899' title='Allen Tate
Formalism, Fugitives, Laureate, Modernism, Southern Agrarians
USA
1899-1979
MY: 6
MX: 219'><div class=area style='position:absolute; width:16px; height:20px; left:269px; top:1176px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=64&a_id=221&y=1900' title='Robert Desnos
Fantasy, Surrealism
FRA
1900-1945
MY: -3
MX: 64'><div class=area style='position:absolute; width:26px; height:20px; left:98px; top:1022px'></div></a>
<a  href='build-epmap.php?mp=64&a_id=221&y=1900' title='Robert Desnos
Fantasy, Surrealism
FRA
1900-1945
MY: -3
MX: 64'><div class=area style='position:absolute; width:25px; height:20px; left:124px; top:1022px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=64&a_id=229&y=1900' title='Jacques Prevert
Realism, Surrealism, Symbolism
FRA
1900-1977
MY: -2
MX: 64'><div class=area style='position:absolute; width:24px; height:20px; left:98px; top:1127px'></div></a>
<a  href='build-epmap.php?mp=64&a_id=229&y=1900' title='Jacques Prevert
Realism, Surrealism, Symbolism
FRA
1900-1977
MY: -2
MX: 64'><div class=area style='position:absolute; width:23px; height:20px; left:122px; top:1127px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=305&a_id=258&y=1900' title='Giorgos Seferis

GRC
1900-1971
MY: 0
MX: 305'><div class=area style='position:absolute; width:24px; height:20px; left:339px; top:1121px'></div></a>
<a  href='build-epmap.php?mp=305&a_id=258&y=1900' title='Giorgos Seferis

GRC
1900-1971
MY: 0
MX: 305'><div class=area style='position:absolute; width:23px; height:20px; left:363px; top:1121px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=305&a_id=166&y=1901' title='Kenneth Slessor
Modernism
AUS
1901-1971
MY: 4
MX: 305'><div class=area style='position:absolute; width:26px; height:20px; left:339px; top:1145px'></div></a>
<a  href='build-epmap.php?mp=305&a_id=166&y=1901' title='Kenneth Slessor
Modernism
AUS
1901-1971
MY: 4
MX: 305'><div class=area style='position:absolute; width:26px; height:20px; left:365px; top:1145px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1320&a_id=11&y=1902' title='Langston Hughes
Harlem Renaissance, Modernism, Didactism, Slavery, Jazz
AFR/USA
1902-1967
MY: 0
MX: 1320'><div class=area style='position:absolute; width:34px; height:20px; left:1354px; top:1115px'></div></a>
<a  href='build-epmap.php?mp=1320&a_id=11&y=1902' title='Langston Hughes
Harlem Renaissance, Modernism, Didactism, Slavery, Jazz
AFR/USA
1902-1967
MY: 0
MX: 1320'><div class=area style='position:absolute; width:33px; height:20px; left:1388px; top:1115px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1399&a_id=30&y=1902' title='Ogden Nash
Humour
USA
1902-1971
MY: 0
MX: 1399'><div class=area style='position:absolute; width:19px; height:20px; left:1433px; top:1127px'></div></a>
<a  href='build-epmap.php?mp=1399&a_id=30&y=1902' title='Ogden Nash
Humour
USA
1902-1971
MY: 0
MX: 1399'><div class=area style='position:absolute; width:18px; height:20px; left:1452px; top:1127px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=305&a_id=73&y=1902' title='Nazim Hikmet
Avant-garde, Free verse, Modernism
TUR
1902-1963
MY: -1
MX: 305'><div class=area style='position:absolute; width:24px; height:20px; left:339px; top:1096px'></div></a>
<a  href='build-epmap.php?mp=305&a_id=73&y=1902' title='Nazim Hikmet
Avant-garde, Free verse, Modernism
TUR
1902-1963
MY: -1
MX: 305'><div class=area style='position:absolute; width:24px; height:20px; left:363px; top:1096px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1663&a_id=155&y=1902' title='Stevie Smith
Dark, Humour
ENG
1902-1971
MY: 9
MX: 1663'><div class=area style='position:absolute; width:27px; height:20px; left:1697px; top:1182px'></div></a>
<a  href='build-epmap.php?mp=1663&a_id=155&y=1902' title='Stevie Smith
Dark, Humour
ENG
1902-1971
MY: 9
MX: 1663'><div class=area style='position:absolute; width:27px; height:20px; left:1724px; top:1182px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1663&a_id=231&y=1902' title='A.S.J. Tessimond
Bipolar disorder, Vernacular
ENG
1902-1962
MY: 10
MX: 1663'><div class=area style='position:absolute; width:35px; height:20px; left:1697px; top:1158px'></div></a>
<a  href='build-epmap.php?mp=1663&a_id=231&y=1902' title='A.S.J. Tessimond
Bipolar disorder, Vernacular
ENG
1902-1962
MY: 10
MX: 1663'><div class=area style='position:absolute; width:35px; height:20px; left:1732px; top:1158px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=2&a_id=270&y=1903' title='Anais Nin
Erotism, Feminism
CUB/USA
1903-1977
MY: 0
MX: 2'><div class=area style='position:absolute; width:13px; height:20px; left:36px; top:1145px'></div></a>
<a  href='build-epmap.php?mp=2&a_id=270&y=1903' title='Anais Nin
Erotism, Feminism
CUB/USA
1903-1977
MY: 0
MX: 2'><div class=area style='position:absolute; width:13px; height:20px; left:49px; top:1145px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=219&a_id=292&y=1903' title='Countee Cullen
Formalism, Harlem Renaissance
AFR/USA
1903-1946
MY: -8
MX: 219'><div class=area style='position:absolute; width:22px; height:20px; left:253px; top:1004px'></div></a>
<a  href='build-epmap.php?mp=219&a_id=292&y=1903' title='Countee Cullen
Formalism, Harlem Renaissance
AFR/USA
1903-1946
MY: -8
MX: 219'><div class=area style='position:absolute; width:21px; height:20px; left:275px; top:1004px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=64&a_id=4&y=1904' title='Pablo Neruda
Surrealism, Modernism, Sonnet, National, Atheism
CHL
1904-1973
MY: 2
MX: 64'><div class=area style='position:absolute; width:27px; height:20px; left:98px; top:1152px'></div></a>
<a  href='build-epmap.php?mp=64&a_id=4&y=1904' title='Pablo Neruda
Surrealism, Modernism, Sonnet, National, Atheism
CHL
1904-1973
MY: 2
MX: 64'><div class=area style='position:absolute; width:26px; height:20px; left:125px; top:1152px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1157&a_id=95&y=1904' title='Patrick Kavanagh
Nature
IRL
1904-1967
MY: 0
MX: 1157'><div class=area style='position:absolute; width:32px; height:20px; left:1191px; top:1121px'></div></a>
<a  href='build-epmap.php?mp=1157&a_id=95&y=1904' title='Patrick Kavanagh
Nature
IRL
1904-1967
MY: 0
MX: 1157'><div class=area style='position:absolute; width:31px; height:20px; left:1223px; top:1121px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1765&a_id=342&y=1904' title='Subhadra Kumari Chauhan
Children
IND
1904-1948
MY: 0
MX: 1765'><div class=area style='position:absolute; width:29px; height:20px; left:1799px; top:1059px'></div></a>
<a  href='build-epmap.php?mp=1765&a_id=342&y=1904' title='Subhadra Kumari Chauhan
Children
IND
1904-1948
MY: 0
MX: 1765'><div class=area style='position:absolute; width:29px; height:20px; left:1828px; top:1059px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=826&a_id=148&y=1905' title='Mary Elizabeth Frye
Didactism
USA
1905-2004
MY: 0
MX: 826'><div class=area style='position:absolute; width:17px; height:20px; left:860px; top:1238px'></div></a>
<a  href='build-epmap.php?mp=826&a_id=148&y=1905' title='Mary Elizabeth Frye
Didactism
USA
1905-2004
MY: 0
MX: 826'><div class=area style='position:absolute; width:16px; height:20px; left:877px; top:1238px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1663&a_id=350&y=1905' title='Piet Hein

DNK
1905-1996
MY: 7
MX: 1663'><div class=area style='position:absolute; width:17px; height:20px; left:1697px; top:1256px'></div></a>
<a  href='build-epmap.php?mp=1663&a_id=350&y=1905' title='Piet Hein

DNK
1905-1996
MY: 7
MX: 1663'><div class=area style='position:absolute; width:16px; height:20px; left:1714px; top:1256px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=219&a_id=250&y=1906' title='John Betjeman
Blank verse, Laureate
ENG
1906-1984
MY: 4
MX: 219'><div class=area style='position:absolute; width:31px; height:20px; left:253px; top:1201px'></div></a>
<a  href='build-epmap.php?mp=219&a_id=250&y=1906' title='John Betjeman
Blank verse, Laureate
ENG
1906-1984
MY: 4
MX: 219'><div class=area style='position:absolute; width:31px; height:20px; left:284px; top:1201px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1765&a_id=54&y=1907' title='Harivansh Rai Bachchan
Chhayavaad
IND
1907-2003
MY: -4
MX: 1765'><div class=area style='position:absolute; width:33px; height:20px; left:1799px; top:1213px'></div></a>
<a  href='build-epmap.php?mp=1765&a_id=54&y=1907' title='Harivansh Rai Bachchan
Chhayavaad
IND
1907-2003
MY: -4
MX: 1765'><div class=area style='position:absolute; width:32px; height:20px; left:1832px; top:1213px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=219&a_id=209&y=1907' title='W H Auden
Auden Group, Modernism, Formalism, Christian, Homoerotism
ENG/USA
1907-1973
MY: 1
MX: 219'><div class=area style='position:absolute; width:23px; height:20px; left:253px; top:1152px'></div></a>
<a  href='build-epmap.php?mp=219&a_id=209&y=1907' title='W H Auden
Auden Group, Modernism, Formalism, Christian, Homoerotism
ENG/USA
1907-1973
MY: 1
MX: 219'><div class=area style='position:absolute; width:23px; height:20px; left:276px; top:1152px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=219&a_id=330&y=1907' title='Louis MacNeice
Auden Group, Bipolar disorder, Formalism
IRL
1907-1963
MY: -2
MX: 219'><div class=area style='position:absolute; width:33px; height:20px; left:253px; top:1102px'></div></a>
<a  href='build-epmap.php?mp=219&a_id=330&y=1907' title='Louis MacNeice
Auden Group, Bipolar disorder, Formalism
IRL
1907-1963
MY: -2
MX: 219'><div class=area style='position:absolute; width:32px; height:20px; left:286px; top:1102px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=219&a_id=235&y=1908' title='Theodore Roethke
Formalism, Bipolar disorder, Nonsense
USA
1908-1963
MY: 1
MX: 219'><div class=area style='position:absolute; width:28px; height:20px; left:253px; top:1127px'></div></a>
<a  href='build-epmap.php?mp=219&a_id=235&y=1908' title='Theodore Roethke
Formalism, Bipolar disorder, Nonsense
USA
1908-1963
MY: 1
MX: 219'><div class=area style='position:absolute; width:27px; height:20px; left:281px; top:1127px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1663&a_id=275&y=1909' title='Anna Swirszczynska
Erotism
POL
1909-1984
MY: 3
MX: 1663'><div class=area style='position:absolute; width:35px; height:20px; left:1697px; top:1207px'></div></a>
<a  href='build-epmap.php?mp=1663&a_id=275&y=1909' title='Anna Swirszczynska
Erotism
POL
1909-1984
MY: 3
MX: 1663'><div class=area style='position:absolute; width:35px; height:20px; left:1732px; top:1207px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=219&a_id=352&y=1909' title='Stephen Spender
Auden Group, Formalism, Laureate
ENG
1909-1995
MY: 1
MX: 219'><div class=area style='position:absolute; width:28px; height:20px; left:253px; top:1225px'></div></a>
<a  href='build-epmap.php?mp=219&a_id=352&y=1909' title='Stephen Spender
Auden Group, Formalism, Laureate
ENG
1909-1995
MY: 1
MX: 219'><div class=area style='position:absolute; width:28px; height:20px; left:281px; top:1225px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=2&a_id=39&y=1911' title='Elizabeth Bishop
Modernism, Didactism, Laureate, Feminism
USA
1911-1979
MY: 0
MX: 2'><div class=area style='position:absolute; width:24px; height:20px; left:36px; top:1176px'></div></a>
<a  href='build-epmap.php?mp=2&a_id=39&y=1911' title='Elizabeth Bishop
Modernism, Didactism, Laureate, Feminism
USA
1911-1979
MY: 0
MX: 2'><div class=area style='position:absolute; width:23px; height:20px; left:60px; top:1176px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1399&a_id=123&y=1911' title='Czeslaw Milosz
Naive
POL
1911-2004
MY: 0
MX: 1399'><div class=area style='position:absolute; width:23px; height:20px; left:1433px; top:1256px'></div></a>
<a  href='build-epmap.php?mp=1399&a_id=123&y=1911' title='Czeslaw Milosz
Naive
POL
1911-2004
MY: 0
MX: 1399'><div class=area style='position:absolute; width:22px; height:20px; left:1456px; top:1256px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=565&a_id=131&y=1911' title='Kenneth Patchen
Anarchism, Beat, Jazz
USA
1911-1972
MY: 0
MX: 565'><div class=area style='position:absolute; width:28px; height:20px; left:599px; top:1158px'></div></a>
<a  href='build-epmap.php?mp=565&a_id=131&y=1911' title='Kenneth Patchen
Anarchism, Beat, Jazz
USA
1911-1972
MY: 0
MX: 565'><div class=area style='position:absolute; width:27px; height:20px; left:627px; top:1158px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1765&a_id=194&y=1911' title='Faiz Ahmed Faiz

PAK
1911-1984
MY: -5
MX: 1765'><div class=area style='position:absolute; width:16px; height:20px; left:1799px; top:1164px'></div></a>
<a  href='build-epmap.php?mp=1765&a_id=194&y=1911' title='Faiz Ahmed Faiz

PAK
1911-1984
MY: -5
MX: 1765'><div class=area style='position:absolute; width:16px; height:20px; left:1815px; top:1164px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1320&a_id=193&y=1913' title='Robert Hayden
Harlem Renaissance, Modernism, Didactism, Laureate
AFR/USA
1913-1980
MY: 0
MX: 1320'><div class=area style='position:absolute; width:26px; height:20px; left:1354px; top:1189px'></div></a>
<a  href='build-epmap.php?mp=1320&a_id=193&y=1913' title='Robert Hayden
Harlem Renaissance, Modernism, Didactism, Laureate
AFR/USA
1913-1980
MY: 0
MX: 1320'><div class=area style='position:absolute; width:25px; height:20px; left:1380px; top:1189px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1663&a_id=195&y=1913' title='May Swenson
Erotic, Homoerotism
USA
1913-1989
MY: 3
MX: 1663'><div class=area style='position:absolute; width:30px; height:20px; left:1697px; top:1232px'></div></a>
<a  href='build-epmap.php?mp=1663&a_id=195&y=1913' title='May Swenson
Erotic, Homoerotism
USA
1913-1989
MY: 3
MX: 1663'><div class=area style='position:absolute; width:30px; height:20px; left:1727px; top:1232px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=305&a_id=241&y=1913' title='Delmore Schwartz
Modernism, Bipolar disorder
USA
1913-1966
MY: 12
MX: 305'><div class=area style='position:absolute; width:31px; height:20px; left:339px; top:1219px'></div></a>
<a  href='build-epmap.php?mp=305&a_id=241&y=1913' title='Delmore Schwartz
Modernism, Bipolar disorder
USA
1913-1966
MY: 12
MX: 305'><div class=area style='position:absolute; width:30px; height:20px; left:370px; top:1219px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=486&a_id=26&y=1914' title='Dylan Thomas
Modernism, New Romantics, New Apocalyptics, Didactism, Bipolar disorder, National
WAL
1914-1953
MY: 0
MX: 486'><div class=area style='position:absolute; width:33px; height:20px; left:520px; top:1108px'></div></a>
<a  href='build-epmap.php?mp=486&a_id=26&y=1914' title='Dylan Thomas
Modernism, New Romantics, New Apocalyptics, Didactism, Bipolar disorder, National
WAL
1914-1953
MY: 0
MX: 486'><div class=area style='position:absolute; width:33px; height:20px; left:553px; top:1108px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=62&a_id=94&y=1914' title='Octavio Paz
Existentialism, Haiku, National, Surrealism
MEX
1914-1998
MY: 0
MX: 62'><div class=area style='position:absolute; width:15px; height:20px; left:96px; top:1244px'></div></a>
<a  href='build-epmap.php?mp=62&a_id=94&y=1914' title='Octavio Paz
Existentialism, Haiku, National, Surrealism
MEX
1914-1998
MY: 0
MX: 62'><div class=area style='position:absolute; width:15px; height:20px; left:111px; top:1244px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=646&a_id=137&y=1914' title='John Berryman
Confessionalism, Committed suicide, Bipolar disorder
USA
1914-1972
MY: 0
MX: 646'><div class=area style='position:absolute; width:32px; height:20px; left:680px; top:1164px'></div></a>
<a  href='build-epmap.php?mp=646&a_id=137&y=1914' title='John Berryman
Confessionalism, Committed suicide, Bipolar disorder
USA
1914-1972
MY: 0
MX: 646'><div class=area style='position:absolute; width:31px; height:20px; left:712px; top:1164px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1663&a_id=144&y=1914' title='William Stafford
Laureate
USA
1914-1993
MY: 8
MX: 1663'><div class=area style='position:absolute; width:26px; height:20px; left:1697px; top:1281px'></div></a>
<a  href='build-epmap.php?mp=1663&a_id=144&y=1914' title='William Stafford
Laureate
USA
1914-1993
MY: 8
MX: 1663'><div class=area style='position:absolute; width:25px; height:20px; left:1723px; top:1281px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=219&a_id=167&y=1914' title='Weldon Kees
Formalism, Jazz
USA
1914-1955
MY: -6
MX: 219'><div class=area style='position:absolute; width:19px; height:20px; left:253px; top:1078px'></div></a>
<a  href='build-epmap.php?mp=219&a_id=167&y=1914' title='Weldon Kees
Formalism, Jazz
USA
1914-1955
MY: -6
MX: 219'><div class=area style='position:absolute; width:18px; height:20px; left:272px; top:1078px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=486&a_id=249&y=1914' title='Randall Jarrell
Bipolar disorder, Children, Formalism, Fugitives, Laureate, Modernism, Neoromanticism, War
USA
1914-1965
MY: 0
MX: 486'><div class=area style='position:absolute; width:22px; height:20px; left:520px; top:1145px'></div></a>
<a  href='build-epmap.php?mp=486&a_id=249&y=1914' title='Randall Jarrell
Bipolar disorder, Children, Formalism, Fugitives, Laureate, Modernism, Neoromanticism, War
USA
1914-1965
MY: 0
MX: 486'><div class=area style='position:absolute; width:21px; height:20px; left:542px; top:1145px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=486&a_id=355&y=1914' title='Laurie Lee
New Romantics
ENG
1914-1997
MY: 0
MX: 486'><div class=area style='position:absolute; width:14px; height:20px; left:520px; top:1244px'></div></a>
<a  href='build-epmap.php?mp=486&a_id=355&y=1914' title='Laurie Lee
New Romantics
ENG
1914-1997
MY: 0
MX: 486'><div class=area style='position:absolute; width:14px; height:20px; left:534px; top:1244px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1085&a_id=134&y=1915' title='Judith Wright
Bush
AUS
1915-2000
MY: 0
MX: 1085'><div class=area style='position:absolute; width:23px; height:20px; left:1119px; top:1256px'></div></a>
<a  href='build-epmap.php?mp=1085&a_id=134&y=1915' title='Judith Wright
Bush
AUS
1915-2000
MY: 0
MX: 1085'><div class=area style='position:absolute; width:23px; height:20px; left:1142px; top:1256px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1487&a_id=20&y=1916' title='Roald Dahl
Children
ENG
1916-1990
MY: 0
MX: 1487'><div class=area style='position:absolute; width:17px; height:20px; left:1521px; top:1225px'></div></a>
<a  href='build-epmap.php?mp=1487&a_id=20&y=1916' title='Roald Dahl
Children
ENG
1916-1990
MY: 0
MX: 1487'><div class=area style='position:absolute; width:16px; height:20px; left:1538px; top:1225px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=646&a_id=158&y=1917' title='Robert Lowell
Bipolar disorder, Confessionalism, Formalism, Laureate, Modernism
USA
1917-1977
MY: 0
MX: 646'><div class=area style='position:absolute; width:28px; height:20px; left:680px; top:1189px'></div></a>
<a  href='build-epmap.php?mp=646&a_id=158&y=1917' title='Robert Lowell
Bipolar disorder, Confessionalism, Formalism, Laureate, Modernism
USA
1917-1977
MY: 0
MX: 646'><div class=area style='position:absolute; width:28px; height:20px; left:708px; top:1189px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1487&a_id=311&y=1917' title='Charles Causley
Children
ENG
1917-2003
MY: 0
MX: 1487'><div class=area style='position:absolute; width:27px; height:20px; left:1521px; top:1269px'></div></a>
<a  href='build-epmap.php?mp=1487&a_id=311&y=1917' title='Charles Causley
Children
ENG
1917-2003
MY: 0
MX: 1487'><div class=area style='position:absolute; width:27px; height:20px; left:1548px; top:1269px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1572&a_id=56&y=1918' title='Spike Milligan
Children, Humour, Nonsense
IRL
1918-2002
MY: 0
MX: 1572'><div class=area style='position:absolute; width:26px; height:20px; left:1606px; top:1269px'></div></a>
<a  href='build-epmap.php?mp=1572&a_id=56&y=1918' title='Spike Milligan
Children, Humour, Nonsense
IRL
1918-2002
MY: 0
MX: 1572'><div class=area style='position:absolute; width:25px; height:20px; left:1632px; top:1269px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=393&a_id=12&y=1920' title='Charles Bukowski
Dirty realism, Transgressive fiction, Optimism, Atheism
USA
1920-1994
MY: 0
MX: 393'><div class=area style='position:absolute; width:32px; height:20px; left:427px; top:1250px'></div></a>
<a  href='build-epmap.php?mp=393&a_id=12&y=1920' title='Charles Bukowski
Dirty realism, Transgressive fiction, Optimism, Atheism
USA
1920-1994
MY: 0
MX: 393'><div class=area style='position:absolute; width:31px; height:20px; left:459px; top:1250px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1001&a_id=181&y=1920' title='Paul Celan
Bipolar disorder, Committed suicide, Difficult, Playwright
ROU/FRA
1920-1970
MY: 0
MX: 1001'><div class=area style='position:absolute; width:20px; height:20px; left:1035px; top:1176px'></div></a>
<a  href='build-epmap.php?mp=1001&a_id=181&y=1920' title='Paul Celan
Bipolar disorder, Committed suicide, Difficult, Playwright
ROU/FRA
1920-1970
MY: 0
MX: 1001'><div class=area style='position:absolute; width:20px; height:20px; left:1055px; top:1176px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=646&a_id=227&y=1920' title='Keith Douglas
War
ENG
1920-1944
MY: 0
MX: 646'><div class=area style='position:absolute; width:34px; height:20px; left:680px; top:1096px'></div></a>
<a  href='build-epmap.php?mp=646&a_id=227&y=1920' title='Keith Douglas
War
ENG
1920-1944
MY: 0
MX: 646'><div class=area style='position:absolute; width:33px; height:20px; left:714px; top:1096px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1001&a_id=291&y=1920' title='Gwen Harwood
Playwright
AUS
1920-1995
MY: 1
MX: 1001'><div class=area style='position:absolute; width:29px; height:20px; left:1035px; top:1262px'></div></a>
<a  href='build-epmap.php?mp=1001&a_id=291&y=1920' title='Gwen Harwood
Playwright
AUS
1920-1995
MY: 1
MX: 1001'><div class=area style='position:absolute; width:28px; height:20px; left:1064px; top:1262px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=219&a_id=349&y=1920' title='Howard Nemerov
Formalism, Laureate
USA
1920-1991
MY: 5
MX: 219'><div class=area style='position:absolute; width:29px; height:20px; left:253px; top:1275px'></div></a>
<a  href='build-epmap.php?mp=219&a_id=349&y=1920' title='Howard Nemerov
Formalism, Laureate
USA
1920-1991
MY: 5
MX: 219'><div class=area style='position:absolute; width:29px; height:20px; left:282px; top:1275px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=219&a_id=25&y=1922' title='Philip Larkin
The Movement, Formalism, Agnosticism, Atheism
ENG
1922-1985
MY: 3
MX: 219'><div class=area style='position:absolute; width:21px; height:20px; left:253px; top:1250px'></div></a>
<a  href='build-epmap.php?mp=219&a_id=25&y=1922' title='Philip Larkin
The Movement, Formalism, Agnosticism, Atheism
ENG
1922-1985
MY: 3
MX: 219'><div class=area style='position:absolute; width:21px; height:20px; left:274px; top:1250px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=565&a_id=105&y=1922' title='Jack Kerouac
Beat, New American Poetry, Neoromanticism, Existentialism
USA
1922-1969
MY: 0
MX: 565'><div class=area style='position:absolute; width:28px; height:20px; left:599px; top:1182px'></div></a>
<a  href='build-epmap.php?mp=565&a_id=105&y=1922' title='Jack Kerouac
Beat, New American Poetry, Neoromanticism, Existentialism
USA
1922-1969
MY: 0
MX: 565'><div class=area style='position:absolute; width:27px; height:20px; left:627px; top:1182px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=305&a_id=232&y=1922' title='Vasko Popa
Epic, Modernism
SRB/ROU
1922-1991
MY: 0
MX: 305'><div class=area style='position:absolute; width:19px; height:20px; left:339px; top:1250px'></div></a>
<a  href='build-epmap.php?mp=305&a_id=232&y=1922' title='Vasko Popa
Epic, Modernism
SRB/ROU
1922-1991
MY: 0
MX: 305'><div class=area style='position:absolute; width:18px; height:20px; left:358px; top:1250px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=305&a_id=124&y=1923' title='Denise Levertov
New American Poetry, Black Mountain, Postmodernism
ENG/USA
1923-1997
MY: 1
MX: 305'><div class=area style='position:absolute; width:27px; height:20px; left:339px; top:1275px'></div></a>
<a  href='build-epmap.php?mp=305&a_id=124&y=1923' title='Denise Levertov
New American Poetry, Black Mountain, Postmodernism
ENG/USA
1923-1997
MY: 1
MX: 305'><div class=area style='position:absolute; width:27px; height:20px; left:366px; top:1275px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1765&a_id=130&y=1923' title='Nizar Qabbani
National
SYR
1923-1998
MY: -1
MX: 1765'><div class=area style='position:absolute; width:28px; height:20px; left:1799px; top:1269px'></div></a>
<a  href='build-epmap.php?mp=1765&a_id=130&y=1923' title='Nizar Qabbani
National
SYR
1923-1998
MY: -1
MX: 1765'><div class=area style='position:absolute; width:27px; height:20px; left:1827px; top:1269px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1663&a_id=237&y=1923' title='Alan Dugan

USA
1923-2003
MY: 3
MX: 1663'><div class=area style='position:absolute; width:22px; height:20px; left:1697px; top:1306px'></div></a>
<a  href='build-epmap.php?mp=1663&a_id=237&y=1923' title='Alan Dugan

USA
1923-2003
MY: 3
MX: 1663'><div class=area style='position:absolute; width:22px; height:20px; left:1719px; top:1306px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1765&a_id=146&y=1924' title='Nissim Ezekiel

IND
1924-2004
MY: 0
MX: 1765'><div class=area style='position:absolute; width:25px; height:20px; left:1799px; top:1293px'></div></a>
<a  href='build-epmap.php?mp=1765&a_id=146&y=1924' title='Nissim Ezekiel

IND
1924-2004
MY: 0
MX: 1765'><div class=area style='position:absolute; width:25px; height:20px; left:1824px; top:1293px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1399&a_id=191&y=1924' title='Yehuda Amichai
Laureate, Philosophy, Vernacular
ISR
1924-2000
MY: 0
MX: 1399'><div class=area style='position:absolute; width:28px; height:20px; left:1433px; top:1281px'></div></a>
<a  href='build-epmap.php?mp=1399&a_id=191&y=1924' title='Yehuda Amichai
Laureate, Philosophy, Vernacular
ISR
1924-2000
MY: 0
MX: 1399'><div class=area style='position:absolute; width:28px; height:20px; left:1461px; top:1281px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1001&a_id=339&y=1924' title='Zbigniew Herbert
Playwright
POL
1924-1998
MY: 2
MX: 1001'><div class=area style='position:absolute; width:31px; height:20px; left:1035px; top:1287px'></div></a>
<a  href='build-epmap.php?mp=1001&a_id=339&y=1924' title='Zbigniew Herbert
Playwright
POL
1924-1998
MY: 2
MX: 1001'><div class=area style='position:absolute; width:30px; height:20px; left:1066px; top:1287px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=219&a_id=302&y=1925' title='Donald Justice
Formalism
USA
1925-2004
MY: 0
MX: 219'><div class=area style='position:absolute; width:25px; height:20px; left:253px; top:1299px'></div></a>
<a  href='build-epmap.php?mp=219&a_id=302&y=1925' title='Donald Justice
Formalism
USA
1925-2004
MY: 0
MX: 219'><div class=area style='position:absolute; width:25px; height:20px; left:278px; top:1299px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=565&a_id=29&y=1926' title='Allen Ginsberg
Beat, Confessionalism, New American Poetry, Free verse, Transgressive fiction, Fantasy, Neoromanticism, Homoerotism
USA
1926-1997
MY: 0
MX: 565'><div class=area style='position:absolute; width:30px; height:20px; left:599px; top:1281px'></div></a>
<a  href='build-epmap.php?mp=565&a_id=29&y=1926' title='Allen Ginsberg
Beat, Confessionalism, New American Poetry, Free verse, Transgressive fiction, Fantasy, Neoromanticism, Homoerotism
USA
1926-1997
MY: 0
MX: 565'><div class=area style='position:absolute; width:29px; height:20px; left:629px; top:1281px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=565&a_id=161&y=1926' title='Wallace Berman
Beat
USA
1926-1976
MY: 0
MX: 565'><div class=area style='position:absolute; width:26px; height:20px; left:599px; top:1213px'></div></a>
<a  href='build-epmap.php?mp=565&a_id=161&y=1926' title='Wallace Berman
Beat
USA
1926-1976
MY: 0
MX: 565'><div class=area style='position:absolute; width:26px; height:20px; left:625px; top:1213px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1322&a_id=1&y=1928' title='Maya Angelou
Harlem Writers Guild, Black Arts Movement, National
AFR/USA
1928-2014
MY: 0
MX: 1322'><div class=area style='position:absolute; width:31px; height:20px; left:1356px; top:1336px'></div></a>
<a  href='build-epmap.php?mp=1322&a_id=1&y=1928' title='Maya Angelou
Harlem Writers Guild, Black Arts Movement, National
AFR/USA
1928-2014
MY: 0
MX: 1322'><div class=area style='position:absolute; width:30px; height:20px; left:1387px; top:1336px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=646&a_id=28&y=1928' title='Anne Sexton
Confessionalism, Committed suicide, Bipolar disorder, Slavery
USA
1928-1974
MY: 4
MX: 646'><div class=area style='position:absolute; width:24px; height:20px; left:680px; top:1238px'></div></a>
<a  href='build-epmap.php?mp=646&a_id=28&y=1928' title='Anne Sexton
Confessionalism, Committed suicide, Bipolar disorder, Slavery
USA
1928-1974
MY: 4
MX: 646'><div class=area style='position:absolute; width:24px; height:20px; left:704px; top:1238px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=2&a_id=139&y=1929' title='Adrienne Rich
Vernacular, Fantasy, Social, Feminism
USA
1929-2012
MY: 0
MX: 2'><div class=area style='position:absolute; width:17px; height:20px; left:36px; top:1336px'></div></a>
<a  href='build-epmap.php?mp=2&a_id=139&y=1929' title='Adrienne Rich
Vernacular, Fantasy, Social, Feminism
USA
1929-2012
MY: 0
MX: 2'><div class=area style='position:absolute; width:16px; height:20px; left:53px; top:1336px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1765&a_id=187&y=1929' title='A.K. Ramanujan

IND
1929-1993
MY: -5
MX: 1765'><div class=area style='position:absolute; width:36px; height:20px; left:1799px; top:1244px'></div></a>
<a  href='build-epmap.php?mp=1765&a_id=187&y=1929' title='A.K. Ramanujan

IND
1929-1993
MY: -5
MX: 1765'><div class=area style='position:absolute; width:36px; height:20px; left:1835px; top:1244px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1572&a_id=62&y=1930' title='Shel Silverstein
Children, Humour, Nonsense
USA
1930-1999
MY: 0
MX: 1572'><div class=area style='position:absolute; width:37px; height:20px; left:1606px; top:1299px'></div></a>
<a  href='build-epmap.php?mp=1572&a_id=62&y=1930' title='Shel Silverstein
Children, Humour, Nonsense
USA
1930-1999
MY: 0
MX: 1572'><div class=area style='position:absolute; width:37px; height:20px; left:1643px; top:1299px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=646&a_id=69&y=1930' title='Ted Hughes
Children, Confessionalism, Laureate, The Movement
ENG
1930-1998
MY: 0
MX: 646'><div class=area style='position:absolute; width:32px; height:20px; left:680px; top:1293px'></div></a>
<a  href='build-epmap.php?mp=646&a_id=69&y=1930' title='Ted Hughes
Children, Confessionalism, Laureate, The Movement
ENG
1930-1998
MY: 0
MX: 646'><div class=area style='position:absolute; width:31px; height:20px; left:712px; top:1293px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=62&a_id=96&y=1930' title='Derek Walcott
Confessionalism, Formalism, Gothic, Imagism, Laureate, Methodism, National, Spiritualism, Surrealism
LCA
1930-
MY: 0
MX: 62'><div class=area style='position:absolute; width:27px; height:20px; left:96px; top:1349px'></div></a>
<a  href='build-epmap.php?mp=62&a_id=96&y=1930' title='Derek Walcott
Confessionalism, Formalism, Gothic, Imagism, Laureate, Methodism, National, Spiritualism, Surrealism
LCA
1930-
MY: 0
MX: 62'><div class=area style='position:absolute; width:26px; height:20px; left:123px; top:1349px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=565&a_id=222&y=1930' title='Gregory Corso
Beat, Free verse, New American Poetry
USA
1930-2001
MY: 0
MX: 565'><div class=area style='position:absolute; width:21px; height:20px; left:599px; top:1306px'></div></a>
<a  href='build-epmap.php?mp=565&a_id=222&y=1930' title='Gregory Corso
Beat, Free verse, New American Poetry
USA
1930-2001
MY: 0
MX: 565'><div class=area style='position:absolute; width:20px; height:20px; left:620px; top:1306px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1765&a_id=162&y=1931' title='Ahmad Faraz

PAK
1931-2008
MY: 0
MX: 1765'><div class=area style='position:absolute; width:20px; height:20px; left:1799px; top:1330px'></div></a>
<a  href='build-epmap.php?mp=1765&a_id=162&y=1931' title='Ahmad Faraz

PAK
1931-2008
MY: 0
MX: 1765'><div class=area style='position:absolute; width:20px; height:20px; left:1819px; top:1330px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1487&a_id=165&y=1931' title='Judith Viorst
Children
USA
1931-
MY: 0
MX: 1487'><div class=area style='position:absolute; width:22px; height:20px; left:1521px; top:1355px'></div></a>
<a  href='build-epmap.php?mp=1487&a_id=165&y=1931' title='Judith Viorst
Children
USA
1931-
MY: 0
MX: 1487'><div class=area style='position:absolute; width:21px; height:20px; left:1543px; top:1355px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1322&a_id=327&y=1931' title='Etheridge Knight
Black Arts Movement
AFR/USA
1931-1991
MY: 0
MX: 1322'><div class=area style='position:absolute; width:22px; height:20px; left:1356px; top:1275px'></div></a>
<a  href='build-epmap.php?mp=1322&a_id=327&y=1931' title='Etheridge Knight
Black Arts Movement
AFR/USA
1931-1991
MY: 0
MX: 1322'><div class=area style='position:absolute; width:22px; height:20px; left:1378px; top:1275px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=646&a_id=9&y=1932' title='Sylvia Plath
Confessionalism, Modernism, Committed suicide, Bipolar disorder
USA
1932-1963
MY: 3
MX: 646'><div class=area style='position:absolute; width:20px; height:20px; left:680px; top:1213px'></div></a>
<a  href='build-epmap.php?mp=646&a_id=9&y=1932' title='Sylvia Plath
Confessionalism, Modernism, Committed suicide, Bipolar disorder
USA
1932-1963
MY: 3
MX: 646'><div class=area style='position:absolute; width:20px; height:20px; left:700px; top:1213px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1001&a_id=266&y=1933' title='Alden Nowlan
Playwright
CAN
1933-1983
MY: -3
MX: 1001'><div class=area style='position:absolute; width:25px; height:20px; left:1035px; top:1238px'></div></a>
<a  href='build-epmap.php?mp=1001&a_id=266&y=1933' title='Alden Nowlan
Playwright
CAN
1933-1983
MY: -3
MX: 1001'><div class=area style='position:absolute; width:24px; height:20px; left:1060px; top:1238px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=565&a_id=168&y=1935' title='Richard Brautigan
Beat, Committed suicide, Postmodernism
USA
1935-1982
MY: -1
MX: 565'><div class=area style='position:absolute; width:31px; height:20px; left:599px; top:1256px'></div></a>
<a  href='build-epmap.php?mp=565&a_id=168&y=1935' title='Richard Brautigan
Beat, Committed suicide, Postmodernism
USA
1935-1982
MY: -1
MX: 565'><div class=area style='position:absolute; width:31px; height:20px; left:630px; top:1256px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1765&a_id=362&y=1935' title='Forough Farrokhzad

IRN
1935-1967
MY: -4
MX: 1765'><div class=area style='position:absolute; width:36px; height:20px; left:1799px; top:1189px'></div></a>
<a  href='build-epmap.php?mp=1765&a_id=362&y=1935' title='Forough Farrokhzad

IRN
1935-1967
MY: -4
MX: 1765'><div class=area style='position:absolute; width:36px; height:20px; left:1835px; top:1189px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=906&a_id=180&y=1940' title='Joseph Brodsky
Akhmatova Orphans, Philosophy, Laureate
RUS/USA
1940-1996
MY: 0
MX: 906'><div class=area style='position:absolute; width:28px; height:20px; left:940px; top:1318px'></div></a>
<a  href='build-epmap.php?mp=906&a_id=180&y=1940' title='Joseph Brodsky
Akhmatova Orphans, Philosophy, Laureate
RUS/USA
1940-1996
MY: 0
MX: 906'><div class=area style='position:absolute; width:27px; height:20px; left:968px; top:1318px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1399&a_id=36&y=1941' title='Billy Collins
Optimism, Laureate, Humour
USA
1941-
MY: 0
MX: 1399'><div class=area style='position:absolute; width:23px; height:20px; left:1433px; top:1386px'></div></a>
<a  href='build-epmap.php?mp=1399&a_id=36&y=1941' title='Billy Collins
Optimism, Laureate, Humour
USA
1941-
MY: 0
MX: 1399'><div class=area style='position:absolute; width:23px; height:20px; left:1456px; top:1386px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1663&a_id=196&y=1942' title='William Matthews

USA
1942-1997
MY: 0
MX: 1663'><div class=area style='position:absolute; width:32px; height:20px; left:1697px; top:1330px'></div></a>
<a  href='build-epmap.php?mp=1663&a_id=196&y=1942' title='William Matthews

USA
1942-1997
MY: 0
MX: 1663'><div class=area style='position:absolute; width:31px; height:20px; left:1729px; top:1330px'></div></a>
<a  href='http://alch.strangled.net/artquiz/epquiz/authors.php?mp=1663&a_id=288&y=1946' title='Larry Levis

USA
1946-1996
MY: 3
MX: 1663'><div class=area style='position:absolute; width:18px; height:20px; left:1697px; top:1355px'></div></a>
<a  href='build-epmap.php?mp=1663&a_id=288&y=1946' title='Larry Levis

USA
1946-1996
MY: 3
MX: 1663'><div class=area style='position:absolute; width:18px; height:20px; left:1715px; top:1355px'></div></a>

</div>
</div>
</table>
<p>Most styles have a thick colored line at their side, which shows the main interval when the style was active.
<p>Click on poet, style or country to find out more and read poems.
<p>Most well known poets are marked bold.
<p>Image is searchable. Use Ctrl+F or 'Search in page'.

    <script type='text/javascript'>//<![CDATA[

var astart = [];

astart[20] = 1517;

astart[19] = 901;

astart[18] = 285;

astart[17] = 173;

astart[16] = 131;

astart[15] = 89;

astart[14] = 61;

astart[13] = 47;

astart[-5] = 33;

astart[-7] = 19;


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
                var x = ( e.clientX - 45 + $(window).scrollLeft()),
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
    });</script>
  
