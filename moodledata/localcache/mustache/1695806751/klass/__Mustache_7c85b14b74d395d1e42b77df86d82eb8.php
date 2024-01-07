<?php

class __Mustache_7c85b14b74d395d1e42b77df86d82eb8 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="availabilityinfo isrestricted isfullinfo">
';
        $buffer .= $indent . '    <span class="badge badge-info"';
        // 'visible' section
        $value = $context->find('visible');
        $buffer .= $this->section4c389ba93461256a851b57d8d51c0f47($context, $indent, $value);
        $buffer .= '>';
        // 'visible' inverted section
        $value = $context->find('visible');
        if (empty($value)) {
            
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->sectionAa413acb7776474efcb52c4cbf9fc6f9($context, $indent, $value);
        }
        // 'visible' section
        $value = $context->find('visible');
        $buffer .= $this->section49ebb10c628fb1f64adea6c6a0871bde($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function section19bf158d7db90724f108ed1fd3683c47(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'title="{{availabilitymessage}}" data-html="true" data-toggle="tooltip"';
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
                
                $buffer .= 'title="';
                $value = $this->resolveValue($context->find('availabilitymessage'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-html="true" data-toggle="tooltip"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4c389ba93461256a851b57d8d51c0f47(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{#availabilitymessage}}title="{{availabilitymessage}}" data-html="true" data-toggle="tooltip"{{/availabilitymessage}}
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
                
                $buffer .= '
';
                $buffer .= $indent . '        ';
                // 'availabilitymessage' section
                $value = $context->find('availabilitymessage');
                $buffer .= $this->section19bf158d7db90724f108ed1fd3683c47($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAa413acb7776474efcb52c4cbf9fc6f9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'hiddenfromstudents';
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
                
                $buffer .= 'hiddenfromstudents';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA660a93413b0d2d8a474fd11d6a19275(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'restricted';
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
                
                $buffer .= 'restricted';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section49ebb10c628fb1f64adea6c6a0871bde(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#str}}restricted{{/str}}';
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
                
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionA660a93413b0d2d8a474fd11d6a19275($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
