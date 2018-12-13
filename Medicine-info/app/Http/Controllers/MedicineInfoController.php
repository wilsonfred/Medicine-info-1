<?php

namespace App\Http\Controllers;

use App\Drug;
use Illuminate\Http\Request;
use Validator;

class MedicineInfoController extends Controller
{
    public function ShowData()
    {
        $drug = Drug::paginate(8);
        return view('MedicineInfo',compact('drug'));
    }

    public function searchProduct(Request $request)
    {   
        $drug = Drug::where('Name','LIKE','%'.$request->search.'%')->paginate(8);
        return view('MedicineInfo',compact('drug'));
    }

    public function ShowDetail($Id)
    {
        $drug = Drug::find($Id);
        return view('Detail',compact('drug'));
    }

    public function ifBlade()
    {
        //validasi bila name, avgPrice, dan radiobutton harus diisi

        $isShow = 'true';
        return view('compare',compact('isShow'));
    }
}
