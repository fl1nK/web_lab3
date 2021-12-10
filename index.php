<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Головна</title>
   <link rel="stylesheet" type="text/css" href="lab3_css.css">
   <link rel="stylesheet" href="style.css">
</head>

<body>

   <div class="wrapper">
      <div class="box1"></div>
      <div class="box2"></div>
      <div class="box3">
         <form name="myForm">
            <label>Текст </label>
            <input name='name'>
            <label>URL фото </label>
            <input name='img'>
            <input type="button" value="Відправити" onclick="slider(),getRequest(),plusSlide()">
            <input type="button" value="Результат" onclick="window.open('slider.php', '_blank');">
         </form>
      </div>
      <div class="box4">

         <div class="slider" id="slider">
            <a class="prev" onclick="minusSlide()">&#10094;</a>
            <a class="next" onclick="plusSlide()">&#10095;</a>
         </div>

         <div class="slider-dots" id='slider-dots'>
         </div>

      </div>
      <div class="box5"></div>
      <div class="box6"></div>
   </div>

   <script>
      arr = new Array()
      arrimg = new Array()
      var i = -1

      function getRequest() {
         i = i + 1
         arr[i] = document.forms['myForm']['name'].value;
         arrimg[i] = document.forms['myForm']['img'].value;
         url = 'php.php?name=' + arr + '&img=' + arrimg
         // создание объекта
         var xhr = new XMLHttpRequest();
         // конфигурация запроса
         xhr.open("GET", url, true);
         // Отправка запроса на сервер
         xhr.send();

      }
   </script>
   <script src="script.js"></script>
</body>

</html>