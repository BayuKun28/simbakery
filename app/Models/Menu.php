<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    public $table = 'menu';
    protected $fillable = [
        'name',
        'url',
        'parent_id',
        'icon',
        'ord',
    ];

    public function submenu(){
        return $this->hasMany(Menu::class, 'parent_id');
    }
}
