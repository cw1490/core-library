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
 * String last name trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Attribute
 */
trait StringLastNameTrait {

    /**
     * Last name.
     *
     * @var string
     */
    protected $lastName;

    /**
     * Get the last name.
     *
     * @return string Returns the last name.
     */
    public function getLastName() {
        return $this->lastName;
    }

    /**
     * Set the last name.
     *
     * @param string $lastName The last name.
     */
    public function setLastName($lastName) {
        $this->lastName = $lastName;
        return $this;
    }
}
