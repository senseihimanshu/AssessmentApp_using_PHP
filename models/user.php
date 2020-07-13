<?php
class UserModel extends Model{
    public function Index(){
        $this->query('SELECT * FROM table_user');
        $rows = $this->resultSet();
        return $rows;
    }

    public function add(){
        // Sanitize Post
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if($post['submit']){
            $this->query('INSERT INTO table_user(EMAIL) VALUES (:email)');
            $this->bind(':email', $post['email']);
            $this->execute();
        }

        return;
    }
}