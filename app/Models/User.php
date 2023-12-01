<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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
        'password' => 'hashed',
    ];

    public function stillSmoking(): BelongsToMany
    {
        return $this->belongsToMany(StillSmoking::class, 'still_smoking_users');
    }

    public function startSmoking(): BelongsToMany
    {
        return $this->belongsToMany(StartSmoking::class, 'start_smoking_users');
    }

    public function reasonForStopSmoking(): BelongsToMany
    {
        return $this->belongsToMany(ReasonForStopSmoking::class, 'reason_for_stop_smoking_users');
    }

    public function reasonForCraveSmokings(): BelongsToMany
    {
        return $this->belongsToMany(ReasonForCraveSmoking::class, 'reason_for_crave_smoking_users');
    }

    //    public function cigarette(): BelongsTo
    //    {
    //        return $this->belongsTo(Cigarette::class);
    //    }
    public function cigarette(): BelongsToMany
    {
        return $this->belongsToMany(Cigarette::class, 'cigaretts_users');
    }
}
