<?php

final class Peony extends PerennialPlant
{
    public protected(set) bool $bearsFruit = false;
    public protected(set) string $pestType = "Муравьи";

    public function cutBeforeWinter(): void
    {
        if (!$this->isHibernating) {
            throw new LogicException("Нельзя обрезать пион, пока он не ушел в спячку.");
        }
    }
}