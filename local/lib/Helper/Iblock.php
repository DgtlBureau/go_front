<?php

namespace GoFamily\Helper;

use Bitrix\Main\Loader;
use Bitrix\Iblock\IblockTable;

class Iblock
{
    public static function getId(string $code, ?string $type = null): ?int
    {
        Loader::includeModule('iblock');
        
        $filter = [
            'CODE' => $code,
            '=ACTIVE' => 'Y',
        ];

        if ($type !== null) {
            $filter['IBLOCK_TYPE_ID'] = $type;
        }

        $res = IblockTable::getList([
            'select' => ['ID'],
            'filter' => $filter,
            'limit' => 1,
        ]);

        return (int)($res->fetch()['ID'] ?? null);

    }
}
