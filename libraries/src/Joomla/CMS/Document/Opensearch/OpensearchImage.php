<?php
/**
 * Joomla! Content Management System
 *
 * @copyright  Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Joomla\CMS\Document\Opensearch;

defined('JPATH_PLATFORM') or die;

/**
 * OpensearchImage is an internal class that stores Images for the Opensearch Description
 *
 * @since  11.1
 */
class OpensearchImage
{
	/**
	 * The images MIME type
	 *
	 * required
	 *
	 * @var    string
	 * @since  11.1
	 */
	public $type = '';

	/**
	 * URL of the image or the image as base64 encoded value
	 *
	 * required
	 *
	 * @var    string
	 * @since  11.1
	 */
	public $data = '';

	/**
	 * The image's width
	 *
	 * required
	 *
	 * @var    string
	 * @since  11.1
	 */
	public $width;

	/**
	 * The image's height
	 *
	 * required
	 *
	 * @var    string
	 * @since  11.1
	 */
	public $height;
}