<?php

class __Mustache_5b0b05300fac3807ebfd150e7efe5d2f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'correct' section
        $value = $context->find('correct');
        $buffer .= $this->section04ab955df56aa7808eaee8c85cffee35($context, $indent, $value);
        // 'incorrect' section
        $value = $context->find('incorrect');
        $buffer .= $this->sectionC30fbb22d2bcf563383cb8085dd16230($context, $indent, $value);
        // 'text' section
        $value = $context->find('text');
        $buffer .= $this->section88653235d2cb7ad70acaf2f8d66d83aa($context, $indent, $value);
        // 'checked' section
        $value = $context->find('checked');
        $buffer .= $this->section71cec18691a8cc572bef6af69f24e0d3($context, $indent, $value);
        // 'unchecked' section
        $value = $context->find('unchecked');
        $buffer .= $this->section935dda52148fcdc886c86a6c9b95b04f($context, $indent, $value);
        // 'pass' section
        $value = $context->find('pass');
        $buffer .= $this->section14dee5192d7e4ef7f971f62211a494d2($context, $indent, $value);
        // 'fail' section
        $value = $context->find('fail');
        $buffer .= $this->sectionB4aa13a615ff0716f2afde400c6b5dbd($context, $indent, $value);

        return $buffer;
    }

    private function sectionB4964cabde3610eda6d1e8da3bfccd63(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'answer_correct, mod_h5pactivity';
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
                
                $buffer .= 'answer_correct, mod_h5pactivity';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE3523d34af4c64b1dc186a6ec36b36da(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'i/valid, moodle, {{#str}}answer_correct, mod_h5pactivity{{/str}}';
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
                
                $buffer .= 'i/valid, moodle, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionB4964cabde3610eda6d1e8da3bfccd63($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section04ab955df56aa7808eaee8c85cffee35(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#pix}}i/valid, moodle, {{#str}}answer_correct, mod_h5pactivity{{/str}}{{/pix}}{{answer}}
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
                
                $buffer .= $indent . '    ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->sectionE3523d34af4c64b1dc186a6ec36b36da($context, $indent, $value);
                $value = $this->resolveValue($context->find('answer'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD967710ce1f16e3a2d2d704431163174(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'answer_incorrect, mod_h5pactivity';
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
                
                $buffer .= 'answer_incorrect, mod_h5pactivity';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCea3176e44090f733621b9f76cb1ec03(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'i/invalid, moodle, {{#str}}answer_incorrect, mod_h5pactivity{{/str}}';
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
                
                $buffer .= 'i/invalid, moodle, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionD967710ce1f16e3a2d2d704431163174($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC30fbb22d2bcf563383cb8085dd16230(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#pix}}i/invalid, moodle, {{#str}}answer_incorrect, mod_h5pactivity{{/str}}{{/pix}}{{answer}}
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
                
                $buffer .= $indent . '    ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->sectionCea3176e44090f733621b9f76cb1ec03($context, $indent, $value);
                $value = $this->resolveValue($context->find('answer'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section88653235d2cb7ad70acaf2f8d66d83aa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{answer}}
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
                
                $buffer .= $indent . '    ';
                $value = $this->resolveValue($context->find('answer'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section39cbceb3b63b982bd141225e5213600a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'answer_checked, mod_h5pactivity';
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
                
                $buffer .= 'answer_checked, mod_h5pactivity';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section297fc8dac55da1234e641245246db7ba(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'i/checkedcircle, moodle, {{#str}}answer_checked, mod_h5pactivity{{/str}}';
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
                
                $buffer .= 'i/checkedcircle, moodle, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section39cbceb3b63b982bd141225e5213600a($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section71cec18691a8cc572bef6af69f24e0d3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#pix}}i/checkedcircle, moodle, {{#str}}answer_checked, mod_h5pactivity{{/str}}{{/pix}}
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
                
                $buffer .= $indent . '    ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section297fc8dac55da1234e641245246db7ba($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section935dda52148fcdc886c86a6c9b95b04f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
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
                
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD6fa510328adec00b17dd8311e8f26a2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'answer_pass, mod_h5pactivity';
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
                
                $buffer .= 'answer_pass, mod_h5pactivity';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD7f64229c15e42f6f2196bcc30402487(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'i/valid, moodle, {{#str}}answer_pass, mod_h5pactivity{{/str}}';
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
                
                $buffer .= 'i/valid, moodle, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionD6fa510328adec00b17dd8311e8f26a2($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section14dee5192d7e4ef7f971f62211a494d2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#pix}}i/valid, moodle, {{#str}}answer_pass, mod_h5pactivity{{/str}}{{/pix}}
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
                
                $buffer .= $indent . '    ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->sectionD7f64229c15e42f6f2196bcc30402487($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section69371e2dcdf18dd0f46b787d1e158ea6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'answer_fail, mod_h5pactivity';
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
                
                $buffer .= 'answer_fail, mod_h5pactivity';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section33a8d6cd3ca50c89c83865c27e4656fa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'i/invalid, moodle, {{#str}}answer_fail, mod_h5pactivity{{/str}}';
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
                
                $buffer .= 'i/invalid, moodle, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section69371e2dcdf18dd0f46b787d1e158ea6($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB4aa13a615ff0716f2afde400c6b5dbd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#pix}}i/invalid, moodle, {{#str}}answer_fail, mod_h5pactivity{{/str}}{{/pix}}
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
                
                $buffer .= $indent . '    ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section33a8d6cd3ca50c89c83865c27e4656fa($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
