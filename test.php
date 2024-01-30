<?php
// En array med slumpmässiga citat
$citat = [
    "Livet är som en låda choklad, du vet aldrig vad du kommer att få.",
    "Det är bättre att tända ett ljus än att förbanna mörkret.",
    "För att vara dig själv i en värld som ständigt försöker göra dig något annat är den största bedriften.",
    "Det enda sättet att göra ett fantastiskt arbete är att älska vad du gör.",
    "När en dörr stängs öppnas en annan; men vi tittar så länge och med sådan ånger till den stängda dörren att vi inte ser den som har öppnats för oss."
];

// Slumpa ett citat från arrayen
$slumpat_citat = $citat[array_rand($citat)];

// Skriv ut citatet på webbsidan
echo "<h1>Så här är ett slumpmässigt citat för dig:</h1>";
echo "<p>'$slumpat_citat'</p>";
?>
