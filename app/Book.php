<?php
declare(strict_types=1);

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function detail()
    {
        return $this->hasOne('\App\Bookdetail');
    }
}
