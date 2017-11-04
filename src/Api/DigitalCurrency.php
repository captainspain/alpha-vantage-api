<?php

namespace AlphaVantage\Api;

class DigitalCurrency extends AbstractApi
{
    /**
     * @param string $symbol
     * @param string $market
     * @param string $dataType
     * @return array
     */
    public function digitalCurrencyIntraday(string $symbol, string $market, string $dataType = self::DATA_TYPE_JSON)
    {
        return $this->get(
            'DIGITAL_CURRENCY_INTRADAY',
            null,
            null,
            [
                'symbol' => $symbol,
                'market' => $market,
                'datatype' => $dataType,
            ]
        );
    }

    /**
     * @param string $symbol
     * @param string $market
     * @param string $dataType
     * @return array
     */
    public function digitalCurrencyDaily(string $symbol, string $market, string $dataType = self::DATA_TYPE_JSON)
    {
        return $this->get(
            'DIGITAL_CURRENCY_DAILY',
            null,
            null,
            [
                'symbol' => $symbol,
                'market' => $market,
                'datatype' => $dataType,
            ]
        );
    }

    /**
     * @param string $symbol
     * @param string $market
     * @param string $dataType
     * @return array
     */
    public function digitalCurrencyWeekly(string $symbol, string $market, string $dataType = self::DATA_TYPE_JSON)
    {
        return $this->get(
            'DIGITAL_CURRENCY_WEEKLY',
            null,
            null,
            [
                'symbol' => $symbol,
                'market' => $market,
                'datatype' => $dataType,
            ]
        );
    }

    /**
     * @param string $symbol
     * @param string $market
     * @param string $dataType
     * @return array
     */
    public function digitalCurrencyMonthly(string $symbol, string $market, string $dataType = self::DATA_TYPE_JSON)
    {
        return $this->get(
            'DIGITAL_CURRENCY_MONTHLY',
            null,
            null,
            [
                'symbol' => $symbol,
                'market' => $market,
                'datatype' => $dataType,
            ]
        );
    }

}