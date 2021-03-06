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

use InvalidArgumentException;

/**
 * Integer page trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Attribute
 */
trait IntegerPageTrait {

    /**
     * Page.
     *
     * @var int
     */
    protected $page;

    /**
     * Get the page.
     *
     * @return int Returns the page.
     */
    public function getPage() {
        return $this->page;
    }

    /**
     * Set the page.
     *
     * @param int $page The page.
     * @throws InvalidArgumentException Throws an invalid argument exception if the page is not between 1 and 65536.
     */
    public function setPage($page) {
        $this->page = $page;
        return $this;
    }
}
