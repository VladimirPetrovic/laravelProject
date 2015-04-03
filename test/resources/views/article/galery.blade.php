@extends('app')

@section('styles')
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
@endsection

@section('content')

        

    <h1><i class="fa fa-users"></i> Galery</h1>
    

        <button  class='btn btn-default test-pop-up'>Open popup</button>

        <div class="parent-container">
          <a href="assets/img/most.jpg" class='btn btn-danger'>Open popup 1</a>
          <a href="assets/img/nissan.jpg" class='btn btn-danger'>Open popup 2</a>
          <a href="assets/img/ajfel.jpg" class='btn btn-danger'>Open popup 3</a>
        </div>



@endsection

@section('scripts')
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="assets/javascript/jquery.magnific-popup.js"></script>
    <script type="text/javascript" src="assets/javascript/popup.js"></script>     
@endsection