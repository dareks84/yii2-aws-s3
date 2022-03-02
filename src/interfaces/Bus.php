<?php

namespace dareks84\yii2\aws\s3\interfaces;

use dareks84\yii2\aws\s3\interfaces\commands\Command;

/**
 * Interface Bus
 *
 * @package dareks84\yii2\aws\s3\interfaces
 */
interface Bus
{
    /**
     * @param \dareks84\yii2\aws\s3\interfaces\commands\Command $command
     *
     * @return mixed
     */
    public function execute(Command $command);
}
