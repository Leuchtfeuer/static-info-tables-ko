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
