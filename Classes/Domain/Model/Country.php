<?php
declare(strict_types=1);
namespace SJBR\StaticInfoTables\Domain\Model;

class Country extends AbstractEntity
{
    protected $shortNameKo = '';

    public function getShortNameKo(): string
    {
        return $this->shortNameKo;
    }

    public function setShortNameKo(string $shortNameKo): void
    {
        $this->shortNameKo = $shortNameKo;
    }
}
