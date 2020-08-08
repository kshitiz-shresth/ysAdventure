<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use PDO;

class ServiceController extends Controller
{
    public function index(){
        $services = Service::orderBy('order')->get();
        return view('pages.services',compact(
            'services'
        ));
    }
}
