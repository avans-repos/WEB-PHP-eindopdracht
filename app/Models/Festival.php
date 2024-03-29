<?php

namespace App\Models;

use App\Models\Common\IOrderable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Festival extends Model
{
    use HasFactory;

    public function festivalTickets() {
        return $this->hasMany(FestivalTicketUser::class);
    }
}
