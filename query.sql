select * from apriam.users;
select * from apriam.noticias;

select
n.id,
-- n.user_id,
users.name as autor,
n.titulo,
n.subtitulo,
n.imagem,
n.created_At
from apriam.noticias n
inner join users on users.id = n.user_id  where users.name like '%'
order by users.id desc;

select count(*) from noticias;
