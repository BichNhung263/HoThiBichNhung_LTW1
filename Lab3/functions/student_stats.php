<?php
 function countStudents($students) {
    return count($students);
}

function countMaleStudents($students){
    $count = 0;
    foreach($students as $student){
        if($student->gender == "Nam"){
            $count++;
        }
    }
    return $count;
}

function countFemaleStudents($students){
    $count = 0;
    foreach($students as $student){
        if($student->gender == "Nữ"){
            $count++;
        }
    }
    return $count;
}
 function countScholarshipStudents($students){
    $count = 0;
    foreach($students as $student){
        if($student->getScholarship() ==="Có"){
            $count++;
        }
    }
    return $count;
 }

 function countExcellentStudents($students){
    $count = 0;
    foreach($students as $student){
        if($student->getRank() == "Xuất sắc"){
            $count++;
        }
    }
    return $count;
 }

function getAverageScore($students){
    $totalScore = 0;
    foreach($students as $student){
        $totalScore += $student->getAverage();
    }
    return round($totalScore / count($students), 1);
 }
 function getHighestAverage($students){
    $highestAverage = 0;
    foreach($students as $student){
        if($student->getAverage() > $highestAverage){
            $highestAverage = $student->getAverage();
        }
    }
    return $highestAverage;
 }

 function getLowestAverage($students){
    $lowestAverage = 10;
    foreach($students as $student){
        if($student->getAverage() < $lowestAverage){
            $lowestAverage = $student->getAverage();
        }
    }
    return $lowestAverage;
 }

?>