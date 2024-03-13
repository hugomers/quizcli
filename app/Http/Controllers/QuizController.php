<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\Staff;
use App\Models\Quiz;



class QuizController extends Controller
{

    public function Index($suc){
        if($suc == 'all'){
        $stores = Store::all();
        }else{
        $stores = Store::where('alias',$suc)->get();
        }
        return $stores;
    }

    public function create(Request $request){
        $quiz = Quiz::insert($request->all());
        if($quiz == 1){
            return response()->json(true,200);
        }else{
            return response()->json(false,500);
        }
    }
}
