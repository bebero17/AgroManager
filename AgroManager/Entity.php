<?php
abstract readonly class Entity{
    public private(set) string $id{
        set(string $value){
            if ($value === ''){
                throw new \InvalidArgumentException(
                    "ID не может быть пустым");
            }
            $this->id = $value;
        }
    }

       public private(set) string $name{
        set(string $value){
            //"     FirstName  SecondName  "  ->  "FirstName  SecondName"
            $trimmed = trim($value);
            if ($trimmed === ''){
                throw new \InvalidArgumentException(
                    "Поле Name не может быть пустым");
            }
            $this->name = mb_convert_case($trimmed, MB_CASE_TITLE,"UTF-8");
        }
    }

    public function __construct(string $id, string $name) {
        $this->id = $id;
        $this->name = $name;
    }

}