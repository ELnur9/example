<div class="content" xmlns="http://www.w3.org/1999/html">

    <div class="nov">Page1</div>
    <div class="blue"></div>

    <form action="/page/create-page.php" method="post" class="form">
        <div class="form-group">
            <label for="title">Имя</label>
            <input type="text" name="title" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="link">Ссылка</label>
            <input type="text" name="link" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="content">Описание</label>
            <textarea rows="10" cols="45" name="content" class="form-control"> </textarea>
        </div>
        <div class="form-group">
            <label for="is_active">Активираванно</label>
            <input type="checkbox" name="is_active" class="form-control"/>
        </div>
        <hr/>
        <input type="submit" value="Создать"/>


    </form>


</div>