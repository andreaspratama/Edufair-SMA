@extends('layouts.admin')

@section('title')
    Tambah Boot
@endsection

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Boot</h1>
        </div>

        <div class="row">

            <div class="col-lg-8">

                <!-- Basic Card Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Tambah Boot</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{route('boot.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Boot</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="nama" placeholder="Nama...">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Asal</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="asal" placeholder="Asal...">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Link</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="link" placeholder="Link...">
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <!-- /.container-fluid -->
@endsection