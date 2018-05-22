<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendContact extends Mailable
{
    use Queueable, SerializesModels;
    /*private $password_gen_hash;
    private $clientName;*/
    private $name;
    private $phone;
    private $email;
    private $note;
    private $path;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        /*$this->password_gen_hash = $password_gen_hash;
        $this->clientName = $clientName;*/
        $this->name = $data['name'];
        $this->phone = $data['phone'];
        $this->email = $data['email'];
        $this->note = $data['note'];
        $this->path = $data['path'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data = [
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email,
            'note' => $this->note,
            'path' => $this->path
        ];

        return $this->from(env('MAIL_USERNAME'), env('MAIL_SENDER'))
            ->subject('Khách hàng gửi file')
            ->view('emails.send_contact', $data);
    }
}
