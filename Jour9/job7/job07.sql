
SELECT *
FROM etudiants
WHERE date_naissance < DATE_SUB(CURDATE(), INTERVAL 18 YEAR);
