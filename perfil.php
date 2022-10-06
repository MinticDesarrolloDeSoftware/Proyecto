<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos1.css">
    <title>Perfil</title>
</head>

<body>   
        <!-- PERFIL DO USUÁRIO -->
  <section class="user-profile">
    <div class="header">
      <div class="cover">
        <div class="perfil-usuario-avatar">
          <img src="http://www.coopernortetelecom.com.br/assets/images/author-1.png" alt="img-avatar">
        </div>
      </div>
    </div>
    </div>
    <div class="user-profile-body">
      {% if current_user.id %}

      <div class="user-profile-bio">
        <h3 class="titulo">{{current_user.nombre}}</h3>
      </div>
      <div class="user-profile-footer">
        <ul class="data-list">
          <li> Email: {{current_user.email}}</li>
          <li>Telefono: {{current_user.telefono}}</li>
          <li>Edad: {{current_user.edad}}</li>
          <li> Direccion: {{current_user.direccion}}</li>
          <li>Genero: {{current_user.genero}}</li>
          <li>Usuario: {{current_user.usuario}}</li>
          <li> Signo zodiacal: {{current_user.signo}}</li>
        </ul>
      </div>
      <div class="d-grid gap-2 d-md-block">
        <br><a type="button" class="btn btn-outline-dark" class="btn btn-primary" href="#" role="button">Editar Perfil</a>
        <a type="button" class="btn btn-outline-danger" class="btn btn-primary" href="#" role="button">Buscar pareja</a>
      </div>
    </div>
  </section>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>