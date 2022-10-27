<?php

/**
 * Class AttributeDecimalInIB
 */
class AttributeRemainingDays extends AttributeString
{
    /**
     * @inheritdoc
     */

    public function GetValueLabel($sValue)
    {
        $sRemaining = parent::GetValueLabel($sValue);
        $sNewRemaining = '';
        if ( defined ( parent::Get('expiration_date') ) ) {
            $dExpiration = new DateTime(parent::Get('expiration_date'));
            $dControl = new DateTime('');
            $datectrl = $dControl->diff($dExpiration);
            if ( $datectrl->format('%a') != 0 && $datectrl->format('%r%a') > -10000 ) {
                $dDateNow = new DateTime(date('Y-m-d'));
                $interval = $dDateNow->diff($dExpiration);
                $sNewRemaining = $interval->format('%r%a');
            }
        }
        if ( $sNewRemaining != $sRemaining ) {
            parent::Set('expiration_days', $sNewRemaining);
        }
    return $sNewRemaining;
    }

    /**
     * @inheritdoc
     */
    public function GetAsHTML($sValue, $oHostObject = null, $bLocalize = true)
    {
        $sRemaining = parent::GetAsHTML($sValue, $oHostObject, $bLocalize);
        if ( !is_null($oHostObject) ) {
            $sNewRemaining = 'Test';
            $dExpDate = $oHostObject->Get('expiration_date');
            if ( !is_null( $dExpDate ) ) {
                $sNewRemaining = "Test - $dExpDate";
                $dExpiration = new DateTime($dExpDate);
                $dControl = new DateTime('');
                $datectrl = $dControl->diff($dExpiration);
                if ( $datectrl->format('%a') != 0 && $datectrl->format('%r%a') > -10000 ) {
                    $dDateNow = new DateTime(date('Y-m-d'));
                    $interval = $dDateNow->diff($dExpiration);
                    $sNewRemaining = $interval->format('%r%a');
                }
            }
            else {
                $sNewRemaining = 'Test - null - '.$oHostObject->Get('expiration_date').' - '.$oHostObject->GetKey();
            }
            if ( strcmp($sNewRemaining, $sRemaining) !== 0 ) {
                $oHostObject->Set('expiration_days', $sNewRemaining);
                $oHostObject->DBWrite();
                $sNewRemaining .= " +Write";
            }
            return $sNewRemaining;
        }
        else {
            return $sRemaining;
        }
    }
}