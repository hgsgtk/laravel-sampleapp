<?php
declare(strict_types=1);

namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

final /**
 * App\Eloquent\EloquentCustomer
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Eloquent\EloquentCustomer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Eloquent\EloquentCustomer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Eloquent\EloquentCustomer whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Eloquent\EloquentCustomer whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class EloquentCustomer extends Model
{
    protected $table = 'customers';
}