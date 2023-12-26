<?php
require_once(ROOT_PATH. 'Models/Db.php');

class Contact extends Db
{
    public function __construct($dbh = null)
    {
        parent::__construct($dbh);
        $this->dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }
 /** 
    * @param string $name 氏名
    * @param string $kana　フリガナ
    * @param string $tel 電話番号
    * @param string $email メールアドレス
    * @param string $body お問い合わせ内容
*/
    public function create(string $name, string $kana, string $tel, string $email, string $body)
    {
        try{
            $this->dbh->beginTransaction();
            $query = 'INSERT INTO contacts (name, kana, tel, email ,body) VALUES (:name, :kana, :tel, :email, :body)';
            $stmt = $this->dbh-> prepare($query);
            $stmt->bindParam(':name', $name, PDO::PARAM_STR);
            $stmt->bindParam(':kana', $kana, PDO::PARAM_STR);
            $stmt->bindParam(':tel', $tel, PDO::PARAM_STR);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':body', $body, PDO::PARAM_STR);
            $stmt->execute();

            $lastId = $this->dbh->lastInsertID();

            //データの書き込み
            $this->dbh->commit();

            return $lastId;

           }catch(PDOException $e){
            $this->dbh->rollBack();
            echo "登録失敗: ".$e->getMessage()."/n";
            exit();
           }
    }

    public function find_all(){
        try{
            $query = 'SELECT name,kana,tel,email,body,id FROM contacts';
            $stmt = $this->dbh->prepare($query);
            $stmt->execute();
            if($this->list = $stmt->fetchAll(PDO::FETCH_ASSOC)){
                return $this->list;
            }
             
        }catch(PDOException $e){
            echo "リストの読み出しができません".$e->getMessage();
        }
    }

    public function find_by_id($id){
    
        try {
            $query = "SELECT * FROM contacts WHERE id = :id";
            $stmt = $this->dbh->prepare($query);
            $stmt->bindParam(":id",$id,PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_OBJ);

        }catch(PDOException $e){
            echo $e->getMessage();
            exit();
        }
    }
    
   public function update(int $id, string $name, string $kana, string $tel, string $email, string $body){
        try{
            $this->dbh->beginTransaction();
            $query = 'UPDATE contacts SET name = :name, kana = :kana, tel = :tel, email = :email, body = :body WHERE id = :id';
           
            $stmt = $this->dbh-> prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->bindParam(':name', $name, PDO::PARAM_STR);
            $stmt->bindParam(':kana', $kana, PDO::PARAM_STR);
            $stmt->bindParam(':tel', $tel, PDO::PARAM_STR);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':body', $body, PDO::PARAM_STR);
            $stmt->execute();

            //データの書き込み
            $this->dbh->commit();

           }catch(PDOException $e){
            $this->dbh->rollBack();
            echo "登録失敗: ".$e->getMessage()."/n";
            exit();
           }

    }
    
    public function delete(int $id){
        try{
            $this->dbh->beginTransaction();
            $query = 'DELETE FROM contacts WHERE id = :id';
            $stmt = $this->dbh->prepare($query);
            $stmt -> bindParam(':id',$id,PDO::PARAM_INT);
            $stmt->execute();

            $this->dbh->commit();
            return;
        }catch(PDOException $e){
            $this->dbh->rollBack();
            echo "削除失敗".$e->getMessage()."\n";
            exit();
        }

    }
}
