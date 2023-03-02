<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CalligraphyCategory extends Model
{
    use HasFactory;
    protected $primaryKey = 'category_id';
    protected $table = 'calligraphy_categories';
    protected $fillable = ['category_name','category_description'];

    public function calligraphyStyle(): HasMany
    {
        return $this->hasMany(CalligraphyStyle::class,'category_id');
    }

}
