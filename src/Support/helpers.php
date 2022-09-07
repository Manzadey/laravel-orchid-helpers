<?php

declare(strict_types=1);

use Illuminate\Support\Str;

if(!function_exists('attrName')) {
    function attrName(string $key, string $postfix = null) : ?string
    {
        $transKey  = "validation.attributes.model.$key";
        $attribute = __($transKey);

        if($transKey === $attribute) {
            $attribute = Str::of($key)->replace(['_', '.'], ' ')->title();
        }

        if($postfix) {
            $attribute .= " $postfix";
        }

        if(is_array($attribute)) {
            return $key;
        }

        if($attribute instanceof \Illuminate\Support\Stringable) {
            return $attribute->toString();
        }

        return $attribute;
    }
}
