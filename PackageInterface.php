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
	 * @return mixed
	 */
	public function run(array $argv);

	/**
	 * @return mixed
	 */
	public function description();

	/**
	 * @return mixed
	 */
	public function process();
}