<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Recipient extends Model
{
    
    //
    use Notifiable;
    protected $recipient;
    protected $email;

    public function __construct()
    {
       
    }
}
