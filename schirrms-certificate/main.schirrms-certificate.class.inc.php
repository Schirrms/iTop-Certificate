<?php

/**
 * Class AttributeDecimalInIB
 */
class AttributeRemainingDays extends AttributeString
{
    /**
     * @inheritdoc
     */

    public function Get($sValue)
    {
        $sRemaining = parent::Get($sValue);
        $sNewRemaining = '';
        if ( defined ( $this->Get('expiration_date') ) ) {
            $dExpiration = new DateTime($this->Get('expiration_date'));
            $dControl = new DateTime('');
            $datectrl = $dControl->diff($dExpiration);

            if ( $datectrl->format('%a') != 0 && $datectrl->format('%r%a') > -10000 ) {
                $dDateNow = new DateTime(date('Y-m-d'));
                $interval = $dDateNow->diff($dExpiration);
                $sNewRemaining = $interval->format('%r%a');
                if ( $sNewRemaining != $sRemaining ) {
                    $this->Set('expiration_days', $sNewRemaining);
                }
            }
        }

        return $sNewRemaining;
    }
}