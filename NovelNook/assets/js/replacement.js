document.addEventListener("DOMContentLoaded", function() {
    showContent('description');
});

function showContent(contentType) {
    var contentBlock = document.getElementById('contentBlock');
    var content = '';

    switch(contentType) {
        case 'description':
            content = '<div class="description"><p>Описание</p></div><div class="comment"><h3>Комментарии (Кол-во)</h3> <div class="col"> <input type="text" class="form-control" placeholder="Комментарий" aria-label="Комментарий "> <button type="submit" class="btn btn-primary">Отправить</button></div>';
        break;
        case 'content':
            content = '<a href="page.php"> <div id="content"> <div class="col"> <div class="row chapter"> <div class="col-4 left"> <span><h4>1</h4></span> <span>Name</span> </div> <div class="col-4 right"> <span>Autor</span> <span>data</span> </div> </div> </div> </div> </a>';
        break;

    }

    contentBlock.innerHTML = content;
}