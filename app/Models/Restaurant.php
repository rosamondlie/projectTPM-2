<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Restaurant extends Model
{
    use HasFactory;

    protected $table = 'Restaurant';
    
    protected $fillable = ['Restaurant_Name',
    'location_id',
    'Rate',
    'Reviews',
    'Restaurant_image_path'];

    public function location():BelongsTo{
        return $this->belongsTo(location::class);
    }
}
