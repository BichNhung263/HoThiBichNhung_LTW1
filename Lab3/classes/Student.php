<?php
class Student{
    //Properties
    public string $studentId;
    public string $fullName;
    public string $gender;
    public int $birthYear;
    public float $scoreHtml;
    public float $scoreCss;
    public float $scorePhp;
    //Contructor
    public function __construct(
        string $studentId,
        string $fullName,
        string $gender,
        int $birthYear, 
        float $scoreHtml,
        float $scoreCss,
        float $scorePhp
        ){
        $this->studentId = $studentId;
        $this->fullName = $fullName;
        $this->gender = $gender;
        $this->birthYear = $birthYear;
        $this->scoreHtml = $scoreHtml;
        $this->scoreCss = $scoreCss;
        $this->scorePhp = $scorePhp;
        }
        //Methods
        /**
         * Summary of getTotalScore
         * Tính tổng điểm
         * @return float
         */
        public function getTotalScore(): float{
            return $this->scoreHtml 
            + $this->scoreCss 
            + $this->scorePhp;
        }
        public function getAge(){
            return date("Y") - $this->birthYear;
        }
        public function getAverage(){
            return round($this->getTotalScore() / 3, 1);
        }
        public function getRank(){
            $average = $this->getAverage();
            if($average >= 9.0){
                return "Xuất sắc";
            }elseif($average >= 8.0){
                return "Giỏi";
            }elseif($average >= 6.5){
                return "Khá";
            }elseif($average >= 5.0){
                return "Trung bình";
            }else{
                return "Yếu";
            }
        }
        public function getScholarship(){
            return $this->getAverage() >= 8.0 ? "Có" : "Không ";
        }
        public function getRankClass(){
            switch($this->getRank()){
                case "Xuất sắc":
                    return "table-success";
                case "Giỏi":
                    return "table-info";
                case "Khá":
                    return "table-primary";
                case "Trung bình":
                    return "table-warning";
                case "Yếu":
                    return "table-danger";
                default:
                    return "";
            }
        }
        public function showInfo():void
        {
            $rowClass = $this->getRankClass();
            echo "<tr class='{$rowClass}'>
            <td>{$this->studentId}</td>
            <td>{$this->fullName}</td>
            <td>{$this->gender}</td>
            <td>{$this->birthYear}</td>
            <td>{$this->getAge()}</td>
            <td>{$this->scoreHtml}</td>
            <td>{$this->scoreCss}</td>
            <td>{$this->scorePhp}</td>
            <td>{$this->getTotalScore()}</td>
            <td>{$this->getAverage()}</td>
            <td>{$this->getRank()}</td>
            <td>{$this->getScholarship()}</td>
            </tr>";
        }
}
?>