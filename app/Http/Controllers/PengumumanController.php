<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pengumuman;

class PengumumanController extends Controller
{
    public function index(){
        //eloquent => ORM (Object Relational Mapping)
        $listPengumuman=Pengumuman::all(); //select * from pengumuman
        //blade
        return view('pengumuman.index', compact ('listPengumuman'));

    }
        public function show ($id){
       //$Pengumuman=Pengumuman::where('id,$id')->first();
        $Pengumuman=Pengumuman::find($id);
        return view('pengumuman.show', compact ('Pengumuman'));

        }
        public function create(){
            return view('pengumuman.create');

        }
        public function store(Request $request){
            $input=$request->all();
            Pengumuman::create($input);

            return redirect(route('pengumuman.index'));

        }   

}

