    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>acceuil</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Muli:400,800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="normalize.min.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    @include('main/header')

        <header>
            <h1>Spécialités Culinaire du Cameroun</h1>
            <p>Venez déguster et vous regaler des magnifiques plats de Tata Mama</p>
            <p>La cuisine de Mama une experience inoubliable</p>
        </header>
        <main>
            <!-- la section class="card-content" est un conteneur qui contient les actualité du carousel -->
            <section class="carousel">
            <ul class="carousel-items">
            <li class="carousel-item">
            <div class="card">
            <h2 class="card-title">Notre Salle Ambiance</h2>
            <div class="image1">
            <img src="{{ asset('img/salle restaurant oburo.jpg') }}"/>
            </div>

            <!-- DEBUT Actu 3 -->
            <div class="card-content">
                    <p>Venez deguster nos spécialités dans une ambiance chaleureuse et decontracté 
                    </p>
                    </div>
                    </div>
                    </li>
            <!-- FIN Actu 3-->

                    <!-- DEBUT Actu 2 -->
                    <li class="carousel-item">
                        <div class="card">
                            <h2 class="card-title">Notre terrasse</h2>
                            <div class="image2">
                            <img src="{{ asset('img/terrasse_arriere.jpg') }}"/>
                            </div>
                            <div class="card-content">
                                <p>Cuisse de poulet fermier accompagné d'un riz long parfumé 
                                    aux epices du soleil 
                                    Il y'à des haricots, des carottes, des poivrons, des oignons, de l'ail 
                                    le tout delicieusement pimenté HOT</p>
                            </div>
                        </div>
                    </li>
                    <!-- FIN Actu 2 -->

                    <!-- DEBUT Actu 3 -->
                    <li class="carousel-item">
                        <div class="card">
                            <h2 class="card-title">N'Dolé Royale</h2>
                            <img src="{{ asset('img/Cameroun-plat3.jpg') }}"/>
                            <div class="card-content">
                                <p>Viandes de boeuf accompagné de crevette royale et d'ecrevisses et 
                                    poisson fumé le tout qui a delicieusement mijoté avec des 
                                    oignons, ail, piment, arachides et poisson fulé.</p>
                            </div>
                        </div>
                    </li>
                    <!-- FIN Actu 3 -->
                </ul>
            </section>
        </main>
        @include('main/footer')
    </body>
    </html>