<?php

namespace App\Http\Controllers;

use App\Models\santri;
use Illuminate\Http\Request;

class UangController extends Controller
{
    public function santri()
    {
      

      $santris = santri::all();
        
       return view('admin.santri.index',compact('santris'));
    }

    public function create(){
        return view('admin.santri.buat');
     }

     public function store(Request $request)
     {
        $validasi = $request->validate([
           'Nama_santri' => 'required',
           'kelas' => 'required',
           'saldo' => 'required',
        ]);
        santri::create($validasi);
        return redirect()->route('santri.index');
     }


     public function edit($id)
     {
       $santri = santri::find($id);

       return view('admin.santri.edit',compact('santri'));
     }

     public function update(Request $request, $id)
     {
      $santri = santri::find($id);
      $validasi = $request->validate([
         'Nama_santri' => 'required',
         'kelas' => 'required',
         'saldo' => 'required',
      ]);
      $santri ->update($validasi);
      return redirect()->route('santri.index');
     }

     public function destroy($id)
        {
         $santri = santri::find($id);
         $santri->delete();
         return redirect()->route('santri.index');
        }
        
   }

