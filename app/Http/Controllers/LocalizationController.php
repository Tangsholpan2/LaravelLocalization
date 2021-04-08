<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocalizationController extends Controller
{
    //App::setlocale($locale);
              session()->put('locale', $locale);
              return redirect()->back();
}
