/*
update consultoras c set
c.avatar = replace(c.avatar, 'http://', 'https://');

update cursos c set
c.background_img = replace(c.background_img, 'http://', 'https://'),
c.card = replace(c.card, 'http://', 'https://'),
c.ementa = replace(c.ementa, 'http://', 'https://'),
c.contrato_curso = replace(c.contrato_curso, 'http://', 'https://');

update depoimentos d set
d.avatar = replace(d.avatar, 'http://', 'https://');

update materials m set
m.arquivo = replace(m.arquivo, 'http://', 'https://');

update modulos m set
m.card = replace(m.card, 'http://', 'https://');

update agendas a set
a.avatar = replace(a.avatar, 'http://', 'https://');

update alunos a set
a.avatar = replace(a.avatar, 'http://', 'https://');

update professors p set
p.avatar = replace(p.avatar, 'http://', 'https://');

update administradors a set
a.avatar = replace(a.avatar, 'http://', 'https://');
*/

update cursos
c.background_img = replace(c.background_img, 'https://br356.teste.website/~ecole378/ecolebrasil.com/public/', 'https://ecolebrasil.com/'),
c.card = replace(c.card, 'https://br356.teste.website/~ecole378/ecolebrasil.com/public/', 'https://ecolebrasil.com/'),
c.ementa = replace(c.ementa, 'https://br356.teste.website/~ecole378/ecolebrasil.com/public/', 'https://ecolebrasil.com/'),
c.contrato_curso = replace(c.contrato_curso, 'https://br356.teste.website/~ecole378/ecolebrasil.com/public/', 'https://ecolebrasil.com/');

update consultoras c set
c.avatar = replace(c.avatar, 'https://br356.teste.website/~ecole378/ecolebrasil.com/public/', 'https://ecolebrasil.com/');

update depoimentos d set
d.avatar = replace(d.avatar, 'https://br356.teste.website/~ecole378/ecolebrasil.com/public/', 'https://ecolebrasil.com/');

update materials m set
m.arquivo = replace(m.arquivo, 'https://br356.teste.website/~ecole378/ecolebrasil.com/public/', 'https://ecolebrasil.com/');

update modulos m set
m.card = replace(m.card, 'https://br356.teste.website/~ecole378/ecolebrasil.com/public/', 'https://ecolebrasil.com/');

update agendas a set
a.avatar = replace(a.avatar, 'https://br356.teste.website/~ecole378/ecolebrasil.com/public/', 'https://ecolebrasil.com/');

update alunos a set
a.avatar = replace(a.avatar, 'https://br356.teste.website/~ecole378/ecolebrasil.com/public/', 'https://ecolebrasil.com/');

update professors p set
p.avatar = replace(p.avatar, 'https://br356.teste.website/~ecole378/ecolebrasil.com/public/', 'https://ecolebrasil.com/');

update administradors a set
a.avatar = replace(a.avatar, 'https://br356.teste.website/~ecole378/ecolebrasil.com/public/', 'https://ecolebrasil.com/');