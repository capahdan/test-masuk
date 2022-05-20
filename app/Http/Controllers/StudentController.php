<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Jurusan;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.mahasiswa.index',[
            'users'=>Student::all(),
            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.mahasiswa.create',[
            'jurusans'=>Jurusan::all()
        ]);
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

            'name'=>'required',
            'nim'=>'required',
            'tingkat'=>'required',
            'jurusan_id'=>'required',
            'ip_terakhir'=>'required',
            'jumlah_sks'=>'required',
            'status_tinggal'=>'required'
           ]);
    
           Student::create([
            'name'=>$request->input('name'),
            'nim'=>$request->input('nim'),
            'tingkat'=>$request->input('tingkat'),
            'jurusan_id'=>$request->input('jurusan_id'),
            'ip_terakhir'=>$request->input('ip_terakhir'),
            'jumlah_sks'=>$request->input('jumlah_sks'),
            'status_tinggal'=>$request->input('status_tinggal'),
            ]);

            return redirect('/student')->with('success','Mahasiswa Berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('dashboard.mahasiswa.edit',[
            'user'=>$student,
            'jurusans'=>Jurusan::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Student $student)
    {
        $request->validate([

            'name'=>'required',
            'nim'=>'required',
            'tingkat'=>'required',
            'jurusan_id'=>'required',
            'ip_terakhir'=>'required',
            'jumlah_sks'=>'required',
            'status_tinggal'=>'required'
           ]);
    
           Student::whereId($student->id)->update([
            'name'=>$request->input('name'),
            'nim'=>$request->input('nim'),
            'tingkat'=>$request->input('tingkat'),
            'jurusan_id'=>$request->input('jurusan_id'),
            'ip_terakhir'=>$request->input('ip_terakhir'),
            'jumlah_sks'=>$request->input('jumlah_sks'),
            'status_tinggal'=>$request->input('status_tinggal'),
            ]);

            return redirect('/student')->with('success','Mahasiswa Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student= Student::find($student->id);
        $student->delete();


        return redirect('/student')->with('success','Mahasiswa Berhasil dihapus');
    }
}
