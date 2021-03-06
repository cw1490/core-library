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
 * String hash "SHA256" trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Attribute
 */
trait StringHashSha256Trait {

    /**
     * Hash "SHA256".
     *
     * @var string
     */
    protected $hashSha256;

    /**
     * Get the hash "SHA256".
     *
     * @return string Returns the hash "SHA256".
     */
    public function getHashSha256() {
        return $this->hashSha256;
    }

    /**
     * Set the hash "SHA256".
     *
     * @param string $hashSha256 The hash "SHA256".
     */
    public function setHashSha256($hashSha256) {
        $this->hashSha256 = $hashSha256;
        return $this;
    }
}
