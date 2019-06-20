<?php 
namespace App\Classes;
use \App\Classes\Config;
use PHPMailer\PHPMailer\PHPMailer;
class Email {
    private $email;
    private $body;
    private $fromName;
    private $to;
    private $from;
    private $addAddress;
    private $subject;
    private $message;

    public function setEmail($email){
        $this->email = $email;
    }

    public function setBody($body){
        $this->body = $body;
    }

    public function setFromAddress($fromName){
        $this->fromName = $fromName  ;
    }

    public function setTo($to){
        $this->to = $to;
    }

    public function setFromFrom($from){
        $this->from = $from;
    }

    public function setCc($addAddress){
        $this->addAddress = $addAddress;
    }

    public function setSubject($subject){
        $this->subject = $subject;
    }

    public function setMessage( $message ){
        $this->message = $message;
    }
    
    public function sendEmail(){    
        $mail = new PHPMailer();
        $mail->IsSmtp();
        $mail->SMTPDebug = Config::$config['smtp']['SMTPDebug'];
        $mail->Host = Config::$config['smtp']['host'];
        $mail->Port = Config::$config['smtp']['port'];
        $mail->Charset = Config::$config['smtp']['charset'];
        // Se method não informar email, usar email do site
        if( !empty($this->from)){
            $mail->setFrom($this->from);
        }else{
            $mail->setFrom(Config::$config['site']['from']);
        }
        $mail->SMTPsecure = Config::$config['smtp']['SMTPsecure'];
        $mail->SMTPAuth = true;
        $mail->Username = Config::$config['smtp']['username'];
        $mail->Password = Config::$config['smtp']['password'];
        if( !empty($this->to)){
            $mail->AddAddress($this->to);
        }else{
            $mail->AddAddress(Config::$config['site']['from']);
        }
        if( !empty($this->addAddress)){
            $mail->AddAddress($this->addAddress);
        }
        $mail->Subject = $this->subject;
        //Read an HTML message body from an external file, convert referenced images to embedded,
        //convert HTML into a basic plain-text alternative body
        // $mail->msgHTML(file_get_contents('contents.html'), __DIR__);
        $mail->IsHtml();
        // Se method não informar nome, usar nome do site ou empresa
        if( !empty($this->fromName)){
            $mail->FromName = $this->fromName;
        }else{
            $mail->FromName =  Config::$config['site']['name'] ;
        }
        $mail->AltBody = "Your email client needs to be HTML compliant";
        $mail->MsgHTML($this->body);
        //dd($mail->ErrorInfo);

        return  $mail->Send();

    }

}