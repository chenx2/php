<html>
<body>
    <?php 
        // mock
        function get_data(){
            return [
                [ "id" => 1, "name" => "computer 1" ],
                [ "id" => 2, "name" => "laptop 2" ],
                [ "id" => 3, "name" => "product 3" ]
            ];
        }
        
        function render_products($products){
            for ($x=0; $x<sizeof($products); $x++) {
              $a = $products[$x]["id"];
              $b = $products[$x]["name"];
              echo "<li><a href=\"product/$a\">$b</a></li>";
            } 
        }    

        $data = get_data();
        render_products($data);

    ?>
</body>
</html>

