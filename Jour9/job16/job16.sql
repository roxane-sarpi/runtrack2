SELECT e.nom AS nom_etage, s.nom AS "Biggest Room", s.capacite
FROM salle s
JOIN etage e ON s.id_etage = e.id_etage
WHERE s.capacite = (SELECT MAX(capacite) FROM salle);
