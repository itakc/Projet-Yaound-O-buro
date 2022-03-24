@extends('layouts.app')

@section('title', 'Admin - Modification réservation')

@section('content')

<header class="header">
        
        <nav class="navigation">
            <a class="logo" href="{{ route('main.index') }}"><img src="{{ asset('img/logo_O buro.png') }}"></a>

            <p class="text-head"><span style="color: #26470b;">Spécialité</span><br> <span style="color:#ddbb22;">culinaires</span> <br><span style="color:#ed1520;">du cameroun</p>
            
            <!-- Navigation -->
            <ul>
                <li><a href="{{route('main.carte1')}}">Carte</a></li>
                <li><a href="{{route('main.contact')}}">Contact</a></li>
                <li><a href="{{route('main.reservation')}}">Réservation</a></li>
            </ul>
            <!-- Navigation -->
            
        </nav>
    </header>
    
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Admin - Modification réservation</h1>

            {{-- code utile pour débogger un formulaire et une validation qui ne fonctionnent pas correctement --}}
            {{--
            @if ($errors->any())
                <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
                </ul>
            @endif
            --}}

            <form action="{{ route('admin.reservation.update', ['id' => $reservation->id]) }}" method="post">
                
                @method('PUT')
                <div>
                    <input type="text" class="form-control" value="{{ $reservation->id }}" readonly>
                </div>
                @include('admin.reservation._form')
            </form>
        </div>
    </div>
</div>
@endsection