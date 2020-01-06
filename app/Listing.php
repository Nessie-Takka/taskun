<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    //Cardsモデル-cardsのデータベースと関連付ける
    //リスト一つに対し、カードは複数あるのでhasMany
    public function cards(){
        
        return $this->hasMany('App\Card');
    }
}
