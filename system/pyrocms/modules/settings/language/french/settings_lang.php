<?php defined('BASEPATH') OR exit('No direct script access allowed');

$lang['settings_save_success'] 					= 'Vos paramètres ont été enregistrés!';
$lang['settings_edit_title'] 					= 'Modifier les paramètres';

#section settings
$lang['settings_site_name'] 					= 'Nom du site';
$lang['settings_site_name_desc'] 				= 'Le nom du site. Ce nom sera utilisé dans le titre des pages ainsi que dans d\'autres emplacemnts';

$lang['settings_site_slogan'] 					= 'Slogan du site';
$lang['settings_site_slogan_desc'] 				= 'Le slogan du site. Ce nom sera utilisé dans le titre des pages ainsi que dans d\'autres emplacements.';

$lang['settings_contact_email'] 				= 'E-mail de contact';
$lang['settings_contact_email_desc'] 			= 'Tous les emails provenant des utilisateurs, des invités et du site seront adressés à cette adresse.';

$lang['settings_server_email'] 					= 'E-mail du serveur';
$lang['settings_server_email_desc'] 			= 'Tous les emails seront envoyés depuis le site auront pour expéditeur cette adresse email.';

$lang['settings_meta_topic']					= 'Balise Meta';
$lang['settings_meta_topic_desc']				= 'Deux ou trois mots décrivant le type de société / site web.';

$lang['settings_currency'] 						= 'Devise';
$lang['settings_currency_desc'] 				= 'Le symbole de la monnaie pour une utilisation sur les produits, services, etc.';

$lang['settings_dashboard_rss'] 				= 'Flux RSS du tableau de bord';
$lang['settings_dashboard_rss_desc'] 			= 'Lien vers un flux RSS qui sera affiché sur le tableau de bord.';

$lang['settings_dashboard_rss_count'] 			= 'Dashboard RSS Items';#translate
$lang['settings_dashboard_rss_count_desc'] 		= 'How many RSS items would you like to display on the dashboard ?';#translate

$lang['settings_date_format'] 					= 'Date Format'; #translate
$lang['settings_date_format_desc'] 				= 'How should dates be displayed accross the website and control panel? Using PHP date format.'; #translate

$lang['settings_frontend_enabled'] 				= 'Statut du site';
$lang['settings_frontend_enabled_desc'] 		= 'Utilisez cette option pour mettre en ligne ou hors ligne le site. Utile lorsque vous voulez mettre le site en maintenance.';

$lang['settings_mail_protocol'] 				= 'Mail Protocol'; #translate
$lang['settings_mail_protocol_desc'] 			= 'Select desired email protocol.'; #translate

$lang['settings_mail_sendmail_path'] 			= 'Sendmail Path'; #translate
$lang['settings_mail_sendmail_path_desc']		= 'Path to server sendmail binary.'; #translate

$lang['settings_mail_smtp_host'] 				= 'SMTP Host'; #translate
$lang['settings_mail_smtp_host_desc'] 			= 'The host name of your smtp server.'; #translate

$lang['settings_mail_smtp_pass'] 				= 'SMTP password'; #translate
$lang['settings_mail_smtp_pass_desc'] 			= 'SMTP password.'; #translate

$lang['settings_mail_smtp_port'] 				= 'SMPT Port'; #translate
$lang['settings_mail_smtp_port_desc'] 			= 'SMTP port number.'; #translate

$lang['settings_mail_smtp_user'] 				= 'SMTP User Name'; #translate
$lang['settings_mail_smtp_user_desc'] 			= 'SMTP user name.'; #translate

$lang['settings_unavailable_message']			= 'Message non disponible';
$lang['settings_unavailable_message_desc'] 		= 'Lorsque le site est en mode "hors ligne" ou s\'il ya un problème majeur, ce message sera indiqué aux utilisateurs.';

$lang['settings_default_theme'] 				= 'Thème par défaut';
$lang['settings_default_theme_desc'] 			= 'Sélectionnez le thème que vous souhaitez que les utilisateurs voie par défaut.';

$lang['settings_activation_email'] 				= 'E-mail d\'activation';
$lang['settings_activation_email_desc'] 		= 'Envoyer un e-mail quand un utilisateur s\'inscrit avec un lien d\'activation. Désactiver cette option pour laisser les admins activer les comptes.';

$lang['settings_records_per_page'] 				= 'Enregistrements par page';
$lang['settings_records_per_page_desc'] 		= 'Combien d\'enregistrements devons nous montrer par page dans la section admin?';

$lang['settings_rss_feed_items'] 				= 'Feed item count';#translate
$lang['settings_rss_feed_items_desc'] 			= 'How many items should we show in RSS/news feeds?';#translate

$lang['settings_require_lastname'] 				= 'Require last names?';#translate
$lang['settings_require_lastname_desc'] 		= 'For some situations, a last name may not be required. Do you want to force users to enter one or not?';#translate

$lang['settings_enable_profiles'] 				= 'Activer les profils';
$lang['settings_enable_profiles_desc'] 			= 'Permettre aux utilisateurs d\'ajouter et de modifier leurs profils.';

$lang['settings_ga_email'] 						= 'Google Analytic E-mail'; #translate
$lang['settings_ga_email_desc']					= 'E-mail address used for Google Analytics, we need this to show the graph on the dashboard.'; #translate

$lang['settings_ga_password'] 					= 'Google Analytic Password'; #translate
$lang['settings_ga_password_desc']				= 'Google Analytics password. This is also needed this to show the graph on the dashboard.'; #translate

$lang['settings_ga_profile'] 					= 'Google Analytic Profile'; #translate
$lang['settings_ga_profile_desc']				= 'Profile ID for this website in Google Analytics.'; #translate

$lang['settings_ga_tracking'] 					= 'Google Tracking Code'; #translate
$lang['settings_ga_tracking_desc']				= 'Enter your Google Analytic Tracking Code to activate Google Analytics view data capturing. E.g: UA-19483569-6'; #translate

$lang['settings_twitter_username'] 				= 'Nom d\'utilisateur';
$lang['settings_twitter_username_desc'] 		= 'Nom d\'utilisateur Twitter.';

$lang['settings_twitter_consumer_key'] 			= 'Consumer Key';#translate
$lang['settings_twitter_consumer_key_desc'] 	= 'Twitter consumer key.';#translate

$lang['settings_twitter_consumer_key_secret'] 	= 'Consumer Key Secret';#translate
$lang['settings_twitter_consumer_key_secret_desc'] = 'Twitter consumer key secret.';#translate

$lang['settings_twitter_news']					= 'Twitter &amp; News integration.';#translate
$lang['settings_twitter_news_desc'] 			= 'Would you like to post links to new news articles on Twitter?';#translate

$lang['settings_twitter_feed_count'] 			= 'Feed Count';#translate
$lang['settings_twitter_feed_count_desc'] 		= 'How many tweets should be returned to the Twitter feed block?';

$lang['settings_twitter_cache'] 				= 'Cache time';#translate
$lang['settings_twitter_cache_desc'] 			= 'How many minutes should your Tweets be temporairily stored for?';#translate

$lang['settings_akismet_api_key'] 				= 'Akismet API Key';#translate
$lang['settings_akismet_api_key_desc'] 			= 'Akismet is a spam-blocker from the WordPress team. It keeps spam under control without forcing users to get past human-checking CAPTCHA forms.';#translate

$lang['settings_comment_order'] 				= 'Comment Order'; #translate
$lang['settings_comment_order_desc']			= 'Sort order in which to display comments.'; #translate

$lang['settings_moderate_comments'] 			= 'Modérer les commentaires';
$lang['settings_moderate_comments_desc']		= 'Exige l\'approbation des commentaires avant leur publication sur le site.';

$lang['settings_version'] 						= 'Version';
$lang['settings_version_desc'] 					= '';

#section titles
$lang['settings_section_general']				= 'Général';
$lang['settings_section_integration']			= 'Intégration';
$lang['settings_section_comments']				= 'Comments'; #translate
$lang['settings_section_users']					= 'Utilisateurs';
$lang['settings_section_statistics']			= 'Statistiques';
$lang['settings_section_twitter']				= 'Twitter';

#checkbox and radio options
$lang['settings_form_option_Open']				= 'Ouvrir';
$lang['settings_form_option_Closed']			= 'Fermé';
$lang['settings_form_option_Enabled']			= 'Actif';
$lang['settings_form_option_Disabled']			= 'Inactif';
$lang['settings_form_option_Required']			= 'Requis';
$lang['settings_form_option_Optional']			= 'Optionnel';
$lang['settings_form_option_Oldest First']		= 'Oldest First'; #translate
$lang['settings_form_option_Newest First']		= 'Newest First'; #translate

/* End of file settings_lang.php */
/* Location: ./system/pyrocms/modules/settings/language/french/settings_lang.php */