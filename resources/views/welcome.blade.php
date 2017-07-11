@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Teste Accueil</div>

                <div class="panel-body">
                    Bienvenue

					sur AND, v.INDÉPENDANT!<br>
					... Oui, c'est vide et y a rien encore! (Insérer Smiley Slime ici)<br>
					<br>
					<br>
					Des span, des div, des class partout pour faire jolie comme sur F.A. à mettre<br>
					blabla<br>
					<br>
					<br>
					@if(isset($cats))
					@foreach($cats as $cat)
					 {{$cat->label}}
					 @foreach($sujets[$cat->id] as $sujet)
					  {{$sujet->titre}} - Par {{$last[$sujet->id]->user->pseudo}} - Posté le {{$last[$sujet->id]->created_at}}
					 @endforeach
					 <br>une barrre longue de séparation<br>
					@endforeach
					@else
						Bin c'est vide.
					@endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
