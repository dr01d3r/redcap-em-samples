<?php

// Make the page publicly accessible
define("NOAUTH",true);

// Include base.php for all plugin constants and to connect to REDCap
include_once(__DIR__."/base.php");

// REDCap plugin method call to get record data
$data = REDCap::getData();

// Loop through each record and event to find the counts for each gender/country value
$genderCounts = [];
$countryCounts = [];

foreach($data as $recordId => $recordData) {
	foreach($recordData as $eventId => $eventData) {
		if(!empty($eventData[GENDER_FIELD])) {
			if(array_key_exists($eventData[GENDER_FIELD],$genderCounts)) {
				$genderCounts[$eventData[GENDER_FIELD]]++;
			}
			else {
				$genderCounts[$eventData[GENDER_FIELD]] = 1;
			}
		}

		if(!empty($eventData[COUNTRY_FIELD])) {
			if(array_key_exists($eventData[COUNTRY_FIELD],$countryCounts)) {
				$countryCounts[$eventData[COUNTRY_FIELD]]++;
			}
			else {
				$countryCounts[$eventData[COUNTRY_FIELD]] = 1;
			}
		}
	}
}

// Get REDCap Project metadata for the given fields
$metadata = REDCap::getDataDictionary(PROJECT_ID,"array");

$genderEnum = parseEnum(str_replace("|","\\n",$metadata[GENDER_FIELD]["select_choices_or_calculations"]));
$countryEnum = parseEnum(str_replace("|","\\n",$metadata[COUNTRY_FIELD]["select_choices_or_calculations"]));

// Convert the raw counts to a percentage
$genderPercent = [];
$countryPercent = [];

foreach($genderCounts as $genderValue => $count) {
	$genderPercent[$genderValue] = round($count / array_sum($genderCounts) * 100,0);
}

foreach($countryCounts as $countryValue => $count) {
	$countryPercent[$countryValue] = round($count / array_sum($countryCounts) * 100,0);
}

// Start HTML Output
$cssUrl = APP_PATH_WEBROOT_FULL.APP_PATH_CSS."style.css";

// Include REDCap Stylesheet
echo "<link rel='stylesheet' href='$cssUrl' />";

echo "<div class='container'>
	<div class='row'>
		<div class='col-xs-6'>";

// Display the data in a table
echo "<table class='table border'>
	<tr>
		<th>".GENDER_FIELD."</th>
		<th>Percentage</th>
	</tr>";

foreach($genderPercent as $genderValue => $percent) {
	echo "
	<tr>
		<td>".$genderEnum[$genderValue]."</td>
		<td>".$percent."%</td>
	</tr>";
}

echo "<br /><br />";

echo "<table class='table border'>
	<tr>
		<th>".COUNTRY_FIELD."</th>
		<th>Percentage</th>
	</tr>";

foreach($countryPercent as $countryValue => $percent) {
	echo "
	<tr>
		<td>".$countryEnum[$countryValue]."</td>
		<td>".$percent."%</td>
	</tr>";
}

echo "		</div>
	</div>
</div>";