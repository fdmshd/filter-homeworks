<?php

namespace App\Http\Controllers;

use App\Models\Homework;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeworkStatusesController extends Controller
{
    //
    public function index()
    {
        $homeworks = Homework::all();
        return view('hw_statuses', ['homeworks' => $homeworks]);
    }

    public function getByStatus(Request $request)
    {
        $status = $request->status;
        $homeworks = Homework::where('status', $status)->get();
        return view('hw_table', ['homeworks' => $homeworks]);
    }
}
