<?php
class baseModel
{
    // kết nối cơ sở dữ liệu
    function __construct()
    {
        $this->connect = new PDO("mysql:host=localhost;dbname=class40;charset=utf8","root","");
    }
    // truy vấn với mệnh đề where
    public static function where($column, $operation, $value)
    {
        $model = new static();
        $model->queryBuilder = "select * from " .$model->table
                                . " where $coulmn $operation '$val'";
        return $model;
    }
    // truy vấn theo id trong bảng
    public static function find($id)
    {
        $model = new static();
        $model->queryBuilder = "select * from " .$model->table
                                . " where id = '$id'";
        return $model->first();
    }
    // truy vấn toàn bộ dữ liệu của bảng
    public static function all()
    {
        $model = new static();
        $model->queryBuilder = "select * from " .$model->table;
        return $model;
    }
    // Xóa dữ liệu của bảng
    public static function delete($id)
    {
        $model = new static();
        $model->queryBuilder = "delete from " .$model->table
                                . " where id = " .$id;
        $stmt  = $model->connect->prepare($model->queryBuilder);
        $stmt->execute();
        return true;
    }
    // hàm tùy biến câu lệnh SQL
    public static function rawQuery($sqlQuery)
    {
        $model = new static();
        $stmt = $model->connect->prepare($sqlQuery);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    // Hàm kết hợp mệnh đề AND
    public function andWhere($column, $operation, $val)
    {
        $this->queryBuilder .= " and $column $operation '$val'";
        return $this;
    }
    // Hàm kết hợp mệnh đề OR
    public function orWhere($coulmn, $operation, $val)
    {
        $this->queryBuilder .= " or $column $operation '$val'";
        return $this;
    }
    // hàm kết hợp mệnh đề LIMIT
    public function limit($value)
    {
        $this->queryBuilder .= " limit $value ";
        return $this;
    }
    // hàm kết hợp mệnh đề ORDER BY
    public function orderBy($column, $operation)
    {
        $this->queryBuilder .= " order by $column $operation";
        return $this;
    }
    // hàm trả về toàn bộ dữ liệu của bảng trong database
    public function get()
    {
        $stmt = $this->connect->prepare($this->queryBuilder);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, get_class($this));
    }
    // hàm trả vè giá trị đầu tiền của bảng trong database
    public function first()
    {
        $array = $this->get();
        return $array['0'];
    }
}
