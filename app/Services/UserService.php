<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class UserService
{
    use ConsumesExternalService;

    /**
     * The base uri to consume the users service
     * @var string
     */
    public $baseUri;

    public function __construct()
    {
        $this->baseUri = config('services.reqresin.base_uri');
    }

    /**
     * Obtain the full list of users
     * @return string
     */
    public function obtainUsers($page)
    {
        return $this->performRequest('GET', '/api/users?page=' . $page);
    }

    /**
     * Obtain one single user
     * @return string
     */
    public function obtainUser($user)
    {
        return $this->performRequest('GET', "/api/users/{$user}");
    }

    /**
     * Destroy user
     * @return string
     */
    public function destroyUser($user)
    {
        return $this->performRequest('DELETE', "/api/users/{$user}");
    }
}
