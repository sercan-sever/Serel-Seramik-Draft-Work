<?php

namespace App\Http\Controllers\Backend\Slider;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SliderController extends Controller
{
    public function index() : View
    {
        return view('backends.sliders.index');
    }
}
