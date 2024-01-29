<html>
  <head>
    <title>Отзывы</title>
  </head>
  <body>
    <h2>Оставьте свой отзыв</h2>
    <form action = "save_remarks php" method="post">
      <p>
        <label>Тема сообщения: <br></label>
        <textarea name = "tema" cols= "38" rows="3"></textarea>
      </p>
      <p>
        <label>Введите текст сообщения: <br></label>
        <textarea name = "text" cols= "38" rows= "6"></textarea>
      </p>
      <p>
        <input type="submit" name = "submit" value = "Coxpaнить">
      </p>
    </form>
</body>
</html>