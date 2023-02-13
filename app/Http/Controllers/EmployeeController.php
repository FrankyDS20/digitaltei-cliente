<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployee;
use App\Http\Requests\UpdateEmployee;
use App\Models\Employee;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class EmployeeController extends Controller
{

    protected $empresa = "MikaFarma";
    public function index()
    {
        
        $employee = Employee::select('employees.*', 'jobs.name as job_name')
        ->join('jobs', 'jobs.id', '=', 'employees.jobs_id')->orderBy('id','desc')
        ->get();
        $titulo = "Gestion de empleados";
        $empresa = $this->empresa;
        return view('employee.index',compact('employee','titulo','empresa'));
    }
  
    public function edit(Employee $employee)
    {
        $jobs = Job::all();
        $titulo = "Editar empleado";
        $empresa = $this->empresa;
        return view('employee.edit',compact('employee','jobs','titulo','empresa'));
    }
    public function created()
    {
        $jobs = Job::all();
       
        $titulo = "Nuevo empleado";
        $empresa = $this->empresa;
        return view('employee.created',compact('titulo','jobs','empresa'));
    }
    public function store(StoreEmployee $request)
    {
        $data = $request->all();
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = Str::random(20)  .'.' .$avatar->getClientOriginalExtension();
            $imgFile = Image::make($avatar->getRealPath());
            $ruta= storage_path().'\app\public\images/'.$filename;
            $imgFile->resize(400, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save($ruta);
            $data['avatar'] = 'images/'.$filename;
        } 
        else {
            $data['avatar'] = 'images/default.png';
        }
        if (Employee::create($data)) {
            return redirect()->route('empleados.index');
        } else {
            unlink($ruta);
            return redirect()->back()->with('error', 'No se pudo registrar el registro.');
        }
    }
    public function update(UpdateEmployee $request, Employee $employee)
    {
        $data = $request->all();
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = Str::random(20)  .'.' .$avatar->getClientOriginalExtension();
            $imgFile = Image::make($avatar->getRealPath());
            $ruta= storage_path().'\app\public\images/'.$filename;
            $imgFile->resize(400, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save($ruta);
            $data['avatar'] = 'images/'.$filename;
        } 
        else {
            $data['avatar'] = $employee->avatar;
        }
        if (!$request->hasFile('avatar')) {
            $data['file'] = $employee->file;
        }
        if ($employee->update($data)) {
            return redirect()->route('empleados.index');
        } else {
            unlink($ruta);
            return redirect()->back()->with('error', 'No se pudo actualizar el registro.');
        }
    }
    

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('empleados.index');
    }
    public function validation($request){
       return $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'document' => 'required|unique:employees',
            'email' => 'required|unique:employees',
            'birthday_date' => 'required',
            'gender' => 'required',
            'phone' => 'required|unique:employees',
            'jobs_id' => 'required',
            'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg'
        ]);
    }
    public function validationUp($request){
        return $request->validate([
             'name' => 'required',
             'lastname' => 'required',
             'document' => 'required|unique:employees,document,'.$request->id,
             'email' => 'required|unique:employees,email,'.$request->id,
             'birthday_date' => 'required',
             'gender' => 'required',
             'phone' => 'required|unique:employees,phone,'.$request->id,
             'jobs_id' => 'required',
             'avatar' => '|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
         ]);
     }
}

