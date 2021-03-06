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

use DateTime;

/**
 * Date/time created at trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Attribute
 */
trait DateTimeCreatedAtTrait {

    /**
     * Created at.
     *
     * @var DateTime
     */
    protected $createdAt;

    /**
     * Get the created at.
     *
     * @return DateTime Returns the created at.
     */
    public function getCreatedAt() {
        return $this->createdAt;
    }

    /**
     * Set the created at.
     *
     * @param DateTime|null $createdAt The created at.
     */
    public function setCreatedAt(DateTime $createdAt = null) {
        $this->createdAt = $createdAt;
        return $this;
    }
}
