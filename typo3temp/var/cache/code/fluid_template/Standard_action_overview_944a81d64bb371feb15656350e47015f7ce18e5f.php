<?php

class Standard_action_overview_944a81d64bb371feb15656350e47015f7ce18e5f extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'RedirectAdministration';
}
public function hasLayout() {
return TRUE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'bk2k' => 
  array (
    0 => 'BK2K\\BootstrapPackage\\ViewHelpers',
  ),
  'rd' => 
  array (
    0 => 'TYPO3\\CMS\\Redirects\\ViewHelpers',
  ),
  'be' => 
  array (
    0 => 'TYPO3\\CMS\\Backend\\ViewHelpers',
  ),
));
}

/**
 * section headline
 */
public function section_9cd7c186300be56726877e2025e8375d991b084a(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    <h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['key'] = NULL;
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['languageKey'] = NULL;
$arguments1['alternativeLanguageKeys'] = NULL;
$arguments1['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:heading_text';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '</h1>
';

return $output0;
}
/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output3 = '';

$output3 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['value'] = NULL;
$arguments4['name'] = NULL;
$arguments4['name'] = 'returnUrl';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments6 = array();
$arguments6['route'] = NULL;
$arguments6['parameters'] = array (
);
$arguments6['referenceType'] = 'absolute';
$arguments6['route'] = 'site_redirects';
// Rendering Array
$array8 = array();
$array8['action'] = 'overview';
$array9 = array (
);$array8['demand'] = $renderingContext->getVariableProvider()->getByPath('demand.parameters', $array9);
$array10 = array (
);$array8['orderField'] = $renderingContext->getVariableProvider()->getByPath('demand.orderField', $array10);
$array11 = array (
);$array8['orderDirection'] = $renderingContext->getVariableProvider()->getByPath('demand.orderDirection', $array11);
$arguments6['parameters'] = $array8;
$arguments4['value'] = TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);
$renderChildrenClosure5 = ($arguments4['value'] !== null) ? function() use ($arguments4) { return $arguments4['value']; } : $renderChildrenClosure5;
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext)]);

$output3 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$output107 = '';

$output107 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
$output110 = '';

$output110 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments111 = array();
$arguments111['section'] = NULL;
$arguments111['partial'] = NULL;
$arguments111['delegate'] = NULL;
$arguments111['renderable'] = NULL;
$arguments111['arguments'] = array (
);
$arguments111['optional'] = false;
$arguments111['default'] = NULL;
$arguments111['contentAs'] = NULL;
$arguments111['debug'] = true;
$arguments111['section'] = 'filter';
$arguments111['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output110 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext);

$output110 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments114 = array();
$arguments114['section'] = NULL;
$arguments114['partial'] = NULL;
$arguments114['delegate'] = NULL;
$arguments114['renderable'] = NULL;
$arguments114['arguments'] = array (
);
$arguments114['optional'] = false;
$arguments114['default'] = NULL;
$arguments114['contentAs'] = NULL;
$arguments114['debug'] = true;
$arguments114['section'] = 'table';
$arguments114['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output110 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext);

$output110 .= '
        ';
return $output110;
};
$arguments108 = array();

$output107 .= '';

$output107 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
$output119 = '';

$output119 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
$output160 = '';

$output160 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
$output163 = '';

$output163 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments164 = array();
$arguments164['section'] = NULL;
$arguments164['partial'] = NULL;
$arguments164['delegate'] = NULL;
$arguments164['renderable'] = NULL;
$arguments164['arguments'] = array (
);
$arguments164['optional'] = false;
$arguments164['default'] = NULL;
$arguments164['contentAs'] = NULL;
$arguments164['debug'] = true;
$arguments164['section'] = 'filter';
$arguments164['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output163 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments164, $renderChildrenClosure165, $renderingContext);

$output163 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure168 = function() use ($renderingContext, $self) {
$output171 = '';

$output171 .= '
                        <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure173 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments172 = array();
$arguments172['key'] = NULL;
$arguments172['id'] = NULL;
$arguments172['default'] = NULL;
$arguments172['arguments'] = NULL;
$arguments172['extensionName'] = NULL;
$arguments172['languageKey'] = NULL;
$arguments172['alternativeLanguageKeys'] = NULL;
$arguments172['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found_with_filter.message';

$output171 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments172, $renderChildrenClosure173, $renderingContext)]);

$output171 .= '</p>
                        <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments174 = array();
$arguments174['route'] = NULL;
$arguments174['parameters'] = array (
);
$arguments174['referenceType'] = 'absolute';
$arguments174['route'] = 'site_redirects';
// Rendering Array
$array176 = array();
$array176['action'] = 'overview';
$arguments174['parameters'] = $array176;

$output171 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments174, $renderChildrenClosure175, $renderingContext)]);

$output171 .= '">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments177 = array();
$arguments177['key'] = NULL;
$arguments177['id'] = NULL;
$arguments177['default'] = NULL;
$arguments177['arguments'] = NULL;
$arguments177['extensionName'] = NULL;
$arguments177['languageKey'] = NULL;
$arguments177['alternativeLanguageKeys'] = NULL;
$arguments177['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_no_filter';

$output171 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments177, $renderChildrenClosure178, $renderingContext)]);

$output171 .= '
                        </a>
                        ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
$output182 = '';

$output182 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure184 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments183 = array();
$arguments183['key'] = NULL;
$arguments183['id'] = NULL;
$arguments183['default'] = NULL;
$arguments183['arguments'] = NULL;
$arguments183['extensionName'] = NULL;
$arguments183['languageKey'] = NULL;
$arguments183['alternativeLanguageKeys'] = NULL;
$arguments183['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_create';

$output182 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments183, $renderChildrenClosure184, $renderingContext)]);

$output182 .= '
                        ';
return $output182;
};
$arguments179 = array();
$arguments179['additionalAttributes'] = NULL;
$arguments179['data'] = NULL;
$arguments179['class'] = NULL;
$arguments179['dir'] = NULL;
$arguments179['id'] = NULL;
$arguments179['lang'] = NULL;
$arguments179['style'] = NULL;
$arguments179['title'] = NULL;
$arguments179['accesskey'] = NULL;
$arguments179['tabindex'] = NULL;
$arguments179['onclick'] = NULL;
$arguments179['uid'] = NULL;
$arguments179['pid'] = NULL;
$arguments179['table'] = NULL;
$arguments179['returnUrl'] = '';
$array181 = array (
);$arguments179['returnUrl'] = $renderingContext->getVariableProvider()->getByPath('returnUrl', $array181);
$arguments179['class'] = 'btn btn-primary';
$arguments179['table'] = 'sys_redirect';

$output171 .= TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper::renderStatic($arguments179, $renderChildrenClosure180, $renderingContext);

$output171 .= '
                    ';
return $output171;
};
$arguments167 = array();
$arguments167['message'] = NULL;
$arguments167['title'] = NULL;
$arguments167['state'] = -2;
$arguments167['iconName'] = NULL;
$arguments167['disableIcon'] = false;
$arguments167['state'] = -2;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure170 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments169 = array();
$arguments169['key'] = NULL;
$arguments169['id'] = NULL;
$arguments169['default'] = NULL;
$arguments169['arguments'] = NULL;
$arguments169['extensionName'] = NULL;
$arguments169['languageKey'] = NULL;
$arguments169['alternativeLanguageKeys'] = NULL;
$arguments169['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found_with_filter.title';
$arguments167['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments169, $renderChildrenClosure170, $renderingContext);
$renderChildrenClosure168 = ($arguments167['message'] !== null) ? function() use ($arguments167) { return $arguments167['message']; } : $renderChildrenClosure168;
$output163 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments167, $renderChildrenClosure168, $renderingContext);

$output163 .= '
                ';
return $output163;
};
$arguments161 = array();

$output160 .= '';

$output160 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure186 = function() use ($renderingContext, $self) {
$output187 = '';

$output187 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure189 = function() use ($renderingContext, $self) {
$output192 = '';

$output192 .= '
                        <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure194 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments193 = array();
$arguments193['key'] = NULL;
$arguments193['id'] = NULL;
$arguments193['default'] = NULL;
$arguments193['arguments'] = NULL;
$arguments193['extensionName'] = NULL;
$arguments193['languageKey'] = NULL;
$arguments193['alternativeLanguageKeys'] = NULL;
$arguments193['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found.message';

$output192 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments193, $renderChildrenClosure194, $renderingContext)]);

$output192 .= '</p>
                        ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper
$renderChildrenClosure196 = function() use ($renderingContext, $self) {
$output197 = '';

$output197 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure199 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments198 = array();
$arguments198['key'] = NULL;
$arguments198['id'] = NULL;
$arguments198['default'] = NULL;
$arguments198['arguments'] = NULL;
$arguments198['extensionName'] = NULL;
$arguments198['languageKey'] = NULL;
$arguments198['alternativeLanguageKeys'] = NULL;
$arguments198['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_create';

$output197 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments198, $renderChildrenClosure199, $renderingContext)]);

$output197 .= '
                        ';
return $output197;
};
$arguments195 = array();
$arguments195['additionalAttributes'] = NULL;
$arguments195['data'] = NULL;
$arguments195['class'] = NULL;
$arguments195['dir'] = NULL;
$arguments195['id'] = NULL;
$arguments195['lang'] = NULL;
$arguments195['style'] = NULL;
$arguments195['title'] = NULL;
$arguments195['accesskey'] = NULL;
$arguments195['tabindex'] = NULL;
$arguments195['onclick'] = NULL;
$arguments195['uid'] = NULL;
$arguments195['pid'] = NULL;
$arguments195['table'] = NULL;
$arguments195['returnUrl'] = '';
$arguments195['class'] = 'btn btn-primary';
$arguments195['table'] = 'sys_redirect';

$output192 .= TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper::renderStatic($arguments195, $renderChildrenClosure196, $renderingContext);

$output192 .= '
                    ';
return $output192;
};
$arguments188 = array();
$arguments188['message'] = NULL;
$arguments188['title'] = NULL;
$arguments188['state'] = -2;
$arguments188['iconName'] = NULL;
$arguments188['disableIcon'] = false;
$arguments188['state'] = -1;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments190 = array();
$arguments190['key'] = NULL;
$arguments190['id'] = NULL;
$arguments190['default'] = NULL;
$arguments190['arguments'] = NULL;
$arguments190['extensionName'] = NULL;
$arguments190['languageKey'] = NULL;
$arguments190['alternativeLanguageKeys'] = NULL;
$arguments190['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found.title';
$arguments188['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments190, $renderChildrenClosure191, $renderingContext);
$renderChildrenClosure189 = ($arguments188['message'] !== null) ? function() use ($arguments188) { return $arguments188['message']; } : $renderChildrenClosure189;
$output187 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments188, $renderChildrenClosure189, $renderingContext);

$output187 .= '
                ';
return $output187;
};
$arguments185 = array();
$arguments185['if'] = NULL;

$output160 .= '';

$output160 .= '
            ';
return $output160;
};
$arguments120 = array();
$arguments120['then'] = NULL;
$arguments120['else'] = NULL;
$arguments120['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array157 = array();
$array158 = array (
);$array157['0'] = $renderingContext->getVariableProvider()->getByPath('demand.constraints', $array158);

$expression159 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments120['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression159(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array157)
					),
					$renderingContext
				);
$arguments120['__thenClosure'] = function() use ($renderingContext, $self) {
$output122 = '';

$output122 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments123 = array();
$arguments123['section'] = NULL;
$arguments123['partial'] = NULL;
$arguments123['delegate'] = NULL;
$arguments123['renderable'] = NULL;
$arguments123['arguments'] = array (
);
$arguments123['optional'] = false;
$arguments123['default'] = NULL;
$arguments123['contentAs'] = NULL;
$arguments123['debug'] = true;
$arguments123['section'] = 'filter';
$arguments123['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output122 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext);

$output122 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
$output130 = '';

$output130 .= '
                        <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments131 = array();
$arguments131['key'] = NULL;
$arguments131['id'] = NULL;
$arguments131['default'] = NULL;
$arguments131['arguments'] = NULL;
$arguments131['extensionName'] = NULL;
$arguments131['languageKey'] = NULL;
$arguments131['alternativeLanguageKeys'] = NULL;
$arguments131['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found_with_filter.message';

$output130 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments131, $renderChildrenClosure132, $renderingContext)]);

$output130 .= '</p>
                        <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments133 = array();
$arguments133['route'] = NULL;
$arguments133['parameters'] = array (
);
$arguments133['referenceType'] = 'absolute';
$arguments133['route'] = 'site_redirects';
// Rendering Array
$array135 = array();
$array135['action'] = 'overview';
$arguments133['parameters'] = $array135;

$output130 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext)]);

$output130 .= '">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments136 = array();
$arguments136['key'] = NULL;
$arguments136['id'] = NULL;
$arguments136['default'] = NULL;
$arguments136['arguments'] = NULL;
$arguments136['extensionName'] = NULL;
$arguments136['languageKey'] = NULL;
$arguments136['alternativeLanguageKeys'] = NULL;
$arguments136['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_no_filter';

$output130 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments136, $renderChildrenClosure137, $renderingContext)]);

$output130 .= '
                        </a>
                        ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
$output141 = '';

$output141 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments142 = array();
$arguments142['key'] = NULL;
$arguments142['id'] = NULL;
$arguments142['default'] = NULL;
$arguments142['arguments'] = NULL;
$arguments142['extensionName'] = NULL;
$arguments142['languageKey'] = NULL;
$arguments142['alternativeLanguageKeys'] = NULL;
$arguments142['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_create';

$output141 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments142, $renderChildrenClosure143, $renderingContext)]);

$output141 .= '
                        ';
return $output141;
};
$arguments138 = array();
$arguments138['additionalAttributes'] = NULL;
$arguments138['data'] = NULL;
$arguments138['class'] = NULL;
$arguments138['dir'] = NULL;
$arguments138['id'] = NULL;
$arguments138['lang'] = NULL;
$arguments138['style'] = NULL;
$arguments138['title'] = NULL;
$arguments138['accesskey'] = NULL;
$arguments138['tabindex'] = NULL;
$arguments138['onclick'] = NULL;
$arguments138['uid'] = NULL;
$arguments138['pid'] = NULL;
$arguments138['table'] = NULL;
$arguments138['returnUrl'] = '';
$array140 = array (
);$arguments138['returnUrl'] = $renderingContext->getVariableProvider()->getByPath('returnUrl', $array140);
$arguments138['class'] = 'btn btn-primary';
$arguments138['table'] = 'sys_redirect';

$output130 .= TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper::renderStatic($arguments138, $renderChildrenClosure139, $renderingContext);

$output130 .= '
                    ';
return $output130;
};
$arguments126 = array();
$arguments126['message'] = NULL;
$arguments126['title'] = NULL;
$arguments126['state'] = -2;
$arguments126['iconName'] = NULL;
$arguments126['disableIcon'] = false;
$arguments126['state'] = -2;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments128 = array();
$arguments128['key'] = NULL;
$arguments128['id'] = NULL;
$arguments128['default'] = NULL;
$arguments128['arguments'] = NULL;
$arguments128['extensionName'] = NULL;
$arguments128['languageKey'] = NULL;
$arguments128['alternativeLanguageKeys'] = NULL;
$arguments128['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found_with_filter.title';
$arguments126['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext);
$renderChildrenClosure127 = ($arguments126['message'] !== null) ? function() use ($arguments126) { return $arguments126['message']; } : $renderChildrenClosure127;
$output122 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext);

$output122 .= '
                ';
return $output122;
};
$arguments120['__elseClosures'][] = function() use ($renderingContext, $self) {
$output144 = '';

$output144 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
$output149 = '';

$output149 .= '
                        <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments150 = array();
$arguments150['key'] = NULL;
$arguments150['id'] = NULL;
$arguments150['default'] = NULL;
$arguments150['arguments'] = NULL;
$arguments150['extensionName'] = NULL;
$arguments150['languageKey'] = NULL;
$arguments150['alternativeLanguageKeys'] = NULL;
$arguments150['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found.message';

$output149 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext)]);

$output149 .= '</p>
                        ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
$output154 = '';

$output154 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure156 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments155 = array();
$arguments155['key'] = NULL;
$arguments155['id'] = NULL;
$arguments155['default'] = NULL;
$arguments155['arguments'] = NULL;
$arguments155['extensionName'] = NULL;
$arguments155['languageKey'] = NULL;
$arguments155['alternativeLanguageKeys'] = NULL;
$arguments155['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_create';

$output154 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments155, $renderChildrenClosure156, $renderingContext)]);

$output154 .= '
                        ';
return $output154;
};
$arguments152 = array();
$arguments152['additionalAttributes'] = NULL;
$arguments152['data'] = NULL;
$arguments152['class'] = NULL;
$arguments152['dir'] = NULL;
$arguments152['id'] = NULL;
$arguments152['lang'] = NULL;
$arguments152['style'] = NULL;
$arguments152['title'] = NULL;
$arguments152['accesskey'] = NULL;
$arguments152['tabindex'] = NULL;
$arguments152['onclick'] = NULL;
$arguments152['uid'] = NULL;
$arguments152['pid'] = NULL;
$arguments152['table'] = NULL;
$arguments152['returnUrl'] = '';
$arguments152['class'] = 'btn btn-primary';
$arguments152['table'] = 'sys_redirect';

$output149 .= TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper::renderStatic($arguments152, $renderChildrenClosure153, $renderingContext);

$output149 .= '
                    ';
return $output149;
};
$arguments145 = array();
$arguments145['message'] = NULL;
$arguments145['title'] = NULL;
$arguments145['state'] = -2;
$arguments145['iconName'] = NULL;
$arguments145['disableIcon'] = false;
$arguments145['state'] = -1;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments147 = array();
$arguments147['key'] = NULL;
$arguments147['id'] = NULL;
$arguments147['default'] = NULL;
$arguments147['arguments'] = NULL;
$arguments147['extensionName'] = NULL;
$arguments147['languageKey'] = NULL;
$arguments147['alternativeLanguageKeys'] = NULL;
$arguments147['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found.title';
$arguments145['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments147, $renderChildrenClosure148, $renderingContext);
$renderChildrenClosure146 = ($arguments145['message'] !== null) ? function() use ($arguments145) { return $arguments145['message']; } : $renderChildrenClosure146;
$output144 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments145, $renderChildrenClosure146, $renderingContext);

$output144 .= '
                ';
return $output144;
};

$output119 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments120, $renderChildrenClosure121, $renderingContext);

$output119 .= '
        ';
return $output119;
};
$arguments117 = array();
$arguments117['if'] = NULL;

$output107 .= '';

$output107 .= '
    ';
return $output107;
};
$arguments12 = array();
$arguments12['then'] = NULL;
$arguments12['else'] = NULL;
$arguments12['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array102 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
$array105 = array (
);return $renderingContext->getVariableProvider()->getByPath('redirects', $array105);
};
$arguments103 = array();
$arguments103['subject'] = NULL;
$renderChildrenClosure104 = ($arguments103['subject'] !== null) ? function() use ($arguments103) { return $arguments103['subject']; } : $renderChildrenClosure104;$array102['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);

$expression106 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments12['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression106(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array102)
					),
					$renderingContext
				);
$arguments12['__thenClosure'] = function() use ($renderingContext, $self) {
$output14 = '';

$output14 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();
$arguments15['section'] = NULL;
$arguments15['partial'] = NULL;
$arguments15['delegate'] = NULL;
$arguments15['renderable'] = NULL;
$arguments15['arguments'] = array (
);
$arguments15['optional'] = false;
$arguments15['default'] = NULL;
$arguments15['contentAs'] = NULL;
$arguments15['debug'] = true;
$arguments15['section'] = 'filter';
$arguments15['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output14 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments18 = array();
$arguments18['section'] = NULL;
$arguments18['partial'] = NULL;
$arguments18['delegate'] = NULL;
$arguments18['renderable'] = NULL;
$arguments18['arguments'] = array (
);
$arguments18['optional'] = false;
$arguments18['default'] = NULL;
$arguments18['contentAs'] = NULL;
$arguments18['debug'] = true;
$arguments18['section'] = 'table';
$arguments18['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output14 .= '
        ';
return $output14;
};
$arguments12['__elseClosures'][] = function() use ($renderingContext, $self) {
$output21 = '';

$output21 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$output62 = '';

$output62 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
$output65 = '';

$output65 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments66 = array();
$arguments66['section'] = NULL;
$arguments66['partial'] = NULL;
$arguments66['delegate'] = NULL;
$arguments66['renderable'] = NULL;
$arguments66['arguments'] = array (
);
$arguments66['optional'] = false;
$arguments66['default'] = NULL;
$arguments66['contentAs'] = NULL;
$arguments66['debug'] = true;
$arguments66['section'] = 'filter';
$arguments66['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output65 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output65 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
$output73 = '';

$output73 .= '
                        <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments74 = array();
$arguments74['key'] = NULL;
$arguments74['id'] = NULL;
$arguments74['default'] = NULL;
$arguments74['arguments'] = NULL;
$arguments74['extensionName'] = NULL;
$arguments74['languageKey'] = NULL;
$arguments74['alternativeLanguageKeys'] = NULL;
$arguments74['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found_with_filter.message';

$output73 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext)]);

$output73 .= '</p>
                        <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments76 = array();
$arguments76['route'] = NULL;
$arguments76['parameters'] = array (
);
$arguments76['referenceType'] = 'absolute';
$arguments76['route'] = 'site_redirects';
// Rendering Array
$array78 = array();
$array78['action'] = 'overview';
$arguments76['parameters'] = $array78;

$output73 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext)]);

$output73 .= '">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments79 = array();
$arguments79['key'] = NULL;
$arguments79['id'] = NULL;
$arguments79['default'] = NULL;
$arguments79['arguments'] = NULL;
$arguments79['extensionName'] = NULL;
$arguments79['languageKey'] = NULL;
$arguments79['alternativeLanguageKeys'] = NULL;
$arguments79['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_no_filter';

$output73 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext)]);

$output73 .= '
                        </a>
                        ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
$output84 = '';

$output84 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments85 = array();
$arguments85['key'] = NULL;
$arguments85['id'] = NULL;
$arguments85['default'] = NULL;
$arguments85['arguments'] = NULL;
$arguments85['extensionName'] = NULL;
$arguments85['languageKey'] = NULL;
$arguments85['alternativeLanguageKeys'] = NULL;
$arguments85['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_create';

$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext)]);

$output84 .= '
                        ';
return $output84;
};
$arguments81 = array();
$arguments81['additionalAttributes'] = NULL;
$arguments81['data'] = NULL;
$arguments81['class'] = NULL;
$arguments81['dir'] = NULL;
$arguments81['id'] = NULL;
$arguments81['lang'] = NULL;
$arguments81['style'] = NULL;
$arguments81['title'] = NULL;
$arguments81['accesskey'] = NULL;
$arguments81['tabindex'] = NULL;
$arguments81['onclick'] = NULL;
$arguments81['uid'] = NULL;
$arguments81['pid'] = NULL;
$arguments81['table'] = NULL;
$arguments81['returnUrl'] = '';
$array83 = array (
);$arguments81['returnUrl'] = $renderingContext->getVariableProvider()->getByPath('returnUrl', $array83);
$arguments81['class'] = 'btn btn-primary';
$arguments81['table'] = 'sys_redirect';

$output73 .= TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output73 .= '
                    ';
return $output73;
};
$arguments69 = array();
$arguments69['message'] = NULL;
$arguments69['title'] = NULL;
$arguments69['state'] = -2;
$arguments69['iconName'] = NULL;
$arguments69['disableIcon'] = false;
$arguments69['state'] = -2;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments71 = array();
$arguments71['key'] = NULL;
$arguments71['id'] = NULL;
$arguments71['default'] = NULL;
$arguments71['arguments'] = NULL;
$arguments71['extensionName'] = NULL;
$arguments71['languageKey'] = NULL;
$arguments71['alternativeLanguageKeys'] = NULL;
$arguments71['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found_with_filter.title';
$arguments69['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);
$renderChildrenClosure70 = ($arguments69['message'] !== null) ? function() use ($arguments69) { return $arguments69['message']; } : $renderChildrenClosure70;
$output65 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output65 .= '
                ';
return $output65;
};
$arguments63 = array();

$output62 .= '';

$output62 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
$output89 = '';

$output89 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
$output94 = '';

$output94 .= '
                        <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments95 = array();
$arguments95['key'] = NULL;
$arguments95['id'] = NULL;
$arguments95['default'] = NULL;
$arguments95['arguments'] = NULL;
$arguments95['extensionName'] = NULL;
$arguments95['languageKey'] = NULL;
$arguments95['alternativeLanguageKeys'] = NULL;
$arguments95['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found.message';

$output94 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext)]);

$output94 .= '</p>
                        ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
$output99 = '';

$output99 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments100 = array();
$arguments100['key'] = NULL;
$arguments100['id'] = NULL;
$arguments100['default'] = NULL;
$arguments100['arguments'] = NULL;
$arguments100['extensionName'] = NULL;
$arguments100['languageKey'] = NULL;
$arguments100['alternativeLanguageKeys'] = NULL;
$arguments100['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_create';

$output99 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext)]);

$output99 .= '
                        ';
return $output99;
};
$arguments97 = array();
$arguments97['additionalAttributes'] = NULL;
$arguments97['data'] = NULL;
$arguments97['class'] = NULL;
$arguments97['dir'] = NULL;
$arguments97['id'] = NULL;
$arguments97['lang'] = NULL;
$arguments97['style'] = NULL;
$arguments97['title'] = NULL;
$arguments97['accesskey'] = NULL;
$arguments97['tabindex'] = NULL;
$arguments97['onclick'] = NULL;
$arguments97['uid'] = NULL;
$arguments97['pid'] = NULL;
$arguments97['table'] = NULL;
$arguments97['returnUrl'] = '';
$arguments97['class'] = 'btn btn-primary';
$arguments97['table'] = 'sys_redirect';

$output94 .= TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output94 .= '
                    ';
return $output94;
};
$arguments90 = array();
$arguments90['message'] = NULL;
$arguments90['title'] = NULL;
$arguments90['state'] = -2;
$arguments90['iconName'] = NULL;
$arguments90['disableIcon'] = false;
$arguments90['state'] = -1;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments92 = array();
$arguments92['key'] = NULL;
$arguments92['id'] = NULL;
$arguments92['default'] = NULL;
$arguments92['arguments'] = NULL;
$arguments92['extensionName'] = NULL;
$arguments92['languageKey'] = NULL;
$arguments92['alternativeLanguageKeys'] = NULL;
$arguments92['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found.title';
$arguments90['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);
$renderChildrenClosure91 = ($arguments90['message'] !== null) ? function() use ($arguments90) { return $arguments90['message']; } : $renderChildrenClosure91;
$output89 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output89 .= '
                ';
return $output89;
};
$arguments87 = array();
$arguments87['if'] = NULL;

$output62 .= '';

$output62 .= '
            ';
return $output62;
};
$arguments22 = array();
$arguments22['then'] = NULL;
$arguments22['else'] = NULL;
$arguments22['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array59 = array();
$array60 = array (
);$array59['0'] = $renderingContext->getVariableProvider()->getByPath('demand.constraints', $array60);

$expression61 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments22['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression61(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array59)
					),
					$renderingContext
				);
$arguments22['__thenClosure'] = function() use ($renderingContext, $self) {
$output24 = '';

$output24 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments25 = array();
$arguments25['section'] = NULL;
$arguments25['partial'] = NULL;
$arguments25['delegate'] = NULL;
$arguments25['renderable'] = NULL;
$arguments25['arguments'] = array (
);
$arguments25['optional'] = false;
$arguments25['default'] = NULL;
$arguments25['contentAs'] = NULL;
$arguments25['debug'] = true;
$arguments25['section'] = 'filter';
$arguments25['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output24 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output24 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
                        <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments33 = array();
$arguments33['key'] = NULL;
$arguments33['id'] = NULL;
$arguments33['default'] = NULL;
$arguments33['arguments'] = NULL;
$arguments33['extensionName'] = NULL;
$arguments33['languageKey'] = NULL;
$arguments33['alternativeLanguageKeys'] = NULL;
$arguments33['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found_with_filter.message';

$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext)]);

$output32 .= '</p>
                        <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments35 = array();
$arguments35['route'] = NULL;
$arguments35['parameters'] = array (
);
$arguments35['referenceType'] = 'absolute';
$arguments35['route'] = 'site_redirects';
// Rendering Array
$array37 = array();
$array37['action'] = 'overview';
$arguments35['parameters'] = $array37;

$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext)]);

$output32 .= '">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments38 = array();
$arguments38['key'] = NULL;
$arguments38['id'] = NULL;
$arguments38['default'] = NULL;
$arguments38['arguments'] = NULL;
$arguments38['extensionName'] = NULL;
$arguments38['languageKey'] = NULL;
$arguments38['alternativeLanguageKeys'] = NULL;
$arguments38['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_no_filter';

$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext)]);

$output32 .= '
                        </a>
                        ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$output43 = '';

$output43 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments44 = array();
$arguments44['key'] = NULL;
$arguments44['id'] = NULL;
$arguments44['default'] = NULL;
$arguments44['arguments'] = NULL;
$arguments44['extensionName'] = NULL;
$arguments44['languageKey'] = NULL;
$arguments44['alternativeLanguageKeys'] = NULL;
$arguments44['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_create';

$output43 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext)]);

$output43 .= '
                        ';
return $output43;
};
$arguments40 = array();
$arguments40['additionalAttributes'] = NULL;
$arguments40['data'] = NULL;
$arguments40['class'] = NULL;
$arguments40['dir'] = NULL;
$arguments40['id'] = NULL;
$arguments40['lang'] = NULL;
$arguments40['style'] = NULL;
$arguments40['title'] = NULL;
$arguments40['accesskey'] = NULL;
$arguments40['tabindex'] = NULL;
$arguments40['onclick'] = NULL;
$arguments40['uid'] = NULL;
$arguments40['pid'] = NULL;
$arguments40['table'] = NULL;
$arguments40['returnUrl'] = '';
$array42 = array (
);$arguments40['returnUrl'] = $renderingContext->getVariableProvider()->getByPath('returnUrl', $array42);
$arguments40['class'] = 'btn btn-primary';
$arguments40['table'] = 'sys_redirect';

$output32 .= TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output32 .= '
                    ';
return $output32;
};
$arguments28 = array();
$arguments28['message'] = NULL;
$arguments28['title'] = NULL;
$arguments28['state'] = -2;
$arguments28['iconName'] = NULL;
$arguments28['disableIcon'] = false;
$arguments28['state'] = -2;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments30 = array();
$arguments30['key'] = NULL;
$arguments30['id'] = NULL;
$arguments30['default'] = NULL;
$arguments30['arguments'] = NULL;
$arguments30['extensionName'] = NULL;
$arguments30['languageKey'] = NULL;
$arguments30['alternativeLanguageKeys'] = NULL;
$arguments30['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found_with_filter.title';
$arguments28['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);
$renderChildrenClosure29 = ($arguments28['message'] !== null) ? function() use ($arguments28) { return $arguments28['message']; } : $renderChildrenClosure29;
$output24 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output24 .= '
                ';
return $output24;
};
$arguments22['__elseClosures'][] = function() use ($renderingContext, $self) {
$output46 = '';

$output46 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
$output51 = '';

$output51 .= '
                        <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments52 = array();
$arguments52['key'] = NULL;
$arguments52['id'] = NULL;
$arguments52['default'] = NULL;
$arguments52['arguments'] = NULL;
$arguments52['extensionName'] = NULL;
$arguments52['languageKey'] = NULL;
$arguments52['alternativeLanguageKeys'] = NULL;
$arguments52['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found.message';

$output51 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext)]);

$output51 .= '</p>
                        ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$output56 = '';

$output56 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments57 = array();
$arguments57['key'] = NULL;
$arguments57['id'] = NULL;
$arguments57['default'] = NULL;
$arguments57['arguments'] = NULL;
$arguments57['extensionName'] = NULL;
$arguments57['languageKey'] = NULL;
$arguments57['alternativeLanguageKeys'] = NULL;
$arguments57['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_create';

$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext)]);

$output56 .= '
                        ';
return $output56;
};
$arguments54 = array();
$arguments54['additionalAttributes'] = NULL;
$arguments54['data'] = NULL;
$arguments54['class'] = NULL;
$arguments54['dir'] = NULL;
$arguments54['id'] = NULL;
$arguments54['lang'] = NULL;
$arguments54['style'] = NULL;
$arguments54['title'] = NULL;
$arguments54['accesskey'] = NULL;
$arguments54['tabindex'] = NULL;
$arguments54['onclick'] = NULL;
$arguments54['uid'] = NULL;
$arguments54['pid'] = NULL;
$arguments54['table'] = NULL;
$arguments54['returnUrl'] = '';
$arguments54['class'] = 'btn btn-primary';
$arguments54['table'] = 'sys_redirect';

$output51 .= TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output51 .= '
                    ';
return $output51;
};
$arguments47 = array();
$arguments47['message'] = NULL;
$arguments47['title'] = NULL;
$arguments47['state'] = -2;
$arguments47['iconName'] = NULL;
$arguments47['disableIcon'] = false;
$arguments47['state'] = -1;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments49 = array();
$arguments49['key'] = NULL;
$arguments49['id'] = NULL;
$arguments49['default'] = NULL;
$arguments49['arguments'] = NULL;
$arguments49['extensionName'] = NULL;
$arguments49['languageKey'] = NULL;
$arguments49['alternativeLanguageKeys'] = NULL;
$arguments49['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found.title';
$arguments47['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);
$renderChildrenClosure48 = ($arguments47['message'] !== null) ? function() use ($arguments47) { return $arguments47['message']; } : $renderChildrenClosure48;
$output46 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output46 .= '
                ';
return $output46;
};

$output21 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output21 .= '
        ';
return $output21;
};

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output3 .= '
';

return $output3;
}
/**
 * section table
 */
public function section_c3ee137d4f22eb06ed1351d644f3674592c90836(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output200 = '';

$output200 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments201 = array();
$arguments201['section'] = NULL;
$arguments201['partial'] = NULL;
$arguments201['delegate'] = NULL;
$arguments201['renderable'] = NULL;
$arguments201['arguments'] = array (
);
$arguments201['optional'] = false;
$arguments201['default'] = NULL;
$arguments201['contentAs'] = NULL;
$arguments201['debug'] = true;
$arguments201['partial'] = 'Pagination';
$arguments201['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output200 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments201, $renderChildrenClosure202, $renderingContext);

$output200 .= '
    <div class="table-fit">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure205 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments204 = array();
$arguments204['key'] = NULL;
$arguments204['id'] = NULL;
$arguments204['default'] = NULL;
$arguments204['arguments'] = NULL;
$arguments204['extensionName'] = NULL;
$arguments204['languageKey'] = NULL;
$arguments204['alternativeLanguageKeys'] = NULL;
$arguments204['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:source_host';

$output200 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments204, $renderChildrenClosure205, $renderingContext)]);

$output200 .= '</th>
                    <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure207 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments206 = array();
$arguments206['key'] = NULL;
$arguments206['id'] = NULL;
$arguments206['default'] = NULL;
$arguments206['arguments'] = NULL;
$arguments206['extensionName'] = NULL;
$arguments206['languageKey'] = NULL;
$arguments206['alternativeLanguageKeys'] = NULL;
$arguments206['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:source_path';

$output200 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments206, $renderChildrenClosure207, $renderingContext)]);

$output200 .= '</th>
                    <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure209 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments208 = array();
$arguments208['key'] = NULL;
$arguments208['id'] = NULL;
$arguments208['default'] = NULL;
$arguments208['arguments'] = NULL;
$arguments208['extensionName'] = NULL;
$arguments208['languageKey'] = NULL;
$arguments208['alternativeLanguageKeys'] = NULL;
$arguments208['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:destination';

$output200 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments208, $renderChildrenClosure209, $renderingContext)]);

$output200 .= '</th>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure211 = function() use ($renderingContext, $self) {
$output215 = '';

$output215 .= '
                        <th># ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure217 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments216 = array();
$arguments216['key'] = NULL;
$arguments216['id'] = NULL;
$arguments216['default'] = NULL;
$arguments216['arguments'] = NULL;
$arguments216['extensionName'] = NULL;
$arguments216['languageKey'] = NULL;
$arguments216['alternativeLanguageKeys'] = NULL;
$arguments216['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:hits';

$output215 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments216, $renderChildrenClosure217, $renderingContext)]);

$output215 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure219 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments218 = array();
$arguments218['key'] = NULL;
$arguments218['id'] = NULL;
$arguments218['default'] = NULL;
$arguments218['arguments'] = NULL;
$arguments218['extensionName'] = NULL;
$arguments218['languageKey'] = NULL;
$arguments218['alternativeLanguageKeys'] = NULL;
$arguments218['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:hit_last';

$output215 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments218, $renderChildrenClosure219, $renderingContext)]);

$output215 .= '</th>
                    ';
return $output215;
};
$arguments210 = array();
$arguments210['then'] = NULL;
$arguments210['else'] = NULL;
$arguments210['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array212 = array();
$array213 = array (
);$array212['0'] = $renderingContext->getVariableProvider()->getByPath('showHitCounter', $array213);

$expression214 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments210['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression214(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array212)
					),
					$renderingContext
				);
$arguments210['__thenClosure'] = $renderChildrenClosure211;

$output200 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments210, $renderChildrenClosure211, $renderingContext);

$output200 .= '
                    <th></th>
                </tr>
            </thead>
            <tbody>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure221 = function() use ($renderingContext, $self) {
$output223 = '';

$output223 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure225 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments224 = array();
$arguments224['value'] = NULL;
$arguments224['name'] = NULL;
$arguments224['name'] = 'pageId';
// Rendering ViewHelper TYPO3\CMS\Redirects\ViewHelpers\TargetPageIdViewHelper
$renderChildrenClosure227 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments226 = array();
$arguments226['target'] = NULL;
$array228 = array (
);$arguments226['target'] = $renderingContext->getVariableProvider()->getByPath('redirect.target', $array228);
$arguments224['value'] = TYPO3\CMS\Redirects\ViewHelpers\TargetPageIdViewHelper::renderStatic($arguments226, $renderChildrenClosure227, $renderingContext);
$renderChildrenClosure225 = ($arguments224['value'] !== null) ? function() use ($arguments224) { return $arguments224['value']; } : $renderChildrenClosure225;
$output223 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments224, $renderChildrenClosure225, $renderingContext)]);

$output223 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure230 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments229 = array();
$arguments229['value'] = NULL;
$arguments229['name'] = NULL;
$arguments229['name'] = 'targetUri';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\TypolinkViewHelper
$renderChildrenClosure232 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments231 = array();
$arguments231['parameter'] = NULL;
$arguments231['additionalParams'] = '';
$arguments231['language'] = NULL;
$arguments231['useCacheHash'] = NULL;
$arguments231['addQueryString'] = false;
$arguments231['addQueryStringMethod'] = 'GET';
$arguments231['addQueryStringExclude'] = '';
$arguments231['absolute'] = false;
$array233 = array (
);$arguments231['parameter'] = $renderingContext->getVariableProvider()->getByPath('redirect.target', $array233);
$arguments229['value'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\TypolinkViewHelper::renderStatic($arguments231, $renderChildrenClosure232, $renderingContext);
$renderChildrenClosure230 = ($arguments229['value'] !== null) ? function() use ($arguments229) { return $arguments229['value']; } : $renderChildrenClosure230;
$output223 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments229, $renderChildrenClosure230, $renderingContext)]);

$output223 .= '
                    <tr>
                        <td>';
$array234 = array (
);
$output223 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('redirect.source_host', $array234)]);

$output223 .= '</td>
                        <td>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper
$renderChildrenClosure236 = function() use ($renderingContext, $self) {
$output263 = '';

$output263 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure265 = function() use ($renderingContext, $self) {
$output289 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure291 = function() use ($renderingContext, $self) {
$output292 = '';

$output292 .= '<span title="';
$array293 = array (
);
$output292 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('disable', $array293)]);

$output292 .= '">';
return $output292;
};
$arguments290 = array();

$output289 .= '';

$output289 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure295 = function() use ($renderingContext, $self) {
$output300 = '';

$output300 .= '<span title="';
$array301 = array (
);
$output300 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('onlystart', $array301)]);

$output300 .= '">';
return $output300;
};
$arguments294 = array();
$arguments294['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array296 = array();
$array297 = array (
);$array296['0'] = $renderingContext->getVariableProvider()->getByPath('redirect.starttime', $array297);
$array296['1'] = ' && !';
$array298 = array (
);$array296['2'] = $renderingContext->getVariableProvider()->getByPath('redirect.endtime', $array298);

$expression299 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"])));};
$arguments294['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression299(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array296)
					),
					$renderingContext
				);

$output289 .= '';

$output289 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure303 = function() use ($renderingContext, $self) {
$output308 = '';

$output308 .= '<span title="';
$array309 = array (
);
$output308 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('onlyend', $array309)]);

$output308 .= '">';
return $output308;
};
$arguments302 = array();
$arguments302['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array304 = array();
$array304['0'] = '!';
$array305 = array (
);$array304['1'] = $renderingContext->getVariableProvider()->getByPath('redirect.starttime', $array305);
$array304['2'] = ' && ';
$array306 = array (
);$array304['3'] = $renderingContext->getVariableProvider()->getByPath('redirect.endtime', $array306);

$expression307 = function($context) {return (!(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"])) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node3"]));};
$arguments302['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression307(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array304)
					),
					$renderingContext
				);

$output289 .= '';

$output289 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure311 = function() use ($renderingContext, $self) {
$output316 = '';

$output316 .= '<span title="';
$array317 = array (
);
$output316 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('startend', $array317)]);

$output316 .= '">';
return $output316;
};
$arguments310 = array();
$arguments310['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array312 = array();
$array313 = array (
);$array312['0'] = $renderingContext->getVariableProvider()->getByPath('redirect.starttime', $array313);
$array312['1'] = ' && ';
$array314 = array (
);$array312['2'] = $renderingContext->getVariableProvider()->getByPath('redirect.endtime', $array314);

$expression315 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments310['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression315(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array312)
					),
					$renderingContext
				);

$output289 .= '';

$output289 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure319 = function() use ($renderingContext, $self) {
return '<span>';
};
$arguments318 = array();
$arguments318['if'] = NULL;

$output289 .= '';

$output289 .= '
                            ';
return $output289;
};
$arguments264 = array();
$arguments264['then'] = NULL;
$arguments264['else'] = NULL;
$arguments264['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array286 = array();
$array287 = array (
);$array286['0'] = $renderingContext->getVariableProvider()->getByPath('redirect.disabled', $array287);

$expression288 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments264['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression288(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array286)
					),
					$renderingContext
				);
$arguments264['__thenClosure'] = function() use ($renderingContext, $self) {
$output266 = '';

$output266 .= '<span title="';
$array267 = array (
);
$output266 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('disable', $array267)]);

$output266 .= '">';
return $output266;
};
$arguments264['__elseClosures'][] = function() use ($renderingContext, $self) {
$output268 = '';

$output268 .= '<span title="';
$array269 = array (
);
$output268 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('onlystart', $array269)]);

$output268 .= '">';
return $output268;
};
$arguments264['__elseifClosures'][] = function() use ($renderingContext, $self) {
// Rendering Boolean node
// Rendering Array
$array270 = array();
$array271 = array (
);$array270['0'] = $renderingContext->getVariableProvider()->getByPath('redirect.starttime', $array271);
$array270['1'] = ' && !';
$array272 = array (
);$array270['2'] = $renderingContext->getVariableProvider()->getByPath('redirect.endtime', $array272);

$expression273 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"])));};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression273(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array270)
					),
					$renderingContext
				);
};
$arguments264['__elseClosures'][] = function() use ($renderingContext, $self) {
$output274 = '';

$output274 .= '<span title="';
$array275 = array (
);
$output274 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('onlyend', $array275)]);

$output274 .= '">';
return $output274;
};
$arguments264['__elseifClosures'][] = function() use ($renderingContext, $self) {
// Rendering Boolean node
// Rendering Array
$array276 = array();
$array276['0'] = '!';
$array277 = array (
);$array276['1'] = $renderingContext->getVariableProvider()->getByPath('redirect.starttime', $array277);
$array276['2'] = ' && ';
$array278 = array (
);$array276['3'] = $renderingContext->getVariableProvider()->getByPath('redirect.endtime', $array278);

$expression279 = function($context) {return (!(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"])) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node3"]));};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression279(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array276)
					),
					$renderingContext
				);
};
$arguments264['__elseClosures'][] = function() use ($renderingContext, $self) {
$output280 = '';

$output280 .= '<span title="';
$array281 = array (
);
$output280 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('startend', $array281)]);

$output280 .= '">';
return $output280;
};
$arguments264['__elseifClosures'][] = function() use ($renderingContext, $self) {
// Rendering Boolean node
// Rendering Array
$array282 = array();
$array283 = array (
);$array282['0'] = $renderingContext->getVariableProvider()->getByPath('redirect.starttime', $array283);
$array282['1'] = ' && ';
$array284 = array (
);$array282['2'] = $renderingContext->getVariableProvider()->getByPath('redirect.endtime', $array284);

$expression285 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression285(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array282)
					),
					$renderingContext
				);
};
$arguments264['__elseClosures'][] = function() use ($renderingContext, $self) {
return '<span>';
};

$output263 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments264, $renderChildrenClosure265, $renderingContext);

$output263 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure321 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments320 = array();
$arguments320['table'] = NULL;
$arguments320['row'] = NULL;
$arguments320['size'] = 'small';
$arguments320['alternativeMarkupIdentifier'] = NULL;
$arguments320['table'] = 'sys_redirect';
$array322 = array (
);$arguments320['row'] = $renderingContext->getVariableProvider()->getByPath('redirect', $array322);

$output263 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments320, $renderChildrenClosure321, $renderingContext);

$output263 .= '</span>
                            ';
return $output263;
};
$arguments235 = array();
$arguments235['map'] = NULL;
// Rendering Array
$array237 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure239 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments238 = array();
$arguments238['key'] = NULL;
$arguments238['id'] = NULL;
$arguments238['default'] = NULL;
$arguments238['arguments'] = NULL;
$arguments238['extensionName'] = NULL;
$arguments238['languageKey'] = NULL;
$arguments238['alternativeLanguageKeys'] = NULL;
$arguments238['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:record_disabled';
$array237['disable'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments238, $renderChildrenClosure239, $renderingContext);
$output240 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure242 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments241 = array();
$arguments241['key'] = NULL;
$arguments241['id'] = NULL;
$arguments241['default'] = NULL;
$arguments241['arguments'] = NULL;
$arguments241['extensionName'] = NULL;
$arguments241['languageKey'] = NULL;
$arguments241['alternativeLanguageKeys'] = NULL;
$arguments241['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:start';

$output240 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments241, $renderChildrenClosure242, $renderingContext);

$output240 .= ': ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure244 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments243 = array();
$arguments243['date'] = NULL;
$arguments243['format'] = '';
$arguments243['base'] = NULL;
$array245 = array (
);$arguments243['date'] = $renderingContext->getVariableProvider()->getByPath('redirect.starttime', $array245);
$arguments243['format'] = 'd.m.Y H:i:s';
$renderChildrenClosure244 = ($arguments243['date'] !== null) ? function() use ($arguments243) { return $arguments243['date']; } : $renderChildrenClosure244;
$output240 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments243, $renderChildrenClosure244, $renderingContext);
$array237['onlystart'] = $output240;
$output246 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure248 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments247 = array();
$arguments247['key'] = NULL;
$arguments247['id'] = NULL;
$arguments247['default'] = NULL;
$arguments247['arguments'] = NULL;
$arguments247['extensionName'] = NULL;
$arguments247['languageKey'] = NULL;
$arguments247['alternativeLanguageKeys'] = NULL;
$arguments247['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:stop';

$output246 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments247, $renderChildrenClosure248, $renderingContext);

$output246 .= ': ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure250 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments249 = array();
$arguments249['date'] = NULL;
$arguments249['format'] = '';
$arguments249['base'] = NULL;
$array251 = array (
);$arguments249['date'] = $renderingContext->getVariableProvider()->getByPath('redirect.endtime', $array251);
$arguments249['format'] = 'd.m.Y H:i:s';
$renderChildrenClosure250 = ($arguments249['date'] !== null) ? function() use ($arguments249) { return $arguments249['date']; } : $renderChildrenClosure250;
$output246 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments249, $renderChildrenClosure250, $renderingContext);
$array237['onlyend'] = $output246;
$output252 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure254 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments253 = array();
$arguments253['key'] = NULL;
$arguments253['id'] = NULL;
$arguments253['default'] = NULL;
$arguments253['arguments'] = NULL;
$arguments253['extensionName'] = NULL;
$arguments253['languageKey'] = NULL;
$arguments253['alternativeLanguageKeys'] = NULL;
$arguments253['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:start';

$output252 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments253, $renderChildrenClosure254, $renderingContext);

$output252 .= ': ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure256 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments255 = array();
$arguments255['date'] = NULL;
$arguments255['format'] = '';
$arguments255['base'] = NULL;
$array257 = array (
);$arguments255['date'] = $renderingContext->getVariableProvider()->getByPath('redirect.starttime', $array257);
$arguments255['format'] = 'd.m.Y H:i:s';
$renderChildrenClosure256 = ($arguments255['date'] !== null) ? function() use ($arguments255) { return $arguments255['date']; } : $renderChildrenClosure256;
$output252 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments255, $renderChildrenClosure256, $renderingContext);

$output252 .= ' - ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure259 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments258 = array();
$arguments258['key'] = NULL;
$arguments258['id'] = NULL;
$arguments258['default'] = NULL;
$arguments258['arguments'] = NULL;
$arguments258['extensionName'] = NULL;
$arguments258['languageKey'] = NULL;
$arguments258['alternativeLanguageKeys'] = NULL;
$arguments258['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:stop';

$output252 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments258, $renderChildrenClosure259, $renderingContext);

$output252 .= ': ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure261 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments260 = array();
$arguments260['date'] = NULL;
$arguments260['format'] = '';
$arguments260['base'] = NULL;
$array262 = array (
);$arguments260['date'] = $renderingContext->getVariableProvider()->getByPath('redirect.endtime', $array262);
$arguments260['format'] = 'd.m.Y H:i:s';
$renderChildrenClosure261 = ($arguments260['date'] !== null) ? function() use ($arguments260) { return $arguments260['date']; } : $renderChildrenClosure261;
$output252 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments260, $renderChildrenClosure261, $renderingContext);
$array237['startend'] = $output252;
$arguments235['map'] = $array237;

$output223 .= TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments235, $renderChildrenClosure236, $renderingContext);

$output223 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure324 = function() use ($renderingContext, $self) {
$output331 = '';

$output331 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure333 = function() use ($renderingContext, $self) {
$array334 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('redirect.source_path', $array334)]);
};
$arguments332 = array();
$arguments332['maxCharacters'] = NULL;
$arguments332['append'] = '&hellip;';
$arguments332['respectWordBoundaries'] = true;
$arguments332['respectHtml'] = true;
$arguments332['maxCharacters'] = 100;

$output331 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments332, $renderChildrenClosure333, $renderingContext);

$output331 .= '
                            ';
return $output331;
};
$arguments323 = array();
$arguments323['additionalAttributes'] = NULL;
$arguments323['data'] = NULL;
$arguments323['class'] = NULL;
$arguments323['dir'] = NULL;
$arguments323['id'] = NULL;
$arguments323['lang'] = NULL;
$arguments323['style'] = NULL;
$arguments323['title'] = NULL;
$arguments323['accesskey'] = NULL;
$arguments323['tabindex'] = NULL;
$arguments323['onclick'] = NULL;
$arguments323['uid'] = NULL;
$arguments323['table'] = NULL;
$arguments323['fields'] = NULL;
$arguments323['returnUrl'] = '';
$array325 = array (
);$arguments323['returnUrl'] = $renderingContext->getVariableProvider()->getByPath('returnUrl', $array325);
$arguments323['table'] = 'sys_redirect';
$array326 = array (
);$arguments323['uid'] = $renderingContext->getVariableProvider()->getByPath('redirect.uid', $array326);
$output327 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure329 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments328 = array();
$arguments328['key'] = NULL;
$arguments328['id'] = NULL;
$arguments328['default'] = NULL;
$arguments328['arguments'] = NULL;
$arguments328['extensionName'] = NULL;
$arguments328['languageKey'] = NULL;
$arguments328['alternativeLanguageKeys'] = NULL;
$arguments328['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_mod_web_list.xlf:edit';

$output327 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments328, $renderChildrenClosure329, $renderingContext);

$output327 .= ': ';
$array330 = array (
);
$output327 .= $renderingContext->getVariableProvider()->getByPath('redirect.source_path', $array330);
$arguments323['title'] = $output327;

$output223 .= TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::renderStatic($arguments323, $renderChildrenClosure324, $renderingContext);

$output223 .= '
                        </td>
                        <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure336 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure349 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments348 = array();
$arguments348['then'] = NULL;
$arguments348['else'] = NULL;
$arguments348['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array350 = array();
$array351 = array (
);$array350['0'] = $renderingContext->getVariableProvider()->getByPath('targetUri', $array351);

$expression352 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments348['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression352(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array350)
					),
					$renderingContext
				);
$array353 = array (
);$arguments348['then'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('targetUri', $array353)]);
$array354 = array (
);$arguments348['else'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('redirect.target', $array354)]);
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments348, $renderChildrenClosure349, $renderingContext);
};
$arguments335 = array();
$arguments335['parameter'] = NULL;
$arguments335['target'] = '';
$arguments335['class'] = '';
$arguments335['title'] = '';
$arguments335['language'] = NULL;
$arguments335['additionalParams'] = '';
$arguments335['additionalAttributes'] = array (
);
$arguments335['useCacheHash'] = NULL;
$arguments335['addQueryString'] = false;
$arguments335['addQueryStringMethod'] = 'GET';
$arguments335['addQueryStringExclude'] = '';
$arguments335['absolute'] = false;
$arguments335['parts-as'] = 'typoLinkParts';
$array337 = array (
);$arguments335['parameter'] = $renderingContext->getVariableProvider()->getByPath('redirect.target', $array337);
$arguments335['target'] = '_blank';
$output338 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure340 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments339 = array();
$arguments339['key'] = NULL;
$arguments339['id'] = NULL;
$arguments339['default'] = NULL;
$arguments339['arguments'] = NULL;
$arguments339['extensionName'] = NULL;
$arguments339['languageKey'] = NULL;
$arguments339['alternativeLanguageKeys'] = NULL;
$arguments339['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:visit_destination';

$output338 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments339, $renderChildrenClosure340, $renderingContext);

$output338 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure342 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments341 = array();
$arguments341['then'] = NULL;
$arguments341['else'] = NULL;
$arguments341['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array343 = array();
$array344 = array (
);$array343['0'] = $renderingContext->getVariableProvider()->getByPath('targetUri', $array344);

$expression345 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments341['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression345(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array343)
					),
					$renderingContext
				);
$array346 = array (
);$arguments341['then'] = $renderingContext->getVariableProvider()->getByPath('targetUri', $array346);
$array347 = array (
);$arguments341['else'] = $renderingContext->getVariableProvider()->getByPath('redirect.target', $array347);

$output338 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments341, $renderChildrenClosure342, $renderingContext);
$arguments335['title'] = $output338;

$output223 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments335, $renderChildrenClosure336, $renderingContext);

$output223 .= '
                            (';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure356 = function() use ($renderingContext, $self) {
$output360 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure362 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments361 = array();
$arguments361['key'] = NULL;
$arguments361['id'] = NULL;
$arguments361['default'] = NULL;
$arguments361['arguments'] = NULL;
$arguments361['extensionName'] = NULL;
$arguments361['languageKey'] = NULL;
$arguments361['alternativeLanguageKeys'] = NULL;
$arguments361['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:pageID';

$output360 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments361, $renderChildrenClosure362, $renderingContext)]);

$output360 .= ': ';
$array363 = array (
);
$output360 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageId', $array363)]);

$output360 .= ',
                            ';
return $output360;
};
$arguments355 = array();
$arguments355['then'] = NULL;
$arguments355['else'] = NULL;
$arguments355['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array357 = array();
$array358 = array (
);$array357['0'] = $renderingContext->getVariableProvider()->getByPath('pageId', $array358);

$expression359 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments355['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression359(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array357)
					),
					$renderingContext
				);
$arguments355['__thenClosure'] = $renderChildrenClosure356;

$output223 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments355, $renderChildrenClosure356, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure365 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments364 = array();
$arguments364['key'] = NULL;
$arguments364['id'] = NULL;
$arguments364['default'] = NULL;
$arguments364['arguments'] = NULL;
$arguments364['extensionName'] = NULL;
$arguments364['languageKey'] = NULL;
$arguments364['alternativeLanguageKeys'] = NULL;
$arguments364['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:destination_status_code';

$output223 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments364, $renderChildrenClosure365, $renderingContext)]);

$output223 .= ': ';
$array366 = array (
);
$output223 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('redirect.target_statuscode', $array366)]);

$output223 .= ')</td>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure368 = function() use ($renderingContext, $self) {
$output372 = '';

$output372 .= '
                            <td>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure374 = function() use ($renderingContext, $self) {
$output378 = '';

$output378 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure380 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments379 = array();
$arguments379['key'] = NULL;
$arguments379['id'] = NULL;
$arguments379['default'] = NULL;
$arguments379['arguments'] = NULL;
$arguments379['extensionName'] = NULL;
$arguments379['languageKey'] = NULL;
$arguments379['alternativeLanguageKeys'] = NULL;
$output381 = '';

$output381 .= 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:hit';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure383 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments382 = array();
$arguments382['then'] = NULL;
$arguments382['else'] = NULL;
$arguments382['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array384 = array();
$array385 = array (
);$array384['0'] = $renderingContext->getVariableProvider()->getByPath('redirect.hitcount', $array385);
$array384['1'] = ' > 1';

$expression386 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments382['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression386(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array384)
					),
					$renderingContext
				);
$arguments382['then'] = 's';

$output381 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments382, $renderChildrenClosure383, $renderingContext);

$output381 .= '_text';
$arguments379['key'] = $output381;
// Rendering Array
$array387 = array();
$array388 = array (
);$array387['0'] = $renderingContext->getVariableProvider()->getByPath('redirect.hitcount', $array388);
$arguments379['arguments'] = $array387;

$output378 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments379, $renderChildrenClosure380, $renderingContext)]);

$output378 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure390 = function() use ($renderingContext, $self) {
$output394 = '';

$output394 .= '
                                        <a class="t3js-modal-trigger"
                                            href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure396 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments395 = array();
$arguments395['route'] = NULL;
$arguments395['arguments'] = array (
);
$arguments395['query'] = NULL;
$arguments395['currentUrlParameterName'] = NULL;
$arguments395['route'] = 'tce_db';
$output397 = '';

$output397 .= 'data[sys_redirect][';
$array398 = array (
);
$output397 .= $renderingContext->getVariableProvider()->getByPath('redirect.uid', $array398);

$output397 .= '][hitcount]=0';
$arguments395['query'] = $output397;
// Rendering Array
$array399 = array();
$array400 = array (
);$array399['redirect'] = $renderingContext->getVariableProvider()->getByPath('returnUrl', $array400);
$arguments395['arguments'] = $array399;

$output394 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments395, $renderChildrenClosure396, $renderingContext)]);

$output394 .= '"
                                            title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure402 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments401 = array();
$arguments401['key'] = NULL;
$arguments401['id'] = NULL;
$arguments401['default'] = NULL;
$arguments401['arguments'] = NULL;
$arguments401['extensionName'] = NULL;
$arguments401['languageKey'] = NULL;
$arguments401['alternativeLanguageKeys'] = NULL;
$arguments401['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:hit_reset';

$output394 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments401, $renderChildrenClosure402, $renderingContext)]);

$output394 .= '"
                                            data-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure404 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments403 = array();
$arguments403['key'] = NULL;
$arguments403['id'] = NULL;
$arguments403['default'] = NULL;
$arguments403['arguments'] = NULL;
$arguments403['extensionName'] = NULL;
$arguments403['languageKey'] = NULL;
$arguments403['alternativeLanguageKeys'] = NULL;
$arguments403['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:hit_reset.confirm.title';

$output394 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments403, $renderChildrenClosure404, $renderingContext)]);

$output394 .= '"
                                            data-content="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure406 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments405 = array();
$arguments405['key'] = NULL;
$arguments405['id'] = NULL;
$arguments405['default'] = NULL;
$arguments405['arguments'] = NULL;
$arguments405['extensionName'] = NULL;
$arguments405['languageKey'] = NULL;
$arguments405['alternativeLanguageKeys'] = NULL;
$arguments405['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:hit_reset.confirm.content';

$output394 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments405, $renderChildrenClosure406, $renderingContext)]);

$output394 .= '"
                                            data-button-close-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure408 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments407 = array();
$arguments407['key'] = NULL;
$arguments407['id'] = NULL;
$arguments407['default'] = NULL;
$arguments407['arguments'] = NULL;
$arguments407['extensionName'] = NULL;
$arguments407['languageKey'] = NULL;
$arguments407['alternativeLanguageKeys'] = NULL;
$arguments407['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_alt_doc.xlf:buttons.confirm.delete_record.no';

$output394 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments407, $renderChildrenClosure408, $renderingContext)]);

$output394 .= '">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure410 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments409 = array();
$arguments409['identifier'] = NULL;
$arguments409['size'] = 'small';
$arguments409['overlay'] = NULL;
$arguments409['state'] = 'default';
$arguments409['alternativeMarkupIdentifier'] = NULL;
$arguments409['identifier'] = 'actions-edit-restore';

$output394 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments409, $renderChildrenClosure410, $renderingContext);

$output394 .= '</a>
                                    ';
return $output394;
};
$arguments389 = array();
$arguments389['then'] = NULL;
$arguments389['else'] = NULL;
$arguments389['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array391 = array();
$array392 = array (
);$array391['0'] = $renderingContext->getVariableProvider()->getByPath('redirect.hitcount', $array392);
$array391['1'] = ' != 0';

$expression393 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != 0);};
$arguments389['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression393(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array391)
					),
					$renderingContext
				);
$arguments389['__thenClosure'] = $renderChildrenClosure390;

$output378 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments389, $renderChildrenClosure390, $renderingContext);

$output378 .= '
                                ';
return $output378;
};
$arguments373 = array();
$arguments373['then'] = NULL;
$arguments373['else'] = NULL;
$arguments373['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array375 = array();
$array375['0'] = '!';
$array376 = array (
);$array375['1'] = $renderingContext->getVariableProvider()->getByPath('redirect.disable_hitcount', $array376);

$expression377 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments373['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression377(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array375)
					),
					$renderingContext
				);
$arguments373['__thenClosure'] = $renderChildrenClosure374;

$output372 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments373, $renderChildrenClosure374, $renderingContext);

$output372 .= '
                            <td>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure412 = function() use ($renderingContext, $self) {
$output422 = '';

$output422 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure424 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure426 = function() use ($renderingContext, $self) {
$output427 = '';

$output427 .= '@';
$array428 = array (
);
$output427 .= $renderingContext->getVariableProvider()->getByPath('redirect.lasthiton', $array428);
return $output427;
};
$arguments425 = array();
$arguments425['date'] = NULL;
$arguments425['format'] = '';
$arguments425['base'] = NULL;
$arguments425['format'] = 'd.m.Y H:i:s';
$renderChildrenClosure426 = ($arguments425['date'] !== null) ? function() use ($arguments425) { return $arguments425['date']; } : $renderChildrenClosure426;return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments425, $renderChildrenClosure426, $renderingContext)]);
};
$arguments423 = array();

$output422 .= '';

$output422 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure430 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure432 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments431 = array();
$arguments431['key'] = NULL;
$arguments431['id'] = NULL;
$arguments431['default'] = NULL;
$arguments431['arguments'] = NULL;
$arguments431['extensionName'] = NULL;
$arguments431['languageKey'] = NULL;
$arguments431['alternativeLanguageKeys'] = NULL;
$arguments431['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:hit_last_never';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments431, $renderChildrenClosure432, $renderingContext)]);
};
$arguments429 = array();
$arguments429['if'] = NULL;

$output422 .= '';

$output422 .= '
                                ';
return $output422;
};
$arguments411 = array();
$arguments411['then'] = NULL;
$arguments411['else'] = NULL;
$arguments411['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array419 = array();
$array420 = array (
);$array419['0'] = $renderingContext->getVariableProvider()->getByPath('redirect.lasthiton', $array420);

$expression421 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments411['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression421(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array419)
					),
					$renderingContext
				);
$arguments411['__thenClosure'] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure414 = function() use ($renderingContext, $self) {
$output415 = '';

$output415 .= '@';
$array416 = array (
);
$output415 .= $renderingContext->getVariableProvider()->getByPath('redirect.lasthiton', $array416);
return $output415;
};
$arguments413 = array();
$arguments413['date'] = NULL;
$arguments413['format'] = '';
$arguments413['base'] = NULL;
$arguments413['format'] = 'd.m.Y H:i:s';
$renderChildrenClosure414 = ($arguments413['date'] !== null) ? function() use ($arguments413) { return $arguments413['date']; } : $renderChildrenClosure414;return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments413, $renderChildrenClosure414, $renderingContext)]);
};
$arguments411['__elseClosures'][] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure418 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments417 = array();
$arguments417['key'] = NULL;
$arguments417['id'] = NULL;
$arguments417['default'] = NULL;
$arguments417['arguments'] = NULL;
$arguments417['extensionName'] = NULL;
$arguments417['languageKey'] = NULL;
$arguments417['alternativeLanguageKeys'] = NULL;
$arguments417['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:hit_last_never';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments417, $renderChildrenClosure418, $renderingContext)]);
};

$output372 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments411, $renderChildrenClosure412, $renderingContext);

$output372 .= '
                            </td>
                        ';
return $output372;
};
$arguments367 = array();
$arguments367['then'] = NULL;
$arguments367['else'] = NULL;
$arguments367['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array369 = array();
$array370 = array (
);$array369['0'] = $renderingContext->getVariableProvider()->getByPath('showHitCounter', $array370);

$expression371 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments367['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression371(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array369)
					),
					$renderingContext
				);
$arguments367['__thenClosure'] = $renderChildrenClosure368;

$output223 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments367, $renderChildrenClosure368, $renderingContext);

$output223 .= '
                        <td>
                            <div class="btn-group">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure434 = function() use ($renderingContext, $self) {
$output453 = '';

$output453 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure455 = function() use ($renderingContext, $self) {
$output456 = '';

$output456 .= '
                                        <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure458 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments457 = array();
$arguments457['identifier'] = NULL;
$arguments457['size'] = 'small';
$arguments457['overlay'] = NULL;
$arguments457['state'] = 'default';
$arguments457['alternativeMarkupIdentifier'] = NULL;
$arguments457['identifier'] = 'empty-empty';

$output456 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments457, $renderChildrenClosure458, $renderingContext);

$output456 .= '</span>
                                    ';
return $output456;
};
$arguments454 = array();

$output453 .= '';

$output453 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure460 = function() use ($renderingContext, $self) {
$output461 = '';

$output461 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$renderChildrenClosure463 = function() use ($renderingContext, $self) {
$output469 = '';

$output469 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure471 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments470 = array();
$arguments470['identifier'] = NULL;
$arguments470['size'] = 'small';
$arguments470['overlay'] = NULL;
$arguments470['state'] = 'default';
$arguments470['alternativeMarkupIdentifier'] = NULL;
$arguments470['identifier'] = 'actions-view-page';

$output469 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments470, $renderChildrenClosure471, $renderingContext);

$output469 .= '
                                        ';
return $output469;
};
$arguments462 = array();
$arguments462['additionalAttributes'] = NULL;
$arguments462['data'] = NULL;
$arguments462['uri'] = NULL;
$arguments462['defaultScheme'] = 'http';
$arguments462['class'] = NULL;
$arguments462['dir'] = NULL;
$arguments462['id'] = NULL;
$arguments462['lang'] = NULL;
$arguments462['style'] = NULL;
$arguments462['title'] = NULL;
$arguments462['accesskey'] = NULL;
$arguments462['tabindex'] = NULL;
$arguments462['onclick'] = NULL;
$arguments462['name'] = NULL;
$arguments462['rel'] = NULL;
$arguments462['rev'] = NULL;
$arguments462['target'] = NULL;
$arguments462['class'] = 'btn btn-default';
$output464 = '';
$array465 = array (
);
$output464 .= $renderingContext->getVariableProvider()->getByPath('redirect.source_host', $array465);
$array466 = array (
);
$output464 .= $renderingContext->getVariableProvider()->getByPath('redirect.source_path', $array466);
$arguments462['uri'] = $output464;
$arguments462['target'] = '_blank';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure468 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments467 = array();
$arguments467['key'] = NULL;
$arguments467['id'] = NULL;
$arguments467['default'] = NULL;
$arguments467['arguments'] = NULL;
$arguments467['extensionName'] = NULL;
$arguments467['languageKey'] = NULL;
$arguments467['alternativeLanguageKeys'] = NULL;
$arguments467['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:view_redirect';
$arguments462['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments467, $renderChildrenClosure468, $renderingContext);

$output461 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::renderStatic($arguments462, $renderChildrenClosure463, $renderingContext);

$output461 .= '
                                    ';
return $output461;
};
$arguments459 = array();
$arguments459['if'] = NULL;

$output453 .= '';

$output453 .= '
                                ';
return $output453;
};
$arguments433 = array();
$arguments433['then'] = NULL;
$arguments433['else'] = NULL;
$arguments433['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array449 = array();
$array450 = array (
);$array449['0'] = $renderingContext->getVariableProvider()->getByPath('redirect.is_regexp', $array450);
$array449['1'] = ' || ';
$array451 = array (
);$array449['2'] = $renderingContext->getVariableProvider()->getByPath('redirect.source_host', $array451);
$array449['3'] = ' === \'*\'';

$expression452 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]) === '*'));};
$arguments433['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression452(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array449)
					),
					$renderingContext
				);
$arguments433['__thenClosure'] = function() use ($renderingContext, $self) {
$output435 = '';

$output435 .= '
                                        <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure437 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments436 = array();
$arguments436['identifier'] = NULL;
$arguments436['size'] = 'small';
$arguments436['overlay'] = NULL;
$arguments436['state'] = 'default';
$arguments436['alternativeMarkupIdentifier'] = NULL;
$arguments436['identifier'] = 'empty-empty';

$output435 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments436, $renderChildrenClosure437, $renderingContext);

$output435 .= '</span>
                                    ';
return $output435;
};
$arguments433['__elseClosures'][] = function() use ($renderingContext, $self) {
$output438 = '';

$output438 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$renderChildrenClosure440 = function() use ($renderingContext, $self) {
$output446 = '';

$output446 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure448 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments447 = array();
$arguments447['identifier'] = NULL;
$arguments447['size'] = 'small';
$arguments447['overlay'] = NULL;
$arguments447['state'] = 'default';
$arguments447['alternativeMarkupIdentifier'] = NULL;
$arguments447['identifier'] = 'actions-view-page';

$output446 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments447, $renderChildrenClosure448, $renderingContext);

$output446 .= '
                                        ';
return $output446;
};
$arguments439 = array();
$arguments439['additionalAttributes'] = NULL;
$arguments439['data'] = NULL;
$arguments439['uri'] = NULL;
$arguments439['defaultScheme'] = 'http';
$arguments439['class'] = NULL;
$arguments439['dir'] = NULL;
$arguments439['id'] = NULL;
$arguments439['lang'] = NULL;
$arguments439['style'] = NULL;
$arguments439['title'] = NULL;
$arguments439['accesskey'] = NULL;
$arguments439['tabindex'] = NULL;
$arguments439['onclick'] = NULL;
$arguments439['name'] = NULL;
$arguments439['rel'] = NULL;
$arguments439['rev'] = NULL;
$arguments439['target'] = NULL;
$arguments439['class'] = 'btn btn-default';
$output441 = '';
$array442 = array (
);
$output441 .= $renderingContext->getVariableProvider()->getByPath('redirect.source_host', $array442);
$array443 = array (
);
$output441 .= $renderingContext->getVariableProvider()->getByPath('redirect.source_path', $array443);
$arguments439['uri'] = $output441;
$arguments439['target'] = '_blank';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure445 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments444 = array();
$arguments444['key'] = NULL;
$arguments444['id'] = NULL;
$arguments444['default'] = NULL;
$arguments444['arguments'] = NULL;
$arguments444['extensionName'] = NULL;
$arguments444['languageKey'] = NULL;
$arguments444['alternativeLanguageKeys'] = NULL;
$arguments444['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:view_redirect';
$arguments439['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments444, $renderChildrenClosure445, $renderingContext);

$output438 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::renderStatic($arguments439, $renderChildrenClosure440, $renderingContext);

$output438 .= '
                                    ';
return $output438;
};

$output223 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments433, $renderChildrenClosure434, $renderingContext);

$output223 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure473 = function() use ($renderingContext, $self) {
$output478 = '';

$output478 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure480 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments479 = array();
$arguments479['identifier'] = NULL;
$arguments479['size'] = 'small';
$arguments479['overlay'] = NULL;
$arguments479['state'] = 'default';
$arguments479['alternativeMarkupIdentifier'] = NULL;
$arguments479['identifier'] = 'actions-open';

$output478 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments479, $renderChildrenClosure480, $renderingContext);

$output478 .= '
                                ';
return $output478;
};
$arguments472 = array();
$arguments472['additionalAttributes'] = NULL;
$arguments472['data'] = NULL;
$arguments472['class'] = NULL;
$arguments472['dir'] = NULL;
$arguments472['id'] = NULL;
$arguments472['lang'] = NULL;
$arguments472['style'] = NULL;
$arguments472['title'] = NULL;
$arguments472['accesskey'] = NULL;
$arguments472['tabindex'] = NULL;
$arguments472['onclick'] = NULL;
$arguments472['uid'] = NULL;
$arguments472['table'] = NULL;
$arguments472['fields'] = NULL;
$arguments472['returnUrl'] = '';
$array474 = array (
);$arguments472['returnUrl'] = $renderingContext->getVariableProvider()->getByPath('returnUrl', $array474);
$arguments472['class'] = 'btn btn-default';
$arguments472['table'] = 'sys_redirect';
$array475 = array (
);$arguments472['uid'] = $renderingContext->getVariableProvider()->getByPath('redirect.uid', $array475);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure477 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments476 = array();
$arguments476['key'] = NULL;
$arguments476['id'] = NULL;
$arguments476['default'] = NULL;
$arguments476['arguments'] = NULL;
$arguments476['extensionName'] = NULL;
$arguments476['languageKey'] = NULL;
$arguments476['alternativeLanguageKeys'] = NULL;
$arguments476['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_mod_web_list.xlf:edit';
$arguments472['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments476, $renderChildrenClosure477, $renderingContext);

$output223 .= TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::renderStatic($arguments472, $renderChildrenClosure473, $renderingContext);

$output223 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure482 = function() use ($renderingContext, $self) {
$output508 = '';

$output508 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure510 = function() use ($renderingContext, $self) {
$output511 = '';

$output511 .= '
                                        <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure513 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments512 = array();
$arguments512['route'] = NULL;
$arguments512['arguments'] = array (
);
$arguments512['query'] = NULL;
$arguments512['currentUrlParameterName'] = NULL;
$arguments512['route'] = 'tce_db';
$output514 = '';

$output514 .= 'data[sys_redirect][';
$array515 = array (
);
$output514 .= $renderingContext->getVariableProvider()->getByPath('redirect.uid', $array515);

$output514 .= '][disabled]=0';
$arguments512['query'] = $output514;
// Rendering Array
$array516 = array();
$array517 = array (
);$array516['redirect'] = $renderingContext->getVariableProvider()->getByPath('returnUrl', $array517);
$arguments512['arguments'] = $array516;

$output511 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments512, $renderChildrenClosure513, $renderingContext)]);

$output511 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure519 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments518 = array();
$arguments518['key'] = NULL;
$arguments518['id'] = NULL;
$arguments518['default'] = NULL;
$arguments518['arguments'] = NULL;
$arguments518['extensionName'] = NULL;
$arguments518['languageKey'] = NULL;
$arguments518['alternativeLanguageKeys'] = NULL;
$arguments518['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_mod_web_list.xlf:unHide';

$output511 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments518, $renderChildrenClosure519, $renderingContext)]);

$output511 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure521 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments520 = array();
$arguments520['identifier'] = NULL;
$arguments520['size'] = 'small';
$arguments520['overlay'] = NULL;
$arguments520['state'] = 'default';
$arguments520['alternativeMarkupIdentifier'] = NULL;
$arguments520['identifier'] = 'actions-edit-unhide';

$output511 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments520, $renderChildrenClosure521, $renderingContext);

$output511 .= '</a>
                                    ';
return $output511;
};
$arguments509 = array();

$output508 .= '';

$output508 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure523 = function() use ($renderingContext, $self) {
$output524 = '';

$output524 .= '
                                        <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure526 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments525 = array();
$arguments525['route'] = NULL;
$arguments525['arguments'] = array (
);
$arguments525['query'] = NULL;
$arguments525['currentUrlParameterName'] = NULL;
$arguments525['route'] = 'tce_db';
$output527 = '';

$output527 .= 'data[sys_redirect][';
$array528 = array (
);
$output527 .= $renderingContext->getVariableProvider()->getByPath('redirect.uid', $array528);

$output527 .= '][disabled]=1';
$arguments525['query'] = $output527;
// Rendering Array
$array529 = array();
$array530 = array (
);$array529['redirect'] = $renderingContext->getVariableProvider()->getByPath('returnUrl', $array530);
$arguments525['arguments'] = $array529;

$output524 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments525, $renderChildrenClosure526, $renderingContext)]);

$output524 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure532 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments531 = array();
$arguments531['key'] = NULL;
$arguments531['id'] = NULL;
$arguments531['default'] = NULL;
$arguments531['arguments'] = NULL;
$arguments531['extensionName'] = NULL;
$arguments531['languageKey'] = NULL;
$arguments531['alternativeLanguageKeys'] = NULL;
$arguments531['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_mod_web_list.xlf:hide';

$output524 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments531, $renderChildrenClosure532, $renderingContext)]);

$output524 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure534 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments533 = array();
$arguments533['identifier'] = NULL;
$arguments533['size'] = 'small';
$arguments533['overlay'] = NULL;
$arguments533['state'] = 'default';
$arguments533['alternativeMarkupIdentifier'] = NULL;
$arguments533['identifier'] = 'actions-edit-hide';

$output524 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments533, $renderChildrenClosure534, $renderingContext);

$output524 .= '</a>
                                    ';
return $output524;
};
$arguments522 = array();
$arguments522['if'] = NULL;

$output508 .= '';

$output508 .= '
                                ';
return $output508;
};
$arguments481 = array();
$arguments481['then'] = NULL;
$arguments481['else'] = NULL;
$arguments481['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array505 = array();
$array506 = array (
);$array505['0'] = $renderingContext->getVariableProvider()->getByPath('redirect.disabled', $array506);
$array505['1'] = ' == 1';

$expression507 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments481['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression507(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array505)
					),
					$renderingContext
				);
$arguments481['__thenClosure'] = function() use ($renderingContext, $self) {
$output483 = '';

$output483 .= '
                                        <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure485 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments484 = array();
$arguments484['route'] = NULL;
$arguments484['arguments'] = array (
);
$arguments484['query'] = NULL;
$arguments484['currentUrlParameterName'] = NULL;
$arguments484['route'] = 'tce_db';
$output486 = '';

$output486 .= 'data[sys_redirect][';
$array487 = array (
);
$output486 .= $renderingContext->getVariableProvider()->getByPath('redirect.uid', $array487);

$output486 .= '][disabled]=0';
$arguments484['query'] = $output486;
// Rendering Array
$array488 = array();
$array489 = array (
);$array488['redirect'] = $renderingContext->getVariableProvider()->getByPath('returnUrl', $array489);
$arguments484['arguments'] = $array488;

$output483 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments484, $renderChildrenClosure485, $renderingContext)]);

$output483 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure491 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments490 = array();
$arguments490['key'] = NULL;
$arguments490['id'] = NULL;
$arguments490['default'] = NULL;
$arguments490['arguments'] = NULL;
$arguments490['extensionName'] = NULL;
$arguments490['languageKey'] = NULL;
$arguments490['alternativeLanguageKeys'] = NULL;
$arguments490['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_mod_web_list.xlf:unHide';

$output483 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments490, $renderChildrenClosure491, $renderingContext)]);

$output483 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure493 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments492 = array();
$arguments492['identifier'] = NULL;
$arguments492['size'] = 'small';
$arguments492['overlay'] = NULL;
$arguments492['state'] = 'default';
$arguments492['alternativeMarkupIdentifier'] = NULL;
$arguments492['identifier'] = 'actions-edit-unhide';

$output483 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments492, $renderChildrenClosure493, $renderingContext);

$output483 .= '</a>
                                    ';
return $output483;
};
$arguments481['__elseClosures'][] = function() use ($renderingContext, $self) {
$output494 = '';

$output494 .= '
                                        <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure496 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments495 = array();
$arguments495['route'] = NULL;
$arguments495['arguments'] = array (
);
$arguments495['query'] = NULL;
$arguments495['currentUrlParameterName'] = NULL;
$arguments495['route'] = 'tce_db';
$output497 = '';

$output497 .= 'data[sys_redirect][';
$array498 = array (
);
$output497 .= $renderingContext->getVariableProvider()->getByPath('redirect.uid', $array498);

$output497 .= '][disabled]=1';
$arguments495['query'] = $output497;
// Rendering Array
$array499 = array();
$array500 = array (
);$array499['redirect'] = $renderingContext->getVariableProvider()->getByPath('returnUrl', $array500);
$arguments495['arguments'] = $array499;

$output494 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments495, $renderChildrenClosure496, $renderingContext)]);

$output494 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure502 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments501 = array();
$arguments501['key'] = NULL;
$arguments501['id'] = NULL;
$arguments501['default'] = NULL;
$arguments501['arguments'] = NULL;
$arguments501['extensionName'] = NULL;
$arguments501['languageKey'] = NULL;
$arguments501['alternativeLanguageKeys'] = NULL;
$arguments501['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_mod_web_list.xlf:hide';

$output494 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments501, $renderChildrenClosure502, $renderingContext)]);

$output494 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure504 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments503 = array();
$arguments503['identifier'] = NULL;
$arguments503['size'] = 'small';
$arguments503['overlay'] = NULL;
$arguments503['state'] = 'default';
$arguments503['alternativeMarkupIdentifier'] = NULL;
$arguments503['identifier'] = 'actions-edit-hide';

$output494 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments503, $renderChildrenClosure504, $renderingContext);

$output494 .= '</a>
                                    ';
return $output494;
};

$output223 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments481, $renderChildrenClosure482, $renderingContext);

$output223 .= '
                                <a class="btn btn-default t3js-modal-trigger"
                                    href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure536 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments535 = array();
$arguments535['route'] = NULL;
$arguments535['arguments'] = array (
);
$arguments535['query'] = NULL;
$arguments535['currentUrlParameterName'] = NULL;
$arguments535['route'] = 'tce_db';
$output537 = '';

$output537 .= 'cmd[sys_redirect][';
$array538 = array (
);
$output537 .= $renderingContext->getVariableProvider()->getByPath('redirect.uid', $array538);

$output537 .= '][delete]=1';
$arguments535['query'] = $output537;
// Rendering Array
$array539 = array();
$array540 = array (
);$array539['redirect'] = $renderingContext->getVariableProvider()->getByPath('returnUrl', $array540);
$arguments535['arguments'] = $array539;

$output223 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments535, $renderChildrenClosure536, $renderingContext)]);

$output223 .= '"
                                    title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure542 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments541 = array();
$arguments541['key'] = NULL;
$arguments541['id'] = NULL;
$arguments541['default'] = NULL;
$arguments541['arguments'] = NULL;
$arguments541['extensionName'] = NULL;
$arguments541['languageKey'] = NULL;
$arguments541['alternativeLanguageKeys'] = NULL;
$arguments541['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_mod_web_list.xlf:delete';

$output223 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments541, $renderChildrenClosure542, $renderingContext)]);

$output223 .= '"
                                    data-severity="warning"
                                    data-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure544 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments543 = array();
$arguments543['key'] = NULL;
$arguments543['id'] = NULL;
$arguments543['default'] = NULL;
$arguments543['arguments'] = NULL;
$arguments543['extensionName'] = NULL;
$arguments543['languageKey'] = NULL;
$arguments543['alternativeLanguageKeys'] = NULL;
$arguments543['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_alt_doc.xlf:label.confirm.delete_record.title';

$output223 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments543, $renderChildrenClosure544, $renderingContext)]);

$output223 .= '"
                                    data-content="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure546 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments545 = array();
$arguments545['key'] = NULL;
$arguments545['id'] = NULL;
$arguments545['default'] = NULL;
$arguments545['arguments'] = NULL;
$arguments545['extensionName'] = NULL;
$arguments545['languageKey'] = NULL;
$arguments545['alternativeLanguageKeys'] = NULL;
$arguments545['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_alt_doc.xlf:deleteWarning';

$output223 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments545, $renderChildrenClosure546, $renderingContext)]);

$output223 .= '"
                                    data-button-close-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure548 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments547 = array();
$arguments547['key'] = NULL;
$arguments547['id'] = NULL;
$arguments547['default'] = NULL;
$arguments547['arguments'] = NULL;
$arguments547['extensionName'] = NULL;
$arguments547['languageKey'] = NULL;
$arguments547['alternativeLanguageKeys'] = NULL;
$arguments547['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_alt_doc.xlf:buttons.confirm.delete_record.no';

$output223 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments547, $renderChildrenClosure548, $renderingContext)]);

$output223 .= '">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure550 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments549 = array();
$arguments549['identifier'] = NULL;
$arguments549['size'] = 'small';
$arguments549['overlay'] = NULL;
$arguments549['state'] = 'default';
$arguments549['alternativeMarkupIdentifier'] = NULL;
$arguments549['identifier'] = 'actions-delete';

$output223 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments549, $renderChildrenClosure550, $renderingContext);

$output223 .= '
                                </a>
                            </div>
                        </td>
                    </tr>
                ';
return $output223;
};
$arguments220 = array();
$arguments220['each'] = NULL;
$arguments220['as'] = NULL;
$arguments220['key'] = NULL;
$arguments220['reverse'] = false;
$arguments220['iteration'] = NULL;
$array222 = array (
);$arguments220['each'] = $renderingContext->getVariableProvider()->getByPath('redirects', $array222);
$arguments220['key'] = 'domainName';
$arguments220['as'] = 'redirect';

$output200 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments220, $renderChildrenClosure221, $renderingContext);

$output200 .= '
            </tbody>
        </table>
    </div>
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure552 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments551 = array();
$arguments551['section'] = NULL;
$arguments551['partial'] = NULL;
$arguments551['delegate'] = NULL;
$arguments551['renderable'] = NULL;
$arguments551['arguments'] = array (
);
$arguments551['optional'] = false;
$arguments551['default'] = NULL;
$arguments551['contentAs'] = NULL;
$arguments551['debug'] = true;
$arguments551['partial'] = 'Pagination';
$arguments551['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output200 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments551, $renderChildrenClosure552, $renderingContext);

$output200 .= '
';

return $output200;
}
/**
 * section filter
 */
public function section_4bb4ca75941b7bbc5bc6a12be44b22fc9c8d234e(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output554 = '';

$output554 .= '
    <form action="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure556 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments555 = array();
$arguments555['route'] = NULL;
$arguments555['parameters'] = array (
);
$arguments555['referenceType'] = 'absolute';
$arguments555['route'] = 'site_redirects';
// Rendering Array
$array557 = array();
$array557['action'] = 'overview';
$arguments555['parameters'] = $array557;

$output554 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments555, $renderChildrenClosure556, $renderingContext)]);

$output554 .= '"
        method="post"
        enctype="multipart/form-data"
        name="demand"
        class="form-inline form-inline-spaced">

        <div class="form-group">
            <label for="demand-source-host">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure559 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments558 = array();
$arguments558['key'] = NULL;
$arguments558['id'] = NULL;
$arguments558['default'] = NULL;
$arguments558['arguments'] = NULL;
$arguments558['extensionName'] = NULL;
$arguments558['languageKey'] = NULL;
$arguments558['alternativeLanguageKeys'] = NULL;
$arguments558['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:source_host';

$output554 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments558, $renderChildrenClosure559, $renderingContext)]);

$output554 .= '</label>
            <select id="demand-source-host" class="form-control input-sm" name="demand[source_host]" data-on-change="submit">
                <option value="">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure561 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments560 = array();
$arguments560['key'] = NULL;
$arguments560['id'] = NULL;
$arguments560['default'] = NULL;
$arguments560['arguments'] = NULL;
$arguments560['extensionName'] = NULL;
$arguments560['languageKey'] = NULL;
$arguments560['alternativeLanguageKeys'] = NULL;
$arguments560['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:filter.source_host.showAll';

$output554 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments560, $renderChildrenClosure561, $renderingContext)]);

$output554 .= '</option>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure563 = function() use ($renderingContext, $self) {
$output565 = '';

$output565 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\Select\OptionViewHelper
$renderChildrenClosure567 = function() use ($renderingContext, $self) {
$array573 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('host.name', $array573)]);
};
$arguments566 = array();
$arguments566['class'] = NULL;
$arguments566['dir'] = NULL;
$arguments566['id'] = NULL;
$arguments566['lang'] = NULL;
$arguments566['style'] = NULL;
$arguments566['title'] = NULL;
$arguments566['accesskey'] = NULL;
$arguments566['tabindex'] = NULL;
$arguments566['onclick'] = NULL;
$arguments566['selected'] = NULL;
$arguments566['additionalAttributes'] = NULL;
$arguments566['data'] = NULL;
$arguments566['value'] = NULL;
$array568 = array (
);$arguments566['value'] = $renderingContext->getVariableProvider()->getByPath('host.name', $array568);
// Rendering Boolean node
// Rendering Array
$array569 = array();
$array570 = array (
);$array569['0'] = $renderingContext->getVariableProvider()->getByPath('host.name', $array570);
$array569['1'] = ' === ';
$array571 = array (
);$array569['2'] = $renderingContext->getVariableProvider()->getByPath('demand.sourceHost', $array571);

$expression572 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments566['selected'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression572(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array569)
					),
					$renderingContext
				);

$output565 .= TYPO3\CMS\Fluid\ViewHelpers\Form\Select\OptionViewHelper::renderStatic($arguments566, $renderChildrenClosure567, $renderingContext);

$output565 .= '
                ';
return $output565;
};
$arguments562 = array();
$arguments562['each'] = NULL;
$arguments562['as'] = NULL;
$arguments562['key'] = NULL;
$arguments562['reverse'] = false;
$arguments562['iteration'] = NULL;
$array564 = array (
);$arguments562['each'] = $renderingContext->getVariableProvider()->getByPath('hosts', $array564);
$arguments562['as'] = 'host';

$output554 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments562, $renderChildrenClosure563, $renderingContext);

$output554 .= '
            </select>
        </div>
        <div class="form-group">
            <label for="demand-source-path">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure575 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments574 = array();
$arguments574['key'] = NULL;
$arguments574['id'] = NULL;
$arguments574['default'] = NULL;
$arguments574['arguments'] = NULL;
$arguments574['extensionName'] = NULL;
$arguments574['languageKey'] = NULL;
$arguments574['alternativeLanguageKeys'] = NULL;
$arguments574['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:source_path';

$output554 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments574, $renderChildrenClosure575, $renderingContext)]);

$output554 .= '</label>
            <input type="text" id="demand-source-path" class="form-control input-sm" name="demand[source_path]" value="';
$array576 = array (
);
$output554 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('demand.sourcePath', $array576)]);

$output554 .= '"/>
        </div>
        <div class="form-group">
            <label for="demand-target">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure578 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments577 = array();
$arguments577['key'] = NULL;
$arguments577['id'] = NULL;
$arguments577['default'] = NULL;
$arguments577['arguments'] = NULL;
$arguments577['extensionName'] = NULL;
$arguments577['languageKey'] = NULL;
$arguments577['alternativeLanguageKeys'] = NULL;
$arguments577['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:filter.destination';

$output554 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments577, $renderChildrenClosure578, $renderingContext)]);

$output554 .= '</label>
            <input type="text" id="demand-target" class="form-control input-sm" name="demand[target]" value="';
$array579 = array (
);
$output554 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('demand.target', $array579)]);

$output554 .= '"/>
        </div>
        <div class="form-group">
            <label for="demand-target-status-code">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure581 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments580 = array();
$arguments580['key'] = NULL;
$arguments580['id'] = NULL;
$arguments580['default'] = NULL;
$arguments580['arguments'] = NULL;
$arguments580['extensionName'] = NULL;
$arguments580['languageKey'] = NULL;
$arguments580['alternativeLanguageKeys'] = NULL;
$arguments580['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:filter.targetStatusCode';

$output554 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments580, $renderChildrenClosure581, $renderingContext)]);

$output554 .= '</label>
            <select id="demand-target-status-code" class="form-control input-sm" name="demand[target_statuscode]" data-on-change="submit">
                <option value="">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure583 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments582 = array();
$arguments582['key'] = NULL;
$arguments582['id'] = NULL;
$arguments582['default'] = NULL;
$arguments582['arguments'] = NULL;
$arguments582['extensionName'] = NULL;
$arguments582['languageKey'] = NULL;
$arguments582['alternativeLanguageKeys'] = NULL;
$arguments582['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:filter.source_host.showAll';

$output554 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments582, $renderChildrenClosure583, $renderingContext)]);

$output554 .= '</option>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure585 = function() use ($renderingContext, $self) {
$output587 = '';

$output587 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\Select\OptionViewHelper
$renderChildrenClosure589 = function() use ($renderingContext, $self) {
$array595 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('statusCode.code', $array595)]);
};
$arguments588 = array();
$arguments588['class'] = NULL;
$arguments588['dir'] = NULL;
$arguments588['id'] = NULL;
$arguments588['lang'] = NULL;
$arguments588['style'] = NULL;
$arguments588['title'] = NULL;
$arguments588['accesskey'] = NULL;
$arguments588['tabindex'] = NULL;
$arguments588['onclick'] = NULL;
$arguments588['selected'] = NULL;
$arguments588['additionalAttributes'] = NULL;
$arguments588['data'] = NULL;
$arguments588['value'] = NULL;
$array590 = array (
);$arguments588['value'] = $renderingContext->getVariableProvider()->getByPath('statusCode.code', $array590);
// Rendering Boolean node
// Rendering Array
$array591 = array();
$array592 = array (
);$array591['0'] = $renderingContext->getVariableProvider()->getByPath('statusCode.code', $array592);
$array591['1'] = ' === ';
$array593 = array (
);$array591['2'] = $renderingContext->getVariableProvider()->getByPath('demand.statusCode', $array593);

$expression594 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments588['selected'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression594(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array591)
					),
					$renderingContext
				);

$output587 .= TYPO3\CMS\Fluid\ViewHelpers\Form\Select\OptionViewHelper::renderStatic($arguments588, $renderChildrenClosure589, $renderingContext);

$output587 .= '
                ';
return $output587;
};
$arguments584 = array();
$arguments584['each'] = NULL;
$arguments584['as'] = NULL;
$arguments584['key'] = NULL;
$arguments584['reverse'] = false;
$arguments584['iteration'] = NULL;
$array586 = array (
);$arguments584['each'] = $renderingContext->getVariableProvider()->getByPath('statusCodes', $array586);
$arguments584['as'] = 'statusCode';

$output554 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments584, $renderChildrenClosure585, $renderingContext);

$output554 .= '
            </select>
        </div>
        <div class="form-group">
            <input type="submit" value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure597 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments596 = array();
$arguments596['key'] = NULL;
$arguments596['id'] = NULL;
$arguments596['default'] = NULL;
$arguments596['arguments'] = NULL;
$arguments596['extensionName'] = NULL;
$arguments596['languageKey'] = NULL;
$arguments596['alternativeLanguageKeys'] = NULL;
$arguments596['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:filter.sendButton';

$output554 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments596, $renderChildrenClosure597, $renderingContext)]);

$output554 .= '" class="btn btn-default btn-sm" />
        </div>
    </form>
';

return $output554;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output598 = '';

$output598 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure600 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments599 = array();
$arguments599['name'] = NULL;
$arguments599['name'] = 'RedirectAdministration';

$output598 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output598 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure602 = function() use ($renderingContext, $self) {
$output603 = '';

$output603 .= '
    <h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure605 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments604 = array();
$arguments604['key'] = NULL;
$arguments604['id'] = NULL;
$arguments604['default'] = NULL;
$arguments604['arguments'] = NULL;
$arguments604['extensionName'] = NULL;
$arguments604['languageKey'] = NULL;
$arguments604['alternativeLanguageKeys'] = NULL;
$arguments604['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:heading_text';

$output603 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments604, $renderChildrenClosure605, $renderingContext)]);

$output603 .= '</h1>
';
return $output603;
};
$arguments601 = array();
$arguments601['name'] = NULL;
$arguments601['name'] = 'headline';

$output598 .= NULL;

$output598 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure607 = function() use ($renderingContext, $self) {
$output608 = '';

$output608 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure610 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments609 = array();
$arguments609['value'] = NULL;
$arguments609['name'] = NULL;
$arguments609['name'] = 'returnUrl';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure612 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments611 = array();
$arguments611['route'] = NULL;
$arguments611['parameters'] = array (
);
$arguments611['referenceType'] = 'absolute';
$arguments611['route'] = 'site_redirects';
// Rendering Array
$array613 = array();
$array613['action'] = 'overview';
$array614 = array (
);$array613['demand'] = $renderingContext->getVariableProvider()->getByPath('demand.parameters', $array614);
$array615 = array (
);$array613['orderField'] = $renderingContext->getVariableProvider()->getByPath('demand.orderField', $array615);
$array616 = array (
);$array613['orderDirection'] = $renderingContext->getVariableProvider()->getByPath('demand.orderDirection', $array616);
$arguments611['parameters'] = $array613;
$arguments609['value'] = TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments611, $renderChildrenClosure612, $renderingContext);
$renderChildrenClosure610 = ($arguments609['value'] !== null) ? function() use ($arguments609) { return $arguments609['value']; } : $renderChildrenClosure610;
$output608 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments609, $renderChildrenClosure610, $renderingContext)]);

$output608 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure618 = function() use ($renderingContext, $self) {
$output712 = '';

$output712 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure714 = function() use ($renderingContext, $self) {
$output715 = '';

$output715 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure717 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments716 = array();
$arguments716['section'] = NULL;
$arguments716['partial'] = NULL;
$arguments716['delegate'] = NULL;
$arguments716['renderable'] = NULL;
$arguments716['arguments'] = array (
);
$arguments716['optional'] = false;
$arguments716['default'] = NULL;
$arguments716['contentAs'] = NULL;
$arguments716['debug'] = true;
$arguments716['section'] = 'filter';
$arguments716['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output715 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments716, $renderChildrenClosure717, $renderingContext);

$output715 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure720 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments719 = array();
$arguments719['section'] = NULL;
$arguments719['partial'] = NULL;
$arguments719['delegate'] = NULL;
$arguments719['renderable'] = NULL;
$arguments719['arguments'] = array (
);
$arguments719['optional'] = false;
$arguments719['default'] = NULL;
$arguments719['contentAs'] = NULL;
$arguments719['debug'] = true;
$arguments719['section'] = 'table';
$arguments719['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output715 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments719, $renderChildrenClosure720, $renderingContext);

$output715 .= '
        ';
return $output715;
};
$arguments713 = array();

$output712 .= '';

$output712 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure723 = function() use ($renderingContext, $self) {
$output724 = '';

$output724 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure726 = function() use ($renderingContext, $self) {
$output765 = '';

$output765 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure767 = function() use ($renderingContext, $self) {
$output768 = '';

$output768 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure770 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments769 = array();
$arguments769['section'] = NULL;
$arguments769['partial'] = NULL;
$arguments769['delegate'] = NULL;
$arguments769['renderable'] = NULL;
$arguments769['arguments'] = array (
);
$arguments769['optional'] = false;
$arguments769['default'] = NULL;
$arguments769['contentAs'] = NULL;
$arguments769['debug'] = true;
$arguments769['section'] = 'filter';
$arguments769['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output768 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments769, $renderChildrenClosure770, $renderingContext);

$output768 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure773 = function() use ($renderingContext, $self) {
$output776 = '';

$output776 .= '
                        <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure778 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments777 = array();
$arguments777['key'] = NULL;
$arguments777['id'] = NULL;
$arguments777['default'] = NULL;
$arguments777['arguments'] = NULL;
$arguments777['extensionName'] = NULL;
$arguments777['languageKey'] = NULL;
$arguments777['alternativeLanguageKeys'] = NULL;
$arguments777['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found_with_filter.message';

$output776 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments777, $renderChildrenClosure778, $renderingContext)]);

$output776 .= '</p>
                        <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure780 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments779 = array();
$arguments779['route'] = NULL;
$arguments779['parameters'] = array (
);
$arguments779['referenceType'] = 'absolute';
$arguments779['route'] = 'site_redirects';
// Rendering Array
$array781 = array();
$array781['action'] = 'overview';
$arguments779['parameters'] = $array781;

$output776 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments779, $renderChildrenClosure780, $renderingContext)]);

$output776 .= '">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure783 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments782 = array();
$arguments782['key'] = NULL;
$arguments782['id'] = NULL;
$arguments782['default'] = NULL;
$arguments782['arguments'] = NULL;
$arguments782['extensionName'] = NULL;
$arguments782['languageKey'] = NULL;
$arguments782['alternativeLanguageKeys'] = NULL;
$arguments782['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_no_filter';

$output776 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments782, $renderChildrenClosure783, $renderingContext)]);

$output776 .= '
                        </a>
                        ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper
$renderChildrenClosure785 = function() use ($renderingContext, $self) {
$output787 = '';

$output787 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure789 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments788 = array();
$arguments788['key'] = NULL;
$arguments788['id'] = NULL;
$arguments788['default'] = NULL;
$arguments788['arguments'] = NULL;
$arguments788['extensionName'] = NULL;
$arguments788['languageKey'] = NULL;
$arguments788['alternativeLanguageKeys'] = NULL;
$arguments788['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_create';

$output787 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments788, $renderChildrenClosure789, $renderingContext)]);

$output787 .= '
                        ';
return $output787;
};
$arguments784 = array();
$arguments784['additionalAttributes'] = NULL;
$arguments784['data'] = NULL;
$arguments784['class'] = NULL;
$arguments784['dir'] = NULL;
$arguments784['id'] = NULL;
$arguments784['lang'] = NULL;
$arguments784['style'] = NULL;
$arguments784['title'] = NULL;
$arguments784['accesskey'] = NULL;
$arguments784['tabindex'] = NULL;
$arguments784['onclick'] = NULL;
$arguments784['uid'] = NULL;
$arguments784['pid'] = NULL;
$arguments784['table'] = NULL;
$arguments784['returnUrl'] = '';
$array786 = array (
);$arguments784['returnUrl'] = $renderingContext->getVariableProvider()->getByPath('returnUrl', $array786);
$arguments784['class'] = 'btn btn-primary';
$arguments784['table'] = 'sys_redirect';

$output776 .= TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper::renderStatic($arguments784, $renderChildrenClosure785, $renderingContext);

$output776 .= '
                    ';
return $output776;
};
$arguments772 = array();
$arguments772['message'] = NULL;
$arguments772['title'] = NULL;
$arguments772['state'] = -2;
$arguments772['iconName'] = NULL;
$arguments772['disableIcon'] = false;
$arguments772['state'] = -2;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure775 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments774 = array();
$arguments774['key'] = NULL;
$arguments774['id'] = NULL;
$arguments774['default'] = NULL;
$arguments774['arguments'] = NULL;
$arguments774['extensionName'] = NULL;
$arguments774['languageKey'] = NULL;
$arguments774['alternativeLanguageKeys'] = NULL;
$arguments774['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found_with_filter.title';
$arguments772['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments774, $renderChildrenClosure775, $renderingContext);
$renderChildrenClosure773 = ($arguments772['message'] !== null) ? function() use ($arguments772) { return $arguments772['message']; } : $renderChildrenClosure773;
$output768 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments772, $renderChildrenClosure773, $renderingContext);

$output768 .= '
                ';
return $output768;
};
$arguments766 = array();

$output765 .= '';

$output765 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure791 = function() use ($renderingContext, $self) {
$output792 = '';

$output792 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure794 = function() use ($renderingContext, $self) {
$output797 = '';

$output797 .= '
                        <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure799 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments798 = array();
$arguments798['key'] = NULL;
$arguments798['id'] = NULL;
$arguments798['default'] = NULL;
$arguments798['arguments'] = NULL;
$arguments798['extensionName'] = NULL;
$arguments798['languageKey'] = NULL;
$arguments798['alternativeLanguageKeys'] = NULL;
$arguments798['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found.message';

$output797 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments798, $renderChildrenClosure799, $renderingContext)]);

$output797 .= '</p>
                        ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper
$renderChildrenClosure801 = function() use ($renderingContext, $self) {
$output802 = '';

$output802 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure804 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments803 = array();
$arguments803['key'] = NULL;
$arguments803['id'] = NULL;
$arguments803['default'] = NULL;
$arguments803['arguments'] = NULL;
$arguments803['extensionName'] = NULL;
$arguments803['languageKey'] = NULL;
$arguments803['alternativeLanguageKeys'] = NULL;
$arguments803['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_create';

$output802 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments803, $renderChildrenClosure804, $renderingContext)]);

$output802 .= '
                        ';
return $output802;
};
$arguments800 = array();
$arguments800['additionalAttributes'] = NULL;
$arguments800['data'] = NULL;
$arguments800['class'] = NULL;
$arguments800['dir'] = NULL;
$arguments800['id'] = NULL;
$arguments800['lang'] = NULL;
$arguments800['style'] = NULL;
$arguments800['title'] = NULL;
$arguments800['accesskey'] = NULL;
$arguments800['tabindex'] = NULL;
$arguments800['onclick'] = NULL;
$arguments800['uid'] = NULL;
$arguments800['pid'] = NULL;
$arguments800['table'] = NULL;
$arguments800['returnUrl'] = '';
$arguments800['class'] = 'btn btn-primary';
$arguments800['table'] = 'sys_redirect';

$output797 .= TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper::renderStatic($arguments800, $renderChildrenClosure801, $renderingContext);

$output797 .= '
                    ';
return $output797;
};
$arguments793 = array();
$arguments793['message'] = NULL;
$arguments793['title'] = NULL;
$arguments793['state'] = -2;
$arguments793['iconName'] = NULL;
$arguments793['disableIcon'] = false;
$arguments793['state'] = -1;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure796 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments795 = array();
$arguments795['key'] = NULL;
$arguments795['id'] = NULL;
$arguments795['default'] = NULL;
$arguments795['arguments'] = NULL;
$arguments795['extensionName'] = NULL;
$arguments795['languageKey'] = NULL;
$arguments795['alternativeLanguageKeys'] = NULL;
$arguments795['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found.title';
$arguments793['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments795, $renderChildrenClosure796, $renderingContext);
$renderChildrenClosure794 = ($arguments793['message'] !== null) ? function() use ($arguments793) { return $arguments793['message']; } : $renderChildrenClosure794;
$output792 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments793, $renderChildrenClosure794, $renderingContext);

$output792 .= '
                ';
return $output792;
};
$arguments790 = array();
$arguments790['if'] = NULL;

$output765 .= '';

$output765 .= '
            ';
return $output765;
};
$arguments725 = array();
$arguments725['then'] = NULL;
$arguments725['else'] = NULL;
$arguments725['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array762 = array();
$array763 = array (
);$array762['0'] = $renderingContext->getVariableProvider()->getByPath('demand.constraints', $array763);

$expression764 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments725['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression764(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array762)
					),
					$renderingContext
				);
$arguments725['__thenClosure'] = function() use ($renderingContext, $self) {
$output727 = '';

$output727 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure729 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments728 = array();
$arguments728['section'] = NULL;
$arguments728['partial'] = NULL;
$arguments728['delegate'] = NULL;
$arguments728['renderable'] = NULL;
$arguments728['arguments'] = array (
);
$arguments728['optional'] = false;
$arguments728['default'] = NULL;
$arguments728['contentAs'] = NULL;
$arguments728['debug'] = true;
$arguments728['section'] = 'filter';
$arguments728['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output727 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments728, $renderChildrenClosure729, $renderingContext);

$output727 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure732 = function() use ($renderingContext, $self) {
$output735 = '';

$output735 .= '
                        <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure737 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments736 = array();
$arguments736['key'] = NULL;
$arguments736['id'] = NULL;
$arguments736['default'] = NULL;
$arguments736['arguments'] = NULL;
$arguments736['extensionName'] = NULL;
$arguments736['languageKey'] = NULL;
$arguments736['alternativeLanguageKeys'] = NULL;
$arguments736['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found_with_filter.message';

$output735 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments736, $renderChildrenClosure737, $renderingContext)]);

$output735 .= '</p>
                        <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure739 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments738 = array();
$arguments738['route'] = NULL;
$arguments738['parameters'] = array (
);
$arguments738['referenceType'] = 'absolute';
$arguments738['route'] = 'site_redirects';
// Rendering Array
$array740 = array();
$array740['action'] = 'overview';
$arguments738['parameters'] = $array740;

$output735 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments738, $renderChildrenClosure739, $renderingContext)]);

$output735 .= '">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure742 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments741 = array();
$arguments741['key'] = NULL;
$arguments741['id'] = NULL;
$arguments741['default'] = NULL;
$arguments741['arguments'] = NULL;
$arguments741['extensionName'] = NULL;
$arguments741['languageKey'] = NULL;
$arguments741['alternativeLanguageKeys'] = NULL;
$arguments741['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_no_filter';

$output735 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments741, $renderChildrenClosure742, $renderingContext)]);

$output735 .= '
                        </a>
                        ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper
$renderChildrenClosure744 = function() use ($renderingContext, $self) {
$output746 = '';

$output746 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure748 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments747 = array();
$arguments747['key'] = NULL;
$arguments747['id'] = NULL;
$arguments747['default'] = NULL;
$arguments747['arguments'] = NULL;
$arguments747['extensionName'] = NULL;
$arguments747['languageKey'] = NULL;
$arguments747['alternativeLanguageKeys'] = NULL;
$arguments747['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_create';

$output746 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments747, $renderChildrenClosure748, $renderingContext)]);

$output746 .= '
                        ';
return $output746;
};
$arguments743 = array();
$arguments743['additionalAttributes'] = NULL;
$arguments743['data'] = NULL;
$arguments743['class'] = NULL;
$arguments743['dir'] = NULL;
$arguments743['id'] = NULL;
$arguments743['lang'] = NULL;
$arguments743['style'] = NULL;
$arguments743['title'] = NULL;
$arguments743['accesskey'] = NULL;
$arguments743['tabindex'] = NULL;
$arguments743['onclick'] = NULL;
$arguments743['uid'] = NULL;
$arguments743['pid'] = NULL;
$arguments743['table'] = NULL;
$arguments743['returnUrl'] = '';
$array745 = array (
);$arguments743['returnUrl'] = $renderingContext->getVariableProvider()->getByPath('returnUrl', $array745);
$arguments743['class'] = 'btn btn-primary';
$arguments743['table'] = 'sys_redirect';

$output735 .= TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper::renderStatic($arguments743, $renderChildrenClosure744, $renderingContext);

$output735 .= '
                    ';
return $output735;
};
$arguments731 = array();
$arguments731['message'] = NULL;
$arguments731['title'] = NULL;
$arguments731['state'] = -2;
$arguments731['iconName'] = NULL;
$arguments731['disableIcon'] = false;
$arguments731['state'] = -2;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure734 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments733 = array();
$arguments733['key'] = NULL;
$arguments733['id'] = NULL;
$arguments733['default'] = NULL;
$arguments733['arguments'] = NULL;
$arguments733['extensionName'] = NULL;
$arguments733['languageKey'] = NULL;
$arguments733['alternativeLanguageKeys'] = NULL;
$arguments733['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found_with_filter.title';
$arguments731['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments733, $renderChildrenClosure734, $renderingContext);
$renderChildrenClosure732 = ($arguments731['message'] !== null) ? function() use ($arguments731) { return $arguments731['message']; } : $renderChildrenClosure732;
$output727 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments731, $renderChildrenClosure732, $renderingContext);

$output727 .= '
                ';
return $output727;
};
$arguments725['__elseClosures'][] = function() use ($renderingContext, $self) {
$output749 = '';

$output749 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure751 = function() use ($renderingContext, $self) {
$output754 = '';

$output754 .= '
                        <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure756 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments755 = array();
$arguments755['key'] = NULL;
$arguments755['id'] = NULL;
$arguments755['default'] = NULL;
$arguments755['arguments'] = NULL;
$arguments755['extensionName'] = NULL;
$arguments755['languageKey'] = NULL;
$arguments755['alternativeLanguageKeys'] = NULL;
$arguments755['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found.message';

$output754 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments755, $renderChildrenClosure756, $renderingContext)]);

$output754 .= '</p>
                        ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper
$renderChildrenClosure758 = function() use ($renderingContext, $self) {
$output759 = '';

$output759 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure761 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments760 = array();
$arguments760['key'] = NULL;
$arguments760['id'] = NULL;
$arguments760['default'] = NULL;
$arguments760['arguments'] = NULL;
$arguments760['extensionName'] = NULL;
$arguments760['languageKey'] = NULL;
$arguments760['alternativeLanguageKeys'] = NULL;
$arguments760['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_create';

$output759 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments760, $renderChildrenClosure761, $renderingContext)]);

$output759 .= '
                        ';
return $output759;
};
$arguments757 = array();
$arguments757['additionalAttributes'] = NULL;
$arguments757['data'] = NULL;
$arguments757['class'] = NULL;
$arguments757['dir'] = NULL;
$arguments757['id'] = NULL;
$arguments757['lang'] = NULL;
$arguments757['style'] = NULL;
$arguments757['title'] = NULL;
$arguments757['accesskey'] = NULL;
$arguments757['tabindex'] = NULL;
$arguments757['onclick'] = NULL;
$arguments757['uid'] = NULL;
$arguments757['pid'] = NULL;
$arguments757['table'] = NULL;
$arguments757['returnUrl'] = '';
$arguments757['class'] = 'btn btn-primary';
$arguments757['table'] = 'sys_redirect';

$output754 .= TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper::renderStatic($arguments757, $renderChildrenClosure758, $renderingContext);

$output754 .= '
                    ';
return $output754;
};
$arguments750 = array();
$arguments750['message'] = NULL;
$arguments750['title'] = NULL;
$arguments750['state'] = -2;
$arguments750['iconName'] = NULL;
$arguments750['disableIcon'] = false;
$arguments750['state'] = -1;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure753 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments752 = array();
$arguments752['key'] = NULL;
$arguments752['id'] = NULL;
$arguments752['default'] = NULL;
$arguments752['arguments'] = NULL;
$arguments752['extensionName'] = NULL;
$arguments752['languageKey'] = NULL;
$arguments752['alternativeLanguageKeys'] = NULL;
$arguments752['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found.title';
$arguments750['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments752, $renderChildrenClosure753, $renderingContext);
$renderChildrenClosure751 = ($arguments750['message'] !== null) ? function() use ($arguments750) { return $arguments750['message']; } : $renderChildrenClosure751;
$output749 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments750, $renderChildrenClosure751, $renderingContext);

$output749 .= '
                ';
return $output749;
};

$output724 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments725, $renderChildrenClosure726, $renderingContext);

$output724 .= '
        ';
return $output724;
};
$arguments722 = array();
$arguments722['if'] = NULL;

$output712 .= '';

$output712 .= '
    ';
return $output712;
};
$arguments617 = array();
$arguments617['then'] = NULL;
$arguments617['else'] = NULL;
$arguments617['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array707 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure709 = function() use ($renderingContext, $self) {
$array710 = array (
);return $renderingContext->getVariableProvider()->getByPath('redirects', $array710);
};
$arguments708 = array();
$arguments708['subject'] = NULL;
$renderChildrenClosure709 = ($arguments708['subject'] !== null) ? function() use ($arguments708) { return $arguments708['subject']; } : $renderChildrenClosure709;$array707['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments708, $renderChildrenClosure709, $renderingContext);

$expression711 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments617['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression711(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array707)
					),
					$renderingContext
				);
$arguments617['__thenClosure'] = function() use ($renderingContext, $self) {
$output619 = '';

$output619 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure621 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments620 = array();
$arguments620['section'] = NULL;
$arguments620['partial'] = NULL;
$arguments620['delegate'] = NULL;
$arguments620['renderable'] = NULL;
$arguments620['arguments'] = array (
);
$arguments620['optional'] = false;
$arguments620['default'] = NULL;
$arguments620['contentAs'] = NULL;
$arguments620['debug'] = true;
$arguments620['section'] = 'filter';
$arguments620['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output619 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments620, $renderChildrenClosure621, $renderingContext);

$output619 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure624 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments623 = array();
$arguments623['section'] = NULL;
$arguments623['partial'] = NULL;
$arguments623['delegate'] = NULL;
$arguments623['renderable'] = NULL;
$arguments623['arguments'] = array (
);
$arguments623['optional'] = false;
$arguments623['default'] = NULL;
$arguments623['contentAs'] = NULL;
$arguments623['debug'] = true;
$arguments623['section'] = 'table';
$arguments623['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output619 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments623, $renderChildrenClosure624, $renderingContext);

$output619 .= '
        ';
return $output619;
};
$arguments617['__elseClosures'][] = function() use ($renderingContext, $self) {
$output626 = '';

$output626 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure628 = function() use ($renderingContext, $self) {
$output667 = '';

$output667 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure669 = function() use ($renderingContext, $self) {
$output670 = '';

$output670 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure672 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments671 = array();
$arguments671['section'] = NULL;
$arguments671['partial'] = NULL;
$arguments671['delegate'] = NULL;
$arguments671['renderable'] = NULL;
$arguments671['arguments'] = array (
);
$arguments671['optional'] = false;
$arguments671['default'] = NULL;
$arguments671['contentAs'] = NULL;
$arguments671['debug'] = true;
$arguments671['section'] = 'filter';
$arguments671['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output670 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments671, $renderChildrenClosure672, $renderingContext);

$output670 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure675 = function() use ($renderingContext, $self) {
$output678 = '';

$output678 .= '
                        <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure680 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments679 = array();
$arguments679['key'] = NULL;
$arguments679['id'] = NULL;
$arguments679['default'] = NULL;
$arguments679['arguments'] = NULL;
$arguments679['extensionName'] = NULL;
$arguments679['languageKey'] = NULL;
$arguments679['alternativeLanguageKeys'] = NULL;
$arguments679['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found_with_filter.message';

$output678 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments679, $renderChildrenClosure680, $renderingContext)]);

$output678 .= '</p>
                        <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure682 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments681 = array();
$arguments681['route'] = NULL;
$arguments681['parameters'] = array (
);
$arguments681['referenceType'] = 'absolute';
$arguments681['route'] = 'site_redirects';
// Rendering Array
$array683 = array();
$array683['action'] = 'overview';
$arguments681['parameters'] = $array683;

$output678 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments681, $renderChildrenClosure682, $renderingContext)]);

$output678 .= '">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure685 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments684 = array();
$arguments684['key'] = NULL;
$arguments684['id'] = NULL;
$arguments684['default'] = NULL;
$arguments684['arguments'] = NULL;
$arguments684['extensionName'] = NULL;
$arguments684['languageKey'] = NULL;
$arguments684['alternativeLanguageKeys'] = NULL;
$arguments684['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_no_filter';

$output678 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments684, $renderChildrenClosure685, $renderingContext)]);

$output678 .= '
                        </a>
                        ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper
$renderChildrenClosure687 = function() use ($renderingContext, $self) {
$output689 = '';

$output689 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure691 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments690 = array();
$arguments690['key'] = NULL;
$arguments690['id'] = NULL;
$arguments690['default'] = NULL;
$arguments690['arguments'] = NULL;
$arguments690['extensionName'] = NULL;
$arguments690['languageKey'] = NULL;
$arguments690['alternativeLanguageKeys'] = NULL;
$arguments690['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_create';

$output689 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments690, $renderChildrenClosure691, $renderingContext)]);

$output689 .= '
                        ';
return $output689;
};
$arguments686 = array();
$arguments686['additionalAttributes'] = NULL;
$arguments686['data'] = NULL;
$arguments686['class'] = NULL;
$arguments686['dir'] = NULL;
$arguments686['id'] = NULL;
$arguments686['lang'] = NULL;
$arguments686['style'] = NULL;
$arguments686['title'] = NULL;
$arguments686['accesskey'] = NULL;
$arguments686['tabindex'] = NULL;
$arguments686['onclick'] = NULL;
$arguments686['uid'] = NULL;
$arguments686['pid'] = NULL;
$arguments686['table'] = NULL;
$arguments686['returnUrl'] = '';
$array688 = array (
);$arguments686['returnUrl'] = $renderingContext->getVariableProvider()->getByPath('returnUrl', $array688);
$arguments686['class'] = 'btn btn-primary';
$arguments686['table'] = 'sys_redirect';

$output678 .= TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper::renderStatic($arguments686, $renderChildrenClosure687, $renderingContext);

$output678 .= '
                    ';
return $output678;
};
$arguments674 = array();
$arguments674['message'] = NULL;
$arguments674['title'] = NULL;
$arguments674['state'] = -2;
$arguments674['iconName'] = NULL;
$arguments674['disableIcon'] = false;
$arguments674['state'] = -2;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure677 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments676 = array();
$arguments676['key'] = NULL;
$arguments676['id'] = NULL;
$arguments676['default'] = NULL;
$arguments676['arguments'] = NULL;
$arguments676['extensionName'] = NULL;
$arguments676['languageKey'] = NULL;
$arguments676['alternativeLanguageKeys'] = NULL;
$arguments676['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found_with_filter.title';
$arguments674['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments676, $renderChildrenClosure677, $renderingContext);
$renderChildrenClosure675 = ($arguments674['message'] !== null) ? function() use ($arguments674) { return $arguments674['message']; } : $renderChildrenClosure675;
$output670 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments674, $renderChildrenClosure675, $renderingContext);

$output670 .= '
                ';
return $output670;
};
$arguments668 = array();

$output667 .= '';

$output667 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure693 = function() use ($renderingContext, $self) {
$output694 = '';

$output694 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure696 = function() use ($renderingContext, $self) {
$output699 = '';

$output699 .= '
                        <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure701 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments700 = array();
$arguments700['key'] = NULL;
$arguments700['id'] = NULL;
$arguments700['default'] = NULL;
$arguments700['arguments'] = NULL;
$arguments700['extensionName'] = NULL;
$arguments700['languageKey'] = NULL;
$arguments700['alternativeLanguageKeys'] = NULL;
$arguments700['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found.message';

$output699 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments700, $renderChildrenClosure701, $renderingContext)]);

$output699 .= '</p>
                        ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper
$renderChildrenClosure703 = function() use ($renderingContext, $self) {
$output704 = '';

$output704 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure706 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments705 = array();
$arguments705['key'] = NULL;
$arguments705['id'] = NULL;
$arguments705['default'] = NULL;
$arguments705['arguments'] = NULL;
$arguments705['extensionName'] = NULL;
$arguments705['languageKey'] = NULL;
$arguments705['alternativeLanguageKeys'] = NULL;
$arguments705['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_create';

$output704 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments705, $renderChildrenClosure706, $renderingContext)]);

$output704 .= '
                        ';
return $output704;
};
$arguments702 = array();
$arguments702['additionalAttributes'] = NULL;
$arguments702['data'] = NULL;
$arguments702['class'] = NULL;
$arguments702['dir'] = NULL;
$arguments702['id'] = NULL;
$arguments702['lang'] = NULL;
$arguments702['style'] = NULL;
$arguments702['title'] = NULL;
$arguments702['accesskey'] = NULL;
$arguments702['tabindex'] = NULL;
$arguments702['onclick'] = NULL;
$arguments702['uid'] = NULL;
$arguments702['pid'] = NULL;
$arguments702['table'] = NULL;
$arguments702['returnUrl'] = '';
$arguments702['class'] = 'btn btn-primary';
$arguments702['table'] = 'sys_redirect';

$output699 .= TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper::renderStatic($arguments702, $renderChildrenClosure703, $renderingContext);

$output699 .= '
                    ';
return $output699;
};
$arguments695 = array();
$arguments695['message'] = NULL;
$arguments695['title'] = NULL;
$arguments695['state'] = -2;
$arguments695['iconName'] = NULL;
$arguments695['disableIcon'] = false;
$arguments695['state'] = -1;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure698 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments697 = array();
$arguments697['key'] = NULL;
$arguments697['id'] = NULL;
$arguments697['default'] = NULL;
$arguments697['arguments'] = NULL;
$arguments697['extensionName'] = NULL;
$arguments697['languageKey'] = NULL;
$arguments697['alternativeLanguageKeys'] = NULL;
$arguments697['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found.title';
$arguments695['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments697, $renderChildrenClosure698, $renderingContext);
$renderChildrenClosure696 = ($arguments695['message'] !== null) ? function() use ($arguments695) { return $arguments695['message']; } : $renderChildrenClosure696;
$output694 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments695, $renderChildrenClosure696, $renderingContext);

$output694 .= '
                ';
return $output694;
};
$arguments692 = array();
$arguments692['if'] = NULL;

$output667 .= '';

$output667 .= '
            ';
return $output667;
};
$arguments627 = array();
$arguments627['then'] = NULL;
$arguments627['else'] = NULL;
$arguments627['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array664 = array();
$array665 = array (
);$array664['0'] = $renderingContext->getVariableProvider()->getByPath('demand.constraints', $array665);

$expression666 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments627['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression666(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array664)
					),
					$renderingContext
				);
$arguments627['__thenClosure'] = function() use ($renderingContext, $self) {
$output629 = '';

$output629 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure631 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments630 = array();
$arguments630['section'] = NULL;
$arguments630['partial'] = NULL;
$arguments630['delegate'] = NULL;
$arguments630['renderable'] = NULL;
$arguments630['arguments'] = array (
);
$arguments630['optional'] = false;
$arguments630['default'] = NULL;
$arguments630['contentAs'] = NULL;
$arguments630['debug'] = true;
$arguments630['section'] = 'filter';
$arguments630['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output629 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments630, $renderChildrenClosure631, $renderingContext);

$output629 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure634 = function() use ($renderingContext, $self) {
$output637 = '';

$output637 .= '
                        <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure639 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments638 = array();
$arguments638['key'] = NULL;
$arguments638['id'] = NULL;
$arguments638['default'] = NULL;
$arguments638['arguments'] = NULL;
$arguments638['extensionName'] = NULL;
$arguments638['languageKey'] = NULL;
$arguments638['alternativeLanguageKeys'] = NULL;
$arguments638['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found_with_filter.message';

$output637 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments638, $renderChildrenClosure639, $renderingContext)]);

$output637 .= '</p>
                        <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure641 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments640 = array();
$arguments640['route'] = NULL;
$arguments640['parameters'] = array (
);
$arguments640['referenceType'] = 'absolute';
$arguments640['route'] = 'site_redirects';
// Rendering Array
$array642 = array();
$array642['action'] = 'overview';
$arguments640['parameters'] = $array642;

$output637 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments640, $renderChildrenClosure641, $renderingContext)]);

$output637 .= '">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure644 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments643 = array();
$arguments643['key'] = NULL;
$arguments643['id'] = NULL;
$arguments643['default'] = NULL;
$arguments643['arguments'] = NULL;
$arguments643['extensionName'] = NULL;
$arguments643['languageKey'] = NULL;
$arguments643['alternativeLanguageKeys'] = NULL;
$arguments643['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_no_filter';

$output637 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments643, $renderChildrenClosure644, $renderingContext)]);

$output637 .= '
                        </a>
                        ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper
$renderChildrenClosure646 = function() use ($renderingContext, $self) {
$output648 = '';

$output648 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure650 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments649 = array();
$arguments649['key'] = NULL;
$arguments649['id'] = NULL;
$arguments649['default'] = NULL;
$arguments649['arguments'] = NULL;
$arguments649['extensionName'] = NULL;
$arguments649['languageKey'] = NULL;
$arguments649['alternativeLanguageKeys'] = NULL;
$arguments649['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_create';

$output648 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments649, $renderChildrenClosure650, $renderingContext)]);

$output648 .= '
                        ';
return $output648;
};
$arguments645 = array();
$arguments645['additionalAttributes'] = NULL;
$arguments645['data'] = NULL;
$arguments645['class'] = NULL;
$arguments645['dir'] = NULL;
$arguments645['id'] = NULL;
$arguments645['lang'] = NULL;
$arguments645['style'] = NULL;
$arguments645['title'] = NULL;
$arguments645['accesskey'] = NULL;
$arguments645['tabindex'] = NULL;
$arguments645['onclick'] = NULL;
$arguments645['uid'] = NULL;
$arguments645['pid'] = NULL;
$arguments645['table'] = NULL;
$arguments645['returnUrl'] = '';
$array647 = array (
);$arguments645['returnUrl'] = $renderingContext->getVariableProvider()->getByPath('returnUrl', $array647);
$arguments645['class'] = 'btn btn-primary';
$arguments645['table'] = 'sys_redirect';

$output637 .= TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper::renderStatic($arguments645, $renderChildrenClosure646, $renderingContext);

$output637 .= '
                    ';
return $output637;
};
$arguments633 = array();
$arguments633['message'] = NULL;
$arguments633['title'] = NULL;
$arguments633['state'] = -2;
$arguments633['iconName'] = NULL;
$arguments633['disableIcon'] = false;
$arguments633['state'] = -2;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure636 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments635 = array();
$arguments635['key'] = NULL;
$arguments635['id'] = NULL;
$arguments635['default'] = NULL;
$arguments635['arguments'] = NULL;
$arguments635['extensionName'] = NULL;
$arguments635['languageKey'] = NULL;
$arguments635['alternativeLanguageKeys'] = NULL;
$arguments635['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found_with_filter.title';
$arguments633['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments635, $renderChildrenClosure636, $renderingContext);
$renderChildrenClosure634 = ($arguments633['message'] !== null) ? function() use ($arguments633) { return $arguments633['message']; } : $renderChildrenClosure634;
$output629 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments633, $renderChildrenClosure634, $renderingContext);

$output629 .= '
                ';
return $output629;
};
$arguments627['__elseClosures'][] = function() use ($renderingContext, $self) {
$output651 = '';

$output651 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure653 = function() use ($renderingContext, $self) {
$output656 = '';

$output656 .= '
                        <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure658 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments657 = array();
$arguments657['key'] = NULL;
$arguments657['id'] = NULL;
$arguments657['default'] = NULL;
$arguments657['arguments'] = NULL;
$arguments657['extensionName'] = NULL;
$arguments657['languageKey'] = NULL;
$arguments657['alternativeLanguageKeys'] = NULL;
$arguments657['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found.message';

$output656 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments657, $renderChildrenClosure658, $renderingContext)]);

$output656 .= '</p>
                        ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper
$renderChildrenClosure660 = function() use ($renderingContext, $self) {
$output661 = '';

$output661 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure663 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments662 = array();
$arguments662['key'] = NULL;
$arguments662['id'] = NULL;
$arguments662['default'] = NULL;
$arguments662['arguments'] = NULL;
$arguments662['extensionName'] = NULL;
$arguments662['languageKey'] = NULL;
$arguments662['alternativeLanguageKeys'] = NULL;
$arguments662['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_create';

$output661 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments662, $renderChildrenClosure663, $renderingContext)]);

$output661 .= '
                        ';
return $output661;
};
$arguments659 = array();
$arguments659['additionalAttributes'] = NULL;
$arguments659['data'] = NULL;
$arguments659['class'] = NULL;
$arguments659['dir'] = NULL;
$arguments659['id'] = NULL;
$arguments659['lang'] = NULL;
$arguments659['style'] = NULL;
$arguments659['title'] = NULL;
$arguments659['accesskey'] = NULL;
$arguments659['tabindex'] = NULL;
$arguments659['onclick'] = NULL;
$arguments659['uid'] = NULL;
$arguments659['pid'] = NULL;
$arguments659['table'] = NULL;
$arguments659['returnUrl'] = '';
$arguments659['class'] = 'btn btn-primary';
$arguments659['table'] = 'sys_redirect';

$output656 .= TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper::renderStatic($arguments659, $renderChildrenClosure660, $renderingContext);

$output656 .= '
                    ';
return $output656;
};
$arguments652 = array();
$arguments652['message'] = NULL;
$arguments652['title'] = NULL;
$arguments652['state'] = -2;
$arguments652['iconName'] = NULL;
$arguments652['disableIcon'] = false;
$arguments652['state'] = -1;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure655 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments654 = array();
$arguments654['key'] = NULL;
$arguments654['id'] = NULL;
$arguments654['default'] = NULL;
$arguments654['arguments'] = NULL;
$arguments654['extensionName'] = NULL;
$arguments654['languageKey'] = NULL;
$arguments654['alternativeLanguageKeys'] = NULL;
$arguments654['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found.title';
$arguments652['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments654, $renderChildrenClosure655, $renderingContext);
$renderChildrenClosure653 = ($arguments652['message'] !== null) ? function() use ($arguments652) { return $arguments652['message']; } : $renderChildrenClosure653;
$output651 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments652, $renderChildrenClosure653, $renderingContext);

$output651 .= '
                ';
return $output651;
};

$output626 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments627, $renderChildrenClosure628, $renderingContext);

$output626 .= '
        ';
return $output626;
};

$output608 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments617, $renderChildrenClosure618, $renderingContext);

$output608 .= '
';
return $output608;
};
$arguments606 = array();
$arguments606['name'] = NULL;
$arguments606['name'] = 'content';

$output598 .= NULL;

$output598 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure806 = function() use ($renderingContext, $self) {
$output807 = '';

$output807 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure809 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments808 = array();
$arguments808['section'] = NULL;
$arguments808['partial'] = NULL;
$arguments808['delegate'] = NULL;
$arguments808['renderable'] = NULL;
$arguments808['arguments'] = array (
);
$arguments808['optional'] = false;
$arguments808['default'] = NULL;
$arguments808['contentAs'] = NULL;
$arguments808['debug'] = true;
$arguments808['partial'] = 'Pagination';
$arguments808['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output807 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments808, $renderChildrenClosure809, $renderingContext);

$output807 .= '
    <div class="table-fit">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure812 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments811 = array();
$arguments811['key'] = NULL;
$arguments811['id'] = NULL;
$arguments811['default'] = NULL;
$arguments811['arguments'] = NULL;
$arguments811['extensionName'] = NULL;
$arguments811['languageKey'] = NULL;
$arguments811['alternativeLanguageKeys'] = NULL;
$arguments811['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:source_host';

$output807 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments811, $renderChildrenClosure812, $renderingContext)]);

$output807 .= '</th>
                    <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure814 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments813 = array();
$arguments813['key'] = NULL;
$arguments813['id'] = NULL;
$arguments813['default'] = NULL;
$arguments813['arguments'] = NULL;
$arguments813['extensionName'] = NULL;
$arguments813['languageKey'] = NULL;
$arguments813['alternativeLanguageKeys'] = NULL;
$arguments813['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:source_path';

$output807 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments813, $renderChildrenClosure814, $renderingContext)]);

$output807 .= '</th>
                    <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure816 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments815 = array();
$arguments815['key'] = NULL;
$arguments815['id'] = NULL;
$arguments815['default'] = NULL;
$arguments815['arguments'] = NULL;
$arguments815['extensionName'] = NULL;
$arguments815['languageKey'] = NULL;
$arguments815['alternativeLanguageKeys'] = NULL;
$arguments815['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:destination';

$output807 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments815, $renderChildrenClosure816, $renderingContext)]);

$output807 .= '</th>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure818 = function() use ($renderingContext, $self) {
$output822 = '';

$output822 .= '
                        <th># ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure824 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments823 = array();
$arguments823['key'] = NULL;
$arguments823['id'] = NULL;
$arguments823['default'] = NULL;
$arguments823['arguments'] = NULL;
$arguments823['extensionName'] = NULL;
$arguments823['languageKey'] = NULL;
$arguments823['alternativeLanguageKeys'] = NULL;
$arguments823['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:hits';

$output822 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments823, $renderChildrenClosure824, $renderingContext)]);

$output822 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure826 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments825 = array();
$arguments825['key'] = NULL;
$arguments825['id'] = NULL;
$arguments825['default'] = NULL;
$arguments825['arguments'] = NULL;
$arguments825['extensionName'] = NULL;
$arguments825['languageKey'] = NULL;
$arguments825['alternativeLanguageKeys'] = NULL;
$arguments825['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:hit_last';

$output822 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments825, $renderChildrenClosure826, $renderingContext)]);

$output822 .= '</th>
                    ';
return $output822;
};
$arguments817 = array();
$arguments817['then'] = NULL;
$arguments817['else'] = NULL;
$arguments817['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array819 = array();
$array820 = array (
);$array819['0'] = $renderingContext->getVariableProvider()->getByPath('showHitCounter', $array820);

$expression821 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments817['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression821(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array819)
					),
					$renderingContext
				);
$arguments817['__thenClosure'] = $renderChildrenClosure818;

$output807 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments817, $renderChildrenClosure818, $renderingContext);

$output807 .= '
                    <th></th>
                </tr>
            </thead>
            <tbody>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure828 = function() use ($renderingContext, $self) {
$output830 = '';

$output830 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure832 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments831 = array();
$arguments831['value'] = NULL;
$arguments831['name'] = NULL;
$arguments831['name'] = 'pageId';
// Rendering ViewHelper TYPO3\CMS\Redirects\ViewHelpers\TargetPageIdViewHelper
$renderChildrenClosure834 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments833 = array();
$arguments833['target'] = NULL;
$array835 = array (
);$arguments833['target'] = $renderingContext->getVariableProvider()->getByPath('redirect.target', $array835);
$arguments831['value'] = TYPO3\CMS\Redirects\ViewHelpers\TargetPageIdViewHelper::renderStatic($arguments833, $renderChildrenClosure834, $renderingContext);
$renderChildrenClosure832 = ($arguments831['value'] !== null) ? function() use ($arguments831) { return $arguments831['value']; } : $renderChildrenClosure832;
$output830 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments831, $renderChildrenClosure832, $renderingContext)]);

$output830 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure837 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments836 = array();
$arguments836['value'] = NULL;
$arguments836['name'] = NULL;
$arguments836['name'] = 'targetUri';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\TypolinkViewHelper
$renderChildrenClosure839 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments838 = array();
$arguments838['parameter'] = NULL;
$arguments838['additionalParams'] = '';
$arguments838['language'] = NULL;
$arguments838['useCacheHash'] = NULL;
$arguments838['addQueryString'] = false;
$arguments838['addQueryStringMethod'] = 'GET';
$arguments838['addQueryStringExclude'] = '';
$arguments838['absolute'] = false;
$array840 = array (
);$arguments838['parameter'] = $renderingContext->getVariableProvider()->getByPath('redirect.target', $array840);
$arguments836['value'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\TypolinkViewHelper::renderStatic($arguments838, $renderChildrenClosure839, $renderingContext);
$renderChildrenClosure837 = ($arguments836['value'] !== null) ? function() use ($arguments836) { return $arguments836['value']; } : $renderChildrenClosure837;
$output830 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments836, $renderChildrenClosure837, $renderingContext)]);

$output830 .= '
                    <tr>
                        <td>';
$array841 = array (
);
$output830 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('redirect.source_host', $array841)]);

$output830 .= '</td>
                        <td>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper
$renderChildrenClosure843 = function() use ($renderingContext, $self) {
$output870 = '';

$output870 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure872 = function() use ($renderingContext, $self) {
$output896 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure898 = function() use ($renderingContext, $self) {
$output899 = '';

$output899 .= '<span title="';
$array900 = array (
);
$output899 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('disable', $array900)]);

$output899 .= '">';
return $output899;
};
$arguments897 = array();

$output896 .= '';

$output896 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure902 = function() use ($renderingContext, $self) {
$output907 = '';

$output907 .= '<span title="';
$array908 = array (
);
$output907 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('onlystart', $array908)]);

$output907 .= '">';
return $output907;
};
$arguments901 = array();
$arguments901['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array903 = array();
$array904 = array (
);$array903['0'] = $renderingContext->getVariableProvider()->getByPath('redirect.starttime', $array904);
$array903['1'] = ' && !';
$array905 = array (
);$array903['2'] = $renderingContext->getVariableProvider()->getByPath('redirect.endtime', $array905);

$expression906 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"])));};
$arguments901['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression906(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array903)
					),
					$renderingContext
				);

$output896 .= '';

$output896 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure910 = function() use ($renderingContext, $self) {
$output915 = '';

$output915 .= '<span title="';
$array916 = array (
);
$output915 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('onlyend', $array916)]);

$output915 .= '">';
return $output915;
};
$arguments909 = array();
$arguments909['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array911 = array();
$array911['0'] = '!';
$array912 = array (
);$array911['1'] = $renderingContext->getVariableProvider()->getByPath('redirect.starttime', $array912);
$array911['2'] = ' && ';
$array913 = array (
);$array911['3'] = $renderingContext->getVariableProvider()->getByPath('redirect.endtime', $array913);

$expression914 = function($context) {return (!(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"])) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node3"]));};
$arguments909['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression914(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array911)
					),
					$renderingContext
				);

$output896 .= '';

$output896 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure918 = function() use ($renderingContext, $self) {
$output923 = '';

$output923 .= '<span title="';
$array924 = array (
);
$output923 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('startend', $array924)]);

$output923 .= '">';
return $output923;
};
$arguments917 = array();
$arguments917['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array919 = array();
$array920 = array (
);$array919['0'] = $renderingContext->getVariableProvider()->getByPath('redirect.starttime', $array920);
$array919['1'] = ' && ';
$array921 = array (
);$array919['2'] = $renderingContext->getVariableProvider()->getByPath('redirect.endtime', $array921);

$expression922 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments917['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression922(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array919)
					),
					$renderingContext
				);

$output896 .= '';

$output896 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure926 = function() use ($renderingContext, $self) {
return '<span>';
};
$arguments925 = array();
$arguments925['if'] = NULL;

$output896 .= '';

$output896 .= '
                            ';
return $output896;
};
$arguments871 = array();
$arguments871['then'] = NULL;
$arguments871['else'] = NULL;
$arguments871['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array893 = array();
$array894 = array (
);$array893['0'] = $renderingContext->getVariableProvider()->getByPath('redirect.disabled', $array894);

$expression895 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments871['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression895(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array893)
					),
					$renderingContext
				);
$arguments871['__thenClosure'] = function() use ($renderingContext, $self) {
$output873 = '';

$output873 .= '<span title="';
$array874 = array (
);
$output873 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('disable', $array874)]);

$output873 .= '">';
return $output873;
};
$arguments871['__elseClosures'][] = function() use ($renderingContext, $self) {
$output875 = '';

$output875 .= '<span title="';
$array876 = array (
);
$output875 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('onlystart', $array876)]);

$output875 .= '">';
return $output875;
};
$arguments871['__elseifClosures'][] = function() use ($renderingContext, $self) {
// Rendering Boolean node
// Rendering Array
$array877 = array();
$array878 = array (
);$array877['0'] = $renderingContext->getVariableProvider()->getByPath('redirect.starttime', $array878);
$array877['1'] = ' && !';
$array879 = array (
);$array877['2'] = $renderingContext->getVariableProvider()->getByPath('redirect.endtime', $array879);

$expression880 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"])));};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression880(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array877)
					),
					$renderingContext
				);
};
$arguments871['__elseClosures'][] = function() use ($renderingContext, $self) {
$output881 = '';

$output881 .= '<span title="';
$array882 = array (
);
$output881 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('onlyend', $array882)]);

$output881 .= '">';
return $output881;
};
$arguments871['__elseifClosures'][] = function() use ($renderingContext, $self) {
// Rendering Boolean node
// Rendering Array
$array883 = array();
$array883['0'] = '!';
$array884 = array (
);$array883['1'] = $renderingContext->getVariableProvider()->getByPath('redirect.starttime', $array884);
$array883['2'] = ' && ';
$array885 = array (
);$array883['3'] = $renderingContext->getVariableProvider()->getByPath('redirect.endtime', $array885);

$expression886 = function($context) {return (!(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"])) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node3"]));};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression886(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array883)
					),
					$renderingContext
				);
};
$arguments871['__elseClosures'][] = function() use ($renderingContext, $self) {
$output887 = '';

$output887 .= '<span title="';
$array888 = array (
);
$output887 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('startend', $array888)]);

$output887 .= '">';
return $output887;
};
$arguments871['__elseifClosures'][] = function() use ($renderingContext, $self) {
// Rendering Boolean node
// Rendering Array
$array889 = array();
$array890 = array (
);$array889['0'] = $renderingContext->getVariableProvider()->getByPath('redirect.starttime', $array890);
$array889['1'] = ' && ';
$array891 = array (
);$array889['2'] = $renderingContext->getVariableProvider()->getByPath('redirect.endtime', $array891);

$expression892 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression892(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array889)
					),
					$renderingContext
				);
};
$arguments871['__elseClosures'][] = function() use ($renderingContext, $self) {
return '<span>';
};

$output870 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments871, $renderChildrenClosure872, $renderingContext);

$output870 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure928 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments927 = array();
$arguments927['table'] = NULL;
$arguments927['row'] = NULL;
$arguments927['size'] = 'small';
$arguments927['alternativeMarkupIdentifier'] = NULL;
$arguments927['table'] = 'sys_redirect';
$array929 = array (
);$arguments927['row'] = $renderingContext->getVariableProvider()->getByPath('redirect', $array929);

$output870 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments927, $renderChildrenClosure928, $renderingContext);

$output870 .= '</span>
                            ';
return $output870;
};
$arguments842 = array();
$arguments842['map'] = NULL;
// Rendering Array
$array844 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure846 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments845 = array();
$arguments845['key'] = NULL;
$arguments845['id'] = NULL;
$arguments845['default'] = NULL;
$arguments845['arguments'] = NULL;
$arguments845['extensionName'] = NULL;
$arguments845['languageKey'] = NULL;
$arguments845['alternativeLanguageKeys'] = NULL;
$arguments845['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:record_disabled';
$array844['disable'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments845, $renderChildrenClosure846, $renderingContext);
$output847 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure849 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments848 = array();
$arguments848['key'] = NULL;
$arguments848['id'] = NULL;
$arguments848['default'] = NULL;
$arguments848['arguments'] = NULL;
$arguments848['extensionName'] = NULL;
$arguments848['languageKey'] = NULL;
$arguments848['alternativeLanguageKeys'] = NULL;
$arguments848['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:start';

$output847 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments848, $renderChildrenClosure849, $renderingContext);

$output847 .= ': ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure851 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments850 = array();
$arguments850['date'] = NULL;
$arguments850['format'] = '';
$arguments850['base'] = NULL;
$array852 = array (
);$arguments850['date'] = $renderingContext->getVariableProvider()->getByPath('redirect.starttime', $array852);
$arguments850['format'] = 'd.m.Y H:i:s';
$renderChildrenClosure851 = ($arguments850['date'] !== null) ? function() use ($arguments850) { return $arguments850['date']; } : $renderChildrenClosure851;
$output847 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments850, $renderChildrenClosure851, $renderingContext);
$array844['onlystart'] = $output847;
$output853 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure855 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments854 = array();
$arguments854['key'] = NULL;
$arguments854['id'] = NULL;
$arguments854['default'] = NULL;
$arguments854['arguments'] = NULL;
$arguments854['extensionName'] = NULL;
$arguments854['languageKey'] = NULL;
$arguments854['alternativeLanguageKeys'] = NULL;
$arguments854['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:stop';

$output853 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments854, $renderChildrenClosure855, $renderingContext);

$output853 .= ': ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure857 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments856 = array();
$arguments856['date'] = NULL;
$arguments856['format'] = '';
$arguments856['base'] = NULL;
$array858 = array (
);$arguments856['date'] = $renderingContext->getVariableProvider()->getByPath('redirect.endtime', $array858);
$arguments856['format'] = 'd.m.Y H:i:s';
$renderChildrenClosure857 = ($arguments856['date'] !== null) ? function() use ($arguments856) { return $arguments856['date']; } : $renderChildrenClosure857;
$output853 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments856, $renderChildrenClosure857, $renderingContext);
$array844['onlyend'] = $output853;
$output859 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure861 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments860 = array();
$arguments860['key'] = NULL;
$arguments860['id'] = NULL;
$arguments860['default'] = NULL;
$arguments860['arguments'] = NULL;
$arguments860['extensionName'] = NULL;
$arguments860['languageKey'] = NULL;
$arguments860['alternativeLanguageKeys'] = NULL;
$arguments860['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:start';

$output859 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments860, $renderChildrenClosure861, $renderingContext);

$output859 .= ': ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure863 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments862 = array();
$arguments862['date'] = NULL;
$arguments862['format'] = '';
$arguments862['base'] = NULL;
$array864 = array (
);$arguments862['date'] = $renderingContext->getVariableProvider()->getByPath('redirect.starttime', $array864);
$arguments862['format'] = 'd.m.Y H:i:s';
$renderChildrenClosure863 = ($arguments862['date'] !== null) ? function() use ($arguments862) { return $arguments862['date']; } : $renderChildrenClosure863;
$output859 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments862, $renderChildrenClosure863, $renderingContext);

$output859 .= ' - ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure866 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments865 = array();
$arguments865['key'] = NULL;
$arguments865['id'] = NULL;
$arguments865['default'] = NULL;
$arguments865['arguments'] = NULL;
$arguments865['extensionName'] = NULL;
$arguments865['languageKey'] = NULL;
$arguments865['alternativeLanguageKeys'] = NULL;
$arguments865['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:stop';

$output859 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments865, $renderChildrenClosure866, $renderingContext);

$output859 .= ': ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure868 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments867 = array();
$arguments867['date'] = NULL;
$arguments867['format'] = '';
$arguments867['base'] = NULL;
$array869 = array (
);$arguments867['date'] = $renderingContext->getVariableProvider()->getByPath('redirect.endtime', $array869);
$arguments867['format'] = 'd.m.Y H:i:s';
$renderChildrenClosure868 = ($arguments867['date'] !== null) ? function() use ($arguments867) { return $arguments867['date']; } : $renderChildrenClosure868;
$output859 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments867, $renderChildrenClosure868, $renderingContext);
$array844['startend'] = $output859;
$arguments842['map'] = $array844;

$output830 .= TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments842, $renderChildrenClosure843, $renderingContext);

$output830 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure931 = function() use ($renderingContext, $self) {
$output938 = '';

$output938 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure940 = function() use ($renderingContext, $self) {
$array941 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('redirect.source_path', $array941)]);
};
$arguments939 = array();
$arguments939['maxCharacters'] = NULL;
$arguments939['append'] = '&hellip;';
$arguments939['respectWordBoundaries'] = true;
$arguments939['respectHtml'] = true;
$arguments939['maxCharacters'] = 100;

$output938 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments939, $renderChildrenClosure940, $renderingContext);

$output938 .= '
                            ';
return $output938;
};
$arguments930 = array();
$arguments930['additionalAttributes'] = NULL;
$arguments930['data'] = NULL;
$arguments930['class'] = NULL;
$arguments930['dir'] = NULL;
$arguments930['id'] = NULL;
$arguments930['lang'] = NULL;
$arguments930['style'] = NULL;
$arguments930['title'] = NULL;
$arguments930['accesskey'] = NULL;
$arguments930['tabindex'] = NULL;
$arguments930['onclick'] = NULL;
$arguments930['uid'] = NULL;
$arguments930['table'] = NULL;
$arguments930['fields'] = NULL;
$arguments930['returnUrl'] = '';
$array932 = array (
);$arguments930['returnUrl'] = $renderingContext->getVariableProvider()->getByPath('returnUrl', $array932);
$arguments930['table'] = 'sys_redirect';
$array933 = array (
);$arguments930['uid'] = $renderingContext->getVariableProvider()->getByPath('redirect.uid', $array933);
$output934 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure936 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments935 = array();
$arguments935['key'] = NULL;
$arguments935['id'] = NULL;
$arguments935['default'] = NULL;
$arguments935['arguments'] = NULL;
$arguments935['extensionName'] = NULL;
$arguments935['languageKey'] = NULL;
$arguments935['alternativeLanguageKeys'] = NULL;
$arguments935['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_mod_web_list.xlf:edit';

$output934 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments935, $renderChildrenClosure936, $renderingContext);

$output934 .= ': ';
$array937 = array (
);
$output934 .= $renderingContext->getVariableProvider()->getByPath('redirect.source_path', $array937);
$arguments930['title'] = $output934;

$output830 .= TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::renderStatic($arguments930, $renderChildrenClosure931, $renderingContext);

$output830 .= '
                        </td>
                        <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure943 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure956 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments955 = array();
$arguments955['then'] = NULL;
$arguments955['else'] = NULL;
$arguments955['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array957 = array();
$array958 = array (
);$array957['0'] = $renderingContext->getVariableProvider()->getByPath('targetUri', $array958);

$expression959 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments955['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression959(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array957)
					),
					$renderingContext
				);
$array960 = array (
);$arguments955['then'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('targetUri', $array960)]);
$array961 = array (
);$arguments955['else'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('redirect.target', $array961)]);
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments955, $renderChildrenClosure956, $renderingContext);
};
$arguments942 = array();
$arguments942['parameter'] = NULL;
$arguments942['target'] = '';
$arguments942['class'] = '';
$arguments942['title'] = '';
$arguments942['language'] = NULL;
$arguments942['additionalParams'] = '';
$arguments942['additionalAttributes'] = array (
);
$arguments942['useCacheHash'] = NULL;
$arguments942['addQueryString'] = false;
$arguments942['addQueryStringMethod'] = 'GET';
$arguments942['addQueryStringExclude'] = '';
$arguments942['absolute'] = false;
$arguments942['parts-as'] = 'typoLinkParts';
$array944 = array (
);$arguments942['parameter'] = $renderingContext->getVariableProvider()->getByPath('redirect.target', $array944);
$arguments942['target'] = '_blank';
$output945 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure947 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments946 = array();
$arguments946['key'] = NULL;
$arguments946['id'] = NULL;
$arguments946['default'] = NULL;
$arguments946['arguments'] = NULL;
$arguments946['extensionName'] = NULL;
$arguments946['languageKey'] = NULL;
$arguments946['alternativeLanguageKeys'] = NULL;
$arguments946['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:visit_destination';

$output945 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments946, $renderChildrenClosure947, $renderingContext);

$output945 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure949 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments948 = array();
$arguments948['then'] = NULL;
$arguments948['else'] = NULL;
$arguments948['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array950 = array();
$array951 = array (
);$array950['0'] = $renderingContext->getVariableProvider()->getByPath('targetUri', $array951);

$expression952 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments948['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression952(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array950)
					),
					$renderingContext
				);
$array953 = array (
);$arguments948['then'] = $renderingContext->getVariableProvider()->getByPath('targetUri', $array953);
$array954 = array (
);$arguments948['else'] = $renderingContext->getVariableProvider()->getByPath('redirect.target', $array954);

$output945 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments948, $renderChildrenClosure949, $renderingContext);
$arguments942['title'] = $output945;

$output830 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments942, $renderChildrenClosure943, $renderingContext);

$output830 .= '
                            (';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure963 = function() use ($renderingContext, $self) {
$output967 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure969 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments968 = array();
$arguments968['key'] = NULL;
$arguments968['id'] = NULL;
$arguments968['default'] = NULL;
$arguments968['arguments'] = NULL;
$arguments968['extensionName'] = NULL;
$arguments968['languageKey'] = NULL;
$arguments968['alternativeLanguageKeys'] = NULL;
$arguments968['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:pageID';

$output967 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments968, $renderChildrenClosure969, $renderingContext)]);

$output967 .= ': ';
$array970 = array (
);
$output967 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageId', $array970)]);

$output967 .= ',
                            ';
return $output967;
};
$arguments962 = array();
$arguments962['then'] = NULL;
$arguments962['else'] = NULL;
$arguments962['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array964 = array();
$array965 = array (
);$array964['0'] = $renderingContext->getVariableProvider()->getByPath('pageId', $array965);

$expression966 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments962['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression966(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array964)
					),
					$renderingContext
				);
$arguments962['__thenClosure'] = $renderChildrenClosure963;

$output830 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments962, $renderChildrenClosure963, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure972 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments971 = array();
$arguments971['key'] = NULL;
$arguments971['id'] = NULL;
$arguments971['default'] = NULL;
$arguments971['arguments'] = NULL;
$arguments971['extensionName'] = NULL;
$arguments971['languageKey'] = NULL;
$arguments971['alternativeLanguageKeys'] = NULL;
$arguments971['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:destination_status_code';

$output830 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments971, $renderChildrenClosure972, $renderingContext)]);

$output830 .= ': ';
$array973 = array (
);
$output830 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('redirect.target_statuscode', $array973)]);

$output830 .= ')</td>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure975 = function() use ($renderingContext, $self) {
$output979 = '';

$output979 .= '
                            <td>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure981 = function() use ($renderingContext, $self) {
$output985 = '';

$output985 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure987 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments986 = array();
$arguments986['key'] = NULL;
$arguments986['id'] = NULL;
$arguments986['default'] = NULL;
$arguments986['arguments'] = NULL;
$arguments986['extensionName'] = NULL;
$arguments986['languageKey'] = NULL;
$arguments986['alternativeLanguageKeys'] = NULL;
$output988 = '';

$output988 .= 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:hit';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure990 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments989 = array();
$arguments989['then'] = NULL;
$arguments989['else'] = NULL;
$arguments989['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array991 = array();
$array992 = array (
);$array991['0'] = $renderingContext->getVariableProvider()->getByPath('redirect.hitcount', $array992);
$array991['1'] = ' > 1';

$expression993 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments989['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression993(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array991)
					),
					$renderingContext
				);
$arguments989['then'] = 's';

$output988 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments989, $renderChildrenClosure990, $renderingContext);

$output988 .= '_text';
$arguments986['key'] = $output988;
// Rendering Array
$array994 = array();
$array995 = array (
);$array994['0'] = $renderingContext->getVariableProvider()->getByPath('redirect.hitcount', $array995);
$arguments986['arguments'] = $array994;

$output985 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments986, $renderChildrenClosure987, $renderingContext)]);

$output985 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure997 = function() use ($renderingContext, $self) {
$output1001 = '';

$output1001 .= '
                                        <a class="t3js-modal-trigger"
                                            href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure1003 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1002 = array();
$arguments1002['route'] = NULL;
$arguments1002['arguments'] = array (
);
$arguments1002['query'] = NULL;
$arguments1002['currentUrlParameterName'] = NULL;
$arguments1002['route'] = 'tce_db';
$output1004 = '';

$output1004 .= 'data[sys_redirect][';
$array1005 = array (
);
$output1004 .= $renderingContext->getVariableProvider()->getByPath('redirect.uid', $array1005);

$output1004 .= '][hitcount]=0';
$arguments1002['query'] = $output1004;
// Rendering Array
$array1006 = array();
$array1007 = array (
);$array1006['redirect'] = $renderingContext->getVariableProvider()->getByPath('returnUrl', $array1007);
$arguments1002['arguments'] = $array1006;

$output1001 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments1002, $renderChildrenClosure1003, $renderingContext)]);

$output1001 .= '"
                                            title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1009 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1008 = array();
$arguments1008['key'] = NULL;
$arguments1008['id'] = NULL;
$arguments1008['default'] = NULL;
$arguments1008['arguments'] = NULL;
$arguments1008['extensionName'] = NULL;
$arguments1008['languageKey'] = NULL;
$arguments1008['alternativeLanguageKeys'] = NULL;
$arguments1008['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:hit_reset';

$output1001 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1008, $renderChildrenClosure1009, $renderingContext)]);

$output1001 .= '"
                                            data-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1011 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1010 = array();
$arguments1010['key'] = NULL;
$arguments1010['id'] = NULL;
$arguments1010['default'] = NULL;
$arguments1010['arguments'] = NULL;
$arguments1010['extensionName'] = NULL;
$arguments1010['languageKey'] = NULL;
$arguments1010['alternativeLanguageKeys'] = NULL;
$arguments1010['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:hit_reset.confirm.title';

$output1001 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1010, $renderChildrenClosure1011, $renderingContext)]);

$output1001 .= '"
                                            data-content="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1013 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1012 = array();
$arguments1012['key'] = NULL;
$arguments1012['id'] = NULL;
$arguments1012['default'] = NULL;
$arguments1012['arguments'] = NULL;
$arguments1012['extensionName'] = NULL;
$arguments1012['languageKey'] = NULL;
$arguments1012['alternativeLanguageKeys'] = NULL;
$arguments1012['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:hit_reset.confirm.content';

$output1001 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1012, $renderChildrenClosure1013, $renderingContext)]);

$output1001 .= '"
                                            data-button-close-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1015 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1014 = array();
$arguments1014['key'] = NULL;
$arguments1014['id'] = NULL;
$arguments1014['default'] = NULL;
$arguments1014['arguments'] = NULL;
$arguments1014['extensionName'] = NULL;
$arguments1014['languageKey'] = NULL;
$arguments1014['alternativeLanguageKeys'] = NULL;
$arguments1014['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_alt_doc.xlf:buttons.confirm.delete_record.no';

$output1001 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1014, $renderChildrenClosure1015, $renderingContext)]);

$output1001 .= '">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1017 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1016 = array();
$arguments1016['identifier'] = NULL;
$arguments1016['size'] = 'small';
$arguments1016['overlay'] = NULL;
$arguments1016['state'] = 'default';
$arguments1016['alternativeMarkupIdentifier'] = NULL;
$arguments1016['identifier'] = 'actions-edit-restore';

$output1001 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1016, $renderChildrenClosure1017, $renderingContext);

$output1001 .= '</a>
                                    ';
return $output1001;
};
$arguments996 = array();
$arguments996['then'] = NULL;
$arguments996['else'] = NULL;
$arguments996['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array998 = array();
$array999 = array (
);$array998['0'] = $renderingContext->getVariableProvider()->getByPath('redirect.hitcount', $array999);
$array998['1'] = ' != 0';

$expression1000 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != 0);};
$arguments996['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1000(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array998)
					),
					$renderingContext
				);
$arguments996['__thenClosure'] = $renderChildrenClosure997;

$output985 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments996, $renderChildrenClosure997, $renderingContext);

$output985 .= '
                                ';
return $output985;
};
$arguments980 = array();
$arguments980['then'] = NULL;
$arguments980['else'] = NULL;
$arguments980['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array982 = array();
$array982['0'] = '!';
$array983 = array (
);$array982['1'] = $renderingContext->getVariableProvider()->getByPath('redirect.disable_hitcount', $array983);

$expression984 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments980['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression984(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array982)
					),
					$renderingContext
				);
$arguments980['__thenClosure'] = $renderChildrenClosure981;

$output979 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments980, $renderChildrenClosure981, $renderingContext);

$output979 .= '
                            <td>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1019 = function() use ($renderingContext, $self) {
$output1029 = '';

$output1029 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1031 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure1033 = function() use ($renderingContext, $self) {
$output1034 = '';

$output1034 .= '@';
$array1035 = array (
);
$output1034 .= $renderingContext->getVariableProvider()->getByPath('redirect.lasthiton', $array1035);
return $output1034;
};
$arguments1032 = array();
$arguments1032['date'] = NULL;
$arguments1032['format'] = '';
$arguments1032['base'] = NULL;
$arguments1032['format'] = 'd.m.Y H:i:s';
$renderChildrenClosure1033 = ($arguments1032['date'] !== null) ? function() use ($arguments1032) { return $arguments1032['date']; } : $renderChildrenClosure1033;return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments1032, $renderChildrenClosure1033, $renderingContext)]);
};
$arguments1030 = array();

$output1029 .= '';

$output1029 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1037 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1039 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1038 = array();
$arguments1038['key'] = NULL;
$arguments1038['id'] = NULL;
$arguments1038['default'] = NULL;
$arguments1038['arguments'] = NULL;
$arguments1038['extensionName'] = NULL;
$arguments1038['languageKey'] = NULL;
$arguments1038['alternativeLanguageKeys'] = NULL;
$arguments1038['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:hit_last_never';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1038, $renderChildrenClosure1039, $renderingContext)]);
};
$arguments1036 = array();
$arguments1036['if'] = NULL;

$output1029 .= '';

$output1029 .= '
                                ';
return $output1029;
};
$arguments1018 = array();
$arguments1018['then'] = NULL;
$arguments1018['else'] = NULL;
$arguments1018['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1026 = array();
$array1027 = array (
);$array1026['0'] = $renderingContext->getVariableProvider()->getByPath('redirect.lasthiton', $array1027);

$expression1028 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1018['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1028(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1026)
					),
					$renderingContext
				);
$arguments1018['__thenClosure'] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure1021 = function() use ($renderingContext, $self) {
$output1022 = '';

$output1022 .= '@';
$array1023 = array (
);
$output1022 .= $renderingContext->getVariableProvider()->getByPath('redirect.lasthiton', $array1023);
return $output1022;
};
$arguments1020 = array();
$arguments1020['date'] = NULL;
$arguments1020['format'] = '';
$arguments1020['base'] = NULL;
$arguments1020['format'] = 'd.m.Y H:i:s';
$renderChildrenClosure1021 = ($arguments1020['date'] !== null) ? function() use ($arguments1020) { return $arguments1020['date']; } : $renderChildrenClosure1021;return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments1020, $renderChildrenClosure1021, $renderingContext)]);
};
$arguments1018['__elseClosures'][] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1025 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1024 = array();
$arguments1024['key'] = NULL;
$arguments1024['id'] = NULL;
$arguments1024['default'] = NULL;
$arguments1024['arguments'] = NULL;
$arguments1024['extensionName'] = NULL;
$arguments1024['languageKey'] = NULL;
$arguments1024['alternativeLanguageKeys'] = NULL;
$arguments1024['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:hit_last_never';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1024, $renderChildrenClosure1025, $renderingContext)]);
};

$output979 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1018, $renderChildrenClosure1019, $renderingContext);

$output979 .= '
                            </td>
                        ';
return $output979;
};
$arguments974 = array();
$arguments974['then'] = NULL;
$arguments974['else'] = NULL;
$arguments974['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array976 = array();
$array977 = array (
);$array976['0'] = $renderingContext->getVariableProvider()->getByPath('showHitCounter', $array977);

$expression978 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments974['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression978(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array976)
					),
					$renderingContext
				);
$arguments974['__thenClosure'] = $renderChildrenClosure975;

$output830 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments974, $renderChildrenClosure975, $renderingContext);

$output830 .= '
                        <td>
                            <div class="btn-group">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1041 = function() use ($renderingContext, $self) {
$output1060 = '';

$output1060 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1062 = function() use ($renderingContext, $self) {
$output1063 = '';

$output1063 .= '
                                        <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1065 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1064 = array();
$arguments1064['identifier'] = NULL;
$arguments1064['size'] = 'small';
$arguments1064['overlay'] = NULL;
$arguments1064['state'] = 'default';
$arguments1064['alternativeMarkupIdentifier'] = NULL;
$arguments1064['identifier'] = 'empty-empty';

$output1063 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1064, $renderChildrenClosure1065, $renderingContext);

$output1063 .= '</span>
                                    ';
return $output1063;
};
$arguments1061 = array();

$output1060 .= '';

$output1060 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1067 = function() use ($renderingContext, $self) {
$output1068 = '';

$output1068 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$renderChildrenClosure1070 = function() use ($renderingContext, $self) {
$output1076 = '';

$output1076 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1078 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1077 = array();
$arguments1077['identifier'] = NULL;
$arguments1077['size'] = 'small';
$arguments1077['overlay'] = NULL;
$arguments1077['state'] = 'default';
$arguments1077['alternativeMarkupIdentifier'] = NULL;
$arguments1077['identifier'] = 'actions-view-page';

$output1076 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1077, $renderChildrenClosure1078, $renderingContext);

$output1076 .= '
                                        ';
return $output1076;
};
$arguments1069 = array();
$arguments1069['additionalAttributes'] = NULL;
$arguments1069['data'] = NULL;
$arguments1069['uri'] = NULL;
$arguments1069['defaultScheme'] = 'http';
$arguments1069['class'] = NULL;
$arguments1069['dir'] = NULL;
$arguments1069['id'] = NULL;
$arguments1069['lang'] = NULL;
$arguments1069['style'] = NULL;
$arguments1069['title'] = NULL;
$arguments1069['accesskey'] = NULL;
$arguments1069['tabindex'] = NULL;
$arguments1069['onclick'] = NULL;
$arguments1069['name'] = NULL;
$arguments1069['rel'] = NULL;
$arguments1069['rev'] = NULL;
$arguments1069['target'] = NULL;
$arguments1069['class'] = 'btn btn-default';
$output1071 = '';
$array1072 = array (
);
$output1071 .= $renderingContext->getVariableProvider()->getByPath('redirect.source_host', $array1072);
$array1073 = array (
);
$output1071 .= $renderingContext->getVariableProvider()->getByPath('redirect.source_path', $array1073);
$arguments1069['uri'] = $output1071;
$arguments1069['target'] = '_blank';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1075 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1074 = array();
$arguments1074['key'] = NULL;
$arguments1074['id'] = NULL;
$arguments1074['default'] = NULL;
$arguments1074['arguments'] = NULL;
$arguments1074['extensionName'] = NULL;
$arguments1074['languageKey'] = NULL;
$arguments1074['alternativeLanguageKeys'] = NULL;
$arguments1074['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:view_redirect';
$arguments1069['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1074, $renderChildrenClosure1075, $renderingContext);

$output1068 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::renderStatic($arguments1069, $renderChildrenClosure1070, $renderingContext);

$output1068 .= '
                                    ';
return $output1068;
};
$arguments1066 = array();
$arguments1066['if'] = NULL;

$output1060 .= '';

$output1060 .= '
                                ';
return $output1060;
};
$arguments1040 = array();
$arguments1040['then'] = NULL;
$arguments1040['else'] = NULL;
$arguments1040['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1056 = array();
$array1057 = array (
);$array1056['0'] = $renderingContext->getVariableProvider()->getByPath('redirect.is_regexp', $array1057);
$array1056['1'] = ' || ';
$array1058 = array (
);$array1056['2'] = $renderingContext->getVariableProvider()->getByPath('redirect.source_host', $array1058);
$array1056['3'] = ' === \'*\'';

$expression1059 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]) === '*'));};
$arguments1040['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1059(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1056)
					),
					$renderingContext
				);
$arguments1040['__thenClosure'] = function() use ($renderingContext, $self) {
$output1042 = '';

$output1042 .= '
                                        <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1044 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1043 = array();
$arguments1043['identifier'] = NULL;
$arguments1043['size'] = 'small';
$arguments1043['overlay'] = NULL;
$arguments1043['state'] = 'default';
$arguments1043['alternativeMarkupIdentifier'] = NULL;
$arguments1043['identifier'] = 'empty-empty';

$output1042 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1043, $renderChildrenClosure1044, $renderingContext);

$output1042 .= '</span>
                                    ';
return $output1042;
};
$arguments1040['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1045 = '';

$output1045 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$renderChildrenClosure1047 = function() use ($renderingContext, $self) {
$output1053 = '';

$output1053 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1055 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1054 = array();
$arguments1054['identifier'] = NULL;
$arguments1054['size'] = 'small';
$arguments1054['overlay'] = NULL;
$arguments1054['state'] = 'default';
$arguments1054['alternativeMarkupIdentifier'] = NULL;
$arguments1054['identifier'] = 'actions-view-page';

$output1053 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1054, $renderChildrenClosure1055, $renderingContext);

$output1053 .= '
                                        ';
return $output1053;
};
$arguments1046 = array();
$arguments1046['additionalAttributes'] = NULL;
$arguments1046['data'] = NULL;
$arguments1046['uri'] = NULL;
$arguments1046['defaultScheme'] = 'http';
$arguments1046['class'] = NULL;
$arguments1046['dir'] = NULL;
$arguments1046['id'] = NULL;
$arguments1046['lang'] = NULL;
$arguments1046['style'] = NULL;
$arguments1046['title'] = NULL;
$arguments1046['accesskey'] = NULL;
$arguments1046['tabindex'] = NULL;
$arguments1046['onclick'] = NULL;
$arguments1046['name'] = NULL;
$arguments1046['rel'] = NULL;
$arguments1046['rev'] = NULL;
$arguments1046['target'] = NULL;
$arguments1046['class'] = 'btn btn-default';
$output1048 = '';
$array1049 = array (
);
$output1048 .= $renderingContext->getVariableProvider()->getByPath('redirect.source_host', $array1049);
$array1050 = array (
);
$output1048 .= $renderingContext->getVariableProvider()->getByPath('redirect.source_path', $array1050);
$arguments1046['uri'] = $output1048;
$arguments1046['target'] = '_blank';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1052 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1051 = array();
$arguments1051['key'] = NULL;
$arguments1051['id'] = NULL;
$arguments1051['default'] = NULL;
$arguments1051['arguments'] = NULL;
$arguments1051['extensionName'] = NULL;
$arguments1051['languageKey'] = NULL;
$arguments1051['alternativeLanguageKeys'] = NULL;
$arguments1051['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:view_redirect';
$arguments1046['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1051, $renderChildrenClosure1052, $renderingContext);

$output1045 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::renderStatic($arguments1046, $renderChildrenClosure1047, $renderingContext);

$output1045 .= '
                                    ';
return $output1045;
};

$output830 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1040, $renderChildrenClosure1041, $renderingContext);

$output830 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure1080 = function() use ($renderingContext, $self) {
$output1085 = '';

$output1085 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1087 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1086 = array();
$arguments1086['identifier'] = NULL;
$arguments1086['size'] = 'small';
$arguments1086['overlay'] = NULL;
$arguments1086['state'] = 'default';
$arguments1086['alternativeMarkupIdentifier'] = NULL;
$arguments1086['identifier'] = 'actions-open';

$output1085 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1086, $renderChildrenClosure1087, $renderingContext);

$output1085 .= '
                                ';
return $output1085;
};
$arguments1079 = array();
$arguments1079['additionalAttributes'] = NULL;
$arguments1079['data'] = NULL;
$arguments1079['class'] = NULL;
$arguments1079['dir'] = NULL;
$arguments1079['id'] = NULL;
$arguments1079['lang'] = NULL;
$arguments1079['style'] = NULL;
$arguments1079['title'] = NULL;
$arguments1079['accesskey'] = NULL;
$arguments1079['tabindex'] = NULL;
$arguments1079['onclick'] = NULL;
$arguments1079['uid'] = NULL;
$arguments1079['table'] = NULL;
$arguments1079['fields'] = NULL;
$arguments1079['returnUrl'] = '';
$array1081 = array (
);$arguments1079['returnUrl'] = $renderingContext->getVariableProvider()->getByPath('returnUrl', $array1081);
$arguments1079['class'] = 'btn btn-default';
$arguments1079['table'] = 'sys_redirect';
$array1082 = array (
);$arguments1079['uid'] = $renderingContext->getVariableProvider()->getByPath('redirect.uid', $array1082);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1084 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1083 = array();
$arguments1083['key'] = NULL;
$arguments1083['id'] = NULL;
$arguments1083['default'] = NULL;
$arguments1083['arguments'] = NULL;
$arguments1083['extensionName'] = NULL;
$arguments1083['languageKey'] = NULL;
$arguments1083['alternativeLanguageKeys'] = NULL;
$arguments1083['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_mod_web_list.xlf:edit';
$arguments1079['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1083, $renderChildrenClosure1084, $renderingContext);

$output830 .= TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::renderStatic($arguments1079, $renderChildrenClosure1080, $renderingContext);

$output830 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1089 = function() use ($renderingContext, $self) {
$output1115 = '';

$output1115 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1117 = function() use ($renderingContext, $self) {
$output1118 = '';

$output1118 .= '
                                        <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure1120 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1119 = array();
$arguments1119['route'] = NULL;
$arguments1119['arguments'] = array (
);
$arguments1119['query'] = NULL;
$arguments1119['currentUrlParameterName'] = NULL;
$arguments1119['route'] = 'tce_db';
$output1121 = '';

$output1121 .= 'data[sys_redirect][';
$array1122 = array (
);
$output1121 .= $renderingContext->getVariableProvider()->getByPath('redirect.uid', $array1122);

$output1121 .= '][disabled]=0';
$arguments1119['query'] = $output1121;
// Rendering Array
$array1123 = array();
$array1124 = array (
);$array1123['redirect'] = $renderingContext->getVariableProvider()->getByPath('returnUrl', $array1124);
$arguments1119['arguments'] = $array1123;

$output1118 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments1119, $renderChildrenClosure1120, $renderingContext)]);

$output1118 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1126 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1125 = array();
$arguments1125['key'] = NULL;
$arguments1125['id'] = NULL;
$arguments1125['default'] = NULL;
$arguments1125['arguments'] = NULL;
$arguments1125['extensionName'] = NULL;
$arguments1125['languageKey'] = NULL;
$arguments1125['alternativeLanguageKeys'] = NULL;
$arguments1125['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_mod_web_list.xlf:unHide';

$output1118 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1125, $renderChildrenClosure1126, $renderingContext)]);

$output1118 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1128 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1127 = array();
$arguments1127['identifier'] = NULL;
$arguments1127['size'] = 'small';
$arguments1127['overlay'] = NULL;
$arguments1127['state'] = 'default';
$arguments1127['alternativeMarkupIdentifier'] = NULL;
$arguments1127['identifier'] = 'actions-edit-unhide';

$output1118 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1127, $renderChildrenClosure1128, $renderingContext);

$output1118 .= '</a>
                                    ';
return $output1118;
};
$arguments1116 = array();

$output1115 .= '';

$output1115 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1130 = function() use ($renderingContext, $self) {
$output1131 = '';

$output1131 .= '
                                        <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure1133 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1132 = array();
$arguments1132['route'] = NULL;
$arguments1132['arguments'] = array (
);
$arguments1132['query'] = NULL;
$arguments1132['currentUrlParameterName'] = NULL;
$arguments1132['route'] = 'tce_db';
$output1134 = '';

$output1134 .= 'data[sys_redirect][';
$array1135 = array (
);
$output1134 .= $renderingContext->getVariableProvider()->getByPath('redirect.uid', $array1135);

$output1134 .= '][disabled]=1';
$arguments1132['query'] = $output1134;
// Rendering Array
$array1136 = array();
$array1137 = array (
);$array1136['redirect'] = $renderingContext->getVariableProvider()->getByPath('returnUrl', $array1137);
$arguments1132['arguments'] = $array1136;

$output1131 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments1132, $renderChildrenClosure1133, $renderingContext)]);

$output1131 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1139 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1138 = array();
$arguments1138['key'] = NULL;
$arguments1138['id'] = NULL;
$arguments1138['default'] = NULL;
$arguments1138['arguments'] = NULL;
$arguments1138['extensionName'] = NULL;
$arguments1138['languageKey'] = NULL;
$arguments1138['alternativeLanguageKeys'] = NULL;
$arguments1138['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_mod_web_list.xlf:hide';

$output1131 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1138, $renderChildrenClosure1139, $renderingContext)]);

$output1131 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1141 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1140 = array();
$arguments1140['identifier'] = NULL;
$arguments1140['size'] = 'small';
$arguments1140['overlay'] = NULL;
$arguments1140['state'] = 'default';
$arguments1140['alternativeMarkupIdentifier'] = NULL;
$arguments1140['identifier'] = 'actions-edit-hide';

$output1131 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1140, $renderChildrenClosure1141, $renderingContext);

$output1131 .= '</a>
                                    ';
return $output1131;
};
$arguments1129 = array();
$arguments1129['if'] = NULL;

$output1115 .= '';

$output1115 .= '
                                ';
return $output1115;
};
$arguments1088 = array();
$arguments1088['then'] = NULL;
$arguments1088['else'] = NULL;
$arguments1088['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1112 = array();
$array1113 = array (
);$array1112['0'] = $renderingContext->getVariableProvider()->getByPath('redirect.disabled', $array1113);
$array1112['1'] = ' == 1';

$expression1114 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments1088['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1114(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1112)
					),
					$renderingContext
				);
$arguments1088['__thenClosure'] = function() use ($renderingContext, $self) {
$output1090 = '';

$output1090 .= '
                                        <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure1092 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1091 = array();
$arguments1091['route'] = NULL;
$arguments1091['arguments'] = array (
);
$arguments1091['query'] = NULL;
$arguments1091['currentUrlParameterName'] = NULL;
$arguments1091['route'] = 'tce_db';
$output1093 = '';

$output1093 .= 'data[sys_redirect][';
$array1094 = array (
);
$output1093 .= $renderingContext->getVariableProvider()->getByPath('redirect.uid', $array1094);

$output1093 .= '][disabled]=0';
$arguments1091['query'] = $output1093;
// Rendering Array
$array1095 = array();
$array1096 = array (
);$array1095['redirect'] = $renderingContext->getVariableProvider()->getByPath('returnUrl', $array1096);
$arguments1091['arguments'] = $array1095;

$output1090 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments1091, $renderChildrenClosure1092, $renderingContext)]);

$output1090 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1098 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1097 = array();
$arguments1097['key'] = NULL;
$arguments1097['id'] = NULL;
$arguments1097['default'] = NULL;
$arguments1097['arguments'] = NULL;
$arguments1097['extensionName'] = NULL;
$arguments1097['languageKey'] = NULL;
$arguments1097['alternativeLanguageKeys'] = NULL;
$arguments1097['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_mod_web_list.xlf:unHide';

$output1090 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1097, $renderChildrenClosure1098, $renderingContext)]);

$output1090 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1100 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1099 = array();
$arguments1099['identifier'] = NULL;
$arguments1099['size'] = 'small';
$arguments1099['overlay'] = NULL;
$arguments1099['state'] = 'default';
$arguments1099['alternativeMarkupIdentifier'] = NULL;
$arguments1099['identifier'] = 'actions-edit-unhide';

$output1090 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1099, $renderChildrenClosure1100, $renderingContext);

$output1090 .= '</a>
                                    ';
return $output1090;
};
$arguments1088['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1101 = '';

$output1101 .= '
                                        <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure1103 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1102 = array();
$arguments1102['route'] = NULL;
$arguments1102['arguments'] = array (
);
$arguments1102['query'] = NULL;
$arguments1102['currentUrlParameterName'] = NULL;
$arguments1102['route'] = 'tce_db';
$output1104 = '';

$output1104 .= 'data[sys_redirect][';
$array1105 = array (
);
$output1104 .= $renderingContext->getVariableProvider()->getByPath('redirect.uid', $array1105);

$output1104 .= '][disabled]=1';
$arguments1102['query'] = $output1104;
// Rendering Array
$array1106 = array();
$array1107 = array (
);$array1106['redirect'] = $renderingContext->getVariableProvider()->getByPath('returnUrl', $array1107);
$arguments1102['arguments'] = $array1106;

$output1101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments1102, $renderChildrenClosure1103, $renderingContext)]);

$output1101 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1109 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1108 = array();
$arguments1108['key'] = NULL;
$arguments1108['id'] = NULL;
$arguments1108['default'] = NULL;
$arguments1108['arguments'] = NULL;
$arguments1108['extensionName'] = NULL;
$arguments1108['languageKey'] = NULL;
$arguments1108['alternativeLanguageKeys'] = NULL;
$arguments1108['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_mod_web_list.xlf:hide';

$output1101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1108, $renderChildrenClosure1109, $renderingContext)]);

$output1101 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1111 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1110 = array();
$arguments1110['identifier'] = NULL;
$arguments1110['size'] = 'small';
$arguments1110['overlay'] = NULL;
$arguments1110['state'] = 'default';
$arguments1110['alternativeMarkupIdentifier'] = NULL;
$arguments1110['identifier'] = 'actions-edit-hide';

$output1101 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1110, $renderChildrenClosure1111, $renderingContext);

$output1101 .= '</a>
                                    ';
return $output1101;
};

$output830 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1088, $renderChildrenClosure1089, $renderingContext);

$output830 .= '
                                <a class="btn btn-default t3js-modal-trigger"
                                    href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure1143 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1142 = array();
$arguments1142['route'] = NULL;
$arguments1142['arguments'] = array (
);
$arguments1142['query'] = NULL;
$arguments1142['currentUrlParameterName'] = NULL;
$arguments1142['route'] = 'tce_db';
$output1144 = '';

$output1144 .= 'cmd[sys_redirect][';
$array1145 = array (
);
$output1144 .= $renderingContext->getVariableProvider()->getByPath('redirect.uid', $array1145);

$output1144 .= '][delete]=1';
$arguments1142['query'] = $output1144;
// Rendering Array
$array1146 = array();
$array1147 = array (
);$array1146['redirect'] = $renderingContext->getVariableProvider()->getByPath('returnUrl', $array1147);
$arguments1142['arguments'] = $array1146;

$output830 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments1142, $renderChildrenClosure1143, $renderingContext)]);

$output830 .= '"
                                    title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1149 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1148 = array();
$arguments1148['key'] = NULL;
$arguments1148['id'] = NULL;
$arguments1148['default'] = NULL;
$arguments1148['arguments'] = NULL;
$arguments1148['extensionName'] = NULL;
$arguments1148['languageKey'] = NULL;
$arguments1148['alternativeLanguageKeys'] = NULL;
$arguments1148['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_mod_web_list.xlf:delete';

$output830 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1148, $renderChildrenClosure1149, $renderingContext)]);

$output830 .= '"
                                    data-severity="warning"
                                    data-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1151 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1150 = array();
$arguments1150['key'] = NULL;
$arguments1150['id'] = NULL;
$arguments1150['default'] = NULL;
$arguments1150['arguments'] = NULL;
$arguments1150['extensionName'] = NULL;
$arguments1150['languageKey'] = NULL;
$arguments1150['alternativeLanguageKeys'] = NULL;
$arguments1150['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_alt_doc.xlf:label.confirm.delete_record.title';

$output830 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1150, $renderChildrenClosure1151, $renderingContext)]);

$output830 .= '"
                                    data-content="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1153 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1152 = array();
$arguments1152['key'] = NULL;
$arguments1152['id'] = NULL;
$arguments1152['default'] = NULL;
$arguments1152['arguments'] = NULL;
$arguments1152['extensionName'] = NULL;
$arguments1152['languageKey'] = NULL;
$arguments1152['alternativeLanguageKeys'] = NULL;
$arguments1152['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_alt_doc.xlf:deleteWarning';

$output830 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1152, $renderChildrenClosure1153, $renderingContext)]);

$output830 .= '"
                                    data-button-close-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1155 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1154 = array();
$arguments1154['key'] = NULL;
$arguments1154['id'] = NULL;
$arguments1154['default'] = NULL;
$arguments1154['arguments'] = NULL;
$arguments1154['extensionName'] = NULL;
$arguments1154['languageKey'] = NULL;
$arguments1154['alternativeLanguageKeys'] = NULL;
$arguments1154['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_alt_doc.xlf:buttons.confirm.delete_record.no';

$output830 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1154, $renderChildrenClosure1155, $renderingContext)]);

$output830 .= '">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1157 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1156 = array();
$arguments1156['identifier'] = NULL;
$arguments1156['size'] = 'small';
$arguments1156['overlay'] = NULL;
$arguments1156['state'] = 'default';
$arguments1156['alternativeMarkupIdentifier'] = NULL;
$arguments1156['identifier'] = 'actions-delete';

$output830 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1156, $renderChildrenClosure1157, $renderingContext);

$output830 .= '
                                </a>
                            </div>
                        </td>
                    </tr>
                ';
return $output830;
};
$arguments827 = array();
$arguments827['each'] = NULL;
$arguments827['as'] = NULL;
$arguments827['key'] = NULL;
$arguments827['reverse'] = false;
$arguments827['iteration'] = NULL;
$array829 = array (
);$arguments827['each'] = $renderingContext->getVariableProvider()->getByPath('redirects', $array829);
$arguments827['key'] = 'domainName';
$arguments827['as'] = 'redirect';

$output807 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments827, $renderChildrenClosure828, $renderingContext);

$output807 .= '
            </tbody>
        </table>
    </div>
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1159 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1158 = array();
$arguments1158['section'] = NULL;
$arguments1158['partial'] = NULL;
$arguments1158['delegate'] = NULL;
$arguments1158['renderable'] = NULL;
$arguments1158['arguments'] = array (
);
$arguments1158['optional'] = false;
$arguments1158['default'] = NULL;
$arguments1158['contentAs'] = NULL;
$arguments1158['debug'] = true;
$arguments1158['partial'] = 'Pagination';
$arguments1158['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output807 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1158, $renderChildrenClosure1159, $renderingContext);

$output807 .= '
';
return $output807;
};
$arguments805 = array();
$arguments805['name'] = NULL;
$arguments805['name'] = 'table';

$output598 .= NULL;

$output598 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure1162 = function() use ($renderingContext, $self) {
$output1163 = '';

$output1163 .= '
    <form action="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure1165 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1164 = array();
$arguments1164['route'] = NULL;
$arguments1164['parameters'] = array (
);
$arguments1164['referenceType'] = 'absolute';
$arguments1164['route'] = 'site_redirects';
// Rendering Array
$array1166 = array();
$array1166['action'] = 'overview';
$arguments1164['parameters'] = $array1166;

$output1163 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments1164, $renderChildrenClosure1165, $renderingContext)]);

$output1163 .= '"
        method="post"
        enctype="multipart/form-data"
        name="demand"
        class="form-inline form-inline-spaced">

        <div class="form-group">
            <label for="demand-source-host">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1168 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1167 = array();
$arguments1167['key'] = NULL;
$arguments1167['id'] = NULL;
$arguments1167['default'] = NULL;
$arguments1167['arguments'] = NULL;
$arguments1167['extensionName'] = NULL;
$arguments1167['languageKey'] = NULL;
$arguments1167['alternativeLanguageKeys'] = NULL;
$arguments1167['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:source_host';

$output1163 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1167, $renderChildrenClosure1168, $renderingContext)]);

$output1163 .= '</label>
            <select id="demand-source-host" class="form-control input-sm" name="demand[source_host]" data-on-change="submit">
                <option value="">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1170 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1169 = array();
$arguments1169['key'] = NULL;
$arguments1169['id'] = NULL;
$arguments1169['default'] = NULL;
$arguments1169['arguments'] = NULL;
$arguments1169['extensionName'] = NULL;
$arguments1169['languageKey'] = NULL;
$arguments1169['alternativeLanguageKeys'] = NULL;
$arguments1169['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:filter.source_host.showAll';

$output1163 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1169, $renderChildrenClosure1170, $renderingContext)]);

$output1163 .= '</option>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure1172 = function() use ($renderingContext, $self) {
$output1174 = '';

$output1174 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\Select\OptionViewHelper
$renderChildrenClosure1176 = function() use ($renderingContext, $self) {
$array1182 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('host.name', $array1182)]);
};
$arguments1175 = array();
$arguments1175['class'] = NULL;
$arguments1175['dir'] = NULL;
$arguments1175['id'] = NULL;
$arguments1175['lang'] = NULL;
$arguments1175['style'] = NULL;
$arguments1175['title'] = NULL;
$arguments1175['accesskey'] = NULL;
$arguments1175['tabindex'] = NULL;
$arguments1175['onclick'] = NULL;
$arguments1175['selected'] = NULL;
$arguments1175['additionalAttributes'] = NULL;
$arguments1175['data'] = NULL;
$arguments1175['value'] = NULL;
$array1177 = array (
);$arguments1175['value'] = $renderingContext->getVariableProvider()->getByPath('host.name', $array1177);
// Rendering Boolean node
// Rendering Array
$array1178 = array();
$array1179 = array (
);$array1178['0'] = $renderingContext->getVariableProvider()->getByPath('host.name', $array1179);
$array1178['1'] = ' === ';
$array1180 = array (
);$array1178['2'] = $renderingContext->getVariableProvider()->getByPath('demand.sourceHost', $array1180);

$expression1181 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments1175['selected'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1181(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1178)
					),
					$renderingContext
				);

$output1174 .= TYPO3\CMS\Fluid\ViewHelpers\Form\Select\OptionViewHelper::renderStatic($arguments1175, $renderChildrenClosure1176, $renderingContext);

$output1174 .= '
                ';
return $output1174;
};
$arguments1171 = array();
$arguments1171['each'] = NULL;
$arguments1171['as'] = NULL;
$arguments1171['key'] = NULL;
$arguments1171['reverse'] = false;
$arguments1171['iteration'] = NULL;
$array1173 = array (
);$arguments1171['each'] = $renderingContext->getVariableProvider()->getByPath('hosts', $array1173);
$arguments1171['as'] = 'host';

$output1163 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1171, $renderChildrenClosure1172, $renderingContext);

$output1163 .= '
            </select>
        </div>
        <div class="form-group">
            <label for="demand-source-path">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1184 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1183 = array();
$arguments1183['key'] = NULL;
$arguments1183['id'] = NULL;
$arguments1183['default'] = NULL;
$arguments1183['arguments'] = NULL;
$arguments1183['extensionName'] = NULL;
$arguments1183['languageKey'] = NULL;
$arguments1183['alternativeLanguageKeys'] = NULL;
$arguments1183['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:source_path';

$output1163 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1183, $renderChildrenClosure1184, $renderingContext)]);

$output1163 .= '</label>
            <input type="text" id="demand-source-path" class="form-control input-sm" name="demand[source_path]" value="';
$array1185 = array (
);
$output1163 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('demand.sourcePath', $array1185)]);

$output1163 .= '"/>
        </div>
        <div class="form-group">
            <label for="demand-target">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1187 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1186 = array();
$arguments1186['key'] = NULL;
$arguments1186['id'] = NULL;
$arguments1186['default'] = NULL;
$arguments1186['arguments'] = NULL;
$arguments1186['extensionName'] = NULL;
$arguments1186['languageKey'] = NULL;
$arguments1186['alternativeLanguageKeys'] = NULL;
$arguments1186['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:filter.destination';

$output1163 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1186, $renderChildrenClosure1187, $renderingContext)]);

$output1163 .= '</label>
            <input type="text" id="demand-target" class="form-control input-sm" name="demand[target]" value="';
$array1188 = array (
);
$output1163 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('demand.target', $array1188)]);

$output1163 .= '"/>
        </div>
        <div class="form-group">
            <label for="demand-target-status-code">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1190 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1189 = array();
$arguments1189['key'] = NULL;
$arguments1189['id'] = NULL;
$arguments1189['default'] = NULL;
$arguments1189['arguments'] = NULL;
$arguments1189['extensionName'] = NULL;
$arguments1189['languageKey'] = NULL;
$arguments1189['alternativeLanguageKeys'] = NULL;
$arguments1189['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:filter.targetStatusCode';

$output1163 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1189, $renderChildrenClosure1190, $renderingContext)]);

$output1163 .= '</label>
            <select id="demand-target-status-code" class="form-control input-sm" name="demand[target_statuscode]" data-on-change="submit">
                <option value="">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1192 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1191 = array();
$arguments1191['key'] = NULL;
$arguments1191['id'] = NULL;
$arguments1191['default'] = NULL;
$arguments1191['arguments'] = NULL;
$arguments1191['extensionName'] = NULL;
$arguments1191['languageKey'] = NULL;
$arguments1191['alternativeLanguageKeys'] = NULL;
$arguments1191['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:filter.source_host.showAll';

$output1163 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1191, $renderChildrenClosure1192, $renderingContext)]);

$output1163 .= '</option>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure1194 = function() use ($renderingContext, $self) {
$output1196 = '';

$output1196 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\Select\OptionViewHelper
$renderChildrenClosure1198 = function() use ($renderingContext, $self) {
$array1204 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('statusCode.code', $array1204)]);
};
$arguments1197 = array();
$arguments1197['class'] = NULL;
$arguments1197['dir'] = NULL;
$arguments1197['id'] = NULL;
$arguments1197['lang'] = NULL;
$arguments1197['style'] = NULL;
$arguments1197['title'] = NULL;
$arguments1197['accesskey'] = NULL;
$arguments1197['tabindex'] = NULL;
$arguments1197['onclick'] = NULL;
$arguments1197['selected'] = NULL;
$arguments1197['additionalAttributes'] = NULL;
$arguments1197['data'] = NULL;
$arguments1197['value'] = NULL;
$array1199 = array (
);$arguments1197['value'] = $renderingContext->getVariableProvider()->getByPath('statusCode.code', $array1199);
// Rendering Boolean node
// Rendering Array
$array1200 = array();
$array1201 = array (
);$array1200['0'] = $renderingContext->getVariableProvider()->getByPath('statusCode.code', $array1201);
$array1200['1'] = ' === ';
$array1202 = array (
);$array1200['2'] = $renderingContext->getVariableProvider()->getByPath('demand.statusCode', $array1202);

$expression1203 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments1197['selected'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1203(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1200)
					),
					$renderingContext
				);

$output1196 .= TYPO3\CMS\Fluid\ViewHelpers\Form\Select\OptionViewHelper::renderStatic($arguments1197, $renderChildrenClosure1198, $renderingContext);

$output1196 .= '
                ';
return $output1196;
};
$arguments1193 = array();
$arguments1193['each'] = NULL;
$arguments1193['as'] = NULL;
$arguments1193['key'] = NULL;
$arguments1193['reverse'] = false;
$arguments1193['iteration'] = NULL;
$array1195 = array (
);$arguments1193['each'] = $renderingContext->getVariableProvider()->getByPath('statusCodes', $array1195);
$arguments1193['as'] = 'statusCode';

$output1163 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1193, $renderChildrenClosure1194, $renderingContext);

$output1163 .= '
            </select>
        </div>
        <div class="form-group">
            <input type="submit" value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1206 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1205 = array();
$arguments1205['key'] = NULL;
$arguments1205['id'] = NULL;
$arguments1205['default'] = NULL;
$arguments1205['arguments'] = NULL;
$arguments1205['extensionName'] = NULL;
$arguments1205['languageKey'] = NULL;
$arguments1205['alternativeLanguageKeys'] = NULL;
$arguments1205['key'] = 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:filter.sendButton';

$output1163 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1205, $renderChildrenClosure1206, $renderingContext)]);

$output1163 .= '" class="btn btn-default btn-sm" />
        </div>
    </form>
';
return $output1163;
};
$arguments1161 = array();
$arguments1161['name'] = NULL;
$arguments1161['name'] = 'filter';

$output598 .= NULL;

$output598 .= '

';

return $output598;
}


}
#