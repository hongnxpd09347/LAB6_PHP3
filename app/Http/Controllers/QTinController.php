<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tin;

class QTinController extends Controller
{
    public function index()
    {
        $tin = Tin::all();
        return view('tin.danhsach', compact('tin'));
    }

    public function create()
    {
        return view('tin.them');
    }

    public function store(Request $request)
    {
        $tin = new Tin;
        $tin->tieuDe = $request->tieuDe;
        $tin->tomTat = $request->tomTat;
        $tin->urlHinh = $request->urlHinh;
        $tin->idLT = $request->idLT;
        $tin->save();

        return redirect('/tin');
    }

    public function edit($id)
    {
        $tin = Tin::find($id);
        return view('tin.capnhattin', compact('tin'));
    }

    public function update(Request $request, $id)
    {
        $tin = Tin::find($id);
        $tin->tieuDe = $request->tieuDe;
        $tin->tomTat = $request->tomTat;
        $tin->urlHinh = $request->urlHinh;
        $tin->idLT = $request->idLT;
        $tin->save();

        return redirect('/tin');
    }

    public function destroy($id)
    {
        $tin = Tin::find($id);
        $tin->delete();
        return redirect('/tin');
    }
}
