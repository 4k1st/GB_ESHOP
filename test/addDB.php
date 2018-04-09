start<br>
<?php
    ini_set('display_errors', DEBUG);
    error_reporting(E_ALL);
include("../components/Db.php");

$db = new DB();
print_r($db);

echo "start query";


        for($i=0;$i<10000;$i++){
            if($i==0){
                 $PRODUCTS_parametr.="('prod$i',123,(SELECT id FROM catalog WHERE id = ".rand(71,104)."),1,'no_photo.jpg','2018-03-31','2018-03-31',1,1,0,'description$i','short_description$i',UUID(),1,124)";
                continue;
            }
            $PRODUCTS_parametr.=",('prod$i',123,(SELECT id FROM catalog WHERE id = ".rand(71,104)."),1,'no_photo.jpg','2018-03-31','2018-03-31',1,1,0,'description$i','short_description$i',UUID(),1,124)";
        }
        

        $SQL_insert_products="INSERT INTO `products` (`name`, `price`, `id_category`, `status`, `photo`, `date_create`, `date_change`, `create_by_id`,`change_by_id`, `view`, `description`, `short_desc`,`id_uuid`,`actual`,`count_prod`) VALUES ".$PRODUCTS_parametr;

echo"<pre>";
print_r( $SQL_insert_products);
echo"</pre>";
	$result=$db->query( $SQL_insert_products);

     //   $result = $db->prepare($sql);
   /*     $result->bindParam(':count', $count, PDO::PARAM_INT);


        $result->setFetchMode(PDO::FETCH_ASSOC);
        

        $result->execute();


        $i = 0;
        $productsList = array();
        while ($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['is_new'] = $row['is_new'];
            $i++;
        }*/
echo "end query";




?>
    <!--hr> end INSERT INTO `catalog`(`name`, `parent`, `uuid`, `type`, `create_by`, `change_by`, `create_date`, `change_date`, `actual`,`position`) VALUES ('Home',0,UUID(),0,1,1,'2018-03-31','2018-03-31',1,0), ('MAN',0,UUID(),0,1,1,'2018-03-31','2018-03-31',1,0), ('WOMAN',0,UUID(),0,1,1,'2018-03-31','2018-03-31',1,0), ('KIDS',0,UUID(),0,1,1,'2018-03-31','2018-03-31',1,0), ('accessories',0,UUID(),0,1,1,'2018-03-31','2018-03-31',1,0), ('Featured',0,UUID(),0,1,1,'2018-03-31','2018-03-31',1,0), ('Hot deals',0,UUID(),0,1,1,'2018-03-31','2018-03-31',1,0), ('Dresses',1,UUID(),0,1,1,'2018-03-31','2018-03-31',1,0), ('tops',1,UUID(),0,1,1,'2018-03-31','2018-03-31',1,0), ('sweatrs/knits',1,UUID(),0,1,1,'2018-03-31','2018-03-31',1,0), ('jackets/coats',1,UUID(),0,1,1,'2018-03-31','2018-03-31',1,0), ('blazers',1,UUID(),0,1,1,'2018-03-31','2018-03-31',1,0), ('denim',1,UUID(),0,1,1,'2018-03-31','2018-03-31',1,0), ('leggins',1,UUID(),0,1,1,'2018-03-31','2018-03-31',1,0), ('skirts/sorts',1,UUID(),0,1,1,'2018-03-31','2018-03-31',1,0), ('accssories',1,UUID(),0,1,1,'2018-03-31','2018-03-31',1,0), ('Dresses',2,UUID(),0,1,1,'2018-03-31','2018-03-31',1,0), ('tops',2,UUID(),0,1,1,'2018-03-31','2018-03-31',1,0), ('sweatrs/knits',2,UUID(),0,1,1,'2018-03-31','2018-03-31',1,0), ('jackets/coats',2,UUID(),0,1,1,'2018-03-31','2018-03-31',1,0), ('blazers',2,UUID(),0,1,1,'2018-03-31','2018-03-31',1,0), ('denim',2,UUID(),0,1,1,'2018-03-31','2018-03-31',1,0), ('leggins',2,UUID(),0,1,1,'2018-03-31','2018-03-31',1,0), ('skirts/sorts',2,UUID(),0,1,1,'2018-03-31','2018-03-31',1,0), ('accssories',2,UUID(),0,1,1,'2018-03-31','2018-03-31',1,0), ('Dresses',3,UUID(),0,1,1,'2018-03-31','2018-03-31',1,0), ('tops',3,UUID(),0,1,1,'2018-03-31','2018-03-31',1,0), ('sweatrs/knits',3,UUID(),0,1,1,'2018-03-31','2018-03-31',1,0), ('jackets/coats',3,UUID(),0,1,1,'2018-03-31','2018-03-31',1,0), ('blazers',4,UUID(),0,1,1,'2018-03-31','2018-03-31',1,0), ('denim',4,UUID(),0,1,1,'2018-03-31','2018-03-31',1,0), ('leggins',4,UUID(),0,1,1,'2018-03-31','2018-03-31',1,0), ('skirts/sorts',5,UUID(),0,1,1,'2018-03-31','2018-03-31',1,0), ('accssories',5,UUID(),0,1,1,'2018-03-31','2018-03-31',1,0)-->
