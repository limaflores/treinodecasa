<!DOCTYPE html>
<html>
<head><meta charset="utf-8">
  <title>@yield('titulo')</title>
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<header>
  <nav>
    <div class="nav-wrapper deep-orange">
      <div class="container">
        <a href="{{route('admin.alunos')}}" class="brand-logo">Sistema de treinos</a>

        <a href="#" data-activates="mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">

          @if(Auth::guest())

          @else
            <li><a href="{{route('admin.alunos')}}">Alunos</a></li>
            <!-- <li><a href="{{route('admin.treinos')}}">Treinos</a></li> -->
            <!-- <li><a href="#">{{Auth::user()->name}}</a></li> -->
            <span class="nav-title"> | {{Auth::user()->name}}</span>
<<<<<<< HEAD
            <li><a href="{{route('site.login.sair')}}">Sair</a></li>
          @endif
        </ul>
        <ul class="side-nav" id="mobile">
          <li><a href="{{route('admin.alunos')}}">Home</a></li>
=======
 
          @endif
        </ul>
        <ul class="side-nav" id="mobile">
            <li><a href="{{route('admin.alunos')}}">Home</a></li> 
>>>>>>> refaz-rotas-1
          @if(Auth::guest())
          @else
            <li><a href="{{route('admin.alunos')}}">Alunos</a></li>
            <!-- <li><a href="{{route('admin.treinos')}}">Treinos</a></li> -->
            <!-- <li><a href="#">{{Auth::user()->name}}</a></li> -->
            <span class="nav-title"> | {{Auth::user()->name}}</span>
<<<<<<< HEAD
            <li><a href="{{route('site.login.sair')}}">Sair</a></li>
=======
>>>>>>> refaz-rotas-1
          @endif
        </ul>
      </div>
    </div>
 </nav>
</header>