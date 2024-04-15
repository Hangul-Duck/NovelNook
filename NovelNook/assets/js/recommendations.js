document.addEventListener('DOMContentLoaded', function() {
    let recommendationsContainer = document.querySelector('.recommendations');

    if (recommendationsContainer) {
        for (let i = 0; i < 20; i++) {
            let cardRec = document.createElement('div');
            cardRec.classList.add('card-rec');

            let link = document.createElement('a');
            link.setAttribute('href', '/title.php');

            let img = document.createElement('img');
            img.setAttribute('src', 'assets/img/CarouselCard.png');
            img.classList.add('card-img-top');
            img.setAttribute('alt', '...');

            let addText = document.createElement('div');
            addText.classList.add('addText', 'card-body', 'row');

            let genre = document.createElement('span');
            genre.classList.add('card-genre', 'col');
            genre.textContent = 'Жанр';

            let grade = document.createElement('span');
            grade.classList.add('card-grade', 'col');
            grade.textContent = 'Оценка';

            let nameTitle = document.createElement('div');
            nameTitle.classList.add('nameTitle');

            let title = document.createElement('h6');
            title.classList.add('card-title');
            title.textContent = 'Имя карточки';

            addText.appendChild(genre);
            addText.appendChild(grade);
            nameTitle.appendChild(title);
            link.appendChild(img);
            link.appendChild(addText);
            link.appendChild(nameTitle);
            cardRec.appendChild(link);

            recommendationsContainer.appendChild(cardRec);
        }
    } else {
        console.error('Не удалось найти блок recommendations.');
    }
});
