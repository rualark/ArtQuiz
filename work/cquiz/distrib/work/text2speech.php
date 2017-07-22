<?
    header("Content-Type: audio/mpeg");

    $text = urlencode('my text');
    $cst = str_replace(" ", "%20", $cst);
    $url = "http://translate.google.com/translate_tts?tl=en&q=$cst";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)");
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    $return = curl_exec($ch);
    curl_close($ch);

    echo $return;
    //echo file_get_contents('http://translate.google.com/translate_tts?tl=en&q=$cst');
?>