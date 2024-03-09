<!DOCTYPE html>
<html lang="en">
<head>
    <title>บันทึกรายการ รายรับรายจ่าย</title>
    <link href="//cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body{
            background-color: pink;
        }
    </style>
</head>
<body>
    <h2>บันทึกรายการ รายรับ-รายจ่าย</h2> <br>
    <form action="save.php" method="post"> 
        <label for="type">เลือกประเภท</label>
        <select name="type" id="type">
            <option value="รายรับ">รายรับ</option>
            <option value="รายจ่าย">รายจ่าย</option>
        </select> <br>
        <br>
        <label for="name">ชื่อรายการ</label>
        <input type="text" id="name" name="name"> <br>
        <br>

        <label for="amount">จำนวนเงิน</label>
        <input type="number" id="amount" name="amount" step="0.01"> <br>
        <br>

        <label for="date">Date</label>
        <input type="date" id="date" name="date"> <br>
        <br>

        <br>
        <input type="submit" value="ทำรายการ"  class="btn btn-success"> 
    </form>
</body>
</html>