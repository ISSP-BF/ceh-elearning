<?php

class __Mustache_c7359ffd797265dd5d475a1827e9de26 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'coursename' section
        $value = $context->find('coursename');
        $buffer .= $this->section51f6a0d03da8ae26df92dd0f5904e3a5($context, $indent, $value);
        // 'urls.viewforum' section
        $value = $context->findDot('urls.viewforum');
        $buffer .= $this->sectionEd38c2a2ae9500af8955efd00c20711d($context, $indent, $value);
        // 'urls.viewforum' inverted section
        $value = $context->findDot('urls.viewforum');
        if (empty($value)) {
            
            $buffer .= $indent . '    ';
            $value = $this->resolveValue($context->find('forumname'), $context);
            $buffer .= $value;
            $buffer .= '
';
        }
        // 'showdiscussionname' section
        $value = $context->find('showdiscussionname');
        $buffer .= $this->sectionDea2c9a75b3b6e3aaf38e341c7f5020e($context, $indent, $value);

        return $buffer;
    }

    private function section000d4cf90ab512ae4cd232cea29377cb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <a href="{{{urls.viewcourse}}}">{{{coursename}}}</a> ->
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
                
                $buffer .= $indent . '        <a href="';
                $value = $this->resolveValue($context->findDot('urls.viewcourse'), $context);
                $buffer .= $value;
                $buffer .= '">';
                $value = $this->resolveValue($context->find('coursename'), $context);
                $buffer .= $value;
                $buffer .= '</a> ->
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section51f6a0d03da8ae26df92dd0f5904e3a5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#urls.viewcourse}}
        <a href="{{{urls.viewcourse}}}">{{{coursename}}}</a> ->
    {{/urls.viewcourse}}
    {{^urls.viewcourse}}
        {{coursename}} ->
    {{/urls.viewcourse}}
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
                
                // 'urls.viewcourse' section
                $value = $context->findDot('urls.viewcourse');
                $buffer .= $this->section000d4cf90ab512ae4cd232cea29377cb($context, $indent, $value);
                // 'urls.viewcourse' inverted section
                $value = $context->findDot('urls.viewcourse');
                if (empty($value)) {
                    
                    $buffer .= $indent . '        ';
                    $value = $this->resolveValue($context->find('coursename'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= ' ->
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEd38c2a2ae9500af8955efd00c20711d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <a href="{{{urls.viewforum}}}">{{{forumname}}}</a>
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
                
                $buffer .= $indent . '    <a href="';
                $value = $this->resolveValue($context->findDot('urls.viewforum'), $context);
                $buffer .= $value;
                $buffer .= '">';
                $value = $this->resolveValue($context->find('forumname'), $context);
                $buffer .= $value;
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3a4cd7f4aec90012c96112debb80b043(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        -> <a href="{{{urls.viewdiscussion}}}">{{{discussionname}}}</a>
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
                
                $buffer .= $indent . '        -> <a href="';
                $value = $this->resolveValue($context->findDot('urls.viewdiscussion'), $context);
                $buffer .= $value;
                $buffer .= '">';
                $value = $this->resolveValue($context->find('discussionname'), $context);
                $buffer .= $value;
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section60758270f8ad4076513d2969925c0bc5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            -> <a href="{{{urls.viewparent}}}">{{{subject}}}</a>
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
                
                $buffer .= $indent . '            -> <a href="';
                $value = $this->resolveValue($context->findDot('urls.viewparent'), $context);
                $buffer .= $value;
                $buffer .= '">';
                $value = $this->resolveValue($context->find('subject'), $context);
                $buffer .= $value;
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF810b833ad6ce82f9d13828cf3f0e69f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{#urls.viewparent}}
            -> <a href="{{{urls.viewparent}}}">{{{subject}}}</a>
        {{/urls.viewparent}}
        {{^urls.viewparent}}
            {{{subject}}}
        {{/urls.viewparent}}
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
                
                // 'urls.viewparent' section
                $value = $context->findDot('urls.viewparent');
                $buffer .= $this->section60758270f8ad4076513d2969925c0bc5($context, $indent, $value);
                // 'urls.viewparent' inverted section
                $value = $context->findDot('urls.viewparent');
                if (empty($value)) {
                    
                    $buffer .= $indent . '            ';
                    $value = $this->resolveValue($context->find('subject'), $context);
                    $buffer .= $value;
                    $buffer .= '
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDea2c9a75b3b6e3aaf38e341c7f5020e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#urls.viewdiscussion}}
        -> <a href="{{{urls.viewdiscussion}}}">{{{discussionname}}}</a>
    {{/urls.viewdiscussion}}
    {{^urls.viewdiscussion}}
        {{{discussionname}}}
    {{/urls.viewdiscussion}}
    {{#hasparent}}
        {{#urls.viewparent}}
            -> <a href="{{{urls.viewparent}}}">{{{subject}}}</a>
        {{/urls.viewparent}}
        {{^urls.viewparent}}
            {{{subject}}}
        {{/urls.viewparent}}
    {{/hasparent}}
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
                
                // 'urls.viewdiscussion' section
                $value = $context->findDot('urls.viewdiscussion');
                $buffer .= $this->section3a4cd7f4aec90012c96112debb80b043($context, $indent, $value);
                // 'urls.viewdiscussion' inverted section
                $value = $context->findDot('urls.viewdiscussion');
                if (empty($value)) {
                    
                    $buffer .= $indent . '        ';
                    $value = $this->resolveValue($context->find('discussionname'), $context);
                    $buffer .= $value;
                    $buffer .= '
';
                }
                // 'hasparent' section
                $value = $context->find('hasparent');
                $buffer .= $this->sectionF810b833ad6ce82f9d13828cf3f0e69f($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
