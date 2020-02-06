<?php
declare(strict_types = 1);
namespace SJBR\StaticInfoTables\Domain\Model;

class Language extends AbstractEntity
{
    /**
    * @var string
    */
    protected $nameKo = '';

    /**
     * @return string
     */
    public function getNameKo(): string
    {
        return $this->nameKo;
    }

    /**
     * @param string $nameKo
     */
    public function setNameKo(string $nameKo)
    {
        $this->nameKo = $nameKo;
    }
}
