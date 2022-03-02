<?php

namespace dareks84\yii2\aws\s3\interfaces\commands;

/**
 * Interface HasAcl
 *
 * @package dareks84\yii2\aws\s3\interfaces\commands
 */
interface HasAcl
{
    /**
     * @param string $acl
     */
    public function withAcl(string $acl);
}
