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
$all_chapters_current_book = universal_funtion_content('number_books',$content[0]['number_books']);
?>
<main>
	<div class="bible-nav">
		<div class="container">
			<div class="bible-nav-items-wrap d-flex align-items-center">
				<div class="d-flex">
					<a href="read.php?number=<?/*=$back.'&number_book='.$book_number.'&chapter='.$cont*/?> " class="arrow-back">
						<svg fill="#fafafa" x="0px" y="0px" width="14px" height="14px" viewBox="0 0 451.846 451.847" style="transform: rotate(180deg)">
							<path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
                                L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
                                c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"/>
						</svg>
					</a>
				</div>
				<div class="current-book-wrapper bible-nav-item d-flex align-items-center" onclick="toggleBibleBooks()">
					<div class="current-book d-flex align-items-center">
						<div class="d-none d-lg-block">
                            <?=$book_name[0]['name']?>
						</div>
						<div class="d-lg-none">
							<span class="book-abbr">Бт</span>
						</div>
						<svg class="dropdown-icon" width="16px" height="16px" viewBox="0 0 451.847 451.847">
							<path d="M225.923,354.706c-8.098,0-16.195-3.092-22.369-9.263L9.27,151.157c-12.359-12.359-12.359-32.397,0-44.751
                        c12.354-12.354,32.388-12.354,44.748,0l171.905,171.915l171.906-171.909c12.359-12.354,32.391-12.354,44.744,0
                        c12.365,12.354,12.365,32.392,0,44.751L248.292,345.449C242.115,351.621,234.018,354.706,225.923,354.706z"/>
						</svg>
					</div>

				</div>
				<div class="bible-side d-none">
					<div class="bible-side-wrap">
						<div class="bible-side-tabs-wrap d-flex flex-column">
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
                                        echo '<a href="chapters.php?trans='.$transl.'&number_book='.$book["book_number"].'& name='.$book['name'].'" class="bible-book"><span>'.$book['name'] .'</span></a>
                    ';
                                    }?>
                                <?php endforeach;  ?>
							</div>
						</div>
						<div class="bible-books-old">
							<div class="bible-books-wrap bible-books-wrap-old mt-lg-0 mt-2 d-flex justify-content-center flex-lg-column flex-wrap">
                                <?php foreach ($books as $book):?>
                                    <?php if($book['book_number']<40){
                                        echo '<a href="chapters.php?trans='.$transl.'&number_book='.$book["book_number"].'& name='.$book['name'].'" class="bible-book"><span>'.$book['name'] .'</span></a>';
                                    }?>
                                <?php endforeach;  ?>
							</div>
						</div>
					</div>
				</div>

				<div class="current-chapter-wrap d-flex align-items-center bible-nav-item" onclick="chapterDropdown()">
						<div class="current-chapter chapter-select-item d-flex"><span>Глава </span><span class="chapter-number"><?=$content[0]['chapter_number'] ?></span></div>
						<svg class="dropdown-icon" width="16px" height="16px" viewBox="0 0 451.847 451.847">
							<path d="M225.923,354.706c-8.098,0-16.195-3.092-22.369-9.263L9.27,151.157c-12.359-12.359-12.359-32.397,0-44.751
                        c12.354-12.354,32.388-12.354,44.748,0l171.905,171.915l171.906-171.909c12.359-12.354,32.391-12.354,44.744,0
                        c12.365,12.354,12.365,32.392,0,44.751L248.292,345.449C242.115,351.621,234.018,354.706,225.923,354.706z"/>
						</svg>
					<div class="chapter-dropdown-list d-flex flex-column">
                        <?php foreach ($all_chapters_current_book as $chap): ?>
							<div class="chapter-select-item"><a class="chapter-number" href="read.php?chapter=<?= $chap['id'] ?>"><span>Глава</span><?=$chap['chapter_number']?></a></div>
                        <?php endforeach; ?>
					</div>
				</div>

				<div class="translation-select-wrap d-flex flex-column align-items-center justify-content-center bible-nav-item">
					<div class="translation-wrap-current d-flex align-items-center justify-content-center" onclick="translationsDropdown()">
						<div class="current-translation translation-select-item d-none d-lg-block">Синодальный перевод</div> <div class="current-translation translation-abbr translation-select-item d-lg-none">SYN</div>
						<svg class="dropdown-icon" width="16px" height="16px" x="0px" y="0px" viewBox="0 0 451.847 451.847">
							<path d="M225.923,354.706c-8.098,0-16.195-3.092-22.369-9.263L9.27,151.157c-12.359-12.359-12.359-32.397,0-44.751
                        c12.354-12.354,32.388-12.354,44.748,0l171.905,171.915l171.906-171.909c12.359-12.354,32.391-12.354,44.744,0
                        c12.365,12.354,12.365,32.392,0,44.751L248.292,345.449C242.115,351.621,234.018,354.706,225.923,354.706z"/>
						</svg>
					</div>
					<div class="translations-dropdown-list d-flex flex-column">
						<a class="translation-select-item" href="">Новый русский перевод</a>
						<a class="translation-select-item" href="">Новый русский перевод</a>
					</div>
				</div>
				<div class="d-flex">
					<a href="read.php?number=<?/*=$next.'&number_book='.$book_number.'&chapter='.$cont */?>" class="arrow-next">
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

    <div class="container-lg container-fluid mt-4">
            <div class="bible-text">
                <?=$content[0]['content'] ?>
            </div>
    </div>
</main>
<?php include ('footer.php')?>
