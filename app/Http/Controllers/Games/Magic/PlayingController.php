<?php
namespace App\Http\Controllers\Games\Magic;

use Illuminate\Http\Request;

class PlayingController extends Controller
{
    public function guess()
    {
        return view('welcome');
    }
}