<?php
declare(strict_types=1);

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Author
 *
 * @property int $id
 * @property string $name
 * @property string $kana
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Book[] $books
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\Author onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Author whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Author whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Author whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Author whereKana($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Author whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Author whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Author withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Author withoutTrashed()
 * @mixin \Eloquent
 */
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
