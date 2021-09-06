<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\EmployeeTemperature\StoreRequest;
use App\Models\EmployeeTemperature;
use PDOException;

class EmployeeTemperatureController extends Controller
{
    public function index()
    {
        try {
            $employee_temperatures = EmployeeTemperature::latest()->get();
            return view('backend.employee-temperature.index', compact('employee_temperatures'));
        } catch (PDOException $e) {
            $msg = $e->getMessage();
            echo $msg;
            exit();
        }
    }
    public function create()
    {
        return view('backend.employee-temperature.create');
    }
    public function store(StoreRequest $request)
    {
        $jsonString = file_get_contents($request->file);
        $objs = json_decode($jsonString, true);
        foreach ($objs['device'] as $key => $obj) {
            EmployeeTemperature::create(
                [
                    'device' => $obj,
                    'datetime' =>  $objs['datetime'][$key],
                    'temperature' =>  $objs['temperature'][$key],
                    'cid' =>  $objs['cid'][$key],
                    'firstName' =>  $objs['firstname'][$key],
                ]
            );
        }
        return redirect()->route('admin.employeeTemperatures.index')->with('success', 'employee temperature has been added successfully');
    }

    public function destroy($id)
    {
        EmployeeTemperature::truncate();
        return redirect()->route('admin.employeeTemperatures.index')->with('success', 'employee temperature has been added successfully');
    }
}
