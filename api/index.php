<?php

header("Content-type: application/json");
echo json_encode([
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
			"uri" => "http://api.qcommerz.nl/poi/"
		],
		"afstanden" => [
			"uri" => "http://api.qcommerz.nl/distance/"
		]
	]
]);
