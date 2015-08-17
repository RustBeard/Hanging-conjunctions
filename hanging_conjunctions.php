<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
        <title>Wiszące spójniki</title>
    </head>
<body>

<?php

$content = "Drogi Marszałku, Wysoka Izbo. PKB rośnie. Z drugiej strony, wyeliminowanie korupcji zabezpiecza udział szerokiej grupie w kształtowaniu kierunków rozwoju. Prawdą jest, iż usprawnienie systemu obsługi spełnia istotną rolę w większym stopniu tworzenie dalszych kierunków rozwoju. Gdy za sobą proces wdrożenia i bogate doświadczenia pozwalają na uwadze, że rozpoczęcie powszechnej akcji kształtowania podstaw jest zauważenie, że utworzenie komisji śledczej do tej sprawy zmusza nas do wniosku, iż zmiana przestarzałego systemu szkolenia kadry odpowiadającego potrzebom. Przez ostatnie kilkanaście lat odkryliśmy że wdrożenie nowych, lepszych rozwiązań umożliwia w wypracowaniu systemu finansowego umożliwia w kształtowaniu nowych propozycji. Z drugiej strony, rozszerzenie naszej działalności zabezpiecza udział szerokiej grupie w kształtowaniu odpowiednich warunków administracyjno-finansowych. Jak już zapewne zdążył zauważyć iż aktualna struktura organizacji jest ważne z powodu dalszych kierunków rozwoju. Po głębszym przemyśleniu sprawy, doszedłem do przeanalizowania odpowiednich warunków aktywizacji. Do tej sprawy spełnia ważne zadanie w większym stopniu tworzenie postaw uczestników wobec zadań stanowionych przez organizację. Do tej sprawy wymaga niezwykłej precyzji w przyszłościowe rozwiązania wymaga sprecyzowania i określenia kolejnych kroków w przyszłościowe rozwiązania wymaga niezwykłej precyzji w większym stopniu tworzenie systemu finansowego wymaga niezwykłej.";

$conjs = array (
    '[a-z]', '[A-Z]', 'aby', 'ale', 'ani', 'aż', 'bo', 'by', 'bym', 'byś',
    'co', 'czy', 'dla', 'do',
    'gdy', 'gdyż',
    'iż', 'jak',
    'lub',
    'na', 'nad', 'niż',
    'od', 'oraz', 'po', 'pod',
    'te', 'tej', 'to',
    'we',
    'za', 'zaś', 'ze', 'że'
    );
$size = count($conjs);

$replacm = array (' $1&nbsp;-&nbsp;', ' $1&nbsp;', ' $1,&nbsp;' );

for ($i=0; $i < $size; $i++){
    $patt = '/\s(' . $conjs[$i] . ')(\s)-\s/';
    $content = preg_replace($patt, $replacm[0], $content);
}

for ($i=0; $i < $size; $i++){
    $patt = '/\s(' . $conjs[$i] . ')(\s)/';
    $content = preg_replace($patt, $replacm[1], $content);
}

for ($i=0; $i < $size; $i++){
    $patt = '/\s(' . $conjs[$i] . '),(\s)/';
    $content = preg_replace($patt, $replacm[2], $content);
}

print $content;

?>

</body>
</html>
