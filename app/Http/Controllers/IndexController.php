<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;


class IndexController extends Controller {

    public function indexShow(Request $request) {

        $user = User::query()->where('is_admin', 1)->first();
        
        if (!isset($user)) {
            abort(404);
        }

        return view('indexshow.indexshow', compact('user'));
    }


}




