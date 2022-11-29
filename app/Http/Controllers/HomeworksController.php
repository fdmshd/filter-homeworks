<?php

namespace App\Http\Controllers;

use App\Models\Homework;
use Illuminate\Http\Request;


class HomeworksController extends Controller
{
    //
    public function index()
    {
        $homeworks = Homework::all();
        return view('homeworks.index', ['homeworks' => $homeworks]);
    }

    public function getByStatus(Request $request)
    {
        $homeworkStatus = $request->status;
        $homeworks = Homework::where('status', $homeworkStatus)->get();
        return view('homeworks.table', ['homeworks' => $homeworks]);
    }
}
