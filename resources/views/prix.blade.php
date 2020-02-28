@extends('layouts.app')
@section('content')
<section class="product_description_area">
    <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><img src="img/user.png" alt="">CHANGEMENT DE TITULAIRE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                 aria-selected="false"><img src="img/localisation.png" alt="">CHANGEMENT DE DOMICILE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
                 aria-selected="false"><img src="img/doc.png" alt="">DUPLICATA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review"
                 aria-selected="false"><img src="img/doc.png" alt="">ENREGISTREMENT</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="container">
                        <div class="billing_details">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h3>VEUILLEZ COMPLETER LES INFORMATIONS SUIVANTES</h3>
                                   
                                <form id="form-data" class="row contact_form" data-route="{{route('prix.store')}}" method="post" novalidate="novalidate">
                                    @csrf
                                        <div class="col-md-6 form-group p_star">
                                            <select name="type" class="country_select">
                                                <option value="Véhicule de tourisme(VP)">Véhicule de tourisme(VP)</option>
                                                <option value="Véhicule société / utilitaire (CTTE / Deriv-VP)">Véhicule société / utilitaire (CTTE / Deriv-VP)</option>
                                                <option value="Camion, bus, tracteur routier (CAM, TCP, TRR)">Camion, bus, tracteur routier (CAM, TCP, TRR)</option>
                                                <option value="Véhicule spécialisé (VASP)">Véhicule spécialisé (VASP)</option>
                                                <option value="Motocyclette (MTL, MTT1, MTT2)">Motocyclette (MTL, MTT1, MTT2)</option>
                                                <option value="Motocyclette (MTL, MTT1, MTT2)">Motocyclette (MTL, MTT1, MTT2)</option>
                                                <option value="Quadricycles à moteur: quad, voiturette (QM)">Quadricycles à moteur: quad, voiturette (QM)</option>
                                                <option value="Engin agricole (TRA, Quad, MAGA)">Engin agricole (TRA, Quad, MAGA)</option>
                                                <option value="Remorque (REM), semi (SREM), caravane (RESP)">Remorque (REM), semi (SREM), caravane (RESP)</option>
                                                <option value="Tricycles à moteur (TM)">Tricycles à moteur (TM)</option>
                                                <option value="Cylo carrossé à 3 roues (CYCL)">Cylo carrossé à 3 roues (CYCL)</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group p_star">
                                            <select name="etat" class="country_select">
                                                <option value="Neuf">Neuf</option>
                                                <option value="Occasion">Occasion</option>
                                            </select>      
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <select name="mark" class="country_select">
                                                <option value="1">Marque du véhicule</option>
                                                <option value="2">ALFA ROMEO</option>
                                                <option value="4">AUDI</option>
                                                <option value="CITROEN">CITROEN</option>
                                                <option value="DACIA">DACIA</option>
                                                <option value="DUCATI">DUCATI</option>
                                                <option value="FIAT">FIAT</option>
                                                <option value="FORD">FORD</option>
                                                <option value="HONDA">HONDA</option>
                                                <option value="KAWASAKI">KAWASAKI</option>
                                                <option value="KIA">KIA</option>
                                                <option value="LANCIA">LANCIA</option>
                                                <option value="LAND ROVER">LAND ROVER</option>
                                                <option value="LEXUS">LEXUS</option>
                                                <option value="MAZDA">MAZDA</option>
                                                <option value="MERCEDES">MERCEDES</option>
                                                <option value="MINI">MINI</option>
                                                <option value="MITSUBISHI">MITSUBISHI</option>
                                                <option value="NISSAN">NISSAN</option>
                                                <option value="OPEL">OPEL</option>
                                                <option value="PEUGEOT">PEUGEOT</option>
                                                <option value="RENAULT">RENAULT</option>
                                                <option value="SEAT">SEAT</option>
                                                <option value="SMART">SMART</option>
                                                <option value="SUZUKI">SUZUKI</option>
                                                <option value="TOYOTA">TOYOTA</option>
                                                <option value="VOLKSWAGEN">VOLKSWAGEN</option>
                                                <option value="VOLVO">VOLVO</option>
                                                <option value="YAMAHA">YAMAHA</option>
                                                <option value="AUTRE">AUTRE</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group p_star">
                                            <select name="carburant" class="country_select">
                                                <option value="1">Carburant</option>
                                                <option value="Essence (ES) / Diesel (GO)">Essence (ES) / Diesel (GO)</option>
                                                <option value="GPL (GP) / GNV (GN)">GPL (GP) / GNV (GN)</option>
                                                <option value="Electricité (EL)">Electricité (EL)</option>
                                                <option value="Hybride (EE, GL, OL, PE, NE, FL)">Hybride (EE, GL, OL, PE, NE, FL)</option>
                                                <option value="Superéthanol E85 (FE)">Superéthanol E85 (FE)</option>
                                                <option value="Bicarburation (EG, EN, FG, FN)">Bicarburation (EG, EN, FG, FN)</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group p_star">
                                            <input name="puissance" type="number" class="form-control" id="puissance">
                                            <span class="placeholder" data-placeholder="Puissance Fiscale"></span>
                                        </div>
                                        <div class="col-md-12 form-group p_star">
                                            <input type="date" class="form-control" id="date" name="compemailany">
                                            
                                        </div>
                                        <div class="col-md-12 form-group p_star">
                                            <input type="number" class="form-control" id="co2" name="co2">
                                            <span class="placeholder" data-placeholder="Taux de CO2"></span>
                                        </div>
                                        <div class="col-md-12 form-group p_star">
                                            <input type="email" class="form-control" id="email" name="email">
                                            <span class="placeholder" data-placeholder="E-mail"></span>
                                        </div>
                                        <div class="col-md-12 form-group p_star">
                                            <select name="departement" class="country_select">
                                                <option value="">Département</option>
                                                <option value="1">Auvergne Rhone alpes</option>
                                                <option value="2">Bourgogne Franche Comte</option>
                                                <option value="3">Bretagne</option>
                                                <option value="4">Centre Val de loire</option>
                                                <option value="5">Corse</option>
                                                <option value="6">Crand Est</option>
                                                <option value="7">Hauts de France/Nord Pas de Calais</option>
                                                <option value="8">Hauts de France/Picardie</option>
                                                <option value="9">Ile de France</option>
                                                <option value="10">Nouvelle Aquitaine</option>
                                                <option value="11)">Normandie</option>
                                                <option value="12">Occitanie</option>
                                                <option value="13">Pays de la loire</option>
                                                <option value="14">Provence Alpes Cote d'Azur</option>
                                                <option value="15">Guadeloupe</option>
                                            </select>
                                        </div>    
                                        <div class="col-md-12 form-group">
                                            <div class="creat_account">
                                                <input type="checkbox" id="f-option2" name="selector">
                                                <label for="f-option2">I’ve read and accept the </label>
                                                <a href="#">terms & conditions</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <div class="creat_account">
                                                <input class="primary-btn" type="submit" id="f-option2" id="try" name="selector">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-4">
                                    <div class="order_box">
                                        <h2>Facture</h2>
                                        <ul class="list">
                                            <li><a href="#">Changement titulaire<span></span></a></li>
                                            <li><a href="#">Montant HT <span class="middle"></span> <span><span class="last" id="messages"></span></span></a></li>
                                            <li><a href="#">Montant TVA <span class="middle"></span> <span class="last" id="tva"></span></a></li>
                                            <li><a href="#">Montant TTC <span class="middle"></span> <span class="last" id="montant"></span></a></li>
                                        </ul>
                                        <ul class="list list_2">
                                           
                                            <li><a href="#" >Total <span id="total"></span></a></li>
                                        </ul>
                                        <div class="creat_account">
                                            <input type="checkbox" id="f-option4" name="selector">
                                            <label for="f-option4">I’ve read and accept the </label>
                                        </div>
                                        <a class="primary-btn" href="#">Valider</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="container">
                    <div class="billing_details">
                        <div class="row">
                            <div class="col-lg-8">
                                <h3>VEUILLEZ COMPLETER LES INFORMATIONS SUIVANTES</h3>
                                <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                                    <div class="col-md-12 form-group">
                                        <select class="country_select">
                                            <option value="1">Marque du véhicule</option>
                                            <option value="2">ALFA ROMEO</option>
                                            <option value="4">AUDI</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="texte" class="form-control" id="add1" name="add1">
                                        <span class="placeholder" data-placeholder="Matricule"></span>
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="email" class="form-control" id="add2" name="add2">
                                        <span class="placeholder" data-placeholder="E-mail"></span>
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="number" class="form-control" id="city" name="city">
                                        <span class="placeholder" data-placeholder="Code postal"></span>
                                    </div>
                                   
                                  
                                    <div class="col-md-12 form-group">
                                        <div class="creat_account">
                                            <input type="checkbox" id="f-option2" name="selector">
                                            <label for="f-option2">Recevoir un devis d’assurance</label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-4">
                                <div class="order_box">
                                    <h2>Facture</h2>
                                    <ul class="list">
                                        <li><a href="#">Changement titulaire<span>Total</span></a></li>
                                        <li><a href="#">Montant HT <span class="middle"></span> <span class="last">300.00 €</span></a></li>
                                        <li><a href="#">Montant TVA <span class="middle"></span> <span class="last">60.00 €</span></a></li>
                                        <li><a href="#">Montant TTC <span class="middle"></span> <span class="last">360.00 €</span></a></li>
                                    </ul>
                                    <ul class="list list_2">
                                       
                                        <li><a href="#">Total <span>360.00 €</span></a></li>
                                    </ul>
                                    <div class="creat_account">
                                        <input type="checkbox" id="f-option4" name="selector">
                                        <label for="f-option4">I’ve read and accept the </label>
                                        <a href="#">terms & conditions*</a>
                                    </div>
                                    <a class="primary-btn" href="#">Valider</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div class="container">
                    <div class="billing_details">
                        <div class="row">
                            <div class="col-lg-8">
                                <h3>VEUILLEZ COMPLETER LES INFORMATIONS SUIVANTES</h3>
                                <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                                    <div class="col-md-12 form-group">
                                        <select class="country_select">
                                            <option value="1">Marque du véhicule</option>
                                            <option value="2">ALFA ROMEO</option>
                                            <option value="4">AUDI</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="texte" class="form-control" id="add1" name="add1">
                                        <span class="placeholder" data-placeholder="Matricule"></span>
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="email" class="form-control" id="add2" name="add2">
                                        <span class="placeholder" data-placeholder="E-mail"></span>
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="number" class="form-control" id="city" name="city">
                                        <span class="placeholder" data-placeholder="Code postal"></span>
                                    </div>
                                   
                                  
                                    <div class="col-md-12 form-group">
                                        <div class="creat_account">
                                            <input type="checkbox" id="f-option2" name="selector">
                                            <label for="f-option2">Recevoir un devis d’assurance</label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-4">
                                <div class="order_box">
                                    <h2>Facture</h2>
                                    <ul class="list">
                                        <li><a href="#">Changement titulaire<span>Total</span></a></li>
                                        <li><a href="#">Montant HT <span class="middle"></span> <span class="last">300.00 €</span></a></li>
                                        <li><a href="#">Montant TVA <span class="middle"></span> <span class="last">60.00 €</span></a></li>
                                        <li><a href="#">Montant TTC <span class="middle"></span> <span class="last">360.00 €</span></a></li>
                                    </ul>
                                    <ul class="list list_2">
                                       
                                        <li><a href="#">Total <span>360.00 €</span></a></li>
                                    </ul>
                                    <div class="creat_account">
                                        <input type="checkbox" id="f-option4" name="selector">
                                        <label for="f-option4">I’ve read and accept the </label>
                                        <a href="#">terms & conditions*</a>
                                    </div>
                                    <a class="primary-btn" href="#">Valider</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">
                <div class="container">
                    <div class="billing_details">
                        <div class="row">
                            <div class="col-lg-8">
                                <h3>VEUILLEZ COMPLETER LES INFORMATIONS SUIVANTES</h3>
                                <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                                    <div class="col-md-12 form-group">
                                        <select class="country_select">
                                            <option value="1">Marque du véhicule</option>
                                            <option value="2">ALFA ROMEO</option>
                                            <option value="4">AUDI</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="texte" class="form-control" id="add1" name="add1">
                                        <span class="placeholder" data-placeholder="Matricule"></span>
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="email" class="form-control" id="add2" name="add2">
                                        <span class="placeholder" data-placeholder="E-mail"></span>
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="number" class="form-control" id="city" name="city">
                                        <span class="placeholder" data-placeholder="Code postal"></span>
                                    </div>
                                   
                                  
                                    <div class="col-md-12 form-group">
                                        <div class="creat_account">
                                            <input type="checkbox" id="f-option2" name="selector">
                                            <label for="f-option2">Recevoir un devis d’assurance</label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-4">
                                <div class="order_box">
                                    <h2>Facture</h2>
                                    <ul class="list">
                                        <li><a href="#">Changement titulaire<span>Total</span></a></li>
                                        <li><a href="#">Montant HT <span class="middle"></span> <span class="last">300.00 €</span></a></li>
                                        <li><a href="#">Montant TVA <span class="middle"></span> <span class="last">60.00 €</span></a></li>
                                        <li><a href="#">Montant TTC <span class="middle"></span> <span class="last">360.00 €</span></a></li>
                                    </ul>
                                    <ul class="list list_2">
                                       
                                        <li><a href="#">Total <span>360.00 €</span></a></li>
                                    </ul>
                                    <div class="creat_account">
                                        <input type="checkbox" id="f-option4" name="selector">
                                        <label for="f-option4">I’ve read and accept the </label>
                                        <a href="#">terms & conditions*</a>
                                    </div>
                                    <a class="primary-btn" href="#">Valider</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
 <!--================Blog Categorie Area =================-->
 <section class="blog_categorie_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="categories_post">
                    <img src="img/blog/cat-post/cat-post-3.jpg" alt="post">
                    <div class="categories_details">
                        <div class="categories_text">
                            <a href="blog-details.html">
                                <h5>Aucun déplacement en Préfecture</h5>
                            </a>
                            <div class="border_line"></div>
                            <p>Eplaque a reçu une habilitation du Ministère de l'Intérieur pour effectuer les démarches d'immatriculation et un agrément du Trésor Public pour encaisser les taxes d'immatriculation.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="categories_post">
                    <img src="img/blog/cat-post/cat-post-2.jpg" alt="post">
                    <div class="categories_details">
                        <div class="categories_text">
                            <a href="blog-details.html">
                                <h5>Immatriculation sous 24H</h5>
                            </a>
                            <div class="border_line"></div>
                            <p>A réception de votre dossier de carte grise, votre véhicule est immatriculé le jour-même. Vous recevrez un document provisoire officiel par email et la carte grise en recommandé 48h après. Service à partir de 29.90€</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="categories_post">
                    <img src="img/blog/cat-post/cat-post-1.jpg" alt="post">
                    <div class="categories_details">
                        <div class="categories_text">
                            <a href="blog-details.html">
                                <h5>Suivi de votre dossier en ligne</h5>
                            </a>
                            <div class="border_line"></div>
                            <p>Vous recevez des emails à chaque étape de votre demande de carte grise : liste des documents à fournir, dossier complet ou incomplet, document provisoire, suivi de l'expédition.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="{{ asset('js/vendor/jquery-2.2.4.min.js')}}"></script>
<script  src="{{asset('js/simul.js')}}"></script>
<!--================Blog Categorie Area =================-->
@endsection