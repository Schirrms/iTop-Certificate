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
	'Class:Certificate/Attribute:description' => 'Description',
	'Class:Certificate/Attribute:provider_name' => 'Issuer Certificate Name',
	'Class:Certificate/Attribute:provider_org' => 'Issuer Organization',
	'Class:Certificate/Attribute:delivery_date' => 'Certificate Delivery Date',
	'Class:Certificate/Attribute:expiration_date' => 'Certificate Expiration Date',
	'Class:Certificate/Attribute:san' => 'Subject Alternate Name(s)',
	'Class:Certificate/Attribute:comment' => 'Comments',
	'UI:datewithremainingdays_days' => ' %1$d Day(s) Left',
	'UI:datewithremainingdays_latedays' => ' Expired since %1$d Day(s) ',
));
?>
