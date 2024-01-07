<?php

class __Mustache_ba0275e2d11a0b4b55784bd8e80583ec extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<iframe src="';
        $value = $this->resolveValue($context->find('embedurl'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" name="h5player" width=":w" height=":h"
';
        $buffer .= $indent . '   allowfullscreen="allowfullscreen" class="h5p-player w-100 border-0"
';
        $buffer .= $indent . '   style="height: 0px;" id="';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '-h5player">
';
        $buffer .= $indent . '</iframe>
';

        return $buffer;
    }
}
