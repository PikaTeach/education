<?
$title="Вход на сайт";
include 'site_components/head.php';
?>
    
    <div class="container my-5">
      <h1 class="text-center">Вход на сайт</h1>
      <div class="row justify-content-center">
        <div class="col-md-5">
          <form action="auth_obr.php" onsubmit="send(this); return false" method="POST">
            <div class="form-group">
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-user" aria-hidden="true"></i>
                  </div>
                </div>
                <input name="login" required placeholder="Логин" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-key" aria-hidden="true"></i>
                  </div>
                </div>
              <input name="pass" required placeholder="Пароль" class="form-control" type="password">
              </div>
            </div>
            <p id="info" style="color:red;"></p>
              <div class="form-check mb-2 mr-sm-2">
                <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                <label class="form-check-label" for="inlineFormCheck">
                  Запомнить меня
                </label>
              </div>
              <input class="btn btn-primary form-control" type="submit" value="Войти">
              <a class="dropdown-item" href="reg.php">Регистрация</a>
              <a class="dropdown-item" href="#">Восстановить пароль</a>
          </form>
        </div>
      </div>
    </div>
    <script>
      function getXmlHttp(){
        var xmlhttp;
        try {
          xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
          try {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
          } catch (E) {
            xmlhttp = false;
          }
        }
        if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
          xmlhttp = new XMLHttpRequest();
        }
        return xmlhttp;
      }
      function send(form){
        let xmlhttp = getXmlHttp();
        let data = "";
        for (let i=0; i<form.length-1; i++)
          data += form.elements[i].name+"="+form.elements[i].value+'&';
        xmlhttp.open("POST","auth_obr.php",true);
        xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');//setRequestHeader(name, value)
        xmlhttp.send(data);
        xmlhttp.onreadystatechange = ()=> {
          if (xmlhttp.readyState == 4 && xmlhttp.status==200)
            if(xmlhttp.responseText==0)
              info.innerText = "Неправильный логин или пароль";
            else if(xmlhttp.responseText==1)
              location.href="lk.php";
            else
              alert("Ошибка!");
        }
      }
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>