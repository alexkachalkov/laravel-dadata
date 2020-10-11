<?php

namespace MoveMoveIo\DaData\Tests;

use MoveMoveIo\DaData\Facades\DaDataAddress;

class DaDataAddressTest extends TestCase
{

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }


    /**
     * @test
     **/
    public function testStandardizationAddressFromString()
    {
        $this->assertSame(
            DaDataAddress::standardization('мск сухонска 11/-89'),
            $this->StandardizationAddressProvider()
        );
    }

    /**
     * @test
     */
    public function testPromptAddressFromString()
    {
        $this->assertSame(
            DaDataAddress::prompt('москва хабар', 2),
            $this->PromptAddressProvider()
        );
    }

    /**
     * @return array|\array[][]
     */
    public function PromptAddressProvider() : array
    {
        return [
            "suggestions" => [
                [
                    "value" => "г Москва, ул Хабаровская",
                    "unrestricted_value" => "г Москва, ул Хабаровская",
                    "data" => [
                        "postal_code" => null,
                        "country" => "Россия",
                        "country_iso_code" => "RU",
                        "federal_district" => null,
                        "region_fias_id" => "0c5b2444-70a0-4932-980c-b4dc0d3f02b5",
                        "region_kladr_id" => "7700000000000",
                        "region_iso_code" => "RU-MOW",
                        "region_with_type" => "г Москва",
                        "region_type" => "г",
                        "region_type_full" => "город",
                        "region" => "Москва",
                        "area_fias_id" => null,
                        "area_kladr_id" => null,
                        "area_with_type" => null,
                        "area_type" => null,
                        "area_type_full" => null,
                        "area" => null,
                        "city_fias_id" => "0c5b2444-70a0-4932-980c-b4dc0d3f02b5",
                        "city_kladr_id" => "7700000000000",
                        "city_with_type" => "г Москва",
                        "city_type" => "г",
                        "city_type_full" => "город",
                        "city" => "Москва",
                        "city_area" => null,
                        "city_district_fias_id" => null,
                        "city_district_kladr_id" => null,
                        "city_district_with_type" => null,
                        "city_district_type" => null,
                        "city_district_type_full" => null,
                        "city_district" => null,
                        "settlement_fias_id" => null,
                        "settlement_kladr_id" => null,
                        "settlement_with_type" => null,
                        "settlement_type" => null,
                        "settlement_type_full" => null,
                        "settlement" => null,
                        "street_fias_id" => "32fcb102-2a50-44c9-a00e-806420f448ea",
                        "street_kladr_id" => "77000000000713400",
                        "street_with_type" => "ул Хабаровская",
                        "street_type" => "ул",
                        "street_type_full" => "улица",
                        "street" => "Хабаровская",
                        "house_fias_id" => null,
                        "house_kladr_id" => null,
                        "house_type" => null,
                        "house_type_full" => null,
                        "house" => null,
                        "block_type" => null,
                        "block_type_full" => null,
                        "block" => null,
                        "flat_type" => null,
                        "flat_type_full" => null,
                        "flat" => null,
                        "flat_area" => null,
                        "square_meter_price" => null,
                        "flat_price" => null,
                        "postal_box" => null,
                        "fias_id" => "32fcb102-2a50-44c9-a00e-806420f448ea",
                        "fias_code" => "7700000000000007134",
                        "fias_level" => "7",
                        "fias_actuality_state" => "0",
                        "kladr_id" => "77000000000713400",
                        "geoname_id" => "524894",
                        "capital_marker" => "0",
                        "okato" => "45263564000",
                        "oktmo" => "45305000",
                        "tax_office" => "7718",
                        "tax_office_legal" => "7718",
                        "timezone" => null,
                        "geo_lat" => "55.821168",
                        "geo_lon" => "37.82608",
                        "beltway_hit" => null,
                        "beltway_distance" => null,
                        "metro" => null,
                        "qc_geo" => "2",
                        "qc_complete" => null,
                        "qc_house" => null,
                        "history_values" => [
                            "ул Черненко",
                        ],
                        "unparsed_parts" => null,
                        "source" => null,
                        "qc" => null,
                    ],
                ], [
                    "value" => "г Москва, поселение Московский, г Московский, ул Хабарова",
                    "unrestricted_value" => "г Москва, поселение Московский, г Московский, ул Хабарова",
                    "data" => [
                        "postal_code" => null,
                        "country" => "Россия",
                        "country_iso_code" => "RU",
                        "federal_district" => null,
                        "region_fias_id" => "0c5b2444-70a0-4932-980c-b4dc0d3f02b5",
                        "region_kladr_id" => "7700000000000",
                        "region_iso_code" => "RU-MOW",
                        "region_with_type" => "г Москва",
                        "region_type" => "г",
                        "region_type_full" => "город",
                        "region" => "Москва",
                        "area_fias_id" => "762758bb-18b9-440f-bc61-8e1e77ff3fd8",
                        "area_kladr_id" => "7701100000000",
                        "area_with_type" => "поселение Московский",
                        "area_type" => "п",
                        "area_type_full" => "поселение",
                        "area" => "Московский",
                        "city_fias_id" => "fbcf1fff-1d7c-445e-ad92-b71c08b8aba3",
                        "city_kladr_id" => "7701100200000",
                        "city_with_type" => "г Московский",
                        "city_type" => "г",
                        "city_type_full" => "город",
                        "city" => "Московский",
                        "city_area" => null,
                        "city_district_fias_id" => null,
                        "city_district_kladr_id" => null,
                        "city_district_with_type" => null,
                        "city_district_type" => null,
                        "city_district_type_full" => null,
                        "city_district" => null,
                        "settlement_fias_id" => null,
                        "settlement_kladr_id" => null,
                        "settlement_with_type" => null,
                        "settlement_type" => null,
                        "settlement_type_full" => null,
                        "settlement" => null,
                        "street_fias_id" => "4d70a35d-9246-4d9c-bcf1-90812ad056a3",
                        "street_kladr_id" => "77011002000003700",
                        "street_with_type" => "ул Хабарова",
                        "street_type" => "ул",
                        "street_type_full" => "улица",
                        "street" => "Хабарова",
                        "house_fias_id" => null,
                        "house_kladr_id" => null,
                        "house_type" => null,
                        "house_type_full" => null,
                        "house" => null,
                        "block_type" => null,
                        "block_type_full" => null,
                        "block" => null,
                        "flat_type" => null,
                        "flat_type_full" => null,
                        "flat" => null,
                        "flat_area" => null,
                        "square_meter_price" => null,
                        "flat_price" => null,
                        "postal_box" => null,
                        "fias_id" => "4d70a35d-9246-4d9c-bcf1-90812ad056a3",
                        "fias_code" => "7701100200000000037",
                        "fias_level" => "7",
                        "fias_actuality_state" => "0",
                        "kladr_id" => "77011002000003700",
                        "geoname_id" => "857690",
                        "capital_marker" => "0",
                        "okato" => "45297565001",
                        "oktmo" => "45952000",
                        "tax_office" => "7751",
                        "tax_office_legal" => "7751",
                        "timezone" => null,
                        "geo_lat" => "55.59483",
                        "geo_lon" => "37.35963",
                        "beltway_hit" => null,
                        "beltway_distance" => null,
                        "metro" => null,
                        "qc_geo" => "2",
                        "qc_complete" => null,
                        "qc_house" => null,
                        "history_values" => null,
                        "unparsed_parts" => null,
                        "source" => null,
                        "qc" => null,
                    ],
                ],
            ],
        ];
    }

    /**
     * @return array|array[]
     **/
    public function StandardizationAddressProvider() : array
    {
        return [
            [
                "source" => "мск сухонска 11/-89",
                "result" => "г Москва, ул Сухонская, д 11, кв 89",
                "postal_code" => "127642",
                "country" => "Россия",
                "country_iso_code" => "RU",
                "federal_district" => "Центральный",
                "region_fias_id" => "0c5b2444-70a0-4932-980c-b4dc0d3f02b5",
                "region_kladr_id" => "7700000000000",
                "region_iso_code" => "RU-MOW",
                "region_with_type" => "г Москва",
                "region_type" => "г",
                "region_type_full" => "город",
                "region" => "Москва",
                "area_fias_id" => null,
                "area_kladr_id" => null,
                "area_with_type" => null,
                "area_type" => null,
                "area_type_full" => null,
                "area" => null,
                "city_fias_id" => null,
                "city_kladr_id" => null,
                "city_with_type" => null,
                "city_type" => null,
                "city_type_full" => null,
                "city" => null,
                "city_area" => "Северо-восточный",
                "city_district_fias_id" => null,
                "city_district_kladr_id" => null,
                "city_district_with_type" => "р-н Северное Медведково",
                "city_district_type" => "р-н",
                "city_district_type_full" => "район",
                "city_district" => "Северное Медведково",
                "settlement_fias_id" => null,
                "settlement_kladr_id" => null,
                "settlement_with_type" => null,
                "settlement_type" => null,
                "settlement_type_full" => null,
                "settlement" => null,
                "street_fias_id" => "95dbf7fb-0dd4-4a04-8100-4f6c847564b5",
                "street_kladr_id" => "77000000000283600",
                "street_with_type" => "ул Сухонская",
                "street_type" => "ул",
                "street_type_full" => "улица",
                "street" => "Сухонская",
                "house_fias_id" => "5ee84ac0-eb9a-4b42-b814-2f5f7c27c255",
                "house_kladr_id" => "7700000000028360004",
                "house_type" => "д",
                "house_type_full" => "дом",
                "house" => "11",
                "block_type" => null,
                "block_type_full" => null,
                "block" => null,
                "flat_type" => "кв",
                "flat_type_full" => "квартира",
                "flat" => "89",
                "flat_area" => "34.6",
                "square_meter_price" => "198113",
                "flat_price" => "6854710",
                "postal_box" => null,
                "fias_id" => "5ee84ac0-eb9a-4b42-b814-2f5f7c27c255",
                "fias_code" => "77000000000000028360004",
                "fias_level" => "8",
                "fias_actuality_state" => "0",
                "kladr_id" => "7700000000028360004",
                "capital_marker" => "0",
                "okato" => "45280583000",
                "oktmo" => "45362000",
                "tax_office" => "7715",
                "tax_office_legal" => "7715",
                "timezone" => "UTC+3",
                "geo_lat" => "55.8782557",
                "geo_lon" => "37.65372",
                "beltway_hit" => "IN_MKAD",
                "beltway_distance" => null,
                "qc_geo" => 0,
                "qc_complete" => 0,
                "qc_house" => 2,
                "qc" => 0,
                "unparsed_parts" => null,
                "metro" => [
                    [
                        "distance" => 1.1,
                        "line" => "Калужско-Рижская",
                        "name" => "Бабушкинская",
                    ],
                    [
                        "distance" => 1.2,
                        "line" => "Калужско-Рижская",
                        "name" => "Медведково",
                    ],
                    [
                        "distance" => 2.5,
                        "line" => "Калужско-Рижская",
                        "name" => "Свиблово",
                    ],
                ],
            ]
        ];
    }

}
