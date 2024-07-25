<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class KazanController extends Controller
{
    public function index() {
        // $urlWithQuery = url()->full();
        // $route = Route::current()->getName();
        // $name = Route::currentRouteName();
        $name = 'Казань';


        // dd($name);
        // return view('kazan');
        return view('kazan', ['name' => $name]);
    }

    public function store(Request $request) {
        $params = $request->input('status');
        dd($params);
        return response()->$request;
    }
}
