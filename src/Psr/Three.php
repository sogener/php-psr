<?php

namespace Sogener\Phpdocker\Psr;

use Psr\Log\AbstractLogger;
use Sogener\Phpdocker\Core\Database;
use Sogener\Phpdocker\Core\Dbconn;

class Three extends AbstractLogger
{
    public function log($level, $message, array $context = array())
    {
        $oDataBase = new Database(Dbconn::make());
        $oDataBase->setData($level, $message, $context);
    }

}
