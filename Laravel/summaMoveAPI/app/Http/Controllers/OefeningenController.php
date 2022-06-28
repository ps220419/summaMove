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

    public function store(Request $request)
    {
        Log::channel('apiLog')->info('Post new creation requested');

        $validator = Validator::make($request->all(), [
            'naamNL' => 'required',
            'omschrijvingNL' => 'required',
            'naamEN' => 'required',
            'omschrijvingEN' => 'required', 
            'img' => 'required',         
        ]);
 
        if ($validator->fails()) {
            return response('{"Foutmelding":"Data niet correct"}', 400)
                ->header('Content-Type','application/json');

        }
        else return oefeningen::create($request->all());
    }

    public function update(Request $request, oefeningen $oefeningen)
    {
        \Log::channel('apiLog')->info('PUT/PATCH selected and updated');

        $validator = Validator::make($request->all(), [
            'naamNL' => 'required',
            'omschrijvingNL' => 'required',
            'naamEN' => 'required',
            'omschrijvingEN' => 'required', 
            'img' => 'required',         
        ]);
 
        if ($validator->fails()) {
            return response('{"Foutmelding":"Data niet correct"}', 400)
                ->header('Content-Type','application/json');

        }
        else $oefeningen->update($request->all());
        return $oefeningen;
    }
    
    public function delete($id){
        oefeningen::where('id',$id)->delete();
        \Log::channel('apiLog')->info('Deleted oefeningen from db');
    }
}