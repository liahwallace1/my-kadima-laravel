<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
  protected $table = 'games';
  protected $fillable = [
    'date_played', 'distance', 'game_type', 'volley_total', 'location_id'
  ];

  public function game_user()
  {
    return $this->hasMany('App\GameUser');
  }

  public function users()
  {
    return $this->hasMany('App\User');
  }

  public function location()
  {
    return $this->belongsTo('App\Location');
  }
}
