<?php

namespace dareks84\yii2\aws\s3\interfaces\commands;

/**
 * Interface ExecutableCommand
 *
 * @package dareks84\yii2\aws\s3\interfaces\commands
 */
interface ExecutableCommand extends Command
{
    /**
     * @return mixed
     */
    public function execute();
}
