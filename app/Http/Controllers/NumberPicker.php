<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;

class NumberPicker extends Controller {

    public function index()
    {
        return view('numpicker.form');
    }

    public function pick_number()
    {
        $low = Request::get('low');
        $high = Request::get('high');

        $number = rand($low, $high);

        return view('numpicker.results', compact('number'));
    }

}
