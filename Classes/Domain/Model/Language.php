<?php
declare(strict_types = 1);
namespace SJBR\StaticInfoTables\Domain\Model;

/***
 *
 * This file is part of the "Static Info Tables (KO)" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Florian Wessels <f.wessels@bitmotion.de>, Bitmotion GmbH
 *
 ***/

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
