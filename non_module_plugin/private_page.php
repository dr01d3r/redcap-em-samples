<?php
// Include base.php for all plugin constants and to connect to REDCap
include_once(__DIR__."/base.php");

// Advanced query language for redcap_data table
$sql = "SELECT d.value AS ".RECORD_ID_FIELD.",
			d2.value AS ".GENDER_FIELD.",
			d3.value AS ".COUNTRY_FIELD."
		FROM redcap_data d
		LEFT JOIN redcap_data d2
		ON (
			d.project_id = d2.project_id
			AND d.record = d2.record
			AND d2.field_name = '".GENDER_FIELD."'
		)
		LEFT JOIN redcap_data d3
		ON (
			d.project_id = d3.project_id
			AND d.record = d3.record
			AND d3.field_name = '".COUNTRY_FIELD."'
		)
		WHERE d.project_id = ".PROJECT_ID."
			AND d.field_name = '".RECORD_ID_FIELD."'";

// Query the database and check for errors
if(!($q = db_query($sql)) || db_error()) {
	var_dump(db_error());
}

$recordData = [];

// Pull all the records one-by-one
while($row = db_fetch_assoc($q)) {
	$recordData[] = $row;
}

// Start HTML output

// Include REDCap Header to make the page appear part of REDCap
$htmlPage = new HtmlPage();
$htmlPage->ProjectHeader();

// Display the data in a table
echo "<table class='table border'>
	<tr>
		<th>".RECORD_ID_FIELD."</th>
		<th>".GENDER_FIELD."</th>
		<th>".COUNTRY_FIELD."</th>
	</tr>";

foreach($recordData as $thisRecord) {
	echo "
	<tr>
		<td>".$thisRecord[RECORD_ID_FIELD]."</td>
		<td>".$thisRecord[GENDER_FIELD]."</td>
		<td>".$thisRecord[COUNTRY_FIELD]."</td>
	</tr>";
}