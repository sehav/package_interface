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
	 * @return array
	 */
	public function description();

	/**
	 * @param array $params
	 * @return array
	 */
	public function process(array $params);
}