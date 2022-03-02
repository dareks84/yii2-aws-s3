<?php

namespace dareks84\yii2\aws\s3\interfaces;

use dareks84\yii2\aws\s3\interfaces\commands\Command;

/**
 * Interface CommandBuilder
 *
 * @package dareks84\yii2\aws\s3\interfaces
 */
interface CommandBuilder
{
    /**
     * @param string $commandClass
     *
     * @return \dareks84\yii2\aws\s3\interfaces\commands\Command
     */
    public function build(string $commandClass): Command;
}
