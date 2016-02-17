<?php

header("Content-type: application/json");
echo json_encode([
	"apps" => [
		"tourbuzz" => [
			"url" => "http://buzz.qcommerz.nl"
		],
		"haltecoach" => [
			"url" => "http://coach.qcommerz.nl"
		]
	],
	"apis" => [
		"attracties" => [
			"origineel" => "http://www.amsterdamopendata.nl/files/Attracties.json",
			"uri" => "http://api.qcommerz.nl/attracties/"
		],
		"haltes" => [
			"origineel" => "http://www.amsterdamopendata.nl/files/ivv/touringcar/in_uitstaphaltes.json",
			"uri" => "http://api.qcommerz.nl/haltes/"
		],
		"parkeerplaatsen" => [
			"origineel" => "http://www.qcommerz.nl/parkeerplaatsen/",
			"uri" => "http://api.qcommerz.nl/parkeerplaatsen/"
		],
		"poi" => [
			"uri" => "http://api.qcommerz.nl/poi/",
			"ov2" => "http://api.qcommerz.nl/ov2/",
			"maps" => "https://www.google.com/maps/d/viewer?mid=z2EXMMBPPl7c.kKS6guMeeUaI"
		],
		"afstanden" => [
			"uri" => "http://api.qcommerz.nl/distance/"
		],
		"pta" => [
			"uri" => "http://api.qcommerz.nl/pta/?m=1",
			"arrivals" => "http://api.qcommerz.nl/cruisekalender/2016/03/31"
		],
		"wegwerkzaamheden" => [
			"origineel" => "http://www.amsterdamopendata.nl/files/Projecten_Amsterdam_GeoJson.json",
			"uri" => "http://api.qcommerz.nl/wegwerkzaamheden/2016/03/02"
		],
		"evenementen" => [
			"origineel" => "http://www.amsterdamopendata.nl/files/Evenementen.json",
			"uri" => "http://api.qcommerz.nl/evenementen/2016/03/02"
		]
	]
]);
