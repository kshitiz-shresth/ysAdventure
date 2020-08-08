<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;

class IndexController extends Controller
{
    public function index()
    {
        $aboutSectionData = collect([
            'image'=> Voyager::image(setting('home-page.section_image')),
            'title'=> setting('home-page.section_title'),
            'description'=> setting('home-page.section_description'),
            'link'=>'#'
        ]);
        return view('index',compact(
            'aboutSectionData'
        ));
    }

    public function getService()
    {
        $services = Service::orderBy('order')->get();
        return response($services);
    }
}
