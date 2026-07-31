<?php 
require_once __DIR__ . "/../config/Database.php";
require_once __DIR__ . "/../models/Student.php";

class StudentDAO {

    private mysqli $conn;
    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->getConnection();
    }
    
    // LẤY DANH SÁCH SINH VIÊN
    public function getAll()
    {
        // VIẾT CÂU LỆNH
        $sql = "SELECT * FROM students ORDER BY id DESC";
        // THỰC THI CÂU LỆNH
        $result = $this->conn->query($sql);
        $students = [];

        // ĐỌC TỪNG DÒNG DỮ LIỆU
        while ($row = $result->fetch_assoc()){
            $student = new Student(
                $row["studentcode"],
                $row["fullname"],
                $row["phone"],
                $row["gender"]
            );
            $student->id = $row["id"];
            $student->createdAt = $row["created_at"];

            $students[] = $student;
        }
        return $students;
    }

    public function getById(int $id)
    {
        $sql = "SELECT * FROM students WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        // LẤY KẾT QUẢ
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        if (!$row){
            return null;
        }
        $student = new Student(
            $row["studentcode"],
            $row["fullname"],
            $row["phone"],
            $row["gender"]
        );
        $student->id = $row["id"];
        $student->createdAt = $row["created_at"];
        return $student;
    }


    //THÊM SINH VIÊN
    public function insert(Student $student)
    {
        $sql = "INSERT INTO students (
        studentcode,
        fullname,
        phone,
        gender) VALUES (?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param(
            "ssss",
            $student->studentCode,
            $student->fullName,
            $student->phone,
            $student->gender 
        );
        return $stmt->execute();
    }

    //CẬP NHẬT SINH VIÊN
    public function update(Student $student)
    {
        $sql = "UPDATE students SET 
        studentcode = ?, 
        fullname = ?, 
        phone = ?, 
        gender = ? 
        WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param(
            "ssssi",
            $student->studentCode,
            $student->fullName,
            $student->phone,
            $student->gender,
            $student->id
        );
        return $stmt->execute();
    }

    //XÓA SINH VIÊN
    public function delete(int $id)
    {
        $sql = "DELETE FROM students WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}

