<?php

namespace App\Models;

use App\Constants\Status;
use App\Traits\Searchable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Searchable , Notifiable;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

     protected $guarded = [];
    protected $hidden = [
        'password', 'remember_token', 'ver_code',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'address' => 'object',
        'kyc_data' => 'object',
        'ver_code_send_at' => 'datetime'
    ];


    public function loginLogs()
    {
        return $this->hasMany(UserLogin::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class)->orderBy('id', 'desc');
    }

    public function deposits()
    {
        return $this->hasMany(Deposit::class)->where('status', '!=', Status::PAYMENT_INITIATE);
    }

    public function withdrawals()
    {
        return $this->hasMany(Withdrawal::class)->where('status', '!=', Status::PAYMENT_INITIATE);
    }

    //mlm
    public function userExtra()
    {
        return $this->hasOne(UserExtra::class);
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    public function referrer()
    {
        return $this->belongsTo(User::class, 'ref_by');
    }

    public function fullname(): Attribute
    {
        return new Attribute(
            get: fn () => $this->firstname . ' ' . $this->lastname,
        );
    }

    // SCOPES
    public function scopeActive($query)
    {
        $query->where('status', Status::USER_ACTIVE)->where('ev', Status::VERIFIED)->where('sv', Status::VERIFIED);
    }

    public function scopeBanned($query)
    {
        $query->where('status', Status::USER_BAN);
    }

    public function scopeEmailUnverified($query)
    {
        $query->where('ev', Status::NO);
    }

    public function scopeMobileUnverified($query)
    {
        $query->where('sv', Status::NO);
    }

    public function scopeKycUnverified($query)
    {
        $query->where('kv', Status::KYC_UNVERIFIED);
    }

    public function scopeKycPending($query)
    {
        $query->where('kv', Status::KYC_PENDING);
    }

    public function scopeEmailVerified($query)
    {
        $query->where('ev', Status::VERIFIED);
    }

    public function scopeMobileVerified($query)
    {
        $query->where('sv', Status::VERIFIED);
    }

    public function scopeWithBalance($query)
    {
        $query->where('balance', '>', 0);
    }

    public function scopePaid($query)
    {
        $query->where('plan_id', '!=', 0);
    }
}
