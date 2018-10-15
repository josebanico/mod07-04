

<?php 

 $apple_details = ["name"=>"apple","price"=>25, "desc"=>"a juicy red apple"];
 $orange_details = ["name"=>"orange","price"=>15, "desc"=>"the fruit, not the color"];
 $grape_details = ["name"=>"grape","price"=>12, "desc"=>"can be made into wine"];
 $item_details = ["",$apple_details,$orange_details,$grape_details];
 $index = $_GET['id'];
 echo "Product: " . $item_details[$index]['name']."<br>";
 echo "SRP: " . $item_details[$index]['price']."<br>";
 echo "Description: " . $item_details[$index]['desc']."<br>";
 ?>