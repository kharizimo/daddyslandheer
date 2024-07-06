drop table if exists agenda;
create table agenda(
    id integer primary key autoincrement,
    lib text,
    evenement text,
    lieu text,
    jour text,
    mois text,
    annee text,
    info text,
    etat text default 'Actif'
);
drop table if exists chanson;
create table chanson(
    id integer primary key autoincrement,
    lib text,
    singers text,
    duration text,
    info text,
    etat text default 'Actif'
);  