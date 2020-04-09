<?php
include('function.php');
include('database.php');
include ('header.php');
?>
<main>
	<div class="container">
		<a href="index.php" class="comeback-title-wrap d-flex align-items-center">
			<svg fill="#00b4cc" height="22px" width="22px" x="0px" y="0px"
			     viewBox="0 0 477.175 477.175">
				<path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
				c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"/>
			</svg>
			<span class="comeback-title">Вернуться назад</span>
		</a>
        <?php
        $name =$_GET['name'];
        ?>
        <h3 class="chapter-name"><?=$name ?></h3>
		<h6 class="chapters-title">Главы</h6>
		<div class="chapters-wrap mt-4">
			<div class="chapters d-flex flex-wrap">
                <?php
                $number =$_GET['number_book'];
                $chapters = get_chapters('syn',$number);
                ?>
                <?php foreach ($chapters as $chap):?>
                    <a href="read.php?trans=<?=$_GET['trans']?>&chapter=<?= $chap['number_chapter'] ?>&number=<?=$_GET['number_book']?>" class="chapter"><span class="chapter-number"><?= $chap['number_chapter'] ?></span></a>
                <?php endforeach;  ?>
			</div>
		</div>
		<div class="book-description-wrap mt-4">
			<div class="book-description">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem deserunt dicta dignissimos dolorum eius error eveniet inventore ipsum laboriosam minus, quae quas qui quo ratione tempore. Aliquid amet aperiam autem beatae blanditiis consequatur cumque facere fuga impedit iusto laboriosam modi necessitatibus, odio omnis optio quasi quod quos repudiandae sequi sit tempora tempore velit veritatis. Ipsam iste magni ratione unde! Architecto, asperiores corporis dignissimos dolore excepturi ipsum, laborum, laudantium odio reprehenderit saepe ullam voluptatum! Debitis dolore officiis quam quos suscipit tempore.
			</div>
		</div>
	</div>
</main>
<?php include ('footer.php')?>
