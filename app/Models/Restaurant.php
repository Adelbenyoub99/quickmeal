<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Menu;


class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = ['nom_restaurant', 'id_restaurateur', 'restaurant_image', 'note'];

    public function menus()
    {
        return $this->hasMany(Menu::class);
    }
}
