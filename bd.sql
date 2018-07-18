
CREATE TABLE usuarios (
  id INT AUTO_INCREMENT NOT NULL,
  nome VARCHAR(140),
  email VARCHAR(100),
  senha VARCHAR(40),
  PRIMARY KEY(id)
);

INSERT INTO usuarios (nome, email, senha) VALUES ('elvis', 'elvis@gmail.com', '1990');


CREATE TABLE produtos(
  id INT AUTO_INCREMENT,
  nomeP VARCHAR(140),
  categP VARCHAR(80),
  descriP VARCHAR(250),
  PRIMARY KEY(id)
);