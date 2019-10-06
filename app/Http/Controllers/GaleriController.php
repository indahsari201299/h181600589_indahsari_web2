<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\galeri;
use App\kategorigaleri;

class GaleriController extends Controller
{
    public function index(){
        //eloquent => ORM (Object Relational Mapping)
        $listGaleri=Galeri::all(); //select * from galeri
        //blade
        return view('galeri.index', compact ('listGaleri'));

    }
        public function show ($id){
       //$Galeri=Galeri::where('id,$id')->first();
        $Galeri=Galeri::find($id);
        return view('galeri.show', compact ('Galeri'));

        }
        public function create(){
            $KategoriGaleri=KategoriGaleri::pluck('name', 'id',);
            return view('galeri.create', compact('kategorigaleri'));

        }
        public function store(Request $request){
            $input=$request->all();
            Galeri::create($input);
            return redirect(route('galeri.index'));

        }   

}
