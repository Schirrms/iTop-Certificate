<?php

/**
 * Class AttributeRemainingDays :
 * with a stored date attribute, display the reminind days between today and this date
 * result can be negative
 * Toto : in GetAsHtml, rentun the result in 
 *  * orange if less than 30 days 
 *  * red if less than 7 days
 */
class AttributeRemainingDays extends AttributeDate
{
	/**
	 * @inheritdoc
	 */

	private function FormatRemainingDays($dRemaining)
	{
		$sRemaining = '';
		if ( $dRemaining !== null && preg_match('/^\d{2,4}-\d{1,2}-\d{1,2}$/', $dRemaining) ) {
			$dExpiration = new DateTime($dRemaining);
			$dControl = new DateTime('');
			$datectrl = $dControl->diff($dExpiration);
			if ( $datectrl->format('%a') != 0 && $datectrl->format('%r%a') > -10000 ) {
				$dDateNow = new DateTime(date('Y-m-d'));
				$interval = $dDateNow->diff($dExpiration);
				$sRemaining = $interval->format('%r%a');
			}
		}
		return $sRemaining;
	}

	/*
	public function Get($sValue)
	{
		return self::FormatRemainingDays($sValue);
	}

	public function GetValueLabel($sValue, $oHostObject = null)
	{
		return self::FormatRemainingDays($sValue);
	}

	public function GetAsXML($sAttCode, $bLocalize = true)
	{
		return self::FormatRemainingDays($sAttCode);
	}
	*/

	public function GetAsHTML($sValue, $oHostObject = null, $bLocalize = true)
	{
		return self::FormatRemainingDays($sValue);
	}
}