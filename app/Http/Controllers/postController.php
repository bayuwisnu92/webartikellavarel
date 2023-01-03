<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class postController extends Controller
{
    public function index()
    {
        $artikels= User::orderBy('id','desc')->paginate(6);

        return view('memulai',compact('artikels'));
    }

    public function create(){

        return view('create');
    }
    //memasukan ke database
    public function store(Request $request){
        //dd($request->thumbnail);
         $request->validate([
            'thumbnail' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'judul' => 'required|min:3|max:255',
            'isi' => 'required|min:3|max:1000000',
        ]);
        //$thumbnail = $request->file('thumbnail')->store('thumbnail');
        
        
        $thumbnail=$request->thumbnail->getClientOriginalName().'-'.time().'.'.$request->thumbnail->extension();
        $request->thumbnail->move(public_path('gambar'),$thumbnail);
        
       $artikel = new User;
       $artikel->thumbnail = $thumbnail;
       $artikel->judul=$request->judul;
       $artikel->isi=$request->isi;
       $artikel->waktu=$request->waktu;
       $artikel->tag=$request->tag;
       $artikel->save();
        return redirect('/artikel');
    }
    public function edit($id){
        $artikel= User::find($id);
        return view('edit',compact('artikel'));
    }
    public function update(Request $request,$id){
        $request->validate([
            'thumbnail' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'judul' => 'required|min:3|max:255',
            'isi' => 'required|min:3|max:1000000',
        ]);
       
        
        $thumbnail=$request->thumbnail->getClientOriginalName().'-'.time().'.'.$request->thumbnail->extension();
        $request->thumbnail->move(public_path('gambar'),$thumbnail);
        

        $artikel= User::find($id);
        $artikel->judul = $request->judul;
        $artikel->isi = $request->isi;
        $artikel->waktu=$request->waktu;
        $artikel->tag=$request->tag;
        $artikel->thumbnail = $thumbnail;
        
        $artikel->save();
        return redirect('/artikel');
    }
    public function show(Request $request, $id)
    {
        $artikel = User::find($id);

        return view('singgle', ['artikel' => $artikel]);
    }
    public function destroy($id){
        $artikel= User::find($id)->delete();
        return redirect('/artikel');

    }
}
