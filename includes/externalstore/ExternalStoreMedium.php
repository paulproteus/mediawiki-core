<?php
/**
 * External storage in some particular medium.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 * @ingroup ExternalStorage
 * @author Aaron Schulz
 */

/**
 * Accessable external objects in a particular storage medium
 *
 * @ingroup ExternalStorage
 * @since 1.21
 */
abstract class ExternalStoreMedium {
	/** @var Array */
	protected $params = array();

	/**
	 * @param $params array Options
	 */
	public function __construct( array $params = array() ) {
		$this->params = $params;
	}

	/**
	 * Fetch data from given external store URL
	 *
	 * @param $url string An external store URL
	 * @return string|bool The text stored or false on error
	 * @throws MWException
	 */
	public abstract function fetchFromURL( $url );

	/**
	 * Insert a data item into a given location
	 *
	 * @param $location string: the location name
	 * @param $data string: the data item
	 * @return string|bool The URL of the stored data item, or false on error
	 * @throws MWException
	 */
	public abstract function store( $location, $data );
}
