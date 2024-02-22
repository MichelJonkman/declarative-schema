<?php

namespace MichelJonkman\DeclarativeSchema\Database\Generator\Types;

use Doctrine\DBAL\Schema\Column;

class DateColumnGenerator extends AbstractColumnGenerator
{
    public function getDefinition(string $typeName, Column $column): string
    {
        return "date('{$column->getName()}')";
    }

    protected function getDefaultLength(): ?int
    {
        return null;
    }
}
