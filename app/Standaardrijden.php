<?php
//
// Begin code van Wouter
//

namespace App;

use Illuminate\Database\Eloquent\Model;

class standaardrijden extends Model
{
  public function standaardrijden()
  {
    return $this->belongsTo('App\Gilde');
  }

  public function vraag()
  {
    return $this->belongsTo('App\Vraag');
  }

    protected $table = 'standaardrijden';
    protected $fillable = [
        'NBFS', 'vraag_id', 'antwoord',
    ];
}

//
// Einde code van Wouter
//
