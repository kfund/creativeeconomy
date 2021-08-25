<?php namespace Kfund\Contact\Components;

use Cms\Classes\ComponentBase;
use Input;
use Mail;

class ContactForm extends ComponentBase
{
    public function componentDetails() {
        return [
            'name' => 'Contact Form',
            'description' => 'Simple contact form'
        ];
    }

    public function onSend() {
        // These variables are available inside the message as Twig

        $vars = ['name' => 'User', 'email' => Input::get('email')];

        Mail::send('kfund.contact::mail.message', $vars, function($message) {

            $message->to('admin@domain.tld', 'Admin Person');
            $message->subject('New message from Creative Economy School');

        });
    }

}