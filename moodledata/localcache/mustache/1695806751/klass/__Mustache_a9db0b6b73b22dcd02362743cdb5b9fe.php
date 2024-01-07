<?php

class __Mustache_a9db0b6b73b22dcd02362743cdb5b9fe extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<h2 class="px-0 px-md-3">
';
        // 'user' section
        $value = $context->find('user');
        $buffer .= $this->section59c487fa36e7819586f5fb014be1839d($context, $indent, $value);
        // 'user' inverted section
        $value = $context->find('user');
        if (empty($value)) {
            
            $buffer .= $indent . '      ';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section65c33f7e0a8de1158e9d37e6ad567417($context, $indent, $value);
            $buffer .= ' #';
            $value = $this->resolveValue($context->find('attempt'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '
';
        }
        $buffer .= $indent . '</h2>
';
        $buffer .= $indent . '<div class="container-fluid mt-4 mb-5 px-0 px-md-3">
';
        $buffer .= $indent . '    <dl class="row">
';
        $buffer .= $indent . '        <dt class="col-12">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section207389e627b802c2c5ce2646f09c47ff($context, $indent, $value);
        $buffer .= '</dt>
';
        $buffer .= $indent . '        <dd class="col-12">';
        // 'userdate' section
        $value = $context->find('userdate');
        $buffer .= $this->section13dd706a2d1616cbaf24b2be79924a16($context, $indent, $value);
        $buffer .= '</dd>
';
        $buffer .= $indent . '        <dt class="col-12">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section310355815749203c29fbdff3f5087fcb($context, $indent, $value);
        $buffer .= '</dt>
';
        $buffer .= $indent . '        <dd class="col-12">';
        $value = $this->resolveValue($context->find('completiontext'), $context);
        $buffer .= $value;
        $buffer .= '</dd>
';
        $buffer .= $indent . '        <dt class="col-12 text-truncate">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionC714c80f290e8aeb5eb80c034a46199d($context, $indent, $value);
        $buffer .= '</dt>
';
        $buffer .= $indent . '        <dd class="col-12">';
        $value = $this->resolveValue($context->find('duration'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</dd>
';
        $buffer .= $indent . '        <dt class="col-12">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionF0845a794edf49e9e828ce56a80def18($context, $indent, $value);
        $buffer .= '</dt>
';
        $buffer .= $indent . '        <dd class="col-12">';
        $value = $this->resolveValue($context->find('successtext'), $context);
        $buffer .= $value;
        $buffer .= '</dd>
';
        // 'score' section
        $value = $context->find('score');
        $buffer .= $this->sectionEabb50be4f40241aebb5864d51ff2040($context, $indent, $value);
        $buffer .= $indent . '    </dl>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section65c33f7e0a8de1158e9d37e6ad567417(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'attempt, mod_h5pactivity';
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
                
                $buffer .= 'attempt, mod_h5pactivity';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section59c487fa36e7819586f5fb014be1839d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      {{{picture}}}
      {{#str}}attempt, mod_h5pactivity{{/str}} #{{attempt}}: {{fullname}}
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
                
                $buffer .= $indent . '      ';
                $value = $this->resolveValue($context->find('picture'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '      ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section65c33f7e0a8de1158e9d37e6ad567417($context, $indent, $value);
                $buffer .= ' #';
                $value = $this->resolveValue($context->find('attempt'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ': ';
                $value = $this->resolveValue($context->find('fullname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section207389e627b802c2c5ce2646f09c47ff(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' startdate, mod_h5pactivity ';
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
                
                $buffer .= ' startdate, mod_h5pactivity ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section75622a8d47eadce6c55c0686cf838fc5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' strftimedatetime, core_langconfig ';
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
                
                $buffer .= ' strftimedatetime, core_langconfig ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section13dd706a2d1616cbaf24b2be79924a16(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{timemodified}}, {{#str}} strftimedatetime, core_langconfig {{/str}} ';
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
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('timemodified'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ', ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section75622a8d47eadce6c55c0686cf838fc5($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section310355815749203c29fbdff3f5087fcb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' completion, mod_h5pactivity ';
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
                
                $buffer .= ' completion, mod_h5pactivity ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC714c80f290e8aeb5eb80c034a46199d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' duration, mod_h5pactivity ';
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
                
                $buffer .= ' duration, mod_h5pactivity ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF0845a794edf49e9e828ce56a80def18(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' outcome, mod_h5pactivity ';
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
                
                $buffer .= ' outcome, mod_h5pactivity ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section03d6ba157e669c10cec51cc2d7b7af93(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' totalscore, mod_h5pactivity ';
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
                
                $buffer .= ' totalscore, mod_h5pactivity ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEabb50be4f40241aebb5864d51ff2040(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <dt class="col-12">{{#str}} totalscore, mod_h5pactivity {{/str}}</dt>
            <dd class="col-12">{{score}}</dd>
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
                
                $buffer .= $indent . '            <dt class="col-12">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section03d6ba157e669c10cec51cc2d7b7af93($context, $indent, $value);
                $buffer .= '</dt>
';
                $buffer .= $indent . '            <dd class="col-12">';
                $value = $this->resolveValue($context->find('score'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</dd>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
