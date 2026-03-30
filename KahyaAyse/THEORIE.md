**Total : 100 points — Seuil de réussite : 50/100**  
**Durée estimée : ~30 minutes**  
**Documents autorisés : Aucun**

> Répondez directement dans ce fichier en remplaçant les lignes `_Votre réponse ici_`.  
> Écrivez votre nom et prénom ci-dessous.

**Nom et prénom :** _______________________

---

## Question 1 — `isset()` vs `empty()` (40 points)

### a) La fonction `isset()` *(8 pts)*

Donnez la syntaxe complète de `isset()`, expliquez quand elle retourne `TRUE` et quand elle retourne `FALSE`.

La syntaxe est isset($_POST["nom_de_champ"]), elle retourne true si la valeur existe et qu'elle n'est pas Null. 


---

### b) La fonction `empty()` *(8 pts)*

Donnez la syntaxe complète de `empty()`, expliquez quand elle retourne `TRUE` et quand elle retourne `FALSE`.

empty($_POST["nom_de_champ"]) retourne true si la variable n'existe pas ou si elle est VIDE (donc Null, " ", 0 etc.).
_Votre réponse ici_

---

### c) Différence fondamentale *(8 pts)*

Quelle est la différence entre `isset()` et `empty()` lorsqu'une variable vaut `0` ? Justifiez votre réponse.

Les deux vont retourner true car isset va considérer que la variable existe et qu'elle a une valeur non Null, et empty va dire que la valeur est vide car c'est un 0. 

---

### d) Tableau comparatif *(16 pts)*

Complétez ce tableau (TRUE ou FALSE) :

| Valeur de `$var` | `isset($var)` | `empty($var)` |
|---|---|---|
| `$var = 0;` | true | true |
| `$var = "";` | true | true |
| `$var = "bonjour";` | true | false |
| Variable non déclarée | false | true |
| `$var = "0";` | true | true |
| `$var = null;` | false | true |
| `$var = false;` | true | false |
| `$var = [];` | true | true |

---

## Question 2 — GET / POST et manipulation de fichiers (60 points)

### a) GET vs POST *(15 pts)*

Expliquez la différence entre la méthode `GET` et la méthode `POST` pour le passage de variables en PHP. Dans quel cas préfère-t-on utiliser `GET` ? Quelle est la limite de caractères de `GET` ?

La limite de caractères de get est de 255. On préfère utiliser POST pour les données sensibles (mdp, login etc). La différence est que le contenu sera envoyé dans le corps de la requête avec POST alors qu'avec get ce champ de la requête sera vide car les données seront dans l'url.

---

### b) Passage de paramètres dans l'URL *(15 pts)*

Donnez la syntaxe permettant de passer les variables `categorie` (valeur : "php") et `page` (valeur : 2) dans une URL pointant vers `catalogue.php`.

Montrez ensuite comment récupérer ces deux variables en PHP côté serveur.

localhost/catalogue.php?categorie="php"&&valeur=2
en Php on les récupère avec :
$categorie = $_GET["categorie"];
$valeur = $_GET["valeur"];
_Votre réponse ici_

---

### c) Les modes d'ouverture de `fopen()` *(20 pts)*

Citez et expliquez les **6 modes d'ouverture** possibles de la fonction `fopen()`. Pour chacun, précisez : lecture, écriture, ou les deux ; et où est placé le pointeur.

avec fopen() on a ces options possibles: 
r va lire, pointeur est au début
w va écrire et écraser le contenu existant, pointeur au début
a va lire et écrire, pointeur à la fin 
r+ va lire et écrire, pointeur au début
w+ va lire et écrire, pointeur au début, efface le contenu existant
a+ va lire et écrire, pointeur à la fin

---

### d) La fonction `header()` *(10 pts)*

À quoi sert la fonction `header()` ? Donnez un exemple concret. Quelle contrainte très importante doit-on respecter lors de son utilisation, et pourquoi ?

Header va nous servir à renvoyer vers une autre page avec header("Localisation: etc"), il est important de n'avoir aucun affichage avant son utilisation, c'est-à-dire pas de echo, de print etc.

---

## 📊 Barème

| Question | Sous-question | Points |
|---|---|---|
| Q1 — isset() vs empty() | a) isset() | 8 |
| | b) empty() | 8 |
| | c) Différence avec 0 | 8 |
| | d) Tableau | 16 |
| Q2 — GET/POST/fichiers | a) GET vs POST | 15 |
| | b) Passage de paramètres | 15 |
| | c) Modes fopen() | 20 |
| | d) header() | 10 |
| **TOTAL** | | **100** |

---

> ⚠️ Seuil de réussite : **50/100 minimum**
