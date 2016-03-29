### E-Shop - Développement php
###### Quentin CLAUDON

#### Librairies utilisées :

- Bootstrap 3.3.6, pour le style général de l'application
- Bootstrap-treeview 1.2, pour le menu de gauche de la page du catalogue
- Jquery, pour l'ajax et le Javascript



#### Arborescence du projet

- Shop, Dossier racine dans lequel se trouve les vues, les mockup et le README
- bootstrap-3.3.6-dist, dossier contenant les sources de bootstrap
- bootstrap-treeview-1.2.0, dossier contenant les sources de bootstrap-treeview
- controllers, dossier contenant les controllers
- fonts, dossier contenant les fonts et icones du projet
- js, dossier contenant les fichiers Javacript du projet
- models, dossier contenant les models
- ressources, dossier contenant les images et les données du projet
- services, dossier contenant les services
- style, dossier contenant les fiches de style du projet


#### Prérequis 

Serveur Apache avec php 6 d'installé, pas besoin de base SQL, les données sont contenues dans un fichier JSON


#### Routage
(défini dans index.php)

Catalogue
http://localhost:8888/shop/?page=list

Panier
http://localhost:8888/shop/?page=cart

Produit
http://localhost:8888/shop/?page=product-page

