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
            if ( defined ( $oHostObject->Get('expiration_date') ) ) {
                $sNewRemaining = "Test - ".$oHostObject->Get('expiration_date');
                $dExpiration = new DateTime($oHostObject->Get('expiration_date'));
                $dControl = new DateTime('');
                $datectrl = $dControl->diff($dExpiration);
                if ( $datectrl->format('%a') != 0 && $datectrl->format('%r%a') > -10000 ) {
                    $dDateNow = new DateTime(date('Y-m-d'));
                    $interval = $dDateNow->diff($dExpiration);
                    $sNewRemaining = $interval->format('%r%a');
                }
            }
            else {
                $sNewRemaining = 'Test - null - '.$oHostObject->Get('name').' - '.$oHostObject->Get('finalclass').' - '.$oHostObject->GetKey();
            }
            if ( $sNewRemaining != $sRemaining ) {
                $oHostObject->Set('expiration_days', $sNewRemaining);
                $oHostObject->DBWrite();
            }
            return $sNewRemaining;
        }
        else {
            return $sRemaining;
        }
    }
}