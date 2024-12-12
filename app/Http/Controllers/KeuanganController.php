<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class KeuanganController extends Controller
{
    public function loadallsantri()
    {
        $all_santri = User::all();
        return view('santri', compact('all_santri'));
    }

    public function loadaddsantriform()
    {
        return view('add-santri');
    }

    public function addsantri(Request $request)
    {
        $request->validate([
            'Nama_santri' => 'required',
            'kelas' => 'required',
            'uang_yang_dititipkan' => 'required',

        ]);
        try {
            $new_user = new User;
            $new_user->Nama_santri = $request->Nama_santri;
            $new_user->kelas = $request->kelas;
            $new_user->uang_yang_dititipkan = $request->uang_yang_dititipkan;
            $new_user->save();

            return redirect('/keuangan-santri')->with('success', 'data berhasil di tambahkan');
        } catch (\Exception $e) {
            return redirect('/add/santri')->with('fail', $e->getMessage());
        }
    }
    public function Editsantri(Request $request, $id)
    {
        $request->validate([
            'Nama_santri' => 'required',
            'kelas' => 'required',
            'uang_yang_dititipkan' => 'required',

        ]);

        $input = $request->all();
        $data = User::find($id);
        $data->update($input);
        return redirect()->route('index');


        // try {
        //     $update_santri = User::where('id')->update([
        //         'Nama_santri' => $request->Nama_santri,
        //         'kelas' => $request->kelas,
        //         'uang_yang_dititipkan' => $request->uang_yang_dititipkan,
        //     ]);

        //     return redirect('/keuangan-santri')->with('success', 'data berhasil di update');
        // } catch (\Exception $e) {
        //     return redirect('/edit/santri')->with('fail', $e->getMessage());
        // }
    }


    public function Editsantrifrom($id)
    {
        $santri = User::find($id);

        return view('edit-santri', compact('santri'));
    }

    public function Hapussantrifrom($id)
    
    {
        try {
            User::where('id', $id)->delete();
            return redirect('/keuangan-santri')->with('success', 'Data berhasil terhapus');
        } catch (\Exception $e) {
            return redirect('/keuangan-santri')->with('fail', $e->getMessage());
        }
    }
}
