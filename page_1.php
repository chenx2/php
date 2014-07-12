<html>
<body>
    <?php 
        $str = $_GET["str"]; // 1,2
        $nums = explode(",", $str);
        $n1 = $nums[0];
        $n2 = $nums[1];
        $sum = $n1 + $n2;
    ?>
    <h1>Page <?php echo $sum; ?></h1>
</body>
</html>

