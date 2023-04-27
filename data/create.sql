CREATE DATABASE IF NOT EXISTS mydatabase;
USE mydatabase;

DROP TABLE IF EXISTS banner_show_stat;

CREATE TABLE banner_show_stat (
       id INT(11) NOT NULL AUTO_INCREMENT,
       ip_address VARCHAR(50) NOT NULL,
       user_agent VARCHAR(255) NOT NULL,
       view_date DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
       page_url VARCHAR(255) NOT NULL,
       views_count INT(11) NOT NULL DEFAULT 0,
       PRIMARY KEY (id),
       UNIQUE INDEX (ip_address, user_agent, page_url)
);
