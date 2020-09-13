<?php

/**
 * Plugin administration pages are defined here.
 *
 * @package     block_weather
 * @category    admin
 * @copyright   2020 A K M Safat Shahin <safatshahin@gmail.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($ADMIN->fulltree) {
    $none = get_string('noweatherapi', 'block_weather');
    $openWeather = get_string('openweather', 'block_weather');
    $weatherDropdown = array($none, $openWeather);

    $name = 'block_weather/selectedweatherapi';
    $title = get_string('selectedweatherapi', 'block_weather');
    $description = get_string('selectedweatherapi_desc', 'block_weather');
    $setting = new admin_setting_configselect($name, $title, '', 0, $weatherDropdown);
    $settings->add($setting);

    $settings->add(new admin_setting_heading('openweather', get_string('openweather', 'block_weather'),
        format_text(get_string('openweather_description', 'block_weather'), FORMAT_MARKDOWN)));

    $name = 'block_weather/openweatherapikey';
    $title = get_string('openweatherapikey', 'block_weather');
    $description = get_string('openweatherapikey_desc', 'block_weather');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $settings->add($setting);
}
