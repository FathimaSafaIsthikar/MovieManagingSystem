<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field

        $title = $_REQUEST['title'];
        $genre = $_REQUEST['genre'];
        $releaseDate = $_REQUEST['releaseDate'];
        

        $f=fopen("./dataStoreFiles/personalinfo.txt","a");
        fwrite($f,"title: ".$title." genre: ".$genre.
        " releaseDate: ".$releaseDate."\n");
        fclose($f);
        }
?>