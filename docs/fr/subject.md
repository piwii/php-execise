Test de recrutement
-------------------
-------------------

Définition
----------

En théorie des ensembles, un ensemble désigne intuitivement une collection d’objets (les éléments de l’ensemble),
 « une multitude qui peut être comprise comme un tout » (au sens
d’omnis). Pour notre exercice, les objets seront des nombres entiers distincts.
Un exemple d’ensemble contenant les entiers suivants : {2, 3, 6, 7, 14}.

Modélisation objet
------------------

On se propose de modéliser un ensemble par une classe abstraite et une implémentation simple, 
à l’aide d’un tableau qui contiendra les éléments. La figure 2 montre les 3 classes à implémenter.
Les méthodes en gras sont des méthodes abstraites. Voici le comportement attendu par les 4 méthodes
de l’objet Set :

* add() : ajoute 1 l’élément passé en paramètre à l’ensemble.
* remove() : supprime l’élément passé en paramètre de l’ensemble. Si l'élément n’existe pas dans le tableau, l’exception Set Exception est déclenchée.
* getSize() : retourne le cardinal de l’ensemble (i.e., le nombre d’ ́el ́ement contenu dans l’ensemble).
* isEmpty() : retourne un bool ́een pour dire si l’ensemble est vide ou non.

De plus, les méthodes add() et remove() de l’objet Set devront permettre le chaînage de méthodes (Fluent Interface).

Attention, l’ensemble ne contient que des entiers distincts. Donc si l’élément existe déja, il ne doit pas apparaître en double.

Fig. 2: Diagramme UML

![UML Diagram](https://github.com/piwii/test-de-recrutement/raw/master/docs/UML-Diagram.png "UML Diagram")


Approche
--------

Pour le développement de ces 3 classes, nous utiliserons une méthode de développement dirigée par les tests
(TDD). Dans le répertoire tests/, vous pourrez lancer le script [shell] sh run_tests.sh pour exécuter
l’ensemble des tests.
A l’issue du test, l’ensemble des 4 tests (14 assertions) doivent être correctement passés.

Ressources
----------

Toutes les ressources sont autorisés pour la résolution du problème.
