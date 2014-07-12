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

        function render_heading($data){
            echo "<h1>Page" . sum_str($data) . "</h1>";
        }
    ?>

    <?php 
        render_heading($_GET["str"]); 
    ?>
</body>
</html>

