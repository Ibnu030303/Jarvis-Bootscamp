<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('/dashboard.post', [
            'posts' => Siswa::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/dashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nik' => 'required|string|unique:siswas',
            'no_kk' => 'required|string|unique:siswas',
            'nis' => 'required|string|unique:siswas',
            'nisn' => 'required|string|unique:siswas',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|max:255',
            'no_hp' => 'required|min:11|max:14|unique:siswas',
            'tahun_masuk' => 'required|string',

        ]);

        Siswa::create($validatedData);
        
        $request->session()->flash('success', 'Registrasi Berhasil');
        return redirect('/post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tags = Siswa::find($id);
      
        return view('/dashboard/show',compact('tags'));
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $post)
    {   
        return view('/dashboard.edit',  [
            'post' => $post,
            'posts' => Siswa::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $post)
    {
        // $rules =[
            
        //     'nama' => 'required',
        //     'jenis_kelamin' => 'required',
        //     'tempat_lahir' => 'required',
        //     'tanggal_lahir' => 'required|date',
        //     'alamat' => 'required|max:255',
            
        //     'tahun_masuk' => 'required|string',
          
        // ]; 

        // if($request->nik != $post->nik){
        //     $rules['nik'] = 'required|string|unique:siswas';
        // }
        // // elseif ($request->no_kk != $post->no_kk){
        // //     $rules['no_kk'] ='required|string|unique:siswas';
        // // } 
        // // elseif ($request->nis != $post->nis){
        // //     $rules['nis'] ='required|string|unique:siswas';
        // // } 
        // // elseif ($request->nisn != $post->nisn){
        // //     $rules['nisn'] ='required|string|unique:siswas';
        // // } 
        // // elseif ($request->no_hp != $post->no_hp){
        // //     $rules['no_hp'] ='required|min:11|max:14|unique:siswas';
        // // } 
        
        // $validatedData = $request->validate($rules);

        // Siswa::update($validatedData);
         $post = Siswa::find($post);
            
        $request->validate([
            'nik' => 'required',
            'no_kk' => 'required',
            'nis' => 'required',
            'nisn' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|max:255',
            'no_hp' => 'required|min:11|max:14',
            'tahun_masuk' => 'required|string',
        ]); 

        $post->update([
            'nik' => $request->nik ?? $post->nik,
            'no_kk' => $request->no_kk ?? $post->no_kk,
            'nis' => $request->nis ?? $post->nis,
            'nisn' => $request->nisn ?? $post->nisn,
            'nama' => $request->nama ?? $post->nama,
            'jenis_kelamin' => $request->jenis_kelamin ?? $post->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir ?? $post->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir ?? $post->tanggal_lahir,
            'alamat' => $request->alamat ?? $post->alamat,
            'no_hp' => $request->no_hp ?? $post->no_hp,
            'tahun_masuk' => $request->tahun_masuk ?? $post->tahun_masuk,
        ]);

        return redirect('/post')->with('success', 'Update Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($post)
    
    {
        
        Siswa::destroy($post);
        return redirect('/post')->with('delete', 'Berhasil di Delete');

    }
}
