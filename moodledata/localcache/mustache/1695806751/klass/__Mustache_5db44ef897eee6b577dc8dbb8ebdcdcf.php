<?php

class __Mustache_5db44ef897eee6b577dc8dbb8ebdcdcf extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="reportlink mb-3">
';
        $buffer .= $indent . '    <a href="';
        $value = $this->resolveValue($context->find('url'), $context);
        $buffer .= $value;
        $buffer .= '">';
        $value = $this->resolveValue($context->find('message'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
