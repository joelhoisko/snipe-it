<?php
/**
* Macro helpers
*
*/

/**
* Country macro
* Generates the dropdown menu of countries for the profile form
*/
Form::macro('countries', function ($name = "country", $selected = null, $class = null, $id = null) {

    $countries = array(
    ''=>"Select a Country",
    'AC'=>'Ascension Island',
    'AD'=>'Andorra',
    'AE'=>'United Arab Emirates',
    'AF'=>'Afghanistan',
    'AG'=>'Antigua And Barbuda',
    'AI'=>'Anguilla',
    'AL'=>'Albania',
    'AM'=>'Armenia',
    'AN'=>'Netherlands Antilles',
    'AO'=>'Angola',
    'AQ'=>'Antarctica',
    'AR'=>'Argentina',
    'AS'=>'American Samoa',
    'AT'=>'Austria',
    'AU'=>'Australia',
    'AW'=>'Aruba',
    'AX'=>'Ãƒâ€¦land',
    'AZ'=>'Azerbaijan',
    'BA'=>'Bosnia And Herzegovina',
    'BB'=>'Barbados',
    'BE'=>'Belgium',
    'BD'=>'Bangladesh',
    'BF'=>'Burkina Faso',
    'BG'=>'Bulgaria',
    'BH'=>'Bahrain',
    'BI'=>'Burundi',
    'BJ'=>'Benin',
    'BM'=>'Bermuda',
    'BN'=>'Brunei Darussalam',
    'BO'=>'Bolivia',
    'BR'=>'Brazil',
    'BS'=>'Bahamas',
    'BT'=>'Bhutan',
    'BV'=>'Bouvet Island',
    'BW'=>'Botswana',
    'BY'=>'Belarus',
    'BZ'=>'Belize',
    'CA'=>'Canada',
    'CC'=>'Cocos (Keeling) Islands',
    'CD'=>'Congo (Democratic Republic)',
    'CF'=>'Central African Republic',
    'CG'=>'Congo (Republic)',
    'CH'=>'Switzerland',
    'CI'=>'Côte d\'Ivoire',
    'CK'=>'Cook Islands',
    'CL'=>'Chile',
    'CM'=>'Cameroon',
    'CN'=>'People\'s Republic of China',
    'CO'=>'Colombia',
    'CR'=>'Costa Rica',
    'CU'=>'Cuba',
    'CV'=>'Cape Verde',
    'CX'=>'Christmas Island',
    'CY'=>'Cyprus',
    'CZ'=>'Czech Republic',
    'DE'=>'Germany',
    'DJ'=>'Djibouti',
    'DK'=>'Denmark',
    'DM'=>'Dominica',
    'DO'=>'Dominican Republic',
    'DZ'=>'Algeria',
    'EC'=>'Ecuador',
    'EE'=>'Estonia',
    'EG'=>'Egypt',
    'ER'=>'Eritrea',
    'ES'=>'Spain',
    'ET'=>'Ethiopia',
    'EU'=>'European Union',
    'FI'=>'Finland',
    'FJ'=>'Fiji',
    'FK'=>'Falkland Islands (Malvinas)',
    'FM'=>'Micronesia, Federated States Of',
    'FO'=>'Faroe Islands',
    'FR'=>'France',
    'GA'=>'Gabon',
    'GB'=>'United Kingdom',
    'GD'=>'Grenada',
    'GE'=>'Georgia',
    'GF'=>'French Guiana',
    'GG'=>'Guernsey',
    'GH'=>'Ghana',
    'GI'=>'Gibraltar',
    'GL'=>'Greenland',
    'GM'=>'Gambia',
    'GN'=>'Guinea',
    'GP'=>'Guadeloupe',
    'GQ'=>'Equatorial Guinea',
    'GR'=>'Greece',
    'GS'=>'South Georgia And The South Sandwich Islands',
    'GT'=>'Guatemala',
    'GU'=>'Guam',
    'GW'=>'Guinea-Bissau',
    'GY'=>'Guyana',
    'HK'=>'Hong Kong',
    'HM'=>'Heard And Mc Donald Islands',
    'HN'=>'Honduras',
    'HR'=>'Croatia (local name: Hrvatska)',
    'HT'=>'Haiti',
    'HU'=>'Hungary',
    'ID'=>'Indonesia',
    'IE'=>'Ireland',
    'IL'=>'Israel',
    'IM'=>'Isle of Man',
    'IN'=>'India',
    'IO'=>'British Indian Ocean Territory',
    'IQ'=>'Iraq',
    'IR'=>'Iran, Islamic Republic Of',
    'IS'=>'Iceland',
    'IT'=>'Italy',
    'JE'=>'Jersey',
    'JM'=>'Jamaica',
    'JO'=>'Jordan',
    'JP'=>'Japan',
    'KE'=>'Kenya',
    'KG'=>'Kyrgyzstan',
    'KH'=>'Cambodia',
    'KI'=>'Kiribati',
    'KM'=>'Comoros',
    'KN'=>'Saint Kitts And Nevis',
    'KR'=>'Korea, Republic Of',
    'KW'=>'Kuwait',
    'KY'=>'Cayman Islands',
    'KZ'=>'Kazakhstan',
    'LA'=>'Lao People\'s Democratic Republic',
    'LB'=>'Lebanon',
    'LC'=>'Saint Lucia',
    'LI'=>'Liechtenstein',
    'LK'=>'Sri Lanka',
    'LR'=>'Liberia',
    'LS'=>'Lesotho',
    'LT'=>'Lithuania',
    'LU'=>'Luxembourg',
    'LV'=>'Latvia',
    'LY'=>'Libyan Arab Jamahiriya',
    'MA'=>'Morocco',
    'MC'=>'Monaco',
    'MD'=>'Moldova, Republic Of',
    'ME'=>'Montenegro',
    'MG'=>'Madagascar',
    'MH'=>'Marshall Islands',
    'MK'=>'Macedonia, The Former Yugoslav Republic Of',
    'ML'=>'Mali',
    'MM'=>'Myanmar',
    'MN'=>'Mongolia',
    'MO'=>'Macau',
    'MP'=>'Northern Mariana Islands',
    'MQ'=>'Martinique',
    'MR'=>'Mauritania',
    'MS'=>'Montserrat',
    'MT'=>'Malta',
    'MU'=>'Mauritius',
    'MV'=>'Maldives',
    'MW'=>'Malawi',
    'MX'=>'Mexico',
    'MY'=>'Malaysia',
    'MZ'=>'Mozambique',
    'NA'=>'Namibia',
    'NC'=>'New Caledonia',
    'NE'=>'Niger',
    'NF'=>'Norfolk Island',
    'NG'=>'Nigeria',
    'NI'=>'Nicaragua',
    'NL'=>'Netherlands',
    'NO'=>'Norway',
    'NP'=>'Nepal',
    'NR'=>'Nauru',
    'NU'=>'Niue',
    'NZ'=>'New Zealand',
    'OM'=>'Oman',
    'PA'=>'Panama',
    'PE'=>'Peru',
    'PF'=>'French Polynesia',
    'PG'=>'Papua New Guinea',
    'PH'=>'Philippines, Republic of the',
    'PK'=>'Pakistan',
    'PL'=>'Poland',
    'PM'=>'St. Pierre And Miquelon',
    'PN'=>'Pitcairn',
    'PR'=>'Puerto Rico',
    'PS'=>'Palestine',
    'PT'=>'Portugal',
    'PW'=>'Palau',
    'PY'=>'Paraguay',
    'QA'=>'Qatar',
    'RE'=>'Reunion',
    'RO'=>'Romania',
    'RS'=>'Serbia',
    'RU'=>'Russian Federation',
    'RW'=>'Rwanda',
    'SA'=>'Saudi Arabia',
    'UK'=>'Scotland',
    'SB'=>'Solomon Islands',
    'SC'=>'Seychelles',
    'SD'=>'Sudan',
    'SE'=>'Sweden',
    'SG'=>'Singapore',
    'SH'=>'St. Helena',
    'SI'=>'Slovenia',
    'SJ'=>'Svalbard And Jan Mayen Islands',
    'SK'=>'Slovakia (Slovak Republic)',
    'SL'=>'Sierra Leone',
    'SM'=>'San Marino',
    'SN'=>'Senegal',
    'SO'=>'Somalia',
    'SR'=>'Suriname',
    'ST'=>'Sao Tome And Principe',
    'SU'=>'Soviet Union',
    'SV'=>'El Salvador',
    'SY'=>'Syrian Arab Republic',
    'SZ'=>'Swaziland',
    'TC'=>'Turks And Caicos Islands',
    'TD'=>'Chad',
    'TF'=>'French Southern Territories',
    'TG'=>'Togo',
    'TH'=>'Thailand',
    'TJ'=>'Tajikistan',
    'TK'=>'Tokelau',
    'TI'=>'East Timor',
    'TM'=>'Turkmenistan',
    'TN'=>'Tunisia',
    'TO'=>'Tonga',
    'TP'=>'East Timor (old code)',
    'TR'=>'Turkey',
    'TT'=>'Trinidad And Tobago',
    'TV'=>'Tuvalu',
    'TW'=>'Taiwan',
    'TZ'=>'Tanzania, United Republic Of',
    'UA'=>'Ukraine',
    'UG'=>'Uganda',
    'UK'=>'United Kingdom',
    'UM'=>'United States Minor Outlying Islands',
    'US'=>'United States',
    'UY'=>'Uruguay',
    'UZ'=>'Uzbekistan',
    'VA'=>'Vatican City State (Holy See)',
    'VC'=>'Saint Vincent And The Grenadines',
    'VE'=>'Venezuela',
    'VG'=>'Virgin Islands (British)',
    'VI'=>'Virgin Islands (U.S.)',
    'VN'=>'Viet Nam',
    'VU'=>'Vanuatu',
    'WF'=>'Wallis And Futuna Islands',
    'WS'=>'Samoa',
    'YE'=>'Yemen',
    'YT'=>'Mayotte',
    'ZA'=>'South Africa',
    'ZM'=>'Zambia',
    'ZW'=>'Zimbabwe'
    );

    $idclause='';
    if($id) {
      $idclause=" id='$id'";
    }
    $select = '<select name="'.$name.'" class="'.$class.'" style="min-width:350px"'.$idclause.'>';

    foreach ($countries as $abbr => $country) {
        $select .= '<option value="'.strtoupper($abbr).'"'.(strtoupper($selected)== strtoupper($abbr) ? ' selected="selected"' : '').'>'.$country.'</option> ';
    }

    $select .= '</select>';

    return $select;

});


/**
* Barcode macro
* Generates the dropdown menu of available barcodes
*/
Form::macro('barcode_types', function ($name = "barcode_type", $selected = null, $class = null) {

    $barcode_types = array(
    'QRCODE'=>"QR Code",
    'PDF417'=>'PDF417',
    'DATAMATRIX'=>'DATAMATRIX',
    'C128'=>'Code 128'
    );

    $select = '<select name="'.$name.'" class="'.$class.'">';

    foreach ($barcode_types as $code => $codename) {
        $select .= '<option value="'.$code.'"'.($selected == $code ? ' selected="selected"' : '').'>'.$codename.'</option> ';
    }

    $select .= '</select>';

    return $select;

});


/**
* Currency macro
* Generates the dropdown menu of world currencies
*/
Form::macro('currencies', function ($name = "currency", $selected = null, $class = null) {

    $currencies = array(
    '$'=>"$",
    '€'=>'€',
    '₠'=>"₠",
    '₡'=>'₡',
    '₣'=>'₣',
    '₤'=>'₤',
    '₥'=>'₥',
    '₦'=>'₦',
    '₧'=>'₧',
    '₨'=>'₨',
    '₩'=>'₩',
    '₪'=>'₪',
    '₫'=>'₫',
    '₭'=>'₭',
    '₮'=>'₮',
    '₯'=>'₯',
    '₱'=>'₱',
    '₹'=>'₹',
    );

    $select = '<select name="'.$name.'" class="'.$class.'">';
    foreach ($currencies as $currency) {
        $select .= '<option value="'.$currency.'"'.($selected == $currency ? ' selected="selected"' : '').'>'.$currency.'</option> ';
    }

    $select .= '</select>';

    return $select;

});
