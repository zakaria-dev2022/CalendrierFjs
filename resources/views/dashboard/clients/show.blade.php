{{-- @extends('dashboard.sidebar')
@extends('dashboard._codeEdit')
@section('content') --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body {
        background: rgb(63, 134, 250)
    }
    
    .form-control:focus {
        box-shadow: none;
        border-color: #BA68C8
    }
    
    .profile-button {
        background: rgb(99, 39, 120);
        box-shadow: none;
        border: none
    }
    
    .profile-button:hover {
        background: #682773
    }
    
    .profile-button:focus {
        background: #682773;
        box-shadow: none
    }
    
    .profile-button:active {
        background: #682773;
        box-shadow: none
    }
    
    .back:hover {
        color: #682773;
        cursor: pointer
    }
    
    .labels {
        font-size: 11px
    }
    
    .add-experience:hover {
        background: #BA68C8;
        color: #fff;
        cursor: pointer;
        border: solid 1px #BA68C8
    }
    </style>
</head>
<body>
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">{{$client->nom_directeur}}</span><span class="text-black-50">{{$client->email}}</span><span> </span></div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile {{$client->nom_contact}} </h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">nom entreprise</label><input type="text" readonly  class="form-control" placeholder="first name" value="{{$client->nom_entreprise}}"></div>
                        <div class="col-md-6"><label class="labels">ville</label><input type="text" readonly class="form-control" value="{{$client->ville}}" placeholder="surname"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">adresse</label><input type="text" readonly class="form-control" placeholder="enter phone number" value="{{$client->adresse}}"></div>
                        <div class="col-md-12"><label class="labels">code_postal</label><input type="text" readonly class="form-control" placeholder="enter address line 1" value="{{$client->code_postal}}"></div>
                        <div class="col-md-12"><label class="labels">pays</label><input type="text" readonly class="form-control" placeholder="enter address line 2" value="{{$client->pays}}"></div>
                        <div class="col-md-12"><label class="labels">nom contact</label><input type="text" readonly class="form-control" placeholder="enter address line 2" value="{{$client->nom_contact}}"></div>
                        <div class="col-md-12"><label class="labels">fonction</label><input type="text" readonly class="form-control" placeholder="enter address line 2" value="{{$client->fonction}}"></div>
                        <div class="col-md-12"><label class="labels">tel</label><input type="text" readonly class="form-control" placeholder="enter address line 2" value="{{$client->tel}}"></div>
                        <div class="col-md-12"><label class="labels">site_web</label><input type="text" readonly class="form-control" placeholder="enter email id" value="{{$client->site_web}}"></div>
                        <div class="col-md-12"><label class="labels">secteur</label><input type="text" readonly class="form-control" placeholder="education" value="{{$client->secteur}}"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><label class="labels">nom_directeur</label><input type="text" readonly class="form-control" placeholder="country" value="{{$client->nom_directeur}}"></div>
                        <div class="col-md-6"><label class="labels">email</label><input type="text" readonly class="form-control" value="{{$client->email}}" placeholder="state"></div>
                    </div>
                    <div class="mt-5 text-center">
                        <a class="btn btn-primary  px-5" onclick="return confirm('Voulez-vous Retourn ?')" href="{{route('clients.index')}}">Retourn</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex flex-column align-items-center ">
                <div class="col-md-3 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                        <img class="" width="350px" src="../{{$client->copy_bancaire}}">
                        <span class="font-weight-bold">information bancaire</span>
                    </div>
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                        <img class="" width="350px" src="../{{$client->copy_fiscale}}">
                        <span class="font-weight-bold">information fiscale</span></div>
                </div>
                <div class="col-md-3 border-right">
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</body>
</html>


{{-- @endsection --}}