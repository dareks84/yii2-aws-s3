<?php

namespace dareks84\yii2\aws\s3\base\commands;

use dareks84\yii2\aws\s3\interfaces\Bus;
use dareks84\yii2\aws\s3\interfaces\commands\ExecutableCommand as ExecutableCommandInterface;

/**
 * Class ExecutableCommand
 *
 * @package dareks84\yii2\aws\s3\base\commands
 */
abstract class ExecutableCommand implements ExecutableCommandInterface
{
    /** @var \dareks84\yii2\aws\s3\interfaces\Bus */
    private $bus;

    /**
     * ExecutableCommand constructor.
     *
     * @param \dareks84\yii2\aws\s3\interfaces\Bus $bus
     */
    public function __construct(Bus $bus)
    {
        $this->bus = $bus;
    }

    /**
     * @return mixed
     */
    public function execute()
    {
        return $this->bus->execute($this);
    }
}
