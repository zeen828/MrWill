<?php
namespace App\Http\Controllers\Games\Magic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlayingController extends Controller
{
    public function index()
    {
        
    }

    public function guess()
    {
        return view('welcome');
    }
}