<?php
/*  Шаблоны для последовательного вывода экранов: */
/*	Количество акров земли, которые пользователь хочет купить (game_question_1) */

/*  Количество акров земли, которые пользователь хочет продать (game_question_2) */

/*  Количество бушелей пшеницы, которые будут использованы в качестве еды (game_question_3)*/

/*  Количество акров земли, которые необходимо засадить пшеницей (game_question_4)*/
?>

<div class="next_year">Прошел еще один год Вашего мудрого правления...</div>
<div class="game_questions">
    <form id="game_question_1">
        <h3>Введите число акров земли, которые вы хотите КУПИТЬ в этом году</h3>
        <label for="say_val">Купить акров земли:</label>
        <input type="text" name="say_val" id="resurce_val" value="0">
        <input type="submit" name="submit_val" id="submit_val" value="Далее">
    </form>

    <form id="game_question_2">
        <h3>Введите число акров земли, которые вы хотите ПРОДАТЬ в этом году</h3>
        <label for="say_val">Продать акров земли:</label>
        <input type="text" name="say_val" id="resurce_val" value="0">
        <input type="submit" name="submit_val" id="submit_val" value="Далее">
    </form>

    <form id="game_question_3">
        <h3>Введите число бушелей пшеницы, которые будут использованы в качестве еды в этом году</h3>
        <label for="say_val">Бушелей пшеницы:</label>
        <input type="text" name="say_val" id="resurce_val" value="0">
        <input type="submit" name="submit_val" id="submit_val" value="Далее">
    </form>

    <form id="game_question_4">
        <h3>Введите число акров земли, которые необходимо засадить пшеницей в этом году</h3>
        <label for="say_val">Акров земли:</label>
        <input type="text" name="say_val" id="resurce_val" value="0">
        <input type="submit" name="submit_val" id="submit_val" value="Далее">
    </form>
</div>
