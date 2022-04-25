Dans l’espace qui comportera votre site web pour la journée courante, vous placerez un
fichier database.json qui comportera en sa racine les champs suivants : db_url, db_name
db_login et db_password. Vous ajouterez un fichier htaccess qui empêchera son accès via un
navigateur.
Dans votre base de donnée day01, vous créerez la table comment, comprenant les
champs id (int, clef primaire, auto-incrément), message (text) et post_date (datetime, par défaut
"NOW")
Vous allez bientôt commencer à exploiter votre base de données. Nous utiliserons la
classe mysqli. Ses principales fonctions sont son constructeur et la fonction membre query, qui
renvoi, en cas de demande de récupération d’informations, un objet mysqli_result dont la
fonction la plus utile est de toute évidence fetch_assoc.
La fonction real_escape_string de la classe mysqli est également très utile, mais nous vous
laissons chercher pourquoi...

Afin de pouvoir déclarer dans votre fichier index.php, vers le haut de votre fichier, la
connexion a une base de donnée à partir du contenu de votre fichier database.json, écrivez la
fonction qui suit. La connexion sera stockée via la variable $Database et c’est la fonction ci-
dessous qui aura la responsabilité de sa formation. Cette fonction exploitera également
register_shutdown_function afin de détruire cette liaison à la fin du programme. Cette fonction
comme les suivantes, sera dans database.php.
function join_database() {}
Écrivez la fonction suivante. Pour accéder à la variable $Database, n’oubliez pas de la
déclarer global dans votre fichier.
function select_fields($table, $id = -1) {}
La fonction select_fields renvoi un tableau comprenant le tuple associé à l’id passé en
paramètre ou un tableau de tuples rempli de l’intégralité de la table si aucun n’est passé et que
l’id vaut donc -1. Par exemple, si un id est passé en paramètre (ici, 1), l’affichage de la valeur
de retour de select_fields avec print_r sera :