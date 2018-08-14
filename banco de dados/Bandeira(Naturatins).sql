
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
FOREIGN KEY (id_unidade_usuario) REFERENCES unidade(id_unidade)
);

CREATE TABLE animal(
id_animal INT NOT NULL AUTO_INCREMENT,
categoria VARCHAR(36),
PRIMARY KEY (id_animal)
);



CREATE TABLE recebimentos(
identificacao_taxonomica INT NOT NULL AUTO_INCREMENT,
data_recebimento DATE NOT NULL ,
-- endereco_instituicao VARCHAR(36) NOT NULL,
-- telefone_instituicao VARCHAR(14) NOT NULL ,
-- municipio_uf_instituicao VARCHAR(36) NOT NULL ,
-- cep_instituicao INT(8) NOT NULL,
nome_resp_entrega VARCHAR(36) NOT NULL ,
cpf_resp_entrega CHAR(14) NOT NULL,
matricula_resp_entrega INT(64) NOT NULL ,
nome_procedencia VARCHAR(36) NOT NULL,
uf_municipio_procedencia VARCHAR(36) NOT NULL ,
residencia_procedencia VARCHAR(36),
local_procedencia VARCHAR(36),
deposito_procedencia VARCHAR(36),
dieta VARCHAR(36),
tempo_cativeiro VARCHAR(36),
-- id_atuador INT NOT NULL,
id_unidade_recebimento INT NOT NULL,
PRIMARY KEY (identificacao_taxonomica),
FOREIGN KEY (id_unidade_recebimento) REFERENCES unidade (id_unidade)
-- FOREIGN KEY (id_atuador) REFERENCES atuador(id_atuador)
);

CREATE TABLE atuador(
 id_atuador INT NOT NULL AUTO_INCREMENT,
 nome_atuador VARCHAR(36),
 cpf_cnpj_atuador CHAR(18),
 telefone_atuador VARCHAR(16),
 endereco_atuador VARCHAR(36),
 municipio_uf_atuador VARCHAR(36),
 cep_atuador INT(8),
 datta date,
 auto_infracao_numero varchar(200),
 boletim_ocorrencia_numero INT,
 identificacao_taxonomica INT NOT NULL,
 PRIMARY KEY (id_atuador),
 FOREIGN KEY (identificacao_taxonomica) REFERENCES recebimentos (identificacao_taxonomica)
 );

CREATE TABLE triagem(
id_triagem INT NOT NULL AUTO_INCREMENT,
marcacao_individual VARCHAR(64) NOT NULL ,
nome_avaliador varchar(64)  NOT NULL,
identificacao_taxonomica INT NOT NULL,
id_animal INT NOT NULL,
id_unidade INT NOT NULL,
PRIMARY KEY (id_triagem),
FOREIGN KEY (identificacao_taxonomica) REFERENCES recebimentos(identificacao_taxonomica),
FOREIGN KEY (id_animal) REFERENCES animal(id_animal),
FOREIGN KEY (id_unidade) REFERENCES unidade(id_unidade)
);                        /*criar chave estrageira aqui da tabela recebimentos identificação taxonomica*/

CREATE TABLE avaliacao(
  id_avaliacao INT NOT NUlL AUTO_INCREMENT,
  especie_avaliacao VARCHAR(64) NOT NULL ,
  marcacao_indv_tipo VARCHAR(64) NOT NULL ,
  marcacao_indv_localizacao VARCHAR(32) NOT NULL,
  marcacao_indv_numeracao VARCHAR(32),
  marcacao_indv_sexagem VARCHAR(32),
  marcacao_indv_historico VARCHAR(32),
  marcacao_indv_anamnese VARCHAR(32),
  avaliacao_compormental TEXT NOT NULL ,
  exames_arquivo varchar(200),
  status_animal INT NOT NULL,
  identificacao_taxonomica_ava INT NOT NULL,
  PRIMARY KEY (id_avaliacao),
  FOREIGN KEY (identificacao_taxonomica_ava) REFERENCES recebimentos(identificacao_taxonomica)
  );

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
 observacao_adicional VARCHAR(64),
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


  INSERT INTO tipo_servidor (id_tipo_servidor, descricao_tipo_servidor) VALUES
  ('1','Funcionário' ),
  ('2','Gerente' ),
  ('3','Administrador' );


  INSERT INTO animal (id_animal, categoria) VALUES
  ('1','Invertebrados' ),
  ('2','Peixes' ),
  ('3','Anfíbios' ),
  ('4','Répteis' ),
  ('5','Aves' ),
  ('6','Mamíferos' ),
  ('7','Híbridos' ),
  ('8','Exóticos' );

  INSERT INTO `unidade` (`id_unidade`, `cnpj_unidade`, `nome_unidade`, `endereco_unidade`, `municipio_unidade`, `telefone_unidade`, `nome_responsavel`, `formacao_responsavel`, `fax_unidade`, `estado_unidade`, `cep_unidade`) VALUES
  (1, '550213546', 'Unidade Praia Azul', 'Rua em algum lugar', 'Paraiso', '6333336245', 'João Ferreira', 'Tec. Info', '6336257854', 'Tocantins', 77023028),
  (2, '996587545', 'Unidade Serra Amazonica', 'Avenida da praia', 'Palmas', '6332654774', 'Micauane', 'Superior em Admistração', '6332541252', 'Tocantins', 77123625),
  (3, '213654587', 'Unidade Salva Vidas', 'Rua: 13 de Maio', 'Porto Nacional', '6336521478', 'Luan Guimarães', 'Básico', '6332654785', 'Tocantins', 77500000);

  INSERT INTO `servidor` (`id_servidor`, `cpf_usuario`, `nome_usuario`, `formacao_usuario`, `email_usuario`, `endereco_usuario`, `cidade_usuario`, `estado_usuario`, `telefone_usuario`, `id_tipo_servidor`, `senha`, `id_unidade_usuario`) VALUES
  (1, '02523652044', 'Bianca Ferreira', 'Superior Contabilidade', 'biabia@bia.com', 'Rua alguma coisa coisa', 'Palmas', 'Tocantinss', '6399999999', 3, '15de21c670ae7c3f6f3f1f37029303c9', 2),
  (2, '02834000131', 'Luan G Moraes', 'Noob', 'luanrufo@gmail.com', '804 Sul Alameda 2 Lote 54', 'Palmas', 'TO', '63992604920', 3, 'e10adc3949ba59abbe56e057f20f883e', 1),
  (3, '03663225187', 'Nani', 'Noob', 'luan.guimaraes@live.com', 'Rua: 13 de Maio, Porto Imperial', 'Porto Nacional', 'TO', '63992604928', 1, '202cb962ac59075b964b07152d234b70', 1),
  (4, '05053916195', 'Micauane Oliveira Sousa', 'Básico', 'micauaneoliveira@gmail.com', '504 sul alameda 8', 'Palmas', 'Tocantins', '6384086002', 3, '202cb962ac59075b964b07152d234b70', 2);

  INSERT INTO `recebimentos` (`identificacao_taxonomica`, `data_recebimento`, `nome_resp_entrega`, `cpf_resp_entrega`, `matricula_resp_entrega`, `nome_procedencia`, `uf_municipio_procedencia`, `residencia_procedencia`, `local_procedencia`, `deposito_procedencia`, `dieta`, `tempo_cativeiro`, `id_unidade_recebimento`) VALUES
  (1, '2018-01-10', 'Luan G Moraes', '02834000131', 501214, 'Testando', 'Palmas-TO', 'Testando', 'Centro', 'Testando', 'Arroz', '1 ano', 2),
  (2, '2018-05-16', 'Mauro G Medrado', '02834000131', 787556, 'Roubo de animais', 'Porto-TO', 'Algum', 'Indisponível', 'Não sei', 'Carne', '6 meses', 3);

  INSERT INTO `atuador` (`id_atuador`, `nome_atuador`, `cpf_cnpj_atuador`, `telefone_atuador`, `endereco_atuador`, `municipio_uf_atuador`, `cep_atuador`, `datta`, `auto_infracao_numero`, `boletim_ocorrencia_numero`, `identificacao_taxonomica`) VALUES
  (1, 'Rogério Silva', '20156874511', '6332544789', 'Rua: 13 de Maio', 'Porto', 77500000, '2018-01-12', '547', 1022547803, 1),
  (2, 'José Augusto', '23654785445', '', '', '', 0, '0000-00-00', '', 0, 2);

  INSERT INTO `classicicacao_animal` (`id_cativeiro`, `nome_comum`, `nome_cientifico`, `quantidade`, `observacao_adicional`, `marcacao_individual`, `id_atuador`, `identificacao_taxonomica`) VALUES
  (1, 'Gato do Mato', 'Leopardus tigrinus', 1, 'Cuidado que eles mordem', '365548', 1, 1),
  (2, 'Cachorro', 'Canis lupus familiaris', 2, 'Não comem', '5848', 2, 2);

  INSERT INTO `triagem` (`id_triagem`, `marcacao_individual`, `nome_avaliador`, `identificacao_taxonomica`, `id_animal`, `id_unidade`) VALUES
  (1, '5455', 'Luan G Moraes', 1, 6, 1);

  INSERT INTO `avaliacao` (`id_avaliacao`, `especie_avaliacao`, `marcacao_indv_tipo`, `marcacao_indv_localizacao`, `marcacao_indv_numeracao`, `marcacao_indv_sexagem`, `marcacao_indv_historico`, `marcacao_indv_anamnese`, `avaliacao_compormental`, `exames_arquivo`, `status_animal`, `identificacao_taxonomica_ava`) VALUES
  (1, 'L. tigrinus', '45', '5478845555525', '25545856', 'M', '5878', '5446', 'Gato maluco.', NULL, 1, 1);
