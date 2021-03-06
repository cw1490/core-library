<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Network\CURL\Configuration;

use WBW\Library\Core\Argument\ArgumentHelper;
use WBW\Library\Core\Argument\Exception\StringArgumentException;

/**
 * cURL configuration.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Network\CURL\Configuration
 */
class CurlConfiguration {

    /**
     * Allow encoding.
     *
     * @var bool
     */
    private $allowEncoding;

    /**
     * HTTP connect timeout.
     *
     * @var int
     */
    private $connectTimeout;

    /**
     * Debug.
     *
     * @var bool
     */
    private $debug;

    /**
     * Debug file.
     *
     * @var string
     */
    private $debugFile;

    /**
     * Headers.
     *
     * @var array
     */
    private $headers;

    /**
     * Host.
     *
     * @var string
     */
    private $host;

    /**
     * HTTP basic password.
     *
     * @var string
     */
    private $httpPassword;

    /**
     * HTTP basic username.
     *
     * @var string
     */
    private $httpUsername;

    /**
     * Proxy host.
     *
     * @var string
     */
    private $proxyHost;

    /**
     * Proxy password.
     *
     * @var string
     */
    private $proxyPassword;

    /**
     * Proxy port.
     *
     * @var int
     */
    private $proxyPort;

    /**
     * Proxy type.
     *
     * @var int
     */
    private $proxyType;

    /**
     * Proxy username.
     *
     * @var string
     */
    private $proxyUsername;

    /**
     * HTTP request timeout.
     *
     * @var int
     */
    private $requestTimeout;

    /**
     * SSL verification.
     *
     * @var bool
     */
    private $sslVerification;

    /**
     * User agent.
     *
     * @var string
     */
    private $userAgent;

    /**
     * Verbose.
     *
     * @var bool
     */
    private $verbose;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setAllowEncoding(false);
        $this->setConnectTimeout(0);
        $this->setDebug(false);
        $this->setDebugFile("php://output");
        $this->setHeaders([]);
        $this->setRequestTimeout(0);
        $this->setSslVerification(true);
        $this->setUserAgent("webeweb/curl-library");
        $this->setVerbose(false);
    }

    /**
     * Add an header.
     *
     * @param string $name The header name.
     * @param string $value The header value.
     * @return CurlConfiguration Returns this cURL configuration.
     * @throws StringArgumentException Throws a string argument exception if the argument is not a string.
     */
    public function addHeader($name, $value) {
        ArgumentHelper::isTypeOf($name, ArgumentHelper::ARGUMENT_STRING);
        $this->headers[$name] = $value;
        return $this;
    }

    /**
     * Clear the headers.
     *
     * @return CurlConfiguration Returns this cURL configuration.
     */
    public function clearHeaders() {
        return $this->setHeaders([]);
    }

    /**
     * Get the allow encoding.
     *
     * @return bool Returns the allow encoding.
     */
    public function getAllowEncoding() {
        return $this->allowEncoding;
    }

    /**
     * Get the connect timeout.
     *
     * @return int Returns the connect timeout.
     */
    public function getConnectTimeout() {
        return $this->connectTimeout;
    }

    /**
     * Ge the debug.
     *
     * @return bool Returns the debug.
     */
    public function getDebug() {
        return $this->debug;
    }

    /**
     * Get the debug file.
     *
     * @return string Returns the debug file.
     */
    public function getDebugFile() {
        return $this->debugFile;
    }

    /**
     * Get the headers.
     *
     * @return array Returns the headers.
     */
    public function getHeaders() {
        return $this->headers;
    }

    /**
     * Get the host.
     *
     * @return string Returns the host.
     */
    public function getHost() {
        return $this->host;
    }

    /**
     * Get the HTTP password.
     *
     * @return string Returns the HTTP password.
     */
    public function getHttpPassword() {
        return $this->httpPassword;
    }

    /**
     * Get the HTTP username.
     *
     * @return string Returns the HTTP username.
     */
    public function getHttpUsername() {
        return $this->httpUsername;
    }

    /**
     * Get the proxy host.
     *
     * @return string Returns the proxy host.
     */
    public function getProxyHost() {
        return $this->proxyHost;
    }

    /**
     * Get the proxy password.
     *
     * @return string Returns the proxy password.
     */
    public function getProxyPassword() {
        return $this->proxyPassword;
    }

    /**
     * Get the proxy port.
     *
     * @return int Returns the proxy port.
     */
    public function getProxyPort() {
        return $this->proxyPort;
    }

    /**
     * Get the proxy type.
     *
     * @return int Returns the proxy type.
     */
    public function getProxyType() {
        return $this->proxyType;
    }

    /**
     * Get the proxy username.
     *
     * @return string Returns the proxy username.
     */
    public function getProxyUsername() {
        return $this->proxyUsername;
    }

    /**
     * Get the request timeout.
     *
     * @return int Returns the request timeout.
     */
    public function getRequestTimeout() {
        return $this->requestTimeout;
    }

    /**
     * Get the SSL verification.
     *
     * @return bool Returns the SSL verification.
     */
    public function getSslVerification() {
        return $this->sslVerification;
    }

    /**
     * Get the user agent.
     *
     * @return string Returns the user agent.
     */
    public function getUserAgent() {
        return $this->userAgent;
    }

    /**
     * Get the verbose.
     *
     * @return bool Returns the verbose.
     */
    public function getVerbose() {
        return $this->verbose;
    }

    /**
     * Remove an header.
     *
     * @param string $name The header name.
     * @return void
     */
    public function removeHeader($name) {
        if (true === array_key_exists($name, $this->headers)) {
            unset($this->headers[$name]);
        }
    }

    /**
     * Set the allow encoding.
     *
     * @param bool $allowEncoding The allow encoding.
     * @return CurlConfiguration Returns this cURL configuration.
     */
    public function setAllowEncoding($allowEncoding) {
        $this->allowEncoding = $allowEncoding;
        return $this;
    }

    /**
     * Set the connect timeout.
     *
     * @param int $connectTimeout The connect timeout.
     * @return CurlConfiguration Returns this cURL configuration.
     */
    public function setConnectTimeout($connectTimeout) {
        $this->connectTimeout = $connectTimeout;
        return $this;
    }

    /**
     * Set the debug.
     *
     * @param bool $debug The debug.
     * @return CurlConfiguration Returns this cURL configuration.
     */
    public function setDebug($debug) {
        $this->debug = $debug;
        return $this;
    }

    /**
     * Set the debug file.
     *
     * @param string $debugFile The debug file.
     * @return CurlConfiguration Returns this cURL configuration.
     */
    public function setDebugFile($debugFile) {
        $this->debugFile = $debugFile;
        return $this;
    }

    /**
     * Set the headers.
     *
     * @param array $headers The headers
     * @return CurlConfiguration Returns this cURL configuration.
     */
    protected function setHeaders(array $headers) {
        $this->headers = $headers;
        return $this;
    }

    /**
     * Set the host.
     *
     * @param string $host The host.
     * @return CurlConfiguration Returns this cURL configuration.
     */
    public function setHost($host) {
        $this->host = preg_replace("/\/$/", "", trim($host));
        return $this;
    }

    /**
     * Set the HTTP basic password.
     *
     * @param string $httpPassword The HTTP basic password.
     * @return CurlConfiguration Returns this cURL configuration.
     */
    public function setHttpPassword($httpPassword) {
        $this->httpPassword = $httpPassword;
        return $this;
    }

    /**
     * Set the HTTP basic username.
     *
     * @param string $httpUsername The HTTP basic username.
     * @return CurlConfiguration Returns this cURL configuration.
     */
    public function setHttpUsername($httpUsername) {
        $this->httpUsername = $httpUsername;
        return $this;
    }

    /**
     * Set the proxy host.
     *
     * @param string $proxyHost The proxy host.
     * @return CurlConfiguration Returns this cURL configuration.
     */
    public function setProxyHost($proxyHost) {
        $this->proxyHost = $proxyHost;
        return $this;
    }

    /**
     * Set the proxy password.
     *
     * @param string $proxyPassword The proxy password.
     * @return CurlConfiguration Returns this cURL configuration.
     */
    public function setProxyPassword($proxyPassword) {
        $this->proxyPassword = $proxyPassword;
        return $this;
    }

    /**
     * Set the proxy port.
     *
     * @param int $proxyPort The proxy port.
     * @return CurlConfiguration Returns this cURL configuration.
     */
    public function setProxyPort($proxyPort) {
        $this->proxyPort = $proxyPort;
        return $this;
    }

    /**
     * Set the proxy type.
     *
     * @param int $proxyType The proxy type.
     * @return CurlConfiguration Returns this cURL configuration.
     */
    public function setProxyType($proxyType) {
        $this->proxyType = $proxyType;
        return $this;
    }

    /**
     * Set the proxy username.
     *
     * @param string $proxyUsername The proxy username.
     * @return CurlConfiguration Returns this cURL configuration.
     */
    public function setProxyUsername($proxyUsername) {
        $this->proxyUsername = $proxyUsername;
        return $this;
    }

    /**
     * Set the request timeout.
     *
     * @param int $requestTimeout The request timeout.
     * @return CurlConfiguration Returns this cURL configuration.
     */
    public function setRequestTimeout($requestTimeout) {
        $this->requestTimeout = $requestTimeout;
        return $this;
    }

    /**
     * Set the SSL verification.
     *
     * @param bool $sslVerification The SSL verification.
     * @return CurlConfiguration Returns this cURL configuration.
     */
    public function setSslVerification($sslVerification) {
        $this->sslVerification = $sslVerification;
        return $this;
    }

    /**
     * Set the user agent.
     *
     * @param string $userAgent The user agent.
     * @return CurlConfiguration Returns this cURL configuration.
     */
    public function setUserAgent($userAgent) {
        $this->userAgent = $userAgent;
        return $this;
    }

    /**
     * Set the verbose.
     *
     * @param bool $verbose The verbose.
     * @return CurlConfiguration Returns this cURL configuration.
     */
    public function setVerbose($verbose = false) {
        $this->verbose = $verbose;
        return $this;
    }
}
