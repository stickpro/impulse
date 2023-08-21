<?php

namespace App\FieldType\Interface;

interface FieldType
{
    /**
     * @return mixed
     */
    public function getValue(): mixed;

    /**
     * @param mixed $value
     * @return void
     */
    public function setValue(mixed $value): void;

    /**
     * @return string
     */
    public function getLabel(): string;

    /**
     * @return array
     */
    public function getConfig(): array;

    /**
     * @return string
     */
    public function getSettingsView(): string;

    /**
     * @return string
     */
    public function getView(): string;
}
