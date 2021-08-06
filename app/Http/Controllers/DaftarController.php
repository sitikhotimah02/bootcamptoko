<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Datatanaman;
use Session;

class DaftarController extends Controller
{
    public function index()
    {
        $listtanaman = Datatanaman::all();
        return view('listtanaman.index', ['listtanaman' => $listtanaman]);
    }

    //     if (Session::get('login')) {
    //         $listtanaman = Datatanaman::all();
    //         return view('listtanaman.index', ['listtanaman' => $listtanaman]);
    //     }
    //     else {
    //         return view ('login')->with('error','password atau email anda salah !');
    //     }
    // }

    
    public function create()
    {
        return view('listtanaman.index');
    }

   
    public function store(Request $request)
    {
        // Datatanaman::create($request->all()); 
        // return redirect('/listtanaman') ->with ('status', 'Data berhasil ditambahkan '); 

        $this->validate($request, [
            'nama_tanaman'     => 'required',
            'harga_tanaman'     => 'required',
            'jumlah_stok'   => 'required'
        ]);
    
     
    
        $listtanaman = Datatanaman::create([
            'nama_tanaman'     => $request->nama_tanaman,
            'harga_tanaman'     => $request->harga_tanaman,
            'jumlah_stok'   => $request->jumlah_stok
        ]);
    
        if($listtanaman){
            //redirect dengan pesan sukses
            return redirect()->route('listtanaman.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('listtanaman.index')->with(['error' => 'Data Gagal Disimpan!']);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $listtanaman = Datatanaman::findOrFail($id);
       
        $listtanaman->delete();

        if($listtanaman){
            //redirect dengan pesan sukses
            return redirect()->route('listtanaman.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('listtanaman.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
