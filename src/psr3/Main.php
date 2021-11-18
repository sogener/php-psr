<?php

namespace src\psr3;

use Psr\Log\AbstractLogger;


class Main extends AbstractLogger
{
    private string $fileName = 'test1.txt';


    public function log($level, $message, array $context = array())
    {
        $context = implode(", ", $context);
        $result = sprintf("%s %s ", $level, $message);
        $result .= $context;

        file_put_contents($this->fileName, $result, FILE_APPEND);

    }

}