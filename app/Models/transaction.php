<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Notifications\Notifiable;    
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\ResetPassword as ResetPasswordNotification;
use Illuminate\Notifications\Messages\MailMessage;

class transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'amount',
        'transaction_number',
        'invoice_number',
    ];
}
