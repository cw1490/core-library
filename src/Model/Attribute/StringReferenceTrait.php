<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Model\Attribute;

/**
 * String reference trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Attribute
 */
trait StringReferenceTrait {

    /**
     * Reference.
     *
     * @var string
     */
    protected $reference;

    /**
     * Get the reference.
     *
     * @return string Returns the reference.
     */
    public function getReference() {
        return $this->reference;
    }

    /**
     * Set the reference.
     *
     * @param string $reference The reference.
     */
    public function setReference($reference) {
        $this->reference = $reference;
        return $this;
    }
}
