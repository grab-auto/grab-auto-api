<?php

namespace App\Http\Controllers;

use App\Car;

/**
 * Class CarController
 * -----------------------------
 * Handles car listing and searching
 * -----------------------------
 *
 * @package App\Http\Controllers
 */

class CarController extends Controller
{
    /**
     * ---------------------------------
     * Show All Cars
     * ---------------------------------
     * URL : /cars
     *
     * @return mixed
     *
     */
    public function index()
    {
        return Car::all();
    }

    /**
     * --------------------------------
     * Show Car Info
     * --------------------------------
     * URL : /cars/{id}
     *
     * @param $id
     * @return mixed
     *
     */

    public function show($id)
    {
        return Car::find($id);
    }

    /**
     * --------------------------------
     * Search Car by Year Model, Manufacturer Name and Manufacturer Code
     * --------------------------------
     * URL: /cars/search/{string}
     * @param $str
     * @return mixed
     *
     */
    public function search($str)
    {
        return Car::where(function($query) use ($str) {
                    $query->where('Model_Year','LIKE','%'.$str.'%')
                          ->orWhere('Vehicle_Manufacturer_Name','LIKE','%'.$str.'%')
                          ->orWhere('Veh_Mfr_Code','LIKE','%'.$str.'%');
                    })->get();
    }

    /**
    * --------------------------------
    * Show cars on selected tab
    * --------------------------------
    * For now, just take 20 random cars
    * @param $limit
    * @return mixed
    *
    */
    public function browse($limit)
    {
        return Car::orderByRaw('RAND()')->take($limit)->get();
    }
}
