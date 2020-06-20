<?php

namespace App\Http\Controllers;
use DB;
use Input;
use Auth;

use Illuminate\Http\Request;



use App\Extract;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
     //   dd($request->all());
        $annee = Extract::distinct()->select('S_LAN')->orderBy('S_LAN')->get();
        $mois = Extract::distinct()->select('S_TEL')->orderBy('S_TEL')->get();

        

        return view('home',compact('annee'));
    }

    public function showMois(Request $request,$annee)
    {
        if (!$request->annee) {
            $html = '<option value="" >'.trans('mois').'</option>';
        } else {
            $html = '<option  value="all">tous les mois</option>';
            $annee =  DB::table('extract')
            ->select('S_TEL')
            ->where('S_LAN','=',$request->annee)
            ->distinct('S_TEL')
            ->get();
            foreach ($annee as $m) {
              
                $html .= '
                <option  value="'.$m->S_TEL.'">'.$m->S_TEL.'</option>
                ';
                
                
            }
    }
    return response()->json(['html' => $html]);
}

public function showSemaine(Request $request,$mois,$annee)
    {
        if (!$request->mois) {
            $html = '<option value="" >'.trans('semaine').'</option>';
        } else {
            $html = '<option  value="all">toutes les semaines</option>';
            $mois =  DB::table('extract')
            ->select('SEM')
            ->where('S_LAN','=',$request->annee)
            ->where('S_TEL','=',$request->mois)
            ->distinct('SEM')
            ->orderby('SEM')
            ->get();
            foreach ($mois as $s) {
              
                $html .= '
                <option  value="'.$s->SEM.'">'.$s->SEM.'</option>
                ';
                
                
            }
    }
    return response()->json(['html' => $html]);
}

public function showJours(Request $request,$mois,$annee,$semaine)
    {
        if (!$request->mois) {
            $html = '<option value="" >'.trans('jour').'</option>';
        } else {
            $html = '<option  value="all">tous les jours</option>';
            $data =  DB::table('extract')
            ->select('S_ACOD','S_LAN','S_TEL')
            ->where('S_LAN','=',$request->annee)
            ->where('S_TEL','=',$request->mois)
            ->where('SEM','=',$semaine)
            ->distinct('S_ACOD')
            ->orderby('S_ACOD')
            ->get();
         
            foreach ($data as $d) {
              
                $html .= '
                <option  value="'.$d->S_ACOD.'">'.$d->S_ACOD.'</option>
                ';
                
                
            }
    }
    return response()->json(['html' => $html]);
}


public function GetData (Request $request)
{       
   $pjt = Auth::user()->pjt;
   $typo = $request->typo ;
   $annee = $request->annee;
   $mois = $request->mois;
   $semaine = $request->semaine;
   $jour = $request->jour;

   
        if( ($annee == "all" && $typo == "all") || ($jour == "all" && $mois == "all" && $semaine == "all" && $annee == "all" && $typo == "all" ) ){   
        $resulat = Extract::count();
        }
    if($pjt != "all") {
        $resulat = Extract::where('S1',$pjt)->count();
    }
    if($pjt != "all" && $typo != "all") {
        $resulat = Extract::where('S1','=',$pjt)
        ->where('S2','=',$typo)
        ->count();
    }
    if($pjt != "all" && $typo != "all" && $annee != "all") {
        $resulat = Extract::where('S1','=',$pjt)
        ->where('S2','=',$typo)
        ->where('S_LAN','=',$annee)
        ->count();
    }
    if($pjt != "all" && $typo != "all" && $annee != "all" && $mois != "all") {
        $resulat = Extract::where('S1','=',$pjt)
        ->where('S2','=',$typo)
        ->where('S_LAN','=',$annee)
        ->where('S_TEL','=',$mois)
        ->count();
    }
    if($pjt != "all" && $typo != "all" && $annee != "all" && $mois != "all" && $semaine != "all" ) {
        $resulat = Extract::where('S1','=',$pjt)
        ->where('S2','=',$typo)
        ->where('S_LAN','=',$annee)
        ->where('S_TEL','=',$mois)
        ->where('SEM','=',$semaine)
        ->count();
    }
    if($pjt != "all" && $typo != "all" && $annee != "all" && $mois != "all" && $semaine != "all" && $jour != "all" ) {
        $resulat = Extract::where('S1','=',$pjt)
        ->where('S2','=',$typo)
        ->where('S_LAN','=',$annee)
        ->where('S_TEL','=',$mois)
        ->where('SEM','=',$semaine)
        ->where('s_acod','=',$semaine)
        ->count();
    }

        dd($resulat,$pjt );
      
}



}
