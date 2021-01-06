<?php

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace PhpCsFixer\Differ;

use PhpCsFixer\Diff\Differ;
use PhpCsFixer\Diff\Output\StrictUnifiedDiffOutputBuilder;
use PhpCsFixer\Preg;

/**
 * @author SpacePossum
 */
final class UnifiedDiffer implements DifferInterface
{
    /**
     * {@inheritdoc}
     */
    public function diff($old, $new, \SplFileInfo $file = null)
    {
        if (null === $file) {
            $options = [
                'fromFile' => 'Original',
                'toFile' => 'New',
            ];
        } else {
            $filePath = $file->getRealPath();

            if (1 === Preg::match('/\s/', $filePath)) {
                $filePath = '"'.$filePath.'"';
            }

            $options = [
                'fromFile' => $filePath,
                'toFile' => $filePath,
            ];
        }

        $differ = new Differ(new StrictUnifiedDiffOutputBuilder($options));

        return $differ->diff($old, $new);
    }
}