<?php

class __Mustache_d4f344d849b37bd9e418d955a09acc21 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<!DOCTYPE html>
';
        $buffer .= $indent . '<html {#htmllang}>
';
        $buffer .= $indent . '<head>
';
        $buffer .= $indent . '    <title>{#h5p.desc}</title>
';
        $buffer .= $indent . '    <link rel="stylesheet" type="text/css" href="tinymce_h5p_dialog.css">
';
        $buffer .= $indent . '</head>
';
        $buffer .= $indent . '<body>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<script type="text/javascript">
';
        $buffer .= $indent . '    // Because there is no relative path to TinyMCE, we have to use JavaScript
';
        $buffer .= $indent . '    // to work out correct path from the .js files from TinyMCE. Only files
';
        $buffer .= $indent . '    // inside this plugin can be included with relative path (below).
';
        $buffer .= $indent . '    var editor_tinymce_include = function(path) {
';
        $buffer .= $indent . '        document.write(\'<script type="text/javascript" src="\' +
';
        $buffer .= $indent . '                parent.tinyMCE.baseURL + \'/\' + path + \'"></\' + \'script>\');
';
        $buffer .= $indent . '    };
';
        $buffer .= $indent . '    editor_tinymce_include(\'tiny_mce_popup.js\');
';
        $buffer .= $indent . '    editor_tinymce_include(\'utils/mctabs.js\');
';
        $buffer .= $indent . '    editor_tinymce_include(\'utils/validate.js\');
';
        $buffer .= $indent . '    editor_tinymce_include(\'utils/form_utils.js\');
';
        $buffer .= $indent . '    editor_tinymce_include(\'utils/editable_selects.js\');
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    var displayWarning = function (selector, val) {
';
        $buffer .= $indent . '        var elems = document.querySelectorAll(selector), i;
';
        $buffer .= $indent . '        for (i = 0; i < elems.length; ++i) {
';
        $buffer .= $indent . '            elems[i].style.display = val;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    var getH5PBrowserHTML = function(id, target_form_element, type) {
';
        $buffer .= $indent . '        var option = "h5p_tinymce_browser_callback", html;
';
        $buffer .= $indent . '        if (!tinyMCEPopup.getParam(option, tinyMCEPopup.getParam("file_browser_callback")))
';
        $buffer .= $indent . '            return "";
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        parent.M.editor_tinymce.filepicker = parent.h5p_tinymce_browser_callback;
';
        $buffer .= $indent . '        html = \'<a class="moodlebutton" id="\' + id + \'_link" href="#" \' +
';
        $buffer .= $indent . '               \'onclick="openBrowser(\\\'\' + id + \'\\\',\\\'\' + target_form_element +
';
        $buffer .= $indent . '               \'\\\', \\\'\' + type + \'\\\',\\\'\' + option + \'\\\');\' +
';
        $buffer .= $indent . '               \'displayWarning(\\\'.alert-warning\\\', \\\'none\\\');return false;" onmousedown="return false;">\';
';
        $buffer .= $indent . '        html += \'<span id="\' + id + \'">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionD73c65684903a8ee0710b007ee2a1704($context, $indent, $value);
        $buffer .= '</span>\';
';
        $buffer .= $indent . '        html += \'</a>\';
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        return html;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    var cfgWwwroot =     \'';
        $value = $this->resolveValue($context->find('cfgWwwroot'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '\';
';
        $buffer .= $indent . '    var addParagraphs =  \'';
        $value = $this->resolveValue($context->find('addParagraphs'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '\';
';
        $buffer .= $indent . '    var CONTENTWARNING = \'';
        $value = $this->resolveValue($context->findDot('CSS.CONTENTWARNING'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '\';
';
        $buffer .= $indent . '    var URLWARNING =     \'';
        $value = $this->resolveValue($context->findDot('CSS.URLWARNING'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '\';
';
        $buffer .= $indent . '</script>
';
        $buffer .= $indent . '<script type="text/javascript" src="tinymce/dialog.js"></script>
';
        $buffer .= $indent . '    <form onsubmit="H5PDialog.insert();return false;" action="#">
';
        $buffer .= $indent . '        <div style="display:none" role="alert" class="alert alert-warning mb-1 ';
        $value = $this->resolveValue($context->findDot('CSS.CONTENTWARNING'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '            ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section5d32393eb0657ad0651c3ee069942c69($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div style="display:none" role="alert" class="alert alert-warning mb-1 ';
        $value = $this->resolveValue($context->findDot('CSS.URLWARNING'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '            ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionD5fe078311ac12aee82418b0b02ff3c0($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        // 'canUploadAndEmbed' section
        $value = $context->find('canUploadAndEmbed');
        $buffer .= $this->section89ff4e1894a1f78fc2c9cfadb53e75d4($context, $indent, $value);
        $buffer .= $indent . '        <div>
';
        $buffer .= $indent . '            <label for="';
        $value = $this->resolveValue($context->find('elementid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '_';
        $value = $this->resolveValue($context->findDot('CSS.H5PBROWSER'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        // 'canUploadAndEmbed' section
        $value = $context->find('canUploadAndEmbed');
        $buffer .= $this->sectionB47f7a4f7e4f24cfeb254e27902daada($context, $indent, $value);
        // 'canUploadAndEmbed' inverted section
        $value = $context->find('canUploadAndEmbed');
        if (empty($value)) {
            
            // 'canUpload' section
            $value = $context->find('canUpload');
            $buffer .= $this->section584fd5d00f7888fe7c911b5e5194c941($context, $indent, $value);
            // 'canEmbed' section
            $value = $context->find('canEmbed');
            $buffer .= $this->section42dc3f708a1ddcacf69a956cfff3ab9c($context, $indent, $value);
        }
        $buffer .= $indent . '            </label>
';
        $buffer .= $indent . '            <div>
';
        $buffer .= $indent . '                <input class="form-control" value=""
';
        $buffer .= $indent . '                id="h5pfile" data-region="h5pfile"/><br/>
';
        // 'canUpload' section
        $value = $context->find('canUpload');
        $buffer .= $this->sectionFa0193555f6575e2306b1b69e18b4a84($context, $indent, $value);
        $buffer .= $indent . '            </div>
';
        // 'canUpload' section
        $value = $context->find('canUpload');
        $buffer .= $this->sectionC4c16454659d644d66c105dff1cb115d($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="text-center">
';
        $buffer .= $indent . '        <button type="submit">
';
        $buffer .= $indent . '            ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionCe905d5615780f23ae69d7e909fc97a9($context, $indent, $value);
        $buffer .= ' </button>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </form>
';
        $buffer .= $indent . '</body>
';
        $buffer .= $indent . '</html>
';

        return $buffer;
    }

    private function sectionD73c65684903a8ee0710b007ee2a1704(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' browserepositories, tinymce_h5p ';
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
                
                $buffer .= ' browserepositories, tinymce_h5p ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5d32393eb0657ad0651c3ee069942c69(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' noh5pcontent, tinymce_h5p ';
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
                
                $buffer .= ' noh5pcontent, tinymce_h5p ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD5fe078311ac12aee82418b0b02ff3c0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' invalidh5purl, tinymce_h5p ';
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
                
                $buffer .= ' invalidh5purl, tinymce_h5p ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section391bdb76378c7892567fb17442a0b761(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' instructions, tinymce_h5p ';
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
                
                $buffer .= ' instructions, tinymce_h5p ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section89ff4e1894a1f78fc2c9cfadb53e75d4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div>{{# str }} instructions, tinymce_h5p {{/ str }}</div>
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
                
                $buffer .= $indent . '            <div>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section391bdb76378c7892567fb17442a0b761($context, $indent, $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section24089c03cd45389452b65fb90e7de3b4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' h5pfileorurl, tinymce_h5p ';
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
                
                $buffer .= ' h5pfileorurl, tinymce_h5p ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB47f7a4f7e4f24cfeb254e27902daada(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{# str }} h5pfileorurl, tinymce_h5p {{/ str }}
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
                
                $buffer .= $indent . '                    ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section24089c03cd45389452b65fb90e7de3b4($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFbd02d74bab686d2a409973808e61442(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' h5pfile, tinymce_h5p ';
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
                
                $buffer .= ' h5pfile, tinymce_h5p ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section584fd5d00f7888fe7c911b5e5194c941(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{# str }} h5pfile, tinymce_h5p {{/ str }}
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
                
                $buffer .= $indent . '                        ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionFbd02d74bab686d2a409973808e61442($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section30815743c19f94173bd0e497d580c7df(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' h5purl, tinymce_h5p ';
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
                
                $buffer .= ' h5purl, tinymce_h5p ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section42dc3f708a1ddcacf69a956cfff3ab9c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{# str }} h5purl, tinymce_h5p {{/ str }}
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
                
                $buffer .= $indent . '                        ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section30815743c19f94173bd0e497d580c7df($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFa0193555f6575e2306b1b69e18b4a84(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <span class="input-group-append">
                        <span class="btn btn-secondary {{CSS.H5PBROWSER}}" type="button" id="srcbrowsercontainer">
                        {{# str }} browserepositories, tinymce_h5p {{/ str }}</span>
                    </span>
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
                
                $buffer .= $indent . '                    <span class="input-group-append">
';
                $buffer .= $indent . '                        <span class="btn btn-secondary ';
                $value = $this->resolveValue($context->findDot('CSS.H5PBROWSER'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" type="button" id="srcbrowsercontainer">
';
                $buffer .= $indent . '                        ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionD73c65684903a8ee0710b007ee2a1704($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                    </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section949a42b48b4437ee2099379b375da414(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' h5poptions, tinymce_h5p ';
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
                
                $buffer .= ' h5poptions, tinymce_h5p ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDaf306a63b2ca9c47c58313e6151b87b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' downloadbutton, tinymce_h5p ';
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
                
                $buffer .= ' downloadbutton, tinymce_h5p ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section685220549e5cae733936f3f8637c5053(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' embedbutton, tinymce_h5p ';
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
                
                $buffer .= ' embedbutton, tinymce_h5p ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3c70c84ebfc1ff84d5d3e19bc2f44e00(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' copyrightbutton, tinymce_h5p ';
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
                
                $buffer .= ' copyrightbutton, tinymce_h5p ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC4c16454659d644d66c105dff1cb115d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <fieldset>
                    <legend class="ftoggler">{{# str }} h5poptions, tinymce_h5p {{/ str }} </legend>
                    <div class="fcontainer">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="h5p_allow_download"/>
                            <label class="form-check-label" for="h5p_allow_download">
                            {{# str }} downloadbutton, tinymce_h5p {{/ str }}
                            </label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="h5p_embed"/>
                            <label class="form-check-label" for="h5p_embed">
                            {{# str }} embedbutton, tinymce_h5p {{/ str }}
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input type="checkbox" class="form-check-input" id="h5p_copyright"/>
                            <label class="form-check-label" for="h5p_copyright">
                            {{# str }} copyrightbutton, tinymce_h5p {{/ str }}
                            </label>
                        </div>
                    </div>
                </fieldset>
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
                
                $buffer .= $indent . '                <fieldset>
';
                $buffer .= $indent . '                    <legend class="ftoggler">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section949a42b48b4437ee2099379b375da414($context, $indent, $value);
                $buffer .= ' </legend>
';
                $buffer .= $indent . '                    <div class="fcontainer">
';
                $buffer .= $indent . '                        <div class="form-check">
';
                $buffer .= $indent . '                            <input type="checkbox" class="form-check-input" id="h5p_allow_download"/>
';
                $buffer .= $indent . '                            <label class="form-check-label" for="h5p_allow_download">
';
                $buffer .= $indent . '                            ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionDaf306a63b2ca9c47c58313e6151b87b($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </label>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="form-check">
';
                $buffer .= $indent . '                            <input type="checkbox" class="form-check-input" id="h5p_embed"/>
';
                $buffer .= $indent . '                            <label class="form-check-label" for="h5p_embed">
';
                $buffer .= $indent . '                            ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section685220549e5cae733936f3f8637c5053($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </label>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="form-check mb-2">
';
                $buffer .= $indent . '                            <input type="checkbox" class="form-check-input" id="h5p_copyright"/>
';
                $buffer .= $indent . '                            <label class="form-check-label" for="h5p_copyright">
';
                $buffer .= $indent . '                            ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section3c70c84ebfc1ff84d5d3e19bc2f44e00($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </label>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </fieldset>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCe905d5615780f23ae69d7e909fc97a9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' pluginname, tinymce_h5p ';
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
                
                $buffer .= ' pluginname, tinymce_h5p ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
