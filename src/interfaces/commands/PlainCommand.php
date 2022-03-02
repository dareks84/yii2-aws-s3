<?php

namespace dareks84\yii2\aws\s3\interfaces\commands;

/**
 * Interface PlainCommand
 *
 * @package dareks84\yii2\aws\s3\interfaces\commands
 */
interface PlainCommand extends Command
{
    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return array
     */
    public function toArgs(): array;
}
