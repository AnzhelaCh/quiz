<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script
      src="https://code.jquery.com/jquery-2.2.4.js"
      integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
      crossorigin="anonymous"></script>
    <title>QUIZ</title>
</head>
<body>

    <header class='header'>
        <div class='title'>
            <h1 class='h1'>
            ІV. Питання на перевірку знання спеціального законодавства (законів
            України «Про Кабінет Міністрів України», «Про центральні органи
            виконавчої влади», «Про адміністративні послуги», «Про місцеві державні
            адміністрації», «Про звернення громадян», «Про доступ до публічної
            інформації», «Про засади запобігання та протидії дискримінації в Україні»,
            «Про забезпечення рівних прав та можливостей жінок і чоловіків», Конвенції
            про права осіб з інвалідністю, Бюджетного кодексу України та Податкового
            кодексу України)
            </h1>
        </div>
    </header>

   <main class='main'>
        <div class='quiz_content'>

                <?php
                include 'controllers/'.$controller;
                ?>

        </div>
   </main>
</body>

</html>

