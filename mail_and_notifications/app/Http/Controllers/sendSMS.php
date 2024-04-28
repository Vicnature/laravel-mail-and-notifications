<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\SuccessfulRegistration;

class sendSMS extends Controller
{
    public function byUserModel(){
        $user = User::findOrFail(1);
        $user->notify(new SuccessfulRegistration($user->name));
        return "Message successfully sent to $user->name using the number $user->phone_number";
    }
}
