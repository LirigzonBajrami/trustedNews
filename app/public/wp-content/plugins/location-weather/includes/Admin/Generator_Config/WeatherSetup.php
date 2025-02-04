<?php
/**
 * The weather setup configuration.
 *
 * @package Location_Weather
 */

if ( ! defined( 'ABSPATH' ) ) {
	die; } // Cannot access directly.

/**
 * Set a unique slug-like ID.
 */
$splw_opts_prefix = 'sp_location_weather_generator';

/**
 * Create metabox.
 */
SPLW::createMetabox(
	$splw_opts_prefix,
	array(
		'title'        => __( 'Location Weather Generation Options', 'location-weather' ),
		'post_type'    => 'location_weather',
		'show_restore' => true,
		'class'        => 'splw-shortcode-options',
	)
);

/**
 * Weather setting section.
 */
SPLW::createSection(
	$splw_opts_prefix,
	array(
		'title'  => __( 'Weather Settings', 'location-weather' ),
		'icon'   => '<span><svg height="14px" width="14px"  fill="#000000" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 52 52" enable-background="new 0 0 52 52" xml:space="preserve"><g><path d="M46.5,18.0599995c0.0999985-0.5100002,0.1500015-1.039999,0.1500015-1.5599995c0-4.4099998-3.5900002-8-8-8   C37.9500008,8.5,37.25,8.5900002,36.5800018,8.7799997C34.7700005,4.9899998,30.8899994,2.5,26.6499996,2.5   c-5.0599995,0-9.3199997,3.3499999-10.6000004,8.0699997C15.0600004,9.8800001,13.8800001,9.5,12.6499996,9.5   c-3.3099995,0-5.9999995,2.6899996-5.9999995,6c0,0.7199993,0.1300001,1.4200001,0.3800001,2.0799999   C4.1799998,18.0400009,2,20.5200005,2,23.5c0,3.3099995,2.6999998,6,6,6h4.9583998   c0.1851006-0.5034924,0.3908005-0.9996929,0.6342001-1.4799995l-2.3647995-3.3110008l5.2031994-5.2030926l3.3105011,2.3647003   c0.6190987-0.3134995,1.2582989-0.5790997,1.914999-0.7953987l0.6685009-4.0107002h7.3583984l0.6685009,4.0107002   c0.6567001,0.2162991,1.2959003,0.4818993,1.9144955,0.7953987l3.3110008-2.3647003l5.2032013,5.2030926l-2.3647995,3.3110008   c0.2434006,0.4803066,0.4487991,0.9763069,0.6338005,1.4799995H44c3.3100014,0,6-2.6900005,6-6   C50,21.1399994,48.5999985,19.0300007,46.5,18.0599995z"></path><path d="M36.0455971,27.8969078l2.1225014-2.9715004l-2.8070984-2.8071003l-2.9715042,2.1225014   c-1.1490955-0.7322998-2.4287968-1.274601-3.8008957-1.5785999l-0.5997009-3.5976009h-3.9696999l-0.599699,3.5976009   c-1.3719997,0.3039989-2.6518002,0.8463001-3.8008995,1.5785999l-2.9715004-2.1225014l-2.8071003,2.8071003l2.1224995,2.9715004   c-0.7322998,1.1490917-1.2746,2.4288006-1.5784998,3.8008995l-3.5976,0.5996017v3.969799l3.5976,0.5997009   c0.3038998,1.3720894,0.8462,2.6517982,1.5784998,3.8008995l-2.1224995,2.9715004l2.8071003,2.8070984l2.9715004-2.1225014   c1.1490993,0.7322998,2.4288998,1.2745018,3.8008995,1.5786018L24.0191994,49.5h3.9696999l0.5997009-3.5974922   c1.3720989-0.3041,2.6518002-0.846302,3.8008957-1.5786018l2.9715042,2.1225014l2.8070984-2.8070984l-2.1225014-2.9715004   c0.7322998-1.1491013,1.274601-2.4288101,1.5784988-3.8008995l3.5976028-0.5997009v-3.969799l-3.5976028-0.5996017   C37.3201981,30.3257084,36.7778969,29.0459995,36.0455971,27.8969078z M26.0041008,40.2283058   c-3.2839012,0-5.9460011-2.6620979-5.9460011-5.9459991c0-3.2837982,2.6620998-5.9458981,5.9460011-5.9458981   c3.2838001,0,5.9459,2.6620998,5.9459,5.9458981C31.9500008,37.5662079,29.2879009,40.2283058,26.0041008,40.2283058z"></path></g></svg></span>',
		'class'  => 'splw-weather-settings-meta-box',
		'fields' => array(
			array(
				'id'      => 'get-weather-by',
				'class'   => 'splw_get_weather_by splw-first-fields',
				'type'    => 'button_set',
				'title'   => __( 'Display Weather For Location', 'location-weather' ),
				'desc'    => __( 'To unlock the City ID, ZIP, and Coordinates, <a href="https://shapedplugin.com/plugin/location-weather-pro/?ref=1" target="_blank"><b>Upgrade To Pro!</b></a>', 'location-weather' ),
				'options' => array(
					'city_name' => __( 'City', 'location-weather' ),
					'city_id'   => __( 'City ID', 'location-weather' ),
					'zip'       => __( 'ZIP', 'location-weather' ),
					'latlong'   => __( 'Coordinates', 'location-weather' ),
				),
				'default' => 'city_name',
			),
			array(
				'id'          => 'lw-city-name',
				'type'        => 'text',
				'class'       => 'splw-text-fields',
				'title'       => __( 'City Name', 'location-weather' ),
				'placeholder' => __( 'London, GB', 'location-weather' ),
				'desc'        => __( 'Write your city name.', 'location-weather' ),
				'dependency'  => array( 'get-weather-by', '==', 'city_name' ),
			),
			array(
				'id'         => 'lw-visitors-location',
				'type'       => 'switcher',
				'class'      => 'splw_show_hide auto-location',
				'title'      => __( 'Detect Visitors Location (Auto)', 'location-weather' ),
				'text_on'    => __( 'Enabled', 'location-weather' ),
				'text_off'   => __( 'Disabled', 'location-weather' ),
				'text_width' => 99,
				'default'    => false,
			),
			array(
				'id'    => 'lw-custom-name',
				'type'  => 'text',
				'title' => __( 'Override Location Name', 'location-weather' ),
				'desc'  => __( 'Override location name.', 'location-weather' ),
			),
			array(
				'id'      => 'lw-units',
				'class'   => 'splw_custom_button_fields',
				'type'    => 'button_set',
				'title'   => __( 'Temperature Unit', 'location-weather' ),
				'options' => array(
					'metric'   => __( '°C ', 'location-weather' ),
					'imperial' => __( '°F ', 'location-weather' ),
					'auto'     => __( 'Auto', 'location-weather' ),
				),
				'default' => 'metric',
			),
			array(
				'id'      => 'lw-pressure-unit',
				'class'   => 'splw_pressure_unit',
				'type'    => 'select',
				'title'   => __( 'Pressure Unit ', 'location-weather' ),
				'options' => array(
					'mb' => __( 'Millibars (mb)', 'location-weather' ),
					'1'  => __( 'kilopascal (kPa) (Pro)', 'location-weather' ),
					'2'  => __( 'Inches of Mercury (inHg) (Pro)', 'location-weather' ),
					'3'  => __( 'Pounds per Square Inch (psi) (Pro)', 'location-weather' ),
					'4'  => __( 'Millimeters of Mercury (mmHg / Torr) (Pro)', 'location-weather' ),
					'5'  => __( 'Kilogram per Square centimeter (kg/cm²) (Pro)', 'location-weather' ),

				),
				'default' => 'mb',
			),
			array(
				'id'      => 'lw-wind-speed-unit',
				'class'   => 'splw_wind_speed_unit',
				'type'    => 'select',
				'title'   => __( ' Wind Speed Unit ', 'location-weather' ),
				'options' => array(
					'mph' => __( 'Miles per hour (mph)', 'location-weather' ),
					'kmh' => __( 'Kilometer per hour (km/h)', 'location-weather' ),
					'3'   => __( 'Meter per second (m/s) (Pro)', 'location-weather' ),
					'4'   => __( 'Knot (kn) (Pro)', 'location-weather' ),

				),
				'default' => 'mph',
			),
			array(
				'id'      => 'lw-language',
				'type'    => 'select',
				'title'   => __( 'Language', 'location-weather' ),
				'options' => array(
					'en'    => __( 'English', 'location-weather' ),
					'af'    => __( 'Afrikaans', 'location-weather' ),
					'sq'    => __( 'Albanian', 'location-weather' ), // al for Albanian.
					'ar'    => __( 'Arabic', 'location-weather' ),
					'az'    => __( 'Azerbaijani', 'location-weather' ),
					'bg'    => __( 'Bulgarian', 'location-weather' ),
					'ca'    => __( 'Catalan', 'location-weather' ),
					'cz'    => __( 'Czech', 'location-weather' ),
					'da'    => __( 'Danish', 'location-weather' ),
					'de'    => __( 'German', 'location-weather' ),
					'el'    => __( 'Greek', 'location-weather' ),
					'eu'    => __( 'Basque', 'location-weather' ),
					'fa'    => __( 'Persian (Farsi)', 'location-weather' ),
					'fi'    => __( 'Finnish', 'location-weather' ),
					'fr'    => __( 'French', 'location-weather' ),
					'gl'    => __( 'Galician', 'location-weather' ),
					'he'    => __( 'Hebrew', 'location-weather' ),
					'hi'    => __( 'Hindi', 'location-weather' ),
					'hr'    => __( 'Croatian', 'location-weather' ),
					'hu'    => __( 'Hungarian', 'location-weather' ),
					'id'    => __( 'Indonesian', 'location-weather' ),
					'it'    => __( 'Italian', 'location-weather' ),
					'ja'    => __( 'Japanese', 'location-weather' ),
					'kr'    => __( 'Korean', 'location-weather' ),
					'la'    => __( 'Latvian', 'location-weather' ),
					'lt'    => __( 'Lithuanian', 'location-weather' ),
					'mk'    => __( 'Macedonian', 'location-weather' ),
					'no'    => __( 'Norwegian', 'location-weather' ),
					'nl'    => __( 'Dutch', 'location-weather' ),
					'pl'    => __( 'Polish', 'location-weather' ),
					'pt'    => __( 'Portuguese', 'location-weather' ),
					'pt_br' => __( 'Português Brasil', 'location-weather' ),
					'ro'    => __( 'Romanian', 'location-weather' ),
					'ru'    => __( 'Russian', 'location-weather' ),
					'sv'    => __( 'Swedish', 'location-weather' ), // sv, se for Swedish.
					'sk'    => __( 'Slovak', 'location-weather' ),
					'sl'    => __( 'Slovenian', 'location-weather' ),
					'es'    => __( 'Spanish', 'location-weather' ), // sp, es for spanish lang.
					'sr'    => __( 'Serbian', 'location-weather' ),
					'th'    => __( 'Thai', 'location-weather' ),
					'tr'    => __( 'Turkish', 'location-weather' ),
					'uk'    => __( 'Ukrainian', 'location-weather' ), // ua, uk for Ukrainian lang.
					'vi'    => __( 'Vietnamese', 'location-weather' ),
					'zh_cn' => __( 'Chinese Simplified', 'location-weather' ),
					'zh_tw' => __( 'Chinese Traditional', 'location-weather' ),
					'zu'    => __( 'Zulu', 'location-weather' ),

				),
				'default' => 'en',
			),

			// Samples.
		),
	)
);
