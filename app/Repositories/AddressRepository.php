<?php

namespace App\Repositories;

use App\Contracts\Repositories\AddressRepositoryContract;
use App\Models\City;

class AddressRepository implements AddressRepositoryContract
{
    /**
     * Get collection of addresses
     *
     * @return object
     */
    public function list(): object
    {
        return City::with('region', 'district')
            ->get();
    }

    /**
     * Get collection of addresses by search
     *
     * @param [type] $search
     * @return object
     */
    public function listBySearch($search): object
    {
        // search by district name
        $query1 = City::with('region')
            ->with(['district' => function ($q) use ($search) {
                $q->where('name', 'like', '%'. $search .'%');
            }])
            ->whereHas('district', function ($q) use ($search) {
                $q->where('name', 'like', '%'. $search .'%');
            })
            ->get();

        // search city by name
        $query2 = City::with('region', 'district')
            ->where('name', 'like', '%'. $search .'%')
            ->get();

        return $query1->merge($query2);
    }
}