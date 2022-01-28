<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AddressService;

class AddressController extends Controller
{
    private $addressService;

    public function __construct(AddressService $addressService)
    {
        $this->addressService = $addressService;
    }

    /**
     * Get view with addresses
     *
     * @param Request $request
     * @return object
     */
    public function index(Request $request): object
    {
        return $this->addressService->index($request);
    }
}
