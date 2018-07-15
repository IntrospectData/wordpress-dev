update wp_options
set option_value = 'http://localhost:8080'
where option_name = 'siteurl';

update wp_options
set option_value = 'http://localhost:8080'
where option_name = 'home';

set @admin_user_id = (select max(ID) from wp_users) + 1;

/** password is P@ssword! */
INSERT INTO `wp_users` VALUES (@admin_user_id,'local-admin','$P$Bk3EU.emlQW3vA32AFCfee64/V3Lxn/','local-admin','dev@introspectdata.com','','2018-07-14 20:45:21','',0,'Local Admin');

INSERT INTO wp_usermeta (user_id, meta_key, meta_value) VALUES (@admin_user_id,'nickname','local-admin'),(@admin_user_id,'first_name','Local'),(@admin_user_id,'last_name','Admin'),(@admin_user_id,'description',''),(@admin_user_id,'rich_editing','true'),(@admin_user_id,'syntax_highlighting','true'),(@admin_user_id,'comment_shortcuts','false'),(@admin_user_id,'admin_color','fresh'),(@admin_user_id,'use_ssl','0'),(@admin_user_id,'show_admin_bar_front','true'),(@admin_user_id,'locale',''),(@admin_user_id,'wp_capabilities','a:1:{s:13:\"administrator\";b:1;}'),(@admin_user_id,'wp_user_level','10'),(@admin_user_id,'dismissed_wp_pointers','wp496_privacy');

update wp_options set option_value='Twenty Seventeen' where option_name = 'current_theme';
