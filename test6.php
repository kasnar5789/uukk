<!doctype html>
<head>

</head>
<body>
    <form method="get">
        <input name="userid">
        <input type="submit" value="전송">
    </form>
<?php
ini_set('display_errors', 0);

echo "이용자의 아이디 : {$_GET['userid']}"; ?>
</body>
</html>

