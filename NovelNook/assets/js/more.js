function toggleContent() {
    var moreContent = document.getElementById('contentBlock');
    var moreButton = document.getElementById('more-button');

    if (moreContent.style.display === 'none') {
        moreContent.style.display = 'block';
        moreButton.innerText = 'Скрыть';
    } else {
        moreContent.style.display = 'none';
        moreButton.innerText = 'Больше';
    }
}