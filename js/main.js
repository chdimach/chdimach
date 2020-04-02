
function toggleBibleBooks() {
    if(window.innerWidth < 992) {
        $('.bible-side').toggleClass("d-none");
        $('.bible-side-wrap-toggle').toggleClass('hidden');
    }else {
        $('.bible-side').toggleClass("d-lg-block");
        $('.hide-bible-side-title.visible').toggleClass('d-lg-block');
        $('.hide-bible-side-title.hidden').toggleClass('d-none');
        $('.bible-side-wrap-toggle').toggleClass('hidden');
    }
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

