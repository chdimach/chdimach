<?php
function get_chapters($translate,$number_book){
    global $link;
    $sql="SELECT * FROM boks_content WHERE number_books='$number_book';";
    $result = mysqli_query($link, $sql);
    $chapters = mysqli_fetch_all($result,MYSQLI_ASSOC);
    return $chapters;
}
function get_content($id_content){
    global $link;
    mysqli_query($link,'set character_set_results ="utf8"');
    $sql="SELECT * FROM boks_content WHERE id='$id_content';";
    $result = mysqli_query($link, $sql);
    $chapters = mysqli_fetch_all($result,MYSQLI_ASSOC);
    return $chapters;
}
function get_books(){
    global $link;
    mysqli_query($link,'set character_set_results ="utf8"');
    $sql="SELECT * FROM bible_books";
    $result = mysqli_query($link, $sql);
    $books = mysqli_fetch_all($result,MYSQLI_ASSOC);
    return $books;
}
function get_book_name($number){
    global $link;
    mysqli_query($link,'set character_set_results ="utf8"');
    $sql="SELECT * FROM bible_books WHERE book_number='$number'";
    $result = mysqli_query($link, $sql);
    $books = mysqli_fetch_all($result,MYSQLI_ASSOC);
    return $books;
}
function get_translations(){
    global $link;
    mysqli_query($link,'set character_set_results ="utf8"');
    $sql="SELECT * FROM bible_translations";
    $result = mysqli_query($link, $sql);
    $books = mysqli_fetch_all($result,MYSQLI_ASSOC);
    return $books;
}
function get_current_translations($type){
    global $link;
    mysqli_query($link,'set character_set_results ="utf8"');
    $sql="SELECT * FROM bible_translations WHERE type='$type'";
    $result = mysqli_query($link, $sql);
    $books = mysqli_fetch_all($result,MYSQLI_ASSOC);
    return $books;
}
function get_next_chapter($number_book,$chapter_number){
    global $link;
    mysqli_query($link,'set character_set_results ="utf8"');
    $sql="SELECT * FROM bible_translations WHERE (number_books='$number_book') OR (chapter_number='$chapter_number')";
    $result = mysqli_query($link, $sql);
    $books = mysqli_fetch_all($result,MYSQLI_ASSOC);
    return $books;
}


function universal_funtion_content($name,$value){

    global $link;
    mysqli_query($link,'set character_set_results ="utf8"');
    $sql="SELECT * FROM boks_content WHERE ".$name."='$value'";
    mysqli_query($link, "SET NAMES 'UTF8'");
    $result = mysqli_query($link, $sql);
    $books = mysqli_fetch_all($result,MYSQLI_ASSOC);
    return $books;
}