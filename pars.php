<?php
/*
 * DELETE a.* FROM mytable a,
(SELECT
b.country_id, b.city_name, MIN(b.id) mid
FROM mytable b
GROUP BY b.country_id, b.city_name
) c
WHERE
a.country_id = c.country_id
AND a.city_name = c.city_name
AND a.id > c.mid


$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'bible';

$books= [
    [
        "name" => "Бытие",
        "short_name" => "Бт",
    ],
    [
        "name" => "Исход",
        "short_name" => "Исх",
    ],
    [
        "name" => "Левит",
        "short_name" => "Лв",
    ],
    [
        "name" => "Числа",
        "short_name" => "Чс",
    ],
    [
        "name" => "Второзаконие",
        "short_name" => "Вт",
    ],
    [
        "name" => "Иисус Навин",
        "short_name" => "ИсН",
    ],
        [
        "name" => "Судьи",
        "short_name" => "Сд",
    ],
    [
        "name" => "Руфь",
        "short_name" => "Рф",
    ],
    [
        "name" => "1 Царств",
        "short_name" => "1Цр",
    ],
    [
        "name" => "2 Царств",
        "short_name" => "2Цр",
    ],
    [
        "name" => "3 Царств",
        "short_name" => "3Цр",
    ],
    [
        "name" => "4 Царств",
        "short_name" => "4Цр",
    ],
        [
        "name" => "1 Паралипоменон",
        "short_name" => "1Пар",
    ],
    [
        "name" => "2 Паралипоменон",
        "short_name" => "2Пар",
    ],
    [
        "name" => "Ездра",
        "short_name" => "Езд",
    ],
    [
        "name" => "Неемия",
        "short_name" => "Не",
    ],
    [
        "name" => "Есфирь",
        "short_name" => "Есф",
    ],
    [
        "name" => "Иов",
        "short_name" => "Иов",
    ],
        [
        "name" => "Псалтирь",
        "short_name" => "Пс",
    ],
    [
        "name" => "Притчи",
        "short_name" => "Пр",
    ],
    [
        "name" => "Екклесиаст",
        "short_name" => "Ек",
    ],
    [
        "name" => "Песня Песней",
        "short_name" => "ПП",
    ],
    [
        "name" => "Исаия",
        "short_name" => "Иса",
    ],
    [
        "name" => "Иеремия",
        "short_name" => "Иер",
    ],
        [
        "name" => "Плач Иеремии",
        "short_name" => "Пл",
    ],
    [
        "name" => "Иезекииль",
        "short_name" => "Иез",
    ],
    [
        "name" => "Даниил",
        "short_name" => "Дан",
    ],
    [
        "name" => "Осия",
        "short_name" => "Ос",
    ],
    [
        "name" => "Иосиль",
        "short_name" => "Ил",
    ],
    [
        "name" => "Амос",
        "short_name" => "Ам",
    ],
        [
        "name" => "Авдий",
        "short_name" => "Авд",
    ],
    [
        "name" => "Иона",
        "short_name" => "Ион",
    ],
    [
        "name" => "Михей",
        "short_name" => "Мх",
    ],
    [
        "name" => "Наум",
        "short_name" => "На",
    ],
    [
        "name" => "Аввакум",
        "short_name" => "Авв",
    ],
    [
        "name" => "Софония",
        "short_name" => "Сф",
    ],
        [
        "name" => "Аггей",
        "short_name" => "Аг",
    ],
    [
        "name" => "Захария",
        "short_name" => "Зх",
    ],
    [
        "name" => "Малахия",
        "short_name" => "Мл",
    ],
    [
        "name" => "От Матфея",
        "short_name" => "Мф",
    ],
    [
        "name" => "От Марка",
        "short_name" => "Мк",
    ],
    [
        "name" => "От Луки",
        "short_name" => "Лк",
    ],
        [
        "name" => "От Иоанна",
        "short_name" => "Ин",
    ],
    [
        "name" => "Деяния",
        "short_name" => "Де",
    ],
    [
        "name" => "Иакова",
        "short_name" => "Иак",
    ],
    [
        "name" => "1 Петра",
        "short_name" => "1Пт",
    ],
    [
        "name" => "2 Петра",
        "short_name" => "2Пт",
    ],
    [
        "name" => "1 Иоанна",
        "short_name" => "1Ин",
    ],
        [
        "name" => "2 Иоанна",
        "short_name" => "2Ин",
    ],
    [
        "name" => "3 Иоанна",
        "short_name" => "3Ин",
    ],
    [
        "name" => "Иуды",
        "short_name" => "Иу",
    ],
    [
        "name" => "Римлянам",
        "short_name" => "Рм",
    ],
    [
        "name" => "1 Коринфянам",
        "short_name" => "1Кр",
    ],
    [
        "name" => "2 Коринфянам",
        "short_name" => "2Кр",
    ],
        [
        "name" => "Галатам",
        "short_name" => "Гл",
    ],
    [
        "name" => "Ефесянам",
        "short_name" => "Еф",
    ],
    [
        "name" => "Филиппийцам",
        "short_name" => "Фп",
    ],
    [
        "name" => "Колоссянам",
        "short_name" => "Кл",
    ],
    [
        "name" => "1 Фессалоникийцам",
        "short_name" => "1Фс",
    ],
    [
        "name" => "2 Фессалоникийцам",
        "short_name" => "2Фс",
    ],
    [
        "name" => "1 Тимофею",
        "short_name" => "1Тм",
    ],
    [
        "name" => "2 Тимофею",
        "short_name" => "2Тм",
    ],
    [
        "name" => "Титу",
        "short_name" => "Тит",
    ],
    [
        "name" => "Филимону",
        "short_name" => "Фм",
    ],
    [
        "name" => "Евреям",
        "short_name" => "Евр",
    ],
    [
        "name" => "Откровение",
        "short_name" => "Отк",
    ],

];

foreach ($list as $key=>$value){
    $name = $value['name'];
    $short_name = $value['short_name'];
    $key = $key+1;
    $mysqli = new mysqli ($servername, $username, $password, $dbname);
    $mysqli->query("SET NAMES 'utf8'");
    $mysqli->query("INSERT INTO `bible_books` ( `parent_id`, `name`, `short_name`, `book_number`, `link`)
                                             VALUES ('3','$name' , '$short_name', '$key', ' ');");
    $mysqli->close();

}*/
ini_set('memory_limit','32M');
require_once 'phpQuery/phpQuery/phpQuery.php';
$first_url='https:';
$url = 'https://allbible.info/';
$html = file_get_contents($url);
$all_chapter_Links = allLinks($html, $first_url);
function allLinks($html,$first_url){
    $book_links = [];
    $domLinks = phpQuery::newDocument($html);
   $hrefBoks = $domLinks->find('#bible_sinodal')->find('.b_book_name')->children('a');
      foreach ($hrefBoks as $key => $href) {
          $href = pq($href);
          $current_link_book = $href->attr('href');
          $book_links[$key] = $first_url.$current_link_book;
      }
    phpQuery::unloadDocuments();
    $test = allChapter($book_links, $first_url);
    return $test;
}

function allChapter($link, $url){
    $all_list_chapter = [];
  

    foreach ($link as $key => $href) { 

        $current_link = file_get_contents($href);
        $all_chapter_dom = phpQuery::newDocument($current_link);
        $chapter_current_link = $all_chapter_dom->find('.b_content>.b_pagination:eq(0)')->find('.b_pagination_link');
        $lists_chapter = [];
        foreach ($chapter_current_link as $key_link => $value) {
            $lists_chapter[0] = $href;
            $value = pq($value);

            $lists_chapter[$key_link+1] = $url.$value->attr('href');
        }
        $all_list_chapter[$key] = $lists_chapter;
    }

    $test = allContent($all_list_chapter, $url);
   return $test;
}



function allContent($link, $url)
{

    $list = [];
    $number_books = 1;

    foreach ($link as $cont_value => $value) {
        $cont_value=$cont_value+1;

            if ($cont_value < 30) {
            $number_books =  $cont_value;


        }  elseif ($cont_value ==30) {
            $number_books =  $cont_value;
            $value[0] = 'https://allbible.info/bible/sinodal/ob/1/';

        } elseif ($cont_value<30&&$cont_value>48){
            $number_books =  $cont_value;

        }

        elseif ($cont_value == 48 ){
            $number_books = $cont_value;
            $value[0] = 'https://allbible.info/bible/sinodal/2jo/1/';


        } elseif ($cont_value == 49) {
            $number_books = $cont_value;
            $value[0] = 'https://allbible.info/bible/sinodal/3jo/1/';

        } elseif ($cont_value == 50) {
            $number_books = $cont_value;
            $value[0] = 'https://allbible.info/bible/sinodal/jude/1/';

        } elseif ($cont_value > 50 && $cont_value < 63) {
            $number_books = $cont_value;
                foreach ($value as $cont_key => $cont) {
                    $cont_key = $cont_key + 1;
                    $current_link = file_get_contents($cont);
                    $all_chapter_dom = phpQuery::newDocument($current_link);
                    $chapter_current_link = $all_chapter_dom->find('.b_verse');
                    foreach ($chapter_current_link as $verse_key => $verse) {
                        $book_name = $all_chapter_dom->find('h2.header')->text();
                        $verse_key = $verse_key+1;
                        $verse = pq($verse);
                        $verse_content = $verse->text();
                        $servername = 'localhost';
                        $username = 'root';
                        $password = '';
                        $dbname = 'mybible';
                        $mysqli = new mysqli ($servername, $username, $password, $dbname);
                        $mysqli->query("SET NAMES 'utf8'");

                        $sql = $mysqli->query("INSERT INTO `contents` ( `verse_number`, `verse_content`, `number_chapter`, `book_number`,`book_name`, `translete_name`,`translete_type`)
                                                              VALUES ('$verse_key', '$verse_content', '$cont_key', '$cont_value','$book_name','Современный перевод', 'mdrn');");

                        $mysqli->close();
                    }
                }
        } elseif ($cont_value == 63) {
            $number_books = $cont_value;
            $value[0] = 'https://allbible.info/bible/sinodal/phm/1/';
                foreach ($value as $cont_key => $cont) {
                    $cont_key = $cont_key + 1;
                    $current_link = file_get_contents($cont);
                    $all_chapter_dom = phpQuery::newDocument($current_link);
                    $chapter_current_link = $all_chapter_dom->find('.b_verse');
                    foreach ($chapter_current_link as $verse_key => $verse) {
                        $book_name = $all_chapter_dom->find('h2.header')->text();
                        $verse_key = $verse_key+1;
                        $verse = pq($verse);
                        $verse_content = $verse->text();
                        $servername = 'localhost';
                        $username = 'root';
                        $password = '';
                        $dbname = 'mybible';
                        $mysqli = new mysqli ($servername, $username, $password, $dbname);
                        $mysqli->query("SET NAMES 'utf8'");

                        $sql = $mysqli->query("INSERT INTO `contents` ( `verse_number`, `verse_content`, `number_chapter`, `book_number`,`book_name`, `translete_name`,`translete_type`)
                                                              VALUES ('$verse_key', '$verse_content', '$cont_key', '$cont_value','$book_name','Современный перевод', 'mdrn');");

                        $mysqli->close();
                    }
                }
        } elseif ($cont_value > 63 && $cont_value <=66 ) {
            $number_books = $cont_value;
                foreach ($value as $cont_key => $cont) {
                    $cont_key = $cont_key + 1;
                    $current_link = file_get_contents($cont);
                    $all_chapter_dom = phpQuery::newDocument($current_link);
                    $chapter_current_link = $all_chapter_dom->find('.b_verse');
                    foreach ($chapter_current_link as $verse_key => $verse) {
                        $book_name = $all_chapter_dom->find('h2.header')->text();
                        $verse_key = $verse_key+1;
                        $verse = pq($verse);
                        $verse_content = $verse->text();
                        $servername = 'localhost';
                        $username = 'root';
                        $password = '';
                        $dbname = 'mybible';
                        $mysqli = new mysqli ($servername, $username, $password, $dbname);
                        $mysqli->query("SET NAMES 'utf8'");

                        $sql = $mysqli->query("INSERT INTO `contents` ( `verse_number`, `verse_content`, `number_chapter`, `book_number`,`book_name`, `translete_name`,`translete_type`)
                                                              VALUES ('$verse_key', '$verse_content', '$cont_key', '$cont_value','$book_name','Современный перевод', 'mdrn');");

                        $mysqli->close();
                    }
                }

        }
        $number = 0;

    }
}


