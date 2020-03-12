<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdController extends Controller
{
    //
    public function lp() {
        if (\Agent::is('iPhone')) { //端末がiOSかどうか
              return redirect('https://fam-ad.com/ad/p/dt?_site=64802&_loc=221380&_mstype=99'); //famのワクワクiOS
          } else {
              return view('matching'); //Android端末遷移先
          }
    }
}
