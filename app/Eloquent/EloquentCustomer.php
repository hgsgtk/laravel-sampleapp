<?php
declare(strict_types=1);

namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

final class EloquentCustomer extends Model
{
    protected $table = 'customers';
}