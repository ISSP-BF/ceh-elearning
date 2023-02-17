<?php

class __Mustache_6f4e2dbf9098cbf78caa4191bd9d4d24 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="h5p-iframe-wrapper">
';
        $buffer .= $indent . '    <iframe id="h5p-iframe-';
        $value = $this->resolveValue($context->find('h5pid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" class="h5p-iframe" data-content-id="';
        $value = $this->resolveValue($context->find('h5pid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '        style="height:1px; min-width: 100%" src="about:blank">
';
        $buffer .= $indent . '    </iframe>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }
}
