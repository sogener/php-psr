<?php

namespace Sogener\Psr;

use Psr\Log\AbstractLogger;
use Sogener\Core\Database;
use Sogener\Core\Dbconn;


class Three extends AbstractLogger
{
    public function log($level, $message, array $context = array())
    {
        $oDataBase = new Database(Dbconn::make());
        $oDataBase->setData($level, $message, $context);
    }

}