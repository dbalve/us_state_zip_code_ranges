<?php
declare(strict_types=1);

/**
 * Based on US state zip code ranges at:
 *
 * http://structnet.com/instructions/zip_min_max_by_state.html
 *
 */


const START = 'S', STOP = 'E', ZIPS = [
    'AK' => [[START => 99501, STOP => 99950]],
    'AL' => [[START => 35004, STOP => 36925]],
    'AR' => [[START => 71601, STOP => 72959]],
    'AZ' => [[START => 85001, STOP => 86556]],
    'CA' => [[START => 90001, STOP => 96162]],
    'CO' => [[START => 80001, STOP => 81658]],
    'CT' => [[START => 6001, STOP => 6389], [START => 6401, STOP => 6928],],
    'DC' => [[START => 20001, STOP => 20039], [START => 20042, STOP => 20599], [START => 20799, STOP => 20799],],
    'DE' => [[START => 19701, STOP => 19980]],
    'FL' => [[START => 32004, STOP => 34997]],
    'GA' => [[START => 30001, STOP => 31999], [START => 39901, STOP => 39901],],
    'HI' => [[START => 96701, STOP => 96898]],
    'IA' => [[START => 50001, STOP => 52809], [START => 68119, STOP => 68120],],
    'ID' => [[START => 83201, STOP => 83876]],
    'IL' => [[START => 60001, STOP => 62999]],
    'IN' => [[START => 46001, STOP => 47997]],
    'KS' => [[START => 66002, STOP => 67954]],
    'KY' => [[START => 40003, STOP => 42788]],
    'LA' => [[START => 70001, STOP => 71232], [START => 71234, STOP => 71497]],
    'MA' => [[START => 1001, STOP => 2791], [START => 5501, STOP => 5544]],
    'MD' => [[START => 20331, STOP => 20331], [START => 20335, STOP => 20797], [START => 20812, STOP => 21930]],
    'ME' => [[START => 3901, STOP => 4992]],
    'MI' => [[START => 48001, STOP => 49971]],
    'MN' => [[START => 55001, STOP => 56763]],
    'MO' => [[START => 63001, STOP => 65899]],
    'MS' => [[START => 38601, STOP => 39776], [START => 71233, STOP => 71233]],
    'MT' => [[START => 59001, STOP => 59937]],
    'NC' => [[START => 27006, STOP => 28909]],
    'ND' => [[START => 58001, STOP => 58856]],
    'NE' => [[START => 68001, STOP => 68118], [START => 68122, STOP => 69367]],
    'NH' => [[START => 3031, STOP => 3897]],
    'NJ' => [[START => 7001, STOP => 8989]],
    'NM' => [[START => 87001, STOP => 88441]],
    'NV' => [[START => 88901, STOP => 89883]],
    'NY' => [[START => 6390, STOP => 6390], [START => 10001, STOP => 14975]],
    'OH' => [[START => 43001, STOP => 45999]],
    'OK' => [[START => 73001, STOP => 73199], [START => 73401, STOP => 74966]],
    'OR' => [[START => 97001, STOP => 97920]],
    'PA' => [[START => 15001, STOP => 19640]],
    'RI' => [[START => 2801, STOP => 2940]],
    'SC' => [[START => 29001, STOP => 29948]],
    'SD' => [[START => 57001, STOP => 57799]],
    'TN' => [[START => 37010, STOP => 38589]],
    'TX' => [[START => 73301, STOP => 73301], [START => 75001, STOP => 75501], [START => 75503, STOP => 79999], [START => 88510, STOP => 88589]],
    'UT' => [[START => 84001, STOP => 84784]],
    'VA' => [[START => 20040, STOP => 20167], [START => 22001, STOP => 24658],],
    'VT' => [[START => 5001, STOP => 5495], [START => 5601, STOP => 5907]],
    'WA' => [[START => 98001, STOP => 99403]],
    'WI' => [[START => 53001, STOP => 54990]],
    'WV' => [[START => 24701, STOP => 26886]],
    'WY' => [[START => 82001, STOP => 83128]],
];
