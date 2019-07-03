# PHP_COURS
## Transmettre des données via l'URL
### Création d'une URL 
**URL : Uniform Resource Locator** *(Localisateur uniforme de ressource)*
Une URL est utilisé quand un navigateur fait une requête vers un serveur pour une ressource(document HTML, image, vidéo...)

**Une URL est composé de 3 composants**

1. **Protocole** : Il indique au navigateur le protocole qui doit être utilisé pour accéder à la ressource. HTTP(sans SSL) ou HTTPS (avec SSL)
2. **Nom de domaine** : Il permet d'indiquer le serveur web qui détient la ressource. Cela peut être aussi une adresse IP et également suivi d'un port *Ex: 192.168.0.1:80*
3. **Chemin** *(path)* : Il indique le chemin de la ressource sur le serveur web 

<img align="center" width="500" src="assets/url.png">

*Informations supplémentaires <https://developer.mozilla.org/fr/docs/Apprendre/Comprendre_les_URL>*

### Ajouter un paramètre à une URL

Dans l'exemple ci-dessous nous allons créer un lien vers la page film.php en passant un paramètre "titre" avec pour valeur "goonies".

    <a href="film.php?titre=goonies">The Goonies</a>

### Ajouter plusieurs paramètres à une URL

Pour ajouter plusieurs paramètre il suffit de les séparer par un **&**, dans l'exemple ci-dessous nous allons envoyer trois paramètres.

    <a href="film?php?titre=goonies&likes=100&dislikes=0">The Goonies</a>

### Récupérer les données des paramètres

Pour récupérer les données de paramètres nous allons utiliser la variable SuperGlobal **$_GET**. Cette variable nous retournera un tableau associatif. Les clefs de ce tableau associatif seront les noms des paramètres de l'URL.

Pour le lien ci-dessous :

    <a href="film?php?titre=goonies&likes=100&dislikes=0">The Goonies</a>

Nous aurons :

    <?php
        $_GET = [
            'titre' => 'goonies',
            'likes' => '100',
            'dislikes' => '0'
        ];

**Attention** les données des paramètres peuvent être modifiés par l'utilisateur. Avant de les utiliser il faudra les traiter.
**Ne jamais faire confiance à l'utilisateur.**

## Transmettre des donnée via un formulaire
