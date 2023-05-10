<?php

namespace App\FieldType;

use App\Contracts\Field\FieldType;
use App\Exceptions\FieldTypeException;
use JsonSerializable;

class Text implements FieldType, JsonSerializable
{
    protected string $value;

    /**
     * @throws FieldTypeException
     */
    public function __construct($value = '')
    {
        $this->setValue($value);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getValue() ?? '';
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @throws FieldTypeException
     */
    public function setValue(mixed $value): void
    {
        if ($value && (! is_string($value) && ! is_numeric($value) && ! is_bool($value))) {
            throw new FieldTypeException(self::class.' value must be a string.');
        }

        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        // TODO: Implement getLabel() method.
    }

    /**
     * @return array
     */
    public function getConfig(): array
    {
        // TODO: Implement getConfig() method.
    }

    /**
     * @return string
     */
    public function getSettingsView(): string
    {
        // TODO: Implement getSettingsView() method.
    }

    /**
     * @return string
     */
    public function getView(): string
    {
        // TODO: Implement getView() method.
    }

    /**
     * @return string
     */
    public function jsonSerialize(): string
    {
        return $this->value;
    }
}