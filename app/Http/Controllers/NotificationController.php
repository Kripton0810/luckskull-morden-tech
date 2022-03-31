<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class NotificationController extends Controller
{
    public function sendSmsNotificaition()
    {
        $basic  = new \Vonage\Client\Credentials\Basic('66ca4a20', 'EyNSLAtgHyWIlWA5');
        $client = new \Vonage\Client(new \Vonage\Client\Credentials\Container($basic));
        $response = $client->sms()->send(
            new \Vonage\SMS\Message\SMS("918797601825", "LuckSkull", 'This is a test message')
        );

        $message = $response->current();

        if ($message->getStatus() == 0) {
            echo "The message was sent successfully\n";
        } else {
            echo "The message failed with status: " . $message->getStatus() . "\n";
        }
    }
}
