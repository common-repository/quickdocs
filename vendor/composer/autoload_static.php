<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit857deffe23e6fa483e43b276d90fd92e {

	public static $prefixesPsr0 = array(
		'P' =>
		array(
			'Parsedown' =>
			array(
				0 => __DIR__ . '/..' . '/erusev/parsedown',
			),
		),
	);

	public static $classMap = array(
		'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
	);

	public static function getInitializer( ClassLoader $loader ) {
		return \Closure::bind(
			function () use ( $loader ) {
				$loader->prefixesPsr0 = ComposerStaticInit857deffe23e6fa483e43b276d90fd92e::$prefixesPsr0;
				$loader->classMap     = ComposerStaticInit857deffe23e6fa483e43b276d90fd92e::$classMap;

			},
			null,
			ClassLoader::class
		);
	}
}
