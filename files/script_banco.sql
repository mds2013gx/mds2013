CREATE TABLE regiao_administrativa (
  id_regiao_administrativa INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_regiao INTEGER UNSIGNED NULL,
  PRIMARY KEY(id_regiao_administrativa)
);

CREATE TABLE tempo (
  id_tempo INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  intervalo INTEGER UNSIGNED NULL,
  PRIMARY KEY(id_tempo)
);

CREATE TABLE categoria (
  id_categoria INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_categoria VARCHAR(100) NOT NULL,
  PRIMARY KEY(id_categoria)
);

CREATE TABLE natureza (
  id_natureza INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  categoria_id_categoria INTEGER UNSIGNED NOT NULL,
  natureza INTEGER UNSIGNED NULL,
  PRIMARY KEY(id_natureza),
  INDEX natureza_FKIndex1(categoria_id_categoria)
);

CREATE TABLE crime (
  id_crime INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  tempo_id_tempo INTEGER UNSIGNED NOT NULL,
  regiao_administrativa_id_regiao_administrativa INTEGER UNSIGNED NOT NULL,
  natureza_id_natureza INTEGER UNSIGNED NOT NULL,
  quantidade INTEGER UNSIGNED NULL,
  PRIMARY KEY(id_crime),
  INDEX crime_FKIndex1(natureza_id_natureza),
  INDEX crime_FKIndex2(regiao_administrativa_id_regiao_administrativa),
  INDEX crime_FKIndex4(tempo_id_tempo)
);


