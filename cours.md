## Modèles, migrations et controllers

Pour permettre à l'utilisateur de poster des commentaires, on aura besoin d'un :
- modèle  : qui nous fournit un moyen simple d'interagir averc la BDD 
- migration : qui nous permet de facilement créer et modifier les tables de notre BDD
- controller : responsable de traiter les requêtes de renvoyer des réponses.

## Middleware

Un middleware est une fonctionnalité permettant de filtrer les requêtes HTTP effectuée dans l'application. Les middlewares sont des couches intermédiaires qui peuvent être ajoutées au pipeline de traitement des requêtes HTTP pour effectuer des tâches spécifiques avant que la requête n'atteigne le route appropriée ou après que la réponse ait été générée par le contrôleur.

## composants sous forme de classes
Composants les plus versatiles et robuste. peuvent prendre des paramètres

### Composants anonyme
composants simples ne prenant aucun paramètre

### Fonction d'aide Laravel
`route()` : fonction qui génère l'URL correspondant à une route nommée
`__()` :  fonction qui renvoie la traduction pour une chaîne de caractère
` action()`: fonction qui génère l'URL coorespondant à l'action (méthode) d'un controlleur donné.
`url()`: fonction qui rénère l'URL complet (http://.../url)

## Mass assignation 

La mass assignation est une technique qui permet de définir plusieurs attributs d'un modèle en une seule fois. Par exemple, imaginez que vous avez un modèle ` Utilisateur ` avec des champs tels que `nom`, `email`, ` rôle `. La mass assignation permet de définir tous ces champs en une fois, ce qui peut être très pratique et vous faire gagner du temps.

Cependant , si elle n'est pas gérée avec précaution, la mass assignation peut entraîner une vulnérabilité de sécurité appelée "over-posting" ou "vulnérabilité de mass assignation".