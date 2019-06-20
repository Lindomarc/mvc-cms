<?php
namespace App\Classes;

class SendEmail{

    private $email;
    private $data;

    public function __construct(Email $email){
        $this->email = $email;
    }

    public function data(array $data){
         $this->data = $data;
    }

    public function send(){
        
        $this->email->setSubject($this->data['subject']);
        $this->email->setFromFrom($this->data['from']);
        $this->email->setTo($this->data['to']);
        $this->email->setBody($this->data['message']);

        return $this->email->sendEmail();

    }



}