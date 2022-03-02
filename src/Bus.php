<?php

namespace dareks84\yii2\aws\s3;

use dareks84\yii2\aws\s3\interfaces;

/**
 * Class Bus
 *
 * @package dareks84\yii2\aws\s3
 */
class Bus implements interfaces\Bus
{
    /** @var interfaces\HandlerResolver */
    protected $resolver;

    /**
     * Bus constructor.
     *
     * @param \dareks84\yii2\aws\s3\interfaces\HandlerResolver $inflector
     */
    public function __construct(interfaces\HandlerResolver $inflector)
    {
        $this->resolver = $inflector;
    }

    /**
     * @param \dareks84\yii2\aws\s3\interfaces\commands\Command $command
     *
     * @return mixed
     */
    public function execute(interfaces\commands\Command $command)
    {
        $handler = $this->resolver->resolve($command);
        
        return call_user_func([$handler, 'handle'], $command);
    }
}
