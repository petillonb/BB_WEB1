Une fois celle-ci écrite... vous allez vous en servir pour changer le contenu du menu de
votre site : à la place d’avoir des valeurs écrite directement dans le HTML, vous allez écrire le
nom des fichiers (sans l’extension) que vous aurez trouvé dans le dossier pages/. Vous aurez
bien sur au préalable crée ce dossier et ajouté les fichiers suivants à l’intérieur : accueil.php,
presentation.php et commentaires.php. Ajoutez également un fichier unused afin de vérifier qu’il
n’est pas affiché...
Changez également la nature des lignes situés dans le menu : transformez celles-ci en
lien. Ces liens mèneront vers index.php?page=XXX ou XXX est l’un des noms de fichier sans
extension.
Pourquoi faire ça ? Car La partie situés après le point d’interrogation en php est l’espace
des paramètres « GET ». Ces paramètres « GET » sont ceux de la page et servent à influencer ce
qui sera fait, affiché...
Par exemple, si l’URL est index.php?var=Frite, alors il sera possible de récupérer la valeur
« Frite » à l’emplacement $_GET["var"]. Évidemment, cela implique de traiter un problème
supplémentaire ? Que faire si l’URL ne contient pas la variable ? Peut-on quand même accéder à
$_GET["var"] ? La réponse est non. Néanmoins il est possible de tester la présence de la valeur
en utilisant le mot-clef isset(). Ce mot-clef renvoi vrai si l’élément passé en paramètre existe.
Vous savez donc maintenant faire des pages paramétrées


    
Vous savez donc maintenant faire des pages paramétrées, des liens paramétrées et traiter
la variable contenant la valeur. Mais que faire de cette valeur ?
Le mot-clef include() permet d’ajouter le fichier passé en paramètre à l’emplacement où le
mot-clef est écrit dans le fichier courant.
En incluant le fichier passé en paramètre dans la zone bleue de votre site web, vous
permettez donc à votre site d’être pleinement extensible. Vous avez généralisé votre site et permit
qu’il soit aisé de l’étendre en ajoutant simplement des fichiers PHP à l’intérieur du dossier
pages/.
Lorsque le paramètre n’est pas présent, alors vous inclurez la page qui s’appelle accueil.
Si le fichier demandé n’existe pas, vous ne ferez aucune inclusion et écrire qu’il y a une erreur
404.
Journée 1
10/12
- La Caverne aux Lapins Noirs -Hyper-Espace 5 : Programmation web



Un problème de taille est apparu. Que se passe-t-il si l’on va par exemple à la page...
index.php?page=../index ?
Votre script va chercher à inclure le fichier index.php lui-même. Ce fichier comportant la
même demande d’inclusion, vous allez avoir une version PHP de la boucle infinie... C’est un
problème !
Plus généralement, au-delà de cette boucle infinie, il y un problème. A partir de votre
programme, il est possible de demander n’importe quel fichier PHP à votre site et il sera affiché,
même si il n’est pas une partie du site mais simplement présent sur votre système.
Comment faire pour empêcher ça ? Remarquez l’adresse envoyée tout à l’heure : on y
trouve « ../ », qui permet de sortir du dossier pages pour aller dans le dossier parent, et donc,
plus généralement, de se balader dans votre système de fichier.
Vous allez devoir interdire cette manœuvre. Pour cela, il y a plusieurs moyens. 

Le plus simple est de vérifier que le paramètre de votre page est dans la liste des fichiers renvoyée par
get_all_files.

Vous pouvez également interdire l’utilisation de « ../ » avec, par exemple, preg_match
pour repérer son utilisation, mais la sécurité ne sera pas aussi forte.


Un problème de taille est apparu. Que se passe-t-il si l’on va par exemple à la page...
index.php?page=../index ?
Votre script va chercher à inclure le fichier index.php lui-même. Ce fichier comportant la
même demande d’inclusion, vous allez avoir une version PHP de la boucle infinie... C’est un
problème !
Plus généralement, au-delà de cette boucle infinie, il y un problème. A partir de votre
programme, il est possible de demander n’importe quel fichier PHP à votre site et il sera affiché,
même si il n’est pas une partie du site mais simplement présent sur votre système.
Comment faire pour empêcher ça ? Remarquez l’adresse envoyée tout à l’heure : on y
trouve « ../ », qui permet de sortir du dossier pages pour aller dans le dossier parent, et donc,
plus généralement, de se balader dans votre système de fichier.
Vous allez devoir interdire cette manœuvre. Pour cela, il y a plusieurs moyens. Le plus
simple est de vérifier que le paramètre de votre page est dans la liste des fichiers renvoyée par
get_all_files.
Vous pouvez également interdire l’utilisation de « ../ » avec, par exemple, preg_match
pour repérer son utilisation, mais la sécurité ne sera pas aussi forte.

Les selecteurs en CSS permettent un contrôle plus fin de la façon dont vous appliquez
votre CSS. Vous pouvez par exemple dire « Les balises span immédiatement comprises dans une
div » en indiquant en début de bloc CSS « div > span ».
L’ensemble des possibilités de combinaisons en CSS peuvent-être trouvées ici :
https://www.w3schools.com/cssref/css_selectors.asp
--------------------------------------------------------------------------------------------------------------------------------------------------------
Nous attirons votre attention en particulier sur la spécification « hover » qui permet de
définir une apparence lorsque la souris est sur l’objet dont on souhaite définir l’apparence. Ce
spécificateur permet de changer l’apparence de l’objet sur un passage de la souris. De plus,
depuis CSS3, il est possible de définir une propriété transition permettant un passage doux entre
deux états, par exemple celui quand la souris n’est plus sur l’objet et celui quand la souris est
dessus.
https://developer.mozilla.org/fr/docs/Web/CSS/CSS_Transitions/Using_CSS_transitions
L’utilisation avec goût des transitions est pour beaucoup de sites webs l’outil privilégié
pour inspirer la modern