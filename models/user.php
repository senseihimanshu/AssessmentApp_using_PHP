<?php
class UserModel extends Model{
    public function Index(){
        $this->query('SELECT * FROM table_user');
        $rows = $this->resultSet();
        return $rows;
    }
}