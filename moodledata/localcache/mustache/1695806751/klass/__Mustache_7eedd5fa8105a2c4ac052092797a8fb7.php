<?php

class __Mustache_7eedd5fa8105a2c4ac052092797a8fb7 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        // 'isediting' inverted section
        $value = $context->find('isediting');
        if (empty($value)) {
            
            $buffer .= $indent . '    <span class="completionchangenotify complete-y-';
            $value = $this->resolveValue($context->find('cmid'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '">';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section245e479a81cfbda81f05c9c7e74b07df($context, $indent, $value);
            $buffer .= '</span>
';
            $buffer .= $indent . '    <span class="completionchangenotify complete-n-';
            $value = $this->resolveValue($context->find('cmid'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '">';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->sectionE2abdfe567f67eaa34f0499a73b94d66($context, $indent, $value);
            $buffer .= '</span>
';
            // 'completionIsManual' section
            $value = $context->find('completionIsManual');
            $buffer .= $this->section9a98593b57f0553f60b4ab5ff1d19cd1($context, $indent, $value);
            // 'completionIsManual' inverted section
            $value = $context->find('completionIsManual');
            if (empty($value)) {
                
                $buffer .= $indent . '        <span class="completioncheckbox completion-auto completion-check-';
                $value = $this->resolveValue($context->find('cmid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '              title="';
                // 'completionstring' section
                $value = $context->find('completionstring');
                $buffer .= $this->sectionFc01b6bee0583f71c71c618ed8ec4728($context, $indent, $value);
                // 'completionstring' inverted section
                $value = $context->find('completionstring');
                if (empty($value)) {
                    
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->sectionDd1901b336ee1c92498472f772df24ae($context, $indent, $value);
                }
                $buffer .= '"
';
                $buffer .= $indent . '              data-ismanual="0" data-completionstate="';
                $value = $this->resolveValue($context->find('completionstate'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '            <span class="completion-icon completion_img_';
                $value = $this->resolveValue($context->find('cmid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' completion-icon-';
                $value = $this->resolveValue($context->find('completionicon'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"></span>
';
                $buffer .= $indent . '        </span>
';
            }
        }
        $buffer .= $indent . '
';
        // 'isediting' section
        $value = $context->find('isediting');
        $buffer .= $this->sectionE74892aee13ad58c09f69981d94463c0($context, $indent, $value);

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

    private function sectionE2abdfe567f67eaa34f0499a73b94d66(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'notcomplete, format_tiles';
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
                
                $buffer .= 'notcomplete, format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFc01b6bee0583f71c71c618ed8ec4728(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{completionstring}}';
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
                
                $value = $this->resolveValue($context->find('completionstring'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDd1901b336ee1c92498472f772df24ae(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'togglecompletion, format_tiles';
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
                
                $buffer .= 'togglecompletion, format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9a98593b57f0553f60b4ab5ff1d19cd1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <button class="completioncheckbox" data-action="change-completion-status" data-cmid="{{cmid}}" data-state="{{completionstate}}"
              data-activityname="{{modtitle}}" title="{{#completionstring}}{{completionstring}}{{/completionstring}}{{^completionstring}}{{#str}}togglecompletion, format_tiles{{/str}}{{/completionstring}}">
            <span class="completion-icon completion_img_{{cmid}} completion-icon-{{completionicon}}"></span>
        </button>
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
                
                $buffer .= $indent . '        <button class="completioncheckbox" data-action="change-completion-status" data-cmid="';
                $value = $this->resolveValue($context->find('cmid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-state="';
                $value = $this->resolveValue($context->find('completionstate'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '              data-activityname="';
                $value = $this->resolveValue($context->find('modtitle'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" title="';
                // 'completionstring' section
                $value = $context->find('completionstring');
                $buffer .= $this->sectionFc01b6bee0583f71c71c618ed8ec4728($context, $indent, $value);
                // 'completionstring' inverted section
                $value = $context->find('completionstring');
                if (empty($value)) {
                    
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->sectionDd1901b336ee1c92498472f772df24ae($context, $indent, $value);
                }
                $buffer .= '">
';
                $buffer .= $indent . '            <span class="completion-icon completion_img_';
                $value = $this->resolveValue($context->find('cmid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' completion-icon-';
                $value = $this->resolveValue($context->find('completionicon'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"></span>
';
                $buffer .= $indent . '        </button>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE74892aee13ad58c09f69981d94463c0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="completioncheckbox completion-check-{{cmid}}" data-action="change-completion-status" data-cmid="{{cmid}}" data-state="{{completionstate}}"
    title="{{#completionstring}}{{completionstring}}{{/completionstring}}{{^completionstring}}{{#str}}togglecompletion, format_tiles{{/str}}{{/completionstring}}" data-ismanual="0">
        <span class="completion-icon completion_img_{{cmid}} completion-icon-{{completionicon}}"></span>
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
                
                $buffer .= $indent . '    <div class="completioncheckbox completion-check-';
                $value = $this->resolveValue($context->find('cmid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-action="change-completion-status" data-cmid="';
                $value = $this->resolveValue($context->find('cmid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-state="';
                $value = $this->resolveValue($context->find('completionstate'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '    title="';
                // 'completionstring' section
                $value = $context->find('completionstring');
                $buffer .= $this->sectionFc01b6bee0583f71c71c618ed8ec4728($context, $indent, $value);
                // 'completionstring' inverted section
                $value = $context->find('completionstring');
                if (empty($value)) {
                    
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->sectionDd1901b336ee1c92498472f772df24ae($context, $indent, $value);
                }
                $buffer .= '" data-ismanual="0">
';
                $buffer .= $indent . '        <span class="completion-icon completion_img_';
                $value = $this->resolveValue($context->find('cmid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' completion-icon-';
                $value = $this->resolveValue($context->find('completionicon'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"></span>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
