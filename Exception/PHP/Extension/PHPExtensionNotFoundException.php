<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Exception\PHP\Extension;

use Exception;
use WBW\Library\Core\Exception\AbstractWBWException;

/**
 * PHP extension not found exception.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Exception\PHP\Extension
 * @final
 */
final class PHPExtensionNotFoundException extends AbstractWBWException {

	/**
	 * Constructor.
	 *
	 * @param string $extension The extension.
	 * @param Exception $previous The previous exception.
	 */
	public function __construct($extension, Exception $previous = null) {
		parent::__construct("The PHP extension \"" . $extension . "\" is not found", $previous);
	}

}
