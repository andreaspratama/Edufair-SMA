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
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <select name="universitas" id="universitas" class="form-control" required>
                                <option value="">Pilih Kampus</option>
                                <option value="UNIKA WIDYA MANDALA SURABAYA">UNIKA WIDYA MANDALA SURABAYA</option>  
                                <option value="i3L">i3L</option>  
                                <option value="UNIKA SOEGIJAPRANATA">UNIKA SOEGIJAPRANATA</option>
                                <option value="UNIVERSITAS PELITA HARAPAN JAKARTA">UNIVERSITAS PELITA HARAPAN JAKARTA</option>
                                <option value="UNIVERSITAS BINA NUSANTARA">UNIVERSITAS BINA NUSANTARA</option>
                                <option value="TRISTAR CULINARY INSTITUTE">TRISTAR CULINARY INSTITUTE</option>
                                <option value="ALFALINK">ALFALINK</option>
                                <option value="INSTITUT INFORMATIKA INDONESIA (IKADO) SURABAYA">INSTITUT INFORMATIKA INDONESIA (IKADO) SURABAYA</option>
                                <option value="UNIVERSITAS KRISTEN PETRA">UNIVERSITAS KRISTEN PETRA</option>
                                <option value="UNIVERSITAS PRASETIYA MULYA">UNIVERSITAS PRASETIYA MULYA</option>
                                <option value="MULTIMEDIA NUSANTARA POLYTECHNIC">MULTIMEDIA NUSANTARA POLYTECHNIC</option>
                                <option value="THE SAGES INSTITUTE">THE SAGES INSTITUTE</option>
                                <option value="XIAMEN UNIVERSITY">XIAMEN UNIVERSITY</option>
                                <option value="UNIVERSITAS DIAN NUSWANTORO">UNIVERSITAS DIAN NUSWANTORO</option>
                                <option value="UNIVERSITAS PARAHYANGAN">UNIVERSITAS PARAHYANGAN</option>
                                <option value="UNIVERSITAS CIPUTRA">UNIVERSITAS CIPUTRA</option>
                                <option value="UNIVERSITAS KRISTEN DUTA WACANA">UNIVERSITAS KRISTEN DUTA WACANA</option>
                                <option value="CALVIN UNIVERSITY">CALVIN UNIVERSITY</option>
                                <option value="UNIVERSITAS ATMA JAYA YOGYAKARTA">UNIVERSITAS ATMA JAYA YOGYAKARTA</option>
                                <option value="UNIVERSITAS MULTIMEDIA NUSANTARA">UNIVERSITAS MULTIMEDIA NUSANTARA</option>
                                <option value="POLITEKNIK INTERNASIONAL BALI">POLITEKNIK INTERNASIONAL BALI</option>
                                <option value="UNIVERSITAS KRISTEN MARANATHA">UNIVERSITAS KRISTEN MARANATHA</option>
                                <option value="UNIVERSITAS TARUMANAGARA">UNIVERSITAS TARUMANAGARA</option>
                                <option value="UNIVERSITAS KRISTEN SATYA WACANA">UNIVERSITAS KRISTEN SATYA WACANA</option>
                                <option value="UNIVERSITAS KARANGTURI">UNIVERSITAS KARANGTURI</option>
                                <option value="CHALK & TALK">CHALK & TALK</option>
                                <option value="STT ABDIEL">STT ABDIEL</option>
                                <option value="UNTAG JAKARTA">UNTAG JAKARTA</option>
                                <option value="VICTORIA UNIVERSITY SYDNEY">VICTORIA UNIVERSITY SYDNEY</option>
                                <option value="IUP FEB UNDIP">IUP FEB UNDIP</option>
                                <option value="STT KRISTUS ALFA OMEGA">STT KRISTUS ALFA OMEGA</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select name="kelas" id="kelas" class="form-control" required>
                                <option value="">Pilih Kelas</option>
                                <option value="X 1">X 1</option>  
                                <option value="X 2">X 2</option>  
                                <option value="X 3">X 3</option>
                                {{-- <option value="UNIVERSITAS PELITA HARAPAN JAKARTA">UNIVERSITAS PELITA HARAPAN JAKARTA</option>
                                <option value="UNIVERSITAS BINA NUSANTARA">UNIVERSITAS BINA NUSANTARA</option>
                                <option value="TRISTAR CULINARY INSTITUTE">TRISTAR CULINARY INSTITUTE</option>
                                <option value="ALFALINK">ALFALINK</option>
                                <option value="INSTITUT INFORMATIKA INDONESIA (IKADO) SURABAYA">INSTITUT INFORMATIKA INDONESIA (IKADO) SURABAYA</option>
                                <option value="UNIVERSITAS KRISTEN PETRA">UNIVERSITAS KRISTEN PETRA</option>
                                <option value="UNIVERSITAS PRASETIYA MULYA">UNIVERSITAS PRASETIYA MULYA</option>
                                <option value="MULTIMEDIA NUSANTARA POLYTECHNIC">MULTIMEDIA NUSANTARA POLYTECHNIC</option>
                                <option value="THE SAGES INSTITUTE">THE SAGES INSTITUTE</option>
                                <option value="XIAMEN UNIVERSITY">XIAMEN UNIVERSITY</option>
                                <option value="UNIVERSITAS DIAN NUSWANTORO">UNIVERSITAS DIAN NUSWANTORO</option>
                                <option value="UNIVERSITAS PARAHYANGAN">UNIVERSITAS PARAHYANGAN</option>
                                <option value="UNIVERSITAS CIPUTRA">UNIVERSITAS CIPUTRA</option>
                                <option value="UNIVERSITAS KRISTEN DUTA WACANA">UNIVERSITAS KRISTEN DUTA WACANA</option>
                                <option value="CALVIN UNIVERSITY">CALVIN UNIVERSITY</option>
                                <option value="UNIVERSITAS ATMA JAYA YOGYAKARTA">UNIVERSITAS ATMA JAYA YOGYAKARTA</option>
                                <option value="UNIVERSITAS MULTIMEDIA NUSANTARA">UNIVERSITAS MULTIMEDIA NUSANTARA</option>
                                <option value="POLITEKNIK INTERNASIONAL BALI">POLITEKNIK INTERNASIONAL BALI</option>
                                <option value="UNIVERSITAS KRISTEN MARANATHA">UNIVERSITAS KRISTEN MARANATHA</option>
                                <option value="UNIVERSITAS TARUMANAGARA">UNIVERSITAS TARUMANAGARA</option>
                                <option value="UNIVERSITAS KRISTEN SATYA WACANA">UNIVERSITAS KRISTEN SATYA WACANA</option>
                                <option value="UNIVERSITAS KARANGTURI">UNIVERSITAS KARANGTURI</option>
                                <option value="CHALK & TALK">CHALK & TALK</option>
                                <option value="STT ABDIEL">STT ABDIEL</option>
                                <option value="UNTAG JAKARTA">UNTAG JAKARTA</option>
                                <option value="VICTORIA UNIVERSITY SYDNEY">VICTORIA UNIVERSITY SYDNEY</option>
                                <option value="IUP FEB UNDIP">IUP FEB UNDIP</option>
                                <option value="STT KRISTUS ALFA OMEGA">STT KRISTUS ALFA OMEGA</option> --}}
                            </select>
                        </div>
                        <a href="" onclick="this.href='pendaftaran/pilih/'+ document.getElementById('universitas').value + '/' + document.getElementById('kelas').value" class="btn btn-primary mb-3">Filter Semua</a>
                        <a href="" onclick="this.href='pendaftaran/pilihkampus/'+ document.getElementById('universitas').value" class="btn btn-primary mb-3">Filter Per Kampus</a>
                        <a href="" onclick="this.href='pendaftaran/pilihkelas/'+ document.getElementById('kelas').value" class="btn btn-primary mb-3">Filter Per Kelas</a>
                    </div>
                </div>
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
                                <th>Foto</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
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
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    <script>
        var datatable = $('#tablePendaftar').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            searcable: true,
            order: [[1, 'desc']],
            ajax: {
                url: '{!! url()->current() !!}',
            },
            columns: [
                {
                    "data": null,
                    "sortable": false,
                    render: function(data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1
                    }
                },
                { data: 'nama', name: 'nama' },
                { data: 'kelas', name: 'kelas' },
                { data: 'universitas', name: 'universitas' },
                { data: 'noabsen', name: 'noabsen' },
                { data: 'signed', name: 'signed' },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searcable: true,
                    width: '15%'
                },
            ]
        })
    </script>
    <script>
        $(document).ready(function () {
            $('#tablePendaftar').DataTable();
        });
    </script>
@endpush
