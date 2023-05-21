<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Email extends Model
{
    use SoftDeletes;
    use Notifiable;
    protected $fillable = ['email_id','subject','email_message','user_id','status','deleted_userid'];

    protected $dates = ['deleted_at'];

    public function senderName()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function receiverName()
    {
        return $this->belongsTo(User::class, 'email_id', 'email');
    }
}
