<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Attribute;

/**
 * Width trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntWidthTrait {

    /**
     * Width.
     *
     * @var int
     */
    private $width;

    /**
     * Get the width.
     *
     * @return int Returns the width.
     */
    public function getWidth() {
        return $this->width;
    }

    /**
     * Set the width.
     *
     * @param int $width The width.
     */
    public function setWidth($width) {
        $this->width = $width;
        return $this;
    }
}
