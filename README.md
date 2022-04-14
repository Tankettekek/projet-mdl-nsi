# Notre projet

##  Structure du projet
```
.
├── README.md
└── src
    └── www
        ├── admin.php
        ├── img
        │   ├── 410283.jpg
        │   ├── bg.webp
        │   ├── logo.png
        │   ├── logo2.png
        │   ├── tmp
        │   │   └── graph.png
        │   └── wp2406589.webp
        ├── index.html
        └── server
            ├── graph.py
            ├── horaire.php
            ├── info.csv
            ├── script.py
            └── server.php
```
## Explications

La version actuelle de ce code ne marchera pas sur Laragon. 
Elle fonctionne uniquement sur un serveur Apache parametré d'une facon tres specifique.
Il suffirait en realite de modifier les chemins d'acces et les permissions données au fichier pour que ce dernier fonctionne.

## Contenu
Les documents `horaire.php` et `script.py` generent les horaires disponibles en temps reel. Le document `index.html` apelle le php qui execute les script python affin de generer les horaires. L'utilisation du Python à été nécessaire pour la survie de ma santé mentale.
Le document `admin.php` dessert la page d'administration. Il apelle au programpme `graph.py` pour generer le graphique affiché.
