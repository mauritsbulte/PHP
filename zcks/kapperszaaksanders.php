<?php
$kappersagenda = array("9:15", "9:30", "9:45", "10:00", "10:15", "10:30");
print("De volgende momenten zijn nog beschikbaar:<ul>");
foreach($kappersagenda as $afspraak => $tijd) {
    if ($afspraak == "") {
        print("<li>" . $tijd . "</li>");
    }
}
