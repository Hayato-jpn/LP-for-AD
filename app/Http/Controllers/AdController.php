<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdController extends Controller
{
    //
    public function lp() {
        if (\Agent::is('iPhone')) { //端末がiOSかどうか
              return redirect('https://preaf.jp/pa.do?s=v04031&o=44510&guid=ON'); //iOS MALINE
          } else {
              return redirect('https://fam-ad.com/ad/p/r?_site=64801&_article=16216'); //Android TORITOMO
          }
    }
}
