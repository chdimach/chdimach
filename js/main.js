
function toggleBibleBooks() {
    if(window.innerWidth < 992) {
        $('.bible-side').toggleClass("d-none");
        $('.current-book-wrapper').toggleClass('visible');
        $('.bible-side-wrap-toggle').toggleClass('hidden');
    }else {
        $('.bible-side').toggleClass("d-lg-block");
        $('.current-book-wrapper').toggleClass('visible');
        $('.hide-bible-side-title.visible').toggleClass('d-lg-block');
        $('.hide-bible-side-title.hidden').toggleClass('d-none');
        $('.bible-side-wrap-toggle').toggleClass('hidden');
    }
}

function translationsDropdown() {
    $('.translation-wrap-current').toggleClass('visible');
    $('.translations-dropdown-list').toggleClass('visible')
}

function chapterDropdown() {
$('.current-chapter-wrap').toggleClass('visible');
$('.chapter-dropdown-list').toggleClass('visible')
}


function toggleTab(e) {
    $('.bible-side-tab').removeClass("current");
    $(e).addClass('current');
}

$('.bible-side-tab-new').on('click', function () {
    $('.bible-books-new').removeClass('d-none');
    $('.bible-books-old').addClass('d-none');
});

$('.bible-side-tab-old').on('click', function () {
    $('.bible-books-old').removeClass('d-none');
    $('.bible-books-new').addClass('d-none');
});

function colorTheme() {
    if (localStorage.getItem('theme') === null) {
        $('body').toggleClass('dark');
         localStorage.setItem('theme', 'dark');
         localStorage.getItem('theme');
    }else if (localStorage.getItem('theme') === "dark") {
        $('body').toggleClass('dark');
        localStorage.removeItem('theme');
    }
}

if (localStorage.getItem('theme') === 'dark') {
    $('body').toggleClass('dark');
}
