<?php

namespace App\Mail;
use App\Simulation;
use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Symfony\Component\HttpFoundation\Cookie;

class SimulatorMail extends Mailable
{
	use Queueable, SerializesModels;
	public $request;
	/**
     * Create a new message instance.
     *
     * @return void
     */
	public function __construct(Request $request)
	{


		$this->request=$request;


	}

	/**
     * Build the message.
     *
     * @return $this
     */
	public function build()
	{
		$email=Simulation::where('email',$this->request->email);
		if (empty($email)) {
			Simulation::create([
        'name' => $this->request->name,
        'email' => $this->request->email,
        'degree' => $this->request->degree,
      ]);

		}
	

		return $this->subject('Tai2tai Simulation')
			->from('contact@tai2tai.com')
			->to($this->request->email)
			->view('email.simulatorMail')
			->with([
				'request' => $this->request->all(),

			]);
	}
}
