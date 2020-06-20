<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Extract extends Model
{
    protected $table = 'extract';

    public function getSomme()
{
    return (($this->sum('nu1'))/($this->sum('nu2'))*100);
}

}
