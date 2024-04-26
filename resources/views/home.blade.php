<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Home</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="/vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="/css/dataTables.bootstrap4.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="/css/style.css">

  <link rel="stylesheet" href="/navigation/navigation.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="/images/logo.jpg" />
</head>
<body>

  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
          <a class="navbar-brand brand-logo" href="index.html"><img src="images/logo.svg" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo"/></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
          </button>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-4 w-100">
          <li class="nav-item nav-search d-none d-lg-block w-100">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="search">
                  <i class="mdi mdi-magnify"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown mr-4">
            <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center notification-dropdown" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-success">
                    <i class="mdi mdi-information mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-warning">
                    <i class="mdi mdi-settings mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-info">
                    <i class="mdi mdi-account-box mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="images/faces/face5.jpg" alt="profile"/>
              <span class="nav-profile-name">Louis Barnett</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="mdi mdi-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item">
                <i class="mdi mdi-logout text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="Home">
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title">Acceuil</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="mdi mdi-circle-outline menu-icon"></i>
                <span class="menu-title">Terrain et Cite</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Terrain</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Cite</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/forms/basic_elements.html">
                <i class="mdi mdi-hospital-building menu-icon"></i>
                <span class="menu-title">Logement</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/charts/chartjs.html">
                <i class="mdi mdi-map-marker-radius  menu-icon"></i>
                <span class="menu-title">Agence</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/tables/basic-table.html">
                <i class="mdi mdi-account-multiple-plus  menu-icon"></i>
                <span class="menu-title">Client</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- partial -->
       <div class="main-panel">

          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between flex-wrap">
                  <div class="d-flex align-items-end flex-wrap">
                    <div class="mr-md-3 mr-xl-5">
                      <h2>Bienvenue Mr Najoro</h2>
                      <p class="mb-md-0">Analyse de votre état de vente.</p>
                    </div>
                    <div class="d-flex">
                      <i class="mdi mdi-home text-muted hover-cursor"></i>
                      <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Acceuil&nbsp;/&nbsp;</p>
                      <p class="text-primary mb-0 hover-cursor">Analyse</p>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between align-items-end flex-wrap">
                    <button type="button" class="btn btn-light bg-white btn-icon mr-3 d-none d-md-block ">
                      <i class="mdi mdi-download text-muted"></i>
                    </button>
                    <button type="button" class="btn btn-light bg-white btn-icon mr-3 mt-2 mt-xl-0">
                      <i class="mdi mdi-clock-outline text-muted"></i>
                    </button>
                    <button type="button" class="btn btn-light bg-white btn-icon mr-3 mt-2 mt-xl-0">
                      <i class="mdi mdi-plus text-muted"></i>
                    </button>
                    <button class="btn btn-primary mt-2 mt-xl-0">Télécharger</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body dashboard-tabs p-0">
                    <ul class="nav nav-tabs px-4" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Nouveau</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="sales-tab" data-toggle="tab" href="#sales" role="tab" aria-controls="sales" aria-selected="false">Liste</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="purchases-tab" data-toggle="tab" href="#purchases" role="tab" aria-controls="purchases" aria-selected="false">Transaction</a>
                      </li>
                    </ul>
                    <div class="tab-content py-0 px-0">
                      <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                        <div class="d-flex flex-wrap justify-content-xl-between">
                          <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item menuxx">
                            <a href="#newTerrain">
                              <i class="mdi mdi-earth icon-lg mr-3 text-primary"></i>
                              <div class="d-flex flex-column justify-content-around">
                                  <small class="mb-1 text-muted">Terrain</small>
                                  <h5 class="mb-0 d-inline-block">Nouveau</h5>
                              </div>
                            </a>
                          </div>
                          <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item menuxx" title="#newCite">
                            <a href="#newCite">
                              <i class="mdi mdi-circle-outline mr-3 icon-lg text-danger"></i>
                              <div class="d-flex flex-column justify-content-around">
                                  <small class="mb-1 text-muted">Cite</small>
                                  <h5 class="mr-2 mb-0 mb-0 d-inline-block">+50 cites</h5>
                              </div>
                            </a>
                          </div>
                          <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item menuxx" title="#newLogement">
                            <a href="#newLogement">
                              <i class="mdi mdi-hospital-building mr-3 icon-lg text-success"></i>
                              <div class="d-flex flex-column justify-content-around">
                                  <small class="mb-1 text-muted">Logement</small>
                                  <h5 class="mr-2 mb-0">30 logements</h5>
                              </div>
                            </a>
                          </div>
                          <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item menuxx" title="#newAgence">
                            <a href="#newAgence">
                              <i class="mdi mdi-map-marker-radius mr-3 icon-lg text-warning"></i>
                              <div class="d-flex flex-column justify-content-around">
                                  <small class="mb-1 text-muted">Agence</small>
                                  <h5 class="mr-2 mb-0">Partout les provinces</h5>
                              </div>
                            </a>
                          </div>
                          <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item menuxx" title="#newClient">
                            <a href="#newClient">
                              <i class="mdi mdi-account-multiple-plus mr-3 icon-lg text-danger"></i>
                              <div class="d-flex flex-column justify-content-around">
                                  <small class="mb-1 text-muted">Client</small>
                                  <h5 class="mr-2 mb-0">plus de 4000</h5>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="sales" role="tabpanel" aria-labelledby="sales-tab">
                          <div class="d-flex flex-wrap justify-content-xl-between">
                              <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item menuxx">
                                  <a href="#listTerrain">
                                      <i class="mdi mdi-earth icon-lg mr-3 text-primary"></i>
                                      <div class="d-flex flex-column justify-content-around">
                                          <small class="mb-1 text-muted">Terrain</small>
                                          <div class="dropdown">
                                          <h5 class="mb-0 d-inline-block">Choisir</h5>
                                          </div>
                                      </div>
                                  </a>
                              </div>
                              <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item menuxx">
                                  <a href="#listCite">
                                      <i class="mdi mdi-circle-outline mr-3 icon-lg text-danger"></i>
                                      <div class="d-flex flex-column justify-content-around">
                                          <small class="mb-1 text-muted">Cite</small>
                                          <h5 class="mr-2 mb-0">plus de 50 cites</h5>
                                      </div>
                                  </a>
                              </div>
                              <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item menuxx">
                                  <a href="#listlogement">
                                      <i class="mdi mdi-hospital-building mr-3 icon-lg text-success"></i>
                                      <div class="d-flex flex-column justify-content-around">
                                          <small class="mb-1 text-muted">Logement</small>
                                          <h5 class="mr-2 mb-0">30 logements</h5>
                                      </div>
                                  </a>
                              </div>
                              <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item menuxx">
                                  <a href="#listAgence">
                                      <i class="mdi mdi-map-marker-radius mr-3 icon-lg text-warning"></i>
                                      <div class="d-flex flex-column justify-content-around">
                                          <small class="mb-1 text-muted">Agence</small>
                                          <h5 class="mr-2 mb-0">Partout les provinces</h5>
                                      </div>
                                  </a>
                              </div>
                              <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item menuxx">
                                  <a href="#listClient">
                                      <i class="mdi mdi-account-multiple-plus mr-3 icon-lg text-danger"></i>
                                      <div class="d-flex flex-column justify-content-around">
                                          <small class="mb-1 text-muted">Client</small>
                                          <h5 class="mr-2 mb-0">plus de 4000</h5>
                                      </div>
                                  </a>
                              </div>
                          </div>
                      </div>
                      <div class="tab-pane fade" id="purchases" role="tabpanel" aria-labelledby="purchases-tab">
                          <div class="d-flex flex-wrap justify-content-xl-between">
                              <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item menuxx">
                                  <a href="#achatTerrain" id="getTransactionTerrain">
                                      <i class="mdi mdi-credit-card icon-lg mr-3 text-primary"></i>
                                      <div class="d-flex flex-column justify-content-around">
                                          <small class="mb-1 text-muted">Terrain</small>
                                          <div class="dropdown">
                                          <h5 class="mb-0 d-inline-block">Achât(s)</h5>
                                          </div>
                                      </div>
                                  </a>
                              </div>
                              <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item menuxx">
                                  <a href="#achatCite">
                                      <i class="mdi mdi-currency-usd mr-3 icon-lg text-danger"></i>
                                      <div class="d-flex flex-column justify-content-around">
                                          <small class="mb-1 text-muted">Cite</small>
                                          <h5 class="mr-2 mb-0">plus de 50 cites</h5>
                                      </div>
                                  </a>
                              </div>
                              <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item menuxx">
                                  <a href="#achatLongement">
                                      <i class="mdi mdi-cards-outline mr-3 icon-lg text-success"></i>
                                      <div class="d-flex flex-column justify-content-around">
                                          <small class="mb-1 text-muted">Logement</small>
                                          <h5 class="mr-2 mb-0">30 logements</h5>
                                      </div>
                                  </a>
                              </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="row page active" id="newTerrain">
              <div class="col-md-8 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                      <h4 class="card-title">Nouveau Terrain</h4>
                      <form action="{{route('insertionTerrain')}}" method="POST" id="insertT" class="forms-sample">
                          @csrf
                          <div class="form-group">
                          <label for="exampleInputUsername1">Localisation</label>
                          <input type="text" class="form-control" name="localisation" id="locT" placeholder="Lieu" required>
                          </div>
                          <div class="form-group">
                          <label for="exampleInputUsername1">Indiquer la superfiicie</label>
                          <input type="number" class="form-control" name="superficie_terrain" id="supT" placeholder="en Km²" required>
                          </div>
                          <div class="form-group">
                          <label for="exampleInputUsername1">Propriètaire</label>
                              <select class="form-control form-control-sm" name="num_cli" id="num_cli">
                                @foreach ($client as $selection)
                                <option value="{{$selection->num_cli}}">{{$selection->nom_cli}}</option>
                                @endforeach
                              </select>
                          </div>
                          <button type="submit" class="btn btn-primary mr-2">Submit</button>
                          <button class="btn btn-light">Cancel</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row page" id="newCite">
              <div class="col-md-8 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                      <h4 class="card-title">Nouveau Cite</h4>
                      <form action="{{route('insertionCite')}}" method="POST" class="forms-sample">
                          @csrf
                          <div class="form-group">
                          <label for="exampleInputUsername1">Choix Terrain</label>
                          <select type="text" class="form-control" name="num_terrain" id="makaT" placeholder="Lieu">
                              @foreach ($terrain as $terre)
                              <option value="{{$terre->num_terrain}}">{{$terre->localisation}} ({{$terre->superficie_terrain}} KM²)</option>
                              @endforeach
                          </select>
                          </div>
                          <div class="form-group">
                          <label for="exampleInputUsername1">Titre de la cite</label>
                          <input type="text" class="form-control" name="libelle_cite" id="ttrC" placeholder="libelle">
                          </div>
                          <div class="form-group">
                          <label for="exampleInputUsername1">Propriètaire</label>
                              <select class="form-control form-control-sm" name="num_cli" id="num_cli">
                                @foreach ($client as $selection)
                                <option value="{{$selection->num_cli}}">{{$selection->nom_cli}}</option>
                                @endforeach
                              </select>
                          </div>
                          <button type="submit" class="btn btn-primary mr-2">Submit</button>
                          <button class="btn btn-light">Cancel</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row page" id="newLogement">
              <div class="col-md-8 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                      <h4 class="card-title">Nouveau Logement</h4>
                      <form action="{{route('insertionLogement')}}" method="POST" class="forms-sample">
                          @csrf
                          <div class="form-group">
                          <label for="exampleInputUsername1">Choix de cite</label>
                          <select class="form-control" name="num_cite" id="makaC">
                              @foreach ($cite as $cit)
                              <option value="{{$cit->num_cite}}">{{$cit->libelle_cite}}</option>
                              @endforeach
                          </select>
                          </div>
                          <div class="form-group">
                          <label for="exampleInputUsername1">Agence</label>
                          <select class="form-control" name="num_agence" id="makaA" placeholder="libelle">
                              @foreach ($agence as $age)
                              <option value="{{$age->num_agence}}">{{$age->libelle_agence}} ({{$age->provinces}})</option>
                              @endforeach
                          </select>
                          </div>
                          <div class="form-group">
                          <label for="exampleInputUsername1">Propriètaire</label>
                              <select class="form-control form-control-sm" name="num_cli" id="num_cli">
                                @foreach ($client as $selection)
                                <option value="{{$selection->num_cli}}">{{$selection->nom_cli}}</option>
                                @endforeach
                              </select>
                          </div>

                          <div class="form-group">
                          <label for="exampleInputUsername1">Type de Vente</label>
                          <select class="form-control" name="type_vente" id="makaV">
                              <option value="acredit">acredit</option>
                              <option value="comptant">comptant</option>
                          </select>
                          </div>


                          <div class="form-group">
                          <label for="exampleInputUsername1">Prix</label>
                          <input type="number" class="form-control" name="prix_logement" id="prixlog" placeholder="En Ariary">
                          </div>
                          <div class="form-group">
                          <label for="exampleInputUsername1">Brille logement</label>
                          <input type="text" class="form-control" name="brille_logement" id="brillelog" placeholder="brille logement">
                          </div>

                          <button type="submit" class="btn btn-primary mr-2">Submit</button>
                          <button class="btn btn-light">Cancel</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row page" id="newAgence">
              <div class="col-md-8 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                      <h4 class="card-title">Nouveau Agence</h4>
                      <form action="{{route('insertionAgence')}}" method="POST" class="forms-sample">
                          @csrf
                          <div class="form-group">
                              <label for="exampleInputUsername1">Choix du province</label>
                              <select class="form-control" name="provinces" id="makaPro">
                                  <option value="Fianarantsoa">Fianarantsoa</option>
                                  <option value="Antananarivo">Antananarivo</option>
                                  <option value="Toliara">Toliara</option>
                                  <option value="Antsiranana">Antsiranana</option>
                                  <option value="Toamasina">Toamasina</option>
                                  <option value="Mananjary">Mananjary</option>
                              </select>
                          </div>
                          <div class="form-group">
                          <label for="exampleInputUsername1">Nom de l'Agence</label>
                          <input type="text" class="form-control" name="libelle_agence" id="libelle_agence">
                          </div>

                          <button type="submit" class="btn btn-primary mr-2">Submit</button>
                          <button class="btn btn-light">Cancel</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row row page" id="newClient">
              <div class="col-md-8 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                      <h4 class="card-title">Nouveau Client</h4>
                      <form action="{{route('insertionClient')}}" method="POST" class="forms-sample">
                          @csrf
                          <div class="form-group">
                          <label for="exampleInputUsername1">Nom du Client</label>
                          <input type="text" class="form-control" name="nom_cli" placeholder="Nom du client">
                          </div>
                          <div class="form-group">
                          <label for="exampleInputUsername1">Adresss du Client</label>
                          <input type="text" class="form-control" name="Adresss_cli" placeholder="Adresse phusique">
                          </div>
                          <div class="form-group">
                          <label for="exampleInputUsername1">Lieu de Travail</label>
                          <input type="text" class="form-control" name="lieu_travail" placeholder="Lieu où le client travail" >
                          </div>

                          <button type="submit" class="btn btn-primary mr-2">Submit</button>
                          <button class="btn btn-light">Cancel</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row page" id="listTerrain">

              <div class="col-md-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                      <p class="card-title">Liste des terrain</p>
                      <table id="scr-vrt-dt" class="table table-striped table-bordered nowrap">
                        <thead>
                          <tr>
                              <th>N°</th>
                              <th>Localisation</th>
                              <th>Superficie</th>
                              <th>Proprietaire</th>
                              <th>Etat</th>
                              <th>Option</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($terrain as $terre)

                          <tr>
                              <td>{{$terre->num_terrain}}</td>
                              <td>{{$terre->localisation}}</td>
                              <td>{{$terre->nom_cli}}</td>
                              <td>{{$terre->superficie_terrain}} KM²</td>
                              <td>{{$terre->situation}}</td>
                              <td>
                                <div class="table-actions">
                                    @if ($terre->situation == 'propriété')
                                    <a href="#" class="vendre" title="Vendre"><i class="mdi mdi-tag-multiple icon-md mr-3 text-warning"></i></a>
                                    @endif
                                    <a href="#" class="detailsTerrain" title="Details"><i class="mdi mdi-information-outline icon-md mr-3 text-secondary"></i></a>
                                    @if ($terre->situation == 'à vendre')
                                    <a href="#" class="buyTerrain" title="Acheter"><i class="mdi mdi-currency-usd mr-3 icon-lg text-danger"></i></a>
                                    @endif
                                </div>
                              </td>
                          </tr>
                          @endforeach

                        </tbody>
                      </table>

                    </div>
                  </div>
                </div>
              </div>
                  <!-- Modal pour Acheter un Terrain detailTransactionModal-->
                  <div class="modal" id="achaTerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalCenterLabel">Achat(s) Terrain</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              </div>
                              <div class="modal-body">
                                <form action="acheterTerrain" id="fromAchaTer" method="post">
                                  @csrf
                                    <div class="form-group">
                                      <label>Propriétaire actuel</label>
                                      <input type="text" class="form-control form-control-sm propActuAchatTerrain"
                                      name="propActuAchatTerrain" id="propActuAchatTerrain" aria-label="propr" disabled>
                                    </div>
                                    <div class="form-group">
                                      <label>Terrain</label>
                                      <input type="text" class="form-control form-control-sm descAchatTerrain"
                                      id="" aria-label="propr" disabled>
                                    </div>
                                    <div class="form-group">
                                      <label>Prix (Montant en Ariary)</label>
                                      <input type="text" class="form-control form-control-sm" name="prixAchatTerrain"
                                      id="prixAchatTerrain" aria-label="prixAchatTerrain" disabled>
                                    </div>
                                    <div class="form-group">
                                      <label>Le client Acheteur</label>
                                      <div class="form-group">
                                        <div class="input-group">
                                          <input type="text" class="form-control zoneAcheteur" placeholder="Rechercher un client"
                                           aria-label="Recipient's username" disabled>
                                          <div class="input-group-append">
                                            <button class="btn btn-sm btn-facebook btn_selectClient" type="button" id="">
                                              <i class="mdi mdi-format-list-bulleted"></i>
                                            </button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label>Tire de Transaction</label>
                                      <input type="text" class="form-control form-control-sm" value="Achât de Terrain" id="titreAchatTer" aria-label="titreAchatTer">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                                    </div>
                                </form>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Modal pour vendre un Terrain-->
                  <div class="modal" id="venteTerrainModal" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalCenterLabel">Vendre un Terrain</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              </div>
                              <div class="modal-body">
                                <form action="venteTerrain" id="fromVenteTerrain" method="post">
                                  @csrf
                                    <div class="form-group">
                                      <label>Propriétaire</label>
                                      <select class="form-control form-control-sm" name="proprietaire" id="proprietaire" disabled>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <label>Localisation</label>
                                      <input type="text" class="form-control form-control-sm"
                                      name="local" id="localVenteTer" aria-label="local" disabled>
                                    </div>
                                    <div class="form-group">
                                      <label>Superficie</label>
                                      <input type="text" class="form-control form-control-sm"
                                      name="super" id="superVenteTer" aria-label="super" disabled>
                                    </div>
                                    <div class="form-group">
                                      <label>Prix (Montant en Ariary)</label>
                                      <input type="text" class="form-control form-control-sm" placeholder="En ariary" name="pr_transaction" id="prixVenteTer" aria-label="prix">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                        <button type="submit" class="btn btn-primary">Vendre</button>
                                    </div>
                                </form>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Modal pour les détails d'un Terrain-->
                  <div class="modal" id="DetailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalCenterLabel"> <i class="mdi mdi-information-outline icon-md mr-3 text-secondary">Détails Terrain</i></h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              </div>
                              <div class="modal-body">
                                    <div class="form-group">
                                      <label>Agence:</label>
                                      <p id="detailTerrainAG">Un terrain enregistré dans la base de données de l'Agence Q-Mobile à Fianarantsoa</p>

                                      <label>Propriétaire:</label>
                                      <p id="detailTerrainPR">
                                        Figurant dans la liste des propriétés du Mr NOMENJANAHARY Pierre Andrianajoro, un client de
                                        actif à Fianarantsoa.
                                      </p>

                                      <label>Terrain:</label>
                                      <p id ="detailTerrainT">
                                        Ce terrain se situe à Ambatomena, Fianarantsoa avec une superficie de 25 Km².
                                      </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                    </div>
                              </div>
                          </div>
                      </div>
                  </div>


                  <!-- Modal pour la séléction d'un Client-->
                  <div class="modal" id="selectionClient" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalCenterLabel">Choisir un Client</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              </div>
                              <div class="modal-body">

                                <div class="dt-responsive">
                                  <table id="data_table" class="table">
                                      <thead>
                                          <tr>
                                              <th>N°</th>
                                              <th class="nosort">Nom</th>
                                              <th>Adresse</th>
                                              <th class="nosort">Option</th>
                                          </tr>
                                      </thead>
                                      <tbody class="bodySelection">
                                          <tr>
                                              <td>1</td>
                                              <td>NOMENJANAHARY Andrianajoro</td>
                                              <td>Andrainjato, Fianarantsoa</td>
                                              <td>
                                                  <div class="table-actions">
                                                    <button type="button" title="choisir" class="btn btn-link btn-primary btn-lg chooseClient" data-original-title="Choose">
                                                        <i class="mdi mdi-near-me mr-3 icon-lg"></i>
                                                    </button>
                                                  </div>
                                              </td>
                                          </tr>
                                      </tbody>
                                  </table>
                                </div>
                              </div>
                          </div>
                      </div>
                  </div>
            </div>

            <div class="row page" id="listCite">
              <div class="col-md-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <p class="card-title">Liste des cite</p>
                    <div class="table-responsive" id ="">
                      <table id="scr-vrt-dt1" class="table">
                        <thead>
                          <tr>
                              <th>N°</th>
                              <th>Cite</th>
                              <th>Terrain</th>
                              <th>Etat</th>
                              <th>Option</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($cite as $ct)

                          <tr>
                              <td>{{$ct->num_cite}}</td>
                              <td>{{$ct->libelle_cite}}</td>
                              <td>{{$ct->num_terrain}}</td>
                              <td>{{$ct->situation}}</td>
                              <td>
                                <div class="table-actions">
                                    @if ($ct->situation == 'propriété')
                                    <a href="#" class="vendreCite" title="Vendre"><i class="mdi mdi-tag-multiple icon-md mr-3 text-warning"></i></a>
                                    @endif
                                    <a href="#" class="detailsCite" title="Details"><i class="mdi mdi-information-outline icon-md mr-3 text-secondary"></i></a>
                                    @if ($ct->situation == 'à vendre')
                                    <a href="#" class="buyCite" title="Acheter"><i class="mdi mdi-currency-usd mr-3 icon-lg text-danger"></i></a>
                                    @endif
                                </div>
                              </td>
                          </tr>
                          @endforeach

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <!-- Modal pour Acheter un Terrain detailTransactionModal-->
                  <div class="modal" id="acheterCite" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalCenterLabel">Achat(s) Cite</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              </div>
                              <div class="modal-body">
                                <form action="acheterCite" id="fromAchaTer" method="post">
                                  @csrf
                                    <div class="form-group">
                                      <label>Propriétaire actuel</label>
                                      <input type="text" class="form-control form-control-sm propActuAchatCite"
                                      name="propActuAchatCite" id="propActuAchatCite" aria-label="propr" disabled>
                                    </div>
                                    <div class="form-group">
                                      <label>Cite</label>
                                      <input type="text" class="form-control form-control-sm descAchatCite"
                                      id="" aria-label="propr" disabled>
                                    </div>
                                    <div class="form-group">
                                      <label>Prix (Montant en Ariary)</label>
                                      <input type="text" class="form-control form-control-sm" name="prixAchatCite"
                                      id="prixAchatCite" aria-label="prixAchatCite" disabled>
                                    </div>
                                    <div class="form-group">
                                      <label>Le client Acheteur</label>
                                      <div class="form-group">
                                        <div class="input-group">
                                          <input type="text" class="form-control zoneAcheteur" placeholder="Rechercher un client"
                                           aria-label="Recipient's username" disabled>
                                          <div class="input-group-append">
                                            <button class="btn btn-sm btn-facebook btn_selectClient" type="button" id="">
                                              <i class="mdi mdi-format-list-bulleted"></i>
                                            </button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label>Tire de Transaction</label>
                                      <input type="text" class="form-control form-control-sm" value="Achât de Cite" id="titreAchatCite" aria-label="titreAchatTer">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                                    </div>
                                </form>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Modal pour vendre un Terrain-->
                  <div class="modal" id="vendreCite" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalCenterLabel">Vendre un Terrain</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              </div>
                              <div class="modal-body">
                                <form action="venteCite" id="fromVenteTerrain" method="post">
                                  @csrf
                                    <div class="form-group">
                                      <label>Propriétaire</label>
                                      <select class="form-control form-control-sm" name="proprietaireCite" id="proprietaireCite" disabled>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <label>Localisation</label>
                                      <input type="text" class="form-control form-control-sm"
                                      name="local" id="localVenteCite" aria-label="local" disabled>
                                    </div>
                                    <div class="form-group">
                                      <label>Superficie</label>
                                      <input type="text" class="form-control form-control-sm"
                                      name="super" id="superVenteTer" aria-label="super" disabled>
                                    </div>
                                    <div class="form-group">
                                      <label>Prix (Montant en Ariary)</label>
                                      <input type="text" class="form-control form-control-sm" placeholder="En ariary" name="pr_transaction" id="prixVenteTer" aria-label="prix">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                        <button type="submit" class="btn btn-primary">Vendre</button>
                                    </div>
                                </form>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Modal pour les détails d'un Terrain-->
                  <div class="modal" id="detailsCite" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalCenterLabel"> <i class="mdi mdi-information-outline icon-md mr-3 text-secondary">Détails Cite</i></h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              </div>
                              <div class="modal-body">
                                    <div class="form-group">
                                      <label>Terrain:</label>
                                      <p id="detailCiteTerrain">Un terrain enregistré dans la base de données de l'Agence Q-Mobile à Fianarantsoa</p>

                                      <label>Propriétaire:</label>
                                      <p id="detailCiteprop">
                                        Figurant dans la liste des propriétés du Mr NOMENJANAHARY Pierre Andrianajoro, un client de
                                        actif à Fianarantsoa.
                                      </p>

                                      <label>Cite:</label>
                                      <p id ="detailCite">
                                        Ce terrain se situe à Ambatomena, Fianarantsoa avec une superficie de 25 Km².
                                      </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                    </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
            </div>

            <div class="row page" id="listlogement">
              <div class="col-md-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <p class="card-title">Liste des logement</p>
                    <div class="table-responsive" id ="">
                      <table id="scr-vrt-dt2" class="table">
                        <thead>
                          <tr>
                              <th>N°</th>
                              <th>Agence</th>
                              <th>Cite</th>
                              <th>Type de Vente</th>
                              <th>Prix</th>
                              <th>Brille</th>
                              <th>Option</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($logement as $lg)

                          <tr>
                              <td>{{$lg->numero_logement}}</td>
                              <td>{{$lg->num_agence}}</td>
                              <td>{{$lg->num_cite}}</td>
                              <td>{{$lg->type_vente}}</td>
                              <td>{{$lg->situation}}</td>
                              <td>{{$lg->brille_logement}}</td>
                              <td>
                                <div class="table-actions">
                                    @if ($lg->situation =='à vendre')
                                    <a href="#" class="mividy" title="Vendre"><i class="mdi mdi-tag-multiple icon-md mr-3 text-warning"></i></a>
                                    @endif
                                    <a href="#" class="edit" title="Modifier"><i class="mdi mdi-pencil icon-md mr-3 text-secondary"></i></a>
                                    <a href="#" title="Supprimer"><i class="mdi mdi-delete icon-md mr-3 text-secondary"></i></a>
                                    <a href="#" title="Details"><i class="mdi mdi-information-outline icon-md mr-3 text-secondary"></i></a>
                                </div>
                              </td>
                          </tr>
                          @endforeach

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row page" id="listAgence">
              <div class="col-md-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <p class="card-title">Liste des Agences</p>
                    <div class="table-responsive" id ="">
                      <table id="scr-vrt-dt3" class="table">
                        <thead>
                          <tr>
                              <th>N°</th>
                              <th>Agence</th>
                              <th>Province</th>
                              <th>Option</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($agence as $ag)

                          <tr>
                              <td>{{$ag->num_agence}}</td>
                              <td>{{$ag->libelle_agence}}</td>
                              <td>{{$ag->provinces}}</td>
                              <td>
                                <div class="table-actions">
                                    <a href="#" title="Modifier"><i class="mdi mdi-pencil icon-md mr-3 text-secondary"></i></a>
                                    <a href="#" title="Supprimer"><i class="mdi mdi-delete icon-md mr-3 text-secondary"></i></a>
                                    <a href="#" title="Details"><i class="mdi mdi-information-outline icon-md mr-3 text-secondary"></i></a>
                                </div>
                              </td>
                          </tr>
                          @endforeach

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row page" id="listClient">
              <div class="col-md-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <p class="card-title">Liste des Client</p>
                    <div class="table-responsive" id ="">
                      <table id="scr-vrt-dt4" class="table">
                        <thead>
                          <tr>
                              <th>N°</th>
                              <th>Nom</th>
                              <th>Adresse</th>
                              <th>Lieu de Travail</th>
                              <th>Option</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($client as $cl)

                          <tr>
                              <td>{{$cl->num_cli}}</td>
                              <td>{{$cl->nom_cli}}</td>
                              <td>{{$cl->Adresss_cli}}</td>
                              <td>{{$cl->lieu_travail}}</td>
                              <td>
                                <div class="table-actions">
                                    <a href="#" title="Modifier"><i class="mdi mdi-pencil icon-md mr-3 text-secondary"></i></a>
                                    <a href="#" title="Supprimer"><i class="mdi mdi-delete icon-md mr-3 text-secondary"></i></a>
                                    <a href="#" title="Details"><i class="mdi mdi-information-outline icon-md mr-3 text-secondary"></i></a>
                                </div>
                              </td>
                          </tr>
                          @endforeach

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row page" id="achatTerrain">
              <div class="col-md-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                      <p class="card-title">Liste des terrain</p>
                      <table id="scr-vrt-dt6" class="table table-striped table-bordered nowrap">
                        <thead>
                          <tr>
                              <th>N°</th>
                              <th>Titre</th>
                              <th>Prix</th>
                              <th>Object</th>
                              <th>Client Actant</th>
                              <th>Option</th>
                          </tr>
                        </thead>
                        <tbody class="bodyTransactionTerrain">

                        </tbody>
                      </table>
                    </div>

                  </div>
                </div>
              </div>
                <div class="modal" id="detailTransactionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterLabel"> <i class="mdi mdi-information-outline icon-md mr-3 text-secondary">Détails Transaction</i></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                  <div class="form-group">
                                    <label>Terrain:</label>
                                    <p id="detailTransTerrain">Ce terrain se situe à Ambatomena, Fianarantsoa avec une superficie de 25 Km²</p>

                                    <label>Propriétaire:</label>
                                    <p id="detailTransPropre">
                                      Acheter récemment par le Client NOMENJANAHARY Pierre Andrianajoro
                                    </p>

                                    <label>Transaction:</label>
                                    <p id ="detailTrasact">
                                      Un transaction de type acompte, avec un montant de 2455000 ar.
                                    </p>
                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row page" id="achatCite">
              <div class="col-md-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                      <p class="card-title">Liste des Cites à vendre</p>
                      <table id="scr-vrt-dt" class="table table-striped table-bordered nowrap">
                      <thead>
                          <tr>
                              <th>N°</th>
                              <th>Cite</th>
                              <th>Terrain</th>
                              <th>Option</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($cite as $ct)

                          <tr>
                              <td>{{$ct->num_cite}}</td>
                              <td>{{$ct->libelle_cite}}</td>
                              <td>{{$ct->num_terrain}}</td>
                              <td>
                                <div class="table-actions">
                                    <a href="#" class="acheter" title="Achâts"><i class="mdi mdi-delete icon-md mr-3 text-secondary"></i></a>
                                    <a href="#" class="details" title="Details"><i class="mdi mdi-information-outline icon-md mr-3 text-secondary"></i></a>
                                </div>
                              </td>
                          </tr>
                          @endforeach

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row page" id="achatLongement">
              <div class="col-md-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                      <p class="card-title">Liste des Longement à vendre</p>
                      <table id="scr-vrt-dt" class="table table-striped table-bordered nowrap">
                        <thead>
                          <tr>
                              <th>N°</th>
                              <th>Agence</th>
                              <th>Cite</th>
                              <th>Type de Vente</th>
                              <th>Prix</th>
                              <th>Brille</th>
                              <th>Option</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($logement as $lg)

                          <tr>
                              <td>{{$lg->numero_logement}}</td>
                              <td>{{$lg->num_agence}}</td>
                              <td>{{$lg->num_cite}}</td>
                              <td>{{$lg->type_vente}}</td>
                              <td>{{$lg->prix_logement}}</td>
                              <td>{{$lg->brille_logement}}</td>
                              <td>
                                <div class="table-actions">
                                    <a href="#" class="mividy" title="Achâts"><i class="mdi mdi-delete icon-md mr-3 text-secondary"></i></a>
                                    <a href="#" class="details" title="Details"><i class="mdi mdi-information-outline icon-md mr-3 text-secondary"></i></a>
                                </div>
                              </td>
                          </tr>
                          @endforeach

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!-- content-wrapper ends -->

        <!-- MODALS===================================================================================================== -->
          <div class="modal" id="editLogement" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalCenterLabel">Modifier Logement</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      </div>
                      <div class="modal-body">
                        <form action="modifLogement" id="modalModifLogement" method="post">
                            <div class="form-group">
                              <label>Type de Vente</label>
                              <select class="form-control form-control-sm" id="type_vente">
                                <option value="Crédit">Crédit</option>
                                <option value="Compte">Compte</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label>Prix (Montant en Ariary)</label>
                              <input type="text" class="form-control form-control-sm" placeholder="En ariary" id="prix_logement" aria-label="prix">
                            </div>
                            <div class="form-group">
                              <label>Brille</label>
                              <input type="text" class="form-control form-control-sm" placeholder="brille" id="brille_logement" aria-label="brille">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                            </div>
                        </form>
                  </div>
              </div>
          </div>


        <!-- END++++MODALS===================================================================================================== -->

          <!-- partial:partials/_footer.html -->
          <footer class="footer">

            <div class="d-sm-flex justify-content-center justify-content-sm-between">

              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a href="#" target="_blank">Cooper</a>. Excellence.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Bien gérer pour une meilleur<i class="mdi mdi-heart text-danger"></i></span>
            </div>
          </footer>
          <!-- partial -->
        </div>



      <!-- main-panel ends -->
    </div>
          <div class="modal" id="achaCiteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalCenterLabel">Achat(s) Cite</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      </div>
                      <div class="modal-body">
                        <form action="acheterCite" id="fromAchaCit" method="post">
                          @csrf
                            <div class="form-group">
                              <label>Choisir Client</label>
                              <select class="form-control form-control-sm" name="num_clie" id="num_clie">
                                @foreach ($client as $selection)
                                <option value="{{$selection->num_cli}}">{{$selection->nom_cli}}</option>
                                @endforeach
                              </select>
                            </div>
                            <div class="form-group">
                              <label>Type de Transaction</label>
                              <select class="form-control form-control-sm" name="typ_transaction" id="typ_transaction">
                                <option value="Achât">Achât</option>
                                <option value="Venet">Vente</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label>Titre de Transaction</label>
                              <input type="text" class="form-control form-control-sm" placeholder="Vente de Cite" name="titr_transaction" id="titr_transaction" aria-label="prix">
                            </div>
                            <div class="form-group">
                              <label>Prix (Montant en Ariary)</label>
                              <input type="text" class="form-control form-control-sm" placeholder="En ariary" name="pri_transaction" id="pri_transaction" aria-label="prix">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                            </div>
                        </form>
                  </div>
              </div>
          </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

          <div class="modal" id="achaLogementModal" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalCenterLabel">Achat(s) Cite</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      </div>
                      <div class="modal-body">
                        <form action="acheterLogement" id="fromAchaLoge" method="post">
                          @csrf
                            <div class="form-group">
                              <label>Choisir Client</label>
                              <select class="form-control form-control-sm" name="num_clien" id="num_clien">
                                @foreach ($client as $selection)
                                <option value="{{$selection->num_cli}}">{{$selection->nom_cli}}</option>
                                @endforeach
                              </select>
                            </div>
                            <div class="form-group">
                              <label>Type de Transaction</label>
                              <select class="form-control form-control-sm" name="type_transaction" id="type_transaction">
                                <option value="Achât">Achât</option>
                                <option value="Venet">Vente</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label>Titre de Transaction</label>
                              <input type="text" class="form-control form-control-sm" placeholder="Vente de Cite" name="titre_transaction" id="titre_transaction" aria-label="prix">
                            </div>
                            <div class="form-group">
                              <label>Prix (Montant en Ariary)</label>
                              <input type="text" class="form-control form-control-sm" placeholder="En ariary" name="pr_transaction" id="pr_transaction" aria-label="prix">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                            </div>
                        </form>
                      </div>
                  </div>
              </div>
          </div>


  <!-- plugins:js -->
  <script src="/vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="/js/off-canvas.js"></script>
  <script src="/js/hoverable-collapse.js"></script>
  <script src="/js/template.js"></script>
  <!-- endinject -->

  <!-- Custom js for this page-->
  <script src="/js/dashboard.js"></script>
  <!-- End custom js for this page-->
  <!-- CRUD-->
  <script src="/js/crud/modif.js"></script>
  <!-- END  CRUD -->
  <!-- NAVIGATION-->
  <script src="/navigation/navigation.js"></script>
  <!-- END  NAVIGATION -->
  <script src="/array/listTT.js"></script>
  <!--DATA TABLE -->
  <script src="/js/datatable/datatables.js"></script>
  <script src="/js/datatable/jquery.dataTables.js"></script>
  <script src="/js/datatable/dataTables.bootstrap4.js"></script>
  <!-- END DATA TABLE -->

	<script src="/js/plugin/sweetalert.min.js"></script>
  <script src="/js/plugin/jquery.min.js"></script>
  <script src="/js/plugin/popper.min.js"></script>
  <script src="/js/trans/achar.js"></script>

  <script>
    $(document).ready(function(){
      $('.buyTerrain').each(function(){
        $(this).on('click', function(){
            $tr = $(this).closest('tr');
            let terrain =  $tr.children("td").map(function(){
                return $(this).text();
            }).get();
            let id_det = terrain[0]
            let reponseTerrain = ''

            $.ajax({
                url: 'getDetailTerrain',
                type:'POST',
                data:{
                        '_token':'{{csrf_token()}}',
                        id_Terrain:id_det,
                    },
                dataType:'json',
                success:function(reponse,status){
                  console.log(reponse);
                  if(reponse.success){
                    reponseTerrain = reponse.success[0]
                    $('#achaTerModal').modal('show')
                    $('.propActuAchatTerrain').each(function(){
                      $(this).attr('value',reponseTerrain['nom_cli'])
                      $(this).attr('id',reponseTerrain['num_cli'])
                    })
                    let descAchatTerrain = `Zone `+reponseTerrain['localisation']+`, surface environ `+reponseTerrain['superficie_terrain']+` KM².`
                    $('.descAchatTerrain').each(function(){
                      $(this).attr('value',descAchatTerrain)
                      $(this).attr('id', reponseTerrain['num_terrain'])
                    })
                    $('#prixAchatTerrain').attr('value',reponseTerrain['prix'])
                  }
                  else{
                      swal("Echéc", "Impossible d'effectuer un Transaction pour le moment", {
                          icon : "error",
                          buttons: {
                              confirm: {
                                  className : 'btn btn-danger'
                              }
                          },
                      });
                  }
                }
            })

            var lunch = $('#fromAchaTer');
            $(lunch).on('submit', function(evt){
                evt.preventDefault();
                let id_old = $('.propActuAchatTerrain').attr('id')
                let id_new = $('.zoneAcheteur').attr('id')
                if (id_old === id_new){
                  swal("Transaction Impossible", "Veuillez changer le client acheteur", {
                      icon : "error",
                      buttons: {
                          confirm: {
                              className : 'btn btn-danger'
                          }
                      },
                  })
                }else{
                  url = $(this).attr('action');
                  swal({
                      text: "Voullez-vous valider la transaction?",
                      icon: 'warning',
                      buttons:{
                          confirm: {
                              text : 'Oui',
                              className : 'btn btn-success'
                          },
                          cancel: {
                              visible: true,
                              text:'Annuler',
                              className: 'btn btn-danger'
                          }
                      }
                  }).then((Delete) => {
                      if (Delete) {
                          $.ajax({
                              url: url,
                              type:'POST',
                              data:{
                                      '_token':'{{csrf_token()}}',
                                      id_old:id_old,
                                      id_new:id_new,
                                      id_terrain:$('.descAchatTerrain').attr('id'),
                                      prix_terrain:$('#prixAchatTerrain').attr('value'),
                                      titre_transaction:$('#titreAchatTer').val()
                                  },
                              dataType:'json',
                              success:function(reponse,status){
                                  console.log(reponse.update);
                                  if(reponse.error){
                                      swal("Echéc", reponse.error, {
                                          icon : "error",
                                          buttons: {
                                              confirm: {
                                                  className : 'btn btn-danger'
                                              }
                                          },
                                      });
                                      console.log(reponse.error);
                                  }
                                  if(reponse.success){
                                      swal("Succés", reponse.success, {
                                          icon : "success",
                                          buttons: {
                                              confirm: {
                                                  className : 'btn btn-success',

                                              }
                                          },
                                      }).then((Delete) => {
                                          if (Delete) {
                                              window.location.reload();
                                          }

                                      });

                                  }
                              }
                          })
                      } else {
                          swal.close();
                      }
                  });
                }
            })
        })
      })
      $('#getTransactionTerrain').on('click', function(priv){
        $.ajax({
            url: 'getTransactionTerrain',
            type:'POST',
            data:{
                '_token':'{{csrf_token()}}',
            },
            dataType:'json',
            success:function(reponse,status){
              console.log(reponse);
              if(reponse.success){

                let infoTrans = reponse.success
                let htmlTrans = ''
                $.each(infoTrans, function(i,v){
                  htmlTrans += `<tr id=" `+v["num_transaction"]+`">
                                <td>`+v["num_transaction"]+`</td>
                                <td>`+v["libelle_transaction"]+`</td>
                                <td> `+v["prix_transaction"]+`</td>
                                <td> `+v["localisation"]+` `+v["superficie_terrain"]+`</td>
                                <td> `+v["nom_cli"]+`</td>
                                <td>
                                  <div class="table-actions">
                                      <a href="#" class="detailsTrans" title="Details"><i class="mdi mdi-information-outline icon-md mr-3 text-secondary"></i></a>
                                  </div>
                                </td>
                            </tr>`
                })
                $('.bodyTransactionTerrain').each(function(){
                  $(this).html(htmlTrans)
                })

                $('.detailsTrans').each(function(){
                  $(this).on('click',function(){
                    $tr = $(this).closest('tr');
                    let detailTer =  $tr.children("td").map(function(){
                        return $(this).text();
                    }).get();
                    let id_trans = detailTer[0]

                    $.ajax({
                        url: 'getDetailTrans',
                        type:'POST',
                        data:{
                                '_token':'{{csrf_token()}}',
                                id_trans:id_trans,
                            },
                        dataType:'json',
                        success:function(reponse,status){
                          console.log(reponse);
                          if(reponse.success){
                            let detail = ''
                            detail = reponse.success[0]
                            $('#detailTransactionModal').modal('show')
                            let detailTransTerrain = `Ce terrain se situe à `+detail['localisation']+` avec une superficie
                                               de `+detail['superficie_terrain']+` KM².`
                            $('#detailTransTerrain').html(detailTransTerrain)

                            let detailTransPropre = `Une Transaction du Client `+detail['nom_cli']+`.`
                            $('#detailTransPropre').html(detailTransPropre)

                            let detailTrasact = `Un `+detail['libelle_transaction']+` , avec un montant de `+detail['prix_transaction']+` ar.
                                               Ariary.`
                            $('#detailTrasact').html(detailTrasact)

                          }
                          else{
                              swal("Echéc", "Impossible d'accéder au détails de ce Transaction", {
                                  icon : "error",
                                  buttons: {
                                      confirm: {
                                          className : 'btn btn-danger'
                                      }
                                  },
                              });
                          }
                        }
                    })
                  })
                })
              }
              else{
                priv.preventDefault()
                swal("Vérifier votre connection", "Impossible d'accéder au liste de Transaction", {
                    icon : "error",
                    buttons: {
                        confirm: {
                            className : 'btn btn-success',
                        }
                    },
                })
              }
            }
        })
      })
      let infoCli = ''
      let cati = ''
      $('.btn_selectClient').each(function(){
        $(this).on('click', function(){
          $tr = $(this).closest('tr');
          let detailTer =  $tr.children("td").map(function(){
              return $(this).text();
          }).get();
          let id_det = detailTer[0]

          $.ajax({
              url: 'selectClient',
              type:'POST',
              data:{
                  '_token':'{{csrf_token()}}',
                  id_Terrain:id_det,
              },
              dataType:'json',
              success:function(reponse,status){
                console.log(reponse);
                if(reponse.success){

                  infoCli = reponse.success
                  $('#achaTerModal').modal('toggle')
                  $('#selectionClient').modal('show')
                  let html = ''
                  $.each(infoCli, function(i,v){
                      html += `<tr id=" `+v["num_cli"]+`">
                                  <td>`+v["num_cli"]+`</td>
                                  <td>`+v["nom_cli"]+`</td>
                                  <td> `+v["Adresss_cli"]+`</td>
                                  <td>
                                      <div class="table-actions">
                                          <button type="button" title="choisir" class="btn btn-link btn-primary btn-lg chooseClient" data-original-title="Choose">
                                              <i class="mdi mdi-near-me mr-3 icon-lg"></i>
                                          </button>
                                      </div>
                                  </td>
                              </tr>`
                  })
                  $('.bodySelection').each(function(){
                    $(this).html(html)
                  })

                  $('.chooseClient').each(function(){
                    $(this).on('click',function(){
                          $tr = $(this).closest('tr');
                          cati =  $tr.children("td").map(function(){
                              return $(this).text();
                          }).get();
                          let olde_id = ''
                          $('.propActuAchatTerrain').each(function(){
                            olde_id = $(this).attr('id')
                          })
                          if (cati[0] === olde_id){
                            swal("Attention", "Veuillez choisir un autre acheteur!", {
                                icon : "error",
                                buttons: {
                                    confirm: {
                                        className : 'btn btn-danger',

                                    }
                                },
                            })
                          }else{

                            $('#selectionClient').modal('toggle');
                            $('#achaTerModal').modal('show');
                            $('.zoneAcheteur').each(function(){
                                $(this).attr('value', cati[1])
                                $(this).attr('id', cati[0])
                            })
                          }
                    })
                  })
                }
                else{
                  swal("Vérifier votre connection", "Impossible d'accéder au choix du client", {
                      icon : "error",
                      buttons: {
                          confirm: {
                              className : 'btn btn-success',

                          }
                      },
                  }).then((Delete) => {
                      if (Delete) {
                        $('#achaTerModal').modal('show')
                      }

                  })
                }
              }
          })
        })
      })
      let dataVenteTer = ''
      $('.vendre').each(function(){
        $(this).on('click', function(){

            $('#venteTerrainModal').modal('show');

            $tr = $(this).closest('tr');
            dataVenteTer =  $tr.children("td").map(function(){
                return $(this).text();
            }).get();

            $('#proprietaire').append('<option>'+dataVenteTer[2]+'</option>');
            $('#localVenteTer').attr('value', dataVenteTer[1])
            $('#superVenteTer').attr('value', dataVenteTer[3])
            var lunch = $('#fromVenteTerrain');
            $(lunch).on('submit', function(evt){
                evt.preventDefault();
                var prix = $('#prixVenteTer').val()
                url = $(this).attr('action');
                var id = dataVenteTer[0];
                swal({
                    text: "Voullez-vous mettre le Terrain en Vente?",
                    icon: 'warning',
                    buttons:{
                        confirm: {
                            text : 'Oui',
                            className : 'btn btn-success'
                        },
                        cancel: {
                            visible: true,
                            text:'Annuler',
                            className: 'btn btn-danger'
                        }
                    }
                }).then((Delete) => {
                    if (Delete) {
                        $.ajax({
                            url: url,
                            type:'POST',
                            data:{
                                    '_token':'{{csrf_token()}}',
                                    id_transaction:id,
                                    prix_transaction:prix
                                },
                            dataType:'json',
                            success:function(reponse,status){
                                console.log(reponse.update);
                                if(reponse.error){
                                    swal("Echéc", reponse.error, {
                                        icon : "error",
                                        buttons: {
                                            confirm: {
                                                className : 'btn btn-danger'
                                            }
                                        },
                                    });
                                    console.log(reponse.error);
                                }
                                if(reponse.success){
                                    swal("Succés", reponse.success, {
                                        icon : "success",
                                        buttons: {
                                            confirm: {
                                                className : 'btn btn-success',

                                            }
                                        },
                                    }).then((Delete) => {
                                        if (Delete) {
                                            window.location.reload();
                                        }

                                    });

                                }
                            }
                        })
                    } else {
                        swal.close();
                    }
                });
            })
        })
      })
      $('.detailsTerrain').each(function(){
        $(this).on('click',function(){
          $tr = $(this).closest('tr');
          let detailTer =  $tr.children("td").map(function(){
              return $(this).text();
          }).get();
          let id_det = detailTer[0]

          $.ajax({
              url: 'getDetailTerrain',
              type:'POST',
              data:{
                      '_token':'{{csrf_token()}}',
                      id_Terrain:id_det,
                  },
              dataType:'json',
              success:function(reponse,status){
                console.log(reponse);
                if(reponse.success){
                  let detail = ''
                  detail = reponse.success[0]
                  $('#DetailModal').modal('show')
                  let paragraphAG = `Un terrain enregistré dans la base de données de l'Agence
                                    `+detail['libelle_agence']+` à `+detail['provinces']+`.`
                  $('#detailTerrainAG').html(paragraphAG)

                  let paragraphPR = `Figurant dans la liste des propriétés de Monseiur `+detail['nom_cli']+`, un client
                                        actif à `+detail['Adresss_cli']+`.`
                  $('#detailTerrainPR').html(paragraphPR)

                  let paragraphT = `Ce terrain se situe à `+detail['localisation']+` avec une superficie de
                                    `+detail['superficie_terrain']+` Km².`
                  $('#detailTerrainT').html(paragraphT)

                }
                else{
                    swal("Echéc", "Impossible d'accéder au détails de ce Terrain", {
                        icon : "error",
                        buttons: {
                            confirm: {
                                className : 'btn btn-danger'
                            }
                        },
                    });
                }
              }
          })
        })
      })

      //================================CITE======================================


      $('.detailsCite').each(function(){
        $(this).on('click',function(){
          $tr = $(this).closest('tr');
          let detailTer =  $tr.children("td").map(function(){
              return $(this).text();
          }).get();
          let id_detCite = detailTer[0]

          $.ajax({
              url: 'getDetailCite',
              type:'POST',
              data:{
                      '_token':'{{csrf_token()}}',
                      id_Cite:id_detCite,
                  },
              dataType:'json',
              success:function(reponse,status){
                console.log(reponse);
                if(reponse.success){
                  let detail = ''
                  detail = reponse.success[0]
                  $('#detailsCite').modal('show')
                  let detailCiteTerrain = `Un cite enregistré sur le terrain  à
                                    `+detail['localisation']+`.`
                  $('#detailCiteTerrain').html(detailCiteTerrain)

                  let detailCiteprop = `Figurant dans la liste des propriétés de Monseiur `+detail['nom_cli']+`, un client
                                        actif à `+detail['Adresss_cli']+`.`
                  $('#detailCiteprop').html(detailCiteprop)

                  let detailCite = `Ce cite se situe à `+detail['localisation']+`.`
                  $('#detailCite').html(detailCite)

                }
                else{
                    swal("Echéc", "Impossible d'accéder au détails de ce Terrain", {
                        icon : "error",
                        buttons: {
                            confirm: {
                                className : 'btn btn-danger'
                            }
                        },
                    });
                }
              }
          })
        })
      })
      $('.acheter').each(function(){
        $(this).on('click', function(){
          $('#achaCiteModal').modal('show');
            $tr = $(this).closest('tr');
            var data =  $tr.children("td").map(function(){
                return $(this).text();
            }).get();
          var submit = $('#fromAchaCit');
            $(submit).on('submit', function(evt){
                evt.preventDefault();
                url = $(this).attr('action');
                var id = data[0];
                swal({
                    text: "Voullez-vous enregistrer?",
                    icon: 'warning',
                    buttons:{
                        confirm: {
                            text : 'Oui',
                            className : 'btn btn-success'
                        },
                        cancel: {
                            visible: true,
                            text:'Annuler',
                            className: 'btn btn-danger'
                        }
                    }
                }).then((Delete) => {
                    if (Delete) {
                        $.ajax({
                            url: url,
                            type:'POST',
                            data:{
                                    '_token':'{{csrf_token()}}',
                                    id_transaction:id,
                                    num_cli:$('#num_clie option:selected').val(),
                                    type_transaction:$('#typ_transaction option:selected').val(),
                                    libelle_transaction:$('#titr_transaction').val(),
                                    prix_transaction:$('#pri_transaction').val()
                                },
                            dataType:'json',
                            success:function(reponse,status){
                                console.log(reponse.update);
                                if(reponse.error){
                                    swal("Echéc", reponse.error, {
                                        icon : "error",
                                        buttons: {
                                            confirm: {
                                                className : 'btn btn-danger'
                                            }
                                        },
                                    });
                                    console.log(reponse.error);
                                }
                                if(reponse.success){
                                    swal("Succés", reponse.success, {
                                        icon : "success",
                                        buttons: {
                                            confirm: {
                                                className : 'btn btn-success',

                                            }
                                        },
                                    }).then((Delete) => {
                                        if (Delete) {
                                            window.location.reload();
                                        }

                                    });

                                }
                            }
                        })
                    } else {
                        swal.close();
                    }
                });
            })
        })
      })
      $('.mividy').each(function(){
        $(this).on('click', function(){
          $('#achaLogementModal').modal('show');
            $tr = $(this).closest('tr');
            var data =  $tr.children("td").map(function(){
                return $(this).text();
            }).get();
          var submit = $('#fromAchaLoge');
            $(submit).on('submit', function(evt){
                evt.preventDefault();
                url = $(this).attr('action');
                var id = data[0];
                swal({
                    text: "Voullez-vous enregistrer?",
                    icon: 'warning',
                    buttons:{
                        confirm: {
                            text : 'Oui',
                            className : 'btn btn-success'
                        },
                        cancel: {
                            visible: true,
                            text:'Annuler',
                            className: 'btn btn-danger'
                        }
                    }
                }).then((Delete) => {
                    if (Delete) {
                        $.ajax({
                            url: url,
                            type:'POST',
                            data:{
                                    '_token':'{{csrf_token()}}',
                                    id_transaction:id,
                                    num_cli:$('#num_clie option:selected').val(),
                                    type_transaction:$('#typ_transaction option:selected').val(),
                                    libelle_transaction:$('#titr_transaction').val(),
                                    prix_transaction:$('#pri_transaction').val()
                                },
                            dataType:'json',
                            success:function(reponse,status){
                                console.log(reponse.update);
                                if(reponse.error){
                                    swal("Echéc", reponse.error, {
                                        icon : "error",
                                        buttons: {
                                            confirm: {
                                                className : 'btn btn-danger'
                                            }
                                        },
                                    });
                                    console.log(reponse.error);
                                }
                                if(reponse.success){
                                    swal("Succés", reponse.success, {
                                        icon : "success",
                                        buttons: {
                                            confirm: {
                                                className : 'btn btn-success',

                                            }
                                        },
                                    }).then((Delete) => {
                                        if (Delete) {
                                            window.location.reload();
                                        }

                                    });

                                }
                            }
                        })
                    } else {
                        swal.close();
                    }
                });
            })
        })
      })
    });
  </script>


</body>

</html>

