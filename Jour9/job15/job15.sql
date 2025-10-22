SELECT s.nom AS nom_salle, e.nom AS nom_etage
FROM salle s
JOIN etage e ON s.id_etage = e.id_etage;
