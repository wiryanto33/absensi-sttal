<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    //index
    public function index(Request $request){
        $attendances = Attendance::with('prajurit')
            ->when($request->input('name'), function ($query, $name) {
                $query->whereHas('prajurit', function ($query) use ($name) {
                    $query->where('name', 'like', '%' . $name . '%');
                });
            })->orderBy('id', 'desc')->paginate(10);
        return view('pages.absensi.index', compact('attendances'));
    }
}
