<?php 
namespace Acme\Classes;

class Email extends \PHPMailer{
    private $email;
    private $body;
    private $fromAddress;
    private $fromName;
    private $to;
    private $copy;
    private $subject;
    private $message;

    public function setEmail( $email ){
        $this->email = $email;
    }

    public function setBody( $body ){
        $this->body = $body;
    }

    public function setFromAddress( $fromAddress ){
        $this->fromAddress = $fromAddress;
    }

    public function setFromName( $fromName ){
        $this->fromName = $fromName;
    }

    public function setTo( $to ){
        $this->to = $to;
    }

    public function setCopy( $copy ){
        $this->copy = $copy;
    }

    public function setSubject( $subject ){
        $this->subject = $subject;
    }

    public function setMessage( $message ){
        $this->message = $message;
    }
    
    public function sendEmail(){
        $this->charset = 'UTF-8';
        $this->SMTPsecure = 'ssl';
        $this->IsSmtp();
        $this->Host = '';
        $this->Port = '';
        $this->SMTPAuth = true;
        $this->Username = '';
        $this->Password = '';
        $this->IsHtml();
        $this->FromName = $this->fromName;
        $this->AddAddress( $this->fromAddress );
        
        $copy = $this->copy;
        if( !empty( $copy ) ){
            $this->AddAddress( $copy );
        }

        $this->Subject = $this->subject;
        $this->AltBody = "Your email client needs to be HTML compliant";
        $this->MsgHTML( $this->body );

        if ( $this->Send() ) {
            return true;
        } else {
            return false;
        }

    }

}
