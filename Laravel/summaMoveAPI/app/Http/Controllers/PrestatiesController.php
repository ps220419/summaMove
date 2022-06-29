<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\prestaties;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class PrestatiesController extends Controller
{
    public function store(Request $request)
    {
        Log::channel('apiLog')->info('Post prestatie new creation requested');

        $validator = Validator::make($request->all(), [
            'datum' => 'required',
            'startTijd' => 'required',
            'eindTijd' => 'required',
            'aantal' => 'required', 
            'oefening_Id' => 'required',
            'user_Id' => 'required',         
        ]);
 
        if ($validator->fails()) {
            return response('{"Foutmelding":"Data niet correct"}', 400)
                ->header('Content-Type','application/json');

        }
        else return prestaties::create($request->all());
    }

    public function update(Request $request, prestaties $prestatie)
    {
        // dd($request, $prestatie);
        \Log::channel('apiLog')->info('PUT/PATCH selected and updated');

        $validator = Validator::make($request->all(), [
            'datum' => 'required',
            'startTijd' => 'required',
            'eindTijd' => 'required',
            'aantal' => 'required', 
            'oefening_Id' => 'required',
            'user_Id' => 'required',          
        ]);
 
        if ($validator->fails()) {
            return response('{"Foutmelding":"Data niet correct"}', 400)
                ->header('Content-Type','application/json');

        }
        else $prestatie->update($request->all());
        return $prestatie;
    }
    
    public function delete($id){
        prestaties::where('id',$id)->delete();
        \Log::channel('apiLog')->info('Deleted prestaties from db');
    }
}
