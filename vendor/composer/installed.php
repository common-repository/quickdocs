<?php return array(
	'root'     => array(
		'pretty_version' => '1.0.0+no-version-set',
		'version'        => '1.0.0.0',
		'type'           => 'wordpress-plugin',
		'install_path'   => __DIR__ . '/../../',
		'aliases'        => array(),
		'reference'      => null,
		'name'           => 'wrd/quickdocs',
		'dev'            => true,
	),
	'versions' => array(
		'erusev/parsedown' => array(
			'pretty_version'  => '1.7.4',
			'version'         => '1.7.4.0',
			'type'            => 'library',
			'install_path'    => __DIR__ . '/../erusev/parsedown',
			'aliases'         => array(),
			'reference'       => 'cb17b6477dfff935958ba01325f2e8a2bfa6dab3',
			'dev_requirement' => false,
		),
		'wrd/quickdocs'    => array(
			'pretty_version'  => '1.0.0+no-version-set',
			'version'         => '1.0.0.0',
			'type'            => 'wordpress-plugin',
			'install_path'    => __DIR__ . '/../../',
			'aliases'         => array(),
			'reference'       => null,
			'dev_requirement' => false,
		),
	),
);
