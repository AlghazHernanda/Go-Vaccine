<?php

namespace App\Http\Controllers;

use App\Models\UserRecord;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class RecordController extends Controller
{
    public function index()
    {
        $records = DB::table('user_records')->where('user_id',Auth::user()->id)->get();
        return view('profile',['records'=>$records]);
    }

}
