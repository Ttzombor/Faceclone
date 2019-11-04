@extends('layouts.app')

@section('content')
  <!-- nav -->
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.blade.php">FaceClone</a>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="home.blade.php">Home</a></li>
        <li><a href="profile.blade.php">Profile</a></li>
        <li><a href="#">Logout</a></li>
      </ul>
    </div>
  </nav>
  <!-- ./nav -->

  <!-- main -->
  <main class="container">

  </main>
  <!-- ./main -->

  <!-- footer -->
  <footer class="container text-center">
    <ul class="nav nav-pills pull-right">
      <li>FaceClone - Made by [your name here]</li>
    </ul>
  </footer>
@endsection
