<?php
declare(strict_types = 1);
namespace SJBR\StaticInfoTables\Domain\Model;

class Language extends AbstractEntity
{
    /**
    * @var string
    */
    protected $nameKo = '';

    public function getNameKo(): string
    {
        return $this->nameKo;
    }

    public function setNameKo(string $nameKo): void
    {
        $this->nameKo = $nameKo;
    }
}
