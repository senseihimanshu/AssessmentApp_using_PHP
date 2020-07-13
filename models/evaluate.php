<?php
class EvaluateModel extends Model{
    protected $userId;

    public function Index(){
        $this->query('SELECT * FROM table_question');
        $rows = $this->resultSet();
        return $rows;
    }

    public function add(){
        $id = $_GET['id'];
        if($id < 1 || $id > 5){
            $id = 1;
        }
        if($id == 1){
            $this->query('SELECT * FROM table_question WHERE table_question.ID = '.$id);    
        }
        else{
            $this->query('SELECT table_question.QUESTION, table_option.OPTION_ID, table_option.OPTION_TEXT FROM table_question INNER JOIN table_option ON table_question.ID = table_option.QUESTION_ID WHERE table_question.ID = '.$id);
        }
        $rows = $this->resultSet();
        print($id);
        print_r($rows);

        if(isset($_POST['submit'])){
            if($id == 1){
                $this->query('INSERT INTO table_user(EMAIL) VALUES (:email)');
                $this->bind(':email', $_POST['email']);
                $this->execute();
                if($this->lastInsertId()){
                    $this->$userId = $this->lastInsertId();
                    print($this->$userId);
                    header('Location: ' .ROOT_URL. 'evaluates/add/' . $id+1);
                }
            }else{
                $this->query('INSERT INTO table_user(EMAIL) VALUES (:email)');
            }
        }

        return $rows;
    }

    public function get($id){
        $this->query('SELECT table_question.QUESTION, table_option.OPTION_ID, table_option.OPTION_TEXT FROM table_question INNER JOIN table_option ON table_question.ID = table_option.QUESTION_ID WHERE table_question.ID == '.$id);
        $rows = $this->resultSet();
        echo $rows;
        return $rows;
    }
}