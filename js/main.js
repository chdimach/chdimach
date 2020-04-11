
function toggleBibleBooks() {
    $('.bible-side').toggleClass("d-none");
    $('.current-book-wrapper').toggleClass('visible');

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
    $('.bible-books-old').toggleClass('d-none');
});

$('.bible-side-tab-old').on('click', function () {
    $('.bible-books-old').removeClass('d-none');
    $('.bible-books-new').toggleClass('d-none');
});

