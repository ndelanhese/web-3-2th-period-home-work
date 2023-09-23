<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GPSController extends Controller
{
    public function recalculandoRota() {
   $message = "The GPS is recalculating the route";
   return  $message;
}

}
