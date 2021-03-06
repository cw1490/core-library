<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Model\Attribute;

/**
 * Float value trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Attribute
 */
trait FloatValueTrait {

    /**
     * Value.
     *
     * @var float
     */
    protected $value;

    /**
     * Get the value.
     *
     * @return float Returns the value.
     */
    public function getValue() {
        return $this->value;
    }

    /**
     * Set the value.
     *
     * @param float $value The value.
     */
    public function setValue($value) {
        $this->value = $value;
        return $this;
    }
}
