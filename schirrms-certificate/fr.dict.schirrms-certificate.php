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
	'Class:Certificate/Attribute:status' => 'État',
	'Class:Certificate/Attribute:status/Value:active' => 'Actif',
	'Class:Certificate/Attribute:status/Value:inactive' => 'Inactif',
	'Class:Certificate/Attribute:description' => 'Description',
	'Class:Certificate/Attribute:provider_name' => 'Nom du certificat parent',
	'Class:Certificate/Attribute:provider_org' => 'Organisation qui a émis le certificat',
	'Class:Certificate/Attribute:serial_number' => 'Numéro de série du certificat',
	'Class:Certificate/Attribute:serial_number+' => 'Valeur du n° de série en hexa sous la forme \'01:23:45:67:89:ab:cd:ef\'',
	'Class:Certificate/Attribute:delivery_date' => 'Date d\'émission du certificat',
	'Class:Certificate/Attribute:expiration_date' => 'Date d\'expiration du certificat',
	'Class:Certificate/Attribute:san' => 'Autres noms de l\'objet du certificat',
	'Class:Certificate/Attribute:unknown_cis' => 'CIs utilisant ce certificat non trouvés dans iTop',
	'Class:Certificate/Attribute:comment' => 'Commentaires',
	'Class:Certificate/Attribute:contacts_list' => 'Contacts',
	'Class:Certificate/Attribute:functionalcis_list' => 'CIs avec ce certificat',
	'Class:Certificate/UniquenessRule:serial_number' => 'Le n° de série doit être unique. Un certificat existant dispose déjà de ce n° de série',
	'Class:lnkCertificateToContact' => 'Lien Certificat / Contact',
	'Class:lnkCertificateToContact/Attribute:certificate_id' => 'Certificat',
	'Class:lnkCertificateToContact/Attribute:contact_id' => 'Contact',
	'Class:lnkCertificateToFunctionalCI' => 'Lien Certificat / CI Fonctionel',
	'Class:lnkCertificateToFunctionalCI/Attribute:certificate_id' => 'Certificat',
	'Class:lnkCertificateToFunctionalCI/Attribute:functionalci_id' => 'CI',
	'Class:lnkCertificateToFunctionalCI/Attribute:url' => 'URL : Uniform Resource Locator',
	'Class:lnkCertificateToFunctionalCI/Attribute:url+' => 'Les URLs utilisées pour se connecter sous la forme {host}:{port}',
	'Class:lnkCertificateToFunctionalCI/Attribute:ip' => 'Adresse IP du CI',
	'Class:lnkCertificateToFunctionalCI/Attribute:ip+' => 'Adresse IP du CI au moment moment de la mise à jour. À titre d\'information',
	'Class:lnkCertificateToFunctionalCI/Attribute:comment' => 'Commentaire',
	'Class:FunctionalCI/Attribute:certificates_list' => 'Certificat(s) SSL',
	'UI:datewithremainingdays_days' => ' %1$d jour(s) restant(s) ',
	'UI:datewithremainingdays_latedays' => ' Expiré depuis %1$d jour(s) ',
));
?>
