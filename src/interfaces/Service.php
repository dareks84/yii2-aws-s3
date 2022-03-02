<?php

namespace dareks84\yii2\aws\s3\interfaces;

use dareks84\yii2\aws\s3\interfaces\commands\Command;

/**
 * Interface Service
 *
 * @package dareks84\yii2\aws\s3\interfaces
 */
interface Service
{
    /**
     * @param \dareks84\yii2\aws\s3\interfaces\commands\Command $command
     *
     * @return mixed
     */
    public function execute(Command $command);

    /**
     * @param string $commandClass
     *
     * @return \dareks84\yii2\aws\s3\interfaces\commands\Command
     */
    public function create(string $commandClass): Command;
}
