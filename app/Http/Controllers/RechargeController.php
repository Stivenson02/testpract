<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RechargeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('recharge.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recharge.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $response=$this->call_api($data);

        return view('recharge.show', [
            'data_respon' => $response
        ]);

    }

    private function call_api($data)
    {
        $mount =(intval($data["amount"]));
        $jsonAdicional= $data["operator"] == "fc" ? ["idPre"=>"99694264"] : "";
        $response = Http::post('https://recargas.practisistemas.com/api_test/pracRec', [
            'idcomercio' => 1425,
            'claveventa' => 1234,
            'idtrans' => 1,
            'celular' => $data["phone"],
            'operador' => $data["operator"],
            'valor' => $mount,
            'jsonAdicional' => $jsonAdicional
        ]);
        return $response->json();
    }
}
