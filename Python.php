<?php

require 'vendor/autoload.php';

use Telegram\Bot\Api;

// Masukkan token bot Anda
$telegram = new Api('8185616856:AAHyef2HjytzmgyoNw1vbGJsclsBA7W3TVs');

// Ambil pembaruan dari bot
$updates = $telegram->getUpdates();

foreach ($updates as $update) {
    $chatId = $update['message']['chat']['id'];
    $message = $update['message']['text'];

    // Balas pesan
    if ($message === '/start') {
        $telegram->sendMessage([
            'chat_id' => $chatId,
            'text' => 'Selamat datang di bot saya!'
        ]);
    }
}