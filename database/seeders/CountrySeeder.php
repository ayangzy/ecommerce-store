<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = [
            [
                "phone_code" => 234,
                "name" => "Nigeria",
                "country_code" => "NG",
                "currency_code" => "NGN",
                "currency" => "Nigerian naira"
            ],
            [
                "phone_code" => 880,
                "name" => "Bangladesh",
                "country_code" => "BD",
                "currency_code" => "BDT",
                "currency" => "Bangladeshi taka"
            ],
            [
                "phone_code" => 32,
                "name" => "Belgium",
                "country_code" => "BE",
                "currency_code" => "EUR",
                "currency" => "Euro"
            ],
            [
                "phone_code" => 226,
                "name" => "Burkina Faso",
                "country_code" => "BF",
                "currency_code" => "XOF",
                "currency" => "West African CFA franc"
            ],
            [
                "phone_code" => 359,
                "name" => "Bulgaria",
                "country_code" => "BG",
                "currency_code" => "BGN",
                "currency" => "Bulgarian lev"
            ],
            [
                "phone_code" => 387,
                "name" => "Bosnia and Herzegovina",
                "country_code" => "BA",
                "currency_code" => "BAM",
                "currency" => "Bosnia and Herzegovina convertible mark"
            ],
            [
                "phone_code" => "+1-246",
                "name" => "Barbados",
                "country_code" => "BB",
                "currency_code" => "BBD",
                "currency" => "Barbadian dollar"
            ],
            [
                "phone_code" => 681,
                "name" => "Wallis and Futuna",
                "country_code" => "WF",
                "currency_code" => "XPF",
                "currency" => "CFP franc"
            ],
            [
                "phone_code" => 590,
                "name" => "Saint Barthelemy",
                "country_code" => "BL",
                "currency_code" => "EUR",
                "currency" => "Euro"
            ],
            [
                "phone_code" => "+1-441",
                "name" => "Bermuda",
                "country_code" => "BM",
                "currency_code" => "BMD",
                "currency" => "Bermudian dollar"
            ],
            [
                "phone_code" => 673,
                "name" => "Brunei",
                "country_code" => "BN",
                "currency_code" => "BND",
                "currency" => "Brunei dollar"
            ],
            [
                "phone_code" => 591,
                "name" => "Bolivia",
                "country_code" => "BO",
                "currency_code" => "BOB",
                "currency" => "Bolivian boliviano"
            ],
            [
                "phone_code" => 973,
                "name" => "Bahrain",
                "country_code" => "BH",
                "currency_code" => "BHD",
                "currency" => "Bahraini dinar"
            ],
            [
                "phone_code" => 257,
                "name" => "Burundi",
                "country_code" => "BI",
                "currency_code" => "BIF",
                "currency" => "Burundian franc"
            ],
            [
                "phone_code" => 229,
                "name" => "Benin",
                "country_code" => "BJ",
                "currency_code" => "XOF",
                "currency" => "West African CFA franc"
            ],
            [
                "phone_code" => 975,
                "name" => "Bhutan",
                "country_code" => "BT",
                "currency_code" => "BTN",
                "currency" => "Bhutanese ngultrum"
            ],
            [
                "phone_code" => "+1-876",
                "name" => "Jamaica",
                "country_code" => "JM",
                "currency_code" => "JMD",
                "currency" => "Jamaican dollar"
            ],
            [
                "phone_code" => "",
                "name" => "Bouvet Island",
                "country_code" => "BV",
                "currency_code" => "NOK",
                "currency" => "Norwegian krone"
            ],
            [
                "phone_code" => 267,
                "name" => "Botswana",
                "country_code" => "BW",
                "currency_code" => "BWP",
                "currency" => "Botswana pula"
            ],
            [
                "phone_code" => 685,
                "name" => "Samoa",
                "country_code" => "WS",
                "currency_code" => "WST",
                "currency" => "Samoa"
            ],
            [
                "phone_code" => 599,
                "name" => "Bonaire Saint Eustatius and Saba",
                "country_code" => "BQ",
                "currency_code" => "USD",
                "currency" => "United States dollar"
            ],
            [
                "phone_code" => 55,
                "name" => "Brazil",
                "country_code" => "BR",
                "currency_code" => "BRL",
                "currency" => "Brazilian real"
            ],
            [
                "phone_code" => "+1-242",
                "name" => "Bahamas",
                "country_code" => "BS",
                "currency_code" => "BSD",
                "currency" => "Bahamian dollar"
            ],
            [
                "phone_code" => "+44-1534",
                "name" => "Jersey",
                "country_code" => "JE",
                "currency_code" => "GBP",
                "currency" => "British pound"
            ],
            [
                "phone_code" => 375,
                "name" => "Belarus",
                "country_code" => "BY",
                "currency_code" => "BYR",
                "currency" => "Belarusian ruble"
            ],
            [
                "phone_code" => 501,
                "name" => "Belize",
                "country_code" => "BZ",
                "currency_code" => "BZD",
                "currency" => "Belize dollar"
            ],
            [
                "phone_code" => 7,
                "name" => "Russia",
                "country_code" => "RU",
                "currency_code" => "RUB",
                "currency" => "Russian ruble"
            ],
            [
                "phone_code" => 250,
                "name" => "Rwanda",
                "country_code" => "RW",
                "currency_code" => "RWF",
                "currency" => "Rwandan franc"
            ],
            [
                "phone_code" => 381,
                "name" => "Serbia",
                "country_code" => "RS",
                "currency_code" => "RSD",
                "currency" => "Serbian dinar"
            ],
            [
                "phone_code" => 670,
                "name" => "East Timor",
                "country_code" => "TL",
                "currency_code" => "USD",
                "currency" => "United States dollar"
            ],
            [
                "phone_code" => 262,
                "name" => "Reunion",
                "country_code" => "RE",
                "currency_code" => "EUR",
                "currency" => "Euro"
            ],
            [
                "phone_code" => 993,
                "name" => "Turkmenistan",
                "country_code" => "TM",
                "currency_code" => "TMT",
                "currency" => "Turkmenistan manat"
            ],
            [
                "phone_code" => 992,
                "name" => "Tajikistan",
                "country_code" => "TJ",
                "currency_code" => "TJS",
                "currency" => "Tajikistani somoni"
            ],
            [
                "phone_code" => 40,
                "name" => "Romania",
                "country_code" => "RO",
                "currency_code" => "RON",
                "currency" => "Romanian leu"
            ],
            [
                "phone_code" => 690,
                "name" => "Tokelau",
                "country_code" => "TK",
                "currency_code" => "NZD",
                "currency" => "New Zealand dollar"
            ],
            [
                "phone_code" => 245,
                "name" => "Guinea-Bissau",
                "country_code" => "GW",
                "currency_code" => "XOF",
                "currency" => "West African CFA franc"
            ],
            [
                "phone_code" => "+1-671",
                "name" => "Guam",
                "country_code" => "GU",
                "currency_code" => "USD",
                "currency" => "United States dollar"
            ],
            [
                "phone_code" => 502,
                "name" => "Guatemala",
                "country_code" => "GT",
                "currency_code" => "GTQ",
                "currency" => "Guatemalan quetzal"
            ],
            [
                "phone_code" => "",
                "name" => "South Georgia and the South Sandwich Islands",
                "country_code" => "GS",
                "currency_code" => "GBP",
                "currency" => "British pound"
            ],
            [
                "phone_code" => 30,
                "name" => "Greece",
                "country_code" => "GR",
                "currency_code" => "EUR",
                "currency" => "Euro"
            ],
            [
                "phone_code" => 240,
                "name" => "Equatorial Guinea",
                "country_code" => "GQ",
                "currency_code" => "XAF",
                "currency" => "Central African CFA franc"
            ],
            [
                "phone_code" => 590,
                "name" => "Guadeloupe",
                "country_code" => "GP",
                "currency_code" => "EUR",
                "currency" => "Euro"
            ],
            [
                "phone_code" => 81,
                "name" => "Japan",
                "country_code" => "JP",
                "currency_code" => "JPY",
                "currency" => "Japanese yen"
            ],
            [
                "phone_code" => 592,
                "name" => "Guyana",
                "country_code" => "GY",
                "currency_code" => "GYD",
                "currency" => "Guyanese dollar"
            ],
            [
                "phone_code" => "+44-1481",
                "name" => "Guernsey",
                "country_code" => "GG",
                "currency_code" => "GBP",
                "currency" => "British pound"
            ],
            [
                "phone_code" => 594,
                "name" => "French Guiana",
                "country_code" => "GF",
                "currency_code" => "EUR",
                "currency" => "Euro"
            ],
            [
                "phone_code" => 995,
                "name" => "Georgia",
                "country_code" => "GE",
                "currency_code" => "GEL",
                "currency" => "Georgian lari"
            ],
            [
                "phone_code" => "+1-473",
                "name" => "Grenada",
                "country_code" => "GD",
                "currency_code" => "XCD",
                "currency" => "Eastern Caribbean dollar"
            ],
            [
                "phone_code" => 44,
                "name" => "United Kingdom",
                "country_code" => "GB",
                "currency_code" => "GBP",
                "currency" => "British pound"
            ],
            [
                "phone_code" => 241,
                "name" => "Gabon",
                "country_code" => "GA",
                "currency_code" => "XAF",
                "currency" => "Central African CFA franc"
            ],
            [
                "phone_code" => 503,
                "name" => "El Salvador",
                "country_code" => "SV",
                "currency_code" => "USD",
                "currency" => "United States dollar"
            ],
            [
                "phone_code" => 224,
                "name" => "Guinea",
                "country_code" => "GN",
                "currency_code" => "GNF",
                "currency" => "Guinean franc"
            ],
            [
                "phone_code" => 220,
                "name" => "Gambia",
                "country_code" => "GM",
                "currency_code" => "GMD",
                "currency" => "Gambian dalasi"
            ],
            [
                "phone_code" => 299,
                "name" => "Greenland",
                "country_code" => "GL",
                "currency_code" => "DKK",
                "currency" => "Danish krone"
            ],
            [
                "phone_code" => 350,
                "name" => "Gibraltar",
                "country_code" => "GI",
                "currency_code" => "GIP",
                "currency" => "Gibraltar pound"
            ],
            [
                "phone_code" => 233,
                "name" => "Ghana",
                "country_code" => "GH",
                "currency_code" => "GHS",
                "currency" => "Ghanaian cedi"
            ],
            [
                "phone_code" => 968,
                "name" => "Oman",
                "country_code" => "OM",
                "currency_code" => "OMR",
                "currency" => "Omani rial"
            ],
            [
                "phone_code" => 216,
                "name" => "Tunisia",
                "country_code" => "TN",
                "currency_code" => "TND",
                "currency" => "Tunisia"
            ],
            [
                "phone_code" => 962,
                "name" => "Jordan",
                "country_code" => "JO",
                "currency_code" => "JOD",
                "currency" => "Jordanian dinar"
            ],
            [
                "phone_code" => 385,
                "name" => "Croatia",
                "country_code" => "HR",
                "currency_code" => "HRK",
                "currency" => "Croatian kuna"
            ],
            [
                "phone_code" => 509,
                "name" => "Haiti",
                "country_code" => "HT",
                "currency_code" => "HTG",
                "currency" => "Haitian gourde"
            ],
            [
                "phone_code" => 36,
                "name" => "Hungary",
                "country_code" => "HU",
                "currency_code" => "HUF",
                "currency" => "Hungarian forint"
            ],
            [
                "phone_code" => 852,
                "name" => "Hong Kong",
                "country_code" => "HK",
                "currency_code" => "HKD",
                "currency" => "Hong Kong dollar"
            ],
            [
                "phone_code" => 504,
                "name" => "Honduras",
                "country_code" => "HN",
                "currency_code" => "HNL",
                "currency" => "Honduran lempira"
            ],
            [
                "phone_code" => " ",
                "name" => "Heard Island and McDonald Islands",
                "country_code" => "HM",
                "currency_code" => "AUD",
                "currency" => "Australian dollar"
            ],
            [
                "phone_code" => 58,
                "name" => "Venezuela",
                "country_code" => "VE",
                "currency_code" => "VES",
                "currency" => "Venezuelan bolívar soberano"
            ],
            [
                "phone_code" => "+1-787 ",
                "name" => "Puerto Rico",
                "country_code" => "PR",
                "currency_code" => "USD",
                "currency" => "United States dollar"
            ],
            [
                "phone_code" => 970,
                "name" => "Palestinian Territory",
                "country_code" => "PS",
                "currency_code" => "ILS",
                "currency" => "Israeli new shekel"
            ],
            [
                "phone_code" => 680,
                "name" => "Palau",
                "country_code" => "PW",
                "currency_code" => "USD",
                "currency" => "United States dollar"
            ],
            [
                "phone_code" => 351,
                "name" => "Portugal",
                "country_code" => "PT",
                "currency_code" => "EUR",
                "currency" => "Euro"
            ],
            [
                "phone_code" => 47,
                "name" => "Svalbard and Jan Mayen",
                "country_code" => "SJ",
                "currency_code" => "NOK",
                "currency" => "Norwegian krone"
            ],
            [
                "phone_code" => 595,
                "name" => "Paraguay",
                "country_code" => "PY",
                "currency_code" => "PYG",
                "currency" => "Paraguayan guaraní"
            ],
            [
                "phone_code" => 964,
                "name" => "Iraq",
                "country_code" => "IQ",
                "currency_code" => "IQD",
                "currency" => "Iraqi dinar"
            ],
            [
                "phone_code" => 507,
                "name" => "Panama",
                "country_code" => "PA",
                "currency_code" => "PAB",
                "currency" => "Panamanian balboa"
            ],
            [
                "phone_code" => 689,
                "name" => "French Polynesia",
                "country_code" => "PF",
                "currency_code" => "XPF",
                "currency" => "CFP franc"
            ],
            [
                "phone_code" => 675,
                "name" => "Papua New Guinea",
                "country_code" => "PG",
                "currency_code" => "PGK",
                "currency" => "Papua New Guinean kina"
            ],
            [
                "phone_code" => 51,
                "name" => "Peru",
                "country_code" => "PE",
                "currency_code" => "PEN",
                "currency" => "Peruvian sol"
            ],
            [
                "phone_code" => 92,
                "name" => "Pakistan",
                "country_code" => "PK",
                "currency_code" => "PKR",
                "currency" => "Pakistani rupee"
            ],
            [
                "phone_code" => 63,
                "name" => "Philippines",
                "country_code" => "PH",
                "currency_code" => "PHP",
                "currency" => "Philippine peso"
            ],
            [
                "phone_code" => 870,
                "name" => "Pitcairn",
                "country_code" => "PN",
                "currency_code" => "NZD",
                "currency" => "New Zealand dollar"
            ],
            [
                "phone_code" => 48,
                "name" => "Poland",
                "country_code" => "PL",
                "currency_code" => "PLN",
                "currency" => "Polish złoty"
            ],
            [
                "phone_code" => 508,
                "name" => "Saint Pierre and Miquelon",
                "country_code" => "PM",
                "currency_code" => "EUR",
                "currency" => "Euro"
            ],
            [
                "phone_code" => 260,
                "name" => "Zambia",
                "country_code" => "ZM",
                "currency_code" => "ZMK",
                "currency" => "Zambian kwacha"
            ],
            [
                "phone_code" => 212,
                "name" => "Western Sahara",
                "country_code" => "EH",
                "currency_code" => "MAD",
                "currency" => "Moroccan dirham"
            ],
            [
                "phone_code" => 372,
                "name" => "Estonia",
                "country_code" => "EE",
                "currency_code" => "EUR",
                "currency" => "Euro"
            ],
            [
                "phone_code" => 20,
                "name" => "Egypt",
                "country_code" => "EG",
                "currency_code" => "EGP",
                "currency" => "Egyptian pound"
            ],
            [
                "phone_code" => 27,
                "name" => "South Africa",
                "country_code" => "ZA",
                "currency_code" => "ZAR",
                "currency" => "South African rand"
            ],
            [
                "phone_code" => 593,
                "name" => "Ecuador",
                "country_code" => "EC",
                "currency_code" => "USD",
                "currency" => "United States dollar"
            ],
            [
                "phone_code" => 39,
                "name" => "Italy",
                "country_code" => "IT",
                "currency_code" => "EUR",
                "currency" => "Euro"
            ],
            [
                "phone_code" => 84,
                "name" => "Vietnam",
                "country_code" => "VN",
                "currency_code" => "VND",
                "currency" => "Vietnamese đồng"
            ],
            [
                "phone_code" => 677,
                "name" => "Solomon Islands",
                "country_code" => "SB",
                "currency_code" => "SBD",
                "currency" => "Solomon Islands dollar"
            ],
            [
                "phone_code" => 251,
                "name" => "Ethiopia",
                "country_code" => "ET",
                "currency_code" => "ETB",
                "currency" => "Ethiopian birr"
            ],
            [
                "phone_code" => 252,
                "name" => "Somalia",
                "country_code" => "SO",
                "currency_code" => "SOS",
                "currency" => "Somali shilling"
            ],
            [
                "phone_code" => 263,
                "name" => "Zimbabwe",
                "country_code" => "ZW",
                "currency_code" => "",
                "currency" => "RTGS dollar"
            ],
            [
                "phone_code" => 966,
                "name" => "Saudi Arabia",
                "country_code" => "SA",
                "currency_code" => "SAR",
                "currency" => "Saudi riyal"
            ],
            [
                "phone_code" => 34,
                "name" => "Spain",
                "country_code" => "ES",
                "currency_code" => "EUR",
                "currency" => "Euro"
            ],
            [
                "phone_code" => 291,
                "name" => "Eritrea",
                "country_code" => "ER",
                "currency_code" => "ERN",
                "currency" => "Eritrean nakfa"
            ],
            [
                "phone_code" => 382,
                "name" => "Montenegro",
                "country_code" => "ME",
                "currency_code" => "EUR",
                "currency" => "Euro"
            ],
            [
                "phone_code" => 373,
                "name" => "Moldova",
                "country_code" => "MD",
                "currency_code" => "MDL",
                "currency" => "Moldovan leu"
            ],
            [
                "phone_code" => 261,
                "name" => "Madagascar",
                "country_code" => "MG",
                "currency_code" => "MGA",
                "currency" => "Malagasy ariary"
            ],
            [
                "phone_code" => 590,
                "name" => "Saint Martin",
                "country_code" => "MF",
                "currency_code" => "EUR",
                "currency" => "Euro"
            ],
            [
                "phone_code" => 212,
                "name" => "Morocco",
                "country_code" => "MA",
                "currency_code" => "MAD",
                "currency" => "Moroccan dirham"
            ],
            [
                "phone_code" => 377,
                "name" => "Monaco",
                "country_code" => "MC",
                "currency_code" => "EUR",
                "currency" => "Euro"
            ],
            [
                "phone_code" => 998,
                "name" => "Uzbekistan",
                "country_code" => "UZ",
                "currency_code" => "UZS",
                "currency" => "Uzbekistani soʻm"
            ],
            [
                "phone_code" => 95,
                "name" => "Myanmar",
                "country_code" => "MM",
                "currency_code" => "MMK",
                "currency" => "Burmese kyat"
            ],
            [
                "phone_code" => 223,
                "name" => "Mali",
                "country_code" => "ML",
                "currency_code" => "XOF",
                "currency" => "West African CFA franc"
            ],
            [
                "phone_code" => 853,
                "name" => "Macao",
                "country_code" => "MO",
                "currency_code" => "MOP",
                "currency" => "Macanese pataca"
            ],
            [
                "phone_code" => 976,
                "name" => "Mongolia",
                "country_code" => "MN",
                "currency_code" => "MNT",
                "currency" => "Mongolian tögrög"
            ],
            [
                "phone_code" => 692,
                "name" => "Marshall Islands",
                "country_code" => "MH",
                "currency_code" => "USD",
                "currency" => "United States dollar"
            ],
            [
                "phone_code" => 389,
                "name" => "Macedonia",
                "country_code" => "MK",
                "currency_code" => "MKD",
                "currency" => "Macedonian denar"
            ],
            [
                "phone_code" => 230,
                "name" => "Mauritius",
                "country_code" => "MU",
                "currency_code" => "MUR",
                "currency" => "Mauritian rupee"
            ],
            [
                "phone_code" => 356,
                "name" => "Malta",
                "country_code" => "MT",
                "currency_code" => "EUR",
                "currency" => "Euro"
            ],
            [
                "phone_code" => 265,
                "name" => "Malawi",
                "country_code" => "MW",
                "currency_code" => "MWK",
                "currency" => "Malawian kwacha"
            ],
            [
                "phone_code" => 960,
                "name" => "Maldives",
                "country_code" => "MV",
                "currency_code" => "MVR",
                "currency" => "Maldivian rufiyaa"
            ],
            [
                "phone_code" => 596,
                "name" => "Martinique",
                "country_code" => "MQ",
                "currency_code" => "EUR",
                "currency" => "Euro"
            ],
            [
                "phone_code" => "+1-670",
                "name" => "Northern Mariana Islands",
                "country_code" => "MP",
                "currency_code" => "USD",
                "currency" => "United States dollar"
            ],
            [
                "phone_code" => "+1-664",
                "name" => "Montserrat",
                "country_code" => "MS",
                "currency_code" => "XCD",
                "currency" => "Eastern Caribbean dollar"
            ],
            [
                "phone_code" => 222,
                "name" => "Mauritania",
                "country_code" => "MR",
                "currency_code" => "MRU",
                "currency" => "Mauritanian ouguiya"
            ],
            [
                "phone_code" => "+44-1624",
                "name" => "Isle of Man",
                "country_code" => "IM",
                "currency_code" => "GBP",
                "currency" => "British pound"
            ],
            [
                "phone_code" => 256,
                "name" => "Uganda",
                "country_code" => "UG",
                "currency_code" => "UGX",
                "currency" => "Ugandan shilling"
            ],
            [
                "phone_code" => 255,
                "name" => "Tanzania",
                "country_code" => "TZ",
                "currency_code" => "TZS",
                "currency" => "Tanzanian shilling"
            ],
            [
                "phone_code" => 60,
                "name" => "Malaysia",
                "country_code" => "MY",
                "currency_code" => "MYR",
                "currency" => "Malaysian ringgit"
            ],
            [
                "phone_code" => 52,
                "name" => "Mexico",
                "country_code" => "MX",
                "currency_code" => "MXN",
                "currency" => "Mexican peso"
            ],
            [
                "phone_code" => 972,
                "name" => "Israel",
                "country_code" => "IL",
                "currency_code" => "ILS",
                "currency" => "Israeli new shekel"
            ],
            [
                "phone_code" => 33,
                "name" => "France",
                "country_code" => "FR",
                "currency_code" => "EUR",
                "currency" => "Euro"
            ],
            [
                "phone_code" => 246,
                "name" => "British Indian Ocean Territory",
                "country_code" => "IO",
                "currency_code" => "USD",
                "currency" => "United States dollar"
            ],
            [
                "phone_code" => 290,
                "name" => "Saint Helena",
                "country_code" => "SH",
                "currency_code" => "SHP",
                "currency" => "Saint Helena pound"
            ],
            [
                "phone_code" => 358,
                "name" => "Finland",
                "country_code" => "FI",
                "currency_code" => "EUR",
                "currency" => "Euro"
            ],
            [
                "phone_code" => 679,
                "name" => "Fiji",
                "country_code" => "FJ",
                "currency_code" => "FJD",
                "currency" => "Fijian dollar"
            ],
            [
                "phone_code" => 500,
                "name" => "Falkland Islands",
                "country_code" => "FK",
                "currency_code" => "FKP",
                "currency" => "Falkland Islands pound"
            ],
            [
                "phone_code" => 691,
                "name" => "Micronesia",
                "country_code" => "FM",
                "currency_code" => "USD",
                "currency" => "United States dollar"
            ],
            [
                "phone_code" => 298,
                "name" => "Faroe Islands",
                "country_code" => "FO",
                "currency_code" => "DKK",
                "currency" => "Danish krone"
            ],
            [
                "phone_code" => 505,
                "name" => "Nicaragua",
                "country_code" => "NI",
                "currency_code" => "NIO",
                "currency" => "Nicaraguan córdoba"
            ],
            [
                "phone_code" => 31,
                "name" => "Netherlands",
                "country_code" => "NL",
                "currency_code" => "EUR",
                "currency" => "Euro"
            ],
            [
                "phone_code" => 47,
                "name" => "Norway",
                "country_code" => "NO",
                "currency_code" => "NOK",
                "currency" => "Norwegian krone"
            ],
            [
                "phone_code" => 264,
                "name" => "Namibia",
                "country_code" => "NA",
                "currency_code" => "NAD",
                "currency" => "Namibian dollar"
            ],
            [
                "phone_code" => 678,
                "name" => "Vanuatu",
                "country_code" => "VU",
                "currency_code" => "VUV",
                "currency" => "Vanuatu vatu"
            ],
            [
                "phone_code" => 687,
                "name" => "New Caledonia",
                "country_code" => "NC",
                "currency_code" => "XPF",
                "currency" => "CFP franc"
            ],
            [
                "phone_code" => 227,
                "name" => "Niger",
                "country_code" => "NE",
                "currency_code" => "XOF",
                "currency" => "West African CFA franc"
            ],
            [
                "phone_code" => 672,
                "name" => "Norfolk Island",
                "country_code" => "NF",
                "currency_code" => "AUD",
                "currency" => "Australian dollar"
            ],
            [
                "phone_code" => 64,
                "name" => "New Zealand",
                "country_code" => "NZ",
                "currency_code" => "NZD",
                "currency" => "New Zealand dollar"
            ],
            [
                "phone_code" => 977,
                "name" => "Nepal",
                "country_code" => "NP",
                "currency_code" => "NPR",
                "currency" => "Nepalese rupee"
            ],
            [
                "phone_code" => 674,
                "name" => "Nauru",
                "country_code" => "NR",
                "currency_code" => "AUD",
                "currency" => "Australian dollar"
            ],
            [
                "phone_code" => 683,
                "name" => "Niue",
                "country_code" => "NU",
                "currency_code" => "NZD",
                "currency" => "New Zealand dollar"
            ],
            [
                "phone_code" => 682,
                "name" => "Cook Islands",
                "country_code" => "CK",
                "currency_code" => "NZD",
                "currency" => "New Zealand dollar"
            ],
            [
                "phone_code" => "",
                "name" => "Kosovo",
                "country_code" => "XK",
                "currency_code" => "EUR",
                "currency" => "Euro"
            ],
            [
                "phone_code" => 225,
                "name" => "Ivory Coast",
                "country_code" => "CI",
                "currency_code" => "XOF",
                "currency" => "West African CFA franc"
            ],
            [
                "phone_code" => 41,
                "name" => "Switzerland",
                "country_code" => "CH",
                "currency_code" => "CHF",
                "currency" => "Swiss franc"
            ],
            [
                "phone_code" => 57,
                "name" => "Colombia",
                "country_code" => "CO",
                "currency_code" => "COP",
                "currency" => "Colombian peso"
            ],
            [
                "phone_code" => 86,
                "name" => "China",
                "country_code" => "CN",
                "currency_code" => "CNY",
                "currency" => "Chinese yuan"
            ],
            [
                "phone_code" => 237,
                "name" => "Cameroon",
                "country_code" => "CM",
                "currency_code" => "XAF",
                "currency" => "Central African CFA franc"
            ],
            [
                "phone_code" => 56,
                "name" => "Chile",
                "country_code" => "CL",
                "currency_code" => "CLP",
                "currency" => "Chilean peso"
            ],
            [
                "phone_code" => 61,
                "name" => "Cocos Islands",
                "country_code" => "CC",
                "currency_code" => "AUD",
                "currency" => "Australian dollar"
            ],
            [
                "phone_code" => 1,
                "name" => "Canada",
                "country_code" => "CA",
                "currency_code" => "CAD",
                "currency" => "Canadian dollar"
            ],
            [
                "phone_code" => 242,
                "name" => "Republic of the Congo",
                "country_code" => "CG",
                "currency_code" => "XAF",
                "currency" => "Central African CFA franc"
            ],
            [
                "phone_code" => 236,
                "name" => "Central African Republic",
                "country_code" => "CF",
                "currency_code" => "XAF",
                "currency" => "Central African CFA franc"
            ],
            [
                "phone_code" => 243,
                "name" => "Democratic Republic of the Congo",
                "country_code" => "CD",
                "currency_code" => "CDF",
                "currency" => "Congolese franc"
            ],
            [
                "phone_code" => 420,
                "name" => "Czech Republic",
                "country_code" => "CZ",
                "currency_code" => "CZK",
                "currency" => "Czech koruna"
            ],
            [
                "phone_code" => 357,
                "name" => "Cyprus",
                "country_code" => "CY",
                "currency_code" => "EUR",
                "currency" => "Euro"
            ],
            [
                "phone_code" => 61,
                "name" => "Christmas Island",
                "country_code" => "CX",
                "currency_code" => "AUD",
                "currency" => "Australian dollar"
            ],
            [
                "phone_code" => 506,
                "name" => "Costa Rica",
                "country_code" => "CR",
                "currency_code" => "CRC",
                "currency" => "Costa Rican colón"
            ],
            [
                "phone_code" => 599,
                "name" => "Curacao",
                "country_code" => "CW",
                "currency_code" => "ANG",
                "currency" => "Netherlands Antillean guilder"
            ],
            [
                "phone_code" => 238,
                "name" => "Cape Verde",
                "country_code" => "CV",
                "currency_code" => "CVE",
                "currency" => "Cape Verdean escudo"
            ],
            [
                "phone_code" => 53,
                "name" => "Cuba",
                "country_code" => "CU",
                "currency_code" => "CUP",
                "currency" => "Cuban peso"
            ],
            [
                "phone_code" => 268,
                "name" => "Swaziland",
                "country_code" => "SZ",
                "currency_code" => "SZL",
                "currency" => "Swazi lilangeni"
            ],
            [
                "phone_code" => 963,
                "name" => "Syria",
                "country_code" => "SY",
                "currency_code" => "SYP",
                "currency" => "Syrian pound"
            ],
            [
                "phone_code" => 599,
                "name" => "Sint Maarten",
                "country_code" => "SX",
                "currency_code" => "ANG",
                "currency" => "Netherlands Antillean guilder"
            ],
            [
                "phone_code" => 996,
                "name" => "Kyrgyzstan",
                "country_code" => "KG",
                "currency_code" => "KGS",
                "currency" => "Kyrgyzstani som"
            ],
            [
                "phone_code" => 254,
                "name" => "Kenya",
                "country_code" => "KE",
                "currency_code" => "KES",
                "currency" => "Kenyan shilling"
            ],
            [
                "phone_code" => 211,
                "name" => "South Sudan",
                "country_code" => "SS",
                "currency_code" => "SSP",
                "currency" => "South Sudanese pound"
            ],
            [
                "phone_code" => 597,
                "name" => "Suriname",
                "country_code" => "SR",
                "currency_code" => "SRD",
                "currency" => "Surinamese dollar"
            ],
            [
                "phone_code" => 686,
                "name" => "Kiribati",
                "country_code" => "KI",
                "currency_code" => "AUD",
                "currency" => "Australian dollar"
            ],
            [
                "phone_code" => 855,
                "name" => "Cambodia",
                "country_code" => "KH",
                "currency_code" => "KHR",
                "currency" => "Cambodian riel"
            ],
            [
                "phone_code" => "+1-869",
                "name" => "Saint Kitts and Nevis",
                "country_code" => "KN",
                "currency_code" => "XCD",
                "currency" => "Eastern Caribbean dollar"
            ],
            [
                "phone_code" => 269,
                "name" => "Comoros",
                "country_code" => "KM",
                "currency_code" => "KMF",
                "currency" => "Comorian franc"
            ],
            [
                "phone_code" => 239,
                "name" => "Sao Tome and Principe",
                "country_code" => "ST",
                "currency_code" => "STN",
                "currency" => "São Tomé and Príncipe dobra"
            ],
            [
                "phone_code" => 421,
                "name" => "Slovakia",
                "country_code" => "SK",
                "currency_code" => "EUR",
                "currency" => "Euro"
            ],
            [
                "phone_code" => 82,
                "name" => "South Korea",
                "country_code" => "KR",
                "currency_code" => "KRW",
                "currency" => "South Korean won"
            ],
            [
                "phone_code" => 386,
                "name" => "Slovenia",
                "country_code" => "SI",
                "currency_code" => "EUR",
                "currency" => "Euro"
            ],
            [
                "phone_code" => 850,
                "name" => "North Korea",
                "country_code" => "KP",
                "currency_code" => "KPW",
                "currency" => "North Korean won"
            ],
            [
                "phone_code" => 965,
                "name" => "Kuwait",
                "country_code" => "KW",
                "currency_code" => "KWD",
                "currency" => "Kuwaiti dinar"
            ],
            [
                "phone_code" => 221,
                "name" => "Senegal",
                "country_code" => "SN",
                "currency_code" => "XOF",
                "currency" => "West African CFA franc"
            ],
            [
                "phone_code" => 378,
                "name" => "San Marino",
                "country_code" => "SM",
                "currency_code" => "EUR",
                "currency" => "Euro"
            ],
            [
                "phone_code" => 232,
                "name" => "Sierra Leone",
                "country_code" => "SL",
                "currency_code" => "SLL",
                "currency" => "Sierra Leonean leone"
            ],
            [
                "phone_code" => 248,
                "name" => "Seychelles",
                "country_code" => "SC",
                "currency_code" => "SCR",
                "currency" => "Seychellois rupee"
            ],
            [
                "phone_code" => 7,
                "name" => "Kazakhstan",
                "country_code" => "KZ",
                "currency_code" => "KZT",
                "currency" => "Kazakhstani tenge"
            ],
            [
                "phone_code" => "+1-345",
                "name" => "Cayman Islands",
                "country_code" => "KY",
                "currency_code" => "KYD",
                "currency" => "Cayman Islands dollar"
            ],
            [
                "phone_code" => 65,
                "name" => "Singapore",
                "country_code" => "SG",
                "currency_code" => "SGD",
                "currency" => "Singapore dollar"
            ],
            [
                "phone_code" => 46,
                "name" => "Sweden",
                "country_code" => "SE",
                "currency_code" => "SEK",
                "currency" => "Swedish krona"
            ],
            [
                "phone_code" => 249,
                "name" => "Sudan",
                "country_code" => "SD",
                "currency_code" => "SDG",
                "currency" => "Sudanese pound"
            ],
            [
                "phone_code" => "+1-809",
                "name" => "Dominican Republic",
                "country_code" => "DO",
                "currency_code" => "DOP",
                "currency" => "Dominican peso"
            ],
            [
                "phone_code" => "+1-767",
                "name" => "Dominica",
                "country_code" => "DM",
                "currency_code" => "XCD",
                "currency" => "Eastern Caribbean dollar"
            ],
            [
                "phone_code" => 253,
                "name" => "Djibouti",
                "country_code" => "DJ",
                "currency_code" => "DJF",
                "currency" => "Djiboutian franc"
            ],
            [
                "phone_code" => 45,
                "name" => "Denmark",
                "country_code" => "DK",
                "currency_code" => "DKK",
                "currency" => "Danish krone"
            ],
            [
                "phone_code" => "+1-284",
                "name" => "British Virgin Islands",
                "country_code" => "VG",
                "currency_code" => "USD",
                "currency" => "United States dollar"
            ],
            [
                "phone_code" => 49,
                "name" => "Germany",
                "country_code" => "DE",
                "currency_code" => "EUR",
                "currency" => "Euro"
            ],
            [
                "phone_code" => 967,
                "name" => "Yemen",
                "country_code" => "YE",
                "currency_code" => "YER",
                "currency" => "Yemeni rial"
            ],
            [
                "phone_code" => 213,
                "name" => "Algeria",
                "country_code" => "DZ",
                "currency_code" => "DZD",
                "currency" => "Algerian dinar"
            ],
            [
                "phone_code" => 1,
                "name" => "United States",
                "country_code" => "US",
                "currency_code" => "USD",
                "currency" => "United States dollar"
            ],
            [
                "phone_code" => 598,
                "name" => "Uruguay",
                "country_code" => "UY",
                "currency_code" => "UYU",
                "currency" => "Uruguayan peso"
            ],
            [
                "phone_code" => 262,
                "name" => "Mayotte",
                "country_code" => "YT",
                "currency_code" => "EUR",
                "currency" => "Euro"
            ],
            [
                "phone_code" => 1,
                "name" => "United States Minor Outlying Islands",
                "country_code" => "UM",
                "currency_code" => "USD",
                "currency" => "United States dollar"
            ],
            [
                "phone_code" => 961,
                "name" => "Lebanon",
                "country_code" => "LB",
                "currency_code" => "LBP",
                "currency" => "Lebanese pound"
            ],
            [
                "phone_code" => "+1-758",
                "name" => "Saint Lucia",
                "country_code" => "LC",
                "currency_code" => "XCD",
                "currency" => "Eastern Caribbean dollar"
            ],
            [
                "phone_code" => 856,
                "name" => "Laos",
                "country_code" => "LA",
                "currency_code" => "LAK",
                "currency" => "Lao kip"
            ],
            [
                "phone_code" => 688,
                "name" => "Tuvalu",
                "country_code" => "TV",
                "currency_code" => "AUD",
                "currency" => "Australian dollar"
            ],
            [
                "phone_code" => 886,
                "name" => "Taiwan",
                "country_code" => "TW",
                "currency_code" => "TWD",
                "currency" => "New Taiwan dollar"
            ],
            [
                "phone_code" => "+1-868",
                "name" => "Trinidad and Tobago",
                "country_code" => "TT",
                "currency_code" => "TTD",
                "currency" => "Trinidad and Tobago dollar"
            ],
            [
                "phone_code" => 90,
                "name" => "Turkey",
                "country_code" => "TR",
                "currency_code" => "TRY",
                "currency" => "Turkish lira"
            ],
            [
                "phone_code" => 94,
                "name" => "Sri Lanka",
                "country_code" => "LK",
                "currency_code" => "LKR",
                "currency" => "Sri Lankan rupee"
            ],
            [
                "phone_code" => 423,
                "name" => "Liechtenstein",
                "country_code" => "LI",
                "currency_code" => "CHF",
                "currency" => "Swiss franc"
            ],
            [
                "phone_code" => 371,
                "name" => "Latvia",
                "country_code" => "LV",
                "currency_code" => "EUR",
                "currency" => "Euro"
            ],
            [
                "phone_code" => 676,
                "name" => "Tonga",
                "country_code" => "TO",
                "currency_code" => "TOP",
                "currency" => "Tongan paʻanga"
            ],
            [
                "phone_code" => 370,
                "name" => "Lithuania",
                "country_code" => "LT",
                "currency_code" => "EUR",
                "currency" => "Euro"
            ],
            [
                "phone_code" => 352,
                "name" => "Luxembourg",
                "country_code" => "LU",
                "currency_code" => "EUR",
                "currency" => "Euro"
            ],
            [
                "phone_code" => 231,
                "name" => "Liberia",
                "country_code" => "LR",
                "currency_code" => "LRD",
                "currency" => "Liberian dollar"
            ],
            [
                "phone_code" => 266,
                "name" => "Lesotho",
                "country_code" => "LS",
                "currency_code" => "LSL",
                "currency" => "Lesotho loti"
            ],
            [
                "phone_code" => 66,
                "name" => "Thailand",
                "country_code" => "TH",
                "currency_code" => "THB",
                "currency" => "Thai baht"
            ],
            [
                "phone_code" => "",
                "name" => "French Southern Territories",
                "country_code" => "TF",
                "currency_code" => "EUR",
                "currency" => "Euro"
            ],
            [
                "phone_code" => 228,
                "name" => "Togo",
                "country_code" => "TG",
                "currency_code" => "XOF",
                "currency" => "West African CFA franc"
            ],
            [
                "phone_code" => 235,
                "name" => "Chad",
                "country_code" => "TD",
                "currency_code" => "XAF",
                "currency" => "Central African CFA franc"
            ],
            [
                "phone_code" => "+1-649",
                "name" => "Turks and Caicos Islands",
                "country_code" => "TC",
                "currency_code" => "USD",
                "currency" => "United States dollar"
            ],
            [
                "phone_code" => 218,
                "name" => "Libya",
                "country_code" => "LY",
                "currency_code" => "LYD",
                "currency" => "Libyan dinar"
            ],
            [
                "phone_code" => 379,
                "name" => "Vatican",
                "country_code" => "VA",
                "currency_code" => "EUR",
                "currency" => "Euro"
            ],
            [
                "phone_code" => "+1-784",
                "name" => "Saint Vincent and the Grenadines",
                "country_code" => "VC",
                "currency_code" => "XCD",
                "currency" => "Eastern Caribbean dollar"
            ],
            [
                "phone_code" => 971,
                "name" => "United Arab Emirates",
                "country_code" => "AE",
                "currency_code" => "AED",
                "currency" => "United Arab Emirates dirham"
            ],
            [
                "phone_code" => 376,
                "name" => "Andorra",
                "country_code" => "AD",
                "currency_code" => "EUR",
                "currency" => "Euro"
            ],
            [
                "phone_code" => "+1-268",
                "name" => "Antigua and Barbuda",
                "country_code" => "AG",
                "currency_code" => "XCD",
                "currency" => "Eastern Caribbean dollar"
            ],
            [
                "phone_code" => 93,
                "name" => "Afghanistan",
                "country_code" => "AF",
                "currency_code" => "AFN",
                "currency" => "Afghan afghani"
            ],
            [
                "phone_code" => "+1-264",
                "name" => "Anguilla",
                "country_code" => "AI",
                "currency_code" => "XCD",
                "currency" => "Eastern Caribbean dollar"
            ],
            [
                "phone_code" => "+1-340",
                "name" => "U.S. Virgin Islands",
                "country_code" => "VI",
                "currency_code" => "USD",
                "currency" => "United States dollar"
            ],
            [
                "phone_code" => 354,
                "name" => "Iceland",
                "country_code" => "IS",
                "currency_code" => "ISK",
                "currency" => "Icelandic króna"
            ],
            [
                "phone_code" => 98,
                "name" => "Iran",
                "country_code" => "IR",
                "currency_code" => "IRR",
                "currency" => "Iranian rial"
            ],
            [
                "phone_code" => 374,
                "name" => "Armenia",
                "country_code" => "AM",
                "currency_code" => "AMD",
                "currency" => "Armenian dram"
            ],
            [
                "phone_code" => 355,
                "name" => "Albania",
                "country_code" => "AL",
                "currency_code" => "ALL",
                "currency" => "Albanian lek"
            ],
            [
                "phone_code" => 244,
                "name" => "Angola",
                "country_code" => "AO",
                "currency_code" => "AOA",
                "currency" => "Angolan kwanza"
            ],
            [
                "phone_code" => "",
                "name" => "Antarctica",
                "country_code" => "AQ",
                "currency_code" => "",
                "currency" => ""
            ],
            [
                "phone_code" => "+1-684",
                "name" => "American Samoa",
                "country_code" => "AS",
                "currency_code" => "USD",
                "currency" => "United States dollar"
            ],
            [
                "phone_code" => 54,
                "name" => "Argentina",
                "country_code" => "AR",
                "currency_code" => "ARS",
                "currency" => "Argentine peso"
            ],
            [
                "phone_code" => 61,
                "name" => "Australia",
                "country_code" => "AU",
                "currency_code" => "AUD",
                "currency" => "Australian dollar"
            ],
            [
                "phone_code" => 43,
                "name" => "Austria",
                "country_code" => "AT",
                "currency_code" => "EUR",
                "currency" => "Euro"
            ],
            [
                "phone_code" => 297,
                "name" => "Aruba",
                "country_code" => "AW",
                "currency_code" => "AWG",
                "currency" => "Russian ruble"
            ],
            [
                "phone_code" => 91,
                "name" => "India",
                "country_code" => "IN",
                "currency_code" => "INR",
                "currency" => "Indian rupee"
            ],
            [
                "phone_code" => "+358-18",
                "name" => "Aland Islands",
                "country_code" => "AX",
                "currency_code" => "EUR",
                "currency" => "Euro"
            ],
            [
                "phone_code" => 994,
                "name" => "Azerbaijan",
                "country_code" => "AZ",
                "currency_code" => "AZN",
                "currency" => "Azerbaijani manat"
            ],
            [
                "phone_code" => 353,
                "name" => "Ireland",
                "country_code" => "IE",
                "currency_code" => "EUR",
                "currency" => "Euro"
            ],
            [
                "phone_code" => 62,
                "name" => "Indonesia",
                "country_code" => "ID",
                "currency_code" => "IDR",
                "currency" => "Indonesian rupiah"
            ],
            [
                "phone_code" => 380,
                "name" => "Ukraine",
                "country_code" => "UA",
                "currency_code" => "UAH",
                "currency" => "Ukrainian hryvnia"
            ],
            [
                "phone_code" => 974,
                "name" => "Qatar",
                "country_code" => "QA",
                "currency_code" => "QAR",
                "currency" => "Qatari riyal"
            ],
            [
                "phone_code" => 258,
                "name" => "Mozambique",
                "country_code" => "MZ",
                "currency_code" => "MZN",
                "currency" => "Mozambican metical"
            ]
        ];

        foreach ($countries as $country) {
            Country::firstOrCreate($country);
        }
    }
}
