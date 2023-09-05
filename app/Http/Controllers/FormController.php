<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permohonan;
use Validator;
use Carbon;
use PDF;

class FormController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function show(){
        $data = NULL;
        $data['nama'] = NULL;
        $data['no_hp'] = NULL;
        $data['jenis_perkara'] = NULL;
        $data['nomor_perkara'] = NULL;
        $data['nama_berperkara'] = NULL;
        $data['tipe_peliput'] = NULL;
        $data['jurnalis_media_cetak'] = NULL;
        $data['organisasi_instansi'] = NULL;

        return view('form', compact('data'));
    }

    public function check(Request $request)
    {
        $rules_jurnalis = [
            'jurnalis_media_cetak' => 'required'
        ];

        $messages_jurnalis = [
            'jurnalis_media_cetak.required' => 'Mohon untuk mengisi nama Jurnalis Media/ Cetak jika Peliput merupakan Jurnalis.',
        ];

        $rules_lainnya = [
            'organisasi_instansi' => 'required'
        ];

        $messages_lainnya = [
            'organisasi_instansi.required' => 'Mohon untuk mengisi nama Organisasi/Instansi jika Peliput merupakan Organisasi/Instansi.',
        ];

        $data = $request->all();

        if($data['tipe_peliput'] == "jurnalis"){
            $validator = Validator::make($request->all(), $rules_jurnalis, $messages_jurnalis);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput($request->all);
            }
        }

        if($data['tipe_peliput'] == "lainnya"){
            $validator = Validator::make($request->all(), $rules_lainnya, $messages_lainnya);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput($request->all);
            }
        }


        return view('verifikasi', compact('data'));
    }

    public function verify(Request $request){
        $data = $request->all();
        switch ($request->input('action')) {
            case 'edit':
                return view('form')->with('data', $data);
                break;

            case 'print':
                return view('pesan', $data);
                break;
        }
    }

    public function print(Request $request){
        $data = $request->all();
        $pdf = PDF::loadView('pdf', $data);

        return $pdf->download('Surat Izin Meliput.pdf');
    }

    public function preview($data){
        return view('preview')->with('data', $data);
    }

    public function message(){
        return view('pesan');
    }
    
}
