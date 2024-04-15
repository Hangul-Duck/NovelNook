
function addBlocks() {
    var container = document.getElementById("col");

    for (var i = 0; i < 30; i++) {
        var newDiv = document.createElement("div");
        newDiv.className = "title";

        var link = document.createElement("a");
        link.href = "#";

        var image = document.createElement("img");
        image.src = "assets/img/CarouselCard.png";
        image.className = "card-img-top";

        var addTextDiv = document.createElement("div");
        addTextDiv.className = "addText card-body row";

        var genreSpan = document.createElement("span");
        genreSpan.className = "card-genre col";
        genreSpan.textContent = "Жанр";

        var gradeSpan = document.createElement("span");
        gradeSpan.className = "card-grade col";
        gradeSpan.textContent = "Оценка";

        var nameTitleDiv = document.createElement("div");
        nameTitleDiv.className = "nameTitle";

        var titleH6 = document.createElement("h6");
        titleH6.className = "card-title";
        titleH6.textContent = "Имя карточки";

        nameTitleDiv.appendChild(titleH6);

        addTextDiv.appendChild(genreSpan);
        addTextDiv.appendChild(gradeSpan);

        link.appendChild(image);
        link.appendChild(addTextDiv);
        link.appendChild(nameTitleDiv);

        newDiv.appendChild(link);

        container.appendChild(newDiv);
    }
}