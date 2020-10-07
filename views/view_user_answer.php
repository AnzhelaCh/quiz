<?php
foreach($quizList as $key=>$questionList)
{

    foreach ($id_array as $index => $userResponse)
    {

        if($userResponse==$questionList['id'])
        {
        ?>
            <h3 class='quizTitle'><?= $questionList['name']; ?></h3>
        <?php
            foreach($scoreArray as $date=>$val)
            {

                foreach($answerNameArray as $Namedate=>$NameVal)
                {

                    if($date==$Namedate && $key== $Namedate && $val==0)
                    {
        ?>
                        <p class='resultOfquestion'><?= $NameVal; ?></p>
                        <p>Вірно:</p>
        <?php
                        foreach ($AnswerList as $true_kye=>$true_value)
                        {

                            if($true_value['question_id']==$userResponse && $true_value['is_correct']==1)
                            {
                            ?>
                                <p class='resultOfquestionCorrect'><?=$true_value['answer_name'];?></p>
                            <?php
                            }
                        }
                    }elseif ($date==$Namedate && $key== $Namedate && $val==1)
                    {
                     ?>
                        <p class='resultOfquestionTrue'><?= $NameVal; ?></p>
                    <?php
                    }
                 }

             }
        }
    }
}

    if(is_array($totalScore))
    {
    ?>
        <div class='totalScore'>
            <h3 class='totalScore'>Вірних відповідей <?=count($totalScore);?> із <?=count($quizList);?></h3>
        </div>
    <?php

    }else
     {
        $totalScore=0;
    ?>
        <div class='totalScore'>
            <h3 class='totalScore'>Вірних відповідей <?=$totalScore;?> із <?=count($quizList);?></h3>
        </div>
<?php


}

?>



