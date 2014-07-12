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
        
        function _render_product($product){
          $a = $product["id"];
          $b = $product["name"];
          echo "<li><a href=\"product/$a\">$b</a></li>"; 
        }

        function render_products($products){
            foreach ($products as $product) {
                _render_product($product);
            } 
        }    

        $data = get_data();
        render_products($data);
        // echo var_dump($data);
        //render_heading($_GET["str"]); 

    ?>

</body>
</html>

