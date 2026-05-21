# Sujet : Historisation des changements de salaire

Objectif : Écrire un bloc PL/SQL anonyme qui parcourt tous les employés de l'entreprise à l'aide d'un curseur explicite. Pour chaque employé, le programme doit calculer un bonus de fin d'année égal à 10 % de son salaire actuel, puis afficher le résultat dans la console.

## Model de données
Le Modèle de Données

```SQL
-- Création de la table
CREATE TABLE employees_cur (
    employee_id NUMBER PRIMARY KEY,
    name        VARCHAR2(50),
    department  VARCHAR2(30),
    salary      NUMBER(10,2)
);

-- Insertion du jeu d'essai
INSERT INTO employees_cur VALUES (1, 'Alice', 'Sales', 3000.00);
INSERT INTO employees_cur VALUES (2, 'Bob', 'Engineering', 4500.00);
INSERT INTO employees_cur VALUES (3, 'Charlie', 'Sales', 2800.00);
INSERT INTO employees_cur VALUES (4, 'Diana', 'HR', 3200.00);
COMMIT;
```

## Travail à faire
Écrire un bloc PL/SQL anonyme respectant les consignes suivantes :

- Déclarer un curseur explicite nommé c_employees qui sélectionne le nom, le département et le salaire de tous les employés gagnant plus de 2900 $.
- Ouvrir le curseur, boucler sur chaque ligne pour récupérer les données dans des variables locales, et calculer un bonus de 10 % du salaire (salary * 0.10).
- Afficher pour chaque ligne un message formaté dans la console via DBMS_OUTPUT.PUT_LINE.
- Ne pas oublier de fermer le curseur à la fin du traitement.


## Résultat attendu

--- ANNUAL BONUS REPORT ---

Employee: Alice (Sales) | Salary: 3000 $ | Bonus: 300 $

Employee: Bob (Engineering) | Salary: 4500 $ | Bonus: 450 $

Employee: Diana (HR) | Salary: 3200 $ | Bonus: 320 $

