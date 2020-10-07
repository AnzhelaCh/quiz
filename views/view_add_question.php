<div class='add_question_content'>
    <form class='add_question_form' action="action_sent_question.php" method="post" enctype='multipart/form-data' name="Form">
        <p class='add_question_title'>Запитання:</p>
            <textarea  name="questionName"></textarea>
        <p class='add_question_title'>Відповідь:</p>
            <div class='add_question_newAnswer'>

                <textarea class='add_question_newAnswer_select' name="newAnswer"></textarea>
                <select name='correctAnswerBase'>
                    <option  value="1"> вірна відповідь</option>
                    <option  value="0"> не вірна відповідь</option>
                </select>
            </div>
                <br>
                <div id="DynamicExtraFieldsContainer">
                    <div id="addDynamicField">
                        <input type="button" id="addDynamicExtraFieldButton" value="Додати відповідь +">
                    </div>
                    <div class="DynamicExtraField"></div>
                </div>
        <div class="link_list">
            <input type='submit' class="check_answer" value='Зберегти' name='add_question'>
            <a type="button" class="link_comeback" href="quizList">Повернутися на головну</a>
        </div>

</form>

</div>


