<?php

use Illuminate\Support\Facades\Route;




Route::get('messages',ListsConversationsAndMessages::class)->name('messages');