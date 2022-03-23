
SELECT post_date,post_content,post_title, display_name,cat_descr FROM `blog_posts` 
INNER JOIN blog_users
ON post_author=ID
INNER JOIN blog_categories
ON post_category =cat_id


SELECT post_date,post_content, post_title, display_name,cat_descr 
FROM blog_posts 
INNER JOIN blog_users
ON post_author = ID
INNER JOIN blog_categories
ON post_category = cat_id
WHERE post_ID = " .$_GET['article']