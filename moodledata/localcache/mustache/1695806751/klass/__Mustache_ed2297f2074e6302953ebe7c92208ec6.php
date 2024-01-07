<?php

class __Mustache_ed2297f2074e6302953ebe7c92208ec6 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'user' section
        $value = $context->find('user');
        $buffer .= $this->section8f6c0c268630228046372c372395035b($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'scored' section
        $value = $context->find('scored');
        $buffer .= $this->sectionBa2093d91a89ac873f0ee871b93d7191($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '<h3>';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionB2fb983c6be55d7ee6e618f8a8bfb496($context, $indent, $value);
        $buffer .= '</h3>
';
        $buffer .= $indent . '
';
        // 'attemptscount' inverted section
        $value = $context->find('attemptscount');
        if (empty($value)) {
            
            $buffer .= $indent . '    <div class="alert alert-warning">
';
            $buffer .= $indent . '      ';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section493c9ebe4c9d50201618bb5a6d785494($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '    </div>
';
        }
        // 'attemptscount' section
        $value = $context->find('attemptscount');
        $buffer .= $this->section23cb46ed02386649e1c39865da9b174e($context, $indent, $value);

        return $buffer;
    }

    private function section09f26f1d124c8a1831c0b18f8203f1ba(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{title}}';
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
                
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB0bfa55921057c5ab498b6e12634e8eb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' attempts, mod_h5pactivity ';
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
                
                $buffer .= ' attempts, mod_h5pactivity ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8f6c0c268630228046372c372395035b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<h2 class="mb-4">
    {{{picture}}}
    {{#title}}{{title}}{{/title}}
    {{^title}}{{#str}} attempts, mod_h5pactivity {{/str}}: {{fullname}}{{/title}}
</h2>
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
                
                $buffer .= $indent . '<h2 class="mb-4">
';
                $buffer .= $indent . '    ';
                $value = $this->resolveValue($context->find('picture'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '    ';
                // 'title' section
                $value = $context->find('title');
                $buffer .= $this->section09f26f1d124c8a1831c0b18f8203f1ba($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    ';
                // 'title' inverted section
                $value = $context->find('title');
                if (empty($value)) {
                    
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->sectionB0bfa55921057c5ab498b6e12634e8eb($context, $indent, $value);
                    $buffer .= ': ';
                    $value = $this->resolveValue($context->find('fullname'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                }
                $buffer .= '
';
                $buffer .= $indent . '</h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBa2093d91a89ac873f0ee871b93d7191(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <h3>{{title}}</h3>
    {{>mod_h5pactivity/attempts}}
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
                
                $buffer .= $indent . '    <h3>';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</h3>
';
                if ($partial = $this->mustache->loadPartial('mod_h5pactivity/attempts')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB2fb983c6be55d7ee6e618f8a8bfb496(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'all_attempts, mod_h5pactivity';
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
                
                $buffer .= 'all_attempts, mod_h5pactivity';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section493c9ebe4c9d50201618bb5a6d785494(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' attempts_none, mod_h5pactivity ';
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
                
                $buffer .= ' attempts_none, mod_h5pactivity ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section23cb46ed02386649e1c39865da9b174e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{>mod_h5pactivity/attempts}}
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
                
                if ($partial = $this->mustache->loadPartial('mod_h5pactivity/attempts')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
