
CREATE DATABASE bandeira;
USE bandeira;

CREATE TABLE tipo_servidor(
id_tipo_servidor INT NOT NULL AUTO_INCREMENT,
descricao_tipo_servidor VARCHAR(48),
PRIMARY KEY (id_tipo_servidor)
);

 CREATE TABLE unidade(
 id_unidade INT NOT NULL AUTO_INCREMENT,
 cnpj_unidade VARCHAR(14) NOT NULL,
 nome_unidade VARCHAR(76) NOT NULL,
 endereco_unidade VARCHAR(36) NOT NULL ,
 municipio_unidade VARCHAR(36) NOT NULL ,
 estado_unidade VARCHAR(36) NOT NULL,
 telefone_unidade VARCHAR(14) NOT NULL ,
 nome_responsavel VARCHAR(64) NOT NULL,
 formacao_responsavel VARCHAR(88) NOT NULL,
 fax_unidade VARCHAR(14),
 cep_unidade INT(8) NOT NULL ,
 PRIMARY KEY (id_unidade)
 );

 CREATE TABLE servidor(
id_servidor INT NOT NULL AUTO_INCREMENT,
cpf_usuario VARCHAR(11) NOT NULL,
nome_usuario VARCHAR(64) NOT NULL ,
formacao_usuario VARCHAR(88),
email_usuario VARCHAR(76) NOT NULL ,
endereco_usuario VARCHAR(36),
cidade_usuario VARCHAR(36),
estado_usuario VARCHAR(36),
telefone_usuario VARCHAR(14),
id_tipo_servidor INT NOT NULL,
senha VARCHAR(50) NOT NULL,
id_unidade_usuario INT NOT NULL,
PRIMARY KEY (id_servidor),
FOREIGN KEY (id_tipo_servidor) REFERENCES tipo_servidor(id_tipo_servidor),
FOREIGN KEY (id_unidade) REFERENCES unidade(id_unidade)
);

CREATE TABLE animal(
id_animal INT NOT NULL AUTO_INCREMENT,
categoria VARCHAR(36),
PRIMARY KEY (id_animal)
);

CREATE TABLE avaliacao(
  id_avaliacao INT NOT NUlL AUTO_INCREMENT,
  especie_avaliacao VARCHAR(64) NOT NULL ,
  marcacao_indv_tipo VARCHAR(64) NOT NULL ,
  marcacao_indv_localizacao VARCHAR(32) NOT NULL,
  marcacao_indv_numeracao VARCHAR(32),
  marcacao_indv_sexagem VARCHAR(32),
  marcacao_indv_historico VARCHAR(32),
  marcacao_indv_anamnese VARCHAR(32),
  avaliacao_compormental VARCHAR(102) NOT NULL ,
  exames_arquivo varchar(200) NOT NULL ,

  PRIMARY KEY (id_avaliacao)
  );

CREATE TABLE atuador(
 id_atuador INT NOT NULL AUTO_INCREMENT,
 nome_atuador VARCHAR(36),
 cpf_cnpj_atuador CHAR(18),
 telefone_atuador VARCHAR(16),
 endereco_atuador VARCHAR(36),
 munucipio_uf_atuador VARCHAR(36),
 cep_atuador INT(8),
 datta date,
 auto_infracao_numero varchar(200),
 boletim_ocorrencia_numero INT,
 PRIMARY KEY (id_atuador)
 );

CREATE TABLE recebimentos(
identificacao_taxonomica INT NOT NULL AUTO_INCREMENT,
data_recebimento DATE NOT NULL ,
nome_instituicao VARCHAR(64) NOT NULL ,
endereco_instituicao VARCHAR(36) NOT NULL,
telefone_instituicao VARCHAR(14) NOT NULL ,
municipio_uf_instituicao VARCHAR(36) NOT NULL ,
cep_instituicao INT(8) NOT NULL,
nome_resp_entrega VARCHAR(36) NOT NULL ,
cpf_resp_entrega CHAR(14) NOT NULL,
matricula_resp_entrega INT(64) NOT NULL ,
nome_procedencia VARCHAR(36) NOT NULL,
uf_municipio_procedencia VARCHAR(36) NOT NULL ,
residencia_procedencia VARCHAR(36),
local_procedencia VARCHAR(36),
deposito_proedencia VARCHAR(36),
dieta VARCHAR(36),
tempo_cativeiro VARCHAR(36),
id_atuador INT NOT NULL,
PRIMARY KEY (identificacao_taxonomica),
FOREIGN KEY (id_atuador) REFERENCES atuador(id_atuador)
);

CREATE TABLE triagem(
id_triagem INT NOT NULL AUTO_INCREMENT,
marcacao_individual VARCHAR(64) NOT NULL ,
nome_avaliador varchar(64)  NOT NULL,
id_avaliacao INT NOT NUlL,
identificacao_taxonomica INT NOT NULL,
PRIMARY KEY (id_triagem),
FOREIGN KEY (id_avaliacao) REFERENCES avaliacao(id_avaliacao),
FOREIGN KEY (identificacao_taxonomica) REFERENCES recebimentos(identificacao_taxonomica)
);                        /*criar chave estrageira aqui da tabela recebimentos identificação taxonomica*/

CREATE TABLE procedimento(
id_procedimento INT NOT NULL AUTO_INCREMENT,
id_unidade INT NOT NULL,
id_triagem INT NOT NULL,
id_animal INT NOT NULL ,
PRIMARY KEY (id_procedimento),
FOREIGN KEY (id_unidade) REFERENCES unidade(id_unidade),
FOREIGN KEY (id_triagem) REFERENCES triagem(id_triagem),
FOREIGN KEY (id_animal) REFERENCES animal(id_animal)
);


 CREATE TABLE classicicacao_animal(
 id_cativeiro INT NOT NULL AUTO_INCREMENT,
 nome_comum VARCHAR(36),
 nome_cientifico VARCHAR(64) NOT NULL,
 quantidade INT,
 observacao_adicionail VARCHAR(64),
 marcacao_individual VARCHAR(36) NOT NULL,
 id_atuador INT NOT NULL,
 identificacao_taxonomica INT NOT NULL,
 PRIMARY KEY (id_cativeiro),
 FOREIGN KEY (identificacao_taxonomica) REFERENCES recebimentos(identificacao_taxonomica)
 );




 CREATE TABLE cativeiro(
 id_cativeiro INT NOT NULL AUTO_INCREMENT,
 ambientacao_recintos VARCHAR(200),
 adequacao_recinto VARCHAR(200),
 desidade_opcupacional_recinto VARCHAR(200),
 pareamento VARCHAR(200),
 projeto_conservacao VARCHAR(200),
 projeto_pesquisa  varchar(100), /*arquivo */
 empreendimento_area VARCHAR(200),
 formacao_planetal varchar(200),
 realizacao_projeto_estudantil  varchar(100), /*arquivo */
 existencia_solicitacao_previa  varchar(100), /*arquivo */
 especi_nao_recebida varchar(200),
 numero_termo_etrada int,
 dado_clinico  varchar(100), /*arquivo */
 anasile_laboritorial  varchar(100), /*arquivo */
 tratamento varchar(200),
 ficha_avaliacao  varchar(100), /*arquivo */
 ficha_necropsia  varchar(100), /*arquivo */
 id_avaliacao INT NOT NUlL,
 PRIMARY KEY (id_cativeiro),
 FOREIGN KEY (id_avaliacao) REFERENCES avaliacao(id_avaliacao)
 );

  CREATE TABLE reabilitacao(
  id_reabilitacao INT NOT NULL AUTO_INCREMENT,
  avaliacao_comportamental VARCHAR(200),
  testes_de_humanizacao VARCHAR(200),
  teste_compor_natural VARCHAR(200),
  sociedade VARCHAR(200),
  expressao_comportamental VARCHAR(200),
  experiencia VARCHAR(200),
  observacoes_para_soltura VARCHAR(200),
  numero_termo_etrada INT,
  dado_clinico  varchar(100), /*arquivo */
  anasile_laboritorial  varchar(100), /*arquivo */
  tratamento  varchar(100), /*arquivo */
  ficha_avaliacao  varchar(100), /*arquivo */
  ficha_necropsia  varchar(100), /*arquivo */
  id_avaliacao INT NOT NUlL,
  PRIMARY KEY (id_reabilitacao),
  FOREIGN KEY (id_avaliacao) REFERENCES avaliacao(id_avaliacao)
  );

  CREATE TABLE area_soltura(
  id_soltura INT NOT NULL AUTO_INCREMENT,
  nome_proprietario VARCHAR(46),
  endereco_proprietario VARCHAR(36),
  telefone_proprietario VARCHAR(16),
  email_proprietario VARCHAR(100),
  documentacao  varchar(100), /*arquivo */
  numero_termo_etrada INT,
  dado_clinico  varchar(100), /*arquivo */
  anasile_laboritorial  varchar(100), /*arquivo */
  tratamento VARCHAR(200),
  ficha_avaliacao  varchar(100), /*arquivo */
  ficha_necropsia  varchar(100), /*arquivo */
  id_avaliacao INT NOT NUlL,
  PRIMARY KEY (id_soltura),
  FOREIGN KEY (id_avaliacao) REFERENCES avaliacao(id_avaliacao)
  );

  CREATE TABLE obito(
  id_obito INT NOT NULL AUTO_INCREMENT,
  categoria_animal VARCHAR(64),
  descricao_obito VARCHAR(200),
  nome_istituicao VARCHAR(36),
  endereco_istituiao VARCHAR(36),
  uf_instituicao VARCHAR(36),
  numero_termo_etrada INT,
  dado_clinico  varchar(100), /*arquivo */
  anasile_laboritorial  varchar(100), /*arquivo */
  tratamento VARCHAR(200),
  ficha_avaliacao  varchar(100), /*arquivo */
  ficha_necropsia varchar(100), /*arquivo */
  id_avaliacao INT NOT NUlL,
  PRIMARY KEY (id_obito),
  FOREIGN KEY (id_avaliacao) REFERENCES avaliacao(id_avaliacao)
  );

  INSERT INTO unidade (id_unidade)
 VALUES ('0');

   INSERT INTO tipo_servidor (id_tipo_servidor, descricao_tipo_servidor)
  VALUES ('1','gerente' );

  INSERT INTO tipo_servidor (id_tipo_servidor, descricao_tipo_servidor)
  VALUES ('2','administrador' );

  INSERT INTO tipo_servidor (id_tipo_servidor, descricao_tipo_servidor)
  VALUES ('3','funcionário' );

  INSERT INTO animal (id_animal, categoria)
  VALUES ('1','Invertebradosanimal' );

  INSERT INTO animal (id_animal, categoria)
  VALUES ('2','Peixes' );

  INSERT INTO animal (id_animal, categoria)
  VALUES ('3','Anfíbios' );

  INSERT INTO animal (id_animal, categoria)
  VALUES ('4','Répteis' );

  INSERT INTO animal (id_animal, categoria)
  VALUES ('5','Aves' );

  INSERT INTO animal (id_animal, categoria)
  VALUES ('6','Mamíferos' );

  INSERT INTO animal (id_animal, categoria)
  VALUES ('7','Híbridos' );

  INSERT INTO animal (id_animal, categoria)
  VALUES ('8','Exóticos' );
