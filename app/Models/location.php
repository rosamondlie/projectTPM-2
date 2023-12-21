<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class location extends Model
{
    use HasFactory;
    protected $fillable = [
    'Location_name',
    'Location_regency',
    'Location_province'];

    public function Restaurant():HasMany{
        return $this->hasMany(location::class);
    }
}
