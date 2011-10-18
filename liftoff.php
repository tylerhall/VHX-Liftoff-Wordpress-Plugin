<?PHP
/*
Plugin Name: VirtualHostX Lift Off
Plugin URI: https://github.com/tylerhall/VHX-Liftoff-Wordpress-Plugin
Description: Modifies WordPress to work with <a href="http://clickontyler.com/virtualhostx/liftoff/">VirtualHostX Liftoff</a>.
Author: Tyler Hall
Version: 1.0
Author URI: http://clickontyler.com/
*/

	if(!class_exists('VHXLiftOff'))
	{
		class VHXLiftOff
		{
			protected static $instance;

			public function __construct()
			{
				if(isset($_COOKIE['VHXOriginalHost']))
				{
					add_filter('option_home', array(&$this, 'filterDomain'), 20);
					add_filter('option_siteurl', array(&$this, 'filterDomain'), 20);
					add_filter('theme_root_uri', array(&$this, 'filterDomain'), 20);
				}
			}

			public function filterDomain($url)
			{
				$parts = parse_url($url);
				$user_pass = $port = $query = $fragment = null;

				if($parts['user'])
				{
					$user_pass = $parts['user'];
					if($parts['pass'])
						$user_pass .= ':' . $parts['pass'];

					$user_pass .= '@';
				}

				if($parts['port'])
					$port = ':' . $parts['port'];

				if($parts['query'])
					$query = '?' . $parts['query'];

				if($parts['fragment'])
					$query = '#' . $parts['fragment'];

				return sprintf('%s://%s%s%s%s%s%s', $parts['scheme'], $user_pass, $_COOKIE['VHXOriginalHost'], $port, $parts['path'], $query, $fragment);
			}
		}
	}
	
	if(class_exists('VHXLiftOff'))
	{	
		$vhxliftoff = new VHXLiftOff();
	}
