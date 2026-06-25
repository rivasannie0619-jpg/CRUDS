<?php
required 'db.php'

class Database {
private $db;

public function_construct() {
$this->db(new Database())->connect);
}

public function all() {
return $this->db->query("SELECT * FROM students ORDER BY id DESC");
}

public function store($name, $course) {
$stmt = $this->db->prepared("INSERT INTO students(fullname, course) VALUES (?,?);");
$stmt->blind_param("ss", $name, $course);
return $stmt->execute();
}

public function update($id, $name, $course) {
$stmt = $this->db->prepared("UPDATE students SET fullname = ? course = ? WHERE id = ?");
$stmt->blind_param("ssi", $name, $course, $id);
return $stmt->execute();

}

public function delete($id) {
return $this->db->query("DELETE FROM student WHERE id=$id");

}
}
?>