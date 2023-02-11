<?php

namespace App\Core;

class Database
{

  // public const HOSTNAME = 'localhost';
  // public const USERNAME = 'viewscog_view1s';
  // public const PASSWORD = '160723Thao@';
  // public const DATABASE = 'viewscog_view1s';
  // public const PORT = 3306;
  public $conn;

  public  function connect()
  {
    if (!$this->conn) {
      try {
        $this->conn = mysqli_connect(
          $_ENV['DB_HOST'],
          $_ENV['DB_USERNAME'],
          $_ENV['DB_PASSWORD'],
          $_ENV['DB_DATABASE'],
          intval($_ENV['DB_HOST']),
        );
        $this->conn->query("set names 'utf8'");
      } catch (\Exception $e) {
        echo $e->getMessage();
      }
    }
  }

  public function dis_connect()
  {
    if ($this->conn) {
      try {
        $this->conn->close();;
        $this->conn = null;
      } catch (\Exception $e) {
        return $e->getMessage();
      }
    }
  }



  public  function query($sql)
  {
    try {
      $this->connect();
      $result = $this->conn->query($sql);
      return $result ?: false;
    } catch (\Exception $e) {
      echo $e->getMessage();
    } finally {
      $this->dis_connect();
    }
  }



  public function insert($table, $data)
  {

    try {
      $this->connect();
      $field_list = '';
      $value_list = '';
      foreach ($data as $key => $value) {
        $field_list .= ",$key";
        $value_list .= ",'" . $this->conn->real_escape_string($value) . "'";
      }
      $sql = 'INSERT INTO ' . $table . '(' . trim($field_list, ',') . ') VALUES (' . trim($value_list, ',') . ')';
      return $this->conn->query($sql);
    } catch (\Exception $e) {
      echo $e->getMessage();
    } finally {
      $this->dis_connect();
    }
  }



  public function settings($data)
  {
    try {
      $this->connect();
      $row = $this->conn->query("SELECT * FROM `settings` LIMIT 1")->fetch_array();
      if ($row) {
        return $row[$data];
      }
      return false;
    } catch (\Exception $e) {
      echo $e->getMessage();
    } finally {
      $this->dis_connect();
    }
  }




  public function addBalance($table, $data, $sotien, $where)
  {

    $sql =  "UPDATE `$table` SET `$data` = `$data` + '$sotien' WHERE $where ";
    $this->query($sql);
  }

  public function subBalance($table, $data, $sotien, $where)
  {
    $sql =  "UPDATE `$table` SET `$data` = `$data` - '$sotien' WHERE $where ";
    $this->query($sql);
  }

  public function update($table, $data, $where)
  {

    try {
      $this->connect();
      $sql = '';
      foreach ($data as $key => $value) {
        $sql .= "$key = '" . $this->conn->real_escape_string($value) . "',";
      }
      $sql = 'UPDATE ' . $table . ' SET ' . trim($sql, ',') . ' WHERE ' . $where;
      return $this->conn->query($sql);
    } catch (\Exception $e) {
      echo $e->getMessage();
    } finally {
      $this->dis_connect();
    }
  }

  function remove($table, $where)
  {
    $sql = "DELETE FROM $table WHERE $where";
    $this->query($sql);
  }


  public  function get_list($sql)
  {

    try {
      $this->connect();
      $result = mysqli_query($this->conn, $sql);
      $return = array();
      while ($row = mysqli_fetch_assoc($result)) {
        $return[] = $row;
      }
      mysqli_free_result($result);
      return $return;
    } catch (\Exception $e) {
      echo $e->getMessage();
    } finally {
      $this->dis_connect();
    }
  }

  public function get_row($sql)
  {

    try {
      $this->connect();
      $result = $this->conn->query($sql);
      $row = mysqli_fetch_assoc($result);
      mysqli_free_result($result);
      return $row ?: false;
    } catch (\Exception $e) {
      echo $e->getMessage();
    } finally {
      $this->dis_connect();
    }
  }

  public function num_rows($sql)
  {

    try {
      $this->connect();
      $result = mysqli_query($this->conn, $sql);
      $row = mysqli_num_rows($result);
      mysqli_free_result($result);

      return $row ?: 0;
    } catch (\Exception $e) {
      echo $e->getMessage();
    } finally {
      $this->dis_connect();
    }
  }
}
