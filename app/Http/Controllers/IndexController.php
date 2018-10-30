<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;


class IndexController extends Controller {

    public function indexShow(Request $request) {

        return view('indexshow.indexshow');
    }


}




