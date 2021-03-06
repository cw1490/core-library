<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Database\Connector;

use InvalidArgumentException;
use PDO;
use WBW\Library\Core\Security\Authenticator;

/**
 * Microsoft Access database connector.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Database\Connector
 */
class MicrosoftAccessDatabaseConnector extends AbstractDatabaseConnector {

    /**
     * Microsoft Access DSN.
     *
     * @var string
     */
    const DEFAULT_DSN = "odbc:DRIVER={Microsoft Access Driver (*.mdb)}; DBQ=%DBQ%; UID=%UID%; PWD=%PWD%";

    /**
     * Constructor.
     *
     * @param Authenticator $authenticator The authenticator.
     * @param string $database The database.
     */
    public function __construct(Authenticator $authenticator, $database) {
        parent::__construct($authenticator);

        $this->setDatabase($database);
    }

    /**
     * {@inheritdoc}
     */
    protected function connect() {

        if (false === file_exists($this->getDatabase())) {
            throw new InvalidArgumentException(sprintf('The database "%s" was not found', $this->getDatabase()));
        }

        $searches = ["%DBQ%", "%UID%", "%PWD%"];
        $replaces = [$this->getDatabase(), $this->getAuthenticator()->getPasswordAuthentication()->getUsername(), $this->getAuthenticator()->getPasswordAuthentication()->getPassword()];

        $dsn = str_replace($searches, $replaces, self::DEFAULT_DSN);

        return new PDO($dsn);
    }
}
