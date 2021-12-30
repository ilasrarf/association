<?php
include('language.php');
$ar_select='';
$fr_select='';
$language='';
if ((isset($_GET['language']) && $_GET['language']=='ar') || !isset($_GET['language'])){
  $ar_select='selected';
  $language='ar';
}else{
  $fr_select='selected';
  $language='fr';
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
              <a class="nav-link" href="#Politique de confidentialité"><?php echo $politique[$language]['0']?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Politique des cookies"><?php echo $politique[$language]['1']?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Conditions d'utilisation"><?php echo $politique[$language]['2']?></a>
            </li>
          </ul>
         
        </div>
      </div>
    </nav>

    <!-- ///////////////////////////////////// -->

    <!-- Politique de confidentialité-->
    <div class="col-lg-8 align-self-end" style="height: 150px " id="Politique de confidentialité" ></div>
        <div class="row gx-4 gx-lg-5 justify-content-center">
          <div class="col-lg-9 " >
            <h2 class="text-white mt-0 text-center" ><?php echo $politique[$language]['0']?></h2>
            <hr class="divider divider-danger" />
            <p class="text-white-75 mb-4 fs-5 "  >

                    Nous sommes tenus par la loi de vous dire quelles sont les informations que nous recueillons auprès de vous, pourquoi nous les recueillons, comment nous les utilisons, dans quelles circonstances nous pouvons les partager avec des tiers, comment nous protégeons ces informations et comment vous pouvez vous opposer à la vente de ces informations.  Il peut arriver que nous devions divulguer vos informations personnelles à des tiers extérieurs à l'entreprise qui peuvent nous aider à vous fournir des services, comme indiqué dans la présente politique. Si vous avez des questions concernant la présente politique de confidentialité, contactez-nous à l'adresse privacy@assosiation.com.<br>

                      Veuillez noter que si vous fournissez volontairement vos informations dans le cadre de l'interaction avec notre site ou de l'utilisation de nos services, nous considérerons cela comme votre accord à la collecte, l'utilisation et la divulgation de vos informations, comme indiqué dans la présente politique de confidentialité. La présente politique de confidentialité est intégrée à nos conditions d'utilisation qui régissent votre utilisation de ce site.<br>

                      En utilisant notre site ou en parlant à nos représentants de nos services, vous acceptez notre politique de confidentialité et nos conditions de service.<br>

                      La présente politique de confidentialité ne s'applique pas aux produits, biens, services, sites web ou contenus proposés par des tiers ("services tiers"), qui sont régis par leurs politiques de confidentialité respectives.<br>

                      Quelles sont les informations que nous recueillons<br>

                      Au cours des 12 derniers mois, nous avons recueilli les "informations personnelles" suivantes sur nos utilisateurs :  <br>

                      (a) Informations que vous nous fournissez<br>

                      Dans le cadre des services que nous fournissons ou si vous postulez à un emploi chez nous, nous pouvons vous demander de nous fournir certaines informations, y compris vos nom et prénom, adresse électronique, numéro de téléphone, numéro de portable, nom d'utilisateur, informations démographiques (par exemple votre sexe, date de naissance ou code postal), informations sur vos préférences et intérêts, informations sur votre emploi actuel ou passé, votre statut militaire ou d'ancien combattant, informations sur votre formation, informations sur les médias sociaux ou autres informations qui pourraient raisonnablement être utilisées pour vous identifier personnellement ou identifier votre foyer ou votre appareil. Votre décision de nous fournir certaines de ces informations est volontaire, mais si vous choisissez de ne pas fournir les informations demandées, vous ne pourrez peut-être pas profiter de toutes les fonctionnalités du site ou de nos services.<br>

                      (b)Informations recueillies automatiquement<br>

                      En plus des informations que vous choisissez de nous soumettre, nous et/ou nos fournisseurs de services pouvons automatiquement collecter et/ou stocker certaines informations lorsque vous visitez ou interagissez avec le site ("Informations d'utilisation"). Ces informations d'utilisation peuvent être stockées et/ou accessibles à partir de votre ordinateur personnel, ordinateur portable, tablette, téléphone mobile ou autre appareil (un "appareil") chaque fois que vous visitez ou interagissez avec notre site. Les informations d'utilisation peuvent comprendre :<br>

                      Votre adresse IP, IDFA, Android/Google Advertising ID, IMEI, ou un autre identifiant unique ;<br>

                      Les fonctionnalités de votre appareil (y compris le navigateur, la langue du navigateur, le système d'exploitation, le matériel, les informations sur le réseau mobile) ;<br>

                      Les pages web et les URL de renvoi et de sortie ;<br>

                      Les zones de notre site que vous visitez et les activités que vous y menez, y compris la mémorisation de votre nom et de vos préférences ;<br>

                      La localisation de votre appareil ou d'autres informations de géolocalisation, y compris le code postal, l'état ou le pays à partir duquel vous avez accédé aux services ;<br>

                      les caractéristiques de votre appareil ; et<br>

                      Certaines autres données relatives aux appareils, y compris l'heure à laquelle vous visitez notre site.<br>

                      Nous pouvons utiliser ces informations pour vous fournir des services, des contenus ou des produits personnalisés, des offres promotionnelles et d'autres informations susceptibles de vous intéresser.<br>

                      Si vous ne souhaitez plus que nous ou nos fournisseurs de services collectons et utilisions les informations de localisation, vous pouvez désactiver les fonctions de localisation de votre appareil. Consultez les paramètres du fabricant de votre appareil pour obtenir des instructions. Veuillez noter que si vous désactivez ces fonctions, votre capacité à accéder à certaines fonctions, services, contenus, promotions ou produits peut être limitée ou désactivée.<br>


                      (c) Utilisation des cookies et autres technologies de suivi<br>

                      Nous pouvons utiliser diverses méthodes et technologies pour stocker ou collecter des informations d'utilisation ("technologies de suivi"). Les technologies de suivi peuvent régler, changer, altérer ou modifier les paramètres ou les configurations de votre appareil. Quelques-unes des technologies de suivi utilisées sur le site), comprennent, sans s'y limiter, les éléments suivants (ainsi que les technologies ou méthodes de suivi développées à l'avenir qui ne sont pas mentionnées ici) :<br>

                      Cookies et stockage local. Les cookies sont de petits fichiers contenant une chaîne de caractères qui sont envoyés au navigateur de votre appareil pour identifier votre navigateur de manière unique ou pour stocker des informations sur votre appareil. Notre site peut utiliser des cookies HTTP, des cookies HTML5, des cookies Flash et d'autres types de technologies de cookies pour stocker des informations sur le stockage local. Chaque site web peut envoyer son propre cookie à votre navigateur.<br>

                      Balises web. Un Web Beacon est une petite balise (qui peut être invisible pour vous) qui peut être placée sur les pages et les messages de notre site.<br>

                      Scripts intégrés. Un script intégré est un code de programmation conçu pour recueillir des informations sur vos interactions avec le site, comme les liens sur lesquels vous cliquez<br>

                      ETag, ou balise d'entité. Une Etag ou entity tag est une caractéristique du cache dans les navigateurs. Il s'agit d'un identifiant opaque attribué par un serveur web à une version spécifique d'une ressource trouvée à une URL.<br>

                      Empreinte digitale du navigateur. Collecte et analyse des informations de votre appareil, telles que, sans limitation, votre système d'exploitation, les plug-ins, les polices système et d'autres données, à des fins d'identification.<br>

                      Technologies de reconnaissance. Technologies, y compris l'application d'une probabilité statistique à des ensembles de données, qui tentent de reconnaître ou de faire des suppositions sur les utilisateurs et les appareils (par exemple, qu'un utilisateur de plusieurs appareils est le même utilisateur).<br>

                      Nous pouvons utiliser les technologies de suivi à des fins diverses, notamment :<br>

                      Pour vous permettre d'utiliser et d'accéder au site, y compris pour la prévention des activités frauduleuses et l'amélioration des fonctionnalités de sécurité ;<br>

                      Pour évaluer les performances du site, y compris dans le cadre de nos pratiques analytiques ou autrement pour améliorer le contenu, les produits ou les services offerts par le site ;<br>

                      vous offrir des fonctionnalités améliorées lors de l'accès au site, notamment en vous identifiant lorsque vous vous connectez à notre site ou en gardant trace de vos préférences spécifiées ou en suivant vos activités en ligne dans le temps et sur des sites tiers ; et<br>

                      Fournir un contenu correspondant à vos intérêts sur notre site et sur des sites tiers en fonction de la manière dont vous interagissez avec notre contenu.<br>


                      Vous pouvez obtenir de plus amples informations sur les cookies et les technologies de suivi, ainsi que des instructions sur la manière de refuser les cookies et certaines technologies de suivi, dans notre politique en matière de cookies. <br>

                      (d) Sources d'informations personnelles<br>

                      En outre, nous pouvons obtenir des informations personnelles de votre part lorsque vous nous les fournissez expressément. Les sources à partir desquelles nous recueillons des informations sont, par exemple, les courriers électroniques ou autres communications de votre part, les informations fournies via des formulaires web ou des entrées/téléchargements sur notre site, les documents que vous nous avez fournis et les demandes d'emploi.<br>


                      (e) Informations que nous recueillons lorsque vous interagissez avec des sites tiers<br>

                      Le site peut inclure des fonctionnalités permettant certains types d'interactions entre le site (et/ou nos pages de médias sociaux ou d'autres pages auxquelles nous avons accès) et votre compte sur un site web ou une application tiers, comme un site de médias sociaux comme Facebook, Instagram, Twitter ou YouTube. L'utilisation de cette fonctionnalité peut impliquer que le site tiers nous fournisse des informations, telles que vos identifiants de médias sociaux, votre contenu et d'autres données (nom, adresse électronique, informations sur votre compte, photo et listes d'amis, etc.) Ces éléments peuvent nous être communiqués par le biais de fonctionnalités tierces que vous utilisez sur notre site et par l'intermédiaire de l'autre service (comme les applications, outils, services de paiement, widgets et plug-ins proposés par les services de médias sociaux tels que Facebook, Instagram, Twitter ou YouTube) ou être publiés sur des pages de médias sociaux.  Par exemple, nous pouvons fournir des liens sur le site pour faciliter l'envoi d'une communication à partir du site ou nous pouvons faire appel à des tiers pour faciliter l'envoi de courriels ou la publication sur des médias sociaux (comme un bouton "Partager" ou "Faire suivre").<br>



                      Nos services peuvent également s'intégrer à des réseaux sociaux et à d'autres plateformes dans lesquelles des informations sont partagées entre nous et ces plateformes. Si vous visitez nos services sur un appareil par lequel vous interagissez également avec des réseaux sociaux ou si vous interagissez avec nous par le biais d'une fonction de média social telle qu'un plug-in (par exemple, un bouton "comme" Facebook), alors vous nous autorisez à avoir un accès continu à, à utiliser et à stocker certaines informations de votre profil de réseau social conformément à la présente politique de confidentialité. En outre, ces tiers peuvent conserver toute information utilisée ou fournie dans le cadre de ces communications ou activités et les pratiques de ces tiers ne sont pas soumises à notre politique de confidentialité. Il se peut que nous ne contrôlions pas vos communications par l'intermédiaire de ces tiers ou que nous n'y ayons pas accès. En outre, lorsque vous utilisez des sites ou des services tiers, vous utilisez leurs services et non les nôtres et ce sont eux, et non nous, qui sont responsables de leurs pratiques. Vous devez lire les politiques de confidentialité des tiers applicables avant d'utiliser ces outils tiers sur notre site. Veuillez également consulter nos conditions d'utilisation pour de plus amples informations.<br>


                      (f) Informations provenant de tiers<br>

                      En outre, nous pouvons recueillir des informations vous concernant auprès d'autres sources, y compris des annonceurs, des revendeurs de données consommateurs et des sociétés d'études de marché. Nous pouvons combiner les informations que nous recueillons auprès de tiers avec les informations que nous avons recueillies auprès de vous ou par votre utilisation des services afin d'en savoir plus sur nos utilisateurs, de mieux adapter le contenu et les offres que nous vous présentons et pour d'autres fins internes.<br>

                      Pourquoi nous recueillons des informations<br>

                      Nous pouvons utiliser vos informations à diverses fins, notamment :<br>

                      Répondre à vos demandes d'information ;<br>

                      vous fournir des services ;<br>

                      vérifier votre identité et pour la prévention de la fraude ;<br>

                      vous fournir des mises à jour et des informations sur les produits et services que nous proposons ;<br>

                      vous envoyer des informations commerciales sur BON et nos entités affiliées ;<br>

                      vous envoyer des communications par courrier électronique telles que des bulletins d'information électroniques concernant notre contenu, notre site ou nos services et promotions susceptibles de vous intéresser ;<br>

                      améliorer l'efficacité de notre site, de nos efforts de marketing et de nos offres de produits et services ;<br>

                      Identifier vos préférences en matière de produits et de services, fournir un contenu et des publicités personnalisés et vous informer des informations, produits et services nouveaux ou supplémentaires qui pourraient vous intéresser ;<br>

                      nous aider à résoudre les problèmes et à améliorer notre site et nos produits et services, y compris en testant et en créant de nouveaux produits, fonctionnalités et services ;<br>

                      Fournir des messages de marketing mobile et d'autres communications et messages ;<br>

                      Protéger la sécurité et l'intégrité du site, y compris la compréhension et la résolution de tout problème technique et de sécurité signalé sur notre site ;<br>

                      effectuer des analyses, des recherches et des rapports concernant l'utilisation de notre site et de nos services ;<br>

                      Pour les besoins des affaires internes ;<br>

                      Se conformer à la loi et protéger la sécurité, les droits, la propriété ou la sécurité du BON, des services et du grand public ;<br>

                      Pour les besoins divulgués au moment où vous fournissez vos informations ou comme indiqué dans la présente politique de confidentialité ;<br>

                      Pour les employés et les candidats à un emploi : évaluer votre candidature, gérer les avantages sociaux des employés ou d'autres programmes et services liés à l'emploi ; et<br>

                      Pour d'autres fins divulguées au moment de la collecte des informations ou avant celle-ci.<br>

                      Quand nous divulguons des informations<br>

                      Nous pouvons agréger, désidentifier et/ou rendre anonyme toute information recueillie par le biais du Site ou des Services de telle sorte que ces informations ne soient plus liées à vos informations personnelles identifiables. Nous pouvons utiliser et partager ces informations agrégées et anonymisées (informations non personnelles) à n'importe quelle fin, y compris, mais sans s'y limiter, à des fins de recherche et de marketing, et nous pouvons également partager ces données avec nos sociétés affiliées et des tiers, y compris des annonceurs, des partenaires promotionnels et autres.<br>

                      Dans la mesure permise par la loi et par tout code de conduite professionnelle de l'État applicable, certaines informations non publiques vous concernant peuvent être divulguées dans les situations suivantes :<br>


                      Pour se conformer à une assignation à comparaître ou à une citation à comparaître valablement émise et exécutoire.<br>


                      Dans le cadre d'un examen des pratiques de notre entreprise sous l'autorisation d'un organisme d'État ou d'un organisme national d'octroi de licences, ou si nécessaire pour répondre correctement à une enquête ou à une plainte d'un tel organisme d'octroi de licences.<br>

                      Dans le cadre d'un achat, d'une vente ou d'une fusion potentiels de tout ou partie de nos pratiques, à condition que nous prenions les précautions nécessaires (par exemple, par le biais d'un accord de confidentialité écrit) pour que l'acheteur potentiel ou le partenaire de la fusion ne divulgue pas les informations obtenues au cours de l'examen.<br>

                      Dans le cadre d'une procédure judiciaire ou d'une procédure de règlement extrajudiciaire des litiges, réelle ou potentielle, engagée par ou contre nous, à condition que nous ne divulguions que les informations nécessaires pour intenter, poursuivre ou se défendre contre la poursuite et que nous prenions des précautions raisonnables pour garantir que les informations divulguées ne deviennent pas publiques.<br>

                      Fournir des informations aux filiales de la société et aux tiers non affiliés qui fournissent des services ou des fonctions pour nous dans le cadre des services que nous vous offrons, mais uniquement si nous avons un accord contractuel avec l'autre partie qui leur interdit de divulguer ou d'utiliser les informations autrement que pour les raisons pour lesquelles elles ont été divulguées. Les exemples de telles divulgations incluent l'utilisation d'un processeur de paiement, d'un magasin de marchandises, d'un fournisseur de services à la clientèle ou d'un fournisseur de marketing par courriel.<br>

                      Enfin, nous pouvons également partager vos informations, y compris vos informations personnelles, avec nos filiales et d'autres tiers, tels que des sociétés avec lesquelles nous avons des relations de marketing ou autres, à des fins de marketing direct. (Si vous êtes un résident de Californie, vous avez le droit de demander des informations supplémentaires concernant la "vente" de vos informations. Veuillez vous reporter à la section intitulée "Vos droits en matière de protection de la vie privée en Californie" ci-dessous pour connaître ces droits). En outre, nous pouvons partager les informations que nous avons recueillies à votre sujet, y compris les informations personnelles, telles que divulguées au moment où vous fournissez vos informations et telles que décrites dans la présente politique de confidentialité.<br>

                      Annonces et informations vous concernant<br>

                      Vous pouvez voir certaines publicités sur notre site parce que nous participons à des réseaux publicitaires gérés par des tiers. Ces réseaux suivent vos activités en ligne dans le temps et sur les sites web et services en ligne de tiers en recueillant des informations par des moyens automatisés, notamment par l'utilisation des technologies de suivi décrites ci-dessus, et ils utilisent ces informations pour vous montrer des publicités adaptées à vos intérêts individuels. Les informations qu'ils recueillent comprennent des informations sur vos visites sur notre site, telles que les pages que vous avez consultées. Cette collecte et le ciblage des publicités ont lieu à la fois sur notre site et sur les sites web tiers qui participent au réseau publicitaire. Ce processus nous aide également à suivre l'efficacité de nos efforts de communication et de marketing. Vous pouvez trouver des informations supplémentaires dans notre politique en matière de cookies ci-dessus, y compris les moyens de refuser certaines technologies de suivi.<br>

                      Vos choix concernant les informations que nous recueillons<br>

                      Si vous préférez que nous ne partagions pas votre nom et votre adresse postale avec des tiers (autres que nos filiales) pour recevoir des offres promotionnelles, vous avez la possibilité de refuser ce partage. Pour ce faire, veuillez nous envoyer un courriel à l'adresse suivante : privacy@assosiation.com. Votre choix n'affectera pas notre capacité à partager des informations de la manière décrite dans la présente politique de confidentialité. Vous pouvez bénéficier de droits supplémentaires, comme indiqué ci-dessous, en fonction de la juridiction dans laquelle vous résidez.<br>

                      Si vous ne souhaitez pas recevoir de communications, veuillez nous contacter comme suit :<br>

                      Par courrier électronique : Cliquez sur le lien de désabonnement dans les courriels ou envoyez-nous un courriel à privacy@assosiation.com.

                      Veuillez indiquer votre nom complet, vos coordonnées et vos préférences en matière de communication.<br>

                      Veuillez noter que certaines de vos informations personnelles, telles que votre nom ou d'autres informations d'identification, peuvent rester dans notre base de données même après une demande de suppression afin d'assurer le service de votre compte, de maintenir l'intégrité et l'historique de notre base de données et de nos systèmes, ou de se conformer aux lois et règlements en vigueur.<br>

                      Vie privée des enfants<br>

                      Nous reconnaissons l'importance de la sécurité et de la vie privée des enfants. Le site n'est pas conçu pour attirer les enfants et n'est pas destiné à être utilisé par des enfants de moins de 13 ans. Nous ne demandons pas, ni ne recueillons sciemment, d'informations personnelles identifiables auprès d'enfants de moins de 13 ans. Les mineurs de moins de 18 ans (mais de plus de 12 ans) ne peuvent utiliser le site que sous la surveillance d'un parent ou d'un tuteur légal qui accepte d'être lié par les conditions d'utilisation du site. Si vous êtes le parent ou le tuteur d'un enfant de moins de 13 ans qui, selon vous, nous a fourni ses informations sans autorisation, veuillez nous contacter à l'adresse privacy@assosiation.com pour demander la suppression de ces informations.<br>

                      Ne pas suivre les divulgations<br>

                      Ne pas suivre ("DNT") est un paramètre du navigateur web qui demande à une application web de désactiver le suivi d'un utilisateur individuel. Lorsque vous choisissez d'activer le paramètre DNT dans votre navigateur, celui-ci envoie un signal spécial aux sites web, aux sociétés d'analyse, aux réseaux publicitaires, aux fournisseurs de connexion et aux autres services web que vous rencontrez en naviguant, pour qu'ils cessent de suivre votre activité. Diverses tierces parties développent ou ont développé des signaux ou d'autres mécanismes pour l'expression du choix du consommateur concernant la collecte d'informations sur les activités en ligne d'un consommateur individuel au fil du temps et sur les sites web ou services en ligne de tierces parties (par exemple, le navigateur ne suit pas les signaux), mais il n'existe pas de norme universellement reconnue sur ce qu'une entreprise doit faire lorsqu'elle détecte un signal DNT. Actuellement, nous ne surveillons pas ces signaux ou d'autres mécanismes et nous ne prenons aucune mesure à leur égard.<br>

                      Droits des résidents européens en matière de données personnelles<br>

                      Si vous résidez dans l'Espace économique européen ("EEE"), le règlement général sur la protection des données ("RPDG") vous donne le droit d'accéder aux informations personnelles que nous détenons à votre sujet et de demander que ces informations soient corrigées, mises à jour ou supprimées. Si vous souhaitez exercer ce droit, veuillez nous contacter aux coordonnées ci-dessous. Aux fins de la GDPR, le responsable du traitement des données est Assisiation.<br>

                      Marketing de tiers. Si vous êtes résident de l'EEE, vous aurez le choix (opt-in ou opt-out) avant que nous partagions vos informations avec des tiers à des fins de marketing. Si vous avez choisi de recevoir des messages de marketing de tiers, nous pouvons partager vos informations (y compris vos données personnelles) avec des tiers à des fins de marketing direct de ces tiers. Veuillez noter que les messages envoyés par un tiers vous seront soumis à la politique de confidentialité de ce tiers. Nous pouvons également associer votre adresse électronique à des tiers avec lesquels vous avez également consenti à partager votre adresse électronique et utiliser cette association pour vous faire parvenir des offres ou des courriers électroniques personnalisés sur les services et en dehors des services, à condition que vous ayez consenti à recevoir ces offres ou ces courriers électroniques<br>

                      En outre, si vous êtes résident de l'EEE, nous notons que nous traitons vos informations afin d'exécuter les contrats que nous pourrions avoir avec vous (par exemple si vous faites une demande par le biais du site), ou pour poursuivre nos intérêts commerciaux légitimes énumérés ci-dessus. En outre, veuillez noter que vos informations seront transférées en dehors de l'Europe, notamment au Canada et aux États-Unis.<br>

                      Comment pouvez-vous exercer vos droits en vertu de la GDPR :<br>

                      Accès : Si vous souhaitez exercer votre droit d'accès à une copie gratuite de vos données, vous pouvez nous contacter aux coordonnées indiquées ci-dessous.<br>

                      Suppression : Pour nous demander de supprimer vos données personnelles, veuillez nous contacter aux coordonnées indiquées ci-dessous. Toutefois, dans certaines circonstances, nous pouvons être légalement autorisés à les conserver.<br>

                      Rectification : Si vous souhaitez mettre à jour ou rectifier vos données, vous pouvez le faire directement en accédant aux paramètres de votre compte.<br>

                      Révoquer le consentement : Si vous souhaitez vous opposer au traitement de vos données à des fins de marketing direct ou de publicité comportementale en ligne, vous pouvez le faire en mettant à jour vos paramètres ou, pour le marketing direct, en cliquant sur le lien "se désabonner" dans tout courriel de marketing ou toute lettre d'information que vous recevez de notre part.<br>

                      Objection au profilage automatisé : Si vous ne souhaitez pas que vos informations personnelles soient profilées à des fins de personnalisation, vous pouvez modifier les paramètres de votre compte ou nous contacter directement.<br>

                      Objection à des intérêts légitimes : Si vous souhaitez vous opposer au traitement de vos données lorsque nous poursuivons nos intérêts légitimes ou ceux d'un tiers, veuillez nous contacter aux coordonnées indiquées ci-dessous en précisant la nature et les raisons de cette opposition.<br>

                      Visiteurs du site en dehors des États-Unis<br>

                      Si vous visitez le site à partir d'un endroit situé en dehors des États-Unis, votre connexion se fera par et vers des serveurs situés aux États-Unis. Toutes les informations que vous recevez du site seront créées sur des serveurs situés aux États-Unis, et toutes les informations que vous fournissez seront conservées sur des serveurs et systèmes Web situés aux États-Unis. En utilisant le site ou en nous fournissant des informations, vous consentez au transfert, au traitement, à l'utilisation, au partage et au stockage de vos informations aux États-Unis et dans d'autres pays, comme indiqué dans la présente politique de confidentialité.<br>


                      Vos droits en matière de protection de la vie privée en Californie<br>


                      Cette section de la politique de confidentialité s'applique uniquement aux résidents de Californie. Nous adoptons cette politique pour nous conformer à la loi californienne sur la protection de la vie privée des consommateurs de 2018 ("CCPA"). Tous les termes définis dans la CCPA ont la même signification lorsqu'ils sont utilisés dans cette section.<br>


                      Les résidents californiens ont également le droit de demander certaines informations que nous recueillons à votre sujet, y compris :<br>

                      Les catégories d'informations personnelles que nous avons recueillies auprès de vous ;<br>

                      Les catégories de sources à partir desquelles nous avons recueilli les informations personnelles ;<br>

                      Les objectifs commerciaux que nous avons pour la collecte ou la vente de ces informations personnelles ;<br>

                      Les catégories de tiers avec lesquels nous partageons ces informations personnelles ;<br>

                      les éléments spécifiques des informations personnelles que nous avons recueillies à votre sujet ;<br>

                      Les catégories d'informations personnelles vous concernant que nous avons vendues, et les catégories de tiers auxquels les informations personnelles ont été vendues, par catégorie ou catégories d'informations personnelles pour chaque catégorie de tiers à qui les informations ont été vendues ;<br>

                      Les catégories de renseignements personnels que nous avons divulguées à votre sujet à des fins commerciales ;  <br>

                      la ou les catégories de renseignements personnels des consommateurs que nous avons vendus, ou si nous n'avons pas vendu de renseignements personnels des consommateurs ; et<br>

                      La ou les catégories de renseignements personnels des consommateurs que nous avons divulgués à des fins commerciales, ou si nous n'avons pas divulgué ces renseignements à des fins commerciales.<br>

                      Veuillez noter que si nous avons recueilli des informations vous concernant pour une seule transaction unique et que nous ne les conservons pas dans le cadre de nos activités commerciales normales, ces informations ne seront pas conservées aux fins d'une demande au titre de cet article. En outre, si nous avons dépersonnalisé ou rendu anonyme des données vous concernant, nous ne sommes pas tenus de ré-identifier ou d'établir un lien entre votre identité et ces données si elles ne sont pas conservées de cette manière dans nos dossiers.<br>


                      Nous n'exercerons aucune discrimination à votre encontre dans l'exercice de vos droits au titre de l'ACCP. Sauf autorisation de l'ACCP, nous ne le ferons pas :<br>

                      vous refuser des biens ou des services.<br>

                      vous facturer des prix ou des tarifs différents pour des biens ou des services, y compris en vous accordant des rabais ou d'autres avantages, ou en vous imposant des pénalités<br>

                      vous fournir un niveau ou une qualité différente de biens ou de services<br>

                      vous suggérer de recevoir un prix ou un tarif différent pour des biens ou des services ou un niveau ou une qualité différents de biens ou de services.<br>

                      En tant que résident de Californie, vous avez également le droit, à tout moment, de nous dire de ne pas vendre vos informations personnelles - c'est ce qu'on appelle le "droit de refus" de la vente d'informations personnelles.<br>

                      Vous pouvez nous faire une demande en vertu de la CCPA aux coordonnées ci-dessous. Nous pouvons vous demander de confirmer votre identité et votre résidence afin d'obtenir les informations, et vous n'avez le droit de faire cette demande que deux fois par an. Veuillez indiquer "California Privacy Rights" comme objet de votre demande. Vous devez indiquer votre nom complet et votre adresse électronique, et attester que vous êtes résident de Californie en indiquant une adresse postale californienne dans votre demande. Nous accuserons réception de votre demande dans les 10 jours et y répondrons dans les 45 jours ou vous ferons savoir si nous avons besoin d'un délai supplémentaire.<br>

                      Liens<br>

                      Pour votre commodité, le site et la présente politique de confidentialité peuvent contenir des liens vers d'autres sites web. GOOD n'est pas responsable des pratiques de confidentialité, de la publicité, des produits, des services ou du contenu de ces autres sites web. Aucun des liens figurant sur le site ne doit être considéré comme signifiant que GOOD approuve ces liens ou y est affilié. Veuillez consulter nos conditions d'utilisation pour plus d'informations.<br>

                      Sécurité<br>

                      Nous incorporons des mesures de protection commercialement raisonnables pour aider à protéger et à sécuriser vos informations personnelles. Toutefois, aucune transmission de données sur Internet, les réseaux mobiles, la transmission sans fil ou le stockage électronique d'informations ne peut être garantie à 100 %. Par conséquent, nous ne pouvons pas garantir la sécurité des informations que vous transmettez vers ou depuis notre site, et vous nous fournissez vos informations à vos propres risques. Veuillez consulter nos conditions de service pour plus d'informations.<br>

                      Transferts de données internationaux<br>

                      Parce que GOOD travaille avec des entreprises et des technologies mondiales, nous pouvons transférer vos informations personnelles en dehors du pays dans lequel elles ont été fournies à l'origine. Cela peut inclure des transferts à des tiers, tels que des fournisseurs de services ou des entités affiliées qui sont situés en dehors des États-Unis ou de l'Union européenne, où les lois sur la protection des données peuvent ne pas offrir le même niveau de protection que celles des États-Unis, de l'Union européenne ou de l'Espace économique européen ("EEE"). Lorsque nous transférons des données personnelles en dehors de ces zones, nous prenons des mesures pour nous assurer que des garanties appropriées sont en place pour protéger vos informations personnelles.<br>

                      Questions/modifications de la politique de confidentialité<br>

                      Si vous avez des questions ou des préoccupations concernant notre politique de confidentialité, vous pouvez nous contacter à l'adresse suivante : privacy@assosiation.com. Nous pouvons choisir de changer ou de modifier notre politique de confidentialité ; dans ce cas, nous afficherons les modifications de notre politique de confidentialité sur le site, et elles prendront effet à la date d'affichage. Si vous êtes préoccupé par la manière dont vos informations personnelles sont utilisées, veuillez visiter souvent notre site pour cette annonce et d'autres annonces et mises à jour importantes.<br>



                </p>
              </div>
          </div>

          <!-- Politique des cookies-->
          <div style="height: 50px" id="Politique des cookies"></div>
        <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-lg-9 " >
            <h2 class="text-white mt-0 text-center" ><?php echo $politique[$language]['1']?></h2>
            <hr class="divider divider-danger" />
            <p class="text-white-75 mb-4 fs-5" >
                                    <strong style="text-decoration: underline;">Que sont les cookies ?<br></strong> 


                        Un "cookie" est un petit élément d'information stocké sur votre appareil lorsque vous visitez un site web. Le cookie signifie que le site se souviendra de vous et de la façon dont vous avez utilisé le site à chaque fois que vous reviendrez. Un cookie peut être un cookie "persistant" ou "de session".  Un cookie "persistant" restera pendant une période de temps définie pour ce cookie. Un cookie "de session" n'est attribué que pour la durée de votre visite sur notre site web et expire automatiquement lorsque vous fermez votre navigateur. Si vous souhaitez en savoir plus sur les cookies, rendez-vous sur le site abouttcookies.org ou allaboutcookies.org (veuillez noter que ces liens ne sont pas gérés par nous et peuvent ouvrir une nouvelle fenêtre ou un nouvel onglet de votre navigateur). Si vous êtes dans l'Union européenne, vous pouvez également trouver plus d'informations sur le site www.youronlinechoices.com/uk.<br>



                        Quelques-unes des technologies de suivi utilisées sur le site comprennent, sans s'y limiter, les éléments suivants (il peut également y avoir des technologies ou des méthodes de suivi développées ultérieurement qui ne sont pas mentionnées ici) :<br>



                        Cookies et stockage local. Les cookies sont de petits fichiers contenant une chaîne de caractères qui sont envoyés au navigateur de votre appareil pour identifier votre navigateur de manière unique ou pour stocker des informations sur votre appareil. Notre site peut utiliser des cookies HTTP, des cookies HTML5, des cookies Flash et d'autres types de technologies de cookies pour stocker des informations sur le stockage local. Chaque site web peut envoyer son propre cookie à votre navigateur.<br>

                        Pixel Tags/balises web. Une balise de pixel ou une balise web est un petit fichier graphique qui nous permet, ainsi qu'à des tiers, de surveiller l'utilisation des services et de collecter des données d'utilisation. Il peut recueillir des informations telles que l'adresse IP de l'appareil qui a téléchargé la page sur laquelle la balise apparaît, l'URL de la page sur laquelle la balise apparaît, l'heure (et la durée) à laquelle la page contenant la balise a été consultée, le type de navigateur qui a récupéré la balise pixel, et le numéro d'identification de tout cookie précédemment placé par ce serveur sur votre ordinateur.<br>

                        Scripts intégrés. Un script intégré est un code de programmation conçu pour recueillir des informations sur vos interactions avec le site, comme les liens sur lesquels vous cliquez.<br>

                        ETag, ou balise d'entité. Un Etag ou entity tag est une caractéristique du cache dans les navigateurs. Il s'agit d'un identifiant opaque attribué par un serveur web à une version spécifique d'une ressource trouvée à une URL.<br>

                        Empreinte digitale du navigateur. Il s'agit de la collecte et de l'analyse des informations de votre appareil, telles que, sans limitation, votre système d'exploitation, les plug-ins, les polices système et d'autres données, à des fins d'identification.<br>

                        Technologies de reconnaissance. Ce sont des technologies, y compris l'application de probabilités statistiques à des ensembles de données, qui tentent de reconnaître ou de faire des suppositions sur les utilisateurs et les appareils (par exemple, qu'un utilisateur de plusieurs appareils est le même utilisateur).<br>

                        LiveRamp. Lorsque vous utilisez notre site web, nous partageons avec notre partenaire, LiveRamp Inc. et les sociétés de son groupe ("LiveRamp"), les informations que nous pouvons recueillir auprès de vous, telles que votre adresse électronique (sous forme hachée, dépersonnalisée), votre adresse IP ou des informations sur votre navigateur ou votre système d'exploitation. LiveRamp peut utiliser un cookie sur votre navigateur et faire correspondre les informations que vous partagez avec ses bases de données marketing en ligne et hors ligne et celles de ses partenaires publicitaires afin de créer un lien entre votre navigateur et les informations contenues dans ces autres bases de données. Nous pouvons également partager des adresses électroniques hachées et désidentifiées, des adresses IP et des identifiants publicitaires avec LiveRamp, qui utilise ces informations pour créer un lien entre votre appareil et ses bases de données. Ce lien peut être partagé par nos partenaires dans le monde entier afin de permettre un contenu ou une publicité basés sur les intérêts tout au long de votre expérience en ligne (par exemple, entre appareils, sur le web, par courriel et dans l'application, etc. ) par des tiers non affiliés à notre site web. Ces tiers peuvent à leur tour relier d'autres informations démographiques ou d'intérêt à votre navigateur.<br>

                        Flash.  Un cookie Flash est un fichier de données placé sur un appareil via le plug-in Adobe Flash qui peut être intégré ou téléchargé par vous sur votre appareil. Ces cookies peuvent être utilisés à des fins diverses, notamment pour activer une fonction Flash et mémoriser vos préférences.<br>





                        Comment nous utilisons les cookies<br>



                        Nous utilisons les cookies pour faire plusieurs choses. Par exemple, les cookies sont utilisés pour activer certaines fonctions du site, renforcer la sécurité et détecter les fraudes, améliorer la fonctionnalité du site, mémoriser vos préférences ou compter le nombre de personnes qui consultent un site web. Nous les utilisons également pour garder une trace de ce que vous avez fait sur le site et pour rendre la publicité en ligne plus pertinente pour vous.<br>


                        Nous recevons des données de votre part dans le cadre de la connexion de communication elle-même par le biais du message d'accueil électronique standard entre votre ordinateur et nos serveurs. Ces informations comprennent souvent le routage du réseau (d'où vous venez), des informations sur l'équipement (type de navigateur), l'adresse du protocole Internet, la date et l'heure. D'autres parties du site utilisent des cookies (y compris les formulaires d'inscription) pour recueillir des informations sur votre utilisation du site et pour faciliter les visites ultérieures. Les cookies du site peuvent recueillir les informations suivantes : un identifiant unique, les préférences de l'utilisateur et les informations de profil utilisées pour personnaliser le contenu qui est affiché.<br>



                        Les cookies eux-mêmes ne contiennent pas d'informations permettant de vous identifier personnellement ("IPI"). Ils ne possèdent qu'un identifiant alphanumérique unique qui se trouve sur votre navigateur. Et dans de nombreux cas, nous ne serons pas en mesure de vous renvoyer les informations que nous recueillons en utilisant un cookie. Ils peuvent toutefois nous permettre de relier ces informations à vous et à vos données personnelles, par exemple lorsque vous vous connectez ou choisissez de vous inscrire à un bulletin d'information.<br>



                        Nous pouvons également faire appel à des tiers pour suivre et analyser les données non personnelles et personnellement identifiables du site web et pour diffuser des publicités. Pour ce faire, nous pouvons permettre à des tiers de placer des cookies sur les appareils des utilisateurs de notre site, lorsque la loi le permet et sous réserve de votre droit de vous désengager par le biais du site. Nous utilisons les données collectées pour nous aider à administrer et à améliorer la qualité du site et pour analyser l'utilisation du site. Ces tiers peuvent combiner les informations que nous fournissons à votre sujet avec d'autres informations qu'ils ont recueillies. Ces tiers sont tenus d'utiliser vos informations conformément à la présente politique en matière de cookies et à notre politique de confidentialité. Nous enregistrerons toutes ces divulgations et déploierons des efforts raisonnables pour nous assurer que ces tiers n'utilisent pas vos IPI à des fins qui ne sont pas expressément prévues dans le présent document.<br>



                        Nous avons classé nos cookies dans les catégories ou "types" suivants, afin de vous permettre de comprendre plus facilement pourquoi nous en avons besoin :<br>



                        Essentiel - Ces cookies sont essentiels pour vous fournir nos services et vous permettre d'utiliser certaines de ses fonctionnalités sur le site. Par exemple, ils vous permettent de vous connecter à des zones sécurisées de notre site et aident à charger rapidement le contenu des pages que vous demandez. Sans ces cookies, les services que vous avez demandés ne peuvent pas être fournis et nous utilisons ces cookies uniquement pour vous fournir ces services.<br>

                        Analyse et performance - Ces cookies sont utilisés pour collecter des informations sur le trafic sur notre site et les services et sur la façon dont les utilisateurs utilisent notre site. Les informations recueillies ne permettent pas d'identifier un visiteur en particulier. Les informations sont agrégées et donc anonymes. Elles comprennent le nombre de visiteurs de notre site, les sites web qui les ont dirigés vers notre site, les pages qu'ils ont visitées, l'heure à laquelle ils ont visité le site, s'ils ont déjà visité le site auparavant et d'autres informations similaires. Nous utilisons ces informations pour nous aider à exploiter nos services de manière plus efficace, pour recueillir des informations démographiques générales et pour contrôler le niveau d'activité de nos services. Nous utilisons Google Analytics à cette fin - Google Analytics utilise ses propres cookies pour améliorer le fonctionnement de nos Services.<br>

                        Fonctionnalité - Ces cookies permettent à notre Site de se souvenir des choix que vous faites lorsque vous utilisez nos Services, comme par exemple la mémorisation de vos préférences linguistiques et la mémorisation des modifications que vous apportez à d'autres parties de nos Sites ou Services que vous pouvez personnaliser. L'objectif de ces cookies est de vous offrir une expérience plus personnelle et de vous éviter de devoir saisir à nouveau vos préférences chaque fois que vous visitez notre site.<br>

                        Cookies des médias sociaux - Ces cookies sont utilisés lorsque vous partagez des informations en utilisant un bouton de partage des médias sociaux ou un bouton "J'aime" sur nos services ou lorsque vous établissez un lien entre votre compte ou notre contenu sur ou via un site de réseau social tel que Facebook, Instagram ou Twitter. Le réseau social enregistrera que vous avez fait cela.<br>

                        Ciblage et publicité - Ils sont utilisés pour partager certaines informations avec les tiers avec lesquels nous faisons de la publicité, afin que nous sachions comment vous avez atteint notre site. Nous pouvons également utiliser des cookies pour identifier les parties du site qui vous intéressent. Nous utilisons ensuite ces informations pour vous montrer des publicités et des pages qui, selon nous, pourraient également vous intéresser, pour adapter notre façon de communiquer avec vous ou pour adapter le contenu des communications que nous vous envoyons. Si vous le préférez, vous pouvez choisir de ne pas participer à ces communications. L'adaptation du contenu signifie qu'il comprend des informations reflétant l'intérêt que vous avez manifesté pour le contenu de nos pages web ou pour les offres ou promotions qui, selon nous, pourraient vous intéresser, et pour améliorer la façon dont nous répondons à vos besoins.<br>


                        En plus des cookies que nous utilisons sur notre site, nous utilisons également des cookies et des technologies similaires dans certains courriers électroniques et notifications que nous vous envoyons. Ils nous aident à comprendre si vous avez ouvert le courriel et comment vous avez interagi avec lui. Si vous avez activé les images, des cookies peuvent être placés sur votre ordinateur ou votre appareil mobile. Des cookies seront également placés si vous cliquez sur un lien dans le courriel.<br>



                        Les cookies et vous<br>



                        Pour vous inscrire à des informations ou services avec BON, vous devez avoir activé les cookies sur votre navigateur internet. Certains des navigateurs les plus populaires (et les liens pour gérer vos cookies sur chacun d'eux) le sont :<br>



                        <strong style="text-decoration: underline;">Internet Explorer</strong><br>

                        <strong style="text-decoration: underline;">Firefox</strong><br>

                        <strong style="text-decoration: underline;">Safari</strong><br>

                        <strong style="text-decoration: underline;">Google Chrome</strong><br>

                        <strong style="text-decoration: underline;">Brave</strong><br>



                        Vérifiez que votre navigateur et votre appareil sont corrects et à jour. Si vous choisissez de ne pas activer les cookies, vous pourrez toujours naviguer sur notre site, mais cela restreindra certaines des fonctionnalités de notre site et ce que vous pourrez faire. Toutefois, vous pouvez autoriser les cookies de certains sites web en les faisant passer pour des "sites de confiance" dans votre navigateur.<br>



                        Contrôle de vos cookies<br>



                        Vous pouvez configurer votre navigateur web pour qu'il vous avertisse lorsqu'un cookie est utilisé. Vous pouvez également obtenir des informations sur la durée du cookie et sur le serveur vers lequel vos données sont renvoyées. Vous pouvez ensuite accepter ou refuser le cookie. En outre, vous pouvez configurer votre navigateur pour qu'il refuse tous les cookies ou n'accepte que les cookies renvoyés aux serveurs d'origine.<br>



                        Vous pouvez accepter ou refuser les cookies à tout moment - à l'exception des cookies essentiels (qui sont utilisés pour permettre à notre site web de fonctionner efficacement). Vous pouvez activer ou désactiver les cookies dans votre navigateur. Si vous souhaitez limiter ou bloquer les cookies définis par un site web - y compris le présent site web - vous pouvez le faire en paramétrant le navigateur web pour chaque navigateur web que vous utilisez, sur chaque appareil que vous utilisez pour accéder à l'internet.<br>



                        Des informations sur le contrôle et la suppression des cookies, y compris sur une grande variété de navigateurs, sont disponibles sur le site allaboutcookies.org.<br>



                        Certains services peuvent ne pas fonctionner ou avoir des fonctionnalités plus limitées si votre navigateur web n'accepte pas les cookies.<br>



                        En ce qui concerne certains cookies fonctionnant sur notre site, vous pouvez trouver plus d'informations sur les cookies de Google Analytics ici : https://developers.google.com/analytics/resources/concepts/gaConceptsCookies.<br>



                        Vous pouvez en savoir plus sur la manière dont Google protège vos données ici : <br>www.google.com/analytics/learn/privacy.html.<br>



                        Vous pouvez empêcher l'utilisation de Google Analytics relative à votre utilisation de nos services en téléchargeant et en installant le plugin de votre navigateur disponible via ce lien : http://tools.google.com/dlpage/gaoptout?hl=en-GB.<br>



                        Les cookies Flash peuvent être ajustés à l'adresse suivante : <br>http://www.macromedia.com/support/documentation/en/flashplayer/help/settings_manager.html. Si vous choisissez de régler les paramètres de confidentialité de Flash sur votre appareil, certaines fonctions des Services peuvent ne pas fonctionner correctement.<br>



                        Si vous souhaitez refuser les cookies sur différents réseaux de publicité, le site web de la Network Advertising Initiative (initiative de publicité en réseau) propose des informations et des conseils supplémentaires à l'adresse www.networkadvertising.org. Vous pouvez également désactiver les cookies qui se souviennent de vos habitudes de navigation et cibler la publicité sur vous en visitant le site http://www.youronlinechoices.com/uk/your-ad-choices. Pour vous désengager de la publicité ciblée de LiveRamp, veuillez vous rendre à l'adresse suivante : <br>https://liveramp.com/opt_out/.<br>



                        Si vous choisissez de supprimer les cookies ciblés ou publicitaires, vous verrez toujours des publicités, mais elles peuvent ne pas être pertinentes pour vous. Même si vous choisissez de supprimer les cookies des entreprises figurant sur les liens ci-dessus, toutes les entreprises qui diffusent des publicités comportementales en ligne ne sont pas incluses dans cette liste, et il se peut donc que vous receviez encore certains cookies et des publicités personnalisées d'entreprises qui ne figurent pas sur la liste.  <br>


                        Politique des cookies<br>

                        Si vous ne souhaitez pas accepter les cookies de l'un de nos courriers électroniques, vous pouvez choisir de ne pas télécharger d'images ou de ne cliquer sur aucun lien. Vous pouvez également configurer votre navigateur de manière à limiter les cookies ou à les rejeter entièrement. Ces paramètres s'appliqueront à tous les cookies, qu'ils soient inclus sur les sites web ou dans les courriels. En fonction de votre adresse électronique ou des paramètres de votre navigateur, les cookies contenus dans un courrier électronique peuvent parfois être automatiquement acceptés (par exemple, lorsque vous avez ajouté une adresse électronique à votre carnet d'adresses ou à votre liste d'expéditeurs sûrs). Pour plus d'informations, reportez-vous aux instructions de votre navigateur ou de votre appareil de messagerie électronique. ︎<br>
            </p>
          </div>
      </div>
      <!-- Conditions d'utilisation-->
      <div style="height: 50px" id="Conditions d'utilisation"></div>
        <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-lg-9 " >
            <h2 class="text-white mt-0 text-center" ><?php echo $politique[$language]['2']?></h2>
            <hr class="divider divider-danger" />
            <p class="text-white-75 mb-4 fs-5" > 
            Nos conditions de service définissent les règles que nous utilisons pour régir votre utilisation de ce site et de nos services, ainsi que toute propriété intellectuelle contenue dans nos offres. Il s'agit essentiellement d'un accord contractuel entre GOOD Worldwide Inc et vous, l'utilisateur de ce site et des services.  Veuillez lire attentivement les informations ci-dessous pour savoir précisément ce que vous pouvez et ne pouvez pas faire sur notre (nos) site(s) ou avec nos services, et pour comprendre les restrictions sur ce dont chacun d'entre nous est responsable en relation avec votre utilisation des services que nous fournissons.<br>



              <strong style="text-decoration: underline;">1. Acceptation des conditions de service</strong><br>



              Ces conditions d'utilisation ("Conditions") régissent tout site Web et/ou sous-domaine détenu et exploité par GOOD Worldwide Inc. et/ou ses sociétés affiliées, entités liées, divisions, filiales ou sociétés mères ("GOOD", "nous", "notre" ou "nos"), y compris association-khoutwa.com, good.is, upworthy.com, scoop.upworthy.com et leurs sous-domaines (le(s) "Site(s)"), et tous les portails, applications, produits, biens, services, bulletins d'information, événements, et toutes les fonctionnalités interactives, applications ou autres services qui affichent un lien vers ces conditions.  En accédant aux sites, en les consultant ou en les publiant, ou en participant à tout service offert sur les sites (collectivement, les "services") ou en les utilisant, vous acceptez d'être lié par les présentes conditions.  Les présentes conditions s'appliquent à tous les utilisateurs des sites, y compris les utilisateurs qui contribuent également au contenu, aux informations et aux autres matériels des sites, y compris les commentaires, les "j'aime" ou les partages.  Si vous utilisez le site ou les services au nom d'une société ou d'une organisation, cette société ou organisation sera également considérée comme partie aux présentes conditions. Notre site et nos services ne sont pas destinés aux utilisateurs âgés de moins de 13 ans.<br>



              De temps en temps, GOOD peut décider de modifier, d'ajouter ou de supprimer des parties de ces conditions et publiera ces changements ici. Si BON le fait, votre utilisation continue du site ou des services après que ces modifications aient été apportées signifie que vous acceptez ces modifications. Les conditions modifiées entreront automatiquement en vigueur dès leur publication sur ce site. En outre, BON se réserve le droit de changer et d'améliorer les caractéristiques et les fonctionnalités des services à tout moment, ce qui inclut l'ajout, la modification ou la suppression de caractéristiques et de fonctionnalités des services, ou la mise à jour de la façon dont nos services sont fournis. BON se réserve en outre le droit de suspendre ou de résilier les services pour toute raison ou à tout moment.<br>



              <strong style="text-decoration: underline;">2. Politique de confidentialité</strong><br>



              Chez GOOD, nous nous engageons à respecter la vie privée et la sécurité, et à offrir la meilleure expérience possible à nos utilisateurs. Veuillez consulter notre politique de confidentialité, qui explique nos pratiques relatives à la collecte et à l'utilisation de vos informations par le biais du site ou des services ou en relation avec ceux-ci, et qui est expressément intégrée aux présentes conditions. Vous comprenez que par votre utilisation du Site ou des Services, vous consentez à la collecte et à l'utilisation de vos informations personnelles comme indiqué dans la Politique de confidentialité.  Notre politique de confidentialité peut offrir des options supplémentaires pour refuser le partage de ces informations en fonction de la juridiction dans laquelle vous résidez.<br>



              <strong style="text-decoration: underline;">3. Droits de propriété</strong><br>



              Vous reconnaissez que ce site contient un contenu protégé par des droits d'auteur, des marques de commerce, des marques de service, des présentations, des brevets, des droits moraux ou d'autres droits de propriété ("Contenu"), et que ces droits sont valables et protégés sous toutes les formes, dans tous les médias et toutes les technologies existants actuellement et développés par la suite. Vous reconnaissez également que, sauf disposition contraire dans les présentes conditions ou indication contraire sur le site, BON ou ses concédants de licence sont propriétaires de l'ensemble du contenu de ce site, y compris, sans limitation, toutes les vidéos, textes, graphiques, interfaces utilisateur, interfaces visuelles, photographies, images animées, illustrations, fichiers, marques commerciales, logos, marques de service, œuvres d'art, code informatique, conception, structure, sélection, coordination, "look and feel" et arrangement de ce contenu. Votre utilisation de ce site ne vous confère aucune revendication de propriété sur un contenu que vous n'avez pas créé, et vous acceptez de vous conformer à toutes les lois applicables en matière de droits d'auteur et de marques commerciales. Vous n'êtes pas autorisé à modifier, transmettre, participer à la vente ou au transfert de tout contenu, ou à créer des œuvres dérivées basées sur tout contenu, en tout ou en partie. Vous pouvez imprimer des copies du contenu, à condition que ces copies ne soient faites qu'à des fins personnelles et non commerciales, et que vous conserviez toutes les notifications contenues dans le contenu, ou conservées par le concédant ou l'auteur, telles que les notifications de droits d'auteur, les légendes de marques, les attributions, les lignes de conduite ou autres notifications de droits de propriété. Vous n'êtes pas autorisé à stocker électroniquement une partie importante du contenu de ce site. L'utilisation du contenu de ce site sur tout autre site, y compris par liaison ou cadrage, ou dans tout environnement informatique en réseau, à quelque fin que ce soit, est interdite sans l'accord écrit préalable de BONNE.<br>



              Pour obtenir l'autorisation d'utiliser le contenu de ce site ou du matériel de marketing rédigé et distribué par GOOD, vous devez demander une autorisation écrite préalable et fournir une attribution complète. L'autorisation doit être demandée en contactant copyright@association-khoutwa.com.<br>


              <strong style="text-decoration: underline;">4. Utilisation du site ; risque de perte</strong><br>



              GOOD se réserve le droit de refuser le service, d'annuler les abonnements à la newsletter et les commandes de produits ou services, de résilier les comptes ou l'accès au site, et/ou de supprimer ou modifier le contenu, à sa seule discrétion. Si vous vous inscrivez pour obtenir des informations de GOOD, vous acceptez, déclarez et garantissez que vous nous fournirez des informations vraies, actuelles, complètes et exactes en rapport avec votre utilisation du site et des services. Vous déclarez également que vous utilisez notre site dans un but légal - vous ne pouvez pas utiliser votre accès au site ou aux services dans le but de commettre ou de favoriser des actes frauduleux ou de commettre tout acte qui pourrait donner lieu à une responsabilité civile ou pénale.<br>



              Vous êtes seul responsable de votre conduite et de tout contenu que vous soumettez, publiez et affichez sur le site ou les services ou que vous autorisez d'autres personnes à soumettre, publier et/ou afficher sur le site ou les services sous votre nom ou votre profil.  Vous ne devez pas harceler, menacer, usurper l'identité ou intimider d'autres utilisateurs du BON site ou des services. Vous ne devez pas télécharger, publier, envoyer par e-mail, transmettre ou rendre disponible de toute autre manière un contenu illégal, nuisible, menaçant, abusif, haineux, délictueux, diffamatoire, vulgaire, obscène, calomnieux, portant atteinte à la vie privée d'autrui ou autrement répréhensible. Vous ne pouvez pas télécharger, afficher, envoyer par courrier électronique, transmettre ou rendre disponible de toute autre manière des publicités non sollicitées ou non autorisées, du matériel promotionnel, du "courrier indésirable", du "spam", des "chaînes de lettres", des "opérations pyramidales", des "liens d'affiliation" ou toute autre forme de sollicitation.      <br>



              Vous acceptez de ne pas accéder au site par d'autres moyens que par un navigateur web disponible dans le commerce. Vous n'êtes pas autorisé à télécharger sur le site des éléments dont vous devez avoir connaissance ou dont vous savez qu'ils portent atteinte aux droits de propriété intellectuelle d'autrui, et vous ne pouvez pas télécharger des éléments qui imposent une charge inutile de manière à affecter les performances du site, ou de BONS systèmes et équipements. Vous ne pouvez pas utiliser le site ou les services d'une manière qui pourrait bloquer l'accès, altérer, endommager ou désactiver de toute autre manière le BON ou l'un de nos serveurs. Vous ne pouvez pas tenter d'obtenir un accès non autorisé au site ou aux comptes, systèmes informatiques ou réseaux d'autres utilisateurs par l'extraction de mots de passe, la journalisation des frappes, le piratage ou tout autre moyen. Vous ne téléchargerez aucun fichier contenant des virus, des chevaux de Troie, des logiciels malveillants, des logiciels espions, des vers, des fichiers corrompus ou tout autre matériel ou logiciel susceptible d'endommager le fonctionnement d'un autre ordinateur. Tout matériel téléchargé est soumis aux lois fédérales, nationales et internationales en vigueur.<br>



              Nous pouvons, à notre seule discrétion, mettre fin à votre accès ou à votre utilisation du site à tout moment et pour n'importe quelle raison. BONNE ne sera pas responsable envers vous ou un tiers pour toute résiliation de votre accès au site. Si votre statut d'utilisateur de ce site est résilié, vous devrez (i) cesser d'utiliser le site et toute information obtenue à partir du site, et (ii) détruire toutes les copies de toute information obtenue à partir de ce site.<br>


              <strong style="text-decoration: underline;">5. Sécurité</strong><br>


              La violation de la sécurité du site ou des services est interdite et peut entraîner des poursuites pénales et civiles. Nous pouvons enquêter sur des incidents impliquant de telles violations et pouvons impliquer, et coopérer avec les forces de l'ordre si une violation criminelle est suspectée. Les exemples de violations de la sécurité comprennent, sans limitation, l'accès non autorisé ou l'utilisation de données ou de systèmes, y compris toute tentative de sonder, scanner ou tester la vulnérabilité du Site ou des Services ou de violer les mesures de sécurité ou d'authentification, la surveillance non autorisée des données ou du trafic, l'interférence avec le service à tout utilisateur, hôte, ou réseau, y compris, sans limitation, le bombardement de courrier, le bombardement de nouvelles, d'autres techniques d'inondation, les tentatives délibérées de surcharger un système, la falsification de tout en-tête de paquet TCP-IP, d'en-tête de courrier électronique ou de toute partie d'en-tête de message, sauf pour l'utilisation autorisée d'alias ou de repostage anonyme, et l'utilisation de moyens manuels ou électroniques pour éviter toute limitation d'utilisation.<br>


              <strong style="text-decoration: underline;">6. Matériel soumis</strong><br>


              Sauf demande expresse, GOOD ne souhaite pas recevoir d'informations confidentielles, exclusives ou de secrets commerciaux de votre part via le site (y compris via l'e-mail de contact mis à disposition sur le site). En conséquence, si vous envoyez BONNE toute information ou œuvre créative, y compris, sans limitation, des soumissions d'idées, des suggestions, des plans d'affaires, des concepts ou des démonstrations dans tout média, y compris des photographies, des graphiques, des supports audiovisuels ou d'autres matériels ("Matériel soumis"), vous garantissez que le Matériel soumis n'est pas confidentiel ou secret et que le Matériel soumis est entièrement votre propriété et vous accordez BONNE une exemption de droits, un droit et une licence illimités, mondiaux, perpétuels, irrévocables, non exclusifs et entièrement transférables, cessibles et pouvant faire l'objet d'une sous-licence pour utiliser, copier, reproduire, modifier, adapter, imprimer, publier, traduire, créer des œuvres dérivées, créer des œuvres collectives à partir de, et distribuer, exécuter, afficher, concéder sous licence et sous-licence (à travers de multiples niveaux) le matériel soumis dans tout média connu actuellement ou inventé ultérieurement, y compris à des fins commerciales. En plus des droits applicables à tout Matériel Soumis, lorsque vous publiez des commentaires ou des critiques sur le Site, vous nous accordez également le droit d'utiliser le nom que vous soumettez avec toute critique, commentaire ou autre contenu, en relation avec cette critique, ce commentaire ou cet autre contenu. Si vous envoyez BONNEMENT tout matériel soumis, vous garantissez que vous disposez de tous les droits nécessaires (y compris les droits à la vie privée et les droits de publicité) pour autoriser BONNEMENT l'utilisation du matériel soumis, comme le permet la licence de cette section. Vous ne devez pas utiliser une fausse adresse électronique, prétendre être quelqu'un d'autre que vous-même, ou nous induire en erreur ou induire des tiers en erreur quant à l'origine de tout matériel soumis, y compris les critiques, les commentaires ou tout autre contenu. Nous pouvons, mais ne sommes pas obligés, de supprimer ou de modifier tout matériel soumis (y compris les commentaires ou les critiques) pour quelque raison que ce soit.<br>


              <strong style="text-decoration: underline;">7. Sites web de tiers</strong><br>


              Le site peut contenir des liens vers des sites web de tiers qui vous emmènent en dehors du BON site et des services ("sites liés"). Nous ne contrôlons pas, n'approuvons pas, ne parrainons pas, ne recommandons pas ou n'acceptons pas autrement la responsabilité du contenu de ces sites liés, et nous ne donnons aucune garantie ou représentation, expresse ou implicite, concernant le contenu (ou l'exactitude, l'actualité ou l'exhaustivité de ce contenu) des sites liés. Lorsque vous suivez un lien vers un autre site web, ce site sera régi par des conditions d'utilisation et une politique de confidentialité différentes. Vous devez vous assurer que vous avez lu et accepté ces politiques.<br>



              Votre correspondance ou vos relations d'affaires avec des annonceurs ou des tiers, ou votre participation à des promotions de ces derniers, qui se trouvent sur ou dans le site, y compris, sans limitation, en ce qui concerne le paiement et la livraison de produits ou services connexes et toutes autres conditions, garanties ou déclarations associées à ces relations, sont uniquement entre vous et ces tiers et ne nous lient pas. Vous acceptez que nous ne soyons pas responsables des actions, pertes, dommages, responsabilités, réclamations, jugements, coûts ou dépenses de toute nature ou de tout type encourus à la suite de ces transactions ou de la présence de ces tiers sur le site, et vous acceptez de nous indemniser de et contre toute réclamation encourue à la suite de ces transactions.<br>


              <strong style="text-decoration: underline;">8. Indemnisation</strong><br>


              Vous acceptez de défendre, d'indemniser et de dégager de toute responsabilité GOOD, ses filiales, entités liées, divisions, filiales ou sociétés mères, ses dirigeants, administrateurs, employés, affiliés et agents contre toute réclamation, perte, dommage, amende, pénalité ou autre responsabilité associée de quelque manière que ce soit : (i) votre utilisation et votre accès au site ou aux services ; (ii) votre violation de l'une de ces conditions ; et (iii) votre violation de tout droit de tiers, y compris tout droit d'auteur, marque commerciale, secret commercial ou droit à la vie privée lié à votre contenu utilisateur (le cas échéant) ou à l'utilisation du site.<br>


              <strong style="text-decoration: underline;">9. Avis de non-responsabilité</strong><br>


              VOUS ACCEPTEZ QUE VOTRE UTILISATION DU SITE ET DES SERVICES FOURNIS PAR GOOD EST À VOS PROPRES RISQUES. GOOD NE FAIT AUCUNE DÉCLARATION QUANT À L'EXHAUSTIVITÉ, L'EXACTITUDE OU L'ACTUALITÉ DES INFORMATIONS FIGURANT SUR CE SITE. LE CONTENU ET LES INFORMATIONS FIGURANT SUR CE SITE WEB SONT FOURNIS "TELS QUELS", SANS GARANTIE D'AUCUNE SORTE, EXPRESSE OU IMPLICITE, Y COMPRIS, SANS LIMITATION, TOUTE GARANTIE POUR LES PRODUITS, LES INFORMATIONS OU LES SERVICES FOURNIS PAR OU EN RELATION AVEC CE SITE WEB ET TOUTE GARANTIE IMPLICITE DE QUALITÉ MARCHANDE, D'ADÉQUATION À UN USAGE PARTICULIER, D'ATTENTE DE RESPECT DE LA VIE PRIVÉE OU DE NON-VIOLATION, OU DU CONTENU DE TOUT SITE LIÉ À CE SERVICE. GOOD NE GARANTIT PAS, N'APPROUVE PAS, NE CAUTIONNE PAS ET N'ASSUME PAS LA RESPONSABILITÉ DE TOUT PRODUIT OU SERVICE ANNONCÉ OU OFFERT PAR UN TIERS PAR LE BIAIS DES SERVICES OU DE TOUT SITE WEB LIÉ, OU FIGURANT DANS TOUTE PUBLICITÉ, ET GOOD NE SERA PAS PARTIE OU RESPONSABLE DE LA SURVEILLANCE DE TOUTE TRANSACTION ENTRE VOUS ET LES FOURNISSEURS TIERS DE PRODUITS OU SERVICES. GOOD NE GARANTIT PAS QUE LES SERVICES SERONT ININTERROMPUS OU EXEMPTS D'ERREURS, QUE LES DÉFAUTS SERONT CORRIGÉS OU QUE CE SITE WEB OU LE SERVEUR QUI LE REND DISPONIBLE EST EXEMPT DE VIRUS OU D'AUTRES ÉLÉMENTS NUISIBLES. LA LOI APPLICABLE PEUT NE PAS AUTORISER L'EXCLUSION DES GARANTIES IMPLICITES, DE SORTE QUE L'EXCLUSION CI-DESSUS PEUT NE PAS S'APPLIQUER À VOUS.<br>


              <strong style="text-decoration: underline;">10. Limitation de la responsabilité</strong><br>


              DANS TOUTE LA MESURE PERMISE PAR LA LOI : EN AUCUN CAS GOOD (OU SES DIRIGEANTS, DIRECTEURS, AFFILIÉS, AGENTS, FILIALES, ENTITÉS LIÉES, COENTREPRISES ET EMPLOYÉS) NE SERA RESPONSABLE DES DOMMAGES CONSÉCUTIFS, INDIRECTS, ACCESSOIRES, PUNITIFS, EXEMPLAIRES OU SPÉCIAUX DÉCOULANT DE OU EN RELATION AVEC (1) CES CONDITIONS DE SERVICE, (2) L'UTILISATION OU L'INCAPACITÉ D'UTILISER LE SITE WEB, LES SERVICES OU LE CONTENU, Y COMPRIS TOUTE PERTE DE REVENUS, DE PROFITS OU DE DONNÉES OU TOUTE INTERRUPTION D'ACTIVITÉ, QU'ELLE SOIT FONDÉE SUR UNE GARANTIE, UN CONTRAT, UN DÉLIT OU TOUTE AUTRE THÉORIE JURIDIQUE, ET MÊME SI LE BIEN A ÉTÉ INFORMÉ DE LA POSSIBILITÉ DE TELS DOMMAGES, (3) LE COÛT DE L'ACQUISITION DE BIENS ET SERVICES DE SUBSTITUTION RÉSULTANT DE TOUT BIEN, LES DONNÉES, INFORMATIONS OU SERVICES ACHETÉS OU OBTENUS, LES MESSAGES REÇUS OU LES TRANSCRIPTIONS EFFECTUÉES À PARTIR DES SERVICES OU DU SITE OU PAR LEUR INTERMÉDIAIRE, (4) L'ACCÈS NON AUTORISÉ À VOS TRANSMISSIONS OU DONNÉES OU LEUR ALTÉRATION, (5) LES DÉCLARATIONS OU LA CONDUITE D'UN TIERS SUR LE SERVICE, OU (6) TOUTE AUTRE QUESTION RELATIVE AU SITE OU AUX SERVICES. EN AUCUN CAS LA RESPONSABILITÉ GLOBALE DE GOOD (OU LA RESPONSABILITÉ GLOBALE DE SES DIRIGEANTS, DIRECTEURS, AFFILIÉS, AGENTS, FILIALES, ENTITÉS LIÉES, COENTREPRISES ET EMPLOYÉS) DÉCOULANT DE OU EN RELATION AVEC LES PRÉSENTES CONDITIONS DE SERVICE, LE SITE OU LES SERVICES (QUE CE SOIT PAR CONTRAT, NÉGLIGENCE DÉLICTUELLE, GARANTIE OU AUTRE) NE DÉPASSERA 100 $. TOUTE CAUSE D'ACTION DÉCOULANT DU SITE WEB OU LIÉE À CELUI-CI DOIT DÉBUTER DANS UN DÉLAI D'UN (1) AN APRÈS L'APPARITION DE LA CAUSE D'ACTION. DANS LE CAS CONTRAIRE, CETTE CAUSE D'ACTION EST DÉFINITIVEMENT EXCLUE. CERTAINS ÉTATS OU JURIDICTIONS PEUVENT NE PAS AUTORISER L'EXCLUSION OU LA LIMITATION DE RESPONSABILITÉ POUR LES DOMMAGES ACCESSOIRES OU INDIRECTS, DE SORTE QUE LES LIMITATIONS ET EXCLUSIONS CI-DESSUS PEUVENT NE PAS S'APPLIQUER À VOUS.<br>


              <strong style="text-decoration: underline;">11. Communiqué</strong><br>


              Si vous avez un litige avec un ou plusieurs utilisateurs du site ou des services, vous libérez BONNE (et ses dirigeants, directeurs, affiliés, agents, filiales, coentreprises et employés) des réclamations, demandes et dommages (réels et indirects) de toute sorte et de toute nature, connus et inconnus, découlant de ou liés de quelque manière que ce soit à ces litiges.<br>



              <strong style="text-decoration: underline;">12. Réclamations en cas de violation</strong><br>



              Le BON respecte la propriété intellectuelle d'autrui et exige que vous fassiez de même. Conformément à la loi sur les droits d'auteurs Digital Millennium Copyright Act ("DMCA"), GOOD répondra aux avis de non-respect présumé des droits d'auteur dans le respect des lois applicables et sera dûment informé auprès de son agent de droits d'auteur désigné, comme indiqué ci-dessous.  BON désactivera et/ou supprimera l'accès au site Web pour les utilisateurs qui commettent des infractions de façon répétée. Si vous pensez que votre contenu a été copié d'une façon constituant un non-respect de vos droits d'auteur ou que vos droits de propriété intellectuelle ont été violés de quelque autre façon, veuillez fournir à l'administrateur des droits d'auteur de GOOD les informations suivantes<br>


              DMCA Avis d'infraction présumée ("Avis")<br>


              - Identifiez l'œuvre protégée dont vous affirmez qu'elle a été violée ou, si plusieurs œuvres sont couvertes par le présent avis, vous pouvez fournir une liste représentative des œuvres protégées dont vous affirmez qu'elles ont été violées.<br>


              - Identifiez le matériel ou le lien dont vous affirmez qu'il est contrefait et fournissez une description de l'endroit où se trouve l'œuvre contrefaite sur le site web.<br>


              - Indiquez votre adresse postale, votre numéro de téléphone et, le cas échéant, votre adresse électronique.<br>


              - Incluez les deux déclarations suivantes dans le corps de l'avis :<br>


              - "Je déclare par la présente que je crois de bonne foi que l'utilisation litigieuse du matériel protégé par le droit d'auteur n'est pas autorisée par le propriétaire du droit d'auteur, son agent ou la loi (par exemple, l'utilisation équitable)".<br>


              - "Je déclare par la présente que les informations contenues dans le présent avis sont exactes et, sous peine de parjure, que je suis le propriétaire ou que je suis autorisé à agir au nom du propriétaire, du droit d'auteur ou d'un droit exclusif au titre du droit d'auteur qui aurait été violé.<br>


              - Indiquez votre nom légal complet et votre signature électronique ou physique.<br>


              - Remettez cet avis, avec tous les éléments complétés, à l'agent désigné par BONNE pour les droits d'auteur :<br>



              Agent chargé des droits d'auteur<br>


              GOOD Worldwide Inc.<br>


              1370 North St Andrews Pl.<br>


              Los Angeles, CA 90028<br>




              Bien que GOOD considère tous ces avis avec sérieux, vous pouvez être tenu responsable de dommages (y compris les frais et les honoraires d'avocat) si vous déformez matériellement le contenu ou l'activité en infraction. Par conséquent, si vous n'êtes pas certain que le contenu viole vos droits d'auteur (y compris si l'utilisation de matériel protégé par des droits d'auteur peut constituer un usage loyal), vous pouvez demander l'avis d'un avocat.<br>


              <strong style="text-decoration: underline;">13. Résiliation</strong><br>


              GOOD se réserve le droit, à sa seule discrétion, de restreindre, suspendre ou résilier les présentes conditions d'utilisation et votre accès à tout ou partie du site ou du contenu ou des services, à tout moment et pour quelque raison que ce soit, sans préavis ni responsabilité. Vous pouvez résilier les présentes conditions de service en cessant d'utiliser les services et d'accéder au site. GOOD se réserve également le droit, à sa seule discrétion, de cesser de fournir les services et ce site à tout moment.<br>


              <strong style="text-decoration: underline;">14. Séparabilité</strong><br>


              Si une disposition des présentes Conditions est considérée en tout ou en partie comme invalide, nulle ou inapplicable dans une juridiction quelconque pour une raison quelconque, le reste de cette disposition et de l'ensemble de l'Accord sera dissociable et restera en vigueur et de plein effet.<br>



              <strong style="text-decoration: underline;">15. Règlement des différends</strong><br>



              Sauf dans les cas prévus dans les présentes, aucune action civile concernant tout litige, réclamation ou controverse découlant de ou liée aux présentes conditions de service, y compris toute réclamation concernant la validité ou le caractère exécutoire des présentes conditions ou de la présente disposition de résolution des litiges, ne peut être engagée avant que l'affaire n'ait été soumise au JAMS pour médiation.  Les parties conviennent que cette médiation aura lieu dans le comté de Los Angeles, en Californie, aux États-Unis. Chaque partie peut commencer la médiation en fournissant au JAMS et à l'autre partie une demande écrite de médiation, exposant l'objet du litige et la réparation demandée. Les parties coopéreront avec le JAMS et entre elles pour choisir un médiateur unique parmi le panel de neutres du JAMS, et pour programmer la procédure de médiation. Les parties conviennent qu'elles participeront à la médiation de bonne foi et qu'elles en partageront les coûts à parts égales. Toutes les offres, promesses, conduites et déclarations, orales ou écrites, faites par l'une des parties, leurs agents, employés, experts et avocats, ainsi que par le médiateur et tout employé du JAMS, au cours de la médiation, sont confidentielles, privilégiées et inadmissibles à toutes fins, y compris la mise en accusation, dans tout litige ou autre procédure impliquant les parties, à condition que les preuves qui sont autrement admissibles ou communicables ne soient pas rendues inadmissibles ou non communicables en raison de leur utilisation dans la médiation.  Chaque partie peut demander une réparation équitable (telle qu'une injonction visant à empêcher la violation du droit d'auteur) avant la médiation afin de préserver le statu quo en attendant l'achèvement de ce processus. À l'exception d'une telle action visant à obtenir une réparation équitable, aucune des parties ne peut engager une action civile concernant les questions soumises à la médiation avant la fin de la session de médiation initiale ou 45 jours après la date de dépôt de la demande écrite de médiation, selon la première éventualité.  La médiation peut se poursuivre après l'introduction d'une action civile si les parties le souhaitent. Les dispositions du présent article peuvent être mises en œuvre par tout tribunal compétent, et la partie qui demande l'exécution a droit à une condamnation à tous les frais, honoraires et dépenses, y compris les honoraires d'avocat, à payer par la partie contre laquelle l'exécution est ordonnée .<br>


              <strong style="text-decoration: underline;">16. Généralités</strong><br>



              Les présentes conditions d'utilisation seront régies par les lois de l'État de Californie, sans référence à ses règles en matière de choix des lois. La juridiction et le lieu de juridiction exclusifs pour toute action en vertu des présentes conditions d'utilisation seront les tribunaux d'État et fédéraux de Los Angeles, Californie. Vous acceptez par les présentes la compétence personnelle de ces tribunaux. Vous ne pouvez céder aucun des droits qui vous sont accordés ni déléguer aucune de vos obligations en vertu des présentes et toute tentative de le faire est nulle et sans effet. GOOD peut céder ses droits et déléguer ses devoirs en vertu du présent accord dans leur intégralité dans le cadre d'une fusion, d'une réorganisation ou d'une vente de la totalité ou de la quasi-totalité de ses actifs liés aux présentes conditions d'utilisation. Rien dans le présent accord ne constitue un partenariat ou une coentreprise entre vous et BON. BON ne garantit pas un accès continu, ininterrompu ou sécurisé à ce site ou aux services, et le fonctionnement du site peut être perturbé par de nombreux facteurs indépendants de sa volonté. Le fait de ne pas agir en cas de violation par vous ou d'autres personnes ne nous dispense pas de notre droit d'agir en cas de violations ultérieures ou similaires. Les présentes conditions d'utilisation énoncent l'intégralité de l'accord et de l'entente entre vous et BONNE en ce qui concerne l'objet des présentes. Les sections 3 (Droits de propriété), 6 (Documents soumis), 8 (Indemnisation), 9 (Exclusion de responsabilité), 10 (Limitation de responsabilité), 11 (Décharge), 14 (Divisibilité), 15 (Résolution des litiges) et 16 (Généralités) survivent à toute résiliation ou expiration du présent accord. En outre, toute disposition qui, de par sa nature, était destinée à survivre à la résiliation des présentes conditions subsistera.<br>

          </p>
          </div>
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
          </div><!--.row-->
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