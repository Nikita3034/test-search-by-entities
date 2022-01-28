<?php

namespace App\Contracts\Repositories;

interface AddressRepositoryContract
{
    public function get($query = null): object;
}
