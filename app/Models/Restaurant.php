<?php

namespace App\Models;

use App\Models\Common\IBuyable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    public $Reservations;

    public function Buy($Reservations)
    {
        // TODO: Implement Buy() method.
    }
}
