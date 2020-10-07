<div class='addQuestion'>
        <a class="addQuestion_title" href='addQuestionToQuiz'>
            <h4 class="link_add_question"><u>Додати питання до вікторини</u> <b class="answerList">+<b></h4></a>
   </div>


    <?php
    $_COOKIE['Ind_Counter']=$_COOKIE['Ind_Counter'];
    if ($quizList != null)
    {

        ?>
        <?php
        foreach ($quizList as $index_quiz=>$quiz)
        {

            $idQ = $quiz['id'];
            extract($quiz);
            if ($quiz['name'] != NULL) {
?>


                    <form method="POST" enctype="multipart/form-data" action="" >
                    <?php

                    if ( $_COOKIE['Ind_Counter']== $index_quiz) {
                    ?>
                    <a class="link_style edit" href="edit_question?questionId=<?= $idQ; ?>">Корегувати</a>
                    <a class="link_style" href="delete_question?questionId=<?= $idQ; ?>">Видалити</a>
                    <legend class="question_Name"

                            style='font-weight:800;
                            padding-bottom:10px;
                            padding-top:10px'><?= $name; ?></legend>


                    <?php

                    if ($AnswerList != null) {

                        foreach ($AnswerList as $valueQuiz) {

                            if ($idQ == $valueQuiz['question_id']) {
                                extract($valueQuiz);
                                ?>
                                <input type="radio"
                                       id="<?= $id; ?>"
                                       name="<?= $question_id; ?>"
                                       value="<?= $answer_name; ?>?<?= $valueQuiz['is_correct']; ?>">
                                <label class="answerList" for="<?= $id; ?>"><?= $answer_name; ?></label><br>
                                <?php
                            }
                        }

                    }
                    ?>

                    <br>
                    <hr>
                    <?php
                }
            }
        }


        ?>
        <input id="number_question" value="Наступне запитання" name='next' type=submit>
        <?php
        if($_COOKIE['Ind_Counter']>=count($quizList)){
            ?>
            <input name="button" id='check_answer' class="check_answer" value="Переглянути результат" type=submit>
           <script>
               document.getElementById('number_question').style.display='none';
               document.getElementById('check_answer').style.display='flex';</script>
            <input type="submit" name="come_back" value="Повернутись на головну">
                        <?php


        }
        ?>

</form>
<?php

    }
?>


