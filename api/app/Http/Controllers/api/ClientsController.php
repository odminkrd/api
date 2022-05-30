<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Clients;
use Illuminate\Http\Request;


class ClientsController extends Controller
{
  public function index ()
  {
      return Clients::all();
  }
}
