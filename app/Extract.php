<?php

namespace App;
use DB;

use Illuminate\Database\Eloquent\Model;

class Extract extends Model
{
    protected $table = 'extract';

    public function getSomme()
{
    return (($this->sum('nu1'))/($this->sum('nu2'))*100);
}


public function scopeSelection($query)
{
    return $query->select(array( DB::raw('count(*) as `enreg_nbr`')));
}

public function scopeSelectionB2s($query)
{
    return $query->select(array( DB::raw('count(*) as `enreg_nbr_b2s`')))->whereIn('s1', ['B2S', 'MAISON']);
}
public function scopeNoteB2s($query)
{
    return $query->select(array(DB::raw('(SUM(nu1)/SUM(nu2))*100 as `Note`')))->whereIn('s1', ['B2S', 'MAISON']);
}
public function  scopeNote($query)
{
    return $query->select(array(DB::raw('(SUM(nu1)/SUM(nu2))*100 as `NoteB2s`')));
}

public function  scopeVal($query)
{
    return $query->select(array( DB::raw('count(*) as `val`')))->Where('NU3','>=',85);
}

public function  scopeValBs2($query)
{
    return $query->select(array( DB::raw('count(*) as `valB2s`')))->Where('NU3','>=',85)->whereIn('s1', ['B2S', 'MAISON']);
}



public function scopePjt($query, $pjt="all")
{
    if ($pjt !== 'all') {
    return $query->where('S1', $pjt);
    }
    return $query;

}

public function scopeTypo($filter, $pjt="all", $typo="all")
{

    if ($typo !== "all") {
        return $filter->where(function($query) use ($pjt, $typo) {
            $query->where('S1', $pjt)->Where('S2', $typo);
        });
    }

    return $filter->where('S1', $pjt)->where('S2', $typo);

}


public function scopeAnnee($filter, $pjt="all", $typo="all", $annee = "all")
{
    if ($annee !== "all") {
        return $filter->where(function($query) use ($pjt,$typo, $annee) {
            $query->where('S1', $pjt)->where('S2', $typo)->Where('S_LAN', $annee);
        });
    }

    return $filter->where('S1', $pjt)->where('S2', $typo);
}


public function scopeMois($filter, $pjt="all", $typo="all", $annee = "all",$mois= "all")
{
    if ($mois !== "all") {
        return $filter->where(function($query) use ($pjt,$typo, $annee,$mois) {
            $query->where('S1', $pjt)->where('S2', $typo)->Where('S_LAN', $annee)->Where('S_TEL', $mois);
        });
    }

    return $filter->where('S1', $pjt)->where('S2', $typo)->Where('S_LAN', $annee);
}


public function scopeSemaine($filter,$pjt="all", $typo="all", $annee = "all",$mois= "all",$semaine="all")
{
    if ($semaine !== "all") {
        return $filter->where(function($query) use ($pjt,$typo, $annee,$mois,$semaine) {
            $query->where('S1', $pjt)->where('S2', $typo)->Where('S_LAN', $annee)->Where('S_TEL', $mois)->where('SEM', $semaine);
        });
    }

    return $filter->where('S1', $pjt)->where('S2', $typo)->Where('S_LAN', $annee)->Where('S_TEL', $mois);
}


public function scopeJour($filter, $pjt="all", $typo, $annee = "all",$mois= "all",$semaine="all",$jour="all")
{
    if ($jour !== "all") {
        return $filter->where(function($query) use ($pjt,$typo, $annee,$mois,$semaine,$jour) {
            $query->where('S1', $pjt)->where('S2', $typo)->Where('S_LAN', $annee)->Where('S_TEL', $mois)->where('SEM', $semaine)->where('s_acod', $jour);
        });
    }

    return $filter->where('S1', $pjt)->where('S2', $typo)->Where('S_LAN', $annee)->Where('S_TEL', $mois)->where('SEM', $semaine);
}






}
