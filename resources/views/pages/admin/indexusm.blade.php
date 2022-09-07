@extends('layouts.admin')

@section('title')
    Index
@endsection

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Data Pendaftar</h1>
        <div class="row">
            <div class="col-md-6">
                <form action="{{route('usm.index')}}" method="GET">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <select name="universitas" id="" class="form-control">
                                    <option value="">Default</option>
                                    <option value="USM">USM</option>
                                    <option value="Unisbank">UNISBANK</option>
                                    <option value="Udinus">UDINUS</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary py-2">Filter</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h5 class="h5 mb-2 text-gray-800">Data Pendaftar</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="tablePendaftar" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>No Absen</th>
                                <th>Universitas</th>
                                <th>Waktu Pendaftaran</th>
                                <th>Ttd</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $i)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$i->nama}}</td>
                                    <td>{{$i->kelas}}</td>
                                    <td>{{$i->noabsen}}</td>
                                    <td>{{$i->universitas}}</td>
                                    <td>{{$i->waktu}}</td>
                                    <td>
                                        <img src="{{Storage::url($i->signed)}}" alt="" class="thumbnail w-30">
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
@endpush

@push('addon-script')
    <script>
        $(document).ready(function () {
            $('#tablePendaftar').DataTable();
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
@endpush
