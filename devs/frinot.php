<!DOCTYPE html>
<html>

<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Site Properties -->
    <title>Homepage</title>
    <link rel="stylesheet" type="text/css" href="https://semantic-ui.com/dist/components/reset.css">
    <link rel="stylesheet" type="text/css" href="https://semantic-ui.com//dist/components/site.css">

    <link rel="stylesheet" type="text/css" href="https://semantic-ui.com//dist/components/container.css">
    <link rel="stylesheet" type="text/css" href="https://semantic-ui.com//dist/components/grid.css">
    <link rel="stylesheet" type="text/css" href="https://semantic-ui.com//dist/components/header.css">
    <link rel="stylesheet" type="text/css" href="https://semantic-ui.com//dist/components/image.css">
    <link rel="stylesheet" type="text/css" href="https://semantic-ui.com//dist/components/menu.css">

    <link rel="stylesheet" type="text/css" href="https://semantic-ui.com//dist/components/divider.css">
    <link rel="stylesheet" type="text/css" href="https://semantic-ui.com//dist/components/dropdown.css">
    <link rel="stylesheet" type="text/css" href="https://semantic-ui.com//dist/components/segment.css">
    <link rel="stylesheet" type="text/css" href="https://semantic-ui.com//dist/components/button.css">
    <link rel="stylesheet" type="text/css" href="https://semantic-ui.com//dist/components/list.css">
    <link rel="stylesheet" type="text/css" href="https://semantic-ui.com//dist/components/icon.css">
    <link rel="stylesheet" type="text/css" href="https://semantic-ui.com//dist/components/sidebar.css">
    <link rel="stylesheet" type="text/css" href="https://semantic-ui.com//dist/components/transition.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous">

    <style type="text/css">
        .hidden.menu {
            display: none;
        }

        .masthead.segment {
            min-height: 300px;
            padding: 1em 0em;
        }

        .masthead .logo.item img {
            margin-right: 1em;
        }

        .masthead .ui.menu .ui.button {
            margin-left: 0.5em;
        }

        .masthead h1.ui.header {
            margin-top: 1em;
            margin-bottom: 0em;
            font-size: 4em;
            font-weight: normal;
        }

        .masthead h2 {
            font-size: 1.7em;
            font-weight: normal;
        }

        .ui.vertical.stripe {
            padding: 5em 0em;
        }

        .ui.vertical.stripe h3 {
            font-size: 2em;
        }

        .ui.vertical.stripe .button+h3,
        .ui.vertical.stripe p+h3 {
            margin-top: 3em;
        }

        .ui.vertical.stripe .floated.image {
            clear: both;
        }

        .ui.vertical.stripe p {
            font-size: 1.33em;
        }

        .ui.vertical.stripe .horizontal.divider {
            margin: 3em 0em;
        }

        .quote.stripe.segment {
            padding: 0em;
        }

        .quote.stripe.segment .grid .column {
            padding-top: 5em;
            padding-bottom: 5em;
        }

        .footer.segment {
            padding: 5em 0em;
        }

        .secondary.pointing.menu .toc.item {
            display: none;
        }

        @media only screen and (max-width: 700px) {
            .ui.fixed.menu {
                display: none !important;
            }

            .secondary.pointing.menu .item,
            .secondary.pointing.menu .menu {
                display: none;
            }

            .secondary.pointing.menu .toc.item {
                display: block;
            }

            .masthead.segment {
                min-height: 350px;
            }

            .masthead h1.ui.header {
                font-size: 2em;
                margin-top: 1.5em;
            }

            .masthead h2 {
                margin-top: 0.5em;
                font-size: 1.5em;
            }
        }
    </style>

    <script src="https://semantic-ui.com/examples/assets/library/jquery.min.js"></script>
    <script src="https://semantic-ui.com//dist/components/visibility.js"></script>
    <script src="https://semantic-ui.com//dist/components/sidebar.js"></script>
    <script src="https://semantic-ui.com//dist/components/transition.js"></script>
    <script>
        $(document)
            .ready(function () {
                // fix menu when passed
                $('.masthead')
                    .visibility({
                        once: false,
                        onBottomPassed: function () {
                            $('.fixed.menu').transition('fade in');
                        },
                        onBottomPassedReverse: function () {
                            $('.fixed.menu').transition('fade out');
                        }
                    })
                    ;
                // create sidebar and attach to menu open
                $('.ui.sidebar')
                    .sidebar('attach events', '.toc.item')
                    ;
            })
            ;
    </script>
</head>

<body>

    <!-- Page Contents -->
    <div class="pusher">
        <div class="ui inverted vertical masthead center aligned segment" style="background-color:#FF6F61">

            <div class="ui text container">
                <h1 class="ui inverted header">MyThread.com</h1>
                <h2>raconte ta vie.</h2>
            </div>
        </div>

        <div class="ui vertical stripe segment">
            <div class="ui middle aligned stackable grid container">
                <div class="row">
                    <div class="center aligned column">
                        <h3 class="ui header" style="color:#FF6F61">Un Thread</h3>
                        <p>Un thread est un ensemble de messages sur un forum ou un groupe de discussion sur Internet
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="center aligned column">
                        <a class="ui huge button" href="https://fr.wikipedia.org/wiki/Fil_de_discussion">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="ui vertical stripe segment">
            <div class="ui text container center aligned">
                <h3 class="ui header" style="color:#FF6F61">Projet MyThread.com</h3>
                <p>MyThread.com est un reseau social qui permettrais de raconter ses anecdotes, faire des tuto,
                    raconter ou lire des histoires, partager tout cela avec sa communauté.</p>
                <p>Il conviendras biensur, d'intégrer un système de follow/followers pour suivre les utilisateurs ou
                    les "Threads"</p>
                <p>Un "Thread" pourra comporter des #(hashtag), qui servira de "catégorie". Exemples de catégorie :
                    #épouvante, #humour, #date </p>
            </div>
        </div>

        <div class="ui vertical stripe ">
            <div class="ui text container center aligned">
                <h3 class="ui header" style="color:#FF6F61">Double Thread</h3>

            </div>
        </div>
        <div class="ui vertical stripe quote segment">
            <div class="ui equal width stackable internally celled grid">
                <div class="center aligned row">
                    <div class="column">
                        <i class="fas fa-align-left" style="font-size: 5em; color:#FF6F61;"></i>
                        <h3>"Live Thread"</h3>
                        <p>Un "Live Thread" est une histoire écrite sur plusieurs jour, un "Thread" en temps réel, nous
                            pouvons le "follow".</p>
                    </div>
                    <div class="column">
                        <i class="fas fa-align-right" style="font-size: 5em; color:#FF6F61;"></i>
                        <h3>"Normal Thread"</h3>
                        <p>Un "Normal Thread" est un"Thread" écrit en une seul fois, peut être contenu sur plusieurs
                            pages.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="ui vertical stripe segment">
            <div class="ui text container center aligned">
                <span style="font-size: 5em; color:#FF6F61;">
                    <i class="fas fa-home"></i>
                </span>
                <h3 class="ui header" style="color:#FF6F61">La page Accueil !</h3>
                <p>La Page d'accueil contiendrat des "Threads". Chaque utilisateurs aura sa propre page d'accueil, avec
                    son fil d'actualité prédéfini selon ses
                    caractéristiques, selon ce qu'il a aimer, ce qu'il follow </p>
            </div>
        </div>

        <div class="ui vertical stripe segment">
            <div class="ui text container center aligned">
                <span style="font-size: 5em; color:#FF6F61;">
                    <i class="fas fa-align-center"></i>
                </span>
                <h3 class="ui header" style="color:#FF6F61">Un Thread</h3>
                <p>Un Thread aura le contenu que sont utilisateur aura défini, les autres utilisateurs pourront
                    intéragir avec sont "Thread" en le likant, en commentant ou en le partageant</p>
            </div>
        </div>

        <div class="ui vertical stripe segment">
            <div class="ui text container center aligned">
                <span style="font-size: 5em; color:#FF6F61;">
                    <i class="fas fa-user"></i>
                </span>
                <h3 class="ui header" style="color:#FF6F61">La page Profil !</h3>
                <p>Chaque utilisateurs aura sa propre page Profil, Il pourra consulter ses Threads , continuer le "live
                    Thread" qu'il est entrain d'écrire, il pourra éditer ses "Threads" qu'il à déjà écrit. </p>
            </div>
        </div>

        <div class="ui vertical stripe segment">
            <div class="ui text container center aligned">
                <span style="font-size: 5em; color:#FF6F61;">
                    <i class="fas fa-bell"></i>
                </span>
                <h3 class="ui header" style="color:#FF6F61">Une page Notification !</h3>
                <p>Une page de notifications sera attribué a un utilisateur dès son inscription, il recevra une laerte
                    dès que quelqu'un qu'il follow ajoute un "Thread" ou mets a jour une publication </p>
            </div>
        </div>

        <div class="ui vertical stripe segment">
            <div class="ui text container center aligned">
                <span style="font-size: 5em; color:#FF6F61;">
                    <i class="fas fa-dice"></i>
                </span>
                <h3 class="ui header" style="color:#FF6F61">Une fonctionnalité Random</h3>
                <p>Cette fonctionnalité vous ferra tomber sur un "Thread" aléatoire, dans une langue aléatoire écrit
                    par un utilisateur aléatoire</p>
            </div>
        </div>
        <div class="ui vertical stripe segment">
            <div class="ui text container center aligned">
                <span style="font-size: 5em; color:#FF6F61;">
                    <i class="fas fa-code"></i>
                </span>
                <h3 class="ui header" style="color:#FF6F61">Les technologies utilisées</h3>
                <span style="font-size: 5em;">
                    <div class="" style="display: flex;  justify-content: space-between; width: 100%; margin-top: 1em;">
                        <i class="fab fa-github"></i>
                        <i class="fab fa-js"></i>
                        <i class="fab fa-node-js"></i>
                    </div>
                </span>

                <span style="font-size: 4em;">
                    <div class="" style="display: flex;  justify-content: space-between; width: 100%; margin-top: 1em;">
                        <i class="fas fa-database"></i>
                        <i class="fab fa-npm"></i>
                        <img src="https://www.getpostman.com/img/v2/media-kit/Logo/PNG/pm-logo-horiz.png" height="100px" width="300px">
                        
                    </div>
                </span>

                <span style="font-size: 4em;">
                    <div class="" style="display: flex;  justify-content: space-between; width: 100%; margin-top: 1em;">
                        <img src="https://raw.githubusercontent.com/Studio3T/robomongo/master/src/robomongo/gui/resources/icons/logo-256x256.png" height="100px" width="100px">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2d/Visual_Studio_Code_1.18_icon.svg/220px-Visual_Studio_Code_1.18_icon.svg.png" height="100px" width="100px">                        
                        <img src="http://pluspng.com/img-png/bootstrap-logo-png-logo-228.png" height="100px" width="100px">
                        
                    </div>
                </span>


            </div>
        </div>
        <div class="ui vertical stripe segment">
            <div class="ui text container center aligned">
                <span style="font-size: 5em; color:#FF6F61;">
                    <i class="fas fa-plus"></i>
                </span>
                <h3 class="ui header" style="color:#FF6F61">Les petit plus !</h3>
                <p>Le reseau permettra au développeur expérimenté d'utiliser une API, pour rechercher des "data" sur le
                    sites via des requêtes vers le serveur via des token_access, pouvoir prépublier ses postes, chaque
                    "Thread" aura son propre code hasher pour pouvoir le remettre sur son site, sur facebook, sur
                    instagram, pouvoir en crée une image </p>
            </div>
        </div>

        <div class="ui inverted vertical footer segment" style="background-color:black">
            <div class="ui container center aligned">
                <div class="ui stackable inverted">
                    <p>Pour plus d'information vous pouvez me contactez a l'adresse e-mail suivante :</p>
                    <p style="color:#FF6F61">fri.develop1@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>