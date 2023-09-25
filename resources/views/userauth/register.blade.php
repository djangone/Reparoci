<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="{{url("frontend/css/global.css")}}" />
    <link rel="stylesheet"  href="{{url("frontend/css/Register.css")}}" />
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
    <div class="register">
      <div class="form-wrapper">
        <form class="login-form">
          <div class="form-container">
            <div class="logo-container2">
              <a class="logo1" href="{{url("index")}}">
                <img
                  class="clip-path-group"
                  alt=""
                  src="{{url("frontend/assets/clip-path-group.png")}}"
                />
              </a>
            </div>


            <div class="form-body">
              <div class="form-body-title">
                <h3 class="body-title">Nouveau client?</h3>
                <h6 class="body-subtitle">
                  Saisissez votre email et mot de passe
                </h6>
              </div>

              <div class="form-input-group">
                <div class="form-field-content">
                  <div class="form-group">
                    <label class="votre-adresse-email"
                      >Votre adresse Email</label
                    >
                    <input
                      class="form-input"
                      name="email"
                      placeholder="Entrez votre adresse mail"
                      type="text"
                    />

                    <div class="error-text">
                      <div class="error-etxt">error etxt</div>
                    </div>
                  </div>
                  <div class="form-group1">
                    <label class="votre-adresse-email">Mot de passe</label>
                    <input
                      class="form-input"
                      name="password"
                      placeholder="****"
                      type="password"
                    />

                    <div class="error-text">
                      <div class="error-etxt">error etxt</div>
                    </div>
                  </div>
                  <div class="form-group1">
                    <label class="votre-adresse-email"
                      >Confirmer le mot de passe</label>
                    <input class="form-input" name="password_confirmation"  placeholder="****"  type="password" />

                    <div class="error-text">
                      <div class="error-etxt">error etxt</div>
                    </div>
                  </div>
                </div>
                <div class="form-checkbox">
                  <input class="form-checkbox1" type="checkbox" id="chkRememberme" name="remember" />

                  <label class="se-souvenir-de" for="chkRememberme">Se souvenir de moi</label>
                </div>
              </div>

            </div>
            <div class="form-buttons">
              <button class="button-secondary" >
                <span class="connexion">Créer mon compte</span>
              </button>
              <div class="separate-form-line">
                <div class="ou">Ou</div>
              </div>
              <a class="button-default" href="{{url("login")}}">
                <span class="create-account-btntext">Déjà un compte? connectez-vous</span>
              </a>
            </div>
          </div>
        </form>
        <div class="social-link-group">
          <a class="facebook" href="#">
            <img class="vector-icon5" alt="" src="{{url("frontend/assets/undefined4.png")}}" />
          </a>
          <a class="googleplus" href="#">
            <img class="vector-icon5" alt="" src="{{url("frontend/assets/undefined5.png")}}" />
          </a>
        </div>
        <div class="form-policy">
          <p class="reparo-en-tant-container">
            <span class="reparo-en-tant-que-responsabl">
              <span class="reparo">REPARO</span>
              <span
                >, en tant que responsable de traitement, traite les données
                recueillies à des fins de gestion de la relation client, gestion
                des commandes et des livraisons.</span
              >
            </span>
            <span class="reparo-en-tant-que-responsabl">
              <span
                >En passant votre commande, vous acceptez nos conditions
                générales d’utilisations</span
              >
            </span>
          </p>
        </div>
      </div>
    </div>
  </body>
</html>
