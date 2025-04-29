POO : Faire un ensbl d’objets qui interagissent entre eux.

Objet : chose que l’on peut décrire avec des caractéristiques et des actions / 
En somme l’objet est le résultat fabriqué à partir de la classe ! 

Qd on crée un objet en POO
On recherche pas a tout prévoir, mais juste ce qui est nécessaire pour notre projet (actuel ?)

Classe : c’est un model qui décrit les caractéristiques et les actions de l’objet 
(Sert de moule pour créer d’autres objets) en gros la classe est la recette / le plan 


Attributs: Les caractéristique de l’objet 

Méthodes : Les actions possibles de l’objet 

	•	Classe = modèle (plan, recette, moule).
	•	Objet = chose réelle fabriquée avec ce modèle.


---


Private / Public / Protected

En POO, un attribut ou une méthode peut être :
private : utilisable seulement dans la classe
protected : Utilisable dans la classe ET dans les classes héritées ! 
public : Utilisable partout
But final ➔ protéger ce qui doit l’être, ouvrir seulement ce qui est nécessaire.

-- 

constructeur 
Donne les valeurs de l'objet - mets en place ses attributs et remplir l'objet 

-----

Les accesseurs et les mutateurs

Getter (accesseur) : Lire / récupérer une info
Setter (mutateur) : Modifier / changer une info

---- 

Les Const 
Constante ➔ Une info fixe qui ne change jamais.
	•	On crée une constante avec const.
	•	On utilise une constante avec self::.
	•	Son nom est écrit en MAJUSCULE.
	•	Elle sert à lister ce qui est autorisé ou fixe dans le projet.
	•	Elle n’est pas liée directement aux attributs private.