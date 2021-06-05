<?php

class partial_Navigation_Breadcrumb_80ba6c5c3433a8faa5cb919d04a1dca95a16467d extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) '';
}
public function hasLayout() {
return FALSE;
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
));
}

/**
 * section BreadcrumbTitle
 */
public function section_a63f4c38be1ff3ab1413e02ed6d0bb4cb075ea0d(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output7 = '';

$output7 .= '
        <span class="breadcrumb-icon">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$output28 = '';

$output28 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$output31 = '';

$output31 .= '
                    ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments32 = array();
$arguments32['image'] = NULL;
$arguments32['src'] = NULL;
$arguments32['class'] = NULL;
$arguments32['width'] = NULL;
$arguments32['height'] = NULL;
$array34 = array (
);$arguments32['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array34);
$array35 = array (
);$arguments32['width'] = $renderingContext->getVariableProvider()->getByPath('theme.breadcrumb.icon.width', $array35);
$array36 = array (
);$arguments32['height'] = $renderingContext->getVariableProvider()->getByPath('theme.breadcrumb.icon.height', $array36);

$output31 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output31 .= '
                ';
return $output31;
};
$arguments29 = array();

$output28 .= '';

$output28 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$output39 = '';

$output39 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return NULL;
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
$arguments40['alt'] = NULL;
$arguments40['ismap'] = NULL;
$arguments40['longdesc'] = NULL;
$arguments40['usemap'] = NULL;
$arguments40['loading'] = NULL;
$arguments40['src'] = '';
$arguments40['treatIdAsReference'] = false;
$arguments40['image'] = NULL;
$arguments40['crop'] = NULL;
$arguments40['cropVariant'] = 'default';
$arguments40['fileExtension'] = NULL;
$arguments40['width'] = NULL;
$arguments40['height'] = NULL;
$arguments40['minWidth'] = NULL;
$arguments40['minHeight'] = NULL;
$arguments40['maxWidth'] = NULL;
$arguments40['maxHeight'] = NULL;
$arguments40['absolute'] = false;
// Rendering Array
$array42 = array();
$array42['loading'] = 'lazy';
$arguments40['additionalAttributes'] = $array42;
$array43 = array (
);$arguments40['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array43);
$array44 = array (
);$arguments40['alt'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.alternative', $array44);
$array45 = array (
);$arguments40['title'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.title', $array45);
$array46 = array (
);$arguments40['width'] = $renderingContext->getVariableProvider()->getByPath('theme.breadcrumb.icon.width', $array46);
$array47 = array (
);$arguments40['height'] = $renderingContext->getVariableProvider()->getByPath('theme.breadcrumb.icon.height', $array47);

$output39 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output39 .= '
                ';
return $output39;
};
$arguments37 = array();
$arguments37['if'] = NULL;

$output28 .= '';

$output28 .= '
            ';
return $output28;
};
$arguments8 = array();
$arguments8['then'] = NULL;
$arguments8['else'] = NULL;
$arguments8['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array25 = array();
$array26 = array (
);$array25['0'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.extension', $array26);
$array25['1'] = ' === svg';

$expression27 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments8['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression27(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array25)
					),
					$renderingContext
				);
$arguments8['__thenClosure'] = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
                    ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['image'] = NULL;
$arguments11['src'] = NULL;
$arguments11['class'] = NULL;
$arguments11['width'] = NULL;
$arguments11['height'] = NULL;
$array13 = array (
);$arguments11['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array13);
$array14 = array (
);$arguments11['width'] = $renderingContext->getVariableProvider()->getByPath('theme.breadcrumb.icon.width', $array14);
$array15 = array (
);$arguments11['height'] = $renderingContext->getVariableProvider()->getByPath('theme.breadcrumb.icon.height', $array15);

$output10 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '
                ';
return $output10;
};
$arguments8['__elseClosures'][] = function() use ($renderingContext, $self) {
$output16 = '';

$output16 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['additionalAttributes'] = NULL;
$arguments17['data'] = NULL;
$arguments17['class'] = NULL;
$arguments17['dir'] = NULL;
$arguments17['id'] = NULL;
$arguments17['lang'] = NULL;
$arguments17['style'] = NULL;
$arguments17['title'] = NULL;
$arguments17['accesskey'] = NULL;
$arguments17['tabindex'] = NULL;
$arguments17['onclick'] = NULL;
$arguments17['alt'] = NULL;
$arguments17['ismap'] = NULL;
$arguments17['longdesc'] = NULL;
$arguments17['usemap'] = NULL;
$arguments17['loading'] = NULL;
$arguments17['src'] = '';
$arguments17['treatIdAsReference'] = false;
$arguments17['image'] = NULL;
$arguments17['crop'] = NULL;
$arguments17['cropVariant'] = 'default';
$arguments17['fileExtension'] = NULL;
$arguments17['width'] = NULL;
$arguments17['height'] = NULL;
$arguments17['minWidth'] = NULL;
$arguments17['minHeight'] = NULL;
$arguments17['maxWidth'] = NULL;
$arguments17['maxHeight'] = NULL;
$arguments17['absolute'] = false;
// Rendering Array
$array19 = array();
$array19['loading'] = 'lazy';
$arguments17['additionalAttributes'] = $array19;
$array20 = array (
);$arguments17['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array20);
$array21 = array (
);$arguments17['alt'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.alternative', $array21);
$array22 = array (
);$arguments17['title'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.title', $array22);
$array23 = array (
);$arguments17['width'] = $renderingContext->getVariableProvider()->getByPath('theme.breadcrumb.icon.width', $array23);
$array24 = array (
);$arguments17['height'] = $renderingContext->getVariableProvider()->getByPath('theme.breadcrumb.icon.height', $array24);

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output16 .= '
                ';
return $output16;
};

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output7 .= '
        </span>
    ';
return $output7;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('theme.breadcrumb.icon.enable', $array4);
$array3['1'] = ' && ';
$array5 = array (
);$array3['2'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array5);

$expression6 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression6(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = $renderChildrenClosure2;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
    <span class="breadcrumb-text">';
$array48 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array48)]);

$output0 .= '</span>
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output49 = '';

$output49 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
$output55 = '';

$output55 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
$output61 = '';

$output61 .= '
        <nav class="breadcrumb-section" aria-label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments62 = array();
$arguments62['key'] = NULL;
$arguments62['id'] = NULL;
$arguments62['default'] = NULL;
$arguments62['arguments'] = NULL;
$arguments62['extensionName'] = NULL;
$arguments62['languageKey'] = NULL;
$arguments62['alternativeLanguageKeys'] = NULL;
$arguments62['key'] = 'breadcrumb.label';
$arguments62['extensionName'] = 'bootstrap_package';

$output61 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext)]);

$output61 .= '">
            <div class="container">
                <p class="sr-only" id="breadcrumb">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments64 = array();
$arguments64['key'] = NULL;
$arguments64['id'] = NULL;
$arguments64['default'] = NULL;
$arguments64['arguments'] = NULL;
$arguments64['extensionName'] = NULL;
$arguments64['languageKey'] = NULL;
$arguments64['alternativeLanguageKeys'] = NULL;
$arguments64['key'] = 'breadcrumb';
$arguments64['extensionName'] = 'bootstrap_package';

$output61 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext)]);

$output61 .= '</p>
                <ol class="breadcrumb">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
$output69 = '';

$output69 .= '
                        <li class="breadcrumb-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments70 = array();
$arguments70['then'] = NULL;
$arguments70['else'] = NULL;
$arguments70['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array72 = array();
$array73 = array (
);$array72['0'] = $renderingContext->getVariableProvider()->getByPath('item.current', $array73);

$expression74 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments70['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression74(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array72)
					),
					$renderingContext
				);
$arguments70['then'] = ' active';

$output69 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output69 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments75 = array();
$arguments75['then'] = NULL;
$arguments75['else'] = NULL;
$arguments75['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array77 = array();
$array78 = array (
);$array77['0'] = $renderingContext->getVariableProvider()->getByPath('item.current', $array78);

$expression79 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments75['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression79(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array77)
					),
					$renderingContext
				);
$arguments75['then'] = ' aria-current="page"';

$output69 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output69 .= '>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
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
$arguments111['section'] = 'BreadcrumbTitle';
// Rendering Array
$array113 = array();
$array114 = array (
);$array113['item'] = $renderingContext->getVariableProvider()->getByPath('item', $array114);
$array115 = array (
);$array113['theme'] = $renderingContext->getVariableProvider()->getByPath('theme', $array115);
$arguments111['arguments'] = $array113;

$output110 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext);

$output110 .= '
                                ';
return $output110;
};
$arguments108 = array();

$output107 .= '';

$output107 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
$output118 = '';

$output118 .= '
                                    <a class="breadcrumb-link" href="';
$array119 = array (
);
$output118 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.link', $array119)]);

$output118 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments120 = array();
$arguments120['then'] = NULL;
$arguments120['else'] = NULL;
$arguments120['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array122 = array();
$array123 = array (
);$array122['0'] = $renderingContext->getVariableProvider()->getByPath('item.target', $array123);

$expression124 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments120['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression124(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array122)
					),
					$renderingContext
				);
$output125 = '';

$output125 .= ' target="';
$array126 = array (
);
$output125 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.target', $array126)]);

$output125 .= '"';
$arguments120['then'] = $output125;

$output118 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments120, $renderChildrenClosure121, $renderingContext);

$output118 .= ' title="';
$array127 = array (
);
$output118 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array127)]);

$output118 .= '">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments128 = array();
$arguments128['section'] = NULL;
$arguments128['partial'] = NULL;
$arguments128['delegate'] = NULL;
$arguments128['renderable'] = NULL;
$arguments128['arguments'] = array (
);
$arguments128['optional'] = false;
$arguments128['default'] = NULL;
$arguments128['contentAs'] = NULL;
$arguments128['debug'] = true;
$arguments128['section'] = 'BreadcrumbTitle';
// Rendering Array
$array130 = array();
$array131 = array (
);$array130['item'] = $renderingContext->getVariableProvider()->getByPath('item', $array131);
$array132 = array (
);$array130['theme'] = $renderingContext->getVariableProvider()->getByPath('theme', $array132);
$arguments128['arguments'] = $array130;

$output118 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext);

$output118 .= '
                                    </a>
                                ';
return $output118;
};
$arguments116 = array();
$arguments116['if'] = NULL;

$output107 .= '';

$output107 .= '
                            ';
return $output107;
};
$arguments80 = array();
$arguments80['then'] = NULL;
$arguments80['else'] = NULL;
$arguments80['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array103 = array();
$array104 = array (
);$array103['0'] = $renderingContext->getVariableProvider()->getByPath('item.current', $array104);
$array103['1'] = ' && ';
$array105 = array (
);$array103['2'] = $renderingContext->getVariableProvider()->getByPath('breadcrumbExtendedValue', $array105);
$array103['3'] = ' == \'\'';

$expression106 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]) == ''));};
$arguments80['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression106(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array103)
					),
					$renderingContext
				);
$arguments80['__thenClosure'] = function() use ($renderingContext, $self) {
$output82 = '';

$output82 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments83 = array();
$arguments83['section'] = NULL;
$arguments83['partial'] = NULL;
$arguments83['delegate'] = NULL;
$arguments83['renderable'] = NULL;
$arguments83['arguments'] = array (
);
$arguments83['optional'] = false;
$arguments83['default'] = NULL;
$arguments83['contentAs'] = NULL;
$arguments83['debug'] = true;
$arguments83['section'] = 'BreadcrumbTitle';
// Rendering Array
$array85 = array();
$array86 = array (
);$array85['item'] = $renderingContext->getVariableProvider()->getByPath('item', $array86);
$array87 = array (
);$array85['theme'] = $renderingContext->getVariableProvider()->getByPath('theme', $array87);
$arguments83['arguments'] = $array85;

$output82 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);

$output82 .= '
                                ';
return $output82;
};
$arguments80['__elseClosures'][] = function() use ($renderingContext, $self) {
$output88 = '';

$output88 .= '
                                    <a class="breadcrumb-link" href="';
$array89 = array (
);
$output88 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.link', $array89)]);

$output88 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments90 = array();
$arguments90['then'] = NULL;
$arguments90['else'] = NULL;
$arguments90['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array92 = array();
$array93 = array (
);$array92['0'] = $renderingContext->getVariableProvider()->getByPath('item.target', $array93);

$expression94 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments90['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression94(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array92)
					),
					$renderingContext
				);
$output95 = '';

$output95 .= ' target="';
$array96 = array (
);
$output95 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.target', $array96)]);

$output95 .= '"';
$arguments90['then'] = $output95;

$output88 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output88 .= ' title="';
$array97 = array (
);
$output88 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array97)]);

$output88 .= '">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments98 = array();
$arguments98['section'] = NULL;
$arguments98['partial'] = NULL;
$arguments98['delegate'] = NULL;
$arguments98['renderable'] = NULL;
$arguments98['arguments'] = array (
);
$arguments98['optional'] = false;
$arguments98['default'] = NULL;
$arguments98['contentAs'] = NULL;
$arguments98['debug'] = true;
$arguments98['section'] = 'BreadcrumbTitle';
// Rendering Array
$array100 = array();
$array101 = array (
);$array100['item'] = $renderingContext->getVariableProvider()->getByPath('item', $array101);
$array102 = array (
);$array100['theme'] = $renderingContext->getVariableProvider()->getByPath('theme', $array102);
$arguments98['arguments'] = $array100;

$output88 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext);

$output88 .= '
                                    </a>
                                ';
return $output88;
};

$output69 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output69 .= '
                        </li>
                    ';
return $output69;
};
$arguments66 = array();
$arguments66['each'] = NULL;
$arguments66['as'] = NULL;
$arguments66['key'] = NULL;
$arguments66['reverse'] = false;
$arguments66['iteration'] = NULL;
$array68 = array (
);$arguments66['each'] = $renderingContext->getVariableProvider()->getByPath('breadcrumb', $array68);
$arguments66['as'] = 'item';

$output61 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output61 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
$output138 = '';

$output138 .= '
                        <li class="breadcrumb-item active" aria-current="page">
                            <span class="breadcrumb-text">';
$array139 = array (
);
$output138 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('breadcrumbExtendedValue', $array139)]);

$output138 .= '</span>
                        </li>
                    ';
return $output138;
};
$arguments133 = array();
$arguments133['then'] = NULL;
$arguments133['else'] = NULL;
$arguments133['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array135 = array();
$array136 = array (
);$array135['0'] = $renderingContext->getVariableProvider()->getByPath('breadcrumbExtendedValue', $array136);

$expression137 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments133['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression137(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array135)
					),
					$renderingContext
				);
$arguments133['__thenClosure'] = $renderChildrenClosure134;

$output61 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext);

$output61 .= '
                </ol>
            </div>
        </nav>
    ';
return $output61;
};
$arguments56 = array();
$arguments56['then'] = NULL;
$arguments56['else'] = NULL;
$arguments56['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array58 = array();
$array59 = array (
);$array58['0'] = $renderingContext->getVariableProvider()->getByPath('breadcrumb', $array59);

$expression60 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments56['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression60(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array58)
					),
					$renderingContext
				);
$arguments56['__thenClosure'] = $renderChildrenClosure57;

$output55 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output55 .= '
';
return $output55;
};
$arguments50 = array();
$arguments50['then'] = NULL;
$arguments50['else'] = NULL;
$arguments50['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array52 = array();
$array53 = array (
);$array52['0'] = $renderingContext->getVariableProvider()->getByPath('theme.breadcrumb.enable', $array53);

$expression54 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments50['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression54(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array52)
					),
					$renderingContext
				);
$arguments50['__thenClosure'] = $renderChildrenClosure51;

$output49 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

$output49 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
$output142 = '';

$output142 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
$output149 = '';

$output149 .= '
        <span class="breadcrumb-icon">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
$output170 = '';

$output170 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
$output173 = '';

$output173 .= '
                    ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments174 = array();
$arguments174['image'] = NULL;
$arguments174['src'] = NULL;
$arguments174['class'] = NULL;
$arguments174['width'] = NULL;
$arguments174['height'] = NULL;
$array176 = array (
);$arguments174['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array176);
$array177 = array (
);$arguments174['width'] = $renderingContext->getVariableProvider()->getByPath('theme.breadcrumb.icon.width', $array177);
$array178 = array (
);$arguments174['height'] = $renderingContext->getVariableProvider()->getByPath('theme.breadcrumb.icon.height', $array178);

$output173 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments174, $renderChildrenClosure175, $renderingContext);

$output173 .= '
                ';
return $output173;
};
$arguments171 = array();

$output170 .= '';

$output170 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
$output181 = '';

$output181 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments182 = array();
$arguments182['additionalAttributes'] = NULL;
$arguments182['data'] = NULL;
$arguments182['class'] = NULL;
$arguments182['dir'] = NULL;
$arguments182['id'] = NULL;
$arguments182['lang'] = NULL;
$arguments182['style'] = NULL;
$arguments182['title'] = NULL;
$arguments182['accesskey'] = NULL;
$arguments182['tabindex'] = NULL;
$arguments182['onclick'] = NULL;
$arguments182['alt'] = NULL;
$arguments182['ismap'] = NULL;
$arguments182['longdesc'] = NULL;
$arguments182['usemap'] = NULL;
$arguments182['loading'] = NULL;
$arguments182['src'] = '';
$arguments182['treatIdAsReference'] = false;
$arguments182['image'] = NULL;
$arguments182['crop'] = NULL;
$arguments182['cropVariant'] = 'default';
$arguments182['fileExtension'] = NULL;
$arguments182['width'] = NULL;
$arguments182['height'] = NULL;
$arguments182['minWidth'] = NULL;
$arguments182['minHeight'] = NULL;
$arguments182['maxWidth'] = NULL;
$arguments182['maxHeight'] = NULL;
$arguments182['absolute'] = false;
// Rendering Array
$array184 = array();
$array184['loading'] = 'lazy';
$arguments182['additionalAttributes'] = $array184;
$array185 = array (
);$arguments182['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array185);
$array186 = array (
);$arguments182['alt'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.alternative', $array186);
$array187 = array (
);$arguments182['title'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.title', $array187);
$array188 = array (
);$arguments182['width'] = $renderingContext->getVariableProvider()->getByPath('theme.breadcrumb.icon.width', $array188);
$array189 = array (
);$arguments182['height'] = $renderingContext->getVariableProvider()->getByPath('theme.breadcrumb.icon.height', $array189);

$output181 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments182, $renderChildrenClosure183, $renderingContext);

$output181 .= '
                ';
return $output181;
};
$arguments179 = array();
$arguments179['if'] = NULL;

$output170 .= '';

$output170 .= '
            ';
return $output170;
};
$arguments150 = array();
$arguments150['then'] = NULL;
$arguments150['else'] = NULL;
$arguments150['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array167 = array();
$array168 = array (
);$array167['0'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.extension', $array168);
$array167['1'] = ' === svg';

$expression169 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments150['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression169(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array167)
					),
					$renderingContext
				);
$arguments150['__thenClosure'] = function() use ($renderingContext, $self) {
$output152 = '';

$output152 .= '
                    ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments153 = array();
$arguments153['image'] = NULL;
$arguments153['src'] = NULL;
$arguments153['class'] = NULL;
$arguments153['width'] = NULL;
$arguments153['height'] = NULL;
$array155 = array (
);$arguments153['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array155);
$array156 = array (
);$arguments153['width'] = $renderingContext->getVariableProvider()->getByPath('theme.breadcrumb.icon.width', $array156);
$array157 = array (
);$arguments153['height'] = $renderingContext->getVariableProvider()->getByPath('theme.breadcrumb.icon.height', $array157);

$output152 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext);

$output152 .= '
                ';
return $output152;
};
$arguments150['__elseClosures'][] = function() use ($renderingContext, $self) {
$output158 = '';

$output158 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments159 = array();
$arguments159['additionalAttributes'] = NULL;
$arguments159['data'] = NULL;
$arguments159['class'] = NULL;
$arguments159['dir'] = NULL;
$arguments159['id'] = NULL;
$arguments159['lang'] = NULL;
$arguments159['style'] = NULL;
$arguments159['title'] = NULL;
$arguments159['accesskey'] = NULL;
$arguments159['tabindex'] = NULL;
$arguments159['onclick'] = NULL;
$arguments159['alt'] = NULL;
$arguments159['ismap'] = NULL;
$arguments159['longdesc'] = NULL;
$arguments159['usemap'] = NULL;
$arguments159['loading'] = NULL;
$arguments159['src'] = '';
$arguments159['treatIdAsReference'] = false;
$arguments159['image'] = NULL;
$arguments159['crop'] = NULL;
$arguments159['cropVariant'] = 'default';
$arguments159['fileExtension'] = NULL;
$arguments159['width'] = NULL;
$arguments159['height'] = NULL;
$arguments159['minWidth'] = NULL;
$arguments159['minHeight'] = NULL;
$arguments159['maxWidth'] = NULL;
$arguments159['maxHeight'] = NULL;
$arguments159['absolute'] = false;
// Rendering Array
$array161 = array();
$array161['loading'] = 'lazy';
$arguments159['additionalAttributes'] = $array161;
$array162 = array (
);$arguments159['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array162);
$array163 = array (
);$arguments159['alt'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.alternative', $array163);
$array164 = array (
);$arguments159['title'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.title', $array164);
$array165 = array (
);$arguments159['width'] = $renderingContext->getVariableProvider()->getByPath('theme.breadcrumb.icon.width', $array165);
$array166 = array (
);$arguments159['height'] = $renderingContext->getVariableProvider()->getByPath('theme.breadcrumb.icon.height', $array166);

$output158 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments159, $renderChildrenClosure160, $renderingContext);

$output158 .= '
                ';
return $output158;
};

$output149 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext);

$output149 .= '
        </span>
    ';
return $output149;
};
$arguments143 = array();
$arguments143['then'] = NULL;
$arguments143['else'] = NULL;
$arguments143['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array145 = array();
$array146 = array (
);$array145['0'] = $renderingContext->getVariableProvider()->getByPath('theme.breadcrumb.icon.enable', $array146);
$array145['1'] = ' && ';
$array147 = array (
);$array145['2'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array147);

$expression148 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments143['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression148(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array145)
					),
					$renderingContext
				);
$arguments143['__thenClosure'] = $renderChildrenClosure144;

$output142 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments143, $renderChildrenClosure144, $renderingContext);

$output142 .= '
    <span class="breadcrumb-text">';
$array190 = array (
);
$output142 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array190)]);

$output142 .= '</span>
';
return $output142;
};
$arguments140 = array();
$arguments140['name'] = NULL;
$arguments140['name'] = 'BreadcrumbTitle';

$output49 .= NULL;

$output49 .= '

';

return $output49;
}


}
#