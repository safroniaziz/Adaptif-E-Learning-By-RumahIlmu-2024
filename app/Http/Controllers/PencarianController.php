<?php

namespace App\Http\Controllers;

use App\Models\BankCapaianLulusan;
use Illuminate\Http\Request;

class PencarianController extends Controller
{
    public function cariCapaianLulusanId(Request $request){
        return BankCapaianLulusan::findOrFail($request->capaianLulusanId);
    }
}
