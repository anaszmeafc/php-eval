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

boolean isset($var)
true si $var est défini sinon false

---

### b) La fonction `empty()` *(8 pts)*

Donnez la syntaxe complète de `empty()`, expliquez quand elle retourne `TRUE` et quand elle retourne `FALSE`.

boolean empty($var)
retourne TRUE si $var n'est pas initialisé, est a 0, null ou "0" sinon false

---

### c) Différence fondamentale *(8 pts)*

Quelle est la différence entre `isset()` et `empty()` lorsqu'une variable vaut `0` ? Justifiez votre réponse.

isset est seulement le fait qu'une variable est initialisé a n'importe quel valeur tandis que empty doit seulement etre vide ou a 0/null

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
| `$var = false;` | true | true |
| `$var = [];` | true | true |

---

## Question 2 — GET / POST et manipulation de fichiers (60 points)

### a) GET vs POST *(15 pts)*

Expliquez la différence entre la méthode `GET` et la méthode `POST` pour le passage de variables en PHP. Dans quel cas préfère-t-on utiliser `GET` ? Quelle est la limite de caractères de `GET` ?

_Votre réponse ici_

---

### b) Passage de paramètres dans l'URL *(15 pts)*

Donnez la syntaxe permettant de passer les variables `categorie` (valeur : "php") et `page` (valeur : 2) dans une URL pointant vers `catalogue.php`.

Montrez ensuite comment récupérer ces deux variables en PHP côté serveur.

_Votre réponse ici_

---

### c) Les modes d'ouverture de `fopen()` *(20 pts)*

Citez et expliquez les **6 modes d'ouverture** possibles de la fonction `fopen()`. Pour chacun, précisez : lecture, écriture, ou les deux ; et où est placé le pointeur.

"r" ouvre le fichier en lecture et place le pointeur au début du fichier 
"r+" lecture et en écriture et place le pointeur au début du fichier 
"w" écriture et place le pointeur au début du fichier. Si le fichier 
existe, son contenu est effacé. S'il n'existe pas, le fichier est créé. 
"w+" lecture et écriture et place le pointeur au début du fichier. 
Si le fichier existe, son contenu est effacé. S'il n'existe pas, le fichier est créé. 
"a" écriture et place le pointeur à la fin du fichier. Si le fichier 
n'existe pas, il est créé. 
"a+" lecture et écriture et place le pointeur à la fin du fichier. Si 
le fichier n'existe pas, il est créé. 
---

### d) La fonction `header()` *(10 pts)*

À quoi sert la fonction `header()` ? Donnez un exemple concret. Quelle contrainte très importante doit-on respecter lors de son utilisation, et pourquoi ?

header("Location: accueil.html");
elle sert a rediriger le navigateur à l'adresse spécifiée

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
