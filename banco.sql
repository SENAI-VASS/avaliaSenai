create table curso(
	id int(6) primary key auto_increment,
	nome varchar(60),
	codigo varchar(20),
	encerramento date
);

create table professor(
	id int(6) primary key auto_increment,
	nome varchar(60)
);

create table cursoTemProfessor(
	id int(6) primary key auto_increment,
	cursoId int(6),
	profId int(6),
	foreign key (cursoId) references curso (id),
	foreign key (profId) references professor (id)
);

create table aluno(
	id int(6) primary key auto_increment,
	matricula varchar(20),
	nome varchar(60),
	cursoId int(6),
	foreign key (cursoId) references curso (id)
);

create table avaliacaoCurso(
	id int(10) primary key auto_increment,
	cursoId int(6),
	datahora timestamp,
	cargaHoraria int(2),
	grade int(2),
	atividadesPraticas int(2),
	comentario text,
	foreign key (cursoId) references curso (id)
);

create table avaliacaoProfessor(
	id int(10) primary key auto_increment,
	profId int(6),
	cursoId int(6),
	datahora timestamp,
	pontualid	ade int(2),
	frequencia int(2),
	dominioDaDisciplina int(2),
	clarezaNaExplicacao int(2),
	habilidadeDeEstimularAlunos int(2),
	instrumentosDeAvaliacao int(2),
	comentario text,
	foreign key (profId) references profesor (id),
	foreign key (cursoid) references curso (id)
);

create table avaliacaoLaboratorio(
	id int(10) primary key auto_increment,
	cursoId int(6),
	datahora timestamp,
	acessibilidade int(2),
	espacoFisico int(2),
	limpeza int(2),
	recursos int(2),
	climatizacao int(2),
	iluminacao int(2),
	comentario text,
	foreign key (cursoId) references curso (id)
);

create table avaliacaoCantina(
	id int(10) primary key auto_increment,
	datahora timestamp,
	acessibilidade int(2),
	variedade int(2),
	precos int(2),
	atendimento int(2),
	horarioFuncionamento int(2),
	limpeza int(2),
	comentario text
);

create table avaliacaoBanheiro(
	id int(10) primary key auto_increment,
	datahora timestamp,
	acessibilidade int(2),
	limpeza int(2),
	materialHigiene int(2),
	quantidade int(2),
	comentario text
);

create table avaliacaoBiblioteca(
	id int(10) primary key auto_increment,
	datahora timestamp,
	cursoId int(6),
	acessibilidade int(2),
	acervo int(2),
	espacoFisico int(2),
	limpeza int(2),
	equipamentos int(2),
	climatizacao int(2),
	iluminacao int(2),
	comentario text,
	foreign key (cursoId) references curso (id)	
);

create table relatorioAvaliacao(
	id int(10) primary key auto_increment,
	alunoMatricula int(6),
	item varchar(60),
	dia date,
	foreign key (alunoMatricula) references aluno (matricula)
);


