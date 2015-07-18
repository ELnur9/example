<div class="content" xmlns="http://www.w3.org/1999/html">

    <div class="nov">Добавить жюри</div>
    <div class="blue"></div>

    <form action="/juri/create-juri.php" method="post" class="form">
        <div class="form-group">
            <label for="name">Имя жюри</label>
            <input type="text" name="name" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="link">Ссылка</label>
            <input type="text" name="link" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="descriphion">Описание</label>
            <textarea rows="10" cols="45" name="descriphion" class="form-control"> </textarea>
        </div>
        <hr/>
        <input type="submit" value="Создать"/>


    </form>


</div>