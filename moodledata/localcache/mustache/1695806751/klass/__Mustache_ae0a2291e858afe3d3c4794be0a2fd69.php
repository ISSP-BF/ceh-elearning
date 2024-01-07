<?php

class __Mustache_ae0a2291e858afe3d3c4794be0a2fd69 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'posts' section
        $value = $context->find('posts');
        $buffer .= $this->sectionA4cde9c9f0f15953f7ebaf21cf7f437b($context, $indent, $value);

        return $buffer;
    }

    private function sectionE053275c98cebd381fa1d86d969e5f75(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' postincontext, mod_forum ';
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
                
                $buffer .= ' postincontext, mod_forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA4cde9c9f0f15953f7ebaf21cf7f437b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{< mod_forum/forum_discussion_post }}
        {{$subject}}
            {{> mod_forum/forum_post_subject_with_context_links }}
        {{/subject}}
        {{$replies}}{{/replies}}
        {{$footer}}
            <div><a href="{{{urls.view}}}">{{#str}} postincontext, mod_forum {{/str}}</a></div>
        {{/footer}}
    {{/ mod_forum/forum_discussion_post }}
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
                if ($parent = $this->mustache->loadPartial('mod_forum/forum_discussion_post')) {
                    $context->pushBlockContext(array(
                        'subject' => array($this, 'blockF56ff579608d695095fb4794bc0975ad'),
                        'replies' => array($this, 'blockD41d8cd98f00b204e9800998ecf8427e'),
                        'footer' => array($this, 'block44cfc87d68dcd7a85e571288be82c7b7'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function blockF56ff579608d695095fb4794bc0975ad($context)
    {
        $indent = $buffer = '';
        if ($partial = $this->mustache->loadPartial('mod_forum/forum_post_subject_with_context_links')) {
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
    
        return $buffer;
    }

    public function blockD41d8cd98f00b204e9800998ecf8427e($context)
    {
        $indent = $buffer = '';
    
        return $buffer;
    }

    public function block44cfc87d68dcd7a85e571288be82c7b7($context)
    {
        $indent = $buffer = '';
        $buffer .= '            <div><a href="';
        $value = $this->resolveValue($context->findDot('urls.view'), $context);
        $buffer .= $value;
        $buffer .= '">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionE053275c98cebd381fa1d86d969e5f75($context, $indent, $value);
        $buffer .= '</a></div>
';
    
        return $buffer;
    }
}
