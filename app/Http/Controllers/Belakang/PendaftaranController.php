<?php

namespace App\Http\Controllers\Belakang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Pendaftaran;
use Yajra\DataTables\Facades\DataTables;

class PendaftaranController extends Controller
{
    public function index()
    {
        if(request()->ajax())
        {
            $query = Pendaftaran::query();

            return Datatables::of($query)
                ->addColumn('action', function($item) {
                    return '
                        <div class="btn-group">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle mr-1 mb-1" type="button" data-toggle="dropdown">
                                    Aksi
                                </button>
                                <div class="dropdown-menu">
                                    <form action="' . route('hapus', $item->id) . '" method="POST">
                                        ' . method_field('delete') . csrf_field() . '
                                        <button type="submit" class="dropdown-item text-danger">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    ';
                })
                ->editColumn('signed', function($item) {
                    return $item->signed ? '<img src="'. Storage::url($item->signed) .'" style="max-height: 48px"/>' : '';
                })
                ->rawColumns(['action','photo'])
                ->make();
        }
        return view('pages.admin.pendaftaran.index');
    }

    public function hapus($id)
    {
        $item = Pendaftaran::findOrFail($id);
        $item->delete();

        return redirect()->route('daftar');
    }

    public function pilih($universitas, $kelas)
    {
        $hasil = Pendaftaran::where('universitas', [$universitas])->where('kelas', [$kelas])->get();
        
        return view('pages.admin.pendaftaran.filter', compact('hasil'));
    }

    public function pilihKampus($universitas)
    {
        $hasil = Pendaftaran::where('universitas', [$universitas])->get();
        
        return view('pages.admin.pendaftaran.filter', compact('hasil'));
    }

    public function pilihKelas($kelas)
    {
        $hasil = Pendaftaran::where('kelas', [$kelas])->get();
        
        return view('pages.admin.pendaftaran.filter', compact('hasil'));
    }

    public function sukses()
    {
        return view('pages.depan.sukses');
    }
}
