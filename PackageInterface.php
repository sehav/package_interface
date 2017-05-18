<?php

namespace sehav\package_interface;

/**
 * Created by PhpStorm.
 * User: Sehav
 * Date: 18.05.2017
 * Time: 11:29
 */
interface PackageInterface
{
	/**
	 * @param array $argv
	 * @return string
	 */
	static public function run(array $argv);

	/**
	 * @return string
	 */
	static public function description();

	/**
	 * @return string
	 */
	static public function process();
}