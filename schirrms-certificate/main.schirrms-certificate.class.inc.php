<?php

/**
 * Class AttributeDecimalInIB
 */
class AttributeRemainingDays extends AttributeString
{
    /**
     * @inheritdoc
     */

    private function UpdateRemainingDays($sRemaining, $oHostObject = null)
    {
        if ( !is_null($oHostObject) ) {
            $sNewRemaining = '';
            $dExpDate = $oHostObject->Get('expiration_date');
            if ( !is_null( $dExpDate ) ) {
                $dExpiration = new DateTime($dExpDate);
                $dControl = new DateTime('');
                $datectrl = $dControl->diff($dExpiration);
                if ( $datectrl->format('%a') != 0 && $datectrl->format('%r%a') > -10000 ) {
                    $dDateNow = new DateTime(date('Y-m-d'));
                    $interval = $dDateNow->diff($dExpiration);
                    $sNewRemaining = $interval->format('%r%a');
                }
            }
            if ( strcmp($sNewRemaining, $sRemaining) !== 0 ) {
                $oHostObject->Set('expiration_days', $sNewRemaining);
                $oHostObject->DBWrite();
            }
            return $sNewRemaining;
        }
        else {
            return $sRemaining;
        }
    }

    /**
     * @inheritdoc
     */

    public function Get($sValue, $oHostObject = null)
    {
        $sRemaining = parent::Get($sValue);
        
        return Self::UpdateRemainingDays($sRemaining, $oHostObject);
    }

    /**
     * @inheritdoc
     */

    public function GetValueLabel($sValue, $oHostObject = null)
    {
        $sRemaining = parent::GetValueLabel($sValue);

        return Self::UpdateRemainingDays($sRemaining, $oHostObject);
    }

    /**
     * @inheritdoc
     */
    
    public function GetAsHTML($sValue, $oHostObject = null, $bLocalize = true)
    {
        $sRemaining = parent::GetAsHTML($sValue, $oHostObject, $bLocalize);

        return Self::UpdateRemainingDays($sRemaining, $oHostObject);
    }

    /**
     * @inheritdoc
     */
    
    public function GetAsXML($sAttCode, $bLocalize = true)
    {
        $sRemaining = parent::GetAsXML($sValue, $bLocalize = true);

        return Self::UpdateRemainingDays($sRemaining, $oHostObject);
    }
}