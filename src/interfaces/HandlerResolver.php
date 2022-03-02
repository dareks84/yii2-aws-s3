<?php

namespace dareks84\yii2\aws\s3\interfaces;

use dareks84\yii2\aws\s3\interfaces\commands\Command;
use dareks84\yii2\aws\s3\interfaces\handlers\Handler;

/**
 * Interface HandlerResolver
 *
 * @package dareks84\yii2\aws\s3\interfaces
 */
interface HandlerResolver
{
    /**
     * @param \dareks84\yii2\aws\s3\interfaces\commands\Command $command
     *
     * @return \dareks84\yii2\aws\s3\interfaces\handlers\Handler
     */
    public function resolve(Command $command): Handler;

    /**
     * @param string $commandClass
     * @param mixed  $handler
     */
    public function bindHandler(string $commandClass, $handler);
}
