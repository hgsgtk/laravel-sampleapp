<?php
declare(strict_types=1);

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Bookdetail
 *
 * @property int $id
 * @property string $isbn
 * @property string $published_date
 * @property int $price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Author $author
 * @property-read \App\Book $book
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Bookdetail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Bookdetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Bookdetail whereIsbn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Bookdetail wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Bookdetail wherePublishedDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Bookdetail whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
