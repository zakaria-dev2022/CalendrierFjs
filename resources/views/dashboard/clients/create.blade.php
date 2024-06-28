@extends('dashboard.sidebar')
@extends('dashboard._coderesource')
@section('content')


<div class="card-body">
    <form action="{{route('clients.store')}}" method="POST" enctype="multipart/form-data">
  <a onclick="return confirm('Voulez-vous annuler l\'ajoute d\'un employee ?');" href="{{route('clients.index')}}" class="btn btn-secondary btn-lg my-3">Précedent </a>
  <button class="btn btn-primary btn-lg my-3">Ajouter</button>
            @csrf
              <div class="form-row d-flex justify-content-around my-2">
                  <div class="form-group col-md-4">
                      <label for="nom">Nom de l'entreprise</label>
                      <input type="text" class="form-control" name="nom_entreprise" placeholder="Nom de l'entreprise">
                  </div>
                  <div class="form-group col-md-4">
                      <label for="Adresse">Adresse</label>
                      <input type="text" class="form-control" name="adresse" placeholder="Adresse">
                  </div>
              </div>
              <div class="form-row d-flex justify-content-around my-2">
                  <div class="form-group col-md-4">
                      <label for="nom">Ville</label>
                      <input type="text" class="form-control" name="ville" placeholder="Ville">
                  </div>
                  <div class="form-group col-md-4">
                      <label for="Code postal">Code postal</label>
                      <input type="text" class="form-control" name="code_postal" placeholder="Code postal">
                  </div>
              </div>
              <div class="form-row d-flex justify-content-around my-2">
                  <div class="form-group col-md-4">
                      <label for="nom">Pays</label>
                      <input type="text" class="form-control" name="pays" placeholder="Pays">
                  </div>
                  <div class="form-group col-md-4">
                      <label for="Nom du contact">Nom du contact</label>
                      <input type="text" class="form-control" name="nom_contact" placeholder="Nom du contact">
                  </div>
              </div>
              <div class="form-row d-flex justify-content-around my-2">
                  <div class="form-group col-md-4">
                      <label for="fonction">Fonction</label>
                      <input type="text" class="form-control" name="fonction" placeholder="Fonction">
                  </div>
                  <div class="form-group col-md-4">
                      <label for="tel">Téléphone</label>
                      <input type="text" class="form-control" name="tel" placeholder="Téléphone">
                  </div>
              </div>
              <div class="form-row d-flex justify-content-around my-2">
                  <div class="form-group col-md-4">
                      <label for="site_web">Site web</label>
                      <input type="text" class="form-control" name="site_web" placeholder="Site web">
                  </div>
                  <div class="form-group col-md-4">
                      <label for="secteur">Secteur d'activité</label>
                      <input type="text" class="form-control" name="secteur" placeholder="Secteur d'activité">
                  </div>
              </div>
              <div class="form-row d-flex justify-content-around my-2">
                  <div class="form-group col-md-4">
                      <label for="nom_directeur">Nom Directeur</label>
                      <input type="text" class="form-control" name="nom_directeur" placeholder="Nom Directeur">
                  </div>
                  <div class="form-group col-md-4">
                      <label for="email">Email</label>
                      <input type="text" class="form-control" name="email" placeholder="Email">
                  </div>
              </div>
              <div class="form-row d-flex justify-content-around mt-4">
                  <div class="form-group col-md-4">
                    <label for="copy_fiscale"> Copie fiscale</label>
                    <input type="file" class="form-control-file" name="copy_fiscale">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="copy_bancaire">Copie Bancaire</label>
                    <input type="file" class="form-control-file" name="copy_bancaire">
                  </div>
              </div>
          </form>
      </div>
@endsection