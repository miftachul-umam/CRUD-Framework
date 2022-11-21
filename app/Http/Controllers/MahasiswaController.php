<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mahasiswa;
use Illuminate\Support\Facades\Hash;



class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dtmahasiswa = Mahasiswa::all();
        return view('mahasiswa.data',compact('dtmahasiswa'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahasiswa.mahasiswa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
            [
                'nim' => 'required',
                'nama' => 'required',
                'umur' => 'required',
                'alamat' => 'required',
                'kota' => 'required',
                'kelas' => 'required',
                'jurusan' => 'required',
                'create_at' => 'required',
                'update_at' => 'required',
            ]);
            if ($this) {
                return redirect()
                    ->route('data')
                    ->with([
                        'success' => 'New post has been created successfully'
                    ]);
            } else {
                return redirect()
                    ->back()
                    ->withInput()
                    ->with([
                        'error' => 'Some problem occurred, please try again'
                    ]);
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
        return view('mahasiswa.show',compact('dtmahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dtmahasiswa= Mahasiswa::findorfail($id);
        return view('mahasiswa.edit', compact('dtmahasiswa'));
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
        $dtmahasiswa= Mahasiswa::findorfail($id);
        $dtmahasiswa->update($request->all());
        return redirect('data')->with('toast_success', 'Data Berhasil Update');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dtmahasiswa= Mahasiswa::findorfail($id);
        $dtmahasiswa->delete();
        return back()->whit('info','Mahasiswa Berhasil di Hapus');
        return redirect()->route('mahasiswa.data')->whit('succes','Mahasiswa Berhasil di Hapus');
    }
}