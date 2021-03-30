<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Region;

class RegionController extends Controller
{
    public function __construct()
    {
        $this->model = new Region;
    }

    /**
     * Getting a collection by regions and connected cities/districts
     * P.S. since the search must be carried out by one field in two tables, 
     * it will not be possible to implement it in standard ways through the models, 
     * therefore this solution can be considered as one of the options
     *
     * @param Request $request
     * @return mixed
     */
    public function get(Request $request)
    {
        $query = DB::table($this->model->getTableName())
            ->select('regions.name as region_name', 'cities.name as city_name', 'districts.name as district_name')
            ->join('cities', 'cities.rid', '=', 'regions.id')
            ->join('districts', 'districts.cid', '=', 'cities.id');

        // if there is a search request
        if (!empty($searchString = $this->clearString($request->get('query')))) {
            $query->where('cities.name', 'like', '%'. $searchString .'%');
            $query->orWhere('districts.name', 'like', '%'. $searchString .'%');
        }

        $citiesArr = $query->get();
        
        return $citiesArr;
    }
}
