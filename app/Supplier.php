<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'name','description',
    ];

    public function books(): \Illuminate\Database\Eloquent\Relations\HasMany
    {return $this->hasMany ('App\Book');
    }

}
