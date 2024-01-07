<?php

class __Mustache_832a4b1ddc9a88f5d2c6c7ad87c43344 extends Mustache_Template
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
        // 'hastilephoto' inverted section
        $value = $context->find('hastilephoto');
        if (empty($value)) {
            
            // 'isComplete' section
            $value = $context->find('isComplete');
            $buffer .= $this->section627cd7fe80fea065922e946ab413ce7d($context, $indent, $value);
            $buffer .= $indent . '
';
            // 'isComplete' inverted section
            $value = $context->find('isComplete');
            if (empty($value)) {
                
                // 'numOutOf' section
                $value = $context->find('numOutOf');
                $buffer .= $this->sectionA964c01e3ee6ad944de444fa9f330905($context, $indent, $value);
            }
        }
        $buffer .= $indent . '
';
        // 'hastilephoto' section
        $value = $context->find('hastilephoto');
        $buffer .= $this->section2383df963e794489fc75304f132c3f2c($context, $indent, $value);

        return $buffer;
    }

    private function section6a234fea2465ad85cf5d3792a8e4b81a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' percent';
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
                
                $buffer .= ' percent';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section106fb8cb9111b6ab9d2d4111b16992d9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' overall-progress allcomplete';
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
                
                $buffer .= ' overall-progress allcomplete';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3a61055e8374c7626854b486d7edb30d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'allcomplete, format_tiles';
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
                
                $buffer .= 'allcomplete, format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section72571b90522199e046978c45d652d7ae(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' data-toggle="tooltip"';
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
                
                $buffer .= ' data-toggle="tooltip"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFd70e2045fe7a73bdd8b25107ed04039(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'star-o, format_tiles, {{#str}}allcomplete, format_tiles{{/str}}';
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
                
                $buffer .= 'star-o, format_tiles, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section3a61055e8374c7626854b486d7edb30d($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB70a695c5161c509bb18431940beb106(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#pix}}star-o, format_tiles, {{#str}}allcomplete, format_tiles{{/str}}{{/pix}}{{#str}}allcomplete, format_tiles{{/str}}';
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
                
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->sectionFd70e2045fe7a73bdd8b25107ed04039($context, $indent, $value);
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section3a61055e8374c7626854b486d7edb30d($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD676d03a3a4f84d025cca68668db620a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'check, format_tiles, {{#str}}allcomplete, format_tiles{{/str}}';
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
                
                $buffer .= 'check, format_tiles, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section3a61055e8374c7626854b486d7edb30d($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section627cd7fe80fea065922e946ab413ce7d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="progress-indic{{#showAsPercent}} percent{{/showAsPercent}}{{#isOverall}} overall-progress allcomplete{{/isOverall}}"
             id="tileprogress-{{tileid}}" data-numcomplete="{{numComplete}}" data-numoutof="{{numOutOf}}"
             title="{{#str}}allcomplete, format_tiles{{/str}}"{{#usetooltips}} data-toggle="tooltip"{{/usetooltips}}>
            {{#isOverall}}{{#pix}}star-o, format_tiles, {{#str}}allcomplete, format_tiles{{/str}}{{/pix}}{{#str}}allcomplete, format_tiles{{/str}}{{/isOverall}}
            {{^isOverall}}{{#pix}}check, format_tiles, {{#str}}allcomplete, format_tiles{{/str}}{{/pix}}{{/isOverall}}
        </div>
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
                
                $buffer .= $indent . '        <div class="progress-indic';
                // 'showAsPercent' section
                $value = $context->find('showAsPercent');
                $buffer .= $this->section6a234fea2465ad85cf5d3792a8e4b81a($context, $indent, $value);
                // 'isOverall' section
                $value = $context->find('isOverall');
                $buffer .= $this->section106fb8cb9111b6ab9d2d4111b16992d9($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '             id="tileprogress-';
                $value = $this->resolveValue($context->find('tileid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-numcomplete="';
                $value = $this->resolveValue($context->find('numComplete'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-numoutof="';
                $value = $this->resolveValue($context->find('numOutOf'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '             title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section3a61055e8374c7626854b486d7edb30d($context, $indent, $value);
                $buffer .= '"';
                // 'usetooltips' section
                $value = $context->find('usetooltips');
                $buffer .= $this->section72571b90522199e046978c45d652d7ae($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '            ';
                // 'isOverall' section
                $value = $context->find('isOverall');
                $buffer .= $this->sectionB70a695c5161c509bb18431940beb106($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            ';
                // 'isOverall' inverted section
                $value = $context->find('isOverall');
                if (empty($value)) {
                    
                    // 'pix' section
                    $value = $context->find('pix');
                    $buffer .= $this->sectionD676d03a3a4f84d025cca68668db620a($context, $indent, $value);
                }
                $buffer .= '
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8a09852d7798cf0dc3ab95003310ff74(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' overall-progress';
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
                
                $buffer .= ' overall-progress';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4bfe7263e72977defccb84d41ce1ee2f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'progress, format_tiles';
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
                
                $buffer .= 'progress, format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section535ce38704c7b85412ecf66b3aa3a3b7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'items, format_tiles';
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
                
                $buffer .= 'items, format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section245e479a81cfbda81f05c9c7e74b07df(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'complete, format_tiles';
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
                
                $buffer .= 'complete, format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6d8a82f7e8522ad0d1cee88b034629a3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                     title="{{#str}}progress, format_tiles{{/str}}:<br>{{numComplete}} / {{numOutOf}} {{#str}}items, format_tiles{{/str}}<br>{{percent}}%<br>{{#str}}complete, format_tiles{{/str}}"
                        data-toggle="tooltip" data-html="true"
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
                
                $buffer .= $indent . '                     title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section4bfe7263e72977defccb84d41ce1ee2f($context, $indent, $value);
                $buffer .= ':<br>';
                $value = $this->resolveValue($context->find('numComplete'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' / ';
                $value = $this->resolveValue($context->find('numOutOf'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section535ce38704c7b85412ecf66b3aa3a3b7($context, $indent, $value);
                $buffer .= '<br>';
                $value = $this->resolveValue($context->find('percent'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '%<br>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section245e479a81cfbda81f05c9c7e74b07df($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                        data-toggle="tooltip" data-html="true"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section032ecdb681681f8ee4396988f5153305(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'overallprogressshort, format_tiles';
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
                
                $buffer .= 'overallprogressshort, format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0a1dcb7f46b31fa70481c5e7f3e2d040(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#str}}overallprogressshort, format_tiles{{/str}}';
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
                $buffer .= $this->section032ecdb681681f8ee4396988f5153305($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section10470c0602d3700b02584489e0eadfa7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '15';
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
                
                $buffer .= '15';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEa2b535d23d597555e15f9324f1e2e4a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="progress-indic percent{{#isOverall}} overall-progress{{/isOverall}}" id="tileprogress-{{tileid}}"
                     data-numcomplete="{{numComplete}}" data-numoutof="{{numOutOf}}"
                    {{#usetooltips}}
                     title="{{#str}}progress, format_tiles{{/str}}:<br>{{numComplete}} / {{numOutOf}} {{#str}}items, format_tiles{{/str}}<br>{{percent}}%<br>{{#str}}complete, format_tiles{{/str}}"
                        data-toggle="tooltip" data-html="true"
                    {{/usetooltips}}
                    {{^usetooltips}}
                     title="{{#str}}progress, format_tiles{{/str}}: {{numComplete}} / {{numOutOf}} {{#str}}items, format_tiles{{/str}} ({{percent}}%) {{#str}}complete, format_tiles{{/str}}"
                    {{/usetooltips}}
                >

                    <div class="progress-indic-label">
                      {{#isOverall}}{{#str}}overallprogressshort, format_tiles{{/str}}{{/isOverall}}{{^isOverall}}{{#str}}progress, format_tiles{{/str}}{{/isOverall}} %
                    </div>
                    <svg viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                        {{! two circles, one showing complete and one showing the user\'s progress }}
                        <circle class="whole" cx="20" cy="20" r="17" fill="none" stroke="#e6e6e6" stroke-width="5"></circle>
                        <circle id="percent-circle-{{tileid}}" class="partial" transform="rotate(-90,20,20)" cx="20"
                                cy="20" r="17" fill="none" stroke="none" stroke-width="5" stroke-dasharray="{{percentCircumf}}"
                                stroke-dashoffset="{{percentOffset}}"></circle>
                        {{! the numeric percentage in centre of circle }}
                        <text x="{{#isSingleDigit}}15{{/isSingleDigit}}{{^isSingleDigit}}10{{/isSingleDigit}}" y="27" font-family="inherit" font-size="20" id="percent-text-{{tileid}}">
                            {{percent}}
                        </text>
                    </svg>
                </div>
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
                
                $buffer .= $indent . '                <div class="progress-indic percent';
                // 'isOverall' section
                $value = $context->find('isOverall');
                $buffer .= $this->section8a09852d7798cf0dc3ab95003310ff74($context, $indent, $value);
                $buffer .= '" id="tileprogress-';
                $value = $this->resolveValue($context->find('tileid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '                     data-numcomplete="';
                $value = $this->resolveValue($context->find('numComplete'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-numoutof="';
                $value = $this->resolveValue($context->find('numOutOf'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                // 'usetooltips' section
                $value = $context->find('usetooltips');
                $buffer .= $this->section6d8a82f7e8522ad0d1cee88b034629a3($context, $indent, $value);
                // 'usetooltips' inverted section
                $value = $context->find('usetooltips');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                     title="';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->section4bfe7263e72977defccb84d41ce1ee2f($context, $indent, $value);
                    $buffer .= ': ';
                    $value = $this->resolveValue($context->find('numComplete'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= ' / ';
                    $value = $this->resolveValue($context->find('numOutOf'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= ' ';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->section535ce38704c7b85412ecf66b3aa3a3b7($context, $indent, $value);
                    $buffer .= ' (';
                    $value = $this->resolveValue($context->find('percent'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '%) ';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->section245e479a81cfbda81f05c9c7e74b07df($context, $indent, $value);
                    $buffer .= '"
';
                }
                $buffer .= $indent . '                >
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                    <div class="progress-indic-label">
';
                $buffer .= $indent . '                      ';
                // 'isOverall' section
                $value = $context->find('isOverall');
                $buffer .= $this->section0a1dcb7f46b31fa70481c5e7f3e2d040($context, $indent, $value);
                // 'isOverall' inverted section
                $value = $context->find('isOverall');
                if (empty($value)) {
                    
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->section4bfe7263e72977defccb84d41ce1ee2f($context, $indent, $value);
                }
                $buffer .= ' %
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <svg viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
';
                $buffer .= $indent . '                        <circle class="whole" cx="20" cy="20" r="17" fill="none" stroke="#e6e6e6" stroke-width="5"></circle>
';
                $buffer .= $indent . '                        <circle id="percent-circle-';
                $value = $this->resolveValue($context->find('tileid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="partial" transform="rotate(-90,20,20)" cx="20"
';
                $buffer .= $indent . '                                cy="20" r="17" fill="none" stroke="none" stroke-width="5" stroke-dasharray="';
                $value = $this->resolveValue($context->find('percentCircumf'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                stroke-dashoffset="';
                $value = $this->resolveValue($context->find('percentOffset'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"></circle>
';
                $buffer .= $indent . '                        <text x="';
                // 'isSingleDigit' section
                $value = $context->find('isSingleDigit');
                $buffer .= $this->section10470c0602d3700b02584489e0eadfa7($context, $indent, $value);
                // 'isSingleDigit' inverted section
                $value = $context->find('isSingleDigit');
                if (empty($value)) {
                    
                    $buffer .= '10';
                }
                $buffer .= '" y="27" font-family="inherit" font-size="20" id="percent-text-';
                $value = $this->resolveValue($context->find('tileid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('percent'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </text>
';
                $buffer .= $indent . '                    </svg>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section615a329744fdcac9ed0df4da4939a560(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                     title="{{#str}}progress, format_tiles{{/str}}:<br> {{numComplete}} / {{numOutOf}} {{#str}}items, format_tiles{{/str}} ({{percent}}%) <br>{{#str}}complete, format_tiles{{/str}}"
                        data-toggle="tooltip" data-html="true"
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
                
                $buffer .= $indent . '                     title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section4bfe7263e72977defccb84d41ce1ee2f($context, $indent, $value);
                $buffer .= ':<br> ';
                $value = $this->resolveValue($context->find('numComplete'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' / ';
                $value = $this->resolveValue($context->find('numOutOf'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section535ce38704c7b85412ecf66b3aa3a3b7($context, $indent, $value);
                $buffer .= ' (';
                $value = $this->resolveValue($context->find('percent'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '%) <br>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section245e479a81cfbda81f05c9c7e74b07df($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                        data-toggle="tooltip" data-html="true"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA964c01e3ee6ad944de444fa9f330905(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{! if the progress is out of zero then do not show the indicator at all}}
            {{#showAsPercent}}
                <div class="progress-indic percent{{#isOverall}} overall-progress{{/isOverall}}" id="tileprogress-{{tileid}}"
                     data-numcomplete="{{numComplete}}" data-numoutof="{{numOutOf}}"
                    {{#usetooltips}}
                     title="{{#str}}progress, format_tiles{{/str}}:<br>{{numComplete}} / {{numOutOf}} {{#str}}items, format_tiles{{/str}}<br>{{percent}}%<br>{{#str}}complete, format_tiles{{/str}}"
                        data-toggle="tooltip" data-html="true"
                    {{/usetooltips}}
                    {{^usetooltips}}
                     title="{{#str}}progress, format_tiles{{/str}}: {{numComplete}} / {{numOutOf}} {{#str}}items, format_tiles{{/str}} ({{percent}}%) {{#str}}complete, format_tiles{{/str}}"
                    {{/usetooltips}}
                >

                    <div class="progress-indic-label">
                      {{#isOverall}}{{#str}}overallprogressshort, format_tiles{{/str}}{{/isOverall}}{{^isOverall}}{{#str}}progress, format_tiles{{/str}}{{/isOverall}} %
                    </div>
                    <svg viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                        {{! two circles, one showing complete and one showing the user\'s progress }}
                        <circle class="whole" cx="20" cy="20" r="17" fill="none" stroke="#e6e6e6" stroke-width="5"></circle>
                        <circle id="percent-circle-{{tileid}}" class="partial" transform="rotate(-90,20,20)" cx="20"
                                cy="20" r="17" fill="none" stroke="none" stroke-width="5" stroke-dasharray="{{percentCircumf}}"
                                stroke-dashoffset="{{percentOffset}}"></circle>
                        {{! the numeric percentage in centre of circle }}
                        <text x="{{#isSingleDigit}}15{{/isSingleDigit}}{{^isSingleDigit}}10{{/isSingleDigit}}" y="27" font-family="inherit" font-size="20" id="percent-text-{{tileid}}">
                            {{percent}}
                        </text>
                    </svg>
                </div>
            {{/showAsPercent}}

            {{^showAsPercent}}
                <div class="progress-indic{{#isOverall}} overall-progress{{/isOverall}}" id="tileprogress-{{tileid}}"
                     data-numcomplete="{{numComplete}}" data-numoutof="{{numOutOf}}"
                    {{#usetooltips}}
                     title="{{#str}}progress, format_tiles{{/str}}:<br> {{numComplete}} / {{numOutOf}} {{#str}}items, format_tiles{{/str}} ({{percent}}%) <br>{{#str}}complete, format_tiles{{/str}}"
                        data-toggle="tooltip" data-html="true"
                    {{/usetooltips}}
                    {{^usetooltips}}
                     title="{{#str}}progress, format_tiles{{/str}}: {{numComplete}} / {{numOutOf}} {{#str}}items, format_tiles{{/str}} ({{percent}}%) {{#str}}complete, format_tiles{{/str}}"
                    {{/usetooltips}}
                >
                    {{#str}}progress, format_tiles{{/str}}:
                    <span id="num-complete-{{tileid}}">{{numComplete}} / {{numOutOf}}</span>
                </div>
            {{/showAsPercent}}
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
                
                // 'showAsPercent' section
                $value = $context->find('showAsPercent');
                $buffer .= $this->sectionEa2b535d23d597555e15f9324f1e2e4a($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'showAsPercent' inverted section
                $value = $context->find('showAsPercent');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                <div class="progress-indic';
                    // 'isOverall' section
                    $value = $context->find('isOverall');
                    $buffer .= $this->section8a09852d7798cf0dc3ab95003310ff74($context, $indent, $value);
                    $buffer .= '" id="tileprogress-';
                    $value = $this->resolveValue($context->find('tileid'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '"
';
                    $buffer .= $indent . '                     data-numcomplete="';
                    $value = $this->resolveValue($context->find('numComplete'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '" data-numoutof="';
                    $value = $this->resolveValue($context->find('numOutOf'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '"
';
                    // 'usetooltips' section
                    $value = $context->find('usetooltips');
                    $buffer .= $this->section615a329744fdcac9ed0df4da4939a560($context, $indent, $value);
                    // 'usetooltips' inverted section
                    $value = $context->find('usetooltips');
                    if (empty($value)) {
                        
                        $buffer .= $indent . '                     title="';
                        // 'str' section
                        $value = $context->find('str');
                        $buffer .= $this->section4bfe7263e72977defccb84d41ce1ee2f($context, $indent, $value);
                        $buffer .= ': ';
                        $value = $this->resolveValue($context->find('numComplete'), $context);
                        $buffer .= call_user_func($this->mustache->getEscape(), $value);
                        $buffer .= ' / ';
                        $value = $this->resolveValue($context->find('numOutOf'), $context);
                        $buffer .= call_user_func($this->mustache->getEscape(), $value);
                        $buffer .= ' ';
                        // 'str' section
                        $value = $context->find('str');
                        $buffer .= $this->section535ce38704c7b85412ecf66b3aa3a3b7($context, $indent, $value);
                        $buffer .= ' (';
                        $value = $this->resolveValue($context->find('percent'), $context);
                        $buffer .= call_user_func($this->mustache->getEscape(), $value);
                        $buffer .= '%) ';
                        // 'str' section
                        $value = $context->find('str');
                        $buffer .= $this->section245e479a81cfbda81f05c9c7e74b07df($context, $indent, $value);
                        $buffer .= '"
';
                    }
                    $buffer .= $indent . '                >
';
                    $buffer .= $indent . '                    ';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->section4bfe7263e72977defccb84d41ce1ee2f($context, $indent, $value);
                    $buffer .= ':
';
                    $buffer .= $indent . '                    <span id="num-complete-';
                    $value = $this->resolveValue($context->find('tileid'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '">';
                    $value = $this->resolveValue($context->find('numComplete'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= ' / ';
                    $value = $this->resolveValue($context->find('numOutOf'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '</span>
';
                    $buffer .= $indent . '                </div>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB911dc65084d87a144ed83c12140079f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'completion-y, format_tiles, {{#str}}allcomplete, format_tiles{{/str}}';
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
                
                $buffer .= 'completion-y, format_tiles, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section3a61055e8374c7626854b486d7edb30d($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0ab2a5e546aa2b7c6f7e89c3824f083c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="progress-complete-alt pull-right" id="tileprogress-{{tileid}}" data-numcomplete="{{numComplete}}" data-numoutof="{{numOutOf}}" title="{{#str}}allcomplete, format_tiles{{/str}}"{{#usetooltips}} data-toggle="tooltip"{{/usetooltips}}>
                {{#pix}}completion-y, format_tiles, {{#str}}allcomplete, format_tiles{{/str}}{{/pix}}
            </div>
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
                
                $buffer .= $indent . '            <div class="progress-complete-alt pull-right" id="tileprogress-';
                $value = $this->resolveValue($context->find('tileid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-numcomplete="';
                $value = $this->resolveValue($context->find('numComplete'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-numoutof="';
                $value = $this->resolveValue($context->find('numOutOf'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section3a61055e8374c7626854b486d7edb30d($context, $indent, $value);
                $buffer .= '"';
                // 'usetooltips' section
                $value = $context->find('usetooltips');
                $buffer .= $this->section72571b90522199e046978c45d652d7ae($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '                ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->sectionB911dc65084d87a144ed83c12140079f($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section420de19037c36290ea89484cfc11eed5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="progress-indic percent" id="tileprogress-{{tileid}}"
                    data-numcomplete="{{numComplete}}" data-numoutof="{{numOutOf}}">
                    {{#str}}progress, format_tiles{{/str}}: {{percent}}%
                </div>
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
                
                $buffer .= $indent . '                <div class="progress-indic percent" id="tileprogress-';
                $value = $this->resolveValue($context->find('tileid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '                    data-numcomplete="';
                $value = $this->resolveValue($context->find('numComplete'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-numoutof="';
                $value = $this->resolveValue($context->find('numOutOf'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section4bfe7263e72977defccb84d41ce1ee2f($context, $indent, $value);
                $buffer .= ': ';
                $value = $this->resolveValue($context->find('percent'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '%
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8878765c90571f1be9217136eb0925c2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                         title="{{#str}}progress, format_tiles{{/str}}:<br> {{numComplete}} / {{numOutOf}} {{#str}}items, format_tiles{{/str}} ({{percent}}%) <br>{{#str}}complete, format_tiles{{/str}}"
                         data-toggle="tooltip" data-html="true"
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
                
                $buffer .= $indent . '                         title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section4bfe7263e72977defccb84d41ce1ee2f($context, $indent, $value);
                $buffer .= ':<br> ';
                $value = $this->resolveValue($context->find('numComplete'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' / ';
                $value = $this->resolveValue($context->find('numOutOf'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section535ce38704c7b85412ecf66b3aa3a3b7($context, $indent, $value);
                $buffer .= ' (';
                $value = $this->resolveValue($context->find('percent'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '%) <br>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section245e479a81cfbda81f05c9c7e74b07df($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                         data-toggle="tooltip" data-html="true"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section451d83ddd0853ec5018aeab417d2d76d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{#isComplete}}
            <div class="progress-complete-alt pull-right" id="tileprogress-{{tileid}}" data-numcomplete="{{numComplete}}" data-numoutof="{{numOutOf}}" title="{{#str}}allcomplete, format_tiles{{/str}}"{{#usetooltips}} data-toggle="tooltip"{{/usetooltips}}>
                {{#pix}}completion-y, format_tiles, {{#str}}allcomplete, format_tiles{{/str}}{{/pix}}
            </div>
        {{/isComplete}}
        {{^isComplete}}
            {{#showAsPercent}}
                <div class="progress-indic percent" id="tileprogress-{{tileid}}"
                    data-numcomplete="{{numComplete}}" data-numoutof="{{numOutOf}}">
                    {{#str}}progress, format_tiles{{/str}}: {{percent}}%
                </div>
            {{/showAsPercent}}
            {{^showAsPercent}}
                <div class="progress-indic{{#isOverall}} overall-progress{{/isOverall}}" id="tileprogress-{{tileid}}"
                    data-numcomplete="{{numComplete}}" data-numoutof="{{numOutOf}}"
                    {{#usetooltips}}
                         title="{{#str}}progress, format_tiles{{/str}}:<br> {{numComplete}} / {{numOutOf}} {{#str}}items, format_tiles{{/str}} ({{percent}}%) <br>{{#str}}complete, format_tiles{{/str}}"
                         data-toggle="tooltip" data-html="true"
                    {{/usetooltips}}
                    {{^usetooltips}}
                     title="{{#str}}progress, format_tiles{{/str}}: {{numComplete}} / {{numOutOf}} {{#str}}items, format_tiles{{/str}} ({{percent}}%) {{#str}}complete, format_tiles{{/str}}"
                    {{/usetooltips}}
                >
                    {{#str}}progress, format_tiles{{/str}}:
                    <span id="num-complete-{{tileid}}">{{numComplete}} / {{numOutOf}}</span>
                </div>
            {{/showAsPercent}}
        {{/isComplete}}
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
                
                // 'isComplete' section
                $value = $context->find('isComplete');
                $buffer .= $this->section0ab2a5e546aa2b7c6f7e89c3824f083c($context, $indent, $value);
                // 'isComplete' inverted section
                $value = $context->find('isComplete');
                if (empty($value)) {
                    
                    // 'showAsPercent' section
                    $value = $context->find('showAsPercent');
                    $buffer .= $this->section420de19037c36290ea89484cfc11eed5($context, $indent, $value);
                    // 'showAsPercent' inverted section
                    $value = $context->find('showAsPercent');
                    if (empty($value)) {
                        
                        $buffer .= $indent . '                <div class="progress-indic';
                        // 'isOverall' section
                        $value = $context->find('isOverall');
                        $buffer .= $this->section8a09852d7798cf0dc3ab95003310ff74($context, $indent, $value);
                        $buffer .= '" id="tileprogress-';
                        $value = $this->resolveValue($context->find('tileid'), $context);
                        $buffer .= call_user_func($this->mustache->getEscape(), $value);
                        $buffer .= '"
';
                        $buffer .= $indent . '                    data-numcomplete="';
                        $value = $this->resolveValue($context->find('numComplete'), $context);
                        $buffer .= call_user_func($this->mustache->getEscape(), $value);
                        $buffer .= '" data-numoutof="';
                        $value = $this->resolveValue($context->find('numOutOf'), $context);
                        $buffer .= call_user_func($this->mustache->getEscape(), $value);
                        $buffer .= '"
';
                        // 'usetooltips' section
                        $value = $context->find('usetooltips');
                        $buffer .= $this->section8878765c90571f1be9217136eb0925c2($context, $indent, $value);
                        // 'usetooltips' inverted section
                        $value = $context->find('usetooltips');
                        if (empty($value)) {
                            
                            $buffer .= $indent . '                     title="';
                            // 'str' section
                            $value = $context->find('str');
                            $buffer .= $this->section4bfe7263e72977defccb84d41ce1ee2f($context, $indent, $value);
                            $buffer .= ': ';
                            $value = $this->resolveValue($context->find('numComplete'), $context);
                            $buffer .= call_user_func($this->mustache->getEscape(), $value);
                            $buffer .= ' / ';
                            $value = $this->resolveValue($context->find('numOutOf'), $context);
                            $buffer .= call_user_func($this->mustache->getEscape(), $value);
                            $buffer .= ' ';
                            // 'str' section
                            $value = $context->find('str');
                            $buffer .= $this->section535ce38704c7b85412ecf66b3aa3a3b7($context, $indent, $value);
                            $buffer .= ' (';
                            $value = $this->resolveValue($context->find('percent'), $context);
                            $buffer .= call_user_func($this->mustache->getEscape(), $value);
                            $buffer .= '%) ';
                            // 'str' section
                            $value = $context->find('str');
                            $buffer .= $this->section245e479a81cfbda81f05c9c7e74b07df($context, $indent, $value);
                            $buffer .= '"
';
                        }
                        $buffer .= $indent . '                >
';
                        $buffer .= $indent . '                    ';
                        // 'str' section
                        $value = $context->find('str');
                        $buffer .= $this->section4bfe7263e72977defccb84d41ce1ee2f($context, $indent, $value);
                        $buffer .= ':
';
                        $buffer .= $indent . '                    <span id="num-complete-';
                        $value = $this->resolveValue($context->find('tileid'), $context);
                        $buffer .= call_user_func($this->mustache->getEscape(), $value);
                        $buffer .= '">';
                        $value = $this->resolveValue($context->find('numComplete'), $context);
                        $buffer .= call_user_func($this->mustache->getEscape(), $value);
                        $buffer .= ' / ';
                        $value = $this->resolveValue($context->find('numOutOf'), $context);
                        $buffer .= call_user_func($this->mustache->getEscape(), $value);
                        $buffer .= '</span>
';
                        $buffer .= $indent . '                </div>
';
                    }
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2383df963e794489fc75304f132c3f2c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#numOutOf}}
        {{#isComplete}}
            <div class="progress-complete-alt pull-right" id="tileprogress-{{tileid}}" data-numcomplete="{{numComplete}}" data-numoutof="{{numOutOf}}" title="{{#str}}allcomplete, format_tiles{{/str}}"{{#usetooltips}} data-toggle="tooltip"{{/usetooltips}}>
                {{#pix}}completion-y, format_tiles, {{#str}}allcomplete, format_tiles{{/str}}{{/pix}}
            </div>
        {{/isComplete}}
        {{^isComplete}}
            {{#showAsPercent}}
                <div class="progress-indic percent" id="tileprogress-{{tileid}}"
                    data-numcomplete="{{numComplete}}" data-numoutof="{{numOutOf}}">
                    {{#str}}progress, format_tiles{{/str}}: {{percent}}%
                </div>
            {{/showAsPercent}}
            {{^showAsPercent}}
                <div class="progress-indic{{#isOverall}} overall-progress{{/isOverall}}" id="tileprogress-{{tileid}}"
                    data-numcomplete="{{numComplete}}" data-numoutof="{{numOutOf}}"
                    {{#usetooltips}}
                         title="{{#str}}progress, format_tiles{{/str}}:<br> {{numComplete}} / {{numOutOf}} {{#str}}items, format_tiles{{/str}} ({{percent}}%) <br>{{#str}}complete, format_tiles{{/str}}"
                         data-toggle="tooltip" data-html="true"
                    {{/usetooltips}}
                    {{^usetooltips}}
                     title="{{#str}}progress, format_tiles{{/str}}: {{numComplete}} / {{numOutOf}} {{#str}}items, format_tiles{{/str}} ({{percent}}%) {{#str}}complete, format_tiles{{/str}}"
                    {{/usetooltips}}
                >
                    {{#str}}progress, format_tiles{{/str}}:
                    <span id="num-complete-{{tileid}}">{{numComplete}} / {{numOutOf}}</span>
                </div>
            {{/showAsPercent}}
        {{/isComplete}}
    {{/numOutOf}}
    {{^numOutOf}}
        <div class="progress-indic{{#showAsPercent}} percent{{/showAsPercent}} placeholder"
             id="tileprogress-{{tileid}}" data-numcomplete="-1" data-numoutof="0" style="display: none;">
            {{! placeholder progress indicator for possible JS replacement}}
        </div>
    {{/numOutOf}}
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
                
                // 'numOutOf' section
                $value = $context->find('numOutOf');
                $buffer .= $this->section451d83ddd0853ec5018aeab417d2d76d($context, $indent, $value);
                // 'numOutOf' inverted section
                $value = $context->find('numOutOf');
                if (empty($value)) {
                    
                    $buffer .= $indent . '        <div class="progress-indic';
                    // 'showAsPercent' section
                    $value = $context->find('showAsPercent');
                    $buffer .= $this->section6a234fea2465ad85cf5d3792a8e4b81a($context, $indent, $value);
                    $buffer .= ' placeholder"
';
                    $buffer .= $indent . '             id="tileprogress-';
                    $value = $this->resolveValue($context->find('tileid'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '" data-numcomplete="-1" data-numoutof="0" style="display: none;">
';
                    $buffer .= $indent . '        </div>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
