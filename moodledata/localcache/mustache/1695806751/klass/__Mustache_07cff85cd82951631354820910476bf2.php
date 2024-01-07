<?php

class __Mustache_07cff85cd82951631354820910476bf2 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<script src="';
        $value = $this->resolveValue($context->find('resizeurl'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"></script>';

        return $buffer;
    }
}
