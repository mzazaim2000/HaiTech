<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

      /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $table = 'services';
    protected $date = 'date';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'name',
        'phone',
        'email',
        'company',
        'services',
        'date',
        'time',
        'issue',
        'status',
        'amount',
        'paymentStatus'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function newService() {
        return self::where('status', 'Pending')->get();
    }
}

