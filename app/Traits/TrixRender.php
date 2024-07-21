<?php

namespace App\Traits;

trait TrixRender
{
    public function renderTrix($field)
    {
        $content = $this->trixRichText->where('field', $field)->first()?->content;
        unset($this->trixRichText);

        return $content;
    }
}