<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\JobOrders;

class ClientUsers extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $primaryKey = 'client_id';
    protected $table = 'client_users';

    public function job_orders()
    {
        return $this->belongsTo(JobOrders::class, 'client_id');
    }
}
