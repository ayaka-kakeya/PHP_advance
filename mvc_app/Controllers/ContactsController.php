<?php
require_once ROOT_PATH.'Controllers/Controller.php';
require_once ROOT_PATH. 'Models/Contact.php';


class ContactsController extends Controller
{
    public function Index(){
        $contact = new Contact();
        $errorMessages = $_SESSION['errorMessages'] ?? [];
        $post = $_SESSION['post'] ?? [];
        $_SESSION['errorMessages'] = [];
        $_SESSION['post'] = [];

        
        $list = $contact->get_list();


    $this->view('contact/Index',['errorMessages' => $errorMessages, 'post' => $post, 'list'=>$list]);
    }

    public function check(){
        $referer = $_SERVER['HTTP_REFERER'];
        $url = 'http://localhost/contact/Index';
        if(!strstr($referer,$url)){
        
            $errorMessages = [];

            if (empty($_POST['name'])){
                $errorMessages['name']='氏名を入力してください。';
            }else{
                if(10 < mb_strlen($_POST['name'],'UTF-8')){
                    $errorMessages['name']='氏名は10文字以内で入力してください。'; 
                }
            }
            
            if (empty($_POST['kana'])){
                $errorMessages['kana']='フリガナを入力してください。';
            }else{
                if(10 < mb_strlen($_POST['kana'],'UTF-8')){
                    $errorMessages['kana']='フリガナは10文字以内で入力してください。'; 
                }
            }

            if(!empty($_POST['tel'])){
                if (!preg_match('/^0[0-9]{9,10}\z/',$_POST['tel'])){
                    $errorMessages['tel']='電話番号の形式を確認してください。';
                }
            }

            if (empty($_POST['email'])){
                $errorMessages['email']='メールアドレスを入力してください。';
            }else{
                if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
                    $errorMessages['email']='メールアドレスの形式を確認してください。';
                }
            }

            if (empty($_POST['body'])){
                $errorMessages['body']='お問い合わせ内容を入力してください。';
            }

            
            if (!empty($errorMessages)){
                //バリデーション失敗
                $_SESSION['errorMessages']=$errorMessages;
                $_SESSION['post']=$_POST;
                header('Location:/contact/index');
            }else{
                $toke_byte = openssl_random_pseudo_bytes(16);
                $csrf_token = bin2hex($toke_byte);

                $_SESSION['csrf_token'] = $csrf_token;
                
                $name=htmlspecialchars($_POST['name']);
                $kana=htmlspecialchars($_POST['kana']);
                $tel=htmlspecialchars($_POST['tel']);
                $email=htmlspecialchars($_POST['email']);
                $body=htmlspecialchars($_POST['body']);
                $this->view('contact/check',['csrf_token' => $csrf_token,'name' => $name,'kana' => $kana, 'tel' => $tel, 'email' => $email, 'body' => $body]);
            }
        }else{
            header('Location:/contact/index');
        }
    }
    


    public function create(){
            //登録処理
        if(!isset($_POST['csrf_token'])|| $_POST['csrf_token']!== $_SESSION['csrf_token']){
            exit('お問い合わせの送信に失敗しました。');
            }else{
                $referer = $_SERVER['HTTP_REFERER'];
                $url = 'http://localhost/contact/check';
                if(!strstr($referer,$url)){
                    header('Location:/contact/index');
            }else{
                $contact=new Contact;
                $_SESSION['name']=htmlspecialchars($_POST['name']);
                $_SESSION['kana']=htmlspecialchars($_POST['kana']);
                $_SESSION['tel']=htmlspecialchars($_POST['tel']);
                $_SESSION['email']=htmlspecialchars($_POST['email']);
                $_SESSION['body']=htmlspecialchars($_POST['body']);

                $result = $contact->create(
                    $_SESSION['name'],
                    $_SESSION['kana'],
                    $_SESSION['tel'],
                    $_SESSION['email'],
                    $_SESSION['body']
                );
                $this->view('contact/complete');
            }
        }
    }
    

    public function get_Update(){
            $toke_byte = openssl_random_pseudo_bytes(16);
            $csrf_token = bin2hex($toke_byte);

            $_SESSION['csrf_token'] = $csrf_token;
            
            $id=$_GET['id'];
            $_SESSION['id']=$id;
            $contact = new Contact;
            
            $result = $contact->get_update();
            $errorMessages = $_SESSION['errorMessages'];
            $post = $_SESSION['post'] ?? [];
            $_SESSION['errorMessages'] = [];
            $_SESSION['post'] = [];
            if(empty($errorMessages))
            {
                $this->view('contact/update',['data' => $result,'csrf_token'=>$csrf_token]);
            }else{
                $this->view('contact/update',['data'=>$post, 'errorMessages'=>$errorMessages]);
            }
            
    }
    

    public function update(){
           
        $id = $_SESSION['id'];

            if(!empty($errorMessages)){
                    $_SESSION['errorMessages'] = $errorMessages;
                    $_SESSION['post'] = $_POST;
                    header('Location:'.$_SERVER['PHP_SELF']);
            }else{
                if(!isset($_POST['csrf_token'])|| $_POST['csrf_token']!== $_SESSION['csrf_token']){
                    exit('お問い合わせの送信に失敗しました。');
                }else{
                    $contact = new Contact();
                    $_SESSION['name']=htmlspecialchars($_POST['name']);
                    $_SESSION['kana']=htmlspecialchars($_POST['kana']);
                    $_SESSION['tel']=htmlspecialchars($_POST['tel']);
                    $_SESSION['email']=htmlspecialchars($_POST['email']);
                    $_SESSION['body']=htmlspecialchars($_POST['body']);                

                    $contact->update(
                        $_SESSION['id'],
                        $_SESSION['name'],
                        $_SESSION['kana'],
                        $_SESSION['tel'],
                        $_SESSION['email'],
                        $_SESSION['body']
                            
                    );

                    header('Location:/contact/index');
                }
            
            }
        
    }

    public function delete(){
        $id = $_GET['id'];

        $contact = new Contact;
        $contact->delete($id);
        header('Location:/contact/index');

    }
  
}