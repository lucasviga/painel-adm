select * from apriam.users;
select * from apriam.noticias;

select
n.id,
-- n.user_id,
users.name as Autor,
n.titulo,
n.subtitulo,
n.created_At
from apriam.noticias n
inner join users on users.id = n.user_id;

