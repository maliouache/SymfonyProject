drop table AssocieA;
drop table MONUMENT;
drop table Lieu;
drop table Celebrite;


create table Lieu(codeInsee varchar(5) constraint communePk primary key, dep varchar(4), nomCom varchar(46), longitude float, latitude float);

create table MONUMENT(codeM varchar(5) constraint monumemtPk primary key, nomM varchar(25), proprietaire varchar(10), typeMONUMENT varchar(16), longitude float, latitude float, codeLieu varchar(5), constraint monuFk foreign key (codeLieu) references Lieu(codeInsee));

create table Celebrite (numCelebrite integer constraint celebritePk primary key, nom varchar(16), prenom varchar(16), nationalite varchar(10), epoque varchar(6));

create table AssocieA (numCelebrite integer, codeM varchar(5), constraint associeAPk primary key(numCelebrite, codeM), constraint associeAFk1 foreign key (numCelebrite) references Celebrite(numCelebrite), constraint associeAFk2 foreign key (codeM) references MONUMENT(codeM));

insert into Lieu values ('34172','34','MONTPELLIER',3.8767,43.6108);
insert into Lieu values ('34192','34','PALAVAS-LES-FLOTS',3.9333,43.5333);
insert into Lieu values ('34199','34','PEZENAS',3.4167,43.45);
insert into Lieu values ('34161','34','MONTADY',3.117645,43.327762);
insert into Lieu values ('34097','34','FELINES-MINERVOIS',2.631495,43.401935);
insert into Lieu values ('34098','34','FERRALS-LES-MONTAGNES',2.600531,43.328957);
insert into Lieu values ('34134','34','LAVERUNE',3.8028784,43.5842818);
insert into Lieu values ('34135','34','LESPIGNAN',3.1738719,43.273243);
insert into Lieu values ('34136','34','LEZIGNAN-LA-CEBE',3.435196,43.496175);
insert into Lieu values ('34137','34','LIAUSSON',3.369954,43.636121);
insert into Lieu values ('34138','34','LIEURAN-CABRIERES',3.416024,43.585471);
insert into Lieu values ('34139','34','LIEURAN-LES-BEZIERS',3.236956,43.418425);
insert into Lieu values ('34014','34','ASSAS',3.899178,43.7019469);
insert into Lieu values ('34140','34','LIGNAN-SUR-ORB',3.171837,43.383092);
insert into Lieu values ('34141','34','LIVINIERE',2.637515,43.315257);
insert into Lieu values ('34142','34','LODEVE',3.313975,43.73366);
insert into Lieu values ('34143','34','LOUPIAN',3.613867,43.449359);
insert into Lieu values ('34144','34','LUNAS',3.195023,43.709075);
insert into Lieu values ('34145','34','LUNEL',4.135366,43.67445);
insert into Lieu values ('34146','34','LUNEL-VIEL',4.092158,43.677936);
insert into Lieu values ('34147','34','MAGALAS',3.222528,43.470887);
insert into Lieu values ('34148','34','MARAUSSAN',3.157423,43.368625);  
insert into Lieu values ('34149','34','MARGON',3.3075,43.491044);  
insert into Lieu values ('34015','34','ASSIGNAN',2.886565,43.401243);  
insert into Lieu values ('34099','34','FERRIERES-LES-VERRERIES',3.797375,43.877922);  
insert into Lieu values ('34150','34','MARSEILLAN',3.527539,43.355966);  
insert into Lieu values ('34151','34','MARSILLARGUES',4.178997,43.665346);  
insert into Lieu values ('34152','34','MAS-DE-LONDRES',3.752129,43.781528);  
insert into Lieu values ('34153','34','MATELLES',3.809893,43.730637);  
insert into Lieu values ('34154','34','MAUGUIO',4.010165,43.6154409);  
insert into Lieu values ('34155','34','MAUREILHAN',3.119836,43.358381);  
insert into Lieu values ('34156','34','MERIFONS',3.2861,43.6356);  
insert into Lieu values ('34157','34','MEZE',3.606834,43.4255939);  
insert into Lieu values ('34158','34','MINERVE',2.7466,43.354066);  
insert into Lieu values ('34159','34','MIREVAL',3.802455,43.508417);  
insert into Lieu values ('34160','34','MONS',2.956289,43.57123);  
insert into Lieu values ('34016','34','AUMELAS',3.5992,43.6039);  
insert into Lieu values ('34164','34','MONTAUD',3.955276,43.752541);  
insert into Lieu values ('34162','34','MONTAGNAC',3.484114,43.480287);  
insert into Lieu values ('34163','34','MONTARNAUD',3.69797,43.649322); 
insert into Lieu values ('75056','75','PARIS',2.3522219,48.856614); 
insert into Lieu values ('17300','17','ROCHELLE',-1.151139,46.160329); 
insert into Lieu values ('13055','13','MARSEILLE',5.36978,43.296482); 
insert into Lieu values ('67482','67','STRASBOURG',7.747882,48.583148); 
  		  				     				         
--http://latitude.to/articles-by-country/fr/france/page/1

insert into MONUMENT(longitude,latitude,nomM,proprietaire,typeMonument,codeLieu) values (3.874167,43.613333,'CATHEDRALE SAINT PIERRE','diocese','religieux','34172');
insert into MONUMENT(longitude,latitude,nomM,proprietaire,typeMonument,codeLieu) values (3.839030556,43.63322222,'CHATEAU D''O','etat','chateau','34172');
insert into MONUMENT(longitude,latitude,nomM,proprietaire,typeMonument,codeLieu) values (3.920041667,43.6103,'CHATEAU DE FLAUGERGUES','prive','chateau','34172');
insert into MONUMENT(longitude,latitude,nomM,proprietaire,typeMonument,codeLieu) values (3.85852,43.636014,'COLLEGE DES ECOSSAIS','etat','chateau','34172');
insert into MONUMENT(longitude,latitude,nomM,proprietaire,typeMonument,codeLieu) values (3.87431994,43.6157611,'CHAPELLE SAINT CHARLES','diocese','religieux', '34172');
insert into MONUMENT(longitude,latitude,nomM,proprietaire,typeMonument,codeLieu) values (3.88207912,43.6085507,'PLACE DE LA COMEDIE','etat','public','34172');
insert into MONUMENT(longitude,latitude,nomM,proprietaire,typeMonument,codeLieu) values (3.87917,43.61222,'NOTRE DAME DES TABLES','diocese','religieux','34172');

insert into MONUMENT values ('pez1','SQUARE MOLIERE','etat','place',null, null,'34199');
insert into MONUMENT values ('pez2','HOTEL LACOSTE','prive','immeuble',null, null,'34199');
insert into MONUMENT values ('par1','TOUR EIFFEL','etat','edifice',2.294481, 48.85837,'75056');
insert into MONUMENT values ('par2','PETIT PALAIS','etat','palais',2.31459,48.866048,'75056');
insert into MONUMENT values ('par3','GRAND PALAIS','etat','palais',2.312454,48.866109,'75056');
insert into MONUMENT values ('par4','PONT DES INVALIDES','etat','pont',2.3104,48.863097,'75056');
insert into MONUMENT values ('par5','PONT ALEXANDRE III','etat','pont',2.313559,48.863899,'75056');
insert into MONUMENT values ('par6','PLACE DE LA CONCORDE','etat','place',2.321236,48.865633,'75056');
insert into MONUMENT values ('par7','ARC DE TRIOMPHE','etat','edifice',2.295028,48.873792,'75056');
insert into MONUMENT values ('par8','PLACE DENFERT-ROCHEREAU','etat','place',2.3326907,48.8341441,'75056');
insert into MONUMENT values ('par9','JARDIN DU TROCADERO','etat','jardin',2.289282,48.861596,'75056');
insert into MONUMENT values ('par10','PONT NEUF','etat','pont',2.341325,48.85705,'75056');



insert into Celebrite values (1 ,'POQUELIN','JEAN-BAPTISTE', 'FRANCE','');
insert into Celebrite values (2 ,'INJALBERT','JEAN-ANTOINE', 'FRANCE','');


insert into AssocieA values(1, 'pez1');
insert into AssocieA values(2, 'pez1');


