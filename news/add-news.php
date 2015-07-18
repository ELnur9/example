<div class="content" xmlns="http://www.w3.org/1999/html">

    <div class="nov">Добавить новость</div>
    <div class="blue"></div>

    <form action="/news/create-news.php" method="post" class="form">
        <div class="form-group">
            <label for="title">Заголовок новости</label>
            <input type="text" name="title" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="author">Автор</label>
            <input type="text" name="author" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="content">Автор</label>
            <textarea rows="10" cols="45" name="content" class="form-control"> </textarea>
        </div>
        <hr/>
        <input type="submit" value="Создать"/>


    </form>


</div>