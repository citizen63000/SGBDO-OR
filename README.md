# SGBDO-OR

Objectif: découvrir les SGBD objet et relationnel-objet.

# Utilisation de la base Oracle

- Connectez-vous en tant que SYS
- Créez un compte utilisateur spécifique
- Connectez-vous avec votre compte personnel

Création du compte (À exécuter en tant que SYSDBA sur la base FREEPDB1):
```SQL
CREATE USER etudiant IDENTIFIED BY "CoursObjet2026!";
GRANT CONNECT, RESOURCE, CREATE TYPE TO etudiant;
ALTER USER etudiant QUOTA UNLIMITED ON USERS;
```

Outils possible pour exécuter des requêtes:
- SQL Developper
- VSCode avec extension "Oracle Developer Tools for VS Code"
- DBeaver (universel)

Configuration de la connexion :

    Utilisateur : sys (Sélectionner le rôle SYSDBA) ou system en rôle par défaut.

    Mot de passe : MonPasswordSecurise123!

    Type de connexion : De Base (Basic)

    Nom d'hôte : localhost

    Port : 1521

    Nom de service : FREEPDB1

## Résourdre les problèmes de connexion

```bash
docker exec -it oracle_extensions_cours sqlplus / as sysdba
```
```SQL
ALTER USER system IDENTIFIED BY "MonPasswordSecurise123!";
ALTER USER sys IDENTIFIED BY "MonPasswordSecurise123!";
EXIT;
```

## Trouver le détail d'une erreur
Exemple, erreur sur la fonction "CALCULER_ANCIENNETE"
```SQL
SELECT text FROM user_errors WHERE name = 'CALCULER_ANCIENNETE';
```
# Utilisation de la base PostgreSQL

Outils possible pour exécuter des requêtes:
- pgAdmin (localhost:8080)
- DBeaver (universel)