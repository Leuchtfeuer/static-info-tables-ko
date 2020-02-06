<?php
declare(strict_types = 1);
namespace SJBR\StaticInfoTables\Domain\Model;

class Country extends AbstractEntity
{
    /**
     * @var string
     */
    protected $shortNameKo = '';

    /**
     * @return string
     */
    public function getShortNameKo(): string
    {
        return $this->shortNameKo;
    }

    /**
     * @param string $shortNameKo
     */
    public function setShortNameKo(string $shortNameKo)
    {
        $this->shortNameKo = $shortNameKo;
    }
}
