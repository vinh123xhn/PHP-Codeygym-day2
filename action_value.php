<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
    <style>
        form{
            height: 300px;
            width: 400px;
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
<form action="action_value.php" method="post">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $invent = $_POST["inventmentAmount"];
        $yearlyInvent = $_POST["yearlyInterestRate"];
        $numOfyear = $_POST["numberofYears"];
        $interest = $yearlyInvent * $numOfyear * 0.1;
        $futureValue = $invent + $interest;

        echo "<p>Investment Amount:  $$invent</p>";
        echo "<p>Yearly Interest Rate: $yearlyInvent%</p>";
        echo "<p>Number of Years: $numOfyear</p>";
        echo "<p> Future Value: $futureValue</p>";
    }
    ?>
</form>
</body>
</html>