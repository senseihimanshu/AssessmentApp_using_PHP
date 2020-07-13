<?php
class EvaluateModel extends Model{
    public function Index(){
        $this->query('SELECT * FROM table_question');
        $rows = $this->resultSet();
        return $rows;
    }

    public function add(){
        if(isset($_POST['submit'])){
            $this->query('INSERT INTO table_user(EMAIL) VALUES (:email)');
            $this->bind(':email', $_POST['email']);
            $this->execute();

            echo 'Location: ' .ROOT_URL. 'evaluates';
            header('Location: ' .ROOT_URL. 'evaluates');
        }

        return;
    }

    public function get($id){
        $this->query('SELECT table_question.QUESTION, table_option.OPTION_ID, table_option.OPTION_TEXT FROM table_question INNER JOIN table_option ON table_question.ID = table_option.QUESTION_ID WHERE table_question.ID == '.$id);
        $rows = $this->resultSet();
        echo $rows;
        return $rows;
    }
}