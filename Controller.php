<?php

namespace fireproof\Http\Controllers;
use Illuminate\Http\Request;



class ItemListController extends Controller
{

    public function itemStore1(Request $request){
        $validator = \Validator::make($request->all(), [
            'leafConstruction' => 'required',
            'doorType' => 'required',
            'fireRating' => 'required',
            'doorsetType' => 'required',
            'swingType' => 'required',
            'tollerance' => 'required',
            'undercut' => 'required',
            'floorFinish' => 'required',
            'gap' => 'required',
            'frameThickness' => 'required',
            'sOWidth' => 'required',
            'sOHeight' => 'required',
        ]);
        $errorlist = '';
        foreach ($validator->errors()->all() as $error){
            $errorlist .= '<li><i class="fas fa-exclamation-triangle"></i> '.$error.'</li>';
        }
        if ($validator->fails())
        {
            return response()->json(['status'=>'error','errors'=>$errorlist]);
        }
    }
}