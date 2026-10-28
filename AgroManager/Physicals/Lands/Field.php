<?php

final class Field extends Land{
    public private(set) ?Plant $crop = null;
    public function plantCrop(Plant $crop): void
    {
        if($this->crop !== null){
            throw new \LogicException("Поле уже засеяно {$this->crop->name}")
        }
        $this->crop = $crop;
    }
    public function clearField(): void
    {
        $this->crop = null;
    }
}