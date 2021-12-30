<?php
include('language.php');
$ar_select='';
$fr_select='';
$language='';
if ((isset($_GET['language']) && $_GET['language']=='fr') || !isset($_GET['language'])){
  $ar_select='selected';
  $language='fr';
}else{
  $fr_select='selected';
  $language='ar';
}
?>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $titel_association[$language]['0']?></title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/img/logo.png" />
    <!-- Bootstrap Icons-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    <!-- Google fonts-->
    <link
      href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
      rel="stylesheet"
      type="text/css"
    />
    <!-- SimpleLightbox plugin CSS-->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css"
      rel="stylesheet"
    />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
  </head>
  <body style="background-color: gray ">
    <!-- Navigation-->
    <div style="display: grid; justify-content: center; align-items: center;"> 
    <nav
      class="navbar navbar-expand-lg navbar-light fixed-top py-3"
      id="mainNav"
    >
      <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="index.php"
          ><img style="width: 65px" src="assets/img/logo.png"
        /></a>
        <button
          class="navbar-toggler navbar-toggler-right"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarResponsive"
          aria-controls="navbarResponsive"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div style="justify-content: center" class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ms-0 my-2 my-lg-0 ml-lg-auto align-items-start align-items-lg-center">
            <li class="nav-item">
              <a class="nav-link" href="politique1.php"><?php echo $politique[$language]['0']?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Cookies policy"><?php echo $politique[$language]['1']?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="politique3.php"><?php echo $politique[$language]['2']?></a>
            </li>
          </ul>
         
        </div>
      </div>
    </nav>
 <!-- Cookies policy-->
 <div class="col-lg-8 align-self-end" style="height: 150px " id="Cookies policy" ></div>
      <div class="container">
      <div class="container-fluid p-0">
        <h2 class="text-center mt-0 fs-1"><?php echo $politique[$language]['1']?></h2>
        <hr class="divider" style="background: linear-gradient(-90deg,#9400d3,#e73c7e); height: 8px; width: 50px; margin-right: auto; margin-left: auto; display: block; border-radius: 70px;"/>
        <p class="text-white-75 mb-4 fs-5 text-center" >
        <strong class="fs-3" style="text-decoration: underline;">Que sont les cookies ?<br></strong> <br>
				Un "cookie" est un petit élément d'information stocké sur votre appareil lorsque 
				vous visitez un site web. Le cookie signifie que le site se souviendra de vous et
				de la façon dont vous avez utilisé le site à chaque fois que vous reviendrez. 
				Un cookie peut être un cookie "persistant" ou "de session".  Un cookie "persistant"
				restera pendant une période de temps définie pour ce cookie. Un cookie "de session" 
				n'est attribué que pour la durée de votre visite sur notre site web et expire 
				automatiquement lorsque vous fermez votre navigateur. Si vous souhaitez en savoir
				plus sur les cookies, rendez-vous sur  <a href="abouttcookies.org">le site</a> ou allaboutcookies.org
				(veuillez noter que ces liens ne sont pas gérés par nous et peuvent ouvrir une 
				nouvelle fenêtre ou un nouvel onglet de votre navigateur). Si vous êtes dans 
				l'Union européenne, vous pouvez également trouver plus d'informations sur <a href="www.youronlinechoices.com/uk">le 
				site</a>.<br>
				<br>
				Quelques-unes des technologies de suivi utilisées sur le site comprennent,
				sans s'y limiter, les éléments suivants (il peut également y avoir des technologies
				ou des méthodes de suivi développées ultérieurement qui ne sont pas mentionnées ici) :<br>
				<br>
				Cookies et stockage local. Les cookies sont de petits fichiers contenant une chaîne
				de caractères qui sont envoyés au navigateur de votre appareil pour identifier votre
				navigateur de manière unique ou pour stocker des informations sur votre appareil. 
				Notre site peut utiliser des cookies HTTP, des cookies HTML5, des cookies Flash et 
				d'autres types de technologies de cookies pour stocker des informations sur le 
				stockage local. Chaque site web peut envoyer son propre cookie à votre navigateur.<br>
        <br>
        Pixel Tags/balises web. Une balise de pixel ou une balise web est un petit fichier
				graphique qui nous permet, ainsi qu'à des tiers, de surveiller l'utilisation des
				services et de collecter des données d'utilisation. Il peut recueillir des informations
				telles que l'adresse IP de l'appareil qui a téléchargé la page sur laquelle la balise
				apparaît, l'URL de la page sur laquelle la balise apparaît, l'heure (et la durée) à 
				laquelle la page contenant la balise a été consultée, le type de navigateur qui a récupéré
				la balise pixel, et le numéro d'identification de tout cookie précédemment placé par 
				ce serveur sur votre ordinateur.<br>
        <br>
        Scripts intégrés. Un script intégré est un code de programmation conçu pour recueillir
				des informations sur vos interactions avec le site, comme les liens sur lesquels vous cliquez.<br>

        ETag, ou balise d'entité. Un Etag ou entity tag est une caractéristique du cache 
				dans les navigateurs. Il s'agit d'un identifiant opaque attribué par un serveur web à 
				une version spécifique d'une ressource trouvée à une URL.<br>
        <br>
        Empreinte digitale du navigateur. Il s'agit de la collecte et de l'analyse 
				des informations de votre appareil, telles que, sans limitation, votre système 
				d'exploitation, les plug-ins, les polices système et d'autres données, à des fins 
				d'identification.<br>
        <br>
        Technologies de reconnaissance. Ce sont des technologies, y compris l'application 
				de probabilités statistiques à des ensembles de données, qui tentent de reconnaître
				ou de faire des suppositions sur les utilisateurs et les appareils (par exemple,
				qu'un utilisateur de plusieurs appareils est le même utilisateur).<br>
        <br>
        LiveRamp. Lorsque vous utilisez notre site web, nous partageons avec notre partenaire,
				LiveRamp Inc. et les sociétés de son groupe ("LiveRamp"), les informations que nous
				pouvons recueillir auprès de vous, telles que votre adresse électronique (sous forme 
				hachée, dépersonnalisée), votre adresse IP ou des informations sur votre navigateur 
				ou votre système d'exploitation. LiveRamp peut utiliser un cookie sur votre navigateur 
				et faire correspondre les informations que vous partagez avec ses bases de données 
				marketing en ligne et hors ligne et celles de ses partenaires publicitaires afin de 
				créer un lien entre votre navigateur et les informations contenues dans ces autres 
				bases de données. Nous pouvons également partager des adresses électroniques hachées
				et désidentifiées, des adresses IP et des identifiants publicitaires avec LiveRamp, 
				qui utilise ces informations pour créer un lien entre votre appareil et ses bases de données.
				Ce lien peut être partagé par nos partenaires dans le monde entier afin de permettre un
				contenu ou une publicité basés sur les intérêts tout au long de votre expérience en ligne 
				(par exemple, entre appareils, sur le web, par courriel et dans l'application, etc. )
				par des tiers non affiliés à notre site web. Ces tiers peuvent à leur tour relier d'autres
				informations démographiques ou d'intérêt à votre navigateur.<br>
        <br>
        Flash.  Un cookie Flash est un fichier de données placé sur un appareil via le plug-in 
				Adobe Flash qui peut être intégré ou téléchargé par vous sur votre appareil. Ces cookies 
				peuvent être utilisés à des fins diverses, notamment pour activer une fonction Flash et 
				mémoriser vos préférences.<br>
        <br>
				<strong class="fs-3" style="text-decoration: underline;">Comment nous utilisons les cookies<br></strong>
        <br>
        Nous utilisons les cookies pour faire plusieurs choses. Par exemple, les cookies sont 
				utilisés pour activer certaines fonctions du site, renforcer la sécurité et détecter les 
				fraudes, améliorer la fonctionnalité du site, mémoriser vos préférences ou compter le nombre
				de personnes qui consultent un site web. Nous les utilisons également pour garder une trace
				de ce que vous avez fait sur le site et pour rendre la publicité en ligne plus pertinente pour vous.<br>
        <br>
        Nous recevons des données de votre part dans le cadre de la connexion de communication 
				elle-même par le biais du message d'accueil électronique standard entre votre ordinateur
				et nos serveurs. Ces informations comprennent souvent le routage du réseau (d'où vous venez),
				des informations sur l'équipement (type de navigateur), l'adresse du protocole Internet, 
				la date et l'heure. D'autres parties du site utilisent des cookies (y compris les formulaires
				d'inscription) pour recueillir des informations sur votre utilisation du site et pour faciliter
				les visites ultérieures. Les cookies du site peuvent recueillir les informations suivantes : 
				un identifiant unique, les préférences de l'utilisateur et les informations de profil utilisées
				pour personnaliser le contenu qui est affiché.<br>
        <br>
				Les cookies eux-mêmes ne contiennent pas d'informations permettant de vous identifier personnellement
				("IPI"). Ils ne possèdent qu'un identifiant alphanumérique unique qui se trouve sur votre navigateur.
				Et dans de nombreux cas, nous ne serons pas en mesure de vous renvoyer les informations que nous
				recueillons en utilisant un cookie. Ils peuvent toutefois nous permettre de relier ces informations
				à vous et à vos données personnelles, par exemple lorsque vous vous connectez ou choisissez de 
				vous inscrire à un bulletin d'information.<br>
        <br>
        Nous pouvons également faire appel à des tiers pour suivre et analyser les données non personnelles
				et personnellement identifiables du site web et pour diffuser des publicités. Pour ce faire,
				nous pouvons permettre à des tiers de placer des cookies sur les appareils des utilisateurs
				de notre site, lorsque la loi le permet et sous réserve de votre droit de vous désengager par
				le biais du site. Nous utilisons les données collectées pour nous aider à administrer et à 
				améliorer la qualité du site et pour analyser l'utilisation du site. Ces tiers peuvent combiner
				les informations que nous fournissons à votre sujet avec d'autres informations qu'ils ont recueillies.
				Ces tiers sont tenus d'utiliser vos informations conformément à la présente politique en 
				matière de cookies et à notre politique de confidentialité. Nous enregistrerons toutes ces 
				divulgations et déploierons des efforts raisonnables pour nous assurer que ces tiers n'utilisent 
				pas vos IPI à des fins qui ne sont pas expressément prévues dans le présent document.<br>
        <br>
        Nous avons classé nos cookies dans les catégories ou "types" suivants, afin de vous permettre
				de comprendre plus facilement pourquoi nous en avons besoin :<br>
        <br>
        Essentiel - Ces cookies sont essentiels pour vous fournir nos services et vous permettre 
				d'utiliser certaines de ses fonctionnalités sur le site. Par exemple, ils vous permettent 
				de vous connecter à des zones sécurisées de notre site et aident à charger rapidement le contenu 
				des pages que vous demandez. Sans ces cookies, les services que vous avez demandés ne peuvent pas
				être fournis et nous utilisons ces cookies uniquement pour vous fournir ces services.<br>
        <br>
        Analyse et performance - Ces cookies sont utilisés pour collecter des informations sur le trafic
				sur notre site et les services et sur la façon dont les utilisateurs utilisent notre site. 
				Les informations recueillies ne permettent pas d'identifier un visiteur en particulier. 
				Les informations sont agrégées et donc anonymes. Elles comprennent le nombre de visiteurs de notre site,
				les sites web qui les ont dirigés vers notre site, les pages qu'ils ont visitées, l'heure à laquelle ils 
				ont visité le site, s'ils ont déjà visité le site auparavant et d'autres informations similaires. 
				Nous utilisons ces informations pour nous aider à exploiter nos services de manière plus efficace, 
				pour recueillir des informations démographiques générales et pour contrôler le niveau d'activité de nos services.
				Nous utilisons Google Analytics à cette fin - Google Analytics utilise ses propres cookies pour 
				améliorer le fonctionnement de nos Services.<br>
        <br>
        Fonctionnalité - Ces cookies permettent à notre Site de se souvenir des choix que vous faites 
				lorsque vous utilisez nos Services, comme par exemple la mémorisation de vos préférences linguistiques 
				et la mémorisation des modifications que vous apportez à d'autres parties de nos Sites ou Services
				que vous pouvez personnaliser. L'objectif de ces cookies est de vous offrir une expérience plus 
				personnelle et de vous éviter de devoir saisir à nouveau vos préférences chaque fois que vous 
				visitez notre site.<br>
        <br>
        Cookies des médias sociaux - Ces cookies sont utilisés lorsque vous partagez des informations 
				en utilisant un bouton de partage des médias sociaux ou un bouton "J'aime" sur nos services ou
				lorsque vous établissez un lien entre votre compte ou notre contenu sur ou via un site de 
				réseau social tel que Facebook, Instagram ou Twitter. Le réseau social enregistrera que vous
				avez fait cela.<br>
        <br>
        Ciblage et publicité - Ils sont utilisés pour partager certaines informations avec les tiers 
				avec lesquels nous faisons de la publicité, afin que nous sachions comment vous avez atteint notre
				site. Nous pouvons également utiliser des cookies pour identifier les parties du site qui vous
				intéressent. Nous utilisons ensuite ces informations pour vous montrer des publicités et des pages qui,
				selon nous, pourraient également vous intéresser, pour adapter notre façon de communiquer avec vous 
				ou pour adapter le contenu des communications que nous vous envoyons. Si vous le préférez,
				vous pouvez choisir de ne pas participer à ces communications. L'adaptation du contenu signifie qu'il
				comprend des informations reflétant l'intérêt que vous avez manifesté pour le contenu de nos pages
				web ou pour les offres ou promotions qui, selon nous, pourraient vous intéresser, et pour améliorer
				la façon dont nous répondons à vos besoins.<br>
        <br>
				En plus des cookies que nous utilisons sur notre site, nous utilisons également des cookies et des 
				technologies similaires dans certains courriers électroniques et notifications que nous vous envoyons.
				Ils nous aident à comprendre si vous avez ouvert le courriel et comment vous avez interagi avec lui.
				Si vous avez activé les images, des cookies peuvent être placés sur votre ordinateur ou votre appareil mobile.
				Des cookies seront également placés si vous cliquez sur un lien dans le courriel.<br>
        <br>
				<strong class="fs-3" style="text-decoration: underline;">Les cookies et vous<br></strong>
        <br>
        Pour vous inscrire à des informations ou services avec BON, vous devez avoir activé les cookies sur 
				votre navigateur internet. Certains des navigateurs les plus populaires (et les liens pour gérer vos
				cookies sur chacun d'eux) le sont :<br>
        <br>

        <strong style="text-decoration: underline;">Internet Explorer</strong><br>

        <strong style="text-decoration: underline;">Firefox</strong><br>

        <strong style="text-decoration: underline;">Safari</strong><br>

        <strong style="text-decoration: underline;">Google Chrome</strong><br>

        <strong style="text-decoration: underline;">Brave</strong><br>
        
        <br>
        Vérifiez que votre navigateur et votre appareil sont corrects et à jour. Si vous choisissez
				de ne pas activer les cookies, vous pourrez toujours naviguer sur notre site, mais 
				cela restreindra certaines des fonctionnalités de notre site et ce que vous pourrez faire. 
				Toutefois, vous pouvez autoriser les cookies de certains sites web en les faisant passer 
				pour des "sites de confiance" dans votre navigateur.<br>
        <br>
        <strong class="fs-3" style="text-decoration: underline;">Contrôle de vos cookies<br></strong>
        <br>
        Vous pouvez configurer votre navigateur web pour qu'il vous avertisse lorsqu'un cookie est utilisé.
				Vous pouvez également obtenir des informations sur la durée du cookie et sur le serveur 
				vers lequel vos données sont renvoyées. Vous pouvez ensuite accepter ou refuser le cookie.
				En outre, vous pouvez configurer votre navigateur pour qu'il refuse tous les cookies 
				ou n'accepte que les cookies renvoyés aux serveurs d'origine.<br>
        <br>
        Vous pouvez accepter ou refuser les cookies à tout moment - à l'exception des cookies 
				essentiels (qui sont utilisés pour permettre à notre site web de fonctionner efficacement). 
				Vous pouvez activer ou désactiver les cookies dans votre navigateur. Si vous souhaitez limiter 
				ou bloquer les cookies définis par un site web - y compris le présent site web - vous pouvez
				le faire en paramétrant le navigateur web pour chaque navigateur web que vous utilisez, 
				sur chaque appareil que vous utilisez pour accéder à l'internet.<br>
        <br>
        Des informations sur le contrôle et la suppression des cookies, y compris sur une grande
				variété de navigateurs, sont disponibles <a href="allaboutcookies.org">sur le site</a>.<br>
        <br>
        Certains services peuvent ne pas fonctionner ou avoir des fonctionnalités plus limitées
				si votre navigateur web n'accepte pas les cookies.<br>
        <br>
        En ce qui concerne certains cookies fonctionnant sur notre site, vous pouvez trouver plus 
				d'informations sur les cookies de Google Analytics
				<a href="https://developers.google.com/analytics/resources/concepts/gaConceptsCookies">ici</a>.<br>
        <br>
        Vous pouvez en savoir plus sur la manière dont Google protège vos données
				<a href="www.google.com/analytics/learn/privacy.html"> ici</a>.<br>
        <br>
        Vous pouvez empêcher l'utilisation de Google Analytics relative à votre utilisation de nos
				services en téléchargeant et en installant le plugin de votre navigateur disponible via
				<a href="http://tools.google.com/dlpage/gaoptout?hl=en-GB.">ce lien</a><br>
        <br>
        Les cookies Flash peuvent être ajustés à
				<a href="http://www.macromedia.com/support/documentation/en/flashplayer/help/settings_manager.html">l'adresse suivante</a>.<br>
				Si vous choisissez de régler les paramètres de confidentialité de Flash sur votre appareil,
				certaines fonctions des Services peuvent ne pas fonctionner correctement.<br>
        <br>
        Si vous souhaitez refuser les cookies sur différents réseaux de publicité, 
				le site web de la Network Advertising Initiative (initiative de publicité en réseau) propose
				des informations et des conseils
				<a href="www.networkadvertising.org">supplémentaires à l'adresse</a>.
				Vous pouvez également désactiver les cookies qui se souviennent de vos habitudes 
				de navigation et cibler la publicité sur vous en 
				<a href="http://www.youronlinechoices.com/uk/your-ad-choices">visitant le site</a>.<br>
				Pour vous désengager de la publicité ciblée de LiveRamp,
				veuillez vous rendre 
				<a href="https://liveramp.com/opt_out/.">à l'adresse suivante</a><br>
        <br>
        Si vous choisissez de supprimer les cookies ciblés ou publicitaires, vous verrez toujours des 
				publicités, mais elles peuvent ne pas être pertinentes pour vous. Même si vous choisissez de 
				supprimer les cookies des entreprises figurant sur les liens ci-dessus, toutes les entreprises 
				qui diffusent des publicités comportementales en ligne ne sont pas incluses dans cette liste,
				et il se peut donc que vous receviez encore certains cookies et des publicités personnalisées 
				d'entreprises qui ne figurent pas sur la liste.  <br>
        <br>
				<strong class="fs-3" style="text-decoration: underline;">Politique des cookies<br></strong>
        <br>
        Si vous ne souhaitez pas accepter les cookies de l'un de nos courriers électroniques, 
				vous pouvez choisir de ne pas télécharger d'images ou de ne cliquer sur aucun lien. 
				Vous pouvez également configurer votre navigateur de manière à limiter les cookies 
				ou à les rejeter entièrement. Ces paramètres s'appliqueront à tous les cookies, 
				qu'ils soient inclus sur les sites web ou dans les courriels. En fonction de votre adresse
				électronique ou des paramètres de votre navigateur, les cookies contenus dans un 
				courrier électronique peuvent parfois être automatiquement acceptés (par exemple,
				lorsque vous avez ajouté une adresse électronique à votre carnet d'adresses ou à votre
				liste d'expéditeurs sûrs). Pour plus d'informations, reportez-vous aux instructions de
				votre navigateur ou de votre appareil de messagerie électronique. ︎<br>
            </p>
        </div>
            </div>

 <!-- Footer-->
    <section class="container-fluid sec-footer">
      <div  dir="<?php echo $footer_dir[$language]['0']?>">
          <div class="row">
              <div class="col">
                  <div class="card desc-box my-4">
                      <div class="card-body">
                          <div class="card-title text-center"><?php echo $footer[$language]['0']?></div>
                          <div class="card-text" dir="<?php echo $footer_dir[$language]['0']?>">
                            <?php echo $footer[$language]['1']?>
                          </div>
                      </div>
                  </div><!--.card-->
              </div><!--.col-->
              <div class="col">
                  <div class="card desc-box my-4">
                      <div class="card-body">
                          <div class="card-title text-center"><?php echo $footer[$language]['2']?></div>
                          <div class="card-text" dir="<?php echo $footer_dir[$language]['0']?>">
                              <div class="row">
                                  <div class="col">
                                    <i class="bi bi-telephone-fill"></i>
                                      <span> <strong>0600503149</strong> </span>
                                  </div><!--.col-->
                              </div><!--.row-->
                              <div class="row">
                                  <div class="col">
                                    <i class="bi bi-geo-alt-fill"></i>
                                      <span><?php echo $footer[$language]['3']?></span>
                                  </div><!--.col-->
                              </div><!--.row-->
                              <div class="row">
                                  <div class="col">
                                    <i class="bi bi-envelope-fill"></i>
                                      <span>siham.trainer@gmail.com</span>
                                  </div><!--.col-->
                              </div><!--.row-->
                          </div><!--.card-text-->
                      </div>
                  </div><!--.card-->
              </div><!--.col-->
              <div class="col text-center my-5">
                  <h5>جمعية خطوة للأشخاص في وضعية إعاقة</h5>
                  <h5>ASSOCIATION KHOUTWA POUR LES PERSONNES EN SITUATION D'HANDICAPE</h5>
                  <br class="clearfix">
                  <a href="https://www.facebook.com/%D8%AC%D9%85%D8%B9%D9%8A%D8%A9-%D8%AE%D8%B7%D9%88%D8%A9-%D9%84%D9%84%D9%85%D8%B9%D8%A7%D9%82%D9%8A%D9%86-%D8%A7%D9%84%D8%AF%D8%B1%D8%A7%D8%B1%D9%83%D8%A9-636736269826415/" class="snip1472"><i class="bi bi-facebook" style="position: absolute;top: 12px;left:13px;"></i></i></a>
                  <a href="" class="snip1472"><i class="bi bi-instagram" style="position: absolute;top: 12px;left:13px;"></i></a>
              </div><!--.col-->
          </div><!--Privacy-->
          <div class="pages d-flex justify-content-between" style="margin: 0 auto; padding-top: 1.2rem; text-transform: capitalize; max-width: 458px;">
            <div class="pages_internal">
                <a class="px-1" href="politique1.php"><?php echo $Privacy[$language]['0']?></a>
                <a class="px-1" href="politique3.php"><?php echo $Privacy[$language]['2']?></a>
            </div>
            <div class="copyright">
                <p><?php echo $Privacy[$language]['3']?> © 2021</p>
            </div>
        </div>
      </div>
  </section>
    <!-- footee end -->

    <!-- button to go up -->
      <button onclick="topFunction()" id="myBtn" class="<?php echo $button_to_up[$language]['0']?>" title="Go to top"><i class="bi bi-caret-up-fill"></i></button>
    <!-- button to go up end -->

    <!-- Services-->
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </body>

</html>







































