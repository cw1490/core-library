<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Network\FTP\Client;

use WBW\Library\Core\Network\FTP\Exception\FtpException;
use WBW\Library\Core\Security\Authenticator;

/**
 * FTPs client.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Network\FTP\Client
 */
class FtpsClient extends FtpClient {

    /**
     * Constructor.
     *
     * @param Authenticator $authenticator The authenticator.
     */
    public function __construct(Authenticator $authenticator) {
        parent::__construct($authenticator);

        $this->getAuthenticator()->setScheme("ftps");
        if (null === $this->getAuthenticator()->getPort()) {
            $this->getAuthenticator()->setPort(990);
        }
    }

    /**
     * Connect.
     *
     * @param int $timeout The timeout.
     * @return FtpsClient Returns this FTPs client.
     * @throws FtpException Throws a FTP exception if an error occurs.
     */
    public function connect($timeout = 90) {

        $host = $this->getAuthenticator()->getHostname();
        $port = $this->getAuthenticator()->getPort();

        $this->setConnection(@ftp_ssl_connect($host, $port, $timeout));
        if (false === $this->getConnection()) {
            throw $this->newFtpException("ftp_ssl_connect failed: [${host}, ${port}, {$timeout}]");
        }

        return $this;
    }
}
