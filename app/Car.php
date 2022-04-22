<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'price', 'name','supplier_id'];

    public function supplier(): \Illuminate\Database\Eloquent\Relations\BelongsTo{
        return $this->belongsTo('App\Supplier', 'supplier_id','id');
    }
}
