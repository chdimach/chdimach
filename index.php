<?php
include('function.php');
include('database.php');
include ('header.php');
?>
<main>
	<div class="container">
		<div class="translations-wrap text-center text-sm-left">
			<div class="translations-header">
				<h1>Переводы Библии</h1>
			</div>
			<nav class="translations-nav">
				<div class="translations-items d-flex flex-wrap justify-content-center justify-content-sm-start">
                    <?php
                    $translations = get_translations();
                    ?>
                    <?php foreach ($translations as $translation):?>
                        <div class="translation-item ">
                            <a class="translation-link" href="?translation =<?=$translation['type'] ?>">
                                <span class="translation-title"><?=$translation['name'] ?></span>
                            </a>
                        </div>
                    <?php endforeach;  ?>
				</div>
			</nav>
		</div>
	</div>
<div class="container">
	<div>
		<div class="d-flex align-items-center justify-content-center mt-5 mb-2">
			<div class="group-name">Ветхий завет</div><span class="pipe">|</span><small>Синодальный перевод</small>
		</div>
		<div class="books-wrap">
			<div class="books d-flex flex-wrap justify-content-center">
                <?php
                $books = get_books();
                $transl='syn';
                ?>
                <?php foreach ($books as $book):?>
                    <?php if($book['book_number']<40){
                        echo '<a href="chapters.php?trans='.$transl.'&number_book='.$book["book_number"].'& name='.$book['name'].'" class="book"><span class="book-name">'.$book['name'] .'</span><span class="book-abbr">'.$book['short_name'].'</span></a>
                    ';
                    }?>
                <?php endforeach;  ?>
			</div>
		</div>
	</div>
	<div>
		<div class="d-flex align-items-center justify-content-center mt-5">
			<div class="group-name">Новый завет</div><span class="pipe">|</span><small>Синодальный перевод</small>
		</div>
		<div class="books-wrap">
			<div class="books d-flex flex-wrap justify-content-center">
                <?php foreach ($books as $book):?>
                    <?php if($book['book_number']>=40){
                        echo '<a href="chapters.php?trans='.$transl.'&number_book='.$book["book_number"].'& name='.$book['name'].'" class="book"><span class="book-name">'.$book['name'] .'</span><span class="book-abbr">'.$book['short_name'].'</span></a>
                    ';
                    }?>
                <?php endforeach;?>
			</div>
		</div>
	</div>
</div>
</main>
<?php include ('footer.php')?>