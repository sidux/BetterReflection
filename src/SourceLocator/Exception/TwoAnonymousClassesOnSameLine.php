<?php
declare(strict_types=1);

namespace Roave\BetterReflection\SourceLocator\Exception;

class TwoAnonymousClassesOnSameLine extends \LogicException
{
    public static function create(string $fileName, int $lineNumber) : self
    {
        return new self(sprintf('Two anonymous classes on line %d in %s', $lineNumber, $fileName));
    }
}
