<?php
declare(strict_types=1);

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Author extends Model
{
    use SoftDeletes;

    public function books()
    {
        return $this->hasMany('\App\Book');
    }

    public function getKanaAttribute(string $value): string
    {
        return mb_convert_kana($value, 'k');
    }

    public function setKanaAttribute(string $value): string
    {
        $this->attributes['kana'] = mb_convert_kana($value, 'kv');
    }
}
