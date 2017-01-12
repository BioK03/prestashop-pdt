DROP TABLE IF EXISTS `ps_tmmegamenu_html_lang`;
CREATE TABLE `ps_tmmegamenu_html_lang` (
  `id_item` int(10) unsigned NOT NULL,
  `id_lang` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id_item`,`id_lang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/* Scheme for table ps_tmmegamenu_html_lang */
INSERT INTO `ps_tmmegamenu_html_lang` VALUES
('1','1','Custom_block1','<h4>About</h4>\r\n<h5>Catering to your requirements, handling your needs with care</h5>\r\n<p>Our store is more than just another average online retailer. We sell not only top quality products, but give our customers a positive online shopping experience. Forget about struggling to do everything at once: taking care of the family, running your business, walking your dog.</p>'),
('1','2','Custom_block1','<h4>About</h4>\r\n<h5>Catering to your requirements, handling your needs with care</h5>\r\n<p>Our store is more than just another average online retailer. We sell not only top quality products, but give our customers a positive online shopping experience. Forget about struggling to do everything at once: taking care of the family, running your business, walking your dog.</p>'),
('1','3','Custom_block1','<h4>About</h4>\r\n<h5>Catering to your requirements, handling your needs with care</h5>\r\n<p>Our store is more than just another average online retailer. We sell not only top quality products, but give our customers a positive online shopping experience. Forget about struggling to do everything at once: taking care of the family, running your business, walking your dog.</p>'),
('1','4','Custom_block1','<h4>About</h4>\r\n<h5>Catering to your requirements, handling your needs with care</h5>\r\n<p>Our store is more than just another average online retailer. We sell not only top quality products, but give our customers a positive online shopping experience. Forget about struggling to do everything at once: taking care of the family, running your business, walking your dog.</p>'),
('1','5','Custom_block1','<h4>About</h4>\r\n<h5>Catering to your requirements, handling your needs with care</h5>\r\n<p>Our store is more than just another average online retailer. We sell not only top quality products, but give our customers a positive online shopping experience. Forget about struggling to do everything at once: taking care of the family, running your business, walking your dog.</p>'),
('2','1','Custom_block2','<h4>OLD-FASHIONED</h4>\r\n<p><img src=\"img/cms/custom_block_img.jpg\" width=\"255\" height=\"142\" alt=\"custom_block_img.jpg\" /></p>\r\n<h5>Catering to your requirements, handling your needs with care</h5>\r\n<p>Our store is more than just another average online retailer. We sell not only top quality.</p>'),
('2','2','Castom_block2','<h4>OLD-FASHIONED</h4>\r\n<p><img src=\"img/cms/custom_block_img.jpg\" width=\"255\" height=\"142\" alt=\"custom_block_img.jpg\" /></p>\r\n<h5>Catering to your requirements, handling your needs with care</h5>\r\n<p>Our store is more than just another average online retailer. We sell not only top quality.</p>'),
('2','3','Custom_block2','<h4>OLD-FASHIONED</h4>\r\n<p><img src=\"img/cms/custom_block_img.jpg\" width=\"255\" height=\"142\" alt=\"custom_block_img.jpg\" /></p>\r\n<h5>Catering to your requirements, handling your needs with care</h5>\r\n<p>Our store is more than just another average online retailer. We sell not only top quality.</p>'),
('2','4','Castom_block2','<h4>OLD-FASHIONED</h4>\r\n<p><img src=\"img/cms/custom_block_img.jpg\" width=\"255\" height=\"142\" alt=\"custom_block_img.jpg\" /></p>\r\n<h5>Catering to your requirements, handling your needs with care</h5>\r\n<p>Our store is more than just another average online retailer. We sell not only top quality.</p>'),
('2','5','Castom_block2','<h4>OLD-FASHIONED</h4>\r\n<p><img src=\"img/cms/custom_block_img.jpg\" width=\"255\" height=\"142\" alt=\"custom_block_img.jpg\" /></p>\r\n<h5>Catering to your requirements, handling your needs with care</h5>\r\n<p>Our store is more than just another average online retailer. We sell not only top quality.</p>');
