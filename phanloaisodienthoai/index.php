<?php
include_once 'checkNumPhone.php';
if($_SERVER["REQUEST_METHOD"] === "GET"){
    $numPhoneList = $_GET["numPhoneList"];
    $arrPhoneNum = explode(",",$numPhoneList);
    $r = checkNumPhone($arrPhoneNum);
}
?>
<!DOCTYPE html>
<html>
<head>
<title>[Bài tập] Phân loại số điện thoại</title>
</head>
<link rel="stylesheet" href="style.css" />

<body>
    
<form method="GET">
<textarea name="numPhoneList"></textarea>
<br/>
<input type="submit" value="Start"/>
</form>
<div>
    <table>
        <caption>List phone</caption>
        <tr>
            <td>Viettel</td>
            <td>Mobiphone</td>
            <td>Vinaphone</td>
        </tr>
        <tr>
            <td>
                <?php
                if (!empty($viettel)) {
                    foreach ($viettel as $phone) {
                        echo $phone . "<br>";
                    }
                }
                ?>
            </td>
            <td>
                <?php
                if (!empty($mobiphone)) {
                    foreach ($mobiphone as $phone) {
                        echo $phone . "<br>";
                    }
                }
                ?>
            </td>
            <td>
                <?php
                if (!empty($vinaphone)) {
                    foreach ($vinaphone as $phone) {
                        echo $phone . "<br>";
                    }
                }
                ?>
            </td>
        </tr>
    </table>
</div>
</body>
</html>
<?php
 
?>