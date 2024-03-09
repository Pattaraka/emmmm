<!DOCTYPE html>
<html lang="en">
<head>
    <title>บันทึกรายการเพิ่มเติม</title>
    <link href="//cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body{
            background-color: paleturquoise;
        }
    </style>
</head>
<body>
    <h2>บันทึกรายการเพิ่มเติม</h2> <br>
    <form action="saveone.php" method="post"> 
        <label for="transaction_type">เลือกประเภท</label>
        <select name="transaction_type" id="transaction_type">
            <option value="รายรับ">รายรับ</option>
            <option value="รายจ่าย">รายจ่าย</option>
        </select> <br>
        <br>

        <label for="account_type">เลือกประเภทบัญชี</label> 
        <select name="account_type" id="account_type">
            <option value="กระแสรายวัน">กระแสรายวัน</option>
            <option value="ออมทรัพย์">ออมทรัพย์</option>
            <option value="กระแสเงินสด">กระแสเงินสด</option>
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

        <input class="form-check-input" type="radio" name="confirmation" id="confirm_transaction" value="confirm">
        <label class="form-check-label" for="confirm_transaction">ยืนยันการทำรายการ</label> <br>

        <input class="form-check-input" type="radio" name="confirmation" id="not_confirm_transaction" value="not_confirm">
        <label class="form-check-label" for="not_confirm_transaction">ไม่ยืนยัน</label> <br>

        <br>
        <input type="submit" value="ทำรายการ" class="btn btn-success"> 

    </form>
</body>
</html>