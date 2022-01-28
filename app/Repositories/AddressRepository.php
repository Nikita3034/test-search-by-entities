<?php

namespace App\Repositories;

use App\Contracts\Repositories\AddressRepositoryContract;
use App\Models\City;

class AddressRepository implements AddressRepositoryContract
{
    /**
     * Get collection of addresses
     *
     * @param [type] $search
     * @return object
     */
    public function get($search = null): object
    {
        if (!empty($search)) {
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

            $result = $query1->merge($query2);
        } else {
            $result = City::with('region', 'district')
                ->get();
        }

        return $result;
    }
}