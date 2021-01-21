<?php declare(strict_types=1);

namespace RectorBugTest;

class RectorBug
{
    public function fails(\Symfony\Component\HttpFoundation\Request $request): void
    {
        $request->query->get('xxx');
    }
}
