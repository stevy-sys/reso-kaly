<?php

use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/
Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    // dump('auth');
    return (int) $user->id === (int) $id;
});

Broadcast::channel('DemoChannel-{id}', function ($user, $id) {
    // dump('channel');
    
    // return (int) $user->id === (int) $id;
    return true ;
});

Broadcast::channel('Conversation-{id_conversation}', function ($user, $id_conversation) {
    return true ;
});
