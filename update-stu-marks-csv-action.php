<?php
//connect to Database
mysql_select_db($database_csv, $csv);

if (isset($_POST['submit'])) {

    $tmp = $_FILES['filename']['tmp_name'];
    $name = $_FILES['filename']['name'];

    //Can be any full path, just don't end with a /. That will be added in in the path variable
    $uploads_dir = 'C:/Users/Ernest/Desktop';

    $path = $uploads_dir.'/'.$name;

    if(move_uploaded_file($tmp, $path)){
        echo "<br><center><p>". $name ."</p></center>";

        //Import uploaded file to Database
        //If the query fails, try LOAD DATA LOCAL INFILE
        $import = "
        LOAD DATA INFILE '".$path."'
               INTO TABLE results  CHARACTER SET utf8 FIELDS TERMINATED BY ','
               OPTIONALLY ENCLOSED BY '\"' IGNORE 1 LINES (name, description, price, shipping, quantity);
        ";

        mysql_query($import) or die(mysql_error());
        //If you do not want to keep the csv, you can delete it after this point.
        //unlink($path);

    }else{
        echo 'Failed to move uploaded files';
    }

}

?>