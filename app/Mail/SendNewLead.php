<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Lead;

class SendNewLead extends Mailable
{
  use Queueable, SerializesModels;

  public $lead;


  public function __construct(Lead $lead)
  {
    $this->lead = $lead;
  }


  public function build()
  {
    return $this->view('mail.lead_mail');
  }
}
