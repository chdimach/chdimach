function toggleBibleBooks() {
    $('.bible-side').toggleClass("d-none");
    $('.current-book-wrapper').toggleClass('visible');
    $('.current-chapter-wrap').removeClass('visible');
    $('.chapter-dropdown-list').removeClass('visible');
    $('.translation-wrap-current').removeClass('visible');
    $('.translations-dropdown-list').removeClass('visible');
}

function chapterDropdown() {
    $('.current-chapter-wrap').toggleClass('visible');
    $('.chapter-dropdown-list').toggleClass('visible')
    $('.bible-side').addClass("d-none");
    $('.current-book-wrapper').removeClass('visible');
    $('.translation-wrap-current').removeClass('visible');
    $('.translations-dropdown-list').removeClass(`visible`)
}

function translationsDropdown() {
    $('.translation-wrap-current').toggleClass('visible');
    $('.translations-dropdown-list').toggleClass('visible')
    $('.bible-side').addClass("d-none");
    $('.current-book-wrapper').removeClass('visible');
    $('.current-chapter-wrap').removeClass('visible');
    $('.chapter-dropdown-list').removeClass('visible');
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

