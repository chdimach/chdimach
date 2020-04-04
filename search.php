<?php
include('function.php');
include('database.php');
include ('header.php');
?>
<?php
/*$cont =$_GET['chapter'];
$content = get_content($cont);
$book_name = get_book_name($content[0]['number_books']);*/
?>

<main class="mt-4 search-page">
<div class="container">
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
		<div class="search-wrap col-12 col-lg-8 flex-column">
			<div class="search-group">
				<input type="text" class="search-input" value="Запрос который ввел пользователь">
				<button type="submit" class="search-button">
					<svg height="24" fill="#fafafa" viewBox="0 0 515.558 515.558" width="24"
					     xmlns="http://www.w3.org/2000/svg">
						<path d="m378.344 332.78c25.37-34.645 40.545-77.2 40.545-123.333 0-115.484-93.961-209.445-209.445-209.445s-209.444 93.961-209.444 209.445 93.961 209.445 209.445 209.445c46.133 0 88.692-15.177 123.337-40.547l137.212 137.212 45.564-45.564c0-.001-137.214-137.213-137.214-137.213zm-168.899 21.667c-79.958 0-145-65.042-145-145s65.042-145 145-145 145 65.042 145 145-65.043 145-145 145z"/>
					</svg>
				</button>
			</div>
			<div class="search-results mt-4">
				<div class="search-results-wrap">
					<div class="search-result-item">
						<div class="search-result-head d-flex">
							<div class="current-book mr-2">
								Бытие
							</div>
							<div class="current-chapter chapter-select-item"><span>Глава </span><span class="chapter-number"> 1</span></div>
						</div>
						<div class="search-result-text">
							<div id="2">
								<sup>2</sup> Земля же была безвидна и пуста, и тьма над бездною, и Дух Божий носился над водою.</div>
						</div>
					</div>
					<div class="search-result-item">
						<div class="search-result-head d-flex">
							<div class="current-book mr-2">
								Бытие
							</div>
							<div class="current-chapter chapter-select-item"><span>Глава </span><span class="chapter-number">1</span></div>
						</div>
						<div class="search-result-text">
							<div id="2">
								<sup>2</sup> Земля же была безвидна и пуста, и тьма над бездною, и Дух Божий носился над водою.</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</main>

<?php include ('footer.php')?>

