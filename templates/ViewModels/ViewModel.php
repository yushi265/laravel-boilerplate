<?php

namespace App\ViewModels\Base;

/**
 * ViewModelのベース
 * すべてのViewModelはこのclassを継承する
 */
abstract class ViewModel
{
    /**
     * @return array
     */
    abstract public function toArray(): array;
}
