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
	'Class:Certificate/Attribute:serial_number+' => 'Valeur du n° de série en hexa sans les \':\'',
	'Class:Certificate/Attribute:delivery_date' => 'Date d\'émission du certificat',
	'Class:Certificate/Attribute:expiration_date' => 'Date d\'expiration du certificat',
	'Class:Certificate/Attribute:san' => 'Autres noms de l\'objet du certificat',
	'Class:Certificate/Attribute:unknown_cis' => 'CI utilisant ce certificat non trouvés dans iTop',
	'Class:Certificate/Attribute:comment' => 'Commentaires',
	'Class:Certificate/UniquenessRule:serial_number' => 'Le n° de série doit être unique. Un certificat existant dispose déjà de ce n° de série',
	'Class:lnkCertificateToContact' => 'Contacts pour le certificat',
	'Class:lnkCertificateToContact/Attribute:certificate_id' => 'Certificat',
	'Class:lnkCertificateToContact/Attribute:contact_id' => 'Contact',
	'Class:lnkCertificateToFunctionalCI' => 'CI utilisant ce certificat',
	'Class:lnkCertificateToFunctionalCI/Attribute:certificate_id' => 'Certificat',
	'Class:lnkCertificateToFunctionalCI/Attribute:functionalci_id' => 'CI',
	'Class:lnkCertificateToFunctionalCI/Attribute:url' => 'URL : Uniform Resource Locator',
	'Class:lnkCertificateToFunctionalCI/Attribute:port' => 'Port d\'écoute sur le CI',
	'Class:lnkCertificateToFunctionalCI/Attribute:ip' => 'Adresse IP du CI',
	'Class:lnkCertificateToFunctionalCI/Attribute:ip+' => 'Adresse IP du CI au moment moment de la mise à jour. À titre d\'information',
	'Class:lnkCertificateToFunctionalCI/Attribute:comment' => 'Commentaire',
	'UI:datewithremainingdays_days' => ' %1$d jour(s) restant(s) ',
	'UI:datewithremainingdays_latedays' => ' Expiré depuis %1$d jour(s) ',
));
?>
