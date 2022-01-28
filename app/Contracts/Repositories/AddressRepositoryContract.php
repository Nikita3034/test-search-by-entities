<?php

namespace App\Contracts\Repositories;

interface AddressRepositoryContract
{
    public function list(): object;

    public function listBySearch($search): object;
}
