<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    
    public function sendSmsNotificaition()
    {
        $basic  = new \Vonage\Client\Credentials\Basic("2459803d", "V5IYfXZuT8icmbPN");
		$client = new \Vonage\Client($basic);
 
        $response = $client->sms()->send(
    new \Vonage\SMS\Message\SMS("8801303024781", BRAND_NAME, 'Your order is received successfully'));

		$message = $response->current();
 
        if ($message->getStatus() == 0) {
			    session()->flash('success',"The message is sent successfully\n");

			    return redirect()->route('seller.pages.index');
				}else{
    				echo "The message failed with status: " . $message->getStatus() . "\n";
					}

  //   	$basic  = new \Vonage\Client\Credentials\Basic("2459803d", "V5IYfXZuT8icmbPN");
		// $client = new \Vonage\Client($basic);
  
		// $message = $client->message()->send([
  //       'to' => '8801303024781',
  //       'from' => 'BRAND_NAME',
  //       'text' => 'Hello from Nexmo'
  //   	]);

	 //    dd('SMS message has been delivered.');




    }
}

