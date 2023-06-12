<form action="form_script.php" method="post">
          <div>
            <label for="login">
        <div>
            <label for="userName">
                <span>Введите фамилию</span>
                <input type="text"  name="surname" id="surname">
            </label>
        </div>
        <div>
            <label for="userName">
                <span>Введите имя</span>
                <input type="text"  name="name" id="name">
            </label>
        </div>
        <label for="select-lesson">Выберете предмет</label>
            <select id = "select-lesson"  name="select_lesson">
                <option value="1">Математика</option>
                <option value="2">Литература</option>
                <option value="3">Физика</option>
                <option value="4">Физкультура</option>
            </select>
            <br><br>
        <div>
          <label>Выберете время</label>
            <div>
                <input type="radio" name="time" value="9:00-10:00" id = "time1" checked>
                <label for="time1">9:00-10:00</label>
            </div>
            <div>
                <input type="radio" name="time" value="10:00-11:00" id = "time2">
                <label for="time2">10:00-11:00</label>
            </div>
            <div>
                <input type="radio" name="time" value="11:00-12:00" id = "time3">
                <label for="time3">11:00-12:00</label>
            </div>
            <div>
                <input type="radio" name="time" value="12:00-13:00" id = "time4">
                <label for="time4">12:00-13:00</label>
            </div>
        </div>
        <br>
        <div> 
            <label>Выберете форму контроля </label>
            <div>
            <div>
                <input type="radio" name="control" id = "form-control-1" value = "тест" checked>
                <label for="form-control-1">тест</label>
            </div>
            <div>
                <input type="radio" name="control"  id = "form-control-2" value = "собеседование">
                <label for="form-control-2">собеседование</label>
            </div>
            <div>
                <input type="radio" name="control" id = "form-control-3" value = "доклад">
                <label for="form-control-3">доклад</label>
            </div>
            <div>
                <input type="radio" name="control"  id = "form-control-4" value = "контрольная работа">
                <label for="form-control-4">контрольная работа</label>
            </div>
        </div>
        <br>
        <div> 
            <label for="comment">Дополнительная информация</label>
                <textarea 
                        name="comment"
                        id="comment"
                        cols="20"
                        rows="10"
                        style="width: 100%;"
                    >
                 </textarea>
            <input type="submit" value = "Отправить">
        </div>

        </div>
    </form>