<?php

function mervis_get_state_abbreviation( $state ) {

	$return = '';

	switch( $state ) {

		case 'Alabama': 		$return = 'AL'; break;
		case 'Alaska': 			$return = 'AK'; break;
		case 'Arizona': 		$return = 'AZ'; break;
		case 'Arkansas': 		$return = 'AR'; break;
		case 'California': 		$return = 'CA'; break;
		case 'Colorado': 		$return = 'CO'; break;
		case 'Connecticut': 	$return = 'CT'; break;
		case 'Delaware': 		$return = 'DE'; break;
		case 'Florida': 		$return = 'FL'; break;
		case 'Georgia': 		$return = 'GA'; break;
		case 'Hawaii': 			$return = 'HI'; break;
		case 'Idaho': 			$return = 'ID'; break;
		case 'Illinois': 		$return = 'IL'; break;
		case 'Indiana': 		$return = 'IN'; break;
		case 'Iowa': 			$return = 'IA'; break;
		case 'Kansas': 			$return = 'KS'; break;
		case 'Kentucky': 		$return = 'KY'; break;
		case 'Louisiana': 		$return = 'LA'; break;
		case 'Maine': 			$return = 'ME'; break;
		case 'Maryland': 		$return = 'MD'; break;
		case 'Massachusetts': 	$return = 'MA'; break;
		case 'Michigan': 		$return = 'MI'; break;
		case 'Minnesota': 		$return = 'MN'; break;
		case 'Mississippi': 	$return = 'MS'; break;
		case 'Missouri': 		$return = 'MO'; break;
		case 'Montana': 		$return = 'MT'; break;
		case 'Nebraska': 		$return = 'NE'; break;
		case 'Nevada': 			$return = 'NV'; break;
		case 'New Hampshire': 	$return = 'NH'; break;
		case 'New Jersey': 		$return = 'NJ'; break;
		case 'New Mexico': 		$return = 'NM'; break;
		case 'New York': 		$return = 'NY'; break;
		case 'North Carolina': 	$return = 'NC'; break;
		case 'North Dakota': 	$return = 'ND'; break;
		case 'Ohio': 			$return = 'OH'; break;
		case 'Oklahoma': 		$return = 'OK'; break;
		case 'Oregon': 			$return = 'OR'; break;
		case 'Pennsylvania': 	$return = 'PA'; break;
		case 'Rhode Island': 	$return = 'RI'; break;
		case 'South Carolina': 	$return = 'SC'; break;
		case 'South Dakota': 	$return = 'SD'; break;
		case 'Tennessee': 		$return = 'TN'; break;
		case 'Texas': 			$return = 'TX'; break;
		case 'Utah': 			$return = 'UT'; break;
		case 'Vermont': 		$return = 'VT'; break;
		case 'Virginia': 		$return = 'VA'; break;
		case 'Washington': 		$return = 'WA'; break;
		case 'West Virginia': 	$return = 'WV'; break;
		case 'Wisconsin': 		$return = 'WI'; break;
		case 'Wyoming': 		$return = 'WY'; break;

	} // switch

	return $return;

} // mervis_get_state_abbreviation()

function mervis_get_state_name( $state ) {

	$return = '';

	switch( $state ) {

		case 'AL': $return = 'Alabama'; break;
		case 'AK': $return = 'Alaska'; break;
		case 'AZ': $return = 'Arizona'; break;
		case 'AR': $return = 'Arkansas'; break;
		case 'CA': $return = 'California'; break;
		case 'CO': $return = 'Colorado'; break;
		case 'CT': $return = 'Connecticut'; break;
		case 'DE': $return = 'Delaware'; break;
		case 'FL': $return = 'Florida'; break;
		case 'GA': $return = 'Georgia'; break;
		case 'HI': $return = 'Hawaii'; break;
		case 'ID': $return = 'Idaho'; break;
		case 'IL': $return = 'Illinois'; break;
		case 'IN': $return = 'Indiana'; break;
		case 'IA': $return = 'Iowa'; break;
		case 'KS': $return = 'Kansas'; break;
		case 'KY': $return = 'Kentucky'; break;
		case 'LA': $return = 'Louisiana'; break;
		case 'ME': $return = 'Maine'; break;
		case 'MD': $return = 'Maryland'; break;
		case 'MA': $return = 'Massachusetts'; break;
		case 'MI': $return = 'Michigan'; break;
		case 'MN': $return = 'Minnesota'; break;
		case 'MS': $return = 'Mississippi'; break;
		case 'MO': $return = 'Missouri'; break;
		case 'MT': $return = 'Montana'; break;
		case 'NE': $return = 'Nebraska'; break;
		case 'NV': $return = 'Nevada'; break;
		case 'NH': $return = 'New Hampshire'; break;
		case 'NJ': $return = 'New Jersey'; break;
		case 'NM': $return = 'New Mexico'; break;
		case 'NY': $return = 'New York'; break;
		case 'NC': $return = 'North Carolina'; break;
		case 'ND': $return = 'North Dakota'; break;
		case 'OH': $return = 'Ohio'; break;
		case 'OK': $return = 'Oklahoma'; break;
		case 'OR': $return = 'Oregon'; break;
		case 'PA': $return = 'Pennsylvania'; break;
		case 'RI': $return = 'Rhode Island'; break;
		case 'SC': $return = 'South Carolina'; break;
		case 'SD': $return = 'South Dakota'; break;
		case 'TN': $return = 'Tennessee'; break;
		case 'TX': $return = 'Texas'; break;
		case 'UT': $return = 'Utah'; break;
		case 'VT': $return = 'Vermont'; break;
		case 'VA': $return = 'Virginia'; break;
		case 'WA': $return = 'Washington'; break;
		case 'WV': $return = 'West Virginia'; break;
		case 'WI': $return = 'Wisconsin'; break;
		case 'WY': $return = 'Wyoming'; break;

	} // switch

	return $return;

} // mervis_get_state_name()

function mervis_get_tel_phone( $number ) {

	$trimmed 	= trim( $number );
	$nochars 	= preg_replace("/[^0-9]/", "", $trimmed);

	return $nochars;

} // mervis_get_tel_phone()

?>