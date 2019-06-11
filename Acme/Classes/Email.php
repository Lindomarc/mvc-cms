<?php 
namespace Acme\Classes;
use \App\Config\EmailConfig as EmailConfig;
use PHPMailer\PHPMailer\PHPMailer as PHPMailer;
class Email {
    private $email;
    private $body;
    private $fromName;
    private $to;
    private $from;
    private $addAddress;
    private $subject;
    private $message;

    public function setEmail( $email ){
        $this->email = $email;
    }

    public function setBody( $body ){
        $this->body = $body;
    }

    public function setFromAddress( $fromName ){
        $this->fromName = $fromName  ;
    }

    public function setTo( $to ){
        $this->to = $to;
    }

    public function setFromFrom( $from ){
        $this->from = $from;
    }

    public function setCc( $addAddress ){
        $this->addAddress = $addAddress;
    }

    public function setSubject( $subject ){
        $this->subject = $subject;
    }

    public function setMessage( $message ){
        $this->message = $message;
    }
    
    public function sendEmail(){    
        $emailConfig = new EmailConfig();
        $mail = new PHPMailer();
        $mail->IsSmtp();
        //Enable SMTP debugging
        // 0 = off (for production use)
        // 1 = client messages
        // 2 = client and server messages
        // $this->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->SMTPDebug = 2;
        $mail->Host = $emailConfig->smtp['host'];
        $mail->Port = $emailConfig->smtp['port'];
        $mail->Charset = $emailConfig->smtp['charset'];
        // Se method não informar email, usar email do site
        if( !empty( $this->from ) ){
            $mail->setFrom( $this->from );
        }else{
            $mail->setFrom( $emailConfig->site['from'] );
        }
        $mail->SMTPsecure = 'ssl';
        $mail->SMTPAuth = true;
        $mail->Username = $emailConfig->smtp['username'];
        $mail->Password = $emailConfig->smtp['password'];
        if( !empty( $this->to ) ){
            $mail->AddAddress( $this->to );
        }else{
            $mail->AddAddress( $emailConfig->site['from']  );
        }
        if( !empty( $this->addAddress ) ){
            $mail->AddAddress( $this->addAddress );
        }
        $mail->Subject = $this->subject;
        //Read an HTML message body from an external file, convert referenced images to embedded,
        //convert HTML into a basic plain-text alternative body
        // $mail->msgHTML(file_get_contents('contents.html'), __DIR__);
        $mail->IsHtml();
        // Se method não informar nome, usar nome do site ou empresa
        if( !empty( $this->fromName ) ){
            $mail->FromName = $this->fromName;
        }else{
            //TODO: cofigurar nome do site aqui
            $mail->FromName =  'Configurar nome do site aqui' ;
        }
        $mail->AltBody = "Your email client needs to be HTML compliant";
        $mail->MsgHTML( $this->body );
        if ( $mail->Send() ) {
            return true;    
        } else {
            return false;
        }
    }

}
