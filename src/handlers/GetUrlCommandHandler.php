<?php

namespace dareks84\yii2\aws\s3\handlers;

use dareks84\yii2\aws\s3\base\handlers\Handler;
use dareks84\yii2\aws\s3\commands\GetUrlCommand;

/**
 * Class GetUrlCommandHandler
 *
 * @package dareks84\yii2\aws\s3\handlers
 */
final class GetUrlCommandHandler extends Handler
{
    /**
     * @param \dareks84\yii2\aws\s3\commands\GetUrlCommand $command
     *
     * @return string
     */
    public function handle(GetUrlCommand $command): string
    {
        return $this->s3Client->getObjectUrl($command->getBucket(), $command->getFilename());
    }
}
