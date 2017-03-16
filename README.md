Site réalisé dans le cadre d’un projet scolaire (ISI Montréal) avec un réel client.

- Date : Mars 2017 
- Client : ISI 
- Catégorie : Web intégration


**But :** Réaliser un site complet

**Contraintes :** Le site doit être réalisé en HTML5, CSS3, Javascript (jQuery), PHP, et doit être responsive 

**Choix du site :** Fabrice Labit est un photographe qui désire avoir un site spécialisé dans les photos de mariages

**Graphisme :** Charte graphique, choix des couleurs

**Page d’accueil :** 
- header présent sur chaque page du site comportant le logo, les liens vers les médias sociaux et le menu de navigation 
- slider défilant automatiquement mais possibilité de faire défiler grâce aux boutons (javascript : flexslider)
- présentation rapide du photographe 
- footer présent sur chaque page du site comportant les liens vers les médias sociaux, 4 photos (liens vers instagram), copyrights et coordonnées

**Page portfolio :** 
- 3 sous-menu : préparatifs, mariage, engagement
- toutes les photos sont enregistrées dans une base de données, les photos s'affichent dans la bonne rubrique grâce aux requêtes MySQL
- page mariage : 
    - classement par couples du plus récent au plus ancien (requête MySQL)
    - le nom et la date s'affichent au survol sur la version desktop (les noms restent affichés sur les versions tablette et mobile)
- les photos s'affichent sur 3 colonnes en version desktop, 2 colonnes en version tablette et 1 colonne en version mobile
- les photos s'imbiquent les unes en dessous des autres pour ne pas laisser de blanc, peu importe le format horizontal ou vertical (javascript)
- possibilité de voir les photos en grand en cliquant dessus et de faire défiler vers les suivantes (jQuery : fancybox) 

**Pages témoignages et contact :**
- possibilité de laisser un témoignage ou de contacter le photographe grâce à 2 formulaires
- validation php sur chaque champs qui sont obligatoires
- étoile et message d'information pour l'utilisateur si champs mal ou non rempli 
- affichage d'une pop-up lorsque le formulaire est validé (jQuery : dialog)
