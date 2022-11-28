<?php

namespace App\Http\Controllers;

use App\Models\Homework;
use Illuminate\Http\Request;

class HomeworkStatusesController extends Controller
{
    //
    public function index(Request $request){
        $homeworks = Homework::all();
        return view('hw_statuses',['homeworks'=>$homeworks]);
    }
}
