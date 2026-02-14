<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerMessage extends Model
{
    use HasFactory;
    protected $table = 't_messages';
    protected $fillable  = ['customer_name', 'customer_email', 'subject', 'message', 'send_mail'];
}
