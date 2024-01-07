<?php

class __Mustache_d12c039ea5e01b81ba34854906209e21 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<table class="table">
';
        $buffer .= $indent . '  <thead>
';
        $buffer .= $indent . '    <tr>
';
        $buffer .= $indent . '      <th scope="col">#</th>
';
        $buffer .= $indent . '      <th scope="col">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionE6b46500979eb354e49e0a5253f3f8fa($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '      <th scope="col">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section6d91f10db888869acd77a17162b98943($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '      <th scope="col" class="d-none d-md-table-cell">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionB72c710457072b11ae97b9b91dc6c3ee($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '      <th scope="col" class="d-none d-sm-table-cell">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionC714c80f290e8aeb5eb80c034a46199d($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '      <th scope="col" class="d-none d-sm-table-cell" class="text-center">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section310355815749203c29fbdff3f5087fcb($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '      <th scope="col" class="text-center">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section7dbf4f6a494ad41a9156f1570c04ec25($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '      <th scope="col">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section397b772fcb1e6078217d56dedc2345fc($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '    </tr>
';
        $buffer .= $indent . '  </thead>
';
        $buffer .= $indent . '  <tbody>
';
        // 'attempts' section
        $value = $context->find('attempts');
        $buffer .= $this->sectionB6c1b79150123a7c9392226d17736c43($context, $indent, $value);
        $buffer .= $indent . '  </tbody>
';
        $buffer .= $indent . '</table>
';

        return $buffer;
    }

    private function sectionE6b46500979eb354e49e0a5253f3f8fa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' date ';
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
                
                $buffer .= ' date ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6d91f10db888869acd77a17162b98943(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' score, mod_h5pactivity ';
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
                
                $buffer .= ' score, mod_h5pactivity ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB72c710457072b11ae97b9b91dc6c3ee(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' maxscore, mod_h5pactivity ';
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
                
                $buffer .= ' maxscore, mod_h5pactivity ';
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

    private function section7dbf4f6a494ad41a9156f1570c04ec25(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' success ';
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
                
                $buffer .= ' success ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section397b772fcb1e6078217d56dedc2345fc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' report ';
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
                
                $buffer .= ' report ';
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

    private function section3c16870499a70829fcce540bcae4c23e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' strftimedatetimeshort, core_langconfig ';
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
                
                $buffer .= ' strftimedatetimeshort, core_langconfig ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section85f6764e2ddd2f837f97cedd00405c7c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{timemodified}}, {{#str}} strftimedatetimeshort, core_langconfig {{/str}} ';
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
                $buffer .= $this->section3c16870499a70829fcce540bcae4c23e($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1c9237ce7c1b50ebf6a9921e14030acb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' view_report, mod_h5pactivity ';
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
                
                $buffer .= ' view_report, mod_h5pactivity ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0a2ee9dbb4edf675a121f4629d47963f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' view ';
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
                
                $buffer .= ' view ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB6c1b79150123a7c9392226d17736c43(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <tr>
      <th scope="row">{{attempt}}</th>
      <td>
        <span class="d-none d-lg-inline">
          {{#userdate}} {{timemodified}}, {{#str}} strftimedatetime, core_langconfig {{/str}} {{/userdate}}
        </span>
        <span class="d-inline d-lg-none">
          {{#userdate}} {{timemodified}}, {{#str}} strftimedatetimeshort, core_langconfig {{/str}} {{/userdate}}
        </span>
      </td>
      <td>{{rawscore}}<span class="d-inline d-md-none"> / {{maxscore}}</span></td>
      <td class="d-none d-md-table-cell">{{maxscore}}</td>
      <td class="d-none d-sm-table-cell">
        <span class="d-none d-md-inline">{{duration}}</span>
        <span class="d-inline d-md-none">{{durationcompact}}</span>
      </td>
      <td class="text-center d-none d-sm-table-cell">{{{completionicon}}}</td>
      <td class="text-center">{{{successicon}}}</td>
      <td>
        <span class="d-none d-md-inline">
          <a href="{{{reporturl}}}">{{#str}} view_report, mod_h5pactivity {{/str}}</a>
        </span>
        <span class="d-inline d-md-none">
          <a href="{{{reporturl}}}">{{#str}} view {{/str}}</a>
        </span>
      </td>
    </tr>
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
                
                $buffer .= $indent . '    <tr>
';
                $buffer .= $indent . '      <th scope="row">';
                $value = $this->resolveValue($context->find('attempt'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</th>
';
                $buffer .= $indent . '      <td>
';
                $buffer .= $indent . '        <span class="d-none d-lg-inline">
';
                $buffer .= $indent . '          ';
                // 'userdate' section
                $value = $context->find('userdate');
                $buffer .= $this->section13dd706a2d1616cbaf24b2be79924a16($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </span>
';
                $buffer .= $indent . '        <span class="d-inline d-lg-none">
';
                $buffer .= $indent . '          ';
                // 'userdate' section
                $value = $context->find('userdate');
                $buffer .= $this->section85f6764e2ddd2f837f97cedd00405c7c($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </span>
';
                $buffer .= $indent . '      </td>
';
                $buffer .= $indent . '      <td>';
                $value = $this->resolveValue($context->find('rawscore'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '<span class="d-inline d-md-none"> / ';
                $value = $this->resolveValue($context->find('maxscore'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span></td>
';
                $buffer .= $indent . '      <td class="d-none d-md-table-cell">';
                $value = $this->resolveValue($context->find('maxscore'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</td>
';
                $buffer .= $indent . '      <td class="d-none d-sm-table-cell">
';
                $buffer .= $indent . '        <span class="d-none d-md-inline">';
                $value = $this->resolveValue($context->find('duration'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '        <span class="d-inline d-md-none">';
                $value = $this->resolveValue($context->find('durationcompact'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '      </td>
';
                $buffer .= $indent . '      <td class="text-center d-none d-sm-table-cell">';
                $value = $this->resolveValue($context->find('completionicon'), $context);
                $buffer .= $value;
                $buffer .= '</td>
';
                $buffer .= $indent . '      <td class="text-center">';
                $value = $this->resolveValue($context->find('successicon'), $context);
                $buffer .= $value;
                $buffer .= '</td>
';
                $buffer .= $indent . '      <td>
';
                $buffer .= $indent . '        <span class="d-none d-md-inline">
';
                $buffer .= $indent . '          <a href="';
                $value = $this->resolveValue($context->find('reporturl'), $context);
                $buffer .= $value;
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section1c9237ce7c1b50ebf6a9921e14030acb($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '        </span>
';
                $buffer .= $indent . '        <span class="d-inline d-md-none">
';
                $buffer .= $indent . '          <a href="';
                $value = $this->resolveValue($context->find('reporturl'), $context);
                $buffer .= $value;
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section0a2ee9dbb4edf675a121f4629d47963f($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '        </span>
';
                $buffer .= $indent . '      </td>
';
                $buffer .= $indent . '    </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
