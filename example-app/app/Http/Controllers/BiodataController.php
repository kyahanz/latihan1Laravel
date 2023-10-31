<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function showBiodata()
    {
        $biodata = $this->getBiodata();
        return view('content', compact('biodata'));
    }


    public function getBiodata()
    {
        $biodata = [
            'nama' => 'Johan',
            'usia' => 19,
            'minat' => ['Masak', 'Makan Hasil Masakan', 'Tidur', 'Ngorok'],
        ];

        return $biodata;
    }
}
