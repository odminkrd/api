<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Devices;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
  public function index(){
      return Devices::all();
  }
}
