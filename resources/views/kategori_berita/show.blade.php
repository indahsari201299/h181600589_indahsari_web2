@extends('layouts.app')



@section('content')

<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card">

                <div class="card-header">List Kategori Berita</div>



                <div class="card-body">



                <div class="form-group row">

                    <label class="col-md-4 col-form-label text-md-right">ID</label>

                    <label class="col-md-8 col-form-label text-md-left">{!! $kategoriBerita->id !!}</label>

                </div>

                <div class="form-group row">

                    <label class="col-md-4 col-form-label text-md-right">Nama</label>

                    <label class="col-md-8 col-form-label text-md-left">{!! $kategoriBerita->nama !!}</label>

                </div>

                <div class="form-group row">

                    <label class="col-md-4 col-form-label text-md-right">Users Id</label>

                    <label class="col-md-8 col-form-label text-md-left">{!! $kategoriBerita->users_id !!}</label>

                </div>

                <div class="form-group row">

                    <label class="col-md-4 col-form-label text-md-right">Create</label>

                    <label class="col-md-8 col-form-label text-md-left">{!! $kategoriBerita->created_at->format('d/m/Y') !!}</label>

                </div>

                <div class="form-group row">

                    <label class="col-md-4 col-form-label text-md-right">Create</label>

                    <label class="col-md-8 col-form-label text-md-left">{!! $kategoriBerita->updated_at->format('d/m/Y') !!}</label>

                </div>



                </div>

            </div>

        </div>

    </div>

</div>

@endsection

   