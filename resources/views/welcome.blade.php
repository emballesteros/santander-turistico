@extends('plantilla.layout')

@section('content')
<head>

    <title>Santander | Lugares Turísticos</title>

</head>

 <!-- Header -->
 <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">Santander</h1>
        <h2 class="text-white-50 mx-auto mt-2 mb-5">Ubicado en la zona norte central de Colombia, en la cordillera de los Andes. Se caracteriza por los valles de ríos y el terreno escabroso.</h2>
        <a href="{{URL::route('pueblos-de-santander')}}" class="btn btn-primary js-scroll-trigger">CONOCER MÁS</a>
      </div>
    </div>
  </header>

@endsection