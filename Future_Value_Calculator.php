<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
    <style>
        form{
            height: 400px;
            width: 700px;
            border: 2px solid black;
        }
        p {
            color: cornflowerblue;
            font-size: 18px;
        }
        input[type=text] {
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            padding: 12px 10px 12px 10px;
        }
        input[type=submit]{
            margin-left: 280px;
        }
        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }
    </style>
</head>
<body>
<br/>
<form action="action_value.php" method="post"/>
    <h1 style="text-align: center">Future Value Calculator</h1>
    <p style="margin-top: 50px">Inventment Amount: <input type="text" name="inventmentAmount" style="margin-left: 18px;"/></p>
    <p>Yearly Interest Rate: <input type="text" name="yearlyInterestRate" style="margin-left: 20px;"/></p>
    <p>Number of Years: <input type="text" name="numberofYears" style="margin-left: 38px;"/></p>
    <input type = "submit" id = "submit" value = "Tìm" />
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $invent = $_POST["inventmentAmount"];
    $yearlyInvent = $_POST["yearlyInterestRate"];
    $numOfyear = $_POST["numberofYears"];
    $interest = $yearlyInvent * $numOfyear * 0.1;
    $futureValue = $invent + $interest;

    foreach($dictionary as $word => $description) {
        if($word == $searchword){
            echo "Từ: " . $word . ". <br/>Nghĩa của từ: " . $description;
            echo "<br/>";
            $flag = 1;
        }
    }
    if($flag == 0){
        echo "Không tìm thấy từ cần tra.";
    }
}
?>
</body>
</html>