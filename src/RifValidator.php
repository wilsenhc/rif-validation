<?php

namespace Wilsenhc\RifValidation;

class RifValidator
{
    private static $nationalitiesArray = [
        'V' => '1',
        'E' => '2',
        'J' => '3',
        'P' => '4',
        'G' => '5',
        'C' => '3',
    ];

    private static $multipliers = [4, 3, 2, 7, 6, 5, 4, 3, 2];

    /**
     * Validate the RIF format.
     *
     * @param string $rif The RIF to validate.
     * @return bool True if valid, false otherwise.
     */
    public function isValid(string $rif): bool
    {
        $rif = mb_strtoupper($rif);

        // Check if the RIF format is valid
        if (!preg_match('/^[VEPJGC]-?[\d]{8}-?[\d]$/i', $rif))
        {
            return false;
        }

        $fullRif = strtoupper($rif);
        $fullRif = str_replace('-', '', $rif);

        $contributor = substr($fullRif, 0, -1);
        $validationNumber = substr($fullRif, -1, 1);

        return $this->validationNumber($contributor) === $validationNumber;
    }

    /**
     * Calcate the Validation Number
     *
     * @param  string  $rif
     * @return string
     */
    private function validationNumber($rif): string
    {
        // FIRST STEP:
        // Replace the letter for its numeric value.
        $rif[0] = static::$nationalitiesArray[$rif[0]];

        $split_rif = str_split($rif);

        // SECOND STEP
        // Multiply each value by its *constant* multiplier from the multipiers
        // array.
        $sum = 0;

        foreach ($split_rif as $index => $value) {
            $sum += intval($value) * static::$multipliers[$index];
        }

        // THIRD STEP
        $remainder = intval($sum % 11);

        // FOURTH STEP
        $difference = 11 - $remainder;

        // FINAL STEP
        if ($difference > 9) {
            return '0';
        }

        return strval($difference);
    }
}
