<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Exception\IO;

use Exception;
use WBW\Library\Core\Exception\AbstractCoreException;

/**
 * File not found exception.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Exception\IO
 * @final
 */
final class FileNotFoundException extends AbstractCoreException {

    /**
     * Constructor.
     *
     * @param string $filename The filename.
     * @param Exception $previous The previous exception.
     */
    public function __construct($filename, Exception $previous = null) {
        parent::__construct(sprintf("The file \"%s\" is not found", $filename), $previous);
    }

}
