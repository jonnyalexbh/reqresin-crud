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
    public function obtainUsers()
    {
        return $this->performRequest('GET', '/api/users');
    }
}
