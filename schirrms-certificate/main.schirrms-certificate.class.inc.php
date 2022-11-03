<?php

/**
 * Class AttributeDateWithRemainingDays :
 * For a date attribute, display the data and the remaining days between today and this date
 * result can be negative
 * in GetAsHtml, return the result in 
 *  * orange if less than 30 days 
 *  * red if less than 7 days
 * but only for active certificates
 */
class AttributeDateWithRemainingDays extends AttributeDate
{

	private function FormatRemainingDays($dRemaining, $oHostObject = null)
	{
		$sRemaining = '';
		if ( $dRemaining !== null && preg_match('/^\d{2,4}-\d{1,2}-\d{1,2}$/', $dRemaining) ) {
			$dExpiration = new DateTime($dRemaining);
			$dControl = new DateTime('');
			$datectrl = $dControl->diff($dExpiration);
			if ( $datectrl->format('%r%a') > -10000 ) {
				$dDateNow = new DateTime(date('Y-m-d'));
				$interval = $dDateNow->diff($dExpiration);
				$iInterval = $interval->format('%r%a');
				if ( $iInterval >= 0 ) {
					$sDiff = Dict::Format('UI:datewithremainingdays_days', $iInterval);
				}
				else {
					$sDiff = Dict::Format('UI:datewithremainingdays_latedays', -$iInterval);
				}
				$sRemaining = "$dRemaining ($sDiff)";
				// add some colorations, but only for active Certificates
				$status = null;
				if ( $oHostObject !== null) {
					$status = $oHostObject->Get('status');
				}
				if ( $iInterval <= 30  && $status == 'active' ) {
					$sColor='gold';
					if ($iInterval <= 7 ) {
						$sColor='tomato';
					}
					$sRemaining = "<div style=\"color:$sColor;background-color:#404040;\">$sRemaining</div>";
				}
			}
		}
		return "$sRemaining-$status";
	}

	public function GetAsHTML($sValue, $oHostObject = null, $bLocalize = true)
	{
		return self::FormatRemainingDays($sValue, $oHostObject);
	}
}

/**
 * Class AttributeHexaChain : display a string as hexa, with : as separator
 * the sting is sipposed to have a validation pattern : 
 * <validation_pattern>^[a-fA-F0-9]$</validation_pattern>
 */

class AttributeHexaChain extends AttributeString
{
	public function GetAsHTML($sValue, $oHostObject = null, $bLocalize = true)
	{
		$sHexa = $sValue;
		if ( ( strlen($sValue) % 2 ) === 1 ) {
			$sValue = '0'.$sValue;
		}
		$sHexa = strtolower(implode(':', str_split($sValue, 2)));
		return $sHexa;
	}
}