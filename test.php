echo "Test"

Absolut! Här är en kortare och enklare PHP-kodsnutt som genererar ett slumpmässigt skämt:

php
Copy code
<?php
// Array med roliga skämt
$skamt = array(
    "Varför kan inte cyklister spela kort? För att de är bra på att cykla ifrån flushar!",
    "Varför kunde inte cyklisten sluta falla? För att han var tvungen att pedala!",
    "Vad sa cyklisten när han blev neddragen av en bil? Hjul jag inte tro det!"
);

// Slumpmässigt väljer ett skämt från arrayen
$random_index = array_rand($skamt);
$random_joke = $skamt[$random_index];

// Skriver ut det slumpmässigt valda skämtet
echo $random_joke;
?>