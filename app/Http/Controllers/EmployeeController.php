<?php

namespace App\Http\Controllers;


use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();
        return view('index', compact('employees'));
    }


    public function detail()
    {
        $employees = Employee::all();
        return view('pegawai.index', compact('employees'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $request->validate([
            'npp' => 'required|size:9',
            'nama' => 'required',
            'usia' => 'integer'
        ]);
        Employee::create($request->all());
        return redirect('/')->with('status', 'Data Pegawai Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return view('show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view('/pegawai.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {


        $request->validate([
            'npp' => 'required|size:9',
            'nama' => 'required',
            'usia' => 'integer'
        ]);
        
        Employee::where('id', $employee->id)->update([
            'npp' => $request->npp,
            'nama' => $request->nama,
            'usia' => $request->usia,
            'asal' => $request->asal,
            'jenis_kelamin' => $request->jenis_kelamin
        ]);

        return redirect('/')->with('status', 'Data Pegawai Berhasil Diubah');

    
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        Employee::destroy($employee->id);
        return redirect('/')->with('status', 'Data Pegawai Berhasil Dihapus');
    }
}
