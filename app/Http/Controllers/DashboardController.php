<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projet;
class DashboardController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }
   public function index() {
   	$projets=Projet::all();
      return view('dashboard',compact('projets'));
   }
}
