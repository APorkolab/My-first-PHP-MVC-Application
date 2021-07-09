<?php
class AdvertisementListModel extends Model{
    public function Index(){
        $this->query('SELECT users.name, advertisements.id, title FROM users INNER JOIN advertisements ON users.id = advertisements.userid');
        $rows = $this->resultSet();
        return $rows;
    }
}