<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />


    <link rel="stylesheet" href="{{url("frontend/css/global.css")}}" />
    <link rel="stylesheet"  href="{{url("frontend/css/Login.css")}}" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap"
    />
  </head>
  <body>
    <div class="login">
      <div class="form-wrapper1">
        <div class="login-form1">
          <div class="form-container1">
            <div class="logo-container3">
              <a class="logo2" href="{{url("index")}}">
                <img class="clip-path-group1" alt="" src="{{url("frontend/assets/clip-path-group.png")}}"/>
              </a>
            </div>
            <div class="form-body1">
              <div class="form-body-title1">
                <h3 class="body-title1">Déjà client?</h3>
                <h6 class="body-subtitle1">
                  Saisissez votre email et mot de passe
                </h6>
              </div>
              <div class="form-input-group1">
                <div class="form-field-content1">
                  <div class="form-group3">
                    <label class="votre-adresse-email1">Votre adresse Email</label>
                    <input
                      class="form-input3"
                      name="email"
                      placeholder="Entrez votre adresse mail"
                      type="text"
                    />

                    <div class="error-text3">
                      <div class="error-etxt3">error etxt</div>
                    </div>
                  </div>
                  <div class="form-group4">
                    <label class="votre-adresse-email1">Mot de passe</label>
                    <input
                      class="form-input3"
                      name="password"
                      placeholder="Entrez votre adresse mail"
                      type="password"
                    />

                    <div class="error-text3">
                      <div class="error-etxt3">error etxt</div>
                    </div>
                  </div>
                </div>
                <div class="form-checkbox2">
                  <input class="form-checkbox3" type="checkbox" />

                  <label class="se-souvenir-de1">Se souvenir de moi</label>
                </div>
              </div>
            </div>
            <div class="form-buttons1">
              <button class="button-secondary1">
                <span class="connexion1">Connexion</span>
              </button>
              <div class="separate-form-line1">
                <div class="ou1">Ou</div>
              </div>
              <a class="button-default1" href="{{url("register")}}">
                <span class="crer-un-compte1">Créer un compte </span>
              </a>
            </div>
          </div>
        </div>
        <div class="social-link-group1">
          <a class="facebook1" href="#">
            <img class="vector-icon7" alt="" src="{{url("frontend/assets/undefined6.png")}}" />
          </a>
          <a class="googleplus1" href="#">
            <img class="vector-icon7" alt="" src="{{url("frontend/assets/undefined7.png")}}" />
          </a>
        </div>
        <div class="form-policy1">
          <p class="reparo-en-tant-container1">
            <span class="reparo-en-tant-que-responsabl1">
              <span class="reparo1">REPARO</span>
              <span>, en tant que responsable de traitement, traite les données
                recueillies à des fins de gestion de la relation client, gestion
                des commandes et des livraisons.</span
              >
            </span>
            <span class="reparo-en-tant-que-responsabl1">
              <span
                >En passant votre commande, vous acceptez nos conditions
                générales d'utilisations</span
              >
            </span>
          </p>
        </div>
      </div>
    </div>
  </body>
</html>
