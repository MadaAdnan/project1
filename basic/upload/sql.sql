insert into `users` (`name`,`email`) values ('ahmad','ali@gmail.com'),('ali','ahmad@gmail.com');

update `users` set `name`='ali' where `id`=5;

delete from `users` where `id`=4;

select * from `users`;

select `name`,`id` from `users`;

select * from `users` where `name`='ali';

select distinct `name` from `users` ;

select * from `users` where `id`=5 and `name`='ali';

select * from `users` where `name`='ali' order by `id` desc  limit 1;
select count(`name`) as 'numbers'  from `users`;
select `id` as 'No',`name` as 'Full Name' from `users`;
select sum(`id`) as 'sum'  from `users`;
select avg(`id`) as 'avg'  from `users`;

select * from `orders` where `product`='apple' and `date` BETWEEN '2023-07-01' and '2023-07-05'; 

select sum(price) as 'total' from `orders` where `product`='apple' and `date` BETWEEN '2023-07-01' and '2023-07-05'; 

select min(price) as 'min' from `orders`;

select max(price) as 'min' from `orders`;

SELECT concat(`product`,'-',`price`) FROM `orders`;

SELECT * FROM `tasks` WHERE `status` is not null; 
SELECT * FROM `tasks` WHERE `status` is null; 

select * from projects INNER JOIN tasks on tasks.project_id=projects.id where projects.id=1; 

select `projects`.`id`,`projects`.`name`,`tasks`.`name`,`tasks`.`status` from projects INNER JOIN tasks on tasks.project_id=projects.id where projects.id=1; 

select `tasks`.*,`users`.`name` from `tasks` 
INNER JOIN `user_task` on `tasks`.`id`=`user_task`.`task_id`
INNER JOIN `users` on `users`.`id`=`user_task`.`user_id`
where `project_id`=1;



select `tasks`.*,`users`.`name` , `projects`.`name` from `tasks` 
INNER JOIN `user_task` on `tasks`.`id`=`user_task`.`task_id`
INNER JOIN `users` on `users`.`id`=`user_task`.`user_id`
INNER JOIN `projects` on `tasks`.`project_id`=`projects`.`id`
where `project_id`=1; 
