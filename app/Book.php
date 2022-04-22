<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'book_title', 'book_descr', 'book_price', 'book_image', 'supplier_id'];

    public function supplier(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\Supplier', 'supplier_id', 'id');
    }
}
