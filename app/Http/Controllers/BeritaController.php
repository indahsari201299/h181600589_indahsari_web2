<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use App\KategoriBerita;

class BeritaController extends Controller
{
    public function index(){
        //eloquent => ORM (Object Relational Mapping)
        $listBerita=Berita::all(); //select * from Berita
        //blade
        return view('berita.index', compact ('listBerita'));

    }
        public function show ($id){
       //$Artikel=Berita::where('id,$id')->first();
        $Berita=Berita::find($id);
        return view('berita.show', compact ('Berita'));

        }
        public function create(){
            $KategoriBerita=KategoriBerita::pluck('nama','id',);
            return view('berita.create', compact ('KategoriBerita'));

        }
        public function store(Request $request){
            $input=$request->all();
            Berita::create($input);
            return redirect(route('berita.index'));

        }   

}
