<?php
include('function.php');
include('database.php');
include ('header.php');
?>
<?php
/*$cont =$_GET['chapter'];
$content = get_content($cont);
$book_name = get_book_name($content[0]['number_books']);*/
$ser= $_POST['search'];
?>

<main class="mt-4 search-page">
<div class="container">
	<div class="row">
            <div class="search-wrap col-12 flex-column">
                <div class="search-wrap w-100">
                    <form method="post" action="search.php" class="search-group">
                        <input value="<?=$ser ?>"  type="text" name="search" class="search-input" placeholder="Поиск">
                        <button type="submit" class="search-button" name="submit" onclick="test()" >
                            <svg height="24" fill="#fafafa" viewBox="0 0 515.558 515.558" width="24"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="m378.344 332.78c25.37-34.645 40.545-77.2 40.545-123.333 0-115.484-93.961-209.445-209.445-209.445s-209.444 93.961-209.444 209.445 93.961 209.445 209.445 209.445c46.133 0 88.692-15.177 123.337-40.547l137.212 137.212 45.564-45.564c0-.001-137.214-137.213-137.214-137.213zm-168.899 21.667c-79.958 0-145-65.042-145-145s65.042-145 145-145 145 65.042 145 145-65.043 145-145 145z"/>
                            </svg>
                        </button>
                    </form>
                </div>
                <?php
                if (isset($_POST['submit'])) {
                    $link = new mysqli('vj384588.mysql.tools','vj384588_mybible','9krR^B*0z9','vj384588_mybible');
                    $search = explode(" ", $_POST['search']);
                    $count = count($search);
                    $array = array();
                    $i = 0;
                    foreach ($search as $key) {
                        $i++;
                        if ($i < $count) $array[] = "verse_content LIKE '%" . $key . "%' AND ";
                        else $array[] = "verse_content LIKE '%" . $key . "%' ";
                    }
                    $sql = "SELECT * FROM contents WHERE " . implode("", $array);
                    mysqli_query($link, "SET NAMES 'UTF8'");
                    $result = mysqli_query($link, $sql);
                    $qer = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    $quantity = count($qer);
                }
                ?>
                <div class="search-results mt-4">
                    <h1>По запросу: "<span class="border-bottom border-info"><?=$ser ;?></span>" найдено <span class="border-bottom border-info"><?=$quantity?></span> стихов</h1>
                    <div class="search-results-wrap">
                        <?php foreach ($qer as $value): ?>
                            <div class="search-result-item">
                                    <div class="search-result-head d-flex">
                                        <a class="d-flex" href="read.php?trans=<?=$value['translete_type']?>&chapter=<?= $value['number_chapter']?>&number=<?=$value['book_number']?>#<?=$value['verse_number']?>">
                                            <div class="current-book mr-2">
                                                <?=$value['translete_name'].' ';
                                                ?>
                                            </div>
                                            <div class="current-book mr-2">
                                                <?php
                                                $name_book = get_book_name($value['book_number']);
                                                echo $name_book[0]['name'];
                                                ?>
                                            </div>
                                            <div class="current-chapter chapter-select-item">
                                                <span class="chapter-number">Глава </span> <?= $value['number_chapter'] ?>:<?= $value['verse_number'] ?>
                                            </div>
                                        </a>
                                    </div>
                                <div class="search-result-text">
                                    <div>
                                        <sup><?=$value['verse_number'] ?></sup>
                                        <?=$value['verse_content'] ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<? include('footer.php');?>