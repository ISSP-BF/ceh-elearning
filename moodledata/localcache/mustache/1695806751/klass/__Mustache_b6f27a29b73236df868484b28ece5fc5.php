<?php

class __Mustache_b6f27a29b73236df868484b28ece5fc5 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<h3 class="w-100">
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('description'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '</h3>
';

        return $buffer;
    }
}
