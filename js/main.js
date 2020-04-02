
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