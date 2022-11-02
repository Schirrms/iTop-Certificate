<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2022 Schirrms
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('FR FR', 'French', 'Français', array(
	// Dictionary entries go here
	'Class:Certificate' => 'Certificat',
	'Class:Certificate/Attribute:name' => 'Nom du certificat',
	'Class:Certificate/Attribute:org_id' => 'Organisation',
	'Class:Certificate/Attribute:description' => 'Description',
	'Class:Certificate/Attribute:provider_name' => 'Nom du certificat parent',
	'Class:Certificate/Attribute:provider_org' => 'Organization qui a émis le certificat',
	'Class:Certificate/Attribute:delivery_date' => 'Date d\'émission du certificat',
	'Class:Certificate/Attribute:expiration_date' => 'Date d\'expiration du certificat',
	'Class:Certificate/Attribute:san' => 'Autres noms de l\'objet du certificat',
	'Class:Certificate/Attribute:comment' => 'Commentaires',
	'UI:datewithremainingdays_days' => ' %1$d jour(s) restant(s) ',
	'UI:datewithremainingdays_latedays' => ' Expiré depuis %1$d jour(s) ',
));
?>
