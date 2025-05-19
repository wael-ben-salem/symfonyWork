
# Projet Symfony - Gestion des Auteurs et Livres

## Description

Ce projet est une application web développée avec Symfony 6.4 permettant la gestion d’une librairie.  
Elle offre les fonctionnalités CRUD (Create, Read, Update, Delete) pour gérer les auteurs et leurs livres associés.

---

## Fonctionnalités principales

- Gestion complète des auteurs (ajout, modification, suppression, affichage)
- Gestion complète des livres (ajout, modification, suppression, affichage)
- Association entre auteurs et livres (relation ManyToOne)
- Recherche avancée par nombre de livres et période de publication
- Affichage des détails d’un auteur et de ses livres
- Interface utilisateur simple et responsive grâce à Twig

---

## Technologies utilisées

- Symfony 6.4
- PHP 8.1+
- Doctrine ORM
- Twig (templating engine)
- MySQL (base de données relationnelle)

---

## Prérequis

- PHP 8.1 ou supérieur
- Composer
- Serveur web (Apache, Nginx ou serveur interne Symfony)
- Base de données MySQL ou compatible

---

## Installation

1. **Cloner le dépôt :**

```bash
git clone https://github.com/wael-ben-salem/symfonyWork.git
cd symfonyWork
```

2. **Installer les dépendances :**

```bash
composer install
```

3. **Configurer la base de données :**

Modifier le fichier `.env` (ou `.env.local`) pour renseigner les identifiants de connexion à ta base de données :

```
DATABASE_URL="mysql://username:password@127.0.0.1:3306/biblio_esprit?serverVersion=8.0"
```

4. **Créer la base de données :**

```bash
php bin/console doctrine:database:create
```

5. **Mettre à jour le schéma (création des tables) :**

```bash
php bin/console doctrine:schema:update --force
```

6. **Importer des données de test  :**


```bash
php bin/console doctrine:fixtures:load
```

7. **Démarrer le serveur local Symfony :**

```bash
symfony server:start
```

Le projet est accessible sur : [http://localhost:8000](http://localhost:8000)

---

## Utilisation

- Accéder à la liste des auteurs : `/author/list`
- Ajouter un auteur : `/author/new`
- Modifier un auteur : `/author/{id}/edit`
- Supprimer un auteur : `/author/{id}/delete`
- Visualiser les détails d’un auteur : `/author/{id}`
- Ajouter, modifier, supprimer et visualiser des livres via les routes similaires sous `/book/`

---

## Structure du projet

- `src/Entity/` : Entités Doctrine (Author, Book)
- `src/Controller/` : Contrôleurs pour gérer la logique métier
- `templates/` : Templates Twig pour les vues frontend
- `public/images/` : Images statiques utilisées (photos d’auteurs)
- `config/` : Configuration de Symfony



## Contribuer

Contributions, corrections et améliorations sont les bienvenues !  
Pour contribuer, merci de fork le dépôt, créer une branche feature, et soumettre une Pull Request.



## Contact

Pour toute question ou suggestion, merci de me contacter à :  
**Waelbensalem02@gmail.com**

---

## Remarques

- Ce projet est développé dans le cadre d’un atelier de formation Symfony  
- Il peut être étendu facilement pour intégrer d’autres fonctionnalités
