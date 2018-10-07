<?php
declare(strict_types=1);

namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

final /**
 * App\Eloquent\EloquentCustomerPoint
 *
 * @mixin \Eloquent
 */
class EloquentCustomerPoint extends Model
{
    protected $table = 'customer_points';

    public $timestamps = false;

    public function addPoint(int $customerId, int $point): bool
    {
        return $this->newQuery()
            ->where('customer_id', $customerId)
            ->update([
                $this->getConnection()->raw('point=point+?', $point)
            ]) === 1;
    }
}