<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguagesTableSeeder extends Seeder
{
    /**
     * The languages to add.
     */
    protected $languages =  [
        [
            "name" => "English",
            "lang" => "English",
            "code" => "en",
            "latitude" => 37.0902,
            "longitude" => 95.7129
        ],
        [
            "name" => "Afrikaans",
            "lang" => "Afrikaans",
            "code" => "af",
            "latitude" => -26.0897798,
            "longitude" => 28.033687
        ],
        [
            "name" => "Amharic",
            "lang" => "አማርኛ",
            "code" => "am",
            "latitude" => 11.3494,
            "longitude" => 37.9785
        ],
        [
            "name" => "Arabic",
            "lang" => "عربي",
            "code" => "ar",
            "latitude" => 24.774265,
            "longitude" => 46.738586
        ],
        [
            "name" => "Assamese",
            "lang" => "অসমীয়া",
            "code" => "as",
            "latitude" => 26.0360179,
            "longitude" => 26.0360179
        ],
        [
            "name" => "Azerbaijani",
            "lang" => "Azərbaycan dili",
            "code" => "az",
            "latitude" => 40.1542081,
            "longitude" => 45.5112896
        ],
        [
            "name" => "Bulgarian",
            "lang" => "Български",
            "code" => "bu",
            "latitude" => 42.7339,
            "longitude" => 25.4858
        ],
        [
            "name" => "Chinese(Simplified-PRC)",
            "lang" => "简体中文",
            "code" => "ch",
            "latitude" => 39.916668,
            "longitude" => 116.383331
        ],
        [
            "name" => "Chinese(Traditional-HongKong)",
            "lang" => "繁體中文(香港)",
            "code" => "ch",
            "latitude" => 39.916668,
            "longitude" => 116.383331
        ],
        [
            "name" => "Chinese(Traditional-Taiwan)",
            "lang" => "繁體中文(台灣)",
            "code" => "ch",
            "latitude" => 39.916668,
            "longitude" => 116.383331
        ],
        [
            "name" => "Creole(Haitian)",
            "lang" => "Kreyòl",
            "code" => "cr",
            "latitude" => 22.6371813,
            "longitude" => 69.3569891
        ],
        [
            "name" => "Czech",
            "lang" => "Čeština",
            "code" => "cz",
            "latitude" => 49.8175,
            "longitude" => 15.473
        ],
        [
            "name" => "Dari",
            "lang" => "دری.",
            "code" => "da",
            "latitude" => 37.0902,
            "longitude" => 95.7129
        ],
        [
            "name" => "Dutch(Belgium)",
            "lang" => "Nederlands (België)",
            "code" => "du",
            "latitude" => 37.0902,
            "longitude" => 95.7129
        ],
        [
            "name" => "Dutch(Netherlands)",
            "lang" => "Nederlands (Nederland)",
            "code" => "du",
            "latitude" => 37.0902,
            "longitude" => 95.7129
        ],
        [
            "name" => "Finnish",
            "lang" => "suomi",
            "code" => "fi",
            "latitude" => 37.0902,
            "longitude" => 95.7129
        ],
        [
            "name" => "French(Africa/International)",
            "lang" => "Français (Afrique/International)",
            "code" => "fr",
            "latitude" => 37.0902,
            "longitude" => 95.7129
        ],
        [
            "name" => "French(Canada)",
            "lang" => "Français (Canada)",
            "code" => "fr",
            "latitude" => 37.0902,
            "longitude" => 95.7129
        ],
        [
            "name" => "French(France)",
            "lang" => "Français (France)",
            "code" => "fr",
            "latitude" => 37.0902,
            "longitude" => 95.7129
        ],
        [
            "name" => "German",
            "lang" => "deutsch",
            "code" => "ge",
            "latitude" => 37.0902,
            "longitude" => 95.7129
        ],
        [
            "name" => "Greek",
            "lang" => "Ελληνικά",
            "code" => "gr",
            "latitude" => 37.0902,
            "longitude" => 95.7129
        ],
        [
            "name" => "Gujarati",
            "lang" => "ગુજરાતી",
            "code" => "gu",
            "latitude" => 37.0902,
            "longitude" => 95.7129
        ],
        [
            "name" => "Hebrew",
            "lang" => "עברית",
            "code" => "he",
            "latitude" => 37.0902,
            "longitude" => 95.7129
        ],
        [
            "name" => "Hindi",
            "lang" => "हिंदी",
            "code" => "hi",
            "latitude" => 37.0902,
            "longitude" => 95.7129
        ],
        [
            "name" => "Hmong",
            "lang" => "Hmoob",
            "code" => "hm",
            "latitude" => 37.0902,
            "longitude" => 95.7129
        ],
        [
            "name" => "Hungarian",
            "lang" => "magyar",
            "code" => "hu",
            "latitude" => 37.0902,
            "longitude" => 95.7129
        ],
        [
            "name" => "Indonesian",
            "lang" => "Bahasa Indonesia",
            "code" => "in",
            "latitude" => 37.0902,
            "longitude" => 95.7129
        ],
        [
            "name" => "Italian",
            "lang" => "Italiano",
            "code" => "it",
            "latitude" => 37.0902,
            "longitude" => 95.7129
        ],
        [
            "name" => "Japanese",
            "lang" => "日本語",
            "code" => "ja",
            "latitude" => 37.0902,
            "longitude" => 95.7129
        ],
        [
            "name" => "Kannada",
            "lang" => "ಕನ್ನಡ",
            "code" => "ka",
            "latitude" => 37.0902,
            "longitude" => 95.7129
        ],
        [
            "name" => "Korean",
            "lang" => "한국어",
            "code" => "ko",
            "latitude" => 37.0902,
            "longitude" => 95.7129
        ],
        [
            "name" => "Marathi",
            "lang" => "मराठी",
            "code" => "ma",
            "latitude" => 37.0902,
            "longitude" => 95.7129
        ],
        [
            "name" => "Nepalese",
            "lang" => "नेपाली",
            "code" => "ne",
            "latitude" => 37.0902,
            "longitude" => 95.7129
        ],
        [
            "name" => "Oromo",
            "lang" => "Afaan Oromoo",
            "code" => "or",
            "latitude" => 37.0902,
            "longitude" => 95.7129
        ],
        [
            "name" => "Persian",
            "lang" => "فارسی",
            "code" => "pe",
            "latitude" => 37.0902,
            "longitude" => 95.7129
        ],
        [
            "name" => "Persian/Farsi",
            "lang" => "فارسی",
            "code" => "pe",
            "latitude" => 37.0902,
            "longitude" => 95.7129
        ],
        [
            "name" => "Polish",
            "lang" => "Polski",
            "code" => "po",
            "latitude" => 37.0902,
            "longitude" => 95.7129
        ],
        [
            "name" => "Portuguese(Brazil)",
            "lang" => "Português (Brasil)",
            "code" => "po",
            "latitude" => 37.0902,
            "longitude" => 95.7129
        ],
        [
            "name" => "Portuguese(Portugal)",
            "lang" => "Português (Portugal)",
            "code" => "po",
            "latitude" => 37.0902,
            "longitude" => 95.7129
        ],
        [
            "name" => "Romanian",
            "lang" => "Română",
            "code" => "ro",
            "latitude" => 37.0902,
            "longitude" => 95.7129
        ],
        [
            "name" => "Russian",
            "lang" => "Русский",
            "code" => "ru",
            "latitude" => 37.0902,
            "longitude" => 95.7129
        ],
        [
            "name" => "Sepedi",
            "lang" => "Northern Sotho",
            "code" => "se",
            "latitude" => 37.0902,
            "longitude" => 95.7129
        ],
        [
            "name" => "Sesotho",
            "lang" => "Sesotho -S. Africa",
            "code" => "se",
            "latitude" => 37.0902,
            "longitude" => 95.7129
        ],
        [
            "name" => "Sinhalese",
            "lang" => "සිංහල",
            "code" => "si",
            "latitude" => 37.0902,
            "longitude" => 95.7129
        ],
        [
            "name" => "Slovak",
            "lang" => "slovenčina",
            "code" => "sl",
            "latitude" => 37.0902,
            "longitude" => 95.7129
        ],
        [
            "name" => "Spanish(Mexico)",
            "lang" => "Español (México)",
            "code" => "sp",
            "latitude" => 37.0902,
            "longitude" => 95.7129
        ],
        [
            "name" => "Spanish(Spain)",
            "lang" => "Español (España)",
            "code" => "sp",
            "latitude" => 37.0902,
            "longitude" => 95.7129
        ],
        [
            "name" => "Swahili",
            "lang" => "Kiswahili",
            "code" => "sw",
            "latitude" => 37.0902,
            "longitude" => 95.7129
        ],
        [
            "name" => "Swedish",
            "lang" => "Svenska",
            "code" => "sw",
            "latitude" => 37.0902,
            "longitude" => 95.7129
        ],
        [
            "name" => "Tagalog",
            "lang" => "Tagalog",
            "code" => "ta",
            "latitude" => 37.0902,
            "longitude" => 95.7129
        ],
        [
            "name" => "Tamil",
            "lang" => "தமிழ்",
            "code" => "ta",
            "latitude" => 37.0902,
            "longitude" => 95.7129
        ],
        [
            "name" => "Telugu",
            "lang" => "తెలుగు",
            "code" => "te",
            "latitude" => 37.0902,
            "longitude" => 95.7129
        ],
        [
            "name" => "Thai",
            "lang" => "ไทย",
            "code" => "th",
            "latitude" => 37.0902,
            "longitude" => 95.7129
        ],
        [
            "name" => "Tigrinya",
            "lang" => "ትግርኛ",
            "code" => "ti",
            "latitude" => 37.0902,
            "longitude" => 95.7129
        ],
        [
            "name" => "Tongan",
            "lang" => "Lea Fakatonga",
            "code" => "to",
            "latitude" => 37.0902,
            "longitude" => 95.7129
        ],
        [
            "name" => "Tswana",
            "lang" => "Setswana",
            "code" => "ts",
            "latitude" => 37.0902,
            "longitude" => 95.7129
        ],
        [
            "name" => "Turkish",
            "lang" => "Türkçe",
            "code" => "tu",
            "latitude" => 37.0902,
            "longitude" => 95.7129
        ],
        [
            "name" => "Twi",
            "lang" => "Twi",
            "code" => "tw",
            "latitude" => 37.0902,
            "longitude" => 95.7129
        ],
        [
            "name" => "Urdu",
            "lang" => "اردو",
            "code" => "ur",
            "latitude" => 37.0902,
            "longitude" => 95.7129
        ],
        [
            "name" => "Xhosa",
            "lang" => "isiXhosa",
            "code" => "xh",
            "latitude" => 37.0902,
            "longitude" => 95.7129
        ],
        [
            "name" => "Zulu",
            "lang" => "IsiZulu",
            "code" => "zu",
            "latitude" => 37.0902,
            "longitude" => 95.7129
        ]
    ];

    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->languages as $index => $language) {
            $language['created_at'] = now();
            $language['updated_at'] = now();
            $result = DB::table('languages')->insert($language);

            if (!$result) {
                $this->command->info("Insert failed at record $index.");

                return;
            }
        }

        $this->command->info('Inserted ' . count($this->languages) . ' records.');
    }
}
