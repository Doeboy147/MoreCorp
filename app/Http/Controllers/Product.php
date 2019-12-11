<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class Product extends Controller
{

    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    public function edit()
    {
        return view('product.edit');
    }

    public function store(Request $request)
    {
        try {

        } catch (QueryException $exception) {

        }
    }

    public function update(Request $request)
    {
        try {

        } catch (QueryException $exception) {

        }
    }
}
