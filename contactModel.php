<?php
class Contact{
    public $name;
    public $subject;
    public $email;
    public $message;
    public function get_name() {
        return $this->name;
    
    }
public function send(){
    // echo "sending";
}
 public function print_details(){
echo "$this->name ";
echo "$this->subject";
echo "$this->email";
echo "$this->message";
      


 }

    public function __construct($name,$subject,$email,$message){
        $this->name=$name;
        $this->name=$subject;
        $this->name=$email;
        $this->name=$message;
        // echo "object created";
    }

    // $name-> get_name('name');
    // $subject->get_name('subject');
}


$Contact_obj = new Contact("dedan","web2","dedan@gmail.com","hello");
   $Contact_obj-> send();
   $Contact_obj-> print_details();
   





?>
