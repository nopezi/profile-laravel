<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google\Cloud\Translate\V2\TranslateClient;
use Longman\TelegramBot\Telegram;
use Longman\TelegramBot\Request as Request_telegram;

class TelegramController extends Controller
{

    
    public function __construct()
    {
        // parent::__construct();
        define('API_KEY', '736592923:AAEJ0_zq4SOI-y1BGEpKC9Mt0xAn_raif2s');
        define('BOT_USER', 'Cebol_bot');
    }
    
    
    public function index()
    {

        $bot_api_key  = '736592923:AAEJ0_zq4SOI-y1BGEpKC9Mt0xAn_raif2s';
        $bot_username = 'Cebol_bot';

        $telegram = new Telegram(API_KEY, BOT_USER);

        
        echo "<pre>";
        print_r ($telegram);
        echo "</pre>";
        

    }

    public function hook()
    {

        try {
            // Create Telegram API object
            $telegram = new Telegram(API_KEY, BOT_USER);

            // Handle telegram webhook request
            $telegram->handle();
            $cek = $telegram->useGetUpdatesWithoutDatabase();
            // return response($cek, 200);

        } catch (Longman\TelegramBot\Exception\TelegramException $e) {
            // Silence is golden!
            // log telegram errors
            echo $e->getMessage();
        }


    }

    public function webhook(Request $request)
    {
        
        try {
            // Create Telegram API object
            $telegram = new Telegram(API_KEY, BOT_USER);

            // Set webhook
            $result = $telegram->setWebhook($request->url);
            if ($result->isOk()) {
                echo $result->getDescription();
            }
        } catch (Longman\TelegramBot\Exception\TelegramException $e) {
            // log telegram errors
            // echo $e->getMessage();
        }

    }

    public function kirim_pesan()
    {

        $telegram = new Telegram(API_KEY, BOT_USER);
        $result = Request_telegram::sendMessage([
            'chat_id' => '734229344',
            'text'    => 'Your utf8 text 😜 ...',
        ]);

        return Response($result, 200);

    }
    
}
