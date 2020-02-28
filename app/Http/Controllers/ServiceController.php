<?php

namespace App\Http\Controllers;

use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\TaxeRegionaleController;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('prix');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('prix');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $puissance = $request->input('puissance');
        $departement = $request->input('departement');
        $var=app('App\Http\Controllers\TaxeRegionaleController')->showTaxe($departement);
        $montant=$var["montant"];
        $prix=$puissance*$montant+4+2.76;
        $tva=$prix*0.2;
        $montant=$tva+$prix;
        $prix=$prix."€";
        $tva=$tva."€";
        $montant=$montant."€";
        $total=$montant."€";
       $messages= [
            'required'=>'The :attribute field is required'

       ];
       $Validator = Validator::make(
            $request->all(),
            [
                'puissance'=>'required|string',
                'mark'=>'required|string',
            ],
            $messages
       );

       if($Validator->fails()){
           $Response=$Validator->messages();
       }else{
           $Response= ['success'=>$prix,'tva'=>$tva,'montant'=>$montant,'total'=>$total];
       }
       return response()->json($Response,200);
    }

      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function simulator(Request $request)
    {
        $puissance = $request->input('puissance');
        $departement = $request->input('departement');
        $var=app('App\Http\Controllers\TaxeRegionaleController')->showTaxe($departement);
        $montant=$var["montant"];
        $prix=$puissance*$montant+4+2.76;
        $tva=$prix*0.2;
        $montant=$tva+$prix;
        $prix=$prix."€";
        $tva=$tva."€";
        $montant=$montant."€";
        $total=$montant."€";
       $messages= [
            'required'=>'The :attribute field is required'

       ];
       $Validator = Validator::make(
            $request->all(),
            [
                'puissance'=>'required|string',
                'mark'=>'required|string',
            ],
            $messages
       );

       if($Validator->fails()){
           $Response=$Validator->messages();
       }else{
           $Response= ['success'=>$prix,'tva'=>$tva,'montant'=>$montant,'total'=>$total];
       }
       return response()->json($Response,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
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
        //
    }
}
