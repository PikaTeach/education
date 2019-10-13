<?
$title="Регистрация";
include 'site_components/head.php';
?>
    
    <div class="container my-5">
      <h1 class="text-center">Регистрация на сайте</h1>
      <div class="row justify-content-center">
        <div class="col-md-5">
          <form action="reg_obr.php" method="POST">
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
                    <i class="fa fa-id-card-o" aria-hidden="true"></i>
                  </div>
                </div>
                <input name="name" required placeholder="Имя" class="form-control" type="text">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-id-card-o" aria-hidden="true"></i>
                  </div>
                </div>
                <input name="lastname" required placeholder="Фамилия" class="form-control" type="text">
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
              <input class="btn btn-primary form-control" type="submit" value="Зарегистрироваться">
              <a class="dropdown-item" href="login.php">Уже есть аккаунт? Войти.</a>
          </form>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>