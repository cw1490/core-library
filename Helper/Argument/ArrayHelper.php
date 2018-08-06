<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Helper\Argument;

/**
 * Array helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Helper\Argument
 */
class ArrayHelper {

    /**
     * Get a value.
     *
     * @param array $array The array.
     * @param mixed $key The key.
     * @param mixed $default The default value.
     * @return mixed Returns the value in case of success, $default otherwise.
     */
    public static function get(array $array, $key, $default = null) {
        return true === array_key_exists($key, $array) ? $array[$key] : $default;
    }

    /**
     * Set a value.
     *
     * @param array $array The array.
     * @param string $key The key.
     * @param mixed $value The value.
     * @param array $tests The tests.
     */
    public static function set(array &$array, $key, $value, array $tests = []) {
        foreach ($tests as $current) {
            if ($current !== $value) {
                continue;
            }
            return;
        }
        $array[$key] = $value;
    }

}