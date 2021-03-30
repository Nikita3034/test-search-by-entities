<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $view = [];
    private $controller;

    public function __construct()
    {
        $this->controller = new RegionController;
    }

    /**
     * Return welcome page with table by regions/cities/districts
     *
     * @param Request $request
     * @return mixed
     */
    public function index(Request $request)
    {
        // getting a collection by region
        $this->view['collections'] = $this->controller->get($request);

        return view('welcome', $this->view);
    }

    /**
     * Cleaning the string from garbage
     *
     * @param [type] $string
     * @return void
     */
    protected function clearString( $string ) {

        // removing spaces from the beginning and end of a line
        $string = trim($string);

        // remove escaped characters
        $string = stripslashes($string);

        // remove tags
        $string = strip_tags($string);

        // converting special characters to HTML
        $string = htmlspecialchars($string);
        
        return $string;
    }
}
