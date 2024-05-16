insert into Acteur ( nomAct, preAct, natAct, datnaissAct) values ('Stallone','Sylvester','Americain',"1946-07-06");
insert into Acteur ( nomAct, preAct, natAct, datnaissAct) values ('Dell','Tobin','Americain',"1942-08-07");
insert into Acteur ( nomAct, preAct, natAct, datnaissAct) values ('Coleman','Zendaya','Americainne',"1996-09-01");
insert into Acteur ( nomAct, preAct, natAct, datnaissAct) values ('Weaving','Samara','Australienne',"1992-02-23");
insert into Acteur ( nomAct, preAct, natAct, datnaissAct) values ('Cotillard','Marion','Francaise',"1975-09-30");
insert into Acteur ( nomAct, preAct, natAct, datnaissAct) values ('DiCaprio','Leonardo','Americain',"1974-11-11");
insert into Acteur ( nomAct, preAct, natAct, datnaissAct) values ('Robbie','Margot','Australienne',"1990-07-02");
insert into Acteur ( nomAct, preAct, natAct, datnaissAct) values ('Alonso','Pedro','Espagnol',"1971-06-21");

insert into classification (libclaOC) values ('Film');
insert into classification (libclaOC) values ('Serie');
insert into classification (libclaOC) values ('Dessin Animée');

insert into Genre (libgOC) values ('Action');
insert into Genre (libgOC) values ('Fiction');
insert into Genre (libgOC) values ('Aventure');
insert into Genre (libgOC) values ('Comedie');
insert into Genre (libgOC) values ('Romance');
insert into Genre (libgOC) values ('Science Fiction');
insert into Genre (libgOC) values ('Drame');
insert into Genre (libgOC) values ('Fantastique');
insert into Genre (libgOC) values ('Horreur');
insert into Genre (libgOC) values ('Animation');

insert into Realisateur (nomRea,prenomRea,natRea,recompenseRealisateur) values ('Villeneuve','Denis','Canadien',8);
insert into Realisateur (nomRea,prenomRea,natRea,recompenseRealisateur) values ('Wan','James','Malaisien',5);
insert into Realisateur (nomRea,prenomRea,natRea,recompenseRealisateur) values ('Grewing','Greta','Americainne',12);
insert into Realisateur (nomRea,prenomRea,natRea,recompenseRealisateur) values ('Nolan','Christopher','Americain',27);
insert into Realisateur (nomRea,prenomRea,natRea,recompenseRealisateur) values ('Guadagnino','Lucas','Italien',4);
insert into Realisateur (nomRea,prenomRea,natRea,recompenseRealisateur) values ('Gillet','Tyler','Americain',3);
insert into Realisateur (nomRea,prenomRea,natRea,recompenseRealisateur) values ('Pina','Alex','Espagnol',1);
insert into Realisateur (nomRea,prenomRea,natRea,recompenseRealisateur) values ('Clichy','Louis','Francais',0);

insert into oeuvrecinematographique (titreOriginal,titreFrancais,anneeSortie,resume,nbEpisode,codRea,classOC,codGenre) values ('Incendies','Incendies',2010,'A la mort de leur mère lors de la lecture du testament Jeanne et Simon Marwan reçoivent deux enveloppes. Ils doivent remettre la première à leur père, qu ils avaient toujours cru mort. Quant à la seconde elle est destinée à un frère dont ils n avaient jamais entendu parler. Jeanne décide alors de partir pour le Moyen-Orient à la découverte de son histoire familiale.',1,1,1,7);
insert into oeuvrecinematographique (titreOriginal,titreFrancais,anneeSortie,resume,nbEpisode,codRea,classOC,codGenre) values ('Saw','Saw',2004,'Deux hommes se réveillent enchaînés au mur d une salle de bains. Ils ignorent où ils sont et ne se connaissent pas. Ils savent juste que l un doit absolument tuer l autre, sinon dans moins de huit heures, ils seront exécutés tous les deux. Voici l une des situations imaginées par un machiavélique maître criminel qui impose à ses victimes des choix auxquels personne ne souhaite jamais être confronté un jour. Un détective est chargé de l enquête.',1,2,1,9);
insert into oeuvrecinematographique (titreOriginal,titreFrancais,anneeSortie,resume,nbEpisode,codRea,classOC,codGenre) values ('Barbie','Barbie',2023,'À Barbie Land, vous êtes un être parfait dans un monde parfait. Sauf si vous êtes en crise existentielle,ou si vous êtes Ken...',1,3,1,3);
insert into oeuvrecinematographique (titreOriginal,titreFrancais,anneeSortie,resume,nbEpisode,codRea,classOC,codGenre) values ('Oppenheimer','Oppenheimer',2023,'En 1942, convaincus que l’Allemagne nazie est en train de développer une arme nucléaire, les États-Unis initient, dans le plus grand secret, le Projet Manhattan destiné à mettre au point la première bombe atomique de l’histoire. Pour piloter ce dispositif, le gouvernement engage J. Robert Oppenheimer, brillant physicien, qui sera bientôt surnommé  le père de la bombe atomique . C’est dans le laboratoire ultra-secret de Los Alamos, au cœur du désert du Nouveau-Mexique, que le scientifique et son équipe mettent au point une arme révolutionnaire dont les conséquences, vertigineuses, continuent de peser sur le monde actuel…',1,4,1,7);
insert into oeuvrecinematographique (titreOriginal,titreFrancais,anneeSortie,resume,nbEpisode,codRea,classOC,codGenre) values ('Challengers','Challengers',2024,'Une joueuse de tennis devenue entraîneuse, Tashi, décide de se consacrer à la carrière de son mari, Art, le faisant passer d un joueur médiocre en un champion du Grand Chelem de renommée mondiale. Pour le sortir d une récente série de défaites, elle le fait participer à un tournoi Challenger où il se retrouve face à Patrick, son ancien meilleur ami et l ancien petit-ami de Tashi.',1,5,1,5);
insert into oeuvrecinematographique (titreOriginal, titreFrancais,anneeSortie,resume,nbEpisode,codRea,classOC,codGenre)values ('Wedding Nightmare','Wedding Nightmare',2016,'Le jour de son mariage, une jeune femme est invitée par ses beaux-parents pour le clou de la cérémonie : un jeu familial traditionnel auquel elle devra survivre.',1,6,1,9);
insert into oeuvrecinematographique (titreOriginal,titreFrancais,anneeSortie,resume,nbEpisode,codRea,classOC,codGenre) values ('La Casa de Papel : Berlin','Berlin',2023,'À une période faste de sa vie, l amour et l argent sont ce qui compte le plus pour Berlin qui prépare un coup de maître : un braquage de bijoux estimés à 44 millions.',8,7,2,7);
insert into oeuvrecinematographique (titreOriginal,titreFrancais,anneeSortie,resume,nbEpisode,codRea,classOC,codGenre) values ('Asterix:Le secret de la potion magique','Asterix:Le secret de la potion magique',2018,'À la suite d’une chute lors de la cueillette du gui, le druide Panoramix décide qu’il est temps d’assurer l’avenir du village.Accompagné d’Astérix et Obélix, il entreprend de parcourir le monde gaulois à la recherche d’un jeune druide talentueux à qui transmettre le Secret de la Potion Magique…',1,8,3,10);

insert into jouer (codeAct,codifOC,roleAct) values (7,3,1);
insert into jouer (codeAct,codifOC,roleAct) values (3,5,1);
insert into jouer (codeAct,codifOC,roleAct) values (4,6,1);
insert into jouer (codeAct,codifOC,roleAct) values (8,7,1);
