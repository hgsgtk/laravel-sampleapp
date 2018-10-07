<?php
declare(strict_types=1);

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookdetail extends Model
{
    public function book()
    {
        return $this->belongsTo('\App\Book');
    }

    public function author()
    {
        return $this->belongsTo('\App\Author');
    }
}
