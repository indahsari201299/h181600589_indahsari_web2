@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Kategori Artikel</div>
                    <form method="post action={!! route('kategori_artikel.store')!!}">
                    @include('kategori_artikel.form')
                    </form>
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
