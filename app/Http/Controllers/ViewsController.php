<?php

namespace App\Http\Controllers;

use App\Santander;
use Illuminate\Http\Request;
use App;

class ViewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function montanas() {
        return view('montanas/montanas-en-santander');
    }

}