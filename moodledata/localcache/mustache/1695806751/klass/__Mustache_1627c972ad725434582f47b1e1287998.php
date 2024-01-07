<?php

class __Mustache_1627c972ad725434582f47b1e1287998 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="single-section">
';
        // 'from_ajax' inverted section
        $value = $context->find('from_ajax');
        if (empty($value)) {
            
            if ($partial = $this->mustache->loadPartial('format_tiles/above_tiles')) {
                $buffer .= $partial->renderInternal($context, $indent . '        ');
            }
        }
        $buffer .= $indent . '    <ul id="single_section_tiles">
';
        // 'from_ajax' inverted section
        $value = $context->find('from_ajax');
        if (empty($value)) {
            
            if ($partial = $this->mustache->loadPartial('format_tiles/section_zero')) {
                $buffer .= $partial->renderInternal($context, $indent . '            ');
            }
        }
        if ($partial = $this->mustache->loadPartial('format_tiles/single_section')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '    </ul>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        // 'from_ajax' inverted section
        $value = $context->find('from_ajax');
        if (empty($value)) {
            
            // 'isediting' section
            $value = $context->find('isediting');
            $buffer .= $this->section5416ee7569148458ed761ff5d83ae535($context, $indent, $value);
        }

        return $buffer;
    }

    private function section5416ee7569148458ed761ff5d83ae535(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{{course_activity_clipboard}}}
    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('course_activity_clipboard'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
