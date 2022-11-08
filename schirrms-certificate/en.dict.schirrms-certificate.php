<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2022 Schirrms
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('EN US', 'English', 'English', array(
	// Dictionary entries go here
	'Class:Certificate' => 'Certificate',
	'Class:Certificate/Attribute:name' => 'Certificate Subject Name',
	'Class:Certificate/Attribute:org_id' => 'Organization',
	'Class:Certificate/Attribute:status' => 'Status',
	'Class:Certificate/Attribute:status/Value:active' => 'Active',
	'Class:Certificate/Attribute:status/Value:inactive' => 'Inactive',
	'Class:Certificate/Attribute:description' => 'Description',
	'Class:Certificate/Attribute:provider_name' => 'Issuer Certificate Name',
	'Class:Certificate/Attribute:provider_org' => 'Issuer Organization',
	'Class:Certificate/Attribute:serial_number' => 'Certificate Serial Number',
	'Class:Certificate/Attribute:serial_number+' => 'SN Value in Hexa, written in form \'01:23:45:67:89:ab:cd:ef\'',
	'Class:Certificate/Attribute:delivery_date' => 'Certificate Delivery Date',
	'Class:Certificate/Attribute:expiration_date' => 'Certificate Expiration Date',
	'Class:Certificate/Attribute:san' => 'Subject Alternate Name(s)',
	'Class:Certificate/Attribute:unknown_cis' => 'CI using this Certificate not found in iTop',
	'Class:Certificate/Attribute:comment' => 'Comments',
	'Class:Certificate/Attribute:contacts_list' => 'Contacts',
	'Class:Certificate/Attribute:functionalcis_list' => 'CIs with this Certificate',
	'Class:Certificate/UniquenessRule:serial_number' => 'Serial number must be unique. An existing Certificate has already this serial number',
	'Class:lnkCertificateToContact' => 'Link Certificate / Contacts',
	'Class:lnkCertificateToContact/Attribute:certificate_id' => 'Certificate',
	'Class:lnkCertificateToContact/Attribute:contact_id' => 'Contact',
	'Class:lnkCertificateToFunctionalCI' => 'Link Certificate / FunctionalCI',
	'Class:lnkCertificateToFunctionalCI/Attribute:certificate_id' => 'Certificate',
	'Class:lnkCertificateToFunctionalCI/Attribute:functionalci_id' => 'CI',
	'Class:lnkCertificateToFunctionalCI/Attribute:url' => 'URL : Uniform Resource Locator',
	'Class:lnkCertificateToFunctionalCI/Attribute:url+' => 'Known URLs to reach this CI, as {host}:{port}',
	'Class:lnkCertificateToFunctionalCI/Attribute:ip' => 'Listening IP on CI',
	'Class:lnkCertificateToFunctionalCI/Attribute:ip+' => 'Current listening IP on CI, as the time of the update. Informational only',
	'Class:lnkCertificateToFunctionalCI/Attribute:comment' => 'Comment',
	'Class:lnkCertificateToFunctionalCI/Attribute:certificate_id' => 'Certificate',
	'Class:FunctionalCI/Attribute:certificates_list' => 'SSL Certificate(s)',
	'UI:datewithremainingdays_days' => ' %1$d Day(s) Left',
	'UI:datewithremainingdays_latedays' => ' Expired since %1$d Day(s) ',
));
?>
