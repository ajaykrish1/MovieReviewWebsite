 CREATE TABLE IF NOT EXISTS `user` (  
  `username` varchar(200) NOT NULL,  
  `password` varchar(200) NOT NULL, 
  PRIMARY KEY (`username`)  
 ) ;
  CREATE TABLE IF NOT EXISTS `movies` (  
  `id` int(11) NOT NULL AUTO_INCREMENT,  
  `name` blob NOT NULL,  
  `movie_name` varchar(200) NOT NULL,  
  `review` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,  
  `rating` varchar(200) NOT NULL, 
  PRIMARY KEY (`id`)  
 ) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;