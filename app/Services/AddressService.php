<?php

namespace App\Services;

use App\Contracts\Repositories\AddressRepositoryContract;
use Illuminate\Http\Request;

class AddressService
{
    use \App\Traits\StringTrait;

    private $addressRepository;

    public function __construct(AddressRepositoryContract $addressRepository)
    {
        $this->addressRepository = $addressRepository;
    }

    /**
     * Get view with addresses
     *
     * @param Request $request
     * @return object
     */
    public function index(Request $request): object
    {
        // getting a collection by region
        $view['cities'] = $this->get($request);

        return view('welcome', $view);
    }

    /**
     * Get list addresses
     *
     * @param Request $request
     * @return array
     */
    private function get(Request $request): array
    {
        try {
            if (!empty($request->search)) {
                $request->search = $this->clearString($request->search);
            }

            return $this->addressRepository->get($request->search)->toArray();
        } catch (\Exception $e) {
            return dd($e->getMessage());
            return [];
        }
    }
}
