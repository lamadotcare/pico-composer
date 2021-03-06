<?php
/**
 * Pico configuration
 *
 * This is the configuration file for {@link Pico}. It comes loaded with the
 * default values, which can be found in {@link Pico::getConfig()} (see
 * {@path "lib/Pico.php"}).
 *
 * To override any of the default settings below, copy this file to
 * {@path "config/config.php"}, uncomment the line, then make and
 * save your changes.
 *
 * @author  Gilbert Pellegrom
 * @link    http://picocms.org
 * @license http://opensource.org/licenses/MIT The MIT License
 * @version 1.0
 */

/*
 * BASIC
 */
$config['site_title'] = 'Lansing Area Mutual Aid';              // Site title
$config['base_url'] = 'https://lama.care';                    // Override base URL (e.g. http://example.com)
//$config['rewrite_url'] = true;               // A boolean indicating forced URL rewriting

/*
 * THEME
 */
$config['theme'] = 'Travelify';                // Set the theme (defaults to "default")
// $config['twig_config'] = array(              // Twig settings
//     'cache' => false,                        // To enable Twig caching change this to a path to a writable directory
//     'autoescape' => false,                   // Auto-escape Twig vars
//     'debug' => false                         // Enable Twig debug
// );

/*
 * CONTENT
 */
// $config['date_format'] = '%D %T';            // Set the PHP date format as described here: http://php.net/manual/en/function.strftime.php
$config['pages_order_by'] = 'date';         // Order pages by "alpha" or "date"
$config['pages_order'] = 'desc';              // Order pages "asc" or "desc"
$config['content_dir'] = 'content/';  // Content directory
// $config['content_ext'] = '.md';              // File extension of content files to serve

/*
 * TIMEZONE
 */
// $config['timezone'] = 'US/Eastern';                 // Timezone may be required by your php install

/*
 * PLUGINS
 */
// $config['DummyPlugin.enabled'] = false;      // Force DummyPlugin to be disabled

/*
 * CUSTOM
 */
$config['site_subtitle'] = 'Take care of your community so your community can take care of you.';
$config['site_copyright'] = 'Lansing Area Mutual Aid';
