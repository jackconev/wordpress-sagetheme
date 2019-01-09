<?php

/**
 * @return mixed
 */
function icl_get_languages_names() {
	static $__icl_lang_names_cached = null;

	if ( $__icl_lang_names_cached === null ) {
		$serialized_languages = file_get_contents(WPML_PLUGIN_PATH . '/res/languages.json');
		$__icl_lang_names = json_decode($serialized_languages, true);

		$__icl_lang_names_cached = $__icl_lang_names;
	}
	
	return $__icl_lang_names_cached;
	
}


/**
 * @return array
 */
function icl_get_languages_codes() {
	static $result = null;

	if ( $result === null ) {
		$result = array(
			'Abkhazian'             => 'ab',
			'Afar'                  => 'aa',
			'Afrikaans'             => 'af',
			'Akan'                  => 'ak',
			'Albanian'              => 'sq',
			'Amharic'               => 'am',
			'Arabic'                => 'ar',
			'Armenian'              => 'hy',
			'Assamese'              => 'as',
			'Avar'                  => 'av',
			'Avestan'               => 'ae',
			'Aymara'                => 'ay',
			'Azerbaijani'           => 'az',
			'Bambara'               => 'bm',
			'Bashkir'               => 'ba',
			'Basque'                => 'eu',
			'Belarusian'            => 'be',
			'Bengali'               => 'bn',
			'Bhutani'               => 'dz',
			'Bihari'                => 'bh',
			'Bislama'               => 'bi',
			'Bosnian'               => 'bs',
			'Breton'                => 'br',
			'Bulgarian'             => 'bg',
			'Burmese'               => 'my',
			'Cambodian'             => 'km',
			'Catalan'               => 'ca',
			'Chamorro'              => 'ch',
			'Chechen'               => 'ce',
			'Chichewa'              => 'ny',
			'Chinese (Simplified)'  => 'zh-hans',
			'Chinese (Traditional)' => 'zh-hant',
			'Chuvash'               => 'cv',
			'Cornish'               => 'kw',
			'Corsican'              => 'co',
			'Cree'                  => 'cr',
			'Croatian'              => 'hr',
			'Czech'                 => 'cs',
			'Danish'                => 'da',
			'English'               => 'en',
			'Esperanto'             => 'eo',
			'Estonian'              => 'et',
			'Ewe'                   => 'ee',
			'Faeroese'              => 'fo',
			'Fiji'                  => 'fj',
			'Finnish'               => 'fi',
			'French'                => 'fr',
			'Frisian'               => 'fy',
			'Fulah'                 => 'ff',
			'Galician'              => 'gl',
			'Georgian'              => 'ka',
			'German'                => 'de',
			'Greek'                 => 'el',
			'Greenlandic'           => 'kl',
			'Guarani'               => 'gn',
			'Gujarati'              => 'gu',
			'Hausa'                 => 'ha',
			'Hebrew'                => 'he',
			'Herero'                => 'hz',
			'Hindi'                 => 'hi',
			'Hiri Motu'             => 'ho',
			'Hungarian'             => 'hu',
			'Icelandic'             => 'is',
			'Igbo'                  => 'ig',
			'Indonesian'            => 'id',
			'Interlingua'           => 'ia',
			'Interlingue'           => 'ie',
			'Inuktitut'             => 'iu',
			'Inupiak'               => 'ik',
			'Irish'                 => 'ga',
			'Italian'               => 'it',
			'Japanese'              => 'ja',
			'Javanese'              => 'jv',
			'Kannada'               => 'kn',
			'Kanuri'                => 'kr',
			'Kashmiri'              => 'ks',
			'Kazakh'                => 'kk',
			'Kikuyu'                => 'ki',
			'Kinyarwanda'           => 'rw',
			'Kirghiz'               => 'ky',
			'Kirundi'               => 'rn',
			'Komi'                  => 'kv',
			'Kongo'                 => 'kg',
			'Korean'                => 'ko',
			'Kurdish'               => 'ku',
			'Kwanyama'              => 'kj',
			'Laothian'              => 'lo',
			'Latin'                 => 'la',
			'Latvian'               => 'lv',
			'Lingala'               => 'ln',
			'Lithuanian'            => 'lt',
			'Luganda'               => 'lg',
			'Luxembourgish'         => 'lb',
			'Macedonian'            => 'mk',
			'Malagasy'              => 'mg',
			'Malay'                 => 'ms',
			'Malayalam'             => 'ml',
			'Maldivian'             => 'dv',
			'Maltese'               => 'mt',
			'Manx'                  => 'gv',
			'Maori'                 => 'mi',
			'Marathi'               => 'mr',
			'Marshallese'           => 'mh',
			'Moldavian'             => 'mo',
			'Mongolian'             => 'mn',
			'Nauru'                 => 'na',
			'Navajo'                => 'nv',
			'Ndonga'                => 'ng',
			'Nepali'                => 'ne',
			'North Ndebele'         => 'nd',
			'Northern Sami'         => 'se',
			'Dutch'                 => 'nl',
			'Norwegian Bokmål'      => 'no',
			'Norwegian Nynorsk'     => 'nn',
			'Occitan'               => 'oc',
			'Old Slavonic'          => 'cu',
			'Oriya'                 => 'or',
			'Oromo'                 => 'om',
			'Ossetian'              => 'os',
			'Pali'                  => 'pi',
			'Pashto'                => 'ps',
			'Persian'               => 'fa',
			'Polish'                => 'pl',
			'Portuguese, Brazil'    => 'pt-br',
			'Portuguese, Portugal'  => 'pt-pt',
			'Punjabi'               => 'pa',
			'Quechua'               => 'qu',
			'Rhaeto-Romance'        => 'rm',
			'Romanian'              => 'ro',
			'Russian'               => 'ru',
			'Samoan'                => 'sm',
			'Sango'                 => 'sg',
			'Sanskrit'              => 'sa',
			'Sardinian'             => 'sc',
			'Scots Gaelic'          => 'gd',
			'Serbian'               => 'sr',
			'Serbo-Croatian'        => 'sh',
			'Sesotho'               => 'st',
			'Setswana'              => 'tn',
			'Shona'                 => 'sn',
			'Sindhi'                => 'sd',
			'Singhalese'            => 'si',
			'Siswati'               => 'ss',
			'Slavic'                => 'sla',
			'Slovak'                => 'sk',
			'Slovenian'             => 'sl',
			'Somali'                => 'so',
			'South Ndebele'         => 'nr',
			'Spanish'               => 'es',
			'Sudanese'              => 'su',
			'Swahili'               => 'sw',
			'Swedish'               => 'sv',
			'Tagalog'               => 'tl',
			'Tahitian'              => 'ty',
			'Tajik'                 => 'tg',
			'Tamil'                 => 'ta',
			'Tatar'                 => 'tt',
			'Telugu'                => 'te',
			'Thai'                  => 'th',
			'Tibetan'               => 'bo',
			'Tigrinya'              => 'ti',
			'Tonga'                 => 'to',
			'Tsonga'                => 'ts',
			'Turkish'               => 'tr',
			'Turkmen'               => 'tk',
			'Twi'                   => 'tw',
			'Uighur'                => 'ug',
			'Ukrainian'             => 'uk',
			'Urdu'                  => 'ur',
			'Uzbek'                 => 'uz',
			'Venda'                 => 've',
			'Vietnamese'            => 'vi',
			'Welsh'                 => 'cy',
			'Wolof'                 => 'wo',
			'Xhosa'                 => 'xh',
			'Yiddish'               => 'yi',
			'Yoruba'                => 'yo',
			'Zhuang'                => 'za',
			'Zulu'                  => 'zu',
		);
	}

	return $result;
}

/**
 * @return array
 */
function icl_get_languages_locales() {
	static $result = null;

	if ( ! $result ) {
		$result = array(
			'af'      => 'af_ZA',
			'ar'      => 'ar',
			'be'      => 'be_BY',
			'bg'      => 'bg_BG',
			'bn'      => 'bn_BD',
			'bs'      => 'bs_BA',
			'ca'      => 'ca',
			'cs'      => 'cs_CZ',
			'cy'      => 'cy_GB',
			'da'      => 'da_DK',
			'de'      => 'de_DE',
			'el'      => 'el',
			'en'      => 'en_US',
			'eo'      => 'eo_UY',
			'es'      => 'es_ES',
			'et'      => 'et',
			'eu'      => 'eu_ES',
			'fa'      => 'fa_IR',
			'fi'      => 'fi',
			'fo'      => 'fo_FO',
			'fr'      => 'fr_FR',
			'ga'      => 'ga_IE',
			'gl'      => 'gl_ES',
			'he'      => 'he_IL',
			'hi'      => 'hi_IN',
			'hr'      => 'hr',
			'hu'      => 'hu_HU',
			'hy'      => 'hy_AM',
			'id'      => 'id_ID',
			'is'      => 'is_IS',
			'it'      => 'it_IT',
			'ja'      => 'ja',
			'ka'      => 'ge_GE',
			'km'      => 'km_KH',
			'ko'      => 'ko_KR',
			'ku'      => 'ku',
			'lt'      => 'lt_LT',
			'lv'      => 'lv_LV',
			'mg'      => 'mg_MG',
			'mk'      => 'mk_MK',
			'mn'      => 'mn_MN',
			'ms'      => 'ms_MY',
			'mt'      => 'mt_MT',
			'nb'      => 'nb_NO',
			'ne'      => 'ne',
			'no'      => 'nb_NO',
			'nn'      => 'nn_NO',
			'ni'      => 'ni_ID',
			'nl'      => 'nl_NL',
			'pl'      => 'pl_PL',
			'pt-br'   => 'pt_BR',
			'pt-pt'   => 'pt_PT',
			'qu'      => 'quz_PE',
			'ro'      => 'ro_RO',
			'ru'      => 'ru_RU',
			'si'      => 'si_LK',
			'sk'      => 'sk_SK',
			'sl'      => 'sl_SI',
			'so'      => 'so_SO',
			'sq'      => 'sq_AL',
			'sr'      => 'sr_RS',
			'su'      => 'su_ID',
			'sv'      => 'sv_SE',
			'ta'      => 'ta_IN',
			'tg'      => 'tg_TJ',
			'th'      => 'th',
			'tr'      => 'tr_TR',
			'ug'      => 'ug_CN',
			'uk'      => 'uk',
			'ur'      => 'uz_UZ',
			'uz'      => 'uz_UZ',
			'vi'      => 'vi_VN',
			'zh-hans' => 'zh_CN',
			'zh-hant' => 'zh_TW',
		);
	}

	return $result;
}
