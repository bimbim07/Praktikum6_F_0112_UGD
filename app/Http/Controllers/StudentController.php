<?php

namespace App\Http\Controllers;

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
        
        $students = Student::orderBy('id', 'ASC')->get();

        
        return view('studentCRUD.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        ///menampilkan halaman create
        return view('studentCRUD.create');
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
            'nama_depan' => 'required',
        ]);

        /// insert setiap req dari form ke dalam database via model
        /// jika menggunakan metode ini, maka nama field dan nama form harus sama
        Student::create($request->all());

        try{
            $detail = [
                'body' =>$request->nama_fakultas,
            ];
            Mail::to('danielcetta5@gmail.com')->send(new FacultyMail($detail));
            ///redirect jika sukses menyimpan data
                return redirect()->route('students.index')
                ->with('success', 'Item created successfully');
                
        }catch(Exception $e){
            return redirect()->route('students.index')->with('success', 'Item Created Successfully but cannot send the email');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        ///cari berdasarkan id
        $students = Student::find($id);
        
        return view('studentCRUD.show',compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        ///cari berdasarkan id
        $students = Student::find($id);
        
        return view('studentCRUD.edit',compact('students'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /// membuat validasi untuk nama_fakultas wajib diisi
        $request->validate([
            'nama_fakultas' => 'required',
        ]);

        
        Student::find($id)->update($request->all());
        
        
        return redirect()->route('studnets.index')
                        ->with('sucess','Item update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::find($id)->delete();
        

        return redirect()->route('students.index')
                        ->with('sucess','Item deleted successfully');
    }
}
