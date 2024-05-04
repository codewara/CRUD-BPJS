<?php

namespace App\Http\Controllers;
use App\Models\Pasien;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class PasienController extends Controller {
    public function index() {
        $pasien = Pasien::all();
        return view('pasien.index')->with('all_pasien', $pasien);
    }

    public function create() {
        return view("pasien.create");
    }

    public function store(Request $request) {
        $this->validate($request, [
            'Nama' => 'required',
            'NIK' => 'required',
            'Nomor_BPJS' => 'required',
            'Jenis_Kelamin' => 'required',
            'No_Telepon' => 'required',
            'Alamat' => 'required',
            'Tanggal_Lahir' => 'required'
        ]);
        
        $input = $request->all();
        
        Pasien::create($input);
        Session::flash('flash_message', 'Sukses menambahkan data pasien!');
        
        return redirect()->back();
    }
    
    public function show(string $id) {
        $pasien = Pasien::find($id);
        return view('pasien.show')->with('pasien',$pasien);
    }
    
    public function edit(string $id) {
        $pasien = Pasien::find($id);
        return view('pasien.edit')->with('pasien',$pasien);
    }
    
    public function update(Request $request, string $id) {
        $pasien = Pasien::find($id);

        $this->validate($request, [
            'Nama' => 'required',
            'NIK' => 'required',
            'Nomor_BPJS' => 'required',
            'Jenis_Kelamin' => 'required',
            'No_Telepon' => 'required',
            'Alamat' => 'required',
            'Tanggal_Lahir' => 'required'
        ]);
                
        $input = $request->all();
        $pasien->fill($input)->save();
        
        Session::flash('flash_message', 'Sukses memperbarui data pasien!');
        
        return redirect()->back();
    }

    public function destroy(string $id) {
        $pasien = Pasien::find($id);

        $pasien->delete();

        Session::flash('flash_message', 'Sukses menghapus data pasien!');

        return redirect()->route('pasien.index');
    }
}
