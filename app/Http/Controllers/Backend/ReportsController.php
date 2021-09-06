<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\EmployeeTemperature;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportsController extends Controller
{
    public function calender()
    {
        //     $heighTemp = DB::table('employee_temperatures')
        // ->select(DB::raw('DATE(created_at)', DB::raw('AVG(temperature) AS average_temperature'))
        // ->where('temperature', '>=', '36')
        // ->where('temperature', '<=', '37')
        // ->whereBetween('created_at', [$dateFrom, $dateTo])
        // ->groupBy(DB::raw('DATE(created_at)')
        // ->get();
        // $dateFrom = Carbon::now()->subDays(30);
        // $dateTo = Carbon::now();
        // $heighTemp = DB::table('employee_temperatures')
        // ->select('created_at', 'temperature')
        // ->distinct('temperature')
        // ->where('temperature', '>=', '36')
        // ->where('temperature', '<=', '37')
        // ->whereBetween('created_at', [$dateFrom, $dateTo])
        // ->groupBy(DB::raw('DATE(created_at)'))
        // ->get()->toArray();
        // dd($heighTemp);
        // $normalTemp = EmployeeTemperature::where('temperature', '>=', '36')->where('temperature', '<=', '37')->get();
        return view('backend.reports.calendar');
    }
}
