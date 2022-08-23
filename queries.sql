-- 1
select id, text
from goods
where id in (select distinct good_id from goods_tags)


-- 2
select distinct department_id
from evaluations
where gender = 1
  and value > 5

