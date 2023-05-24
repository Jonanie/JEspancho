<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Pregnant extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attribute that are mass assignable.
     * 
     *  @var array<int, string>
     */
    protected $fillable = [
        'PregnantID',
        'FirstName',
        'MiddleName',
        'LastName',
        'Height',
        'BirthDate',
        'Email',
        'Blood',
        'Mobile',
        'Address',
        'BloodPressure',
        'Weight',
        'updated_at'
    ];

    protected $table = 'pregnant';
    protected $primaryKey = 'PregnantID';
}
