<?php declare(strict_types=1);

namespace RectorBugTest;

class RectorBug
{
    public function fails(Xyz $xyz): void
    {
        $xyz->abc->get('xxx');
    }
}
