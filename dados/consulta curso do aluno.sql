select cursos.nome as curso_nome, alunos.nome as aluno_nome, agendas.* from alunos
left join aluno_agendas on alunos.id = aluno_agendas.aluno_id
left join agendas on aluno_agendas.agenda_id = agendas.id
left join cursos on agendas.curso_id = cursos.id
where alunos.id = 100