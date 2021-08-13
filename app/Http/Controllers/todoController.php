<?php

namespace App\Http\Controllers;

use App\Models\Todos; //File Model
use Illuminate\Http\Request;

class todoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    { }

    public function index()
    {
        //menampilkan seluruh data
        //berikan respon berupa data(json)
        $data = Todos::all();
        return response($data);
    }
    public function show($id)
    {
        //variabel data mencari id, kemudian ambil id
        //berikan respon berupa data yang berdasarkan id
        $data = Todos::where('id', $id)->get();
        return response($data);
    }
    public function store(Request $request)
    {
        //inisiasi variabel data
        //variabel data melakukan request input berupa field dalam table
        //activity dan description
        $data = new Todos();
        $data->activity = $request->input('activity');
        $data->description = $request->input('description');
        $data->save();

        return response('Berhasil Tambah Data');
    }
    public function update(Request $request, $id)
    {
        //variabel data mencari id, kemudian ambil id yang ingin diubah
        //variabel data melakukan request input berupa field table
        //data disimpan
        $data = Todos::where('id', $id)->first();
        $data->activity = $request->input('activity');
        $data->description = $request->input('description');
        $data->save();

        return response('Berhasil Merubah Data');
    }

    public function destroy($id)
    {
        //variabel data mencari id, kemudian mengambil id
        //menghapus id yang didapatkan
        $data = Todos::where('id', $id)->first();
        $data->delete();

        return response('Berhasil Menghapus Data');
    }
}