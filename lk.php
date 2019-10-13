<?
$title="Личный кабинет";
include 'site_components/head.php';
if(empty($_SESSION['id']))
  exit("<script>location.href='login.php'</script>");
?>
<style>
  .fa-pencil {
    cursor:pointer;
    color:blue;
  }
  .fa-pencil:hover{
    color:navy;
  }
  .fa-pencil:active{
    color:aqua;
  }
</style>
    <div class="container my-5">
      <p>id:<? echo $_SESSION['id']?></p>
      <p>Имя:<span><? echo $_SESSION['name']?></span><i class="fa fa-pencil" aria-hidden="true"></i></p>
      <p>Фамилия:<span><? echo $_SESSION['lastname']?></span><i class="fa fa-pencil" aria-hidden="true"></i></p>
      <p>Логин:<? echo $_SESSION['login']?></p>
    </div>
    <script>
      let pencils = document.getElementsByClassName("fa-pencil");
      for (let i=0; i<pencils.length; i++){
        pencils[i].addEventListener('click',()=>{
          let text = pencils[0].previousElementSibling.innerText;
          pencils[0].previousElementSibling.innerHTML = '<input>';
        });
      }
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>