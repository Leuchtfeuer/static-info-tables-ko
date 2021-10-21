<?php

declare(strict_types=1);

/*
 * This file is part of the "Static Info Tables (KO)" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * Max Rösch <m.roesch@Leuchtfeuer.com>, Leuchtfeuer Digital Marketing
 */

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
