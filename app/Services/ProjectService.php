<?php

namespace App\Services;

use App\Exceptions\ServiceException;
use App\Models\Project;
use App\Models\User;

/**
 * Class ProjectService
 * @package App\Services
 */
class ProjectService
{
    /**
     * @param array $attributes
     * @param User|null $user
     * @return Project
     * @throws ServiceException
     */
    public function create(array $attributes, ?User $user): Project
    {

    }
}
