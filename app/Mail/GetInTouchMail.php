<?php

namespace App\Mail;
use App\Simulation;
use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Symfony\Component\HttpFoundation\Cookie;

class GetInTouchMail extends Mailable
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



		return $this->subject('Tai2tai contact')
			->from('contact@tai2tai.com')
			->to($this->request->email)
			->view('email.getInTouchMail')
			->with([
				'request' => $this->request->all(),

			]);
	}
}
