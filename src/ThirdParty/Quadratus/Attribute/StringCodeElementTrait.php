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
 * Code element trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeElementTrait {

    /**
     * Code element.
     *
     * @var string
     */
    private $codeElement;

    /**
     * Get the code element.
     *
     * @return string Returns the code element.
     */
    public function getCodeElement() {
        return $this->codeElement;
    }

    /**
     * Set the code element.
     *
     * @param string $codeElement The code element.
     */
    public function setCodeElement($codeElement) {
        $this->codeElement = $codeElement;
        return $this;
    }
}