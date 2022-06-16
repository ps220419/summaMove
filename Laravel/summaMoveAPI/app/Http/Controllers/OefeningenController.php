<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\oefeningen;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class OefeningenController extends Controller
{
    public function index()
    {
        \Log::channel('summaMoveAPI')->info('Get all oefeningen requested');
        
        return oefeningen::All();
    }
}
