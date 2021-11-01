<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    //get all countries
    public function all_countries ()
    {
        $Country = Country::all();
        return response()->json([
            'status' => 'true',
            'countries' => $Country
        ]);
    }

    //search
    public function search ($name)
    {
        $Country = Country::where('name', 'like', '%'.$name.'%')->get();
        return response()->json([
            'status' => 'true',
            'query' => $name,
            'countries' => $Country
        ]);
    }

    //get {name} country companies
    public function get ($name)
    {
        $Country = Country::where('name', '=', $name);
        if ($Country->count() > 0) {

            $companies  = array();
            foreach ($Country->first()->companies as $company) {
                //unused $users variable to get variable with users
                $users = $company->users;

                $companies[] = [
                    'company' => $company,
                ];
            }

            return response()->json([
                'status' => 'true',
                'country' => $name,
                'companies' => $companies
            ]);
        }


        return response()->json([
            'status' => 'false',
            'error_message' => $name. ' not found!',
        ]);
    }
}
