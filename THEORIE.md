**Total : 100 points — Seuil de réussite : 50/100**  
**Durée estimée : ~30 minutes**  
**Documents autorisés : Aucun**

> Répondez directement dans ce fichier en remplaçant les lignes `_Votre réponse ici_`.  
> Écrivez votre nom et prénom ci-dessous.

**Nom et prénom :** Flamant Cyrille

---

## Question 1 — `isset()` vs `empty()` (40 points)

### a) La fonction `isset()` *(8 pts)*

Donnez la syntaxe complète de `isset()`, expliquez quand elle retourne `TRUE` et quand elle retourne `FALSE`.

Par exemple pour le champ "nom" d'un formulaire envoyé par méthode "POST":
isset($_POST["nom"])
renvoie TRUE si la valeur est définie (même sur  0), FALSE dans le cas contraire (si elle n'est pas définie ou définie sur NULL)

---

### b) La fonction `empty()` *(8 pts)*

Donnez la syntaxe complète de `empty()`, expliquez quand elle retourne `TRUE` et quand elle retourne `FALSE`.

Par exemple pour le champ "nom" d'un formulaire envoyé par méthode "POST":
empty ($_POST["nom"])
renvoie TRUE si la valeur n'est pas définie, FALSE si elle est définie (et que la valeur n'est pas NULL)
---

### c) Différence fondamentale *(8 pts)*

Quelle est la différence entre `isset()` et `empty()` lorsqu'une variable vaut `0` ? Justifiez votre réponse.

Si une variable est définie sur 0, elle est considérée comme définie, donc isset() renverra TRUE. Mais comme sa valeur est 0, empty() renverra également TRUE.

---

### d) Tableau comparatif *(16 pts)*

Complétez ce tableau (TRUE ou FALSE) :

| Valeur de `$var` | `isset($var)` | `empty($var)` |
|---|---|---|
| `$var = 0;` | TRUE | TRUE |
| `$var = "";` | TRUE | TRUE |
| `$var = "bonjour";` | TRUE | FALSE |
| Variable non déclarée | FALSE | TRUE |
| `$var = "0";` | TRUE | TRUE |
| `$var = null;` | FALSE | TRUE |
| `$var = false;` | TRUE | TRUE |
| `$var = [];` | TRUE | TRUE |

---

## Question 2 — GET / POST et manipulation de fichiers (60 points)

### a) GET vs POST *(15 pts)*

Expliquez la différence entre la méthode `GET` et la méthode `POST` pour le passage de variables en PHP. Dans quel cas préfère-t-on utiliser `GET` ? Quelle est la limite de caractères de `GET` ?

Avec la méthode GET, les valeurs des variables sont transmises directement dans l'URL. Elles sont donc visibles pour l'utilisateur, et le nombre de caractères est limité à 255. Il faut donc éviter d'utiliser 'GET' pour les données sensibles ou trop longues.
'GET' peut être utilisé pour l'envoi de données non sensibles qui seront utilisées uniquement pour la génération de html dynamique.

---

### b) Passage de paramètres dans l'URL *(15 pts)*

Donnez la syntaxe permettant de passer les variables `categorie` (valeur : "php") et `page` (valeur : 2) dans une URL pointant vers `catalogue.php`.

Montrez ensuite comment récupérer ces deux variables en PHP côté serveur.

catalogue.php?categorie=php&page=2

côté serveur :
$categorie = $_GET["categorie"];
$page = $_GET["page"];
---

### c) Les modes d'ouverture de `fopen()` *(20 pts)*

Citez et expliquez les **6 modes d'ouverture** possibles de la fonction `fopen()`. Pour chacun, précisez : lecture, écriture, ou les deux ; et où est placé le pointeur.

mode "r" : lecture, le pointeur est placé au début du fichier
mode "r+" : lecture + écriture, le pointeur est placé au début du fichier
mode "w" : écriture, le pointeur est placé au début du fichier



---

### d) La fonction `header()` *(10 pts)*

À quoi sert la fonction `header()` ? Donnez un exemple concret. Quelle contrainte très importante doit-on respecter lors de son utilisation, et pourquoi ?

la fonction header() permet de transmettre directement un en-tête http. Par exemple, header("location : index.php") indique au navigateur qu'il doit ouvrir la page index.php.


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
