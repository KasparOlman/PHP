<?php
// Tüdrukute massiiv
$girls = array(
    "Alice", "Emma", "Olivia", "Mia", "Sophia", "Charlotte", "Isabella", "Abigail"
);

// Sorteerime tüdrukute massiivi kasvavas järjekorras
sort($girls);

// Väljastame tüdrukute nimed ridade kaupa
echo "Tüdrukud kasvavas järjekorras:<br>";
foreach ($girls as $girl) {
    echo "$girl<br>";
}

// Väljastame esimesed 3 nime
echo "<br>Esimesed 3 nime:<br>";
for ($i = 0; $i < 3; $i++) {
    echo $girls[$i] . "<br>";
}

// Väljastame viimase nime
echo "<br>Viimane nimi:<br>";
$lastGirl = end($girls);
echo $lastGirl . "<br>";

// Väljastame ühe suvalise nime
echo "<br>Suvaline nimi:<br>";
$randomGirl = $girls[array_rand($girls)];
echo $randomGirl;
?>
<?php
// Autode markide massiiv
$carBrands = array(
    "Subaru","BMW","Acura","Mercedes-Benz","Lexus","GMC","Volvo","Toyota","Volkswagen",
    "Volkswagen","GMC","Jeep","Saab","Hyundai","Subaru","Mercedes-Benz","Honda","Kia","Mercedes-Benz",
    "Chevrolet","Chevrolet","Porsche","Buick","Dodge","GMC","Dodge","Nissan","Dodge","Jaguar",
    "Ford","Honda","Toyota","Jeep","Kia","Buick","Chevrolet","Subaru","Chevrolet","Chevrolet",
    "Pontiac","Maybach","Chevrolet","Plymouth","Dodge","Nissan","Porsche","Nissan","Mercedes-Benz",
    "Suzuki","Nissan","Ford","Acura","Volkswagen","Lincoln","Mazda","BMW","Mercury","Mitsubishi",
    "Ram","Audi","Kia","Pontiac","Toyota","Acura","Toyota","Toyota","Chevrolet","Oldsmobile",
    "Acura","Pontiac","Lexus","Chevrolet","Cadillac","GMC","Jeep","Audi","Acura","Acura",
    "Honda","Dodge","Hummer","Chevrolet","BMW","Honda","Lincoln","Hummer","Acura","Buick",
    "BMW","Chevrolet","Cadillac","BMW","Pontiac","Audi","Hummer","Suzuki","Mitsubishi",
    "Jeep","Buick","Ford"
);

// VIN-koodide massiiv
$vinCodes = array(
    "1GKS1GKC8FR966658", "1FTEW1C87AK375821", "1G4GF5E30DF760067", "1FTEW1CW9AF114701", "WAUGGAFC8CN433989",
    "3G5DA03E83S704506", "4JGDA2EB0DA207570", "1FTEW1E88AK070552", "SAJWA0F77F8732763", "JHMFA3F21BS660717",
    "JTHBP5C29C5750730", "WA1LFAFP9DA963060", "3D7TT2CT6BG521976", "WVWN7EE961049", "2C3CA5CG3BH341234",
    "YV4952CFXC162587", "KNALN4D71F5805172", "JN1CV6EK7BM903692", "5FRYD3H84EB186765", "WAUL64B83N441878",
    "WDDGF4HBXCF845665", "WAUKF78E45A133973", "JN1BY0AR2AM022612", "WA1EY74L69D931520", "3GYFNGEYXBS290465",
    "1D7CW2GK4AS059336", "JN8AZ1FY5EW087447", "WAUBF78E57A343355", "SCFFBCCD8AG695133", "WBAWC73548E143482",
    "3GYFNGE38DS093883", "SCBCP73WC348460", "JN8AE2KPXE9353316", "2C3CDXDT2EH018229", "1G6AH5SX7D0325662",
    "WVWED7AJ7DW431402", "1FTKR1AD3AP316066", "WBAKF5C52CE612586", "1FTNX2A57AE16083", "WAUCFAFR1AA166821",
    "SCFFDAAM3EG486065", "1G4PR5SK5F4821043", "1C3CDFCB4ED858321", "1N6AD0CW8EN722090", "1NXBU4EE0AZ438077",
    "2T1BPRHE7FC131594", "JH4KB1637C451183", "1C4NJCBA7ED747024", "WAUHF68P86A736691", "3D7TT2HT1AG96429",
    "5GADX23L96D250838", "5FRYD3H25FB985936", "1G4GG5E30DF126304", "KNADH5A38B6072755", "WAUBFAFL1BA477979",
    "3C63DRL4CG674293", "1G6AR5SX0E0834815", "1NXBU4EE2AZ309838", "WAUKGBFB4AN797783", "JN1AJ0HP8AM801887",
    "WAUPL68E25A448831", "WA1C8BFP3FA535374", "WAUHE78P78A019744", "TRURD38J081400551", "1G4HP52K95428171",
    "5N1CR2MN1EC607241", "5UMDU93417L322773", "1G6AJ5S35F09585", "JN1CV6AP3BM234743", "SCBCR63W66C842051",
    "SCFFDCBD2AG509467", "WBA3C1C58CA664091", "1D7RW2BK6BS922303", "WAUDH98E67A546009", "2HNYB1H46CH683844",
    "3VW467AT4DM257275", "WDDGF4HB7CA515172"
);

// Leia autode arv
$carCount = count($carBrands);
echo "Autode arv: $carCount<br>";

// Kontrolli, kas massiivid on ühepikkused
if (count($carBrands) === count($vinCodes)) {
    echo "Massiivid on ühepikkused<br>";
} else {
    echo "Massiivid ei ole ühepikkused<br>";
}

// Leia eraldi Toyotade ja Audide arv nimekirjas
$toyotaCount = 0;
$audiCount = 0;

foreach ($carBrands as $brand) {
    if ($brand == "Toyota") {
        $toyotaCount++;
    } elseif ($brand == "Audi") {
        $audiCount++;
    }
}

echo "Toyotade arv: $toyotaCount<br>";
echo "Audide arv: $audiCount<br>";

// Leia ja väljasta VIN koodid, mille märkide arv on väiksem kui 17
echo "VIN koodid, mille märkide arv on väiksem kui 17:<br>";
foreach ($vinCodes as $vin) {
    if (strlen($vin) < 17) {
        echo "$vin<br>";
    }
}
?>
<?php
// Palgaandmed
$palgad = array(1220, 1213, 1295, 1312, 1298, 1354, 1296, 1286, 1292, 1327, 1369, 1455);

// Arvuta palgade summa
$palgadeSumma = array_sum($palgad);

// Leia palgade keskmine
$keskminePalk = $palgadeSumma / count($palgad);

echo "Aasta 2018 keskmine palk: $keskminePalk";
?>
<?php
// Firma nimed
$firmad = array(
    "Kimia", "Mynte", "Voomm", "Twiyo", "Layo", "Talane", "Gigashots",
    "Tagchat", "Quaxo", "Voonyx", "Kwilith", "Edgepulse", "Eidel",
    "Eadel", "Jaloo", "Oyope", "Jamia"
);

// Kuvage firmade nimed
echo "Firmade nimed:<br>";
foreach ($firmad as $firma) {
    echo "$firma<br>";
}

// Funktsioon firma eemaldamiseks nime järgi
function eemaldaFirma($nimi, &$firmad)
{
    $index = array_search($nimi, $firmad);
    if ($index !== false) {
        unset($firmad[$index]);
    }
}

// Kasutaja saab nime järgi firma eemaldada
if (isset($_POST['eemaldaNimi'])) {
    $nimi = $_POST['eemaldaNimi'];
    eemaldaFirma($nimi, $firmad);
}

// Kuvage firma nimed uuesti pärast eemaldamist
echo "<br>Kuvage firma nimed pärast eemaldamist:<br>";
foreach ($firmad as $firma) {
    echo "$firma<br>";
}
?>

<!-- Vorm firma eemaldamiseks nime järgi -->
<form method="post">
    <label>Eemalda firma nime järgi:</label>
    <input type="text" name="eemaldaNimi">
    <input type="submit" value="Eemalda">
</form>
<?php
// Riikide nimed
$riigid = array(
    "Indonesia", "Canada", "Kyrgyzstan", "Germany", "Philippines",
    "Philippines", "Canada", "Philippines", "South Sudan", "Brazil",
    "Democratic Republic of the Congo", "Indonesia", "Syria", "Sweden",
    "Philippines", "Russia", "China", "Japan", "Brazil", "Sweden", "Mexico", "France",
    "Kazakhstan", "Cuba", "Portugal", "Czech Republic"
);

// Leia kõige pikema riigi nime märkide arv
$pikkus = 0;
foreach ($riigid as $riik) {
    $riigiPikkus = strlen($riik);
    if ($riigiPikkus > $pikkus) {
        $pikkus = $riigiPikkus;
    }
}

echo "Kõige pikema riigi nime märkide arv: $pikkus";
?>
