<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form action="/goster" method="post">
      @csrf
      Ad: <input type="text" name="ad"><br>
      Soyad: <input type="text" name="soyad"><br>
      <input type="submit" name="gonder" value="Gönder"><br><br>
    </form>



  </body>
</html>
