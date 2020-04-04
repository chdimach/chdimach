<?php
include('function.php');
include('database.php');
include ('header.php');
?>
<?php
$cont =$_GET['chapter'];
if (current($_GET)==$_GET['chapter']){
    $content = get_content($cont);
}
else{
    $chap_num =$_GET['number'];
    $num_book =$_GET['number_book'];
    $content = get_next_chapter($num_book,$chap_num);
}



$back = $content[0]['chapter_number']-1;
$next = $content[0]['chapter_number']+1;
$book_number = $content[0]['number_books'];
$book_name = get_book_name($content[0]['number_books']);
?>
<div class="bible-nav">
    <div class="translation-select-wrap d-flex align-items-center justify-content-center">
        <div class="translation-wrap-current d-flex align-items-center justify-content-center">
            <div class="current-translation">Синодальный перевод</div>
            <svg width="16px" height="16px" x="0px" y="0px" viewBox="0 0 451.847 451.847" style="margin-left: 5px">
                <path d="M225.923,354.706c-8.098,0-16.195-3.092-22.369-9.263L9.27,151.157c-12.359-12.359-12.359-32.397,0-44.751
                        c12.354-12.354,32.388-12.354,44.748,0l171.905,171.915l171.906-171.909c12.359-12.354,32.391-12.354,44.744,0
                        c12.365,12.354,12.365,32.392,0,44.751L248.292,345.449C242.115,351.621,234.018,354.706,225.923,354.706z"/>
            </svg>
        </div>
    </div>
</div>
<div class="bible-nav">
    <div class="container d-flex justify-content-between">
        <div class="d-flex">
            <div class="chapter-select-wrap d-flex align-items-center">
                    <div class="current-book mr-2">
                        <?=$book_name[0]['name'] ?>
                    </div>

                <div class="current-chapter"><span>Глава </span><span class="chapter-number"><?=$content[0]['chapter_number'] ?></span></div>
                <svg width="16px" height="16px" viewBox="0 0 451.847 451.847">
                    <path d="M225.923,354.706c-8.098,0-16.195-3.092-22.369-9.263L9.27,151.157c-12.359-12.359-12.359-32.397,0-44.751
                        c12.354-12.354,32.388-12.354,44.748,0l171.905,171.915l171.906-171.909c12.359-12.354,32.391-12.354,44.744,0
                        c12.365,12.354,12.365,32.392,0,44.751L248.292,345.449C242.115,351.621,234.018,354.706,225.923,354.706z"/>
                </svg>
            </div>
        </div>
        <div class="d-flex">
            <div class="arrows-wrap d-flex">
                <a href="read.php?number=<?=$back.'&number_book='.$book_number.'&chapter='.$cont?> " class="arrow-back">
                    <svg fill="#fafafa" x="0px" y="0px" width="14px" height="14px" viewBox="0 0 451.846 451.847" style="transform: rotate(180deg)">
                        <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
                                L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
                                c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"/>
                    </svg>
                </a>
                <a href="read.php?number=<?=$next.'&number_book='.$book_number.'&chapter='.$cont ?>" class="arrow-next">
                    <svg fill="#fafafa" x="0px" y="0px" width="14px" height="14px" viewBox="0 0 451.846 451.847">
                        <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
                                L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
                                c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>
<main class="mt-4">
    <div class="container-lg container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <aside>
                    <div class="bible-side-wrap-toggle w-lg-100 mb-2 d-flex justify-content-center align-items-center" onclick="toggleBibleBooks()">
                        <svg class="double-arrow" width="12px" height="12px" viewBox="0 0 284.936 284.936">
                            <path d="M277.515,135.9L144.464,2.857C142.565,0.955,140.375,0,137.9,0c-2.472,0-4.659,0.955-6.562,2.857l-14.277,14.275
    c-1.903,1.903-2.853,4.089-2.853,6.567c0,2.478,0.95,4.664,2.853,6.567l112.207,112.204L117.062,254.677
    c-1.903,1.903-2.853,4.093-2.853,6.564c0,2.477,0.95,4.667,2.853,6.57l14.277,14.271c1.902,1.905,4.089,2.854,6.562,2.854
    c2.478,0,4.665-0.951,6.563-2.854l133.051-133.044c1.902-1.902,2.851-4.093,2.851-6.567S279.417,137.807,277.515,135.9z"/>
                            <path d="M170.732,142.471c0-2.474-0.947-4.665-2.857-6.571L34.833,2.857C32.931,0.955,30.741,0,28.267,0s-4.665,0.955-6.567,2.857
    L7.426,17.133C5.52,19.036,4.57,21.222,4.57,23.7c0,2.478,0.95,4.664,2.856,6.567L119.63,142.471L7.426,254.677
    c-1.906,1.903-2.856,4.093-2.856,6.564c0,2.477,0.95,4.667,2.856,6.57l14.273,14.271c1.903,1.905,4.093,2.854,6.567,2.854
    s4.664-0.951,6.567-2.854l133.042-133.044C169.785,147.136,170.732,144.945,170.732,142.471z"/>
                        </svg>
                        <span class="hide-bible-side-title visible d-none d-lg-block">Скрыть меню</span>
                        <span class="hide-bible-side-title hidden d-none">Открыть меню</span>
                    </div>
                    <div class="bible-side d-none d-lg-block">
                        <div class="bible-side-wrap">
                            <div class="bible-side-tabs-wrap d-flex">
                                <div class="bible-side-tab bible-side-tab-new" onclick="toggleTab(this)">Новый завет</div>
                                <div class="bible-side-tab bible-side-tab-old current" onclick="toggleTab(this)">Ветхий завет</div>
                            </div>
                            <div class="bible-books-new d-none">
                                <div class="bible-books-wrap mt-lg-0 mt-2 d-flex justify-content-center flex-lg-column flex-wrap">
                                    <?php
                                    $books = get_books();
                                    $transl='syn';
                                    ?>
                                    <?php foreach ($books as $book):?>
                                        <?php if($book['book_number']>=40){
                                            echo '<div class="bible-book"><a href="chapters.php?trans='.$transl.'&number_book='.$book["book_number"].'& name='.$book['name'].'" class="book"><span class="book-name">'.$book['name'] .'</span><span class="book-abbr">'.$book['short_name'].'</span></a></div>
                    ';
                                        }?>
                                    <?php endforeach;  ?>
                                </div>
                            </div>
                            <div class="bible-books-old">
                                <div class="bible-books-wrap bible-books-wrap-old mt-lg-0 mt-2 d-flex justify-content-center flex-lg-column flex-wrap">
                                    <?php foreach ($books as $book):?>
                                        <?php if($book['book_number']<40){
                                            echo '<div class="bible-book"><a href="chapters.php?trans='.$transl.'&number_book='.$book["book_number"].'& name='.$book['name'].'" class="book"><span class="book-name">'.$book['name'] .'</span><span class="book-abbr">'.$book['short_name'].'</span></a></div>
                    ';
                                        }?>
                                    <?php endforeach;  ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
            <div class="bible-text col-11 col-lg-8">
                <?=$content[0]['content'] ?>
            </div>
        </div>
    </div>
</main>
<?php include ('footer.php')?>
