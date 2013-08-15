<?php


class Controller_Twilio_Escape extends Controller
{

	public function action_index()
	{
       return Response::forge(View::forge('twilio/escape/index'));   
	}

	public function action_complete()
	{
      
            $data = array();     
            //$data['tell']   = Input::post('tell');
            $data['time']     = Input::post('time');
            $data['type']     = Input::post('type');
      
		return Response::forge(View::forge('twilio/escape/complete',$data));
	}
  
  	public function action_call($time,$type)
	{

      sleep($time*60);
      $url = "twilio/escape/twiml/$type";
    
      $call = Twilio\Twilio::request('MakeCall');
      $response = $call->create(array(
      'To' => '+8180xxxxxxxx',
      'From' => '+8150xxxxxxxx',
      'Url' => Uri::create($url),

      )); 
      
       exit();
	}

    
    public function action_twiml($type)
    {
		switch ($type) {
			case work:
				$message = "はやく会議から脱出してください";
				break;
			case party:
				$message = "はやく飲み会から脱出してください";
				break;
			default:
				$message = "はやく脱出してください";
        }
      
        $twiml = Twilio\Twilio::twiml();
        $twiml->say($message)->pause('', array('length' => '5'));
        return $twiml->render();
     
    }
  
}
