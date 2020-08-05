SELECT * FROM `shohin`; 

select shohin_mei , tanka 
from shohin;

select shohin_mei , tanka
from shohin
where tanka >= 500;

--練習4
SELECT * FROM `denpyo` WHERE `tokui_id` = '4' 

--練習5
SELECT * FROM `denpyo` WHERE `tokui_id` = '4' LIMIT 3

--練習6
SELECT * FROM `denpyo` WHERE `tokui_id` = '4' 
ORDER BY denpyo_id DESC LIMIT 3


