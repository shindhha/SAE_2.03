CREATE TABLE USERS
(
	ID INTEGER PRIMARY KEY,
	NOM VARCHAR(25) NOT NULL,
	PRENOM VARCHAR(25) NOT NULL,
	PSEUDO VARCHAR(25) NOT NULL,
	MDP VARCHAR(25) NOT NULL,
	DATENAISSANCE DATE NOT NULL,
);