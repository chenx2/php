<html>
<body>
    <?php 
        function sum_str($str){
            $nums = explode(",", $str);
            $n1 = $nums[0];
            $n2 = $nums[1];
            $sum = $n1 + $n2;
            return "" . $sum;
        }
    ?>
    <h1>Page <?php echo sum_str($_GET["str"]); ?></h1>
</body>
</html>

