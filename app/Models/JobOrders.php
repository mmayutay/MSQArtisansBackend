<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ClientUsers;

class JobOrders extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $primaryKey = 'client_id';
    protected $table = 'job_orders';

    public function client_id()
    {
        return $this->hasOne(ClientUsers::class, 'client_id');
    }
}
