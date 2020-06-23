<?php

namespace App\Admin;

interface IRelatorio {
    public function generate() :void;
    public function createView() :string;
    public function dropView(): string;
}