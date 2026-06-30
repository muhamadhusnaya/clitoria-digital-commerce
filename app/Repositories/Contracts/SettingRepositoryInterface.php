<?php

namespace App\Repositories\Contracts;

use App\Contracts\BaseRepositoryInterface;

interface SettingRepositoryInterface extends BaseRepositoryInterface
{
    /**
     * Update or create a setting by its key.
     *
     * @param string $key
     * @param mixed $value
     * @return bool
     */
    public function updateByKey(string $key, $value): bool;
}
