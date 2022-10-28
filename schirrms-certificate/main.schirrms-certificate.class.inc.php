<?php

/**
 * Class AttributeDecimalInIB
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

	/**
	 * @inheritdoc
	 */

	public function Get($sValue)
	{
		return Self::FormatRemainingDays($sValue);
	}

	/**
	 * @inheritdoc
	 */

	public function GetValueLabel($sValue, $oHostObject = null)
	{
		return Self::FormatRemainingDays($sValue);
	}

	/**
	 * @inheritdoc
	 */
		
	public function GetAsHTML($sValue, $oHostObject = null, $bLocalize = true)
	{
		return Self::FormatRemainingDays($sValue);
	}

	/**
	 * @inheritdoc
	 */
		
	public function GetAsXML($sAttCode, $bLocalize = true)
	{
		return Self::FormatRemainingDays($sAttCode);
	}
}