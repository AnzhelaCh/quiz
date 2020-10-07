<div class='add_question_content'>
    <form class='add_question_form' action="action_edit_data" method="post" enctype='multipart/form-data' name="Form">
        <input type='hidden' name='number' value="<?=$questionId;?>">
        <?php
            foreach($get_id_Answer as $id_Answer)
            {
             ?>
                 <input type='hidden' name='arrayIdAnswer[]' value="<?=$id_Answer;?>">
            <?php
            }
            ?>
                 <p class='add_question_title'>Запитання:</p>
                 <textarea  name="questionName"><?=$question_name;?></textarea>
                 <p class='add_question_title'>Відповідь:</p>
                 <div class='add_question_newAnswer editData'>
                    <?php
                    foreach($answer_name as $info)
                    {
                    ?>
                        <div class='edit_question_fild'>
                            <textarea class='add_question_newAnswer_select' name="newAnswer[]"><?=$info;?></textarea>
                            <select name='correctAnswerArray[]'>
                                <option  value="1"> вірна відповідь</option>
                                <option  value="0"> не вірна відповідь</option>
                            </select>
                        </div>
                    <?php
                    }
                    ?>
</div>
<br>
    <div id="DynamicExtraFieldsContainer">
        <div id="addDynamicField">

        </div>
        <div class="DynamicExtraField"></div>
    </div>

    <input type='submit' value='Зберегти' name='edit_question'>
</form>

</div>



