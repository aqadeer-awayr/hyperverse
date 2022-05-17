<?php

namespace Database\Seeders;

use App\Models\Capital;
use Illuminate\Database\Seeder;

class CapitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Capital::insert($this->capitals());
    }

    public function capitals()
    {
        return [
            [
                "name" =>  "Somaliland",
                "capital_name" =>  "Hargeisa",
                "latitude" =>  "9.55",
                "longitude" =>  "44.050000",
                // "CountryCode" =>  "NULL",
                // "ContinentName" =>  "Africa"
            ],
            [
                "name" =>  "South Georgia and South Sandwich Islands",
                "Capital_name" =>  "King Edward Point",
                "latitude" =>  "-54.283333",
                "longitude" =>  "-36.500000",
                // "CountryCode" =>  "GS",
                // "ContinentName" =>  "Antarctica"
            ],
            [
                "name" =>  "French Southern and Antarctic Lands",
                "Capital_name" =>  "Port-aux-FranÃ§ais",
                "latitude" =>  "-49.35",
                "longitude" =>  "70.216667",
                // "CountryCode" =>  "TF",
                // "ContinentName" =>  "Antarctica"
            ],
            [
                "name" =>  "Palestine",
                "Capital_name" =>  "Jerusalem",
                "latitude" =>  "31.766666666666666",
                "longitude" =>  "35.233333",
                // "CountryCode" =>  "PS",
                // "ContinentName" =>  "Asia"
            ],
            [
                "name" =>  "Aland Islands",
                "Capital_name" =>  "Mariehamn",
                "latitude" =>  "60.116667",
                "longitude" =>  "19.900000",
                // "CountryCode" =>  "AX",
                // "ContinentName" =>  "Europe"
            ],
            [
                "name" =>  "Nauru",
                "Capital_name" =>  "Yaren",
                "latitude" =>  "-0.5477",
                "longitude" =>  "166.920867",
                // "CountryCode" =>  "NR",
                // "ContinentName" =>  "Australia"
            ],
            [
                "name" =>  "Saint Martin",
                "Capital_name" =>  "Marigot",
                "latitude" =>  "18.0731",
                "longitude" =>  "-63.082200",
                // "CountryCode" =>  "MF",
                // "ContinentName" =>  "North America"
            ],
            [
                "name" =>  "Tokelau",
                "Capital_name" =>  "Atafu",
                "latitude" =>  "-9.166667",
                "longitude" =>  "-171.833333",
                // "CountryCode" =>  "TK",
                // "ContinentName" =>  "Australia"
            ],
            [
                "name" =>  "Western Sahara",
                "Capital_name" =>  "El-AaiÃºn",
                "latitude" =>  "27.153611",
                "longitude" =>  "-13.203333",
                // "CountryCode" =>  "EH",
                // "ContinentName" =>  "Africa"
            ],
            [
                "name" =>  "Afghanistan",
                "Capital_name" =>  "Kabul",
                "latitude" =>  "34.516666666666666",
                "longitude" =>  "69.183333",
                // "CountryCode" =>  "AF",
                // "ContinentName" =>  "Asia"
            ],
            [
                "name" =>  "Albania",
                "Capital_name" =>  "Tirana",
                "latitude" =>  "41.31666666666667",
                "longitude" =>  "19.816667",
                // "CountryCode" =>  "AL",
                // "ContinentName" =>  "Europe"
            ],
            [
                "name" =>  "Algeria",
                "Capital_name" =>  "Algiers",
                "latitude" =>  "36.75",
                "longitude" =>  "3.050000",
                // "CountryCode" =>  "DZ",
                // "ContinentName" =>  "Africa"
            ],
            [
                "name" =>  "American Samoa",
                "Capital_name" =>  "Pago Pago",
                "latitude" =>  "-14.266666666666667",
                "longitude" =>  "-170.700000",
                // "CountryCode" =>  "AS",
                // "ContinentName" =>  "Australia"
            ],
            [
                "name" =>  "Andorra",
                "Capital_name" =>  "Andorra la Vella",
                "latitude" =>  "42.5",
                "longitude" =>  "1.516667",
                // "CountryCode" =>  "AD",
                // "ContinentName" =>  "Europe"
            ],
            [
                "name" =>  "Angola",
                "Capital_name" =>  "Luanda",
                "latitude" =>  "-8.833333333333334",
                "longitude" =>  "13.216667",
                // "CountryCode" =>  "AO",
                // "ContinentName" =>  "Africa"
            ],
            [
                "name" =>  "Anguilla",
                "Capital_name" =>  "The Valley",
                "latitude" =>  "18.216666666666665",
                "longitude" =>  "-63.050000",
                // "CountryCode" =>  "AI",
                // "ContinentName" =>  "North America"
            ],
            [
                "name" =>  "Antigua and Barbuda",
                "Capital_name" =>  "Saint John's",
                "latitude" =>  "17.116666666666667",
                "longitude" =>  "-61.850000",
                // "CountryCode" =>  "AG",
                // "ContinentName" =>  "North America"
            ],
            [
                "name" =>  "Argentina",
                "Capital_name" =>  "Buenos Aires",
                "latitude" =>  "-34.583333333333336",
                "longitude" =>  "-58.666667",
                // "CountryCode" =>  "AR",
                // "ContinentName" =>  "South America"
            ],
            [
                "name" =>  "Armenia",
                "Capital_name" =>  "Yerevan",
                "latitude" =>  "40.166666666666664",
                "longitude" =>  "44.500000",
                // "CountryCode" =>  "AM",
                // "ContinentName" =>  "Europe"
            ],
            [
                "name" =>  "Aruba",
                "Capital_name" =>  "Oranjestad",
                "latitude" =>  "12.516666666666667",
                "longitude" =>  "-70.033333",
                // "CountryCode" =>  "AW",
                // "ContinentName" =>  "North America"
            ],
            [
                "name" =>  "Australia",
                "Capital_name" =>  "Canberra",
                "latitude" =>  "-35.266666666666666",
                "longitude" =>  "149.133333",
                // "CountryCode" =>  "AU",
                // "ContinentName" =>  "Australia"
            ],
            [
                "name" =>  "Austria",
                "Capital_name" =>  "Vienna",
                "latitude" =>  "48.2",
                "longitude" =>  "16.366667",
                // "CountryCode" =>  "AT",
                // "ContinentName" =>  "Europe"
            ],
            [
                "name" =>  "Azerbaijan",
                "Capital_name" =>  "Baku",
                "latitude" =>  "40.38333333333333",
                "longitude" =>  "49.866667",
                // "CountryCode" =>  "AZ",
                // "ContinentName" =>  "Europe"
            ],
            [
                "name" =>  "Bahamas",
                "Capital_name" =>  "Nassau",
                "latitude" =>  "25.083333333333332",
                "longitude" =>  "-77.350000",
                // "CountryCode" =>  "BS",
                // "ContinentName" =>  "North America"
            ],
            [
                "name" =>  "Bahrain",
                "Capital_name" =>  "Manama",
                "latitude" =>  "26.233333333333334",
                "longitude" =>  "50.566667",
                // "CountryCode" =>  "BH",
                // "ContinentName" =>  "Asia"
            ],
            [
                "name" =>  "Bangladesh",
                "Capital_name" =>  "Dhaka",
                "latitude" =>  "23.716666666666665",
                "longitude" =>  "90.400000",
                // "CountryCode" =>  "BD",
                // "ContinentName" =>  "Asia"
            ],
            [
                "name" =>  "Barbados",
                "Capital_name" =>  "Bridgetown",
                "latitude" =>  "13.1",
                "longitude" =>  "-59.616667",
                // "CountryCode" =>  "BB",
                // "ContinentName" =>  "North America"
            ],
            [
                "name" =>  "Belarus",
                "Capital_name" =>  "Minsk",
                "latitude" =>  "53.9",
                "longitude" =>  "27.566667",
                // "CountryCode" =>  "BY",
                // "ContinentName" =>  "Europe"
            ],
            [
                "name" =>  "Belgium",
                "Capital_name" =>  "Brussels",
                "latitude" =>  "50.833333333333336",
                "longitude" =>  "4.333333",
                // "CountryCode" =>  "BE",
                // "ContinentName" =>  "Europe"
            ],
            [
                "name" =>  "Belize",
                "Capital_name" =>  "Belmopan",
                "latitude" =>  "17.25",
                "longitude" =>  "-88.766667",
                // "CountryCode" =>  "BZ",
                // "ContinentName" =>  "Central America"
            ],
            [
                "name" =>  "Benin",
                "Capital_name" =>  "Porto-Novo",
                "latitude" =>  "6.483333333333333",
                "longitude" =>  "2.616667",
                // "CountryCode" =>  "BJ",
                // "ContinentName" =>  "Africa"
            ],
            [
                "name" =>  "Bermuda",
                "Capital_name" =>  "Hamilton",
                "latitude" =>  "32.28333333333333",
                "longitude" =>  "-64.783333",
                // "CountryCode" =>  "BM",
                // "ContinentName" =>  "North America"
            ],
            [
                "name" =>  "Bhutan",
                "Capital_name" =>  "Thimphu",
                "latitude" =>  "27.466666666666665",
                "longitude" =>  "89.633333",
                // "CountryCode" =>  "BT",
                // "ContinentName" =>  "Asia"
            ],
            [
                "name" =>  "Bolivia",
                "Capital_name" =>  "La Paz",
                "latitude" =>  "-16.5",
                "longitude" =>  "-68.150000",
                // "CountryCode" =>  "BO",
                // "ContinentName" =>  "South America"
            ],
            [
                "name" =>  "Bosnia and Herzegovina",
                "Capital_name" =>  "Sarajevo",
                "latitude" =>  "43.86666666666667",
                "longitude" =>  "18.416667",
                // "CountryCode" =>  "BA",
                // "ContinentName" =>  "Europe"
            ],
            [
                "name" =>  "Botswana",
                "Capital_name" =>  "Gaborone",
                "latitude" =>  "-24.633333333333333",
                "longitude" =>  "25.900000",
                // "CountryCode" =>  "BW",
                // "ContinentName" =>  "Africa"
            ],
            [
                "name" =>  "Brazil",
                "Capital_name" =>  "Brasilia",
                "latitude" =>  "-15.783333333333333",
                "longitude" =>  "-47.916667",
                // "CountryCode" =>  "BR",
                // "ContinentName" =>  "South America"
            ],
            [
                "name" =>  "British Virgin Islands",
                "Capital_name" =>  "Road Town",
                "latitude" =>  "18.416666666666668",
                "longitude" =>  "-64.616667",
                // "CountryCode" =>  "VG",
                // "ContinentName" =>  "North America"
            ],
            [
                "name" =>  "Brunei Darussalam",
                "Capital_name" =>  "Bandar Seri Begawan",
                "latitude" =>  "4.883333333333333",
                "longitude" =>  "114.933333",
                // "CountryCode" =>  "BN",
                // "ContinentName" =>  "Asia"
            ],
            [
                "name" =>  "Bulgaria",
                "Capital_name" =>  "Sofia",
                "latitude" =>  "42.68333333333333",
                "longitude" =>  "23.316667",
                // "CountryCode" =>  "BG",
                // "ContinentName" =>  "Europe"
            ],
            [
                "name" =>  "Burkina Faso",
                "Capital_name" =>  "Ouagadougou",
                "latitude" =>  "12.366666666666667",
                "longitude" =>  "-1.516667",
                // "CountryCode" =>  "BF",
                // "ContinentName" =>  "Africa"
            ],
            [
                "name" =>  "Myanmar",
                "Capital_name" =>  "Rangoon",
                "latitude" =>  "16.8",
                "longitude" =>  "96.150000",
                // "CountryCode" =>  "MM",
                // "ContinentName" =>  "Asia"
            ],
            [
                "name" =>  "Burundi",
                "Capital_name" =>  "Bujumbura",
                "latitude" =>  "-3.3666666666666667",
                "longitude" =>  "29.350000",
                // "CountryCode" =>  "BI",
                // "ContinentName" =>  "Africa"
            ],
            [
                "name" =>  "Cambodia",
                "Capital_name" =>  "Phnom Penh",
                "latitude" =>  "11.55",
                "longitude" =>  "104.916667",
                // "CountryCode" =>  "KH",
                // "ContinentName" =>  "Asia"
            ],
            [
                "name" =>  "Cameroon",
                "Capital_name" =>  "Yaounde",
                "latitude" =>  "3.8666666666666667",
                "longitude" =>  "11.516667",
                // "CountryCode" =>  "CM",
                // "ContinentName" =>  "Africa"
            ],
            [
                "name" =>  "Canada",
                "Capital_name" =>  "Ottawa",
                "latitude" =>  "45.416666666666664",
                "longitude" =>  "-75.700000",
                // "CountryCode" =>  "CA",
                // "ContinentName" =>  "Central America"
            ],
            [
                "name" =>  "Cape Verde",
                "Capital_name" =>  "Praia",
                "latitude" =>  "14.916666666666666",
                "longitude" =>  "-23.516667",
                // "CountryCode" =>  "CV",
                // "ContinentName" =>  "Africa"
            ],
            [
                "name" =>  "Cayman Islands",
                "Capital_name" =>  "George Town",
                "latitude" =>  "19.3",
                "longitude" =>  "-81.383333",
                // "CountryCode" =>  "KY",
                // "ContinentName" =>  "North America"
            ],
            [
                "name" =>  "Central African Republic",
                "Capital_name" =>  "Bangui",
                "latitude" =>  "4.366666666666666",
                "longitude" =>  "18.583333",
                // "CountryCode" =>  "CF",
                // "ContinentName" =>  "Africa"
            ],
            [
                "name" =>  "Chad",
                "Capital_name" =>  "N'Djamena",
                "latitude" =>  "12.1",
                "longitude" =>  "15.033333",
                // "CountryCode" =>  "TD",
                // "ContinentName" =>  "Africa"
            ],
            [
                "name" =>  "Chile",
                "Capital_name" =>  "Santiago",
                "latitude" =>  "-33.45",
                "longitude" =>  "-70.666667",
                // "CountryCode" =>  "CL",
                // "ContinentName" =>  "South America"
            ],
            [
                "name" =>  "China",
                "Capital_name" =>  "Beijing",
                "latitude" =>  "39.916666666666664",
                "longitude" =>  "116.383333",
                // "CountryCode" =>  "CN",
                // "ContinentName" =>  "Asia"
            ],
            [
                "name" =>  "Christmas Island",
                "Capital_name" =>  "The Settlement",
                "latitude" =>  "-10.416666666666666",
                "longitude" =>  "105.716667",
                // "CountryCode" =>  "CX",
                // "ContinentName" =>  "Australia"
            ],
            [
                "name" =>  "Cocos Islands",
                "Capital_name" =>  "West Island",
                "latitude" =>  "-12.166666666666666",
                "longitude" =>  "96.833333",
                // "CountryCode" =>  "CC",
                // "ContinentName" =>  "Australia"
            ],
            [
                "name" =>  "Colombia",
                "Capital_name" =>  "Bogota",
                "latitude" =>  "4.6",
                "longitude" =>  "-74.083333",
                // "CountryCode" =>  "CO",
                // "ContinentName" =>  "South America"
            ],
            [
                "name" =>  "Comoros",
                "Capital_name" =>  "Moroni",
                "latitude" =>  "-11.7",
                "longitude" =>  "43.233333",
                // "CountryCode" =>  "KM",
                // "ContinentName" =>  "Africa"
            ],
            [
                "name" =>  "Democratic Republic of the Congo",
                "Capital_name" =>  "Kinshasa",
                "latitude" =>  "-4.316666666666666",
                "longitude" =>  "15.300000",
                // "CountryCode" =>  "CD",
                // "ContinentName" =>  "Africa"
            ],
            [
                "name" =>  "Republic of Congo",
                "Capital_name" =>  "Brazzaville",
                "latitude" =>  "-4.25",
                "longitude" =>  "15.283333",
                // "CountryCode" =>  "CG",
                // "ContinentName" =>  "Africa"
            ],
            [
                "name" =>  "Cook Islands",
                "Capital_name" =>  "Avarua",
                "latitude" =>  "-21.2",
                "longitude" =>  "-159.766667",
                // "CountryCode" =>  "CK",
                // "ContinentName" =>  "Australia"
            ],
            [
                "name" =>  "Costa Rica",
                "Capital_name" =>  "San Jose",
                "latitude" =>  "9.933333333333334",
                "longitude" =>  "-84.083333",
                // "CountryCode" =>  "CR",
                // "ContinentName" =>  "Central America"
            ],
            [
                "name" =>  "Cote d'Ivoire",
                "Capital_name" =>  "Yamoussoukro",
                "latitude" =>  "6.816666666666666",
                "longitude" =>  "-5.266667",
                // "CountryCode" =>  "CI",
                // "ContinentName" =>  "Africa"
            ],
            [
                "name" =>  "Croatia",
                "Capital_name" =>  "Zagreb",
                "latitude" =>  "45.8",
                "longitude" =>  "16.000000",
                // "CountryCode" =>  "HR",
                // "ContinentName" =>  "Europe"
            ],
            [
                "name" =>  "Cuba",
                "Capital_name" =>  "Havana",
                "latitude" =>  "23.116666666666667",
                "longitude" =>  "-82.350000",
                // "CountryCode" =>  "CU",
                // "ContinentName" =>  "North America"
            ],
            [
                "name" =>  "CuraÃ§ao",
                "Capital_name" =>  "Willemstad",
                "latitude" =>  "12.1",
                "longitude" =>  "-68.916667",
                // "CountryCode" =>  "CW",
                // "ContinentName" =>  "North America"
            ],
            [
                "name" =>  "Cyprus",
                "Capital_name" =>  "Nicosia",
                "latitude" =>  "35.166666666666664",
                "longitude" =>  "33.366667",
                // "CountryCode" =>  "CY",
                // "ContinentName" =>  "Europe"
            ],
            [
                "name" =>  "Czech Republic",
                "Capital_name" =>  "Prague",
                "latitude" =>  "50.083333333333336",
                "longitude" =>  "14.466667",
                // "CountryCode" =>  "CZ",
                // "ContinentName" =>  "Europe"
            ],
            [
                "name" =>  "Denmark",
                "Capital_name" =>  "Copenhagen",
                "latitude" =>  "55.666666666666664",
                "longitude" =>  "12.583333",
                // "CountryCode" =>  "DK",
                // "ContinentName" =>  "Europe"
            ],
            [
                "name" =>  "Djibouti",
                "Capital_name" =>  "Djibouti",
                "latitude" =>  "11.583333333333334",
                "longitude" =>  "43.150000",
                // "CountryCode" =>  "DJ",
                // "ContinentName" =>  "Africa"
            ],
            [
                "name" =>  "Dominica",
                "Capital_name" =>  "Roseau",
                "latitude" =>  "15.3",
                "longitude" =>  "-61.400000",
                // "CountryCode" =>  "DM",
                // "ContinentName" =>  "North America"
            ],
            [
                "name" =>  "Dominican Republic",
                "Capital_name" =>  "Santo Domingo",
                "latitude" =>  "18.466666666666665",
                "longitude" =>  "-69.900000",
                // "CountryCode" =>  "DO",
                // "ContinentName" =>  "North America"
            ],
            [
                "name" =>  "Ecuador",
                "Capital_name" =>  "Quito",
                "latitude" =>  "-0.21666666666666667",
                "longitude" =>  "-78.500000",
                // "CountryCode" =>  "EC",
                // "ContinentName" =>  "South America"
            ],
            [
                "name" =>  "Egypt",
                "Capital_name" =>  "Cairo",
                "latitude" =>  "30.05",
                "longitude" =>  "31.250000",
                // "CountryCode" =>  "EG",
                // "ContinentName" =>  "Africa"
            ],
            [
                "name" =>  "El Salvador",
                "Capital_name" =>  "San Salvador",
                "latitude" =>  "13.7",
                "longitude" =>  "-89.200000",
                // "CountryCode" =>  "SV",
                // "ContinentName" =>  "Central America"
            ],
            [
                "name" =>  "Equatorial Guinea",
                "Capital_name" =>  "Malabo",
                "latitude" =>  "3.75",
                "longitude" =>  "8.783333",
                // "CountryCode" =>  "GQ",
                // "ContinentName" =>  "Africa"
            ],
            [
                "name" =>  "Eritrea",
                "Capital_name" =>  "Asmara",
                "latitude" =>  "15.333333333333334",
                "longitude" =>  "38.933333",
                // "CountryCode" =>  "ER",
                // "ContinentName" =>  "Africa"
            ],
            [
                "name" =>  "Estonia",
                "Capital_name" =>  "Tallinn",
                "latitude" =>  "59.43333333333333",
                "longitude" =>  "24.716667",
                // "CountryCode" =>  "EE",
                // "ContinentName" =>  "Europe"
            ],
            [
                "name" =>  "Ethiopia",
                "Capital_name" =>  "Addis Ababa",
                "latitude" =>  "9.033333333333333",
                "longitude" =>  "38.700000",
                // "CountryCode" =>  "ET",
                // "ContinentName" =>  "Africa"
            ],
            [
                "name" =>  "Falkland Islands",
                "Capital_name" =>  "Stanley",
                "latitude" =>  "-51.7",
                "longitude" =>  "-57.850000",
                // "CountryCode" =>  "FK",
                // "ContinentName" =>  "South America"
            ],
            [
                "name" =>  "Faroe Islands",
                "Capital_name" =>  "Torshavn",
                "latitude" =>  "62",
                "longitude" =>  "-6.766667",
                // "CountryCode" =>  "FO",
                // "ContinentName" =>  "Europe"
            ],
            [
                "name" =>  "Fiji",
                "Capital_name" =>  "Suva",
                "latitude" =>  "-18.133333333333333",
                "longitude" =>  "178.416667",
                // "CountryCode" =>  "FJ",
                // "ContinentName" =>  "Australia"
            ],
            [
                "name" =>  "Finland",
                "Capital_name" =>  "Helsinki",
                "latitude" =>  "60.166666666666664",
                "longitude" =>  "24.933333",
                // "CountryCode" =>  "FI",
                // "ContinentName" =>  "Europe"
            ],
            [
                "name" =>  "France",
                "Capital_name" =>  "Paris",
                "latitude" =>  "48.86666666666667",
                "longitude" =>  "2.333333",
                // "CountryCode" =>  "FR",
                // "ContinentName" =>  "Europe"
            ],
            [
                "name" =>  "French Polynesia",
                "Capital_name" =>  "Papeete",
                "latitude" =>  "-17.533333333333335",
                "longitude" =>  "-149.566667",
                // "CountryCode" =>  "PF",
                // "ContinentName" =>  "Australia"
            ],
            [
                "name" =>  "Gabon",
                "Capital_name" =>  "Libreville",
                "latitude" =>  "0.38333333333333336",
                "longitude" =>  "9.450000",
                // "CountryCode" =>  "GA",
                // "ContinentName" =>  "Africa"
            ],
            [
                "name" =>  "The Gambia",
                "Capital_name" =>  "Banjul",
                "latitude" =>  "13.45",
                "longitude" =>  "-16.566667",
                // "CountryCode" =>  "GM",
                // "ContinentName" =>  "Africa"
            ],
            [
                "name" =>  "Georgia",
                "Capital_name" =>  "Tbilisi",
                "latitude" =>  "41.68333333333333",
                "longitude" =>  "44.833333",
                // "CountryCode" =>  "GE",
                // "ContinentName" =>  "Europe"
            ],
            [
                "name" =>  "Germany",
                "Capital_name" =>  "Berlin",
                "latitude" =>  "52.516666666666666",
                "longitude" =>  "13.400000",
                // "CountryCode" =>  "DE",
                // "ContinentName" =>  "Europe"
            ],
            [
                "name" =>  "Ghana",
                "Capital_name" =>  "Accra",
                "latitude" =>  "5.55",
                "longitude" =>  "-0.216667",
                // "CountryCode" =>  "GH",
                // "ContinentName" =>  "Africa"
            ],
            [
                "name" =>  "Gibraltar",
                "Capital_name" =>  "Gibraltar",
                "latitude" =>  "36.13333333333333",
                "longitude" =>  "-5.350000",
                // "CountryCode" =>  "GI",
                // "ContinentName" =>  "Europe"
            ],
            [
                "name" =>  "Greece",
                "Capital_name" =>  "Athens",
                "latitude" =>  "37.983333333333334",
                "longitude" =>  "23.733333",
                // "CountryCode" =>  "GR",
                // "ContinentName" =>  "Europe"
            ],
            [
                "name" =>  "Greenland",
                "Capital_name" =>  "Nuuk",
                "latitude" =>  "64.18333333333334",
                "longitude" =>  "-51.750000",
                // "CountryCode" =>  "GL",
                // "ContinentName" =>  "Central America"
            ],
            [
                "name" =>  "Grenada",
                "Capital_name" =>  "Saint George's",
                "latitude" =>  "12.05",
                "longitude" =>  "-61.750000",
                // "CountryCode" =>  "GD",
                // "ContinentName" =>  "North America"
            ],
            [
                "name" =>  "Guam",
                "Capital_name" =>  "Hagatna",
                "latitude" =>  "13.466666666666667",
                "longitude" =>  "144.733333",
                // "CountryCode" =>  "GU",
                // "ContinentName" =>  "Australia"
            ],
            [
                "name" =>  "Guatemala",
                "Capital_name" =>  "Guatemala City",
                "latitude" =>  "14.616666666666667",
                "longitude" =>  "-90.516667",
                // "CountryCode" =>  "GT",
                // "ContinentName" =>  "Central America"
            ],
            [
                "name" =>  "Guernsey",
                "Capital_name" =>  "Saint Peter Port",
                "latitude" =>  "49.45",
                "longitude" =>  "-2.533333",
                // "CountryCode" =>  "GG",
                // "ContinentName" =>  "Europe"
            ],
            [
                "name" =>  "Guinea",
                "Capital_name" =>  "Conakry",
                "latitude" =>  "9.5",
                "longitude" =>  "-13.700000",
                // "CountryCode" =>  "GN",
                // "ContinentName" =>  "Africa"
            ],
            [
                "name" =>  "Guinea-Bissau",
                "Capital_name" =>  "Bissau",
                "latitude" =>  "11.85",
                "longitude" =>  "-15.583333",
                // "CountryCode" =>  "GW",
                // "ContinentName" =>  "Africa"
            ],
            [
                "name" =>  "Guyana",
                "Capital_name" =>  "Georgetown",
                "latitude" =>  "6.8",
                "longitude" =>  "-58.150000",
                // "CountryCode" =>  "GY",
                // "ContinentName" =>  "South America"
            ],
            [
                "name" =>  "Haiti",
                "Capital_name" =>  "Port-au-Prince",
                "latitude" =>  "18.533333333333335",
                "longitude" =>  "-72.333333",
                // "CountryCode" =>  "HT",
                // "ContinentName" =>  "North America"
            ],
            [
                "name" =>  "Vatican City",
                "Capital_name" =>  "Vatican City",
                "latitude" =>  "41.9",
                "longitude" =>  "12.450000",
                // "CountryCode" =>  "VA",
                // "ContinentName" =>  "Europe"
            ],
            [
                "name" =>  "Honduras",
                "Capital_name" =>  "Tegucigalpa",
                "latitude" =>  "14.1",
                "longitude" =>  "-87.216667",
                // "CountryCode" =>  "HN",
                // "ContinentName" =>  "Central America"
            ],
            [
                "name" =>  "Hungary",
                "Capital_name" =>  "Budapest",
                "latitude" =>  "47.5",
                "longitude" =>  "19.083333",
                // "CountryCode" =>  "HU",
                // "ContinentName" =>  "Europe"
            ],
            [
                "name" =>  "Iceland",
                "Capital_name" =>  "Reykjavik",
                "latitude" =>  "64.15",
                "longitude" =>  "-21.950000",
                // "CountryCode" =>  "IS",
                // "ContinentName" =>  "Europe"
            ],
            [
                "name" =>  "India",
                "Capital_name" =>  "New Delhi",
                "latitude" =>  "28.6",
                "longitude" =>  "77.200000",
                // "CountryCode" =>  "IN",
                // "ContinentName" =>  "Asia"
            ],
            [
                "name" =>  "Indonesia",
                "Capital_name" =>  "Jakarta",
                "latitude" =>  "-6.166666666666667",
                "longitude" =>  "106.816667",
                // "CountryCode" =>  "ID",
                // "ContinentName" =>  "Asia"
            ],
            [
                "name" =>  "Iran",
                "Capital_name" =>  "Tehran",
                "latitude" =>  "35.7",
                "longitude" =>  "51.416667",
                // "CountryCode" =>  "IR",
                // "ContinentName" =>  "Asia"
            ],
            [
                "name" =>  "Iraq",
                "Capital_name" =>  "Baghdad",
                "latitude" =>  "33.333333333333336",
                "longitude" =>  "44.400000",
                // "CountryCode" =>  "IQ",
                // "ContinentName" =>  "Asia"
            ],
            [
                "name" =>  "Ireland",
                "Capital_name" =>  "Dublin",
                "latitude" =>  "53.31666666666667",
                "longitude" =>  "-6.233333",
                // "CountryCode" =>  "IE",
                // "ContinentName" =>  "Europe"
            ],
            [
                "name" =>  "Isle of Man",
                "Capital_name" =>  "Douglas",
                "latitude" =>  "54.15",
                "longitude" =>  "-4.483333",
                // "CountryCode" =>  "IM",
                // "ContinentName" =>  "Europe"
            ],
            [
                "name" =>  "Israel",
                "Capital_name" =>  "Jerusalem",
                "latitude" =>  "31.766666666666666",
                "longitude" =>  "35.233333",
                // "CountryCode" =>  "IL",
                // "ContinentName" =>  "Asia"
            ],
            [
                "name" =>  "Italy",
                "Capital_name" =>  "Rome",
                "latitude" =>  "41.9",
                "longitude" =>  "12.483333",
                // "CountryCode" =>  "IT",
                // "ContinentName" =>  "Europe"
            ],
            [
                "name" =>  "Jamaica",
                "Capital_name" =>  "Kingston",
                "latitude" =>  "18",
                "longitude" =>  "-76.800000",
                // "CountryCode" =>  "JM",
                // "ContinentName" =>  "North America"
            ],
            [
                "name" =>  "Japan",
                "Capital_name" =>  "Tokyo",
                "latitude" =>  "35.68333333333333",
                "longitude" =>  "139.750000",
                // "CountryCode" =>  "JP",
                // "ContinentName" =>  "Asia"
            ],
            [
                "name" =>  "Jersey",
                "Capital_name" =>  "Saint Helier",
                "latitude" =>  "49.18333333333333",
                "longitude" =>  "-2.100000",
                // "CountryCode" =>  "JE",
                // "ContinentName" =>  "Europe"
            ],
            [
                "name" =>  "Jordan",
                "Capital_name" =>  "Amman",
                "latitude" =>  "31.95",
                "longitude" =>  "35.933333",
                // "CountryCode" =>  "JO",
                // "ContinentName" =>  "Asia"
            ],
            [
                "name" =>  "Kazakhstan",
                "Capital_name" =>  "Astana",
                "latitude" =>  "51.166666666666664",
                "longitude" =>  "71.416667",
                // "CountryCode" =>  "KZ",
                // "ContinentName" =>  "Asia"
            ],
            [
                "name" =>  "Kenya",
                "Capital_name" =>  "Nairobi",
                "latitude" =>  "-1.2833333333333332",
                "longitude" =>  "36.816667",
                // "CountryCode" =>  "KE",
                // "ContinentName" =>  "Africa"
            ],
            [
                "name" =>  "Kiribati",
                "Capital_name" =>  "Tarawa",
                "latitude" =>  "-0.8833333333333333",
                "longitude" =>  "169.533333",
                // "CountryCode" =>  "KI",
                // "ContinentName" =>  "Australia"
            ],
            [
                "name" =>  "North Korea",
                "Capital_name" =>  "Pyongyang",
                "latitude" =>  "39.016666666666666",
                "longitude" =>  "125.750000",
                // "CountryCode" =>  "KP",
                // "ContinentName" =>  "Asia"
            ],
            [
                "name" =>  "South Korea",
                "Capital_name" =>  "Seoul",
                "latitude" =>  "37.55",
                "longitude" =>  "126.983333",
                // "CountryCode" =>  "KR",
                // "ContinentName" =>  "Asia"
            ],
            [
                "name" =>  "Kosovo",
                "Capital_name" =>  "Pristina",
                "latitude" =>  "42.666666666666664",
                "longitude" =>  "21.166667",
                // "CountryCode" =>  "KO",
                // "ContinentName" =>  "Europe"
            ],
            [
                "name" =>  "Kuwait",
                "Capital_name" =>  "Kuwait City",
                "latitude" =>  "29.366666666666667",
                "longitude" =>  "47.966667",
                // "CountryCode" =>  "KW",
                // "ContinentName" =>  "Asia"
            ],
            [
                "name" =>  "Kyrgyzstan",
                "Capital_name" =>  "Bishkek",
                "latitude" =>  "42.86666666666667",
                "longitude" =>  "74.600000",
                // "CountryCode" =>  "KG",
                // "ContinentName" =>  "Asia"
            ],
            [
                "name" =>  "Laos",
                "Capital_name" =>  "Vientiane",
                "latitude" =>  "17.966666666666665",
                "longitude" =>  "102.600000",
                // "CountryCode" =>  "LA",
                // "ContinentName" =>  "Asia"
            ],
            [
                "name" =>  "Latvia",
                "Capital_name" =>  "Riga",
                "latitude" =>  "56.95",
                "longitude" =>  "24.100000",
                // "CountryCode" =>  "LV",
                // "ContinentName" =>  "Europe"
            ],
            [
                "name" =>  "Lebanon",
                "Capital_name" =>  "Beirut",
                "latitude" =>  "33.86666666666667",
                "longitude" =>  "35.500000",
                // "CountryCode" =>  "LB",
                // "ContinentName" =>  "Asia"
            ],
            [
                "name" =>  "Lesotho",
                "Capital_name" =>  "Maseru",
                "latitude" =>  "-29.316666666666666",
                "longitude" =>  "27.483333",
                // "CountryCode" =>  "LS",
                // "ContinentName" =>  "Africa"
            ],
            [
                "name" =>  "Liberia",
                "Capital_name" =>  "Monrovia",
                "latitude" =>  "6.3",
                "longitude" =>  "-10.800000",
                // "CountryCode" =>  "LR",
                // "ContinentName" =>  "Africa"
            ],
            [
                "name" =>  "Libya",
                "Capital_name" =>  "Tripoli",
                "latitude" =>  "32.88333333333333",
                "longitude" =>  "13.166667",
                // "CountryCode" =>  "LY",
                // "ContinentName" =>  "Africa"
            ],
            [
                "name" =>  "Liechtenstein",
                "Capital_name" =>  "Vaduz",
                "latitude" =>  "47.13333333333333",
                "longitude" =>  "9.516667",
                // "CountryCode" =>  "LI",
                // "ContinentName" =>  "Europe"
            ],
            [
                "name" =>  "Lithuania",
                "Capital_name" =>  "Vilnius",
                "latitude" =>  "54.68333333333333",
                "longitude" =>  "25.316667",
                // "CountryCode" =>  "LT",
                // "ContinentName" =>  "Europe"
            ],
            [
                "name" =>  "Luxembourg",
                "Capital_name" =>  "Luxembourg",
                "latitude" =>  "49.6",
                "longitude" =>  "6.116667",
                // "CountryCode" =>  "LU",
                // "ContinentName" =>  "Europe"
            ],
            [
                "name" =>  "Macedonia",
                "Capital_name" =>  "Skopje",
                "latitude" =>  "42",
                "longitude" =>  "21.433333",
                // "CountryCode" =>  "MK",
                // "ContinentName" =>  "Europe"
            ],
            [
                "name" =>  "Madagascar",
                "Capital_name" =>  "Antananarivo",
                "latitude" =>  "-18.916666666666668",
                "longitude" =>  "47.516667",
                // "CountryCode" =>  "MG",
                // "ContinentName" =>  "Africa"
            ],
            [
                "name" =>  "Malawi",
                "Capital_name" =>  "Lilongwe",
                "latitude" =>  "-13.966666666666667",
                "longitude" =>  "33.783333",
                // "CountryCode" =>  "MW",
                // "ContinentName" =>  "Africa"
            ],
            [
                "name" =>  "Malaysia",
                "Capital_name" =>  "Kuala Lumpur",
                "latitude" =>  "3.1666666666666665",
                "longitude" =>  "101.700000",
                // "CountryCode" =>  "MY",
                // "ContinentName" =>  "Asia"
            ],
            [
                "name" =>  "Maldives",
                "Capital_name" =>  "Male",
                "latitude" =>  "4.166666666666667",
                "longitude" =>  "73.500000",
                // "CountryCode" =>  "MV",
                // "ContinentName" =>  "Asia"
            ],
            [
                "name" =>  "Mali",
                "Capital_name" =>  "Bamako",
                "latitude" =>  "12.65",
                "longitude" =>  "-8.000000",
                // "CountryCode" =>  "ML",
                // "ContinentName" =>  "Africa"
            ],
            [
                "name" =>  "Malta",
                "Capital_name" =>  "Valletta",
                "latitude" =>  "35.88333333333333",
                "longitude" =>  "14.500000",
                // "CountryCode" =>  "MT",
                // "ContinentName" =>  "Europe"
            ],
            [
                "name" =>  "Marshall Islands",
                "Capital_name" =>  "Majuro",
                "latitude" =>  "7.1",
                "longitude" =>  "171.383333",
                // "CountryCode" =>  "MH",
                // "ContinentName" =>  "Australia"
            ],
            [
                "name" =>  "Mauritania",
                "Capital_name" =>  "Nouakchott",
                "latitude" =>  "18.066666666666666",
                "longitude" =>  "-15.966667",
                // "CountryCode" =>  "MR",
                // "ContinentName" =>  "Africa"
            ],
            [
                "name" =>  "Mauritius",
                "Capital_name" =>  "Port Louis",
                "latitude" =>  "-20.15",
                "longitude" =>  "57.483333",
                // "CountryCode" =>  "MU",
                // "ContinentName" =>  "Africa"
            ],
            [
                "name" =>  "Mexico",
                "Capital_name" =>  "Mexico City",
                "latitude" =>  "19.433333333333334",
                "longitude" =>  "-99.133333",
                // "CountryCode" =>  "MX",
                // "ContinentName" =>  "Central America"
            ],
            [
                "name" =>  "Federated States of Micronesia",
                "Capital_name" =>  "Palikir",
                "latitude" =>  "6.916666666666667",
                "longitude" =>  "158.150000",
                // "CountryCode" =>  "FM",
                // "ContinentName" =>  "Australia"
            ],
            [
                "name" =>  "Moldova",
                "Capital_name" =>  "Chisinau",
                "latitude" =>  "47",
                "longitude" =>  "28.850000",
                // "CountryCode" =>  "MD",
                // "ContinentName" =>  "Europe"
            ],
            [
                "name" =>  "Monaco",
                "Capital_name" =>  "Monaco",
                "latitude" =>  "43.733333333333334",
                "longitude" =>  "7.416667",
                // "CountryCode" =>  "MC",
                // "ContinentName" =>  "Europe"
            ],
            [
                "name" =>  "Mongolia",
                "Capital_name" =>  "Ulaanbaatar",
                "latitude" =>  "47.916666666666664",
                "longitude" =>  "106.916667",
                // "CountryCode" =>  "MN",
                // "ContinentName" =>  "Asia"
            ],
            [
                "name" =>  "Montenegro",
                "Capital_name" =>  "Podgorica",
                "latitude" =>  "42.43333333333333",
                "longitude" =>  "19.266667",
                // "CountryCode" =>  "ME",
                // "ContinentName" =>  "Europe"
            ],
            [
                "name" =>  "Montserrat",
                "Capital_name" =>  "Plymouth",
                "latitude" =>  "16.7",
                "longitude" =>  "-62.216667",
                // "CountryCode" =>  "MS",
                // "ContinentName" =>  "North America"
            ],
            [
                "name" =>  "Morocco",
                "Capital_name" =>  "Rabat",
                "latitude" =>  "34.016666666666666",
                "longitude" =>  "-6.816667",
                // "CountryCode" =>  "MA",
                // "ContinentName" =>  "Africa"
            ],
            [
                "name" =>  "Mozambique",
                "Capital_name" =>  "Maputo",
                "latitude" =>  "-25.95",
                "longitude" =>  "32.583333",
                // "CountryCode" =>  "MZ",
                // "ContinentName" =>  "Africa"
            ],
            [
                "name" =>  "Namibia",
                "Capital_name" =>  "Windhoek",
                "latitude" =>  "-22.566666666666666",
                "longitude" =>  "17.083333",
                // "CountryCode" =>  "NA",
                // "ContinentName" =>  "Africa"
            ],
            [
                "name" =>  "Nepal",
                "Capital_name" =>  "Kathmandu",
                "latitude" =>  "27.716666666666665",
                "longitude" =>  "85.316667",
                // "CountryCode" =>  "NP",
                // "ContinentName" =>  "Asia"
            ],
            [
                "name" =>  "Netherlands",
                "Capital_name" =>  "Amsterdam",
                "latitude" =>  "52.35",
                "longitude" =>  "4.916667",
                // "CountryCode" =>  "NL",
                // "ContinentName" =>  "Europe"
            ],
            [
                "name" =>  "New Caledonia",
                "Capital_name" =>  "Noumea",
                "latitude" =>  "-22.266666666666666",
                "longitude" =>  "166.450000",
                // "CountryCode" =>  "NC",
                // "ContinentName" =>  "Australia"
            ],
            [
                "name" =>  "New Zealand",
                "Capital_name" =>  "Wellington",
                "latitude" =>  "-41.3",
                "longitude" =>  "174.783333",
                // "CountryCode" =>  "NZ",
                // "ContinentName" =>  "Australia"
            ],
            [
                "name" =>  "Nicaragua",
                "Capital_name" =>  "Managua",
                "latitude" =>  "12.133333333333333",
                "longitude" =>  "-86.250000",
                // "CountryCode" =>  "NI",
                // "ContinentName" =>  "Central America"
            ],
            [
                "name" =>  "Niger",
                "Capital_name" =>  "Niamey",
                "latitude" =>  "13.516666666666667",
                "longitude" =>  "2.116667",
                // "CountryCode" =>  "NE",
                // "ContinentName" =>  "Africa"
            ],
            [
                "name" =>  "Nigeria",
                "Capital_name" =>  "Abuja",
                "latitude" =>  "9.083333333333334",
                "longitude" =>  "7.533333",
                // "CountryCode" =>  "NG",
                // "ContinentName" =>  "Africa"
            ],
            [
                "name" =>  "Niue",
                "Capital_name" =>  "Alofi",
                "latitude" =>  "-19.016666666666666",
                "longitude" =>  "-169.916667",
                // "CountryCode" =>  "NU",
                // "ContinentName" =>  "Australia"
            ],
            [
                "name" =>  "Norfolk Island",
                "Capital_name" =>  "Kingston",
                "latitude" =>  "-29.05",
                "longitude" =>  "167.966667",
                // "CountryCode" =>  "NF",
                // "ContinentName" =>  "Australia"
            ],
            [
                "name" =>  "Northern Mariana Islands",
                "Capital_name" =>  "Saipan",
                "latitude" =>  "15.2",
                "longitude" =>  "145.750000",
                // "CountryCode" =>  "MP",
                // "ContinentName" =>  "Australia"
            ],
            [
                "name" =>  "Norway",
                "Capital_name" =>  "Oslo",
                "latitude" =>  "59.916666666666664",
                "longitude" =>  "10.750000",
                // "CountryCode" =>  "NO",
                // "ContinentName" =>  "Europe"
            ],
            [
                "name" =>  "Oman",
                "Capital_name" =>  "Muscat",
                "latitude" =>  "23.616666666666667",
                "longitude" =>  "58.583333",
                // "CountryCode" =>  "OM",
                // "ContinentName" =>  "Asia"
            ],
            [
                "name" =>  "Pakistan",
                "Capital_name" =>  "Islamabad",
                "latitude" =>  "33.68333333333333",
                "longitude" =>  "73.050000",
                // "CountryCode" =>  "PK",
                // "ContinentName" =>  "Asia"
            ],
            [
                "name" =>  "Palau",
                "Capital_name" =>  "Melekeok",
                "latitude" =>  "7.483333333333333",
                "longitude" =>  "134.633333",
                // "CountryCode" =>  "PW",
                // "ContinentName" =>  "Australia"
            ],
            [
                "name" =>  "Panama",
                "Capital_name" =>  "Panama City",
                "latitude" =>  "8.966666666666667",
                "longitude" =>  "-79.533333",
                // "CountryCode" =>  "PA",
                // "ContinentName" =>  "Central America"
            ],
            [
                "name" =>  "Papua New Guinea",
                "Capital_name" =>  "Port Moresby",
                "latitude" =>  "-9.45",
                "longitude" =>  "147.183333",
                // "CountryCode" =>  "PG",
                // "ContinentName" =>  "Australia"
            ],
            [
                "name" =>  "Paraguay",
                "Capital_name" =>  "Asuncion",
                "latitude" =>  "-25.266666666666666",
                "longitude" =>  "-57.666667",
                // "CountryCode" =>  "PY",
                // "ContinentName" =>  "South America"
            ],
            [
                "name" =>  "Peru",
                "Capital_name" =>  "Lima",
                "latitude" =>  "-12.05",
                "longitude" =>  "-77.050000",
                // "CountryCode" =>  "PE",
                // "ContinentName" =>  "South America"
            ],
            [
                "name" =>  "Philippines",
                "Capital_name" =>  "Manila",
                "latitude" =>  "14.6",
                "longitude" =>  "120.966667",
                // "CountryCode" =>  "PH",
                // "ContinentName" =>  "Asia"
            ],
            [
                "name" =>  "Pitcairn Islands",
                "Capital_name" =>  "Adamstown",
                "latitude" =>  "-25.066666666666666",
                "longitude" =>  "-130.083333",
                // "CountryCode" =>  "PN",
                // "ContinentName" =>  "Australia"
            ],
            [
                "name" =>  "Poland",
                "Capital_name" =>  "Warsaw",
                "latitude" =>  "52.25",
                "longitude" =>  "21.000000",
                // "CountryCode" =>  "PL",
                // "ContinentName" =>  "Europe"
            ],
            [
                "name" =>  "Portugal",
                "Capital_name" =>  "Lisbon",
                "latitude" =>  "38.71666666666667",
                "longitude" =>  "-9.133333",
                // "CountryCode" =>  "PT",
                // "ContinentName" =>  "Europe"
            ],
            [
                "name" =>  "Puerto Rico",
                "Capital_name" =>  "San Juan",
                "latitude" =>  "18.466666666666665",
                "longitude" =>  "-66.116667",
                // "CountryCode" =>  "PR",
                // "ContinentName" =>  "North America"
            ],
            [
                "name" =>  "Qatar",
                "Capital_name" =>  "Doha",
                "latitude" =>  "25.283333333333335",
                "longitude" =>  "51.533333",
                // "CountryCode" =>  "QA",
                // "ContinentName" =>  "Asia"
            ],
            [
                "name" =>  "Romania",
                "Capital_name" =>  "Bucharest",
                "latitude" =>  "44.43333333333333",
                "longitude" =>  "26.100000",
                // "CountryCode" =>  "RO",
                // "ContinentName" =>  "Europe"
            ],
            [
                "name" =>  "Russia",
                "Capital_name" =>  "Moscow",
                "latitude" =>  "55.75",
                "longitude" =>  "37.600000",
                // "CountryCode" =>  "RU",
                // "ContinentName" =>  "Europe"
            ],
            [
                "name" =>  "Rwanda",
                "Capital_name" =>  "Kigali",
                "latitude" =>  "-1.95",
                "longitude" =>  "30.050000",
                // "CountryCode" =>  "RW",
                // "ContinentName" =>  "Africa"
            ],
            [
                "name" =>  "Saint Barthelemy",
                "Capital_name" =>  "Gustavia",
                "latitude" =>  "17.883333333333333",
                "longitude" =>  "-62.850000",
                // "CountryCode" =>  "BL",
                // "ContinentName" =>  "North America"
            ],
            [
                "name" =>  "Saint Helena",
                "Capital_name" =>  "Jamestown",
                "latitude" =>  "-15.933333333333334",
                "longitude" =>  "-5.716667",
                // "CountryCode" =>  "SH",
                // "ContinentName" =>  "Africa"
            ],
            [
                "name" =>  "Saint Kitts and Nevis",
                "Capital_name" =>  "Basseterre",
                "latitude" =>  "17.3",
                "longitude" =>  "-62.716667",
                // "CountryCode" =>  "KN",
                // "ContinentName" =>  "North America"
            ],
            [
                "name" =>  "Saint Lucia",
                "Capital_name" =>  "Castries",
                "latitude" =>  "14",
                "longitude" =>  "-61.000000",
                // "CountryCode" =>  "LC",
                // "ContinentName" =>  "North America"
            ],
            [
                "name" =>  "Saint Pierre and Miquelon",
                "Capital_name" =>  "Saint-Pierre",
                "latitude" =>  "46.766666666666666",
                "longitude" =>  "-56.183333",
                // "CountryCode" =>  "PM",
                // "ContinentName" =>  "Central America"
            ],
            [
                "name" =>  "Saint Vincent and the Grenadines",
                "Capital_name" =>  "Kingstown",
                "latitude" =>  "13.133333333333333",
                "longitude" =>  "-61.216667",
                // "CountryCode" =>  "VC",
                // "ContinentName" =>  "Central America"
            ],
            [
                "name" =>  "Samoa",
                "Capital_name" =>  "Apia",
                "latitude" =>  "-13.816666666666666",
                "longitude" =>  "-171.766667",
                // "CountryCode" =>  "WS",
                // "ContinentName" =>  "Australia"
            ],
            [
                "name" =>  "San Marino",
                "Capital_name" =>  "San Marino",
                "latitude" =>  "43.93333333333333",
                "longitude" =>  "12.416667",
                // "CountryCode" =>  "SM",
                // "ContinentName" =>  "Europe"
            ],
            [
                "name" =>  "Sao Tome and Principe",
                "Capital_name" =>  "Sao Tome",
                "latitude" =>  "0.3333333333333333",
                "longitude" =>  "6.733333",
                // "CountryCode" =>  "ST",
                // "ContinentName" =>  "Africa"
            ],
            [
                "name" =>  "Saudi Arabia",
                "Capital_name" =>  "Riyadh",
                "latitude" =>  "24.65",
                "longitude" =>  "46.700000",
                // "CountryCode" =>  "SA",
                // "ContinentName" =>  "Asia"
            ],
            [
                "name" =>  "Senegal",
                "Capital_name" =>  "Dakar",
                "latitude" =>  "14.733333333333333",
                "longitude" =>  "-17.633333",
                // "CountryCode" =>  "SN",
                // "ContinentName" =>  "Africa"
            ],
            [
                "name" =>  "Serbia",
                "Capital_name" =>  "Belgrade",
                "latitude" =>  "44.833333333333336",
                "longitude" =>  "20.500000",
                // "CountryCode" =>  "RS",
                // "ContinentName" =>  "Europe"
            ],
            [
                "name" =>  "Seychelles",
                "Capital_name" =>  "Victoria",
                "latitude" =>  "-4.616666666666667",
                "longitude" =>  "55.450000",
                // "CountryCode" =>  "SC",
                // "ContinentName" =>  "Africa"
            ],
            [
                "name" =>  "Sierra Leone",
                "Capital_name" =>  "Freetown",
                "latitude" =>  "8.483333333333333",
                "longitude" =>  "-13.233333",
                // "CountryCode" =>  "SL",
                // "ContinentName" =>  "Africa"
            ],
            [
                "name" =>  "Singapore",
                "Capital_name" =>  "Singapore",
                "latitude" =>  "1.2833333333333332",
                "longitude" =>  "103.850000",
                // "CountryCode" =>  "SG",
                // "ContinentName" =>  "Asia"
            ],
            [
                "name" =>  "Sint Maarten",
                "Capital_name" =>  "Philipsburg",
                "latitude" =>  "18.016666666666666",
                "longitude" =>  "-63.033333",
                // "CountryCode" =>  "SX",
                // "ContinentName" =>  "North America"
            ],
            [
                "name" =>  "Slovakia",
                "Capital_name" =>  "Bratislava",
                "latitude" =>  "48.15",
                "longitude" =>  "17.116667",
                // "CountryCode" =>  "SK",
                // "ContinentName" =>  "Europe"
            ],
            [
                "name" =>  "Slovenia",
                "Capital_name" =>  "Ljubljana",
                "latitude" =>  "46.05",
                "longitude" =>  "14.516667",
                // "CountryCode" =>  "SI",
                // "ContinentName" =>  "Europe"
            ],
            [
                "name" =>  "Solomon Islands",
                "Capital_name" =>  "Honiara",
                "latitude" =>  "-9.433333333333334",
                "longitude" =>  "159.950000",
                // "CountryCode" =>  "SB",
                // "ContinentName" =>  "Australia"
            ],
            [
                "name" =>  "Somalia",
                "Capital_name" =>  "Mogadishu",
                "latitude" =>  "2.066666666666667",
                "longitude" =>  "45.333333",
                // "CountryCode" =>  "SO",
                // "ContinentName" =>  "Africa"
            ],
            [
                "name" =>  "South Africa",
                "Capital_name" =>  "Pretoria",
                "latitude" =>  "-25.7",
                "longitude" =>  "28.216667",
                // "CountryCode" =>  "ZA",
                // "ContinentName" =>  "Africa"
            ],
            [
                "name" =>  "South Sudan",
                "Capital_name" =>  "Juba",
                "latitude" =>  "4.85",
                "longitude" =>  "31.616667",
                // "CountryCode" =>  "SS",
                // "ContinentName" =>  "Africa"
            ],
            [
                "name" =>  "Spain",
                "Capital_name" =>  "Madrid",
                "latitude" =>  "40.4",
                "longitude" =>  "-3.683333",
                // "CountryCode" =>  "ES",
                // "ContinentName" =>  "Europe"
            ],
            [
                "name" =>  "Sri Lanka",
                "Capital_name" =>  "Colombo",
                "latitude" =>  "6.916666666666667",
                "longitude" =>  "79.833333",
                // "CountryCode" =>  "LK",
                // "ContinentName" =>  "Asia"
            ],
            [
                "name" =>  "Sudan",
                "Capital_name" =>  "Khartoum",
                "latitude" =>  "15.6",
                "longitude" =>  "32.533333",
                // "CountryCode" =>  "SD",
                // "ContinentName" =>  "Africa"
            ],
            [
                "name" =>  "Suriname",
                "Capital_name" =>  "Paramaribo",
                "latitude" =>  "5.833333333333333",
                "longitude" =>  "-55.166667",
                // "CountryCode" =>  "SR",
                // "ContinentName" =>  "South America"
            ],
            [
                "name" =>  "Svalbard",
                "Capital_name" =>  "Longyearbyen",
                "latitude" =>  "78.21666666666667",
                "longitude" =>  "15.633333",
                // "CountryCode" =>  "SJ",
                // "ContinentName" =>  "Europe"
            ],
            [
                "name" =>  "Swaziland",
                "Capital_name" =>  "Mbabane",
                "latitude" =>  "-26.316666666666666",
                "longitude" =>  "31.133333",
                // "CountryCode" =>  "SZ",
                // "ContinentName" =>  "Africa"
            ],
            [
                "name" =>  "Sweden",
                "Capital_name" =>  "Stockholm",
                "latitude" =>  "59.333333333333336",
                "longitude" =>  "18.050000",
                // "CountryCode" =>  "SE",
                // "ContinentName" =>  "Europe"
            ],
            [
                "name" =>  "Switzerland",
                "Capital_name" =>  "Bern",
                "latitude" =>  "46.916666666666664",
                "longitude" =>  "7.466667",
                // "CountryCode" =>  "CH",
                // "ContinentName" =>  "Europe"
            ],
            [
                "name" =>  "Syria",
                "Capital_name" =>  "Damascus",
                "latitude" =>  "33.5",
                "longitude" =>  "36.300000",
                // "CountryCode" =>  "SY",
                // "ContinentName" =>  "Asia"
            ],
            [
                "name" =>  "Taiwan",
                "Capital_name" =>  "Taipei",
                "latitude" =>  "25.033333333333335",
                "longitude" =>  "121.516667",
                // "CountryCode" =>  "TW",
                // "ContinentName" =>  "Asia"
            ],
            [
                "name" =>  "Tajikistan",
                "Capital_name" =>  "Dushanbe",
                "latitude" =>  "38.55",
                "longitude" =>  "68.766667",
                // "CountryCode" =>  "TJ",
                // "ContinentName" =>  "Asia"
            ],
            [
                "name" =>  "Tanzania",
                "Capital_name" =>  "Dar es Salaam",
                "latitude" =>  "-6.8",
                "longitude" =>  "39.283333",
                // "CountryCode" =>  "TZ",
                // "ContinentName" =>  "Africa"
            ],
            [
                "name" =>  "Thailand",
                "Capital_name" =>  "Bangkok",
                "latitude" =>  "13.75",
                "longitude" =>  "100.516667",
                // "CountryCode" =>  "TH",
                // "ContinentName" =>  "Asia"
            ],
            [
                "name" =>  "Timor-Leste",
                "Capital_name" =>  "Dili",
                "latitude" =>  "-8.583333333333334",
                "longitude" =>  "125.600000",
                // "CountryCode" =>  "TL",
                // "ContinentName" =>  "Asia"
            ],
            [
                "name" =>  "Togo",
                "Capital_name" =>  "Lome",
                "latitude" =>  "6.116666666666666",
                "longitude" =>  "1.216667",
                // "CountryCode" =>  "TG",
                // "ContinentName" =>  "Africa"
            ],
            [
                "name" =>  "Tonga",
                "Capital_name" =>  "Nuku'alofa",
                "latitude" =>  "-21.133333333333333",
                "longitude" =>  "-175.200000",
                // "CountryCode" =>  "TO",
                // "ContinentName" =>  "Australia"
            ],
            [
                "name" =>  "Trinidad and Tobago",
                "Capital_name" =>  "Port of Spain",
                "latitude" =>  "10.65",
                "longitude" =>  "-61.516667",
                // "CountryCode" =>  "TT",
                // "ContinentName" =>  "North America"
            ],
            [
                "name" =>  "Tunisia",
                "Capital_name" =>  "Tunis",
                "latitude" =>  "36.8",
                "longitude" =>  "10.183333",
                // "CountryCode" =>  "TN",
                // "ContinentName" =>  "Africa"
            ],
            [
                "name" =>  "Turkey",
                "Capital_name" =>  "Ankara",
                "latitude" =>  "39.93333333333333",
                "longitude" =>  "32.866667",
                // "CountryCode" =>  "TR",
                // "ContinentName" =>  "Europe"
            ],
            [
                "name" =>  "Turkmenistan",
                "Capital_name" =>  "Ashgabat",
                "latitude" =>  "37.95",
                "longitude" =>  "58.383333",
                // "CountryCode" =>  "TM",
                // "ContinentName" =>  "Asia"
            ],
            [
                "name" =>  "Turks and Caicos Islands",
                "Capital_name" =>  "Grand Turk",
                "latitude" =>  "21.466666666666665",
                "longitude" =>  "-71.133333",
                // "CountryCode" =>  "TC",
                // "ContinentName" =>  "North America"
            ],
            [
                "name" =>  "Tuvalu",
                "Capital_name" =>  "Funafuti",
                "latitude" =>  "-8.516666666666667",
                "longitude" =>  "179.216667",
                // "CountryCode" =>  "TV",
                // "ContinentName" =>  "Australia"
            ],
            [
                "name" =>  "Uganda",
                "Capital_name" =>  "Kampala",
                "latitude" =>  "0.31666666666666665",
                "longitude" =>  "32.550000",
                // "CountryCode" =>  "UG",
                // "ContinentName" =>  "Africa"
            ],
            [
                "name" =>  "Ukraine",
                "Capital_name" =>  "Kyiv",
                "latitude" =>  "50.43333333333333",
                "longitude" =>  "30.516667",
                // "CountryCode" =>  "UA",
                // "ContinentName" =>  "Europe"
            ],
            [
                "name" =>  "United Arab Emirates",
                "Capital_name" =>  "Abu Dhabi",
                "latitude" =>  "24.466666666666665",
                "longitude" =>  "54.366667",
                // "CountryCode" =>  "AE",
                // "ContinentName" =>  "Asia"
            ],
            [
                "name" =>  "United Kingdom",
                "Capital_name" =>  "London",
                "latitude" =>  "51.5",
                "longitude" =>  "-0.083333",
                // "CountryCode" =>  "GB",
                // "ContinentName" =>  "Europe"
            ],
            [
                "name" =>  "United States",
                "Capital_name" =>  "Washington",
                "latitude" =>  " D.C.",
                "longitude" =>  "38.883333",
                // "CountryCode" =>  "-77.000000",
                // "ContinentName" =>  "US"
            ],
            [
                "name" =>  "Uruguay",
                "Capital_name" =>  "Montevideo",
                "latitude" =>  "-34.85",
                "longitude" =>  "-56.166667",
                // "CountryCode" =>  "UY",
                // "ContinentName" =>  "South America"
            ],
            [
                "name" =>  "Uzbekistan",
                "Capital_name" =>  "Tashkent",
                "latitude" =>  "41.31666666666667",
                "longitude" =>  "69.250000",
                // "CountryCode" =>  "UZ",
                // "ContinentName" =>  "Asia"
            ],
            [
                "name" =>  "Vanuatu",
                "Capital_name" =>  "Port-Vila",
                "latitude" =>  "-17.733333333333334",
                "longitude" =>  "168.316667",
                // "CountryCode" =>  "VU",
                // "ContinentName" =>  "Australia"
            ],
            [
                "name" =>  "Venezuela",
                "Capital_name" =>  "Caracas",
                "latitude" =>  "10.483333333333333",
                "longitude" =>  "-66.866667",
                // "CountryCode" =>  "VE",
                // "ContinentName" =>  "South America"
            ],
            [
                "name" =>  "Vietnam",
                "Capital_name" =>  "Hanoi",
                "latitude" =>  "21.033333333333335",
                "longitude" =>  "105.850000",
                // "CountryCode" =>  "VN",
                // "ContinentName" =>  "Asia"
            ],
            [
                "name" =>  "US Virgin Islands",
                "Capital_name" =>  "Charlotte Amalie",
                "latitude" =>  "18.35",
                "longitude" =>  "-64.933333",
                // "CountryCode" =>  "VI",
                // "ContinentName" =>  "North America"
            ],
            [
                "name" =>  "Wallis and Futuna",
                "Capital_name" =>  "Mata-Utu",
                "latitude" =>  "-13.95",
                "longitude" =>  "-171.933333",
                // "CountryCode" =>  "WF",
                // "ContinentName" =>  "Australia"
            ],
            [
                "name" =>  "Yemen",
                "Capital_name" =>  "Sanaa",
                "latitude" =>  "15.35",
                "longitude" =>  "44.200000",
                // "CountryCode" =>  "YE",
                // "ContinentName" =>  "Asia"
            ],
            [
                "name" =>  "Zambia",
                "Capital_name" =>  "Lusaka",
                "latitude" =>  "-15.416666666666666",
                "longitude" =>  "28.283333",
                // "CountryCode" =>  "ZM",
                // "ContinentName" =>  "Africa"
            ],
            [
                "name" =>  "Zimbabwe",
                "Capital_name" =>  "Harare",
                "latitude" =>  "-17.816666666666666",
                "longitude" =>  "31.033333",
                // "CountryCode" =>  "ZW",
                // "ContinentName" =>  "Africa"
            ],
            [
                "name" =>  "US Minor Outlying Islands",
                "Capital_name" =>  "Washington",
                "latitude" =>  " D.C.",
                "longitude" =>  "38.883333",
                // "CountryCode" =>  "-77.000000",
                // "ContinentName" =>  "UM"
            ],
            [
                "name" =>  "Antarctica",
                "Capital_name" =>  "N/A",
                "latitude" =>  "0",
                "longitude" =>  "0.000000",
                // "CountryCode" =>  "AQ",
                // "ContinentName" =>  "Antarctica"
            ],
            [
                "name" =>  "Northern Cyprus",
                "Capital_name" =>  "North Nicosia",
                "latitude" =>  "35.183333",
                "longitude" =>  "33.366667",
                // "CountryCode" =>  "NULL",
                // "ContinentName" =>  "Europe"
            ],
            [
                "name" =>  "Hong Kong",
                "Capital_name" =>  "N/A",
                "latitude" =>  "0",
                "longitude" =>  "0.000000",
                // "CountryCode" =>  "HK",
                // "ContinentName" =>  "Asia"
            ],
            [
                "name" =>  "Heard Island and McDonald Islands",
                "Capital_name" =>  "N/A",
                "latitude" =>  "0",
                "longitude" =>  "0.000000",
                // "CountryCode" =>  "HM",
                // "ContinentName" =>  "Antarctica"
            ],
            [
                "name" =>  "British Indian Ocean Territory",
                "Capital_name" =>  "Diego Garcia",
                "latitude" =>  "-7.3",
                "longitude" =>  "72.400000",
                // "CountryCode" =>  "IO",
                // "ContinentName" =>  "Africa"
            ],
            [
                "name" =>  "Macau",
                "Capital_name" =>  "N/A",
                "latitude" =>  "0",
                "longitude" =>  "0.000000",
                // "CountryCode" =>  "MO",
                // "ContinentName" =>  "Asia"
            ]
        ];
    }
}
