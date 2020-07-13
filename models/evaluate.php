<?php
class UserModel extends Model{
    public function Index(){
        $this->query('SELECT * FROM table_question');
        $rows = $this->resultSet();
        return $rows;
    }
}